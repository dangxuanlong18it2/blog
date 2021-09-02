<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link media="all" href="https://gettreewp.demothemesflat.com/wp-content/cache/autoptimize/css/autoptimize_d1f7b141f029317165494f9446cdf341.css" rel="stylesheet" />
    <link media="only screen and (max-width: 768px)" href="https://gettreewp.demothemesflat.com/wp-content/cache/autoptimize/css/autoptimize_541e2ced151704f4ff1844c6de47ec02.css" rel="stylesheet" />
    <title>{{__('News Gettree')}}</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel="alternate" type="application/rss+xml" title="Gettree &raquo; Feed" href="https://gettreewp.demothemesflat.com/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Gettree &raquo; Comments Feed" href="https://gettreewp.demothemesflat.com/comments/feed/" />
    <link rel='stylesheet' id='Jost-google-fonts-css' href='https://fonts.googleapis.com/css2?family=Jost%3Aital%2Cwght%400%2C100%3B0%2C200%3B0%2C300%3B0%2C400%3B0%2C500%3B0%2C600%3B0%2C700%3B0%2C800%3B0%2C900%3B1%2C100%3B1%2C200%3B1%2C300%3B1%2C400%3B1%2C500%3B1%2C600%3B1%2C700%3B1%2C800%3B1%2C900&#038;display=swap&#038;ver=5.8' type='text/css' media='all' />
    <link rel='stylesheet' id='Rubik-google-fonts-css' href='https://fonts.googleapis.com/css2?family=Rubik%3Aital%2Cwght%400%2C300%3B0%2C400%3B0%2C500%3B0%2C600%3B0%2C700%3B0%2C800%3B0%2C900%3B1%2C300%3B1%2C400%3B1%2C500%3B1%2C600%3B1%2C700%3B1%2C800%3B1%2C900&#038;display=swap&#038;ver=5.8' type='text/css' media='all' />
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
    <link rel="https://api.w.org/" href="https://gettreewp.demothemesflat.com/wp-json/" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://gettreewp.demothemesflat.com/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://gettreewp.demothemesflat.com/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.8" />
    <meta name="generator" content="WooCommerce 5.5.2" />
    <style type="text/css">
        div.get-quote a {
                padding: 19px 38px;
    min-width: 0px; 
    min-height: 0px; 
    color: #fff;
    font-family: Rubik;
    font-size: 18px;
    font-weight: 500;
    border-radius: 10px;
    display: flex;
    line-height: 1.2;
    text-decoration: none;
    transition: all .3s;
        }
    </style>
