@extends('layouts.frontend.classic')

@section('content')
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="position-relative d-inline text-primary ps-4">Nos services</h6>
                <h2 class="mt-2">Ce que nous offrons</h2>
            </div>
            <div class="row g-5">
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="service-icon">
                                <i class="{{$service->icon->toFaClass()}} fa-2x text-white"></i>
                            </div>
                            <h4 class="mb-3">{{$service->title}}</h4>
                            <div class="m-0">{!! $service->presentation_text!!}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection

@section('brand')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Nos services</h1>
                <a href="{{route('home')}}" class="h5 text-white">Accueil</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">Nos services</a>
            </div>
        </div>
    </div>
@endsection

