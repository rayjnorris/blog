@extends('main')
     

@section('title', '| Edit Blog Post')

@section('content')  

<section class="section section-background">

    <div class="container">

    <div class = "page-header popover-title">
    <h1> Create Post </h1>
    </div>

        <div style="margin-top: 20px;"

            <div class="container">

                @include('partials._messages')

                {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '')) !!}
                    
                    <div class="row">

                    <div class='col-lg-12'>

                        <div class="md-form">
                            <input id="post_title" class="{{ Form::text("post_title", "Temporary Post Title", array("class" => "form-control", 'required' => '', 'maxlength' => '50')) }}
                            <label for="post_title" class="">Post Title</label>
                        </div>      

                        <div class="md-form">
                            <input id="post_type" class="{{ Form::text("post_type", "post", array("class" => "form-control", 'required' => '')) }}
                            <label for="post_type" class="">Post Type (post/page)</label>
                        </div>      

                        <div class="md-form">
                            <input id="author_name" class="{{ Form::text("post_author", "Ray J. Norris", array("class" => "form-control", 'required' => '', 'maxlength' => '25')) }}
                            <label for="author_name" class="">Author Name</label>
                        </div>

                        <div class="md-form">
                            
                            <input id="publish_date" class="{{ Form::text("post_date", date('Y-m-d'), array("id" => "datepicker", 'required' => '')) }}
                            <label for="publish_date" class="">Publish Date</label>
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
                            <input id="post_summary_image" class="{{ Form::text("post_summary_image", "/images/business-meeting-1.jpg", array("class" => "form-control", 'maxlength' => '100')) }}
                            <label for="post_summary_image" class="">Post Summary Image URL</label>
                        </div>      

                        <div class="md-form" style="margin-top: 30px;">
                            <input id="post_content_image" class="{{ Form::text("post_content_image", "/images/business-meeting-1.jpg", array("class" => "form-control", 'maxlength' => '100')) }}
                            <label for="post_content_image" class="">Post Content Image URL</label>
                        </div>  

                        <div class="field-container">
                                {{ Form::textarea("post_summary", "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br><br>", array('class' => 'form-control' , 'id' => 'froala-editor')) }}
                        </div>

                        <div class="field-container">
                                {{ Form::textarea("post_content", "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br><br>", array('class' => 'form-control' , 'id' => 'froala-editor')) }}
                        </div>


                    </div>

                    <div  style="margin-top: 10px; margin-left: 15px; margin-bottom:30px;">
                        {{ Form::submit("Create Post", array("class" => "btn btn-lg #ffe0b2 orange lighten-2")) }}
                    </div>
                 
                    
                {!! Form::close() !!}
                        
            </div>
        </div>
    </div>
@endsection