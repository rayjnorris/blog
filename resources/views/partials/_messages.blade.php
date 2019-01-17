

@if (Session::has('success'))

 	<div class="card-panel #e0f2f1 teal lighten-5">
 	 	{{ Session::get('success')}}
 	</div>
 	
@endif

@if (Session::get('errors'))

	<div class="card-panel #f8bbd0 pink lighten-4">
		<ul>
			@foreach ($errors->all() as $error)
		 	 	<li>{{ $error }}</li>
		 	@endforeach
	 	</ul> 
	</div>

@endif