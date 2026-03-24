<?php
require_once rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/assets/php/bootstrap.php';


$pageSlug = detectPageSlug(__FILE__);
?>
<!DOCTYPE html>
<html lang="<?php echo getLang('locale_lang') ?>">

    <head>
        <?php generateMetaTags($pageSlug); ?>
        <?php generateHreflangTags(); ?>
        <?php generateJsonLd($pageSlug); ?>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" href="/assets/images/favicon.ico">
        <link rel="stylesheet" href="/assets/css/style.css">

    </head>

    <body class="contact-page">
        <header class="header">
            <div class="container">
                <div class="header-row">
                    <div class="header-col">
                        <ul class="header-menu">
                            <li>
                                <a href="<?php echo getHref('') ?>" class="header-bar-text"><?php echo getLang('home') ?></a>
                            </li>
                            <li>
                                <a href="<?php echo getHref('about') ?>" class="header-bar-text"><?php echo getLang('about') ?></a>
                            </li>
                            <li>
                                <a href="<?php echo getHref('contact') ?>" class="header-bar-text"><?php echo getLang('contact') ?></a>
                            </li>
                            <li>
                                <a href="<?php echo getHref('login') ?>" class="header-bar-text"><?php echo getLang('header_login') ?></a>
                            </li>
                        </ul>
                    </div>
                    <div class="header-col text-center">
                        <div class="header-logo">
                            <a href="<?php echo getHref('') ?>">
                                <img class="header-logo-img" src="/assets/images/logo.webp" alt="Logo" width="410" height="410">
                                <span class="header-logo-name"><?php echo getLang('header_logo_name') ?></span>
                            </a>
                        </div>
                    </div>
                    <div class="header-col d-flex justify-content-end align-items-center">
                        <div id="lang-select" class="lang-select menu-call" data-open="false">
                            <?php generateLanguageSelector() ?>
                        </div>
                        <div class="header-hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="contact-page-section">
            <div class="container" style="max-width: 830px;">
                <div class="form-wrapper">
                    <div class="form-header">
                        <h1 class="text-center contact-header"><?php echo getLang('contact') ?></h1>
                        <h2 class="text-start contact-subheader"><?php echo getLang('contact_subheader') ?></h2>
                    </div>
                    <?php
                    $country = $clientCountryCode;
                    $phonecode = $clientCountryCode;
                    $submit = getLang('contact_form_submit_button');
                    $language = getLang('language_iso');
                    $offer = getLang('brand_name_api');
                    include rtrim($_SERVER['DOCUMENT_ROOT'], '/') . "/form_crypto_hyper/form_js_thanks.php"; ?>
                </div>
            </div>
        </section>
        <section class="footer sections-padding">
            <div class="container">
                <div class="footer-nav">
                    <div class="footer-logo">
                        <img class="footer-logo-img" src="/assets/images/logo.webp" alt="Logo" loading="lazy" width="410" height="410">
                        <span class="footer-logo-name"><?php echo getLang('footer_logo_name') ?></span>
                    </div>
                    <div class="footer-bar">
                        <div class="footer-bar-menu">
                            <a class="footer-usage-item footer-terms" href="<?php echo getHref('terms') ?>"><?php echo getLang('terms') ?></a>
                            <a class="footer-usage-item footer-privacy" href="<?php echo getHref('privacy') ?>"><?php echo getLang('privacy') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="/assets/js/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="/assets/js/main.js"></script>
    </body>

</html>