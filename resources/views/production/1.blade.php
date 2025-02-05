<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/jpg" href="{{ asset('../../resource/1738678985_67a222c98b11alogo%20comexlat%20rengo%20y%20blanco.svg') }}" />
    <!-- Core Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
    <title>ComexLat</title>
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ asset('assets/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/libs/aos/dist/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/template.css') }}" />

<style>
    .montserrat-<uniquifier> {
  font-family: "Montserrat", serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
}
</style>

    {{-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet"> --}}

    <script src="{{ asset('js/Book.js') }}"></script>
    <script src="{{ asset('js/axios.min.js') }}"></script>
    <script src="{{ asset('js/topic.js') }}"></script>
    <link href="{{ asset('css/template.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.0/build/css/intlTelInput.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="../../assets/libs/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets/libs/aos/dist/aos.css">

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.0/build/js/intlTelInput.min.js"></script>
</head>


<style type="text/css">
    @font-face {
        font-family: "RALEWAY-SEMIBOLD";
        src: url("{{ asset('fuente/RALEWAY-SEMIBOLD.TTF') }}");
        font-weight: 600;
    }
    @font-face {
        font-family: "RALEWAY-EXTRABOLD";
        src: url("{{ asset('fuente/RALEWAY-EXTRABOLD.TTF') }}");
        font-weight: 600;
    }
    @font-face {
        font-family: "RALEWAY-BOLD";
        src: url("{{ asset('fuente/RALEWAY-BOLD.TTF') }}");
        font-weight: 600;
    }

    @font-face {
        font-family: 'RALEWAY-LIGHT';
        src: url("{{ asset('fuente/RALEWAY-LIGHT.TTF') }}") format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'COOLVETICA-CONDENSED-RG';
        src: url("{{ asset('fuente/COOLVETICA-CONDENSED-RG.OTF') }}") format('truetype');
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
      font-family: 'RALEWAY-BLACK';
      src: url("../../fuente/RALEWAY-BLACK.TTF") format('truetype');
      font-weight: normal;
      font-style: normal;
  }
   
    @font-face {
      font-family: 'RALEWAY-REGULAR';
      src: url("../../fuente/RALEWAY-REGULAR.TTF") format('truetype');
      font-weight: normal;
      font-style: normal;
  }
    @font-face {
      font-family: 'COOLVETICA-RG';
      src: url("../../fuente/COOLVETICA-RG.OTF") format('truetype');
      font-weight: normal;
      font-style: normal;
  }
   
</style>
<style>
    .dt-buttons button {
        border-radius: 10px !important;
        font-family: RALEWAY-BOLD;

    }

    .dt-buttons button span {

        font-color: #ffffff !important;
    }
</style>
<script>



</script>
<body>

    <!-- Preloader -->
    <div class="preloader"><img src="{{ asset('../../resource/1738678985_67a222c98b11alogo%20comexlat%20rengo%20y%20blanco.svg') }}" alt="loader" class="lds-ripple img-fluid" /></div>


    <div id="main-wrapper flex-column">


        <!-- INICIO SECCION -->
<header class="header fixed-header" id="mainHeader" style="  background-color: rgba(0, 0, 0);">

   
    <nav class="navbar navbar-expand-lg py-0 row">
        <div class="col-9 py-3  py-md-0 py-lg-3  py-xl-0 col-lg-3 text-center " style="background-color:#F49A1A">
   

            <a data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" class="position-relative navbar-brand me-0 py-0 m-2 " href="/"> 
                <img data-aos="flip-right" data-aos-duration="1000" data-aos-delay="500" src="../../resource/1738678985_67a222c98b11alogo%20comexlat%20rengo%20y%20blanco.svg" alt="img-fluid" width="80%" style="margin-left:0%">
            </a>
        </div>
        <div class="container col-3 col-lg-9 text-start">

           

            <button class="navbar-toggler d-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="ti ti-menu-2 fs-9"></i>
            </button>
            <button class="navbar-toggler text-white border-0 p-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <i class="ti ti-menu-2 fs-9"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav align-items-center mb-2 mb-lg-0 mx-auto" style="">
                    <li class="nav-item" style="letter-spacing: 1px;"></li>
                    <li class="nav-item" style="letter-spacing: 1px;">
                        <a class="nav-link fs-7" aria-current="page" href="../" style="color: white">
                            <b 
                            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500"
                            style="word-spacing: 9px;font-family: COOLVETICA-RG;" id="inicio">+Inicio</b>
                        </a>
                    </li>
                    <li class="nav-item" style="letter-spacing: 1px;">
                        <a class="nav-link fs-7" aria-current="page" href="#" style="color: white;word-spacing: 9px;font-family:RALEWAY-REGULAR;">
                            <span 
                            data-aos="fade-down" data-aos-duration="1000" data-aos-delay="500"
                            style="font-family: COOLVETICA-RG;" id="nosotros">Nosotros</span>
                       </a>
                    </li>
                    <li class="nav-item" style="letter-spacing: 1px;">
                        <a class="nav-link fs-7" aria-current="page" href="#" style="color: white;word-spacing: 9px;font-family:RALEWAY-REGULAR;">
                            <span 
                            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500"
                            style="font-family: COOLVETICA-RG;" id="proyectos">Oportunidades</span>
                       </a>
                    </li>
                    
                 
                    <li class="nav-item" style="letter-spacing: 1px;">
                        <a class="nav-link fs-7" aria-current="page" href="#trabaja" style="color: white">
                           <span 
                           data-aos="fade-down" data-aos-duration="1000" data-aos-delay="500"
                           style="font-family: COOLVETICA-RG;word-spacing: 9px;" id="contacto">Contacto</span>
                        </a>
                    </li>

              
                    
 
                </ul>
            </div>
        </div>
    </nav>
</header>
@yield('content')

<footer class="text-center py-4" style="background: linear-gradient(to right, #F49A1A 80%, #ffac47); color: black;">

<div class="container">
        <div class="row text-start p-5">
            <div class="col-md-4 col-12">
                <span class=" text-black fs-8"style="font-family:COOLVETICA-RG;">Ubicación</span>
                <div class="subrayado mb-3"style="background-color:black;height:3px;margin-top:1px;width:25px"></div>
                <p class="text-white fs-5">Av. Circunvalación del Golf Los Incas<br>134 Patio Panorama, Santiago de Surco</p>
            </div>
            <div class="col-md-4 col-12">
                <span class=" text-black fs-8"style="font-family:COOLVETICA-RG;">Contáctanos</span>
                <p>&nbsp;</p>
                <p class="text-white fs-5">01- 9049838</p>
            </div>
            <div class="col-md-4 col-12">
                <a href="libro_reclamaciones">
                    <img src="../../resource/1738703730_67a28372819f7libro%20de%20reclamaciones.svg" alt=""width="50px">
                    <p></p>
                    <p class=" text-white fs-6"><i class="bi bi-book"></i> Libro de Reclamaciones</p>
                </a>
               
            </div>
        </div>
        <p class="mt-3 fs-7">AYBAR CORP, Todos los derechos reservados 2025</p>
    </div>
</footer>

<div class="offcanvas offcanvas-start matdash-lp-offcanvas" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="background-color: #000000e1">
    <div class="offcanvas-header p-4 text-center justify-content-center">
        <img src="../../resource/1738678985_67a222c98b11alogo%20comexlat%20rengo%20y%20blanco.svg" 
        alt="matdash-img" class="img-fluid" width="200" 
        style="filter: brightness(0) invert(1);">
   
    </div>
    <div class="offcanvas-body ">
        <ul class="navbar-nav  flex-grow-1 text-white">
            <li class="nav-item mt-0 text-center">
                <a class="nav-link fs-3  active" aria-current="page" href="/" id="inicio_2">Inicio</a>
            </li>
            <li class="nav-item mt-3 text-center">
                <a class="nav-link fs-3  active" aria-current="page" href="#" id="nosotros_2">Nosotros</a>
            </li>
            <li class="nav-item mt-3 text-center">
                <a class="nav-link fs-3  active" aria-current="page" href="#" id="nosotros__">Oportunidades</a>
            </li>
          
          
            <li class="nav-item mt-3 text-center">
                <a class="nav-link fs-3  active" aria-current="page" href="#trabaja" id="contacto_2">Contacto</a>
            </li>
        </ul>
        <a href="../../login" class="btn  w-100 py-2 mt-2 text-white" style="background-color: #F49A1A">Administrar</a>
        <br>
        <a href="../../logout" class="btn  w-100 py-2 mt-2 text-white" style="background-color: #F49A1A">Salir</a>
    </div>
</div>
<!-- FIN SECCION -->
<!-- Agrega este código dentro del <body> de tu página -->
 


<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Obtiene la URL actual
        const currentURL = window.location.pathname;

        // Mapeo de rutas a arrays de IDs
        const menuItems = {
            "/": ["inicio", "inicio_2"],
            "/nosotros": ["nosotros", "nosotros_2"],
            "/proyectos": ["proyectos","proyectos_2"],
            "/blog": ["blog","blogs_2"],
            "/contacto": ["contacto","contacto_2"]
        };

        // Verifica si la URL coincide con una clave en menuItems
        if (menuItems[currentURL]) {
            // Itera sobre los IDs asociados a la URL y aplica el estilo
            menuItems[currentURL].forEach(id => {
                const element = document.getElementById(id);
                if (element) {
                    element.style.textDecoration = "underline";
                    element.style.color = "#F49A1A";
                    element.style.textDecorationThickness = "3px"; // Grosor del subrayado
                    element.style.textDecorationColor = "white"; // Color blanco
                    element.style.textUnderlineOffset = "5px"; // Espaciado del subrayado
                }
            });
        }
    });
