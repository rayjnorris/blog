@extends('main')
@section('title', $post->post_title)
@section('content')
	@include('partials._messages')	
	@include('partials._post') 
@endsection
    
   



