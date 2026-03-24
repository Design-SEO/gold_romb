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

    <body class="index-page">
        <header class="header">
            <div class="container">
                <div class="header-row">
                    <div class="header-col">
                        <ul class="header-menu">
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
                <div class="main-container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="text-center text-lg-left">
                                <h1 class="main-title">
                                    <?php echo getLang('main_title') ?>
                                </h1>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5 offset-xl-1">
                            <div class="form-wrapper-circles main-form-container">
                                <div id="form-main" class="main-form form-wrapper">
                                    <div class="form-header">
                                        <div class="form-title">
                                            <?php echo getLang('main_form_title') ?>
                                        </div>
                                    </div>
                                    <?php
                                    $country = $clientCountryCode;
                                    $phonecode = $clientCountryCode;
                                    $submit = '';
                                    $language = getLang('language_iso');
                                    $offer = getLang('brand_name_api');
                                    include rtrim($_SERVER['DOCUMENT_ROOT'], '/') . "/form_crypto_hyper/form_js_thanks.php"; ?>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="padding-60 pt-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 order-2 order-lg-1 text-center">
                        <img src="/assets/images/img-1.webp" alt="" loading="lazy" width="580" height="444">
                    </div>
                    <div class="col-lg-7 order-1 order-lg-2">
                        <h2 class="title">
                            <?php echo getLang('about_title') ?>
                        </h2>
                        <h3 class="small-title">
                            <?php echo getLang('about_subtitle') ?>
                        </h3>
                        <div class="quote">
                            <?php echo getLang('about_quote') ?>
                        </div>
                        <p id="i3pntq">
                            <?php echo getLang('about_text_1') ?>
                        </p>
                        <p id="i773mk">
                            <?php echo getLang('about_text_2') ?>
                        </p>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <a href="#form-main" class="btn-link">
                        <?php echo getLang('about_register_btn') ?>
                    </a>
                </div>
            </div>
        </section>
        <section class="education-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <h2 class="title">
                            <?php echo getLang('education_title') ?>
                        </h2>
                        <div class="education-list">
                            <div class="education-item active">
                                <input type="checkbox">
                                <h3 class="education-item-title">
                                    <span class="education-item-collapse"></span>
                                    <?php echo getLang('education_item_1_title') ?>
                                </h3>
                                <div class="education-item-content">
                                    <p id="i1xqlm">
                                        <?php echo getLang('education_item_1_text') ?>
                                    </p>
                                </div>
                            </div>
                            <div class="education-item">
                                <input type="checkbox">
                                <h3 class="education-item-title">
                                    <span class="education-item-collapse"></span>
                                    <?php echo getLang('education_item_2_title') ?>
                                </h3>
                                <div class="education-item-content">
                                    <p id="i63beg">
                                        <?php echo getLang('education_item_2_text_1') ?>
                                    </p>
                                    <p id="i1v646">
                                        <?php echo getLang('education_item_2_text_2') ?>
                                    </p>
                                </div>
                            </div>
                            <div class="education-item">
                                <input type="checkbox">
                                <h3 class="education-item-title">
                                    <span class="education-item-collapse"></span>
                                    <?php echo getLang('education_item_3_title') ?>
                                </h3>
                                <div class="education-item-content">
                                    <p id="i7ot21">
                                        <?php echo getLang('education_item_3_text_1') ?>
                                    </p>
                                    <p id="idzvyd">
                                        <?php echo getLang('education_item_3_text_2') ?>
                                    </p>
                                </div>
                            </div>
                            <div class="text-center text-md-start mt-4 mt-lg-5">
                                <a href="#form-main" class="btn-link">
                                    <?php echo getLang('education_register_btn') ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-4 mt-lg-0">
                        <img src="/assets/images/education-img.webp" alt="" loading="lazy" width="681" height="587">
                    </div>
                </div>
            </div>
        </section>
        <section class="three-steps-section">
            <div class="container">
                <div class="border-box">
                    <div class="border-box-inner three-steps-container">
                        <h2 class="title text-center">
                            <?php echo getLang('three_steps_title') ?>
                        </h2>
                        <div class="three-steps-row">
                            <div class="three-steps-item">
                                <h3 class="three-steps-item-title">
                                    <?php echo getLang('three_steps_item_1_title') ?>
                                </h3>
                                <p id="iq8tm6">
                                    <?php echo getLang('three_steps_item_1_text') ?>
                                </p>
                            </div>
                            <div class="three-steps-item">
                                <h3 class="three-steps-item-title">
                                    <?php echo getLang('three_steps_item_2_title') ?>
                                </h3>
                                <p id="iothvo">
                                    <?php echo getLang('three_steps_item_2_text') ?>
                                </p>
                            </div>
                            <div class="three-steps-item">
                                <h3 class="three-steps-item-title">
                                    <?php echo getLang('three_steps_item_3_title') ?>
                                </h3>
                                <p id="i719t4">
                                    <?php echo getLang('three_steps_item_3_text') ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="padding-60">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-2 order-lg-1 text-center mt-4 mt-lg-0">
                        <img src="/assets/images/img-2.webp" alt="" loading="lazy" class="img-ml-minus" width="843" height="676">
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <h2 class="title">
                            <?php echo getLang('investor_title') ?>
                        </h2>
                        <div class="quote">
                            <?php echo getLang('investor_quote') ?>
                        </div>
                        <p id="i0w5gc">
                            <?php echo getLang('investor_text') ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="learn-section">
            <div class="container">
                <div class="row align-items-center mb-md-4">
                    <div class="col-lg-6">
                        <h2 class="title">
                            <?php echo getLang('investor_types_title') ?>
                        </h2>
                    </div>
                    <div class="col-lg-6">
                        <p class="fs-22">
                            <?php echo getLang('investor_types_intro') ?>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="learn-list">
                            <div class="learn-list-title active">
                                <div class="learn-list-icon">
                                    <img src="/assets/images/icon-2.webp" alt="" loading="lazy" width="26" height="26">
                                </div>
                                <span id="i9ssbm">
                                    <?php echo getLang('investor_type_1_title') ?>
                                </span>
                                <div class="learn-list-arrow">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.3171 9.33349C11.5808 9.32312 10.9755 9.9116 10.9652 10.6479C10.9548 11.3842 11.5433 11.9895 12.2796 11.9999L12.3171 9.33349ZM21.2082 10.7922L22.5414 10.7734C22.5312 10.0517 21.9486 9.46914 21.2269 9.45898L21.2082 10.7922ZM20.0005 19.7208C20.0108 20.4571 20.6161 21.0456 21.3524 21.0352C22.0887 21.0248 22.6772 20.4195 22.6669 19.6832L20.0005 19.7208ZM9.72418 20.3905C9.20348 20.9112 9.20348 21.7555 9.72418 22.2762C10.2449 22.7969 11.0891 22.7969 11.6098 22.2762L9.72418 20.3905ZM12.2796 11.9999L21.1894 12.1254L21.2269 9.45898L12.3171 9.33349L12.2796 11.9999ZM19.875 10.811L20.0005 19.7208L22.6669 19.6832L22.5414 10.7734L19.875 10.811ZM20.2654 9.84937L9.72418 20.3905L11.6098 22.2762L22.151 11.735L20.2654 9.84937Z"
                                            fill="#0D121B"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="learn-list-title">
                                <div class="learn-list-icon">
                                    <img src="/assets/images/icon-1.webp" alt="" loading="lazy" width="30" height="26">
                                </div>
                                <span id="i0df0k">
                                    <?php echo getLang('investor_type_2_title') ?>
                                </span>
                                <div class="learn-list-arrow">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" id="i1cfql">
                                        <path
                                            d="M12.3171 9.33349C11.5808 9.32312 10.9755 9.9116 10.9652 10.6479C10.9548 11.3842 11.5433 11.9895 12.2796 11.9999L12.3171 9.33349ZM21.2082 10.7922L22.5414 10.7734C22.5312 10.0517 21.9486 9.46914 21.2269 9.45898L21.2082 10.7922ZM20.0005 19.7208C20.0108 20.4571 20.6161 21.0456 21.3524 21.0352C22.0887 21.0248 22.6772 20.4195 22.6669 19.6832L20.0005 19.7208ZM9.72418 20.3905C9.20348 20.9112 9.20348 21.7555 9.72418 22.2762C10.2449 22.7969 11.0891 22.7969 11.6098 22.2762L9.72418 20.3905ZM12.2796 11.9999L21.1894 12.1254L21.2269 9.45898L12.3171 9.33349L12.2796 11.9999ZM19.875 10.811L20.0005 19.7208L22.6669 19.6832L22.5414 10.7734L19.875 10.811ZM20.2654 9.84937L9.72418 20.3905L11.6098 22.2762L22.151 11.735L20.2654 9.84937Z"
                                            fill="#0D121B"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="learn-list-title">
                                <div class="learn-list-icon">
                                    <img src="/assets/images/icon-2.webp" alt="" loading="lazy" width="26" height="26">
                                </div>
                                <span id="iquyse">
                                    <?php echo getLang('investor_type_3_title') ?>
                                </span>
                                <div class="learn-list-arrow">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" id="i51o47">
                                        <path
                                            d="M12.3171 9.33349C11.5808 9.32312 10.9755 9.9116 10.9652 10.6479C10.9548 11.3842 11.5433 11.9895 12.2796 11.9999L12.3171 9.33349ZM21.2082 10.7922L22.5414 10.7734C22.5312 10.0517 21.9486 9.46914 21.2269 9.45898L21.2082 10.7922ZM20.0005 19.7208C20.0108 20.4571 20.6161 21.0456 21.3524 21.0352C22.0887 21.0248 22.6772 20.4195 22.6669 19.6832L20.0005 19.7208ZM9.72418 20.3905C9.20348 20.9112 9.20348 21.7555 9.72418 22.2762C10.2449 22.7969 11.0891 22.7969 11.6098 22.2762L9.72418 20.3905ZM12.2796 11.9999L21.1894 12.1254L21.2269 9.45898L12.3171 9.33349L12.2796 11.9999ZM19.875 10.811L20.0005 19.7208L22.6669 19.6832L22.5414 10.7734L19.875 10.811ZM20.2654 9.84937L9.72418 20.3905L11.6098 22.2762L22.151 11.735L20.2654 9.84937Z"
                                            fill="#0D121B"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="learn-list-content">
                            <div class="learn-list-content-item border-box active">
                                <div class="learn-list-content-item-inner border-box-inner">
                                    <h3 class="learn-list-content-sub-title">
                                        <?php echo getLang('investor_type_1_title') ?>
                                    </h3>
                                    <p id="idmv6p">
                                        <?php echo getLang('investor_type_1_content') ?>
                                    </p>
                                </div>
                            </div>
                            <div class="learn-list-content-item border-box">
                                <div class="learn-list-content-item-inner border-box-inner">
                                    <h3 class="learn-list-content-sub-title">
                                        <?php echo getLang('investor_type_2_title') ?>
                                    </h3>
                                    <p id="ip8k6g">
                                        <?php echo getLang('investor_type_2_content_1') ?>
                                    </p>
                                    <p id="idmntq">
                                        <b id="ijubif">
                                            <?php echo getLang('investor_type_2_retail_title') ?>
                                        </b>
                                    </p>
                                    <p id="inm3sj">
                                        <?php echo getLang('investor_type_2_retail_text') ?>
                                    </p>
                                    <p id="imy2lq">
                                        <b id="i1eevf">
                                            <?php echo getLang('investor_type_2_longterm_title') ?>
                                        </b>
                                    </p>
                                    <p id="iqx4ll">
                                        <?php echo getLang('investor_type_2_longterm_text') ?>
                                    </p>
                                    <p id="icyjv8">
                                        <b id="ircfuu">
                                            <?php echo getLang('investor_type_2_private_title') ?>
                                        </b>
                                    </p>
                                    <p id="irv2n2">
                                        <?php echo getLang('investor_type_2_private_text') ?>
                                    </p>
                                    <p id="i6b9t7">
                                        <?php echo getLang('investor_type_2_content_2') ?>
                                    </p>
                                </div>
                            </div>
                            <div class="learn-list-content-item border-box">
                                <div class="learn-list-content-item-inner border-box-inner">
                                    <h3 class="learn-list-content-sub-title">
                                        <?php echo getLang('investor_type_3_title') ?>
                                    </h3>
                                    <p id="ilsnkf">
                                        <?php echo getLang('investor_type_3_content') ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4 mt-md-5">
                    <a href="#form-main" class="btn-link">
                        <?php echo getLang('investor_types_register_btn') ?>
                    </a>
                </div>
            </div>
        </section>
        <section class="padding-60">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 text-center order-2 order-lg-1 mt-4 mt-lg-0">
                        <img src="/assets/images/img-3.webp" alt="" loading="lazy" width="592" height="658">
                    </div>
                    <div class="col-lg-7 order-1 order-lg-2">
                        <h2 class="title">
                            <?php echo getLang('index_funds_title') ?>
                        </h2>
                        <div class="quote">
                            <?php echo getLang('index_funds_quote') ?>
                        </div>
                        <p id="im8efj">
                            <?php echo getLang('index_funds_text_1') ?>
                        </p>
                        <p id="ioa9lv">
                            <?php echo getLang('index_funds_text_2') ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="principles-section">
            <div class="container">
                <div class="principles-box border-box">
                    <div class="principles-box-inner border-box-inner">
                        <h2 class="title"><?php echo getLang('etfs_title') ?></h2>
                        <p id="i9wwdi"><?php echo getLang('etfs_text_1') ?></p>
                        <p id="iwt0i4"><?php echo getLang('etfs_text_2') ?></p>
                    </div>
                </div>
                <div class="principles-list">
                    <div class="principles-item">
                        <div class="principles-item-inner">
                            <div class="principles-item-icon">
                                <svg width="65" height="66" viewBox="0 0 65 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect y="0.524414" width="65" height="65" rx="4.64286" fill="#3D70F1" fill-opacity="0.2"></rect>
                                    <path
                                        d="M13.7569 28.8005C13.8074 28.8005 13.8589 28.7938 13.9099 28.7795C18.3451 27.5359 23.0679 25.6883 27.2083 23.5772C31.6037 21.3361 35.0996 18.9373 37.3324 16.6321L38.3938 17.8438C38.5034 17.9689 38.6595 18.037 38.8201 18.037C38.8809 18.037 38.9426 18.0271 39.0026 18.0069C39.2195 17.933 39.3707 17.7354 39.3859 17.5064L39.5921 14.3359C39.6019 14.1858 39.5514 14.0374 39.4525 13.9245C39.3537 13.8116 39.2132 13.7421 39.0634 13.7323L35.8989 13.5257C35.6713 13.51 35.4548 13.6355 35.3537 13.8412C35.2526 14.0473 35.2848 14.2942 35.436 14.4667L36.5828 15.7757C32.361 20.1795 22.9239 25.0721 13.6044 27.6856C13.3029 27.7703 13.1271 28.0835 13.2112 28.3856C13.2814 28.6365 13.5091 28.8005 13.7569 28.8005ZM38.4242 14.8288L38.3437 16.0648L37.1907 14.7486L38.4242 14.8288ZM45.6218 35.4162C45.9349 35.4162 46.1885 35.6703 46.1885 35.984V36.2421C46.8545 36.4093 47.4682 36.8758 47.72 37.6788C47.8139 37.9782 47.6475 38.2968 47.3492 38.3909C47.0504 38.4846 46.7324 38.3183 46.6385 38.019C46.4618 37.4552 45.8938 37.2423 45.4246 37.3235C45.1947 37.3633 44.8114 37.5045 44.8297 38.0064C44.8436 38.3855 44.9719 38.4971 45.9067 38.6163C46.4667 38.688 47.1019 38.7691 47.461 39.263C47.6775 39.5605 47.7437 39.9455 47.6578 40.4079C47.5129 41.1814 46.9543 41.7406 46.1885 41.9181V42.1664C46.1885 42.4801 45.9349 42.7341 45.6218 42.7341C45.3087 42.7341 45.0551 42.4801 45.0551 42.1664V41.8984C44.3176 41.6994 43.7263 41.1437 43.5183 40.3949C43.4346 40.0929 43.6109 39.7796 43.9128 39.6958C44.2142 39.6116 44.5269 39.7886 44.6105 40.0911C44.7617 40.6365 45.2716 40.8619 45.7131 40.8426C45.8808 40.8354 46.4372 40.7678 46.5437 40.1995C46.5763 40.0248 46.5548 39.9459 46.545 39.9325C46.4734 39.8343 46.0114 39.7752 45.7632 39.7433C45.0104 39.647 43.75 39.4857 43.6967 38.0485C43.6645 37.1693 44.2035 36.4635 45.0547 36.2426V35.9845C45.0551 35.6703 45.3087 35.4162 45.6218 35.4162ZM52 46.1767V45.2732C52 44.0785 51.0299 43.107 49.8379 43.107H48.6669C49.8835 42.1825 50.6707 40.7194 50.6707 39.0752C50.6707 36.9932 49.4085 35.2016 47.6113 34.4263V21.0636C47.6113 20.7499 47.3577 20.4958 47.0446 20.4958H41.5324C41.2193 20.4958 40.9657 20.7499 40.9657 21.0636V36.9564H38.4135V24.3237C38.4135 24.0101 38.1599 23.756 37.8468 23.756H32.3341C32.021 23.756 31.7674 24.0101 31.7674 24.3237V46.1534H29.2153V28.183C29.2153 27.8693 28.9616 27.6152 28.6486 27.6152H23.1359C22.8228 27.6152 22.5692 27.8693 22.5692 28.183V46.1534H20.017V34.1718C20.017 33.8581 19.7634 33.604 19.4503 33.604H13.9376C13.6245 33.604 13.3709 33.8581 13.3709 34.1718V46.1538H13.3038C12.585 46.1538 12 46.74 12 47.4601V47.9615C12 48.6817 12.585 49.2678 13.3038 49.2678H36.4652C36.8333 49.9378 37.5449 50.3931 38.3607 50.3931H41.8186C41.879 51.534 42.8246 52.4433 43.9776 52.4433H49.8379C51.0299 52.4433 52 51.4713 52 50.277V49.3736C52 48.7413 51.7281 48.1717 51.2955 47.7751C51.7281 47.3785 52 46.809 52 46.1767ZM41.8186 45.1572H38.3607C37.7936 45.1572 37.332 44.6947 37.332 44.1265V43.2231C37.332 42.6548 37.7936 42.1924 38.3607 42.1924H41.6496C42.0123 42.6553 42.4529 43.0532 42.9525 43.366C42.308 43.7155 41.8593 44.3828 41.8186 45.1572ZM37.332 40.0261V39.1227C37.332 38.5545 37.7936 38.092 38.3607 38.092H40.6691C40.6065 38.4102 40.5725 38.7386 40.5725 39.0747C40.5725 39.7779 40.7165 40.4474 40.9764 41.0564H38.3607C37.7936 41.0568 37.332 40.5943 37.332 40.0261ZM49.5373 39.0752C49.5373 41.2383 47.7808 42.9981 45.6218 42.9981C43.4628 42.9981 41.7064 41.2383 41.7064 39.0752C41.7064 38.5244 41.8209 38.0006 42.0262 37.5242H42.0995V37.3638C42.7351 36.0557 44.0751 35.1518 45.6223 35.1518C47.7808 35.1523 49.5373 36.9121 49.5373 39.0752ZM46.4775 21.6314V34.0907C46.1993 34.0427 45.9135 34.0163 45.6214 34.0163C44.2523 34.0163 43.0093 34.5661 42.0986 35.4557V21.6309L46.4775 21.6314ZM32.9008 24.892H37.2797V37.2482C36.6342 37.6233 36.1986 38.3228 36.1986 39.1227V40.0261C36.1986 40.6584 36.4705 41.228 36.9031 41.6246C36.4705 42.0212 36.1986 42.5907 36.1986 43.2231V44.1265C36.1986 44.7588 36.4705 45.3284 36.9031 45.7249C36.7653 45.8513 36.6441 45.9956 36.5425 46.1538H32.9008V24.892ZM23.7026 28.7512H28.0814V46.1538H23.7026V28.7512ZM14.5043 34.7396H18.8831V46.1538H14.5043V34.7396ZM13.1334 47.9615V47.4601C13.1334 47.3678 13.2112 47.2894 13.3038 47.2894H36.1995C36.1995 47.3006 36.1986 47.3118 36.1986 47.3234V48.1323H13.3038C13.2117 48.1323 13.1334 48.0539 13.1334 47.9615ZM41.8186 49.2575H38.3607C37.7936 49.2575 37.332 48.7951 37.332 48.2268V47.3234C37.332 46.7552 37.7936 46.2927 38.3607 46.2927H41.8186C41.8495 46.8784 42.1138 47.4032 42.52 47.7751C42.1138 48.1471 41.8495 48.6718 41.8186 49.2575ZM50.8666 49.3736V50.277C50.8666 50.8452 50.405 51.3077 49.8379 51.3077H43.9776C43.4105 51.3077 42.9489 50.8452 42.9489 50.277V49.3736C42.9489 48.8054 43.4105 48.3429 43.9776 48.3429H49.8379C50.405 48.3429 50.8666 48.8054 50.8666 49.3736ZM43.9776 47.2074C43.4105 47.2074 42.9489 46.7449 42.9489 46.1767V45.2732C42.9489 44.705 43.4105 44.2425 43.9776 44.2425H49.8379C50.405 44.2425 50.8666 44.705 50.8666 45.2732V46.1767C50.8666 46.7449 50.405 47.2074 49.8379 47.2074H43.9776Z"
                                        fill="#3D70F1"></path>
                                </svg>
                            </div>
                            <h3 class="principles-item-title"><?php echo getLang('etf_type_1_title') ?></h3>
                            <p id="iz572v"><?php echo getLang('etf_type_1_text') ?></p>
                        </div>
                    </div>
                    <div class="principles-item">
                        <div class="principles-item-inner">
                            <div class="principles-item-icon">
                                <svg width="65" height="66" viewBox="0 0 65 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect y="0.524414" width="65" height="65" rx="4.64286" fill="#3D70F1" fill-opacity="0.2"></rect>
                                    <path
                                        d="M44.4089 40.4691C44.7247 40.4691 44.9757 40.7201 44.9757 41.0359C44.9757 41.3517 44.7247 41.6027 44.4089 41.6027H42.5789C42.0283 41.6027 41.5101 41.9671 41.5101 42.5015C41.5101 43.1249 42.2389 43.2221 42.9676 43.3193C44.1903 43.4812 45.413 43.6513 45.413 45.2545C45.413 46.3314 44.5223 47.1573 43.4615 47.2707V47.7727C43.4615 48.0885 43.2105 48.3395 42.8947 48.3395C42.5789 48.3395 42.3279 48.0885 42.3279 47.7727V47.2788H41.0486C40.7328 47.2788 40.4818 47.0278 40.4818 46.712C40.4818 46.3962 40.7328 46.1452 41.0486 46.1452H43.2024C43.753 46.1452 44.2712 45.7808 44.2712 45.2464C44.2712 44.6229 43.5425 44.5258 42.8057 44.4286C41.583 44.2666 40.3603 44.0966 40.3603 42.4853C40.3603 41.4083 41.2591 40.5824 42.3117 40.4691V39.967C42.3117 39.6513 42.5627 39.4002 42.8785 39.4002C43.1943 39.4002 43.4453 39.6513 43.4453 39.967V40.461H44.4089V40.4691ZM42.9028 35.7727C43.3806 35.7727 43.8502 35.8132 44.3117 35.8942C46.7409 29.0683 43.9555 21.4569 37.6478 17.8132C34.247 15.8456 30.0607 15.2059 25.9959 16.3719C27.9716 19.5703 27.4777 23.6998 24.8299 26.3476C22.3441 28.8334 18.5141 29.4488 15.3724 27.8132C14.0607 34.1614 16.9838 40.6472 22.5951 43.8942C26.1984 45.9751 30.7004 46.55 34.9028 45.133C34.1336 40.21 37.9312 35.7727 42.9028 35.7727ZM45.4049 36.1695C48.6923 37.2383 51 40.3233 51 43.878C51 48.3476 47.3725 51.9752 42.9028 51.9752C39.251 51.9752 36.166 49.5622 35.1538 46.2424C26.2874 49.1169 16.8785 43.9994 14.4818 35.044C13.7854 32.4529 13.7449 29.7565 14.3522 27.1816C10.3198 24.2585 9.84207 18.4205 13.3724 14.8982C16.7328 11.5379 22.2307 11.7808 25.2915 15.4002C29.7449 13.9994 34.4332 14.6472 38.2146 16.8334C44.9514 20.7363 47.9636 28.8577 45.4049 36.1695ZM47.8259 38.9468C45.1053 36.2262 40.6923 36.2262 37.9716 38.9468C36.7085 40.21 35.9312 41.9509 35.9312 43.878C35.9312 47.7241 39.0486 50.8415 42.8947 50.8415C46.7409 50.8415 49.8664 47.7241 49.8664 43.878C49.8664 41.9509 49.0891 40.21 47.8259 38.9468ZM20.6113 17.214C20.9271 17.214 21.1781 17.465 21.1781 17.7808C21.1781 18.0966 20.9271 18.3476 20.6113 18.3476H18.7813C18.2307 18.3476 17.7125 18.712 17.7125 19.2464C17.7125 19.8699 18.4413 19.967 19.17 20.0642C20.3927 20.2261 21.6154 20.3962 21.6154 21.9994C21.6154 23.0763 20.7247 23.9023 19.6639 24.0156V24.5176C19.6639 24.8334 19.4129 25.0844 19.0971 25.0844C18.7813 25.0844 18.5303 24.8334 18.5303 24.5176V24.0237H17.2591C16.9433 24.0237 16.6923 23.7727 16.6923 23.4569C16.6923 23.1411 16.9433 22.8901 17.2591 22.8901H19.4129C19.9635 22.8901 20.4818 22.5257 20.4818 21.9913C20.4818 21.3678 19.753 21.2707 19.0243 21.1735C17.8016 21.0116 16.5789 20.8415 16.5789 19.2302C16.5789 18.1533 17.4777 17.3274 18.5303 17.214V16.712C18.5303 16.3962 18.7813 16.1452 19.0971 16.1452C19.4129 16.1452 19.6639 16.3962 19.6639 16.712V17.2059H20.6113V17.214ZM24.0283 15.6998C21.3077 12.9792 16.8947 12.9792 14.1741 15.6998C12.9109 16.963 12.1336 18.7039 12.1336 20.6229C12.1336 24.4691 15.251 27.5865 19.0971 27.5865C22.9433 27.5865 26.0607 24.4691 26.0607 20.6229C26.0688 18.7039 25.2915 16.963 24.0283 15.6998ZM22.5141 35.1087H37.7206V34.0723H22.5141V35.1087ZM38.2874 36.2423H21.9473C21.6316 36.2423 21.3805 35.9913 21.3805 35.6755V33.5055C21.3805 33.1897 21.6316 32.9387 21.9473 32.9387H23.2753V29.133C23.2753 28.8172 23.5263 28.5662 23.8421 28.5662H26.3522C26.668 28.5662 26.919 28.8172 26.919 29.133V32.9387H28.2955V26.6958C28.2955 26.38 28.5465 26.129 28.8623 26.129H31.3725C31.6882 26.129 31.9393 26.38 31.9393 26.6958V32.9387H33.3158V22.1452C33.3158 21.8294 33.5668 21.5784 33.8826 21.5784H36.3927C36.7085 21.5784 36.9595 21.8294 36.9595 22.1452V32.9387H38.2874C38.6032 32.9387 38.8542 33.1897 38.8542 33.5055V35.6755C38.8542 35.9832 38.6032 36.2423 38.2874 36.2423ZM24.4089 32.9387H25.7854V29.6998H24.4089V32.9387ZM30.8057 27.2626H29.4291V32.9387H30.8057V27.2626ZM35.8259 22.712H34.4494V32.9387H35.8259V22.712Z"
                                        fill="#3D70F1"></path>
                                </svg>
                            </div>
                            <h3 class="principles-item-title"><?php echo getLang('etf_type_2_title') ?></h3>
                            <p id="i1562h"><?php echo getLang('etf_type_2_text') ?></p>
                        </div>
                    </div>
                    <div class="principles-item">
                        <div class="principles-item-inner">
                            <div class="principles-item-icon">
                                <svg width="65" height="66" viewBox="0 0 65 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect y="0.524414" width="65" height="65" rx="4.64286" fill="#3D70F1" fill-opacity="0.2"></rect>
                                    <path
                                        d="M32.7046 35.2404C32.9606 35.2404 33.1976 35.1361 33.3778 34.9654C33.5484 34.7948 33.6527 34.5577 33.6527 34.3018C33.6527 34.0363 33.5484 33.7993 33.3778 33.6286C33.2071 33.458 32.9701 33.3537 32.7046 33.3537C32.4392 33.3537 32.2117 33.458 32.0315 33.6286C31.8609 33.7993 31.7566 34.0363 31.7566 34.3018C31.7566 34.5577 31.8609 34.7947 32.0315 34.9654C32.2116 35.1361 32.4487 35.2404 32.7046 35.2404ZM34.3163 35.904C33.9087 36.3117 33.3398 36.5677 32.7046 36.5677C32.0789 36.5677 31.5101 36.3117 31.0929 35.904C30.8369 35.6385 30.6379 35.3162 30.5241 34.956H25.5942C24.7125 34.956 23.9067 35.3162 23.3189 35.8945C22.7311 36.4823 22.3708 37.2882 22.3708 38.1699C22.3708 39.0516 22.7311 39.8575 23.3189 40.4453C23.9067 41.0331 24.7125 41.3933 25.5942 41.3933H39.3221C39.4169 40.9857 39.635 40.6159 39.9194 40.322C40.3271 39.9144 40.8959 39.6584 41.5311 39.6584C42.1569 39.6584 42.7257 39.9143 43.1429 40.322C43.5505 40.7297 43.8065 41.2985 43.8065 41.9337C43.8065 42.5595 43.5505 43.1283 43.1429 43.5454C42.7257 43.9531 42.1664 44.2091 41.5311 44.2091C40.9054 44.2091 40.3366 43.9531 39.9194 43.5454C39.6919 43.3179 39.5118 43.0335 39.398 42.7301H25.5939C24.3425 42.7301 23.2048 42.2181 22.3799 41.3933C21.5551 40.5685 21.0432 39.4308 21.0432 38.1794C21.0432 36.9279 21.5551 35.7902 22.3799 34.9749C23.2048 34.1501 24.3425 33.6381 25.5844 33.6381H30.524C30.6377 33.2778 30.8274 32.9555 31.0928 32.6995C31.5005 32.2919 32.0693 32.0359 32.7045 32.0359C33.3303 32.0359 33.8991 32.2918 34.3162 32.6995C34.5722 32.9555 34.7713 33.2778 34.8851 33.6381H39.8149C40.7061 33.6381 41.512 33.2778 42.0903 32.6901C42.6781 32.1117 43.0289 31.3059 43.0289 30.4147C43.0289 29.533 42.6686 28.7271 42.0808 28.1393C41.493 27.5515 40.6966 27.2007 39.8055 27.2007H26.2858C26.172 27.5705 25.9729 27.8928 25.717 28.1583C25.3093 28.566 24.7405 28.822 24.1052 28.822C23.4795 28.822 22.9107 28.566 22.4935 28.1583C22.0859 27.7506 21.8299 27.1818 21.8299 26.5466C21.8299 25.9209 22.0859 25.3521 22.4935 24.9349C22.9012 24.5272 23.47 24.2712 24.1052 24.2712C24.731 24.2712 25.2998 24.5272 25.717 24.9349C25.9729 25.1909 26.172 25.5132 26.2858 25.864H39.8147C41.0661 25.864 42.2038 26.376 43.0192 27.2008C43.844 28.0256 44.3559 29.1633 44.3559 30.4053C44.3559 31.6472 43.844 32.7944 43.0192 33.6192C42.1944 34.444 41.0567 34.956 39.8147 34.956H34.8849C34.7711 35.3163 34.5723 35.6385 34.3163 35.904ZM41.531 42.8818C41.7965 42.8818 42.0335 42.7775 42.2041 42.6068C42.3748 42.4362 42.4791 42.1992 42.4791 41.9337C42.4791 41.6778 42.3748 41.4407 42.2041 41.2606C42.0335 41.09 41.7965 40.9857 41.531 40.9857C41.275 40.9857 41.038 41.09 40.8673 41.2606C40.6967 41.4313 40.5924 41.6683 40.5924 41.9337C40.5924 42.1897 40.6967 42.4267 40.8673 42.6068C41.038 42.768 41.275 42.8818 41.531 42.8818ZM24.1057 27.4948C24.3617 27.4948 24.5987 27.3905 24.7788 27.2198C24.8831 27.1155 24.959 26.9923 25.0064 26.8501C24.959 26.7553 24.9211 26.651 24.9211 26.5372C24.9211 26.4234 24.9495 26.3191 24.9969 26.2338C24.9495 26.1011 24.8737 25.9778 24.7694 25.883C24.5987 25.7124 24.3617 25.6081 24.0962 25.6081C23.8403 25.6081 23.6033 25.7124 23.4231 25.883C23.2525 26.0537 23.1482 26.2907 23.1482 26.5562C23.1482 26.8216 23.2525 27.0491 23.4231 27.2293C23.6127 27.3904 23.8498 27.4948 24.1057 27.4948ZM21.0814 50.296H44.3185C44.6693 50.296 44.9821 50.1537 45.2096 49.9262C45.4372 49.6987 45.5794 49.3858 45.5794 49.035V21.5127C45.5794 21.1619 45.4372 20.8585 45.2096 20.6216C44.9821 20.394 44.6692 20.2518 44.3185 20.2518H21.0814C20.7401 20.2518 20.4272 20.394 20.1902 20.6216C19.9532 20.8491 19.8205 21.162 19.8205 21.5127V49.0448C19.8205 49.3955 19.9627 49.7084 20.1902 49.9359C20.4272 50.154 20.7401 50.296 21.0814 50.296ZM44.3185 51.6233H21.0814C20.3703 51.6233 19.7256 51.3294 19.2611 50.8648C18.7965 50.3908 18.5026 49.7461 18.5026 49.035V21.5127C18.5026 20.8017 18.7965 20.157 19.2611 19.683C19.7256 19.2184 20.3703 18.9245 21.0814 18.9245H44.3185C45.0295 18.9245 45.6742 19.2184 46.1482 19.683C46.6128 20.157 46.9067 20.8017 46.9067 21.5127V49.0448C46.9067 49.7558 46.6128 50.4005 46.1482 50.8745C45.6837 51.3391 45.039 51.6233 44.3185 51.6233ZM32.7045 14.0607C32.714 14.0607 32.733 14.0512 32.7425 14.0418C32.7519 14.0323 32.7614 14.0228 32.7614 14.0038C32.7614 13.9944 32.7519 13.9754 32.7425 13.9659C32.733 13.9564 32.714 13.9564 32.7045 13.9564C32.6856 13.9564 32.6761 13.9659 32.6666 13.9659C32.6571 13.9754 32.6477 13.9944 32.6477 14.0038C32.6477 14.0228 32.6571 14.0323 32.6666 14.0418C32.6761 14.0607 32.6856 14.0607 32.7045 14.0607ZM33.681 14.9898C33.4345 15.2363 33.0837 15.3975 32.7045 15.3975C32.3253 15.3975 31.9745 15.2458 31.728 14.9898C31.4815 14.7339 31.3204 14.3925 31.3204 14.0133C31.3204 13.6341 31.4721 13.2833 31.728 13.0368C31.984 12.7903 32.3253 12.6292 32.7045 12.6292C33.0837 12.6292 33.4345 12.7809 33.681 13.0368C33.9275 13.2928 34.0887 13.6341 34.0887 14.0133C34.0792 14.3926 33.9275 14.7339 33.681 14.9898ZM26.9969 16.7912H38.4118C38.5256 16.7912 38.6204 16.7532 38.6868 16.6963C38.7152 16.6679 38.7437 16.63 38.7532 16.6015V16.5921V15.0562C38.7532 15.0183 38.7247 14.9708 38.6868 14.9424C38.6204 14.8855 38.5256 14.8476 38.4118 14.8476H35.3875C35.0178 14.8476 34.7238 14.5537 34.7238 14.1839C34.7238 14.0986 34.7428 14.0228 34.7618 13.9564C34.7712 13.909 34.7902 13.8616 34.7902 13.8047C34.7997 13.7478 34.7997 13.672 34.7997 13.5961C34.7997 13.1316 34.5722 12.705 34.2214 12.4016C33.8327 12.0698 33.3018 11.8612 32.7045 11.8612C32.1072 11.8612 31.5668 12.0698 31.1876 12.4016C30.8273 12.7145 30.6092 13.1316 30.6092 13.5961C30.6092 13.672 30.6187 13.7384 30.6187 13.8047C30.6282 13.8806 30.6472 13.9469 30.6661 14.0038C30.7704 14.3546 30.5618 14.7244 30.211 14.8192C30.1447 14.8381 30.0878 14.8476 30.0214 14.8476H26.9971C26.8833 14.8476 26.7885 14.8855 26.7221 14.9424C26.6842 14.9708 26.6558 15.0183 26.6558 15.0562V16.5921V16.6015V16.611C26.6653 16.6489 26.6842 16.6774 26.7221 16.7058C26.7885 16.7627 26.8832 16.7912 26.9969 16.7912ZM38.4118 18.1185H26.9969C26.5608 18.1185 26.1531 17.9573 25.8592 17.7013C25.7455 17.6065 25.6412 17.4833 25.5558 17.36H18.9382C18.4926 17.36 18.0945 17.5401 17.8005 17.834C17.5066 18.1279 17.3265 18.5261 17.3265 18.9717V51.5855C17.3265 52.0311 17.5066 52.4293 17.8005 52.7232C18.0944 53.0171 18.4926 53.1973 18.9382 53.1973H46.4703C46.9158 53.1973 47.314 53.0171 47.608 52.7232C47.9019 52.4293 48.082 52.0311 48.082 51.5855V18.9717C48.082 18.5262 47.9019 18.128 47.608 17.834C47.3141 17.5401 46.9159 17.36 46.4703 17.36H39.8526C39.7673 17.4833 39.6725 17.6065 39.5587 17.7013C39.2554 17.9668 38.848 18.1185 38.4118 18.1185ZM25.3286 16.0327V15.0562C25.3286 14.6201 25.5277 14.2219 25.8595 13.9375C26.1534 13.6815 26.5611 13.5203 26.9972 13.5203H29.2726C29.2915 12.686 29.6897 11.9371 30.306 11.3966C30.9222 10.8562 31.766 10.5244 32.6951 10.5244C33.6242 10.5244 34.468 10.8562 35.0843 11.3966C35.71 11.9371 36.0987 12.686 36.1271 13.5203H38.4025C38.8386 13.5203 39.2463 13.6815 39.5402 13.9375C39.8625 14.2219 40.0616 14.6106 40.0616 15.0562V16.0327H46.4613C47.2672 16.0327 48.0066 16.3645 48.5375 16.8954C49.0684 17.4263 49.4002 18.1658 49.4002 18.9717V51.5854C49.4002 52.3913 49.0684 53.1308 48.5375 53.6617C48.0066 54.1926 47.2671 54.5244 46.4613 54.5244H18.939C18.1331 54.5244 17.3936 54.1926 16.8627 53.6617C16.3318 53.1308 16 52.3913 16 51.5854V18.9717C16 18.1658 16.3318 17.4263 16.8627 16.8954C17.3936 16.3645 18.1331 16.0327 18.939 16.0327H25.3286Z"
                                        fill="#3D70F1"></path>
                                </svg>
                            </div>
                            <h3 class="principles-item-title"><?php echo getLang('etf_type_3_title') ?></h3>
                            <p id="ip2o6i"><?php echo getLang('etf_type_3_text') ?></p>
                        </div>
                    </div>
                    <div class="principles-item">
                        <div class="principles-item-inner">
                            <div class="principles-item-icon">
                                <svg width="65" height="66" viewBox="0 0 65 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect y="0.524414" width="65" height="65" rx="4.64286" fill="#3D70F1" fill-opacity="0.2"></rect>
                                    <path
                                        d="M23.9721 23.2094C25.4671 23.2094 26.2272 25.0337 25.163 26.0895C24.0988 27.1537 22.2829 26.3935 22.2829 24.8986C22.2829 23.9695 23.0431 23.2094 23.9721 23.2094ZM24.4789 24.4003C24.0313 23.9526 23.2627 24.2736 23.2627 24.907C23.2627 25.5405 24.0313 25.8614 24.4789 25.4138C24.7576 25.1266 24.7576 24.679 24.4789 24.4003ZM32.756 23.2094C34.2509 23.2094 35.011 25.0337 33.9468 26.0895C32.8826 27.1537 31.0668 26.3935 31.0668 24.8986C31.0668 23.9695 31.8269 23.2094 32.756 23.2094ZM33.2627 24.4003C32.8151 23.9526 32.0465 24.2736 32.0465 24.907C32.0465 25.5405 32.8151 25.8614 33.2627 25.4138C33.533 25.1266 33.533 24.679 33.2627 24.4003ZM28.364 23.2094C29.859 23.2094 30.6191 25.0337 29.5549 26.0895C28.4907 27.1537 26.6749 26.3935 26.6749 24.8986C26.6749 23.9695 27.435 23.2094 28.364 23.2094ZM28.8708 24.4003C28.4232 23.9526 27.6546 24.2736 27.6546 24.907C27.6546 25.5405 28.4232 25.8614 28.8708 25.4138C29.1495 25.1266 29.1495 24.679 28.8708 24.4003ZM38.4063 30.5912L39.9519 32.1199C40.56 31.9848 41.2104 32.1537 41.6665 32.6098L45.2644 36.174C46.6411 37.5338 46.658 39.7719 45.2982 41.1486C43.9384 42.5253 41.7002 42.5422 40.3236 41.1824L36.7171 37.6182C36.2526 37.1621 36.0752 36.5118 36.2104 35.9037L34.783 34.4932C33.1783 35.5743 31.3539 36.2077 29.4789 36.3936C23.1444 37.0101 17.4941 32.3648 16.8775 26.0303C16.261 19.6959 20.9063 14.0455 27.2407 13.4289C33.5752 12.8124 39.2256 17.4577 39.8421 23.7922C40.0786 26.0979 39.6056 28.4797 38.4063 30.5912ZM39.0651 32.6013L37.8827 31.4273C37.2408 32.3648 36.4637 33.201 35.5938 33.902L36.7002 35L39.0651 32.6013ZM34.5296 33.4881C34.555 33.4712 34.5803 33.4544 34.6056 33.4375C35.3066 32.9223 35.957 32.3141 36.5313 31.6131C40.2306 27.103 39.5803 20.4476 35.0786 16.7398C32.8235 14.8901 30.0279 14.13 27.3421 14.3918C21.5397 14.9577 17.2914 20.1351 17.8573 25.9374C18.4231 31.7398 23.6005 35.9881 29.4029 35.4223C31.2188 35.2365 32.9924 34.5861 34.5296 33.4881ZM39.7408 33.3023L37.4012 35.6672C37.0634 36.0135 37.0634 36.5709 37.4097 36.9172L41.0077 40.473C42.604 42.0524 45.3574 40.929 45.3405 38.6486C45.3405 37.9983 45.0871 37.3479 44.5888 36.8581L40.9908 33.2939C40.6445 32.956 40.0871 32.956 39.7408 33.3023ZM21.9536 19.6283C24.859 16.0894 30.0955 15.5742 33.6343 18.4881C37.1816 21.4019 37.6884 26.6469 34.7745 30.1773C31.8522 33.7246 26.6157 34.2229 23.0938 31.3175C19.5549 28.3952 19.0397 23.1756 21.9536 19.6283ZM27.6546 17.6097C23.6259 18.0067 20.6782 21.5962 21.0752 25.6165C21.4721 29.6452 25.0617 32.5929 29.082 32.1959C33.1107 31.7989 36.0583 28.2094 35.6614 24.1891C35.2644 20.1604 31.6749 17.2127 27.6546 17.6097ZM21.7171 37.255H26.4975C27.4434 37.255 28.2711 37.8885 28.5245 38.7838C30.6529 37.4155 35.636 40.8953 36.9367 41.7652C37.207 41.951 37.1648 42.0693 37.2746 42.0693H39.3016C40.3827 42.0693 41.2779 42.8885 41.4046 43.9443L49.5043 41.7905C51.751 41.1909 53.2374 44.375 51.6158 45.8277C44.7323 51.9764 36.9367 55.2027 28.8032 51.1233C28.7357 51.0896 28.6681 51.0473 28.609 51.0135C28.4823 52.0608 27.587 52.8717 26.5144 52.8717H21.734C20.712 52.8717 19.8505 52.1453 19.6562 51.1656H15.011C13.516 51.1656 12.2998 49.9493 12.2998 48.4544V41.6807C12.2998 40.1858 13.516 38.9696 15.011 38.9696H19.6562C19.8336 37.9814 20.7036 37.255 21.7171 37.255ZM28.609 40.4307V49.4088C28.6343 49.7551 28.9046 50.0929 29.2255 50.2534C36.9789 54.1385 44.3945 50.9713 50.957 45.1014C51.827 44.3243 50.9993 42.3986 49.7493 42.728L41.3624 44.9578C40.8894 47.2382 37.6546 47.9054 35.5009 47.6436C34.859 47.5676 34.9772 46.5963 35.6191 46.6723C36.8607 46.8243 38.2458 46.6554 39.2594 46.098C39.935 45.7264 40.4249 45.1774 40.4418 44.5017C40.4587 44.0541 40.4418 43.7078 40.104 43.3699C39.9013 43.1588 39.6141 43.0321 39.3016 43.0321H37.2746C37.0972 43.0321 36.8269 42.8463 36.3962 42.5591C35.18 41.7399 32.359 39.8395 30.3742 39.4848C29.4874 39.3412 28.7863 39.5439 28.609 40.4307ZM19.6056 50.1858V39.9409H15.0025C14.0481 39.9409 13.2626 40.7263 13.2626 41.6723V48.446C13.2626 49.4004 14.0481 50.1858 15.0025 50.1858H19.6056ZM26.4975 38.2263H21.7171C21.0921 38.2263 20.5769 38.7415 20.5769 39.3665V50.7517C20.5769 51.3767 21.0921 51.8919 21.7171 51.8919H26.4975C27.1225 51.8919 27.6377 51.3767 27.6377 50.7517V39.3665C27.6377 38.7415 27.1225 38.2263 26.4975 38.2263Z"
                                        fill="#3D70F1"></path>
                                </svg>
                            </div>
                            <h3 class="principles-item-title"><?php echo getLang('etf_type_4_title') ?></h3>
                            <p id="ipf528"><?php echo getLang('etf_type_4_text') ?></p>
                        </div>
                    </div>
                </div>
                <div class="text-center"><a href="#form-main" class="btn-link"><?php echo getLang('etfs_learn_btn') ?></a></div>
            </div>
        </section>
        <section class="assets-section education-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 order-2 order-md-1">
                        <div class="assets-content-wrap">
                            <div class="assets-content-item active">
                                <h2 class="title"><?php echo getLang('assets_esg_title') ?></h2>
                                <div class="quote"><?php echo getLang('assets_esg_quote') ?></div>
                                <p id="ims8qw"><?php echo getLang('assets_esg_text') ?></p>
                            </div>
                            <div class="assets-content-item">
                                <h2 class="title"><?php echo getLang('assets_market_cap_title') ?></h2>
                                <div class="quote"><?php echo getLang('assets_market_cap_quote') ?></div>
                                <p id="iwxhyq"><?php echo getLang('assets_market_cap_text_1') ?></p>
                                <p id="izl3ag"><?php echo getLang('assets_market_cap_text_2') ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-4 offset-lg-1 order-1 order-md-2">
                        <div class="assets-title-wrap">
                            <div class="assets-title active">
                                <div class="assets-title-inner">
                                    <span id="ic8o8y"><?php echo getLang('assets_esg_title') ?></span>
                                    <div class="assets-title-arrow">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="#3D70F1"></rect>
                                            <path
                                                d="M13.2353 11.1651C12.7742 11.1586 12.3951 11.5271 12.3886 11.9882C12.3821 12.4494 12.7507 12.8284 13.2118 12.8349L13.2353 11.1651ZM19.9059 12.0941L20.7408 12.0824C20.7344 11.6304 20.3696 11.2656 19.9176 11.2592L19.9059 12.0941ZM19.1651 18.7882C19.1716 19.2493 19.5506 19.6179 20.0118 19.6114C20.4729 19.6049 20.8414 19.2258 20.8349 18.7647L19.1651 18.7882ZM11.4096 19.4096C11.0835 19.7357 11.0835 20.2643 11.4096 20.5904C11.7357 20.9165 12.2643 20.9165 12.5904 20.5904L11.4096 19.4096ZM13.2118 12.8349L19.8941 12.929L19.9176 11.2592L13.2353 11.1651L13.2118 12.8349ZM19.071 12.1059L19.1651 18.7882L20.8349 18.7647L20.7408 12.0824L19.071 12.1059ZM19.3154 11.5037L11.4096 19.4096L12.5904 20.5904L20.4963 12.6846L19.3154 11.5037Z"
                                                fill="#0D121B"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="assets-title">
                                <div class="assets-title-inner">
                                    <span id="ik537z"><?php echo getLang('assets_market_cap_title') ?></span>
                                    <div class="assets-title-arrow">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" id="iunre9">
                                            <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="#3D70F1"></rect>
                                            <path
                                                d="M13.2353 11.1651C12.7742 11.1586 12.3951 11.5271 12.3886 11.9882C12.3821 12.4494 12.7507 12.8284 13.2118 12.8349L13.2353 11.1651ZM19.9059 12.0941L20.7408 12.0824C20.7344 11.6304 20.3696 11.2656 19.9176 11.2592L19.9059 12.0941ZM19.1651 18.7882C19.1716 19.2493 19.5506 19.6179 20.0118 19.6114C20.4729 19.6049 20.8414 19.2258 20.8349 18.7647L19.1651 18.7882ZM11.4096 19.4096C11.0835 19.7357 11.0835 20.2643 11.4096 20.5904C11.7357 20.9165 12.2643 20.9165 12.5904 20.5904L11.4096 19.4096ZM13.2118 12.8349L19.8941 12.929L19.9176 11.2592L13.2353 11.1651L13.2118 12.8349ZM19.071 12.1059L19.1651 18.7882L20.8349 18.7647L20.7408 12.0824L19.071 12.1059ZM19.3154 11.5037L11.4096 19.4096L12.5904 20.5904L20.4963 12.6846L19.3154 11.5037Z"
                                                fill="#0D121B"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="metrics-section">
            <div id="ij8dlz" class="container text-center">
                <h2 class="title"><?php echo getLang('metrics_hedging_title') ?></h2>
                <p id="i3n4lk"><?php echo getLang('metrics_hedging_text') ?></p>
                <h2 class="fs-20 text-uppercase color-green mb-4 mb-md-5"><?php echo getLang('metrics_terms_title') ?></h2>
            </div>
            <div class="container">
                <div class="row metrics-list">
                    <div class="col-md-4">
                        <div class="metrics-item"><input type="checkbox">
                            <div class="metrics-item-title-wrap">
                                <h3 class="metrics-item-title"><?php echo getLang('metrics_volatility_title') ?>
                                    <div class="metrics-item-title-arrow">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" id="ih0y7w">
                                            <path
                                                d="M12.3171 9.33349C11.5808 9.32312 10.9755 9.9116 10.9652 10.6479C10.9548 11.3842 11.5433 11.9895 12.2796 11.9999L12.3171 9.33349ZM21.2082 10.7922L22.5414 10.7734C22.5312 10.0517 21.9486 9.46914 21.2269 9.45898L21.2082 10.7922ZM20.0005 19.7208C20.0108 20.4571 20.6161 21.0456 21.3524 21.0352C22.0887 21.0248 22.6772 20.4195 22.6669 19.6832L20.0005 19.7208ZM9.72418 20.3905C9.20348 20.9112 9.20348 21.7555 9.72418 22.2762C10.2449 22.7969 11.0891 22.7969 11.6098 22.2762L9.72418 20.3905ZM12.2796 11.9999L21.1894 12.1254L21.2269 9.45898L12.3171 9.33349L12.2796 11.9999ZM19.875 10.811L20.0005 19.7208L22.6669 19.6832L22.5414 10.7734L19.875 10.811ZM20.2654 9.84937L9.72418 20.3905L11.6098 22.2762L22.151 11.735L20.2654 9.84937Z"
                                                fill="#0D121B"></path>
                                        </svg>
                                    </div>
                                </h3>
                            </div>
                            <div class="metrics-item-content">
                                <p id="i2mfzq"><?php echo getLang('metrics_volatility_text') ?></p>
                            </div>
                        </div>
                        <div class="metrics-item">
                            <input type="checkbox">
                            <div class="metrics-item-title-wrap">
                                <h3 class="metrics-item-title"><?php echo getLang('metrics_asset_title') ?>
                                    <div class="metrics-item-title-arrow">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" id="iux8c8">
                                            <path
                                                d="M12.3171 9.33349C11.5808 9.32312 10.9755 9.9116 10.9652 10.6479C10.9548 11.3842 11.5433 11.9895 12.2796 11.9999L12.3171 9.33349ZM21.2082 10.7922L22.5414 10.7734C22.5312 10.0517 21.9486 9.46914 21.2269 9.45898L21.2082 10.7922ZM20.0005 19.7208C20.0108 20.4571 20.6161 21.0456 21.3524 21.0352C22.0887 21.0248 22.6772 20.4195 22.6669 19.6832L20.0005 19.7208ZM9.72418 20.3905C9.20348 20.9112 9.20348 21.7555 9.72418 22.2762C10.2449 22.7969 11.0891 22.7969 11.6098 22.2762L9.72418 20.3905ZM12.2796 11.9999L21.1894 12.1254L21.2269 9.45898L12.3171 9.33349L12.2796 11.9999ZM19.875 10.811L20.0005 19.7208L22.6669 19.6832L22.5414 10.7734L19.875 10.811ZM20.2654 9.84937L9.72418 20.3905L11.6098 22.2762L22.151 11.735L20.2654 9.84937Z"
                                                fill="#0D121B"></path>
                                        </svg>
                                    </div>
                                </h3>
                            </div>
                            <div class="metrics-item-content">
                                <p id="i31w8i"><?php echo getLang('metrics_asset_text') ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="metrics-item">
                            <input type="checkbox">
                            <div class="metrics-item-title-wrap">
                                <h3 class="metrics-item-title"><?php echo getLang('metrics_asset_class_title') ?>
                                    <div class="metrics-item-title-arrow">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" id="iwut09">
                                            <path
                                                d="M12.3171 9.33349C11.5808 9.32312 10.9755 9.9116 10.9652 10.6479C10.9548 11.3842 11.5433 11.9895 12.2796 11.9999L12.3171 9.33349ZM21.2082 10.7922L22.5414 10.7734C22.5312 10.0517 21.9486 9.46914 21.2269 9.45898L21.2082 10.7922ZM20.0005 19.7208C20.0108 20.4571 20.6161 21.0456 21.3524 21.0352C22.0887 21.0248 22.6772 20.4195 22.6669 19.6832L20.0005 19.7208ZM9.72418 20.3905C9.20348 20.9112 9.20348 21.7555 9.72418 22.2762C10.2449 22.7969 11.0891 22.7969 11.6098 22.2762L9.72418 20.3905ZM12.2796 11.9999L21.1894 12.1254L21.2269 9.45898L12.3171 9.33349L12.2796 11.9999ZM19.875 10.811L20.0005 19.7208L22.6669 19.6832L22.5414 10.7734L19.875 10.811ZM20.2654 9.84937L9.72418 20.3905L11.6098 22.2762L22.151 11.735L20.2654 9.84937Z"
                                                fill="#0D121B"></path>
                                        </svg>
                                    </div>
                                </h3>
                            </div>
                            <div class="metrics-item-content">
                                <p id="iij2pi"><?php echo getLang('metrics_asset_class_text') ?></p>
                            </div>
                        </div>
                        <div class="metrics-item"><input type="checkbox">
                            <div class="metrics-item-title-wrap">
                                <h3 class="metrics-item-title"><?php echo getLang('metrics_diversification_title') ?>
                                    <div class="metrics-item-title-arrow">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" id="igqp2a">
                                            <path
                                                d="M12.3171 9.33349C11.5808 9.32312 10.9755 9.9116 10.9652 10.6479C10.9548 11.3842 11.5433 11.9895 12.2796 11.9999L12.3171 9.33349ZM21.2082 10.7922L22.5414 10.7734C22.5312 10.0517 21.9486 9.46914 21.2269 9.45898L21.2082 10.7922ZM20.0005 19.7208C20.0108 20.4571 20.6161 21.0456 21.3524 21.0352C22.0887 21.0248 22.6772 20.4195 22.6669 19.6832L20.0005 19.7208ZM9.72418 20.3905C9.20348 20.9112 9.20348 21.7555 9.72418 22.2762C10.2449 22.7969 11.0891 22.7969 11.6098 22.2762L9.72418 20.3905ZM12.2796 11.9999L21.1894 12.1254L21.2269 9.45898L12.3171 9.33349L12.2796 11.9999ZM19.875 10.811L20.0005 19.7208L22.6669 19.6832L22.5414 10.7734L19.875 10.811ZM20.2654 9.84937L9.72418 20.3905L11.6098 22.2762L22.151 11.735L20.2654 9.84937Z"
                                                fill="#0D121B"></path>
                                        </svg>
                                    </div>
                                </h3>
                            </div>
                            <div class="metrics-item-content">
                                <p id="idt2uk"><?php echo getLang('metrics_diversification_text') ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="metrics-item"><input type="checkbox">
                            <div class="metrics-item-title-wrap">
                                <h3 class="metrics-item-title"><?php echo getLang('metrics_money_market_title') ?>
                                    <div class="metrics-item-title-arrow">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" id="ibp72d">
                                            <path
                                                d="M12.3171 9.33349C11.5808 9.32312 10.9755 9.9116 10.9652 10.6479C10.9548 11.3842 11.5433 11.9895 12.2796 11.9999L12.3171 9.33349ZM21.2082 10.7922L22.5414 10.7734C22.5312 10.0517 21.9486 9.46914 21.2269 9.45898L21.2082 10.7922ZM20.0005 19.7208C20.0108 20.4571 20.6161 21.0456 21.3524 21.0352C22.0887 21.0248 22.6772 20.4195 22.6669 19.6832L20.0005 19.7208ZM9.72418 20.3905C9.20348 20.9112 9.20348 21.7555 9.72418 22.2762C10.2449 22.7969 11.0891 22.7969 11.6098 22.2762L9.72418 20.3905ZM12.2796 11.9999L21.1894 12.1254L21.2269 9.45898L12.3171 9.33349L12.2796 11.9999ZM19.875 10.811L20.0005 19.7208L22.6669 19.6832L22.5414 10.7734L19.875 10.811ZM20.2654 9.84937L9.72418 20.3905L11.6098 22.2762L22.151 11.735L20.2654 9.84937Z"
                                                fill="#0D121B"></path>
                                        </svg>
                                    </div>
                                </h3>
                            </div>
                            <div class="metrics-item-content">
                                <p id="imngvf"><?php echo getLang('metrics_money_market_text') ?></p>
                            </div>
                        </div>
                        <div class="metrics-item"><input type="checkbox">
                            <div class="metrics-item-title-wrap">
                                <h3 class="metrics-item-title"><?php echo getLang('metrics_debt_instrument_title') ?>
                                    <div class="metrics-item-title-arrow">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" id="izmuof">
                                            <path
                                                d="M12.3171 9.33349C11.5808 9.32312 10.9755 9.9116 10.9652 10.6479C10.9548 11.3842 11.5433 11.9895 12.2796 11.9999L12.3171 9.33349ZM21.2082 10.7922L22.5414 10.7734C22.5312 10.0517 21.9486 9.46914 21.2269 9.45898L21.2082 10.7922ZM20.0005 19.7208C20.0108 20.4571 20.6161 21.0456 21.3524 21.0352C22.0887 21.0248 22.6772 20.4195 22.6669 19.6832L20.0005 19.7208ZM9.72418 20.3905C9.20348 20.9112 9.20348 21.7555 9.72418 22.2762C10.2449 22.7969 11.0891 22.7969 11.6098 22.2762L9.72418 20.3905ZM12.2796 11.9999L21.1894 12.1254L21.2269 9.45898L12.3171 9.33349L12.2796 11.9999ZM19.875 10.811L20.0005 19.7208L22.6669 19.6832L22.5414 10.7734L19.875 10.811ZM20.2654 9.84937L9.72418 20.3905L11.6098 22.2762L22.151 11.735L20.2654 9.84937Z"
                                                fill="#0D121B"></path>
                                        </svg>
                                    </div>
                                </h3>
                            </div>
                            <div class="metrics-item-content">
                                <p id="i9gzz6"><?php echo getLang('metrics_debt_instrument_text') ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="padding-60">
            <div class="container">
                <div class="border-box">
                    <div class="border-box-inner border-box-inner-bg">
                        <div class="border-box-row">
                            <div class="border-box-image"><img src="/assets/images/border-box-img.webp" alt="" loading="lazy" width="562" height="500"></div>
                            <div class="border-box-content">
                                <h2 class="title"><?php echo getLang('padding_60_title') ?></h2>
                                <div class="quote"><?php echo getLang('padding_60_quote') ?></div>
                                <p id="if7rik"><?php echo getLang('padding_60_text') ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="faq-section">
            <div class="container">
                <h2 class="title text-center"><?php echo getLang('faq_title') ?></h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="faq-item"><input type="checkbox">
                            <h3 class="faq-item-title">
                                <div class="faq-item-title-icon">
                                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="36" height="36" rx="3" fill="#3D70F1" fill-opacity="0.2"></rect>
                                        <path d="M20.3529 10L21.8782 14.1218L26 15.6471L21.8782 17.1723L20.3529 21.2941L18.8277 17.1723L14.7059 15.6471L18.8277 14.1218L20.3529 10Z" stroke="#3D70F1"
                                            stroke-width="1.4" stroke-linejoin="round"></path>
                                        <path d="M13.2941 19.4118L14.6265 21.3735L16.5882 22.7059L14.6265 24.0382L13.2941 26L11.9618 24.0382L10 22.7059L11.9618 21.3735L13.2941 19.4118Z"
                                            stroke="#3D70F1" stroke-width="1.4" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                                <?php echo getLang('faq_1_question') ?>
                                <div class="faq-item-title-arrow faq-item-collapse">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.3171 9.33349C11.5808 9.32312 10.9755 9.9116 10.9652 10.6479C10.9548 11.3842 11.5433 11.9895 12.2796 11.9999L12.3171 9.33349ZM21.2082 10.7922L22.5414 10.7734C22.5312 10.0517 21.9486 9.46914 21.2269 9.45898L21.2082 10.7922ZM20.0005 19.7208C20.0108 20.4571 20.6161 21.0456 21.3524 21.0352C22.0887 21.0248 22.6772 20.4195 22.6669 19.6832L20.0005 19.7208ZM9.72418 20.3905C9.20348 20.9112 9.20348 21.7555 9.72418 22.2762C10.2449 22.7969 11.0891 22.7969 11.6098 22.2762L9.72418 20.3905ZM12.2796 11.9999L21.1894 12.1254L21.2269 9.45898L12.3171 9.33349L12.2796 11.9999ZM19.875 10.811L20.0005 19.7208L22.6669 19.6832L22.5414 10.7734L19.875 10.811ZM20.2654 9.84937L9.72418 20.3905L11.6098 22.2762L22.151 11.735L20.2654 9.84937Z"
                                            fill="#0D121B"></path>
                                    </svg>
                                </div>
                            </h3>
                            <div class="faq-item-content faq-item-answer text"><?php echo getLang('faq_1_answer') ?></div>
                        </div>
                        <div class="faq-item"><input type="checkbox">
                            <h3 class="faq-item-title">
                                <div class="faq-item-title-icon">
                                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="36" height="36" rx="3" fill="#3D70F1" fill-opacity="0.2"></rect>
                                        <path d="M20.3529 10L21.8782 14.1218L26 15.6471L21.8782 17.1723L20.3529 21.2941L18.8277 17.1723L14.7059 15.6471L18.8277 14.1218L20.3529 10Z" stroke="#3D70F1"
                                            stroke-width="1.4" stroke-linejoin="round"></path>
                                        <path d="M13.2941 19.4118L14.6265 21.3735L16.5882 22.7059L14.6265 24.0382L13.2941 26L11.9618 24.0382L10 22.7059L11.9618 21.3735L13.2941 19.4118Z"
                                            stroke="#3D70F1" stroke-width="1.4" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                                <?php echo getLang('faq_2_question') ?>
                                <div class="faq-item-title-arrow faq-item-collapse">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" id="ia7vwp">
                                        <path
                                            d="M12.3171 9.33349C11.5808 9.32312 10.9755 9.9116 10.9652 10.6479C10.9548 11.3842 11.5433 11.9895 12.2796 11.9999L12.3171 9.33349ZM21.2082 10.7922L22.5414 10.7734C22.5312 10.0517 21.9486 9.46914 21.2269 9.45898L21.2082 10.7922ZM20.0005 19.7208C20.0108 20.4571 20.6161 21.0456 21.3524 21.0352C22.0887 21.0248 22.6772 20.4195 22.6669 19.6832L20.0005 19.7208ZM9.72418 20.3905C9.20348 20.9112 9.20348 21.7555 9.72418 22.2762C10.2449 22.7969 11.0891 22.7969 11.6098 22.2762L9.72418 20.3905ZM12.2796 11.9999L21.1894 12.1254L21.2269 9.45898L12.3171 9.33349L12.2796 11.9999ZM19.875 10.811L20.0005 19.7208L22.6669 19.6832L22.5414 10.7734L19.875 10.811ZM20.2654 9.84937L9.72418 20.3905L11.6098 22.2762L22.151 11.735L20.2654 9.84937Z"
                                            fill="#0D121B"></path>
                                    </svg>
                                </div>
                            </h3>
                            <div class="faq-item-content faq-item-answer text"><?php echo getLang('faq_2_answer') ?></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="faq-item"><input type="checkbox">
                            <h3 class="faq-item-title">
                                <div class="faq-item-title-icon">
                                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="36" height="36" rx="3" fill="#3D70F1" fill-opacity="0.2"></rect>
                                        <path d="M20.3529 10L21.8782 14.1218L26 15.6471L21.8782 17.1723L20.3529 21.2941L18.8277 17.1723L14.7059 15.6471L18.8277 14.1218L20.3529 10Z" stroke="#3D70F1"
                                            stroke-width="1.4" stroke-linejoin="round"></path>
                                        <path d="M13.2941 19.4118L14.6265 21.3735L16.5882 22.7059L14.6265 24.0382L13.2941 26L11.9618 24.0382L10 22.7059L11.9618 21.3735L13.2941 19.4118Z"
                                            stroke="#3D70F1" stroke-width="1.4" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                                <?php echo getLang('faq_3_question') ?>
                                <div class="faq-item-title-arrow faq-item-collapse">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" id="isvg6y">
                                        <path
                                            d="M12.3171 9.33349C11.5808 9.32312 10.9755 9.9116 10.9652 10.6479C10.9548 11.3842 11.5433 11.9895 12.2796 11.9999L12.3171 9.33349ZM21.2082 10.7922L22.5414 10.7734C22.5312 10.0517 21.9486 9.46914 21.2269 9.45898L21.2082 10.7922ZM20.0005 19.7208C20.0108 20.4571 20.6161 21.0456 21.3524 21.0352C22.0887 21.0248 22.6772 20.4195 22.6669 19.6832L20.0005 19.7208ZM9.72418 20.3905C9.20348 20.9112 9.20348 21.7555 9.72418 22.2762C10.2449 22.7969 11.0891 22.7969 11.6098 22.2762L9.72418 20.3905ZM12.2796 11.9999L21.1894 12.1254L21.2269 9.45898L12.3171 9.33349L12.2796 11.9999ZM19.875 10.811L20.0005 19.7208L22.6669 19.6832L22.5414 10.7734L19.875 10.811ZM20.2654 9.84937L9.72418 20.3905L11.6098 22.2762L22.151 11.735L20.2654 9.84937Z"
                                            fill="#0D121B"></path>
                                    </svg>
                                </div>
                            </h3>
                            <div class="faq-item-content faq-item-answer text"><?php echo getLang('faq_3_answer') ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="padding-60 highlight-section">
            <div class="container">
                <table class="table-highlight">
                    <caption>
                        <h2 class="title"><?php echo getLang('highlight_title') ?></h2>
                    </caption>
                    <tbody id="emojtable">
                        <tr>
                            <td><strong><?php echo getLang('highlight_enrollment_cost_title') ?></strong></td>
                            <td>
                                <p><?php echo getLang('highlight_enrollment_cost_text') ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><strong><?php echo getLang('highlight_transaction_fees_title') ?></strong></td>
                            <td>
                                <p><?php echo getLang('highlight_transaction_fees_text') ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><strong><?php echo getLang('highlight_signup_procedure_title') ?></strong></td>
                            <td>
                                <p><?php echo getLang('highlight_signup_procedure_text') ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><strong><?php echo getLang('highlight_curriculum_focus_title') ?></strong></td>
                            <td>
                                <p><?php echo getLang('highlight_curriculum_focus_text') ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><strong><?php echo getLang('highlight_accessible_regions_title') ?></strong></td>
                            <td>
                                <p><?php echo getLang('highlight_accessible_regions_text') ?></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
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