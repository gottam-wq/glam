# Glam by Sanyukta - PHP Website

Requirements: PHP 7.4+ (works on 8.x), Apache (for .htaccess) or any PHP host.

## Run locally
    cd glam-php
    php -S localhost:8000
Open http://localhost:8000

## Deploy
Upload the whole folder to `public_html` (cPanel / Hostinger etc.). `data/` must be writable (chmod 755 or 775).

## Pages (one file per tab)
| Page     | File          |
|----------|---------------|
| Home     | index.php     |
| Services | services.php  |
| Gallery  | gallery.php   |
| Packages | packages.php  |
| Contact  | contact.php   |

## Shared parts
- includes/config.php  -> phone, email, address, hours, nav, booking services (change once, updates everywhere)
- includes/header.php  -> <head>, preloader, header/nav
- includes/footer.php  -> footer, lightbox, JS
- assets/css/style.css, assets/js/main.js, assets/img/*

## Booking form
Contact form validates on the server (CSRF + honeypot), saves each request to `data/bookings.csv`
(blocked from the web via .htaccess) and gives the visitor a WhatsApp button with the message pre-filled.
Set `SEND_EMAIL_ON_BOOKING` to true in config.php to also get an email (needs mail() on your host).
