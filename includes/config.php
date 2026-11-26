<?php
/**
 * Glam by Sanyukta - site configuration + helpers
 * Edit the values below to change contact details everywhere on the site.
 */
declare(strict_types=1);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// ---- Business details --------------------------------------------------
const SITE_NAME      = 'Glam by Sanyukta';
const SITE_TAGLINE   = 'Beauty Parlour';
const OWNER_NAME     = 'Sanyukta';
const PHONE_DISPLAY  = '+91 94689 71373';
const PHONE_TEL      = '+919468971373';   // used in tel: links
const WHATSAPP_NUM   = '919468971373';    // country code + number, no "+"
const SITE_EMAIL     = 'canaf698@gmail.com';
const SITE_ADDRESS   = 'Narayanpur, Alwar, Rajasthan 301024';
const OPEN_HOURS     = 'Every day, 10 am to 8 pm';

// Booking form: also send an email to SITE_EMAIL? (needs working mail() on the server)
const SEND_EMAIL_ON_BOOKING = false;

// ---- Navigation (key => file / label) ----------------------------------
const PAGES = [
    'home'     => ['file' => 'index.php',    'label' => 'Home'],
    'about'    => ['file' => 'about.php',    'label' => 'About'],
    'services' => ['file' => 'services.php', 'label' => 'Services'],
    'gallery'  => ['file' => 'gallery.php',  'label' => 'Gallery'],
    'packages' => ['file' => 'packages.php', 'label' => 'Packages'],
    'contact'  => ['file' => 'contact.php',  'label' => 'Contact'],
];

// ---- Services shown in the booking form dropdown -----------------------
const BOOKING_SERVICES = [
    'Bridal makeup', 'Hair artistry', 'Skin rituals', 'Nail couture', 'Mehndi',
];

// ---- Images ------------------------------------------------------------
// Some keys reuse another photo (same as the original design).
const IMAGE_ALIASES = [
    'gallery/g10'     => 'about/about',
    'hero/hero'       => 'gallery/g9',
    'services/bridal' => 'gallery/g11',
    'services/hair'   => 'gallery/g12',
    'services/skin'   => 'gallery/g13',
];

// ---- Content blocks (demo copy: edit freely) ----------------------------
const STATS = [['500','+','Brides styled'],['8','','Years of artistry'],['4.9','','Average rating'],['15000','+','Happy clients']];
const MENU = [
 'Bridal' => [['Bridal HD makeup','₹4,999'],['Airbrush bridal','₹7,999'],['Engagement / reception look','₹3,499'],['Bridal hair setting','₹1,499'],['Saree / dupatta draping','₹499']],
 'Hair' => [['Haircut & styling','₹399'],['Hair spa','₹799'],['Global colour','₹1,999'],['Keratin / smoothening','₹3,499'],['Party hairstyle','₹699']],
 'Skin' => [['Classic facial','₹799'],['Gold / diamond facial','₹1,299'],['De-tan','₹599'],['Hydra glow','₹1,999'],['Clean-up','₹499']],
 'Nails & Mehndi' => [['Gel polish','₹599'],['Acrylic extensions','₹1,499'],['Nail art (per hand)','₹399'],['Party mehndi','₹499'],['Bridal mehndi','₹2,499']],
 'Threading & Wax' => [['Eyebrows','₹30'],['Full face threading','₹150'],['Full arms wax','₹299'],['Full legs wax','₹449'],['Underarms','₹99']],
];
const REVIEWS = [
 ['Meri shaadi par sabne poocha, kaun hai yeh makeup artist? Trial ne sab clear kar diya tha, D-day par zero tension.','Priya S.','Bride'],
 ['Hair spa ke baad baal itne soft the. Staff polite hai aur hygiene top class.','Neha R.','Regular client'],
 ['Reception look exactly waisa tha jaisa maine reference dikhaya tha. Photos mein glow aaya.','Anjali M.','Reception'],
 ['Mehndi design bahut fine tha aur dark rang aaya. Poori family ne yahin se karwaya.','Kavita J.','Mehndi'],
 ['Pricing pehle se clear thi, koi hidden charge nahi. Isliye yahi aati hoon.','Ritu D.','Skin ritual'],
 ['Bridesmaids ke liye squad package liya, sab ek saath ready ho gaye. Time pe, bina chaos ke.','Simran K.','Bridesmaids'],
];
const FAQS = [
 ['Do I need to book in advance?','Walk-ins are welcome, but bridal and party looks need a booking. Pick a date on the Contact page and we confirm by call.'],
 ['Is the bridal trial really free?','Yes. Book a trial before your wedding and we plan the look around your outfit and skin tone. Trial is included with bridal packages.'],
 ['Do you use branded products?','We use skin-safe, trusted beauty brands, and fresh disposables for every client.'],
 ['Can you come to our home or venue?','Bridal and group bookings can be arranged at your venue in Alwar. Message us on WhatsApp with the date and location.'],
 ['How long does bridal makeup take?','Around 2 to 3 hours including hair and draping. We plan the timeline with you at the trial.'],
 ['How do I pay?','Cash, UPI and cards. A small advance confirms bridal dates.'],
];
const TEAM = [['S','Sanyukta','Founder, bridal artist'],['H','Hair studio','Cuts, colour, styling'],['K','Skin therapy','Facials, glow rituals'],['N','Nails and mehndi','Gel, art, henna']];

