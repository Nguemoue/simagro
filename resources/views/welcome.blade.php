@extends('layouts.frontend.classic')
@section('content')

    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="aboutUs">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">A propos </h5>
                        <h1 class="mb-0">Solutions Informatiques sur Mesure et Innovantes</h1>
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
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                             style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4" id="contactWhatsapp">
                            <h5 class="mb-2">Contact Whatsapp pour vos questions</h5>
                            <h4 class="text-primary mb-0">{{config('projects.top_bar_details.phone_number')}}</h4>
                        </div>
                    </div>
                    <a href="#freeQuote" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Demander
                        un devis</a>
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


    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Pourquoi nous choisir</h5>
                <h1 class="mb-0">Nous développons votre entreprise de manière exponentielle</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                 style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>Prix Justes</h4>
                            <p class="mb-0"> Des tarifs compétitifs, adaptés à chaque budget.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                 style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4>Reconnaissance Internationale</h4>
                            <p class="mb-0"> Lauréat du projet technologique le plus
                                innovant d'Afrique centrale en 2020</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s"
                             src="{{asset('assets/img/feature.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                 style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4>Équipe Professionnelle </h4>
                            <p class="mb-0">Des experts répartis entre l’Afrique et l’Europe,
                                travaillant en collaboration pour réaliser vos projets.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                 style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <h4>Support 24/7</h4>
                            <p class="mb-0">Une assistance continue pour assurer le bon déroulement de
                                vos projets à tout moment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Nos services</h5>
                <h1 class="mb-0">Solutions Innovantes et sur Mesure </h1>
            </div>
            <div class="row g-5">
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div
                            class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="service-icon">
                                <i class="{{$service->icon->toFaClass()}} fa-2x text-white"></i>
                            </div>
                            <h4 class="mb-3">{{$service->title}}</h4>
                            <p class="m-0">{!! $service->description  !!}</p>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Service End -->



    <!-- Quote Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="freeQuote">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Demander un devis </h5>
                        <h1 class="mb-0">Besoin d’un devis ? Sentez-vous libre de nous contacter. C’est gratuit !</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Reponse en moins de 24H </h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>Whatsapp ouvert 7J/7</h5>
                        </div>
                    </div>
                    <p class="mb-4">
                        Obtenez dès maintenant votre devis gratuit avec GoulBAM Enterprises !
                        Nous vous proposons des solutions informatiques sur mesure, adaptées à
                        vos besoins spécifiques. Avec des tarifs compétitifs et abordables, notre
                        équipe d'experts vous garantit un service de qualité pour concrétiser vos
                        projets, quel que soit votre budget.
                    </p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                             style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Contact Whatsapp</h5>
                            <h4 class="text-primary mb-0">{{config('projects.top_bar_details.phone_number')}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn"
                         data-wow-delay="0.9s">
                        <form method="post" action="{{route('quote')}}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" name="name" class="form-control bg-light border-0"
                                           placeholder="Votre nom" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" name="email" class="form-control bg-light border-0"
                                           placeholder="Votre email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control bg-light border-0" rows="5"
                                              placeholder="Votre message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Demander gratuitement</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Temoignages</h5>
                <h1 class="mb-0">Ce que disent nos clients sur la qualité des services </h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                @foreach($testimonies as $testimony)
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1"> {{$testimony->client_name}}</h4>
                                <small class="text-uppercase">{{$testimony->company_name}} </small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            {{$testimony->feedback}}
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Testimonial End -->


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
                                    {{--
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                       href="{{$team->twitter_link}}"><i class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                       href="{{$team->facebook_link}}"><i class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                       href="{{$team->instagram_link}}"><i class="fab fa-instagram fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                       href="{{$team->linkedin_link}}"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                       --}}
                                    <a class="btn btn-lg text-white ">
                                        {{$team->bio}}
                                    </a>

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

    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    @foreach($partners as $partner)
                        <img src="{{asset('storage/'.$partner->image)}}" alt="logo {{$partner->name}}">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->

@endsection


