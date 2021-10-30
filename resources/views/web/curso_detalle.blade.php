@extends('layouts.web')

@section('content')

<section class="flat-title-page parallax parallax11 style4">
    <div class="overlay style4"></div>
    <div class="container wrap-title-page bg-img ">
        <div class="title-page">
            <h2 class="title font-weight-700"><a href="#">{{ $curso->nombre }}</a></h2>
            <p class="text">{{ $curso->presentacion }}</p>
        </div>
        <div class="breadcrumbs">
            <ul>
                <li><a href="{{ route('inicio') }}">Inicio</a></li>
                <li><a href="#">Detalle</a></li>
            </ul>
        </div>
        <img src="{{ asset('images/title-page/bg-white.png') }}" alt="bookflare" class="bg-breadcrumbs style2">
    </div>
</section> <!-- /.flat-title-page -->

<div class="content-wrap  courses-single-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="content-page-wrap">
                    <div class="course-single">
                        <div class="img-single">
                            <a href="#"><img src="{{ $curso->id % 2 ? asset('images/courses/laravel-api.jpg') : asset('images/courses/phyton.jpg') }}" alt="bookflare"></a>
                        </div>
                        <div class="content">
                            <div class="heading">
                                <h6 class="title"><a href="#">{{ $curso->nombre }}</a></h6>
                                <p class="description">{{ $curso->presentacion }}</p>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="price-wrap">
                                        <span class="sale-price color-f3728b">{{ $curso->precio == 0 ? 'GRATIS' : 'S/' . $curso->precio }}</span>
                                        <span class="price">S/199.99</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="wrap-cart flat-text-right">
                                        <a href="#" class="btn-cart">Añadir al Carrito</a>
                                        <a href="#" class="flat-button btn-buy border-ra4 float-right">COMPRAR AHORA</a>
                                    </div>
                                </div>
                            </div>
                            <div class="author border-t-e6f3ff">
                                <div class="author-avata">
                                    <img src="{{ asset('images/events/author-teacher.png') }}" alt="{{ $curso->nombre }}">
                                </div>
                                <div class="author-info">
                                    <h6 class="name"><a href="#">{{ $curso->instructor->nombres . ' ' . $curso->instructor->apellidos }}</a></h6>
                                    <div class="wrap-list">
                                        <ul class="list meta-list">
                                            <li>
                                                <span class="title">Categoría:</span>
                                                <a href="#"><span > {{$curso->categoria->nombre}} </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span>49,997</span></a>
                                                <span class="title">Estudiantes</span>
                                            </li>
                                        </ul>
                                        <ul class="list meta-rate">
                                            <li>
                                                <ul class="list star-list">
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                </ul>
                                                <span class="font-weight-700">5.0  (980) </span>
                                            </li>
                                            <li>
                                                <span class="font-weight-700">{{ date_format($curso->updated_at, 'M d, Y') }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.course-single -->
                    <div class="flat-tabs bg-fff border-ra4 border-f-e6f3ff">
                        <ul class="tab-title style1 clearfix border-bt-e6f3ff">
                            <li class="item-title  overview">
                                <span class="inner">TEMARIO</span>
                            </li>
                            <li class="item-title event">
                                <span class="inner">DESCRIPCIÓN</span>
                            </li>
                            <li class="item-title requirements">
                                <span class="inner">REQUISITOS</span>
                            </li>
                        </ul>
                        <div class="tab-content-wrap">
                            <div class="tab-content">
                                <div class="item-content p-0">

                                    <div class="flat-faqs">
                                        <div class="accordion">
                                            @foreach ( $curso->secciones as $key => $seccion )
                                                <div class="accordion-toggle border-ra4">
                                                    <div class="toggle-title {{ $key == 0 ?? 'active' }}">
                                                        {{ $seccion->nombre }}
                                                    </div>
                                                    <div class="toggle-content">

                                                        @foreach ( $seccion->lecciones as $leccion )
                                                            <p> * {{ $leccion->nombre }} <span class="float-right">{{ $leccion->tipo === 'Video' ? $leccion->duracion_video : '' }}</span></p>
                                                        @endforeach

                                                        <div class="clearfix"></div>

                                                    </div>
                                                </div><!-- /.accordion-toggle -->
                                            @endforeach
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="item-content">
                                    {!! $curso->descripcion !!}
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="item-content">
                                    <div class="mt-5">
                                        {!! $curso->requisitos !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.flat-tabs -->
                </div> <!-- /.content-page-wrap -->
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-right">
                </div>
            </div>
        </div>
    </div> <!-- /.container -->
</div> <!-- /.content-wrap -->

@endsection
