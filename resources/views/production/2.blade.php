@extends('production.1')

<style>
    .bg-responsive {
        background-image: url('../resource/1738618824_67a137c8cbe2fbanner-comexlat.jpg');
        background-repeat: no-repeat;
        background-size: 100%;
        height: 100vh;

        /* height: 85vh; */
    }

    /* Para pantallas medianas (tablets) */
    @media (max-width: 1292px) {
        .bg-responsive {
            width: 100%;
            height: 80vh;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-image: url('../../resource/1738619096_67a138d8b8f8fbanner-comexlat-tablet.jpg');
        }
    }

    /* Para pantallas pequeñas (móviles) */
    @media (max-width: 987px) {
        .bg-responsive {
            width: 10%;
            height: 40vh;
            /* height: 90vh; */
            background-position: center;
            background-repeat: no-repeat;
            /* background-size: contain; */
            background-image: url('../../resource/1738619153_67a13911c95a7banner-comexlat-celular.jpg');
        }
    }
</style>
@section('content')
    <form method="post" id="Customer">
        @csrf

        <!-- INICIO SECCION -->
<div id="carouselExample" class="carousel slide text-white pointer-event" data-bs-ride="carousel" data-bs-interval="30000">
            
    
    <div class="carousel-inner" style="display: flex; align-items: center;">
        
                <!-- Diapositiva 1 -->
                <div class=" carousel-item text-center pb-5 active bg-responsive">
                    
                </div>
                <span style="font-size: 9px;">

                </span><!-- Diapositiva 2: Video de YouTube -->
                <div class="carousel-item position-relative " style="height: 756px;">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-xl-8  bg-black ">

                            <iframe src="https://www.youtube.com/embed/68tbz0AyBUs?autoplay=1&amp;mute=1&amp;loop=1&amp;playlist=68tbz0AyBUs&amp;controls=0&amp;showinfo=0&amp;modestbranding=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="" style="object-fit: cover;width:100%;height:773px"></iframe>
                        </div>
                      
                    </div>
                </div>
               
            </div>
          <!-- Indicadores del Carrusel -->
          <div class="carousel-indicators" style="margin-top:-100px; position: relative;">
            <!-- Indicador Activo (Relleno) -->
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" 
                class="active"
                aria-current="true"
                aria-label="Diapositiva 1"
                style="background-color: white; 
                       border: solid 3px white; 
                       width: 15px; 
                       height: 15px; 
                       border-radius: 50%; 
                       margin-right: 10px;">
            </button>
        
            <!-- Indicador Inactivo (Borde) -->
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" 
                class=""
                aria-label="Diapositiva 2"
                style="background-color: transparent; 
                       border: solid 3px white; 
                       width: 15px; 
                       height: 15px; 
                       border-radius: 50%; 
                       margin-right: 10px;">
            </button>
        
          
        </div>
        
            
        </div>
        <p></p>


        <div class=" text-center mt-5"style="background-color:#E8ECF3;">
            <div class="container py-5">

   
            <!-- Título -->
            <h2 class="fw-bold text-uppercase display-1" style="color: #F7931E; margin-bottom: 30px;">
             <b> SÉ NUESTRO <br> SOCIO COMERCIAL</b>   
            </h2>
        
            <div class="row g-4">
                <!-- Tarjeta 1 -->
                <div class="col-lg-4">
                    <div class="p-4 text-center" style="border-radius: 0px 80px 0px 80px; background-color: white; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
                        <img src="../../resource/1738620627_67a13ed3427a1altas%20comisiones.svg" alt="Altas Comisiones" class="mb-3" width="100">
                        <h4 class="fw-bold" style="color: #F7931E;">ALTAS COMISIONES</h4>
                        <hr style="width: 50px; margin: auto; border: 1px solid #F7931E;">
                        <p style="color: #b6b6b6;font-family:RALEWAY-REGULAR" class="px-3 mt-4 fs-3 ">
                            ¡Gana por tus resultados! El sector inmobiliario te ofrece una de las  mejores oportunidades 
                            para generar ingresos extraordinarios en base a tus ventas.
                        </p>
                        <a href="#" class="d-inline-block text-white  fs-6 px-5 py-3 mt-3" 
                           style="background-color: #F7931E; border-radius: 30px; text-decoration: none;font-family:COOLVETICA-RG">
                          Regístrate ahora +
                        </a>
                    </div>
                </div>
        
                <!-- Tarjeta 2 -->
                <div class="col-lg-4">
                    <div class="p-4 text-center" style="border-radius: 0px 80px 0px 80px; background-color: #F7931E;color: white; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
              
                        <img src="../../resource/1738620627_67a13ed3427a1altas%20comisiones.svg" alt="Crecimiento Profesional" class="mb-3" width="100">
                        <h4 class="fw-bold text-white">CRECIMIENTO PROFESIONAL</h4>
                        <hr style="width: 50px; margin: auto; border: 1px solid white;">
                        <p class="px-3 mt-4 fs-3 text-justify"style="font-family:RALEWAY-REGULAR">
                            Desarrolla habilidades de negociación, ventas y networking. ¡Conviértete en un experto en un sector con alta demanda!
                        </p>
                        <a href="#" class="mt-5 d-inline-block fs-6 px-5 py-3 mt-3" 
                           style="background-color: white; color: #F7931E; border-radius: 30px; text-decoration: none;font-family:COOLVETICA-RG">
                           Regístrate ahora + 
                        </a>
                    </div>
                </div>
        
                <!-- Tarjeta 3 -->
                <div class="col-lg-4 h-100">
                    <div class="p-4 text-center" style="border-radius: 0px 80px 0px 80px; background-color: white; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
                        <img src="../../resource/1738620627_67a13ed3427a1altas%20comisiones.svg" alt="Flexibilidad y Autonomía" class="mb-3" width="100">
                        <h4 class="fw-bold" style="color: #F7931E;">FLEXIBILIDAD Y AUTONOMÍA</h4>
                        <hr style="width: 50px; margin: auto; border: 1px solid #F7931E;">
                        <p style="color: #b6b6b6;font-family:RALEWAY-REGULAR" class="px-3 mt-4 fs-3 text-justify">
                            Organiza tu tiempo como desees. Sé dueño de tu agenda y trabaja desde cualquier lugar, 
                            mientras construyes <br>tu  carrera profesional.
                        </p>
                        <a href="#" class="mt-4 d-inline-block text-white fs-6 px-5 py-3 mt-3" 
                           style="background-color: #F7931E; border-radius: 30px; text-decoration: none;font-family:COOLVETICA-RG">
                         Regístrate ahora +
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>








