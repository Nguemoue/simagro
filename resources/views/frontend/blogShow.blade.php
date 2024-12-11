@extends('layouts.frontend.classic')
@section('content')

    <div class="py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="position-relative d-inline text-primary ps-4">Blog Detail</h6>
                <h2 class="mt-2">{{$blog->title}}</h2>
            </div>
            <!-- Blog Start -->
            <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container py-5">
                    <div class="row g-5">
                        <div class="col-lg-8">
                            <!-- Blog Detail Start -->
                            <div class="mb-5">
                                <img class="img-fluid w-100 img-thumbnail rounded mb-5" src="{{asset('storage/'.$blog->image)}}" alt="">
                                <h1 class="mb-4">{{$blog->seo_title}}</h1>
                                <div class="blog-viewer">
                                    <div class="card-body" style="max-width: 100vw">
                                        {!! $blog->content  !!}
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Detail End -->

                            <!-- Comment List Start -->
                            <div class="mb-5">
                                <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                    <h3 class="mb-0">{{$blog->comments->count()}} Comments</h3>
                                </div>
                                @foreach($blog->comments as $comment)
                                    <div class="d-flex mb-4">
                                        <img src="{{asset('assets/img/user.jpg')}}" class="img-fluid rounded" style="width: 45px; height: 45px;">
                                        <div class="ps-3">
                                            <h6><a href="">{{$comment->customer->name}}</a> <small><i>{{$comment->created_at->isoFormat('lll')}}</i></small></h6>
                                            <p>{{$comment->title}}</p>
{{--                                            <button class="btn btn-sm btn-light">Reply</button>--}}
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                            <!-- Comment List End -->

                        </div>

                        <!-- Sidebar Start -->
                        <div class="col-lg-4">

                            <!-- Recent Post Start -->
                            <x-frontend.recent-post/>
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
                <h1 class="display-4 text-white animated zoomIn">Blog Detail</h1>
                <a href="{{route('home')}}" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="{{route('blogs.index')}}" class="h5 text-white">Blog list</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">Blog detail</a>

            </div>
        </div>
    </div>
@endsection

@push('stylesheets')
    <style>
        .blog-viewer img{
            max-width: 80vw !important;
            aspect-ratio: 1/1;
            object-fit: cover;
        }
    </style>
@endpush
