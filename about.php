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
    <section class="page-header">
        <div class="container text-center" id="ip23i">
            <h1 class="page-title"><?php echo getLang('about_page_title') ?></h1>
        </div>
    </section>
    <section class="page-main">
        <section class="about-principles">
            <div class="container">
                <div class="principles-list">
                    <div class="principles-item">
                        <div class="principles-item-inner">
                            <div class="principles-item-icon">
                                <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="65" height="65" rx="4.64286" fill="#3D70F1" fill-opacity="0.2"></rect>
                                    <path
                                        d="M51.9894 17.5532C51.9136 17.33 51.7198 17.1657 51.4839 17.132L47.4573 16.5676L46.8929 12.5409C46.8592 12.3051 46.6991 12.1113 46.4717 12.0355C46.2485 11.9597 45.9999 12.0187 45.8315 12.1871L40.7097 17.3089C40.5581 17.4605 40.4949 17.6795 40.5412 17.8901L41.4257 21.7146L40.7266 22.4138C37.5549 19.4612 33.4525 17.8396 29.0973 17.8396C24.5315 17.8396 20.2437 19.6171 17.0131 22.8434C10.3498 29.5068 10.3498 40.3442 17.0131 47.0075C20.3448 50.3392 24.721 52.0029 29.0973 52.0029C33.4735 52.0029 37.8498 50.3392 41.1772 47.0075C44.4036 43.7812 46.1811 39.4892 46.1811 34.9234C46.1811 30.5682 44.5594 26.4657 41.6069 23.2941L42.306 22.5949L46.1305 23.4794C46.1768 23.4921 46.2232 23.4963 46.2695 23.4963C46.4338 23.4963 46.5938 23.4331 46.7118 23.311L51.842 18.1934C52.0062 18.0249 52.0652 17.7764 51.9894 17.5532ZM41.8385 17.9491L45.8315 13.9604L46.2442 16.9045L42.4703 20.6785L41.8385 17.9491ZM44.9343 34.9276C44.9343 39.1564 43.2874 43.1325 40.2969 46.1272C34.1222 52.302 24.0766 52.302 17.9019 46.1272C11.7271 39.9525 11.7271 29.9069 17.9019 23.7322C20.8924 20.7417 24.8685 19.0948 29.1015 19.0948C33.1239 19.0948 36.9105 20.5858 39.8462 23.3025L37.4496 25.6991C32.5637 21.2766 24.999 21.4198 20.2943 26.1288C15.4421 30.981 15.4421 38.8784 20.2943 43.7348C22.7204 46.1609 25.9088 47.374 29.0973 47.374C32.2858 47.374 35.4742 46.1609 37.9003 43.7348C40.2506 41.3845 41.5479 38.2593 41.5479 34.9318C41.5479 31.8149 40.4107 28.875 38.3342 26.5837L40.7308 24.187C43.4391 27.1186 44.9343 30.9094 44.9343 34.9276ZM31.018 34.9276C31.018 35.4414 30.82 35.9216 30.4535 36.2881C29.7038 37.0378 28.4866 37.0378 27.7368 36.2881C27.3746 35.9258 27.1724 35.4414 27.1724 34.9276C27.1724 34.4137 27.3704 33.9293 27.7368 33.5671C28.1117 33.1922 28.6045 33.0069 29.0973 33.0069C29.3837 33.0069 29.6701 33.0785 29.9355 33.2049L28.9794 34.161C28.7351 34.4053 28.7351 34.8012 28.9794 35.0455C29.1015 35.1677 29.2616 35.2266 29.4216 35.2266C29.5817 35.2266 29.7417 35.1635 29.8639 35.0455L30.82 34.0894C30.9463 34.3505 31.018 34.6327 31.018 34.9276ZM30.8537 32.2867C29.6238 31.4653 27.939 31.6001 26.8523 32.6868C26.2542 33.2849 25.9215 34.081 25.9215 34.9318C25.9215 35.7784 26.25 36.5745 26.8523 37.1768C27.4715 37.7959 28.2844 38.1034 29.0973 38.1034C29.9102 38.1034 30.7231 37.7959 31.3423 37.1768C31.9404 36.5787 32.2731 35.7826 32.2731 34.9318C32.2731 34.2958 32.0878 33.6893 31.7424 33.1754L34.1601 30.7577C36.2871 33.3312 36.1481 37.1641 33.7389 39.5692C31.1822 42.1258 27.0166 42.1258 24.4599 39.5692C21.9032 37.0125 21.9032 32.8511 24.4599 30.2902C25.7403 29.0098 27.4167 28.3738 29.0973 28.3738C30.5799 28.3738 32.0625 28.875 33.2714 29.8732L30.8537 32.2867ZM34.1559 28.9845C31.0896 26.3731 26.469 26.5078 23.5754 29.4057C20.5301 32.4509 20.5301 37.4042 23.5754 40.4537C25.1001 41.9742 27.0966 42.7366 29.0973 42.7366C31.098 42.7366 33.0987 41.9742 34.6192 40.4537C37.5128 37.5559 37.6518 32.9395 35.0404 29.8732L37.4454 27.4682C39.2903 29.5236 40.2969 32.1477 40.2969 34.9318C40.2969 37.9223 39.1302 40.7359 37.0158 42.8503C32.648 47.2139 25.5424 47.2139 21.1788 42.8461C16.811 38.4825 16.811 31.3769 21.1788 27.0091C23.3606 24.8273 26.2289 23.7364 29.0973 23.7364C31.7719 23.7364 34.4423 24.6841 36.5609 26.5794L34.1559 28.9845ZM46.0758 22.1864L43.3506 21.5588L47.1245 17.7848L50.0687 18.1976L46.0758 22.1864Z"
                                        fill="#3D70F1"></path>
                                </svg>
                            </div>
                            <h2 class="principles-item-title"><?php echo getLang('about_principles_role_title') ?></h2>
                            <p id="iewyp4"><?php echo getLang('about_principles_role_text') ?></p>
                        </div>
                    </div>
                    <div class="principles-item">
                        <div class="principles-item-inner">
                            <div class="principles-item-icon">
                                <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="65" height="65" rx="4.64286" fill="#3D70F1" fill-opacity="0.2"></rect>
                                    <path
                                        d="M23.4545 38.9137H28.125C28.272 38.9137 28.4108 38.9708 28.5137 39.0737C28.6166 39.1766 28.6754 39.317 28.6754 39.4624V49.4256C28.6737 49.7293 28.4288 49.9743 28.125 49.9743H23.4545C23.1507 49.9743 22.9058 49.7277 22.9058 49.4239V39.4624C22.9058 39.3171 22.9629 39.1766 23.0658 39.0737C23.1687 38.9709 23.3091 38.9137 23.4545 38.9137ZM27.6073 34.6352C27.9111 34.6352 28.1576 34.8818 28.1576 35.1856C28.1576 35.4893 27.9111 35.7359 27.6073 35.7359H13.0179C12.7141 35.7359 12.4675 35.4893 12.4675 35.1856C12.4675 34.8818 12.7141 34.6352 13.0179 34.6352H27.6073ZM27.6073 30.7045C27.9111 30.7045 28.1576 30.9511 28.1576 31.2548C28.1576 31.5586 27.9111 31.8052 27.6073 31.8052H13.0179C12.7141 31.8052 12.4675 31.5586 12.4675 31.2548C12.4675 30.9511 12.7141 30.7045 13.0179 30.7045H27.6073ZM24.0015 16.7748C26.0722 16.7748 27.8556 18.238 28.2607 20.2711C28.6641 22.3026 27.5765 24.3358 25.6626 25.1294C23.7487 25.9214 21.5424 25.2519 20.3913 23.529C19.24 21.8078 19.467 19.5117 20.9318 18.047C21.7451 17.2305 22.849 16.7732 24.002 16.7749L24.0015 16.7748ZM26.2944 18.8226C25.2002 17.7317 23.4872 17.5635 22.2019 18.4241C20.9184 19.2831 20.4203 20.9309 21.0131 22.3582C21.6042 23.7855 23.123 24.5954 24.6384 24.2933C26.1539 23.9912 27.2448 22.6603 27.2448 21.1154C27.2464 20.2548 26.9035 19.4301 26.2944 18.8226ZM35.7596 21.4093H35.758C34.5397 23.4425 32.8152 25.1278 30.7526 26.2985C26.5636 28.673 21.4361 28.673 17.2472 26.2985C15.1814 25.1244 13.4552 23.4358 12.2371 21.3976C12.1326 21.2196 12.1343 20.9992 12.2437 20.8244C14.7145 16.683 19.1843 14.1468 24.0066 14.1484C28.8306 14.1517 33.2955 16.6911 35.7629 20.8357C35.869 21.0121 35.8674 21.2325 35.758 21.4089L35.7596 21.4093ZM30.2137 25.3483C32.0182 24.3227 33.5418 22.8693 34.6522 21.1154C33.5418 19.3631 32.0165 17.9097 30.2137 16.8842C26.3597 14.7024 21.6435 14.7024 17.7894 16.8842C15.9849 17.9098 14.4613 19.3632 13.3492 21.1154C14.4596 22.8693 15.9849 24.3227 17.7894 25.3483C21.645 27.5267 26.3596 27.5267 30.2137 25.3483ZM51.0644 25.2176H47.4913L47.4896 48.8773H51.0627L51.0644 25.2176ZM46.9426 24.1169H51.6115C51.7568 24.1169 51.8972 24.1741 52.0001 24.277C52.103 24.3799 52.1602 24.5203 52.1602 24.6656V49.4261C52.1602 49.5714 52.103 49.7118 52.0001 49.8147C51.8956 49.9176 51.7568 49.9748 51.6115 49.9748H46.9409C46.7939 49.9748 46.6551 49.916 46.5522 49.8131C46.4493 49.7102 46.3922 49.5698 46.3938 49.4244V24.6657C46.3922 24.5203 46.4493 24.3815 46.5522 24.277C46.6551 24.1741 46.7939 24.117 46.9409 24.117L46.9426 24.1169ZM39.1136 33.4058H43.7825C44.0862 33.4074 44.3312 33.6524 44.3328 33.9561V49.426C44.3312 49.7298 44.0862 49.9747 43.7825 49.9747H39.1136C38.8098 49.9747 38.5632 49.7281 38.5632 49.4244V33.9562C38.5649 33.6524 38.8098 33.4074 39.1136 33.4058ZM43.2354 34.5065H39.6623V48.8773H43.2354V34.5065ZM35.4051 31.4069H31.832V48.8772H35.4051V31.4069ZM31.2833 30.3112H35.9539C36.2576 30.3112 36.5026 30.5561 36.5042 30.8582V49.4259C36.5026 49.7297 36.2576 49.9746 35.9539 49.9746H31.2833C31.138 49.9746 30.9975 49.9158 30.8946 49.813C30.7918 49.7101 30.7346 49.5696 30.7346 49.4243V30.8583C30.7346 30.7129 30.7918 30.5741 30.8946 30.4712C30.9975 30.3684 31.138 30.3112 31.2833 30.3112ZM27.5763 40.0131H24.0032V48.8772H27.5763V40.0131Z"
                                        fill="#3D70F1"></path>
                                </svg>
                            </div>
                            <h2 class="principles-item-title"><?php echo getLang('about_principles_gap_title') ?></h2>
                            <p id="iup7jv"><?php echo getLang('about_principles_gap_text') ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="padding-60">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <h2 class="title"><?php echo getLang('about_forward_thinking_title') ?></h2>
                        <div class="quote"><?php echo getLang('about_forward_thinking_quote') ?></div>
                        <p id="ikkw8t"><?php echo getLang('about_forward_thinking_text') ?></p>
                    </div>
                    <div class="col-lg-5 text-center">
                        <img src="/assets/images/about-img-1.webp" alt="" loading="lazy" width="584" height="360">
                    </div>
                </div>
            </div>
        </section>
        <section class="padding-60">
            <div class="container">
                <div class="border-box">
                    <div class="border-box-inner about-box">
                        <h2 class="title"><?php echo getLang('about_education_title') ?></h2>
                        <p class="fs-24"><?php echo getLang('about_education_text_1') ?></p>
                        <h3 class="small-title"><?php echo getLang('about_education_people_title') ?></h3>
                        <p class="fs-24"><?php echo getLang('about_education_people_text') ?></p>
                        <p id="ifvimu"><b><i id="iv3ime"><?php echo getLang('about_education_mission_text') ?></i></b></p>
                        <div class="text-center mt-4 mt-md-5">
                            <a href="/" class="btn-link"><?php echo getLang('about_register_btn') ?><br></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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