<div class="container-fluid text-light py-3 bg-white" data-aos="slide-up" data-aos-delay="300" data-aos-duration="1500">
            <div class="text-center">
                <div class="container py-1">
                    <h4 class="d-sm-none text-center display-10" style="margin:20px; font-family: RALEWAY-SEMIBOLD;">
                        <span style="color:#03424E; word-spacing: 10px; letter-spacing: 5px;">VIVE EN LA</span><br>
                        <b style="font-family: RALEWAY-SEMIBOLD; word-spacing: 10px; letter-spacing: 5px;">MEJOR
                            ZONA</b>
                    </h4>
                    <h4 class="d-none d-sm-block text-center display-6" style="margin:20px; font-family: RALEWAY-SEMIBOLD;">
                        <span style="color:#03424E; word-spacing: 10px; letter-spacing: 15px;">VIVE EN LA</span><br>
                        <b style="font-family: RALEWAY-SEMIBOLD; word-spacing: 10px; letter-spacing: 15px;">MEJOR
                            ZONA</b>
                    </h4>
                    <div class="subrayado mx-auto"></div>

                    <p>
                        &nbsp;&nbsp;
                    </p>
                    <!-- Carrusel para pantallas pequeñas y medianas -->
                    <div id="responsiveCarousel" class="carousel slide d-lg-none pointer-event" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <!-- Primera diapositiva -->
                            <div class="carousel-item active">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-4 mb-3">
                                        <lite-youtube videoid="rdxrSIrZISE" style="width: 100%;border:solid 1px #F4A623" class="rounded-1 border-2" title="Play: Video"></lite-youtube>
                                    </div>

                                </div>
                            </div>
                            <!-- Segunda diapositiva -->
                            <div class="carousel-item">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-4 mb-3">
                                        <lite-youtube videoid="uuw6UDjl0oo" style="width: 100%;border:solid 1px #F4A623" class="rounded-1 border-2" title="Play: Video"></lite-youtube>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-4 mb-3">
                                        <lite-youtube videoid="aguyG7M828M" style="width: 100%;border:solid 1px #F4A623" class="rounded-1 border-2" title="Play: Video"></lite-youtube>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Controles del carrusel -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#responsiveCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#responsiveCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Siguiente</span>
                        </button>
                    </div>

                    <!-- Grilla para pantallas grandes -->
                    <div class="row d-none d-lg-flex mt-4">
                        <div class="col-lg-4 mb-3">
                            <lite-youtube videoid="rdxrSIrZISE" autoload="" posterquality="maxresdefault" style="width: 100%;border:solid 1px #F4A623" class="rounded-1 border-2" title="Play: Video"></lite-youtube>

                        </div>
                        <div class="col-lg-4 mb-3">
                            <lite-youtube videoid="uuw6UDjl0oo" autoload="" style="width: 100%;border:solid 1px #F4A623" class="rounded-1 border-2" title="Play: Video"></lite-youtube>

                        </div>
                        <div class="col-lg-4 mb-3">
                            <lite-youtube videoid="aguyG7M828M" autoload="" style="width: 100%;border:solid 1px #F4A623" class="rounded-1 border-2" title="Play: Video"></lite-youtube>

                        </div>

                    </div>
                </div>




            </div>

            <div>

            </div>



        </div>
