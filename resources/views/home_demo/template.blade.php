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
    <title>ComexLat</title>
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ asset('assets/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/libs/aos/dist/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/template.css') }}" />


    {{-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet"> --}}
    <!-- Summernote CSS -->


    <script src="{{ asset('js/section.js') }}"></script>
    <script src="{{ asset('js/customer_3.js') }}"></script>
    <script src="{{ asset('js/axios.min.js') }}"></script>
    <link href="{{ asset('css/template.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.0/build/css/intlTelInput.css">

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.0/build/js/intlTelInput.min.js"></script>
</head>
<style type="text/css">
    @font-face {
        font-family: "RALEWAY-SEMIBOLD";
        src: url("fuente_2")
        src: url("{{ asset('fuente_2/Raleway-SemiBold.ttf') }}");
        font-weight: 600;
    }
    @font-face {
        font-family: "RALEWAY-EXTRABOLD";
        src: url("{{ asset('fuente_2/Raleway-ExtraBold.ttf') }}");
        font-weight: 600;
    }
    @font-face {
        font-family: "RALEWAY-BOLD";
        src: url("{{ asset('fuente_2/Raleway-Bold.ttf') }}");
        font-weight: 600;
    }

    @font-face {
        font-family: 'RALEWAY-LIGHT';
        src: url("{{ asset('fuente_2/Raleway-Light.ttf') }}") format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'COOLVETICA-CONDENSED-RG';
        src: url("{{ asset('fuente_2/Raleway-VariableFont_wght.ttf') }}") format('truetype');
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
      font-family: 'RALEWAY-BLACK';
      src: url("../../fuente_2/Raleway-Black.ttf") format('truetype');
      font-weight: normal;
      font-style: normal;
  }

    @font-face {
      font-family: 'RALEWAY-REGULAR';
      src: url("../../fuente_2/Raleway-Regular.ttf") format('truetype');
      font-weight: normal;
      font-style: normal;
  }
    @font-face {
      font-family: 'COOLVETICA-RG';
      src: url("../../fuente_2/Raleway-VariableFont_wght.ttf") format('truetype');
      font-weight: normal;
      font-style: normal;
  }

</style>


{{-- <style>
    body {
        font-family: 'Montserrat', sans-serif;
        /* Aplica Montserrat como fuente principal */
        font-size: 16px;
        /* Tamaño base del texto */

        line-height: 1.6;
        /* Altura de línea para mejor legibilidad */
    }
</style> --}}

  <style>
    .dt-buttons button {
        border-radius: 10px !important;
        font-family: RALEWAY-BOLD;

    }

    .dt-buttons button span {

        font-color: #ffffff !important;
    }

</style>
<body >

    <!-- Preloader -->
    <div class="preloader"><img src="{{ asset('ayba/1.png') }}" alt="loader" class="lds-ripple img-fluid" /></div>

<div id="mycontent">

</div>
    <div id="main-wrapper flex-column">



        @php
            $i = 0;
        @endphp

        @foreach ($section_template as $section_templates)
            @php
                $i = $i + 1;
                echo $section_templates->code;
            @endphp
            @if ($section_templates->nivel=="1")
                    @yield("content");
            @endif

        @endforeach










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
     const init =   window.intlTelInput(input, {
            initialCountry: "pe", // Código de país ISO 3166-1 Alpha-2 para Perú
            separateDialCode: true, // Muestra el código de país separado
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.0/build/js/utils.js" // Para validaciones
        });
    </script>
</body>

</html>
