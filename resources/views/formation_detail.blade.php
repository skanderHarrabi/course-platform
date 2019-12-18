@extends('layouts.frontend')


@section('content')
<div id="content" class="site-content container">
    <div class="educationpress-main-content-inner row">

<div id="primary" class="content-area col-md-9">
<main id="main" class="site-main">


<article id="post-1996" class="ep-single-course-item post-1996 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-photoshop course">




<div id="lp-single-course" class="lp-single-course">


<div id="learn-press-course" class="course-summary">


<div class="course-landing-summary">

<div class="ep-single-course-header clearfix">

<h1 itemprop="name" class="course-title entry-title text-center">{{$f->title}}</h1>
<div class="course-meta">	
    		<div class="course-author" itemscope="" itemtype="http://schema.org/Person">
	
<div class="author-contain">
    <label itemprop="jobTitle">Teacher</label>
    <div class="value" itemprop="name">
        <a href="../../profile/xoothemes/index.html">{{$f->formateur}}</a>
    </div>
</div>
</div>
        <div class="course-categories">
    <label>Categories</label>
    <div class="value">
        <span class="cat-links">
            <a href="../../course-category/photoshop/index.html">{{$f->category->name}}</a></span>
    </div>
</div>
    

</div>		<div class="course-payment">

<div class="course-price">
<span class="price">{{$f->prix}} DT</span>
</div>


<div class="lp-course-buttons">




<form name="enroll-course" class="enroll-course" method="post" enctype="multipart/form-data">


<input type="hidden" name="enroll-course" value="1996"/>
<input type="hidden" name="enroll-course-nonce"
value="762ebedd6d"/>

<button class="lp-button button button-enroll-course">
Reservé        </button>


</form>



</div>		</div>
    </div>

<div class="course-thumbnail">
<a href="{{$f->featured}}" itemprop="image" class="learn-press-single-thumbnail" title=""><img width="870" height="450" src="{{asset($f->featured)}}" class="attachment-single_course size-single_course wp-post-image" alt="{{$f->title}}" title="{{$f->title}}" /></a></div>



<div id="learn-press-course-tabs" class="course-tabs">

<ul class="learn-press-nav-tabs course-nav-tabs">



<li class="course-nav course-nav-tab-overview active default">
<a href=""
   data-tab="#tab-overview">Overview</a>
</li>

</ul>


<div class="course-tab-panel-overview course-tab-panel active"
id="tab-overview">



<div class="row">
<div class="ep-course-content col-md-8">
<div class="course-description" id="learn-press-course-description">
{!! $f->description !!}
</div>
</div>
<div class="ep-course-info col-md-4">
        
<h3>Course Features</h3>

<ul>
<li><i class="fa fa-users" aria-hidden="true"></i><span class="course-info-label">Students</span><span class="course-info-value">
<span class="course-students" title="&lt;span class=&quot;course-students-number&quot;&gt;3&lt;/span&gt; students enrolled">

3 students
</span>
</span>
</li>

 <li><i class="fa fa-check" aria-hidden="true"></i><span class="course-info-label">Max Students</span><span class="course-info-value">{{$f->place->nombre_de_place}}</span></li>
<li><i class="fa fa-clock-o" aria-hidden="true"></i><span class="course-info-label">Duration</span><span class="course-info-value">{{$f->duree}} heure</span></li>
<li><i class="fa fa-map-marker" aria-hidden="true"></i><span class="course-info-label">Class</span><span class="course-info-value">{{$f->place->localisation_address}}</span></li>
    
</ul>

            </div>
</div>
</div>
</div>
  

@foreach($f->comments as $comment)
<div class="media" style="margin-top:20px;">
  <div class="media-body"> 
      <div class="media-heading">
          <div class="title h5">
              <a href="#"><b>{{$comment->user->name}}</b></a>
              made a comment.
          </div>
          <h6 class="text-muted time">{{$comment->created_at}}</h6>
      </div>
      
      <div class="media-description"> 
          <p>{{$comment->body}}</p>

    
          <div class="actions">
              {{-- <a href="#" class="btn btn-default stat-item">
                  Edit
              </a> --}}
                

              <form action="{{route('comment.destroy',$comment->id)}} " method="post" class="inline-it">
                  {{csrf_field()}}
                  {{method_field('DELETE')}}
                  <input  class="btn btn-default stat-item" value="Delete" type="submit">
                        
              </form>
             
          </div>
      </div>  

      @foreach($comment->comments as $repcomment)
         <div class="media-body">
             <div class="media-heading">
                    <div class="title h5">
                            <a href="#"><b>{{$repcomment->user->name}}</b></a>
                            made a comment.
                    </div>
                    <h6 class="text-muted time">{{$repcomment->created_at}}</h6>
                    <div class="media-description"> 
                            <p>{{$repcomment->body}}</p>
                  
                      
                            <div class="actions">
                                {{-- <a href="#" class="btn btn-default stat-item">
                                    Edit
                                </a> --}}
                                  
                  
                                <form action="{{route('replaycomment.destroy',$repcomment->id)}} " method="post" class="inline-it">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <input  class="btn btn-default stat-item" value="Delete" type="submit">
                                          
                                </form>
                               
                            </div>
                        </div>
             </div>
         </div>
      @endforeach
  </div>
