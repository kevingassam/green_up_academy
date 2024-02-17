@extends('front.fixe')
@section('titre', 'Admission a GUA ')
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
@endsection


@section('content')
    <!-- Start Breadcrumb
                        ============================================= -->
    <div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover"
        style="background-image: url(/assets/img/carte-etudiant.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Portail d'admission</h1>
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="fas fa-home"></i> Acueill</a></li>
                        <li class="active">
                            Admission
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Star Courses Area
                    ============================================= -->
    <div class="courses-area default-padding">
        <div class="container">
            <h3 class="info">
                <b>PROCÉDURE D'ADMISSION</b>
            </h3>
            <hr>
            <br>
            <h5 class="btn-gradient">
                <b>
                    ÉTAPE 1 : FORMULAIRE D'ADMISSION /
                </b>
                <span class="">STEP 1 : APPLICATION FORM SUBMISSION</span>
            </h5>
            <div class="row">
                <div class="col">
                    Chaque candidature est revue individuellement en fonction des attentes liées au programme envisagé.b
                    <br>
                    <button class="btn" onclick="document.location.href='/admission.pdf'">
                        <i class="fa fa-download"></i>
                         Télécharger la fiche d'admission
                    </button>
                </div>
                <div class="col">
                    Every application is reviewed individually based on the requirements of the requested program.
                    <br>
                    <button class="btn" onclick="document.location.href='/admission.pdf'">
                        <i class="fa fa-download"></i>
                         Download the admission form
                    </button>
                </div>
            </div>
            <br><br>

            <h5 class="btn-gradient">
                <b>
                    ÉTAPE 2 : ÉTUDE DE LA CANDIDATURE /
                </b>
                <span class="">STEP 2 : EVALUATION PROCESS</span>
            </h5>
            <div class="row">
                <div class="col">
                    <ul>
                        <li>- Examen du dossier</li>
                        <li>- Organisation d’un entretien téléphonique ou d’un entretien Skype</li>
                        <li>- Envoi de la réponse</li>
                    </ul>
                </div>
                <div class="col">
                    <ul>
                        <li>- Application review</li>
                        <li>- Organisation of a telephone or Skype interview</li>
                        <li>- Letter of acceptance or rejection</li>
                    </ul>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <b>Une fois admis à la Green UP Academy, un versement de 3 200 € doit être effectué :</b>
                </div>
                <div class="col">
                    <b>Once admitted a deposit of 3 200€ is due:</b>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <ul>
                        <li>- 1 200 € frais de dossier</li>
                        <li>- 2 000€ arrhes (déductibles des frais de scolarité)</li>
                    </ul>
                </div>
                <div class="col">
                    <ul>
                        <li>- 1 200€ registration</li>
                        <li>- 2000€ deposit (deductible from tuition fees)</li>
                    </ul>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    Les arrhes sur la scolarité et les frais de dossier doivent obligatoirement être réglés avant l’étape 3.
                    Aucune confirmation d’inscription ne sera émise sans paiement des arrhes et des frais de dossier.

                </div>
                <div class="col">
                    Tuitions fees and registration fees deposit must be made prior to step 3. No enrolment confirmation is
                    issued in
                    the absence of deposit payment.

                </div>
            </div>
            <br>
            <br>

            <h5 class="btn-gradient">
                <b>
                    ÉTAPE 3 : CONFIRMATION D’INSCRIPTION /
                </b>
                <span class="">STEP 3 : ENROLMENT CONFIRMATIONS</span>
            </h5>
            <div class="row">
                <div class="col">
                    Les documents suivants sont remis à l’issue de cette étape :
                </div>
                <div class="col">
                    At the end of this step you will receive the following documents:
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <ul>
                        <li>- Attestation d’inscription</li>
                        <li>- Facture correspondant aux frais de dossier, aux frais de scolarité et aux frais techniques
                            (licences
                            informatiques, crédits photocopies...)</li>
                    </ul>
                </div>
                <div class="col">
                    <ul>
                        <li>- Registration certificate</li>
                        <li>- Invoices tution fees, registration fees and technical fees (soPware licenses, photocopy
                            credits...)</li>
                    </ul>
                </div>
            </div>

        </div>
        <br><br>

        <div class="text-center">
            <button class="btn btn-md btn-gradient" onclick="document.location.href='/admission-2'" >
                Débuter ma procédure d'admission
            </button>
        </div>
    </div>
    <!-- End Courses Area -->

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
