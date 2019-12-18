<header id="masthead" class="site-header-type-default site-header navbar navbar-default navbar-educationpress ep-menu-hover-border">
    <div class="ep-pre-header ep-pre-header-mobile-disable">
<div class="container">
<div class="row">
                                <div class="col-lg-6 col-md-8 ep-pre-header-item-left">
            <span>Have any question?</span>								<span class="ep-top-bar-mobile"><i class="fa fa-phone"></i><a href="tel:0123456789">{{$settings->contact_number}}</a></span>								<span class="ep-top-bar-email"><i class="fa fa-envelope"></i><a href="">{{$settings->contact_email}}</a></span>							</div>
                            <div class="col-lg-6 col-md-4 ep-pre-header-item-right text-right">
                                                <ul class="ep-pre-header-right-social">
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li><li><a href="#"><i class="fa fa-facebook"></i></a></li><li><a href="#"><i class="fa fa-google-plus"></i></a></li><li><a href="#"><i class="fa fa-linkedin"></i></a></li>										</ul>
                                            </div>
</div>
</div>
</div>
    <div class="site-header-wrapper">
<div class="container">
<div class="site-header-inner clearfix">
    <div class="site-branding navbar-header">
                <div class="logo-wrapper" itemscope itemtype="http://schema.org/Brand">
<a href="{{asset(route('index'))}}" class="custom-logo-link" rel="home" itemprop="url"><img width="200" height="100" src="{{asset('uploads/avatars/Techcare-logo.png')}}" class="custom-logo" alt="WP Education" itemprop="logo" /></a> 
</div>
            </div> 

    <div class="ep-main-menu-wrapper">
        <div id="ep-site-navigation" class="collapse navbar-collapse"><ul id="menu-main-menu" class="nav navbar-nav navbar-right ep-main-menu ep-megamenu"><li id="menu-item-39" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-31 current_page_item menu-item-has-children menu-item-39 dropdown active">
            <a title="Home" href="/"  aria-haspopup="true">Home</a>

</li>
<li id="menu-item-19" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19"><a title="All Courses" href="{{asset(route('allcource'))}}">All Courses</a></li>

<li id="menu-item-2095" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2095"><a title="About" href="about/index.html">About</a></li>
<li id="menu-item-2098" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2098"> <a href="{{route('forum')}}">Discussions</a></li>
<li id="menu-item-2700" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2700"><a title="Contact" href="{{route('contact')}}">Contact</a></li>
<li id="menu-item-38" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-38 dropdown"><a title="shop" href="{{route('formation.shoppingCart')}} " class="dropdown-toggle" aria-haspopup="true"><i class="fa fa-shopping-cart" aria-hidden="true"></i> cart <span class="badge">{{Session::has('cart')?Session::get('cart')->totalQty:''}}</span></a>
</li>
 @if(isset(Auth::user()->email))
    @if(Auth::user()->role_id===3)

  {{--  <li id="markedasread" onclick="markNotificationAsRead()" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-17 dropdown">
        <a title="notification" class="dropdown-toggle" aria-haspopup="true"><i class="fa fa-bell"></i> <span class="badge">{{Auth::user()->unreadNotifications->count()}}</span></a>
        <ul role="menu" class=" dropdown-menu">
                <li id="menu-item-19" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19">
                    @foreach(auth()->user()->unreadNotifications as $notification)
                <a title="All Courses" href="">{{snake_case(class_basename($notification->data['user']['name']))}} commented on your discussion {{$notification->data['discussion']['title']}}</a>
                    @endforeach
                </li>
        </ul>
    </li> --}}

<li class="ep_profile_login_page ep-nav-menu-custom-item"><a href="{{asset(route('profileFront'))}}"><span>profile</span></a></li>
    @elseif(Auth::user()->role_id===2)
<li class="ep_profile_login_page ep-nav-menu-custom-item"><a href="{{asset(route('formateurpofile'))}}"><span>profile</span></a></li>
    @endif
                                    <li><a class="dropdown-item" href="{{ route('auth.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
@else
<li class="ep_profile_login_page ep-nav-menu-custom-item"><a href="{{asset(route('front.login'))}}"><span>Log In</span></a></li>
@endif
</ul></div>						</div>

                             



<div class="ep-mobile-menu-wrapper">
            <ul id="primary-menu" class="ep-mobile-menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-31 current_page_item menu-item-has-children menu-item-39"><a href="index.html">Home</a>
<ul class="sub-menu">

</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-17"><a href="#">LMS</a>
<ul class="sub-menu">
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19"><a href="all-courses/index.html">All Courses</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2590"><a href="courses/basic-html/index.html">Course Details Page</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20"><a href="profile/index.html">Profile</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21"><a href="cart/index.html">Cart</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22"><a href="checkout/index.html">Checkout</a></li>
</ul>
</li>

<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2094"><a href="#">Pages</a>
<ul class="sub-menu">
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2095"><a href="about/index.html">About</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2098"><a href="our-services/index.html">Our Services</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2700"><a href="contact/index.html">Contact</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2172"><a href="shortcodes/index.html">Shortcodes</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2175"><a href="page-fullwidth/index.html">Page Fullwidth</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2180"><a href="not-found.html">404 &#8211; Not Found</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-38"><a href="blog/index.html">Blog</a>
<ul class="sub-menu">
<li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-2709"><a href="learn-javascript-step-by-step-online-free/index.html">Single Post</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2710"><a href="category/online-courses/index.html">Post Archive</a></li>
</ul>
</li>
<li class="ep_profile_login_page ep-nav-menu-custom-item"><a href="{{asset(route('front.login'))}}"><span>Log In</span></a></li></ul>							</div>
    
</div>
</div>
</div>
</header>