<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="icon" type="image/jpg" href="{{ asset('ayba/favicon.png') }}" />

    <!-- Core Css -->
    <link rel="stylesheet" href="../assets/css/styles.css" />
    <!-- Summernote CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

    <title>Aybar Corp</title>
    <link rel="stylesheet" href="../assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

    <link href="{{ asset('css/template.css') }}" rel="stylesheet">
    <script src="{{ asset('js/user.js') }}"></script>
    <script src="{{ asset('js/category.js') }}"></script>
    <script src="{{ asset('js/section.js') }}"></script>
    <script src="{{ asset('js/topic_5.js') }}"></script>
    <script src="{{ asset('js/project.js') }}"></script>
    <script src="{{ asset('js/image.js') }}"></script>
    <script src="{{ asset('js/role.js') }}"></script>
    <script src="{{ asset('js/customer_4.js') }}"></script>
    <script src="{{ asset('js/function.js') }}"></script>
    <script src="{{ asset('js/axios.min.js') }}"></script>
    <script src="{{ asset('js/Book_3.js') }}"></script>
</head>

<body>

    <!-- Preloader -->
    <div class="preloader"><img src="{{ asset('ayba/1.png') }}" alt="loader" class="lds-ripple img-fluid" /></div>
    <div id="main-wrapper">
        <!-- Sidebar Start -->

        <aside class="side-mini-panel with-vertical">
            <div><!-- ---------------------------------- -->
                <!-- Start Vertical Layout Sidebar -->
                <!-- ---------------------------------- -->
                <div class="iconbar">
                    <div>
                        <div class="mini-nav">
                            <div class="brand-logo d-flex align-items-center justify-content-center">
                                <a class="nav-link sidebartoggler" id="headerCollapse" href="javascript:void(0)">
                                    <iconify-icon icon="solar:hamburger-menu-line-duotone"
                                        class="fs-7"></iconify-icon>
                                </a>
                            </div>
                            <ul class="mini-nav-ul" data-simplebar>

                                <!-- --------------------------------------------------------------------------------------------------------- -->
                                <!-- Dashboards -->
                                <!-- --------------------------------------------------------------------------------------------------------- -->
                                <li class="mini-nav-item" id="mini-1">
                                    <a href="javascript:void(0)" data-bs-toggle="tooltip"
                                        data-bs-custom-class="custom-tooltip" data-bs-placement="right"
                                        data-bs-title="Dashboards">
                                        <iconify-icon icon="solar:layers-line-duotone" class="fs-7"></iconify-icon>
                                    </a>
                                </li>

                                <!-- --------------------------------------------------------------------------------------------------------- -->


                                <li>
                                    <span class="sidebar-divider lg"></span>
                                </li>

                            </ul>

                        </div>
                        <div class="sidebarmenu">
                            <div class="brand-logo d-flex align-items-center nav-logo">
                                <a href="{{ url('/') }}" class="text-nowrap logo-img">
                                    <img src="{{ asset('ayba/2.png') }}"width="120px" alt="Logo" />
                                </a>

                            </div>
                            <!-- ---------------------------------- -->
                            <!-- Dashboard -->
                            <!-- ---------------------------------- -->
                            <nav class="sidebar-nav" id="menu-right-mini-1" data-simplebar>
                                <ul class="sidebar-menu" id="sidebarnav">
                                    <a href=""></a>
                                    <!-- ---------------------------------- -->
                                    <!-- Home -->
                                    <!-- ---------------------------------- -->
                                    <li class="nav-small-cap">
                                        <span class="hide-menu">Bienvenido</span>
                                    </li>
                                    <!-- ---------------------------------- -->
                                    <!-- Dashboard -->
                                    <!-- ---------------------------------- -->
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="admin" aria-expanded="false">
                                            <iconify-icon icon="solar:atom-line-duotone"></iconify-icon>
                                            <span class="hide-menu">{{ Auth::user()->names }}</span>
                                        </a>
                                    </li>

                                    <li>
                                        <span class="sidebar-divider"></span>
                                    </li>

                                    @canany(['administrar', 'clientes'])
                                        <li class="sidebar-item">
                                            <a class="sidebar-link " href="{{ url('admin/clientes') }}">
                                                <iconify-icon icon="solar:shield-user-line-duotone"></iconify-icon>
                                                <span class="hide-menu">Clientes</span>
                                            </a>
                                        </li>

                                    @endcanany
                                     <li class="sidebar-item">
                                            <a class="sidebar-link " href="{{ url('admin/reclamaciones') }}">
                                                <iconify-icon icon="solar:shield-user-line-duotone"></iconify-icon>
                                                <span class="hide-menu">Reclamaciones</span>
                                            </a>
                                        </li>
                                    {{-- <li class="nav-small-cap">
                                        <span class="hide-menu">Módulos</span>
                                    </li> --}}
                                    @canany(['administrar', 'usuarios'])
                                        <li class="sidebar-item">
                                            <a class="sidebar-link has-arrow " href="javascript:void(0)"
                                                aria-expanded="false">
                                                <iconify-icon icon="solar:shield-user-line-duotone"></iconify-icon>
                                                <span class="hide-menu">Usuarios</span>
                                            </a>
                                            <ul aria-expanded="false" class="collapse first-level">
                                                <li class="sidebar-item">
                                                    <a class="sidebar-link" href="{{ url('admin/usuarios') }}">
                                                        <span class="icon-small"></span> Usuarios
                                                    </a>
                                                </li>

                                                <li class="sidebar-item">
                                                    <a class="sidebar-link" href="{{ url('admin/roles') }}">
                                                        <span class="icon-small"></span> Roles
                                                    </a>
                                                </li>


                                            </ul>
                                        </li>
                                    @endcanany


                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow " href="javascript:void(0)"
                                            aria-expanded="false">
                                            <iconify-icon icon="solar:shield-user-line-duotone"></iconify-icon>
                                            <span class="hide-menu">Secciones</span>
                                        </a>

                                        <ul aria-expanded="false" class="collapse first-level">
                                            @canany(['administrar', 'secciones'])
                                                <li class="sidebar-item">
                                                    <a target="_blank" class="sidebar-link" href="{{ url('admin/secciones') }}">
                                                        <span class="icon-small"></span> Secciones
                                                    </a>
                                                </li>
                                            @endcanany
                                            @canany(['administrar', 'editar_plantilla'])
                                                <li class="sidebar-item">
                                                    <a target="_blank" class="sidebar-link" href="{{ url('home_edit/plantilla') }}">
                                                        <span class="icon-small"></span> Plantilla
                                                    </a>
                                                </li>
                                            @endcanany
                                            @canany(['administrar', 'editar_inicio'])
                                                <li class="sidebar-item">
                                                    <a target="_blank" class="sidebar-link" href="{{ url('home_edit/inicio') }}">
                                                        <span class="icon-small"></span> Inicio
                                                    </a>
                                                </li>
                                            @endcanany
                                            @canany(['administrar', 'editar_nosotros'])
                                                <li class="sidebar-item">
                                                    <a target="_blank" class="sidebar-link" href="{{ url('home_edit/nosotros') }}">
                                                        <span class="icon-small"></span>Nosotros
                                                    </a>
                                                </li>
                                            @endcanany
                                            @canany(['administrar', 'editar_proyectos'])
                                                <li class="sidebar-item">
                                                    <a target="_blank" class="sidebar-link" href="{{ url('home_edit/proyectos') }}">
                                                        <span class="icon-small"></span>Proyectos
                                                    </a>
                                                </li>
                                            @endcanany
                                            @canany(['administrar', 'editar_blog'])
                                                <li class="sidebar-item">
                                                    <a target="_blank" class="sidebar-link" href="{{ url('home_edit/blog') }}">
                                                        <span class="icon-small"></span>Blogs
                                                    </a>
                                                </li>
                                            @endcanany
                                            @canany(['administrar', 'editar_contactos'])
                                                <li class="sidebar-item">
                                                    <a target="_blank" class="sidebar-link" href="{{ url('home_edit/contacto') }}">
                                                        <span class="icon-small"></span>Contáctos
                                                    </a>
                                                </li>
                                            @endcanany
                                        </ul>
                                    </li>

                                    @canany(['administrar', 'blogs'])
                                        <li class="sidebar-item">
                                            <a class="sidebar-link has-arrow " href="javascript:void(0)"
                                                aria-expanded="false">
                                                <iconify-icon icon="solar:shield-user-line-duotone"></iconify-icon>
                                                <span class="hide-menu">Blogs</span>
                                            </a>
                                            <ul aria-expanded="false" class="collapse first-level">
                                                <li class="sidebar-item">
                                                    <a class="sidebar-link" href="{{ url('admin/blog') }}">
                                                        <span class="icon-small"></span> Blogs
                                                    </a>
                                                </li>
                                                <li class="sidebar-item">
                                                    <a class="sidebar-link" href="{{ url('admin/categorias') }}">
                                                        <span class="icon-small"></span> Categoría
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    @endcanany
                                    @canany(['administrar', 'proyectos'])
                                        <li class="sidebar-item">
                                            <a class="sidebar-link has-arrow " href="javascript:void(0)"
                                                aria-expanded="false">
                                                <iconify-icon icon="solar:shield-user-line-duotone"></iconify-icon>
                                                <span class="hide-menu">Proyectos</span>
                                            </a>
                                            <ul aria-expanded="false" class="collapse first-level">
                                                <li class="sidebar-item">
                                                    <a class="sidebar-link" href="{{ url('admin/proyectos') }}">
                                                        <span class="icon-small"></span> Proyectos
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    @endcanany
                                    @canany(['administrar', 'imagenes'])
                                        <li class="sidebar-item">
                                            <a class="sidebar-link has-arrow " href="javascript:void(0)"
                                                aria-expanded="false">
                                                <iconify-icon icon="solar:shield-user-line-duotone"></iconify-icon>
                                                <span class="hide-menu">Imágenes</span>
                                            </a>
                                            <ul aria-expanded="false" class="collapse first-level">
                                                <li class="sidebar-item">
                                                    <a class="sidebar-link" href="{{ url('admin/imagenes') }}">
                                                        <span class="icon-small"></span> Imágenes
                                                    </a>
                                                </li>



                                            </ul>
                                        </li>
                                    @endcanany
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow " href="javascript:void(0)"
                                            aria-expanded="false">
                                            <iconify-icon icon="solar:shield-user-line-duotone"></iconify-icon>
                                            <span class="hide-menu">Documentación</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse first-level">
                                            <li class="sidebar-item">
                                                <a class="sidebar-link" href="{{ url('admin/documentacion') }}">
                                                    <span class="icon-small"></span> Video tutoriales
                                                </a>
                                            </li>



                                        </ul>
                                    </li>
                                </ul>
                            </nav>






                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!--  Sidebar End -->
        <div class="page-wrapper">

            <!--  Header Start -->
            <header class="topbar">
                <div class="progress" >
                    <div class="progress-bar text-bg-danger"id="progress_bar" style="width: 0%; height: 6px" role="progressbar">
                    </div>

                </div>
                <div class="with-vertical">

                    <!-- ---------------------------------- -->
                    <!-- Start Vertical Layout Header -->
                    <!-- ---------------------------------- -->
                    <nav class="navbar navbar-expand-lg p-0">
                        <ul class="navbar-nav">
                            <li class="nav-item d-flex d-xl-none">
                                <a class="nav-link nav-icon-hover-bg rounded-circle  sidebartoggler "
                                    id="headerCollapse" href="javascript:void(0)">
                                    <iconify-icon icon="solar:hamburger-menu-line-duotone"
                                        class="fs-6"></iconify-icon>
                                </a>
                            </li>
                            <li class="nav-item d-none d-xl-flex nav-icon-hover-bg rounded-circle">
                                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <iconify-icon icon="solar:magnifer-linear" class="fs-6"></iconify-icon>
                                </a>
                            </li>
                            <li class="nav-item d-none d-lg-flex dropdown nav-icon-hover-bg rounded-circle">
                                <div class="hover-dd">
                                    <a class="nav-link" id="drop2" href="javascript:void(0)"
                                        aria-haspopup="true" aria-expanded="false">
                                        <iconify-icon icon="solar:widget-3-line-duotone"
                                            class="fs-6"></iconify-icon>
                                    </a>

                                </div>
                            </li>
                        </ul>

                        <div class="d-block d-lg-none py-9 py-xl-0">
                            <img src="{{ asset('ayba/3.png') }}" width="120px" alt="matdash-img" />
                        </div>
                        <a class="navbar-toggler p-0 border-0 nav-icon-hover-bg rounded-circle"
                            href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <iconify-icon icon="solar:menu-dots-bold-duotone" class="fs-6"></iconify-icon>
                        </a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <div class="d-flex align-items-center justify-content-between">
                                <ul
                                    class="navbar-nav flex-row mx-auto ms-lg-auto align-items-center justify-content-center">
                                    {{-- <li class="nav-item dropdown">
                                        <a href="javascript:void(0)"
                                            class="nav-link nav-icon-hover-bg rounded-circle d-flex d-lg-none align-items-center justify-content-center"
                                            type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
                                            aria-controls="offcanvasWithBothOptions">
                                            <iconify-icon icon="solar:sort-line-duotone"
                                                class="fs-6"></iconify-icon>
                                        </a>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a class="nav-link moon dark-layout nav-icon-hover-bg rounded-circle"
                                            href="javascript:void(0)">
                                            <iconify-icon icon="solar:moon-line-duotone"
                                                class="moon fs-6"></iconify-icon>
                                        </a>
                                        <a class="nav-link sun light-layout nav-icon-hover-bg rounded-circle"
                                            href="javascript:void(0)" style="display: none">
                                            <iconify-icon icon="solar:sun-2-line-duotone"
                                                class="sun fs-6"></iconify-icon>
                                        </a>
                                    </li>
                                    {{-- <li class="nav-item d-block d-xl-none">
                                        <a class="nav-link nav-icon-hover-bg rounded-circle" href="javascript:void(0)"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <iconify-icon icon="solar:magnifer-line-duotone"
                                                class="fs-6"></iconify-icon>
                                        </a>
                                    </li> --}}


                                    <!-- ------------------------------- -->
                                    <!-- end notification Dropdown -->
                                    <!-- ------------------------------- -->


                                    <!-- ------------------------------- -->
                                    <!-- end language Dropdown -->
                                    <!-- ------------------------------- -->

                                    <!-- ------------------------------- -->
                                    <!-- start profile Dropdown -->
                                    <!-- ------------------------------- -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="javascript:void(0)" id="drop1"
                                            aria-expanded="false">
                                            <div class="d-flex align-items-center gap-2 lh-base">
                                                <img src="../assets/images/profile/user-1.jpg" class="rounded-circle"
                                                    width="35" height="35" alt="matdash-img" />
                                                <iconify-icon icon="solar:alt-arrow-down-bold"
                                                    class="fs-2"></iconify-icon>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu profile-dropdown dropdown-menu-end dropdown-menu-animate-up"
                                            aria-labelledby="drop1">
                                            <div class="position-relative px-4 pt-3 pb-2">
                                                <div class="d-flex align-items-center mb-3 pb-3 border-bottom gap-6">
                                                    <img src="../assets/images/profile/user-1.jpg"
                                                        class="rounded-circle" width="56" height="56"
                                                        alt="matdash-img" />
                                                    <div>
                                                        <p class="mb-0 text-dark">
                                                            {{ Auth::user()->names }} {{ Auth::user()->firstname }}
                                                            {{ Auth::user()->lastname }}
                                                        </p>
                                                        <span class="text-success fs-11">Pro</span>
                                                        {{-- <h5 class="mb-0 fs-12">David McMichael

                                                        </h5> --}}

                                                    </div>
                                                </div>
                                                <div class="message-body">
                                                    <a href="admin"
                                                        class="p-2 dropdown-item h6 rounded-1">
                                                        Mi Perfil
                                                    </a>


                                                    {{-- <a href="javascript:void(0)"
                                                        class="p-2 dropdown-item h6 rounded-1">
                                                        Configuraciones
                                                    </a> --}}
                                                    <a href="{{ url('logout') }}"
                                                        class="p-2 dropdown-item h6 rounded-1">
                                                        Salir
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- ------------------------------- -->
                                    <!-- end profile Dropdown -->
                                    <!-- ------------------------------- -->
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- ---------------------------------- -->
                    <!-- End Vertical Layout Header -->
                    <!-- ---------------------------------- -->

                    <!-- ------------------------------- -->
                    <!-- apps Dropdown in Small screen -->
                    <!-- ------------------------------- -->
                    <!--  Mobilenavbar -->
                    {{-- <div class="offcanvas offcanvas-start pt-0" data-bs-scroll="true" tabindex="-1"
                        id="mobilenavbar" aria-labelledby="offcanvasWithBothOptionsLabel">
                        <nav class="sidebar-nav scroll-sidebar">
                            <div class="offcanvas-header justify-content-between">
                                <a href="../main/index.html" class="text-nowrap logo-img">
                                    <img src="../assets/images/logos/logo-icon.svg" alt="Logo" />
                                </a>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body pt-0" data-simplebar style="height: calc(100vh - 80px)">
                                <ul id="sidebarnav">
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow ms-0" href="javascript:void(0)"
                                            aria-expanded="false">
                                            <span>
                                                <iconify-icon icon="solar:slider-vertical-line-duotone"
                                                    class="fs-7"></iconify-icon>
                                            </span>
                                            <span class="hide-menu">Apps</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse first-level my-3 ps-3">
                                            <li class="sidebar-item py-2">
                                                <a href="../main/app-chat.html" class="d-flex align-items-center">
                                                    <div
                                                        class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                        <iconify-icon icon="solar:chat-line-bold-duotone"
                                                            class="fs-7 text-primary"></iconify-icon>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0 bg-hover-primary">Chat Application</h6>
                                                        <span class="fs-11 d-block text-body-color">New messages
                                                            arrived</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a href="../main/app-invoice.html" class="d-flex align-items-center">
                                                    <div
                                                        class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                        <iconify-icon icon="solar:bill-list-bold-duotone"
                                                            class="fs-7 text-secondary"></iconify-icon>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0 bg-hover-primary">Invoice App</h6>
                                                        <span class="fs-11 d-block text-body-color">Get latest
                                                            invoice</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a href="../main/app-contact2.html" class="d-flex align-items-center">
                                                    <div
                                                        class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                        <iconify-icon icon="solar:phone-calling-rounded-bold-duotone"
                                                            class="fs-7 text-warning"></iconify-icon>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0 bg-hover-primary">Contact Application</h6>
                                                        <span class="fs-11 d-block text-body-color">2 Unsaved
                                                            Contacts</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a href="../main/app-email.html" class="d-flex align-items-center">
                                                    <div
                                                        class="bg-danger-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                        <iconify-icon icon="solar:letter-bold-duotone"
                                                            class="fs-7 text-danger"></iconify-icon>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0 bg-hover-primary">Email App</h6>
                                                        <span class="fs-11 d-block text-body-color">Get new
                                                            emails</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a href="../main/page-user-profile.html"
                                                    class="d-flex align-items-center">
                                                    <div
                                                        class="bg-success-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                        <iconify-icon icon="solar:user-bold-duotone"
                                                            class="fs-7 text-success"></iconify-icon>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0 bg-hover-primary">User Profile</h6>
                                                        <span class="fs-11 d-block text-body-color">learn more
                                                            information</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a href="../main/app-calendar.html" class="d-flex align-items-center">
                                                    <div
                                                        class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                        <iconify-icon icon="solar:calendar-minimalistic-bold-duotone"
                                                            class="fs-7 text-primary"></iconify-icon>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0 bg-hover-primary">Calendar App</h6>
                                                        <span class="fs-11 d-block text-body-color">Get dates</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a href="../main/app-contact.html" class="d-flex align-items-center">
                                                    <div
                                                        class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                        <iconify-icon icon="solar:smartphone-2-bold-duotone"
                                                            class="fs-7 text-secondary"></iconify-icon>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0 bg-hover-primary">Contact List Table</h6>
                                                        <span class="fs-11 d-block text-body-color">Add new
                                                            contact</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a href="../main/app-notes.html" class="d-flex align-items-center">
                                                    <div
                                                        class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                        <iconify-icon icon="solar:notes-bold-duotone"
                                                            class="fs-7 text-warning"></iconify-icon>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0 bg-hover-primary">Notes Application</h6>
                                                        <span class="fs-11 d-block text-body-color">To-do and Daily
                                                            tasks</span>
                                                    </div>
                                                </a>
                                            </li>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div> --}}
                </div>
                {{-- <div class="app-header with-horizontal">
                    <nav class="navbar navbar-expand-xl container-fluid p-0">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item d-flex d-xl-none">
                                <a class="nav-link sidebartoggler nav-icon-hover-bg rounded-circle"
                                    id="sidebarCollapse" href="javascript:void(0)">
                                    <iconify-icon icon="solar:hamburger-menu-line-duotone"
                                        class="fs-7"></iconify-icon>
                                </a>
                            </li>
                            <li class="nav-item d-none d-xl-flex align-items-center">
                                <a href="../main/index.html" class="text-nowrap nav-link">
                                    <img src="../assets/images/logos/logo.svg" alt="matdash-img" />
                                </a>
                            </li>
                            <li class="nav-item d-none d-xl-flex align-items-center nav-icon-hover-bg rounded-circle">
                                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <iconify-icon icon="solar:magnifer-linear" class="fs-6"></iconify-icon>
                                </a>
                            </li>
                            <li
                                class="nav-item d-none d-lg-flex align-items-center dropdown nav-icon-hover-bg rounded-circle">
                                <div class="hover-dd">
                                    <a class="nav-link" id="drop2" href="javascript:void(0)"
                                        aria-haspopup="true" aria-expanded="false">
                                        <iconify-icon icon="solar:widget-3-line-duotone"
                                            class="fs-6"></iconify-icon>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0 overflow-hidden"
                                        aria-labelledby="drop2">
                                        <div class="position-relative">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="p-4 pb-3">

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="position-relative">
                                                                    <a href="../main/app-chat.html"
                                                                        class="d-flex align-items-center pb-9 position-relative">
                                                                        <div
                                                                            class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                            <iconify-icon
                                                                                icon="solar:chat-line-bold-duotone"
                                                                                class="fs-7 text-primary"></iconify-icon>
                                                                        </div>
                                                                        <div>
                                                                            <h6 class="mb-0">Chat Application</h6>
                                                                            <span
                                                                                class="fs-11 d-block text-body-color">New
                                                                                messages arrived</span>
                                                                        </div>
                                                                    </a>
                                                                    <a href="../main/app-invoice.html"
                                                                        class="d-flex align-items-center pb-9 position-relative">
                                                                        <div
                                                                            class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                            <iconify-icon
                                                                                icon="solar:bill-list-bold-duotone"
                                                                                class="fs-7 text-secondary"></iconify-icon>
                                                                        </div>
                                                                        <div>
                                                                            <h6 class="mb-0">Invoice App</h6>
                                                                            <span
                                                                                class="fs-11 d-block text-body-color">Get
                                                                                latest invoice</span>
                                                                        </div>
                                                                    </a>
                                                                    <a href="../main/app-contact2.html"
                                                                        class="d-flex align-items-center pb-9 position-relative">
                                                                        <div
                                                                            class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                            <iconify-icon
                                                                                icon="solar:phone-calling-rounded-bold-duotone"
                                                                                class="fs-7 text-warning"></iconify-icon>
                                                                        </div>
                                                                        <div>
                                                                            <h6 class="mb-0">Contact Application</h6>
                                                                            <span
                                                                                class="fs-11 d-block text-body-color">2
                                                                                Unsaved Contacts</span>
                                                                        </div>
                                                                    </a>
                                                                    <a href="../main/app-email.html"
                                                                        class="d-flex align-items-center pb-9 position-relative">
                                                                        <div
                                                                            class="bg-danger-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                            <iconify-icon
                                                                                icon="solar:letter-bold-duotone"
                                                                                class="fs-7 text-danger"></iconify-icon>
                                                                        </div>
                                                                        <div>
                                                                            <h6 class="mb-0">Email App</h6>
                                                                            <span
                                                                                class="fs-11 d-block text-body-color">Get
                                                                                new emails</span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="position-relative">
                                                                    <a href="../main/page-user-profile.html"
                                                                        class="d-flex align-items-center pb-9 position-relative">
                                                                        <div
                                                                            class="bg-success-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                            <iconify-icon
                                                                                icon="solar:user-bold-duotone"
                                                                                class="fs-7 text-success"></iconify-icon>
                                                                        </div>
                                                                        <div>
                                                                            <h6 class="mb-0">User Profile</h6>
                                                                            <span
                                                                                class="fs-11 d-block text-body-color">learn
                                                                                more information</span>
                                                                        </div>
                                                                    </a>
                                                                    <a href="../main/app-calendar.html"
                                                                        class="d-flex align-items-center pb-9 position-relative">
                                                                        <div
                                                                            class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                            <iconify-icon
                                                                                icon="solar:calendar-minimalistic-bold-duotone"
                                                                                class="fs-7 text-primary"></iconify-icon>
                                                                        </div>
                                                                        <div>
                                                                            <h6 class="mb-0">Calendar App</h6>
                                                                            <span
                                                                                class="fs-11 d-block text-body-color">Get
                                                                                dates</span>
                                                                        </div>
                                                                    </a>
                                                                    <a href="../main/app-contact.html"
                                                                        class="d-flex align-items-center pb-9 position-relative">
                                                                        <div
                                                                            class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                            <iconify-icon
                                                                                icon="solar:smartphone-2-bold-duotone"
                                                                                class="fs-7 text-secondary"></iconify-icon>
                                                                        </div>
                                                                        <div>
                                                                            <h6 class="mb-0">Contact List Table</h6>
                                                                            <span
                                                                                class="fs-11 d-block text-body-color">Add
                                                                                new contact</span>
                                                                        </div>
                                                                    </a>
                                                                    <a href="../main/app-notes.html"
                                                                        class="d-flex align-items-center pb-9 position-relative">
                                                                        <div
                                                                            class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                            <iconify-icon
                                                                                icon="solar:notes-bold-duotone"
                                                                                class="fs-7 text-warning"></iconify-icon>
                                                                        </div>
                                                                        <div>
                                                                            <h6 class="mb-0">Notes Application</h6>
                                                                            <span
                                                                                class="fs-11 d-block text-body-color">To-do
                                                                                and Daily tasks</span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4 d-none d-lg-flex">
                                                    <img src="../assets/images/backgrounds/mega-dd-bg.jpg"
                                                        alt="mega-dd" class="img-fluid mega-dd-bg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="d-block d-xl-none">
                            <a href="../main/index.html" class="text-nowrap nav-link">
                                <img src="../assets/images/logos/logo.svg" alt="matdash-img" />
                            </a>
                        </div>
                        <a class="navbar-toggler nav-icon-hover p-0 border-0 nav-icon-hover-bg rounded-circle"
                            href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="p-2">
                                <i class="ti ti-dots fs-7"></i>
                            </span>
                        </a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <div class="d-flex align-items-center justify-content-between px-0 px-xl-8">
                                <ul
                                    class="navbar-nav flex-row mx-auto ms-lg-auto align-items-center justify-content-center">
                                    <li class="nav-item dropdown">
                                        <a href="javascript:void(0)"
                                            class="nav-link nav-icon-hover-bg rounded-circle d-flex d-lg-none align-items-center justify-content-center"
                                            type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
                                            aria-controls="offcanvasWithBothOptions">
                                            <iconify-icon icon="solar:sort-line-duotone"
                                                class="fs-6"></iconify-icon>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link nav-icon-hover-bg rounded-circle moon dark-layout"
                                            href="javascript:void(0)">
                                            <iconify-icon icon="solar:moon-line-duotone"
                                                class="moon fs-6"></iconify-icon>
                                        </a>
                                        <a class="nav-link nav-icon-hover-bg rounded-circle sun light-layout"
                                            href="javascript:void(0)" style="display: none">
                                            <iconify-icon icon="solar:sun-2-line-duotone"
                                                class="sun fs-6"></iconify-icon>
                                        </a>
                                    </li>
                                    <li class="nav-item d-block d-xl-none">
                                        <a class="nav-link nav-icon-hover-bg rounded-circle" href="javascript:void(0)"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <iconify-icon icon="solar:magnifer-line-duotone"
                                                class="fs-6"></iconify-icon>
                                        </a>
                                    </li>

                                    <!-- ------------------------------- -->
                                    <!-- start notification Dropdown -->
                                    <!-- ------------------------------- -->
                                    <li class="nav-item dropdown nav-icon-hover-bg rounded-circle">
                                        <a class="nav-link position-relative" href="javascript:void(0)"
                                            id="drop2" aria-expanded="false">
                                            <iconify-icon icon="solar:bell-bing-line-duotone"
                                                class="fs-6"></iconify-icon>
                                        </a>
                                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                                            aria-labelledby="drop2">
                                            <div class="d-flex align-items-center justify-content-between py-3 px-7">
                                                <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                                                <span class="badge text-bg-primary rounded-4 px-3 py-1 lh-sm">5
                                                    new</span>
                                            </div>
                                            <div class="message-body" data-simplebar>
                                                <a href="javascript:void(0)"
                                                    class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                                                    <span
                                                        class="flex-shrink-0 bg-danger-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-danger">
                                                        <iconify-icon
                                                            icon="solar:widget-3-line-duotone"></iconify-icon>
                                                    </span>
                                                    <div class="w-75">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-1 fw-semibold">Launch Admin</h6>
                                                            <span class="d-block fs-2">9:30 AM</span>
                                                        </div>
                                                        <span class="d-block text-truncate text-truncate fs-11">Just
                                                            see the my new admin!</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                                                    <span
                                                        class="flex-shrink-0 bg-primary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-primary">
                                                        <iconify-icon
                                                            icon="solar:calendar-line-duotone"></iconify-icon>
                                                    </span>
                                                    <div class="w-75">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-1 fw-semibold">Event today</h6>
                                                            <span class="d-block fs-2">9:15 AM</span>
                                                        </div>
                                                        <span class="d-block text-truncate text-truncate fs-11">Just a
                                                            reminder that you have event</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                                                    <span
                                                        class="flex-shrink-0 bg-secondary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-secondary">
                                                        <iconify-icon
                                                            icon="solar:settings-line-duotone"></iconify-icon>
                                                    </span>
                                                    <div class="w-75">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-1 fw-semibold">Settings</h6>
                                                            <span class="d-block fs-2">4:36 PM</span>
                                                        </div>
                                                        <span class="d-block text-truncate text-truncate fs-11">You can
                                                            customize this template as you want</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                                                    <span
                                                        class="flex-shrink-0 bg-warning-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-warning">
                                                        <iconify-icon
                                                            icon="solar:widget-4-line-duotone"></iconify-icon>
                                                    </span>
                                                    <div class="w-75">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-1 fw-semibold">Launch Admin</h6>
                                                            <span class="d-block fs-2">9:30 AM</span>
                                                        </div>
                                                        <span class="d-block text-truncate text-truncate fs-11">Just
                                                            see the my new admin!</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                                                    <span
                                                        class="flex-shrink-0 bg-primary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-primary">
                                                        <iconify-icon
                                                            icon="solar:calendar-line-duotone"></iconify-icon>
                                                    </span>
                                                    <div class="w-75">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-1 fw-semibold">Event today</h6>
                                                            <span class="d-block fs-2">9:15 AM</span>
                                                        </div>
                                                        <span class="d-block text-truncate text-truncate fs-11">Just a
                                                            reminder that you have event</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                                                    <span
                                                        class="flex-shrink-0 bg-secondary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-secondary">
                                                        <iconify-icon
                                                            icon="solar:settings-line-duotone"></iconify-icon>
                                                    </span>
                                                    <div class="w-75">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-1 fw-semibold">Settings</h6>
                                                            <span class="d-block fs-2">4:36 PM</span>
                                                        </div>
                                                        <span class="d-block text-truncate text-truncate fs-11">You can
                                                            customize this template as you want</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="py-6 px-7 mb-1">
                                                <button class="btn btn-primary w-100">See All Notifications</button>
                                            </div>

                                        </div>
                                    </li>
                                    <!-- ------------------------------- -->
                                    <!-- end notification Dropdown -->
                                    <!-- ------------------------------- -->

                                    <!-- ------------------------------- -->
                                    <!-- start language Dropdown -->
                                    <!-- ------------------------------- -->

                                    <!-- ------------------------------- -->
                                    <!-- end language Dropdown -->
                                    <!-- ------------------------------- -->

                                    <!-- ------------------------------- -->
                                    <!-- start profile Dropdown -->
                                    <!-- ------------------------------- -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="javascript:void(0)" id="drop1"
                                            aria-expanded="false">
                                            <div class="d-flex align-items-center gap-2 lh-base">
                                                <img src="../assets/images/profile/user-1.jpg" class="rounded-circle"
                                                    width="35" height="35" alt="matdash-img" />
                                                <iconify-icon icon="solar:alt-arrow-down-bold"
                                                    class="fs-2"></iconify-icon>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu profile-dropdown dropdown-menu-end dropdown-menu-animate-up"
                                            aria-labelledby="drop1">
                                            <div class="position-relative px-4 pt-3 pb-2">
                                                <div class="d-flex align-items-center mb-3 pb-3 border-bottom gap-6">
                                                    <img src="../assets/images/profile/user-1.jpg"
                                                        class="rounded-circle" width="56" height="56"
                                                        alt="matdash-img" />
                                                    <div>
                                                        <h5 class="mb-0 fs-12">David McMichael <span
                                                                class="text-success fs-11">Pro</span>
                                                        </h5>
                                                        <p class="mb-0 text-dark">
                                                            david@wrappixel.com
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="message-body">
                                                    <a href="javascript:void(0)"
                                                        class="p-2 dropdown-item h6 rounded-1">
                                                        My Profile
                                                    </a>
                                                    <a href="javascript:void(0)"
                                                        class="p-2 dropdown-item h6 rounded-1">
                                                        My Subscription
                                                    </a>
                                                    <a href="javascript:void(0)"
                                                        class="p-2 dropdown-item h6 rounded-1">
                                                        My Statements <span
                                                            class="badge bg-danger-subtle text-danger rounded ms-8">4</span>
                                                    </a>
                                                    <a href="javascript:void(0)"
                                                        class="p-2 dropdown-item h6 rounded-1">
                                                        Account Settings
                                                    </a>
                                                    <a href="../main/authentication-login2.html"
                                                        class="p-2 dropdown-item h6 rounded-1">
                                                        Sign Out
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- ------------------------------- -->
                                    <!-- end profile Dropdown -->
                                    <!-- ------------------------------- -->
                                </ul>
                            </div>
                        </div>
                    </nav>

                </div> --}}
            </header>
            <!--  Header End -->

            {{-- <aside class="left-sidebar with-horizontal">
                <!-- Sidebar scroll-->
                <div>
                    <!-- Sidebar navigation-->
                    <nav id="sidebarnavh" class="sidebar-nav scroll-sidebar container-fluid">
                        <ul id="sidebarnav">
                            <!-- ============================= -->
                            <!-- Home -->
                            <!-- ============================= -->
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">Home</span>
                            </li>
                            <!-- =================== -->
                            <!-- Dashboard -->
                            <!-- =================== -->
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <span>
                                        <iconify-icon icon="solar:layers-line-duotone" class="ti"></iconify-icon>
                                    </span>
                                    <span class="hide-menu">Dashboard</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="../main/index.html" class="sidebar-link">
                                            <i class="ti ti-aperture"></i>
                                            <span class="hide-menu">Dashboard 1</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/index2.html" class="sidebar-link">
                                            <i class="ti ti-shopping-cart"></i>
                                            <span class="hide-menu">Dashboard 2</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/index3.html" class="sidebar-link">
                                            <i class="ti ti-atom"></i>
                                            <span class="hide-menu">Dashboard 3</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- ============================= -->
                            <!-- Apps -->
                            <!-- ============================= -->
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">Apps</span>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link two-column has-arrow" href="javascript:void(0)"
                                    aria-expanded="false">
                                    <span>
                                        <iconify-icon icon="solar:widget-line-duotone" class="ti"></iconify-icon>
                                    </span>
                                    <span class="hide-menu">Apps</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="../main/app-calendar.html" class="sidebar-link">
                                            <i class="ti ti-calendar"></i>
                                            <span class="hide-menu">Calendar</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/apps-kanban.html" class="sidebar-link">
                                            <i class="ti ti-layout-kanban"></i>
                                            <span class="hide-menu">Kanban</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/app-chat.html" class="sidebar-link">
                                            <i class="ti ti-message-dots"></i>
                                            <span class="hide-menu">Chat</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="../main/app-email.html" aria-expanded="false">
                                            <span>
                                                <i class="ti ti-mail"></i>
                                            </span>
                                            <span class="hide-menu">Email</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/app-contact.html" class="sidebar-link">
                                            <i class="ti ti-phone"></i>
                                            <span class="hide-menu">Contact Table</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/app-contact2.html" class="sidebar-link">
                                            <i class="ti ti-list-details"></i>
                                            <span class="hide-menu">Contact List</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/app-notes.html" class="sidebar-link">
                                            <i class="ti ti-notes"></i>
                                            <span class="hide-menu">Notes</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/app-invoice.html" class="sidebar-link">
                                            <i class="ti ti-file-text"></i>
                                            <span class="hide-menu">Invoice</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/page-user-profile.html" class="sidebar-link">
                                            <i class="ti ti-user-circle"></i>
                                            <span class="hide-menu">User Profile</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/blog-posts.html" class="sidebar-link">
                                            <i class="ti ti-article"></i>
                                            <span class="hide-menu">Posts</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/blog-detail.html" class="sidebar-link">
                                            <i class="ti ti-details"></i>
                                            <span class="hide-menu">Detail</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/eco-shop.html" class="sidebar-link">
                                            <i class="ti ti-shopping-cart"></i>
                                            <span class="hide-menu">Shop</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/eco-shop-detail.html" class="sidebar-link">
                                            <i class="ti ti-basket"></i>
                                            <span class="hide-menu">Shop Detail</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/eco-product-list.html" class="sidebar-link">
                                            <i class="ti ti-list-check"></i>
                                            <span class="hide-menu">List</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/eco-checkout.html" class="sidebar-link">
                                            <i class="ti ti-brand-shopee"></i>
                                            <span class="hide-menu">Checkout</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- ============================= -->
                            <!-- PAGES -->
                            <!-- ============================= -->
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">PAGES</span>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <span>
                                        <iconify-icon icon="solar:notes-line-duotone" class="ti"></iconify-icon>
                                    </span>
                                    <span class="hide-menu">Pages</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="../main/page-faq.html" class="sidebar-link">
                                            <i class="ti ti-help"></i>
                                            <span class="hide-menu">FAQ</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/page-account-settings.html" class="sidebar-link">
                                            <i class="ti ti-user-circle"></i>
                                            <span class="hide-menu">Account Setting</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/page-pricing.html" class="sidebar-link">
                                            <i class="ti ti-currency-dollar"></i>
                                            <span class="hide-menu">Pricing</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/widgets-cards.html" class="sidebar-link">
                                            <i class="ti ti-cards"></i>
                                            <span class="hide-menu">Card</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/widgets-banners.html" class="sidebar-link">
                                            <i class="ti ti-ad"></i>
                                            <span class="hide-menu">Banner</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/widgets-charts.html" class="sidebar-link">
                                            <i class="ti ti-chart-bar"></i>
                                            <span class="hide-menu">Charts</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/starter.html" class="sidebar-link">
                                            <i class="ti ti-file"></i>
                                            <span class="hide-menu">Starter</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../landingpage/index.html" class="sidebar-link">
                                            <i class="ti ti-app-window"></i>
                                            <span class="hide-menu">Landing Page</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- ============================= -->
                            <!-- UI -->
                            <!-- ============================= -->
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">UI</span>
                            </li>
                            <!-- =================== -->
                            <!-- UI Elements -->
                            <!-- =================== -->
                            <li class="sidebar-item mega-dropdown">
                                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <span class="rounded-3">
                                        <iconify-icon icon="solar:archive-line-duotone" class="ti"></iconify-icon>
                                    </span>
                                    <span class="hide-menu">UI</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="../main/ui-accordian.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Accordian</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/ui-badge.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Badge</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/ui-buttons.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Buttons</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/ui-dropdowns.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Dropdowns</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/ui-modals.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Modals</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/ui-tab.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Tab</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/ui-tooltip-popover.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Tooltip & Popover</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/ui-notification.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Notification</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/ui-progressbar.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Progressbar</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/ui-pagination.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Pagination</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/ui-typography.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Typography</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/ui-bootstrap-ui.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Bootstrap UI</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/ui-breadcrumb.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Breadcrumb</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/ui-offcanvas.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Offcanvas</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/ui-lists.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Lists</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/ui-grid.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Grid</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/ui-carousel.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Carousel</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/ui-scrollspy.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Scrollspy</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/ui-spinner.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Spinner</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/ui-link.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Link</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- ============================= -->
                            <!-- Forms -->
                            <!-- ============================= -->
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">Forms</span>
                            </li>
                            <!-- =================== -->
                            <!-- Forms -->
                            <!-- =================== -->
                            <li class="sidebar-item">
                                <a class="sidebar-link two-column has-arrow" href="javascript:void(0)"
                                    aria-expanded="false">
                                    <span class="rounded-3">
                                        <iconify-icon icon="solar:folder-line-duotone" class="ti"></iconify-icon>
                                    </span>
                                    <span class="hide-menu">Forms</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <!-- form elements -->
                                    <li class="sidebar-item">
                                        <a href="../main/form-inputs.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Forms Input</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/form-input-groups.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Input Groups</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/form-input-grid.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Input Grid</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/form-checkbox-radio.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Checkbox & Radios</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/form-bootstrap-switch.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Bootstrap Switch</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/form-select2.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Select2</span>
                                        </a>
                                    </li>
                                    <!-- form inputs -->
                                    <li class="sidebar-item">
                                        <a href="../main/form-basic.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Basic Form</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/form-vertical.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Form Vertical</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/form-horizontal.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Form Horizontal</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/form-actions.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Form Actions</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/form-row-separator.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Row Separator</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/form-bordered.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Form Bordered</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/form-detail.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Form Detail</span>
                                        </a>
                                    </li>
                                    <!-- form wizard -->
                                    <li class="sidebar-item">
                                        <a href="../main/form-wizard.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Form Wizard</span>
                                        </a>
                                    </li>
                                    <!-- Quill Editor -->
                                    <li class="sidebar-item">
                                        <a href="../main/form-editor-quill.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Quill Editor</span>
                                        </a>
                                    </li>
                                    <!-- Tinymce Editor -->
                                    <li class="sidebar-item">
                                        <a href="../main/form-editor-tinymce.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Tinymce Editor</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- ============================= -->
                            <!-- Tables -->
                            <!-- ============================= -->
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">Tables</span>
                            </li>
                            <!-- =================== -->
                            <!-- Bootstrap Table -->
                            <!-- =================== -->
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <span class="rounded-3">
                                        <iconify-icon icon="solar:tuning-square-2-line-duotone"
                                            class="ti"></iconify-icon>
                                    </span>
                                    <span class="hide-menu">Tables</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="../main/table-basic.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Basic Table</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/table-dark-basic.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Dark Table</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/table-sizing.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Sizing Table</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/table-layout-coloured.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Coloured Table</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/table-datatable-basic.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Basic Initialisation</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/table-datatable-api.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">API</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/table-datatable-advanced.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Advanced</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- ============================= -->
                            <!-- Charts -->
                            <!-- ============================= -->
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">Charts</span>
                            </li>
                            <!-- =================== -->
                            <!-- Apex Chart -->
                            <!-- =================== -->
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <span class="rounded-3">
                                        <iconify-icon icon="solar:chart-square-line-duotone"
                                            class="ti"></iconify-icon>
                                    </span>
                                    <span class="hide-menu">Charts</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="../main/chart-apex-line.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Line Chart</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/chart-apex-area.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Area Chart</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/chart-apex-bar.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Bar Chart</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/chart-apex-pie.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Pie Chart</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/chart-apex-radial.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Radial Chart</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../main/chart-apex-radar.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Radar Chart</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- ============================= -->
                            <!-- Icons -->
                            <!-- ============================= -->
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">Icons</span>
                            </li>

                            <!-- =================== -->
                            <!-- Icon -->
                            <!-- =================== -->
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <span class="rounded-3">
                                        <iconify-icon icon="solar:sticker-smile-square-line-duotone"
                                            class="ti"></iconify-icon>
                                    </span>
                                    <span class="hide-menu">Icons</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="../main/icon-tabler.html"
                                            aria-expanded="false">
                                            <span class="rounded-3">
                                                <i class="ti ti-circle"></i>
                                            </span>
                                            <span class="hide-menu">Tabler Icon</span>
                                        </a>
                                    </li>
                                    <!-- =================== -->
                                    <!-- Solar Icon -->
                                    <!-- =================== -->
                                    <li class="sidebar-item">
                                        <a class="sidebar-link sidebar-link" href="../main/icon-solar.html"
                                            aria-expanded="false">
                                            <span class="rounded-3">
                                                <i class="ti ti-circle"></i>
                                            </span>
                                            <span class="hide-menu">Solar Icon</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- multi level -->
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <span class="rounded-3">
                                        <iconify-icon icon="solar:airbuds-case-minimalistic-line-duotone"
                                            class="ti"></iconify-icon>
                                    </span>
                                    <span class="hide-menu">Multi DD</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="../docs/index.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Documentation</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="javascript:void(0)" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Page 1</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="javascript:void(0)" class="sidebar-link has-arrow">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Page 2</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse second-level">
                                            <li class="sidebar-item">
                                                <a href="javascript:void(0)" class="sidebar-link">
                                                    <i class="ti ti-circle"></i>
                                                    <span class="hide-menu">Page 2.1</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="javascript:void(0)" class="sidebar-link">
                                                    <i class="ti ti-circle"></i>
                                                    <span class="hide-menu">Page 2.2</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="javascript:void(0)" class="sidebar-link">
                                                    <i class="ti ti-circle"></i>
                                                    <span class="hide-menu">Page 2.3</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="javascript:void(0)" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Page 3</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside> --}}

            @yield('content')


        </div>
        <button
            class="btn btn-danger p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn"
            type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
            aria-controls="offcanvasExample">
            <i class="icon ti ti-settings fs-7"></i>
        </button>

        <div class="offcanvas customizer offcanvas-end" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
                <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">
                    Settings
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body" data-simplebar style="height: calc(100vh - 80px)">
                <h6 class="fw-semibold fs-4 mb-2">Theme</h6>

                <div class="d-flex flex-row gap-3 customizer-box" role="group">
                    <input type="radio" class="btn-check light-layout" name="theme-layout" id="light-layout"
                        autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary rounded-2" for="light-layout">
                        <i class="icon ti ti-brightness-up fs-7 me-2"></i>Light
                    </label>

                    <input type="radio" class="btn-check dark-layout" name="theme-layout" id="dark-layout"
                        autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary rounded-2" for="dark-layout">
                        <i class="icon ti ti-moon fs-7 me-2"></i>Dark
                    </label>
                </div>

                <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Direction</h6>
                <div class="d-flex flex-row gap-3 customizer-box" role="group">
                    <input type="radio" class="btn-check" name="direction-l" id="ltr-layout"
                        autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary rounded-2" for="ltr-layout">
                        <i class="icon ti ti-text-direction-ltr fs-7 me-2"></i>LTR
                    </label>

                    <input type="radio" class="btn-check" name="direction-l" id="rtl-layout"
                        autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary rounded-2" for="rtl-layout">
                        <i class="icon ti ti-text-direction-rtl fs-7 me-2"></i>RTL
                    </label>
                </div>

                <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Colors</h6>

                <div class="d-flex flex-row flex-wrap gap-3 customizer-box color-pallete" role="group">
                    <input type="radio" class="btn-check" name="color-theme-layout" id="Blue_Theme"
                        autocomplete="off" />
                    <label
                        class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
                        onclick="handleColorTheme('Blue_Theme')" for="Blue_Theme" data-bs-toggle="tooltip"
                        data-bs-placement="top" data-bs-title="BLUE_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-1">
                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                    </label>

                    <input type="radio" class="btn-check" name="color-theme-layout" id="Aqua_Theme"
                        autocomplete="off" />
                    <label
                        class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
                        onclick="handleColorTheme('Aqua_Theme')" for="Aqua_Theme" data-bs-toggle="tooltip"
                        data-bs-placement="top" data-bs-title="AQUA_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-2">
                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                    </label>

                    <input type="radio" class="btn-check" name="color-theme-layout" id="Purple_Theme"
                        autocomplete="off" />
                    <label
                        class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
                        onclick="handleColorTheme('Purple_Theme')" for="Purple_Theme" data-bs-toggle="tooltip"
                        data-bs-placement="top" data-bs-title="PURPLE_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-3">
                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                    </label>

                    <input type="radio" class="btn-check" name="color-theme-layout" id="green-theme-layout"
                        autocomplete="off" />
                    <label
                        class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
                        onclick="handleColorTheme('Green_Theme')" for="green-theme-layout" data-bs-toggle="tooltip"
                        data-bs-placement="top" data-bs-title="GREEN_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-4">
                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                    </label>

                    <input type="radio" class="btn-check" name="color-theme-layout" id="cyan-theme-layout"
                        autocomplete="off" />
                    <label
                        class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
                        onclick="handleColorTheme('Cyan_Theme')" for="cyan-theme-layout" data-bs-toggle="tooltip"
                        data-bs-placement="top" data-bs-title="CYAN_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-5">
                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                    </label>

                    <input type="radio" class="btn-check" name="color-theme-layout" id="orange-theme-layout"
                        autocomplete="off" />
                    <label
                        class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
                        onclick="handleColorTheme('Orange_Theme')" for="orange-theme-layout" data-bs-toggle="tooltip"
                        data-bs-placement="top" data-bs-title="ORANGE_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-6">
                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                    </label>
                </div>

                <h6 class="mt-5 fw-semibold fs-4 mb-2">Layout Type</h6>
                <div class="d-flex flex-row gap-3 customizer-box" role="group">
                    <div>
                        <input type="radio" class="btn-check" name="page-layout" id="vertical-layout"
                            autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary rounded-2" for="vertical-layout">
                            <i class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Vertical
                        </label>
                    </div>
                    <div>
                        <input type="radio" class="btn-check" name="page-layout" id="horizontal-layout"
                            autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary rounded-2" for="horizontal-layout">
                            <i class="icon ti ti-layout-navbar fs-7 me-2"></i>Horizontal
                        </label>
                    </div>
                </div>

                <h6 class="mt-5 fw-semibold fs-4 mb-2">Container Option</h6>

                <div class="d-flex flex-row gap-3 customizer-box" role="group">
                    <input type="radio" class="btn-check" name="layout" id="boxed-layout" autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary rounded-2" for="boxed-layout">
                        <i class="icon ti ti-layout-distribute-vertical fs-7 me-2"></i>Boxed
                    </label>

                    <input type="radio" class="btn-check" name="layout" id="full-layout" autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary rounded-2" for="full-layout">
                        <i class="icon ti ti-layout-distribute-horizontal fs-7 me-2"></i>Full
                    </label>
                </div>

                <h6 class="fw-semibold fs-4 mb-2 mt-5">Sidebar Type</h6>
                <div class="d-flex flex-row gap-3 customizer-box" role="group">
                    <a href="javascript:void(0)" class="fullsidebar">
                        <input type="radio" class="btn-check" name="sidebar-type" id="full-sidebar"
                            autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary rounded-2" for="full-sidebar">
                            <i class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Full
                        </label>
                    </a>
                    <div>
                        <input type="radio" class="btn-check" name="sidebar-type" id="mini-sidebar"
                            autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary rounded-2" for="mini-sidebar">
                            <i class="icon ti ti-layout-sidebar fs-7 me-2"></i>Collapse
                        </label>
                    </div>
                </div>

                <h6 class="mt-5 fw-semibold fs-4 mb-2">Card With</h6>

                <div class="d-flex flex-row gap-3 customizer-box" role="group">
                    <input type="radio" class="btn-check" name="card-layout" id="card-with-border"
                        autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary rounded-2" for="card-with-border">
                        <i class="icon ti ti-border-outer fs-7 me-2"></i>Border
                    </label>

                    <input type="radio" class="btn-check" name="card-layout" id="card-without-border"
                        autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary rounded-2" for="card-without-border">
                        <i class="icon ti ti-border-none fs-7 me-2"></i>Shadow
                    </label>
                </div>
            </div>
        </div>

        <script>
            function handleColorTheme(e) {
                document.documentElement.setAttribute("data-color-theme", e);
            }
        </script>
    </div>

    <!--  Search Bar -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-bottom">
                    <input type="search" class="form-control" placeholder="Search here" id="search" />
                    <a href="javascript:void(0)" data-bs-dismiss="modal" class="lh-1">
                        <i class="ti ti-x fs-5 ms-3"></i>
                    </a>
                </div>
                <div class="modal-body message-body" data-simplebar="">
                    <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
                    <ul class="list mb-0 py-2">
                        <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                            <a href="javascript:void(0)">
                                <span class="text-dark fw-semibold d-block">Analytics</span>
                                <span class="fs-2 d-block text-body-secondary">/dashboards/dashboard1</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                            <a href="javascript:void(0)">
                                <span class="text-dark fw-semibold d-block">eCommerce</span>
                                <span class="fs-2 d-block text-body-secondary">/dashboards/dashboard2</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                            <a href="javascript:void(0)">
                                <span class="text-dark fw-semibold d-block">CRM</span>
                                <span class="fs-2 d-block text-body-secondary">/dashboards/dashboard3</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                            <a href="javascript:void(0)">
                                <span class="text-dark fw-semibold d-block">Contacts</span>
                                <span class="fs-2 d-block text-body-secondary">/apps/contacts</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                            <a href="javascript:void(0)">
                                <span class="text-dark fw-semibold d-block">Posts</span>
                                <span class="fs-2 d-block text-body-secondary">/apps/blog/posts</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                            <a href="javascript:void(0)">
                                <span class="text-dark fw-semibold d-block">Detail</span>
                                <span
                                    class="fs-2 d-block text-body-secondary">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                            <a href="javascript:void(0)">
                                <span class="text-dark fw-semibold d-block">Shop</span>
                                <span class="fs-2 d-block text-body-secondary">/apps/ecommerce/shop</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                            <a href="javascript:void(0)">
                                <span class="text-dark fw-semibold d-block">Modern</span>
                                <span class="fs-2 d-block text-body-secondary">/dashboards/dashboard1</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                            <a href="javascript:void(0)">
                                <span class="text-dark fw-semibold d-block">Dashboard</span>
                                <span class="fs-2 d-block text-body-secondary">/dashboards/dashboard2</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                            <a href="javascript:void(0)">
                                <span class="text-dark fw-semibold d-block">Contacts</span>
                                <span class="fs-2 d-block text-body-secondary">/apps/contacts</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                            <a href="javascript:void(0)">
                                <span class="text-dark fw-semibold d-block">Posts</span>
                                <span class="fs-2 d-block text-body-secondary">/apps/blog/posts</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                            <a href="javascript:void(0)">
                                <span class="text-dark fw-semibold d-block">Detail</span>
                                <span
                                    class="fs-2 d-block text-body-secondary">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                            <a href="javascript:void(0)">
                                <span class="text-dark fw-semibold d-block">Shop</span>
                                <span class="fs-2 d-block text-body-secondary">/apps/ecommerce/shop</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <div class="dark-transparent sidebartoggler"></div>
    <script src="../assets/js/vendor.min.js"></script>
    <!-- Import Js Files -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="../assets/js/theme/app.init.js"></script>
    <script src="../assets/js/theme/theme.js"></script>
    <script src="../assets/js/theme/app.min.js"></script>
    <script src="../assets/js/theme/sidebarmenu.js"></script>

    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

    <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

    <script defer>
        function datatable_load() {


            //
            //    File export                              //
            //
            $("#file_export").DataTable({
                dom: "Bfrtip",
                buttons: ["copy", "csv", "excel", "pdf", "print"],
            });
            $(
                ".buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel"
            ).addClass("btn btn-primary");

            //
            //  Show / hide columns dynamically                 //
            //

            var table = $("#show_hide_col").DataTable({
                scrollY: "200px",
                paging: false,
            });

            $("a.toggle-vis").on("click", function(e) {
                e.preventDefault();

                // Get the column API object
                var column = $("#show_hide_col")
                    .dataTable()
                    .api()
                    .column($(this).attr("data-column"));
                // Toggle the visibility
                column.visible(!column.visible());
            });

            //
            //    Column rendering                         //
            //
            $("#col_render").DataTable({
                columnDefs: [{
                        // The `data` parameter refers to the data for the cell (defined by the
                        // `data` option, which defaults to the column being worked with, in
                        // this case `data: 0`.
                        render: function(data, type, row) {
                            return data + " (" + row[3] + ")";
                        },
                        targets: 0,
                    },
                    {
                        visible: false,
                        targets: [3]
                    },
                ],
            });

            //
            //     Row grouping                            //
            //
            var table = $("#row_group").DataTable({
                pageLength: 10,
                columnDefs: [{
                    visible: false,
                    targets: 2
                }],
                order: [
                    [2, "asc"]
                ],
                displayLength: 25,
                drawCallback: function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: "current"
                    }).nodes();
                    var last = null;

                    api
                        .column(2, {
                            page: "current"
                        })
                        .data()
                        .each(function(group, i) {
                            if (last !== group) {
                                $(rows)
                                    .eq(i)
                                    .before(
                                        '<tr class="group"><td colspan="5">' + group + "</td></tr>"
                                    );

                                last = group;
                            }
                        });
                },
            });

            //
            // Order by the grouping
            //
            $("#row_group tbody").on("click", "tr.group", function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === "asc") {
                    table.order([2, "desc"]).draw();
                } else {
                    table.order([2, "asc"]).draw();
                }
            });

            //
            //    Multiple table control element           //
            //
            $("#multi_control").DataTable({
                dom: '<"top"iflp<"clear">>rt<"bottom"iflp<"clear">>',
            });

            //
            //    DOM/jquery events                        //
            //
            var table = $("#dom_jq_event").DataTable();

            $("#dom_jq_event tbody").on("click", "tr", function() {
                var data = table.row(this).data();
                alert("You clicked on " + data[0] + "'s row");
            });

            //
            //    Language File                            //
            //
            $("#lang_file").DataTable({
                language: {
                    url: "../../assets/js/datatable/German.json",
                },
            });

            //
            //    Complex headers with column visibility   //
            //

            $("#complex_head_col").DataTable({
                columnDefs: [{
                    visible: false,
                    targets: -1,
                }, ],
            });

            //
            //    Setting defaults                         //
            //
            var defaults = {
                searching: false,
                ordering: false,
            };

            $("#setting_defaults").dataTable($.extend(true, {}, defaults, {}));

            //
            //    Footer callback                          //
            //
            $("#footer_callback").DataTable({
                footerCallback: function(row, data, start, end, display) {
                    var api = this.api(),
                        data;

                    // Remove the formatting to get integer data for summation
                    var intVal = function(i) {
                        return typeof i === "string" ?
                            i.replace(/[\$,]/g, "") * 1 :
                            typeof i === "number" ?
                            i :
                            0;
                    };

                    // Total over all pages
                    total = api
                        .column(4)
                        .data()
                        .reduce(function(a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                    // Total over this page
                    pageTotal = api
                        .column(4, {
                            page: "current"
                        })
                        .data()
                        .reduce(function(a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                    // Update footer
                    $(api.column(4).footer()).html(
                        "$" + pageTotal + " ( $" + total + " total)"
                    );
                },
            });

            //
            //    Custom toolbar elements                  //
            //

            $("#custom_tool_ele").DataTable({
                dom: '<"toolbar">frtip',
            });

            $("div.toolbar").html("<b>Custom tool bar! Text/images etc.</b>");

            //
            //    Row created callback                     //
            //
            $("#row_create_call").DataTable({
                createdRow: function(row, data, index) {
                    if (data[5].replace(/[\$,]/g, "") * 1 > 150000) {
                        $("td", row).eq(5).addClass("highlight");
                    }
                },
            });
        }
        datatable_load();
    </script>



    <!-- jQuery -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> --}}

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Summernote JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.js"></script>

    <script>
        $(document).ready(function() {
            // Inicializar el editor Summernote extendido
            $('#my-textarea').summernote({
                height: 400, // Altura del editor
                placeholder: 'Escribe algo aquí...',
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript',
                        'subscript', 'clear'
                    ]],
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video', 'hr']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                    ['history', ['undo', 'redo']]
                ],
                fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Helvetica', 'Impact',
                    'Tahoma', 'Times New Roman', 'Verdana', 'Manrope', 'Montserrat', 'Montserrat-Bold',
                    'Montserrat-SemiBold', 'Montserrat-Regular'
                ], // Agrega Montserrat aquí
                fontNamesIgnoreCheck: ['Montserrat', 'Montserrat-Regular', 'Montserrat-Bold',
                    'Montserrat-SemiBold'
                ] // Ignora el chequeo para la fuente personalizada


            });
        });
    </script>
    <script>
        function reset_textarea() {

            document.getElementsByClassName('note-editable')[0].innerHTML = "";
        }
    </script>
    <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>

    <script defer>
        $(function() {
            $('.select2').select2()
        });
    </script>


    <!-- solar icons -->

    {{-- <script src="{{ asset('assets/js/plugins/colorpicker-init.js') }}"defer></script> --}}


</body>


</html>