<div data-aos="fade-up" data-aos-delay="300" data-aos-duration="500" class=" py-4" style="background-color:#f7f7f7">
            <div class="container">
                <h4 class="d-sm-none text-center display-10" style="margin:20px;font-family:RALEWAY-SEMIBOLD;letter-spacing:2px">
                    <span style="color:#03424E">¿POR QUÉ</span><br> COMPRAR UN LOTE?
                </h4>
                <h4 class="d-none d-sm-block text-center display-6" style="margin:20px;font-family:RALEWAY-SEMIBOLD;letter-spacing:15px">
                    <span style="color:#03424E">¿POR QUÉ</span><br> COMPRAR UN LOTE?
                </h4>
                <div class="subrayado mx-auto my-md-1 mb-sm-0"></div>

                <!-- Carrusel (visible solo en pantallas pequeñas) -->
                <div id="mobileCarousel" class="carousel slide d-md-none pointer-event" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-inner">
                        <!-- Tarjeta 1 -->
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center">
                                <div class="card overflow-hidden" style="border-radius: 20px; width: 18rem;background-color:#f7f7f7">
                                    <div class="el-card-item pb-5" style=" border-radius: 20px;">
                                        <div class="el-card-avatar mb-3 w-100 overflow-hidden d-flex position-relative text-center justify-content-center" style="margin-top: 5vh;">
                                            <img src="../resource/1738095847_67993ce7b34f0inversion%20segura.svg" alt="Inversion Segura" style="width: 50%;border-radius:0px">
                                        </div>
                                        <div class="el-card-content text-center">
                                            <h4 class="mb-0 card-title" style="color:#03424E">INVERSIÓN<br>SEGURA</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tarjeta 2 -->
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center">
                                <div class="card overflow-hidden" style="border-radius: 20px; width: 18rem;background-color:#f7f7f7">
                                    <div class="el-card-item pb-5" style=" border-radius: 20px;">
                                        <div class="el-card-avatar mb-3 w-100 overflow-hidden d-flex position-relative text-center justify-content-center" style="margin-top: 5vh;">
                                            <img src="../resource/1738096177_67993e314cb8drentabilidad%20a%20largo%20plazo.svg" alt="Rentabilidad a Largo Plazo" style="width: 50%;border-radius:0px">
                                        </div>
                                        <div class="el-card-content text-center">
                                            <h4 class="mb-0 card-title" style="color:#03424E">RENTABILIDAD<br>A LARGO PLAZO
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tarjeta 3 -->
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center">
                                <div class="card overflow-hidden" style="border-radius: 20px; width: 18rem;background-color:#f7f7f7">
                                    <div class="el-card-item pb-5" style=" border-radius: 20px;">
                                        <div class="el-card-avatar mb-3 w-100 overflow-hidden d-flex position-relative text-center justify-content-center" style="margin-top: 5vh;">
                                            <img src="../resource/1738096259_67993e83879f3patrimonio%20para%20tu%20familia.svg" alt="Patrimonio Familiar" style="width: 50%;border-radius:0px">
                                        </div>
                                        <div class="el-card-content text-center">
                                            <h4 class="mb-0 card-title" style="color:#03424E">PATRIMONIO PARA<br>TU FAMILIA
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tarjeta 4 -->
                        <div class="carousel-item active">
                            <div class="d-flex justify-content-center">
                                <div class="card overflow-hidden" style="border-radius: 20px; width: 18rem;background-color:#f7f7f7">
                                    <div class="el-card-item pb-5" style=" border-radius: 20px;">
                                        <div class="el-card-avatar mb-3 w-100 overflow-hidden d-flex position-relative text-center justify-content-center" style="margin-top: 5vh;">
                                            <img src="../resource/1738096338_67993ed21e9e1alta%20revalorizacion.svg" alt="Alta Revalorizacion" style="width: 50%;border-radius:0px">
                                        </div>
                                        <div class="el-card-content text-center">
                                            <h4 class="mb-0 card-title" style="color:#03424E">ALTA<br>REVALORIZACIÓN</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Controles del Carrusel -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#mobileCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#mobileCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <!-- Grid de tarjetas (visible en pantallas medianas y grandes) -->
                <div class="row d-none d-md-flex el-element-overlay">
                    <div class="col-md-6 col-lg-3 mb-4 " data-aos="flip-down" data-aos-delay="300" data-aos-duration="1000">
                        <div class="card overflow-hidden" style="border-radius: 20px;background-color:#f7f7f7">
                            <div class="el-card-item pb-5" style=" border-radius: 20px;">
                                <div class="el-card-avatar mb-3 w-100 overflow-hidden d-flex position-relative text-center justify-content-center" style="margin-top: 5vh;">
                                    <img src="../resource/1738095847_67993ce7b34f0inversion%20segura.svg" alt="Inversion Segura" style="width: 50%;border-radius:0px">
                                </div>
                                <div class="el-card-content text-center">
                                    <h4 class="mb-0 card-title" style="color:#03424E">INVERSION<br>SEGURA</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4" data-aos="flip-down" data-aos-delay="300" data-aos-duration="1000">
                        <div class="card overflow-hidden" style="border-radius: 20px;background-color:#f7f7f7">
                            <div class="el-card-item pb-5" style=" border-radius: 20px;">
                                <div class="el-card-avatar mb-3 w-100 overflow-hidden d-flex position-relative text-center justify-content-center" style="margin-top: 5vh;">
                                    <img src="../resource/1738096177_67993e314cb8drentabilidad%20a%20largo%20plazo.svg" alt="Rentabilidad a Largo Plazo" style="width: 50%;border-radius:0px">
                                </div>
                                <div class="el-card-content text-center">
                                    <h4 class="mb-0 card-title" style="color:#03424E">RENTABILIDAD<br>A LARGO PLAZO</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4" data-aos="flip-down" data-aos-delay="300" data-aos-duration="1000">
                        <div class="card overflow-hidden" style="border-radius: 20px;background-color:#f7f7f7">
                            <div class="el-card-item pb-5" style=" border-radius: 20px;">
                                <div class="el-card-avatar mb-3 w-100 overflow-hidden d-flex position-relative text-center justify-content-center" style="margin-top: 5vh;">
                                    <img src="../resource/1738096259_67993e83879f3patrimonio%20para%20tu%20familia.svg" alt="Patrimonio Familiar" style="width: 50%;border-radius:0px">
                                </div>
                                <div class="el-card-content text-center">
                                    <h4 class="mb-0 card-title" style="color:#03424E">PATRIMONIO PARA<br>TU FAMILIA</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4" data-aos="flip-down" data-aos-delay="300" data-aos-duration="1000">
                        <div class="card overflow-hidden" style="border-radius: 20px;background-color:#f7f7f7">
                            <div class="el-card-item pb-5" style=" border-radius: 20px;">
                                <div class="el-card-avatar mb-3 w-100 overflow-hidden d-flex position-relative text-center justify-content-center" style="margin-top: 5vh;">
                                    <img src="../resource/1738096338_67993ed21e9e1alta%20revalorizacion.svg" alt="Alta Revalorización" style="width: 50%;border-radius:0px">
                                </div>
                                <div class="el-card-content text-center">
                                    <h4 class="mb-0 card-title" style="color:#03424E">ALTA<br>REVALORIZACIÓN</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="container-fluid py-4" data-aos="fade-down" data-aos-delay="300" data-aos-duration="1000" style="background-image: url('../resource/1734733260_fondo-.jpg'); 
               background-repeat: no-repeat; 
               background-size: auto 100%; 
               background-position: center;">
               <h4 class="d-none d-sm-block text-center display-6 pt-3 pb-2" style="margin:15px;font-family:RALEWAY-SEMIBOLD;letter-spacing:15px">
                <span style="color:#ffffff">DESCUBRE</span><br> NUESTROS PROYECTOS
            </h4>
    <h4 class="d-sm-none text-center display-10 pt-3" style="margin:15px;font-family:RALEWAY-SEMIBOLD;letter-spacing:5px">
        <span style="color:#ffffff">DESCUBRE</span><br> NUESTROS PROYECTOS
    </h4>
    <div class="subrayado mx-auto mb-5"></div>
    

    <!-- Carrusel para pantallas pequeñas -->
    <div id="responsiveCarousel6" class="carousel slide d-md-none pointer-event" data-bs-interval="3000" data-bs-ride="carousel">
        <div class="container">
            <div class="carousel-inner">
                <!-- Tarjeta 1 -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <div class="card position-relative" style="width:80%;
                        background-image:url('../../resource/1738276853_679bfff554735SAN%20ANDRES.png' );background-position:center;
                            border-radius: 15px; overflow: hidden; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); transition: transform 0.3s ease-in-out;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                        
                           
                            {{-- <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Proyecto" style="width: 100%; height: 220px; object-fit: cover;"> --}}
                            <div class="card-body bg-white" style="height:120px;width:85%;border-top-right-radius: 10px;border-bottom-right-radius: 10px;">
                                <h6 class=" fs-6  text-uppercase" style="color:#005563;margin-top:-13px">Proyecto <br> San Andrés</h6>
                                <p class="" style="color:#a3a3a3;">Lotes desde 120 m2</p>
                            </div>
                            <a href="../../proyectos/nuevo_huaral">
                                <div class="d-flex align-items-center justify-content-center position-absolute " style="background: #FFA726; border-radius: 20%; width: 50px; height: 50px; bottom: 5%; right: 9%; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);">
                                  <img src="../resource/1738274441_679bf6892121bflecha-blanca.svg" alt="" srcset="" width="50%">
                                </div>
        
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta 2 -->
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center">
                        <div class="card position-relative" style="width:80%;
                        background-image:url('../resource/1738333326_679cdc8e7d400LAGOON%20VILLAGE.png' );background-position:center;
                            border-radius: 15px; overflow: hidden; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); transition: transform 0.3s ease-in-out;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                        
                           
                            {{-- <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Proyecto" style="width: 100%; height: 220px; object-fit: cover;"> --}}
                            <div class="card-body bg-white" style="height:120px;width:85%;border-top-right-radius: 10px;border-bottom-right-radius: 10px;">
                                <h6 class=" fs-6  text-uppercase" style="color:#005563;margin-top:-13px">PROYECTO
                                     <br> LAGOON VILLAGE</h6>
                                <p class="" style="color:#a3a3a3;">Lotes desde 120 m2</p>
                            </div>
                            <a href="../../proyectos/nuevo_huaral">
                            <div class="d-flex align-items-center justify-content-center position-absolute" style="background: #FFA726; border-radius: 20%; width: 50px; height: 50px; bottom: 5%; right: 9%; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);">
                              <img src="../resource/1738274441_679bf6892121bflecha-blanca.svg" alt="" srcset="" width="50%">
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta 3 -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <div class="card position-relative" style="width:80%;
                        background-image:url('../resource/1738333385_679cdcc9438c7Jumeirah.png' );background-position:center;
                            border-radius: 15px; overflow: hidden; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); transition: transform 0.3s ease-in-out;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                        
                           
                            {{-- <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Proyecto" style="width: 100%; height: 220px; object-fit: cover;"> --}}
                            <div class="card-body bg-white" style="height:120px;width:85%;border-top-right-radius: 10px;border-bottom-right-radius: 10px;">
                                <h6 class=" fs-6  text-uppercase" style="color:#005563;margin-top:-13px">PROYECTO
                                     <br> JUMEIRAH LAKE</h6>
                                <p class="" style="color:#a3a3a3;">Lotes desde 120 m2</p>
                            </div>
                            <a href="../../proyectos/jumeirah">
                            <div class="d-flex align-items-center justify-content-center position-absolute" style="background: #FFA726; border-radius: 20%; width: 50px; height: 50px; bottom: 5%; right: 9%; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);">
                              <img src="../resource/1738274441_679bf6892121bflecha-blanca.svg" alt="" srcset="" width="50%">
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controles del Carrusel -->
        <button class="carousel-control-prev" type="button" data-bs-target="#responsiveCarousel6" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#responsiveCarousel6" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
        <!-- Grilla para pantallas medianas y grandes -->
        <div class="row d-none d-md-flex justify-content-center">
            <div class="col-md-6 col-lg-4 col-xl-4 mb-3" data-aos="flip-left" data-aos-delay="300" data-aos-duration="1000">
                <div class="card position-relative" style="
                background-image:url('../../resource/1738276853_679bfff554735SAN%20ANDRES.png' );background-position:center;
                    border-radius: 15px; overflow: hidden; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); transition: transform 0.3s ease-in-out;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                
                   
                    {{-- <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Proyecto" style="width: 100%; height: 220px; object-fit: cover;"> --}}
                    <div class="card-body bg-white" style="height:120px;width:85%;border-top-right-radius: 10px;border-bottom-right-radius: 10px;">
                        <h6 class=" fs-6  text-uppercase" style="color:#005563;margin-left:10px;margin-top:-10px">Proyecto <br> San Andrés</h6>
                        <p class="" style="color:#a3a3a3;margin-left:10px">Lotes desde 120 m2</p>
                    </div>
                    <a href="../../proyectos/nuevo_huaral">
                        <div class="d-flex align-items-center justify-content-center position-absolute" style="background: #FFA726; border-radius: 20%; width: 70px; height: 70px; bottom: 5%; right: 9%; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);">
                          <img src="../resource/1738274441_679bf6892121bflecha-blanca.svg" alt="" srcset="" width="50%">
                        </div>

                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4 mb-3" data-aos="flip-left" data-aos-delay="300" data-aos-duration="1000">
                <div class="card position-relative" style="
                background-image:url('../resource/1738333326_679cdc8e7d400LAGOON%20VILLAGE.png' );background-position:center;
                    border-radius: 15px; overflow: hidden; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); transition: transform 0.3s ease-in-out;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                
                   
                    {{-- <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Proyecto" style="width: 100%; height: 220px; object-fit: cover;"> --}}
                    <div class="card-body bg-white" style="height:120px;width:85%;border-top-right-radius: 10px;border-bottom-right-radius: 10px;">
                        <h6 class=" fs-6  text-uppercase" style="color:#005563;margin-left:10px;margin-top:-10px">PROYECTO
                             <br> LAGOON VILLAGE</h6>
                        <p class="" style="color:#a3a3a3;margin-left:10px">Lotes desde 120 m2</p>
                    </div>
                    <a href="../../proyectos/nuevo_huaral">
                    <div class="d-flex align-items-center justify-content-center position-absolute" style="background: #FFA726; border-radius: 20%; width: 70px; height: 70px; bottom: 5%; right: 9%; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);">
                      <img src="../resource/1738274441_679bf6892121bflecha-blanca.svg" alt="" srcset="" width="50%">
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4 mb-3" data-aos="flip-left" data-aos-delay="300" data-aos-duration="1000">
                <div class="card position-relative" style="
                background-image:url('../resource/1738333385_679cdcc9438c7Jumeirah.png' );background-position:center;
                    border-radius: 15px; overflow: hidden; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); transition: transform 0.3s ease-in-out;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                
                   
                    {{-- <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Proyecto" style="width: 100%; height: 220px; object-fit: cover;"> --}}
                    <div class="card-body bg-white" style="height:120px;width:85%;border-top-right-radius: 10px;border-bottom-right-radius: 10px;">
                        <h6 class=" fs-6  text-uppercase" style="color:#005563;margin-left:10px;margin-top:-10px">PROYECTO
                             <br> JUMEIRAH LAKE</h6>
                        <p class="" style="color:#a3a3a3;margin-left:10px">Lotes desde 120 m2</p>
                    </div>
                    <a href="../../proyectos/jumeirah">
                    <div class="d-flex align-items-center justify-content-center position-absolute" style="background: #FFA726; border-radius: 20%; width: 70px; height: 70px; bottom: 5%; right: 9%; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);">
                      <img src="../resource/1738274441_679bf6892121bflecha-blanca.svg" alt="" srcset="" width="50%">
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-1" style=";background-image:url('../resource/1738100589_67994f6dc5aa9portada-confia-en-aybar-escritorio.jpg');
 background-repeat: no-repeat; 
 background-size: cover;
      
 
               background-position: center;">

<img src="../resource/1738168541_679a58dd6cbc9portada-confiaenaybar-celular.jpg" class="d-lg-none" alt="" style="border:solid white 5px;margin-bottom:-180px;margin-top:-4px;border-radius:10px" width="100%">

        <div class="row">
            <!-- Imagen -->
            <div class="col-12 col-sm-12 col-lg-4 col-xl-6 mt-lg-5 ">
               
            </div>



            <!-- Contenido -->
            <div class="col-12 col-sm-12 col-xl-5 col-lg-8 " style="margin-top: 50px;">
                <div class="container">


                    <div class="p-5 rounded" style="background-color: #ffffff; color: rgb(100, 100, 100); box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.3);">
                       
                        <h4 class="d-sm-none text-center display-10 aos-init aos-animate" style="margin:20px;font-family:RALEWAY-SEMIBOLD;letter-spacing:5px">
                            <span style="color:#03424E" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">CONFÍA EN</span><br> AYBAR CORP
                        </h4>
                        <h4 class="d-none d-sm-block text-center display-6 aos-init aos-animate" style="margin:20px;font-family:RALEWAY-SEMIBOLD;letter-spacing:15px">
                            <span style="color:#03424E" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">CONFÍA EN</span><br> AYBAR CORP
                        </h4>
                        <div class="subrayado mx-auto mb-5"></div>
                         
                        <p class="fs-6  text-center" style="color:#03424E;" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                            Construye un futuro sólido para tu familia <br class="d-none d-sm-block"> invirtiendo en confianza.
                        </p>
                       
                      
    
                        <!-- Carrusel para pantallas SM -->
                        <div id="carouselExample5" class="carousel slide d-md-none pointer-event" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <!-- Diapositiva 1 -->
                                <div class="carousel-item active">
                                    <div class="card" style="background-color:white;color:#005463;font-family:Montserrat-Regular ">
                                        <div class="card-body text-center">
                                            <img src="../resource/1738103941_67995c8516df2+de%202000%20km2.svg" class="mb-1" width="100px" alt=""> <br><b style="font-size: 13px">+ 2,000 KM 2<br></b>
                                            <span style="font-size:11px">
                                              <b>Zonas verdes proporcionadas.</b>  
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Diapositiva 2 -->
                                <div class="carousel-item">
                                    <div class="card" style="background-color:white;color:#005463;font-family:Montserrat-Regular ">
                                        <div class="card-body text-center">
                                            <img src="../resource/1738103930_67995c7a1baf4+%20de%205%20a%C3%B1os.svg" class="mb-1" width="100px" alt=""> <br><b style="font-size: 13px">+ DE 5 AÑOS<br></b>
                                            <span style="font-size:11px">
                                              <b>De experiencia en el mercado.</b>  
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Diapositiva 3 -->
                                <div class="carousel-item">
                                    <div class="card" style="background-color:white;color:#005463;font-family:Montserrat-Regular ">
                                        <div class="card-body text-center">
                                            <img src="../resource/1738103935_67995c7fafb62+de%201000%20adquieren%20nuestros%20proyectos.svg" class="mb-1" width="100px" alt=""> <br><b style="font-size: 13px">+ DE 1,000<br></b>
                                            <span style="font-size:11px">
                                              <b>Adquirieron nuestros proyectos.</b>  
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Diapositiva 4 -->
                                <div class="carousel-item">
                                    <div class="card" style="background-color:white;color:#005463;font-family:Montserrat-Regular ">
                                        <div class="card-body text-center">
                                            <img src="../resource/1738103999_67995cbf55c4cproyectos%20sostenibles.svg" class="mb-1" width="140px" alt=""> <br><b style="font-size: 13px">PROYECTOS <br>SOSTENIBLES</b>
                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- Diapositiva 5 -->
                                <div class="carousel-item">
                                    <div class="card" style="background-color:white;color:#005463;font-family:Montserrat-Regular ">
                                        <div class="card-body text-center">
                                            <img src="../resource/1738103970_67995ca291fc7+de300proyectos.svg" class="mb-1" width="100px" alt=""> <br><b style="font-size: 13px">+ DE 300 PROYECTOS<br></b>
                                            <span style="font-size:11px">
                                              <b>Con la mejor inversión en la construcción de un futuro estable para tu familia.</b>  
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Controles del Carrusel -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample5" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Anterior</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample5" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Siguiente</span>
                            </button>
                        </div>
    
                        <!-- Grilla para pantallas MD y superiores -->
                        <div class="row d-none d-md-flex mt-4" data-aos="zoom-in" data-aos-delay="50" data-aos-duration="1000">
                            <div class="col-lg-4 col-md-6 col-xl-4">
                                <div class="card" style="background-color:white;color:#005463;font-family:Montserrat-Regular ">
                                    <div class="card-body text-center">
                                        <img src="../resource/1738103941_67995c8516df2+de%202000%20km2.svg" class="mb-1" width="100px" alt=""> <br><b style="font-size: 13px">+ 2,000 KM 2<br></b>
                                        <span style="font-size:11px">
                                          <b>Zonas verdes proporcionadas.</b>  
                                        </span>
                                    </div>
                                </div>

                               
                            </div>
                            
                            <div class="col-lg-4 col-md-6 col-xl-4">
                                <div class="card" style="background-color:white;color:#005463;font-family:Montserrat-Regular ">
                                    <div class="card-body text-center">
                                        <img src="../resource/1738103930_67995c7a1baf4+%20de%205%20a%C3%B1os.svg" class="mb-1" width="100px" alt=""> <br><b style="font-size: 13px">+ DE 5 AÑOS<br></b>
                                        <span style="font-size:11px">
                                          <b>De experiencia en el mercado.</b>  
                                        </span>
                                    </div>
                                </div>
    
                            </div>
                            <div class="d-none d-md-block  d-lg-none col-md-3"></div>
                            <div class="col-lg-4 col-md-6 col-xl-4">
                            

                                <div class="card" style="background-color:white;color:#005463;font-family:Montserrat-Regular ">
                                    <div class="card-body text-center">
                                        <img src="../resource/1738103935_67995c7fafb62+de%201000%20adquieren%20nuestros%20proyectos.svg" class="mb-1" width="100px" alt=""> <br><b style="font-size: 13px">+ DE 1,000<br></b>
                                        <span style="font-size:11px">
                                          <b>Adquirieron nuestros proyectos.</b>  
                                        </span>
                                    </div>
                                </div>
                            </div>
                      
                            <div class="col-lg-6 col-md-6 col-xl-6">
                                <div class="card" style="background-color:white;color:#005463;font-family:Montserrat-Regular ">
                                    <div class="card-body text-center">
                                        <img src="../resource/1738103999_67995cbf55c4cproyectos%20sostenibles.svg" class="mb-1" width="140px" alt=""> <br><b style="font-size: 13px">PROYECTOS <br>SOSTENIBLES</b>
                                        
                                    </div>
                                </div>

                              
                            </div>
    
                            <div class="col-lg-6 col-md-6 col-xl-6">
                                <div class="card" style="background-color:white;color:#005463;font-family:Montserrat-Regular ">
                                    <div class="card-body text-center">
                                        <img src="../resource/1738103970_67995ca291fc7+de300proyectos.svg" class="mb-1" width="100px" alt=""> <br><b style="font-size: 13px">+ DE 300 PROYECTOS<br></b>
                                        <span style="font-size:11px">
                                          <b>Con la mejor inversión en la construcción de un futuro estable para tu familia.</b>  
                                        </span>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="text-center">

                            <a class="btn btn-lg btn-hover-shadow" href="../../proyectos" style="color:white;border-radius:5px;background-color:#F6A42C;width:50%">
                                 &nbsp;CONOCER MÁS&nbsp;<b style="color:#03424E;font-size:30px"></b> 
                            </a>
                        </div>
                    </div>











                </div>
            </div>
        </div>
    </div> 
<div id="mycontent"></div>
<!-- FIN SECCION -->

    </form>
    <style>
        input::placeholder {
            color: rgb(136, 136, 136) !important;
            /* Color del placeholder */
            opacity: 1 !important;
            /* Asegura visibilidad */
            font-family: RALEWAY-SEMIBOLD;
        }
    </style>














    <script>
        //traer los projectos y los agrega a un select
        // Ejecutar cuando el DOM esté listo
        document.addEventListener('DOMContentLoaded', ProjectList);

        //descuenta el ingreso de caracteres en message
        function updateCounter() {
            const input = document.getElementById("message");
            const charCount = document.getElementById("charCount");
            charCount.textContent = input.value.length;
        }
    </script>
    <style>
        lite-youtube {
            /* No Shadow */
            --lite-youtube-frame-shadow-visible: no;
            width: 100%;
        }
    </style>






    <style>
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.5);
            /* Fondo visible */
            border-radius: 50%;
            /* Forma redonda */
            width: 40px;
            height: 40px;
        }

        .carousel-control-prev,
        .carousel-control-next {
            z-index: 10;
            /* Asegúrate de que estén por encima del contenido */
        }
    </style>

    <!-- sample modal content -->
    <div class="modal fade" id="bs-example-modal-xlg" tabindex="-1" aria-labelledby="bs-example-modal-lg"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6 class="text-warning text-center" style="font-size: 1.65rem">TRATAMIENTOS DE DATOS PERSONALES</h6>
              
                    <p style="text-align: justify; font-size: 15px;">
                        Declaro haber sido informado, conforme a Ley N° 29733 - Ley de Protección de Datos Personales
                        (“la Ley”) y al Decreto Supremo 003-2013/JUS - Reglamento de la Ley (“el Reglamento)”, doy mi
                        consentimiento libre, previo , informado, expreso e inequívoco para que <strong>AYBAR S.A.C.
                        </strong> realice el tratamiento de mis datos personales que le proporcione
                        de manera física o digital , con la finalidad de ejecutar cualquier relación contractual que
                        mantengo
                        y/o mantendré con la misma, contactarme y para fines estadísticos y/o analíticos.
                        <br><br>
                        Declaro mi derecho de revocar este consentimiento en cualquier momento.
                        Los datos personales entregados a <strong>AYBAR S.A.C.</strong> serán almacenados mientras dure mi
                        relación contractual, comercial y/o de cualquier índole con <strong>AYBAR S.A.C.</strong> y hasta
                        por 10
                        años de culminada la misma en el banco de datos de su titularidad, con RUC 20603865813 y con
                        domicilio en Av. Circunvalación del Golf Los Incas N° 134 (Torre B Piso 19) Distrito de Santiago de
                        Surco, Provincia y Departamento de Lima.
                        <br><br>
                        <strong>AYBAR S.A.C.</strong> podrá transferir sus datos personales a nivel nacional y/o
                        internacional.
                        sujetándose todos estos a las mismas obligaciones y medidas de seguridad, técnicas y legales
                        descritas en la Ley y el Reglamento.
                        <br><br>
                        De igual modo, la información podrá ser transferida a las autoridades o terceros autorizados
                        por ley bajo la regulación nacional y/o internacional vigente, incluyendo la Ley No. 29733,
                        su reglamento y aquellas que las modifiquen o sustituyan, así como las vinculadas a las autoridades
                        que fiscalizan la labor de <strong>AYBAR S.A.C.</strong><br><br>
                        Declaro conocer mi derecho a solicitar acceso a mis datos personales y conocer su tratamiento,
                        así como, solicitar su actualización, inclusión, rectificación, cancelación y supresión, pudiendo
                        oponerme a su uso o divulgación, pudiendo dirigir mi solicitud de ejercicio de los derechos a través
                        de la dirección especificada en la página web de <strong>AYBAR S.A.C.</strong>, teniendo a salvo
                        además el
                        ejercicio de la tutela de sus derechos ante la Autoridad Nacional de Protección de Datos Personales
                        en vía de reclamación o ante el Poder Judicial mediante la acción de hábeas data.
                        <br><br> Los datos personales
                        recolectados por <strong>AYBAR S.A.C.</strong> son obligatorios, la negativa a suministrarlos
                        supondrá la imposibilidad de concretar el fin previsto.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start"
                        data-bs-dismiss="modal">
                        Cerrar
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>




    <!-- sample modal content -->
    <div class="modal fade" id="bs-example-modal-xlg2" tabindex="-1" aria-labelledby="bs-example-modal-lg"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6 class="text-warning text-center" style="font-size: 1.65rem">CLÁUSULA PARA ENVÍO DE PROMOCIONES
                        COMERCIALES</h6>
                  
                    <p style="text-align: justify; font-size: 15px;">
                        Autorizo a <strong>AYBAR S.A.C.</strong> a utilizar mis Datos Personales y que los mismos sean
                        tratados
                        por sus empresas subsidiarias; para que me sean ofrecidos beneficios, productos y servicios,
                        publicidad, obsequios, ofertas y/o promociones (personalizadas o generales) de los servicios
                        que brinda <strong>AYBAR S.A.C.</strong> y de las empresas subsidiarias, a través de cualquier medio
                        de comunicación. Declaro conocer mi derecho a revocar este consentimiento en cualquier momento.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start"
                        data-bs-dismiss="modal">
                        Cerrar
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection

<script>
    //reinicia animacion AOS
    //reinicia animacion AOS

        // Función para reiniciar AOS en TODOS los elementos con atributos data-aos
        function restartAOS() {
            $("[data-aos='flip-left']").removeClass("aos-animate"); // Quitar animación

            setTimeout(() => {
                $("[data-aos]").addClass("aos-animate"); // Volver a agregar animación
                AOS.refreshHard(); // Refrescar AOS para que vuelva a aplicar los efectos
            }, 1000);
        }

        // Ejecutar cada 3 segundos
        setInterval(restartAOS, 70000);
 
</script>