</div>
@endforeach
<br>
<form action="{{route('formationcomment.store',$f->id)}}" method="post" role="form">
  {{csrf_field()}}
<h3>Comments :</h3>
<div style="margin-bottom:50px;">
    <textarea name="body" rows="3" class="form-control" placeholder="leave a comment" ></textarea>
    <button type="submit" class="btn btn-success" style="margin-top:10px">Save Comment</button>
</div>
</form>
</div>



<h2 class="ep-section-title ep-section-title-border margin-bottom-large">Relative Courses</h2>
   

<div class="ep-course-slider ep-default-width-slider" data-autoplay="true" data-items="2" data-desktopsmall="2" data-tablet="2" data-mobile="1" data-navigation="true" data-pagination="false" data-single_item="false" data-direction="default">
                                  
    
    
    
    @foreach($cources as $forma)
    <div class="ep-course-item  ep-course-price-on ep-course-enroll-btn-on ep-course-students-on ep-course-review-on post-33 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-html course_category-web-development course_tag-html course">
            <span class="course-category"><a href="../../course-category/html/index.html">{{$forma->category->name}}</a></span>						<figure>
                                                <div class="ep-course-thumb-area">
                        <a href="">
                            <img width="420" height="300" src="{{asset($forma->featured)}}" class="attachment-educationpress-course-thumb size-educationpress-course-thumb wp-post-image" alt="Basic HTML" /></a>
                                                        </div>
                                            <figcaption>
                                                    <h3 class="ep-course-title">
                        <a href="">{{str_limit($forma->title,20)}}</a>
                    </h3>
    
                                <span class="ep-course-author-name">
    <span>Teacher </span>				<a href="">
        <span>{{$forma->formateur}}</span></a>
    </span>
    
                    
                    
                                                        <div class="ep-course-price-n-join">
                                                                        <span class="ep-course-price"><strong>{{$forma->prix}} DT</strong></span>
                                                                                <a href="{{route('formation.addToCart',['id'=>$forma->id])}}" class="btn btn-primary btn-lg">Reserve</a>
                                </div>
                        
    
                                                        <div class="ep-course-meta">
                                                                    
    <span class="course-students" title="&lt;span class=&quot;course-students-number&quot;&gt;3&lt;/span&gt; students enrolled">
    
    3 students
    </span>
 </div>
                                    
                </figcaption>
            </figure>
        </div>
    @endforeach


 </div>

</div>

</div>

</article><!-- #post-## -->
</main><!-- #main -->
</div><!-- #primary -->


<aside id="secondary" class="widget-area col-md-3">
<section id="ep_course_teachers_widget-3" class="widget widget_ep_course_teachers_widget"><h3 class="widget-title">Our Teachers</h3>
    <ul class="ep-instructor-content-type-list has-instructor-image" data-autoplay="true" data-items="4" data-desktopsmall="3" data-tablet="2" data-mobile="1" data-navigation="true" data-pagination="false" data-direction="default">
        @foreach($teachers as $teacher)
        <li class="ep-course-instructor-item"><span class="ep-instructor-image"><img src="{{asset($teacher->profile->avatar)}}" width="100" height="100" alt="Adrian C. Wick" class="avatar avatar-100 wp-user-avatar wp-user-avatar-100 alignnone photo" /></span>
            <div class="ep-instructor-details"><a href="../../profile/imran/index.html"><h4 class="ep-instructor-name">{{$teacher->name}}</h4></a><span class="ep-instructor-job">{{$teacher->email}}</span></div>
        </li>
        @endforeach
    </ul></section><section id="ep_course_category_widget-3" class="widget widget_ep_course_category_widget"><h3 class="widget-title">Course Categories</h3>			<div class="ep_course_category_list ep-cat-list-desktop">
<ul>
       @foreach($categories as $categorie)
       <li class="cat-item cat-item-23"><a href="../../course-category/android/index.html" >{{$categorie->name}}</a>
       </li>
       @endforeach

</ul>
</div>

    </section>	</aside><!-- #secondary -->
    </div> <!-- /.educationpress-main-content-inner -->
</div>

@endsection


 {{-- @section('scripts')
<script>
	const app= new Vue ({
	el:'#app',
	data:{
		comments: {},
		commentBox:'',
		formation :{!! $f->toJson() !!},
		user:{!! Auth::check() ? Auth::user()->toJson() : 'null'!!}
		 },
	mounted()
	{
	this.getComments();
	},
	methods:{
		getComments(){
		 axios.get('/api/formations/'+this.formation.id+'/comments')
			  .then((response)=>{
				  this.comments=response.data
			  })
			  .catch(function (error){
				  console.log(error);
			  })
		},
		postComment(){
		axios.post('/api/formations/'+this.formation.id+'/comment',{
			api_token: this.user.api_token,
			body:this.commentBox
		})
			.then((response)=>{
				this.comments.unshift(response.data);
				this.commentBox='';
			})
			.catch(function (error){
				console.log(error);
			})
		}
	}
	
	});
	</script> 
@endsection --}}