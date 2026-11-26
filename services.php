<?php
require __DIR__ . '/includes/config.php';
$page_key   = 'services';
$page_title = "Services";
$page_desc  = "Bridal makeup, hair artistry, skin rituals, nail couture, mehndi, threading and wax at Glam by Sanyukta, Alwar.";
require __DIR__ . '/includes/header.php';
?>
<div class="pg show" id="p-services">
<section class="s pad"><div class="wrap"><h1 style="font-size:clamp(40px,6.5vw,84px)"><span class="ln"><span>Our <i class="gt">services</i></span></span></h1>
<div class="rows" style="margin-top:50px">
<div class="row rv"><i class="th ph" data-img="services/bridal"></i><div><h3>Bridal makeup</h3><p>HD, airbrush or soft glam. Trial included.</p></div><span class="pr">₹4,999+</span></div>
<div class="row rv"><i class="th ph" data-img="services/hair"></i><div><h3>Hair artistry</h3><p>Colour, keratin, smoothening and styling.</p></div><span class="pr">₹999+</span></div>
<div class="row rv"><i class="th ph" data-img="services/skin"></i><div><h3>Skin rituals</h3><p>Gold, diamond and de-tan facials.</p></div><span class="pr">₹799+</span></div>
<div class="row rv"><i class="th ph" data-img="gallery/g17"></i><div><h3>Nail couture</h3><p>Gel, acrylic and hand-painted art.</p></div><span class="pr">₹599+</span></div>
<div class="row rv"><i class="th ph" data-img="gallery/g14"></i><div><h3>Mehndi</h3><p>Bridal and party designs in natural henna.</p></div><span class="pr">₹499+</span></div>
<div class="row rv"><i class="th ph" data-img="gallery/g19"></i><div><h3>Threading &amp; wax</h3><p>Quick, clean and gentle.</p></div><span class="pr">₹30+</span></div>
</div></div></section>
<section class="s" style="background:var(--bg2)"><div class="wrap"><h2 class="rv">Full <span class="gt">price list</span></h2><p class="sub rv" style="--i:1;margin-bottom:40px">Starting prices. Final price depends on length, product and design. You always know it before we begin.</p>
<div class="mn"><?php foreach (MENU as $cat => $items): ?><div class="mc rv"><h3><?= e($cat) ?></h3><?php foreach ($items as $it): ?><p><span><?= e($it[0]) ?></span><b><?= e($it[1]) ?></b></p><?php endforeach; ?></div><?php endforeach; ?></div>
<div class="cta2 rv"><h2>Not sure what suits you?</h2><a class="btn f" href="<?= page_url('contact') ?>">Book a consultation</a></div></div></section>
<?php render_faq(); ?>
</div>
<?php require __DIR__ . '/includes/footer.php'; ?>