// ---- Helpers -----------------------------------------------------------
function e(?string $s): string
{
    return htmlspecialchars((string) $s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function str_len(string $s): int
{
    return function_exists('mb_strlen') ? mb_strlen($s, 'UTF-8') : strlen($s);
}

function page_url(string $key): string
{
    return PAGES[$key]['file'] ?? PAGES['home']['file'];
}

function img_url(string $key): string
{
    $key = IMAGE_ALIASES[$key] ?? $key;
    return 'assets/img/' . $key . '.jpg';
}

function whatsapp_url(string $message = ''): string
{
    $url = 'https://wa.me/' . WHATSAPP_NUM;
    return $message === '' ? $url : $url . '?text=' . rawurlencode($message);
}

function csrf_token(): string
{
    if (empty($_SESSION['csrf'])) {
        $_SESSION['csrf'] = bin2hex(random_bytes(16));
    }
    return $_SESSION['csrf'];
}

function render_stats(): void
{
    echo '<section class="stats"><div class="wrap sg">';
    foreach (STATS as $i => $st) {
        echo '<div class="rv" style="--i:' . $i . '"><b><span class="cn" data-to="' . e($st[0]) . '">0</span>' . e($st[1]) . '</b><span>' . e($st[2]) . '</span></div>';
    }
    echo '</div></section>';
}

function render_reviews(): void
{
    echo '<section class="s"><div class="wrap"><h2 class="rv">Words from <span class="gt">our clients</span></h2><div class="rg">';
    foreach (REVIEWS as $i => $r) {
        echo '<figure class="rc rv" style="--i:' . ($i % 3) . '"><blockquote>' . e($r[0]) . '</blockquote><figcaption><b>' . e($r[1]) . '</b> ' . e($r[2]) . '</figcaption></figure>';
    }
    echo '</div></div></section>';
}

function render_faq(): void
{
    echo '<section class="s" style="background:var(--bg2)"><div class="wrap sp" style="align-items:start"><div><h2 class="rv">Questions, <span class="gt">answered.</span></h2><p class="sub rv" style="--i:1">Still unsure? Message us on WhatsApp and we reply the same day.</p><a class="btn f rv" style="--i:2;margin-top:18px" href="' . e(whatsapp_url()) . '" target="_blank" rel="noopener">Ask on WhatsApp</a></div><div class="fq rv">';
    foreach (FAQS as $f) {
        echo '<details><summary>' . e($f[0]) . '</summary><p>' . e($f[1]) . '</p></details>';
    }
    echo '</div></div></section>';
}
