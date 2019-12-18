<footer id="colophon" class="site-footer">
    <div class="footer-widgets">
        <div class="container">
            <div id="footer-wrapper">
                <div class="row">
                    <div id="text-2" class="col-md-6 col-sm-9 col-xs-18 widget widget_text"><h4 class="widget-title footer-widget-title">Teachers</h4>			
                        <div class="textwidget">
 <ul class="ep-instructor-content-type-list has-instructor-image" data-autoplay="true" data-items="4" data-desktopsmall="3" data-tablet="2" data-mobile="1" data-navigation="true" data-pagination="false" data-direction="default">
@foreach($formateurs as $formateur)
<li class="ep-course-instructor-item"><span class="ep-instructor-image"><img src="{{asset($formateur->profile->avatar)}}" width="60" height="60" alt="Adrian C. Wick" class="avatar avatar-60 wp-user-avatar wp-user-avatar-60 alignnone photo" /></span>
<div class="ep-instructor-details"><a href="profile/imran/index.html"></p>
<h4 class="ep-instructor-name">{{$formateur->name}}</h4>
<p></a><span class="ep-instructor-job">{{$formateur->email}}</span></div>
</li>
@endforeach

</ul>
</div>
    </div>
    <div id="text-3" class="col-md-6 col-sm-9 col-xs-18 widget widget_text"><h4 class="widget-title footer-widget-title">Course List</h4>			
        <div class="textwidget">						
            <div class="ep-course-list ep-default-width-slider" data-autoplay="true" data-items="4" data-desktopsmall="3" data-tablet="2" data-mobile="1" data-navigation="true" data-pagination="false" data-single_item="false" data-direction="default">
                                                    @foreach($formations as $formation)
                                                    <div class="ep-course-item  ep-course-price-on ep-course-enroll-btn-on ep-course-students-on ep-course-review-on post-2013 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-php course_category-web-development course_category-wordpress course">
                                                            <figure>
                                                                        <div class="ep-course-thumb-area">
                                                <a href="courses/ios-app-development-basics/index.html">
                                                    <img src="{{asset($formation->featured)}}" alt="iOS App Development Basics" width="90px" height="90px"></a>
                                                                                </div>
                                                                    <figcaption>
                                                                            <h3 class="ep-course-title">
                                                <a href="">{{$formation->title}}</a>
                                            </h3>
            
                                            
                                            
                                            
                                                
            
                                                                                <div class="ep-course-meta">
                                                                <span class="ep-course-author-name">
                            <span>Teacher </span>				<a href="profile/xoothemes/index.html">
                                <span>{{$formation->formateur}}</span>					<span class="ep-course-author-avatar"><img src="wp-content/uploads/learn-press-profile/1/8d33e3c0ef99551c6376d0f66b51bbf6.png" width="30" height="30" alt="" class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 photo avatar-default" /></span>				</a>
                        </span>
                                                            
            <span class="course-students" title="&lt;span class=&quot;course-students-number&quot;&gt;18&lt;/span&gt; students enrolled">
            
                18 students
            </span>
                        
                                                                                        </div>
                                                            
                                        </figcaption>
                                    </figure>
                                </div>
                                                    @endforeach
            </div>
    </div>
    </div>
   				</div> <!-- end .row -->
            </div> <!-- end #footer-wrapper -->
        </div> <!-- end .container -->
    </div> 
</footer>