<div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-4 col-md-6 footer-about">
                <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                    <a href="{{route('home')}}" class="navbar-brand">
                        <h1 class="m-0 text-white">
                            <img class="img-fluid" width="70" src="{{asset('logo-white.png')}}" alt="logo">
                            <span>{{config('projects.footer.startup_name')}}</span>
                        </h1>
                    </a>
                    <p class="mt-3 mb-4">{{config('projects.footer.startup_description')}}</p>
                    <form action="{{route('newsletters')}}" method="post">
                        @csrf
                        <div class="input-group">
                            <input name="email" type="text" class="form-control border-white p-3" placeholder="Votre email">
                            <button type="submit" class="btn btn-dark">S'inscrire</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-8 col-md-6">
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-12 pt-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Prendre contact</h3>
                        </div>
                        @if(config('projects.address_show'))
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">{{config('projects.top_bar_details.address')}}</p>
                            </div>
                        @endif

                        <div class="d-flex mb-2">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <p class="mb-0">{{config('projects.top_bar_details.email')}}</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <p class="mb-0">{{config('projects.top_bar_details.phone_number_2')}}</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <p class="mb-0">{{config('projects.top_bar_details.phone_number')}}</p>
                        </div>

                        <div class="d-flex mt-4">
                            <a class="btn btn-primary btn-square me-2" href="{{config('projects.top_bar_details.twitter_link')}}"><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2" href="{{config('projects.top_bar_details.facebook_link')}}"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2" href="{{config('projects.top_bar_details.linkedin_link')}}"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-primary btn-square" href="{{config('projects.top_bar_details.instagram_link')}}"><i class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Liens rapides</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href="{{route('home')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Accueil</a>
                            <a class="text-light mb-2" href="{{route('about')}}"><i class="bi bi-arrow-right text-primary me-2"></i>A propos</a>
                            <a class="text-light mb-2" href="{{route('services')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Nos services</a>
                            <a class="text-light mb-2" href="{{route('contact')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Nous contacter</a>
                            <a class="text-light" href="{{route('projects')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Nos projets</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Liens populaires</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href="{{route('home')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Accueil</a>
                            <a class="text-light mb-2" href="{{route('blogs.index')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Blog</a>
                            <a class="text-light mb-2" href="{{route('projects')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Nos projets</a>
                            <a class="text-light mb-2" href="{{url('/admin')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Administration</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid text-white" style="background: #061429;">
    <div class="container text-center">
        <div class="row justify-content-end">
            <div class="col-lg-8 col-md-6">
                <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                    <p class="mb-0">&copy; {{date('Y')}} <a class="text-white border-bottom" href="{{config('projects.footer.startup_link')}}">GoulBAM</a>. All Rights Reserved.
                </div>
            </div>
        </div>
    </div>
</div>
