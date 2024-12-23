<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/jpg" href="{{ asset('ayba/favicon.png') }}" />
    <!-- Core Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
    <title>AybarCorp</title>
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ asset('assets/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/libs/aos/dist/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/template.css') }}" />


    {{-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet"> --}}

    <script src="{{ asset('js/customer.js') }}"></script>
    <script src="{{ asset('js/axios.min.js') }}"></script>
    <link href="{{ asset('css/template.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.0/build/css/intlTelInput.css">

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.0/build/js/intlTelInput.min.js"></script>
</head>


<style type="text/css">
    @font-face {
        font-family: "Montserrat-Bold";
        src: url("{{ asset('fuente_montserrat/Montserrat-Bold.ttf') }}");
        font-weight: 600;
        font-style: bold;
    }

    @font-face {
        font-family: 'Montserrat-Regular';
        src: url("{{ asset('fuente_montserrat/Montserrat-Regular.ttf') }}") format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'Montserrat-BoldItalic';
        src: url("{{ asset('fuente_montserrat/Montserrat-BoldItalic.ttf') }}") format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'Montserrat-Medium';
        src: url("{{ asset('fuente_montserrat/Montserrat-Medium.ttf') }}") format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'Montserrat-SemiBold';
        src: url("{{ asset('fuente_montserrat/Montserrat-SemiBold.ttf') }}") format('truetype');
        font-weight: normal;
        font-style: normal;
    }
</style>
<style>
    .dt-buttons button {
        border-radius: 10px !important;
        font-family: Montserrat-Bold;

    }

    .dt-buttons button span {

        font-color: #ffffff !important;
    }
</style>

<body>

    <!-- Preloader -->
    <div class="preloader"><img src="{{ asset('ayba/1.png') }}" alt="loader" class="lds-ripple img-fluid" /></div>

    <div id="mycontent">

    </div>
    <div id="main-wrapper flex-column">


        <!-- INICIO SECCION -->
<div style="background-color: #13434d; height: 60px;" class="pt-2 d-none d-xs-flex d-lg-flex  justify-content-center align-items-center">
        <div class="text-center m-5 " style="letter-spacing: 1px;word-spacing: 5px; ">
            <b style="color:white; ">ENCUENTRA TU LOTE SOÑADO AQUÍ  </b>
            <a href="https://bit.ly/PGWSP" class="  btn bg-white" style="color:#13434d;height: 40px; margin-bottom: 10px;
     border-radius: 100px;width: 300px;
     ">
                <b>MÁS INFORMACIÓN</b>
            </a>
        </div>
    </div>
<header class="header fixed-header">
    <nav class="navbar navbar-expand-lg py-0">
        <div class="container">

            <a class="position-relative navbar-brand me-0 py-0 m-2 " href="https://aybar.credilotesperu.com"> 
                <img src="../ayba/1.png" alt="img-fluid" width="80px" style="margin-left:0%">
            </a>

            <button class="navbar-toggler d-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="ti ti-menu-2 fs-9"></i>
            </button>
            <button class="navbar-toggler border-0 p-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <i class="ti ti-menu-2 fs-9"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav align-items-center mb-2 mb-lg-0 mx-auto" style="letter-spacing: 1px;">
                    <li class="nav-item"></li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/" style="color: #FFA726">
                            <b style="word-spacing: 9px;">INICIO</b>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="nosotros" style="color: #13434d">
                            <b style="word-spacing: 9px;">NOSOTROS</b>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="proyectos">                            PROYECTOS                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="https://aybar.credilotesperu.com/blog" style="color: #13434d">
                            <b style="word-spacing: 9px;">BLOG</b>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="https://aybar.credilotesperu.com/contacto" style="color: #13434d">
                            <b style="word-spacing: 9px;">CONTÁCTANOS</b>
                        </a>
                    </li>

                    <li class="nav-item ms-2">
                        <a class="btn btn-hover-shadow" href="https://pagos.aybarcorp.com" style="color:white; border-radius:100px; background-color:#FFA726; width: 190px;">
                            <b>PAGA TU LOTE</b>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
@yield('content')
<div class="container-fluid py-1" style="background-color: #054E5C;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-5 col-lg-6 col-xl-4 justify-content-center text-center text-lg-start text-md-start mt-10">
                <h3 style="margin-top:30px; margin-left:0px; color:#FFA726;"><span style="font-family: Montserrat;">﻿</span>Contáctanos</h3><ul class="text-white mt-4"><li><i class=""></i><div style="text-align: left;"><img src="https://aybar.credilotesperu.com/resource/1734622413_icono%20telefono.png" class="note-float-left" style="color: rgba(var(--bs-white-rgb),var(--bs-text-opacity)); font-family: Montserrat, sans-serif; font-weight: var(--bs-body-font-weight); width: 21.1153px; height: 20.6562px; float: left;"></div></li><li><div style="text-align: left;"><span style="color: rgba(var(--bs-white-rgb),var(--bs-text-opacity)); font-family: Montserrat, sans-serif; font-weight: var(--bs-body-font-weight); font-size: 14px;">(+51) 970 579 363</span></div><div style="text-align: left;"><img src="https://aybar.credilotesperu.com/resource/1734622413_icono%20telefono.png" style="width: 22.5px; height: 22.0027px; float: left;" class="note-float-left"><span style="color: rgba(var(--bs-white-rgb),var(--bs-text-opacity)); font-family: Montserrat, sans-serif; font-weight: var(--bs-body-font-weight); font-size: 14px;">(+51) 977 637 351</span></div></li>
                    <li><img src="https://aybar.credilotesperu.com/resource/1734622376_icono%20mapa.png" style="text-align: left; width: 22.5px; height: 22.0217px; float: left;" class="note-float-left"><div style="text-align: left;"><span style="color: rgba(var(--bs-white-rgb),var(--bs-text-opacity)); font-family: Montserrat, sans-serif; font-weight: var(--bs-body-font-weight); font-size: 14px;"><span style="color: rgba(var(--bs-white-rgb),var(--bs-text-opacity)); font-weight: var(--bs-body-font-weight);">Jr. Los Viñedos 170, La Molina</span></span><br></div></li>
                    <li><img src="https://aybar.credilotesperu.com/resource/1734622376_icono%20mapa.png" style="text-align: left; width: 28.5px; height: 27.889px; float: left;" class="note-float-left"><div style="text-align: left;"><span style="font-family: Montserrat, sans-serif; font-size: 14px;">Av. Circunvalación Del Golf Los Incas 134&nbsp;</span><span style="font-family: Montserrat, sans-serif; font-size: 14px; color: rgba(var(--bs-white-rgb),var(--bs-text-opacity)); font-weight: var(--bs-body-font-weight);">Patio Panorama, Santiago de Surco</span></div></li>
                </ul>
            </div>

            <div class="col-sm-12 col-md-7 col-lg-6 col-xl-4 justify-content-center text-center text-lg-start text-md-end mt-10">
                <h3 style="margin-top:30px; margin-left:0px; color:#FFA726;">Descubre más</h3>
                <p></p>
                <div class="row">
                    <div class="col-6">
                        <ul class="text-white mt-4">
                            <li><a href="../" style="font-family: Montserrat, sans-serif; font-weight: var(--bs-body-font-weight); color: white;"><span style="font-family: Montserrat; font-size: 14px;">Inicio</span></a></li>
                            <li><a style="color:white" href="../contacto"><span style="font-family: Montserrat; font-size: 14px;">Contáctanos</span></a></li>
                           <li><a style="color:white" href="../nosotros"><span style="font-family: Montserrat; font-size: 14px;">Quiénes somos</span></a></li>
                       <li><a style="color:white" href="#"><span style="font-family: Montserrat; font-size: 14px;">Preguntas frecuentes</span></a></li>
                      
                   
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="text-white mt-4">
<li><a style="color:white" href="../blog"><span style="font-family: Montserrat; font-size: 14px;">Blog</span></a></li>
                          <li><a style="color:white" href="../proyectos"><span style="font-family: Montserrat; font-size: 14px;">Proyectos</span></a></li>
                          <li><a style="color:white" href="#"><span style="font-family: Montserrat; font-size: 14px;">Términos y condiciones</span></a></li>
                          <li><a style="color:white" href="#"><span style="font-family: Montserrat; font-size: 14px;">Libro de reclamaciones</span></a></li>
                         
                           
                    
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mt-4 text-center col-xl-4 mt-10">
                <img src="../ayba/4.png" width="40%" alt="" srcset="" style="width: 152.5px; height: 152.5px;"><br>
<a href="https://www.facebook.com/aybarcorpoficial" target="_blank"> <img src="https://aybar.credilotesperu.com/resource/1734378917_icons8-facebook-50.png" width="45px" alt="">
</a>
<a href="https://www.tiktok.com/@aybarcorpoficial" target="_blank">   <img src="https://aybar.credilotesperu.com/resource/1734379420_icons8-tiktok-50.png" width="45px" alt="">
</a>
     <a href="https://www.instagram.com/aybarcorpoficial/" target="_blank">   <img src="https://aybar.credilotesperu.com/resource/1734379216_icons8-instagram-50.png" width="45px" alt="">
</a>         
            <a href="https://www.linkedin.com/company/aybarcorpoficial" target="_blank">   <img src="https://aybar.credilotesperu.com/resource/1734379160_icons8-linkedin-50.png" width="45px" alt="">
</a>             
                
                <p></p>
            </div>
        </div>
    </div>
</div>
<footer class="footer-part pt-4 pb-3 py-2" style="background-color:#13434d;">

            <div class="container">
                <div class="justify-content-center">

                    <div class="text-center">


                        <p class="mb-0 text-white">
                            <a class="d-none d-sm-none d-sm-block d-md-block d-lg-block  d-xl-block display-1 fs-4 text-white text-hover-primary  border-primary" href="https://anthonycode.com/" target="_blank">
                                Copyright 2025, Aybar Corp&nbsp;&nbsp; | &nbsp;&nbsp; Todos los Derechos reservados
                            </a>
                            <a class="d-sm-none  display-1 fs-2 text-center text-white text-hover-primary  border-primary" href="https://anthonycode.com/" target="_blank">
                                Copyright 2025, Aybar Corp <br> Todos los Derechos reservados
                            </a>
                        </p>
                    </div>

                </div>
            </div>
        </footer>
<div class="whatsapp-container">
        <div class="whatsapp-message">
            ¿Necesitas ayuda?
        </div>
        <div class="whatsapp-btn">
            <a href="https://bit.ly/PGWSP" target="_blank" title="Enviar mensaje por WhatsApp">

                <i class="ti ti-brand-whatsapp"></i>
            </a>
        </div>

    </div>
<div class="d-none d-md-block">
    <div class="social-container p-2 pt-3 pb-3" style="background-color: #FFA726; border-top-right-radius: 20px; border-bottom-right-radius: 20px;">

        <a href="https://www.facebook.com/aybarcorpoficial" target="_blank" class="social-button">
            <img src="https://aybar.credilotesperu.com/resource/1734378917_icons8-facebook-50.png" alt="Facebook">
        </a>
        <a href="https://www.instagram.com/aybarcorpoficial" target="_blank" class="social-button">
            <img src="https://aybar.credilotesperu.com/resource/1734379216_icons8-instagram-50.png" alt="Instagram">
        </a>
        <a href="https://www.linkedin.com/company/aybarcorpoficial" target="_blank" class="social-button">
            <img src="https://aybar.credilotesperu.com/resource/1734379160_icons8-linkedin-50.png" alt="LinkedIn">
        </a>
        
    </div>
</div>
<div class="offcanvas offcanvas-start matdash-lp-offcanvas" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header p-4">
        <img src="/ayba/1.png" alt="matdash-img" class="img-fluid" width="150">
    </div>
    <div class="offcanvas-body p-4">
        <ul class="navbar-nav justify-content-end flex-grow-1">
            <li class="nav-item mt-3">
                <a class="nav-link fs-3 text-dark active" aria-current="page" href="https://aybar.credilotesperu.com">Inicio</a>
            </li>
            <li class="nav-item mt-3">
                <a class="nav-link fs-3 text-dark active" aria-current="page" href="https://aybar.credilotesperu.com/nosotros">Nosotros</a>
            </li>
            <li class="nav-item mt-3">
                <a class="nav-link fs-3 text-dark active" aria-current="page" href="https://aybar.credilotesperu.com/proyectos">Proyectos</a>
            </li>
            <li class="nav-item mt-3">
                <a class="nav-link fs-3 text-dark active" aria-current="page" href="https://aybar.credilotesperu.com/blog">Blogs</a>
            </li>
        </ul>
        <a href="https://aybar.credilotesperu.com/login" class="btn btn-primary w-100 py-2">Administrar</a>
        <br>
        <a href="https://aybar.credilotesperu.com/logout" class="btn btn-secondary w-100 py-2">Salir</a>
    </div>
</div>
<!-- FIN SECCION -->


    </div>



    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme/app.init.js') }}"></script>
    <script src="{{ asset('assets/js/theme/theme.js') }}"></script>
    <script src="{{ asset('assets/js/theme/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme/sidebarmenu.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    <script src="{{ asset('assets/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/libs/aos/dist/aos.js') }}"></script>
    <script src="{{ asset('assets/js/landingpage/landingpage.js') }}"></script>

    <script type="module" src="https://cdn.jsdelivr.net/npm/@justinribeiro/lite-youtube@1/lite-youtube.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


    
    <script>
        const input = document.querySelector("#phone");

        // Inicialización de intl-tel-input con Perú como valor predeterminado
        const init = window.intlTelInput(input, {
            initialCountry: "pe", // Código de país ISO 3166-1 Alpha-2 para Perú
            separateDialCode: true, // Muestra el código de país separado
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.0/build/js/utils.js" // Para validaciones
        });
    </script>
</body>

</html>
