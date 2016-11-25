@extends('themes.clean-blog.layouts.master')


@section('content')
	@if ($articles) 
	<div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
		@foreach ($articles as $article)
			@include('themes.clean-blog.partials.article-preview',compact('article'))
		@endforeach
		</div>
	</div>
	@endif
	@include('themes.clean-blog.partials.pager')
@stop
