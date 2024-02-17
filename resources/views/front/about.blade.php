@extends('front.fixe')
@section('titre', 'A propos')
@section('head')
    <!-- ========== Start Stylesheet ========== -->
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
    <!-- ========== End Stylesheet ========== -->
@endsection

@section('content')

    <!-- Start Breadcrumb
                ============================================= -->
    <div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover"
        style="background-image: url(/assets/img/Administration_1200x400px.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>A propos </h1>
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="fas fa-home"></i> Accueil</a></li>
                        <li class="active">A propos</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Star About Area
            ============================================= -->
    <div class="about-area default-padding-top">
        <!-- Fixed Shape -->
        <div class="fixed-shape-bottom">
            <img src="/assets/img/shape/12.png" alt="Shape">
        </div>
        <!-- End Fixed Shape -->
        <div class="container">
            <div class="about-items">
                <div class="row align-center">
                    <div class="col-lg-8 info">
                        <h2>
                            La rencontre d'expériences
                        </h2>
                        <p>
                            Le conseil d’administration d’origine a jeté les bases de ce qui allait devenir l’actuelle Green
                            Up Academy, lorsque le groupe s’est réuni pour tenir la réunion inaugurale du conseil
                            d’administration de l’Academy et en a rédigé les statuts constitutifs. Ce document d’orientation
                            décrivait les éléments qui, selon les fondateurs, construiraient un héritage durable : un
                            engagement à offrir un programme académique rigoureux et une ambition de fournir « des
                            opportunités pour tous les départements de l’enseignement supérieur que ce soit pour les cursus
                            académiques ou professionnels ».
                        </p>
                        <P>
                            Le fondateurs de Green Up que sont Charles, Frank, Rémy, et Nadir, ont en commun l’expérience
                            d’enseignements inachevés et frustrants dans plusieurs disciplines. Programmes théoriques pas
                            assez approfondis, stages d’application trop éloignés de l’apprentissage souhaité, cours peu
                            remis aux gout du jour.
                        </P>
                        <P>
                            Plus encore, ils leurs semblait que les défis environnementaux et écologiques ainsi que le désir
                            louable des étudiants de donner un sens à leur vie professionnelle n’était que très
                            imparfaitement pris en compte. Et ici nous pensons que ces défis sont les seuls qui vaillent
                            dans le futur.
                        </P>
                        <P>
                            Les fondateurs ont donc mis en commun leur expérience de l’enseignement ainsi que leurs
                            pratiques professionnelles pour former la Green Up Academy, dont le but est de former des jeunes
                            gens et des professionnels, aux véritables questions sous tendues par la crise climatique, aux
                            défis écologiques au coeur desquelles se trouve l’habitat, et ce sans parti pris idéologiques,
                            juste avec du savoir académique et pratique.
                        </P>
                    </div>

                    <div class="col-lg-4 thumb">
                        <img src="/assets/img/illustration/5.png" alt="Thumb"><br>
                        <B>Dr. Charles Giscard FONGANG TAGNE</B><br>
                        <i>Premier président de la Green Up Academy</i>
                    </div>

                </div>
                <hr>
                <div class="row align-center">
                    <div class="col-lg-4 thumb">
                        <img src="/assets/img/illustration/7.png" alt="Thumb"><br>
                        <B>M. Nadir BELHOCINE</B><br>
                        <i>Directeur Général de la Green UP Academy</i>
                    </div>
                    <div class="col-lg-8 info">
                        <h2>
                            La rencontre d'expériences
                        </h2>
                        <p>
                            Industrie, NTIC,Énergies renouvelables, des domaines différents
                            qui ont permis d’accumuler une expérience dans le monde
                            professionnel qui me permettent aujourd’hui de la partager
                            dans le monde de la formation et en faire un véritable
                            vecteur de succès.
                            Des expériences professionnelles qui m’ont amené à exercer
                            dans différentes pays, dans des langues différentes et des
                            cultures différentes.
                            Cette richesse va contribuer à un saut qualitatif pour ce
                            challenge qu’est la Green Up Academy.
                        </p>
                    </div>



                </div>
            </div>
        </div>
    </div>
    <!-- End About Area -->

    <!-- Star Why Chose Us
            ============================================= -->
    <div class="why-choseus-area bg-gray default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5>Mais</h5>
                        <h2>Un idée en tête !</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Fixed BG -->
        <div class="container-full">
            <p>La Green Up Academy espère vous compter bientôt parmi ses étudiants ou partenaires avec cette belle idée en <br>
                tête que nous pouvons bâtir ensemble le monde auquel la génération future aspire….</p>
        </div>
    </div>
    <!-- End Why Chose Us -->

    @include('front.prof')

@endsection


@section('script')
    <!-- jQuery Frameworks
                    ============================================= -->
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
