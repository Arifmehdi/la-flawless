        <!-- header.liquid -->
                <style>
        :root {
            --header-background: #ffffff;
            --header-text: #042436;
            --header-linkcolor: #042436;
            --header-linkhover: #7e7e84;
            --header-border-color: 220, 224, 227;
            --header-color-indicator: #042436;

            --header-menucolor: #042436;
            --header-menuhover: #868686;
            --header-menudroptexttitle: #2c2c2c;
            --header-menudroptext: #6c747b;
            --header-menudropbg: #ffffff;
            --header-menudropborder: #f1f1f1;
            --header-topbarbg: ;
            --header-topborderbg: ;
            --header-text-top: ;
            --padding-menu: 1.2rem;
            --menu_font_size: 13px;
            --menu_font_weight: 600;
            --menu_type_text: uppercase;
            --menu_font_family: var(--g-font-2);
            --menu_spacing: 0.1em;

            --g-label-text: #ffffff;
            --g-label-new: #34bf49;
            --g-label-hot: #d24418;
            --g-label-sale: #ffa800;
            --g-label-other: #848484;

        }

        #topbar .col-left {
            --color-body-text-rgb: , , ;
        }

        .section-header {
            position: sticky;
            top: 0;
            z-index: 999;
        }

        .site-header {
            background-color: var(--header-background);
            color: var(--header-text);
            transition: all 0.3s ease;
            z-index: 999;
            box-shadow: 0 0px 0px 1px rgb(0 0 0 / 05%);
        }

        .template-index .site-header {
            box-shadow: none;
        }

        .site-header__logo {
            display: inline-block;
            margin-bottom: 0;
            vertical-align: middle;
            max-width: 100%;
            line-height: 0;
            font-size: 32px !important;
        }

        .header-bottom__right {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }


        .site-header__logo a {
            display: block;
            color: var(--header-linkcolor);
        }

        .template-giftcard .site-header__logo-link {
            display: inline-block;
            float: none;
        }

        .site-header__link {
            display: inline-flex;
            color: var(--header-linkcolor);
            padding: 15px 12px;
            line-height: 1;
            position: relative;
            -webkit-transition: all ease .3s;
            -o-transition: all ease .3s;
            transition: all ease .3s;
            align-items: center;
            font-size: var(--menu_font_size);
            font-weight: var(--menu_font_weight);
            text-transform: var(--menu_type_text);
            letter-spacing: var(--menu_spacing);
        }

        @media (max-width:749px) {
            .site-header__link {
                padding: 15px 16px;
            }

            .site-header__wishlist {
                padding-right: 0;
            }

            .js-wishlist-link .js-wishlist-count {
                right: -10px !important;
            }

            .header-wl-text .js-wishlist-count {
                right: 0 !important;
                border: none;
                width: auto;
                margin-left: 4px;
            }

            .text-icon-cart {
                display: none;
            }
        }

        .site-header__search-submit {
            padding: 0;

        }

        .site-header__search-submit svg {
            width: 22px;
            height: 22px;
        }

        .site-header__link .icon {
            fill: currentColor;
        }

        .header-top .site-header__link .icon {
            width: 12px;
            margin-top: -3px;
        }

        .site-header__link:focus,
        .site-header__link:hover {
            color: var(--header-linkhover);
        }

        .site-header__menu-toggle--close {
            display: none;
        }

        .site-header__link.js-drawer-open .site-header__menu-toggle--open {
            display: none;
        }

        .site-header__link.js-drawer-open .site-header__menu-toggle--close {
            display: block;
        }

        .site-header__cart {
            position: relative;
            cursor: pointer;
            padding-right: 0;
        }

        .site-header__cart .js-toggle-cart {
            display: flex;
            align-items: center;
            position: relative;
        }

        .site-header__cart .svg-cart {
            width: 24px;
            height: 24px;
            fill: none;
        }

        .header-cart-text .svg-cart {
            display: none;
        }

        .header-cart-text {
            column-gap: 8px;
        }

        .text-indicator {
            position: relative;
            width: 24px;
            height: 24px;
            border-radius: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            border: 1px solid var(--header-color-indicator);
            background-color: var(--header-color-indicator);
            font-size: 12px;
            font-weight: 500;
            color: var(--header-background);
            transition: all ease .3s;
        }

        .site-header__link:hover .text-indicator,
        .site-header__link:focus .text-indicator {
            border-color: var(--header-linkhover);
            background-color: var(--header-linkhover);
        }

        .site-header__cart-indicator {
            display: inline-block;
            background-color: var(--header-color-indicator);
            height: 20px;
            width: 20px;
            border-radius: 50%;
            text-align: center;
            font-size: 10px;
            font-weight: 400;
            color: #fff;
            position: absolute;
            bottom: 7px;
            right: -12px;
            border: 2px solid var(--header-background);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .header-wl-icon .wishlist-text {
            display: none;
        }

        .header-wl-text .wishlist-text,
        .header-wl-icon-text .wishlist-text {
            padding-left: 6px;
        }

        .header-wl-icon-text .wishlist-text {
            padding-left: 1rem;
        }

        .header-wl-text-2 .wishlist-text {
            padding-left: 6px;
        }

        @media (min-width:750px) {
            .header-wl-text .svg-heart {
                display: none;
            }

            .header-wl-number .wishlist-text,
            .header-wl-number .svg-heart,
            .header-wl-text-2 .svg-heart {
                display: none;
            }
        }


        .site-header__search-wrap {
            position: relative;
        }

        .header-search-icon-text .search-text {
            padding-left: 6px;
        }

        .header-search-icon .search-text,
        .header-search-text .svg-search {
            display: none;
        }

        .site-header__search-wrap #form-search-header {
            position: fixed !important;
            width: 100%;
            top: 0;
            transform: translateY(-100%);
            transition: transform 0.4s cubic-bezier(0.19, 1, 0.22, 1);
        }

        .site-header__search-wrap #form-search-header.sidebar__search {
            width: 500px;
            right: 0;
            transform: translateX(100%);
            height: 100%;
        }

        .site-header__search-wrap #form-search-header.active {
            transform: translateY(0);
            transition: transform 0.7s cubic-bezier(0.19, 1, 0.22, 1);
        }

        .site-header__search-wrap #form-search-header.sidebar__search.active {
            transform: translateX(0);
            transition: transform 0.7s cubic-bezier(0.19, 1, 0.22, 1);
        }

        .site-header__search-wrap #form-search-header .icon-close {
            font-size: 12px;
        }

        .site-header__search-wrap .overlay {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.4);
            z-index: 100;
            visibility: hidden;
            opacity: 0;
        }

        .site-header__search-wrap .overlay.active {
            visibility: visible;
            opacity: 1;
        }

        .site-header__search-pop {
            position: relative;
            z-index: 1;
        }

        .label-search {
            color: rgba(var(--color-body-text-rgb), 0.6);
        }

        @media (max-width:991px) {
            .site-header__search-pop {
                display: none;
            }
        }

        .site-header__search-pop .svg-search {
            width: 20px;
            height: 20px;
        }

        .site-header__search {
            position: absolute;
            right: 0;
            z-index: 999;
            width: 0;
            background: #fff;
            padding: 0;
        }

        .site-header__search.active {
            opacity: 1;
        }

        .site-header__search-input {
            height: 40px;
            background-color: transparent;
            -webkit-transition: all ease .3s;
            -o-transition: all ease .3s;
            transition: all ease .3s;
            color: var(--g-color-heading);
            padding: 0;
            font-size: 24px;
            width: 100%;
        }

        .site-header__search-input::-webkit-input-placeholder {
            color: var(--g-color-heading);
            opacity: 1;
            font-size: 26px;
        }

        .site-header__search-input:-moz-placeholder {
            color: var(--g-color-heading);
            opacity: 1;
            font-size: 26px;
        }

        .site-header__search-input:-ms-input-placeholder {
            color: var(--g-color-heading);
            opacity: 1;
            font-size: 26px;
        }

        .site-header__search-input::-ms-input-placeholder {
            color: var(--g-color-heading);
            opacity: 1;
            font-size: 26px;
        }

        input[type=search]::-webkit-search-cancel-button {
            display: none;
            position: relative;
            left: -10px;
        }

        /*Search ajax*/

        .header__search .svg-search {
            width: 24px;
            height: 24px;
            fill: none;
        }

        .site-header__search-wrap {
            position: static;
        }

        .modal__toggle-open {
            cursor: pointer;
        }

        .modal__content {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: var(--color-content);
            z-index: 11;
            display: flex;
            justify-content: center;
            align-items: center;
            transform: translateY(-100%);
            transition: transform 0.4s cubic-bezier(0.19, 1, 0.22, 1);
        }

        .sidebar__search .modal__content {
            width: 500px;
            right: 0;
            left: auto;
            transform: translateX(100%);
            height: 100%;
            align-items: flex-start;
            padding: 0.5rem 2.5rem;
        }

        @media (max-width:749px) {
            .modal__content {
                padding: 0rem 1.5rem;
            }

            .sidebar__search .modal__content {
                max-width: 100%;
                padding: 0.5rem 2rem;
            }

        }

        .sidebar__search .detail-modal.active .modal__content {
            transform: translateX(0);
            transition: transform 0.7s cubic-bezier(0.19, 1, 0.22, 1);
        }

        .sidebar__search .search-modal__content {
            max-width: 100%;
            width: 100%;
        }

        .detail-modal.active .modal__content {
            transform: translateY(0);
            transition: transform 0.7s cubic-bezier(0.19, 1, 0.22, 1);
        }

        .search-modal__content {
            width: 700px;
        }

        .search-modal__close-button {
            background-color: transparent;
        }

        .search-modal__form .search__input {
            background-color: transparent;
            border-bottom: 2px solid var(--g-input-border);
            font-size: 24px;
        }

        .search-modal__form .search__input::-webkit-input-placeholder {
            color: var(--g-color-heading);
            opacity: 1;
            font-size: 24px;
        }

        .search-modal__form .search__input:-moz-placeholder {
            color: var(--g-color-heading);
            opacity: 1;
            font-size: 24px;
        }

        .search-modal__form .search__input:-ms-input-placeholder {
            color: var(--g-color-heading);
            opacity: 1;
            font-size: 24px;
        }

        .search-modal__form .search__input::-ms-input-placeholder {
            color: var(--g-color-heading);
            opacity: 1;
            font-size: 24px;
        }

        .search-modal__form .field,
        .search-modal__form {
            position: relative;
        }

        .search-modal__form .search__button {
            position: absolute;
            width: 3rem;
            top: 0;
            bottom: 0;
            right: 0;
            background-color: transparent;
            right: -10px;
        }

        .detail-modal.active .modal-overlay:after {
            position: absolute;
            content: "";
            background-color: rgb(0, 0, 0, .6);
            top: 100%;
            left: 0;
            right: 0;
            height: 100vh;
        }

        .sidebar__search .detail-modal.active .modal-overlay {
            position: fixed;
            content: "";
            background-color: rgb(0, 0, 0, .6);
            top: 0;
            left: 0;
            right: 0;
            height: 100vh;
            z-index: 9;
        }

        .search-trend ul {
            flex-direction: row;
        }

        .site-nav {
            white-space: nowrap;
            font-family: var(--menu_font_family);
        }

        .header--acount .svg-user {
            width: 24px;
            height: 24px;
            fill: none;
        }

        .header-login-icon .account-text {
            display: none;
        }

        .header-login-icon-text .account-text {
            padding-left: 6px;
        }

        .header-login-text .svg-user {
            display: none;
        }

        .site-nav li {
            display: inline-block;
        }

        .site-nav__dropdown {
            display: none;
            position: absolute;
            left: 0;
            padding: 0;
            margin: 0;
            z-index: 5;
            border: 1px solid var(--header-menudropborder);
            webkit-box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.05);
            -webkit-box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.05);
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.05);
        }

        .site-nav__dropdown li {
            display: block;
        }

        .site-nav__dropdown-container:hover>.site-nav__dropdown,
        .site-nav__item:hover>.site-nav__dropdown {
            opacity: 1;
            visibility: visible;
        }

        @keyframes menu_dropdowns_li {
            0% {
                opacity: 0;
                transform: translateY(16px);
            }

            100% {
                opacity: 1;
                transform: translateY(0px);
            }
        }

        .site-nav__item:hover>.site-nav__dropdown .d-col-link {
            opacity: 0;
            animation: menu_dropdowns_li;
            animation-fill-mode: forwards;
            animation-duration: .4s;
        }

        .site-nav__item:hover>.site-nav__dropdown .meganav__list {
            opacity: 0;
            animation: menu_dropdowns_li;
            animation-fill-mode: forwards;
            animation-duration: .4s;
        }

        .site-nav__item {
            text-align: left;
        }

        .rtl .site-nav__item {
            text-align: right;
        }

        .site-nav__item.site-nav__item-normal {
            position: relative;
        }

        .site-nav__item .meganav {
            right: auto;
            min-width: 280px;
            color: var(--header-menudroptext);
            font-family: var(--g-font-2);
        }

        .site-nav__item .meganav li a {
            color: var(--header-menudroptext);
            -webkit-transition: all ease .5s;
            -o-transition: all ease .5s;
            transition: all ease .5s;
            position: relative;
            font-size: calc(var(--g-font-size) - 1px);
        }

        .site-nav__item .meganav li a:hover {
            color: var(--g-main);
        }

        .site-nav__item .meganav__list {
            width: 100%;
            background: var(--header-menudropbg);
        }

        .site-nav__item-mega .site-nav__dropdown {
            padding: 32px 30px 24px 30px;
        }

        .site-nav__item-mega .menu-title {
            font-size: var(--menu_font_size);
            font-weight: var(--menu_font_weight);
            margin: 8px 0 8px;
            text-transform: var(--menu_type_text);
            color: var(--header-menudroptexttitle);
            font-family: var(--menu_font_family);
            letter-spacing: var(--menu_spacing);
        }

        .site-nav__item-mega .menu-title a {
            color: var(--header-menudroptexttitle);
        }

        .site-nav__item-mega .box-image {
            padding-bottom: 10px;
            padding-top: 10px;
        }

        .site-nav__item-mega--custom {
            position: relative;
        }

        .site-nav .site-nav__item:hover>.site-nav__link {
            color: var(--header-menuhover);
        }

        .site-nav .site-nav__item:hover>.site-nav__link .site-nav__title::before {
            width: calc(100% - var(--padding-menu) * 2);
            left: var(--padding-menu);
        }

        .site-nav__link {
            font-size: var(--menu_font_size);
            font-weight: var(--menu_font_weight);
            position: relative;
            color: var(--header-menucolor);
            padding: 38px var(--padding-menu);
            display: block;
            white-space: nowrap;
            text-transform: var(--menu_type_text);
            letter-spacing: var(--menu_spacing);
            transition: padding 0.3s ease;
            border: none;
        }

        .site-nav__link .site-nav__title {
            position: static;
        }

        .site-nav__link .site-nav__title::before {
            content: "";
            position: absolute;
            right: var(--padding-menu);
            bottom: 40px;
            width: 0;
            border-bottom: 1px solid var(--header-menuhover);
            -webkit-transition: width .3s ease;
            transition: width .3s ease;
            z-index: 7;
        }

        .size-header-small .site-nav__link {
            padding: 24px var(--padding-menu);
        }

        .size-header-small.logo-center-navigation-center .site-nav__link {
            padding: 12px var(--padding-menu);
        }

        .size-header-small.logo-left-navigation-underleft .site-nav__link {
            padding: 16px var(--padding-menu);
        }

        .size-header-small .site-nav__link .site-nav__title::before {
            bottom: 24px;
        }

        .thick-lineactive.size-header-small .site-nav__link .site-nav__title::before {
            bottom: 0;
            border-bottom: 2px solid var(--header-menuhover);
        }

        .thick-lineactive .site-nav__link .site-nav__title::before {
            bottom: 0;
            border-bottom: 2px solid var(--header-menuhover);
        }

        @media(max-width:1300px) {
            .site-nav__link {
                padding: 38px calc(var(--padding-menu) - 9px);
            }

            .size-header-small .site-nav__link {
                padding: 24px calc(var(--padding-menu) - 9px);
            }

            .size-header-small.logo-center-navigation-center .site-nav__link {
                padding: 16px calc(var(--padding-menu) - 9px);
            }

            .size-header-small.logo-left-navigation-underleft .site-nav__link {
                padding: 16px calc(var(--padding-menu) - 9px);
            }

            .site-nav__link .site-nav__title::before {
                right: calc(var(--padding-menu) - 9px);
            }

            .site-nav--active .site-nav__link .site-nav__title::before,
            .site-nav__link:focus .site-nav__title::before,
            .site-nav__link:hover .site-nav__title::before {
                width: calc(100% - calc(var(--padding-menu) - 9px) * 2) !important;
                left: calc(var(--padding-menu) - 9px) !important;
            }
        }

        /*.site-nav__link.dropdown-toggle .site-nav__title::after{
    font-family: icomoon !important;
    display: inline-block;
    margin-left: 4px;
    vertical-align: -1px;
    content: "\e902";
    font-size: 10px;
    line-height:1;
  }*/
        .site-nav__link .menu-label {
            top: 10px;
        }

        .site-nav__link .icon {
            position: relative;
        }

        .site-nav__link .icon {
            position: relative;
            top: -1.5px;
            width: 10px;
            height: 10px;
            fill: currentColor;
            margin-left: 3px;
        }

        .site-nav--active .site-nav__link,
        .site-nav__link:focus,
        .site-nav__link:hover {
            color: var(--header-menuhover);
        }

        .site-nav--active .site-nav__link .site-nav__title::before,
        .site-nav__link:focus .site-nav__title::before,
        .site-nav__link:hover .site-nav__title::before {
            width: calc(100% - var(--padding-menu) * 2);
            left: var(--padding-menu);
        }


        .site-nav__link:focus {
            outline: 0;
        }

        .widget-inner .nav-links {
            padding-bottom: 15px;
        }

        .widget-inner .nav-links li {
            padding: 4px 0;
        }

        .widget-inner .nav-links li a,
        .meganav__list li .meganav__link {
            position: relative;
            display: inline-block;
        }

        .widget-inner .nav-links li a::before,
        .meganav__list li .meganav__link:before {
            content: "";
            position: absolute;
            content: "";
            width: 0;
            height: 1px;
            background-color: var(--g-main);
            bottom: 0px;
            left: 0;
            visibility: hidden;
            opacity: 0;
            transition: all 0.3s var(--anim-transition);
        }

        .meganav__list li .meganav__link:before {
            bottom: 6px;
        }

        .widget-inner .nav-links li a:hover::before,
        .meganav__list li .meganav__link:hover::before {
            visibility: visible;
            opacity: 1;
            width: 100%;
        }


        .meganav {
            display: block;
            visibility: hidden;
            opacity: 0;
            background-color: var(--header-menudropbg);
            -webkit-transition: all ease .3s;
            -o-transition: all ease .3s;
            transition: all ease .3s;
            border-radius: 0;
            /*pointer-events: auto !important;*/
        }

        .meganav .product-card__price>.money {
            color: var(--header-menudroptext);
        }

        .meganav__nav {
            margin: 0 auto;
            position: relative;
            list-style: none;
        }

        #NavDrawer .meganav__nav {
            margin-bottom: 1rem;
        }

        .meganav__nav--third-level {
            padding-left: 16px;
        }

        .site-nav__item-mega .site-nav__dropdown .nav-links a {
            display: inline-block;
        }

        /*.site-nav__item-mega .site-nav__dropdown .nav-links a::before{
    border-bottom-color:var(--g-main) ;
  }*/

        .meganav__list {
            padding: 30px 0px;

        }

        @media (min-width:991px) {
            .meganav__list {
                padding: 24px;
            }
        }

        .meganav__list--third-level {
            background-color: var(--header-menudropbg);
        }

        .meganav__title {
            margin-bottom: 0;
            white-space: normal;
        }

        .meganav__link {
            display: block;
            color: var(--header-menudroptext);
            padding: 4px 0px;
            font-size: 14px;
        }

        .meganav__link:focus,
        .meganav__link:hover {
            color: var(--g-main);
        }

        .meganav__link--has-list {
            position: relative;
        }

        .meganav__link--has-list .icon {
            position: relative;
            top: -1.5px;
            width: 9px;
            height: 9px;
            fill: currentColor;
        }

        .site-nav__dropdown-container.meganav--active {
            background-color: #fff;
        }

        .site-nav__dropdown--third-level {
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
            width: 100%;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            opacity: 0;
            visibility: hidden;
            background: var(--header-menudropbg);
            height: auto;
            position: absolute;
            top: 0;
            left: calc(100% - 31px);
            -webkit-transition: all .8s cubic-bezier(.075, .82, .165, 1), opacity .4s cubic-bezier(.075, .82, .165, 1);
            -o-transition: all .8s cubic-bezier(.075, .82, .165, 1), opacity .4s cubic-bezier(.075, .82, .165, 1);
            transition: all .8s cubic-bezier(.075, .82, .165, 1), opacity .4s cubic-bezier(.075, .82, .165, 1);
        }

        .meganav--drawer {
            visibility: visible;
            overflow: hidden;
        }

        .meganav--drawer .product-card {
            margin-top: 1px;
        }

        .meganav--drawer .meganav__product {
            margin-left: -4px;
        }

        .drawer__nav-toggle--close {
            display: block;
        }

        .collapsed>.drawer__nav-toggle--close {
            display: none;
        }

        .drawer__nav-toggle--open {
            display: none;
        }

        .collapsed>.drawer__nav-toggle--open {
            display: block;
        }

        .meganav__scroller {
            white-space: nowrap;
            overflow-y: hidden;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .meganav__scroller .grid__item {
            float: none;
            display: inline-block;
            width: 100%;
            vertical-align: top;
            white-space: normal;
            padding: 0;
        }

        .drawer__nav .meganav__scroller--has-list {
            padding-left: 20px;
        }

        .drawer__search {
            position: relative;
            background-color: var(--header-menudropbg);
            padding: 10px;
            margin-bottom: 0;
        }

        .drawer__search-input {
            display: block;
            width: 100%;
            padding-left: 15px;
            background-color: #f5f5f5;
            border-radius: 4px;
        }

        .drawer__search-input[type=search] {
            padding-right: 60px;
        }

        .rtl .drawer__search-input[type=search] {
            padding-left: 60px;
            padding-right: inherit;
        }

        .drawer__search-input::-webkit-search-decoration {
            display: none;
        }

        .drawer__search-submit {
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            padding: 0 20px;
        }

        .rtl .drawer__search-submit {
            left: 0;
            right: auto;
        }

        .drawer__search-submit .icon {
            width: 25px;
            height: 25px;
            fill: #262626;
        }

        .drawer__nav {
            list-style: none;
            text-align: left;
        }

        .rtl .drawer__nav {
            text-align: right;
        }

        .drawer__nav--template-index {
            position: relative;
            margin-bottom: -10px;
            background-color: #fff;
        }

        .drawer__nav--margin {
            margin-bottom: 30px;
        }

        .drawer__nav-item {
            display: block;

        }

        .drawer__nav-item:not(:last-child) {
            border-bottom: 1px solid rgb(var(--header-border-color));
        }

        .meganav__nav .drawer__nav-item {
            border-bottom: 0;
        }

        .meganav__nav--third-level {
            border-left: 1px solid rgb(var(--header-border-color));
        }

        .drawer__nav-link {
            display: block;
        }

        .drawer__nav-item.drawer-nav__item--secondary {
            border-top: none !important;
        }

        .drawer__nav-item.drawer-nav__item--secondary .drawer__nav-link--top-level {
            font-size: 14px;
            padding: 12px 8px;
            color: var(--header-menudroptext);
        }

        .drawer__nav-link--top-level {
            padding: 14px 8px;
            color: var(--header-menucolor);
            font-weight: var(--menu_font_weight);
            font-size: var(--menu_font_size);
            font-family: var(--menu_font_family);
            text-transform: var(--menu_type_text);
            letter-spacing: var(--menu_spacing);
        }

        .menu-mobile-footer .drawer__nav-link {
            text-transform: inherit;
        }

        .menu-mobile-footer .drawer__nav-link svg {
            fill: none;
        }



        .drawer__nav-has-sublist {
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
            width: 100%;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            font-size: 14px;
        }

        .drawer__nav-toggle-btn {
            padding: 10px;
            color: var(--header-menudroptext);
            line-height: 1;
            margin-left: auto;
        }

        .drawer__nav-toggle-btn i {
            width: 12px;
            height: 12px;
            fill: currentColor;
            font-size: 12px;
            margin: 0;
            color: var(--header-text);
        }

        .drawer__nav-toggle-btn:focus,
        .drawer__nav-toggle-btn:hover {
            opacity: .6;
        }

        .drawer__nav-toggle-btn--small {
            color: var(--header-menudroptext);
            line-height: 0;
            margin-left: auto;
        }

        .drawer__nav-toggle-btn--small .icon {
            width: 12px;
            height: 12px;
        }

        #NavDrawer {
            background: var(--header-menudropbg);
        }

        #NavDrawer .js-drawer-close .close {
            right: 28px;
        }

        .search-results {
            top: 100%;
            left: 0;
            z-index: 9999;
            background: #fff;
            width: 100%;
            display: none;
            margin-top: 20px;
        }

        .rtl .search-results {
            right: 0;
            left: auto;
        }

        .search-results.active {
            display: block;
        }

        .ajax-search-item {
            font-size: 14px;
            margin-bottom: 15px;
        }

        .ajax-search-item:last-child {
            margin-bottom: 0;
        }

        .ajax-search-item .d-inline-flex {
            margin-bottom: 20px;
        }

        .ajax-search-item .d-inline-flex:last-child {
            margin-bottom: 0;
        }

        .ajax-search-item .image {
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
            -ms-flex-align: center;
            -moz-align-items: center;
            -ms-align-items: center;
            -o-align-items: center;
            -webkit-box-align: center;
            align-items: center;
            -moz-justify-content: center;
            -ms-justify-content: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 80px;
        }

        .ajax-search-item .meta {
            padding: 0px 5px 5px 16px;
            width: calc(100% - 80px);
        }

        .ajax-search-item .title {
            font-weight: 400;
            color: var(--g-color-heading);
            margin-bottom: 5px;
        }

        .site-header__compare .icon,
        .site-header__wishlist .icon {
            margin-right: 3px;
        }

        .js-wishlist-link svg {
            width: 24px;
            height: 24px;
            fill: none;
        }

        .js-wishlist-link svg.svg-star {
            fill: currentColor;
        }


        .js-open-compare svg {
            width: 18px;
            height: 18px;
        }

        .js-open-compare .js-compare-count {
            height: 16px;
            width: 16px;
            border-radius: 50%;
            text-align: center;
            font-size: 10px;
            color: white;
            background: var(--g-color-heading);
            display: flex;
            justify-content: center;
            align-items: center;
            letter-spacing: 0;
        }

        .js-wishlist-link .js-wishlist-indicator {
            position: absolute;
            bottom: 7px;
            right: -12px;
            font-size: 10px;
            font-weight: 400;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            text-align: center;
            color: #fff;
            background: var(--header-color-indicator);
            display: inline-block;
            border: 2px solid var(--header-background);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .toggle-menu-mobile button {
            padding-left: 0;
        }

        .toggle-menu-mobile .icon {
            fill: none;
            stroke: currentColor;
            width: 22px;
            height: 22px;
        }

        .toggle-menu-mobile .modal__toggle-search-mobile {
            display: flex;
            padding: 15px 12px 15px 0;
        }

        .toggle-menu-mobile .modal__toggle-search-mobile svg {
            width: 24px;
            height: 24px;
            fill: none;
        }


        .js-cart-total {
            font-weight: 600;
        }

        .js-btn-viewmore {
            margin-top: 15px;
            display: block;
        }

        .mini-cart-content {
            color: rgba(var(--color-body-text-rgb), 0.7);
            width: 500px;
            padding: 24px;
            background: #fff;
            position: absolute;
            top: 55px;
            right: 0;
            z-index: 999;
            -webkit-transition: all .4s cubic-bezier(0.19, 1, 0.22, 1);
            -o-transition: all .4s cubic-bezier(0.19, 1, 0.22, 1);
            transition: all .4s cubic-bezier(0.19, 1, 0.22, 1);
            opacity: 0;
            visibility: hidden;
        }

        @media (max-width:500px) {
            .mini-cart-content {
                width: 360px;
            }
        }

        .template-cart .mini-cart-content {
            display: none !important;
        }

        .mini-cart-content .alert {
            margin: 0;
        }

        .js-mini-cart.active .mini-cart-content {
            opacity: 1;
            visibility: visible;
        }

        .cardraw .mini-cart-content {
            opacity: 1;
            visibility: visible;
            border-radius: 0px;
            position: fixed;
            top: 0;
            right: 0;
            z-index: 999;
            height: 100%;
            transform: translateX(100%);
        }

        .cardraw.active .mini-cart-content {
            transform: translateX(0);
        }

        .cardraw .overlaycart {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 9;
            opacity: 0;
            visibility: hidden;
        }

        .cardraw.active .overlaycart {
            opacity: 1;
            visibility: visible;
        }

        .site-header__link.site-header__cart .mini-cart-content {
            font-size: var(--g-font-size);
            font-family: var(--g-font-2);
            line-height: var(--g-body-lineheight);
            font-weight: var(--g-font-weight-body);
            letter-spacing: 0;
            text-transform: none;
        }

        .mini-cart-meta {
            -moz-flex: 0 0 calc(100% - 85px);
            -ms-flex: 0 0 calc(100% - 85px);
            -webkit-box-flex: 0 0 calc(100% - 85px);
            flex: 0 0 calc(100% - 85px);
            font-size: 14px;
            text-align: left;
            line-height: 20px;
            padding-right: 10px;
        }

        .mini-cart-meta p {
            font-size: 12px;
            line-height: 20px;
            margin-bottom: 5px;
        }

        .mini-cart-meta a {
            color: var(--color-body-text);
        }

        .mini-cart-item {
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
            width: 100%;

        }

        .mini-cart-item:not(:first-child) {
            margin-top: 16px;
        }

        .mini-cart-btns .btn,
        .mini-cart-btns .btn--secondary,
        .mini-cart-btns .shopify-payment-button .shopify-payment-button__button--unbranded,
        .mini-cart-btns .spr-summary-actions-newreview,
        .shopify-payment-button .mini-cart-btns .shopify-payment-button__button--unbranded {
            margin-bottom: 5px;
        }

        .mini-cart-taxes {
            font-size: 80%;
            margin: 8px 0;
            text-align: left;
        }

        @media (min-width:480px) {
            .template-index .site-header--transparent {
                background: 0 0;
                position: absolute;
                top: 0;
                width: 100%;
                z-index: 9;
            }
        }

        @media (max-width:991px) {

            .logout-text,
            .register-text,
            .site-header__compare,
            .wishlist-text {
                display: none;
            }
        }


        @media (max-width:480px) {
            .site-header__search.active {
                background: #fff;
            }
        }

        @media (min-width:992px) {
            .js-mini-cart:hover .mini-cart-content {
                opacity: 1;
                visibility: visible;
            }
        }

        .mini-cart-safe-checkout {
            margin-top: 10px;
        }

        .modal-dialog--login {
            max-width: 500px
        }

        .modal-dialog--login .content-block {
            padding: 0
        }

        .site-header--sticky.active {
            box-shadow: 0 0px 0px 1px rgb(0 0 0 / 10%);
            background: var(--header-background);
            transition: all ease .3s;
        }

        /*.header-sticky-top{
    transform: translateY(-100%);
  }*/
        #topbar {
            background: var(--header-topbarbg);
            border-bottom: 1px solid var(--header-topborderbg);
            font-size: var(--g-font-size);
            padding: 10px 0;
        }

        #topbar .link {
            color: rgba(var(--color-body-text-rgb), 1);
            text-decoration-color: rgba(var(--color-body-text-rgb), 1);
        }

        #topbar .col-left {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            color: var(--header-text-top);
        }

        #topbar .site-header__link {
            padding: 0;
            color: var(--header-text-top);
        }

        #topbar .site-header__link:hover {
            color: var(--header-linkhover);
        }

        #topbar .header--acount {
            color: var(--header-text-top);
        }

        #topbar .social-icons li a {
            color: var(--header-text-top);
        }

        #topbar .social-icons li a:hover {
            color: var(--header-linkhover);
        }

        #topbar .social-icons li a span {
            display: none;
        }

        #topbar .list-inline-item:not(:last-child) {
            margin-right: 1.5rem;
        }

        #topbar .col-right {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        #topbar .col-right .topbar-block {
            padding-right: 32px;
        }

        #topbar .col-right .topbar-block:last-child {
            padding-right: 0px;
        }

        .site-nav .mega-col {
            white-space: normal
        }

        .site-header__cart .mini-cart-content .icon {
            margin: 0 3px;
            width: 18px
        }

        .site-header .menu-label {
            top: 28px;
            letter-spacing: 0;
        }

        .site-header.size-header-small .menu-label {
            top: 10px;
        }

        .site-nav__item .meganav li a>i {
            font-size: 12px;
            line-height: 20px;
            position: absolute;
            right: 0;
        }

        #topbar [class^=icon-] {
            font-size: 14px;
        }

        #topbar .icon-tiktok {
            width: 14px;
            height: 14px;
        }

        #dismiss {
            width: 35px;
            height: 35px;
            position: absolute;
            top: 20px;
            right: 10px;
            line-height: 35px;
            text-align: center;
            z-index: 10;
        }

        #dismiss i {
            font-size: 14px;
        }

        /*.site-header--full .header-bottom{
    position: relative;
  }*/
        .products_menu .product-card__info {
            margin-bottom: 0;
        }

        .collection_menu .hv-image-saturate img {
            height: 100%;
            object-fit: cover;
        }

        .collection_menu .hv-image-saturate.square {
            padding-top: 100% !important;
        }

        .collection_menu .hv-image-saturate.landscape {
            padding-top: 75% !important;
        }

        .collection_menu .hv-image-saturate.portrait {
            padding-top: 130% !important;
        }

        .collection_menu .hv-image-saturate.wide {
            padding-top: 60% !important;
        }

        /*promo*/
        .promotion_menu .image-content__image {
            object-fit: cover;
            height: 100%;
        }

        .promotion_menu .promotion_menu--container::before {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            content: " ";
            z-index: 1;
            background: linear-gradient(0deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0) 70%);
        }

        .promotion_menu--content {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 2;
            padding: 32px;
        }

        .promotion_menu--content * {
            --color-body-text-rgb: 255, 255, 255;
            --g-color-heading: white;
            --g-font-color-subtop: white;
        }

        .promotion_menu--content .link {
            color: rgba(var(--color-body-text-rgb), 1);
        }

        .promotion_menu--content p {
            color: rgba(var(--color-body-text-rgb), 1);
        }

        .promotion_menu--link {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .promotion_menu--txt {
            z-index: 2;
        }

        .promotion_menu--container:hover .image-content__image {
            transform: scale(1.05);
        }

        .promotionclassic__image {
            position: relative;
            overflow: hidden;
        }

        .promotionclassic__image img {
            height: 100%;
            object-fit: cover;
        }

        .promotionclassic__image.square {
            padding-top: 100% !important;
        }

        .promotionclassic__image.landscape {
            padding-top: 75% !important;
        }

        .promotionclassic__image.portrait {
            padding-top: 130% !important;
        }

        .promotionclassic__image.wide {
            padding-top: 60% !important;
        }

        @media (max-width:576px) {
            .site-header--full .header-bottom {
                padding: 10px 0;
            }
        }

        .site-header--full .header-bottom .container-fluid,
        .site-header--full .header-bottom .nav-bar,
        .site-header--full .header-bottom .col,
        .col-menu {
            position: static;
        }

        .site-header--full .site-nav__item-mega .site-nav__dropdown {
            width: 100%;
        }

        /*Header White*/
        .site-header--transparent.site-header-white:hover {
            background: var(--header-background);
        }

        @media (min-width: 991px) {
            .site-header-white.index-header:not(:hover):not(.active) {
                background: transparent;
            }

            .site-header-white.index-header:not(:hover):not(.active) .header-bottom .site-nav__link,
            .site-header-white.index-header:not(:hover):not(.active) .header-bottom .site-header__link,
            .site-header-white.index-header:not(:hover):not(.active) .header-bottom .header--acount,
            .site-header-white.index-header:not(:hover):not(.active) .header-bottom .pre-currencies {
                color: #fff;
            }

            .site-header-white.index-header:not(:hover):not(.active) #HeaderCountryForm .localization-form__select,
            .site-header-white.index-header:not(:hover):not(.active) #HeaderLanguageForm .localization-form__select {
                --header-linkcolor: white;
            }

            .site-header-white.index-header:not(:hover):not(.active) .header-bottom .block_currencies .dropdown-toggle:after {
                border-top-color: #fff;
            }

            .site-header-white.index-header:not(:hover):not(.active) .header-bottom .col-logo .site-header__logo .logo-dark {
                display: none;
            }

            .site-header-white.index-header:not(:hover):not(.active) .header-bottom .col-logo .site-header__logo .logo-white {
                display: block !important;
            }

            .template-index .site-header--transparent .site-header__cart-indicator,
            .template-index .site-header--transparent .js-wishlist-link .js-wishlist-indicator {
                border-color: transparent;
            }

            .site-header-white.index-header:not(:hover):not(.active) .site-nav__link .site-nav__title::before {
                border-bottom-color: #fff;
            }

            .site-header-white.index-header:not(:hover):not(.active) .header-bottom .site-header__cart-indicator,
            .site-header-white.index-header:not(:hover):not(.active) .header-bottom .js-wishlist-link .js-wishlist-indicator {
                --header-background: transparent;
                background-color: white;
                color: var(--header-linkcolor);

            }
        }


        /*aos*/
        [data-aos][data-aos][data-aos-duration="50"],
        body[data-aos-duration="50"] [data-aos] {
            transition-duration: 50ms
        }

        [data-aos][data-aos][data-aos-delay="50"],
        body[data-aos-delay="50"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="50"].aos-animate,
        body[data-aos-delay="50"] [data-aos].aos-animate {
            transition-delay: 50ms
        }

        [data-aos][data-aos][data-aos-duration="100"],
        body[data-aos-duration="100"] [data-aos] {
            transition-duration: .1s
        }

        [data-aos][data-aos][data-aos-delay="100"],
        body[data-aos-delay="100"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="100"].aos-animate,
        body[data-aos-delay="100"] [data-aos].aos-animate {
            transition-delay: .1s
        }

        [data-aos][data-aos][data-aos-duration="150"],
        body[data-aos-duration="150"] [data-aos] {
            transition-duration: .15s
        }

        [data-aos][data-aos][data-aos-delay="150"],
        body[data-aos-delay="150"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="150"].aos-animate,
        body[data-aos-delay="150"] [data-aos].aos-animate {
            transition-delay: .15s
        }

        [data-aos][data-aos][data-aos-duration="200"],
        body[data-aos-duration="200"] [data-aos] {
            transition-duration: .2s
        }

        [data-aos][data-aos][data-aos-delay="200"],
        body[data-aos-delay="200"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="200"].aos-animate,
        body[data-aos-delay="200"] [data-aos].aos-animate {
            transition-delay: .2s
        }

        [data-aos][data-aos][data-aos-duration="250"],
        body[data-aos-duration="250"] [data-aos] {
            transition-duration: .25s
        }

        [data-aos][data-aos][data-aos-delay="250"],
        body[data-aos-delay="250"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="250"].aos-animate,
        body[data-aos-delay="250"] [data-aos].aos-animate {
            transition-delay: .25s
        }

        [data-aos][data-aos][data-aos-duration="300"],
        body[data-aos-duration="300"] [data-aos] {
            transition-duration: .3s
        }

        [data-aos][data-aos][data-aos-delay="300"],
        body[data-aos-delay="300"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="300"].aos-animate,
        body[data-aos-delay="300"] [data-aos].aos-animate {
            transition-delay: .3s
        }

        [data-aos][data-aos][data-aos-duration="350"],
        body[data-aos-duration="350"] [data-aos] {
            transition-duration: .35s
        }

        [data-aos][data-aos][data-aos-delay="350"],
        body[data-aos-delay="350"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="350"].aos-animate,
        body[data-aos-delay="350"] [data-aos].aos-animate {
            transition-delay: .35s
        }

        [data-aos][data-aos][data-aos-duration="400"],
        body[data-aos-duration="400"] [data-aos] {
            transition-duration: .4s
        }

        [data-aos][data-aos][data-aos-delay="400"],
        body[data-aos-delay="400"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="400"].aos-animate,
        body[data-aos-delay="400"] [data-aos].aos-animate {
            transition-delay: .4s
        }

        [data-aos][data-aos][data-aos-duration="450"],
        body[data-aos-duration="450"] [data-aos] {
            transition-duration: .45s
        }

        [data-aos][data-aos][data-aos-delay="450"],
        body[data-aos-delay="450"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="450"].aos-animate,
        body[data-aos-delay="450"] [data-aos].aos-animate {
            transition-delay: .45s
        }

        [data-aos][data-aos][data-aos-duration="500"],
        body[data-aos-duration="500"] [data-aos] {
            transition-duration: .5s
        }

        [data-aos][data-aos][data-aos-delay="500"],
        body[data-aos-delay="500"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="500"].aos-animate,
        body[data-aos-delay="500"] [data-aos].aos-animate {
            transition-delay: .5s
        }

        [data-aos][data-aos][data-aos-duration="550"],
        body[data-aos-duration="550"] [data-aos] {
            transition-duration: .55s
        }

        [data-aos][data-aos][data-aos-delay="550"],
        body[data-aos-delay="550"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="550"].aos-animate,
        body[data-aos-delay="550"] [data-aos].aos-animate {
            transition-delay: .55s
        }

        [data-aos][data-aos][data-aos-duration="600"],
        body[data-aos-duration="600"] [data-aos] {
            transition-duration: .6s
        }

        [data-aos][data-aos][data-aos-delay="600"],
        body[data-aos-delay="600"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="600"].aos-animate,
        body[data-aos-delay="600"] [data-aos].aos-animate {
            transition-delay: .6s
        }

        [data-aos][data-aos][data-aos-duration="650"],
        body[data-aos-duration="650"] [data-aos] {
            transition-duration: .65s
        }

        [data-aos][data-aos][data-aos-delay="650"],
        body[data-aos-delay="650"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="650"].aos-animate,
        body[data-aos-delay="650"] [data-aos].aos-animate {
            transition-delay: .65s
        }

        [data-aos][data-aos][data-aos-duration="700"],
        body[data-aos-duration="700"] [data-aos] {
            transition-duration: .7s
        }

        [data-aos][data-aos][data-aos-delay="700"],
        body[data-aos-delay="700"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="700"].aos-animate,
        body[data-aos-delay="700"] [data-aos].aos-animate {
            transition-delay: .7s
        }

        [data-aos][data-aos][data-aos-duration="750"],
        body[data-aos-duration="750"] [data-aos] {
            transition-duration: .75s
        }

        [data-aos][data-aos][data-aos-delay="750"],
        body[data-aos-delay="750"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="750"].aos-animate,
        body[data-aos-delay="750"] [data-aos].aos-animate {
            transition-delay: .75s
        }

        [data-aos][data-aos][data-aos-duration="800"],
        body[data-aos-duration="800"] [data-aos] {
            transition-duration: .8s
        }

        [data-aos][data-aos][data-aos-delay="800"],
        body[data-aos-delay="800"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="800"].aos-animate,
        body[data-aos-delay="800"] [data-aos].aos-animate {
            transition-delay: .8s
        }

        [data-aos][data-aos][data-aos-duration="850"],
        body[data-aos-duration="850"] [data-aos] {
            transition-duration: .85s
        }

        [data-aos][data-aos][data-aos-delay="850"],
        body[data-aos-delay="850"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="850"].aos-animate,
        body[data-aos-delay="850"] [data-aos].aos-animate {
            transition-delay: .85s
        }

        [data-aos][data-aos][data-aos-duration="900"],
        body[data-aos-duration="900"] [data-aos] {
            transition-duration: .9s
        }

        [data-aos][data-aos][data-aos-delay="900"],
        body[data-aos-delay="900"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="900"].aos-animate,
        body[data-aos-delay="900"] [data-aos].aos-animate {
            transition-delay: .9s
        }

        [data-aos][data-aos][data-aos-duration="950"],
        body[data-aos-duration="950"] [data-aos] {
            transition-duration: .95s
        }

        [data-aos][data-aos][data-aos-delay="950"],
        body[data-aos-delay="950"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="950"].aos-animate,
        body[data-aos-delay="950"] [data-aos].aos-animate {
            transition-delay: .95s
        }

        [data-aos][data-aos][data-aos-duration="1000"],
        body[data-aos-duration="1000"] [data-aos] {
            transition-duration: 1s
        }

        [data-aos][data-aos][data-aos-delay="1000"],
        body[data-aos-delay="1000"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="1000"].aos-animate,
        body[data-aos-delay="1000"] [data-aos].aos-animate {
            transition-delay: 1s
        }

        [data-aos][data-aos][data-aos-duration="1050"],
        body[data-aos-duration="1050"] [data-aos] {
            transition-duration: 1.05s
        }

        [data-aos][data-aos][data-aos-delay="1050"],
        body[data-aos-delay="1050"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="1050"].aos-animate,
        body[data-aos-delay="1050"] [data-aos].aos-animate {
            transition-delay: 1.05s
        }

        [data-aos][data-aos][data-aos-duration="1100"],
        body[data-aos-duration="1100"] [data-aos] {
            transition-duration: 1.1s
        }

        [data-aos][data-aos][data-aos-delay="1100"],
        body[data-aos-delay="1100"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="1100"].aos-animate,
        body[data-aos-delay="1100"] [data-aos].aos-animate {
            transition-delay: 1.1s
        }

        [data-aos][data-aos][data-aos-duration="1150"],
        body[data-aos-duration="1150"] [data-aos] {
            transition-duration: 1.15s
        }

        [data-aos][data-aos][data-aos-delay="1150"],
        body[data-aos-delay="1150"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="1150"].aos-animate,
        body[data-aos-delay="1150"] [data-aos].aos-animate {
            transition-delay: 1.15s
        }

        [data-aos][data-aos][data-aos-duration="1200"],
        body[data-aos-duration="1200"] [data-aos] {
            transition-duration: 1.2s
        }

        [data-aos][data-aos][data-aos-delay="1200"],
        body[data-aos-delay="1200"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="1200"].aos-animate,
        body[data-aos-delay="1200"] [data-aos].aos-animate {
            transition-delay: 1.2s
        }

        [data-aos][data-aos][data-aos-duration="1250"],
        body[data-aos-duration="1250"] [data-aos] {
            transition-duration: 1.25s
        }

        [data-aos][data-aos][data-aos-delay="1250"],
        body[data-aos-delay="1250"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="1250"].aos-animate,
        body[data-aos-delay="1250"] [data-aos].aos-animate {
            transition-delay: 1.25s
        }

        [data-aos][data-aos][data-aos-duration="1300"],
        body[data-aos-duration="1300"] [data-aos] {
            transition-duration: 1.3s
        }

        [data-aos][data-aos][data-aos-delay="1300"],
        body[data-aos-delay="1300"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="1300"].aos-animate,
        body[data-aos-delay="1300"] [data-aos].aos-animate {
            transition-delay: 1.3s
        }

        [data-aos][data-aos][data-aos-duration="1350"],
        body[data-aos-duration="1350"] [data-aos] {
            transition-duration: 1.35s
        }

        [data-aos][data-aos][data-aos-delay="1350"],
        body[data-aos-delay="1350"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="1350"].aos-animate,
        body[data-aos-delay="1350"] [data-aos].aos-animate {
            transition-delay: 1.35s
        }

        [data-aos][data-aos][data-aos-duration="1400"],
        body[data-aos-duration="1400"] [data-aos] {
            transition-duration: 1.4s
        }

        [data-aos][data-aos][data-aos-delay="1400"],
        body[data-aos-delay="1400"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="1400"].aos-animate,
        body[data-aos-delay="1400"] [data-aos].aos-animate {
            transition-delay: 1.4s
        }

        [data-aos][data-aos][data-aos-duration="1450"],
        body[data-aos-duration="1450"] [data-aos] {
            transition-duration: 1.45s
        }

        [data-aos][data-aos][data-aos-delay="1450"],
        body[data-aos-delay="1450"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="1450"].aos-animate,
        body[data-aos-delay="1450"] [data-aos].aos-animate {
            transition-delay: 1.45s
        }

        [data-aos][data-aos][data-aos-duration="1500"],
        body[data-aos-duration="1500"] [data-aos] {
            transition-duration: 1.5s
        }

        [data-aos][data-aos][data-aos-delay="1500"],
        body[data-aos-delay="1500"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="1500"].aos-animate,
        body[data-aos-delay="1500"] [data-aos].aos-animate {
            transition-delay: 1.5s
        }

        [data-aos][data-aos][data-aos-duration="1550"],
        body[data-aos-duration="1550"] [data-aos] {
            transition-duration: 1.55s
        }

        [data-aos][data-aos][data-aos-delay="1550"],
        body[data-aos-delay="1550"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="1550"].aos-animate,
        body[data-aos-delay="1550"] [data-aos].aos-animate {
            transition-delay: 1.55s
        }

        [data-aos][data-aos][data-aos-duration="1600"],
        body[data-aos-duration="1600"] [data-aos] {
            transition-duration: 1.6s
        }

        [data-aos][data-aos][data-aos-delay="1600"],
        body[data-aos-delay="1600"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="1600"].aos-animate,
        body[data-aos-delay="1600"] [data-aos].aos-animate {
            transition-delay: 1.6s
        }

        [data-aos][data-aos][data-aos-duration="1650"],
        body[data-aos-duration="1650"] [data-aos] {
            transition-duration: 1.65s
        }

        [data-aos][data-aos][data-aos-delay="1650"],
        body[data-aos-delay="1650"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="1650"].aos-animate,
        body[data-aos-delay="1650"] [data-aos].aos-animate {
            transition-delay: 1.65s
        }

        [data-aos][data-aos][data-aos-duration="1700"],
        body[data-aos-duration="1700"] [data-aos] {
            transition-duration: 1.7s
        }

        [data-aos][data-aos][data-aos-delay="1700"],
        body[data-aos-delay="1700"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="1700"].aos-animate,
        body[data-aos-delay="1700"] [data-aos].aos-animate {
            transition-delay: 1.7s
        }

        [data-aos][data-aos][data-aos-duration="1750"],
        body[data-aos-duration="1750"] [data-aos] {
            transition-duration: 1.75s
        }

        [data-aos][data-aos][data-aos-delay="1750"],
        body[data-aos-delay="1750"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="1750"].aos-animate,
        body[data-aos-delay="1750"] [data-aos].aos-animate {
            transition-delay: 1.75s
        }

        [data-aos][data-aos][data-aos-duration="1800"],
        body[data-aos-duration="1800"] [data-aos] {
            transition-duration: 1.8s
        }

        [data-aos][data-aos][data-aos-delay="1800"],
        body[data-aos-delay="1800"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="1800"].aos-animate,
        body[data-aos-delay="1800"] [data-aos].aos-animate {
            transition-delay: 1.8s
        }

        [data-aos][data-aos][data-aos-duration="1850"],
        body[data-aos-duration="1850"] [data-aos] {
            transition-duration: 1.85s
        }

        [data-aos][data-aos][data-aos-delay="1850"],
        body[data-aos-delay="1850"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="1850"].aos-animate,
        body[data-aos-delay="1850"] [data-aos].aos-animate {
            transition-delay: 1.85s
        }

        [data-aos][data-aos][data-aos-duration="1900"],
        body[data-aos-duration="1900"] [data-aos] {
            transition-duration: 1.9s
        }

        [data-aos][data-aos][data-aos-delay="1900"],
        body[data-aos-delay="1900"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="1900"].aos-animate,
        body[data-aos-delay="1900"] [data-aos].aos-animate {
            transition-delay: 1.9s
        }

        [data-aos][data-aos][data-aos-duration="1950"],
        body[data-aos-duration="1950"] [data-aos] {
            transition-duration: 1.95s
        }

        [data-aos][data-aos][data-aos-delay="1950"],
        body[data-aos-delay="1950"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="1950"].aos-animate,
        body[data-aos-delay="1950"] [data-aos].aos-animate {
            transition-delay: 1.95s
        }

        [data-aos][data-aos][data-aos-duration="2000"],
        body[data-aos-duration="2000"] [data-aos] {
            transition-duration: 2s
        }

        [data-aos][data-aos][data-aos-delay="2000"],
        body[data-aos-delay="2000"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="2000"].aos-animate,
        body[data-aos-delay="2000"] [data-aos].aos-animate {
            transition-delay: 2s
        }

        [data-aos][data-aos][data-aos-duration="2050"],
        body[data-aos-duration="2050"] [data-aos] {
            transition-duration: 2.05s
        }

        [data-aos][data-aos][data-aos-delay="2050"],
        body[data-aos-delay="2050"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="2050"].aos-animate,
        body[data-aos-delay="2050"] [data-aos].aos-animate {
            transition-delay: 2.05s
        }

        [data-aos][data-aos][data-aos-duration="2100"],
        body[data-aos-duration="2100"] [data-aos] {
            transition-duration: 2.1s
        }

        [data-aos][data-aos][data-aos-delay="2100"],
        body[data-aos-delay="2100"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="2100"].aos-animate,
        body[data-aos-delay="2100"] [data-aos].aos-animate {
            transition-delay: 2.1s
        }

        [data-aos][data-aos][data-aos-duration="2150"],
        body[data-aos-duration="2150"] [data-aos] {
            transition-duration: 2.15s
        }

        [data-aos][data-aos][data-aos-delay="2150"],
        body[data-aos-delay="2150"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="2150"].aos-animate,
        body[data-aos-delay="2150"] [data-aos].aos-animate {
            transition-delay: 2.15s
        }

        [data-aos][data-aos][data-aos-duration="2200"],
        body[data-aos-duration="2200"] [data-aos] {
            transition-duration: 2.2s
        }

        [data-aos][data-aos][data-aos-delay="2200"],
        body[data-aos-delay="2200"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="2200"].aos-animate,
        body[data-aos-delay="2200"] [data-aos].aos-animate {
            transition-delay: 2.2s
        }

        [data-aos][data-aos][data-aos-duration="2250"],
        body[data-aos-duration="2250"] [data-aos] {
            transition-duration: 2.25s
        }

        [data-aos][data-aos][data-aos-delay="2250"],
        body[data-aos-delay="2250"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="2250"].aos-animate,
        body[data-aos-delay="2250"] [data-aos].aos-animate {
            transition-delay: 2.25s
        }

        [data-aos][data-aos][data-aos-duration="2300"],
        body[data-aos-duration="2300"] [data-aos] {
            transition-duration: 2.3s
        }

        [data-aos][data-aos][data-aos-delay="2300"],
        body[data-aos-delay="2300"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="2300"].aos-animate,
        body[data-aos-delay="2300"] [data-aos].aos-animate {
            transition-delay: 2.3s
        }

        [data-aos][data-aos][data-aos-duration="2350"],
        body[data-aos-duration="2350"] [data-aos] {
            transition-duration: 2.35s
        }

        [data-aos][data-aos][data-aos-delay="2350"],
        body[data-aos-delay="2350"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="2350"].aos-animate,
        body[data-aos-delay="2350"] [data-aos].aos-animate {
            transition-delay: 2.35s
        }

        [data-aos][data-aos][data-aos-duration="2400"],
        body[data-aos-duration="2400"] [data-aos] {
            transition-duration: 2.4s
        }

        [data-aos][data-aos][data-aos-delay="2400"],
        body[data-aos-delay="2400"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="2400"].aos-animate,
        body[data-aos-delay="2400"] [data-aos].aos-animate {
            transition-delay: 2.4s
        }

        [data-aos][data-aos][data-aos-duration="2450"],
        body[data-aos-duration="2450"] [data-aos] {
            transition-duration: 2.45s
        }

        [data-aos][data-aos][data-aos-delay="2450"],
        body[data-aos-delay="2450"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="2450"].aos-animate,
        body[data-aos-delay="2450"] [data-aos].aos-animate {
            transition-delay: 2.45s
        }

        [data-aos][data-aos][data-aos-duration="2500"],
        body[data-aos-duration="2500"] [data-aos] {
            transition-duration: 2.5s
        }

        [data-aos][data-aos][data-aos-delay="2500"],
        body[data-aos-delay="2500"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="2500"].aos-animate,
        body[data-aos-delay="2500"] [data-aos].aos-animate {
            transition-delay: 2.5s
        }

        [data-aos][data-aos][data-aos-duration="2550"],
        body[data-aos-duration="2550"] [data-aos] {
            transition-duration: 2.55s
        }

        [data-aos][data-aos][data-aos-delay="2550"],
        body[data-aos-delay="2550"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="2550"].aos-animate,
        body[data-aos-delay="2550"] [data-aos].aos-animate {
            transition-delay: 2.55s
        }

        [data-aos][data-aos][data-aos-duration="2600"],
        body[data-aos-duration="2600"] [data-aos] {
            transition-duration: 2.6s
        }

        [data-aos][data-aos][data-aos-delay="2600"],
        body[data-aos-delay="2600"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="2600"].aos-animate,
        body[data-aos-delay="2600"] [data-aos].aos-animate {
            transition-delay: 2.6s
        }

        [data-aos][data-aos][data-aos-duration="2650"],
        body[data-aos-duration="2650"] [data-aos] {
            transition-duration: 2.65s
        }

        [data-aos][data-aos][data-aos-delay="2650"],
        body[data-aos-delay="2650"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="2650"].aos-animate,
        body[data-aos-delay="2650"] [data-aos].aos-animate {
            transition-delay: 2.65s
        }

        [data-aos][data-aos][data-aos-duration="2700"],
        body[data-aos-duration="2700"] [data-aos] {
            transition-duration: 2.7s
        }

        [data-aos][data-aos][data-aos-delay="2700"],
        body[data-aos-delay="2700"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="2700"].aos-animate,
        body[data-aos-delay="2700"] [data-aos].aos-animate {
            transition-delay: 2.7s
        }

        [data-aos][data-aos][data-aos-duration="2750"],
        body[data-aos-duration="2750"] [data-aos] {
            transition-duration: 2.75s
        }

        [data-aos][data-aos][data-aos-delay="2750"],
        body[data-aos-delay="2750"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="2750"].aos-animate,
        body[data-aos-delay="2750"] [data-aos].aos-animate {
            transition-delay: 2.75s
        }

        [data-aos][data-aos][data-aos-duration="2800"],
        body[data-aos-duration="2800"] [data-aos] {
            transition-duration: 2.8s
        }

        [data-aos][data-aos][data-aos-delay="2800"],
        body[data-aos-delay="2800"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="2800"].aos-animate,
        body[data-aos-delay="2800"] [data-aos].aos-animate {
            transition-delay: 2.8s
        }

        [data-aos][data-aos][data-aos-duration="2850"],
        body[data-aos-duration="2850"] [data-aos] {
            transition-duration: 2.85s
        }

        [data-aos][data-aos][data-aos-delay="2850"],
        body[data-aos-delay="2850"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="2850"].aos-animate,
        body[data-aos-delay="2850"] [data-aos].aos-animate {
            transition-delay: 2.85s
        }

        [data-aos][data-aos][data-aos-duration="2900"],
        body[data-aos-duration="2900"] [data-aos] {
            transition-duration: 2.9s
        }

        [data-aos][data-aos][data-aos-delay="2900"],
        body[data-aos-delay="2900"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="2900"].aos-animate,
        body[data-aos-delay="2900"] [data-aos].aos-animate {
            transition-delay: 2.9s
        }

        [data-aos][data-aos][data-aos-duration="2950"],
        body[data-aos-duration="2950"] [data-aos] {
            transition-duration: 2.95s
        }

        [data-aos][data-aos][data-aos-delay="2950"],
        body[data-aos-delay="2950"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="2950"].aos-animate,
        body[data-aos-delay="2950"] [data-aos].aos-animate {
            transition-delay: 2.95s
        }

        [data-aos][data-aos][data-aos-duration="3000"],
        body[data-aos-duration="3000"] [data-aos] {
            transition-duration: 3s
        }

        [data-aos][data-aos][data-aos-delay="3000"],
        body[data-aos-delay="3000"] [data-aos] {
            transition-delay: 0s
        }

        [data-aos][data-aos][data-aos-delay="3000"].aos-animate,
        body[data-aos-delay="3000"] [data-aos].aos-animate {
            transition-delay: 3s
        }

        [data-aos] {
            pointer-events: none
        }

        [data-aos].aos-animate {
            pointer-events: auto
        }

        [data-aos][data-aos][data-aos-easing=linear],
        body[data-aos-easing=linear] [data-aos] {
            transition-timing-function: cubic-bezier(.25, .25, .75, .75)
        }

        [data-aos][data-aos][data-aos-easing=ease],
        body[data-aos-easing=ease] [data-aos] {
            transition-timing-function: ease
        }

        [data-aos][data-aos][data-aos-easing=ease-in],
        body[data-aos-easing=ease-in] [data-aos] {
            transition-timing-function: ease-in
        }

        [data-aos][data-aos][data-aos-easing=ease-out],
        body[data-aos-easing=ease-out] [data-aos] {
            transition-timing-function: ease-out
        }

        [data-aos][data-aos][data-aos-easing=ease-in-out],
        body[data-aos-easing=ease-in-out] [data-aos] {
            transition-timing-function: ease-in-out
        }

        [data-aos][data-aos][data-aos-easing=ease-in-back],
        body[data-aos-easing=ease-in-back] [data-aos] {
            transition-timing-function: cubic-bezier(.6, -.28, .735, .045)
        }

        [data-aos][data-aos][data-aos-easing=ease-out-back],
        body[data-aos-easing=ease-out-back] [data-aos] {
            transition-timing-function: cubic-bezier(.175, .885, .32, 1.275)
        }

        [data-aos][data-aos][data-aos-easing=ease-in-out-back],
        body[data-aos-easing=ease-in-out-back] [data-aos] {
            transition-timing-function: cubic-bezier(.68, -.55, .265, 1.55)
        }

        [data-aos][data-aos][data-aos-easing=ease-in-sine],
        body[data-aos-easing=ease-in-sine] [data-aos] {
            transition-timing-function: cubic-bezier(.47, 0, .745, .715)
        }

        [data-aos][data-aos][data-aos-easing=ease-out-sine],
        body[data-aos-easing=ease-out-sine] [data-aos] {
            transition-timing-function: cubic-bezier(.39, .575, .565, 1)
        }

        [data-aos][data-aos][data-aos-easing=ease-in-out-sine],
        body[data-aos-easing=ease-in-out-sine] [data-aos] {
            transition-timing-function: cubic-bezier(.445, .05, .55, .95)
        }

        [data-aos][data-aos][data-aos-easing=ease-in-quad],
        body[data-aos-easing=ease-in-quad] [data-aos] {
            transition-timing-function: cubic-bezier(.55, .085, .68, .53)
        }

        [data-aos][data-aos][data-aos-easing=ease-out-quad],
        body[data-aos-easing=ease-out-quad] [data-aos] {
            transition-timing-function: cubic-bezier(.25, .46, .45, .94)
        }

        [data-aos][data-aos][data-aos-easing=ease-in-out-quad],
        body[data-aos-easing=ease-in-out-quad] [data-aos] {
            transition-timing-function: cubic-bezier(.455, .03, .515, .955)
        }

        [data-aos][data-aos][data-aos-easing=ease-in-cubic],
        body[data-aos-easing=ease-in-cubic] [data-aos] {
            transition-timing-function: cubic-bezier(.55, .085, .68, .53)
        }

        [data-aos][data-aos][data-aos-easing=ease-out-cubic],
        body[data-aos-easing=ease-out-cubic] [data-aos] {
            transition-timing-function: cubic-bezier(.25, .46, .45, .94)
        }

        [data-aos][data-aos][data-aos-easing=ease-in-out-cubic],
        body[data-aos-easing=ease-in-out-cubic] [data-aos] {
            transition-timing-function: cubic-bezier(.455, .03, .515, .955)
        }

        [data-aos][data-aos][data-aos-easing=ease-in-quart],
        body[data-aos-easing=ease-in-quart] [data-aos] {
            transition-timing-function: cubic-bezier(.55, .085, .68, .53)
        }

        [data-aos][data-aos][data-aos-easing=ease-out-quart],
        body[data-aos-easing=ease-out-quart] [data-aos] {
            transition-timing-function: cubic-bezier(.25, .46, .45, .94)
        }

        [data-aos][data-aos][data-aos-easing=ease-in-out-quart],
        body[data-aos-easing=ease-in-out-quart] [data-aos] {
            transition-timing-function: cubic-bezier(.455, .03, .515, .955)
        }

        @media screen {
            html:not(.no-js) [data-aos^=fade][data-aos^=fade] {
                opacity: 0;
                transition-property: opacity, -webkit-transform;
                transition-property: opacity, transform;
                transition-property: opacity, transform, -webkit-transform
            }

            html:not(.no-js) [data-aos^=fade][data-aos^=fade].aos-animate {
                opacity: 1;
                -webkit-transform: none;
                transform: none
            }

            html:not(.no-js) [data-aos=fade-up] {
                -webkit-transform: translate3d(0, 30px, 0);
                transform: translate3d(0, 30px, 0)
            }

            html:not(.no-js) [data-aos=fade-down] {
                -webkit-transform: translate3d(0, -100px, 0);
                transform: translate3d(0, -100px, 0)
            }

            html:not(.no-js) [data-aos=fade-right] {
                -webkit-transform: translate3d(-100px, 0, 0);
                transform: translate3d(-100px, 0, 0)
            }

            html:not(.no-js) [data-aos=fade-left] {
                -webkit-transform: translate3d(100px, 0, 0);
                transform: translate3d(100px, 0, 0)
            }

            html:not(.no-js) [data-aos=fade-up-right] {
                -webkit-transform: translate3d(-100px, 100px, 0);
                transform: translate3d(-100px, 100px, 0)
            }

            html:not(.no-js) [data-aos=fade-up-left] {
                -webkit-transform: translate3d(100px, 100px, 0);
                transform: translate3d(100px, 100px, 0)
            }

            html:not(.no-js) [data-aos=fade-down-right] {
                -webkit-transform: translate3d(-100px, -100px, 0);
                transform: translate3d(-100px, -100px, 0)
            }

            html:not(.no-js) [data-aos=fade-down-left] {
                -webkit-transform: translate3d(100px, -100px, 0);
                transform: translate3d(100px, -100px, 0)
            }

            html:not(.no-js) [data-aos^=zoom][data-aos^=zoom] {
                opacity: 0;
                transition-property: opacity, -webkit-transform;
                transition-property: opacity, transform;
                transition-property: opacity, transform, -webkit-transform
            }

            html:not(.no-js) [data-aos^=zoom][data-aos^=zoom].aos-animate {
                opacity: 1;
                -webkit-transform: translateZ(0) scale(1);
                transform: translateZ(0) scale(1)
            }

            html:not(.no-js) [data-aos=zoom-in] {
                -webkit-transform: scale(.6);
                transform: scale(.6)
            }

            html:not(.no-js) [data-aos=zoom-in-up] {
                -webkit-transform: translate3d(0, 100px, 0) scale(.6);
                transform: translate3d(0, 100px, 0) scale(.6)
            }

            html:not(.no-js) [data-aos=zoom-in-down] {
                -webkit-transform: translate3d(0, -100px, 0) scale(.6);
                transform: translate3d(0, -100px, 0) scale(.6)
            }

            html:not(.no-js) [data-aos=zoom-in-right] {
                -webkit-transform: translate3d(-100px, 0, 0) scale(.6);
                transform: translate3d(-100px, 0, 0) scale(.6)
            }

            html:not(.no-js) [data-aos=zoom-in-left] {
                -webkit-transform: translate3d(100px, 0, 0) scale(.6);
                transform: translate3d(100px, 0, 0) scale(.6)
            }

            html:not(.no-js) [data-aos=zoom-out] {
                -webkit-transform: scale(1.2);
                transform: scale(1.2)
            }

            html:not(.no-js) [data-aos=zoom-out-up] {
                -webkit-transform: translate3d(0, 100px, 0) scale(1.2);
                transform: translate3d(0, 100px, 0) scale(1.2)
            }

            html:not(.no-js) [data-aos=zoom-out-down] {
                -webkit-transform: translate3d(0, -100px, 0) scale(1.2);
                transform: translate3d(0, -100px, 0) scale(1.2)
            }

            html:not(.no-js) [data-aos=zoom-out-right] {
                -webkit-transform: translate3d(-100px, 0, 0) scale(1.2);
                transform: translate3d(-100px, 0, 0) scale(1.2)
            }

            html:not(.no-js) [data-aos=zoom-out-left] {
                -webkit-transform: translate3d(100px, 0, 0) scale(1.2);
                transform: translate3d(100px, 0, 0) scale(1.2)
            }

            html:not(.no-js) [data-aos^=slide][data-aos^=slide] {
                transition-property: -webkit-transform;
                transition-property: transform;
                transition-property: transform, -webkit-transform;
                visibility: hidden
            }

            html:not(.no-js) [data-aos^=slide][data-aos^=slide].aos-animate {
                visibility: visible;
                -webkit-transform: translateZ(0);
                transform: translateZ(0)
            }

            html:not(.no-js) [data-aos=slide-up] {
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0)
            }

            html:not(.no-js) [data-aos=slide-down] {
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0)
            }

            html:not(.no-js) [data-aos=slide-right] {
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0)
            }

            html:not(.no-js) [data-aos=slide-left] {
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0)
            }

            html:not(.no-js) [data-aos^=flip][data-aos^=flip] {
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                transition-property: -webkit-transform;
                transition-property: transform;
                transition-property: transform, -webkit-transform
            }

            html:not(.no-js) [data-aos=flip-left] {
                -webkit-transform: perspective(2500px) rotateY(-100deg);
                transform: perspective(2500px) rotateY(-100deg)
            }

            html:not(.no-js) [data-aos=flip-left].aos-animate {
                -webkit-transform: perspective(2500px) rotateY(0);
                transform: perspective(2500px) rotateY(0)
            }

            html:not(.no-js) [data-aos=flip-right] {
                -webkit-transform: perspective(2500px) rotateY(100deg);
                transform: perspective(2500px) rotateY(100deg)
            }

            html:not(.no-js) [data-aos=flip-right].aos-animate {
                -webkit-transform: perspective(2500px) rotateY(0);
                transform: perspective(2500px) rotateY(0)
            }

            html:not(.no-js) [data-aos=flip-up] {
                -webkit-transform: perspective(2500px) rotateX(-100deg);
                transform: perspective(2500px) rotateX(-100deg)
            }

            html:not(.no-js) [data-aos=flip-up].aos-animate {
                -webkit-transform: perspective(2500px) rotateX(0);
                transform: perspective(2500px) rotateX(0)
            }

            html:not(.no-js) [data-aos=flip-down] {
                -webkit-transform: perspective(2500px) rotateX(100deg);
                transform: perspective(2500px) rotateX(100deg)
            }

            html:not(.no-js) [data-aos=flip-down].aos-animate {
                -webkit-transform: perspective(2500px) rotateX(0);
                transform: perspective(2500px) rotateX(0)
            }
        }

        .col-logo {
            flex: 3;
            justify-content: center;
        }

        .toggle-menu-mobile {
            flex: 1;
        }

        .col-bottom__right {
            flex: 1;
        }

        .col-menu .site-nav--active.site-nav__item:first-child .site-nav__link .site-nav__title::before,
        .col-menu .site-nav__item:first-child .site-nav__link:focus .site-nav__title::before,
        .col-menu .site-nav__item:first-child .site-nav__link:hover .site-nav__title.site-nav__title::before {
            left: 0 !important;
            width: calc(100% - calc(var(--padding-menu) - 9px));
        }

        @media (min-width: 1000px) {
            .col-logo {
                flex: 1 1 auto;
                justify-content: center;
                max-width: max-content;
                margin-inline: 2rem;
            }

            .col-menu {
                order: -1;
                flex: 1 1 0;
            }

            .col-menu .site-nav .site-nav__item:first-child .site-nav__link {
                padding-left: 0;
            }

            .col-bottom__right {
                flex: 1 1 0;
            }

            .col-menu .site-nav--active.site-nav__item:first-child .site-nav__link .site-nav__title::before,
            .col-menu .site-nav__item:first-child .site-nav__link:focus .site-nav__title::before,
            .col-menu .site-nav__item:first-child .site-nav__link:hover .site-nav__title.site-nav__title::before {
                left: 0;
                width: calc(100% - var(--padding-menu));
            }
        }

        .sidebar-hamburger .icon-humbeger {
            width: 22px;
            height: auto;
        }

        .option-sidebar {
            font-size: var(--g-font-size);
            font-family: var(--g-font-2);
            line-height: var(--g-body-lineheight);
            font-weight: var(--g-font-weight-body);
            letter-spacing: 0;
            text-transform: none;
            color: var(--color-body-text);
        }

        .option-sidebar a {
            color: var(--color-body-text);
        }

        .sidebar-hamburger {
            cursor: pointer;
        }

        .option-sidebar-overlay {
            position: fixed;
            visibility: hidden;
            opacity: 0;
            background-color: rgba(0, 0, 0, 0.5);
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 999998;
            transition: all .3s cubic-bezier(.77, 0, .175, 1);
            backdrop-filter: blur(1px);
        }

        .option-sidebar-body {
            position: fixed;
            width: 500px;
            top: 0;
            right: 0;
            height: 100%;
            z-index: 999999;
            background-color: white;
            transform: translateX(100%);
            transition: all .4s cubic-bezier(0.19, 1, 0.22, 1);
            visibility: hidden;
            padding: 50px 70px 35px;
            text-align: center;
        }

        .option-sidebar.active .option-sidebar-body {
            transform: translateX(0);
            visibility: visible;
        }

        .option-sidebar.active .option-sidebar-overlay {
            visibility: visible;
            opacity: 1;

        }

        .option-sidebar-image {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .option-sidebar-image-item {
            padding-bottom: 100%;
        }

        .option-sidebar-image-item img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .social-icons .list-inline-item:not(:last-child) {
            margin-right: 1.2rem;
        }

        .option-sidebar-bodywrap {
            overflow-y: auto;
        }
        </style>
        <header
            class=" logo-center-navigation-left size-header-small section-sections--24382004330809__header site-header page-element is-moved-by-drawer header-sticky  site-header--sticky   site-header--full  index-header  "
            role="banner" data-section-id="sections--24382004330809__header" data-section-type="header"
            data-sticky="sticky">

            <div class="header-bottom py-2 py-lg-0 ">
                <div class="">
                    <div class="d-flex row-header align-items-center">

                        <div class="container-fluid">
                            <div class="d-flex align-items-center">
                                <div class="d-flex d-lg-none toggle-menu-mobile align-items-center"><button
                                        type="button"
                                        class="text-link site-header__link js-drawer-open-left align-items-center d-inline-flex">
                                        <svg aria-hidden="true" fill="none" focusable="false" width="24" class="icon"
                                            viewBox="0 0 24 24">
                                            <path d="M1 19h22M1 12h22M1 5h22" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="square"></path>
                                        </svg>
                                        <span class="visually-hidden">Navigation</span>
                                    </button><span class="modal__toggle-search-mobile" aria-hidden="true"
                                        focusable="false" role="presentation">
                                        <svg aria-hidden="true" fill="none" focusable="false" width="24"
                                            class="svg-search" viewBox="0 0 24 24">
                                            <path d="M10.364 3a7.364 7.364 0 1 0 0 14.727 7.364 7.364 0 0 0 0-14.727Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"></path>
                                            <path d="M15.857 15.858 21 21.001" stroke="currentColor" stroke-width="1.5"
                                                stroke-miterlimit="10" stroke-linecap="round"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div
                                    class="d-flex align-items-center justify-content-center justify-content-lg-start col-logo ">
                                    <div class="px-lg-0 px-2 d-flex align-items-center">
                                        <!-- site-logo.liquid -->
                                        <style>
                                        .site-header__logo img {
                                            width: 195px;
                                        }

                                        .site-header__logo.has-logo {
                                            font-size: 0;
                                            line-height: 0;
                                        }

                                        .site-header__logo.has-logo a {
                                            font-size: 0;
                                            line-height: 0;
                                        }
                                        </style>
                                        <h1 class="site-header__logo  has-logo " itemscope
                                            itemtype="http://schema.org/Organization"><a href="index.html"
                                                itemprop="url" class="site-header__logo-link"><img
                                                    src="cdn/shop/files/La_Flawless_Black_b913554b-b3a9-49d8-b36d-9424efcec30b260e.png?v=1735920217&amp;width=390"
                                                    alt="La Flawless"
                                                    srcset="//la-flawless.com/cdn/shop/files/La_Flawless_Black_b913554b-b3a9-49d8-b36d-9424efcec30b.png?v=1735920217&amp;width=50 50w, //la-flawless.com/cdn/shop/files/La_Flawless_Black_b913554b-b3a9-49d8-b36d-9424efcec30b.png?v=1735920217&amp;width=100 100w, //la-flawless.com/cdn/shop/files/La_Flawless_Black_b913554b-b3a9-49d8-b36d-9424efcec30b.png?v=1735920217&amp;width=150 150w, //la-flawless.com/cdn/shop/files/La_Flawless_Black_b913554b-b3a9-49d8-b36d-9424efcec30b.png?v=1735920217&amp;width=200 200w, //la-flawless.com/cdn/shop/files/La_Flawless_Black_b913554b-b3a9-49d8-b36d-9424efcec30b.png?v=1735920217&amp;width=250 250w, //la-flawless.com/cdn/shop/files/La_Flawless_Black_b913554b-b3a9-49d8-b36d-9424efcec30b.png?v=1735920217&amp;width=300 300w"
                                                    width="287" height="64" class="logo-dark">
                                            </a></h1>
                                    </div>
                                </div>
                                <div class="d-none d-lg-flex col-menu">
                                    <nav class="nav-bar d-none d-lg-block" role="navigation">
                                        <ul class="site-nav">
                                            <li class="site-nav__item site-nav--active">
                                                <a href="{{ route('laf.home') }}" class="site-nav__link" aria-current="page">
                                                    <span class="site-nav__title">Home</span></a>
                                            </li>
                                            <li class="site-nav__item">
                                                <a href="collections.html" class="site-nav__link">
                                                    <span class="site-nav__title">Collection</span></a>
                                            </li>
                                            <li class="site-nav__item">
                                                <a href="collections/all-products.html" class="site-nav__link">
                                                    <span class="site-nav__title">Shop</span></a>
                                            </li>
                                            <li class="site-nav__item">
                                                <a href="{{ route('about') }}" class="site-nav__link">
                                                    <span class="site-nav__title">About Us</span></a>
                                            </li>
                                            <li class="site-nav__item">
                                                <a href="pages/faqs.html" class="site-nav__link">
                                                    <span class="site-nav__title">FAQs</span></a>
                                            </li>
                                            <li class="site-nav__item">
                                                <a href="{{ route('contact') }}" class="site-nav__link">
                                                    <span class="site-nav__title">Contact</span></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-bottom__right col-bottom__right">
                                    <div class="d-none d-lg-flex align-items-center"></div>

                                    <div class="site-header__search-wrap  sidebar__search ">
                                        <details-modal class="header__search">
                                            <div class="detail-modal">
                                                <div class="header__icon header__icon--search header__icon--summary focus-inset modal__toggle"
                                                    role="button" aria-expanded="false" aria-haspopup="dialog"
                                                    aria-label="Search">
                                                    <span>
                                                        <span
                                                            class="modal__toggle-open site-header__link  d-lg-inline-flex d-none header-search-icon"
                                                            aria-hidden="true" focusable="false" role="presentation">
                                                            <svg aria-hidden="true" fill="none" focusable="false"
                                                                width="24" class="svg-search" viewBox="0 0 24 24">
                                                                <path
                                                                    d="M10.364 3a7.364 7.364 0 1 0 0 14.727 7.364 7.364 0 0 0 0-14.727Z"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-miterlimit="10"></path>
                                                                <path d="M15.857 15.858 21 21.001" stroke="currentColor"
                                                                    stroke-width="1.5" stroke-miterlimit="10"
                                                                    stroke-linecap="round"></path>
                                                            </svg>
                                                            <span class="search-text">Search</span>
                                                        </span>

                                                    </span>
                                                </div>
                                                <div class="search-modal modal__content gradient" role="dialog"
                                                    aria-modal="true" aria-label="Search">


                                                    <div class="py-4 search-modal__content search-modal__content-bottom"
                                                        tabindex="-1">
                                                        <predictive-search class="search-modal__form"
                                                            data-loading-text="Loading...">
                                                            <div class="d-flex align-items-center">
                                                                <label
                                                                    class="label-search mr-auto mb-0 text-uppercase small">WHAT
                                                                    ARE YOU LOOKING FOR?</label>
                                                                <button type="button"
                                                                    class="search-modal__close-button modal__close-button link--text focus-inset border-0"
                                                                    aria-label="Close">
                                                                    <i class="icon-close"></i>
                                                                </button>
                                                            </div>

                                                            <form action="https://la-flawless.com/search" method="get"
                                                                role="search" class="search search-modal__form">
                                                                <div class="field d-flex">
                                                                    <input type="hidden" name="type" value="product">
                                                                    <input
                                                                        class="search__input field__input w-100 mr-atuo pl-0 pr-5 py-1"
                                                                        id="Search-In-Modal" type="search" name="q"
                                                                        value="" placeholder="Search Products..."
                                                                        role="combobox" aria-expanded="false"
                                                                        aria-owns="predictive-search-results-list"
                                                                        aria-controls="predictive-search-results-list"
                                                                        aria-haspopup="listbox" aria-autocomplete="list"
                                                                        autocorrect="off" autocomplete="off"
                                                                        autocapitalize="off" spellcheck="false">
                                                                    <label class="field__label visually-hidden"
                                                                        for="Search-In-Modal">Search</label>
                                                                    <input type="hidden" name="options[prefix]"
                                                                        value="last">
                                                                    <button
                                                                        class="search__button field__button border-0"
                                                                        aria-label="Search">
                                                                        <svg aria-hidden="true" fill="none"
                                                                            focusable="false" width="24"
                                                                            class="svg-search" viewBox="0 0 24 24">
                                                                            <path
                                                                                d="M10.364 3a7.364 7.364 0 1 0 0 14.727 7.364 7.364 0 0 0 0-14.727Z"
                                                                                stroke="currentColor" stroke-width="1.5"
                                                                                stroke-miterlimit="10"></path>
                                                                            <path d="M15.857 15.858 21 21.001"
                                                                                stroke="currentColor" stroke-width="1.5"
                                                                                stroke-miterlimit="10"
                                                                                stroke-linecap="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <div class="predictive-search predictive-search--header"
                                                                    tabindex="-1" data-predictive-search>
                                                                    <div class="predictive-search__loading-state">
                                                                        <svg aria-hidden="true" focusable="false"
                                                                            role="presentation" class="spinner"
                                                                            viewBox="0 0 66 66"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <circle class="path" fill="none"
                                                                                stroke-width="6" cx="33" cy="33" r="30">
                                                                            </circle>
                                                                        </svg>
                                                                    </div>
                                                                </div>

                                                                <span class="predictive-search-status visually-hidden"
                                                                    role="status" aria-hidden="true"></span>
                                                            </form>
                                                        </predictive-search>
                                                    </div>
                                                </div>
                                                <div class="modal-overlay"></div>
                                            </div>
                                        </details-modal>
                                    </div>




                                    <div class="header--acount d-none d-lg-inline-block topbar-block header-login-icon">
                                        <a href="https://shopify.com/91697545529/account?locale=en&amp;region_country=US"
                                            class=" site-header__link site-account"><svg aria-hidden="true" fill="none"
                                                focusable="false" width="24" class="svg-user" viewBox="0 0 24 24">
                                                <path
                                                    d="M16.125 8.75c-.184 2.478-2.063 4.5-4.125 4.5s-3.944-2.021-4.125-4.5c-.187-2.578 1.64-4.5 4.125-4.5 2.484 0 4.313 1.969 4.125 4.5Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path
                                                    d="M3.017 20.747C3.783 16.5 7.922 14.25 12 14.25s8.217 2.25 8.984 6.497"
                                                    stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10">
                                                </path>
                                            </svg><span class="account-text">Login</span>
                                        </a></div>




                                    <link href="cdn/shop/t/13/assets/cart-drawb26f.css?v=173509403778745422181743108420"
                                        rel="stylesheet" type="text/css" media="all" />
                                    <span class="site-header__link site-header__cart js-mini-cart   cardraw   "
                                        data-cartmini="true">
                                        <span class="js-toggle-cart header-cart-icon" title="Your Cart">
                                            <span class="position-relative">
                                                <svg aria-hidden="true" fill="none" focusable="false" width="24"
                                                    class="svg-cart" viewBox="0 0 24 24">
                                                    <path d="M2 10h20l-4 11H6L2 10Zm14-3a4 4 0 0 0-8 0"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg><span class="js-cart-count site-header__cart-indicator">0</span>
                                            </span>
                                            <span class="icon__fallback-text">Cart</span>
                                        </span>
                                        <div class="mini-cart-content shadow text-center  px-4 d-flex flex-column">
                                            <div class="mini-cart-header ">
                                                <div
                                                    class=" text-left d-flex justify-content-between align-items-center border-bottom mb-3 pb-3 pt-4 ">
                                                    <div class="d-flex align-items-center">
                                                        <span>Cart</span>
                                                        <span
                                                            class="js-cart-count site-header__cart-indicator ml-2">0</span>
                                                    </div>
                                                    <div class="modal-header">
                                                        <button type="button" class="close" aria-label="close"></button>
                                                    </div>
                                                </div>

                                                <div class="js-cart-bottom">
                                                    <div class="free-shipping">
                                                        <div class="free-shipping-content d-flex align-items-center">
                                                            <svg class="hide" aria-hidden="true" focusable="false"
                                                                role="presentation" class="icon icon-package"
                                                                viewBox="0 0 64 64">
                                                                <defs>
                                                                    <style>
                                                                    .a {
                                                                        fill: none;
                                                                        stroke: #000;
                                                                        stroke-width: 2px
                                                                    }
                                                                    </style>
                                                                </defs>
                                                                <path class="a"
                                                                    d="M32 54.52L10 41.95v-19.9L32 9.48l22 12.57v19.9L32 54.52z" />
                                                                <path class="a"
                                                                    d="M32 54.52v-19.9l22-12.57M32 34.62L10 22.05M41.7 15.02L21 28.33v8.38" />
                                                            </svg>

                                                            <span class="js-free-shipping-text"></span>
                                                        </div>
                                                        <div class="progress js-free-shipping" data-value="8000"
                                                            data-start="Spend" data-end="for Free Shipping">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                                role="progressbar" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mini-cart-scroll">
                                                <div class="js-mini-cart-content pt-2" data-sizeimg="auto"></div>

                                                <div class="drawer-crossell px-lg-4">
                                                    <div class="drawer-crossell-inner pt-lg-3">
                                                        <h6 class="text-left mb-lg-4 mb-3 pb-1 pt-3">You may also like
                                                        </h6>
                                                        <div class="product-recommendations-cart position-relative">
                                                            <div class="recommend-loading"></div>
                                                            <div class="product-recommendations-in"
                                                                data-url="/recommendations/products?section_id=sections--24382004330809__header">
                                                                <div
                                                                    class="flex-lg-column flex-row d-flex drawer-crossell-product flex-nowrap mb-0 gap-4">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <footer class="mini-cart-footer js-cart-bottom pb-4">
                                                <div class="mini-cart-total font-family-1">
                                                    <div
                                                        class="d-flex align-items-center mb-3 pb-3 border-bottom block-addon gap-5 ">
                                                        <div class="block-notecart block-addon__box">
                                                            <div class="small txt-body edit-notecart font-family-2 d-flex align-items-center"
                                                                title="Order Note">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path d="M8 2V5" stroke="currentColor"
                                                                        stroke-width="1.5" stroke-miterlimit="10"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path d="M16 2V5" stroke="currentColor"
                                                                        stroke-width="1.5" stroke-miterlimit="10"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path d="M7 13H15" stroke="currentColor"
                                                                        stroke-width="1.5" stroke-miterlimit="10"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path d="M7 17H12" stroke="currentColor"
                                                                        stroke-width="1.5" stroke-miterlimit="10"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M16 3.5C19.33 3.68 21 4.95 21 9.65V15.83C21 19.95 20 22.01 15 22.01H9C4 22.01 3 19.95 3 15.83V9.65C3 4.95 4.67 3.69 8 3.5H16Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                                <span>Order Note</span>
                                                            </div>
                                                            <div class="js-note-cart text-left block-addon__box--wrap">
                                                                <label for="cart__note" class="mb-3"> Add Order
                                                                    Note</label>
                                                                <textarea name="note" id="cart__note"
                                                                    class="cart__note mb-3"></textarea>
                                                                <button class="cart-notes-submit btn btn-theme">
                                                                    Save</button>
                                                                <button class="link cart-note-close btn ml-2">
                                                                    Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="bottom-total">
                                                        Total: <span class="js-cart-total">$0.00</span>
                                                    </div>
                                                </div>

                                                <div class="mini-cart-taxes">
                                                    Taxes and shipping calculated at checkout
                                                </div>
                                                <div class="mini-cart-btns mt-3 d-flex flex-column w-100 gap-2">
                                                    <a name="checkout"
                                                        class="w-100 btn gradient-theme js-cart-btn-checkout btn-theme d-flex align-items-center justify-content-center "
                                                        href="https://shop.app/checkout/91697545529/cn/hWN3nKmPhRBxmmh2cwJhrRtR/shop_pay_callback?_cs=3.AMPS&amp;locale=en-US&amp;redirect_source=checkout_universal_redirect&amp;token=eyJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJnaWQ6XC9cL3Nob3BpZnlcL1Nob3BcLzkxNjk3NTQ1NTI5IiwibmJmIjoxNzU5NzM3NTgyLCJzZXNzaW9uX3Rva2VuIjoiQUFFQkd0ZFRpWF9aaGJ2NWN4R18tNEVyNmhCRFhNRDBRZFRZOXhITjdPb2x2VlZnZk04WElPcG5IRjNnZTloNHBMLVhKcEVTTzRYWXk0SWFPUzZYSk13Ml9pZG5WQWE3V2UzdUhwT1BfTXpmNTgxTVh4SnpCeGhWdjZ1RHVpX0xoemZZeFhRcEt4Wmdia1N0bnFjczUxMnYxTVRCS3NzUHlRLVBRQUpfRzBsdi1RVS1HNWY3d1kybjNHemphRFphcmszVDNXYnJDVXYxWVA3R0JkY3BFdHBiYjhab2N5SGl6Y3MiLCJleHAiOjE3NTk3NTkxODIsImxhbmRpbmdfcGFnZSI6IlwvIn0.KXYwoO32k5yDwm6hLsqP72NVaMBjFy6MsNw7KO04h7Q&amp;tracking_unique=b29ef913-8784-4052-8d42-818e7c715172&amp;tracking_visit=3412570c-e04f-4c34-91a4-07add8da6149&amp;ur_back_url=https%3A%2F%2Fla-flawless.com%2Fcheckouts%2Fcn%2FhWN3nKmPhRBxmmh2cwJhrRtR%2Fen-us%3Fauto_redirect%3Dfalse%26edge_redirect%3Dtrue%26skip_shop_pay%3Dtrue&amp;ur_verify=Byra5HA-Fz3GJJuf3a7X_id-jj4%3D">
                                                        Check Out <span class="divider d-inline-block px-2"> • </span>
                                                        <span class="js-cart-total"></span></a>
                                                    <div>
                                                        <a class=" btn btn-underline js-cart-btn-cart"
                                                            href="cart.html">View Cart</a>
                                                    </div>
                                                </div>
                                            </footer>
                                        </div>
                                        <div class="overlaycart">
                                        </div>

                                    </span>
                                    <option-sidebar
                                        class="site-header__link sidebar-toogle pr-0 option-sidebar d-lg-block d-none">
                                        <div class="sidebar-hamburger ml-3">
                                            <svg aria-hidden="true" fill="none" focusable="false" width="24"
                                                class="icon-humbeger" viewBox="0 0 24 24">
                                                <path d="M1 19h22M1 12h22M1 5h22" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="square"></path>
                                            </svg>
                                        </div>
                                        <div class="option-sidebar-body">
                                            <div class="modal-header p-0">
                                                <button type="button" class="close" data-dismiss="modal"><i
                                                        class="icon-close"></i></button>
                                            </div>
                                            <div
                                                class="option-sidebar-bodywrap d-flex justify-space-between flex-column h-100">
                                                <div>
                                                    <div class="mb-4">
                                                        <!-- site-logo.liquid -->
                                                        <style>
                                                        .site-header__logo img {
                                                            width: 195px;
                                                        }

                                                        .site-header__logo.has-logo {
                                                            font-size: 0;
                                                            line-height: 0;
                                                        }

                                                        .site-header__logo.has-logo a {
                                                            font-size: 0;
                                                            line-height: 0;
                                                        }
                                                        </style>
                                                        <h1 class="site-header__logo  has-logo " itemscope
                                                            itemtype="http://schema.org/Organization"><a
                                                                href="index.html" itemprop="url"
                                                                class="site-header__logo-link"><img
                                                                    src="cdn/shop/files/La_Flawless_Black_b913554b-b3a9-49d8-b36d-9424efcec30b260e.png?v=1735920217&amp;width=390"
                                                                    alt="La Flawless"
                                                                    srcset="//la-flawless.com/cdn/shop/files/La_Flawless_Black_b913554b-b3a9-49d8-b36d-9424efcec30b.png?v=1735920217&amp;width=50 50w, //la-flawless.com/cdn/shop/files/La_Flawless_Black_b913554b-b3a9-49d8-b36d-9424efcec30b.png?v=1735920217&amp;width=100 100w, //la-flawless.com/cdn/shop/files/La_Flawless_Black_b913554b-b3a9-49d8-b36d-9424efcec30b.png?v=1735920217&amp;width=150 150w, //la-flawless.com/cdn/shop/files/La_Flawless_Black_b913554b-b3a9-49d8-b36d-9424efcec30b.png?v=1735920217&amp;width=200 200w, //la-flawless.com/cdn/shop/files/La_Flawless_Black_b913554b-b3a9-49d8-b36d-9424efcec30b.png?v=1735920217&amp;width=250 250w, //la-flawless.com/cdn/shop/files/La_Flawless_Black_b913554b-b3a9-49d8-b36d-9424efcec30b.png?v=1735920217&amp;width=300 300w"
                                                                    width="287" height="64" class="logo-dark">
                                                            </a></h1>
                                                    </div>
                                                    <div class="mb-4">
                                                        <p>The skin has needs that go far beyond the bounds of simply
                                                            feeding it products and ingredients. At Lisén, we want your
                                                            skin to find all that it seeks and more.</p>
                                                    </div>
                                                    <div class="option-sidebar-image py-3 mb-3">





                                                    </div>
                                                </div>
                                                <div class="mt-auto">


                                                    <div class="">
                                                        <a href="tel:929-293-7690"
                                                            class="sub-menu__link py-1 d-inline-flex font-weight-normal pr-1 d-flex align-items-center letter-spacing-0">

                                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon"
                                                                viewBox="0 0 512 512">
                                                                <path
                                                                    d="M451 374c-15.88-16-54.34-39.35-73-48.76-24.3-12.24-26.3-13.24-45.4.95-12.74 9.47-21.21 17.93-36.12 14.75s-47.31-21.11-75.68-49.39-47.34-61.62-50.53-76.48 5.41-23.23 14.79-36c13.22-18 12.22-21 .92-45.3-8.81-18.9-32.84-57-48.9-72.8C119.9 44 119.9 47 108.83 51.6A160.15 160.15 0 0083 65.37C67 76 58.12 84.83 51.91 98.1s-9 44.38 23.07 102.64 54.57 88.05 101.14 134.49S258.5 406.64 310.85 436c64.76 36.27 89.6 29.2 102.91 23s22.18-15 32.83-31a159.09 159.09 0 0013.8-25.8C465 391.17 468 391.17 451 374z"
                                                                    fill="none" stroke="currentColor"
                                                                    stroke-miterlimit="10" stroke-width="32" />
                                                            </svg>
                                                            <span class="pl-2">929-293-7690</span>
                                                        </a>
                                                    </div>


                                                    <div class="">
                                                        <a href="mailto:support@la-flawless.com"
                                                            class="sub-menu__link py-1 d-inline-flex font-weight-normal pr-1 d-flex align-items-center letter-spacing-0">

                                                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-email"
                                                                viewBox="0 0 512 512">
                                                                <rect x="48" y="96" width="416" height="320" rx="40"
                                                                    ry="40" fill="none" stroke="currentColor"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="32" />
                                                                <path fill="none" stroke="currentColor"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="32" d="M112 160l144 112 144-112" />
                                                            </svg>
                                                            <span class="pl-2">support@la-flawless.com</span>
                                                        </a>
                                                    </div>


                                                    <div class="pt-4">
                                                        <div class="text block-socialtop">
                                                            <ul class="list-inline social-icons">
                                                                <li class="list-inline-item">
                                                                    <a href="https://www.facebook.com/LaFlawlessSkincare/"
                                                                        title="La Flawless on Facebook">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            class="icon icon-facebook"
                                                                            viewBox="0 0 512 512">
                                                                            <path
                                                                                d="M480 257.35c0-123.7-100.3-224-224-224s-224 100.3-224 224c0 111.8 81.9 204.47 189 221.29V322.12h-56.89v-64.77H221V208c0-56.13 33.45-87.16 84.61-87.16 24.51 0 50.15 4.38 50.15 4.38v55.13H327.5c-27.81 0-36.51 17.26-36.51 35v42h62.12l-9.92 64.77H291v156.54c107.1-16.81 189-109.48 189-221.31z"
                                                                                fill-rule="evenodd" />
                                                                        </svg><span
                                                                            class="icon__fallback-text">Fb</span>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="https://www.instagram.com/laflawless_skincare/"
                                                                        title="La Flawless on Instagram">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            class="icon icon-insta"
                                                                            viewBox="0 0 512 512">
                                                                            <path
                                                                                d="M349.33 69.33a93.62 93.62 0 0193.34 93.34v186.66a93.62 93.62 0 01-93.34 93.34H162.67a93.62 93.62 0 01-93.34-93.34V162.67a93.62 93.62 0 0193.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32z" />
                                                                            <path
                                                                                d="M377.33 162.67a28 28 0 1128-28 27.94 27.94 0 01-28 28zM256 181.33A74.67 74.67 0 11181.33 256 74.75 74.75 0 01256 181.33m0-37.33a112 112 0 10112 112 112 112 0 00-112-112z" />
                                                                        </svg><span
                                                                            class="icon__fallback-text">Ins</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="option-sidebar-overlay">
                                        </div>
                                    </option-sidebar>
                                    <script>
                                    class OptionSidebar extends HTMLElement {
                                        connectedCallback() {
                                            this.openMenu();
                                        }
                                        openMenu() {
                                            const menu = this.querySelector(".sidebar-hamburger");
                                            const overlay = this.querySelector(".option-sidebar-overlay");
                                            const body = this.querySelector(".option-sidebar-body");
                                            const close = this.querySelector(".close");
                                            menu.addEventListener("click", function() {
                                                this.parentElement.classList.toggle("active");
                                            });
                                            overlay.addEventListener("click", function() {
                                                this.parentElement.classList.remove("active");
                                            });
                                            close.addEventListener("click", function() {
                                                this.parentElement.parentElement.parentElement.classList
                                                    .remove("active");
                                            });

                                        }
                                    }
                                    customElements.define("option-sidebar", OptionSidebar);
                                    </script>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>