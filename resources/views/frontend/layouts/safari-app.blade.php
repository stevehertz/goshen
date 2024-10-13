<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take a safari - {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.min75e4.css') }}">
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
</head>

<body
    class="page-template page-template-template-floating-header page-template-template-floating-header-php page page-id-2 wp-custom-logo wp-embed-responsive shift-footer">
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary">
            Skip to content
        </a>

        <header id="masthead" class="site-header">
            <div class="container-xl">
                <div class="row gx-0 align-items-center justify-content-between">
                    <div class="col-auto">
                        <a href="{{ route('home') }}" class="custom-logo-link" rel="home">
                            <img width="163" height="224" src="{{ asset('img/site-logo.svg') }}"
                                class="custom-logo" alt="Blue Skies" decoding="async" />
                        </a>
                    </div>

                    <div class="col-auto">
                        <div class="language-switcher">

                            <div
                                class="wpml-ls-statics-shortcode_actions wpml-ls wpml-ls-legacy-dropdown-click js-wpml-ls-legacy-dropdown-click">
                                <ul>
                                    <li
                                        class="wpml-ls-slot-shortcode_actions wpml-ls-item wpml-ls-item-en wpml-ls-current-language wpml-ls-first-item wpml-ls-last-item wpml-ls-item-legacy-dropdown-click">

                                        <a href="#" class="js-wpml-ls-item-toggle wpml-ls-item-toggle">
                                            <img class="wpml-ls-flag" src="{{ asset('img/flags/flag-uk.png') }}"
                                                alt="English" width=34 height=23 /></a>

                                        <ul class="js-wpml-ls-sub-menu wpml-ls-sub-menu">
                                        </ul>

                                    </li>

                                </ul>
                            </div>
                        </div>

                        <button id="siteNavigationToggle" type="button" class="menu-toggle"
                            aria-controls="site-navigation" aria-expanded="false">Want More?!</button>
                    </div>
                </div>
            </div>
        </header><!-- #masthead -->

        <nav id="siteNavigation" class="site-navigation">
            <div class="inner">
                <ul id="menu-footer-menu" class="menu">
                    <li id="menu-item-2409"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-2409">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li id="menu-item-2447"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2447">
                        <a href="{{ route('our.story') }}">Our Story</a>
                        <ul class="sub-menu">
                            <li id="menu-item-364"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-364"><a
                                    href="{{ route('fair.scoop') }}">Fair Scoop</a></li>
                            <li id="menu-item-365"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-365"><a
                                    href="../tree-to-tub/index.html">Tree To Tub</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-1993"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1993">
                        <a href="../products/index.html">Our Products</a>
                        <ul class="sub-menu">
                            <li id="menu-item-1992"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1992"><a
                                    href="../where-to-buy/index.html">Store Locator</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-16"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-16">
                        <a href="#">Want More?!</a>
                        <ul class="sub-menu">
                            <li id="menu-item-370"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-370"><a
                                    href="../contact/index.html">Contact</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <main id="primary" class="site-main">
            @yield('content')
        </main>

        <footer id="colophon" class="site-footer">
            <div class="inner">
                <div class="container-xl">

                    <ul class="social-icons">
                        <li>
                            <a href="https://twitter.com/blueskiesfruit" target="_blank" rel="noopener noreferrer"
                                aria-label="Twitter">
                                <span class="screen-reader-text">Twitter</span>

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 42">
                                    <path fill="currentColor"
                                        d="M37.12 11.03c.55.19 1.03.37 1.49.53.41.15.51.68.19.97-.38.34-.76.69-1.09 1.08-.56.67-1.27 1.4-1.44 2.2-1.26 6.04-4.1 11.13-8.76 15.2-5.37 4.69-15.86 5.89-22.1 2.42-.86-.49-1.51-1.38-2.41-2.22 2.87-.81 5.24-1.47 7.67-2.15-1.47-1.23-2.76-2.21-3.92-3.32-.51-.49-.75-1.25-1.11-1.89.68-.3 1.36-.59 2.08-.91-1.13-1.72-2.43-3.51-3.55-5.41-.94-1.59-.52-2.15 1.36-2.05-.01-2.8-2.03-5.79.39-8.33 2.32 1.88 4.23 3.82 6.5 5.16 2.19 1.29 4.75 1.94 7.13 2.87.44-1.79.55-3.2 1.13-4.38 2.03-4.1 7-5.49 10.99-2.95 1.47.94 2.63.89 4.11.33.61-.23 1.3-.26 1.98-.29.43-.02.73.43.54.82-.27.56-.55 1.13-.83 1.69-.09.2-.21.4-.35.63zM5.66 32.1c.18.2.24.32.33.36.27.13.55.24.83.33 5.29 1.87 10.48 1.8 15.56-.77 6.55-3.31 10.94-8.31 12.22-15.69.28-1.63.5-3.16 2.62-3.66-.91-.45-1.52-.75-2.26-1.11.52-.8.94-1.45 1.35-2.09-2.09 1.08-3.83.63-5.53-.67-.45-.34-1.08-.5-1.65-.64-4.22-1.08-7.92 2.08-7.35 6.36.18 1.32-.28 1.53-1.41 1.51-4.92-.1-8.94-2.19-12.43-5.49-.52-.5-1.06-.98-1.93-1.79-.08 3.65 1.3 6.19 3.43 8.91-1.36.12-2.4.21-4.06.36 2.04 2.04 3.78 3.78 5.72 5.71-1.27.26-2.27.46-3.27.66-.06.18-.13.35-.19.53 1.78 1.06 3.56 2.11 5.54 3.29-1.96 2.17-4.73 2.89-7.52 3.89z" />
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="https://www.instagram.com/blueskies_gh/" target="_blank" rel="noopener noreferrer"
                                aria-label="Instagram">
                                <span class="screen-reader-text">Instagram</span>

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 42">
                                    <path fill="currentColor"
                                        d="M21.5 35.5c-2.94-.38-5.9-.68-8.82-1.17-2.39-.4-4.05-1.97-4.9-4.14-2.01-5.15-2.85-10.51-1.61-15.96.88-3.88 2.88-6.85 7.41-7.08 3.61-.19 7.23-.73 10.83-.63 4.71.13 8.78 2 10.46 6.72 1 2.8 1.16 5.92 1.5 8.92.16 1.41-.02 2.88-.24 4.3-.85 5.56-4.23 8.4-10.26 8.7-1.44.07-2.88.01-4.32.01-.03.1-.04.21-.05.33zm-.26-2.21c2.01-.1 3.87-.16 5.73-.3 3.93-.3 6.41-2.6 6.45-6.53.04-3.98-.19-7.98-.65-11.93-.3-2.64-1.98-4.59-4.63-5.34-1.42-.4-2.95-.69-4.41-.6-3.98.23-7.97.62-11.93 1.12-.71.09-1.65.89-1.9 1.58-2.19 5.95-1.75 11.9.15 17.85.87 2.73 2.87 3.66 5.42 3.87 1.97.16 3.94.2 5.77.28z" />
                                    <path fill="currentColor"
                                        d="M20.08 28.46c-3.59.11-6.48-3.11-6.72-7.18-.18-3.2 3.05-7.98 6.84-7.85 4.65.16 7.25 3.17 7.63 7.83.34 4.25-2.12 7.09-7.75 7.2zm-4.7-7.42c-.18 3.84 3.25 5.79 6.64 5.62 2.45-.12 4.22-2.62 4.04-5.7-.2-3.35-2.8-5.79-6.02-5.64-2.9.14-4.82 2.49-4.66 5.72zm14.4-7.76c-.48.79-1.65.84-2.2.1-.09-.12-.13-.22-.11-.31.11-.47.72-1.1 1.17-1.14.41-.03 1.16.57 1.24.99.02.11-.02.23-.1.36z" />
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="https://facebook.com/blueskiesfruit" target="_blank" rel="noopener noreferrer"
                                aria-label="Facebook">
                                <span class="screen-reader-text">Facebook</span>

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 42">
                                    <path fill="currentColor"
                                        d="M24.52 15.25c.72 0 1.43.02 2.15-.01.96-.04 1.47.42 1.49 1.36.03 1.21-.03 2.42.01 3.63.03.94-.44 1.11-1.27 1.06-2.45-.14-2.45-.12-2.54 2.37-.13 3.43-.27 6.87-.41 10.3-.01.19-.04.39-.01.57.43 2.23.12 2.57-2.16 2.44-1.45-.08-2.9-.18-4.35-.19-.99-.01-1.33-.42-1.36-1.39-.11-3.82-.28-7.64-.42-11.46-.02-.57 0-1.15 0-1.88-.68-.05-1.24-.17-1.79-.11-1.24.14-1.52-.54-1.47-1.56.07-1.35.24-2.71.21-4.06-.03-1.06.39-1.39 1.36-1.33.67.04 1.34.01 2.02.01.18-1.4.3-2.73.54-4.04.7-3.8 2.41-5.56 6.22-5.92 1.93-.18 3.91.21 5.87.37.86.07 1.16.57.97 1.41-.28 1.23-.44 2.49-.83 3.67-.13.39-.78.74-1.26.87-2.36.68-2.89 1.32-2.97 3.89zm1.98 1.23c-.76 0-1.39-.04-2.01.01-1.01.08-1.53-.27-1.6-1.35-.18-3.12.66-5.05 3.78-4.76.78.07 1.15-.29 1.27-1.04.1-.57.39-1.13.39-1.69 0-.36-.28-.92-.58-1.05-4.96-2.09-10.32 1.87-9.66 7.1.21 1.68-.58 2.7-2.06 2.65-2.43-.07-2.62.14-2.26 2.62.05.38.13.75.21 1.17.37.06.7.16 1.02.16 1.62-.01 2 .78 1.95 2.35-.1 2.9.04 5.81.18 8.72.07 1.43.36 2.84.57 4.41 1.29 0 2.4-.04 3.51.01.86.04 1.23-.25 1.23-1.15 0-1.16.14-2.32.16-3.48.05-3 .06-6.01.09-9.01.02-1.8.45-2.23 2.18-2.27.51-.01 1.02-.06 1.62-.1.01-1.15.01-2.15.01-3.3z" />
                                </svg>
                            </a>
                        </li>

                    </ul>

                    <div class="row align-items-center align-items-lg-start">
                        <div class="col-md-12 col-lg order-lg-2">
                            <nav class="footer-menu">
                                <ul id="menu-footer-menu-1" class="menu">
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-2409">
                                        <a href="../index.html">Home</a>
                                    </li>
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2447">
                                        <a href="../our-story/index.html">Our Story</a>
                                        <ul class="sub-menu">
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-364">
                                                <a href="../fair-scoop/index.html">Fair Scoop</a>
                                            </li>
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-365">
                                                <a href="../tree-to-tub/index.html">Tree To
                                                    Tub</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1993">
                                        <a href="../products/index.html">Our Products</a>
                                        <ul class="sub-menu">
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1992">
                                                <a href="../where-to-buy/index.html">Store
                                                    Locator</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-16">
                                        <a href="#">Want More?!</a>
                                        <ul class="sub-menu">
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-370">
                                                <a href="../contact/index.html">Contact</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div class="col-6 col-lg-auto order-lg-1">
                            <a href="../index.html" class="custom-logo-link" rel="home"><img width="163"
                                    height="224" src="{{ asset('img/site-logo.svg') }}" class="custom-logo"
                                    alt="Blue Skies" decoding="async" /></a>
                        </div>
                        <div class="col-6 col-lg-auto order-lg-3">
                            <img width="174" height="300" src="{{ asset('img/hero/queens-award.png') }}"
                                class="footer-image" alt decoding="async" loading="lazy" />
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- #colophon -->

    </div><!-- #page -->

    <aside id="cookiePolicy" class="cookie-policy" style="display:none">
        <div class="container-xl">
            <div class="row align-items-center">
                <div class="col">
                    <p>We use cookies to optimize our website and our service. <a
                            href="https://global.blueskies.com/cookie-policy/" target="_blank" rel="noopener"
                            class="underline">Read
                            More.</a></p>
                </div>
                <div class="col-auto">
                    <button id="cookiePolicyAcceptButton" type="button" class="btn btn-sm btn-white">Accept</button>
                </div>
            </div>
        </div>
    </aside>

    <link rel='stylesheet' id='so-css-blueskies-css' href='{{ asset('css/so-css-blueskies41ab.css') }}'
        media='all' />
    <link rel='stylesheet' id='wpml-legacy-dropdown-click-0-css'
        href='{{ asset('vendors/sitepress-multilingual-cms/templates/language-switchers/legacy-dropdown-click/style.min68b3.css') }}'
        media='all' />
    <link rel='stylesheet' id='wpml-legacy-dropdown-click-0-css'
        href='{{ asset('vendors/legacy-dropdown-click/style.min68b3.css') }}' />
    <link rel='stylesheet' id='block-acf-large-hero-css' href='{{ asset('css/blocks/large-hero1eb7.css') }}'
        media='all' />
    <link rel='stylesheet' id='block-acf-page-hero-css' href='{{ asset('css/blocks/page-hero1eb7.css') }}'
        media='all' />
    <link rel='stylesheet' id='block-acf-products-list-css' href='{{ asset('css/blocks/products-list1eb7.css') }}'
        media='all' />
    <link rel='stylesheet' id='block-acf-products-cta-css' href='{{ asset('css/blocks/products-cta1eb7.css') }}'
        media='all' />
    <style id='core-block-supports-inline-css'>
        .wp-container-core-columns-layout-1.wp-container-core-columns-layout-1 {
            flex-wrap: nowrap;
        }

        .wp-container-core-columns-layout-2.wp-container-core-columns-layout-2 {
            flex-wrap: nowrap;
        }
    </style>
    <script id="pt-cv-content-views-script-js-extra">
        var PT_CV_PUBLIC = {
            "_prefix": "pt-cv-",
            "page_to_show": "5",
            "_nonce": "dd30d762dd",
            "is_admin": "",
            "is_mobile": "",
            "ajaxurl": "https:\/\/blueskies.com\/wp-admin\/admin-ajax.php",
            "lang": "en",
            "loading_image_src": "data:image\/gif;base64,R0lGODlhDwAPALMPAMrKygwMDJOTkz09PZWVla+vr3p6euTk5M7OzuXl5TMzMwAAAJmZmWZmZszMzP\/\/\/yH\/C05FVFNDQVBFMi4wAwEAAAAh+QQFCgAPACwAAAAADwAPAAAEQvDJaZaZOIcV8iQK8VRX4iTYoAwZ4iCYoAjZ4RxejhVNoT+mRGP4cyF4Pp0N98sBGIBMEMOotl6YZ3S61Bmbkm4mAgAh+QQFCgAPACwAAAAADQANAAAENPDJSRSZeA418itN8QiK8BiLITVsFiyBBIoYqnoewAD4xPw9iY4XLGYSjkQR4UAUD45DLwIAIfkEBQoADwAsAAAAAA8ACQAABC\/wyVlamTi3nSdgwFNdhEJgTJoNyoB9ISYoQmdjiZPcj7EYCAeCF1gEDo4Dz2eIAAAh+QQFCgAPACwCAAAADQANAAAEM\/DJBxiYeLKdX3IJZT1FU0iIg2RNKx3OkZVnZ98ToRD4MyiDnkAh6BkNC0MvsAj0kMpHBAAh+QQFCgAPACwGAAAACQAPAAAEMDC59KpFDll73HkAA2wVY5KgiK5b0RRoI6MuzG6EQqCDMlSGheEhUAgqgUUAFRySIgAh+QQFCgAPACwCAAIADQANAAAEM\/DJKZNLND\/kkKaHc3xk+QAMYDKsiaqmZCxGVjSFFCxB1vwy2oOgIDxuucxAMTAJFAJNBAAh+QQFCgAPACwAAAYADwAJAAAEMNAs86q1yaWwwv2Ig0jUZx3OYa4XoRAfwADXoAwfo1+CIjyFRuEho60aSNYlOPxEAAAh+QQFCgAPACwAAAIADQANAAAENPA9s4y8+IUVcqaWJ4qEQozSoAzoIyhCK2NFU2SJk0hNnyEOhKR2AzAAj4Pj4GE4W0bkJQIAOw==",
            "is_mobile_tablet": "",
            "sf_no_post_found": "No posts found."
        };
        var PT_CV_PAGINATION = {
            "first": "\u00ab",
            "prev": "\u2039",
            "next": "\u203a",
            "last": "\u00bb",
            "goto_first": "Go to first page",
            "goto_prev": "Go to previous page",
            "goto_next": "Go to next page",
            "goto_last": "Go to last page",
            "current_page": "Current page is",
            "goto_page": "Go to page"
        };
    </script>
    <script src="{{ asset('vendors/content-views-query-and-display-post-pageassets/js/cvf9b8.js') }}"
        id="pt-cv-content-views-script-js"></script>
    <script src="{{ asset('vendors/pt-content-views-proassets/js/cvpro.mina78f.js') }}" id="pt-cv-public-pro-script-js">
    </script>
    <script id="lsow-frontend-scripts-js-extra">
        var lsow_settings = {
            "mobile_width": "780",
            "custom_css": ""
        };
    </script>
    <script src="{{ asset('vendors/livemesh-siteorigin-widgets-premium/assets/js/lsow-frontend.minf7ff.js') }}"
        id="lsow-frontend-scripts-js"></script>
    <script src="{{ asset('js/dist/vendor/wp-polyfill-inert.min0226.js') }}" id="wp-polyfill-inert-js"></script>
    <script src="{{ asset('js/dist/vendor/regenerator-runtime.min6c85.js') }}" id="regenerator-runtime-js"></script>
    <script src="{{ asset('js/dist/vendor/wp-polyfill.min2c7c.js') }}" id="wp-polyfill-js"></script>
    <script src="{{ asset('js/dist/hooks.min2ebd.js') }}" id="wp-hooks-js"></script>
    <script src="{{ asset('js/dist/i18n.minf92f.js') }}" id="wp-i18n-js"></script>
    <script id="wp-i18n-js-after">
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
    </script>
    <script src="{{ asset('vendors/contact-form-7/includes/swv/js/indexe2db.js') }}" id="swv-js"></script>
    <script id="contact-form-7-js-extra">
        var wpcf7 = {
            "api": {
                "root": "https:\/\/blueskies.com\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            }
        };
    </script>
    <script src="{{ asset('vendors/contact-form-7/includes/js/indexe2db.js') }}" id="contact-form-7-js"></script>
    <script src="{{ asset('js/site8a54.js') }}" id="blueskies-script-js"></script>
    <script src="{{ asset('vendors/page-links-to/dist/new-tab7433.js') }}" id="page-links-to-js"></script>
    <script src="../../www.google.com/recaptcha/apie330.js?render=6LcQwrYdAAAAAMThv0V4ug33Yz_F51IZFqrTUjHZ&amp;ver=3.0"
        id="google-recaptcha-js"></script>
    <script id="wpcf7-recaptcha-js-extra">
        var wpcf7_recaptcha = {
            "sitekey": "6LcQwrYdAAAAAMThv0V4ug33Yz_F51IZFqrTUjHZ",
            "actions": {
                "homepage": "homepage",
                "contactform": "contactform"
            }
        };
    </script>
    <script src="../wp-content/plugins/contact-form-7/modules/recaptcha/indexe2db.js?ver=5.9.8" id="wpcf7-recaptcha-js">
    </script>
    <script
        src="{{ asset('vendors/sitepress-multilingual-cms/templates/language-switchers/legacy-dropdown-click/script.min68b3.js') }}"
        id="wpml-legacy-dropdown-click-0-js"></script>
</body>

</html>
