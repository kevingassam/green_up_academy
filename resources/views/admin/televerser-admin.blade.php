@extends('admin.fixe')
@section('titre', 'Téléverssement')

@section('head')
        <!-- Icons -->
        <link rel="stylesheet" href="/admin/assets/vendor/fonts/fontawesome.css" />
        <link rel="stylesheet" href="/admin/assets/vendor/fonts/tabler-icons.css" />
        <link rel="stylesheet" href="/admin/assets/vendor/fonts/flag-icons.css" />
        <link rel="stylesheet" href="/admin/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
        <link rel="stylesheet" href="/admin/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
        <link rel="stylesheet" href="/admin/assets/css/demo.css" />
        <link rel="stylesheet" href="/admin/assets/vendor/libs/node-waves/node-waves.css" />
        <link rel="stylesheet" href="/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
        <link rel="stylesheet" href="/admin/assets/vendor/libs/typeahead-js/typeahead.css" />
        <link rel="stylesheet" href="/admin/assets/vendor/libs/dropzone/dropzone.css" />
        <script src="/admin/assets/vendor/js/helpers.js"></script>
        <script src="/admin/assets/vendor/js/template-customizer.js"></script>
        <script src="/admin/assets/js/config.js"></script>
@endsection

@section('body')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Gestionnaire /</span> Téléverser</h4>

        <!-- Bootstrap Table with Header - Dark -->
        <div >

                @livewire('TeleverserAdmin')

        </div>
        <!--/ Bootstrap Table with Header Dark -->


    </div>
    <!--/ Content -->










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

<!-- endbuild -->

<!-- Vendors JS -->
<script src="/admin/assets/vendor/libs/dropzone/dropzone.js"></script>

<!-- Main JS -->
<script src="/admin/assets/js/main.js"></script>

<!-- Page JS -->
<script src="/admin/assets/js/forms-file-upload.js"></script>
@endsection
