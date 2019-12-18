<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from wp-education.xoothemes.com/wc-cart/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Apr 2018 18:24:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
@include('includes.head')

<body class="page-template-default page page-id-2190 wp-custom-logo woocommerce-cart woocommerce-page tribe-no-js ep-page-layout-grid ep-has-page-title ep-no-page-sidebar ep-page-header-default wpb-js-composer js-comp-ver-5.4.7 vc_responsive">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

	
			@include('includes.header')<!-- #masthead -->
		
					<div class="educationpress-page-title-area">
					<div class="educationpress-page-title">
						<div class="container">
							<h1 class="entry-title">Cart</h1>
						</div>
					</div>
											<div class="educationpress-breadcrumb-wrapper">
							<div class="container">
								
<nav class="learn-press-breadcrumb" ><a href="/">Home</a><i class="fa fa-caret-right" aria-hidden="true"></i>Cart</nav>							</div>
						</div>
									</div>
			
	<div id="content" class="site-content container">
    @if(Session::has('cart'))
    <div class="educationpress-main-content-inner">
		
            <div id="primary" class="content-area page_no_sidebar">
                <main id="main" class="site-main">
        
                    
        <article id="post-2190" class="post-2190 page type-page status-publish hentry">
            <div class="entry-content">
                <div class="woocommerce">
        <form class="woocommerce-cart-form" action="http://wp-education.xoothemes.com/wc-cart/" method="post">
            
            <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents table table-bordered" cellspacing="0">
                <thead>
                    <tr>
                        <th class="product-remove">&nbsp;</th>
                        <th class="product-thumbnail">&nbsp;</th>
                        <th class="product-name">cources</th>
                        <th class="product-price">Price</th>
                        <th class="product-quantity">Number of places</th>
                        <th class="product-subtotal">Total</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($format as $form)
                    <tr class="woocommerce-cart-form__cart-item cart_item">
        
                            <td >
                                <a href="{{route('formation.remove',['id'=>$form['item']['id']])}}" class="remove">×</a>	</td>
                                	
                            <td class="product-thumbnail"><a href=""><img width="300" height="300" src="{{asset($form['item']['featured'] )}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="{{$form['item']['title']}} " sizes="(max-width: 300px) 100vw, 300px"></a>
                            </td>
    
                            <td class="product-name" data-title="Product"><a href="">{{$form['item']['title']}}</a></td>
    
                            <td class="product-price" data-title="Price">
                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>{{$form['item']['prix']}}</span> DT						</td>
    
                            <td class="product-quantity" data-title="Quantity">	<div class="quantity">
            <label class="screen-reader-text" for="quantity_5aed849a03f25">Number of places</label>
            <input type="number" id="quantity_5aed849a03f25" class="input-text qty text" step="1" min="0" max="" name="cart[735b90b4568125ed6c3f678819b6e058][qty]" value="{{$form['qty']}}" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric" aria-labelledby="Ship Your Idea quantity">
  
        </div>
        </td>
    
                            <td class="product-subtotal" data-title="Total">
                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>{{$form['price']}}</span> DT						</td>
                        </tr>
                    @endforeach
                            
                    
        
                            </tbody>
            </table>
            </form>
        
        <div class="cart-collaterals">
            <div class="cart_totals ">
        
            
            <h2>Cart totals</h2>
        
            <table cellspacing="0" class="shop_table shop_table_responsive table table-bordered">
        
                <tbody>
        
                <tr class="order-total">
                    <th>Total</th>
                    <td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>{{$totalPrice}}</span> DT</strong> </td>
                </tr>
        
                
            </tbody></table>
        
            <div class="wc-proceed-to-checkout">
                
        <a href="{{route('checkout')}} " class="checkout-button button alt wc-forward">
            Proceed to checkout</a>
            </div>
        
            
        </div>
        </div>
        
        </div>
            </div><!-- .entry-content -->
        
            </article><!-- #post-## -->
        
                </main><!-- #main -->
            </div><!-- #primary -->
        
                            </div>
    @else
	<div class="educationpress-main-content-inner">
		
	<div id="primary" class="content-area page_no_sidebar">
		<main id="main" class="site-main">

			
<article id="post-2190" class="post-2190 page type-page status-publish hentry">
	<div class="entry-content">
		<div class="woocommerce"><p class="cart-empty">Your cart is currently empty.</p>	<p class="return-to-shop">
		<a class="button wc-backward" href="{{route('allcource')}} ">
			Return to shop		</a>
	</p>
</div>
	</div><!-- .entry-content -->

	</article><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->

                    </div> 
    @endif<!-- /.educationpress-main-content-inner -->
			</div><!-- #content -->

	@include('includes.footer') <!-- #colophon -->
</div><!-- #page -->
<!--Start of Tawk.to Script (0.3.3)-->

<!--End of Tawk.to Script (0.3.3)-->		<script>
		( function ( body ) {
			'use strict';
			body.className = body.className.replace( /\btribe-no-js\b/, 'tribe-js' );
		} )( document.body );
		</script>
		<script type='text/javascript'>
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

<!-- Mirrored from wp-education.xoothemes.com/wc-cart/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Apr 2018 18:25:00 GMT -->
</html>