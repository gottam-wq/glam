<?php
require __DIR__ . '/includes/config.php';
$page_key   = 'about';
$page_title = 'About us';
$page_desc  = 'The story of Glam by Sanyukta, a private beauty atelier in Narayanpur, Alwar.';
require __DIR__ . '/includes/header.php';
?>
<div class="pg show" id="p-about">
<section class="s pad"><div class="wrap sp">
<div><h1 style="font-size:clamp(40px,6.5vw,84px)"><span class="ln"><span>Meet <i class="gt">Sanyukta</i></span></span></h1><p class="sub" style="margin-top:26px">Glam by Sanyukta started with one chair and one belief: luxury is attention. Every client gets a consultation, clean tools and enough time, so you leave looking like yourself, only luminous.</p><p class="sub">Today the studio handles bridal, party, hair, skin, nails and mehndi under one roof in Narayanpur, Alwar.</p><a class="btn f" style="margin-top:12px" href="<?= page_url('contact') ?>">Book a consultation</a></div>
<div class="arch ph" data-img="about/about" data-pos="center 20%"></div></div></section>
<?php render_stats(); ?>
<section class="s"><div class="wrap"><h2 class="rv">What we <span class="gt">stand for</span></h2><div class="g3" style="margin-top:40px">
<div class="st rv"><h3>Attention</h3><p>A real consultation before every service. Your outfit, skin tone and mood decide the look.</p></div>
<div class="st rv" style="--i:1"><h3>Cleanliness</h3><p>Sanitised tools, fresh disposables and spotless stations for every single client.</p></div>
<div class="st rv" style="--i:2"><h3>Honesty</h3><p>Clear prices, honest advice and no upselling. We tell you what suits you, even if it costs less.</p></div></div></div></section>
<section class="s" style="background:var(--bg2)"><div class="wrap"><h2 class="rv">The <span class="gt">team</span></h2><div class="tmg">
<?php foreach (TEAM as $i => $t): ?><div class="tm rv" style="--i:<?= $i ?>"><i><?= e($t[0]) ?></i><h3><?= e($t[1]) ?></h3><p><?= e($t[2]) ?></p></div><?php endforeach; ?></div></div></section>
<section class="s"><div class="wrap sp"><div class="arch ph rv" data-img="gallery/g19" data-pos="center 20%"></div><div><h2 class="rv">Inside the <span class="gt">studio</span></h2><p class="sub rv" style="--i:1">Mirror-lit stations, comfortable chairs and premium products within reach. Everything is arranged so you can relax while we work.</p><a class="btn rv" style="--i:2" href="<?= page_url('gallery') ?>">See more photos</a></div></div></section>
<?php render_reviews(); ?>
<section class="bnw"><div class="wrap"><div class="cta2 rv" style="margin-top:0"><h2>Come see the studio.</h2><p style="margin:0 0 24px;color:#ffd9e4"><?= e(SITE_ADDRESS) ?> &middot; <?= e(OPEN_HOURS) ?></p><a class="btn f" href="<?= e(whatsapp_url()) ?>" target="_blank" rel="noopener">Chat on WhatsApp</a></div></div></section>
</div>
<?php require __DIR__ . '/includes/footer.php'; ?>
