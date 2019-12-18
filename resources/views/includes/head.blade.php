<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="profile" href="{{asset('http://gmpg.org/xfn/11')}}">
    <link rel="pingback" href="{{asset('xmlrpc.php')}}">
    
<title>{{$title}}</title>
    <link rel='dns-prefetch' href='{{asset('http://fonts.googleapis.com/')}}' />
    <link rel='dns-prefetch' href='{{asset('http://s.w.org/')}}' />
    <link rel="alternate" type="application/rss+xml" title="WP Education &raquo; Feed" href="{{asset('feed/index.html')}}" />
    <link rel="alternate" type="application/rss+xml" title="WP Education &raquo; Comments Feed" href="{{asset('comments/feed/index.html')}}" />
    <link rel="alternate" type="text/calendar" title="WP Education &raquo; iCal Feed" href="{{asset('events/indexedf3.html?ical=1')}}" />
            <script type="text/javascript">
                window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.4\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.4\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/wp-education.xoothemes.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.5"}};
                !function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55357,56692,8205,9792,65039],[55357,56692,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
            </script>
            <style type="text/css">
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 .07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
    </style>
    <link rel='stylesheet' id='dashicons-css'  href='{{asset('wp-includes/css/dashicons.min55fe.css?ver=4.9.5')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='theme-my-login-css'  href='{{asset('wp-content/plugins/theme-my-login/theme-my-login9d94.css?ver=6.4.10')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='lp-course-wishlist-style-css'  href='{{asset('wp-content/plugins/learnpress-wishlist/assets/css/wishlist55fe.css?ver=4.9.5')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='educationpress-education-icon-collection-css'  href='{{asset('wp-content/themes/wp-education/assets/css/education-icon-collection5152.css?ver=1.0')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'  href='{{asset('wp-content/plugins/contact-form-7/includes/css/styles972f.css?ver=5.0.1')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='searchandfilter-css'  href='{{asset('wp-content/plugins/search-filter/style68b3.css?ver=1')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css'  href='{{asset('wp-content/plugins/woocommerce/assets/css/woocommerce-layout7984.css?ver=3.3.4')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'  href='{{asset('wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen7984.css?ver=3.3.4')}}' type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'  href='{{asset('wp-content/plugins/woocommerce/assets/css/woocommerce7984.css?ver=3.3.4')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='tribe-accessibility-css-css'  href='{{asset('wp-content/plugins/the-events-calendar/common/src/resources/css/accessibility.mind714.css?ver=4.7.10')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='tribe-events-full-calendar-style-css'  href='{{asset('wp-content/plugins/the-events-calendar/src/resources/css/tribe-events-full.min4e7f.css?ver=4.6.13')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='tribe-events-calendar-style-css'  href='{{asset('wp-content/plugins/the-events-calendar/src/resources/css/tribe-events-theme.min4e7f.css?ver=4.6.13')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='tribe-events-calendar-full-mobile-style-css'  href='{{asset('wp-content/plugins/the-events-calendar/src/resources/css/tribe-events-full-mobile.min4e7f.css?ver=4.6.13')}}' type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='tribe-events-calendar-mobile-style-css'  href='{{asset('wp-content/plugins/the-events-calendar/src/resources/css/tribe-events-theme-mobile.min4e7f.css?ver=4.6.13')}}' type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='educationpress-style-css'  href='{{asset('wp-content/themes/wp-education/style55fe.css?ver=4.9.5')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css'  href='{{asset('wp-content/themes/wp-education/css/bootstrap.mine485.css?ver=3.3.6')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='owl-carousel-css'  href='{{asset('wp-content/themes/wp-education/css/owl.carousel3ba1.css?ver=1.3.3')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesoume-css'  href='{{asset('wp-content/themes/wp-education/assets/css/font-awesome.min4698.css?ver=4.6.3')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='educationpress-main-style-css'  href='{{asset('wp-content/themes/wp-education/css/main5152.css?ver=1.0')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='educationpress-color-css'  href='{{asset('wp-content/themes/wp-education/css/color5152.css?ver=1.0')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='educationpress-custom-css'  href='{{asset('wp-content/themes/wp-education/css/custom5152.css?ver=1.0')}}' type='text/css' media='all' />
    <style id='educationpress-custom-inline-css' type='text/css'>
    
                .logo-wrapper .custom-logo-link{
                    margin-top: 18px;
                    margin-bottom: 18px;
                }
                .ep-pre-header {
                    background: #25c1e7;
                    color: #ffffff;
                }
                .ep-pre-header a {
                    color: #ffffff;
                }
                @media (min-width: 768px){
                    .navbar.navbar-educationpress .navbar-nav>li>a {
                        padding-top: 35px;
                        padding-bottom: 35px;
                        padding-left: 15px;
                        padding-right: 15px;
                    }
                }
                .footer-widgets {
                    padding-top: 75px;
                    padding-bottom: 75px;
                    background: #2d3339;
                    color: #999999;
                }
                .footer-widgets .widget-title {
                    color: #ffffff;
                }
                .footer-widgets a {
                    color: #ffffff;
                }
                .site-info {
                    padding-top: 15px;
                    padding-bottom: 15px;
                    background: #23272d;
                    color: #575c61;
                }
                .site-info a {
                    color: #ffffff;
                }
                .ep-course-slider .ep-course-item figcaption {
                    min-height: 170px;
                }
                body.ep-no-page-title.ep-page-has-margin-top.ep-page-header-transparent .site-content {
                    margin-top: 130px;
                }
                .navbar.navbar-educationpress {
                    background: #ffffff;
                }
                body.page .navbar.navbar-educationpress.header-transparent .site-header-wrapper, body.ep-global-page-header-transparent .navbar.navbar-educationpress .site-header-wrapper {
                    background: rgba(0, 0, 0, 0.45)!important;
                }
                .navbar-default .navbar-nav>li>a {
                    color: #333333;
                }
                .navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover {
                    color: #666666;
                }
                .header-transparent.navbar-educationpress .navbar-nav>li>a, body.ep-global-page-header-transparent .navbar-educationpress .navbar-nav>li>a, .logo-wrapper .site-title.site-title-transparent a {
                    color: #dadada;
                }
                .header-transparent.navbar-educationpress .navbar-nav>li>a:hover, body.ep-global-page-header-transparent .navbar-educationpress .navbar-nav>li>a:hover {
                    color: #ffffff;
                }
                .navbar-educationpress .ep-main-menu-wrapper .dropdown-menu {
                    background: #ffffff;
                }
                .navbar-educationpress .ep-main-menu-wrapper .dropdown-menu li>a {
                    color: #333333;
                }
                @media (min-width: 768px){
                    .navbar-educationpress .ep-main-menu-wrapper .dropdown-menu {
                        min-width: 260px;
                    }
                }
                .educationpress-page-title-area:before {
                    background: rgba(45,51,57,0.75);
                }
                .educationpress-page-title-area {
                    padding-top: 56px;
                    padding-bottom: 56px;
                }
                body {
                    color: #333333;
                    background: #f3f3f3;
                    line-height: 24px;
                    font-size: 14px;
                }
                #order_review_heading:before,#tribe-bar-form .tribe-bar-submit input[type=submit],#tribe-events .tribe-events-button,#tribe-events .tribe-events-button:hover,#tribe-events-content .tribe-events-tooltip h4,#tribe_events_filters_wrapper input[type=submit],.btn-primary,.button-primary,.cart_totals>h2:before,.cross-sells>h2:before,.entry-content>.container>.vc_row.ep_vc_row-background-primary,.entry-content>.vc_row.ep_vc_row-background-primary,.entry-tab-inner .ep-section-title:after,.ep-404-additional-info .widget-title:after,.ep-article.sticky figcaption:before,.ep-course-ajax-search-result-area li a:hover,.ep-course-category-item,.ep-course-grid .course-category,.ep-course-slider .course-category,.ep-course-slider.ep-default-width-slider.owl-theme .owl-controls .owl-buttons>div,.ep-course-slider.owl-theme .owl-controls .owl-page span,.ep-event-slider.owl-theme .owl-controls .owl-buttons>div,.ep-event-slider.owl-theme .owl-controls .owl-page span,.ep-feature-title h3:before,.ep-instructor-content-type-slider.owl-theme .owl-controls .owl-buttons>div,.ep-lms-statistics .ep-counter-number,.ep-nav-tabs>li>a::after,.ep-post-grid .ep-post-category,.ep-post-slider .ep-post-category,.ep-post-slider.owl-theme .owl-controls .owl-buttons>div,.ep-post-slider.owl-theme .owl-controls .owl-page span,.ep-pre-header,.ep-section-title.ep-section-title-border:after,.ep-social-icons ul li a,.ep-tab-pane-reviews .course-rating .detailed-rating .stars>div.bar .full_bar>div,.ep-testimonials.owl-theme .owl-controls .owl-page span,.ep-vc-theme-btn-primary-container .ep-vc-theme-btn-primary,.ep_cart_icon>a>span,.ep_course_category_list a:focus,.ep_course_category_list a:hover,.ep_course_category_list li.current-cat a,.ep_profile_login_page>a>span,.ep_theme_paignation .pager .active a,.ep_theme_paignation .pager .active span,.ep_theme_paignation .pager li>a:focus,.ep_theme_paignation .pager li>a:hover,.ep_vc_progress_bar.vc_progress_bar .vc_single_bar .vc_bar,.learn-press .course-meta>div .value.lp-progress-bar .lp-progress-value,.list-inline a:focus,.list-inline a:hover,.navbar.navbar-educationpress.ep-menu-hover-border .navbar-nav>li>a:after,.related.products>h2:before,.site-content .learn-press-pagination ul>li a:focus,.site-content .learn-press-pagination ul>li a:hover,.site-content .learn-press-pagination ul>li span,.site-content .lp-course-progress .lp-progress-bar .lp-progress-value,.slicknav_menu .slicknav_btn.slicknav_open,.slicknav_menu .slicknav_icon-bar,.tml-submit-wrap input[type=submit],.tribe-events-button,.tribe-events-button.tribe-active:hover,.tribe-events-button.tribe-inactive,.tribe-events-button:hover,.tribe-events-calendar td.tribe-events-present div[id*=tribe-events-daynum-],.tribe-events-calendar td.tribe-events-present div[id*=tribe-events-daynum-]>a,.tribe-events-calendar thead th,.tribe-events-day .tribe-events-day-time-slot h5:before,.tribe-events-list .tribe-events-event-cost span,.tribe-events-list-separator-month:before,.tribe-events-read-more,.up-sells.upsells.products>h2:before,.vc_tta-container .vc_tta-accordion.ep-vc-tta-accordion-theme-default .vc_tta-panel.vc_active .vc_tta-panel-heading,.vc_tta-container .vc_tta-accordion.ep-vc-tta-accordion-theme-default.vc_tta.vc_general .vc_tta-panel .vc_tta-panel-heading:hover,.widget-area .widget-title:after,.widget.widget_product_tag_cloud a:focus,.widget.widget_product_tag_cloud a:hover,.widget.widget_tag_cloud a:focus,.widget.widget_tag_cloud a:hover,.woocommerce #respond input#submit,.woocommerce #respond input#submit.alt,.woocommerce .widget_price_filter .ui-slider .ui-slider-handle,.woocommerce .widget_price_filter .ui-slider .ui-slider-range,.woocommerce a.button,.woocommerce a.button.alt,.woocommerce button.button,.woocommerce button.button.alt,.woocommerce div.product div.images .woocommerce-product-gallery__trigger,.woocommerce input.button,.woocommerce input.button.alt,.woocommerce nav.woocommerce-pagination ul li a:focus,.woocommerce nav.woocommerce-pagination ul li a:hover,.woocommerce nav.woocommerce-pagination ul li span.current,.woocommerce span.onsale,.woocommerce-Address-title>h3:before,.woocommerce-billing-fields>h3:before,.woocommerce-shipping-fields>h3:before,body #course-curriculum-popup #popup-main #popup-header,button.btn-primary,div.sharedaddy h3.sd-title:after,input[type=submit].btn-primary,input[type=submit].button-primary,input[type=submit].wpcf7-submit,input[type=button].btn-primary,input[type=reset].btn-primary{ background:#25c1e7}#learn-press-course-curriculum .section .course-item a:focus,#learn-press-course-curriculum .section .course-item a:hover,.dropdown-menu>.active>a,.dropdown-menu>.active>a:focus,.dropdown-menu>.active>a:hover,.entry-footer .edit-link a:focus,.entry-footer .edit-link a:hover,.ep-archive-course-item .ep-course-price,.ep-article .entry-meta a:focus,.ep-article .entry-meta a:hover,.ep-article .entry-title a:focus,.ep-article .entry-title a:hover,.ep-course-grid .ep-course-price,.ep-course-item .course-title:focus,.ep-course-item .course-title:hover,.ep-course-search .ep-lms-stats>span i,.ep-course-slider .ep-course-price,.ep-event-grid .ep-event-price,.ep-event-slider .ep-event-price,.ep-features.ep-features-icon-primary-color .ep-feature-icon i,.ep-media-heading a:focus,.ep-media-heading a:hover,.ep-nav-tabs>li.active>a,.ep-nav-tabs>li>a:hover,.ep-post-meta a:hover,.ep_vc_row-color-white .ep-post-slider .ep-post-meta a:hover,.header-transparent.navbar-educationpress .navbar-nav>li.current-menu-ancestor>a,.learn-press-user-profile .learn-press-tabs-wrapper-x .learn-press-subtabs>li.current a,.logged-in-as a:focus,.logged-in-as a:hover,.nav-tabs>li.active>a,.nav-tabs>li.active>a:focus,.nav-tabs>li.active>a:hover,.navbar-educationpress .navbar-nav .current-menu-item.active>a,.navbar-educationpress .navbar-nav .current-menu-item.active>a:focus,.navbar-educationpress .navbar-nav .current-menu-item.active>a:hover,.navbar-educationpress .navbar-nav>.current-menu-parent>a,.navbar-educationpress .navbar-nav>.current-menu-parent>a:focus,.navbar-educationpress .navbar-nav>.current-menu-parent>a:hover,.site-content .learn-press-tabs .learn-press-nav-tabs .learn-press-nav-tab.active a,.slicknav_btn,.slicknav_menu .slicknav_btn.slicknav_open,.slicknav_menu .slicknav_btn.slicknav_open:active,.slicknav_menu .slicknav_btn.slicknav_open:focus,.widget a:focus,.widget a:hover,.woocommerce .product_meta a,.woocommerce .woocommerce-MyAccount-content a,.woocommerce div.product form.cart .reset_variations,.wpb-fp-filter li.active,a,body.ep-global-page-header-transparent .navbar-educationpress .navbar-nav>li.current-menu-ancestor>a,body.page.ep-has-page-title .navbar-educationpress .navbar-nav>li.current-menu-ancestor>a{ color:#25c1e7}.btn-primary,.button-primary,.ep-404-additional-info .search-form .search-field:focus,.ep-course-navigations .usearchbtn:focus,.ep-course-navigations .usearchbtn:hover,.ep-course-navigations select:focus,.ep-list-grid-view .btn:focus,.ep-list-grid-view .btn:hover,.form-control:focus,.learn-press-user-profile .learn-press-tabs-wrapper-x .learn-press-subtabs>li.current,.navbar-educationpress .dropdown-menu,.site-content .learn-press-tabs .learn-press-nav-tabs .learn-press-nav-tab.active,.tml-submit-wrap input[type=submit],.vc_tta-container .vc_tta-accordion.ep-vc-tta-accordion-theme-default .vc_tta-panel.vc_active .vc_tta-panel-heading,.vc_tta-container .vc_tta-accordion.ep-vc-tta-accordion-theme-default.vc_tta.vc_general .vc_tta-panel .vc_tta-panel-heading:hover,.widget select:focus,.widget.widget_product_tag_cloud a,.widget.widget_tag_cloud a,.widget_search .search-field:focus,.woocommerce .widget_price_filter .ui-slider .ui-slider-handle,.wpb-fp-filter li.active,body #course-curriculum-popup #popup-main #popup-header,body.woocommerce div.product .woocommerce-tabs ul.tabs li.active,button.btn-primary,input[type=submit].btn-primary,input[type=submit].button-primary,input[type=submit].wpcf7-submit,input[type=range]:focus,input[type=date]:focus,input[type=month]:focus,input[type=week]:focus,input[type=time]:focus,input[type=datetime]:focus,input[type=datetime-local]:focus,input[type=color]:focus,input[type=button].btn-primary,input[type=reset].btn-primary,input[type=text]:focus,input[type=email]:focus,input[type=url]:focus,input[type=password]:focus,input[type=search]:focus,input[type=number]:focus,input[type=tel]:focus,select:focus,textarea:focus{ border-color:#25c1e7 }a:focus,a:hover{ color:#14a4c7 }#tribe-bar-form .tribe-bar-submit input[type=submit]:focus,#tribe-bar-form .tribe-bar-submit input[type=submit]:hover,#tribe-events-content .tribe-events-calendar .mobile-active:hover,#tribe-events-content .tribe-events-calendar td.tribe-events-othermonth.mobile-active,#tribe-events-content .tribe-events-calendar td.tribe-events-othermonth.mobile-active div[id*=tribe-events-daynum-],#tribe-events-content .tribe-events-calendar td.tribe-events-othermonth.mobile-active div[id*=tribe-events-daynum-] a,#tribe-events-content .tribe-events-calendar td.tribe-events-present.mobile-active:hover,.btn-primary.active,.btn-primary.disabled.focus,.btn-primary.disabled:focus,.btn-primary.disabled:hover,.btn-primary:active,.btn-primary:active.focus,.btn-primary:active:focus,.btn-primary:active:hover,.btn-primary:focus,.btn-primary:hover,.btn-primary[disabled].focus,.btn-primary[disabled]:focus,.btn-primary[disabled]:hover,.button-primary:hover,.ep-course-slider.ep-default-width-slider.owl-theme .owl-controls .owl-buttons>div:hover,.ep-event-slider.owl-theme .owl-controls .owl-buttons>div:hover,.ep-instructor-content-type-slider.owl-theme .owl-controls .owl-buttons>div:hover,.ep-post-slider.owl-theme .owl-controls .owl-buttons>div:hover,.ep-social-icons ul li a:hover,.ep_profile_login_page>a:active>span,.ep_profile_login_page>a:focus>span,.ep_profile_login_page>a:hover>span,.open>.dropdown-toggle.btn-primary,.tml-submit-wrap input[type=submit]:focus,.tml-submit-wrap input[type=submit]:hover,.tribe-events-calendar .mobile-active div[id*=tribe-events-daynum-],.tribe-events-calendar .mobile-active div[id*=tribe-events-daynum-] a,.tribe-events-calendar td.mobile-active,.tribe-events-calendar td.tribe-events-present.mobile-active,.tribe-events-calendar td.tribe-events-present.mobile-active div[id*=tribe-events-daynum-],.tribe-events-calendar td.tribe-events-present.mobile-active div[id*=tribe-events-daynum-] a,.tribe-events-read-more:focus,.tribe-events-read-more:hover,.woocommerce #respond input#submit.alt:hover,.woocommerce #respond input#submit:hover,.woocommerce a.button.alt:hover,.woocommerce a.button:hover,.woocommerce button.button.alt:hover,.woocommerce button.button:hover,.woocommerce input.button.alt:hover,.woocommerce input.button:hover,body #course-curriculum-popup #popup-main #popup-header .popup-close:hover,body #course-curriculum-popup #popup-main #popup-header .sidebar-hide-btn:hover,body #course-curriculum-popup #popup-main #popup-header .sidebar-show-btn:hover,fieldset[disabled] .btn-primary.focus,fieldset[disabled] .btn-primary:focus,fieldset[disabled] .btn-primary:hover,input[type=submit].button-primary:hover,input[type=submit].wpcf7-submit:focus,input[type=submit].wpcf7-submit:hover{ background:#14a4c7}.ep-course-grid .course-category:before,.ep-course-slider .course-category:before,.ep-post-grid .ep-post-category:before,.ep-post-slider .ep-post-category:before{border-right-color:#14a4c7}.btn-primary.active,.btn-primary:active,.btn-primary:active.focus,.btn-primary:active:focus,.btn-primary:active:hover,.btn-primary:focus,.btn-primary:hover,.mc4wp-form-fields input[type=text]:focus,.open>.dropdown-toggle.btn-primary,.tribe-events-calendar thead th,.tribe-events-list .tribe-events-event-cost span,.widget_search .search-field:focus,body #course-curriculum-popup #popup-main #popup-header .popup-menu{border-color:#14a4c7}.learn-press-user-profile .learn-press-tabs-wrapper-x .learn-press-subtabs>li a:hover,.learn-press-user-profile .learn-press-tabs-wrapper-x .learn-press-subtabs>li.current a,.learn-press-user-profile .learn-press-tabs.ep-user-profile-menu>li.current a,.learn-press-user-profile .learn-press-tabs.ep-user-profile-menu>li>a:hover,.woocommerce-MyAccount-navigation ul li a:hover,.woocommerce-MyAccount-navigation ul li.is-active a{background:rgba( 51, 204, 255, 0.1 )}.learn-press-user-profile .learn-press-tabs.ep-user-profile-menu>li a,.learn-press-user-profile .learn-press-tabs.ep-user-profile-menu>li:last-child a,.woocommerce-MyAccount-navigation ul li a{border-color:rgba( 51, 204, 255, 0.1 )}
    </style>
    <link rel='stylesheet' id='educationpress-main-fonts-css'  href='{{asset('https://fonts.googleapis.com/css?family=Montserrat%3A400%2C600%2C700&amp;subset')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='ep-woocommerce-main-css'  href='{{asset('wp-content/themes/wp-education/css/ep-woocommerce-main5152.css?ver=1.0')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='js_composer_front-css'  href='{{asset('wp-content/plugins/js_composer/assets/css/js_composer.min8b06.css?ver=5.4.7')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css'  href='{{asset('wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/font-awesome.min8b06.css?ver=5.4.7')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='learn-press-css'  href='{{asset('wp-content/plugins/learnpress/assets/css/learnpress8adc.css?nocache=1524075533.8528&amp;ver=3.0.5')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='jquery-scrollbar-css'  href='{{asset('wp-content/plugins/learnpress/assets/js/vendor/jquery-scrollbar/jquery.scrollbar8adc.css?nocache=1524075533.8528&amp;ver=3.0.5')}}' type='text/css' media='all' />
    <script type='text/javascript' src='{{asset('wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4')}}'></script>
    <script type='text/javascript' src='{{asset('wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1')}}'></script>
    <script type='text/javascript' src='{{asset('wp-content/plugins/learnpress-wishlist/assets/js/wishlist55fe.js?ver=4.9.5')}}'></script>
    <script type='text/javascript'>
    /* <![CDATA[ */
    var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"http:\/\/wp-education.xoothemes.com\/wc-cart\/","is_cart":"","cart_redirect_after_add":"no"};
    /* ]]> */
    </script>
    <script type='text/javascript' src='{{asset('wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min7984.js?ver=3.3.4')}}'></script>
    <script type='text/javascript' src='{{asset('wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart8b06.js?ver=5.4.7')}}'></script>
    <script type='text/javascript' src='{{asset('wp-content/plugins/learnpress/assets/js/vendor/watch8adc.js?nocache=1524075533.8528&amp;ver=3.0.5')}}'></script>
    <script type='text/javascript' src='{{asset('wp-content/plugins/learnpress/assets/js/vendor/jquery.alert8adc.js?nocache=1524075533.8528&amp;ver=3.0.5')}}'></script>
    <script type='text/javascript' src='{{asset('wp-content/plugins/learnpress/assets/js/vendor/circle-bar8adc.js?nocache=1524075533.8528&amp;ver=3.0.5')}}'></script>
    <script src='{{asset('wp-content/plugins/the-events-calendar/common/src/resources/js/underscore-before.js')}}'></script>
    <script type='text/javascript' src='{{asset('wp-includes/js/underscore.min4511.js?ver=1.8.3')}}'></script>
    <script src='{{asset('wp-content/plugins/the-events-calendar/common/src/resources/js/underscore-after.js')}}'></script>
    <script type='text/javascript'>
    /* <![CDATA[ */
    var userSettings = {"url":"\/","uid":"0","time":"1524075533","secure":""};
    /* ]]> */
    </script>
    <script type='text/javascript' src='{{asset('wp-includes/js/utils.min55fe.js?ver=4.9.5')}}'></script>
    <script type='text/javascript' src='{{asset('wp-content/plugins/learnpress/assets/js/global8adc.js?nocache=1524075533.8528&amp;ver=3.0.5')}}'></script>
    <script type='text/javascript' src='{{asset('wp-content/plugins/learnpress/assets/js/vendor/jquery-scrollbar/jquery.scrollbar8adc.js?nocache=1524075533.8528&amp;ver=3.0.5')}}'></script>
    <script type='text/javascript' src='{{asset('wp-content/plugins/learnpress/assets/js/frontend/learnpress8adc.js?nocache=1524075533.8528&amp;ver=3.0.5')}}'></script>
    <script type='text/javascript' src='{{asset('wp-content/plugins/learnpress/assets/js/frontend/course8adc.js?nocache=1524075533.8528&amp;ver=3.0.5')}}'></script>
    <script type='text/javascript' src='{{asset('wp-content/plugins/learnpress/assets/js/vendor/jquery.scrollTo8adc.js?nocache=1524075533.8528&amp;ver=3.0.5')}}'></script>
    <script type='text/javascript' src='{{asset('wp-content/plugins/learnpress/assets/js/frontend/become-teacher8adc.js?nocache=1524075533.8528&amp;ver=3.0.5')}}'></script>
    <link rel='https://api.w.org/' href='{{asset('wp-json/index.html')}}' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="{{asset('xmlrpc0db0.php?rsd')}}" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{{asset('wp-includes/wlwmanifest.xml')}}" /> 
    <meta name="generator" content="WordPress 4.9.5" />
    <meta name="generator" content="WooCommerce 3.3.4" />
    <link rel="canonical" href="{{asset('index.html')}}" />
    <link rel='shortlink' href='{{asset('index.html')}}' />
    <link rel="alternate" type="application/json+oembed" href="{{asset('wp-json/oembed/1.0/embede2e9.json?url=http%3A%2F%2Fwp-education.xoothemes.com%2F')}}" />
    <link rel="alternate" type="text/xml+oembed" href="{{asset('wp-json/oembed/1.0/embed83e5?url=http%3A%2F%2Fwp-education.xoothemes.com%2F&amp;format=xml')}}" />
    <meta name="tec-api-version" content="v1"><meta name="tec-api-origin" content="http://wp-education.xoothemes.com"><link rel="https://theeventscalendar.com/" href="{{asset('wp-json/tribe/events/v1/index.html')}}" />	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
                <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
            <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="http://wp-education.xoothemes.com/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><link rel="icon" href="{{asset('wp-content/uploads/2017/02/cropped-graduate-cap-32x32.png')}}" sizes="32x32" />
    <link rel="icon" href="{{asset('wp-content/uploads/2017/02/cropped-graduate-cap-192x192.png" sizes="192x192')}}" />
    <link rel="apple-touch-icon-precomposed" href="{{asset('wp-content/uploads/2017/02/cropped-graduate-cap-180x180.png')}}" />
    <meta name="msapplication-TileImage" content="http://wp-education.xoothemes.com/wp-content/uploads/2017/02/cropped-graduate-cap-270x270.png" />
    <style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1485627531328{background-image: url(wp-content/uploads/2016/11/search-bg9843.jpg?id=2679) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1485627632602{background-color: rgba(237,237,237,0.3) !important;*background-color: rgb(237,237,237) !important;}.vc_custom_1485628158079{background-color: rgba(237,237,237,0.3) !important;*background-color: rgb(237,237,237) !important;}.vc_custom_1485457116867{background-image: url(http://wp-education.xoothemes.com/wp-content/uploads/2016/11/geometry2.png?id=1969) !important;background-position: 0 0 !important;background-repeat: repeat !important;}.vc_custom_1485628332956{background-position: 0 0 !important;background-repeat: repeat !important;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>
    <link rel='stylesheet' href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css')}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>