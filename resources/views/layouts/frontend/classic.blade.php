<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>{{config('app.name')}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="goulbam, Goulbam, GoulBAM, web development, mobile app development, SEO optimization, digital marketing, IT training, data analysis, architectural design, affordable IT solutions, GoulBAM Enterprises, remote IT services, Cameroon IT company, Belgium IT services, Madagascar IT professionals, custom software development, innovative IT solutions, développement web, développement d'applications mobiles, optimisation SEO, marketing digital, formation en informatique, analyse de données, conception architecturale, solutions informatiques abordables, GoulBAM Enterprises, services informatiques à distance, entreprise informatique Cameroun, services informatiques Belgique, professionnels informatiques Madagascar, développement de logiciels sur mesure, solutions informatiques innovantes" name="keywords">
    <meta content="GoulBAM Enterprises propose des solutions informatiques innovantes et abordables, incluant le développement web, les applications mobiles, l'optimisation SEO, le marketing digital, l'analyse de données et des formations en informatique. Nous offrons des services sur mesure à l'échelle mondiale avec une équipe professionnelle au Cameroun, en Belgique et à Madagascar. Votre partenaire dans la transformation numérique !" name="description">

    <!-- Favicon -->
    <link href="{{asset('logo.png')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css"
          integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    @stack('stylesheets')
</head>

<body>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
@if(config('projects.top_bar_enable'))
    @include('layouts.frontend._partials.topbar')
@endif

<!-- Topbar End -->


<!-- Navbar & Carousel Start -->
<div class="container-fluid position-relative p-0">
   @include('layouts.frontend._partials.navbar')
    @if(\Illuminate\Support\Facades\View::hasSection('brand'))
        @yield('brand')
    @else
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('assets/img/carousel-2.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Créatif & innovant</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">GoulBAM Enterprises Digital
                                Solution</h1>
                            <a href="#aboutUs" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Allons Y</a>
                            <a href="{{route('services')}}" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Nos Services</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{asset('assets/img/carousel-1.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">La Porte du future </h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Le Monde Numérique à une autre dimension </h1>
                            <a href="#freeQuote" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Devis gratuit</a>
                            <a target="_blank" href="https://wa.me/{{config('projects.whatsapp_number')}}?text={{config('projects.whatsapp_text_quote')}}" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Message rapide</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    @endif
</div>

<!-- Navbar & Carousel End -->


@if(config('projects.search_bar_enable'))
    <!-- Full Screen Search Start -->
    <x-frontend.seach-bar/>
    <!-- Full Screen Search End -->
@endif

<!-- Facts Start -->
<div class="container-fluid facts py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-users text-primary"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white mb-0">Clients Satisfaits</h5>
                        <div class="d-flex">
                            <h1 class="text-white mb-0" data-toggle="counter-up">50</h1>
                            <h1 class="text-white">+</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-check text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-primary mb-0">Années d’expérience </h5>
                        <div class="d-flex">
                            <h1 class="mb-0" data-toggle="counter-up">6</h1>
                            <h1>+</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-award text-primary"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white mb-0">Partenaires</h5>
                        <div class="d-flex">
                            <h1 class="text-white mb-0" data-toggle="counter-up">7</h1>
                            <h1 class="text-white">+</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facts Start -->

@yield('content')

<!-- Footer Start -->
@include('layouts.frontend._partials.footer')
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('assets/lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"
        integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@include('layouts.partials.izitoast')
@stack('scripts')
</body>

</html>
