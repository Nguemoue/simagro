@extends('layouts.frontend.classic')
@section('content')
    <div class="py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="position-relative d-inline text-primary ps-4">Blog</h6>
                <h2 class="mt-2">Nos blogs</h2>
            </div>
            <!-- Blog Start -->
            <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container py-5">
                    <div class="row g-5">
                        <!-- Blog list Start -->
                        <div class="col-lg-8">
                            <div class="row g-5">
                                @foreach($blogs as $blog)

                                    <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                                        <div class="blog-item bg-light rounded overflow-hidden">
                                            <div class="blog-img position-relative overflow-hidden">
                                                <img class="img-fluid" src="{{asset('storage/'.$blog->image)}}" alt="Blog image {{$blog->title}}">
                                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                                   href="">{{$blog->category->name}}</a>
                                            </div>
                                            <div class="p-4">
                                                <div class="d-flex mb-3">
                                                    <small class="me-3"><i
                                                            class="far fa-user text-primary me-2"></i>{{$blog->author?->name??'user'}}
                                                    </small>
                                                    <small><i
                                                            class="far fa-calendar-alt text-primary me-2"></i>{{$blog->created_at->isoFormat('lll')}}
                                                    </small>
                                                </div>
                                                <h4 class="mb-3 text-capitalize">{{$blog->title}}</h4>
                                                <p>{{$blog->seo_description}}</p>
                                                <a class="text-uppercase"
                                                   href="{{route('blogs.show',['blog'=>$blog])}}">Voir plus <i class="bi bi-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                                    {{$blogs->links()}}
                                </div>
                            </div>
                        </div>
                        <!-- Blog list End -->

                        <!-- Sidebar Start -->
                        <div class="col-lg-4">
                            <!-- Search Form Start -->
                            {{--<div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                                <div class="input-group">
                                    <input type="text" class="form-control p-3" placeholder="Keyword">
                                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                                </div>
                            </div>--}}
                            <!-- Search Form End -->

                            <!-- Category Start -->
                            <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                                <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                    <h3 class="mb-0">Categories</h3>
                                </div>
                                <div class="link-animated d-flex flex-column justify-content-start">
                                    @foreach($blogs->pluck('category') as $category)
                                        <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i
                                                class="bi bi-arrow-right me-2"></i>{{$category->name}}</a>
                                    @endforeach
                                </div>
                            </div>
                            <!-- Category End -->

                            <!-- Recent Post Start -->
                            <x-frontend.recent-post/>
                            <!-- Recent Post End -->


                            <!-- Tags Start -->
                            <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                                <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                    <h3 class="mb-0">Tags</h3>
                                </div>
                                <div class="d-flex flex-wrap m-n1">
                                    @foreach($blogs->pluck('tags') as $tag)
                                        <a href="" class="btn btn-light m-1">{{$tag[0]->name}}</a>
                                    @endforeach

                                </div>
                            </div>
                            <!-- Tags End -->
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
                <h1 class="display-4 text-white animated zoomIn">Blog</h1>
                <a href="{{route('home')}}" class="h5 text-white">Accueil</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="#" class="h5 text-white">Blog</a>
            </div>
        </div>
    </div>
@endsection

