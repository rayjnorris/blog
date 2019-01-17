@extends('main')



@section('title', '| Edit Blog Post')

@section('content')
	
<section class="section section-background">

	<div class="container">

	<div class = "page-header popover-title">
    <h1> Edit Post </h1>
    </div>

		{!! Form::model($post, ['route' => ['posts.update', $post->id, 'data-parsley-validate' => ''], 'method' => 'PUT']) !!}
		
		<div class="row">

			<div class='col-lg-12'>

				<div class="md-form">
				    <input id="post_title" class="{{ Form::text("post_title", null, array("class" => "form-control", 'required' => '', 'maxlength' => '50')) }}
				    <label for="post_title" class="">Post Title</label>
				</div>		

				<div class="md-form">
				    <input id="post_type" class="{{ Form::text("post_type", null, array("class" => "form-control", 'required' => '')) }}
				    <label for="post_type" class="">Post Type</label>
				</div>	

			    <div class="md-form">
				    <input id="author_name" class="{{ Form::text("post_author", null, array("class" => "form-control", 'required' => '', 'maxlength' => '25')) }}
				    <label for="author_name" class="">Author Name</label>
				</div>

				<div class="md-form">
				    <input id="publish_date" class="{{ Form::text("post_date", null, array("id" => "datepicker", 'required' => '')) }}
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
				    <input id="post_summary_image" class="{{ Form::text("post_summary_image", null, array("class" => "form-control", 'maxlength' => '100')) }}
				    <label for="post_summary_image" class="">Post Summary Image URL</label>
				</div>		

				<div class="md-form" style="margin-top: 30px;">
				    <input id="post_content_image" class="{{ Form::text("post_content_image", null, array("class" => "form-control", 'maxlength' => '100')) }}
				    <label for="post_content_image" class="">Post Content Image URL</label>
				</div>	

			    <!-- <div  style="margin-top: 20px; margin-bottom: 20px;">
					{{ Form::submit("Update Post", array("class" => "btn btn-lg #ffe0b2 orange lighten-2")) }}
				</div>-->

			</div>

			
			<div class='col-lg-12'>

<!-- summary post page -->

			<div class = "page-header popover-title">
			    	<h1> Summary Post Section </h1>
			   </div>
			<div class="section">
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
			                            <img src="{{$post->post_summary_image}}" class="img-fluid" alt="">
			                            <div class="mask"></div>
			                        </div>
			                    </div>
			                    
			                </div>

			              
						    <div class="field-container">
						    		{{ Form::textarea("post_summary", null, array('class' => 'form-control' , 'id' => 'froala-editor')) }}
						    		
						    </div>

			                <!-- <div  style="margin-top: 30px;">
								{{ Form::submit("Update Post", array("class" => "btn btn-lg #ffe0b2 orange lighten-2")) }}
							</div> -->
			                
			                
			                
			            </div>                 
			        </div>
			    </div>         
				
			</div>

<!-- full post page -->
				<div style="height: 30px; background-color: white;"></div>
				<div class = "page-header popover-title">
			    	<h1> Full Post Section </h1>
			    </div>
		
				<div class="section">
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
				                        <div class="view overlay hm-white-light z-depth-1-half" >
				                            <img src="{{$post->post_content_image}}" class="img-fluid" alt="">
				                            <div class="mask"></div>
				                        </div>
				                    </div>
				                    
				                </div>
     
				            
							    
							    <div class="field-container">
							    		{{ Form::textarea("post_content", null, array('class' => 'form-control' , 'id' => 'froala-editor')) }} 
							    		
							    </div>

				                <div  style="margin-top: 30px;">
									{{ Form::submit("Update Post", array("class" => "btn btn-lg #ffe0b2 orange lighten-2")) }}
								</div>
								                
				                
				                </div>
				            </div>                 
				        </div>
				    </div>         
				</div>	
		   		
		 	</div>

		 	
		
			{!! Form::close() !!}

		</div>

	</div>
@stop

</section>

