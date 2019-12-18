<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from wp-education.xoothemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Apr 2018 18:18:55 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
@include('includes.head')

<body class="home page-template-default page page-id-31 wp-custom-logo tribe-no-js ep-page-layout-full-width ep-no-page-title ep-no-page-sidebar ep-page-header-default wpb-js-composer js-comp-ver-5.4.7 vc_responsive">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

	
			@include('includes.header')
		
	
	<div id="content" class="site-content fullwidth_page">
		  @if(Session::has('success'))
		  <div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
				<div id="charge-message" class="alert alert-success">
                   {{Session::get('success')}}  
				</div>
			</div>
		</div>
		@endif
					<div class="educationpress-main-content-inner">
		
	<div id="primary" class="content-area page_no_sidebar">
		<main id="main" class="site-main">

			
<article id="post-31" class="post-31 page type-page status-publish hentry">
	<div class="entry-content">
		<div class="vc_row wpb_row vc_row-fluid vc_custom_1485627531328 vc_row-has-fill vc_row-no-padding ep_row_stretch_row_content_no_paddings ep_vc_row-color-white"><div class="wpb_column vc_column_container vc_col-sm-12 ep-vc-column-no-padding"><div class="vc_column-inner "><div class="wpb_wrapper">			<div class="ep-course-search">
				<div class="ep-course-search-logo"></div>			
					<h2>Tech-care training</h2>
					<form role="search" action="/results" method="get" id="searchform">
					<fieldset>
						<div class="input-group">
															<input class="form-control ep-course-search-field" type="text" name="s" placeholder="Course Search"/>
														<input type="hidden" name="post_type" value="lp_course" />
							<span class="input-group-btn">
								<button type="submit" id="ep-course-search-btn" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button>
							</span>
						</div>
					</fieldset>
				</form>
				<div class="ep-course-ajax-search-result-area">
					<div class="ep-course-ajax-search-result-inner"></div>
				</div>
									<div class="ep-lms-stats">
						<span class="ep-lms-students"><i class="fa fa-graduation-cap"></i>{{$students}} students.</span>
						<span class="ep-lms-courses"><i class="fa fa-book"></i>{{$cources}} cources.</span>
						<span class="ep-lms-teachers"><i class="fa fa-users" aria-hidden="true"></i>{{$t}} teachers.</span>					</div>
							</div>
		</div></div></div></div>
		
		<div class="vc_row wpb_row vc_row-fluid vc_custom_1485627632602 vc_row-has-fill ep_vc_row-padding-bottom-large"><div class="container"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12 ep-vc-column-no-padding"><div class="vc_column-inner "><div class="wpb_wrapper"><h2 class="ep-section-title ep-section-title-border text-default margin-bottom-large">Recent Courses</h2>
				<div class="ep-course-grid row ep-default-width-slider" data-autoplay="true" data-items="4" data-desktopsmall="3" data-tablet="2" data-mobile="1" data-navigation="true" data-pagination="false" data-single_item="false" data-direction="default">
						
					@foreach($formations as $formation)
					<div class="ep-course-item col-lg-4 col-md-4 col-sm-6  ep-course-price-on ep-course-enroll-btn-on ep-course-students-on ep-course-review-on post-2002 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-laravel course_category-php course_category-web-development course">
							<span class="course-category"><a href="{{route('result.cat',['id'=>$formation->category->id])}}">{{$formation->category->name}}</a></span>	
							<figure>
									<div class="ep-course-thumb-area">
										<a href="{{route('formation.single',['slug'=>$formation->slug])}}">
										<img width="420" height="300" src="{{$formation->featured}}" class="attachment-educationpress-course-thumb size-educationpress-course-thumb wp-post-image" alt="{{$formation->title}}" /></a>
									</div>
															<figcaption>
																	<h3 class="ep-course-title">
										<a href="{{route('formation.single',['slug'=>$formation->slug])}}">{{str_limit($formation->title,20)}}</a>
									</h3>
	
							<span class="ep-course-author-name">
							   <span>Teacher </span>		
								<a href="profile/xoothemes/index.html">
									<span>{{$formation->formateur}}</span>			
								</a>
						   </span>
			
									
									
																		<div class="ep-course-price-n-join">
																						<span class="ep-course-price">{{$formation->prix}} DT</span>
																								<a href="{{route('formation.addToCart',['id'=>$formation->id])}} " class="btn btn-primary btn-lg">Reserve</a>
												</div>
										
	
   <div class="ep-course-meta">
																					
	<span class="course-students" title="&lt;span class=&quot;course-students-number&quot;&gt;5&lt;/span&gt; students enrolled">
	5 students
	</span>
				
	</div>
													
								</figcaption>
							</figure>
						</div>
					@endforeach
							</div>
		</div></div></div></div></div></div>

		<div class="vc_row wpb_row vc_row-fluid ep_vc_row-padding-bottom-large"><div class="container"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12 ep-vc-column-no-padding"><div class="vc_column-inner "><div class="wpb_wrapper"><h2 class="ep-section-title ep-section-title-border text-default margin-bottom-large">All Categories</h2>			<div class="ep-course-category-wrapper ep-course-category-default">
			<div class="row">
					@foreach($categories as $categorie)
								<div class="col-md-2 col-sm-4">
								<a class="ep-course-category-item" href="{{route('result.cat',['id'=>$categorie->id])}}">
								<h4>{{str_limit($categorie->name,10)}}</h4>
								</a>
							</div>	
							@endforeach
							</div>
			</div>
		</div></div></div></div></div></div>


	<div class="vc_row wpb_row vc_row-fluid"><div class="container"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12 ep-vc-column-no-padding"><div class="vc_column-inner "><div class="wpb_wrapper"><h2 class="ep-section-title ep-section-title-default text-center margin-bottom-large">Our Teachers</h2>
		<div class="ep-testimonials ep-testimonials-default" data-autoplay="true" data-navigation="false" data-pagination="true" data-direction="default" >
		 @foreach($teachers as $teacher)

		 <div class="item col-md-10 col-md-offset-1">
			<div class="ep-testimonial-content"><p>{{$teacher->profile->about}}</p>
         </div>
			<div class="ep-testimonial-info">
											<div class="ep-testimonial-image"><img width="140" height="140" src="{{$teacher->profile->avatar}}" class="attachment-educationpress-testimonial-thumb size-educationpress-testimonial-thumb wp-post-image" alt=""  sizes="(max-width: 140px) 100vw, 140px" /></div>
										<div class="ep-testimonial-info-details">
					<h3 class="ep-testimonial-name">{{$teacher->name}}</h3>
													<div class="ep-testimonial-company">
														{{$teacher->email}}							
													</div>
										</div>
			</div>
		</div>
		 @endforeach
										
			
		</div>
		</div></div></div></div></div>
	</div>
		
		
		<div data-vc-parallax="1.5" data-vc-parallax-image="http://wp-education.xoothemes.com/wp-content/uploads/2017/01/pexels-photo-56759.jpeg-copy.jpg" class="vc_row wpb_row vc_row-fluid vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving ep_vc_row-color-white ep_vc_row-padding-bottom-large"><div class="container"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12 ep-vc-column-no-padding"><div class="vc_column-inner "><div class="wpb_wrapper"><h2 class="ep-section-title ep-section-title-default text-center margin-bottom-small">Real Time statistics</h2><br><br><div class="ep-lms-statistics row">
	    				    		<div class="col-md-4 col-sm-6 col-xs-6 text-center ep-lms-statistics-item">
		    			<div class="ep-counter-number">{{$cources}}</div>
		    			<h5>Courses</h5>
		    		</div>
	    			    				    		<div class="col-md-4 col-sm-6 col-xs-6 text-center ep-lms-statistics-item">
		    			<div class="ep-counter-number">{{$students}}</div>
		    			<h5>Students</h5>
		    		</div>
	    			 <div class="col-md-4 col-sm-6 col-xs-6 text-center ep-lms-statistics-item">
		    			<div class="ep-counter-number">{{$t}}</div>
		    			<h5>Teachers</h5>
		    		</div> 				    	
	    			    	</div>
	    </div></div></div></div></div><div class="xt-row-overlay" style="background-color:rgba(0,0,0,0.6)"></div></div><div class="vc_row wpb_row vc_row-fluid vc_custom_1485457116867 vc_row-has-fill text-center"><div class="container"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12 ep-vc-column-no-padding"><div class="vc_column-inner "><div class="wpb_wrapper"><h3 class="ep-section-title ep-section-title-default text-center margin-bottom-small">Subscribe Our Newsletter and Stay Connected to Our Social Networks</h3>
	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			<script type="text/javascript">(function() {
	if (!window.mc4wp) {
		window.mc4wp = {
			listeners: [],
			forms    : {
				on: function (event, callback) {
					window.mc4wp.listeners.push({
						event   : event,
						callback: callback
					});
				}
			}
		}
	}
})();
</script><!-- MailChimp for WordPress v4.2 - https://wordpress.org/plugins/mailchimp-for-wp/ --><form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-1945" method="post" data-id="1945" data-name="EP MailChimp" ><div class="mc4wp-form-fields"><div class="ep-subscribe form-inline">
  <p>Subscribe now and receive weekly newsletter with educational materials, new courses, interesting posts, popular books and much more!</p>
  <div class="form-group">
    <label class="sr-only" for="subscribe-email">Email address</label>
    <input id="subscribe-email" type="text" name="EMAIL" placeholder="Enter your email..." class="form-control">
  </div>
  <button type="submit" class="btn btn-primary btn-lg">Subscribe</button>
