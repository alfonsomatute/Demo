@extends('themes.clean-blog.layouts.master')


@section('content')
	@if (is_array($posts)) 
		@foreach ($posts as $post)
			@include('themes.clean-blog.partials.post-preview',compact($post))
		@endforeach
	@endif
	@include('themes.clean-blog.partials.pager')
@stop
