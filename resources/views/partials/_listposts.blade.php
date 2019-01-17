<section id="SECTION1" class="section section-charcoal">

@section('title', '| Edit Blog Post')

@section('content')
    
<section class="section" style="margin-top: 90px;">



    <div class="container">


    <div class = "page-header popover-title">
        <div class = "row">
            <div class = "col-lg-6">
                <h1> Posts List </h1>
            </div>
        
            <div class="col-lg-6 text-right">
                <div class="btn btn-primary">   
                    <a style="color: white;" href="/posts/create">Create Post</a>
                </div>
            </div>
        </div>
    </div>


    @foreach($posts as $post)

    {!! Form::model($post, ['route' => ['posts.update', $post->id, 'data-parsley-validate' => ''], 'method' => 'PUT']) !!}
        
        <div class="row">

            <div class='col-lg-6'>

                <div class="md-form">
                    <input id="post_title" class="{{ Form::text("post_title", null, array("class" => "form-control", 'required' => '', 'maxlength' => '50')) }}
                    <label for="post_title" class="">Post Title</label>
                </div>      

                <div class="md-form">
                    <input id="post_type" class="{{ Form::text("post_type", null, array("class" => "form-control", 'required' => '')) }}
                    <label for="post_type" class="">Post Type</label>
                </div>  

                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="post_featured" {{ Form::checkbox("post_featured", 1) }}
                    <span class="custom-control-indicator"></span>
                    <span style="font-size: 16px;">Featured Post</span>
                </label>
                
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="post_active" {{ Form::checkbox("post_active", 1) }}
                    <span class="custom-control-indicator"></span>
                    <span style="font-size: 16px;">Post Active</span>
                </label>

                <div class="md-form" style="margin-top: 30px;">
                    <input id="post_summary_image" class="{{ Form::text("post_summary_image", null, array("class" => "form-control", 'maxlength' => '100')) }}
                    <label for="post_summary_image" class="">Post Summary Image URL</label>
                </div>      

                <div class="col-lg-6" style="margin-left: -15px;">
                    <img src="{{$post->post_summary_image}}" height="50px" alt="">
                </div>

                

            </div>   <!-- end first column -->

            <div class='col-lg-6'>    <!-- start second column --> 

                <div class="md-form">
                    <input id="author_name" class="{{ Form::text("post_author", null, array("class" => "form-control", 'required' => '', 'maxlength' => '25')) }}
                    <label for="author_name" class="">Author Name</label>
                </div>

                <div class="md-form">
                    <input id="publish_date" class="{{ Form::text("post_date", null, array("id" => "datepicker", 'required' => '')) }}
                    <label for="publish_date" class="">Publish Date</label>
                </div>

                <div class="md-form" style="margin-top: 30px;">
                    <input id="post_content_image" class="{{ Form::text("post_content_image", null, array("class" => "form-control", 'maxlength' => '100')) }}
                    <label for="post_content_image" class="">Post Content Image URL</label>
                </div>  

                <div class="col-lg-6" style="margin-left: -15px;">
                    <img src="{{$post->post_content_image}}" height="50px" alt="">
                </div>
                

            </div>  <!-- end second column -->

            
        </div>

        <div class="row" style="background-color: #F0F0F0; margin-top: 20px; padding-left: 15px; margin-left: -15px; margin-bottom: 30px;">
            <div class="btn btn-warning" >   
                <a style="color: white;" href="/posts/{{$post->id}}/edit">Edit Post</a>
            </div>
        </div>

        {!! Form::close() !!}

    @endforeach



    </div>

@stop

</section>