</div>
</div><label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" /></label><input type="hidden" name="_mc4wp_timestamp" value="1524075534" /><input type="hidden" name="_mc4wp_form_id" value="1945" /><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" /><div class="mc4wp-response"></div></form><!-- / MailChimp for WordPress Plugin -->

		</div>
	</div>
			<div class="ep-social-icons ep-social-icons-medium">
									<ul>
																					                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
																												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
																												<li><a href="#"><i class="fa fa-google-plus-official"></i></a></li>
																												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
														
					</ul>
							</div>
		</div></div></div></div></div></div>
		<div class="vc_row wpb_row vc_row-fluid vc_custom_1485628332956 vc_row-has-fill ep_vc_row-color-white ep_vc_row-background-primary ep_vc_row-padding-bottom-medium"><div class="container"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-6 ep-vc-column-no-padding"><div class="vc_column-inner "><div class="wpb_wrapper">			<div class="ep-features ep-features-medium ep-features-icon-left">
									<div class="row">
																				<div class="ep-feature-item col-md-12 col-sm-6 text-left">
								<div class="ep-feature-icon"><i class="flaticon-professor"></i></div>								<div class="ep-feature-content">
									<div class="ep-feature-title"><h3>Ecoute du client</h3></div>									<div class="ep-feature-description"><p>Notre démarche réside dans l’anticipation et le dépassement des attentes de nos clients. L’écoute de nos clients nous permet d’irriguer toutes les actions et de développer une réelle relation de partenariat fondée sur le respect et la transparence.</p>
