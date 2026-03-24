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

    <body class="terms-page">

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
        <section class="main">
            <div class="container">
                <h1 class="bold text-center"><?php echo getLang('terms_title') ?></h1>
                <h2 class="bold"><?php echo getLang('terms_general_title') ?></h2>
                <div class="pl-3">
                    <p><?php echo getLang('terms_general_1') ?></p>
                    <p><?php echo getLang('terms_general_2') ?></p>
                    <p><?php echo getLang('terms_general_3') ?></p>
                    <p><?php echo getLang('terms_general_4') ?></p>
                    <p><?php echo getLang('terms_general_5') ?></p>
                </div>
                <h2 class="bold"><?php echo getLang('terms_services_title') ?></h2>
                <div class="pl-3">
                    <p><?php echo getLang('terms_services_1') ?></p>
                    <p><?php echo getLang('terms_services_2') ?></p>
                    <p><?php echo getLang('terms_services_3') ?></p>
                    <p><?php echo getLang('terms_services_4') ?></p>
                </div>
                <h2 class="bold"><?php echo getLang('terms_eligibility_title') ?></h2>
                <div class="pl-3">
                    <p><?php echo getLang('terms_eligibility_1') ?></p>
                    <p><?php echo getLang('terms_eligibility_2') ?></p>
                    <p><?php echo getLang('terms_eligibility_3') ?></p>
                    <p><?php echo getLang('terms_eligibility_4') ?></p>
                </div>
                <h2 class="bold"><?php echo getLang('terms_restricted_territories_title') ?></h2>
                <div class="pl-3">
                    <p><?php echo getLang('terms_restricted_territories_1') ?></p>
                    <p><?php echo getLang('terms_restricted_territories_2') ?></p>
                </div>
                <h3 class="bold"><?php echo getLang('terms_prohibited_activities_title') ?></h3>
                <div class="pl-3">
                    <p><?php echo getLang('terms_prohibited_activities_1') ?></p>
                    <p><?php echo getLang('terms_prohibited_activities_2') ?></p>
                    <p><?php echo getLang('terms_prohibited_activities_3') ?></p>
                    <p><?php echo getLang('terms_prohibited_activities_4') ?></p>
                    <p><?php echo getLang('terms_prohibited_activities_5') ?></p>
                    <p><?php echo getLang('terms_prohibited_activities_6') ?></p>
                    <p><?php echo getLang('terms_prohibited_activities_7') ?></p>
                    <p><?php echo getLang('terms_prohibited_activities_8') ?></p>
                    <p><?php echo getLang('terms_prohibited_activities_9') ?></p>
                    <p><?php echo getLang('terms_prohibited_activities_10') ?></p>
                    <p><?php echo getLang('terms_prohibited_activities_11') ?></p>
                    <p><?php echo getLang('terms_prohibited_activities_12') ?></p>
                </div>
                <h3 class="bold"><?php echo getLang('terms_intellectual_property_title') ?></h3>
                <div class="pl-3">
                    <p><?php echo getLang('terms_intellectual_property_1') ?></p>
                    <p><?php echo getLang('terms_intellectual_property_2') ?></p>
                    <p><?php echo getLang('terms_intellectual_property_3') ?></p>
                    <p><?php echo getLang('terms_intellectual_property_4') ?></p>
                </div>
                <h3 class="bold"><?php echo getLang('terms_liability_title') ?></h3>
                <div class="pl-3">
                    <p><?php echo getLang('terms_liability_1') ?></p>
                    <p><?php echo getLang('terms_liability_2') ?></p>
                    <p><?php echo getLang('terms_liability_3') ?></p>
                    <p><?php echo getLang('terms_liability_4') ?></p>
                    <p><?php echo getLang('terms_liability_5') ?></p>
                    <p><?php echo getLang('terms_liability_6') ?></p>
                    <p><?php echo getLang('terms_liability_7') ?></p>
                    <p><?php echo getLang('terms_liability_8') ?></p>
                    <p><?php echo getLang('terms_liability_9') ?></p>
                </div>
                <h3 class="bold"><?php echo getLang('terms_third_party_title') ?></h3>
                <div class="pl-3">
                    <p><?php echo getLang('terms_third_party_1') ?></p>
                    <p><?php echo getLang('terms_third_party_2') ?></p>
                    <p><?php echo getLang('terms_third_party_3') ?></p>
                </div>
                <h3 class="bold"><?php echo getLang('terms_links_title') ?></h3>
                <div class="pl-3">
                    <p><?php echo getLang('terms_links_1') ?></p>
                    <p><?php echo getLang('terms_links_2') ?></p>
                    <p><?php echo getLang('terms_links_3') ?></p>
                    <p><?php echo getLang('terms_links_4') ?></p>
                </div>
                <h3 class="bold"><?php echo getLang('terms_miscellaneous_title') ?></h3>
                <div class="pl-3">
                    <p><?php echo getLang('terms_miscellaneous_1') ?></p>
                    <p><?php echo getLang('terms_miscellaneous_2') ?></p>
                    <p><?php echo getLang('terms_miscellaneous_3') ?></p>
                    <p><?php echo getLang('terms_miscellaneous_4') ?></p>
                    <p><?php echo getLang('terms_miscellaneous_5') ?></p>
                    <p><?php echo getLang('terms_miscellaneous_6') ?></p>
                    <p><?php echo getLang('terms_miscellaneous_7') ?></p>
                    <p><?php echo getLang('terms_miscellaneous_8') ?></p>
                    <p><?php echo getLang('terms_miscellaneous_9') ?></p>
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

        <script src="/assets/js/main.js"></script>

    </body>

</html>