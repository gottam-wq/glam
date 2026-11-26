</main>
<?php if (!empty($has_lightbox)): ?>
<div id="lb" role="dialog" aria-modal="true" aria-label="Photo viewer"><button class="x" type="button" aria-label="Close">&times;</button><button class="pv" type="button" aria-label="Previous">&lsaquo;</button><img alt=""><button class="nx" type="button" aria-label="Next">&rsaquo;</button><p></p></div>
<?php endif; ?>
<footer class="ft"><div class="wrap"><div class="fg">
<div><a class="logo fl" href="<?= e(page_url('home')) ?>"><i class="lgh ph" data-img="brand/logo"></i><span><?= e(SITE_NAME) ?></span></a><p>Bridal makeup, hair, skin and nails by artists who obsess over the final detail.</p><a class="btn f" href="<?= e(whatsapp_url()) ?>" target="_blank" rel="noopener">Chat on WhatsApp</a></div>
<div><h4>Explore</h4><?php foreach (PAGES as $p): ?><a href="<?= e($p['file']) ?>"><?= e($p['label']) ?></a><?php endforeach; ?></div>
<div><h4>Services</h4><a href="<?= e(page_url('services')) ?>">Bridal makeup</a><a href="<?= e(page_url('services')) ?>">Hair artistry</a><a href="<?= e(page_url('services')) ?>">Skin rituals</a><a href="<?= e(page_url('services')) ?>">Nail couture</a><a href="<?= e(page_url('services')) ?>">Mehndi</a><a href="<?= e(page_url('services')) ?>">Threading &amp; wax</a></div>
<div><h4>Visit &amp; contact</h4><p>Owner: <?= e(OWNER_NAME) ?></p><p><?= e(SITE_ADDRESS) ?></p><a href="tel:<?= e(PHONE_TEL) ?>"><?= e(PHONE_DISPLAY) ?></a><a href="mailto:<?= e(SITE_EMAIL) ?>"><?= e(SITE_EMAIL) ?></a><p style="margin-top:10px">Open <?= e(strtolower(OPEN_HOURS[0]) . substr(OPEN_HOURS, 1)) ?></p></div>
</div><div class="fb"><span>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. All rights reserved.</span><a href="#top" id="totop">Back to top &uarr;</a></div></div></footer>

<script src="assets/js/main.js?v=6"></script>
</body>
</html>
