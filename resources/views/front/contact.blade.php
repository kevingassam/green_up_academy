@extends('front.fixe')
@section('titre', 'Contact')

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
    <div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover" style="background-image: url(/assets/img/quest-ce-quun-call-center-solutions-commerciales.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Contact</h1>
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="fas fa-home"></i> Acceuil</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact Area
    ============================================= -->
    <div class="contact-area default-padding-top">
        <div class="container">
            <div class="contact-items">
                <div class="row align-center">
                    <div class="col-lg-4 left-item">
                        <div class="info-items">
                            <!-- Single Item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="fas fa-map-marked-alt"></i>
                                </div>
                                <div class="info">
                                    <h5>Localisation</h5>
                                    <p>
                                        15 rue des halles 75001 Paris
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="info">
                                    <h5>Téléphone</h5>
                                    <p>
                                        +33 751360944
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="fas fa-envelope-open"></i>
                                </div>
                                <div class="info">
                                    <h5>Send a Mail</h5>
                                    <p>
                                        charles@green-up-academy.fr
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                    <div class="col-lg-8 right-item">
                        <h5>Besoin d'aide ?</h5>
                        <h2>Contactez-nous !</h2>
                        @livewire('contact')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Star Google Maps
    ============================================= -->
    <div class="maps-area">
        <div class="google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.8965731406633!2d2.3461149!3d48.860182599999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f417951ff%3A0x26e713d69f45c1ce!2s15%20Rue%20des%20Halles%2C%2075001%20Paris%2C%20France!5e0!3m2!1sfr!2stn!4v1708113415768!5m2!1sfr!2stn" ></iframe>
        </div>
    </div>
    <!-- End Google Maps -->

@endsection


   @section('script')
 <!-- jQuery Frameworks ============================================= -->
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
