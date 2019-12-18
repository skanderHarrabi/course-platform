<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from wp-education.xoothemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Apr 2018 18:18:55 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
@include('includes.head')

<body class="home page-template-default page page-id-31 wp-custom-logo tribe-no-js ep-page-layout-full-width ep-no-page-title ep-no-page-sidebar ep-page-header-default wpb-js-composer js-comp-ver-5.4.7 vc_responsive">
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
	<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
@include('includes.header')
<div class="educationpress-page-title-area">
    <div class="educationpress-page-title">
        <div class="container">
		<h1 class="entry-title">{{$f->title}}</h1>
        </div>
    </div>                        
</div>
    



	<!-- #content -->
@yield('content')



	@include('includes.footer')
</div><!-- #page -->
<!--Start of Tawk.to Script (0.3.3)-->

<!--End of Tawk.to Script (0.3.3)-->		<script>
		( function ( body ) {
			'use strict';
			body.className = body.className.replace( /\btribe-no-js\b/, 'tribe-js' );
		} )( document.body );
		</script>
		<script> /* <![CDATA[ */var tribe_l10n_datatables = {"aria":{"sort_ascending":": activate to sort column ascending","sort_descending":": activate to sort column descending"},"length_menu":"Show _MENU_ entries","empty_table":"No data available in table","info":"Showing _START_ to _END_ of _TOTAL_ entries","info_empty":"Showing 0 to 0 of 0 entries","info_filtered":"(filtered from _MAX_ total entries)","zero_records":"No matching records found","search":"Search:","all_selected_text":"All items on this page were selected. ","select_all_link":"Select all pages","clear_selection":"Clear Selection.","pagination":{"all":"All","next":"Next","previous":"Previous"},"select":{"rows":{"0":"","_":": Selected %d rows","1":": Selected 1 row"}},"datepicker":{"dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["January","February","March","April","May","June","July","August","September","October","November","December"],"nextText":"Next","prevText":"Prev","currentText":"Today","closeText":"Done"}};/* ]]> */ </script><script type="text/javascript">(function() {function addEventListener(element,event,handler) {
	if(element.addEventListener) {
		element.addEventListener(event,handler, false);
	} else if(element.attachEvent){
		element.attachEvent('on'+event,handler);
	}
}function maybePrefixUrlField() {
	if(this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
		this.value = "http://" + this.value;
	}
}

var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
if( urlFields && urlFields.length > 0 ) {
	for( var j=0; j < urlFields.length; j++ ) {
		addEventListener(urlFields[j],'blur',maybePrefixUrlField);
	}
}/* test if browser supports date fields */
var testInput = document.createElement('input');
testInput.setAttribute('type', 'date');
if( testInput.type !== 'date') {

	/* add placeholder & pattern to all date fields */
	var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');
	for(var i=0; i<dateFields.length; i++) {
		if(!dateFields[i].placeholder) {
			dateFields[i].placeholder = 'YYYY-MM-DD';
		}
		if(!dateFields[i].pattern) {
			dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
		}
	}
}

})();</script>			
<script type="text/javascript">var ep_home_url = "index.html";</script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<link rel='stylesheet' id='themify-icons-css'  href='{{asset('wp-content/themes/wp-education/assets/css/themify-icons.min5152.css?ver=1.0')}}' type='text/css' media='all' />
<link rel='stylesheet' id='devicon-icons-css'  href='{{asset('wp-content/themes/wp-education/assets/css/devicon.min5152.css?ver=1.0')}}' type='text/css' media='all' />
<link rel='stylesheet' id='educationpress-testimonial-fonts-css'  href='{{asset('https://fonts.googleapis.com/css?family=Droid+Serif&amp;subset')}}' type='text/css' media='all' />
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"http:\/\/wp-education.xoothemes.com\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
/* ]]> */
</script>
<script type='text/javascript' src="{{asset('wp-content/plugins/contact-form-7/includes/js/scripts972f.js?ver=5.0.1')}}"></script>
<script type='text/javascript' src="{{asset('wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70')}}"></script>
<script type='text/javascript' src="{{asset('wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4')}}"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src="{{asset('wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min7984.js?ver=3.3.4')}}"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_d49a650b77bd71b576896427793f7560","fragment_name":"wc_fragments_d49a650b77bd71b576896427793f7560"};
/* ]]> */
</script>
<script type='text/javascript' src="{{asset('wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min7984.js?ver=3.3.4')}}"></script>
<script type='text/javascript' src="{{asset('wp-content/themes/wp-education/js/bootstrap.mine485.js?ver=3.3.6')}}"></script>
<script type='text/javascript' src="{{asset('wp-content/themes/wp-education/js/jquery.slicknav.min4b68.js?ver=1.0.4')}}"></script>
<script type='text/javascript' src="{{asset('wp-content/themes/wp-education/js/owl.carousele7f0.js?ver=1.3.1')}}"></script>
<script type='text/javascript' src="{{asset('wp-content/themes/wp-education/js/main5152.js?ver=1.0')}}"></script>
<script type='text/javascript'>
(function($) { 
    'use strict';
})(jQuery);
</script>
<script type='text/javascript' src="{{asset('wp-content/themes/wp-education/js/skip-link-focus-fix4a7d.js?ver=20151215')}}"></script>
<script type='text/javascript' src="{{asset('wp-includes/js/wp-embed.min55fe.js?ver=4.9.5')}}"></script>
<script type='text/javascript' src="{{asset('wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min8b06.js?ver=5.4.7')}}"></script>
<script type='text/javascript' src="{{asset('wp-content/plugins/js_composer/assets/lib/bower/skrollr/dist/skrollr.min8b06.js?ver=5.4.7')}}"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var mc4wp_forms_config = [];
/* ]]> */
</script>
<script type='text/javascript' src="{{asset('wp-content/plugins/mailchimp-for-wp/assets/js/forms-api.minbc19.js?ver=4.2')}}"></script>
<!--[if lte IE 9]>
<script type='text/javascript' src='http://wp-education.xoothemes.com/wp-content/plugins/mailchimp-for-wp/assets/js/third-party/placeholders.min.js?ver=4.2'></script>
<![endif]-->
<script type='text/javascript'>
/* <![CDATA[ */
var lpGlobalSettings = {"url":null,"siteurl":"http:\/\/wp-education.xoothemes.com","ajax":"http:\/\/wp-education.xoothemes.com\/wp-admin\/admin-ajax.php","theme":"wp-education"};
/* ]]> */
</script>
<script type='text/javascript'>
/* <![CDATA[ */
var lpCheckoutSettings = {"ajaxurl":"http:\/\/wp-education.xoothemes.com","user_waiting_payment":null,"user_checkout":"","i18n_processing":"Processing","i18n_redirecting":"Redirecting","i18n_invalid_field":"Invalid field","i18n_unknown_error":"Unknown error","i18n_place_order":"Place order"};
/* ]]> */
</script>
<script type='text/javascript'>
/* <![CDATA[ */
var lpProfileUserSettings = {"processing":"Processing","redirecting":"Redirecting","avatar_size":{"width":150,"height":150}};
/* ]]> */
</script>
<script type='text/javascript'>
/* <![CDATA[ */
var lpCourseSettings = [""];
/* ]]> */
</script>
<script type='text/javascript'>
/* <![CDATA[ */
var lpQuizSettings = [];
/* ]]> */
</script>
<script>
        @if(Session::has('message'))
            var type="{{Session::get('alert-type','info')}}"
    
    
            switch(type){
                case 'info':
                     toastr.info("{{ Session::get('message') }}");
                     break;
                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;
                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif
    </script>
@yield('scripts')

</body>

</html>