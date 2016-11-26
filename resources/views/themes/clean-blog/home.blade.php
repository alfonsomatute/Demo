@extends('themes.clean-blog.layouts.master')

@section('header')
          
  @if(isset($banner))
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('{{ $banner->image }}')">
        <div class="container">
            <div class="row">                
                    <div class="site-heading">
                        <h1>{{ $banner->title }}</h1>
                        <hr class="small">
                        <span class="subheading">{{ $banner->subtitle }}</span>
                    </div>
            </div>
        </div>
    </header>
  @endif
@stop

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
