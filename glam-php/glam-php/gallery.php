<?php
require __DIR__ . '/includes/config.php';
$page_key   = 'gallery';
$page_title = "Gallery";
$page_desc  = "Look book of bridal, party, mehndi and hair & glow work by Glam by Sanyukta.";
$has_lightbox = true;
require __DIR__ . '/includes/header.php';
?>
<div class="pg show" id="p-gallery">
<section class="s pad"><div class="wrap"><h1 style="font-size:clamp(40px,6.5vw,84px)"><span class="ln"><span>The <i class="gt">look book</i></span></span></h1><p class="sub" style="margin:20px 0 34px">Bridal, party, mehndi and everyday glow. Tap any photo to see it full size.</p>
<div class="fl" id="fl"><button class="on" data-f="all" type="button">All</button><button data-f="bridal" type="button">Bridal</button><button data-f="party" type="button">Party</button><button data-f="mehndi" type="button">Mehndi</button><button data-f="studio" type="button">Studio</button><button data-f="hair" type="button">Hair & glow</button></div>
<div class="gg" id="gg">
<div class="tile gi rv ph" data-img="gallery/g1" data-c="bridal" data-pos="center 20%" tabindex="0" role="button" aria-label="Blush bridal" style="--i:1" data-full="<?= e(img_url('gallery/g1')) ?>"><div class="bgn" style="background:linear-gradient(160deg,#ffd1dc,#d63384 60%,#3b0a24)"></div><div class="cap"><h3>Blush bridal</h3><span>Bridal</span></div></div>
<div class="tile gi rv w ph" data-img="gallery/g2" data-c="studio" data-pos="center" tabindex="0" role="button" aria-label="The makeup edit" style="--i:2" data-full="<?= e(img_url('gallery/g2')) ?>"><div class="bgn" style="background:linear-gradient(160deg,#ffd1dc,#d63384 60%,#3b0a24)"></div><div class="cap"><h3>The makeup edit</h3><span>Studio</span></div></div>
<div class="tile gi rv ph" data-img="gallery/g3" data-c="party" data-pos="center 15%" tabindex="0" role="button" aria-label="Royal pink" style="--i:3" data-full="<?= e(img_url('gallery/g3')) ?>"><div class="bgn" style="background:linear-gradient(160deg,#ffd1dc,#d63384 60%,#3b0a24)"></div><div class="cap"><h3>Royal pink</h3><span>Party</span></div></div>
<div class="tile gi rv ph" data-img="gallery/g4" data-c="mehndi" data-pos="center 25%" tabindex="0" role="button" aria-label="Mehndi art" style="--i:0" data-full="<?= e(img_url('gallery/g4')) ?>"><div class="bgn" style="background:linear-gradient(160deg,#ffd1dc,#d63384 60%,#3b0a24)"></div><div class="cap"><h3>Mehndi art</h3><span>Mehndi</span></div></div>
<div class="tile gi rv w ph" data-img="gallery/g5" data-c="studio" data-pos="center" tabindex="0" role="button" aria-label="Our studio" style="--i:1" data-full="<?= e(img_url('gallery/g5')) ?>"><div class="bgn" style="background:linear-gradient(160deg,#ffd1dc,#d63384 60%,#3b0a24)"></div><div class="cap"><h3>Our studio</h3><span>Studio</span></div></div>
<div class="tile gi rv ph" data-img="gallery/g6" data-c="party" data-pos="center 20%" tabindex="0" role="button" aria-label="Reception glam" style="--i:2" data-full="<?= e(img_url('gallery/g6')) ?>"><div class="bgn" style="background:linear-gradient(160deg,#ffd1dc,#d63384 60%,#3b0a24)"></div><div class="cap"><h3>Reception glam</h3><span>Party</span></div></div>
<div class="tile gi rv ph" data-img="gallery/g7" data-c="party" data-pos="center 20%" tabindex="0" role="button" aria-label="Party anarkali" style="--i:3" data-full="<?= e(img_url('gallery/g7')) ?>"><div class="bgn" style="background:linear-gradient(160deg,#ffd1dc,#d63384 60%,#3b0a24)"></div><div class="cap"><h3>Party anarkali</h3><span>Party</span></div></div>
<div class="tile gi rv ph" data-img="gallery/g8" data-c="hair" data-pos="center 20%" tabindex="0" role="button" aria-label="Evening black" style="--i:0" data-full="<?= e(img_url('gallery/g8')) ?>"><div class="bgn" style="background:linear-gradient(160deg,#ffd1dc,#d63384 60%,#3b0a24)"></div><div class="cap"><h3>Evening black</h3><span>Hair & glow</span></div></div>
<div class="tile gi rv b ph" data-img="gallery/g9" data-c="bridal" data-pos="center 15%" tabindex="0" role="button" aria-label="Red bridal" style="--i:1" data-full="<?= e(img_url('gallery/g9')) ?>"><div class="bgn" style="background:linear-gradient(160deg,#ffd1dc,#d63384 60%,#3b0a24)"></div><div class="cap"><h3>Red bridal</h3><span>Bridal</span></div></div>
<div class="tile gi rv ph" data-img="gallery/g10" data-c="hair" data-pos="center 20%" tabindex="0" role="button" aria-label="Soft waves" style="--i:2" data-full="<?= e(img_url('gallery/g10')) ?>"><div class="bgn" style="background:linear-gradient(160deg,#ffd1dc,#d63384 60%,#3b0a24)"></div><div class="cap"><h3>Soft waves</h3><span>Hair & glow</span></div></div>
<div class="tile gi rv ph" data-img="gallery/g11" data-c="bridal" data-pos="center 15%" tabindex="0" role="button" aria-label="Bridal lehenga" style="--i:3" data-full="<?= e(img_url('gallery/g11')) ?>"><div class="bgn" style="background:linear-gradient(160deg,#ffd1dc,#d63384 60%,#3b0a24)"></div><div class="cap"><h3>Bridal lehenga</h3><span>Bridal</span></div></div>
<div class="tile gi rv ph" data-img="gallery/g12" data-c="hair" data-pos="center 20%" tabindex="0" role="button" aria-label="Glow & curls" style="--i:0" data-full="<?= e(img_url('gallery/g12')) ?>"><div class="bgn" style="background:linear-gradient(160deg,#ffd1dc,#d63384 60%,#3b0a24)"></div><div class="cap"><h3>Glow & curls</h3><span>Hair & glow</span></div></div>
<div class="tile gi rv ph" data-img="gallery/g13" data-c="hair" data-pos="center 20%" tabindex="0" role="button" aria-label="Natural glow" style="--i:1" data-full="<?= e(img_url('gallery/g13')) ?>"><div class="bgn" style="background:linear-gradient(160deg,#ffd1dc,#d63384 60%,#3b0a24)"></div><div class="cap"><h3>Natural glow</h3><span>Hair & glow</span></div></div>
</div>
<div class="cta2 rv"><h2>Love a look? Wear it on your day.</h2><a class="btn f" href="<?= page_url('contact') ?>">Book your look</a></div>
</div></section>
</div>
<?php require __DIR__ . '/includes/footer.php'; ?>
