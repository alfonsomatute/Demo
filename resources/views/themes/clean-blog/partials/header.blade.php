
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/">Entre Pinos y Encinas</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/">Inicio</a>
                    </li>
                    <li>
                        <a href="/clean-blog/about.html">El proyecto</a>
                    </li>
                    <li>
                        <a href="/clean-blog/post.html">Recursos</a>
                    </li>
                    <li>
                        <a href="/clean-blog/contact.html">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

@if(isset($banner))
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('/clean-blog/img/{{ $banner->image }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>{{ $banner->title }}</h1>
                        <hr class="small">
                        <span class="subheading">{{ $banner->subtitle }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endif
