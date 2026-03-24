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

    <body class="privacy-policy-page">

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
        <div class="container terms py-4">
            <h1 class="bold text-center"><?php echo getLang('privacy_title') ?></h1>
            <h2 class="bold"><?php echo getLang('privacy_purpose_title') ?></h2>
            <p><?php echo getLang('privacy_purpose_text') ?></p>
            <h2 class="bold"><?php echo getLang('privacy_data_collection_title') ?></h2>
            <p><?php echo getLang('privacy_data_collection_text') ?></p>
            <ul>
                <li><?php echo getLang('privacy_data_collection_direct') ?></li>
                <li><?php echo getLang('privacy_data_collection_indirect') ?>
                    <ul>
                        <li><?php echo getLang('privacy_data_collection_indirect_1') ?></li>
                        <li><?php echo getLang('privacy_data_collection_indirect_2') ?></li>
                    </ul>
                </li>
            </ul>
            <p><?php echo getLang('privacy_data_collection_note') ?></p>
            <h2 class="bold"><?php echo getLang('privacy_data_sharing_title') ?></h2>
            <p><?php echo getLang('privacy_data_sharing_text') ?></p>
            <ul>
                <li><?php echo getLang('privacy_data_sharing_1') ?></li>
                <li><?php echo getLang('privacy_data_sharing_2') ?></li>
                <li><?php echo getLang('privacy_data_sharing_3') ?></li>
                <li><?php echo getLang('privacy_data_sharing_4') ?></li>
                <li><?php echo getLang('privacy_data_sharing_5') ?></li>
                <li><?php echo getLang('privacy_data_sharing_6') ?></li>
            </ul>
            <h2 class="bold"><?php echo getLang('privacy_cross_border_title') ?></h2>
            <p><?php echo getLang('privacy_cross_border_text_1') ?></p>
            <p><?php echo getLang('privacy_cross_border_text_2') ?></p>
            <p><?php echo getLang('privacy_cross_border_text_3') ?></p>
            <h2 class="bold"><?php echo getLang('privacy_retention_title') ?></h2>
            <p><?php echo getLang('privacy_retention_text') ?></p>
            <h2 class="bold"><?php echo getLang('privacy_rights_title') ?></h2>
            <p><?php echo getLang('privacy_rights_text') ?></p>
            <ol>
                <li>
                    <p><?php echo getLang('privacy_right_access') ?></p>
                </li>
                <li>
                    <p><?php echo getLang('privacy_right_rectification') ?></p>
                </li>
                <li>
                    <p><?php echo getLang('privacy_right_erasure') ?></p>
                </li>
                <li>
                    <p><?php echo getLang('privacy_right_restriction') ?></p>
                </li>
                <li>
                    <p><?php echo getLang('privacy_right_portability') ?></p>
                </li>
                <li>
                    <p><?php echo getLang('privacy_right_object') ?></p>
                </li>
                <li>
                    <p><?php echo getLang('privacy_right_withdraw') ?></p>
                </li>
                <li>
                    <p><?php echo getLang('privacy_right_after_death') ?></p>
                </li>
            </ol>
            <p><?php echo getLang('privacy_rights_note') ?></p>
            <p><?php echo getLang('privacy_rights_contact') ?></p>
            <p><?php echo getLang('privacy_rights_complaint') ?></p>
            <h2 class="bold"><?php echo getLang('privacy_contact_title') ?></h2>
            <p><?php echo getLang('privacy_contact_text') ?></p>
            <h2 class="bold"><?php echo getLang('privacy_changes_title') ?></h2>
            <p><?php echo getLang('privacy_changes_text') ?></p>
            <p><b><?php echo getLang('privacy_last_updated') ?></b></p>
        </div>
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

        <div id="openModalLoading" class="modalDialog">
            <div>
                <div class="loading-spinner"></div>
            </div>
            <div class="loading-text"><?php echo getLang('modal_loading_text') ?></div>
        </div>
        <input type="checkbox" id="dialog-modal-check" class="dialog-modal-check">
        <div class="dialog">
            <div role="document" class="dialog-container">
                <div class="column-content">
                            <div>
                        <div class="dialog-header">
                            <?php echo getLang('modal_dialog_disclaimer') ?>:
                            <label for="dialog-modal-check" class="dialog-close-over">�</label>
                        </div>
                        <div class="dialog-content">
                            <div class="dialog-text-wrap">
                                <input type="checkbox" id="dialog-text-1">
                                <div class="dialog-text">
                                    <div class="d-none d-lg-block">
                                        <img loading="lazy" src="/assets/images/risk-d.webp" alt="Risk popup Desk" width="1200" height="216">
                                    </div>
                                    <div class="d-none d-md-block d-lg-none">
                                        <img loading="lazy" src="/assets/images/risk-t.webp" alt="Risk popup Tablet" width="700" height="324">
                                    </div>
                                    <div class="d-md-none">
                                        <img loading="lazy" src="/assets/images/risk-m.webp" alt="Risk popup Mobile" width="320" height="522">
                                    </div>
                                </div>
                                <label for="dialog-text-1" class="dialog-text-more"><?php echo getLang('modal_dialog_read_more') ?></label>
                            </div>
                        </div>
                    </div>
                    <div class="dialog-all-button-row">
                        <label for="dialog-modal-check" class="risk-popup-btn"><?php echo getLang('modal_dialog_button') ?></label>
                    </div>
                </div>
            </div>
        </div>

        <script src="/assets/js/main.js"></script>

    </body>

</html>