</head>
<body class="blog theme-gettree woocommerce-no-js hfeed tfl_not_reviewing tfl_keep_design tfl_sticky_enabled post-16-garden-design-ideas-to-make-the-best-of-your elementor-default elementor-kit-1">
    @include('tf_News.header')
        <main id="primary" class="site-main">
            <div class="container">
                <div class="row sidebar-right">
                    <div class="col-lg-8 has-sidebar">
 @foreach($blog_listing as $key => $bl)

                        <article id="post-1357" class="post-1357 post type-post status-publish format-standard has-post-thumbnail hentry category-nullam-dolor-gravida tag-agency tag-business tag-corporate">
                            <div class="wrap-img">
                                <a class="post-thumbnail" href="https://gettreewp.demothemesflat.com/the-top-5-garden-renovation-trends-this-year-revealed/" aria-hidden="true" tabindex="-1"> <img width="770" height="450" src="{{ $bl->tf_post_image }}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="The top 5 garden renovation trends this year revealed" loading="lazy" srcset="{{ $bl->tf_post_image }}" sizes="(max-width: 770px) 100vw, 770px" /> </a> <span class="posted-on"><i class="far fa-calendar-alt"></i>
                                    {{ $bl->tf_post_date }}
                                </span>
                            </div>
                            <div class="wrap-content">
                                <div class="entry-meta"> <span class="byline"> <i class="far fa-user"></i>by <span class="author vcard"><a class="url fn n" href="https://gettreewp.demothemesflat.com/author/admin/">{{ $bl->tf_post_author }}</a></span></span><span class="category"><i class="far fa-folder-open"></i><a href="https://gettreewp.demothemesflat.com/category/nullam-dolor-gravida/">Nullam dolor gravida</a></span><span class="comment-num"><i class="far fa-comments"></i>No Comments</span>
                                </div>
                                <header class="entry-header">
                                    <h3 class="entry-title"><a href="{{URL::to('blog_detail/'. $bl->tf_post_url)}}" rel="bookmark">{{ $bl->tf_post_title }}</a></h3>
                                </header>
                                <div class="entry-content">
                                    <p>{{ $bl->tf_post_sapo }}</p>
                                    <div class="post-read-more">
                                        <div class="post-link"> <a href="{{URL::to('blog_detail/'. $bl->tf_post_url)}}">Read More<i
 class="icon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                    @endforeach
                    </div>
                    <div class="col-lg-4">
                        <aside id="secondary" class="widget-area">
                            <section id="tfl-recent-posts-widget-with-thumbnails-2" class="widget-odd widget-3 widget widget_tfl-recent-posts-widget-with-thumbnails">
                                <h4 class="widget-title">{{__('Recent News')}}</h4>
                                <ul>
                                    <li class="tfl_post_item">
                                        <div class="tfl-recent-detail">
                                            <div class="post-thumb"><img width="75" height="75" src="https://gettreewp.demothemesflat.com/wp-content/uploads/2021/05/close-up-picture-hand-holding-wooden-tray-which-full-pots-plants-100x100.jpg" class="attachment-75x75 size-75x75 wp-post-image" alt="" loading="lazy" srcset="https://gettreewp.demothemesflat.com/wp-content/uploads/2021/05/close-up-picture-hand-holding-wooden-tray-which-full-pots-plants-100x100.jpg 100w, https://gettreewp.demothemesflat.com/wp-content/uploads/2021/05/close-up-picture-hand-holding-wooden-tray-which-full-pots-plants-150x150.jpg 150w, https://gettreewp.demothemesflat.com/wp-content/uploads/2021/05/close-up-picture-hand-holding-wooden-tray-which-full-pots-plants-300x300.jpg 300w" sizes="(max-width: 75px) 100vw, 75px" />
                                            </div>
                                            <div class="post-title-and-date">
                                                <h5 class="title"><a href="{{URL::to('blog_detail')}}" title="16 garden design ideas to make the best of your">{{__('16 garden design ideas to make the best of your')}}</a></h5>
                                                <p class="post-meta"> <i class="far fa-calendar-alt"></i> <span>{{__('May')}} 8, 2021</span>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="tfl_post_item">
                                        <div class="tfl-recent-detail">
                                            <div class="post-thumb"><img width="75" height="75" src="https://gettreewp.demothemesflat.com/wp-content/uploads/2021/02/blog-thumb-100x100.png" class="attachment-75x75 size-75x75 wp-post-image" alt="" loading="lazy" srcset="https://gettreewp.demothemesflat.com/wp-content/uploads/2021/02/blog-thumb-100x100.png 100w, https://gettreewp.demothemesflat.com/wp-content/uploads/2021/02/blog-thumb-150x150.png 150w, https://gettreewp.demothemesflat.com/wp-content/uploads/2021/02/blog-thumb-300x300.png 300w" sizes="(max-width: 75px) 100vw, 75px" />
                                            </div>
                                            <div class="post-title-and-date">
                                                <h5 class="title"><a href="{{URL::to('blog_detail')}}" title="How to grow and arrange your own wedding flowers">{{__('How to grow and arrange your own wedding flowers')}} </a></h5>
                                                <p class="post-meta"> <i class="far fa-calendar-alt"></i> <span>{{__('April')}} 14, 2021</span>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </section>
                        </aside>
                    </div>
                </div>
            </div>
        </main>
        
    <script type="text/javascript">
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>
    <link rel='stylesheet' id='elementor-post-438-css' href='https://gettreewp.demothemesflat.com/wp-content/cache/autoptimize/css/autoptimize_single_b382d58b727946cf33865b44a478af29.css?ver=1628070638' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-1-css' href='https://gettreewp.demothemesflat.com/wp-content/cache/autoptimize/css/autoptimize_single_67a51a0679e55d8dc173a448f502fb08.css?ver=1627532346' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-global-css' href='https://gettreewp.demothemesflat.com/wp-content/cache/autoptimize/css/autoptimize_single_7cefc5e68b751878122d572fb1ebe665.css?ver=1627532346' type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Rubik%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=5.8' type='text/css' media='all' />
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min.js?ver=1.2.0' id='jquery-selectBox-js'></script>
    <script type='text/javascript' src='//gettreewp.demothemesflat.com/wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min.js?ver=3.1.6' id='prettyPhoto-js'></script>
    <script type='text/javascript' id='jquery-yith-wcwl-js-extra'>
        var yith_wcwl_l10n = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "redirect_to_cart": "no",
            "multi_wishlist": "",
            "hide_add_button": "1",
            "enable_ajax_loading": "",
            "ajax_loader_url": "https:\/\/gettreewp.demothemesflat.com\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader-alt.svg",
            "remove_from_wishlist_after_add_to_cart": "1",
            "is_wishlist_responsive": "1",
            "time_to_close_prettyphoto": "3000",
            "fragments_index_glue": ".",
            "reload_on_found_variation": "1",
            "mobile_media_query": "768",
            "labels": {
                "cookie_disabled": "We are sorry, but this feature is available only if cookies on your browser are enabled.",
                "added_to_cart_message": "<div class=\"woocommerce-notices-wrapper\"><div class=\"woocommerce-message\" role=\"alert\">Product added to cart successfully<\/div><\/div>"
            },
            "actions": {
                "add_to_wishlist_action": "add_to_wishlist",
                "remove_from_wishlist_action": "remove_from_wishlist",
                "reload_wishlist_and_adding_elem_action": "reload_wishlist_and_adding_elem",
                "load_mobile_action": "load_mobile",
                "delete_item_action": "delete_item",
                "save_title_action": "save_title",
                "save_privacy_action": "save_privacy",
                "load_fragments": "load_fragments"
            }
        };
    </script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl.min.js?ver=3.0.23' id='jquery-yith-wcwl-js'></script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.7' id='regenerator-runtime-js'></script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'></script>
    <script type='text/javascript' id='contact-form-7-js-extra'>
        var wpcf7 = {
            "api": {
                "root": "https:\/\/gettreewp.demothemesflat.com\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            }
        };
    </script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.4.2' id='contact-form-7-js'></script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.5.5' defer async id='tp-tools-js'></script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.5.5' defer async id='revmin-js'></script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-content/plugins/tfl-core/assets/js/sidebar-cart.js?ver=1.0.1' id='sidebar-cart-js'></script>
    <script type='text/javascript' id='wsc-public-js-extra'>
        var tfl_wsc_localize = {
            "adminurl": "https:\/\/gettreewp.demothemesflat.com\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "ajax_atc": "0",
            "added_to_cart": "",
            "auto_open_cart": "0",
            "atc_icons": "0",
            "atc_reset": "1",
            "trigger_class": null
        };
    </script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-content/plugins/tfl-core/assets/js/tfl-wsc-public.min.js?ver=5.8' id='wsc-public-js'></script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-content/plugins/tfl-core/assets/js/tfl-main-ajax.js?ver=5.8' id='tfl-ajax-js'></script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70' id='jquery-blockui-js'></script>

    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=5.5.2' id='wc-add-to-cart-js'></script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4' id='js-cookie-js'></script>
    <script type='text/javascript' id='woocommerce-js-extra'>
        var woocommerce_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
        };
    </script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=5.5.2' id='woocommerce-js'></script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=5.5.2' id='wc-cart-fragments-js'></script>
    <script type='text/javascript' id='yith-wcqv-frontend-js-extra'>
        var yith_qv = {
            "ajaxurl": "\/wp-admin\/admin-ajax.php",
            "loader": "https:\/\/gettreewp.demothemesflat.com\/wp-content\/plugins\/yith-woocommerce-quick-view\/assets\/image\/qv-loader.gif",
            "lang": ""
        };
    </script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-content/plugins/yith-woocommerce-quick-view/assets/js/frontend.min.js?ver=1.6.3' id='yith-wcqv-frontend-js'></script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-content/themes/gettree//js/mobile-menu.js?ver=5.8' id='tfl-mobile-menu-js'></script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-content/themes/gettree//js/slick.min.js?ver=5.8' id='slick-js'></script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-content/themes/gettree//js/custom.js?ver=1.0.0' id='custom-js'></script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-includes/js/wp-embed.min.js?ver=5.8' id='wp-embed-js'></script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-content/plugins/tfl-core/assets/js/tfl-popup.min.js?ver=5.8' id='tfl-popup-js-js'></script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-content/plugins/tfl-core/addons-for-elementor/assets/js/jquery.waypoints.min.js?ver=1.0.1' id='tfl-waypoints-js'></script>
    <script type='text/javascript' id='tfl-frontend-scripts-js-extra'>
        var tfl_js_vars = {
            "custom_css": ""
        };
    </script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-content/plugins/tfl-core/addons-for-elementor/assets/js/tfl-frontend.min.js?ver=1.0.1' id='tfl-frontend-scripts-js'></script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-includes/js/underscore.min.js?ver=1.8.3' id='underscore-js'></script>
    <script type='text/javascript' id='wp-util-js-extra'>
        var _wpUtilSettings = {
            "ajax": {
                "url": "\/wp-admin\/admin-ajax.php"
            }
        };
    </script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-includes/js/wp-util.min.js?ver=5.8' id='wp-util-js'></script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js?ver=5.5.2' id='wc-add-to-cart-variation-js'></script>
    <script type='text/javascript' id='wc-single-product-js-extra'>
        var wc_single_product_params = {
            "i18n_required_rating_text": "Please select a rating",
            "review_rating_required": "yes",
            "flexslider": {
                "rtl": false,
                "animation": "slide",
                "smoothHeight": true,
                "directionNav": false,
                "controlNav": "thumbnails",
                "slideshow": false,
                "animationSpeed": 500,
                "animationLoop": false,
                "allowOneSlide": false
            },
            "zoom_enabled": "",
            "zoom_options": [],
            "photoswipe_enabled": "",
            "photoswipe_options": {
                "shareEl": false,
                "closeOnScroll": false,
                "history": false,
                "hideAnimationDuration": 0,
                "showAnimationDuration": 0
            },
            "flexslider_enabled": ""
        };
    </script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-content/plugins/woocommerce/assets/js/frontend/single-product.min.js?ver=5.5.2' id='wc-single-product-js'></script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.3.1' id='elementor-webpack-runtime-js'></script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.3.1' id='elementor-frontend-modules-js'></script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2' id='elementor-waypoints-js'></script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-includes/js/jquery/ui/core.min.js?ver=1.12.1' id='jquery-ui-core-js'></script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=5.3.6' id='swiper-js'></script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-content/plugins/elementor/assets/lib/share-link/share-link.min.js?ver=3.3.1' id='share-link-js'></script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.8.1' id='elementor-dialog-js'></script>
    <script type='text/javascript' id='elementor-frontend-js-before'>
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile",
                        "value": 767,
                        "direction": "max",
                        "is_enabled": true,
                        "default_value": 767
                    },
                    "mobile_extra": {
                        "label": "Mobile Extra",
                        "value": 880,
                        "direction": "max",
                        "is_enabled": false,
                        "default_value": 880
                    },
                    "tablet": {
                        "label": "Tablet",
                        "value": 1024,
                        "direction": "max",
                        "is_enabled": true,
                        "default_value": 1024
                    },
                    "tablet_extra": {
                        "label": "Tablet Extra",
                        "value": 1365,
                        "direction": "max",
                        "is_enabled": false,
                        "default_value": 1365
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1620,
                        "direction": "max",
                        "is_enabled": false,
                        "default_value": 1620
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "direction": "min",
                        "is_enabled": false,
                        "default_value": 2400
                    }
                }
            },
            "version": "3.3.1",
            "is_static": false,
            "experimentalFeatures": {
                "e_dom_optimization": true,
                "a11y_improvements": true,
                "e_import_export": true,
                "landing-pages": true,
                "elements-color-picker": true,
                "admin-top-bar": true
            },
            "urls": {
                "assets": "https:\/\/gettreewp.demothemesflat.com\/wp-content\/plugins\/elementor\/assets\/"
            },
            "settings": {
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 0,
                "title": "News &#8211; Gettree",
                "excerpt": ""
            }
        };
    </script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.3.1' id='elementor-frontend-js'></script>
    <script type='text/javascript' src='https://gettreewp.demothemesflat.com/wp-content/plugins/elementor/assets/js/preloaded-modules.min.js?ver=3.3.1' id='preloaded-modules-js'></script>
</body>

</html>