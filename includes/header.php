<?php
/** Shared <head>, preloader, page-transition curtain and site header. */
$page_key   = $page_key   ?? 'home';
$page_title = $page_title ?? SITE_NAME . ' | ' . SITE_TAGLINE;
$page_desc  = $page_desc  ?? '';
$full_title = ($page_key === 'home') ? $page_title : $page_title . ' | ' . SITE_NAME;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title><?= e($full_title) ?></title>
<?php if ($page_desc !== ''): ?>
<meta name="description" content="<?= e($page_desc) ?>">
<?php endif; ?>
<link rel="icon" href="<?= e(img_url('brand/logo')) ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;1,500;1,600&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css?v=6">
</head>
<body>
<div id="pre"><div class="lgc ph" data-img="brand/logo"></div><b><?= e(SITE_NAME) ?></b></div>
<div id="cur"><div class="lgc ph" data-img="brand/logo"></div><b><?= e(SITE_NAME) ?></b></div>
<script>
/* run before paint: skip preloader after first visit, play "reveal" after in-site navigation */
try{
  var s=sessionStorage;
  if(s.getItem('glam_seen')==='1'){var p=document.getElementById('pre');if(p)p.parentNode.removeChild(p)}
  if(s.getItem('glam_nav')==='1'){document.getElementById('cur').className='o'}
}catch(e){}
</script>
<div id="glow"></div>
<header id="hd"><div class="wrap hb"><a class="logo" href="<?= e(page_url('home')) ?>"><i class="lgh ph" data-img="brand/logo"></i><span><?= e(SITE_NAME) ?></span></a>
<nav id="nav"><?php foreach (PAGES as $key => $p): ?><a href="<?= e($p['file']) ?>"<?= $key === $page_key ? ' class="on"' : '' ?>><?= e($p['label']) ?></a><?php endforeach; ?><a class="mo" href="tel:<?= e(PHONE_TEL) ?>">Call <?= e(PHONE_DISPLAY) ?></a></nav>
<a class="btn f hbtn" href="<?= e(page_url('contact')) ?>">Book now</a><button class="mb" id="mb" type="button">Menu</button></div></header>

<main>
