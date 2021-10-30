@extends('layouts.web')

@section('content')

<section class="flat-title-page parallax parallax8 style4">
    <div class="overlay style2"></div>
    <div class="container wrap-title-page bg-img ">
        <div class="title-page">
            <h2 class="title font-weight-700"><a href="#">Cursos</a></h2>
            <p class="text">Todos nuestros cursos son a su propio ritmo y han sido diseñados por expertos en la materia, para brindarle una experiencia de aprendizaje interactiva y enriquecida.</p>
        </div>
        <div class="breadcrumbs ">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Cursos</a></li>
            </ul>
        </div>
        <img src="{{ asset('images/title-page/bg-white.png') }}" alt="bookflare" class="bg-breadcrumbs">
    </div>
</section> <!-- /.flat-title-page -->

<div class="content-wrap  courses-grid-v1-page">
    <div class="container-fluid">
        <div class="content-page-wrap">
            <ul class="flat-filter-isotype style1 text-center">
                <li class="active"><a href="#" data-filter="*">TODAS LAS CATEGORIAS</a></li>
                @foreach ($categorias as $key => $categoria)
                    <li><a href="#" data-filter=".{{ $categoria->nombre }}">{{ Str::upper($categoria->nombre) }}</a></li>
                @endforeach
            </ul>
            <div class="flat-courses clearfix isotope-courses">

                @foreach ( $cursos as $key => $curso )
                    <div class="course one-of-four {{$curso->categoria->nombre}}">
                        <div class="course-border border-f-e6f3ff border-ra4 transition-vline">
                            <div class="course-img img-vline">
                                <a href="{{ route('curso.detalle', $curso->id) }}">
                                    <img src="{{ $curso->id % 2 ? asset('images/courses/laravel-api.jpg') : asset('images/courses/phyton.jpg')  }}" alt="{{ $curso->nombre }}">
                                </a>
                                <div class="overlay">
                                    <span class="vline"></span>
                                    <span class="vline vline-bottom"></span>
                                </div>
                            </div>
                            <div class="course-content">
                                <div class="text-wrap border-bt-e6f3ff">
                                    <h6 class="title"><a href="{{ route('curso.detalle', $curso->id) }}">{{ $curso->nombre }}</a></h6>
                                    <p class="teacher"><a href="#">{{ $curso->instructor->nombres . ' ' . $curso->instructor->apellidos }}</a></p>
                                    <p class="description">{{ $curso->presentacion }}</p>
                                </div>
                                <div class="wrap-rating-price">
                                    <div class="wrap-rating">
                                        <ul class="list star-list">
                                            <li><i class="far fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                        </ul>
                                        <span>5.0  (980)</span>
                                    </div>
                                    <span class="price">{{ $curso->precio == 0 ? 'GRATIS' : 'S/' . $curso->precio }}</span>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.course -->
                @endforeach

            </div> <!-- /.flat-courses -->
        </div> <!-- /.content-page-wrap -->
    </div> <!-- /.container -->
</div> <!-- /.content-wrap -->

<section class="flat-feature ">
    <div class="overlay v2"></div>
    <div class="container">
        <div class="row flat-iconbox style1">
            <div class="col-lg-4 col-md-4">
                <div class="iconbox style1 left">
                    <div class="iconbox-icon">
                        <span class="icon-book"></span>
                    </div>
                    <div class="iconbox-content">
                        <h5 class="title">80,000 CURSOS ONLINE</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="iconbox style1 center">
                    <div class="iconbox-icon">
                        <span class="icon-people"></span>
                    </div>
                    <div class="iconbox-content">
                        <h5 class="title">INSTRUCTORES EXPERTOS</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="iconbox style1 right">
                    <div class="iconbox-icon">
                        <span class="icon-key"></span>
                    </div>
                    <div class="iconbox-content">
                        <h5 class="title">ACCESO ILIMITADO</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
