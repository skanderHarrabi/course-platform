<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from wp-education.xoothemes.com/all-courses/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Apr 2018 18:22:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
@include('includes.head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<body class="archive post-type-archive post-type-archive-lp_course wp-custom-logo wp-education learnpress learnpress-page tribe-no-js hfeed ep-global-page-header-default ep-course-archive wpb-js-composer js-comp-ver-5.4.7 vc_responsive">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

	
			@include('includes.header') <!-- #masthead -->
		
					<div class="educationpress-page-title-area">
					<div class="educationpress-page-title">
						<div class="container">
							<h1 class="entry-title">Message</h1>
						</div>
					</div>
											<div class="educationpress-breadcrumb-wrapper">
							<div class="container">
								
<nav class="learn-press-breadcrumb" ><a href="../index.html">Home</a><i class="fa fa-caret-right" aria-hidden="true"></i>Message</nav>							</div>
						</div>
									</div>
			
	<div id="content" class="site-content container">
					<div class="educationpress-main-content-inner row">
		
	<div id="primary" class="content-area col-md-9 col-md-push-3">
		<main id="main" class="site-main">

			
<article id="post-9" class="post-9 page type-page status-publish hentry">
	<div class="entry-content">
		<div id="lp-archive-courses" class="lp-archive-courses">

<ul class="learn-press-courses">
<div class="panel panel-default">
    <div class="panel-heading text-center">
        Create a new discussion
    </div>
    <div class="panel-body">
    <form action="{{route('discussion.store')}}" method="post">
    {{csrf_field()}}
    <div class="form-grop">
        <label for="title">Title</label>
         <input type="text" name="title" class="form-control">
    </div>
    <div class="form-group text-center">
        <label for="formation ">Pick formation</label>
        <select  name='formation_id' id='formation_id' class='postform' >
                <option value='0' selected='selected'>All cources</option>
                @foreach($cources as $cource)
                <option class="level-0" value="{{$cource->id}}">{{$cource->title}}</option>
                @endforeach
                
            </select>
            <div class="form-group">
                <label for="content">Ask question</label>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-success pull-right" type="submit">Create discussion</button>
            </div>
    </div>
    </form>
</div>
</div>


</ul>
</div>
	</div><!-- .entry-content -->

	</article><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->


	<aside id="secondary" class="widget-area col-md-3 col-md-pull-9">
            <a href="{{route('message')}} " class="form-control btn btn-primary"> Create a new discussion</a><br><br>
		<section id="ep_course_category_widget-2" class="widget widget_ep_course_category_widget"><h3 class="widget-title">Course cources</h3>			<div class="ep_course_category_list ep-cat-list-desktop">
				<ul>
@foreach($cources as $cource)
<li class="cat-item cat-item-23"><a href="{{route('formation.descussion',['slug'=>$cource->slug])}}" >{{str_limit($cource->title,40)}}</a>
</li> 
@endforeach

				</ul>
			</div>

				</section>
	</aside><!-- #secondary -->
					</div> <!-- /.educationpress-main-content-inner -->
			</div><!-- #content -->
@include('includes.footer') <!-- #colophon -->
		</script>
		<script> /* <![CDATA[ */var tribe_l10n_datatables = {"aria":{"sort_ascending":": activate to sort column ascending","sort_descending":": activate to sort column descending"},"length_menu":"Show _MENU_ entries","empty_table":"No data available in table","info":"Showing _START_ to _END_ of _TOTAL_ entries","info_empty":"Showing 0 to 0 of 0 entries","info_filtered":"(filtered from _MAX_ total entries)","zero_records":"No matching records found","search":"Search:","all_selected_text":"All items on this page were selected. ","select_all_link":"Select all pages","clear_selection":"Clear Selection.","pagination":{"all":"All","next":"Next","previous":"Previous"},"select":{"rows":{"0":"","_":": Selected %d rows","1":": Selected 1 row"}},"datepicker":{"dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["January","February","March","April","May","June","July","August","September","October","November","December"],"nextText":"Next","prevText":"Prev","currentText":"Today","closeText":"Done"}};/* ]]> */ </script><link rel='stylesheet' id='themify-icons-css'  href='../wp-content/themes/wp-education/assets/css/themify-icons.min5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='devicon-icons-css'  href='../wp-content/themes/wp-education/assets/css/devicon.min5152.css?ver=1.0' type='text/css' media='all' />
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"http:\/\/wp-education.xoothemes.com\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/js/scripts972f.js?ver=5.0.1'></script>
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
<script type='text/javascript' src='../wp-content/themes/wp-education/js/jquery.navgoco.min5152.js?ver=1.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var lpGlobalSettings = {"url":"http:\/\/wp-education.xoothemes.com\/all-courses\/","siteurl":"http:\/\/wp-education.xoothemes.com","ajax":"http:\/\/wp-education.xoothemes.com\/wp-admin\/admin-ajax.php","theme":"wp-education"};
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if(Session::has('success'))
           toastr.success('{{Session::get('success')}}')
        @endif

    </script>
</body>

<!-- Mirrored from wp-education.xoothemes.com/all-courses/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Apr 2018 18:23:00 GMT -->
</html>