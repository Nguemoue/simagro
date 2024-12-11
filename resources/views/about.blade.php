@extends('layouts.frontend.classic')
@section('content')
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">A propos </h5>
                        <h1 class="mb-0">GoulBAM Enterprises: Solutions Informatiques sur Mesure et Innovantes</h1>
                    </div>
                    <p class="mb-4">
                        Depuis sa création, GoulBAM Enterprises s’est imposée comme acteur clé dans
                        le monde de la technologie en fournissant des solutions informatiques de
                        pointe. Avec des années d'expertise et des projets réussis dans divers secteurs,
                        nous rendons la technologie accessible et performante. Grâce à une équipe
                        internationale et un modèle de travail innovant, nous créons des solutions
                        personnalisées adaptées à vos besoins spécifiques.
                    </p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Développement web</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i> Développement mobile</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Formation</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i> Marketing digitale</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.5s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Conception Architecturale</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.5s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>SEO</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <a class="btn btn-primary rounded-pill px-4 me-3" href="{{asset('assets/goulbam_story.pdf')}}" target="_blank">Telecharger</a>
                        <a class="btn btn-outline-primary btn-square me-3" target="_blank" href="{{config('projects.top_bar_details.facebook_link')}}"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" target="_blank" href="{{config('projects.top_bar_details.twitter_link')}}"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" target="_blank" href="{{config('projects.top_bar_details.instagram_link')}}"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-primary btn-square" href="{{config('projects.top_bar_details.linkedin_link')}}"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                             src="{{asset('assets/img/about.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Newsletter Start -->
    <div class="container-xxl bg-primary newsletter my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container px-lg-5">
            <div class="row align-items-center" style="height: 250px;">
                <div class="col-12 col-md-6">
                    <h3 class="text-white">Prêt à démarrer</h3>
                    <small class="text-white">Soyez à jour de nos actualités</small>
                    <form action="{{route('newsletters')}}" method="post">
                        @csrf
                        <div class="position-relative w-100 mt-3">
                            <input name="email" class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Entrez votre email" style="height: 48px;">
                            <button type="submit" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                    <img class="img-fluid mt-5" style="height: 250px;" src="{{asset('assets/img/newsletter.png')}}">
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->


    <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Notre équipe</h5>
                <h1 class="mb-0">Notre staff professionnel prêt à vous aider</h1>
            </div>
            <div class="row g-5">
                @foreach($teams as $team)
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.{{(3%($loop->index+1))}}s">
                        <div class="team-item bg-light rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{$team->poster_url}}" alt="">
                                <div class="team-social">
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                       href="{{$team->twitter_link}}"><i class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                       href="{{$team->facebook_link}}"><i class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                       href="{{$team->instagram_link}}"><i class="fab fa-instagram fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                       href="{{$team->linkedin_link}}"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h4 class="text-primary">{{$team->name}}</h4>
                                <p class="text-uppercase m-0">{{$team->position}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Team End -->

@endsection
@section('brand')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">A propos</h1>
                <a href="{{route('home')}}" class="h5 text-white">Acceuil</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">A propos</a>
            </div>
        </div>
    </div>
@endsection

