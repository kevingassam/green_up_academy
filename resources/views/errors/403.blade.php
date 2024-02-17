@extends('front.fixe')
@section('titre', '403')


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
    <link href="style.css" rel="stylesheet">
    <link href="/assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->
@endsection




@section('content')
    <!-- Start Breadcrumb
                ============================================= -->
    <div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover"
        style="background-image: url(/assets/img/image.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Erreur</h1>
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="fas fa-home"></i> Accueil</a></li>
                        <li class="active">403</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start 403
            ============================================= -->
    <div class="error-page-area overflow-hidden default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 thumb">
                    <img src="/assets/img/illustration/1.svg" alt="Thumb">
                </div>
                <div class="col-lg-6">
                    <div class="error-box">
                        <h1>403</h1>
                        <h2>Désolé, la page n'a pas été trouvée !</h2>
                        <p>
                            Désolé, la page que vous recherchez semble introuvable. Nous vous invitons à vérifier l'URL que
                            vous avez saisie ou à retourner à la page d'accueil. Si vous pensez qu'il s'agit d'une erreur,
                            n'hésitez pas à nous contacter pour obtenir de l'aide. Merci!
                        </p>
                        <a class="btn circle btn-md btn-gradient" href="/">
                            Retourner a l'accueil
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End 403 -->
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
