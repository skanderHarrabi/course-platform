<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from wp-education.xoothemes.com/register/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Apr 2018 18:41:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
@include('includes.head')

<body class="page-template page-template-page-templates page-template-login-register-page page-template-page-templateslogin-register-page-php page page-id-14 wp-custom-logo tribe-no-js ep-page-layout-grid ep-has-page-title ep-no-page-sidebar ep-page-header-default wpb-js-composer js-comp-ver-5.4.7 vc_responsive">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

	
			@include('includes.header')<!-- #masthead -->
		
					<div class="educationpress-page-title-area">
					<div class="educationpress-page-title">
						<div class="container">
							<h1 class="entry-title">Register</h1>
						</div>
					</div>
											<div class="educationpress-breadcrumb-wrapper">
							<div class="container">
								
<nav class="learn-press-breadcrumb" ><a href="../index.html">Home</a><i class="fa fa-caret-right" aria-hidden="true"></i>Register</nav>							</div>
						</div>
									</div>
			
	<div id="content" class="site-content container">
					<div class="educationpress-main-content-inner">
		
	<div id="primary" class="content-area col-md-6 col-md-offset-3">
		<main id="main" class="site-main">

			
<article id="post-14" class="post-14 page type-page status-publish hentry">
	<div class="entry-content">
		<div class="tml tml-register" id="theme-my-login">
    <p class="message">Register For This Site</p>
    
     @if(count($errors)>0)
       @foreach($errors->all() as $error)

        <p class="alert alert-danger">{{$error}}</p>
       @endforeach
    @endif 
	<form name="registerform" action="{{route('front.registerpost')}}" method="post">
            {{csrf_field()}}
        <p class="tml-user-login-wrap">
			<label for="user_login">Username</label>
			<input type="text" name="name" id="user_login" class="input" value="{{old('name')}}" size="20" />
		</p>
		
		<p class="tml-user-email-wrap">
			<label for="user_email">E-mail</label>
			<input type="text" name="email" id="user_email" class="input" value="{{old('email')}}" size="20" />
        </p>
        <p class="tml-user-email-wrap">
			<label for="user_email">Password</label>
			<input type="password" name="password" id="user_email" class="input" size="20" />
        </p>
        <p class="tml-user-email-wrap">
			<label for="user_email">Confirm Password</label>
			<input type="password" name="password_confirmation" id="user_email" class="input"  size="20" />
		</p>

		
		<p class="tml-registration-confirmation" id="reg_passmail">Registration confirmation will be e-mailed to you.</p>

		<p class="tml-submit-wrap">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
		</p>
	</form>
	<ul class="tml-action-links">
<li><a href="{{route('front.login')}}" rel="nofollow">Log In</a></li>
<li><a href="" rel="nofollow">Lost Password</a></li>
</ul>
</div>


	</div><!-- .entry-content -->

	</article><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->

					</div> <!-- /.educationpress-main-content-inner -->
			</div><!-- #content -->

	@include('includes.footer')<!-- #colophon -->
</div><!-- #page -->
<!--Start of Tawk.to Script (0.3.3)-->

<!--End of Tawk.to Script (0.3.3)-->		<script>
		( function ( body ) {
			'use strict';
			body.className = body.className.replace( /\btribe-no-js\b/, 'tribe-js' );
		} )( document.body );
		</script>
		<script> /* <![CDATA[ */var tribe_l10n_datatables = {"aria":{"sort_ascending":": activate to sort column ascending","sort_descending":": activate to sort column descending"},"length_menu":"Show _MENU_ entries","empty_table":"No data available in table","info":"Showing _START_ to _END_ of _TOTAL_ entries","info_empty":"Showing 0 to 0 of 0 entries","info_filtered":"(filtered from _MAX_ total entries)","zero_records":"No matching records found","search":"Search:","all_selected_text":"All items on this page were selected. ","select_all_link":"Select all pages","clear_selection":"Clear Selection.","pagination":{"all":"All","next":"Next","previous":"Previous"},"select":{"rows":{"0":"","_":": Selected %d rows","1":": Selected 1 row"}},"datepicker":{"dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["January","February","March","April","May","June","July","August","September","October","November","December"],"nextText":"Next","prevText":"Prev","currentText":"Today","closeText":"Done"}};/* ]]> */ </script><script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"http:\/\/wp-education.xoothemes.com\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
/* ]]> */
</script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_d49a650b77bd71b576896427793f7560","fragment_name":"wc_fragments_d49a650b77bd71b576896427793f7560"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-admin/load-scripts622f.php?c=0&amp;load%5B%5D=wp-embed&amp;ver=4.9.5'></script>
<script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/js/scripts972f.js?ver=5.0.1'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min7984.js?ver=3.3.4'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min7984.js?ver=3.3.4'></script>
<script type='text/javascript' src='../wp-content/themes/wp-education/js/bootstrap.mine485.js?ver=3.3.6'></script>
<script type='text/javascript' src='../wp-content/themes/wp-education/js/jquery.slicknav.min4b68.js?ver=1.0.4'></script>
<script type='text/javascript' src='../wp-content/themes/wp-education/js/owl.carousele7f0.js?ver=1.3.1'></script>
<script type='text/javascript' src='../wp-content/themes/wp-education/js/main5152.js?ver=1.0'></script>
<script type='text/javascript'>
(function($) { 
    'use strict';
})(jQuery);
</script>
<script type='text/javascript' src='../wp-content/themes/wp-education/js/skip-link-focus-fix4a7d.js?ver=20151215'></script>
<script type="text/javascript">
try{document.getElementById('user_login').focus();}catch(e){}
if(typeof wpOnload=='function')wpOnload()
</script>
<script type='text/javascript'>
/* <![CDATA[ */
var lpGlobalSettings = {"url":"http:\/\/wp-education.xoothemes.com\/register\/","siteurl":"http:\/\/wp-education.xoothemes.com","ajax":"http:\/\/wp-education.xoothemes.com\/wp-admin\/admin-ajax.php","theme":"wp-education"};
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
</body>

<!-- Mirrored from wp-education.xoothemes.com/register/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Apr 2018 18:42:03 GMT -->
</html>