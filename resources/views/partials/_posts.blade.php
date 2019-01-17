<section id="SECTION1" class="section section-background">

<!-- display featured posts -->
<div class="container">
    @foreach($posts as $post)
    @if(($post->post_active == 1) and ($post->post_type == 'post'))
        @if ($post->post_featured == 1)  
            
            <div class="row" style="margin-bottom: 30px;">
                <div class="col-lg-12">
                    <!--Featured image -->
                    <div class="view overlay hm-white-light z-depth-1-half">
                        <img src="{{$post->post_summary_image}}" class="img-fluid "  alt="">
                        <div class="mask"></div>
                    </div>
                </div>
            </div>
            <div style="margin-left: 15px;">
                <div class="row">
                    <h2 class="h2-responsive">{{$post->post_title}}</h2>
                </div>
                
                    <!--Main information-->   
                <div class="row">
                    <div class="post_attributes">  
                        <div class="post_date_label">Published: </div>
                        <div class="post_date">{{$post->post_date}}</div>
                        <div class="post_author_label">Author: </div>
                        <div class="post_author">{{$post->post_author}}</div>
                    </div>   
                </div> 

                <div class="hr-red" style="margin-left: -15px;"></div>
                
                <div class="row" style="margin-bottom: 30px;">
                    <div class="featured_post_summary">
                        <p>{!! $post->post_summary !!}</p>
                    </div>
                       
               </div> 
               
               <div class="hr-red" style="margin-left: -15px; margin-top: -10px;"></div>

               <div style="margin-bottom: 30px; margin-left: -15px;">   
               <a href="/posts/{{$post->id}}" class="btn navbar-color">READ MORE</a>
               </div>
           </div>
        @endif
        @endif
    @endforeach
</div>

<!-- display non-featured posts, the rest of the 10 -->

<div class="container">       
    <div class="row">
        @foreach($posts as $post)
        @if (($post->post_active == 1) and ($post->post_type == 'post'))
        @if ($post->post_featured != 1)
            <!--First columnn-->
            <div class="col-lg-4">
                <!--Card-->
                <div class="card card-flat">
                    <!--Card image-->
                    <div class="view overlay hm-white-slight">
                        <img src="{{$post->post_summary_image}}" class="img-fluid"  alt="">
                        <a href="#">
                            <div class="mask"></div>
                        </a>
                    </div>
                    <!--/.Card image-->
                    <!--Card content-->
                    <div class="card-block">
                        <!--Title-->
                        <h4 class="card-title">{{$post->post_title}}</h4>
                        <div class="post_attributes">   
                        <div class="post_date_label">Published: </div>
                        <div class="post_date">{{$post->post_date}}</div>
                        <div class="post_author_label">Author: </div>
                        <div class="post_author">{{$post->post_author}}</div>
                    </div>     
                        <!--Text-->
                        <div class="hr-red"></div>
                        <p class="card-text">{!! $post->post_summary !!}</p>
                        <a href="/posts/{{$post->id}}" class="btn navbar-color">Read more</a>
                    </div>
                    <!--/.Card content-->
                </div>
                <!--/.Card-->
            </div>
        @endif
        @endif
        @endforeach
    </div>
</div>
</section>

