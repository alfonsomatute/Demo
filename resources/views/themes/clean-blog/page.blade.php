
@extends('themes.clean-blog.layouts.master')


@section('header')
          
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('{{ $page->image }}')">
        <div class="container">
            <div class="row">                
                    <div class="site-heading">
                        <h1>{{ $page->title }}</h1>
                        <hr class="small">
                        <span class="subheading">{{ $page->subtitle }}</span>
                    </div>
            </div>
        </div>
    </header>
@stop

@section('content')
          
		
<!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    {!! $page->content !!}
                </div>
            </div>
        </div>
    </article>

@stop
