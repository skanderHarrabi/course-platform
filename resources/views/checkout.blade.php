<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from wp-education.xoothemes.com/wc-cart/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Apr 2018 18:24:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
@include('includes.head')

<body class="page-template-default page page-id-2190 wp-custom-logo woocommerce-cart woocommerce-page tribe-no-js ep-page-layout-grid ep-has-page-title ep-no-page-sidebar ep-page-header-default wpb-js-composer js-comp-ver-5.4.7 vc_responsive">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

	
			@include('includes.header') <!-- #masthead -->
		
					<div class="educationpress-page-title-area">
					<div class="educationpress-page-title">
						<div class="container">
							<h1 class="entry-title">checkout</h1>
						</div>
					</div>
											<div class="educationpress-breadcrumb-wrapper">
							<div class="container">
								
<nav class="learn-press-breadcrumb" ><a href="/">Home</a><i class="fa fa-caret-right" aria-hidden="true"></i>checkout</nav></div>
						</div>
                                    </div>
                                    

     <div id="content" class="site-content container">
                                            <div class="educationpress-main-content-inner">
                                
                            <div id="primary" class="content-area page_no_sidebar">
                                <main id="main" class="site-main">
                        
                                    
                        <article id="post-2191" class="post-2191 page type-page status-publish hentry">
                            <div class="entry-content">
                                <div class="woocommerce">
                                    
                                    
                                    
                                    <div class="col2-set" id="customer_details">
                                
                                    <div  id="charge-error" class="alert-danger {{!Session::has('error') ? 'hidden' : ''}}" >
                                    {{Session::get('error')}}
                                    </div>
                                        <form id="checkout-form" method="post" action="{{route('checkout')}}" >
                                    <div class="col-1">
                                        <div class="woocommerce-billing-fields">
                            
                                <h3>Details</h3>
                        
                              <div class="form-group">
                                  <label for="name">Name <abbr class="required" title="required">*</abbr></label>
                                  <input type="text" id="name"  class="form-control " required>
                              </div>
                              <div class="form-group">
                                    <label for="address">Address <abbr class="required" title="required">*</abbr></label>
                                    <input type="text" id="address"  class="form-control " required>
                                </div>
                                <div class="form-group">
                                        <label for="card-name">Card Holder name <abbr class="required" title="required">*</abbr></label>
                                        <input type="text" id="card-name"  class="form-control " required>
                                 </div>
                                <div class="form-group">
                                            <label for="card-number">Cerdit Card number<abbr class="required" title="required">*</abbr></label>
                                            <input type="text" id="card-number"  class="form-control " required>
                                 </div>
                                 <div class="form-group form-row-first">
                                        <label for="card-expiry-month">Expiration Month <abbr class="required" title="required">*</abbr></label>
                                        <input type="text" id="card-expiry-month"  class="form-control " required>
                                    </div>
                                    <div class="form-group form-row-last">
                                            <label for="card-expiry-year">Expiration Year <abbr class="required" title="required">*</abbr></label>
                                            <input type="text" id="card-expiry-year"  class="form-control " required>
                                        </div>
                                        <div class="form-group">
                                                <label for="card-cvc">CVC <abbr class="required" title="required">*</abbr></label>
                                                <input type="text" id="card-cvc"  class="form-control " required>
                                            </div>
                            
                        
                                    </div>
                        
                                    <div class="col-2">
                                        <div class="woocommerce-shipping-fields">
                            </div>
                        
                                    </div>
                                </div>
                                {{csrf_field()}}
                            
                        
                                

                                
                            
                            <h3 id="order_review_heading">Your order</h3>
                        
                            
                            <div id="order_review" class="woocommerce-checkout-review-order">
                                <table class="shop_table woocommerce-checkout-review-order-table">
                            <thead>
                                <tr>
                                    <th class="product-name">Cources</th>
                                    <th class="product-total">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                                    @foreach($format as $forma)
                                                    <tr class="cart_item">
                                                            <td class="product-name">
                                                               {{$forma['item']['title']}} <strong class="product-quantity">x{{$forma['qty']}}</strong></td>
                                                            <td class="product-total">
                                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">
                                                                    </span>{{$forma['price']}}</span> DT</td>
                                                        </tr>
                                                    @endforeach
                                                                
                                                </tbody>
                            <tfoot>
                    
                                <tr class="order-total">
                                    <th>Total</th>
                                    <td><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>{{$total}}</span> DT</strong> </td>
                                </tr>
                        
                                
                            </tfoot>
                        </table>
                        
                        <div id="payment" class="woocommerce-checkout-payment"> 
                                <button type="submit" class="button alt" id="place_order">BUY</button>
                                
                        </div>
                        
                            </div>
                        
                            
                        </form>
                        
                        </div>
                            </div><!-- .entry-content -->
                        
                            </article><!-- #post-## -->
                        
                                </main><!-- #main -->
                            </div><!-- #primary -->
                        
                                            </div> <!-- /.educationpress-main-content-inner -->
                                    </div>		
	<!-- #content -->

	@include('includes.footer')<!-- #colophon -->
</div><!-- #page -->
<!--Start of Tawk.to Script (0.3.3)-->

<script type="text/javascript" src="https://js.stripe.com/v3/"></script>
<script type="text/javascript" src="{{URL::to('src/js/checkout.js')}}"></script>
<!--End of Tawk.to Script (0.3.3)-->


<script>
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
<script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/js/scripts972f.js?ver=5.0.1'></script>

<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/country-select.min7984.js?ver=3.3.4'></script>

<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/address-i18n.min7984.js?ver=3.3.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","update_shipping_method_nonce":"817a1f16a8","apply_coupon_nonce":"1da5a52338","remove_coupon_nonce":"c0395cfa50"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/cart.min7984.js?ver=3.3.4'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/selectWoo/selectWoo.full.min4bf4.js?ver=1.0.3'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var pwsL10n = {"unknown":"Password strength unknown","short":"Very weak","bad":"Weak","good":"Medium","strong":"Strong","mismatch":"Mismatch"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-admin/js/password-strength-meter.min55fe.js?ver=4.9.5'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_password_strength_meter_params = {"min_password_strength":"3","i18n_password_error":"Please enter a stronger password.","i18n_password_hint":"Hint: The password should be at least twelve characters long. To make it stronger, use upper and lower case letters, numbers, and symbols like ! \" ? $ % ^ & )."};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/password-strength-meter.min7984.js?ver=3.3.4'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min7984.js?ver=3.3.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_d49a650b77bd71b576896427793f7560","fragment_name":"wc_fragments_d49a650b77bd71b576896427793f7560"};
/* ]]> */
</script>
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
<script type='text/javascript' src='../wp-includes/js/wp-embed.min55fe.js?ver=4.9.5'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var lpGlobalSettings = {"url":"http:\/\/wp-education.xoothemes.com\/wc-cart\/","siteurl":"http:\/\/wp-education.xoothemes.com","ajax":"http:\/\/wp-education.xoothemes.com\/wp-admin\/admin-ajax.php","theme":"wp-education"};
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

</html>