</script>



      

        
      
        <script>
            let chatInitialized = false;

            // Función para alternar la visibilidad de la ventana de chat
            function toggleChat() {
                const chatWindow = document.getElementById('chatbot-window');
                chatWindow.style.display = chatWindow.style.display === 'none' || chatWindow.style.display === '' ? 'flex' :
                    'none';

                // Enviar saludo al abrir el chat por primera vez
                if (!chatInitialized) {
                    const chatBox = document.getElementById('chat-box');
                    chatBox.innerHTML +=
                        `<div><strong>Aybar:</strong> ¡Hola! Soy tu asistente virtual. ¿En qué puedo ayudarte hoy?</div>`;
                    chatInitialized = true;
                }
            }

            // Función para enviar mensajes al chatbot
            async function sendMessage() {
                const input = document.getElementById('user-input').value;
                const chatBox = document.getElementById('chat-box');

                if (input.trim() === '') return; // Evitar mensajes vacíos

                // Mostrar el mensaje del usuario en el chat
                chatBox.innerHTML += `<div><strong>Tú:</strong> ${input}</div>`;
                document.getElementById('user-input').value = ''; // Limpiar el campo de entrada

                try {
                    const response = await axios.post('/chatPost', {
                        message: input
                    });
                    const reply = response.data.reply;

                    // Mostrar la respuesta del chatbot en el chat
                    chatBox.innerHTML += `<div><strong>Aybar:</strong> ${reply}</div>`;
                } catch (error) {
                    chatBox.innerHTML += `<div><strong>Aybar:</strong> Error al procesar la solicitud.</div>`;
                }

                // Desplazar el scroll hacia abajo automáticamente
                chatBox.scrollTop = chatBox.scrollHeight;
            }

            // Función para manejar el evento de presionar Enter
            function handleKeyPress(event) {
                if (event.key === 'Enter') {
                    sendMessage();
                }
            }
        </script>








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

    {{-- <script src="../../assets/js/plugins/animation-init.js"></script> --}}
    <script src="../../assets/libs/aos/dist/aos.js"></script>
    <script src="../../assets/libs/owl.carousel/dist/owl.carousel.min.js"></script>
    <script>
        const input = document.querySelector("#phone");

        // Inicialización de intl-tel-input con Perú como valor predeterminado
        const init = window.intlTelInput(input, {
            initialCountry: "pe", // Código de país ISO 3166-1 Alpha-2 para Perú
            separateDialCode: true, // Muestra el código de país separado
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.0/build/js/utils.js" // Para validaciones
        });
    </script>
    <script>
        const input_2 = document.querySelector("#phone_2");

        // Inicialización de intl-tel-input con Perú como valor predeterminado
        const init_2 = window.intlTelInput(input_2, {
            initialCountry: "pe", // Código de país ISO 3166-1 Alpha-2 para Perú
            separateDialCode: true, // Muestra el código de país separado
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.0/build/js/utils.js" // Para validaciones
        });


//         window.addEventListener("load", function() {
//     const header = document.getElementById("mainHeader");

//     if (window.innerWidth >= 992) { // LG en Bootstrap (>=992px)
//       header.classList.add("fixed-header");
//     }
//   });

//reinicia animacion AOS
$(document).ready(function () {
    // Función para reiniciar AOS en TODOS los elementos con atributos data-aos
    function restartAOS() {
        $("[data-aos!='flip-left']").removeClass("aos-animate"); // Quitar animación
        
        setTimeout(() => {
            $("[data-aos]").addClass("aos-animate"); // Volver a agregar animación
            AOS.refreshHard(); // Refrescar AOS para que vuelva a aplicar los efectos
        }, 1000);
    }

    // Ejecutar cada 3 segundos
    setInterval(restartAOS, 30000);
});





    </script>
      <style>
        .subrayado {
            width: 60px;
            /* Tamaño del subrayado */
            height: 5px;
            /* Grosor */
            background-color: #F4A623;
            /* Naranja */
            margin-top: -10px;
            /* Ajuste para acercarlo al texto */
        }
    </style>
</body>

</html>
