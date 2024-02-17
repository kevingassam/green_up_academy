@extends('front.fixe')
@section('titre', $formation->titre)


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
@endsection

@section('content')
<style>
    .bg-coverxx {
        background: url('{{ Storage::url($formation->couverture) }}') no-repeat;
        background-size: cover;
    }
</style>


    <!-- Start Breadcrumb
                ============================================= -->
    <div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover bg-coverxx">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>{{ $formation->titre }}</h1>
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="fas fa-home"></i> Accueil</a></li>
                        <li class="active">{{ $formation->type }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
                ============================================= -->
    <div class="blog-area single full-blog full-blog default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <div class="blog-content col-lg-12  col-md-12">
                        <div class="item">

                            <div class="blog-item-box">
                                <!-- Start Post Thumb -->
                                <div class="thumb">
                                    <img src="{{ Storage::url($formation->couverture) }}" alt="Thumb">
                                </div>
                                <!-- Start Post Thumb -->

                                <div class="content">

                                    <h3>{{ $formation->titre }}</h3>
                                    <p>
                                        {{ $formation->description }}
                                    </p>
                                    <h4>Condition d'admission</h4>
                                    <p>
                                        {{ $formation->conditions }}
                                    </p>
                                    <hr>
                                    <br>
                                    @if ($formation->document)
                                        <button class="btn btn-sm btn-gradient"
                                            onclick="document.location.href='{{ Storage::url($formation->document) }}'">
                                            Télécharger la fiche de cette formation
                                        </button>
                                    @endif
                                    <button class="btn btn-sm btn-gradient" onclick="document.location.href='/admission'">
                                        Postuler
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Start Post Pagination -->
                        <div class="post-pagi-area">
                            <a href="#">
                                <i class="fas fa-angle-double-left"></i> Previus Post
                                <h5>Hello World</h5>
                            </a>
                            <a href="#">
                                Next Post <i class="fas fa-angle-double-right"></i>
                                <h5>The earth brown</h5>
                            </a>
                        </div>
                        <!-- End Post Pagination -->


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
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
