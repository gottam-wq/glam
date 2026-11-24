<?php
require __DIR__ . '/includes/config.php';
$page_key   = 'home';
$page_title = "Glam by Sanyukta | Beauty Parlour";
$page_desc  = "Bridal makeup, hair, skin and nails in Malviya Nagar, Jaipur. Book your free bridal trial with Glam by Sanyukta.";
require __DIR__ . '/includes/header.php';
?>
<div class="pg show" id="p-home">

<div class="hero"><div class="wrap">
<div><h1><span class="ln"><span style="--i:0">Beauty,</span></span><span class="ln"><span style="--i:1">performed</span></span><span class="ln"><span style="--i:2" class="gt">like art.</span></span></h1>
<p>A private atelier for bridal makeup, hair, skin and nails. Slow, careful work by artists who obsess over the final detail.</p>
<a class="btn f" href="<?= page_url('contact') ?>">Reserve your seat</a> &nbsp; <a class="btn" href="<?= page_url('gallery') ?>">View our work</a></div>
<div style="position:relative"><div class="arch ph" data-img="hero/hero" data-pos="center 15%"><div class="ros" data-n="16"></div><div class="ros r" data-n="10"></div></div>
<div class="card"><b>Free bridal trial</b>Book this week</div><div class="sm ph" data-img="services/hair"></div><svg class="rb" viewBox="0 0 110 110" aria-hidden="true"><circle cx="55" cy="55" r="54" fill="#fff0f3" stroke="#c0826f"/><path id="rc" d="M55 55m-36 0a36 36 0 1 1 72 0a36 36 0 1 1-72 0" fill="none"/><text font-family="Poppins" font-size="10" letter-spacing="2" fill="#3b0a24"><textPath href="#rc">BRIDAL ✦ MAKEUP ✦ HAIR ✦</textPath></text></svg></div>
</div></div>
<section class="s"><div class="wrap"><h2 class="rv">Looks we <span class="gt">love.</span></h2><p class="sub rv" style="--i:1;margin-bottom:34px">Hover or tap a panel to open the look. Every one is planned around you.</p>
<div class="acw rv" id="acw" style="--i:2">
<div class="ac on ph" data-img="gallery/g11" data-pos="center 20%"><span class="v">Bridal</span><div class="ct"><b>01</b><h3>Bridal Couture</h3><p>HD and airbrush finishes that last all day.</p></div></div>
<div class="ac ph" data-img="gallery/g3" data-pos="center 15%"><span class="v">Reception</span><div class="ct"><b>02</b><h3>Reception Pink</h3><p>Glam that holds up under every flash.</p></div></div>
<div class="ac ph" data-img="gallery/g4"><span class="v">Mehndi</span><div class="ct"><b>03</b><h3>Mehndi Nights</h3><p>Fine henna art with perfect styling.</p></div></div>
<div class="ac ph" data-img="gallery/g12" data-pos="center 20%"><span class="v">Hair &amp; glow</span><div class="ct"><b>04</b><h3>Hair &amp; Glow</h3><p>Waves, colour and skin that glows.</p></div></div>
<div class="ac ph" data-img="gallery/g7" data-pos="center 20%"><span class="v">Festive</span><div class="ct"><b>05</b><h3>Festive Green</h3><p>Colour stories for every function.</p></div></div>
</div><a class="btn rv" style="margin-top:34px" href="<?= page_url('gallery') ?>">See full gallery</a></div></section>
<section class="s"><div class="wrap sp">
<div class="tile rv ph" data-img="about/about" style="aspect-ratio:4/5"><div class="bgn" style="background:radial-gradient(90% 70% at 30% 20%,#f2c4ba,#7a3446 55%,#3b0a24)"></div><div class="ros" data-n="12"></div></div>
<div><h2 class="rv">Where every<br>face becomes <span class="gt">a canvas.</span></h2><p class="sub rv" style="--i:1">Glam by Sanyukta began with one chair and a single belief: luxury is attention. Premium products, spotless hygiene and a consultation before every service, so you leave looking like yourself, only luminous.</p><a class="btn rv" style="--i:2" href="<?= page_url('services') ?>">Explore services</a></div>
</div></section>
<section class="why"><div class="wrap"><h2 class="rv">Why choose <span class="gt">Glam by Sanyukta</span></h2><p class="sub rv" style="--i:1;max-width:52ch">Six reasons our brides and regulars keep coming back.</p><div class="wg"><div class="wc rv" style="--i:0"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 21s-7-4.5-9-9a5 5 0 019-3 5 5 0 019 3c-2 4.5-9 9-9 9z"/></svg><h3>Bridal specialists</h3><p>Free trial before the big day, so you walk into the wedding already sure of your look.</p></div><div class="wc rv" style="--i:1"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l2 6 6 3-6 3-2 6-2-6-6-3 6-3z"/></svg><h3>Premium products</h3><p>Skin-safe, trusted beauty brands chosen for a flawless finish that lasts.</p></div><div class="wc rv" style="--i:2"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l8 3v6c0 5-3.5 8-8 9-4.5-1-8-4-8-9V6z"/><path d="M8.5 12l2.5 2.5L16 9.5"/></svg><h3>Hygiene first</h3><p>Sanitised tools and fresh disposables for every single client.</p></div><div class="wc rv" style="--i:0"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 5h16v11H9l-5 4z"/></svg><h3>Personal consultation</h3><p>We plan your look around your outfit, skin tone and mood, not a fixed template.</p></div><div class="wc rv" style="--i:1"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 12V4h8l10 10-8 8z"/><circle cx="7.5" cy="8.5" r="1.2"/></svg><h3>Clear pricing</h3><p>You know the price before the service starts. No surprise add-ons at the counter.</p></div><div class="wc rv" style="--i:2"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg><h3>Open every day</h3><p>Walk in or book between 10 am and 8 pm, any day of the week.</p></div></div></div></section>
<section class="s" style="background:var(--bg2)"><div class="wrap"><h2 class="rv">Signature rituals</h2>
<div class="g3" style="margin-top:40px">
<a href="<?= page_url('services') ?>" class="tile rv" data-img="services/bridal"><div class="bgn" style="background:radial-gradient(90% 70% at 70% 20%,#e9a79b,#8b3a4c 55%,#3b0a24)"></div><div class="ros" data-n="14"></div><div class="cap"><h3>Bridal Couture</h3><span>from ₹4,999</span></div></a>
<a href="<?= page_url('services') ?>" class="tile rv" data-img="services/hair" style="--i:1"><div class="bgn" style="background:radial-gradient(90% 70% at 30% 20%,#f7e0a8,#a07a32 50%,#3b0a24)"></div><div class="ros" data-n="9"></div><div class="cap"><h3>Hair Artistry</h3><span>from ₹999</span></div></a>
<a href="<?= page_url('services') ?>" class="tile rv" data-img="services/skin" style="--i:2"><div class="bgn" style="background:radial-gradient(90% 70% at 60% 25%,#ffd1dc,#d63384 50%,#3b0a24)"></div><div class="ros" data-n="18"></div><div class="cap"><h3>Glow Ritual</h3><span>from ₹799</span></div></a>
</div></div></section>
<section class="s"><div class="wrap"><h2 class="rv">Three steps to your glow</h2><div class="g3" style="margin-top:40px">
<div class="st rv"><b>1</b><h3>Book</h3><p>Pick a service and a date. We call to confirm your slot.</p></div>
<div class="st rv" style="--i:1"><b>2</b><h3>Consult</h3><p>Tell us your outfit and mood. We plan the look around you.</p></div>
<div class="st rv" style="--i:2"><b>3</b><h3>Glow</h3><p>Sit back while our artists work, then walk out camera-ready.</p></div>
</div></div></section>
<section class="bnw"><div class="wrap"><div class="bn ph" data-img="banner/banner" data-pos="right center"><div class="bt"><h2 class="rv">Your big day deserves a flawless finish.</h2><p class="rv" style="--i:1">Trial first, perfection on the day.</p><a class="btn f rv" style="--i:2" href="<?= page_url('contact') ?>">Book a bridal trial</a></div></div></div></section>
<section class="s"><div class="wrap"><p class="q rv">Meri shaadi par sabne poocha, “kaun hai yeh makeup artist?”</p><p class="rv" style="text-align:center;color:var(--mute);margin-top:24px">Priya S., bride</p></div></section>
</div>
<?php require __DIR__ . '/includes/footer.php'; ?>
