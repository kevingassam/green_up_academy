@extends('admin.fixe')
@section('titre', 'Admissions')

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
    <script src="/admin/assets/vendor/js/helpers.js"></script>
    <script src="/admin/assets/vendor/js/template-customizer.js"></script>
    <script src="/admin/assets/js/config.js"></script>
@endsection

@section('body')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Gestionnaire /</span> Admissions</h4>

        <!-- Bootstrap Table with Header - Dark -->
        <div class="card">

                @livewire('ListeAdmissions')

        </div>
        <!--/ Bootstrap Table with Header Dark -->


    </div>
    <!--/ Content -->








    <!-- Payment Methods modal -->
    <div class="modal fade" id="paymentMethods" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-simple modal-enable-otp modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Nouvelle formation</h5>
                    <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Close"></button>
                  </div>
                <div class="modal-body">
                    @livewire('FormCreateFormation')

                </div>
            </div>
        </div>
    </div>
    <!-- / Payment Methods modal -->

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
    <script src="/admin/assets/js/main.js"></script>
    <script src="/admin/assets/js/form-basic-inputs.js"></script>
@endsection
