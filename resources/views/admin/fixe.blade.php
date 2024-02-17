<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default"
    data-assets-path="/admin/assets/" data-template="horizontal-menu-template">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
        rel="stylesheet" />
    <title>MY-GUA | @yield('titre')</title>

    @yield('head')
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
        <div class="layout-container">
            <!-- Navbar -->

            <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
                <div class="container-xxl">
                    <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
                        <a href="/dashboard" class="app-brand-link gap-2">
                            <span class="app-brand-text demo menu-text fw-bold">
                                MY-GUA
                            </span>
                        </a>

                        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
                            <i class="ti ti-x ti-sm align-middle"></i>
                        </a>
                    </div>

                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="ti ti-menu-2 ti-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">

                            <!-- Style Switcher -->
                            <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <i class="ti ti-md"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                                            <span class="align-middle"><i class="ti ti-sun me-2"></i>Light</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                                            <span class="align-middle"><i class="ti ti-moon me-2"></i>Dark</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                                            <span class="align-middle"><i
                                                    class="ti ti-device-desktop me-2"></i>System</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- / Style Switcher-->


                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="/admin/assets/img/avatars/1.png" alt class="h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="pages-account-settings-account.html">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="/admin/assets/img/avatars/1.png" alt
                                                            class="h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-medium d-block">
                                                        {{ Auth::user()->name }} {{ Auth::user()->prenom }}
                                                    </span>
                                                    @role('admin')
                                                        <small class="text-muted">Administrateur</small>
                                                    @else
                                                        <small class="text-muted">étudiant</small>
                                                    @endrole

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    @role('admin')
                                        <li>
                                            <a class="dropdown-item" href="pages-profile-user.html">
                                                <i class="ti ti-user-check me-2 ti-sm"></i>
                                                <span class="align-middle">My Profile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages-account-settings-account.html">
                                                <i class="ti ti-settings me-2 ti-sm"></i>
                                                <span class="align-middle">Settings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="/">
                                                <i class="ti ti-help me-2 ti-sm"></i>
                                                <span class="align-middle">FAQ</span>
                                            </a>
                                        </li>
                                    @endrole
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}">
                                            <i class="ti ti-logout me-2 ti-sm"></i>
                                            <span class="align-middle">Déconnexion</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>

                    <!-- Search Small Screens -->
                    <div class="navbar-search-wrapper search-input-wrapper container-xxl d-none">
                        <input type="text" class="form-control search-input border-0" placeholder="Search..."
                            aria-label="Search..." />
                        <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
                    </div>
                </div>
            </nav>

            <!-- / Navbar -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Menu -->
                    <aside id="layout-menu"
                        class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
                        <div class="container-xxl d-flex h-100">
                            <ul class="menu-inner">
                                <!-- Dashboards -->
                                <li class="menu-item">
                                    <a href="/dashboard" class="menu-link ">
                                        <i class="menu-icon tf-icons ti ti-home"></i>
                                        @role('admin')
                                        <div data-i18n="Dashboard">Dashboard</div>
                                        @else
                                        <div data-i18n="Mon profil">Mon profil</div>
                                        @endrole
                                    </a>
                                </li>

                                <!-- Layouts -->
                                @role('admin')
                                    <li class="menu-item">
                                        <a href="{{ route('formation_admin') }}" class="menu-link ">
                                            <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
                                            <div data-i18n="Formations">Formations</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ route('admission_admin') }}" class="menu-link ">
                                            <i class="menu-icon tf-icons ti ti-file"></i>
                                            <div data-i18n="Admissions">Admissions</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ route('televerser_admin') }}" class="menu-link ">
                                            <i class="menu-icon tf-icons ti ti-file"></i>
                                            <div data-i18n="Téléverser">Téléverser</div>
                                        </a>
                                    </li>
                                @endrole
                                <li class="menu-item">
                                    <a href="{{ route('telechargement') }}" class="menu-link ">
                                        <i class="menu-icon tf-icons ti ti-download"></i>
                                        <div data-i18n="Téléchargements">Téléchargements</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <!-- / Menu -->


                    @yield('body')


                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl small">
                            <div
                                class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                                <div>
                                    ❤️ by <a href="kevin-gassam.com" target="_blank" class="fw-medium">KG Agency</a>
                                </div>
                                <div class="d-none d-lg-inline-block">

                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!--/ Content wrapper -->
            </div>

            <!--/ Layout container -->
        </div>
    </div>



    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    <div class="drag-target"></div>

    @yield('script')


</body>

</html>
