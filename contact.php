<?php
require __DIR__ . '/includes/config.php';

$page_key   = 'contact';
$page_title = 'Contact & Booking';
$page_desc  = 'Call, WhatsApp or book your seat at Glam by Sanyukta, Narayanpur, Alwar.';

$errors = [];
$old    = ['name' => '', 'phone' => '', 'service' => BOOKING_SERVICES[0], 'date' => ''];

// ---- Handle booking form ------------------------------------------------
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $old['name']    = trim((string) ($_POST['name'] ?? ''));
    $old['phone']   = trim((string) ($_POST['phone'] ?? ''));
    $old['service'] = trim((string) ($_POST['service'] ?? ''));
    $old['date']    = trim((string) ($_POST['date'] ?? ''));

    $token = (string) ($_POST['csrf'] ?? '');
    if (!hash_equals(csrf_token(), $token)) {
        $errors[] = 'Your session expired. Please try again.';
    }
    // honeypot: real users never fill this
    if (trim((string) ($_POST['website'] ?? '')) !== '') {
        $errors[] = 'Could not send your request.';
    }
    if (str_len($old['name']) < 2 || str_len($old['name']) > 80) {
        $errors[] = 'Please add your name.';
    }
    if (!preg_match('/^[0-9+\-\s()]{8,18}$/', $old['phone'])) {
        $errors[] = 'Please add a valid phone number.';
    }
    if (!in_array($old['service'], BOOKING_SERVICES, true)) {
        $errors[] = 'Please choose a service.';
    }
    if ($old['date'] !== '') {
        $d = DateTime::createFromFormat('Y-m-d', $old['date']);
        if (!$d || $d->format('Y-m-d') !== $old['date']) {
            $errors[] = 'Please choose a valid date.';
        } elseif ($d < new DateTime('today')) {
            $errors[] = 'Please choose today or a future date.';
        }
    }

    if (!$errors) {
        $message = 'Hi ' . OWNER_NAME . ', I would like to book ' . $old['service']
                 . ($old['date'] !== '' ? ' on ' . $old['date'] : '')
                 . '. Name: ' . $old['name'] . ', Phone: ' . $old['phone'] . '.';

        // 1) keep a copy of the booking request (data/bookings.csv, blocked from the web by .htaccess)
        $safe = static fn(string $v): string => preg_match('/^[=+\-@]/', $v) ? "'" . $v : $v; // CSV-injection guard
        $fh = @fopen(__DIR__ . '/data/bookings.csv', 'ab');
        if ($fh) {
            if (flock($fh, LOCK_EX)) {
                fputcsv($fh, [date('Y-m-d H:i:s'), $safe($old['name']), $safe($old['phone']), $old['service'], $old['date'], $_SERVER['REMOTE_ADDR'] ?? '']);
                flock($fh, LOCK_UN);
            }
            fclose($fh);
        }

        // 2) optional email notification
        if (SEND_EMAIL_ON_BOOKING) {
            @mail(SITE_EMAIL, 'New booking request - ' . SITE_NAME, $message, "Content-Type: text/plain; charset=UTF-8\r\n");
        }

        // 3) Post/Redirect/Get so a refresh doesn't resubmit
        $_SESSION['booking_ok'] = ['name' => $old['name'], 'wa' => whatsapp_url($message)];
        unset($_SESSION['csrf']);
        header('Location: ' . page_url('contact') . '#booked');
        exit;
    }
}

$booked = $_SESSION['booking_ok'] ?? null;
unset($_SESSION['booking_ok']);

require __DIR__ . '/includes/header.php';
?>
<div class="pg show" id="p-contact"><section class="s pad"><div class="wrap sp" style="align-items:start">
<div><h1 style="font-size:clamp(40px,6.5vw,84px)"><span class="ln"><span>Reserve <i class="gt">your seat</i></span></span></h1><div class="ci" style="margin-top:30px"><p><b>Owner</b><?= e(OWNER_NAME) ?></p><p><b>Call or WhatsApp</b><a href="tel:<?= e(PHONE_TEL) ?>"><?= e(PHONE_DISPLAY) ?></a></p><p><b>Email</b><a href="mailto:<?= e(SITE_EMAIL) ?>"><?= e(SITE_EMAIL) ?></a></p><p><b>Visit</b><?= e(SITE_ADDRESS) ?></p><p><b>Hours</b><?= e(OPEN_HOURS) ?></p></div></div>

<form class="form rv" id="booking" method="post" action="<?= e(page_url('contact')) ?>#booking" novalidate>
<input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>">
<div class="hp-field" aria-hidden="true"><label>Website<input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>
<input class="in2" name="name" placeholder="Your name" aria-label="Name" maxlength="80" required value="<?= e($old['name']) ?>">
<input class="in2" name="phone" placeholder="Phone number" inputmode="tel" aria-label="Phone" maxlength="18" required value="<?= e($old['phone']) ?>">
<select class="in2" name="service" aria-label="Service">
<?php foreach (BOOKING_SERVICES as $svc): ?>
<option<?= $svc === $old['service'] ? ' selected' : '' ?>><?= e($svc) ?></option>
<?php endforeach; ?>
</select>
<input class="in2" name="date" type="date" aria-label="Date" min="<?= date('Y-m-d') ?>" value="<?= e($old['date']) ?>">
<div style="margin-top:20px"><button class="btn f" type="submit">Book on WhatsApp</button></div>

<?php if ($errors): ?>
<div id="ok" class="show err" role="alert"><ul><?php foreach ($errors as $er): ?><li><?= e($er) ?></li><?php endforeach; ?></ul></div>
<?php elseif ($booked): ?>
<div id="booked"><div id="ok" class="show" role="status">Thank you, <?= e($booked['name']) ?>!
<br><a class="btn f wa" href="<?= e($booked['wa']) ?>" target="_blank" rel="noopener">Tap here to send on WhatsApp</a></div></div>
<?php endif; ?>
</form>
</div></section>
<?php render_faq(); ?></div>
<?php require __DIR__ . '/includes/footer.php'; ?>
