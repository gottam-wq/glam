<?php
require __DIR__ . '/includes/config.php';
$page_key   = 'packages';
$page_title = "Packages";
$page_desc  = "Curated beauty packages: Glow Up, Bridal Queen and Party Ready.";
require __DIR__ . '/includes/header.php';
?>
<div class="pg show" id="p-packages">
<section class="s pad"><div class="wrap"><h1 style="font-size:clamp(40px,6.5vw,84px)"><span class="ln"><span>Curated <i class="gt">packages</i></span></span></h1>
<div class="g3" style="margin-top:56px;align-items:stretch">
<div class="pk rv"><h3>Glow Up</h3><div class="big">₹1,999</div><ul><li>Skin ritual facial</li><li>Hair spa</li><li>Threading</li></ul><a class="btn" href="<?= page_url('contact') ?>">Choose</a></div>
<div class="pk hot rv" style="--i:1"><h3>Bridal Queen</h3><div class="big">₹14,999</div><ul><li>HD bridal makeup</li><li>Hair and dupatta setting</li><li>Pre-bridal facial</li><li>Bridal mehndi</li></ul><a class="btn f" href="<?= page_url('contact') ?>">Choose</a></div>
<div class="pk rv" style="--i:2"><h3>Party Ready</h3><div class="big">₹2,999</div><ul><li>Makeup</li><li>Hair styling</li><li>Gel nails</li></ul><a class="btn" href="<?= page_url('contact') ?>">Choose</a></div>
</div>
<div class="g3" style="margin-top:26px;align-items:stretch"><div class="pk rv"><h3>Mehndi Night</h3><div class="big">₹3,499</div><ul><li>Party makeup</li><li>Hair styling</li><li>Party mehndi, both hands</li></ul><a class="btn" href="<?= page_url('contact') ?>">Choose</a></div>
<div class="pk rv" style="--i:1"><h3>Bridesmaid Squad</h3><div class="big">₹1,799</div><ul><li>Per person, groups of 4+</li><li>Makeup and hair</li><li>Saree / dupatta draping</li></ul><a class="btn" href="<?= page_url('contact') ?>">Choose</a></div>
<div class="pk rv" style="--i:2"><h3>Pre-Bridal Month</h3><div class="big">₹9,999</div><ul><li>4 skin sessions</li><li>2 hair spas</li><li>Full body wax and polish</li><li>Free bridal trial</li></ul><a class="btn" href="<?= page_url('contact') ?>">Choose</a></div>
</div>
<div class="cta2 rv"><h2>Want a custom package for your wedding?</h2><a class="btn f" href="<?= page_url('contact') ?>">Plan it with us</a></div></div></section>
<?php render_reviews(); ?>
</div>
<?php require __DIR__ . '/includes/footer.php'; ?>
