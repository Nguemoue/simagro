@extends('layouts.frontend.classic')
@section('content')
    <div class="py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="position-relative d-inline text-primary ps-4">Project Detail</h6>
                <h2 class="mt-2">Titre :{{$project->title}}</h2>
            </div>
            <!-- Blog Start -->
            <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container py-5">
                    <div class="row g-5">
                        <div class="col-lg-8">
                            <!-- Blog Detail Start -->
                            <div class="mb-5">
                                <img class="img-fluid w-100 rounded mb-5" src="{{asset('storage/'.$project->poster)}}" alt="">
                                <h1 class="mb-4">Description: {{$project->description}}</h1>
                                <p>
                                    {!! $project->content !!}
                                </p>
                                <p>
                                    Cree le : {{$project->created_at->isoFormat('lll')}}
                                </p>
                            </div>
                            <!-- Blog Detail End -->


                        </div>

                        <!-- Sidebar Start -->
                        <div class="col-lg-4">

                            <!-- Recent Post Start -->
                            <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                                <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                    <h3 class="mb-0">Project members</h3>
                                </div>
                                @foreach($project->projectMembers as $member)
                                    <h2>{{$member->name}} - {{$member->email}}</h2>
                                @endforeach
                            <!-- Recent Post End -->
                        </div>
                        <!-- Sidebar End -->
                    </div>
                </div>
            </div>
            <!-- Blog End -->
        </div>
    </div>
@endsection

@section('brand')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Project Detail</h1>
                <a href="{{route('home')}}" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="{{route('projects')}}" class="h5 text-white">Projects</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">Detail</a>

            </div>
        </div>
    </div>
@endsection
