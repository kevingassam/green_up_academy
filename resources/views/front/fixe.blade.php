@php
    $formations_academique = DB::table('formations')->where('type', 'academique')->count();
    $formations_professionnelle = DB::table('formations')->where('type', 'professionnelle')->count();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">
    <title>GUA - @yield('titre')</title>
    @yield('head')
</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top
       ============================================= -->
    <div class="top-bar-area bg-dark text-light inline inc-border">
        <div class="container">
            <div class="row align-center">

                <div class="col-lg-7 col-md-12 left-info">
                    <div class="item-flex">
                        <ul class="list">
                            <li>
                                <i class="fas fa-phone"></i> +33751360944
                            </li>
                            <li>
                                <i class="fas fa-bullhorn"></i> <a href="#">contact@green-up-academy.com</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 right-info">
                    <div class="item-flex">
                        <div class="social">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/profile.php?id=61552659593402">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/green-up-academy/">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="button">
                            @guest
                                <a href="/register">Inscription</a>
                                <a href="/login"><i class="fa fa-sign-in-alt"></i>Connexion</a>
                            @endguest
                            @auth
                                <a href="/dashboard">
                                    <i class="fa fa-user"></i> {{ Auth::user()->prenom }}
                                </a>
                            @endauth

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header
       ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border navbar-sticky dark bootsnav">

            <div class="container">

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="/">
                        <img src="/assets/img/logo.png" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li>
                            <a href="/" class=" active">Accueil</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">CAMPUS</a>
                            <ul class="dropdown-menu">
                                <li><a href="/campus">Présentation du campus</a></li>
                                <li><a href="/reglement">Reglement interieur</a></li>
                                <li><a href="/reglement#certification">Certifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Formations</a>
                            <ul class="dropdown-menu">
                                <li><a href="/formation/academique">Academique ( {{ $formations_academique }} ) </a>
                                </li>
                                <li>
                                    <a href="/formation/professionnelle">Professionnelle (
                                        {{ $formations_professionnelle }})
                                    </a>
                                    </li>
                                    <li><a href="/admission">Obtenir une admission</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/about">A propos</a>
                        </li>
                        <li>
                            <a href="/contact">Contact</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->


    @yield('content')



    <!-- Star Footer
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item about">
                            <img src="assets/img/logo-light.png" alt="Logo">
                            <p>
                                Première institution d’enseignement et de recherche à couvrir toutes les questions liées
                                à la rénovation et à la construction, et à l’ensemble de l’environnement des Bâtiments
                                vertueux énergétiquement et écologiquement, Green Up Academy a suscite de nouvelles
                                façons de penser le futur des infrastructures.
                            </p>
                            {{-- <div class="subscribe">
                                <form action="#">
                                    <input type="email" placeholder="Enter your e-mail here" class="form-control"
                                        name="email">
                                    <button type="submit"><i class="fa fa-paper-plane"></i></button>
                                </form>
                            </div> --}}
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Liens utiles</h4>
                            <ul>
                                <li>
                                    <a href="/login">Mon compte GUA</a>
                                </li>
                                <li>
                                    <a href="/register">Inscription</a>
                                </li>
                                <li>
                                    <a href="/formation/academique">Formation Academique</a>
                                </li>
                                <li>
                                    <a href="/formation/professionnelle">Formation Professionnelle</a>
                                </li>
                                <li>
                                    <a href="/about">A propos</a>
                                </li>
                                <li>
                                    <a href="/contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item contact">
                            <h4 class="widget-title">Contact Info</h4>
                            <div class="address">
                                <ul>
                                    <li>
                                        <strong>Email:</strong> contact@green-up-academy.com
                                    </li>
                                    <li>
                                        <strong>Contact:</strong> +33751360944
                                    </li>
                                </ul>
                            </div>
                            <div class="opening-info">
                                <h5>Opening Hours</h5>
                                <ul>
                                    <li> <span> Mon - Tues : </span>
                                        <div class="float-right"> 6.00 am - 10.00 pm </div>
                                    </li>
                                    <li> <span> Wednes - Thurs :</span>
                                        <div class="float-right"> 8.00 am - 6.00 pm </div>
                                    </li>
                                    <li> <span> Sun : </span>
                                        <div class="float-right closed"> Closed </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 small">
                        <p>&copy; 2024. All Rights Reserved.Make by <a href="https://kevin-gassam.com">KG Agency</a></p>
                    </div>
                    <div class="col-lg-6 text-right link">
                        {{-- <ul>
                            <li>
                                <a href="#">Terms</a>
                            </li>
                            <li>
                                <a href="#">Privacy</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer-->


    @yield('script')
</body>

</html>
