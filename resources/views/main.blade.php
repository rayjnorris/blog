<!DOCTYPE html>
<html lang="en">

    @include('partials._head')

    <body>

    	@include('partials._nav')
	    
	    
	        
	        @yield('content')	        
	        
    
	
	@include('partials._footer')
	
	@include('partials._scripts')

    </body>

</html>