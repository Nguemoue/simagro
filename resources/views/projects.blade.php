@extends('layouts.frontend.classic')
@section('content')
    <div class="py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="position-relative d-inline text-primary ps-4">Nos projets</h6>
                <h2 class="mt-2">Nos projets</h2>
            </div>
            <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container py-5">
                    <div class="row g-5">
                        <!-- Blog list Start -->
                        <div class="col-lg-8">
                            <div class="row g-5">
                                @foreach($projects as $project)

                                    <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                                        <div class="blog-item bg-light rounded overflow-hidden">
                                            <div class="blog-img position-relative overflow-hidden">
                                                <img class="img-fluid" src="{{asset('storage/'.$project->poster)}}" alt="Blog image {{$project->title}}">
                                            </div>
                                            <div class="p-4">
                                                <div class="d-flex mb-3">
                                                    <small><i
                                                            class="far fa-calendar-alt text-primary me-2"></i>{{$project->created_at->isoFormat('lll')}}
                                                    </small>
                                                </div>
                                                <h4 class="mb-3 text-capitalize">{{$project->title}}</h4>
                                                <p>{{$project->description}}</p>
                                                <a class="text-uppercase"
                                                   href="{{route('projects.show',['project'=>$project])}}">Voir plus <i class="bi bi-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('brand')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Projects</h1>
                <a href="{{route('home')}}" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">Projects</a>
            </div>
        </div>
    </div>
@endsection
