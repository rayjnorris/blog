<div class="section section-background">
    <div class="container">
        <div class="row">
            <div class="col-lg-12"> 
                <div class="row" style="margin-bottom: 30px;">

                <!-- post title and attributes -->

                <div class="col-lg-12">
                    <h1 class="h1-responsive">{{$post->post_title}}</h1>
                    <div class="post_attributes">   
                        <div class="post_date_label">Published: </div>
                        <div class="post_date">{{$post->post_date}}</div>
                        <div class="post_author_label">Author: </div>
                        <div class="post_author">{{$post->post_author}}</div>
                    </div>       
                    <div class="hr-red"></div>        
                </div>


                    <div class="col-lg-12">
                            <!--Featured image -->
                        <div class="view overlay hm-white-light z-depth-1-half">
                            <img src="{{$post->post_content_image}}" class="img-fluid" alt="">
                            <div class="mask"></div>
                        </div>
                    </div>
                    
                </div>
                <div class="post_content fr-view">
                    {!! $post->post_content !!}
                </div>
                <hr>
                @if (Auth::guest())
                            <!--<li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>-->
                        @else
                <div class="row">
                    <div class="col-6">
                        
                        {!! Html::linkRoute('posts.edit', 'EDIT', array($post->id), array('class' => 'btn btn-warning')) !!}
                        
                    </div>

                    <div class="col-6 text-right">
                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                        
                        {!! Form::submit('DELETE', array('class' => 'btn btn-danger')) !!}
                        
                        {!! Form::close() !!}
                    </div>
                </div>
                @endif
            </div>                 
        </div>
    </div>         
</div>
