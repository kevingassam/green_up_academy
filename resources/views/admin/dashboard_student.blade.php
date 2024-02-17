@extends('admin.fixe')
@section('titre', 'Etudiant | ' . Auth::user()->prenom)



@section('body')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Hour chart  -->
        <div class="card bg-transparent shadow-none my-4 border-0">
            <div class="card-body row p-0 pb-3">
                <div class="col-12 col-md-8 card-separator">
                    <h3>Welcome back, {{ Auth::user()->prenom }}👋🏻</h3>
                    <div class="col-12 col-lg-7">
                        <p>VOTRE CODE : <b>{{ Auth::user()->code }}</b> </p>
                    </div>
                </div>
                <div class="col-12 col-md-4 ps-md-3 ps-lg-4 pt-3 pt-md-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div>
                                <h5 class="mb-2">Téléverser un fichier</h5>
                                <button class="btn btn-primary">
                                    Selectionner un fichier
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hour chart End  -->
        <hr>
        <div class="card p-3">
            <h4>Vos dossiers</h4>
            <hr>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>Date</th>
                        <th>Statut</th>
                        <th>Intitulé</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($dossiers as $item)
                        <tr>
                            <td> {{ $item->created_at }} </td>
                            <td> <b>{{ $item->decission }} </b> </td>
                            <td> {{ $item->titre }}  </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">
                                <div class="text-center ">
                                    <i>Aucun dossier en cour......</i>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>


    </div>
    <!--/ Content -->
@endsection



@section('head')
    <link rel="stylesheet" href="/admin/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="/admin/assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="/admin/assets/vendor/fonts/flag-icons.css" />
    <link rel="stylesheet" href="/admin/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/admin/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/admin/assets/css/demo.css" />
    <link rel="stylesheet" href="/admin/assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/admin/assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="/admin/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="/admin/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="/admin/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
    <link rel="stylesheet" href="/admin/assets/vendor/libs/apex-charts/apex-charts.css" />
    <script src="/admin/assets/vendor/js/helpers.js"></script>
    <script src="/admin/assets/vendor/js/template-customizer.js"></script>
    <script src="/admin/assets/js/config.js"></script>
@endsection

@section('script')
    <script src="/admin/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="/admin/assets/vendor/libs/popper/popper.js"></script>
    <script src="/admin/assets/vendor/js/bootstrap.js"></script>
    <script src="/admin/assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/admin/assets/vendor/libs/hammer/hammer.js"></script>
    <script src="/admin/assets/vendor/libs/i18n/i18n.js"></script>
    <script src="/admin/assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="/admin/assets/vendor/js/menu.js"></script>
    <script src="/admin/assets/vendor/libs/moment/moment.js"></script>
    <script src="/admin/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="/admin/assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="/admin/assets/js/main.js"></script>
    <script src="/admin/assets/js/app-academy-dashboard.js"></script>
@endsection
