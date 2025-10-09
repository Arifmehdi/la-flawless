@extends('frontend.layouts.master')

@section('title', 'Home - La Flawless')

{{--@section('meta')
<meta name="description" content="North Bengal offers premium dairy products, latest news, and world-class services. Explore our departments and services with ease.">
<meta name="keywords" content="North Bengal, dairy products, latest news, services, departments, quality dairy">
<meta property="og:title" content="Home - North Bengal">
<meta property="og:description" content="Discover North Bengal’s quality dairy products, latest news, and world-class services.">
<meta property="og:image" content="{{ asset('frontend/assets/img/northbengal/home-banner.png') }}">
<meta property="og:type" content="website">
<meta name="robots" content="index, follow">
@endsection--}}

@section('content')
        <div class="group-fixed d-lg-flex d-none">


        </div><!-- popup-login.liquid -->
        <div class="modal fade" id="jsLogin" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog--login modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header p-0">
                        <button type="button" class="close" data-dismiss="modal"><i class="icon-close"></i></button>
                    </div>
                    <div class="modal-body p-5">
                        <div class="text-center py-2 px-2">
                            <div class="form-success hide" id="ResetSuccess">
                                We&#39;ve sent you an email with a link to update your password.
                            </div>
                            <div id="CustomerLoginForm" class="form-vertical">
                                <form method="post" action="https://la-flawless.com/account/login" id="customer_login"
                                    accept-charset="UTF-8" data-login-with-shop-sign-in="true"><input type="hidden"
                                        name="form_type" value="customer_login" /><input type="hidden" name="utf8"
                                        value="✓" />
                                    <h3 class="mb-3">Login</h3>
                                    <p class="mb-5">Please enter your e-mail and password: </p>


                                    <div class="form-group mb-4">
                                        <input type="email" name="customer[email]" id="CustomerEmail"
                                            class="form-control " placeholder="Email" autocorrect="off"
                                            autocapitalize="off" autofocus>
                                        <label for="CustomerEmail" class="label--hidden">Email</label>
                                    </div>
                                    <div class="form-group mb-4">
                                        <input type="password" value="" autocomplete="on" name="customer[password]"
                                            id="CustomerPassword" class="form-control " placeholder="Password">
                                        <label for="CustomerPassword" class="label--hidden">Password</label>
                                    </div>
                                    <p class="text-right mb-3 small"><a href="#recover" id="RecoverPassword">Forgot your
                                            password?</a></p>
                                    <p>
                                        <button type="submit" class="btn btn-theme gradient-theme w-100">Login</button>
                                    </p>
                                    <p class="pt-2"><span class="d-inline-block pr-2">New customer? </span><a
                                            href="https://shopify.com/91697545529/account?locale=en&amp;region_country=US"
                                            id="customer_register_link">Register</a></p>
                                </form>
                            </div>
                            <div id="RecoverPasswordForm" class="hide">
                                <h3>Reset your password</h3>
                                <p class="mb-4">We will send you an email to reset your password.</p>
                                <div class="form-vertical">
                                    <form method="post" action="https://la-flawless.com/account/recover"
                                        accept-charset="UTF-8"><input type="hidden" name="form_type"
                                            value="recover_customer_password" /><input type="hidden" name="utf8"
                                            value="✓" />
                                        <div class="form-group mb-4">
                                            <input class="form-control" type="email" value="" name="email"
                                                id="RecoverEmail" placeholder="Email" autocorrect="off"
                                                autocapitalize="off">
                                            <label for="RecoverEmail" class="label--hidden">Email</label>
                                        </div>
                                        <p>
                                            <button type="submit"
                                                class="btn btn-theme gradient-theme w-100">Submit</button>
                                        </p>
                                        <button type="button" id="HideRecoverPasswordLink"
                                            class="text-link link-accent-color">Back to login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="shopify-section-sections--24382004330809__store-messages"
        class="shopify-section shopify-section-group-header-group"></div>
    <!-- END sections: header-group -->
    <div class="page-container page-element is-moved-by-drawer">
        <main class="main-content" id="MainContent" role="main">

            <div id="shopify-section-slideshow-1" class="shopify-section index-section index-section--slideshow"></div>
            <div id="shopify-section-template--24382013669689__backgroundvideo_W3nr3U"
                class="shopify-section index-section">
                <!-- backgroundvideo.liquid -->
                <style data-shopify>
                .customstyletemplate--24382013669689__backgroundvideo_W3nr3U {
                    background-color: #ffffff;
                    padding: ;
                    margin: 0px 0px 0px 0px;

                }

                @media (max-width:750px) {
                    .customstyletemplate--24382013669689__backgroundvideo_W3nr3U {
                        padding: ;
                        margin: 0px 0px 0px 0px
                    }
                }
                </style>
                <style>
                .bgvideo-template--24382013669689__backgroundvideo_W3nr3U {

                    --st-bgvideo-height: 750px;
                    --st-bgvideo-height-mb: 450px;
                    min-height: var(--st-bgvideo-height);
                    padding-top: 4rem;
                    padding-bottom: 4rem;

                }

                @media(max-width:749px) {
                    .bgvideo-template--24382013669689__backgroundvideo_W3nr3U {
                        min-height: var(--st-bgvideo-height-mb);
                    }
                }

                .bgvideo-template--24382013669689__backgroundvideo_W3nr3U::before {
                    content: "";
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    z-index: 1;
                    background: #000000;
                    opacity: 0;
                }

                .bgvideo-template--24382013669689__backgroundvideo_W3nr3U .parallax-banner__meta::before {
                    background-color: #ffffff;
                    opacity: 0;
                }
                </style>
                <div class="customstyletemplate--24382013669689__backgroundvideo_W3nr3U " data-aos="">

                    <div class="full">
                        <div class="section-block">
                            <div class="d-flex bgvideo-template--24382013669689__backgroundvideo_W3nr3U align-items-center justify-content-center text-center bg-herovideo"
                                data-section-id="template--24382013669689__backgroundvideo_W3nr3U"
                                data-section-type="background-video">

                                <div class="hero-video">
                                    <video id="Mp4template--24382013669689__backgroundvideo_W3nr3U" class="lazyload"
                                        src="https://cdn.shopify.com/videos/c/o/v/a443a52ea104436b99ef4ded2b213302.mp4"
                                        loop="" muted="" playsinline="" autoplay=""></video>
                                </div>

                                <div class="container">
                                    <div class="parallax-banner__meta bg-herovideo-meta text-center">

                                        <div class="parallax-banner__btn  justify-content-center  align-items-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div id="shopify-section-template--24382013669689__a8f171de-121d-4760-a556-1ad8436ec966"
                class="shopify-section index-section">
                <!-- product-list-swiper.liquid -->
                <style>
                .customstyletemplate--24382013669689__a8f171de-121d-4760-a556-1ad8436ec966 {
                    background-position: center center !important;
                    background-repeat: no-repeat !important;
                    background-size: auto !important;
                    --or-width-banner: 30%;

                    --g-font-color-subtop: #042436;
                    --g-color-heading: #042436;
                    --g-color-heading-rgb: 4, 36, 54;
                    --color-body-text: #042436;
                    --color-body-text-rgb: 4, 36, 54;
                    --g-main-2: #042436;

                }

                .customstyletemplate--24382013669689__a8f171de-121d-4760-a556-1ad8436ec966 .swiper-container {
                    overflow: visible;
                }

                .customstyletemplate--24382013669689__a8f171de-121d-4760-a556-1ad8436ec966 .swiper-container-autoheight .swiper-wrapper {
                    align-items: stretch;
                    height: auto !important;
                }

                .productlist-swiper .product-card,
                .productlist-swiper .product-card .product-card__info {
                    margin-bottom: 0;
                }

                .productlist-swiper .product-card__image-wr {
                    --g-color-heading: #8b722c;
                    --g-color-heading-rgb: 139, 114, 44;
                }

                .productlist-swiper .image-content__image {
                    height: 100%;
                    object-fit: cover;
                }

                .productlist-banner {
                    width: var(--or-width-banner) !important;
                }

                .product-image__banner {
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    z-index: 1;
                    padding: 32px;
                    background: rgba(var(--bg-overlay-rgba), var(--bg-opacity));
                }

                .product-image__banner .image-content__image {
                    height: 100%;
                    object-fit: cover;
                    width: 100%;
                }

                @media (max-width:749px) {
                    .productswiper .swiper-container {
                        overflow: visible;
                    }

                    .productswiper .container-p .swiper-slide {
                        width: 70% !important;
                        margin-right: 20px !important;
                    }

                    .productswiper .container-p .productlist-banner {
                        width: 75% !important;
                    }
                }

                @media (min-width:750px) {
                    .productlist-wrapper .swiper-button-prev {
                        left: -58px;
                    }

                    .productlist-wrapper .swiper-button-next {
                        right: -58px;
                    }
                }
                </style>
                <div class="customstyletemplate--24382013669689__a8f171de-121d-4760-a556-1ad8436ec966 productswiper lazyload"
                    data-aos="fade-up" data-bgset="" data-sizes="auto" data-parent-fit="cover">
                    <style data-shopify>
                    .customstyletemplate--24382013669689__a8f171de-121d-4760-a556-1ad8436ec966 {
                        background-color: #ffffff;
                        padding: 80px 0px 60px 0px;
                        margin: 0px 0px 0px 0px;

                    }

                    @media (max-width:750px) {
                        .customstyletemplate--24382013669689__a8f171de-121d-4760-a556-1ad8436ec966 {
                            padding: 40px 0px 40px 0px;
                            margin: 0px 0px 0px 0px
                        }
                    }
                    </style>
                    <div>
                        <div class="section-block">
                            <div class="container-fluid">
                                <!-- section-heading.liquid - Apply for all section title -->

                                <div class="subtop text-left text-top  mb-2 " data-aos="fade-up"
                                    data-aos-duration="300">EXCLUSIVE</div>
                                <h3 class="h2 text-left   mb-5 " data-aos="fade-up" data-aos-duration="500">
                                    <span>Backed by Science, Perfected for You.</span>
                                </h3>
                            </div>
                            <div class="container-fluid container-p">
                                <div
                                    class="productlist-wrapper dots-negative swiper-wrapper-template--24382013669689__a8f171de-121d-4760-a556-1ad8436ec966 position-relative">
                                    <div class="productlist-swiper swiper-container swipercol-template--24382013669689__a8f171de-121d-4760-a556-1ad8436ec966 "
                                        id="Productlist-template--24382013669689__a8f171de-121d-4760-a556-1ad8436ec966"
                                        data-section-id="template--24382013669689__a8f171de-121d-4760-a556-1ad8436ec966"
                                        data-section-type="swipercustom" data-perview-desktop="4"
                                        data-space-between="23" data-perview-mobile=" 1.38 ">
                                        <div class="swiper-wrapper">
                                            <div class="productlist-item swiper-slide">
                                                <div class=" h-100 " data-aos="fade-up" data-aos-delay="100">


                                                    <div class="product-card js-product-card product-card--style1 product-card--style9 info-false"
                                                        data-price="3999" id="product-item-9834146038073">
                                                        <div class="product-card__image-wr">
                                                            <a class="product-card__image js image-content__image-wrapper auto"
                                                                href="products/advanced-night-repair-anti-aging-serum-new.html"
                                                                style="padding-top:100.0%;"
                                                                data-image-id="42027583111481">
                                                                <img srcset="//la-flawless.com/cdn/shop/files/1_1.jpg?v=1737385695&width=165 165w,//la-flawless.com/cdn/shop/files/1_1.jpg?v=1737385695&width=360 360w,//la-flawless.com/cdn/shop/files/1_1.jpg?v=1737385695&width=533 533w,//la-flawless.com/cdn/shop/files/1_1.jpg?v=1737385695&width=720 720w,//la-flawless.com/cdn/shop/files/1_1.jpg?v=1737385695&width=940 940w,//la-flawless.com/cdn/shop/files/1_1.jpg?v=1737385695&width=1066 1066w,//la-flawless.com/cdn/shop/files/1_1.jpg?v=1737385695 2048w
                " src="cdn/shop/files/1_1fbea.jpg?v=1737385695&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Advanced Night Repair Anti-Aging Serum"
                                                                    class="lazyload scale-in first-image  hover__hide-image "
                                                                    data-sizes="auto" data-aspectratio="1.0"
                                                                    loading="lazy" width="2048" height="2048">

                                                                <img srcset="//la-flawless.com/cdn/shop/files/IMG_4279.jpg?v=1744249389&width=165 165w,//la-flawless.com/cdn/shop/files/IMG_4279.jpg?v=1744249389&width=360 360w,//la-flawless.com/cdn/shop/files/IMG_4279.jpg?v=1744249389&width=533 533w,//la-flawless.com/cdn/shop/files/IMG_4279.jpg?v=1744249389&width=720 720w,//la-flawless.com/cdn/shop/files/IMG_4279.jpg?v=1744249389&width=940 940w,//la-flawless.com/cdn/shop/files/IMG_4279.jpg?v=1744249389&width=1066 1066w,//la-flawless.com/cdn/shop/files/IMG_4279.jpg?v=1744249389 5184w
     " src="cdn/shop/files/IMG_4279bf62.jpg?v=1744249389&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Advanced Night Repair Anti-Aging Serum"
                                                                    class="lazyload transition second-image"
                                                                    data-sizes="auto"
                                                                    data-aspectratio="1.557224391709222" loading="lazy"
                                                                    width="5184" height="3329">
                                                            </a>
                                                            <div class="product-label rectangular_label ">

                                                                <div class=" d-inline-block  product-tag product-tag-sale-item product-tag--absolute  txtandnumber mb-1"
                                                                    aria-hidden="true"
                                                                    style="background-color: #d73f0f;color:#ffffff">Sale
                                                                    <span class="product-tag-sale-number-item"> -33%
                                                                    </span></div>
                                                            </div>
                                                            <div
                                                                class="product-card__overlay d-flex justify-content-center flex-column">
                                                                <span data-tooltip="true" data-placement="left"
                                                                    class="btn btn-theme gradient-theme-vertical product-card__overlay-btn js-btn-quickview"
                                                                    title="Quickshop" data-toggle="modal"
                                                                    data-target="#jsQuickview"
                                                                    data-handle="advanced-night-repair-anti-aging-serum-new"
                                                                    data-pavailable="true"
                                                                    data-viewjdmg="<span class='jdgm-preview-badge' data-id='9834146038073'></span>">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M11.9844 5.57178C8.50513 5.57178 4.93608 7.58553 2.12638 11.613C2.04618 11.7293 2.00223 11.8666 2.00008 12.0078C1.99794 12.149 2.03769 12.2877 2.11432 12.4063C4.27316 15.7856 7.79444 18.4284 11.9844 18.4284C16.1289 18.4284 19.7225 15.7776 21.8854 12.3907C21.9602 12.2744 22 12.139 22 12.0007C22 11.8624 21.9602 11.7271 21.8854 11.6108C19.7176 8.26273 16.0977 5.57178 11.9844 5.57178Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M12.0029 15.5713C13.9753 15.5713 15.5742 13.9723 15.5742 12C15.5742 10.0276 13.9753 8.42871 12.0029 8.42871C10.0306 8.42871 8.43164 10.0276 8.43164 12C8.43164 13.9723 10.0306 15.5713 12.0029 15.5713Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-miterlimit="10" />
                                                                    </svg>
                                                                    <span>Quickshop</span><span class=" txt-short hide">
                                                                        A natural retinol alternative 8 in 1 advanced
                                                                        anti-aging serum offers multiple...
                                                                    </span></span></div>
                                                            <div class="product-card-cart">
                                                                <span class="btn btn-theme js-grid-cart w-100 "
                                                                    title="Add to Cart" data-id="50619114193209">
                                                                    <div class="product-card__loading spinner-border"
                                                                        role="status"></div>
                                                                    <span>

                                                                        Add to Cart

                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__info text-left">

                                                            <a class="mb-1 product-card__type d-inline-block"
                                                                href="collections/vendorsd43f.html?filter.p.vendor=My%20Store&amp;q=My%20Store">My
                                                                Store</a>
                                                            <a href="products/advanced-night-repair-anti-aging-serum-new.html"
                                                                title="Advanced Night Repair Anti-Aging Serum"
                                                                class=" d-block product-card__name ">Advanced Night
                                                                Repair Anti-Aging Serum</a>


                                                            <div style=''
                                                                class='jdgm-widget jdgm-preview-badge  py-1 small'
                                                                data-id='9834146038073' data-auto-install="false">

                                                            </div>

                                                            <div class="product-card__price  product-card__pricesale ">
                                                                <span class="visually-hidden">Regular price</span>
                                                                $39.99
                                                                <s class="product-card__regular-price">$59.99</s>
                                                                <span class="visually-hidden">Sale price</span>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="productlist-item swiper-slide">
                                                <div class=" h-100 " data-aos="fade-up" data-aos-delay="200">


                                                    <div class="product-card js-product-card product-card--style1 product-card--style9 info-false"
                                                        data-price="3499" id="product-item-9748980793657">
                                                        <div class="product-card__image-wr">
                                                            <a class="product-card__image js image-content__image-wrapper auto"
                                                                href="products/korean-glass-skin-renewing-serum.html"
                                                                style="padding-top:100.0%;"
                                                                data-image-id="42133648048441">
                                                                <img srcset="//la-flawless.com/cdn/shop/files/KoreanGlassSkinRenewingSerum.jpg?v=1737385771&width=165 165w,//la-flawless.com/cdn/shop/files/KoreanGlassSkinRenewingSerum.jpg?v=1737385771&width=360 360w,//la-flawless.com/cdn/shop/files/KoreanGlassSkinRenewingSerum.jpg?v=1737385771&width=533 533w,//la-flawless.com/cdn/shop/files/KoreanGlassSkinRenewingSerum.jpg?v=1737385771&width=720 720w,//la-flawless.com/cdn/shop/files/KoreanGlassSkinRenewingSerum.jpg?v=1737385771&width=940 940w,//la-flawless.com/cdn/shop/files/KoreanGlassSkinRenewingSerum.jpg?v=1737385771&width=1066 1066w,//la-flawless.com/cdn/shop/files/KoreanGlassSkinRenewingSerum.jpg?v=1737385771 1200w
                " src="cdn/shop/files/KoreanGlassSkinRenewingSerum5eb3.jpg?v=1737385771&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Korean Glass Skin Renewing Serum"
                                                                    class="lazyload scale-in first-image  hover__hide-image "
                                                                    data-sizes="auto" data-aspectratio="1.0"
                                                                    loading="lazy" width="1200" height="1200">

                                                                <img srcset="//la-flawless.com/cdn/shop/files/IMG_8306.jpg?v=1738364540&width=165 165w,//la-flawless.com/cdn/shop/files/IMG_8306.jpg?v=1738364540&width=360 360w,//la-flawless.com/cdn/shop/files/IMG_8306.jpg?v=1738364540&width=533 533w,//la-flawless.com/cdn/shop/files/IMG_8306.jpg?v=1738364540&width=720 720w,//la-flawless.com/cdn/shop/files/IMG_8306.jpg?v=1738364540&width=940 940w,//la-flawless.com/cdn/shop/files/IMG_8306.jpg?v=1738364540&width=1066 1066w,//la-flawless.com/cdn/shop/files/IMG_8306.jpg?v=1738364540 4160w
     " src="cdn/shop/files/IMG_8306942f.jpg?v=1738364540&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Korean Glass Skin Renewing Serum"
                                                                    class="lazyload transition second-image"
                                                                    data-sizes="auto"
                                                                    data-aspectratio="0.6666666666666666" loading="lazy"
                                                                    width="4160" height="6240">
                                                            </a>
                                                            <div class="product-label rectangular_label ">

                                                                <div class=" hide product-tag product-tag-sale-item product-tag--absolute  txtandnumber mb-1"
                                                                    aria-hidden="true"
                                                                    style="background-color: #d73f0f;color:#ffffff">Sale
                                                                    <span class="product-tag-sale-number-item"> -%
                                                                    </span></div>
                                                            </div>
                                                            <div
                                                                class="product-card__overlay d-flex justify-content-center flex-column">
                                                                <span data-tooltip="true" data-placement="left"
                                                                    class="btn btn-theme gradient-theme-vertical product-card__overlay-btn js-btn-quickview"
                                                                    title="Quickshop" data-toggle="modal"
                                                                    data-target="#jsQuickview"
                                                                    data-handle="korean-glass-skin-renewing-serum"
                                                                    data-pavailable="true"
                                                                    data-viewjdmg="<span class='jdgm-preview-badge' data-id='9748980793657'></span>">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M11.9844 5.57178C8.50513 5.57178 4.93608 7.58553 2.12638 11.613C2.04618 11.7293 2.00223 11.8666 2.00008 12.0078C1.99794 12.149 2.03769 12.2877 2.11432 12.4063C4.27316 15.7856 7.79444 18.4284 11.9844 18.4284C16.1289 18.4284 19.7225 15.7776 21.8854 12.3907C21.9602 12.2744 22 12.139 22 12.0007C22 11.8624 21.9602 11.7271 21.8854 11.6108C19.7176 8.26273 16.0977 5.57178 11.9844 5.57178Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M12.0029 15.5713C13.9753 15.5713 15.5742 13.9723 15.5742 12C15.5742 10.0276 13.9753 8.42871 12.0029 8.42871C10.0306 8.42871 8.43164 10.0276 8.43164 12C8.43164 13.9723 10.0306 15.5713 12.0029 15.5713Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-miterlimit="10" />
                                                                    </svg>
                                                                    <span>Quickshop</span><span class=" txt-short hide">
                                                                        Korean Glass Skin Renewing Serum is a potent
                                                                        formula made with glutathione,...
                                                                    </span></span></div>
                                                            <div class="product-card-cart">
                                                                <span class="btn btn-theme js-grid-cart w-100 "
                                                                    title="Add to Cart" data-id="50450955108665">
                                                                    <div class="product-card__loading spinner-border"
                                                                        role="status"></div>
                                                                    <span>

                                                                        Add to Cart

                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__info text-left">

                                                            <a class="mb-1 product-card__type d-inline-block"
                                                                href="collections/vendorsd43f.html?filter.p.vendor=My%20Store&amp;q=My%20Store">My
                                                                Store</a>
                                                            <a href="products/korean-glass-skin-renewing-serum.html"
                                                                title="Korean Glass Skin Renewing Serum"
                                                                class=" d-block product-card__name ">Korean Glass Skin
                                                                Renewing Serum</a>


                                                            <div style=''
                                                                class='jdgm-widget jdgm-preview-badge  py-1 small'
                                                                data-id='9748980793657' data-auto-install="false">

                                                            </div>

                                                            <div class="product-card__price "><span
                                                                    class="visually-hidden">Regular price</span>
                                                                $34.99
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="productlist-item swiper-slide">
                                                <div class=" h-100 " data-aos="fade-up" data-aos-delay="300">


                                                    <div class="product-card js-product-card product-card--style1 product-card--style9 info-false"
                                                        data-price="3999" id="product-item-9836197413177">
                                                        <div class="product-card__image-wr">
                                                            <a class="product-card__image js image-content__image-wrapper auto"
                                                                href="products/korean-skin-boosting-supreme-moisturizer-new.html"
                                                                style="padding-top:100.0%;"
                                                                data-image-id="42133672395065">
                                                                <img srcset="//la-flawless.com/cdn/shop/files/KoreanSkinBoostingSupremeMoisturizer.jpg?v=1737386062&width=165 165w,//la-flawless.com/cdn/shop/files/KoreanSkinBoostingSupremeMoisturizer.jpg?v=1737386062&width=360 360w,//la-flawless.com/cdn/shop/files/KoreanSkinBoostingSupremeMoisturizer.jpg?v=1737386062&width=533 533w,//la-flawless.com/cdn/shop/files/KoreanSkinBoostingSupremeMoisturizer.jpg?v=1737386062&width=720 720w,//la-flawless.com/cdn/shop/files/KoreanSkinBoostingSupremeMoisturizer.jpg?v=1737386062&width=940 940w,//la-flawless.com/cdn/shop/files/KoreanSkinBoostingSupremeMoisturizer.jpg?v=1737386062&width=1066 1066w,//la-flawless.com/cdn/shop/files/KoreanSkinBoostingSupremeMoisturizer.jpg?v=1737386062 1200w
                " src="cdn/shop/files/KoreanSkinBoostingSupremeMoisturizerccca.jpg?v=1737386062&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Korean Skin Boosting Supreme Moisturizer"
                                                                    class="lazyload scale-in first-image  hover__hide-image "
                                                                    data-sizes="auto" data-aspectratio="1.0"
                                                                    loading="lazy" width="1200" height="1200">

                                                                <img srcset="//la-flawless.com/cdn/shop/files/IMG_4586.jpg?v=1737386062&width=165 165w,//la-flawless.com/cdn/shop/files/IMG_4586.jpg?v=1737386062&width=360 360w,//la-flawless.com/cdn/shop/files/IMG_4586.jpg?v=1737386062&width=533 533w,//la-flawless.com/cdn/shop/files/IMG_4586.jpg?v=1737386062&width=720 720w,//la-flawless.com/cdn/shop/files/IMG_4586.jpg?v=1737386062&width=940 940w,//la-flawless.com/cdn/shop/files/IMG_4586.jpg?v=1737386062&width=1066 1066w,//la-flawless.com/cdn/shop/files/IMG_4586.jpg?v=1737386062 3743w
     " src="cdn/shop/files/IMG_4586ccca.jpg?v=1737386062&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Korean Skin Boosting Supreme Moisturizer"
                                                                    class="lazyload transition second-image"
                                                                    data-sizes="auto"
                                                                    data-aspectratio="0.7819093377898475" loading="lazy"
                                                                    width="3743" height="4787">
                                                            </a>
                                                            <div class="product-label rectangular_label ">

                                                                <div class=" d-inline-block  product-tag product-tag-sale-item product-tag--absolute  txtandnumber mb-1"
                                                                    aria-hidden="true"
                                                                    style="background-color: #d73f0f;color:#ffffff">Sale
                                                                    <span class="product-tag-sale-number-item"> -33%
                                                                    </span></div>
                                                            </div>
                                                            <div
                                                                class="product-card__overlay d-flex justify-content-center flex-column">
                                                                <span data-tooltip="true" data-placement="left"
                                                                    class="btn btn-theme gradient-theme-vertical product-card__overlay-btn js-btn-quickview"
                                                                    title="Quickshop" data-toggle="modal"
                                                                    data-target="#jsQuickview"
                                                                    data-handle="korean-skin-boosting-supreme-moisturizer-new"
                                                                    data-pavailable="true"
                                                                    data-viewjdmg="<span class='jdgm-preview-badge' data-id='9836197413177'></span>">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M11.9844 5.57178C8.50513 5.57178 4.93608 7.58553 2.12638 11.613C2.04618 11.7293 2.00223 11.8666 2.00008 12.0078C1.99794 12.149 2.03769 12.2877 2.11432 12.4063C4.27316 15.7856 7.79444 18.4284 11.9844 18.4284C16.1289 18.4284 19.7225 15.7776 21.8854 12.3907C21.9602 12.2744 22 12.139 22 12.0007C22 11.8624 21.9602 11.7271 21.8854 11.6108C19.7176 8.26273 16.0977 5.57178 11.9844 5.57178Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M12.0029 15.5713C13.9753 15.5713 15.5742 13.9723 15.5742 12C15.5742 10.0276 13.9753 8.42871 12.0029 8.42871C10.0306 8.42871 8.43164 10.0276 8.43164 12C8.43164 13.9723 10.0306 15.5713 12.0029 15.5713Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-miterlimit="10" />
                                                                    </svg>
                                                                    <span>Quickshop</span><span class=" txt-short hide">
                                                                        Skin Boosting Supreme Moisturizer, featuring
                                                                        acetyl zingerone and sodium hyaluronate, deeply
                                                                        hydrates...
                                                                    </span></span></div>
                                                            <div class="product-card-cart">
                                                                <span class="btn btn-theme js-grid-cart w-100 "
                                                                    title="Add to Cart" data-id="50625391722809">
                                                                    <div class="product-card__loading spinner-border"
                                                                        role="status"></div>
                                                                    <span>

                                                                        Add to Cart

                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__info text-left">

                                                            <a class="mb-1 product-card__type d-inline-block"
                                                                href="collections/vendors6949.html?filter.p.vendor=La%20Flawless&amp;q=La%20Flawless">La
                                                                Flawless</a>
                                                            <a href="products/korean-skin-boosting-supreme-moisturizer-new.html"
                                                                title="Korean Skin Boosting Supreme Moisturizer"
                                                                class=" d-block product-card__name ">Korean Skin
                                                                Boosting Supreme Moisturizer</a>


                                                            <div style=''
                                                                class='jdgm-widget jdgm-preview-badge  py-1 small'
                                                                data-id='9836197413177' data-auto-install="false">

                                                            </div>

                                                            <div class="product-card__price  product-card__pricesale ">
                                                                <span class="visually-hidden">Regular price</span>
                                                                $39.99
                                                                <s class="product-card__regular-price">$59.99</s>
                                                                <span class="visually-hidden">Sale price</span>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="productlist-item swiper-slide">
                                                <div class=" h-100 " data-aos="fade-up" data-aos-delay="400">


                                                    <div class="product-card js-product-card product-card--style1 product-card--style9 info-false"
                                                        data-price="2799" id="product-item-9748984529209">
                                                        <div class="product-card__image-wr">
                                                            <a class="product-card__image js image-content__image-wrapper auto"
                                                                href="products/niacinamide-caviar-firming-serum.html"
                                                                style="padding-top:100.0%;"
                                                                data-image-id="42133676523833">
                                                                <img srcset="//la-flawless.com/cdn/shop/files/Niacinamide_CaviarFirmingSerum.jpg?v=1737386119&width=165 165w,//la-flawless.com/cdn/shop/files/Niacinamide_CaviarFirmingSerum.jpg?v=1737386119&width=360 360w,//la-flawless.com/cdn/shop/files/Niacinamide_CaviarFirmingSerum.jpg?v=1737386119&width=533 533w,//la-flawless.com/cdn/shop/files/Niacinamide_CaviarFirmingSerum.jpg?v=1737386119&width=720 720w,//la-flawless.com/cdn/shop/files/Niacinamide_CaviarFirmingSerum.jpg?v=1737386119&width=940 940w,//la-flawless.com/cdn/shop/files/Niacinamide_CaviarFirmingSerum.jpg?v=1737386119&width=1066 1066w,//la-flawless.com/cdn/shop/files/Niacinamide_CaviarFirmingSerum.jpg?v=1737386119 1200w
                " src="cdn/shop/files/Niacinamide_CaviarFirmingSerum23ee.jpg?v=1737386119&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Niacinamide &amp; Caviar Firming Serum"
                                                                    class="lazyload scale-in first-image  hover__hide-image "
                                                                    data-sizes="auto" data-aspectratio="1.0"
                                                                    loading="lazy" width="1200" height="1200">

                                                                <img srcset="//la-flawless.com/cdn/shop/files/IMG_8908-Edit.jpg?v=1738366404&width=165 165w,//la-flawless.com/cdn/shop/files/IMG_8908-Edit.jpg?v=1738366404&width=360 360w,//la-flawless.com/cdn/shop/files/IMG_8908-Edit.jpg?v=1738366404&width=533 533w,//la-flawless.com/cdn/shop/files/IMG_8908-Edit.jpg?v=1738366404&width=720 720w,//la-flawless.com/cdn/shop/files/IMG_8908-Edit.jpg?v=1738366404&width=940 940w,//la-flawless.com/cdn/shop/files/IMG_8908-Edit.jpg?v=1738366404&width=1066 1066w,//la-flawless.com/cdn/shop/files/IMG_8908-Edit.jpg?v=1738366404 4047w
     " src="cdn/shop/files/IMG_8908-Editd58d.jpg?v=1738366404&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Niacinamide &amp; Caviar Firming Serum"
                                                                    class="lazyload transition second-image"
                                                                    data-sizes="auto"
                                                                    data-aspectratio="1.2746456692913386" loading="lazy"
                                                                    width="4047" height="3175">
                                                            </a>
                                                            <div class="product-label rectangular_label ">

                                                                <div class=" hide product-tag product-tag-sale-item product-tag--absolute  txtandnumber mb-1"
                                                                    aria-hidden="true"
                                                                    style="background-color: #d73f0f;color:#ffffff">Sale
                                                                    <span class="product-tag-sale-number-item"> -%
                                                                    </span></div>
                                                            </div>
                                                            <div
                                                                class="product-card__overlay d-flex justify-content-center flex-column">
                                                                <span data-tooltip="true" data-placement="left"
                                                                    class="btn btn-theme gradient-theme-vertical product-card__overlay-btn js-btn-quickview"
                                                                    title="Quickshop" data-toggle="modal"
                                                                    data-target="#jsQuickview"
                                                                    data-handle="niacinamide-caviar-firming-serum"
                                                                    data-pavailable="true"
                                                                    data-viewjdmg="<span class='jdgm-preview-badge' data-id='9748984529209'></span>">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M11.9844 5.57178C8.50513 5.57178 4.93608 7.58553 2.12638 11.613C2.04618 11.7293 2.00223 11.8666 2.00008 12.0078C1.99794 12.149 2.03769 12.2877 2.11432 12.4063C4.27316 15.7856 7.79444 18.4284 11.9844 18.4284C16.1289 18.4284 19.7225 15.7776 21.8854 12.3907C21.9602 12.2744 22 12.139 22 12.0007C22 11.8624 21.9602 11.7271 21.8854 11.6108C19.7176 8.26273 16.0977 5.57178 11.9844 5.57178Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M12.0029 15.5713C13.9753 15.5713 15.5742 13.9723 15.5742 12C15.5742 10.0276 13.9753 8.42871 12.0029 8.42871C10.0306 8.42871 8.43164 10.0276 8.43164 12C8.43164 13.9723 10.0306 15.5713 12.0029 15.5713Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-miterlimit="10" />
                                                                    </svg>
                                                                    <span>Quickshop</span><span class=" txt-short hide">
                                                                        Niacinamide with Caviar Extract &amp; Panthenol
                                                                        Serum is a powerhouse formula designed...
                                                                    </span></span></div>
                                                            <div class="product-card-cart">
                                                                <span class="btn btn-theme js-grid-cart w-100 "
                                                                    title="Add to Cart" data-id="50450960711993">
                                                                    <div class="product-card__loading spinner-border"
                                                                        role="status"></div>
                                                                    <span>

                                                                        Add to Cart

                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__info text-left">

                                                            <a class="mb-1 product-card__type d-inline-block"
                                                                href="collections/vendors6949.html?filter.p.vendor=La%20Flawless&amp;q=La%20Flawless">La
                                                                Flawless</a>
                                                            <a href="products/niacinamide-caviar-firming-serum.html"
                                                                title="Niacinamide & Caviar Firming Serum"
                                                                class=" d-block product-card__name ">Niacinamide &
                                                                Caviar Firming Serum</a>


                                                            <div style=''
                                                                class='jdgm-widget jdgm-preview-badge  py-1 small'
                                                                data-id='9748984529209' data-auto-install="false">

                                                            </div>

                                                            <div class="product-card__price "><span
                                                                    class="visually-hidden">Regular price</span>
                                                                $27.99
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="productlist-item swiper-slide">
                                                <div class=" h-100 " data-aos="fade-up" data-aos-delay="500">


                                                    <div class="product-card js-product-card product-card--style1 product-card--style9 info-false"
                                                        data-price="2499" id="product-item-9748400767289">
                                                        <div class="product-card__image-wr">
                                                            <a class="product-card__image js image-content__image-wrapper auto"
                                                                href="products/niacinamide-papaya-brightening-serum.html"
                                                                style="padding-top:100.0%;"
                                                                data-image-id="42133677244729">
                                                                <img srcset="//la-flawless.com/cdn/shop/files/Niacinamide_PapayaBrighteningSerum.jpg?v=1737386133&width=165 165w,//la-flawless.com/cdn/shop/files/Niacinamide_PapayaBrighteningSerum.jpg?v=1737386133&width=360 360w,//la-flawless.com/cdn/shop/files/Niacinamide_PapayaBrighteningSerum.jpg?v=1737386133&width=533 533w,//la-flawless.com/cdn/shop/files/Niacinamide_PapayaBrighteningSerum.jpg?v=1737386133&width=720 720w,//la-flawless.com/cdn/shop/files/Niacinamide_PapayaBrighteningSerum.jpg?v=1737386133&width=940 940w,//la-flawless.com/cdn/shop/files/Niacinamide_PapayaBrighteningSerum.jpg?v=1737386133&width=1066 1066w,//la-flawless.com/cdn/shop/files/Niacinamide_PapayaBrighteningSerum.jpg?v=1737386133 1200w
                " src="cdn/shop/files/Niacinamide_PapayaBrighteningSerum2b3b.jpg?v=1737386133&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Niacinamide &amp; Papaya Brightening Serum"
                                                                    class="lazyload scale-in first-image  hover__hide-image "
                                                                    data-sizes="auto" data-aspectratio="1.0"
                                                                    loading="lazy" width="1200" height="1200">

                                                                <img srcset="//la-flawless.com/cdn/shop/files/IMG_8596-Edit.jpg?v=1738366362&width=165 165w,//la-flawless.com/cdn/shop/files/IMG_8596-Edit.jpg?v=1738366362&width=360 360w,//la-flawless.com/cdn/shop/files/IMG_8596-Edit.jpg?v=1738366362&width=533 533w,//la-flawless.com/cdn/shop/files/IMG_8596-Edit.jpg?v=1738366362&width=720 720w,//la-flawless.com/cdn/shop/files/IMG_8596-Edit.jpg?v=1738366362&width=940 940w,//la-flawless.com/cdn/shop/files/IMG_8596-Edit.jpg?v=1738366362&width=1066 1066w,//la-flawless.com/cdn/shop/files/IMG_8596-Edit.jpg?v=1738366362 5979w
     " src="cdn/shop/files/IMG_8596-Edit1b52.jpg?v=1738366362&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Niacinamide &amp; Papaya Brightening Serum"
                                                                    class="lazyload transition second-image"
                                                                    data-sizes="auto"
                                                                    data-aspectratio="1.4694028016711722" loading="lazy"
                                                                    width="5979" height="4069">
                                                            </a>
                                                            <div class="product-label rectangular_label ">

                                                                <div class=" hide product-tag product-tag-sale-item product-tag--absolute  txtandnumber mb-1"
                                                                    aria-hidden="true"
                                                                    style="background-color: #d73f0f;color:#ffffff">Sale
                                                                    <span class="product-tag-sale-number-item"> -%
                                                                    </span></div>
                                                            </div>
                                                            <div
                                                                class="product-card__overlay d-flex justify-content-center flex-column">
                                                                <span data-tooltip="true" data-placement="left"
                                                                    class="btn btn-theme gradient-theme-vertical product-card__overlay-btn js-btn-quickview"
                                                                    title="Quickshop" data-toggle="modal"
                                                                    data-target="#jsQuickview"
                                                                    data-handle="niacinamide-papaya-brightening-serum"
                                                                    data-pavailable="true"
                                                                    data-viewjdmg="<span class='jdgm-preview-badge' data-id='9748400767289'></span>">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M11.9844 5.57178C8.50513 5.57178 4.93608 7.58553 2.12638 11.613C2.04618 11.7293 2.00223 11.8666 2.00008 12.0078C1.99794 12.149 2.03769 12.2877 2.11432 12.4063C4.27316 15.7856 7.79444 18.4284 11.9844 18.4284C16.1289 18.4284 19.7225 15.7776 21.8854 12.3907C21.9602 12.2744 22 12.139 22 12.0007C22 11.8624 21.9602 11.7271 21.8854 11.6108C19.7176 8.26273 16.0977 5.57178 11.9844 5.57178Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M12.0029 15.5713C13.9753 15.5713 15.5742 13.9723 15.5742 12C15.5742 10.0276 13.9753 8.42871 12.0029 8.42871C10.0306 8.42871 8.43164 10.0276 8.43164 12C8.43164 13.9723 10.0306 15.5713 12.0029 15.5713Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-miterlimit="10" />
                                                                    </svg>
                                                                    <span>Quickshop</span><span class=" txt-short hide">
                                                                        Dual Barrier Skin Brightening SerumNiacinamide
                                                                        Serum with Papaya Extract, Lactic Acid,
                                                                        Hyaluronic...
                                                                    </span></span></div>
                                                            <div class="product-card-cart">
                                                                <span class="btn btn-theme js-grid-cart w-100 "
                                                                    title="Add to Cart" data-id="50450965954873">
                                                                    <div class="product-card__loading spinner-border"
                                                                        role="status"></div>
                                                                    <span>

                                                                        Add to Cart

                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__info text-left">

                                                            <a class="mb-1 product-card__type d-inline-block"
                                                                href="collections/vendors6949.html?filter.p.vendor=La%20Flawless&amp;q=La%20Flawless">La
                                                                Flawless</a>
                                                            <a href="products/niacinamide-papaya-brightening-serum.html"
                                                                title="Niacinamide & Papaya Brightening Serum"
                                                                class=" d-block product-card__name ">Niacinamide &
                                                                Papaya Brightening Serum</a>


                                                            <div style=''
                                                                class='jdgm-widget jdgm-preview-badge  py-1 small'
                                                                data-id='9748400767289' data-auto-install="false">

                                                            </div>

                                                            <div class="product-card__price "><span
                                                                    class="visually-hidden">Regular price</span>
                                                                $24.99
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="productlist-item swiper-slide">
                                                <div class=" h-100 " data-aos="fade-up" data-aos-delay="600">


                                                    <div class="product-card js-product-card product-card--style1 product-card--style9 info-false"
                                                        data-price="9999" id="product-item-9748984103225">
                                                        <div class="product-card__image-wr">
                                                            <a class="product-card__image js image-content__image-wrapper auto"
                                                                href="products/skin-boosting-supreme-mask.html"
                                                                style="padding-top:100.0%;"
                                                                data-image-id="42133697397049">
                                                                <img srcset="//la-flawless.com/cdn/shop/files/SkinBoostingSupremeMask.jpg?v=1737386326&width=165 165w,//la-flawless.com/cdn/shop/files/SkinBoostingSupremeMask.jpg?v=1737386326&width=360 360w,//la-flawless.com/cdn/shop/files/SkinBoostingSupremeMask.jpg?v=1737386326&width=533 533w,//la-flawless.com/cdn/shop/files/SkinBoostingSupremeMask.jpg?v=1737386326&width=720 720w,//la-flawless.com/cdn/shop/files/SkinBoostingSupremeMask.jpg?v=1737386326&width=940 940w,//la-flawless.com/cdn/shop/files/SkinBoostingSupremeMask.jpg?v=1737386326&width=1066 1066w,//la-flawless.com/cdn/shop/files/SkinBoostingSupremeMask.jpg?v=1737386326 1200w
                " src="cdn/shop/files/SkinBoostingSupremeMask285e.jpg?v=1737386326&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Skin Boosting Supreme Mask"
                                                                    class="lazyload scale-in first-image  hover__hide-image "
                                                                    data-sizes="auto" data-aspectratio="1.0"
                                                                    loading="lazy" width="1200" height="1200">

                                                                <img srcset="//la-flawless.com/cdn/shop/files/IMG_6907.jpg?v=1738365404&width=165 165w,//la-flawless.com/cdn/shop/files/IMG_6907.jpg?v=1738365404&width=360 360w,//la-flawless.com/cdn/shop/files/IMG_6907.jpg?v=1738365404&width=533 533w,//la-flawless.com/cdn/shop/files/IMG_6907.jpg?v=1738365404&width=720 720w,//la-flawless.com/cdn/shop/files/IMG_6907.jpg?v=1738365404&width=940 940w,//la-flawless.com/cdn/shop/files/IMG_6907.jpg?v=1738365404&width=1066 1066w,//la-flawless.com/cdn/shop/files/IMG_6907.jpg?v=1738365404 3825w
     " src="cdn/shop/files/IMG_6907f1e8.jpg?v=1738365404&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Skin Boosting Supreme Mask"
                                                                    class="lazyload transition second-image"
                                                                    data-sizes="auto"
                                                                    data-aspectratio="0.7613455414012739" loading="lazy"
                                                                    width="3825" height="5024">
                                                            </a>
                                                            <div class="product-label rectangular_label ">

                                                                <div class=" hide product-tag product-tag-sale-item product-tag--absolute  txtandnumber mb-1"
                                                                    aria-hidden="true"
                                                                    style="background-color: #d73f0f;color:#ffffff">Sale
                                                                    <span class="product-tag-sale-number-item"> -%
                                                                    </span></div>
                                                            </div>
                                                            <div
                                                                class="product-card__overlay d-flex justify-content-center flex-column">
                                                                <span data-tooltip="true" data-placement="left"
                                                                    class="btn btn-theme gradient-theme-vertical product-card__overlay-btn js-btn-quickview"
                                                                    title="Quickshop" data-toggle="modal"
                                                                    data-target="#jsQuickview"
                                                                    data-handle="skin-boosting-supreme-mask"
                                                                    data-pavailable="true"
                                                                    data-viewjdmg="<span class='jdgm-preview-badge' data-id='9748984103225'></span>">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M11.9844 5.57178C8.50513 5.57178 4.93608 7.58553 2.12638 11.613C2.04618 11.7293 2.00223 11.8666 2.00008 12.0078C1.99794 12.149 2.03769 12.2877 2.11432 12.4063C4.27316 15.7856 7.79444 18.4284 11.9844 18.4284C16.1289 18.4284 19.7225 15.7776 21.8854 12.3907C21.9602 12.2744 22 12.139 22 12.0007C22 11.8624 21.9602 11.7271 21.8854 11.6108C19.7176 8.26273 16.0977 5.57178 11.9844 5.57178Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M12.0029 15.5713C13.9753 15.5713 15.5742 13.9723 15.5742 12C15.5742 10.0276 13.9753 8.42871 12.0029 8.42871C10.0306 8.42871 8.43164 10.0276 8.43164 12C8.43164 13.9723 10.0306 15.5713 12.0029 15.5713Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-miterlimit="10" />
                                                                    </svg>
                                                                    <span>Quickshop</span><span class=" txt-short hide">
                                                                        Experience the transformative power of radiance
                                                                        boosting anti gravity face masks,
                                                                        meticulously...
                                                                    </span></span></div>
                                                            <div class="product-card-cart">
                                                                <span class="btn btn-theme js-grid-cart w-100 "
                                                                    title="Add to Cart" data-id="50450950783289">
                                                                    <div class="product-card__loading spinner-border"
                                                                        role="status"></div>
                                                                    <span>

                                                                        Add to Cart

                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__info text-left">

                                                            <a class="mb-1 product-card__type d-inline-block"
                                                                href="collections/vendors6949.html?filter.p.vendor=La%20Flawless&amp;q=La%20Flawless">La
                                                                Flawless</a>
                                                            <a href="products/skin-boosting-supreme-mask.html"
                                                                title="Skin Boosting Supreme Mask"
                                                                class=" d-block product-card__name ">Skin Boosting
                                                                Supreme Mask</a>


                                                            <div style=''
                                                                class='jdgm-widget jdgm-preview-badge  py-1 small'
                                                                data-id='9748984103225' data-auto-install="false">

                                                            </div>

                                                            <div class="product-card__price "><span
                                                                    class="visually-hidden">Regular price</span>
                                                                $99.99
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div id="shopify-section-template--24382013669689__backgroundvideo_A3jQc7"
                class="shopify-section index-section">
                <!-- backgroundvideo.liquid -->
                <style data-shopify>
                .customstyletemplate--24382013669689__backgroundvideo_A3jQc7 {
                    background-color: #ffffff;
                    padding: ;
                    margin: 0px 0px 0px 0px;

                }

                @media (max-width:750px) {
                    .customstyletemplate--24382013669689__backgroundvideo_A3jQc7 {
                        padding: ;
                        margin: 0px 0px 0px 0px
                    }
                }
                </style>
                <style>
                .bgvideo-template--24382013669689__backgroundvideo_A3jQc7 {

                    --st-bgvideo-height: 750px;
                    --st-bgvideo-height-mb: 450px;
                    min-height: var(--st-bgvideo-height);
                    padding-top: 4rem;
                    padding-bottom: 4rem;

                }

                @media(max-width:749px) {
                    .bgvideo-template--24382013669689__backgroundvideo_A3jQc7 {
                        min-height: var(--st-bgvideo-height-mb);
                    }
                }

                .bgvideo-template--24382013669689__backgroundvideo_A3jQc7::before {
                    content: "";
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    z-index: 1;
                    background: #000000;
                    opacity: 0;
                }

                .bgvideo-template--24382013669689__backgroundvideo_A3jQc7 .parallax-banner__meta::before {
                    background-color: #ffffff;
                    opacity: 0;
                }
                </style>
                <div class="customstyletemplate--24382013669689__backgroundvideo_A3jQc7 " data-aos="">

                    <div class="full">
                        <div class="section-block">
                            <div class="d-flex bgvideo-template--24382013669689__backgroundvideo_A3jQc7 align-items-center justify-content-center text-center bg-herovideo"
                                data-section-id="template--24382013669689__backgroundvideo_A3jQc7"
                                data-section-type="background-video">

                                <div class="hero-video">
                                    <video id="Mp4template--24382013669689__backgroundvideo_A3jQc7" class="lazyload"
                                        src="https://cdn.shopify.com/videos/c/o/v/da660cff1a5f42a38450445e716d93b2.mp4"
                                        loop="" muted="" playsinline="" autoplay=""></video>
                                </div>

                                <div class="container">
                                    <div class="parallax-banner__meta bg-herovideo-meta text-center">

                                        <div class="parallax-banner__btn  justify-content-center  align-items-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div id="shopify-section-template--24382013669689__92f0a295-b138-41fa-9620-bf11ee35918a"
                class="shopify-section index-section">
                <!-- featured-collections-3.liquid -->
                <style>
                .swipercollection {
                    overflow-x: hidden;
                }

                @media (min-width: 750px) {
                    .swipercollection .swiper-button-next {
                        right: -58px;
                    }

                    .swipercollection .swiper-button-prev {
                        left: -58px;
                    }
                }

                .swipercollection .swiper-container {
                    overflow: visible;
                }

                .swiperco-template--24382013669689__92f0a295-b138-41fa-9620-bf11ee35918a .collection-card-3 .collection-card__image .hv-image:before {
                    --color-gradient: 0, 0, 0;
                    content: "";
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    z-index: 1;
                    background-color: rgb(var(--color-gradient), 0);
                    transition: opacity 0.3s ease;
                }

                .swiperco-template--24382013669689__92f0a295-b138-41fa-9620-bf11ee35918a .collection-card-3 .collection-card__image:hover .hv-image:before {
                    opacity: .7;
                }

                .collection-card-3 .collection-card__meta {
                    pointer-events: inherit;
                }

                .customstyletemplate--24382013669689__92f0a295-b138-41fa-9620-bf11ee35918a .collection-card__image .photo-wrapper.square {
                    padding-top: 100% !important;
                }

                .customstyletemplate--24382013669689__92f0a295-b138-41fa-9620-bf11ee35918a .collection-card__image .photo-wrapper.landscape {
                    padding-top: 75% !important;
                }

                .customstyletemplate--24382013669689__92f0a295-b138-41fa-9620-bf11ee35918a .collection-card__image .photo-wrapper.portrait {
                    padding-top: 130% !important;
                }

                .customstyletemplate--24382013669689__92f0a295-b138-41fa-9620-bf11ee35918a .collection-card__image .photo-wrapper.wide {
                    padding-top: 60% !important;
                }

                .collection-card__image .photo-wrapper.square img,
                .collection-card__image .photo-wrapper.landscape img,
                .collection-card__image .photo-wrapper.portrait img,
                .collection-card__image .photo-wrapper.wide img {
                    object-fit: cover;
                    width: 100%;
                    height: 100%;
                }

                @media (max-width:749px) {
                    .swipercollection .swiper-container {
                        overflow: visible;
                    }

                    .swipercollection .container-p .swiper-slide {
                        width: 60% !important;
                    }
                }

                .customstyletemplate--24382013669689__92f0a295-b138-41fa-9620-bf11ee35918a .title-collection {
                    color: #000000;
                }

                .customstyletemplate--24382013669689__92f0a295-b138-41fa-9620-bf11ee35918a .item-counts {
                    color: rgba(0, 0, 0, 0.6);
                }
                </style>

                <div
                    class="customstyletemplate--24382013669689__92f0a295-b138-41fa-9620-bf11ee35918a swipercollection swiperco-template--24382013669689__92f0a295-b138-41fa-9620-bf11ee35918a   collections-name ">
                    <style data-shopify>
                    .customstyletemplate--24382013669689__92f0a295-b138-41fa-9620-bf11ee35918a {
                        background-color: #ece6ed;
                        padding: 50px 0px 50px 0px;
                        margin: 0px 0px 0px 0px;

                    }

                    @media (max-width:750px) {
                        .customstyletemplate--24382013669689__92f0a295-b138-41fa-9620-bf11ee35918a {
                            padding: 40px 0px 40px 0px;
                            margin: 0px 0px 0px 0px
                        }
                    }
                    </style>
                    <div>
                        <div class="section-block">
                            <div class="container">
                                <!-- section-heading.liquid - Apply for all section title -->

                                <div class="subtop text-left text-top  mb-2 " data-aos="fade-up"
                                    data-aos-duration="300">collection bunch</div>
                                <h3 class="h2 text-left   mb-5 " data-aos="fade-up" data-aos-duration="500">
                                    <span>Shop By Categories</span>
                                </h3>
                            </div>
                            <div class="container container-p">
                                <div
                                    class="swiper-wrapper-template--24382013669689__92f0a295-b138-41fa-9620-bf11ee35918a">
                                    <div id="swipercol-template--24382013669689__92f0a295-b138-41fa-9620-bf11ee35918a"
                                        class="collectionlist-wrapper swiper-container swipercol-template--24382013669689__92f0a295-b138-41fa-9620-bf11ee35918a "
                                        data-section-id="template--24382013669689__92f0a295-b138-41fa-9620-bf11ee35918a"
                                        data-section-type="swipercustom" data-perview-desktop="5"
                                        data-space-between="30" data-perview-mobile="1.6">
                                        <div class="collectionlist-slider swiper-wrapper"
                                            id="collection-list-template--24382013669689__92f0a295-b138-41fa-9620-bf11ee35918a">
                                            <div class="swiper-slide">
                                                <div class="collection-card-3" data-aos="fade-up" data-aos-delay="100">
                                                    <div
                                                        class="collection-card__image overflow-hidden position-relative image-content__image-container">
                                                        <a class="hv-image banner-theme photo-wrapper image-content__image-wrapper square"
                                                            href="collections/serum-collection.html"
                                                            style="padding-top:67.01855950962029%;"><img srcset="//la-flawless.com/cdn/shop/collections/IMG_9123-Edit.jpg?v=1736188796&width=165 165w,//la-flawless.com/cdn/shop/collections/IMG_9123-Edit.jpg?v=1736188796&width=360 360w,//la-flawless.com/cdn/shop/collections/IMG_9123-Edit.jpg?v=1736188796&width=533 533w,//la-flawless.com/cdn/shop/collections/IMG_9123-Edit.jpg?v=1736188796&width=720 720w,//la-flawless.com/cdn/shop/collections/IMG_9123-Edit.jpg?v=1736188796&width=940 940w,//la-flawless.com/cdn/shop/collections/IMG_9123-Edit.jpg?v=1736188796&width=1066 1066w,//la-flawless.com/cdn/shop/collections/IMG_9123-Edit.jpg?v=1736188796 5873w
                                " src="cdn/shop/collections/IMG_9123-Editc5e2.jpg?v=1736188796&amp;width=720"
                                                                sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                alt="Serum Collection" class="lazyload scale-in"
                                                                data-sizes="auto" data-aspectratio="1.4921239837398375"
                                                                loading="lazy" width="5873" height="3936"></a>
                                                        <div
                                                            class=" position-static collection-card__meta w-100 d-flex flex-column h-100 justify-content-center pt-3 underimage text-center">
                                                            <h4 class="mb-0 title-collection h5">
                                                                <a class="" href="collections/serum-collection.html">
                                                                    Serum Collection
                                                                </a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="collection-card-3" data-aos="fade-up" data-aos-delay="200">
                                                    <div
                                                        class="collection-card__image overflow-hidden position-relative image-content__image-container">
                                                        <a class="hv-image banner-theme photo-wrapper image-content__image-wrapper square"
                                                            href="collections/moisturizer-collection.html"
                                                            style="padding-top:74.9084249084249%;"><img srcset="//la-flawless.com/cdn/shop/collections/Moiturizer-1.png?v=1736188729&width=165 165w,//la-flawless.com/cdn/shop/collections/Moiturizer-1.png?v=1736188729&width=360 360w,//la-flawless.com/cdn/shop/collections/Moiturizer-1.png?v=1736188729&width=533 533w,//la-flawless.com/cdn/shop/collections/Moiturizer-1.png?v=1736188729&width=720 720w,//la-flawless.com/cdn/shop/collections/Moiturizer-1.png?v=1736188729&width=940 940w,//la-flawless.com/cdn/shop/collections/Moiturizer-1.png?v=1736188729&width=1066 1066w,//la-flawless.com/cdn/shop/collections/Moiturizer-1.png?v=1736188729 1092w
                                " src="cdn/shop/collections/Moiturizer-1c4cd.png?v=1736188729&amp;width=720"
                                                                sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                alt="Moisturizer Collection" class="lazyload scale-in"
                                                                data-sizes="auto" data-aspectratio="1.3349633251833741"
                                                                loading="lazy" width="1092" height="818"></a>
                                                        <div
                                                            class=" position-static collection-card__meta w-100 d-flex flex-column h-100 justify-content-center pt-3 underimage text-center">
                                                            <h4 class="mb-0 title-collection h5">
                                                                <a class=""
                                                                    href="collections/moisturizer-collection.html">
                                                                    moisturizer Collection
                                                                </a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="collection-card-3" data-aos="fade-up" data-aos-delay="300">
                                                    <div
                                                        class="collection-card__image overflow-hidden position-relative image-content__image-container">
                                                        <a class="hv-image banner-theme photo-wrapper image-content__image-wrapper square"
                                                            href="collections/restore-youth-collection.html"
                                                            style="padding-top:66.81446111869032%;"><img srcset="//la-flawless.com/cdn/shop/collections/IMG_3025-Edit-Edit.jpg?v=1736188548&width=165 165w,//la-flawless.com/cdn/shop/collections/IMG_3025-Edit-Edit.jpg?v=1736188548&width=360 360w,//la-flawless.com/cdn/shop/collections/IMG_3025-Edit-Edit.jpg?v=1736188548&width=533 533w,//la-flawless.com/cdn/shop/collections/IMG_3025-Edit-Edit.jpg?v=1736188548&width=720 720w,//la-flawless.com/cdn/shop/collections/IMG_3025-Edit-Edit.jpg?v=1736188548&width=940 940w,//la-flawless.com/cdn/shop/collections/IMG_3025-Edit-Edit.jpg?v=1736188548&width=1066 1066w,//la-flawless.com/cdn/shop/collections/IMG_3025-Edit-Edit.jpg?v=1736188548 5864w
                                " src="cdn/shop/collections/IMG_3025-Edit-Edit9a51.jpg?v=1736188548&amp;width=720"
                                                                sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                alt="Restore Youth Collection" class="lazyload scale-in"
                                                                data-sizes="auto" data-aspectratio="1.4966819806023481"
                                                                loading="lazy" width="5864" height="3918"></a>
                                                        <div
                                                            class=" position-static collection-card__meta w-100 d-flex flex-column h-100 justify-content-center pt-3 underimage text-center">
                                                            <h4 class="mb-0 title-collection h5">
                                                                <a class=""
                                                                    href="collections/restore-youth-collection.html">
                                                                    Restore Your Collection
                                                                </a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="collection-card-3" data-aos="fade-up" data-aos-delay="400">
                                                    <div
                                                        class="collection-card__image overflow-hidden position-relative image-content__image-container">
                                                        <a class="hv-image banner-theme photo-wrapper image-content__image-wrapper square"
                                                            href="collections/face-oil-collection.html"
                                                            style="padding-top:135.46076196678607%;"><img srcset="//la-flawless.com/cdn/shop/collections/IMG_9011-Edit.jpg?v=1736188839&width=165 165w,//la-flawless.com/cdn/shop/collections/IMG_9011-Edit.jpg?v=1736188839&width=360 360w,//la-flawless.com/cdn/shop/collections/IMG_9011-Edit.jpg?v=1736188839&width=533 533w,//la-flawless.com/cdn/shop/collections/IMG_9011-Edit.jpg?v=1736188839&width=720 720w,//la-flawless.com/cdn/shop/collections/IMG_9011-Edit.jpg?v=1736188839&width=940 940w,//la-flawless.com/cdn/shop/collections/IMG_9011-Edit.jpg?v=1736188839&width=1066 1066w,//la-flawless.com/cdn/shop/collections/IMG_9011-Edit.jpg?v=1736188839 3071w
                                " src="cdn/shop/collections/IMG_9011-Edit0031.jpg?v=1736188839&amp;width=720"
                                                                sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                alt="Face Oil Collection" class="lazyload scale-in"
                                                                data-sizes="auto" data-aspectratio="0.7382211538461538"
                                                                loading="lazy" width="3071" height="4160"></a>
                                                        <div
                                                            class=" position-static collection-card__meta w-100 d-flex flex-column h-100 justify-content-center pt-3 underimage text-center">
                                                            <h4 class="mb-0 title-collection h5">
                                                                <a class="" href="collections/face-oil-collection.html">
                                                                    Face Oil Collection
                                                                </a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="collection-card-3" data-aos="fade-up" data-aos-delay="500">
                                                    <div
                                                        class="collection-card__image overflow-hidden position-relative image-content__image-container">
                                                        <a class="hv-image banner-theme photo-wrapper image-content__image-wrapper square"
                                                            href="collections/toner-collection.html"
                                                            style="padding-top:69.82216633734507%;"><img srcset="//la-flawless.com/cdn/shop/collections/IMG_7583.jpg?v=1736188642&width=165 165w,//la-flawless.com/cdn/shop/collections/IMG_7583.jpg?v=1736188642&width=360 360w,//la-flawless.com/cdn/shop/collections/IMG_7583.jpg?v=1736188642&width=533 533w,//la-flawless.com/cdn/shop/collections/IMG_7583.jpg?v=1736188642&width=720 720w,//la-flawless.com/cdn/shop/collections/IMG_7583.jpg?v=1736188642&width=940 940w,//la-flawless.com/cdn/shop/collections/IMG_7583.jpg?v=1736188642&width=1066 1066w,//la-flawless.com/cdn/shop/collections/IMG_7583.jpg?v=1736188642 5567w
                                " src="cdn/shop/collections/IMG_7583fae8.jpg?v=1736188642&amp;width=720"
                                                                sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                alt="Toner Collection" class="lazyload scale-in"
                                                                data-sizes="auto" data-aspectratio="1.4322099305376896"
                                                                loading="lazy" width="5567" height="3887"></a>
                                                        <div
                                                            class=" position-static collection-card__meta w-100 d-flex flex-column h-100 justify-content-center pt-3 underimage text-center">
                                                            <h4 class="mb-0 title-collection h5">
                                                                <a class="" href="collections/toner-collection.html">
                                                                    Toner Collection
                                                                </a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="collection-card-3" data-aos="fade-up" data-aos-delay="600">
                                                    <div
                                                        class="collection-card__image overflow-hidden position-relative image-content__image-container">
                                                        <a class="hv-image banner-theme photo-wrapper image-content__image-wrapper square"
                                                            href="collections/hand-crafted-soap-collection.html"
                                                            style="padding-top:133.33333333333334%;"><img srcset="//la-flawless.com/cdn/shop/collections/WhatsApp_Image_2024-08-21_at_09.50.06_3d8bcb65.jpg?v=1736188892&width=165 165w,//la-flawless.com/cdn/shop/collections/WhatsApp_Image_2024-08-21_at_09.50.06_3d8bcb65.jpg?v=1736188892&width=360 360w,//la-flawless.com/cdn/shop/collections/WhatsApp_Image_2024-08-21_at_09.50.06_3d8bcb65.jpg?v=1736188892&width=533 533w,//la-flawless.com/cdn/shop/collections/WhatsApp_Image_2024-08-21_at_09.50.06_3d8bcb65.jpg?v=1736188892&width=720 720w,//la-flawless.com/cdn/shop/collections/WhatsApp_Image_2024-08-21_at_09.50.06_3d8bcb65.jpg?v=1736188892&width=940 940w,//la-flawless.com/cdn/shop/collections/WhatsApp_Image_2024-08-21_at_09.50.06_3d8bcb65.jpg?v=1736188892&width=1066 1066w,//la-flawless.com/cdn/shop/collections/WhatsApp_Image_2024-08-21_at_09.50.06_3d8bcb65.jpg?v=1736188892 1536w
                                " src="cdn/shop/collections/WhatsApp_Image_2024-08-21_at_09.50.06_3d8bcb6558a3.jpg?v=1736188892&amp;width=720"
                                                                sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                alt="Hand Crafted Soap Collection"
                                                                class="lazyload scale-in" data-sizes="auto"
                                                                data-aspectratio="0.75" loading="lazy" width="1536"
                                                                height="2048"></a>
                                                        <div
                                                            class=" position-static collection-card__meta w-100 d-flex flex-column h-100 justify-content-center pt-3 underimage text-center">
                                                            <h4 class="mb-0 title-collection h5">
                                                                <a class=""
                                                                    href="collections/hand-crafted-soap-collection.html">
                                                                    Hand Crafted Soap Collection
                                                                </a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <style>
                #shopify-section-template--24382013669689__92f0a295-b138-41fa-9620-bf11ee35918a .title-collection {
                    font-style: italic;
                }
                </style>
            </div>
            <div id="shopify-section-template--24382013669689__product_list_swiper_xVkMrt"
                class="shopify-section index-section">
                <!-- product-list-swiper.liquid -->
                <style>
                .customstyletemplate--24382013669689__product_list_swiper_xVkMrt {
                    background-position: center center !important;
                    background-repeat: no-repeat !important;
                    background-size: auto !important;
                    --or-width-banner: 30%;

                    --g-font-color-subtop: #042436;
                    --g-color-heading: #042436;
                    --g-color-heading-rgb: 4, 36, 54;
                    --color-body-text: #042436;
                    --color-body-text-rgb: 4, 36, 54;
                    --g-main-2: #042436;

                }

                .customstyletemplate--24382013669689__product_list_swiper_xVkMrt .swiper-container {
                    overflow: visible;
                }

                .customstyletemplate--24382013669689__product_list_swiper_xVkMrt .swiper-container-autoheight .swiper-wrapper {
                    align-items: stretch;
                    height: auto !important;
                }

                .productlist-swiper .product-card,
                .productlist-swiper .product-card .product-card__info {
                    margin-bottom: 0;
                }

                .productlist-swiper .product-card__image-wr {
                    --g-color-heading: #8b722c;
                    --g-color-heading-rgb: 139, 114, 44;
                }

                .productlist-swiper .image-content__image {
                    height: 100%;
                    object-fit: cover;
                }

                .productlist-banner {
                    width: var(--or-width-banner) !important;
                }

                .product-image__banner {
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    z-index: 1;
                    padding: 32px;
                    background: rgba(var(--bg-overlay-rgba), var(--bg-opacity));
                }

                .product-image__banner .image-content__image {
                    height: 100%;
                    object-fit: cover;
                    width: 100%;
                }

                @media (max-width:749px) {
                    .productswiper .swiper-container {
                        overflow: visible;
                    }

                    .productswiper .container-p .swiper-slide {
                        width: 70% !important;
                        margin-right: 20px !important;
                    }

                    .productswiper .container-p .productlist-banner {
                        width: 75% !important;
                    }
                }

                @media (min-width:750px) {
                    .productlist-wrapper .swiper-button-prev {
                        left: -58px;
                    }

                    .productlist-wrapper .swiper-button-next {
                        right: -58px;
                    }
                }
                </style>
                <div class="customstyletemplate--24382013669689__product_list_swiper_xVkMrt productswiper lazyload"
                    data-aos="fade-up" data-bgset="" data-sizes="auto" data-parent-fit="cover">
                    <style data-shopify>
                    .customstyletemplate--24382013669689__product_list_swiper_xVkMrt {
                        background-color: #ffffff;
                        padding: 80px 0px 60px 0px;
                        margin: 0px 0px 0px 0px;

                    }

                    @media (max-width:750px) {
                        .customstyletemplate--24382013669689__product_list_swiper_xVkMrt {
                            padding: 40px 0px 40px 0px;
                            margin: 0px 0px 0px 0px
                        }
                    }
                    </style>
                    <div>
                        <div class="section-block">
                            <div class="container-fluid">
                                <!-- section-heading.liquid - Apply for all section title -->

                                <div class="subtop text-left text-top  mb-2 " data-aos="fade-up"
                                    data-aos-duration="300">The Ritual of Radiance</div>
                                <h3 class="h2 text-left   mb-5 " data-aos="fade-up" data-aos-duration="500">
                                    <span>K-Beauty Inspired & Luxurious Glass Skin Set</span>
                                </h3>
                            </div>
                            <div class="container-fluid container-p">
                                <div
                                    class="productlist-wrapper dots-negative swiper-wrapper-template--24382013669689__product_list_swiper_xVkMrt position-relative">
                                    <div class="productlist-swiper swiper-container swipercol-template--24382013669689__product_list_swiper_xVkMrt "
                                        id="Productlist-template--24382013669689__product_list_swiper_xVkMrt"
                                        data-section-id="template--24382013669689__product_list_swiper_xVkMrt"
                                        data-section-type="swipercustom" data-perview-desktop="4"
                                        data-space-between="23" data-perview-mobile=" 1.38 ">
                                        <div class="swiper-wrapper">
                                            <div class="productlist-item swiper-slide">
                                                <div class=" h-100 " data-aos="fade-up" data-aos-delay="100">


                                                    <div class="product-card js-product-card product-card--style1 product-card--style9 info-false"
                                                        data-price="3000" id="product-item-9748989608249">
                                                        <div class="product-card__image-wr">
                                                            <a class="product-card__image js image-content__image-wrapper auto"
                                                                href="products/rose-elixir-hydrating-toner.html"
                                                                style="padding-top:100.0%;"
                                                                data-image-id="42133695037753">
                                                                <img srcset="//la-flawless.com/cdn/shop/files/RoseElixirHydratingToner.jpg?v=1737386303&width=165 165w,//la-flawless.com/cdn/shop/files/RoseElixirHydratingToner.jpg?v=1737386303&width=360 360w,//la-flawless.com/cdn/shop/files/RoseElixirHydratingToner.jpg?v=1737386303&width=533 533w,//la-flawless.com/cdn/shop/files/RoseElixirHydratingToner.jpg?v=1737386303&width=720 720w,//la-flawless.com/cdn/shop/files/RoseElixirHydratingToner.jpg?v=1737386303&width=940 940w,//la-flawless.com/cdn/shop/files/RoseElixirHydratingToner.jpg?v=1737386303&width=1066 1066w,//la-flawless.com/cdn/shop/files/RoseElixirHydratingToner.jpg?v=1737386303 1200w
                " src="cdn/shop/files/RoseElixirHydratingToner7d7c.jpg?v=1737386303&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Rose Elixir Hydrating Toner"
                                                                    class="lazyload scale-in first-image  hover__hide-image "
                                                                    data-sizes="auto" data-aspectratio="1.0"
                                                                    loading="lazy" width="1200" height="1200">

                                                                <img srcset="//la-flawless.com/cdn/shop/files/IMG_7589.jpg?v=1738365560&width=165 165w,//la-flawless.com/cdn/shop/files/IMG_7589.jpg?v=1738365560&width=360 360w,//la-flawless.com/cdn/shop/files/IMG_7589.jpg?v=1738365560&width=533 533w,//la-flawless.com/cdn/shop/files/IMG_7589.jpg?v=1738365560&width=720 720w,//la-flawless.com/cdn/shop/files/IMG_7589.jpg?v=1738365560&width=940 940w,//la-flawless.com/cdn/shop/files/IMG_7589.jpg?v=1738365560&width=1066 1066w,//la-flawless.com/cdn/shop/files/IMG_7589.jpg?v=1738365560 3953w
     " src="cdn/shop/files/IMG_75893959.jpg?v=1738365560&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Rose Elixir Hydrating Toner"
                                                                    class="lazyload transition second-image"
                                                                    data-sizes="auto"
                                                                    data-aspectratio="0.9186613990239368" loading="lazy"
                                                                    width="3953" height="4303">
                                                            </a>
                                                            <div class="product-label rectangular_label ">

                                                                <div class=" hide product-tag product-tag-sale-item product-tag--absolute  txtandnumber mb-1"
                                                                    aria-hidden="true"
                                                                    style="background-color: #d73f0f;color:#ffffff">Sale
                                                                    <span class="product-tag-sale-number-item"> -%
                                                                    </span></div>
                                                            </div>
                                                            <div
                                                                class="product-card__overlay d-flex justify-content-center flex-column">
                                                                <span data-tooltip="true" data-placement="left"
                                                                    class="btn btn-theme gradient-theme-vertical product-card__overlay-btn js-btn-quickview"
                                                                    title="Quickshop" data-toggle="modal"
                                                                    data-target="#jsQuickview"
                                                                    data-handle="rose-elixir-hydrating-toner"
                                                                    data-pavailable="true"
                                                                    data-viewjdmg="<span class='jdgm-preview-badge' data-id='9748989608249'></span>">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M11.9844 5.57178C8.50513 5.57178 4.93608 7.58553 2.12638 11.613C2.04618 11.7293 2.00223 11.8666 2.00008 12.0078C1.99794 12.149 2.03769 12.2877 2.11432 12.4063C4.27316 15.7856 7.79444 18.4284 11.9844 18.4284C16.1289 18.4284 19.7225 15.7776 21.8854 12.3907C21.9602 12.2744 22 12.139 22 12.0007C22 11.8624 21.9602 11.7271 21.8854 11.6108C19.7176 8.26273 16.0977 5.57178 11.9844 5.57178Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M12.0029 15.5713C13.9753 15.5713 15.5742 13.9723 15.5742 12C15.5742 10.0276 13.9753 8.42871 12.0029 8.42871C10.0306 8.42871 8.43164 10.0276 8.43164 12C8.43164 13.9723 10.0306 15.5713 12.0029 15.5713Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-miterlimit="10" />
                                                                    </svg>
                                                                    <span>Quickshop</span><span class=" txt-short hide">
                                                                        Experience ultimate hydration with our Rose
                                                                        Elixir Hydrating Toner. Our expertly crafted...
                                                                    </span></span></div>
                                                            <div class="product-card-cart">
                                                                <span class="btn btn-theme js-grid-cart w-100 "
                                                                    title="Add to Cart" data-id="50450942886201">
                                                                    <div class="product-card__loading spinner-border"
                                                                        role="status"></div>
                                                                    <span>

                                                                        Add to Cart

                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__info text-left">

                                                            <a class="mb-1 product-card__type d-inline-block"
                                                                href="collections/vendors6949.html?filter.p.vendor=La%20Flawless&amp;q=La%20Flawless">La
                                                                Flawless</a>
                                                            <a href="products/rose-elixir-hydrating-toner.html"
                                                                title="Rose Elixir Hydrating Toner"
                                                                class=" d-block product-card__name ">Rose Elixir
                                                                Hydrating Toner</a>


                                                            <div style=''
                                                                class='jdgm-widget jdgm-preview-badge  py-1 small'
                                                                data-id='9748989608249' data-auto-install="false">

                                                            </div>

                                                            <div class="product-card__price "><span
                                                                    class="visually-hidden">Regular price</span>
                                                                $30.00
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="productlist-item swiper-slide">
                                                <div class=" h-100 " data-aos="fade-up" data-aos-delay="200">


                                                    <div class="product-card js-product-card product-card--style1 product-card--style9 info-false"
                                                        data-price="3499" id="product-item-9748980793657">
                                                        <div class="product-card__image-wr">
                                                            <a class="product-card__image js image-content__image-wrapper auto"
                                                                href="products/korean-glass-skin-renewing-serum.html"
                                                                style="padding-top:100.0%;"
                                                                data-image-id="42133648048441">
                                                                <img srcset="//la-flawless.com/cdn/shop/files/KoreanGlassSkinRenewingSerum.jpg?v=1737385771&width=165 165w,//la-flawless.com/cdn/shop/files/KoreanGlassSkinRenewingSerum.jpg?v=1737385771&width=360 360w,//la-flawless.com/cdn/shop/files/KoreanGlassSkinRenewingSerum.jpg?v=1737385771&width=533 533w,//la-flawless.com/cdn/shop/files/KoreanGlassSkinRenewingSerum.jpg?v=1737385771&width=720 720w,//la-flawless.com/cdn/shop/files/KoreanGlassSkinRenewingSerum.jpg?v=1737385771&width=940 940w,//la-flawless.com/cdn/shop/files/KoreanGlassSkinRenewingSerum.jpg?v=1737385771&width=1066 1066w,//la-flawless.com/cdn/shop/files/KoreanGlassSkinRenewingSerum.jpg?v=1737385771 1200w
                " src="cdn/shop/files/KoreanGlassSkinRenewingSerum5eb3.jpg?v=1737385771&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Korean Glass Skin Renewing Serum"
                                                                    class="lazyload scale-in first-image  hover__hide-image "
                                                                    data-sizes="auto" data-aspectratio="1.0"
                                                                    loading="lazy" width="1200" height="1200">

                                                                <img srcset="//la-flawless.com/cdn/shop/files/IMG_8306.jpg?v=1738364540&width=165 165w,//la-flawless.com/cdn/shop/files/IMG_8306.jpg?v=1738364540&width=360 360w,//la-flawless.com/cdn/shop/files/IMG_8306.jpg?v=1738364540&width=533 533w,//la-flawless.com/cdn/shop/files/IMG_8306.jpg?v=1738364540&width=720 720w,//la-flawless.com/cdn/shop/files/IMG_8306.jpg?v=1738364540&width=940 940w,//la-flawless.com/cdn/shop/files/IMG_8306.jpg?v=1738364540&width=1066 1066w,//la-flawless.com/cdn/shop/files/IMG_8306.jpg?v=1738364540 4160w
     " src="cdn/shop/files/IMG_8306942f.jpg?v=1738364540&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Korean Glass Skin Renewing Serum"
                                                                    class="lazyload transition second-image"
                                                                    data-sizes="auto"
                                                                    data-aspectratio="0.6666666666666666" loading="lazy"
                                                                    width="4160" height="6240">
                                                            </a>
                                                            <div class="product-label rectangular_label ">

                                                                <div class=" hide product-tag product-tag-sale-item product-tag--absolute  txtandnumber mb-1"
                                                                    aria-hidden="true"
                                                                    style="background-color: #d73f0f;color:#ffffff">Sale
                                                                    <span class="product-tag-sale-number-item"> -%
                                                                    </span></div>
                                                            </div>
                                                            <div
                                                                class="product-card__overlay d-flex justify-content-center flex-column">
                                                                <span data-tooltip="true" data-placement="left"
                                                                    class="btn btn-theme gradient-theme-vertical product-card__overlay-btn js-btn-quickview"
                                                                    title="Quickshop" data-toggle="modal"
                                                                    data-target="#jsQuickview"
                                                                    data-handle="korean-glass-skin-renewing-serum"
                                                                    data-pavailable="true"
                                                                    data-viewjdmg="<span class='jdgm-preview-badge' data-id='9748980793657'></span>">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M11.9844 5.57178C8.50513 5.57178 4.93608 7.58553 2.12638 11.613C2.04618 11.7293 2.00223 11.8666 2.00008 12.0078C1.99794 12.149 2.03769 12.2877 2.11432 12.4063C4.27316 15.7856 7.79444 18.4284 11.9844 18.4284C16.1289 18.4284 19.7225 15.7776 21.8854 12.3907C21.9602 12.2744 22 12.139 22 12.0007C22 11.8624 21.9602 11.7271 21.8854 11.6108C19.7176 8.26273 16.0977 5.57178 11.9844 5.57178Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M12.0029 15.5713C13.9753 15.5713 15.5742 13.9723 15.5742 12C15.5742 10.0276 13.9753 8.42871 12.0029 8.42871C10.0306 8.42871 8.43164 10.0276 8.43164 12C8.43164 13.9723 10.0306 15.5713 12.0029 15.5713Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-miterlimit="10" />
                                                                    </svg>
                                                                    <span>Quickshop</span><span class=" txt-short hide">
                                                                        Korean Glass Skin Renewing Serum is a potent
                                                                        formula made with glutathione,...
                                                                    </span></span></div>
                                                            <div class="product-card-cart">
                                                                <span class="btn btn-theme js-grid-cart w-100 "
                                                                    title="Add to Cart" data-id="50450955108665">
                                                                    <div class="product-card__loading spinner-border"
                                                                        role="status"></div>
                                                                    <span>

                                                                        Add to Cart

                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__info text-left">

                                                            <a class="mb-1 product-card__type d-inline-block"
                                                                href="collections/vendorsd43f.html?filter.p.vendor=My%20Store&amp;q=My%20Store">My
                                                                Store</a>
                                                            <a href="products/korean-glass-skin-renewing-serum.html"
                                                                title="Korean Glass Skin Renewing Serum"
                                                                class=" d-block product-card__name ">Korean Glass Skin
                                                                Renewing Serum</a>


                                                            <div style=''
                                                                class='jdgm-widget jdgm-preview-badge  py-1 small'
                                                                data-id='9748980793657' data-auto-install="false">

                                                            </div>

                                                            <div class="product-card__price "><span
                                                                    class="visually-hidden">Regular price</span>
                                                                $34.99
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div id="shopify-section-template--24382013669689__backgroundvideo_jghKfn"
                class="shopify-section index-section">
                <!-- backgroundvideo.liquid -->
                <style data-shopify>
                .customstyletemplate--24382013669689__backgroundvideo_jghKfn {
                    background-color: #ffffff;
                    padding: ;
                    margin: 0px 0px 0px 0px;

                }

                @media (max-width:750px) {
                    .customstyletemplate--24382013669689__backgroundvideo_jghKfn {
                        padding: ;
                        margin: 0px 0px 0px 0px
                    }
                }
                </style>
                <style>
                .bgvideo-template--24382013669689__backgroundvideo_jghKfn {

                    --st-bgvideo-height: 750px;
                    --st-bgvideo-height-mb: 450px;
                    min-height: var(--st-bgvideo-height);
                    padding-top: 4rem;
                    padding-bottom: 4rem;

                }

                @media(max-width:749px) {
                    .bgvideo-template--24382013669689__backgroundvideo_jghKfn {
                        min-height: var(--st-bgvideo-height-mb);
                    }
                }

                .bgvideo-template--24382013669689__backgroundvideo_jghKfn::before {
                    content: "";
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    z-index: 1;
                    background: #000000;
                    opacity: 0;
                }

                .bgvideo-template--24382013669689__backgroundvideo_jghKfn .parallax-banner__meta::before {
                    background-color: #ffffff;
                    opacity: 0;
                }
                </style>
                <div class="customstyletemplate--24382013669689__backgroundvideo_jghKfn " data-aos="">

                    <div class="full">
                        <div class="section-block">
                            <div class="d-flex bgvideo-template--24382013669689__backgroundvideo_jghKfn align-items-center justify-content-center text-center bg-herovideo"
                                data-section-id="template--24382013669689__backgroundvideo_jghKfn"
                                data-section-type="background-video">

                                <div class="hero-video">
                                    <video id="Mp4template--24382013669689__backgroundvideo_jghKfn" class="lazyload"
                                        src="https://cdn.shopify.com/videos/c/o/v/25e1e7ba07094896b72b54d5d1b3aedc.mp4"
                                        loop="" muted="" playsinline="" autoplay=""></video>
                                </div>

                                <div class="container">
                                    <div class="parallax-banner__meta bg-herovideo-meta text-center">

                                        <div class="parallax-banner__btn  justify-content-center  align-items-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div id="shopify-section-template--24382013669689__c92b6d28-25d1-477b-920a-d657bf443761"
                class="shopify-section index-section">
                <!-- product-tab.liquid  -->
                <style data-shopify>
                .customstyletemplate--24382013669689__c92b6d28-25d1-477b-920a-d657bf443761 .prdtab-content {
                    margin: 0 -15px;
                }

                .customstyletemplate--24382013669689__c92b6d28-25d1-477b-920a-d657bf443761 .slick-track {
                    display: flex;
                }

                .customstyletemplate--24382013669689__c92b6d28-25d1-477b-920a-d657bf443761 .prdtab-content .producttab-item {
                    padding: 0 15px;
                    height: inherit;
                }

                .style-button.nav-tabs .nav-item {
                    margin-bottom: 0;
                }

                .style-button.nav-tabs.nav-tabs-1 {
                    box-shadow: none;
                    gap: 16px;
                }

                .style-button.nav-tabs.nav-tabs-1 .nav-link {
                    border: 2px solid rgba(var(--g-color-heading-rgb), 0.1);
                    padding: 8px 16px;
                    border-radius: var(--g-font-radius-btn);
                }

                .style-button.nav-tabs.nav-tabs-1 .nav-link:before {
                    display: none;
                }

                .style-button.nav-tabs.nav-tabs-1 .nav-link.active {
                    background-color: rgba(var(--g-color-heading-rgb), 1);
                    color: white;
                }
                </style>
                <div class="customstyletemplate--24382013669689__c92b6d28-25d1-477b-920a-d657bf443761 "
                    data-aos="fade-up">
                    <style data-shopify>
                    .customstyletemplate--24382013669689__c92b6d28-25d1-477b-920a-d657bf443761 {
                        background-color: #e9e9e9;
                        padding: 60px 0px 60px 0px;
                        margin: 0px 0px 0px 0px;

                    }

                    @media (max-width:750px) {
                        .customstyletemplate--24382013669689__c92b6d28-25d1-477b-920a-d657bf443761 {
                            padding: 40px 0px 40px 0px;
                            margin: 0px 0px 0px 0px
                        }
                    }
                    </style>
                    <div class="container">
                        <div class="section-block">
                            <!-- section-heading.liquid - Apply for all section title -->

                            <h3 class="h2 text-center   mb-5 " data-aos="fade-up" data-aos-duration="500">
                                <span>Featured Products</span>
                            </h3>
                            <div id="Producttab-template--24382013669689__c92b6d28-25d1-477b-920a-d657bf443761"
                                data-section-id="template--24382013669689__c92b6d28-25d1-477b-920a-d657bf443761"
                                data-section-type="producttab" data-rows="1" data-slidesToShow="5" data-arrows="true"
                                data-dots="false" data-draggable="true" data-infinite="false">
                                <div class="text-center mt-n4 mb-5">
                                    <ul class="nav nav-tabs nav-tabs-1 d-inline-flex style-line" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a id="template--21581222871313__c92b6d28-25d1-477b-920a-d657bf443761-collection-1-tab"
                                                class="nav-link nav-link-template--21581222871313__c92b6d28-25d1-477b-920a-d657bf443761-collection-1 active"
                                                data-toggle="tab"
                                                href="#prdtab-template--21581222871313__c92b6d28-25d1-477b-920a-d657bf443761-collection-1"
                                                role="tab"
                                                aria-controls="prdtab-template--21581222871313__c92b6d28-25d1-477b-920a-d657bf443761-collection-1">
                                                Restore Youth Collection
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a id="template--21581222871313__c92b6d28-25d1-477b-920a-d657bf443761-collection-2-tab"
                                                class="nav-link nav-link-template--21581222871313__c92b6d28-25d1-477b-920a-d657bf443761-collection-2 "
                                                data-toggle="tab"
                                                href="#prdtab-template--21581222871313__c92b6d28-25d1-477b-920a-d657bf443761-collection-2"
                                                role="tab"
                                                aria-controls="prdtab-template--21581222871313__c92b6d28-25d1-477b-920a-d657bf443761-collection-2">
                                                Moisturizer Collection
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a id="template--21581222871313__c92b6d28-25d1-477b-920a-d657bf443761-collection-3-tab"
                                                class="nav-link nav-link-template--21581222871313__c92b6d28-25d1-477b-920a-d657bf443761-collection-3 "
                                                data-toggle="tab"
                                                href="#prdtab-template--21581222871313__c92b6d28-25d1-477b-920a-d657bf443761-collection-3"
                                                role="tab"
                                                aria-controls="prdtab-template--21581222871313__c92b6d28-25d1-477b-920a-d657bf443761-collection-3">
                                                Face Oil Collection
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" data-aos="fade-up">
                                    <div class="tab-pane fade show active"
                                        id="prdtab-template--21581222871313__c92b6d28-25d1-477b-920a-d657bf443761-collection-1"
                                        role="tabpanel"
                                        aria-labelledby="template--21581222871313__c92b6d28-25d1-477b-920a-d657bf443761-collection-1-tab">
                                        <div class="prdtab-content row " style="opacity:0">
                                            <div class="producttab-item  col " data-scroll data-scroll-speed="1">
                                                <div class="h-100" data-aos="fade-up" data-aos-delay="100">


                                                    <div class="product-card js-product-card product-card--style1 product-card--style9 info-false"
                                                        data-price="3000" id="product-item-9748992196921">
                                                        <div class="product-card__image-wr">
                                                            <a class="product-card__image js image-content__image-wrapper auto"
                                                                href="products/restore-youth-marine-collagen.html"
                                                                style="padding-top:100.0%;"
                                                                data-image-id="42133689467193">
                                                                <img srcset="//la-flawless.com/cdn/shop/files/RestoreyouthMarineCollagen.jpg?v=1737386251&width=165 165w,//la-flawless.com/cdn/shop/files/RestoreyouthMarineCollagen.jpg?v=1737386251&width=360 360w,//la-flawless.com/cdn/shop/files/RestoreyouthMarineCollagen.jpg?v=1737386251&width=533 533w,//la-flawless.com/cdn/shop/files/RestoreyouthMarineCollagen.jpg?v=1737386251&width=720 720w,//la-flawless.com/cdn/shop/files/RestoreyouthMarineCollagen.jpg?v=1737386251&width=940 940w,//la-flawless.com/cdn/shop/files/RestoreyouthMarineCollagen.jpg?v=1737386251&width=1066 1066w,//la-flawless.com/cdn/shop/files/RestoreyouthMarineCollagen.jpg?v=1737386251 1200w
                " src="cdn/shop/files/RestoreyouthMarineCollagene3b3.jpg?v=1737386251&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Restore youth Marine Collagen"
                                                                    class="lazyload scale-in first-image  hover__hide-image "
                                                                    data-sizes="auto" data-aspectratio="1.0"
                                                                    loading="lazy" width="1200" height="1200">

                                                                <img srcset="//la-flawless.com/cdn/shop/files/IMG_8362.jpg?v=1742866489&width=165 165w,//la-flawless.com/cdn/shop/files/IMG_8362.jpg?v=1742866489&width=360 360w,//la-flawless.com/cdn/shop/files/IMG_8362.jpg?v=1742866489&width=533 533w,//la-flawless.com/cdn/shop/files/IMG_8362.jpg?v=1742866489&width=720 720w,//la-flawless.com/cdn/shop/files/IMG_8362.jpg?v=1742866489&width=940 940w,//la-flawless.com/cdn/shop/files/IMG_8362.jpg?v=1742866489&width=1066 1066w,//la-flawless.com/cdn/shop/files/IMG_8362.jpg?v=1742866489 4335w
     " src="cdn/shop/files/IMG_83625535.jpg?v=1742866489&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Restore youth Marine Collagen"
                                                                    class="lazyload transition second-image"
                                                                    data-sizes="auto"
                                                                    data-aspectratio="1.425986842105263" loading="lazy"
                                                                    width="4335" height="3040">
                                                            </a>
                                                            <div class="product-label rectangular_label ">

                                                                <div class=" hide product-tag product-tag-sale-item product-tag--absolute  txtandnumber mb-1"
                                                                    aria-hidden="true"
                                                                    style="background-color: #d73f0f;color:#ffffff">Sale
                                                                    <span class="product-tag-sale-number-item"> -%
                                                                    </span></div>
                                                            </div>
                                                            <div
                                                                class="product-card__overlay d-flex justify-content-center flex-column">
                                                                <span data-tooltip="true" data-placement="left"
                                                                    class="btn btn-theme gradient-theme-vertical product-card__overlay-btn js-btn-quickview"
                                                                    title="Quickshop" data-toggle="modal"
                                                                    data-target="#jsQuickview"
                                                                    data-handle="restore-youth-marine-collagen"
                                                                    data-pavailable="true"
                                                                    data-viewjdmg="<span class='jdgm-preview-badge' data-id='9748992196921'></span>">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M11.9844 5.57178C8.50513 5.57178 4.93608 7.58553 2.12638 11.613C2.04618 11.7293 2.00223 11.8666 2.00008 12.0078C1.99794 12.149 2.03769 12.2877 2.11432 12.4063C4.27316 15.7856 7.79444 18.4284 11.9844 18.4284C16.1289 18.4284 19.7225 15.7776 21.8854 12.3907C21.9602 12.2744 22 12.139 22 12.0007C22 11.8624 21.9602 11.7271 21.8854 11.6108C19.7176 8.26273 16.0977 5.57178 11.9844 5.57178Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M12.0029 15.5713C13.9753 15.5713 15.5742 13.9723 15.5742 12C15.5742 10.0276 13.9753 8.42871 12.0029 8.42871C10.0306 8.42871 8.43164 10.0276 8.43164 12C8.43164 13.9723 10.0306 15.5713 12.0029 15.5713Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-miterlimit="10" />
                                                                    </svg>
                                                                    <span>Quickshop</span><span class=" txt-short hide">
                                                                        Improve skin's appearance and elasticity with
                                                                        Restore youth Marine Collagen serum. Its...
                                                                    </span></span></div>
                                                            <div class="product-card-cart">
                                                                <span class="btn btn-theme js-grid-cart w-100 "
                                                                    title="Add to Cart" data-id="50450923553081">
                                                                    <div class="product-card__loading spinner-border"
                                                                        role="status"></div>
                                                                    <span>

                                                                        Add to Cart

                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__info text-left">

                                                            <a class="mb-1 product-card__type d-inline-block"
                                                                href="collections/vendors6949.html?filter.p.vendor=La%20Flawless&amp;q=La%20Flawless">La
                                                                Flawless</a>
                                                            <a href="products/restore-youth-marine-collagen.html"
                                                                title="Restore youth Marine Collagen"
                                                                class=" d-block product-card__name ">Restore youth
                                                                Marine Collagen</a>


                                                            <div style=''
                                                                class='jdgm-widget jdgm-preview-badge  py-1 small'
                                                                data-id='9748992196921' data-auto-install="false">

                                                            </div>

                                                            <div class="product-card__price "><span
                                                                    class="visually-hidden">Regular price</span>
                                                                $30.00
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="producttab-item  col " data-scroll data-scroll-speed="1">
                                                <div class="h-100" data-aos="fade-up" data-aos-delay="200">


                                                    <div class="product-card js-product-card product-card--style1 product-card--style9 info-false"
                                                        data-price="3000" id="product-item-9748992491833">
                                                        <div class="product-card__image-wr">
                                                            <a class="product-card__image js image-content__image-wrapper auto"
                                                                href="products/restore-youth-lactic-acid-serum.html"
                                                                style="padding-top:100.0%;"
                                                                data-image-id="42133686190393">
                                                                <img srcset="//la-flawless.com/cdn/shop/files/RestoreYouthLacticacidSerum.jpg?v=1737386222&width=165 165w,//la-flawless.com/cdn/shop/files/RestoreYouthLacticacidSerum.jpg?v=1737386222&width=360 360w,//la-flawless.com/cdn/shop/files/RestoreYouthLacticacidSerum.jpg?v=1737386222&width=533 533w,//la-flawless.com/cdn/shop/files/RestoreYouthLacticacidSerum.jpg?v=1737386222&width=720 720w,//la-flawless.com/cdn/shop/files/RestoreYouthLacticacidSerum.jpg?v=1737386222&width=940 940w,//la-flawless.com/cdn/shop/files/RestoreYouthLacticacidSerum.jpg?v=1737386222&width=1066 1066w,//la-flawless.com/cdn/shop/files/RestoreYouthLacticacidSerum.jpg?v=1737386222 1200w
                " src="cdn/shop/files/RestoreYouthLacticacidSerum7690.jpg?v=1737386222&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Restore Youth Lactic acid Serum"
                                                                    class="lazyload scale-in first-image  hover__hide-image "
                                                                    data-sizes="auto" data-aspectratio="1.0"
                                                                    loading="lazy" width="1200" height="1200">

                                                                <img srcset="//la-flawless.com/cdn/shop/files/IMG_8367.jpg?v=1738366013&width=165 165w,//la-flawless.com/cdn/shop/files/IMG_8367.jpg?v=1738366013&width=360 360w,//la-flawless.com/cdn/shop/files/IMG_8367.jpg?v=1738366013&width=533 533w,//la-flawless.com/cdn/shop/files/IMG_8367.jpg?v=1738366013&width=720 720w,//la-flawless.com/cdn/shop/files/IMG_8367.jpg?v=1738366013&width=940 940w,//la-flawless.com/cdn/shop/files/IMG_8367.jpg?v=1738366013&width=1066 1066w,//la-flawless.com/cdn/shop/files/IMG_8367.jpg?v=1738366013 3961w
     " src="cdn/shop/files/IMG_83679dad.jpg?v=1738366013&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Restore Youth Lactic acid Serum"
                                                                    class="lazyload transition second-image"
                                                                    data-sizes="auto"
                                                                    data-aspectratio="0.6473279947703873" loading="lazy"
                                                                    width="3961" height="6119">
                                                            </a>
                                                            <div class="product-label rectangular_label ">

                                                                <div class=" hide product-tag product-tag-sale-item product-tag--absolute  txtandnumber mb-1"
                                                                    aria-hidden="true"
                                                                    style="background-color: #d73f0f;color:#ffffff">Sale
                                                                    <span class="product-tag-sale-number-item"> -%
                                                                    </span></div>
                                                            </div>
                                                            <div
                                                                class="product-card__overlay d-flex justify-content-center flex-column">
                                                                <span data-tooltip="true" data-placement="left"
                                                                    class="btn btn-theme gradient-theme-vertical product-card__overlay-btn js-btn-quickview"
                                                                    title="Quickshop" data-toggle="modal"
                                                                    data-target="#jsQuickview"
                                                                    data-handle="restore-youth-lactic-acid-serum"
                                                                    data-pavailable="true"
                                                                    data-viewjdmg="<span class='jdgm-preview-badge' data-id='9748992491833'></span>">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M11.9844 5.57178C8.50513 5.57178 4.93608 7.58553 2.12638 11.613C2.04618 11.7293 2.00223 11.8666 2.00008 12.0078C1.99794 12.149 2.03769 12.2877 2.11432 12.4063C4.27316 15.7856 7.79444 18.4284 11.9844 18.4284C16.1289 18.4284 19.7225 15.7776 21.8854 12.3907C21.9602 12.2744 22 12.139 22 12.0007C22 11.8624 21.9602 11.7271 21.8854 11.6108C19.7176 8.26273 16.0977 5.57178 11.9844 5.57178Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M12.0029 15.5713C13.9753 15.5713 15.5742 13.9723 15.5742 12C15.5742 10.0276 13.9753 8.42871 12.0029 8.42871C10.0306 8.42871 8.43164 10.0276 8.43164 12C8.43164 13.9723 10.0306 15.5713 12.0029 15.5713Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-miterlimit="10" />
                                                                    </svg>
                                                                    <span>Quickshop</span><span class=" txt-short hide">
                                                                        Revitalize your skin with our Restore Youth
                                                                        Lactic Acid Serum. This powerful...
                                                                    </span></span></div>
                                                            <div class="product-card-cart">
                                                                <span class="btn btn-theme js-grid-cart w-100 "
                                                                    title="Add to Cart" data-id="50450911592761">
                                                                    <div class="product-card__loading spinner-border"
                                                                        role="status"></div>
                                                                    <span>

                                                                        Add to Cart

                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__info text-left">

                                                            <a class="mb-1 product-card__type d-inline-block"
                                                                href="collections/vendors6949.html?filter.p.vendor=La%20Flawless&amp;q=La%20Flawless">La
                                                                Flawless</a>
                                                            <a href="products/restore-youth-lactic-acid-serum.html"
                                                                title="Restore Youth Lactic acid Serum"
                                                                class=" d-block product-card__name ">Restore Youth
                                                                Lactic acid Serum</a>


                                                            <div style=''
                                                                class='jdgm-widget jdgm-preview-badge  py-1 small'
                                                                data-id='9748992491833' data-auto-install="false">

                                                            </div>

                                                            <div class="product-card__price "><span
                                                                    class="visually-hidden">Regular price</span>
                                                                $30.00
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="producttab-item  col " data-scroll data-scroll-speed="1">
                                                <div class="h-100" data-aos="fade-up" data-aos-delay="300">


                                                    <div class="product-card js-product-card product-card--style1 product-card--style9 info-false"
                                                        data-price="3000" id="product-item-9748992721209">
                                                        <div class="product-card__image-wr">
                                                            <a class="product-card__image js image-content__image-wrapper auto"
                                                                href="products/restore-youth-glycolic-acid.html"
                                                                style="padding-top:100.0%;"
                                                                data-image-id="42133682225465">
                                                                <img srcset="//la-flawless.com/cdn/shop/files/RestoreYouthGlycolicAcid.jpg?v=1737386181&width=165 165w,//la-flawless.com/cdn/shop/files/RestoreYouthGlycolicAcid.jpg?v=1737386181&width=360 360w,//la-flawless.com/cdn/shop/files/RestoreYouthGlycolicAcid.jpg?v=1737386181&width=533 533w,//la-flawless.com/cdn/shop/files/RestoreYouthGlycolicAcid.jpg?v=1737386181&width=720 720w,//la-flawless.com/cdn/shop/files/RestoreYouthGlycolicAcid.jpg?v=1737386181&width=940 940w,//la-flawless.com/cdn/shop/files/RestoreYouthGlycolicAcid.jpg?v=1737386181&width=1066 1066w,//la-flawless.com/cdn/shop/files/RestoreYouthGlycolicAcid.jpg?v=1737386181 1200w
                " src="cdn/shop/files/RestoreYouthGlycolicAcid36d5.jpg?v=1737386181&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Restore Youth Glycolic Acid"
                                                                    class="lazyload scale-in first-image  hover__hide-image "
                                                                    data-sizes="auto" data-aspectratio="1.0"
                                                                    loading="lazy" width="1200" height="1200">

                                                                <img srcset="//la-flawless.com/cdn/shop/files/IMG_8319.jpg?v=1738365806&width=165 165w,//la-flawless.com/cdn/shop/files/IMG_8319.jpg?v=1738365806&width=360 360w,//la-flawless.com/cdn/shop/files/IMG_8319.jpg?v=1738365806&width=533 533w,//la-flawless.com/cdn/shop/files/IMG_8319.jpg?v=1738365806&width=720 720w,//la-flawless.com/cdn/shop/files/IMG_8319.jpg?v=1738365806&width=940 940w,//la-flawless.com/cdn/shop/files/IMG_8319.jpg?v=1738365806&width=1066 1066w,//la-flawless.com/cdn/shop/files/IMG_8319.jpg?v=1738365806 5575w
     " src="cdn/shop/files/IMG_831942cb.jpg?v=1738365806&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Restore Youth Glycolic Acid"
                                                                    class="lazyload transition second-image"
                                                                    data-sizes="auto"
                                                                    data-aspectratio="1.5668915120854412" loading="lazy"
                                                                    width="5575" height="3558">
                                                            </a>
                                                            <div class="product-label rectangular_label ">

                                                                <div class=" hide product-tag product-tag-sale-item product-tag--absolute  txtandnumber mb-1"
                                                                    aria-hidden="true"
                                                                    style="background-color: #d73f0f;color:#ffffff">Sale
                                                                    <span class="product-tag-sale-number-item"> -%
                                                                    </span></div>
                                                            </div>
                                                            <div
                                                                class="product-card__overlay d-flex justify-content-center flex-column">
                                                                <span data-tooltip="true" data-placement="left"
                                                                    class="btn btn-theme gradient-theme-vertical product-card__overlay-btn js-btn-quickview"
                                                                    title="Quickshop" data-toggle="modal"
                                                                    data-target="#jsQuickview"
                                                                    data-handle="restore-youth-glycolic-acid"
                                                                    data-pavailable="true"
                                                                    data-viewjdmg="<span class='jdgm-preview-badge' data-id='9748992721209'></span>">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M11.9844 5.57178C8.50513 5.57178 4.93608 7.58553 2.12638 11.613C2.04618 11.7293 2.00223 11.8666 2.00008 12.0078C1.99794 12.149 2.03769 12.2877 2.11432 12.4063C4.27316 15.7856 7.79444 18.4284 11.9844 18.4284C16.1289 18.4284 19.7225 15.7776 21.8854 12.3907C21.9602 12.2744 22 12.139 22 12.0007C22 11.8624 21.9602 11.7271 21.8854 11.6108C19.7176 8.26273 16.0977 5.57178 11.9844 5.57178Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M12.0029 15.5713C13.9753 15.5713 15.5742 13.9723 15.5742 12C15.5742 10.0276 13.9753 8.42871 12.0029 8.42871C10.0306 8.42871 8.43164 10.0276 8.43164 12C8.43164 13.9723 10.0306 15.5713 12.0029 15.5713Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-miterlimit="10" />
                                                                    </svg>
                                                                    <span>Quickshop</span><span class=" txt-short hide">
                                                                        This luxurious serum, enriched with Glycolic
                                                                        Acid, revitalizes and renews skin for...
                                                                    </span></span></div>
                                                            <div class="product-card-cart">
                                                                <span class="btn btn-theme js-grid-cart w-100 "
                                                                    title="Add to Cart" data-id="50447195046201">
                                                                    <div class="product-card__loading spinner-border"
                                                                        role="status"></div>
                                                                    <span>

                                                                        Add to Cart

                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__info text-left">

                                                            <a class="mb-1 product-card__type d-inline-block"
                                                                href="collections/vendors6949.html?filter.p.vendor=La%20Flawless&amp;q=La%20Flawless">La
                                                                Flawless</a>
                                                            <a href="products/restore-youth-glycolic-acid.html"
                                                                title="Restore Youth Glycolic Acid"
                                                                class=" d-block product-card__name ">Restore Youth
                                                                Glycolic Acid</a>


                                                            <div style=''
                                                                class='jdgm-widget jdgm-preview-badge  py-1 small'
                                                                data-id='9748992721209' data-auto-install="false">

                                                            </div>

                                                            <div class="product-card__price "><span
                                                                    class="visually-hidden">Regular price</span>
                                                                $30.00
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="producttab-item  col " data-scroll data-scroll-speed="1">
                                                <div class="h-100" data-aos="fade-up" data-aos-delay="400">


                                                    <div class="product-card js-product-card product-card--style1 product-card--style9 info-false"
                                                        data-price="3000" id="product-item-9748992360761">
                                                        <div class="product-card__image-wr">
                                                            <a class="product-card__image js image-content__image-wrapper auto"
                                                                href="products/restore-youth-hyaluronic-acid.html"
                                                                style="padding-top:100.0%;"
                                                                data-image-id="42133683274041">
                                                                <img srcset="//la-flawless.com/cdn/shop/files/RestoreYouthHyaluronicAcid.jpg?v=1737386192&width=165 165w,//la-flawless.com/cdn/shop/files/RestoreYouthHyaluronicAcid.jpg?v=1737386192&width=360 360w,//la-flawless.com/cdn/shop/files/RestoreYouthHyaluronicAcid.jpg?v=1737386192&width=533 533w,//la-flawless.com/cdn/shop/files/RestoreYouthHyaluronicAcid.jpg?v=1737386192&width=720 720w,//la-flawless.com/cdn/shop/files/RestoreYouthHyaluronicAcid.jpg?v=1737386192&width=940 940w,//la-flawless.com/cdn/shop/files/RestoreYouthHyaluronicAcid.jpg?v=1737386192&width=1066 1066w,//la-flawless.com/cdn/shop/files/RestoreYouthHyaluronicAcid.jpg?v=1737386192 1200w
                " src="cdn/shop/files/RestoreYouthHyaluronicAcid97ab.jpg?v=1737386192&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Restore Youth Hyaluronic Acid"
                                                                    class="lazyload scale-in first-image  hover__hide-image "
                                                                    data-sizes="auto" data-aspectratio="1.0"
                                                                    loading="lazy" width="1200" height="1200">

                                                                <img srcset="//la-flawless.com/cdn/shop/files/IMG_8366.jpg?v=1738365826&width=165 165w,//la-flawless.com/cdn/shop/files/IMG_8366.jpg?v=1738365826&width=360 360w,//la-flawless.com/cdn/shop/files/IMG_8366.jpg?v=1738365826&width=533 533w,//la-flawless.com/cdn/shop/files/IMG_8366.jpg?v=1738365826&width=720 720w,//la-flawless.com/cdn/shop/files/IMG_8366.jpg?v=1738365826&width=940 940w,//la-flawless.com/cdn/shop/files/IMG_8366.jpg?v=1738365826&width=1066 1066w,//la-flawless.com/cdn/shop/files/IMG_8366.jpg?v=1738365826 4160w
     " src="cdn/shop/files/IMG_83665946.jpg?v=1738365826&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Restore Youth Hyaluronic Acid"
                                                                    class="lazyload transition second-image"
                                                                    data-sizes="auto"
                                                                    data-aspectratio="0.6666666666666666" loading="lazy"
                                                                    width="4160" height="6240">
                                                            </a>
                                                            <div class="product-label rectangular_label ">

                                                                <div class=" hide product-tag product-tag-sale-item product-tag--absolute  txtandnumber mb-1"
                                                                    aria-hidden="true"
                                                                    style="background-color: #d73f0f;color:#ffffff">Sale
                                                                    <span class="product-tag-sale-number-item"> -%
                                                                    </span></div>
                                                            </div>
                                                            <div
                                                                class="product-card__overlay d-flex justify-content-center flex-column">
                                                                <span data-tooltip="true" data-placement="left"
                                                                    class="btn btn-theme gradient-theme-vertical product-card__overlay-btn js-btn-quickview"
                                                                    title="Quickshop" data-toggle="modal"
                                                                    data-target="#jsQuickview"
                                                                    data-handle="restore-youth-hyaluronic-acid"
                                                                    data-pavailable="true"
                                                                    data-viewjdmg="<span class='jdgm-preview-badge' data-id='9748992360761'></span>">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M11.9844 5.57178C8.50513 5.57178 4.93608 7.58553 2.12638 11.613C2.04618 11.7293 2.00223 11.8666 2.00008 12.0078C1.99794 12.149 2.03769 12.2877 2.11432 12.4063C4.27316 15.7856 7.79444 18.4284 11.9844 18.4284C16.1289 18.4284 19.7225 15.7776 21.8854 12.3907C21.9602 12.2744 22 12.139 22 12.0007C22 11.8624 21.9602 11.7271 21.8854 11.6108C19.7176 8.26273 16.0977 5.57178 11.9844 5.57178Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M12.0029 15.5713C13.9753 15.5713 15.5742 13.9723 15.5742 12C15.5742 10.0276 13.9753 8.42871 12.0029 8.42871C10.0306 8.42871 8.43164 10.0276 8.43164 12C8.43164 13.9723 10.0306 15.5713 12.0029 15.5713Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-miterlimit="10" />
                                                                    </svg>
                                                                    <span>Quickshop</span><span class=" txt-short hide">
                                                                        Nourish and revitalize your skin with Restore
                                                                        Youth Hyaluronic Acid serum. This...
                                                                    </span></span></div>
                                                            <div class="product-card-cart">
                                                                <span class="btn btn-theme js-grid-cart w-100 "
                                                                    title="Add to Cart" data-id="50450915524921">
                                                                    <div class="product-card__loading spinner-border"
                                                                        role="status"></div>
                                                                    <span>

                                                                        Add to Cart

                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__info text-left">

                                                            <a class="mb-1 product-card__type d-inline-block"
                                                                href="collections/vendors6949.html?filter.p.vendor=La%20Flawless&amp;q=La%20Flawless">La
                                                                Flawless</a>
                                                            <a href="products/restore-youth-hyaluronic-acid.html"
                                                                title="Restore Youth Hyaluronic Acid"
                                                                class=" d-block product-card__name ">Restore Youth
                                                                Hyaluronic Acid</a>


                                                            <div style=''
                                                                class='jdgm-widget jdgm-preview-badge  py-1 small'
                                                                data-id='9748992360761' data-auto-install="false">

                                                            </div>

                                                            <div class="product-card__price "><span
                                                                    class="visually-hidden">Regular price</span>
                                                                $30.00
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="producttab-item  col " data-scroll data-scroll-speed="1">
                                                <div class="h-100" data-aos="fade-up" data-aos-delay="500">


                                                    <div class="product-card js-product-card product-card--style1 product-card--style9 info-false"
                                                        data-price="3000" id="product-item-9748991607097">
                                                        <div class="product-card__image-wr">
                                                            <a class="product-card__image js image-content__image-wrapper auto"
                                                                href="products/restore-youth-mandelic-acid.html"
                                                                style="padding-top:100.0%;"
                                                                data-image-id="42133687927097">
                                                                <img srcset="//la-flawless.com/cdn/shop/files/RestoreYouthMandelicAcid.jpg?v=1737386236&width=165 165w,//la-flawless.com/cdn/shop/files/RestoreYouthMandelicAcid.jpg?v=1737386236&width=360 360w,//la-flawless.com/cdn/shop/files/RestoreYouthMandelicAcid.jpg?v=1737386236&width=533 533w,//la-flawless.com/cdn/shop/files/RestoreYouthMandelicAcid.jpg?v=1737386236&width=720 720w,//la-flawless.com/cdn/shop/files/RestoreYouthMandelicAcid.jpg?v=1737386236&width=940 940w,//la-flawless.com/cdn/shop/files/RestoreYouthMandelicAcid.jpg?v=1737386236&width=1066 1066w,//la-flawless.com/cdn/shop/files/RestoreYouthMandelicAcid.jpg?v=1737386236 1200w
                " src="cdn/shop/files/RestoreYouthMandelicAcid59d3.jpg?v=1737386236&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Restore Youth Mandelic Acid"
                                                                    class="lazyload scale-in first-image  hover__hide-image "
                                                                    data-sizes="auto" data-aspectratio="1.0"
                                                                    loading="lazy" width="1200" height="1200">

                                                                <img srcset="//la-flawless.com/cdn/shop/files/IMG_8369_97dbb8b6-3e2c-46d0-a8b2-a5dd821fc69d.jpg?v=1738366070&width=165 165w,//la-flawless.com/cdn/shop/files/IMG_8369_97dbb8b6-3e2c-46d0-a8b2-a5dd821fc69d.jpg?v=1738366070&width=360 360w,//la-flawless.com/cdn/shop/files/IMG_8369_97dbb8b6-3e2c-46d0-a8b2-a5dd821fc69d.jpg?v=1738366070&width=533 533w,//la-flawless.com/cdn/shop/files/IMG_8369_97dbb8b6-3e2c-46d0-a8b2-a5dd821fc69d.jpg?v=1738366070&width=720 720w,//la-flawless.com/cdn/shop/files/IMG_8369_97dbb8b6-3e2c-46d0-a8b2-a5dd821fc69d.jpg?v=1738366070&width=940 940w,//la-flawless.com/cdn/shop/files/IMG_8369_97dbb8b6-3e2c-46d0-a8b2-a5dd821fc69d.jpg?v=1738366070&width=1066 1066w,//la-flawless.com/cdn/shop/files/IMG_8369_97dbb8b6-3e2c-46d0-a8b2-a5dd821fc69d.jpg?v=1738366070 3904w
     " src="cdn/shop/files/IMG_8369_97dbb8b6-3e2c-46d0-a8b2-a5dd821fc69d295c.jpg?v=1738366070&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Restore Youth Mandelic Acid"
                                                                    class="lazyload transition second-image"
                                                                    data-sizes="auto"
                                                                    data-aspectratio="0.7086585587220912" loading="lazy"
                                                                    width="3904" height="5509">
                                                            </a>
                                                            <div class="product-label rectangular_label ">

                                                                <div class=" hide product-tag product-tag-sale-item product-tag--absolute  txtandnumber mb-1"
                                                                    aria-hidden="true"
                                                                    style="background-color: #d73f0f;color:#ffffff">Sale
                                                                    <span class="product-tag-sale-number-item"> -%
                                                                    </span></div>
                                                            </div>
                                                            <div
                                                                class="product-card__overlay d-flex justify-content-center flex-column">
                                                                <span data-tooltip="true" data-placement="left"
                                                                    class="btn btn-theme gradient-theme-vertical product-card__overlay-btn js-btn-quickview"
                                                                    title="Quickshop" data-toggle="modal"
                                                                    data-target="#jsQuickview"
                                                                    data-handle="restore-youth-mandelic-acid"
                                                                    data-pavailable="true"
                                                                    data-viewjdmg="<span class='jdgm-preview-badge' data-id='9748991607097'></span>">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M11.9844 5.57178C8.50513 5.57178 4.93608 7.58553 2.12638 11.613C2.04618 11.7293 2.00223 11.8666 2.00008 12.0078C1.99794 12.149 2.03769 12.2877 2.11432 12.4063C4.27316 15.7856 7.79444 18.4284 11.9844 18.4284C16.1289 18.4284 19.7225 15.7776 21.8854 12.3907C21.9602 12.2744 22 12.139 22 12.0007C22 11.8624 21.9602 11.7271 21.8854 11.6108C19.7176 8.26273 16.0977 5.57178 11.9844 5.57178Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M12.0029 15.5713C13.9753 15.5713 15.5742 13.9723 15.5742 12C15.5742 10.0276 13.9753 8.42871 12.0029 8.42871C10.0306 8.42871 8.43164 10.0276 8.43164 12C8.43164 13.9723 10.0306 15.5713 12.0029 15.5713Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-miterlimit="10" />
                                                                    </svg>
                                                                    <span>Quickshop</span><span class=" txt-short hide">
                                                                        Boost your skin's radiance with Restore Youth
                                                                        Mandelic Acid serum. This powerful...
                                                                    </span></span></div>
                                                            <div class="product-card-cart">
                                                                <span class="btn btn-theme js-grid-cart w-100 "
                                                                    title="Add to Cart" data-id="50450936430905">
                                                                    <div class="product-card__loading spinner-border"
                                                                        role="status"></div>
                                                                    <span>

                                                                        Add to Cart

                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__info text-left">

                                                            <a class="mb-1 product-card__type d-inline-block"
                                                                href="collections/vendors6949.html?filter.p.vendor=La%20Flawless&amp;q=La%20Flawless">La
                                                                Flawless</a>
                                                            <a href="products/restore-youth-mandelic-acid.html"
                                                                title="Restore Youth Mandelic Acid"
                                                                class=" d-block product-card__name ">Restore Youth
                                                                Mandelic Acid</a>


                                                            <div style=''
                                                                class='jdgm-widget jdgm-preview-badge  py-1 small'
                                                                data-id='9748991607097' data-auto-install="false">

                                                            </div>

                                                            <div class="product-card__price "><span
                                                                    class="visually-hidden">Regular price</span>
                                                                $30.00
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="producttab-item  col " data-scroll data-scroll-speed="1">
                                                <div class="h-100" data-aos="fade-up" data-aos-delay="600">


                                                    <div class="product-card js-product-card product-card--style1 product-card--style9 info-false"
                                                        data-price="3000" id="product-item-9748992098617">
                                                        <div class="product-card__image-wr">
                                                            <a class="product-card__image js image-content__image-wrapper auto"
                                                                href="products/restore-youth-retinol-serum.html"
                                                                style="padding-top:100.0%;"
                                                                data-image-id="42133692318009">
                                                                <img srcset="//la-flawless.com/cdn/shop/files/RestoreYouthRetinolSerum.jpg?v=1737386277&width=165 165w,//la-flawless.com/cdn/shop/files/RestoreYouthRetinolSerum.jpg?v=1737386277&width=360 360w,//la-flawless.com/cdn/shop/files/RestoreYouthRetinolSerum.jpg?v=1737386277&width=533 533w,//la-flawless.com/cdn/shop/files/RestoreYouthRetinolSerum.jpg?v=1737386277&width=720 720w,//la-flawless.com/cdn/shop/files/RestoreYouthRetinolSerum.jpg?v=1737386277&width=940 940w,//la-flawless.com/cdn/shop/files/RestoreYouthRetinolSerum.jpg?v=1737386277&width=1066 1066w,//la-flawless.com/cdn/shop/files/RestoreYouthRetinolSerum.jpg?v=1737386277 1200w
                " src="cdn/shop/files/RestoreYouthRetinolSerum043d.jpg?v=1737386277&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Restore Youth Retinol Serum"
                                                                    class="lazyload scale-in first-image  hover__hide-image "
                                                                    data-sizes="auto" data-aspectratio="1.0"
                                                                    loading="lazy" width="1200" height="1200">

                                                                <img srcset="//la-flawless.com/cdn/shop/files/IMG_8368.jpg?v=1738365749&width=165 165w,//la-flawless.com/cdn/shop/files/IMG_8368.jpg?v=1738365749&width=360 360w,//la-flawless.com/cdn/shop/files/IMG_8368.jpg?v=1738365749&width=533 533w,//la-flawless.com/cdn/shop/files/IMG_8368.jpg?v=1738365749&width=720 720w,//la-flawless.com/cdn/shop/files/IMG_8368.jpg?v=1738365749&width=940 940w,//la-flawless.com/cdn/shop/files/IMG_8368.jpg?v=1738365749&width=1066 1066w,//la-flawless.com/cdn/shop/files/IMG_8368.jpg?v=1738365749 4160w
     " src="cdn/shop/files/IMG_83683a37.jpg?v=1738365749&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Restore Youth Retinol Serum"
                                                                    class="lazyload transition second-image"
                                                                    data-sizes="auto"
                                                                    data-aspectratio="0.6838730889363801" loading="lazy"
                                                                    width="4160" height="6083">
                                                            </a>
                                                            <div class="product-label rectangular_label ">

                                                                <div class=" hide product-tag product-tag-sale-item product-tag--absolute  txtandnumber mb-1"
                                                                    aria-hidden="true"
                                                                    style="background-color: #d73f0f;color:#ffffff">Sale
                                                                    <span class="product-tag-sale-number-item"> -%
                                                                    </span></div>
                                                            </div>
                                                            <div
                                                                class="product-card__overlay d-flex justify-content-center flex-column">
                                                                <span data-tooltip="true" data-placement="left"
                                                                    class="btn btn-theme gradient-theme-vertical product-card__overlay-btn js-btn-quickview"
                                                                    title="Quickshop" data-toggle="modal"
                                                                    data-target="#jsQuickview"
                                                                    data-handle="restore-youth-retinol-serum"
                                                                    data-pavailable="true"
                                                                    data-viewjdmg="<span class='jdgm-preview-badge' data-id='9748992098617'></span>">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M11.9844 5.57178C8.50513 5.57178 4.93608 7.58553 2.12638 11.613C2.04618 11.7293 2.00223 11.8666 2.00008 12.0078C1.99794 12.149 2.03769 12.2877 2.11432 12.4063C4.27316 15.7856 7.79444 18.4284 11.9844 18.4284C16.1289 18.4284 19.7225 15.7776 21.8854 12.3907C21.9602 12.2744 22 12.139 22 12.0007C22 11.8624 21.9602 11.7271 21.8854 11.6108C19.7176 8.26273 16.0977 5.57178 11.9844 5.57178Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M12.0029 15.5713C13.9753 15.5713 15.5742 13.9723 15.5742 12C15.5742 10.0276 13.9753 8.42871 12.0029 8.42871C10.0306 8.42871 8.43164 10.0276 8.43164 12C8.43164 13.9723 10.0306 15.5713 12.0029 15.5713Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-miterlimit="10" />
                                                                    </svg>
                                                                    <span>Quickshop</span><span class=" txt-short hide">
                                                                        Improve the appearance of fine lines and
                                                                        wrinkles with Restore Youth Retinol...
                                                                    </span></span></div>
                                                            <div class="product-card-cart">
                                                                <span class="btn btn-theme js-grid-cart w-100 "
                                                                    title="Add to Cart" data-id="50450925158713">
                                                                    <div class="product-card__loading spinner-border"
                                                                        role="status"></div>
                                                                    <span>

                                                                        Add to Cart

                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__info text-left">

                                                            <a class="mb-1 product-card__type d-inline-block"
                                                                href="collections/vendors6949.html?filter.p.vendor=La%20Flawless&amp;q=La%20Flawless">La
                                                                Flawless</a>
                                                            <a href="products/restore-youth-retinol-serum.html"
                                                                title="Restore Youth Retinol Serum"
                                                                class=" d-block product-card__name ">Restore Youth
                                                                Retinol Serum</a>


                                                            <div style=''
                                                                class='jdgm-widget jdgm-preview-badge  py-1 small'
                                                                data-id='9748992098617' data-auto-install="false">

                                                            </div>

                                                            <div class="product-card__price "><span
                                                                    class="visually-hidden">Regular price</span>
                                                                $30.00
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="producttab-item  col " data-scroll data-scroll-speed="1">
                                                <div class="h-100" data-aos="fade-up" data-aos-delay="700">


                                                    <div class="product-card js-product-card product-card--style1 product-card--style9 info-false"
                                                        data-price="3000" id="product-item-9748992000313">
                                                        <div class="product-card__image-wr">
                                                            <a class="product-card__image js image-content__image-wrapper auto"
                                                                href="products/restore-youth-tranexamic-acid.html"
                                                                style="padding-top:100.0%;"
                                                                data-image-id="42133693628729">
                                                                <img srcset="//la-flawless.com/cdn/shop/files/RestoreYouthTranexamicAcid.jpg?v=1737386290&width=165 165w,//la-flawless.com/cdn/shop/files/RestoreYouthTranexamicAcid.jpg?v=1737386290&width=360 360w,//la-flawless.com/cdn/shop/files/RestoreYouthTranexamicAcid.jpg?v=1737386290&width=533 533w,//la-flawless.com/cdn/shop/files/RestoreYouthTranexamicAcid.jpg?v=1737386290&width=720 720w,//la-flawless.com/cdn/shop/files/RestoreYouthTranexamicAcid.jpg?v=1737386290&width=940 940w,//la-flawless.com/cdn/shop/files/RestoreYouthTranexamicAcid.jpg?v=1737386290&width=1066 1066w,//la-flawless.com/cdn/shop/files/RestoreYouthTranexamicAcid.jpg?v=1737386290 1200w
                " src="cdn/shop/files/RestoreYouthTranexamicAcid67f9.jpg?v=1737386290&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Restore Youth Tranexamic Acid"
                                                                    class="lazyload scale-in first-image  hover__hide-image "
                                                                    data-sizes="auto" data-aspectratio="1.0"
                                                                    loading="lazy" width="1200" height="1200">

                                                                <img srcset="//la-flawless.com/cdn/shop/files/IMG_4413.jpg?v=1738365609&width=165 165w,//la-flawless.com/cdn/shop/files/IMG_4413.jpg?v=1738365609&width=360 360w,//la-flawless.com/cdn/shop/files/IMG_4413.jpg?v=1738365609&width=533 533w,//la-flawless.com/cdn/shop/files/IMG_4413.jpg?v=1738365609&width=720 720w,//la-flawless.com/cdn/shop/files/IMG_4413.jpg?v=1738365609&width=940 940w,//la-flawless.com/cdn/shop/files/IMG_4413.jpg?v=1738365609&width=1066 1066w,//la-flawless.com/cdn/shop/files/IMG_4413.jpg?v=1738365609 4572w
     " src="cdn/shop/files/IMG_4413ca58.jpg?v=1738365609&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Restore Youth Tranexamic Acid"
                                                                    class="lazyload transition second-image"
                                                                    data-sizes="auto"
                                                                    data-aspectratio="1.4137291280148423" loading="lazy"
                                                                    width="4572" height="3234">
                                                            </a>
                                                            <div class="product-label rectangular_label ">

                                                                <div class=" hide product-tag product-tag-sale-item product-tag--absolute  txtandnumber mb-1"
                                                                    aria-hidden="true"
                                                                    style="background-color: #d73f0f;color:#ffffff">Sale
                                                                    <span class="product-tag-sale-number-item"> -%
                                                                    </span></div>
                                                            </div>
                                                            <div
                                                                class="product-card__overlay d-flex justify-content-center flex-column">
                                                                <span data-tooltip="true" data-placement="left"
                                                                    class="btn btn-theme gradient-theme-vertical product-card__overlay-btn js-btn-quickview"
                                                                    title="Quickshop" data-toggle="modal"
                                                                    data-target="#jsQuickview"
                                                                    data-handle="restore-youth-tranexamic-acid"
                                                                    data-pavailable="true"
                                                                    data-viewjdmg="<span class='jdgm-preview-badge' data-id='9748992000313'></span>">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M11.9844 5.57178C8.50513 5.57178 4.93608 7.58553 2.12638 11.613C2.04618 11.7293 2.00223 11.8666 2.00008 12.0078C1.99794 12.149 2.03769 12.2877 2.11432 12.4063C4.27316 15.7856 7.79444 18.4284 11.9844 18.4284C16.1289 18.4284 19.7225 15.7776 21.8854 12.3907C21.9602 12.2744 22 12.139 22 12.0007C22 11.8624 21.9602 11.7271 21.8854 11.6108C19.7176 8.26273 16.0977 5.57178 11.9844 5.57178Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M12.0029 15.5713C13.9753 15.5713 15.5742 13.9723 15.5742 12C15.5742 10.0276 13.9753 8.42871 12.0029 8.42871C10.0306 8.42871 8.43164 10.0276 8.43164 12C8.43164 13.9723 10.0306 15.5713 12.0029 15.5713Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-miterlimit="10" />
                                                                    </svg>
                                                                    <span>Quickshop</span><span class=" txt-short hide">
                                                                        Restore Youth Tranexamic Acid is a powerful oil
                                                                        serum containing Tranexamic Acid,...
                                                                    </span></span></div>
                                                            <div class="product-card-cart">
                                                                <span class="btn btn-theme js-grid-cart w-100 "
                                                                    title="Add to Cart" data-id="50450926567737">
                                                                    <div class="product-card__loading spinner-border"
                                                                        role="status"></div>
                                                                    <span>

                                                                        Add to Cart

                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__info text-left">

                                                            <a class="mb-1 product-card__type d-inline-block"
                                                                href="collections/vendors6949.html?filter.p.vendor=La%20Flawless&amp;q=La%20Flawless">La
                                                                Flawless</a>
                                                            <a href="products/restore-youth-tranexamic-acid.html"
                                                                title="Restore Youth Tranexamic Acid"
                                                                class=" d-block product-card__name ">Restore Youth
                                                                Tranexamic Acid</a>


                                                            <div style=''
                                                                class='jdgm-widget jdgm-preview-badge  py-1 small'
                                                                data-id='9748992000313' data-auto-install="false">

                                                            </div>

                                                            <div class="product-card__price "><span
                                                                    class="visually-hidden">Regular price</span>
                                                                $30.00
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade "
                                        id="prdtab-template--21581222871313__c92b6d28-25d1-477b-920a-d657bf443761-collection-2"
                                        role="tabpanel"
                                        aria-labelledby="template--21581222871313__c92b6d28-25d1-477b-920a-d657bf443761-collection-2-tab">
                                        <div class="prdtab-content row " style="opacity:0">
                                            <div class="producttab-item  col " data-scroll data-scroll-speed="1">
                                                <div class="h-100" data-aos="fade-up" data-aos-delay="100">


                                                    <div class="product-card js-product-card product-card--style1 product-card--style9 info-false"
                                                        data-price="2500" id="product-item-9748987347257">
                                                        <div class="product-card__image-wr">
                                                            <a class="product-card__image js image-content__image-wrapper auto"
                                                                href="products/lactic-acid-activating-moisturizer.html"
                                                                style="padding-top:100.0%;"
                                                                data-image-id="42133673443641">
                                                                <img srcset="//la-flawless.com/cdn/shop/files/LacticAcidActivatingMoisturizer.jpg?v=1737386077&width=165 165w,//la-flawless.com/cdn/shop/files/LacticAcidActivatingMoisturizer.jpg?v=1737386077&width=360 360w,//la-flawless.com/cdn/shop/files/LacticAcidActivatingMoisturizer.jpg?v=1737386077&width=533 533w,//la-flawless.com/cdn/shop/files/LacticAcidActivatingMoisturizer.jpg?v=1737386077&width=720 720w,//la-flawless.com/cdn/shop/files/LacticAcidActivatingMoisturizer.jpg?v=1737386077&width=940 940w,//la-flawless.com/cdn/shop/files/LacticAcidActivatingMoisturizer.jpg?v=1737386077&width=1066 1066w,//la-flawless.com/cdn/shop/files/LacticAcidActivatingMoisturizer.jpg?v=1737386077 1200w
                " src="cdn/shop/files/LacticAcidActivatingMoisturizer96a1.jpg?v=1737386077&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Lactic Acid Activating Moisturizer"
                                                                    class="lazyload scale-in first-image  hover__hide-image "
                                                                    data-sizes="auto" data-aspectratio="1.0"
                                                                    loading="lazy" width="1200" height="1200">

                                                                <img srcset="//la-flawless.com/cdn/shop/files/IMG_6918.jpg?v=1738364671&width=165 165w,//la-flawless.com/cdn/shop/files/IMG_6918.jpg?v=1738364671&width=360 360w,//la-flawless.com/cdn/shop/files/IMG_6918.jpg?v=1738364671&width=533 533w,//la-flawless.com/cdn/shop/files/IMG_6918.jpg?v=1738364671&width=720 720w,//la-flawless.com/cdn/shop/files/IMG_6918.jpg?v=1738364671&width=940 940w,//la-flawless.com/cdn/shop/files/IMG_6918.jpg?v=1738364671&width=1066 1066w,//la-flawless.com/cdn/shop/files/IMG_6918.jpg?v=1738364671 5899w
     " src="cdn/shop/files/IMG_69188086.jpg?v=1738364671&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Lactic Acid Activating Moisturizer"
                                                                    class="lazyload transition second-image"
                                                                    data-sizes="auto"
                                                                    data-aspectratio="1.4468972283541819" loading="lazy"
                                                                    width="5899" height="4077">
                                                            </a>
                                                            <div class="product-label rectangular_label ">

                                                                <div class=" hide product-tag product-tag-sale-item product-tag--absolute  txtandnumber mb-1"
                                                                    aria-hidden="true"
                                                                    style="background-color: #d73f0f;color:#ffffff">Sale
                                                                    <span class="product-tag-sale-number-item"> -%
                                                                    </span></div>
                                                            </div>
                                                            <div
                                                                class="product-card__overlay d-flex justify-content-center flex-column">
                                                                <span data-tooltip="true" data-placement="left"
                                                                    class="btn btn-theme gradient-theme-vertical product-card__overlay-btn js-btn-quickview"
                                                                    title="Quickshop" data-toggle="modal"
                                                                    data-target="#jsQuickview"
                                                                    data-handle="lactic-acid-activating-moisturizer"
                                                                    data-pavailable="true"
                                                                    data-viewjdmg="<span class='jdgm-preview-badge' data-id='9748987347257'></span>">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M11.9844 5.57178C8.50513 5.57178 4.93608 7.58553 2.12638 11.613C2.04618 11.7293 2.00223 11.8666 2.00008 12.0078C1.99794 12.149 2.03769 12.2877 2.11432 12.4063C4.27316 15.7856 7.79444 18.4284 11.9844 18.4284C16.1289 18.4284 19.7225 15.7776 21.8854 12.3907C21.9602 12.2744 22 12.139 22 12.0007C22 11.8624 21.9602 11.7271 21.8854 11.6108C19.7176 8.26273 16.0977 5.57178 11.9844 5.57178Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M12.0029 15.5713C13.9753 15.5713 15.5742 13.9723 15.5742 12C15.5742 10.0276 13.9753 8.42871 12.0029 8.42871C10.0306 8.42871 8.43164 10.0276 8.43164 12C8.43164 13.9723 10.0306 15.5713 12.0029 15.5713Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-miterlimit="10" />
                                                                    </svg>
                                                                    <span>Quickshop</span><span class=" txt-short hide">
                                                                        Lactic Acid Skin Reverse Activating Moisturizer
                                                                        gently exfoliates and hydrates, revealing a...
                                                                    </span></span></div>
                                                            <div class="product-card-cart">
                                                                <span class="btn btn-theme js-grid-cart w-100 "
                                                                    title="Add to Cart" data-id="50450938593593">
                                                                    <div class="product-card__loading spinner-border"
                                                                        role="status"></div>
                                                                    <span>

                                                                        Add to Cart

                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__info text-left">

                                                            <a class="mb-1 product-card__type d-inline-block"
                                                                href="collections/vendors6949.html?filter.p.vendor=La%20Flawless&amp;q=La%20Flawless">La
                                                                Flawless</a>
                                                            <a href="products/lactic-acid-activating-moisturizer.html"
                                                                title="Lactic Acid Activating Moisturizer"
                                                                class=" d-block product-card__name ">Lactic Acid
                                                                Activating Moisturizer</a>


                                                            <div style=''
                                                                class='jdgm-widget jdgm-preview-badge  py-1 small'
                                                                data-id='9748987347257' data-auto-install="false">

                                                            </div>

                                                            <div class="product-card__price "><span
                                                                    class="visually-hidden">Regular price</span>
                                                                $25.00
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="producttab-item  col " data-scroll data-scroll-speed="1">
                                                <div class="h-100" data-aos="fade-up" data-aos-delay="200">


                                                    <div class="product-card js-product-card product-card--style1 product-card--style9 info-false"
                                                        data-price="3999" id="product-item-9836197413177">
                                                        <div class="product-card__image-wr">
                                                            <a class="product-card__image js image-content__image-wrapper auto"
                                                                href="products/korean-skin-boosting-supreme-moisturizer-new.html"
                                                                style="padding-top:100.0%;"
                                                                data-image-id="42133672395065">
                                                                <img srcset="//la-flawless.com/cdn/shop/files/KoreanSkinBoostingSupremeMoisturizer.jpg?v=1737386062&width=165 165w,//la-flawless.com/cdn/shop/files/KoreanSkinBoostingSupremeMoisturizer.jpg?v=1737386062&width=360 360w,//la-flawless.com/cdn/shop/files/KoreanSkinBoostingSupremeMoisturizer.jpg?v=1737386062&width=533 533w,//la-flawless.com/cdn/shop/files/KoreanSkinBoostingSupremeMoisturizer.jpg?v=1737386062&width=720 720w,//la-flawless.com/cdn/shop/files/KoreanSkinBoostingSupremeMoisturizer.jpg?v=1737386062&width=940 940w,//la-flawless.com/cdn/shop/files/KoreanSkinBoostingSupremeMoisturizer.jpg?v=1737386062&width=1066 1066w,//la-flawless.com/cdn/shop/files/KoreanSkinBoostingSupremeMoisturizer.jpg?v=1737386062 1200w
                " src="cdn/shop/files/KoreanSkinBoostingSupremeMoisturizerccca.jpg?v=1737386062&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Korean Skin Boosting Supreme Moisturizer"
                                                                    class="lazyload scale-in first-image  hover__hide-image "
                                                                    data-sizes="auto" data-aspectratio="1.0"
                                                                    loading="lazy" width="1200" height="1200">

                                                                <img srcset="//la-flawless.com/cdn/shop/files/IMG_4586.jpg?v=1737386062&width=165 165w,//la-flawless.com/cdn/shop/files/IMG_4586.jpg?v=1737386062&width=360 360w,//la-flawless.com/cdn/shop/files/IMG_4586.jpg?v=1737386062&width=533 533w,//la-flawless.com/cdn/shop/files/IMG_4586.jpg?v=1737386062&width=720 720w,//la-flawless.com/cdn/shop/files/IMG_4586.jpg?v=1737386062&width=940 940w,//la-flawless.com/cdn/shop/files/IMG_4586.jpg?v=1737386062&width=1066 1066w,//la-flawless.com/cdn/shop/files/IMG_4586.jpg?v=1737386062 3743w
     " src="cdn/shop/files/IMG_4586ccca.jpg?v=1737386062&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Korean Skin Boosting Supreme Moisturizer"
                                                                    class="lazyload transition second-image"
                                                                    data-sizes="auto"
                                                                    data-aspectratio="0.7819093377898475" loading="lazy"
                                                                    width="3743" height="4787">
                                                            </a>
                                                            <div class="product-label rectangular_label ">

                                                                <div class=" d-inline-block  product-tag product-tag-sale-item product-tag--absolute  txtandnumber mb-1"
                                                                    aria-hidden="true"
                                                                    style="background-color: #d73f0f;color:#ffffff">Sale
                                                                    <span class="product-tag-sale-number-item"> -33%
                                                                    </span></div>
                                                            </div>
                                                            <div
                                                                class="product-card__overlay d-flex justify-content-center flex-column">
                                                                <span data-tooltip="true" data-placement="left"
                                                                    class="btn btn-theme gradient-theme-vertical product-card__overlay-btn js-btn-quickview"
                                                                    title="Quickshop" data-toggle="modal"
                                                                    data-target="#jsQuickview"
                                                                    data-handle="korean-skin-boosting-supreme-moisturizer-new"
                                                                    data-pavailable="true"
                                                                    data-viewjdmg="<span class='jdgm-preview-badge' data-id='9836197413177'></span>">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M11.9844 5.57178C8.50513 5.57178 4.93608 7.58553 2.12638 11.613C2.04618 11.7293 2.00223 11.8666 2.00008 12.0078C1.99794 12.149 2.03769 12.2877 2.11432 12.4063C4.27316 15.7856 7.79444 18.4284 11.9844 18.4284C16.1289 18.4284 19.7225 15.7776 21.8854 12.3907C21.9602 12.2744 22 12.139 22 12.0007C22 11.8624 21.9602 11.7271 21.8854 11.6108C19.7176 8.26273 16.0977 5.57178 11.9844 5.57178Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M12.0029 15.5713C13.9753 15.5713 15.5742 13.9723 15.5742 12C15.5742 10.0276 13.9753 8.42871 12.0029 8.42871C10.0306 8.42871 8.43164 10.0276 8.43164 12C8.43164 13.9723 10.0306 15.5713 12.0029 15.5713Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-miterlimit="10" />
                                                                    </svg>
                                                                    <span>Quickshop</span><span class=" txt-short hide">
                                                                        Skin Boosting Supreme Moisturizer, featuring
                                                                        acetyl zingerone and sodium hyaluronate, deeply
                                                                        hydrates...
                                                                    </span></span></div>
                                                            <div class="product-card-cart">
                                                                <span class="btn btn-theme js-grid-cart w-100 "
                                                                    title="Add to Cart" data-id="50625391722809">
                                                                    <div class="product-card__loading spinner-border"
                                                                        role="status"></div>
                                                                    <span>

                                                                        Add to Cart

                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__info text-left">

                                                            <a class="mb-1 product-card__type d-inline-block"
                                                                href="collections/vendors6949.html?filter.p.vendor=La%20Flawless&amp;q=La%20Flawless">La
                                                                Flawless</a>
                                                            <a href="products/korean-skin-boosting-supreme-moisturizer-new.html"
                                                                title="Korean Skin Boosting Supreme Moisturizer"
                                                                class=" d-block product-card__name ">Korean Skin
                                                                Boosting Supreme Moisturizer</a>


                                                            <div style=''
                                                                class='jdgm-widget jdgm-preview-badge  py-1 small'
                                                                data-id='9836197413177' data-auto-install="false">

                                                            </div>

                                                            <div class="product-card__price  product-card__pricesale ">
                                                                <span class="visually-hidden">Regular price</span>
                                                                $39.99
                                                                <s class="product-card__regular-price">$59.99</s>
                                                                <span class="visually-hidden">Sale price</span>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="producttab-item  col " data-scroll data-scroll-speed="1">
                                                <div class="h-100" data-aos="fade-up" data-aos-delay="300">


                                                    <div class="product-card js-product-card product-card--style1 product-card--style9 info-false"
                                                        data-price="2500" id="product-item-9748986593593">
                                                        <div class="product-card__image-wr">
                                                            <a class="product-card__image js image-content__image-wrapper auto"
                                                                href="products/green-tea-oil-free-hydrating-moisturizer.html"
                                                                style="padding-top:100.0%;"
                                                                data-image-id="42133646180665">
                                                                <img srcset="//la-flawless.com/cdn/shop/files/GreenTeaOil-freeHydratingMoisturizer.jpg?v=1737385745&width=165 165w,//la-flawless.com/cdn/shop/files/GreenTeaOil-freeHydratingMoisturizer.jpg?v=1737385745&width=360 360w,//la-flawless.com/cdn/shop/files/GreenTeaOil-freeHydratingMoisturizer.jpg?v=1737385745&width=533 533w,//la-flawless.com/cdn/shop/files/GreenTeaOil-freeHydratingMoisturizer.jpg?v=1737385745&width=720 720w,//la-flawless.com/cdn/shop/files/GreenTeaOil-freeHydratingMoisturizer.jpg?v=1737385745&width=940 940w,//la-flawless.com/cdn/shop/files/GreenTeaOil-freeHydratingMoisturizer.jpg?v=1737385745&width=1066 1066w,//la-flawless.com/cdn/shop/files/GreenTeaOil-freeHydratingMoisturizer.jpg?v=1737385745 1200w
                " src="cdn/shop/files/GreenTeaOil-freeHydratingMoisturizer76ec.jpg?v=1737385745&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Green Tea Oil-free Hydrating Moisturizer"
                                                                    class="lazyload scale-in first-image  hover__hide-image "
                                                                    data-sizes="auto" data-aspectratio="1.0"
                                                                    loading="lazy" width="1200" height="1200">

                                                                <img srcset="//la-flawless.com/cdn/shop/files/IMG_6912.jpg?v=1741316444&width=165 165w,//la-flawless.com/cdn/shop/files/IMG_6912.jpg?v=1741316444&width=360 360w,//la-flawless.com/cdn/shop/files/IMG_6912.jpg?v=1741316444&width=533 533w,//la-flawless.com/cdn/shop/files/IMG_6912.jpg?v=1741316444&width=720 720w,//la-flawless.com/cdn/shop/files/IMG_6912.jpg?v=1741316444&width=940 940w,//la-flawless.com/cdn/shop/files/IMG_6912.jpg?v=1741316444&width=1066 1066w,//la-flawless.com/cdn/shop/files/IMG_6912.jpg?v=1741316444 3871w
     " src="cdn/shop/files/IMG_6912713d.jpg?v=1741316444&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Green Tea Oil-free Hydrating Moisturizer"
                                                                    class="lazyload transition second-image"
                                                                    data-sizes="auto"
                                                                    data-aspectratio="0.6967242620590353" loading="lazy"
                                                                    width="3871" height="5556">
                                                            </a>
                                                            <div class="product-label rectangular_label ">

                                                                <div class=" hide product-tag product-tag-sale-item product-tag--absolute  txtandnumber mb-1"
                                                                    aria-hidden="true"
                                                                    style="background-color: #d73f0f;color:#ffffff">Sale
                                                                    <span class="product-tag-sale-number-item"> -%
                                                                    </span></div>
                                                            </div>
                                                            <div
                                                                class="product-card__overlay d-flex justify-content-center flex-column">
                                                                <span data-tooltip="true" data-placement="left"
                                                                    class="btn btn-theme gradient-theme-vertical product-card__overlay-btn js-btn-quickview"
                                                                    title="Quickshop" data-toggle="modal"
                                                                    data-target="#jsQuickview"
                                                                    data-handle="green-tea-oil-free-hydrating-moisturizer"
                                                                    data-pavailable="true"
                                                                    data-viewjdmg="<span class='jdgm-preview-badge' data-id='9748986593593'></span>">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M11.9844 5.57178C8.50513 5.57178 4.93608 7.58553 2.12638 11.613C2.04618 11.7293 2.00223 11.8666 2.00008 12.0078C1.99794 12.149 2.03769 12.2877 2.11432 12.4063C4.27316 15.7856 7.79444 18.4284 11.9844 18.4284C16.1289 18.4284 19.7225 15.7776 21.8854 12.3907C21.9602 12.2744 22 12.139 22 12.0007C22 11.8624 21.9602 11.7271 21.8854 11.6108C19.7176 8.26273 16.0977 5.57178 11.9844 5.57178Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M12.0029 15.5713C13.9753 15.5713 15.5742 13.9723 15.5742 12C15.5742 10.0276 13.9753 8.42871 12.0029 8.42871C10.0306 8.42871 8.43164 10.0276 8.43164 12C8.43164 13.9723 10.0306 15.5713 12.0029 15.5713Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-miterlimit="10" />
                                                                    </svg>
                                                                    <span>Quickshop</span><span class=" txt-short hide">
                                                                        Green Tea Moisturizer is a refreshing blend that
                                                                        hydrates and soothes the...
                                                                    </span></span></div>
                                                            <div class="product-card-cart">
                                                                <span class="btn btn-theme js-grid-cart w-100 "
                                                                    title="Add to Cart" data-id="50450939838777">
                                                                    <div class="product-card__loading spinner-border"
                                                                        role="status"></div>
                                                                    <span>

                                                                        Add to Cart

                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__info text-left">

                                                            <a class="mb-1 product-card__type d-inline-block"
                                                                href="collections/vendors6949.html?filter.p.vendor=La%20Flawless&amp;q=La%20Flawless">La
                                                                Flawless</a>
                                                            <a href="products/green-tea-oil-free-hydrating-moisturizer.html"
                                                                title="Green Tea Oil-free Hydrating Moisturizer"
                                                                class=" d-block product-card__name ">Green Tea Oil-free
                                                                Hydrating Moisturizer</a>


                                                            <div style=''
                                                                class='jdgm-widget jdgm-preview-badge  py-1 small'
                                                                data-id='9748986593593' data-auto-install="false">

                                                            </div>

                                                            <div class="product-card__price "><span
                                                                    class="visually-hidden">Regular price</span>
                                                                $25.00
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade "
                                        id="prdtab-template--21581222871313__c92b6d28-25d1-477b-920a-d657bf443761-collection-3"
                                        role="tabpanel"
                                        aria-labelledby="template--21581222871313__c92b6d28-25d1-477b-920a-d657bf443761-collection-3-tab">
                                        <div class="prdtab-content row " style="opacity:0">
                                            <div class="producttab-item  col " data-scroll data-scroll-speed="1">
                                                <div class="h-100" data-aos="fade-up" data-aos-delay="100">


                                                    <div class="product-card js-product-card product-card--style1 product-card--style9 info-false"
                                                        data-price="2499" id="product-item-9859521872185">
                                                        <div class="product-card__image-wr">
                                                            <a class="product-card__image js image-content__image-wrapper auto"
                                                                href="products/radiant-restore-luxury-face-oil-new.html"
                                                                style="padding-top:131.1289429994466%;"
                                                                data-image-id="42762825236793">
                                                                <img srcset="//la-flawless.com/cdn/shop/files/IMG_8736-Edit.jpg?v=1746214335&width=165 165w,//la-flawless.com/cdn/shop/files/IMG_8736-Edit.jpg?v=1746214335&width=360 360w,//la-flawless.com/cdn/shop/files/IMG_8736-Edit.jpg?v=1746214335&width=533 533w,//la-flawless.com/cdn/shop/files/IMG_8736-Edit.jpg?v=1746214335&width=720 720w,//la-flawless.com/cdn/shop/files/IMG_8736-Edit.jpg?v=1746214335&width=940 940w,//la-flawless.com/cdn/shop/files/IMG_8736-Edit.jpg?v=1746214335&width=1066 1066w,//la-flawless.com/cdn/shop/files/IMG_8736-Edit.jpg?v=1746214335 3614w
                " src="cdn/shop/files/IMG_8736-Edita47c.jpg?v=1746214335&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Radiant &amp; Restore Luxury Face Oil"
                                                                    class="lazyload scale-in first-image  hover__hide-image "
                                                                    data-sizes="auto"
                                                                    data-aspectratio="0.7626081451783077" loading="lazy"
                                                                    width="3614" height="4739">

                                                                <img srcset="//la-flawless.com/cdn/shop/files/IMG_9028-Edit.jpg?v=1746214335&width=165 165w,//la-flawless.com/cdn/shop/files/IMG_9028-Edit.jpg?v=1746214335&width=360 360w,//la-flawless.com/cdn/shop/files/IMG_9028-Edit.jpg?v=1746214335&width=533 533w,//la-flawless.com/cdn/shop/files/IMG_9028-Edit.jpg?v=1746214335&width=720 720w,//la-flawless.com/cdn/shop/files/IMG_9028-Edit.jpg?v=1746214335&width=940 940w,//la-flawless.com/cdn/shop/files/IMG_9028-Edit.jpg?v=1746214335&width=1066 1066w,//la-flawless.com/cdn/shop/files/IMG_9028-Edit.jpg?v=1746214335 4160w
     " src="cdn/shop/files/IMG_9028-Edita47c.jpg?v=1746214335&amp;width=720"
                                                                    sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                    alt="Radiant &amp; Restore Luxury Face Oil"
                                                                    class="lazyload transition second-image"
                                                                    data-sizes="auto"
                                                                    data-aspectratio="0.6666666666666666" loading="lazy"
                                                                    width="4160" height="6240">
                                                            </a>
                                                            <div class="product-label rectangular_label ">

                                                                <div class=" hide product-tag product-tag-sale-item product-tag--absolute  txtandnumber mb-1"
                                                                    aria-hidden="true"
                                                                    style="background-color: #d73f0f;color:#ffffff">Sale
                                                                    <span class="product-tag-sale-number-item"> -%
                                                                    </span></div>
                                                            </div>
                                                            <div
                                                                class="product-card__overlay d-flex justify-content-center flex-column">
                                                                <span data-tooltip="true" data-placement="left"
                                                                    class="btn btn-theme gradient-theme-vertical product-card__overlay-btn js-btn-quickview"
                                                                    title="Quickshop" data-toggle="modal"
                                                                    data-target="#jsQuickview"
                                                                    data-handle="radiant-restore-luxury-face-oil-new"
                                                                    data-pavailable="true"
                                                                    data-viewjdmg="<span class='jdgm-preview-badge' data-id='9859521872185'></span>">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M11.9844 5.57178C8.50513 5.57178 4.93608 7.58553 2.12638 11.613C2.04618 11.7293 2.00223 11.8666 2.00008 12.0078C1.99794 12.149 2.03769 12.2877 2.11432 12.4063C4.27316 15.7856 7.79444 18.4284 11.9844 18.4284C16.1289 18.4284 19.7225 15.7776 21.8854 12.3907C21.9602 12.2744 22 12.139 22 12.0007C22 11.8624 21.9602 11.7271 21.8854 11.6108C19.7176 8.26273 16.0977 5.57178 11.9844 5.57178Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M12.0029 15.5713C13.9753 15.5713 15.5742 13.9723 15.5742 12C15.5742 10.0276 13.9753 8.42871 12.0029 8.42871C10.0306 8.42871 8.43164 10.0276 8.43164 12C8.43164 13.9723 10.0306 15.5713 12.0029 15.5713Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-miterlimit="10" />
                                                                    </svg>
                                                                    <span>Quickshop</span><span class=" txt-short hide">
                                                                        Radiant and Restore Luxury Face Oil is a
                                                                        nutrient-rich blend designed to...
                                                                    </span></span></div>
                                                            <div class="product-card-cart">
                                                                <span class="btn btn-theme js-grid-cart w-100 "
                                                                    title="Add to Cart" data-id="50705144447289">
                                                                    <div class="product-card__loading spinner-border"
                                                                        role="status"></div>
                                                                    <span>

                                                                        Add to Cart

                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__info text-left">

                                                            <a class="mb-1 product-card__type d-inline-block"
                                                                href="collections/vendors6949.html?filter.p.vendor=La%20Flawless&amp;q=La%20Flawless">La
                                                                Flawless</a>
                                                            <a href="products/radiant-restore-luxury-face-oil-new.html"
                                                                title="Radiant & Restore Luxury Face Oil"
                                                                class=" d-block product-card__name ">Radiant & Restore
                                                                Luxury Face Oil</a>


                                                            <div style=''
                                                                class='jdgm-widget jdgm-preview-badge  py-1 small'
                                                                data-id='9859521872185' data-auto-install="false">

                                                            </div>

                                                            <div class="product-card__price "><span
                                                                    class="visually-hidden">Regular price</span>
                                                                $24.99
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-4 text-center">
                                    <a href="collections/all.html" class="btn btn-outline">
                                        Shop all
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div id="shopify-section-template--24382013669689__backgroundvideo_6cUDzg"
                class="shopify-section index-section">
                <!-- backgroundvideo.liquid -->
                <style data-shopify>
                .customstyletemplate--24382013669689__backgroundvideo_6cUDzg {
                    background-color: #ffffff;
                    padding: ;
                    margin: 0px 0px 0px 0px;

                }

                @media (max-width:750px) {
                    .customstyletemplate--24382013669689__backgroundvideo_6cUDzg {
                        padding: ;
                        margin: 0px 0px 0px 0px
                    }
                }
                </style>
                <style>
                .bgvideo-template--24382013669689__backgroundvideo_6cUDzg {

                    --st-bgvideo-height: 750px;
                    --st-bgvideo-height-mb: 450px;
                    min-height: var(--st-bgvideo-height);
                    padding-top: 4rem;
                    padding-bottom: 4rem;

                }

                @media(max-width:749px) {
                    .bgvideo-template--24382013669689__backgroundvideo_6cUDzg {
                        min-height: var(--st-bgvideo-height-mb);
                    }
                }

                .bgvideo-template--24382013669689__backgroundvideo_6cUDzg::before {
                    content: "";
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    z-index: 1;
                    background: #000000;
                    opacity: 0;
                }

                .bgvideo-template--24382013669689__backgroundvideo_6cUDzg .parallax-banner__meta::before {
                    background-color: #ffffff;
                    opacity: 0;
                }
                </style>
                <div class="customstyletemplate--24382013669689__backgroundvideo_6cUDzg " data-aos="">

                    <div class="full">
                        <div class="section-block">
                            <div class="d-flex bgvideo-template--24382013669689__backgroundvideo_6cUDzg align-items-center justify-content-center text-center bg-herovideo"
                                data-section-id="template--24382013669689__backgroundvideo_6cUDzg"
                                data-section-type="background-video">

                                <div class="hero-video">
                                    <video id="Mp4template--24382013669689__backgroundvideo_6cUDzg" class="lazyload"
                                        src="https://cdn.shopify.com/videos/c/o/v/d87147e5506e4356a7b1c2a8128d31be.mp4"
                                        loop="" muted="" playsinline="" autoplay=""></video>
                                </div>

                                <div class="container">
                                    <div class="parallax-banner__meta bg-herovideo-meta text-center">

                                        <div class="parallax-banner__btn  justify-content-center  align-items-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div id="shopify-section-template--24382013669689__9421016d-7952-4484-96b5-5b341d3d6fe4"
                class="shopify-section index-section">
                <!-- grid-banner-2.liquid -->
                <div class="customstyletemplate--24382013669689__9421016d-7952-4484-96b5-5b341d3d6fe4 banner-theme-text"
                    data-aos="fade-up">
                    <style data-shopify>
                    .customstyletemplate--24382013669689__9421016d-7952-4484-96b5-5b341d3d6fe4 {
                        background-color: #f2eff2;
                        padding: 80px 0px 80px 0px;
                        margin: 0px 0px 0px 0px;

                    }

                    .customstyletemplate--24382013669689__9421016d-7952-4484-96b5-5b341d3d6fe4 .row {
                        --g-gutter: 20px;
                        --g-hgutter: 10px;
                    }

                    @media (max-width:750px) {
                        .customstyletemplate--24382013669689__9421016d-7952-4484-96b5-5b341d3d6fe4 {
                            padding: 40px 0px 40px 0px;
                            margin: 0px 0px 0px 0px
                        }
                    }
                    </style>
                    <div class="container">
                        <div class="section-block">
                            <!-- section-heading.liquid - Apply for all section title -->

                            <h3 class="h2 text-left   mb-5 " data-aos="fade-up" data-aos-duration="500">
                                <span>Make Us a Part of your skin care journey.</span>
                            </h3>
                            <div class="row banner-gap ">
                                <style>
                                .banner-c59df49c-e4a4-42b3-8248-2c7d9bc139fb {
                                    border: 1px solid rgba(0, 0, 0, 0);
                                    background-color: rgba(0, 0, 0, 0);
                                    position: relative;
                                }
                                </style>
                                <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                                    <div class="banner-c59df49c-e4a4-42b3-8248-2c7d9bc139fb banner-text--block"
                                        style="padding:0px 0px 0px 0px">
                                        <figure
                                            class="position-relative m-0 hv-image-saturate text-center  d-flex flex-column">
                                            <a href="#">
                                                <div class="image-content__image-container overflow-hidden">
                                                    <div class="image-content__image-wrapper"
                                                        style="padding-top:145.93967517401393%;">
                                                        <img srcset="//la-flawless.com/cdn/shop/files/Screenshot_2025-02-12_210148.jpg?v=1739413739&width=165 165w,//la-flawless.com/cdn/shop/files/Screenshot_2025-02-12_210148.jpg?v=1739413739&width=360 360w,//la-flawless.com/cdn/shop/files/Screenshot_2025-02-12_210148.jpg?v=1739413739 431w
                  " src="cdn/shop/files/Screenshot_2025-02-12_210148ed67.jpg?v=1739413739&amp;width=1066"
                                                            sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                            alt="" class="image-content__image scale-in lazyload "
                                                            data-sizes="auto" data-aspectratio="0.685214626391097"
                                                            loading="lazy" width="431" height="629">
                                                    </div>
                                                </div>
                                            </a>
                                            <figcaption class="figcaption--c59df49c-e4a4-42b3-8248-2c7d9bc139fb py-4">
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <style>
                                .banner-template--21664100811025__9421016d-7952-4484-96b5-5b341d3d6fe4-banner-2 {
                                    border: 1px solid rgba(0, 0, 0, 0);
                                    background-color: rgba(0, 0, 0, 0);
                                    position: relative;
                                }
                                </style>
                                <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                                    <div class="banner-template--21664100811025__9421016d-7952-4484-96b5-5b341d3d6fe4-banner-2 banner-text--block"
                                        style="padding:0px 0px 0px 0px">
                                        <figure
                                            class="position-relative m-0 hv-image-saturate text-center  d-flex flex-column">
                                            <a href="#">
                                                <div class="image-content__image-container overflow-hidden">
                                                    <div class="image-content__image-wrapper"
                                                        style="padding-top:149.08675799086757%;">
                                                        <img srcset="//la-flawless.com/cdn/shop/files/Screenshot_2025-02-12_210319.jpg?v=1739413745&width=165 165w,//la-flawless.com/cdn/shop/files/Screenshot_2025-02-12_210319.jpg?v=1739413745&width=360 360w,//la-flawless.com/cdn/shop/files/Screenshot_2025-02-12_210319.jpg?v=1739413745 438w
                  " src="cdn/shop/files/Screenshot_2025-02-12_2103195b70.jpg?v=1739413745&amp;width=1066"
                                                            sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                            alt="" class="image-content__image scale-in lazyload "
                                                            data-sizes="auto" data-aspectratio="0.6707503828483921"
                                                            loading="lazy" width="438" height="653">
                                                    </div>
                                                </div>
                                            </a>
                                            <figcaption
                                                class="figcaption--template--21664100811025__9421016d-7952-4484-96b5-5b341d3d6fe4-banner-2 py-4">
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <style>
                                .banner-template--21664100811025__9421016d-7952-4484-96b5-5b341d3d6fe4-banner-1 {
                                    border: 1px solid rgba(0, 0, 0, 0);
                                    background-color: rgba(0, 0, 0, 0);
                                    position: relative;
                                }
                                </style>
                                <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                                    <div class="banner-template--21664100811025__9421016d-7952-4484-96b5-5b341d3d6fe4-banner-1 banner-text--block"
                                        style="padding:0px 0px 0px 0px">
                                        <figure
                                            class="position-relative m-0 hv-image-saturate text-center  d-flex flex-column">
                                            <div class="image-content__image-container overflow-hidden">
                                                <div class="image-content__image-wrapper"
                                                    style="padding-top:150.00000000000003%;">
                                                    <img srcset="//la-flawless.com/cdn/shop/files/Nicole_Photos-8.jpg?v=1739413782&width=165 165w,//la-flawless.com/cdn/shop/files/Nicole_Photos-8.jpg?v=1739413782&width=360 360w,//la-flawless.com/cdn/shop/files/Nicole_Photos-8.jpg?v=1739413782&width=533 533w,//la-flawless.com/cdn/shop/files/Nicole_Photos-8.jpg?v=1739413782&width=720 720w,//la-flawless.com/cdn/shop/files/Nicole_Photos-8.jpg?v=1739413782&width=940 940w,//la-flawless.com/cdn/shop/files/Nicole_Photos-8.jpg?v=1739413782&width=1066 1066w,//la-flawless.com/cdn/shop/files/Nicole_Photos-8.jpg?v=1739413782 3648w
                  " src="cdn/shop/files/Nicole_Photos-8fe78.jpg?v=1739413782&amp;width=1066"
                                                        sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                        alt="" class="image-content__image scale-in lazyload "
                                                        data-sizes="auto" data-aspectratio="0.6666666666666666"
                                                        loading="lazy" width="3648" height="5472">
                                                </div>
                                            </div>
                                            <figcaption
                                                class="figcaption--template--21664100811025__9421016d-7952-4484-96b5-5b341d3d6fe4-banner-1 py-4">
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <style>
                                .banner-1b3d386a-acb0-4451-9149-d898f8d70cd4 {
                                    border: 1px solid rgba(0, 0, 0, 0);
                                    background-color: rgba(0, 0, 0, 0);
                                    position: relative;
                                }
                                </style>
                                <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                                    <div class="banner-1b3d386a-acb0-4451-9149-d898f8d70cd4 banner-text--block"
                                        style="padding:0px 0px 0px 0px">
                                        <figure
                                            class="position-relative m-0 hv-image-saturate text-center  d-flex flex-column">
                                            <a href="#">
                                                <div class="image-content__image-container overflow-hidden">
                                                    <div class="image-content__image-wrapper"
                                                        style="padding-top:150.11441647597255%;">
                                                        <img srcset="//la-flawless.com/cdn/shop/files/Screenshot_2025-02-12_200223.jpg?v=1739408599&width=165 165w,//la-flawless.com/cdn/shop/files/Screenshot_2025-02-12_200223.jpg?v=1739408599&width=360 360w,//la-flawless.com/cdn/shop/files/Screenshot_2025-02-12_200223.jpg?v=1739408599 437w
                  " src="cdn/shop/files/Screenshot_2025-02-12_200223ecac.jpg?v=1739408599&amp;width=1066"
                                                            sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                            alt="" class="image-content__image scale-in lazyload "
                                                            data-sizes="auto" data-aspectratio="0.6661585365853658"
                                                            loading="lazy" width="437" height="656">
                                                    </div>
                                                </div>
                                            </a>
                                            <figcaption class="figcaption--1b3d386a-acb0-4451-9149-d898f8d70cd4 py-4">
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div id="shopify-section-template--24382013669689__662cf23c-2a28-41c4-9bd8-b6517c99ba49"
                class="shopify-section index-section">
                <!-- image-content-6.liquid -->

                <div class="customstyletemplate--24382013669689__662cf23c-2a28-41c4-9bd8-b6517c99ba49"
                    data-aos="fade-up">
                    <style data-shopify>
                    .customstyletemplate--24382013669689__662cf23c-2a28-41c4-9bd8-b6517c99ba49 {
                        background-color: #fcedde;
                        padding: 80px 0px 80px 0px;
                        margin: 0px 0px 0px 0px;

                    }

                    @media (max-width:750px) {
                        .customstyletemplate--24382013669689__662cf23c-2a28-41c4-9bd8-b6517c99ba49 {
                            padding: 40px 0px 40px 0px;
                            margin: 0px 0px 0px 0px
                        }
                    }
                    </style>
                    <div class="container">
                        <div class="section-block">
                            <div class="row  no-gutters ">
                                <div class="flex__item flex flex--center-vertical col-md-6">
                                    <div class="h-100 flex  w-100 flex--center-vertical"
                                        style="background-color:rgba(0,0,0,0) ;">
                                        <div class="flex__item image-content__text text-left   pr-lg-5 "
                                            style="max-width:500px;">
                                            <h2 class="mb-3 h2">Define Beauty on Your Own Terms.</h2>
                                            <div class="rte-setting"></div>
                                            <p><br />Designed for everyday use, this serum combination gently nourishes
                                                and revitalizes, leaving skin soft, firm, and beautifully
                                                youthful.<br /><br /></p>
                                            <div class="mt-5 mb-5">
                                                <a href="#" class="btn btn-outline">
                                                    Our Story
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="  mb-lg-0 flex__item flex flex--center-vertical col-md-6">
                                    <div class="flex__item">
                                        <div
                                            class="image-content-6 image-content-template--19541121335616__662cf23c-2a28-41c4-9bd8-b6517c99ba49-1687424839f6967066-0 right">
                                            <style>
                                            .image-content-6 {
                                                display: flex;
                                                margin: 0 auto;
                                            }

                                            .image-content-6 .image-content-6-1,
                                            .image-content-6 .image-content-6-2 {
                                                flex: 1 0 50%;
                                            }

                                            .image-content-6 .image-content-6-1:not(:last-child) {
                                                position: relative;
                                                margin-top: 48px;
                                                z-index: 1;
                                            }

                                            .image-content-6 .image-content-6-2 {
                                                position: relative;
                                                z-index: 0;
                                                margin-inline-end: -48px;
                                                transform: translate(-48px);
                                            }

                                            #VideoSection--template--19541121335616__662cf23c-2a28-41c4-9bd8-b6517c99ba49-1687424839f6967066-0 .video-section__cover-overlay {
                                                background-color: #000000;
                                                opacity: 0.3;
                                            }
                                            </style>
                                            <div class="image-content-6-1">
                                                <div class="image-content__image-container" data-aos="fade-up"
                                                    data-aos-duration="500">
                                                    <div class="image-content__image-wrapper"
                                                        style="padding-top:100.0%;"><img srcset="//la-flawless.com/cdn/shop/files/Img_2.jpg?v=1737110506&width=165 165w,//la-flawless.com/cdn/shop/files/Img_2.jpg?v=1737110506&width=360 360w,//la-flawless.com/cdn/shop/files/Img_2.jpg?v=1737110506&width=533 533w,//la-flawless.com/cdn/shop/files/Img_2.jpg?v=1737110506&width=720 720w,//la-flawless.com/cdn/shop/files/Img_2.jpg?v=1737110506&width=940 940w,//la-flawless.com/cdn/shop/files/Img_2.jpg?v=1737110506&width=1066 1066w,//la-flawless.com/cdn/shop/files/Img_2.jpg?v=1737110506 1200w
                                    " src="cdn/shop/files/Img_26bef.jpg?v=1737110506&amp;width=1066"
                                                            sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                            alt="" class="image-content__image lazyload scale-in"
                                                            data-sizes="auto" data-aspectratio="1.0" loading="lazy"
                                                            width="1200" height="1200">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image-content-6-2">
                                                <div class="image-content__image-container image-content-2"
                                                    data-aos="fade-up" data-aos-duration="1000">
                                                    <div class="image-content__image-wrapper"
                                                        style="padding-top:100.0%;"><img srcset="//la-flawless.com/cdn/shop/files/Img_4.jpg?v=1737110528&width=165 165w,//la-flawless.com/cdn/shop/files/Img_4.jpg?v=1737110528&width=360 360w,//la-flawless.com/cdn/shop/files/Img_4.jpg?v=1737110528&width=533 533w,//la-flawless.com/cdn/shop/files/Img_4.jpg?v=1737110528&width=720 720w,//la-flawless.com/cdn/shop/files/Img_4.jpg?v=1737110528&width=940 940w,//la-flawless.com/cdn/shop/files/Img_4.jpg?v=1737110528&width=1066 1066w,//la-flawless.com/cdn/shop/files/Img_4.jpg?v=1737110528 1200w
                                " src="cdn/shop/files/Img_4148c.jpg?v=1737110528&amp;width=1066"
                                                            sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                            alt="" class="image-content__image lazyload scale-in"
                                                            data-sizes="auto" data-aspectratio="1.0" loading="lazy"
                                                            width="1200" height="1200">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <div id="shopify-section-template--24382013669689__image_content_6_EyXWhg"
                class="shopify-section index-section">
                <!-- image-content-6.liquid -->

                <div class="customstyletemplate--24382013669689__image_content_6_EyXWhg" data-aos="zoom-in-up">
                    <style data-shopify>
                    .customstyletemplate--24382013669689__image_content_6_EyXWhg {
                        background-color: #e9e9e9;
                        padding: 80px 0px 80px 0px;
                        margin: 0px 0px 0px 0px;

                    }

                    @media (max-width:750px) {
                        .customstyletemplate--24382013669689__image_content_6_EyXWhg {
                            padding: 40px 0px 40px 0px;
                            margin: 0px 0px 0px 0px
                        }
                    }
                    </style>
                    <div class="container">
                        <div class="section-block">
                            <div class="row  no-gutters ">
                                <div class="flex__item flex flex--center-vertical col-md-6">
                                    <div class="h-100 flex  w-100 flex--center-vertical"
                                        style="background-color:rgba(0,0,0,0) ;">
                                        <div class="flex__item image-content__text text-center  pl-lg-5   pr-lg-5 "
                                            style="max-width:500px;">
                                            <h2 class="mb-3 h2">Tranxemic Acid Brightening Collection</h2>
                                            <div class="rte-setting"></div>
                                            <p><br />A targeted skincare collection powered by <strong>tranexamic
                                                    acid</strong>, designed to visibly reduce dark spots, even skin
                                                tone, and restore a luminous, healthy glow. Ideal for dull, uneven, and
                                                hyperpigmented skin.<br /><br /></p>
                                            <div class="mt-5 mb-5">
                                                <a href="#" class="btn btn-outline">
                                                    SHOP NOW
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="  mb-lg-0 flex__item flex flex--center-vertical col-md-6">
                                    <div class="flex__item">
                                        <div class="image-content-6 image-content-image_block_iiCRjp left">
                                            <style>
                                            .image-content-6 {
                                                display: flex;
                                                margin: 0 auto;
                                            }

                                            .image-content-6 .image-content-6-1,
                                            .image-content-6 .image-content-6-2 {
                                                flex: 1 0 50%;
                                            }

                                            .image-content-6 .image-content-6-1:not(:last-child) {
                                                position: relative;
                                                margin-top: 48px;
                                                z-index: 1;
                                            }

                                            .image-content-6 .image-content-6-2 {
                                                position: relative;
                                                z-index: 0;
                                                margin-inline-end: -48px;
                                                transform: translate(-48px);
                                            }

                                            #VideoSection--image_block_iiCRjp .video-section__cover-overlay {
                                                background-color: #000000;
                                                opacity: 0.3;
                                            }
                                            </style>
                                            <div class="image-content-6-1">
                                                <div class="image-content__image-container" data-aos="zoom-in-up"
                                                    data-aos-duration="500">
                                                    <div class="image-content__image-wrapper"
                                                        style="padding-top:67.43648960739029%;"><img srcset="//la-flawless.com/cdn/shop/files/IMG_8316_5d143326-ada2-42d5-9021-1b6ea2959894.jpg?v=1739414200&width=165 165w,//la-flawless.com/cdn/shop/files/IMG_8316_5d143326-ada2-42d5-9021-1b6ea2959894.jpg?v=1739414200&width=360 360w,//la-flawless.com/cdn/shop/files/IMG_8316_5d143326-ada2-42d5-9021-1b6ea2959894.jpg?v=1739414200&width=533 533w,//la-flawless.com/cdn/shop/files/IMG_8316_5d143326-ada2-42d5-9021-1b6ea2959894.jpg?v=1739414200&width=720 720w,//la-flawless.com/cdn/shop/files/IMG_8316_5d143326-ada2-42d5-9021-1b6ea2959894.jpg?v=1739414200&width=940 940w,//la-flawless.com/cdn/shop/files/IMG_8316_5d143326-ada2-42d5-9021-1b6ea2959894.jpg?v=1739414200&width=1066 1066w,//la-flawless.com/cdn/shop/files/IMG_8316_5d143326-ada2-42d5-9021-1b6ea2959894.jpg?v=1739414200 6062w
                                    " src="cdn/shop/files/IMG_8316_5d143326-ada2-42d5-9021-1b6ea295989400d0.jpg?v=1739414200&amp;width=1066"
                                                            sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                            alt="" class="image-content__image lazyload scale-in"
                                                            data-sizes="auto" data-aspectratio="1.4828767123287672"
                                                            loading="lazy" width="6062" height="4088">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image-content-6-2">
                                                <div class="image-content__image-container image-content-2"
                                                    data-aos="zoom-in-up" data-aos-duration="1000">
                                                    <div class="image-content__image-wrapper"
                                                        style="padding-top:100.0%;"><img srcset="//la-flawless.com/cdn/shop/files/Img_4.jpg?v=1737110528&width=165 165w,//la-flawless.com/cdn/shop/files/Img_4.jpg?v=1737110528&width=360 360w,//la-flawless.com/cdn/shop/files/Img_4.jpg?v=1737110528&width=533 533w,//la-flawless.com/cdn/shop/files/Img_4.jpg?v=1737110528&width=720 720w,//la-flawless.com/cdn/shop/files/Img_4.jpg?v=1737110528&width=940 940w,//la-flawless.com/cdn/shop/files/Img_4.jpg?v=1737110528&width=1066 1066w,//la-flawless.com/cdn/shop/files/Img_4.jpg?v=1737110528 1200w
                                " src="cdn/shop/files/Img_4148c.jpg?v=1737110528&amp;width=1066"
                                                            sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                            alt="" class="image-content__image lazyload scale-in"
                                                            data-sizes="auto" data-aspectratio="1.0" loading="lazy"
                                                            width="1200" height="1200">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <div id="shopify-section-template--24382013669689__811a6110-0ea8-4aca-b4ad-843c1574e2f6"
                class="shopify-section index-section">
                <!-- quotes-special.liquid -->
                <style data-shopify>
                .customstyletemplate--24382013669689__811a6110-0ea8-4aca-b4ad-843c1574e2f6 {
                    --g-padding-s-top: 100%;
                }

                .customstyletemplate--24382013669689__811a6110-0ea8-4aca-b4ad-843c1574e2f6 .rating li svg {
                    fill: #f1f1f1;
                }

                .customstyletemplate--24382013669689__811a6110-0ea8-4aca-b4ad-843c1574e2f6 .rating li.rated svg {
                    fill: #14344a;
                }

                .author-right .image-content__image-wrapper.portrait {
                    padding-top: var(--g-padding-s-top) !important;
                    overflow: hidden;
                }

                .author-right .image-content__image-wrapper.square {
                    padding-top: var(--g-padding-s-top) !important;
                    overflow: hidden;
                }

                .author-right .image-content__image-wrapper.landscape {
                    padding-top: var(--g-padding-s-top) !important;
                    overflow: hidden;
                }

                .author-right .image-content__image-wrapper.wide {
                    padding-top: var(--g-padding-s-top) !important;
                    overflow: hidden;
                }

                .author-right .image-content__image-wrapper.portrait img,
                .author-right .image-content__image-wrapper.square img,
                .author-right .image-content__image-wrapper.landscape img,
                .author-right .image-content__image-wrapper.wide img {
                    height: 100%;
                    object-fit: cover;
                }

                .quote-product-item {
                    position: absolute;
                    bottom: 1rem;
                    left: 1rem;
                    max-width: 300px;
                }

                .quote-product-item .product-card {
                    display: flex;
                    padding: 1rem;
                }

                .quote-product-item .product-card__image-wr {
                    width: 72px;
                    flex: 0 0 72px;
                    margin-right: 1.5rem;
                }

                .quote-product-item .product-card__info {
                    padding: 0 !important;
                    margin-bottom: 0;
                }

                .product-dark.quote-product-item .product-card {
                    background: rgba(var(--g-color-heading-rgb), 0.3);
                    transition: background 0.3s ease;
                }

                .product-dark.quote-product-item .product-card:hover {
                    background: rgba(var(--g-color-heading-rgb), 0.4);
                }

                .product-dark.quote-product-item .product-card__info {
                    background: transparent;
                }

                .product-dark .product-card__info {
                    --g-color-heading: white;
                    --g-color-heading-rgb: 255, 255, 255;
                    --color-body-text-rgb: 255, 255, 255;
                }

                .product-dark .product-card__price {
                    color: rgba(var(--color-body-text-rgb), 1);
                }

                .product-dark .js-btn-quickview {
                    color: rgba(var(--color-body-text-rgb), 1);
                    text-decoration-color: rgba(var(--color-body-text-rgb), 1);
                }
                </style>
                <style data-shopify>
                .customstyletemplate--24382013669689__811a6110-0ea8-4aca-b4ad-843c1574e2f6 {
                    background-color: #ffffff;
                    padding: 80px 0px 80px 0px;
                    margin: 0px 0px 0px 0px;

                }

                @media (max-width:750px) {
                    .customstyletemplate--24382013669689__811a6110-0ea8-4aca-b4ad-843c1574e2f6 {
                        padding: 40px 0px 40px 0px;
                        margin: 0px 0px 0px 0px
                    }
                }
                </style>
                <div class="customstyletemplate--24382013669689__811a6110-0ea8-4aca-b4ad-843c1574e2f6 ">
                    <div class="container">
                        <div class="section-block">
                            <!-- section-heading.liquid - Apply for all section title -->

                            <div class="quotes-wrapper dots-negative quotes-2">
                                <div class="quotes-slider row"
                                    id="Quotes-template--24382013669689__811a6110-0ea8-4aca-b4ad-843c1574e2f6"
                                    data-rows="" data-slidesToShow="1" data-slidestoscroll="1" data-arrows="true"
                                    data-dots="false" data-draggable="true" data-infinite="true"
                                    data-section-id="template--24382013669689__811a6110-0ea8-4aca-b4ad-843c1574e2f6"
                                    data-section-type="slickCarousels">
                                    <div
                                        class="quote__slide-wrapper carousel__slide-wrapper--template--21664100811025__811a6110-0ea8-4aca-b4ad-843c1574e2f6-quote-2">
                                        <div class="quote__slide">
                                            <div class="quote-wrap row">
                                                <div class="col-12 col-md-6" data-aos="fade-up" data-aos-duration="500">
                                                    <div class="pb-5 px-3 px-lg-0">
                                                        <div class="pt-3 pb-3">
                                                            <ul class="rating mb-3">
                                                                <li class="rated">
                                                                    <svg aria-hidden="true" focusable="false" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="currentColor">
                                                                        <path
                                                                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                                                        </path>
                                                                    </svg>
                                                                </li>
                                                                <li class="rated">
                                                                    <svg aria-hidden="true" focusable="false" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="currentColor">
                                                                        <path
                                                                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                                                        </path>
                                                                    </svg>
                                                                </li>
                                                                <li class="rated">
                                                                    <svg aria-hidden="true" focusable="false" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="currentColor">
                                                                        <path
                                                                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                                                        </path>
                                                                    </svg>
                                                                </li>
                                                                <li class="rated">
                                                                    <svg aria-hidden="true" focusable="false" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="currentColor">
                                                                        <path
                                                                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                                                        </path>
                                                                    </svg>
                                                                </li>
                                                                <li class="rated">
                                                                    <svg aria-hidden="true" focusable="false" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="currentColor">
                                                                        <path
                                                                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                                                        </path>
                                                                    </svg>
                                                                </li>
                                                            </ul>
                                                            <div class="h5">This is Advanced Night Repair Anti-Aging
                                                                Serum by La Flawless comes in a very...what's the
                                                                word...ornate... pump style bottle and according to the
                                                                packaging comes with 1.7oz of the 'Trifecta Rejuvenating
                                                                Serum.' Not sure what the 'trifecta' refers to although
                                                                the listing here says that it's an 8 in 1 serum. Says it
                                                                has lots of good ingredients in it and highlights those
                                                                like Bakuchiol, Vitamin E, Hyaluronic Acid, Squalane,
                                                                Rosehip Seed Oil, Papaya Enzyme Fruit Extract, Green Tea
                                                                Leaf Extract, Niacinamide and Vitamin C. It's certainly
                                                                a very nice serum and while some of these 'hero'
                                                                ingredients are down the list, it has all those things
                                                                mentioned and more. It also states that it is formulated
                                                                for all skin types.</div>
                                                        </div>
                                                        <div class=" font-family-2 mt-1">— Mike&Carol B.</div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6" data-aos="fade-up"
                                                    data-aos-duration="1500">

                                                    <div class="pl-lg-5">
                                                        <div class="position-relative">
                                                            <div
                                                                class="position-relative overflow-hidden author-right ">
                                                                <div class="image-content__image-wrapper square"
                                                                    style="padding-top:153.84615384615384%;">


                                                                    <img srcset="//la-flawless.com/cdn/shop/files/6131gkY2V0L.jpg?v=1737733740&width=165 165w,//la-flawless.com/cdn/shop/files/6131gkY2V0L.jpg?v=1737733740&width=360 360w,//la-flawless.com/cdn/shop/files/6131gkY2V0L.jpg?v=1737733740&width=533 533w,//la-flawless.com/cdn/shop/files/6131gkY2V0L.jpg?v=1737733740&width=720 720w,//la-flawless.com/cdn/shop/files/6131gkY2V0L.jpg?v=1737733740 832w
                                  " src="cdn/shop/files/6131gkY2V0L2d87.jpg?v=1737733740&amp;width=720"
                                                                        sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                        alt=""
                                                                        class="image-content__image lazyload scale-in"
                                                                        data-sizes="auto" data-aspectratio="0.65"
                                                                        loading="lazy" width="832" height="1280">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="quote__slide-wrapper carousel__slide-wrapper--template--21664100811025__811a6110-0ea8-4aca-b4ad-843c1574e2f6-quote-3">
                                        <div class="quote__slide">
                                            <div class="quote-wrap row">
                                                <div class="col-12 col-md-6" data-aos="fade-up" data-aos-duration="500">
                                                    <div class="pb-5 px-3 px-lg-0">
                                                        <div class="pt-3 pb-3">
                                                            <ul class="rating mb-3">
                                                                <li class="rated">
                                                                    <svg aria-hidden="true" focusable="false" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="currentColor">
                                                                        <path
                                                                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                                                        </path>
                                                                    </svg>
                                                                </li>
                                                                <li class="rated">
                                                                    <svg aria-hidden="true" focusable="false" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="currentColor">
                                                                        <path
                                                                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                                                        </path>
                                                                    </svg>
                                                                </li>
                                                                <li class="rated">
                                                                    <svg aria-hidden="true" focusable="false" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="currentColor">
                                                                        <path
                                                                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                                                        </path>
                                                                    </svg>
                                                                </li>
                                                                <li class="rated">
                                                                    <svg aria-hidden="true" focusable="false" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="currentColor">
                                                                        <path
                                                                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                                                        </path>
                                                                    </svg>
                                                                </li>
                                                                <li class="rated">
                                                                    <svg aria-hidden="true" focusable="false" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="currentColor">
                                                                        <path
                                                                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                                                        </path>
                                                                    </svg>
                                                                </li>
                                                            </ul>
                                                            <div class="h5">Smells absolutely delicious!!! Just a shower
                                                                fresh CLEAN scent. And it last for HOURS. I also like
                                                                that it is so silky and soft and my skin has a glow and
                                                                shine but it’s not oily AT ALL !!!! which is so hard to
                                                                find these days. But I am honestly so blown away by how
                                                                amazing this stuff smells. I’m definitely keeping this
                                                                in my daily routine !!!! As good as my skin already
                                                                feels, I can’t imagine it getting better. Quenched my
                                                                skin’s thirst. My tattoos are gleaming with bold dark
                                                                color.</div>
                                                        </div>
                                                        <div class=" font-family-2 mt-1">— Almarie Gentryy</div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6" data-aos="fade-up"
                                                    data-aos-duration="1500">

                                                    <div class="pl-lg-5">
                                                        <div class="position-relative">
                                                            <div
                                                                class="position-relative overflow-hidden author-right ">
                                                                <div class="image-content__image-wrapper square"
                                                                    style="padding-top:133.33333333333334%;">


                                                                    <img srcset="//la-flawless.com/cdn/shop/files/61tsqgNS_uL.jpg?v=1737733437&width=165 165w,//la-flawless.com/cdn/shop/files/61tsqgNS_uL.jpg?v=1737733437&width=360 360w,//la-flawless.com/cdn/shop/files/61tsqgNS_uL.jpg?v=1737733437&width=533 533w,//la-flawless.com/cdn/shop/files/61tsqgNS_uL.jpg?v=1737733437&width=720 720w,//la-flawless.com/cdn/shop/files/61tsqgNS_uL.jpg?v=1737733437&width=940 940w,//la-flawless.com/cdn/shop/files/61tsqgNS_uL.jpg?v=1737733437&width=1066 1066w,//la-flawless.com/cdn/shop/files/61tsqgNS_uL.jpg?v=1737733437 1224w
                                  " src="cdn/shop/files/61tsqgNS_uL815d.jpg?v=1737733437&amp;width=720"
                                                                        sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                        alt=""
                                                                        class="image-content__image lazyload scale-in"
                                                                        data-sizes="auto" data-aspectratio="0.75"
                                                                        loading="lazy" width="1224" height="1632">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="quote__slide-wrapper carousel__slide-wrapper--template--21664100811025__811a6110-0ea8-4aca-b4ad-843c1574e2f6-quote-1">
                                        <div class="quote__slide">
                                            <div class="quote-wrap row">
                                                <div class="col-12 col-md-6" data-aos="fade-up" data-aos-duration="500">
                                                    <div class="pb-5 px-3 px-lg-0">
                                                        <div class="pt-3 pb-3">
                                                            <ul class="rating mb-3">
                                                                <li class="rated">
                                                                    <svg aria-hidden="true" focusable="false" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="currentColor">
                                                                        <path
                                                                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                                                        </path>
                                                                    </svg>
                                                                </li>
                                                                <li class="rated">
                                                                    <svg aria-hidden="true" focusable="false" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="currentColor">
                                                                        <path
                                                                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                                                        </path>
                                                                    </svg>
                                                                </li>
                                                                <li class="rated">
                                                                    <svg aria-hidden="true" focusable="false" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="currentColor">
                                                                        <path
                                                                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                                                        </path>
                                                                    </svg>
                                                                </li>
                                                                <li class="rated">
                                                                    <svg aria-hidden="true" focusable="false" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="currentColor">
                                                                        <path
                                                                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                                                        </path>
                                                                    </svg>
                                                                </li>
                                                                <li class="rated">
                                                                    <svg aria-hidden="true" focusable="false" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="currentColor">
                                                                        <path
                                                                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                                                        </path>
                                                                    </svg>
                                                                </li>
                                                            </ul>
                                                            <div class="h5">Let's just cut to the chase shall we? Just
                                                                like the moisturizer I tried by this brand, the
                                                                fragrance of this face oil is just so strong, sickly
                                                                sweet actually, that I can't use it. Since there's no
                                                                added fragrance, I can't account for the fact that it
                                                                smells like the gardenia perfume that my grandmother
                                                                used to wear. This product does contain both Jasmine and
                                                                lilac oil, but the smell doesn't seem to match those
                                                                florals, so now I am wondering if they really did add
                                                                fragrance to this.</div>
                                                        </div>
                                                        <div class=" font-family-2 mt-1">— Just ask Babs</div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6" data-aos="fade-up"
                                                    data-aos-duration="1500">

                                                    <div class="pl-lg-5">
                                                        <div class="position-relative">
                                                            <div
                                                                class="position-relative overflow-hidden author-right ">
                                                                <div class="image-content__image-wrapper square"
                                                                    style="padding-top:133.33333333333334%;">


                                                                    <img srcset="//la-flawless.com/cdn/shop/files/71XJsvDZi5L.jpg?v=1737733616&width=165 165w,//la-flawless.com/cdn/shop/files/71XJsvDZi5L.jpg?v=1737733616&width=360 360w,//la-flawless.com/cdn/shop/files/71XJsvDZi5L.jpg?v=1737733616&width=533 533w,//la-flawless.com/cdn/shop/files/71XJsvDZi5L.jpg?v=1737733616&width=720 720w,//la-flawless.com/cdn/shop/files/71XJsvDZi5L.jpg?v=1737733616&width=940 940w,//la-flawless.com/cdn/shop/files/71XJsvDZi5L.jpg?v=1737733616&width=1066 1066w,//la-flawless.com/cdn/shop/files/71XJsvDZi5L.jpg?v=1737733616 1224w
                                  " src="cdn/shop/files/71XJsvDZi5L51d2.jpg?v=1737733616&amp;width=720"
                                                                        sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                                        alt=""
                                                                        class="image-content__image lazyload scale-in"
                                                                        data-sizes="auto" data-aspectratio="0.75"
                                                                        loading="lazy" width="1224" height="1632">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div id="shopify-section-template--24382013669689__image_content_6_rR3g6n"
                class="shopify-section index-section">
                <!-- image-content-6.liquid -->

                <div class="customstyletemplate--24382013669689__image_content_6_rR3g6n" data-aos="zoom-in-up">
                    <style data-shopify>
                    .customstyletemplate--24382013669689__image_content_6_rR3g6n {
                        background-color: #e9e9e9;
                        padding: 80px 0px 80px 0px;
                        margin: 0px 0px 0px 0px;

                    }

                    @media (max-width:750px) {
                        .customstyletemplate--24382013669689__image_content_6_rR3g6n {
                            padding: 40px 0px 40px 0px;
                            margin: 0px 0px 0px 0px
                        }
                    }
                    </style>
                    <div class="container">
                        <div class="section-block">
                            <div class="row  no-gutters ">
                                <div class="flex__item flex flex--center-vertical col-md-6">
                                    <div class="h-100 flex  w-100 flex--center-vertical"
                                        style="background-color:rgba(0,0,0,0) ;">
                                        <div class="flex__item image-content__text text-center  pl-lg-5   pr-lg-5 "
                                            style="max-width:500px;">
                                            <h2 class="mb-3 h2">Lactic Acid Balancing Collection</h2>
                                            <div class="rte-setting">A gentle yet effective collection formulated with
                                                lactic acid to exfoliate, hydrate, and rebalance the skin barrier.
                                                Perfect for dull, uneven, or breakout-prone skin in need of clarity and
                                                renewal.</div>
                                            <div class="mt-5 mb-5">
                                                <a href="#" class="btn btn-outline">
                                                    SHOP NOW
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="  mb-lg-0 flex__item flex flex--center-vertical col-md-6">
                                    <div class="flex__item">
                                        <div class="image-content-6 image-content-image_block_WeKLcm left">
                                            <style>
                                            .image-content-6 {
                                                display: flex;
                                                margin: 0 auto;
                                            }

                                            .image-content-6 .image-content-6-1,
                                            .image-content-6 .image-content-6-2 {
                                                flex: 1 0 50%;
                                            }

                                            .image-content-6 .image-content-6-1:not(:last-child) {
                                                position: relative;
                                                margin-top: 48px;
                                                z-index: 1;
                                            }

                                            .image-content-6 .image-content-6-2 {
                                                position: relative;
                                                z-index: 0;
                                                margin-inline-end: -48px;
                                                transform: translate(-48px);
                                            }

                                            #VideoSection--image_block_WeKLcm .video-section__cover-overlay {
                                                background-color: #000000;
                                                opacity: 0.3;
                                            }
                                            </style>
                                            <div class="image-content-6-1">
                                                <div class="image-content__image-container" data-aos="zoom-in-up"
                                                    data-aos-duration="500">
                                                    <div class="image-content__image-wrapper"
                                                        style="padding-top:70.36895431083924%;"><img srcset="//la-flawless.com/cdn/shop/files/IMG_8317_c16f0c2d-a4cb-469f-9636-f43e8ca19559.jpg?v=1744159366&width=165 165w,//la-flawless.com/cdn/shop/files/IMG_8317_c16f0c2d-a4cb-469f-9636-f43e8ca19559.jpg?v=1744159366&width=360 360w,//la-flawless.com/cdn/shop/files/IMG_8317_c16f0c2d-a4cb-469f-9636-f43e8ca19559.jpg?v=1744159366&width=533 533w,//la-flawless.com/cdn/shop/files/IMG_8317_c16f0c2d-a4cb-469f-9636-f43e8ca19559.jpg?v=1744159366&width=720 720w,//la-flawless.com/cdn/shop/files/IMG_8317_c16f0c2d-a4cb-469f-9636-f43e8ca19559.jpg?v=1744159366&width=940 940w,//la-flawless.com/cdn/shop/files/IMG_8317_c16f0c2d-a4cb-469f-9636-f43e8ca19559.jpg?v=1744159366&width=1066 1066w,//la-flawless.com/cdn/shop/files/IMG_8317_c16f0c2d-a4cb-469f-9636-f43e8ca19559.jpg?v=1744159366 5231w
                                    " src="cdn/shop/files/IMG_8317_c16f0c2d-a4cb-469f-9636-f43e8ca1955906bb.jpg?v=1744159366&amp;width=1066"
                                                            sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                            alt="" class="image-content__image lazyload scale-in"
                                                            data-sizes="auto" data-aspectratio="1.4210812279271936"
                                                            loading="lazy" width="5231" height="3681">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image-content-6-2">
                                                <div class="image-content__image-container image-content-2"
                                                    data-aos="zoom-in-up" data-aos-duration="1000">
                                                    <div class="image-content__image-wrapper"
                                                        style="padding-top:100.0%;"><img srcset="//la-flawless.com/cdn/shop/files/Img_4.jpg?v=1737110528&width=165 165w,//la-flawless.com/cdn/shop/files/Img_4.jpg?v=1737110528&width=360 360w,//la-flawless.com/cdn/shop/files/Img_4.jpg?v=1737110528&width=533 533w,//la-flawless.com/cdn/shop/files/Img_4.jpg?v=1737110528&width=720 720w,//la-flawless.com/cdn/shop/files/Img_4.jpg?v=1737110528&width=940 940w,//la-flawless.com/cdn/shop/files/Img_4.jpg?v=1737110528&width=1066 1066w,//la-flawless.com/cdn/shop/files/Img_4.jpg?v=1737110528 1200w
                                " src="cdn/shop/files/Img_4148c.jpg?v=1737110528&amp;width=1066"
                                                            sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                            alt="" class="image-content__image lazyload scale-in"
                                                            data-sizes="auto" data-aspectratio="1.0" loading="lazy"
                                                            width="1200" height="1200">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <div id="shopify-section-template--24382013669689__3fb03ff7-25ae-4f7b-8179-3e29c80906fd"
                class="shopify-section index-section">
                <!-- line.liquid -->
                <style>
                .customstyletemplate--24382013669689__3fb03ff7-25ae-4f7b-8179-3e29c80906fd .border-custom {
                    border-top-width: 1px !important;
                    border-color: #000000 !important;
                }
                </style>
                <div class="customstyletemplate--24382013669689__3fb03ff7-25ae-4f7b-8179-3e29c80906fd" data-aos="">
                    <style data-shopify>
                    .customstyletemplate--24382013669689__3fb03ff7-25ae-4f7b-8179-3e29c80906fd {
                        background-color: #ffffff;
                        padding: 0px 0px 0px 0px;
                        margin: 0px 0px 0px 0px;

                    }

                    @media (max-width:750px) {
                        .customstyletemplate--24382013669689__3fb03ff7-25ae-4f7b-8179-3e29c80906fd {
                            padding: ;
                            margin:
                        }
                    }
                    </style>
                    <div class="container">
                        <div class="border-top border-custom">
                        </div>
                    </div>
                </div>

            </div>
            <div id="shopify-section-template--24382013669689__5e6d27a3-1163-46d3-a128-345487900584"
                class="shopify-section index-section">
                <!-- faq-accordion.liquid -->
                <style>
                .customstyletemplate--24382013669689__5e6d27a3-1163-46d3-a128-345487900584 {
                    position: relative;
                    z-index: ;
                    background-position: center center !important;
                    background-repeat: no-repeat !important;
                    background-size: auto !important;
                }

                .card-faqs {
                    border-bottom: 1px solid #ebebeb;
                    padding: ;
                }

                .card-faqs:first-child {
                    border-top: 1px solid #ebebeb;
                }

                .card-faqs-heading {
                    cursor: pointer;
                    position: relative;
                    padding-right: 60px;

                }

                .faq-heading {
                    padding-top: 1.25rem;
                    padding-bottom: 1.25rem;
                }

                .faq-heading .faq-icon {
                    display: inline-block;
                    width: 40px;
                    height: 40px;
                    line-height: 38px;
                    font-size: 14px;
                    text-align: center;
                    position: absolute;
                    top: 10px;
                    right: 0;
                }

                .faq-heading .faq-icon i {
                    font-size: 14px;
                }

                .faq-heading .faq-icon i::before {
                    content: "\e92d";
                }

                .faq-heading.collapsed .faq-icon i::before {
                    content: "\e93d";
                }

                .faq-heading.collapsed .faq-icon {
                    background-color: transparent;
                }

                .card-faqs .card-body {
                    padding-top: 0;
                    padding-bottom: 1.5rem;
                }
                </style>
                <section class="customstyletemplate--24382013669689__5e6d27a3-1163-46d3-a128-345487900584  lazyload "
                    data-aos="fade-up" data-bgset="" data-sizes="auto" data-parent-fit="cover">
                    <style data-shopify>
                    .customstyletemplate--24382013669689__5e6d27a3-1163-46d3-a128-345487900584 {
                        background-color: #dcdcd5;
                        padding: 80px 0px 80px 0px;
                        margin: 0px 0px 0px 0px;

                    }

                    @media (max-width:750px) {
                        .customstyletemplate--24382013669689__5e6d27a3-1163-46d3-a128-345487900584 {
                            padding: 40px 0px 40px 0px;
                            margin: 0px 0px 0px 0px
                        }
                    }
                    </style>
                    <div class="container">
                        <!-- section-heading.liquid - Apply for all section title -->

                        <div class="subtop text-left text-top  mb-2 " data-aos="fade-up" data-aos-duration="300">Faqs
                        </div>
                        <h3 class="h2 text-left   mb-5 " data-aos="fade-up" data-aos-duration="500">
                            <span>Frequently Asked Questions</span>
                        </h3>
                        <div class="row  flex-row-reverse  justify-content-center">
                            <div class="col-md-6  col-12" data-aos="fade-up" data-aos-duration="500">
                                <div id="accordion-faqs" class="   pl-lg-5    mb-5 mb-lg-0">
                                    <div class="card-faqs">
                                        <div class="card-faqs-heading">
                                            <h4 class="mb-0 h4">
                                                <span class="faq-heading d-flex align-items-center "
                                                    data-toggle="collapse"
                                                    data-target="#faq-template--19541121335616__5e6d27a3-1163-46d3-a128-345487900584-1687514909b5a1268d-0"
                                                    aria-expanded="true"
                                                    aria-controls="faq-template--19541121335616__5e6d27a3-1163-46d3-a128-345487900584-1687514909b5a1268d-0">
                                                    <span class="faq-icon">
                                                        <i class="icon-plus"></i>
                                                    </span>
                                                    What makes La Flawless Skin Care products unique?
                                                </span>
                                            </h4>
                                        </div>
                                        <div id="faq-template--19541121335616__5e6d27a3-1163-46d3-a128-345487900584-1687514909b5a1268d-0"
                                            class="pl-2 collapse show" aria-labelledby="headingOne"
                                            data-parent="#accordion-faqs">
                                            <div class="card-body px-0">
                                                <p>Our products are crafted with natural ingredients, backed by
                                                    scientific research, and free from harmful chemicals, parabens, and
                                                    synthetic additives. We focus on clean beauty to ensure safe and
                                                    effective skincare for all.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-faqs">
                                        <div class="card-faqs-heading">
                                            <h4 class="mb-0 h4">
                                                <span class="faq-heading d-flex align-items-center collapsed"
                                                    data-toggle="collapse"
                                                    data-target="#faq-template--19541121335616__5e6d27a3-1163-46d3-a128-345487900584-1687514909b5a1268d-1"
                                                    aria-expanded="false"
                                                    aria-controls="faq-template--19541121335616__5e6d27a3-1163-46d3-a128-345487900584-1687514909b5a1268d-1">
                                                    <span class="faq-icon">
                                                        <i class="icon-plus"></i>
                                                    </span>
                                                    Are your products suitable for all skin types?
                                                </span>
                                            </h4>
                                        </div>
                                        <div id="faq-template--19541121335616__5e6d27a3-1163-46d3-a128-345487900584-1687514909b5a1268d-1"
                                            class="pl-2 collapse " aria-labelledby="headingOne"
                                            data-parent="#accordion-faqs">
                                            <div class="card-body px-0">
                                                <p>Yes! Our formulations are designed to be gentle and nurturing, making
                                                    them suitable for all skin types, including sensitive skin.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-faqs">
                                        <div class="card-faqs-heading">
                                            <h4 class="mb-0 h4">
                                                <span class="faq-heading d-flex align-items-center collapsed"
                                                    data-toggle="collapse"
                                                    data-target="#faq-template--19541121335616__5e6d27a3-1163-46d3-a128-345487900584-1687514909b5a1268d-2"
                                                    aria-expanded="false"
                                                    aria-controls="faq-template--19541121335616__5e6d27a3-1163-46d3-a128-345487900584-1687514909b5a1268d-2">
                                                    <span class="faq-icon">
                                                        <i class="icon-plus"></i>
                                                    </span>
                                                    Are La Flawless products cruelty-free?
                                                </span>
                                            </h4>
                                        </div>
                                        <div id="faq-template--19541121335616__5e6d27a3-1163-46d3-a128-345487900584-1687514909b5a1268d-2"
                                            class="pl-2 collapse " aria-labelledby="headingOne"
                                            data-parent="#accordion-faqs">
                                            <div class="card-body px-0">
                                                <p>Absolutely. We never test on animals, and our products are 100%
                                                    cruelty-free.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6" data-aos="fade-up" data-aos-duration="800">
                                <div class="position-relative overflow-hidden">
                                    <div class="image-content__image-wrapper" style="padding-top:102.18677643426808%;">
                                        <img srcset="//la-flawless.com/cdn/shop/files/IMG_8315_216b7069-42f9-45fb-9aa0-6a068b5670f2.jpg?v=1740643410&width=165 165w,//la-flawless.com/cdn/shop/files/IMG_8315_216b7069-42f9-45fb-9aa0-6a068b5670f2.jpg?v=1740643410&width=360 360w,//la-flawless.com/cdn/shop/files/IMG_8315_216b7069-42f9-45fb-9aa0-6a068b5670f2.jpg?v=1740643410&width=533 533w,//la-flawless.com/cdn/shop/files/IMG_8315_216b7069-42f9-45fb-9aa0-6a068b5670f2.jpg?v=1740643410&width=720 720w,//la-flawless.com/cdn/shop/files/IMG_8315_216b7069-42f9-45fb-9aa0-6a068b5670f2.jpg?v=1740643410&width=940 940w,//la-flawless.com/cdn/shop/files/IMG_8315_216b7069-42f9-45fb-9aa0-6a068b5670f2.jpg?v=1740643410&width=1066 1066w,//la-flawless.com/cdn/shop/files/IMG_8315_216b7069-42f9-45fb-9aa0-6a068b5670f2.jpg?v=1740643410 3887w
                          " src="cdn/shop/files/IMG_8315_216b7069-42f9-45fb-9aa0-6a068b5670f29487.jpg?v=1740643410&amp;width=1066"
                                            sizes="(min-width: 1400px) 317px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                            alt="" class="image-content__image lazyload scale-in" data-sizes="auto"
                                            data-aspectratio="0.978600201409869" loading="lazy" width="3887"
                                            height="3972">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
@endsection