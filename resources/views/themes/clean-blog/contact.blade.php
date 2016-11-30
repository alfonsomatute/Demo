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

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>Puedes contarme lo que quieras rellenando este formulario</p>
                <form name="sentMessage" id="contactForm" novalidate>
		{{ csrf_field() }}
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Tu nombre</label>
                            <input type="text" class="form-control" placeholder="Tu nombre" id="name" required data-validation-required-message="Por favor, indícame tu nombre">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Tu email</label>
                            <input type="email" class="form-control" placeholder="Tu email" id="email" required data-validation-required-message="Por favor, indícame tu email para poder contestarte">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Mensaje</label>
                            <textarea rows="5" class="form-control" placeholder="Mensaje" id="message" required data-validation-required-message="Por favor, escribe aquí lo que quieras"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-default">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr>
@stop

