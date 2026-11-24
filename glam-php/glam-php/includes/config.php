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
const SITE_ADDRESS   = 'Demo Address, Malviya Nagar, Jaipur, Rajasthan';
const OPEN_HOURS     = 'Every day, 10 am to 8 pm';

// Booking form: also send an email to SITE_EMAIL? (needs working mail() on the server)
const SEND_EMAIL_ON_BOOKING = false;

// ---- Navigation (key => file / label) ----------------------------------
const PAGES = [
    'home'     => ['file' => 'index.php',    'label' => 'Home'],
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
