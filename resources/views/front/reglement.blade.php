@extends('front.fixe')
@section('titre', 'Reglement / Certification')
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
        style="background-image: url(/assets/img/Reglement-interieur-pourquoi-est-crucial--F.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Reglement / Certification </h1>
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="fas fa-home"></i> Accueil</a></li>
                        <li class="active">Reglement / Certification</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Star About Area
                            ============================================= -->
    <div class="default-padding-top">
        <!-- Fixed Shape -->

        <!-- End Fixed Shape -->
        <div class="container">
            <h5 class="btn-gradient" id="reglement">
                <b>Reglements interieur</b>
            </h5>
            <p>
                GuA – Green Up Academy dispense des formations à des étudiants en formation initiale ou en formation
                alternance et à des stagiaires salariés ou demandeurs d’emploi.
                Le présent règlement intérieur a vocation à préciser certaines dispositions s’appliquant à tous les inscrits
                et participants aux différentes formations organisées par GuA – Green Up Academy dans le but de permettre un
                fonctionnement régulier des formations proposées.
            </p>
            <button type="button" class="btn" onclick="document.location.href='/Le-reglement-interieur.pdf'">
                + Télécharger le reglement
            </button>
            <br><br><br>
            <h5 class="btn-gradient" id="certification">
                <b>Nos certifications</b>
            </h5>
            <p>
                L’engagement de notre université envers l’excellence académique se reflète dans notre recherche constante de
                la qualité et de la reconnaissance dans l’enseignement supérieur. Nous sommes fiers de vous informer que
                notre institution détient un certain nombre de certifications et d’accréditations qui attestent de notre
                dévouement envers l’éducation de qualité.
            </p>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <img src="/assets/img/image-removebg-preview-12-3.png" alt="Thumb"><br>
                    <h4>CERTIFICAT N° 654852</h4>
                    <h6><b>GREEN UP ACADEMY</b></h6>
                    <button type="button" class="btn" onclick="document.location.href='/654852-28354-Certificat-Qualiopi-processus-certifie-Cofrac-2-1.pdf'">
                        + Télécharger ce document
                    </button>
                </div>
                <div class="col-sm-6">
                    <img src="/assets/img/Academie_de_Paris.svg_-1-150x150.png" alt="Thumb"><br>
                    <h4>Rectorat de l’Académie de Paris
                        Déclaration d’intention
                        </h4>
                        <button type="button" class="btn" onclick="document.location.href='/Declaration-dintention-au-pres-du-rectorat-de-Paris-1.pdf'">
                            + Télécharger ce document
                        </button>
                </div>
            </div>
        </div>
        <br><br><br>
    </div>
    <!-- End About Area -->


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