</div>								</div>
							</div>
																				<div class="ep-feature-item col-md-12 col-sm-6 text-left">
								<div class="ep-feature-icon"><i class="flaticon-board"></i></div>								<div class="ep-feature-content">
									<div class="ep-feature-title"><h3>Créativité et innovation</h3></div>									<div class="ep-feature-description"><p>Valeurs fondatrices de Agence de communication web Techcare Training, la créativité et l’innovation constituent un état d’esprit qui anime l’ensemble de nos collaborateurs. </p>
</div>								</div>
							</div>
							
					</div>
							</div>
	    </div></div></div><div class="wpb_column vc_column_container vc_col-sm-6 ep-vc-column-no-padding"><div class="vc_column-inner "><div class="wpb_wrapper"><h2 class="ep-section-title ep-section-title-default text-default margin-bottom-medium">Efficacité professionnelle</h2>
	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			<p><strong>Nous admettons que la formation est considérée comme un élément important du développement des personnes et des organisations. Ainsi grâce à nos formateurs la formation s’avère l’outil qui permet d’agir sur les compétences de la personne, de continuer à les développer, de les renforcer. Notre équipe apprendra à chacun sa manière d’exceller. Nous vous vous personnaliserons les méthodes et outils pour exceller dans vos relations et pour bien gérer vos priorités. Nous vous accompagnons pour que vous trouviez des clés de succès afin de bien développer votre potentiel et réussir votre vie professionnelle.</p>

		</div>
	</div>
</div></div></div></div></div></div>
	</div><!-- .entry-content -->

	</article><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->

					</div> <!-- /.educationpress-main-content-inner -->
			</div><!-- #content -->

	@include('includes.footer')
</div><!-- #page -->
<!--Start of Tawk.to Script (0.3.3)-->

<!--End of Tawk.to Script (0.3.3)-->		
<script type="text/javascript">var ep_home_url = "index.html";</script>
		<link rel='stylesheet' id='themify-icons-css'  href='wp-content/themes/wp-education/assets/css/themify-icons.min5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='devicon-icons-css'  href='wp-content/themes/wp-education/assets/css/devicon.min5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='educationpress-testimonial-fonts-css'  href='https://fonts.googleapis.com/css?family=Droid+Serif&amp;subset' type='text/css' media='all' />
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"http:\/\/wp-education.xoothemes.com\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/scripts972f.js?ver=5.0.1'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min7984.js?ver=3.3.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_d49a650b77bd71b576896427793f7560","fragment_name":"wc_fragments_d49a650b77bd71b576896427793f7560"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min7984.js?ver=3.3.4'></script>
<script type='text/javascript' src='wp-content/themes/wp-education/js/bootstrap.mine485.js?ver=3.3.6'></script>
<script type='text/javascript' src='wp-content/themes/wp-education/js/jquery.slicknav.min4b68.js?ver=1.0.4'></script>
<script type='text/javascript' src='wp-content/themes/wp-education/js/owl.carousele7f0.js?ver=1.3.1'></script>
<script type='text/javascript' src='wp-content/themes/wp-education/js/main5152.js?ver=1.0'></script>
<script type='text/javascript'>
(function($) { 
    'use strict';
})(jQuery);
</script>
<script type='text/javascript' src='wp-content/themes/wp-education/js/skip-link-focus-fix4a7d.js?ver=20151215'></script>
<script type='text/javascript' src='wp-includes/js/wp-embed.min55fe.js?ver=4.9.5'></script>
<script type='text/javascript' src='wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min8b06.js?ver=5.4.7'></script>
<script type='text/javascript' src='wp-content/plugins/js_composer/assets/lib/bower/skrollr/dist/skrollr.min8b06.js?ver=5.4.7'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var mc4wp_forms_config = [];
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/mailchimp-for-wp/assets/js/forms-api.minbc19.js?ver=4.2'></script>
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
</body>

</html>