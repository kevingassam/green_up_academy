@extends('front.fixe')
@section('titre', 'Accueil')


@section('head')
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/assets/css/themify-icons.css" rel="stylesheet" />
    <link href="/assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="/assets/css/elegant-icons.css" rel="stylesheet" />
    <link href="/assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="/assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="/assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="/assets/css/animate.css" rel="stylesheet" />
    <link href="/assets/css/bootsnav.css" rel="stylesheet" />
    <link href="/style.css" rel="stylesheet">
    <link href="/assets/css/responsive.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">
@endsection


@section('content')
    <!-- Start Banner
                                    ============================================= -->
    <div class="banner-area bg-gray text-center multi-heading">
        <div id="bootcarousel" class="carousel text-light slide carousel-fade animate_text" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">
                <div class="carousel-item active">
                    <div class="slider-thumb bg-cover"
                        style="background-image: url(/assets/img/Etudiant-international-upec.jpg);"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <div class="content">
                                            <h3 data-animation="animated slideInDown">Learn from online</h3>
                                            <h2 data-animation="animated fadeInRight">Transformez vos rêves en réalité</h2>
                                            <p data-animation="animated slideInLeft">
                                            </p>
                                            <a data-animation="animated fadeInUp" class="btn btn-md btn-gradient"
                                                href="/admission">ADMISSION</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-thumb bg-cover"
                        style="background-image: url(/assets/img/40-idees-devenements-pour-les-etudiants-sport-culture-environnement-et-bien-plus-encore-.jpg);">
                    </div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <div class="content">
                                            <h3 data-animation="animated slideInDown">Education Goal</h3>
                                            <h2 data-animation="animated fadeInRight">Rejoignez la communauté qui façonne
                                                l’avenir</h2>
                                            <p data-animation="animated slideInLeft">

                                            </p>
                                            <a data-animation="animated fadeInUp" class="btn btn-md btn-gradient"
                                                href="/admission">ADMISSION</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control light" href="#bootcarousel" data-slide="prev">
                <i class="ti-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control light" href="#bootcarousel" data-slide="next">
                <i class="ti-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
    <!-- End Banner -->

    <!-- Star Fixed Features Area
                                    ============================================= -->
    <div class="default-features-area default-design relative bottom-less text-center">
        <div class="container">
            <div class="item-box">
                <div class="row">
                    <div class="col-lg-3 col-md-6 single-item">
                        <div class="item">
                            <a href="#">
                                <i class="fas fa-book-open"></i>
                                <h4>Faculté experte</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 single-item">
                        <div class="item">
                            <a href="#">
                                <i class="fas fa-swatchbook"></i>
                                <h4>Apprentissage</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 single-item">
                        <div class="item">
                            <a href="#">
                                <i class="fas fa-graduation-cap"></i>
                                <h4>Bourse</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 single-item">
                        <div class="item">
                            <a href="#">
                                <i class="fas fa-medal"></i>
                                <h4>Certifications</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fixed Features Area -->

    <!-- Star About Area
                                    ============================================= -->
    <div class="about-area inc-fixed-bg default-padding-bottom">
        <!-- Fixed BG -->
        <div class="fixed-bg" style="background-image: url(assets/img/illustration/6.png);"></div>
        <!-- End Fixed BG -->
        <div class="container">
            <div class="about-items">
                <div class="row align-center">

                    <div class="col-lg-6 info">
                        <h2>
                            Quelques mots sur notre Academy
                        </h2>
                        <p>
                            Première institution d’enseignement et de recherche à couvrir toutes les questions liées à la
                            rénovation et à la construction, et à l’ensemble de l’environnement des Bâtiments vertueux
                            énergétiquement et écologiquement, Green Up Academy a suscite de nouvelles façons de penser le
                            futur des infrastructures. Aujourd’hui, GUA est une destination intellectuelle qui attire des
                            universitaires inspirés et des professionnels soucieux de mettre l’écologie au cœur de leur
                            activité pour relever les nouveaux défis qui changent le monde.
                        </p>
                        <ul>
                            <li>
                                <div class="fun-fact">
                                    <span class="timer" data-to="10" data-speed="5000"></span>
                                    <span class="medium">Professeurs diplômés</span>
                                </div>
                            </li>
                            <li>
                                <div class="fun-fact">
                                    <span class="timer" data-to="547" data-speed="5000"></span>
                                    <span class="medium">Etudiants</span>
                                </div>
                            </li>
                        </ul>
                        <a class="btn circle btn-md btn-gradient" href="/about">
                            Savoir plus
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area -->

    <!-- Star Cateogry
                                    ============================================= -->
    <div class="categories-area reverse bg-gray carousel-shadow default-padding">
        <div class="container">
            <div class="categories-box">
                <div class="row">

                    <div class="col-lg-5 heading">
                        <h2>Sélectionnez votre sujet préféré parmi les meilleures catégories</h2>
                        <p>
                            Nous offrons des formations pour plusieurs type de profil. <br>
                            passant des formations professionnelles a des formations academique
                        </p>
                    </div>

                    <div class="col-lg-7">
                        <div class="category-items categories-carousel owl-carousel owl-theme text-light text-center">
                            @php
                                $types = ['malachite', 'torchred', 'tulip', 'mariner'];
                            @endphp
                            @foreach ($formations as $item2)
                                @php
                                    $randomIndex = array_rand($types);
                                    $randomType = $types[$randomIndex];
                                @endphp

                                <div class="item type {{ $randomType }}">
                                    <a href="#">
                                        <i class="flaticon-innovation"></i>
                                        <div class="info">
                                            <h5>
                                                {{ $item2->titre }}
                                            </h5>
                                            <span>
                                                {{ $item2->statut }}
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cateogry -->

    <!-- Star Why Chose Us
                                    ============================================= -->
    <div class="why-choseus-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5>POURQUOI NOUS CHOISIR</h5>
                        <h2>Juste tout ce dont vous avez besoin pour <br> votre
                           éducation</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Fixed BG -->
        <div class="container">
            <div class="info">
                <div class="row">

                    <div class="item-box col-lg-12">
                        <div class="row">
                            <div class="single-item col-lg-4 col-md-4">
                                <div class="item">
                                    <span>01</span>
                                    <i class="flaticon-library"></i>
                                    <h5>Améliorer l'Expérience des Étudiants</h5>
                                    <p>
                                        Intégrer votre université permettra d'améliorer l'expérience globale des étudiants en leur offrant un accès  des services.
                                    </p>
                                </div>
                            </div>
                            <div class="single-item col-lg-4 col-md-4">
                                <div class="item">
                                    <span>02</span>
                                    <i class="flaticon-library"></i>
                                    <h5>Promouvoir l'Innovation et la Collaboration</h5>
                                    <p>
                                        L'intégration de l'université favorisera l'innovation et la collaboration entre les membres de la communauté universitaire.
                                    </p>
                                </div>
                            </div>
                            <div class="single-item col-lg-4 col-md-4">
                                <div class="item">
                                    <span>03</span>
                                    <i class="flaticon-library"></i>
                                    <h5>Optimiser l'Administration et la Gestion</h5>
                                    <p>
                                        En intégrant votre université, vous pourrez rationaliser les processus administratifs et améliorer l'efficacité opérationnelle.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Why Chose Us -->

    <!-- Star Courses Area
                                    ============================================= -->
    <div class="courses-area trend-layout bg-gray default-padding bottom-less">
        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-lg-5">
                        <h5>Formations populaire</h5>
                        <h2>
                            Liste de nos formations disponible
                        </h2>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <a class="btn btn-md btn-dark border" href="/admission">
                            Admission
                            <i class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="courses-items">
                <div class="row">
                    @foreach ($formations as $item)
                        <!-- Single item -->
                        <div class="single-item col-lg-4 col-md-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="/formation/{{ $item->id }}/{{ $item->titre }}">
                                        <img src="{{ Storage::url($item->couverture) }}" alt="Thumb">
                                    </a>
                                </div>
                                <div class="info">
                                    <div class="top-info">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <div class="price">

                                        </div>
                                    </div>
                                    <h4>
                                        <a
                                            href="/formation/{{ $item->id }}/{{ $item->titre }}">{{ $item->titre }}</a>
                                    </h4>
                                    <p>
                                        Seeing rather her you not esteem men settle genius excuse. Deal say over you age
                                        from
                                        Comparison new.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single item -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End Courses Area -->



    <!-- Star Register Area
                                    ============================================= -->
    <div class="register-area bg-fixed default-padding-botom">
        <!-- Fixed BG -->
        @if ($formations->isNotEmpty())
            @php
                $formationRandom = $formations->random();
            @endphp
            <div class="fixed-bg" style="background-image: url({{ Storage::url($formationRandom->couverture) }});"></div>
            <!-- End Fixed BG -->
            <div class="container">
                <div class="reg-items">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-2 countdown">
                            <div class="countdown-inner">
                                <h2>{{ $formationRandom->titre }}</h2>
                                <p>
                                    {{ $formationRandom->description }}
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endif
    </div>
    <!-- End Register Area -->

    <!-- Star Testimonials
                                    ============================================= -->
    <div class="testimonials-area carousel-shadow default-padding-top">
        <!-- Fixed Shape -->
        <div class="fixed-shape">
            <img src="assets/img/shape/5.png" alt="Shape">
        </div>
        <!-- End Fixed Shape -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5>Témoignages</h5>
                        <h2>Ce que les gens disent de <br>
                            Notre qualité.</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="testimonial-items text-center">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonials-carousel owl-carousel owl-theme">
                            <!-- Single item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="flaticon-quotation"></i>
                                </div>
                                <div class="content">
                                    <p>
                                        J'ai trouvé à Green Up Academy un environnement académique exceptionnel. Grâce à
                                        leurs programmes innovants, j'ai pu développer mes compétences et atteindre mes
                                        objectifs
                                    </p>
                                </div>
                                <div class="provider">
                                    <div class="thumb">
                                        <img src="https://img1.cgtrader.com/items/4259562/fcc1f1114a/large/3d-avatar-profession-as-graduate-student-3d-model-fcc1f1114a.jpg" alt="Thumb">
                                    </div>
                                    <div class="info">
                                        <h5>
                                            Sophie Dupont</h5>
                                        <span>Etudiante</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                            <!-- Single item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="flaticon-quotation"></i>
                                </div>
                                <div class="content">
                                    <p>
                                        L'expérience à Green Up Academy a été transformative. Les professeurs dévoués et les
                                        ressources de pointe m'ont aidé à exceller.
                                    </p>
                                </div>
                                <div class="provider">
                                    <div class="thumb">
                                        <img src="https://img1.cgtrader.com/items/4259562/fcc1f1114a/large/3d-avatar-profession-as-graduate-student-3d-model-fcc1f1114a.jpg" alt="Thumb">
                                    </div>
                                    <div class="info">
                                        <h5>Pierre Martin</h5>
                                        <span>Etudiant</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                            <!-- Single item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="flaticon-quotation"></i>
                                </div>
                                <div class="content">
                                    <p>
                                        Green Up Academy incarne l'excellence éducative. Mon passage ici a été inoubliable,
                                        avec une communauté étudiante et des mentors incroyables.
                                    </p>
                                </div>
                                <div class="provider">
                                    <div class="thumb">
                                        <img src="https://img1.cgtrader.com/items/4259562/fcc1f1114a/large/3d-avatar-profession-as-graduate-student-3d-model-fcc1f1114a.jpg" alt="Thumb">
                                    </div>
                                    <div class="info">
                                        <h5>Émilie Rousseau</h5>
                                        <span>Etudiante</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                            <!-- Single item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="flaticon-quotation"></i>
                                </div>
                                <div class="content">
                                    <p>
                                        Choisir Green Up Academy a été la meilleure décision de ma vie. Le soutien constant
                                        m'a permis d'explorer mon potentiel.
                                    </p>
                                </div>
                                <div class="provider">
                                    <div class="thumb">
                                        <img src="https://img1.cgtrader.com/items/4259562/fcc1f1114a/large/3d-avatar-profession-as-graduate-student-3d-model-fcc1f1114a.jpg" alt="Thumb">
                                    </div>
                                    <div class="info">
                                        <h5>Nicolas Lefebvre</h5>
                                        <span>Etudiant</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials Area -->

    @include('front.prof');

    <!-- Start Fun Factor Area
                                    ============================================= -->
    <div class="fun-factor-area overflow-hidden bg-gradient text-light default-padding">
        <div class="container">
            <div class="fun-fact-items text-center">
                <!-- Fixed BG -->
                <div class="fixed-bg contain" style="background-image: url(assets/img/map.svg);"></div>
                <!-- Fixed BG -->
                <div class="row">
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="35" data-speed="5000">35</div>
                                <div class="operator">M</div>
                            </div>
                            <span class="medium">Learners & counting</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="128" data-speed="5000">128</div>
                                <div class="operator">K</div>
                            </div>
                            <span class="medium">Total courses</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="12" data-speed="5000">12</div>
                                <div class="operator">+</div>
                            </div>
                            <span class="medium">Languages</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="90" data-speed="5000">90</div>
                                <div class="operator">%</div>
                            </div>
                            <span class="medium">Successful students</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Factor Area -->


@endsection


<!-- jQuery Frameworks
    ============================================= -->
@section('script')
    <script src="/assets/js/jquery-1.12.4.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery.appear.js"></script>
    <script src="/assets/js/jquery.easing.min.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/modernizr.custom.13711.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/progress-bar.min.js"></script>
    <script src="/assets/js/isotope.pkgd.min.js"></script>
    <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/js/count-to.js"></script>
    <script src="/assets/js/YTPlayer.min.js"></script>
    <script src="/assets/js/jquery.nice-select.min.js"></script>
    <script src="/assets/js/loopcounter.js"></script>
    <script src="/assets/js/bootsnav.js"></script>
    <script src="/assets/js/main.js"></script>
@endsection
