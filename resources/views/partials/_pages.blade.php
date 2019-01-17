<section id="SECTION1" class="section section-background">

<!-- display featured posts -->
<div class="container">
    @foreach($posts as $post)
    @if(($post->post_active == 1) and ($post->post_type == 'page'))
         
            
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
                
                <div class="row" style="margin-bottom: 30px;">
                    <div class="featured_post_summary">
                        <p>{!! $post->post_content !!}</p>
                    </div>
                       
               </div> 
               
               <div class="hr-red" style="margin-left: -15px; margin-top: -10px;"></div>

               
           </div>
        
        @endif
    @endforeach
</div>


</section>

