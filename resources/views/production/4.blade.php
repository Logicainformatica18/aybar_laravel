@extends('production.1')
@section('content')
    <style>
        .shadowed-text {
            text-shadow: 1px 1px 1px #000000;
            /* Contorno sombreado */
        }

        .transparencia_cabecera_md {


            /* Ajuste opcional */
            mask-image: linear-gradient(to top, #000000 10%, transparent 100%);

            /* -webkit-mask-image: linear-gradient(to top, #000000 60%, transparent 100%); */
        }

        .transparencia_cabecera_xl {


            /* Ajuste opcional */
            mask-image: linear-gradient(to top, #000000 70%, transparent 100%);

            /* -webkit-mask-image: linear-gradient(to top, #000000 60%, transparent 100%); */
        }
    </style>

    <style>
        .card-hover {
            position: relative;
            width: 300px;
            height: 350px;
            overflow: hidden;
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);

        }

        .card-hover img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: opacity 0.3s ease;
        }

        .card-hover:hover img {
            opacity: 0;
        }

        .card-hover .hover-content {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .card-hover:hover .hover-content {
            opacity: 1;
        }

        .card-hover .button {
            position: absolute;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            background-color: rgb(255, 255, 255);
            border: solid 3px #ffcc00;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .card-hover .button:hover {
            background-color: #ffffff;
        }

        .card-hover .button:hover .arrow {
            transform: rotate(45deg);
        }

        .arrow {
            display: block;

            width: 16px;
            height: 16px;
            border-right: 3px solid #ffcc00;
            border-top: 3px solid #ffcc00;
            transform: rotate(+0deg);
            transition: transform 0.3s ease;
        }
    </style>
    <style>
        .modal-backdrop {
            background-color: transparent !important;
            /* Fondo del overlay completamente transparente */
        }
    </style>
    <style>
        .bg-responsive {
            background-image: url('../../resource/1738597307_67a0e3bb9d21fportada-proyectos-escritorio.jpg');
            height:82vh;
            background-size: cover;
            /* height: 85vh; */
        }
    
        /* Para pantallas medianas (tablets) */
        @media (max-width: 987px) {
            .bg-responsive {
                height:82vh;
                background-size: cover;
                background-image: url('../../resource/1738597193_67a0e3490aa87portada-proyectos-tablet.jpg');
            }
        }
    
        /* Para pantallas pequeñas (móviles) */
        @media (max-width: 575px) {
            .bg-responsive {
                height:52vh;
                width: 100%;
                background-size: cover;
                background-image: url('../../resource/1738598057_67a0e6a98b327portada-proyectos-celular.jpg');
            }
        }
    </style>
    <!-- INICIO SECCION -->
<section class="text-white" style="background-color:#03424E;">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="10000">
        <div class="carousel-inner">
            <!-- Diapositiva 1 -->
            <div class="carousel-item active py-1 position-relative bg-responsive" style="    background-position: center;
    background-repeat: no-repeat;">
                <div class="d-none d-sm-block text-center text-white position-absolute start-50 translate-middle" style="top:57%;width:600px">
                    <h4 class="p-2  text-center fs-7" style="font-family:Montserrat-SemiBold;letter-spacing:15px">
                        <span style="color:#ffffff">CUMPLIENDO EL</span><br> LOTE DE TUS SUEÑOS
                    </h4>
                    <div class="subrayado mx-auto "></div>
                  
                 </div>
                
                 <div class=" d-sm-none text-center text-white position-absolute start-50 translate-middle" style="top:32%;width:290px">
                <img src="../../resource/1738076896_logo%20aybar%20blanco.svg" width="75px" alt="" srcset="">
                 </div>
                 
                 <div class=" d-sm-none text-center text-white position-absolute start-50 translate-middle" style="bottom:5%;width:300px">
                    <h4 class="p-2  text-center fs-3" style="font-family:Montserrat-SemiBold;letter-spacing:5px">
                        <span style="color:#ffffff">CUMPLIENDO EL</span><br> LOTE DE TUS SUEÑOS
                    </h4>
                    
                    <div class="subrayado mx-auto " style="width:30px;height:2px"></div>
                  
                 </div>
            </div>

            <!-- Diapositiva 2 -->
            <div class=" carousel-item ">
               
                  <div class="video-background " style="position: relative; overflow: hidden; height: 82vh;">
                    <video autoplay="" loop="" muted="" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                      <source src="../../resource/1738600049_67a0ee71dc79f2sXRVvaPa0EZB5DNDGCHLZNucZX.mp4" type="video/mp4">
                      Tu navegador no soporta el video.
                    </video>
                  

               

                    <div class="content d-none d-sm-block text-center text-white start-50 translate-middle" style="position: relative;  color: white; text-align: center;top:50%;width:600px">
       
                            <h4 class="p-2  text-center fs-7" style="font-family:Montserrat-SemiBold;letter-spacing:15px">
                                <span style="color:#ffffff">CUMPLIENDO EL</span><br> LOTE DE TUS SUEÑOS
                            </h4>
                            <div class="subrayado mx-auto "></div>
                          
                         
                  </div>
                  <div class=" d-sm-none text-center text-white position-absolute start-50 translate-middle" style="bottom:10%;width:300px">
                    <h4 class="p-2  text-center fs-3" style="font-family:Montserrat-SemiBold;letter-spacing:5px">
                        <span style="color:#ffffff">CUMPLIENDO EL</span><br> LOTE DE TUS SUEÑOS
                    </h4>
                    
                    <div class="subrayado mx-auto " style="width:30px;height:2px"></div>
                  
                 </div>
               
               
               
            </div>
        </div>

        <!-- Indicadores -->
     

        <!-- Controles de navegación -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <div style="color:orange;font-size:50px">
                <
            </div>
     
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <div style="color:orange;font-size:50px">
                >
            </div>
        </button>
    </div>
</div></section>
<div class="container py-5">
        <h2 class="display-6 text-center mb-4" style="word-spacing:8px;letter-spacing:3px"><b>UBICA TU PRÓXIMO HOGAR</b>
        </h2>
        <p class="fs-7 mb-5" style="color:#03424E;text-align:center">
            Encuentra el lugar ideal para comenzar una nueva etapa. Descubre proyectos estratégicamente ubicados, rodeados
            de oportunidades, naturaleza y todo lo que necesitas para construir tu futuro.
        </p>
        <div class="row">
            <!-- Tarjeta Lima -->
            <div class="col-xl-2 col-0"></div>
            <div class="col-lg-6 col-xl-4 col-md-6">
                <!-- Tarjeta -->
                <div class="card card-hover shadow" style="position: relative; width:100%;" data-bs-toggle="modal" data-bs-target="#modalLima">
                    <img src="../resource/1735593981_Lima.png" class="card-img-top" alt="Lima">
                    <h2 class="bottom-0 text-white start-20 p-3 pb-0" style="position: absolute;">LIMA METROPOLITANA</h2>
                    <div class="hover-content container text-white" style="background-color:#03424E;">

                        <p class="" style="text-align: justify;font-family:Montserrat-Regular">
                            <b class="fs-8">Lima</b><br>&nbsp; <br>
                            <b>Más de 18 proyectos en la capital del Perú </b><br>
                            Desde la cercanía a centros urbanos hasta vistas panorámicas al mar, nuestros proyectos en Lima
                            te ofrecen opciones estratégicas para vivir o invertir. <br>&nbsp; <br>
                            Están diseñados para conectar con la modernidad y
                            tradición de la ciudad, además de garantizar un alto nivel de plusvalía.

                        </p>

                    </div>
                    <div class="button">
                        <span class="arrow"></span>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="modalLima" tabindex="-1" aria-labelledby="modalLimaLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">

                        <div class="modal-content" style="background: linear-gradient(to top, #e0e0e0 10%, #ffffff 90%);">
                            <div class="modal-header">

                                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container text-center">
                                    <h2 class="modal-title p-5" id="modalLimaLabel">Encuentra el proyecto ideal para ti
                                        con megaproyectos.</h2>

                                    <div class="row align-content-center text-center justify-content-center">
                                        <div class="col-lg-4">
                                            <a href="../proyectos/terra_galicia">

                                                <img src="../resource/1736195210_Mesa%20de%20trabajo%202%20copia%2031.png" width="90%" alt="" srcset="" style="border-radius: 20px">
                                                <button type="button" class="btn btn-warning btn-block" style="margin-top:-40%;color: white; border-radius: 100px; background-color: #F6A42C; width: 160px;"><span style="font-size: 9px;">
                                                        <span style="font-family: RALEWAY-BOLD; font-size: 12px;">Conocer
                                                            más</span>
                                                    </span></button>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="../proyectos/rivera">
                                                <img src="../resource/1736196462_rivera%20del%20camp.png" width="90%" alt="" srcset="" style="border-radius: 20px">
                                                <button type="button" class="btn btn-warning btn-block" style="margin-top:-40%;color: white; border-radius: 100px; background-color: #F6A42C; width: 160px;"><span style="font-size: 9px;">
                                                        <span style="font-family: RALEWAY-BOLD; font-size: 12px;">Conocer
                                                            más</span>
                                                    </span></button>
                                            </a>
                                        </div>
                                    </div>



                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Tarjeta Ica -->
            <div class="col-lg-6 col-xl-4 col-md-6">
                <div class="card card-hover shadow" style="position: relative;width:100%" data-bs-toggle="modal" data-bs-target="#modalIca">
                    <img src="../resource/1735593994_Ica.png" class="card-img-top" alt="Ica">
                    <h1 class="bottom-0 start-20 p-3 pb-0" style="position: absolute;">ICA</h1>
                    <div class="hover-content container text-white" style="background-color:#03424E;">

                        <p class="" style="text-align: justify;font-family:Montserrat-Regular">
                            <b class="fs-8">Ica</b> <br>&nbsp; <br>
                            <b>5 proyectos únicos en la tierra del sol y el vino</b>
                            <br>
                            Ica te invita a descubrir el lugar perfecto para vivir, cada proyecto está
                            cerca de destinos turísticos,
                            asegurando una excelente inversión y calidad de vida.


                        </p>

                    </div>
                    <div class="button">
                        <span class="arrow"></span>
                    </div>
                </div>

                <div class="modal fade" id="modalIca" tabindex="-1" aria-labelledby="modalLimaLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">

                        <div class="modal-content" style="background: linear-gradient(to top, #e0e0e0 10%, #ffffff 90%);">
                            <div class="modal-header">

                                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container text-center">
                                    <h2 class="modal-title p-5" id="modalLimaLabel">Encuentra el proyecto ideal para ti
                                        con megaproyectos.</h2>

                                    <div class="row align-content-center text-center justify-content-center">
                                        <div class="col-lg-4">
                                            <a href="../proyectos/jumeirah">

                                                <img src="../resource/1736197086_jumeirah.png" width="90%" alt="" srcset="" style="border-radius: 20px">
                                                <button type="button" class="btn btn-warning btn-block" style="margin-top:-40%;color: white; border-radius: 100px; background-color: #F6A42C; width: 160px;"><span style="font-size: 9px;">
                                                        <span style="font-family: RALEWAY-BOLD; font-size: 12px;">Conocer
                                                            más</span>
                                                    </span></button>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="../proyectos/palmilla">
                                                <img src="../resource/1736198278_Mesa%20de%20trabajo%202%20copia%2032.png" width="90%" alt="" srcset="" style="border-radius: 20px">
                                                <button type="button" class="btn btn-warning btn-block" style="margin-top:-40%;color: white; border-radius: 100px; background-color: #F6A42C; width: 160px;"><span style="font-size: 9px;">
                                                        <span style="font-family: RALEWAY-BOLD; font-size: 12px;">Conocer
                                                            más</span>
                                                    </span></button>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="../proyectos/villa">
                                                <img src="../resource/1736198419_villa-porton.png" width="90%" alt="" srcset="" style="border-radius: 20px">
                                                <button type="button" class="btn btn-warning btn-block" style="margin-top:-40%;color: white; border-radius: 100px; background-color: #F6A42C; width: 160px;"><span style="font-size: 9px;">
                                                        <span style="font-family: RALEWAY-BOLD; font-size: 12px;">Conocer
                                                            más</span>
                                                    </span></button>
                                            </a>
                                        </div>
                                    </div>



                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-0"></div>
            <div class="col-xl-2 col-0"></div>

            <!-- Tarjeta Huaral -->
            <div class="col-lg-6 col-xl-4 col-md-6">
                <div class="card card-hover shadow" style="position: relative;width:100%" data-bs-toggle="modal" data-bs-target="#modalHuaral">
                    <img src="../resource/1736172777_Huaral.png" class="card-img-top" alt="Huaral">
                    <h1 class="bottom-0 start-20 p-3 pb-0" style="position: absolute;">HUARAL</h1>
                    <div class="hover-content container text-white" style="background-color:#03424E;">

                        <p class="" style="text-align: justify;font-family:Montserrat-Regular">
                            <b class="fs-8">Huaral</b> <br>&nbsp; <br>
                            <b>Tu próxima inversión en el corazón del desarrollo</b>
                            <br>
                            
                            Huaral ofrece una ubicación privilegiada, rodeada de naturaleza y conectividad.
                            <br>&nbsp; <br>
                             Descubre proyectos diseñados para garantizar tu bienestar y un crecimiento constante en valor.


                        </p>
                    </div>

                    <div class="button">
                        <span class="arrow"></span>
                    </div>
                </div>


                <div class="modal fade" id="modalHuaral" tabindex="-1" aria-labelledby="modalLimaLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">

                        <div class="modal-content" style="background: linear-gradient(to top, #e0e0e0 10%, #ffffff 90%);">
                            <div class="modal-header">

                                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container text-center">
                                    <h2 class="modal-title p-5" id="modalLimaLabel">Encuentra el proyecto ideal para ti
                                        con megaproyectos.</h2>

                                    <div class="row align-content-center text-center justify-content-center">
                                        <div class="col-lg-4">
                                            <a href="../proyectos/nuevo_huaral">

                                                <img src="../resource/1736199258_Mesa%20de%20trabajo%202%20copia%2029.png" width="90%" alt="" srcset="" style="border-radius: 20px">
                                                <button type="button" class="btn btn-warning btn-block" style="margin-top:-40%;color: white; border-radius: 100px; background-color: #F6A42C; width: 160px;"><span style="font-size: 9px;">
                                                        <span style="font-family: RALEWAY-BOLD; font-size: 12px;">Conocer
                                                            más</span>
                                                    </span></button>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="../proyectos/valle_huaral">
                                                <img src="../resource/1736199294_Mesa%20de%20trabajo%202%20copia%2030.png" width="90%" alt="" srcset="" style="border-radius: 20px">
                                                <button type="button" class="btn btn-warning btn-block" style="margin-top:-40%;color: white; border-radius: 100px; background-color: #F6A42C; width: 160px;"><span style="font-size: 9px;">
                                                        <span style="font-family: RALEWAY-BOLD; font-size: 12px;">Conocer
                                                            más</span>
                                                    </span></button>
                                            </a>
                                        </div>

                                    </div>



                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tarjeta Huacho -->
            <div class="col-lg-6 col-xl-4 col-md-6">
                <div class="card card-hover shadow" style="position: relative;width:100%" data-bs-toggle="modal" data-bs-target="#modalHuacho">
                    <img src="../resource/1736172763_Huacho.png" class="card-img-top" alt="Huacho">
                    <h1 class="bottom-0 start-20 p-3 pb-0" style="position: absolute;">HUACHO</h1>
                    <div class="hover-content container text-white" style="background-color:#03424E;">

                        <p class="" style="text-align: justify;font-family:Montserrat-Regular">
                            <b class="fs-8">Huacho</b> <br>&nbsp; <br>
                            <b>Proyectos estratégicos en la ciudad costera</b>
                            <br>
                            
                            Ubicados en una de las zonas con mayor proyección de desarrollo, nuestros proyectos en Huacho combinan tranquilidad, acceso a servicios y una excelente oportunidad de inversión.

                        </p>
                     
                       
                    </div>
                    <div class="button">
                        <span class="arrow"></span>
                    </div>
                </div>


                <div class="modal fade" id="modalHuacho" tabindex="-1" aria-labelledby="modalLimaLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">

                        <div class="modal-content" style="background: linear-gradient(to top, #e0e0e0 10%, #ffffff 90%);">
                            <div class="modal-header">

                                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container text-center">
                                    <h2 class="modal-title p-5" id="modalLimaLabel">Encuentra el proyecto ideal para ti
                                        con megaproyectos.</h2>

                                    <div class="row align-content-center text-center justify-content-center">
                                        <div class="col-lg-4">
                                            <a href="../proyectos/maria_drago">

                                                <img src="../resource/1736199453_mariadrago.png" width="90%" alt="" srcset="" style="border-radius: 20px">
                                                <button type="button" class="btn btn-warning btn-block" style="margin-top:-40%;color: white; border-radius: 100px; background-color: #F6A42C; width: 160px;"><span style="font-size: 9px;">
                                                        <span style="font-family: RALEWAY-BOLD; font-size: 12px;">Conocer
                                                            más</span>
                                                    </span></button>
                                            </a>
                                        </div>


                                    </div>



                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div>
<video src="../resource/2rJ6omBL3yy3KT8iSburE33P6SN.mp4" autoplay="" loop="" muted="" style="width:100%"></video>   
</div>
<!-- FIN SECCION -->
@endsection
