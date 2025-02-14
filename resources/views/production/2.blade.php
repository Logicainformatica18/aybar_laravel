@extends('production.1')

<style>
    .bg-responsive {
        background-image: url('../../resource/1738943578_67a62c5ab84ba_banner-comexlat.jpg');
        background-repeat: no-repeat;
        background-size: 100%;
        height: 90vh;

        /* height: 85vh; */
    }

    /* Para pantallas medianas (tablets) */
    @media (max-width: 1684px) {
        .bg-responsive {
            width: 100%;
            height: 80vh;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-image: url('../../resource/1738943583_67a62c5fe327b_banner-comexlat-tablet.jpg');
        }
    }

    /* Para pantallas pequeñas (móviles) */
    @media (max-width: 532px) {
        .bg-responsive {
            width: 100%;
            height: 50vh;
            /* height: 90vh; */
            background-position: center;
            background-repeat: no-repeat;
            /* background-size: contain; */
            background-image: url('../../resource/1738943601_67a62c71e138b_banner-comexlat-celular.jpg');
        }
    }
</style>
@section('content')
    <form method="post" id="Customer">
        @csrf

        <!-- INICIO SECCION -->
<div id="carouselExample" class=" carousel slide text-white pointer-event" data-bs-ride="carousel" data-bs-interval="30000">


            <div class="carousel-inner " style="display: flex; align-items: center;">

                <div class="carousel-item text-center pb-5 active bg-responsive" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500" style="position: relative;">

                    <div class="d-none d-sm-block" style="position: absolute; bottom: 10%; left: 50%; transform: translateX(-50%);">
                        <h1 class="text-black" style="font-size:80px; "><b>TU TALENTO</b></h1>
                        <h1 class="text-black" style="font-size:45px;letter-spacing:8px; word-spacing: 0px;margin-top:-25px">MERECE MEJORES
                        </h1>
                        <h1 class="text-black" style="font-size:80px; margin-top:-25px"> COMISIONES</h1>

                    </div>
                    <div class="w-100  d-sm-none" style="position: absolute; bottom: 20%;">

                        <h1 class="text-black" style="font-size:45px; "><b>TU TALENTO</b></h1>
                        <h1 class="text-black" style="font-size:29px;margin-top:-15px">MERECE MEJORES</h1>
                        <h1 class="text-black" style="font-size:45px; ;margin-top:-18px"> COMISIONES</h1>

                    </div>
                </div>



            </div>
            <!-- Indicadores del Carrusel -->
            <div class="carousel-indicators" style="margin-top:-100px position: relative;">
                <!-- Indicador Activo (Relleno) -->
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active " aria-current="true" aria-label="Diapositiva 1" style="background-color: white;
                       border: solid 3px white;
                       width: 15px;
                       height: 15px;
                       border-radius: 50%;
                       margin-right: 10px;">
                </button>



            </div>


        </div>
<div class="text-center mt-n5 " style="background-color:#E8ECF3;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="2000">
            <div class="container py-5 mt-5">


                <!-- Título -->
                <h2 class="fw-bold text-uppercase display-4" style="color: #F49A1A; margin-bottom: 30px;">
                    <b> SÉ NUESTRO <br> SOCIO COMERCIAL</b>
                </h2>

                <div class="row g-4">
                    <!-- Tarjeta 1 -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500">
                        <div class="p-4 text-center" style="border-radius: 0px 60px 0px 60px; background-color: white; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
                            <img src="../../resource/1738620627_67a13ed3427a1altas%20comisiones.svg" alt="Altas Comisiones" class="mb-3" width="100">
                            <h4 class="fw-bold" style="color: #F49A1A;">ALTAS COMISIONES</h4>
                            <hr style="width: 50px; margin: auto; border: 1px solid #F49A1A;">
                            <p style="color: #b6b6b6;font-family:RALEWAY-REGULAR; text-align:justify" class="px-3 mt-4 fs-3 ">
                                ¡Gana por tus resultados! El sector inmobiliario te ofrece una de las mejores oportunidades
                                para generar ingresos extraordinarios en base a tus ventas.
                            </p>
                            <a href="#trabaja" class="d-inline-block text-white  fs-6 px-5 py-3 mt-3" style="background-color: #F49A1A; border-radius: 30px; text-decoration: none;font-family:COOLVETICA-RG">
                                Regístrate ahora +
                            </a>
                        </div>
                    </div>

                    <!-- Tarjeta 2 -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500">
                        <div class="p-4 text-center" style="border-radius: 0px 60px 0px 60px; background-color: #F49A1A;color: white; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">

                            <img src="../../resource/1738707574_67a29276553dbtrabajo%20(1).svg" alt="Crecimiento Profesional" class="mb-3" width="100">
                            <h4 class="fw-bold text-white">CRECIMIENTO PROFESIONAL</h4>
                            <hr style="width: 50px; margin: auto; border: 1px solid white;">
                            <p class="px-3 mt-4 fs-3 " style="font-family:RALEWAY-REGULAR; text-align:justify">
                                Desarrolla habilidades de negociación, ventas y networking. ¡Conviértete en un experto en un
                                sector con alta demanda!
                            </p>
                            <a href="#trabaja" class="mt-5 d-inline-block fs-6 px-5 py-3 mt-3" style="background-color: white; color: #F49A1A; border-radius: 30px; text-decoration: none;font-family:COOLVETICA-RG">
                                Regístrate ahora +
                            </a>
                        </div>
                    </div>

                    <!-- Tarjeta 3 -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500">
                        <div class="p-4 text-center" style="border-radius: 0px 60px 0px 60px; background-color: white; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
                            <img src="../../resource/1738707504_67a2923086c7eflexibilidad.svg" alt="Flexibilidad y Autonomía" class="mb-3" width="100">
                            <h4 class="fw-bold" style="color: #F49A1A;">FLEXIBILIDAD Y AUTONOMÍA</h4>
                            <hr style="width: 50px; margin: auto; border: 1px solid #F49A1A;">
                            <p style="color: #b6b6b6;font-family:RALEWAY-REGULAR; text-align:justify" class="px-3 mt-4 fs-3 text-justify">
                                Organiza tu tiempo como desees. Sé dueño de tu agenda y trabaja desde cualquier lugar,
                                mientras construyes tu carrera profesional.
                            </p>
                            <br>
                            <a href="#trabaja" class="mt-4 d-inline-block text-white fs-6 px-5 py-3 mt-3" style="background-color: #F49A1A; border-radius: 30px; text-decoration: none;font-family:COOLVETICA-RG">
                                Regístrate ahora +
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<section class="d-none d-md-block py-5 d-flex align-items-center justify-content-center" style="position: relative; background: url('../../resource/1738681624_67a22d18ea304banner-socio-comercial.jpg') no-repeat center center/cover; height: 100vh; color: white;">
            <div class="container mt-5">
                <div class="row mt-5 mt-md-1">
                    <div class=" col-lg-8 col-12 col-xl-6">
                        <div class="container text-justify text-white" style="position: relative; z-index: 2; ">
                            <h1 class="fw-bold text-uppercase display-5  text-justify"><b style="color: #F49A1A;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700" class="">Oportunidades de ser un socio comercial</b> </h1>
                            <p class="mb-4 fs-6 " data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">Aprovecha
                                nuestros más de 5 años de experiencia en el sector inmobiliario para convertirte en un
                                experto y generar ingresos con cada proyecto.</p>
                            <div class="row g-4 text-start">
                                <div class="col-md-6 " data-aos="flip-left" data-aos-duration="1000" data-aos-delay="600">
                                    <div class="w-100 text-start text-white text-justify" style="background: rgba(255, 255, 255, 0); color: black; padding: 15px; text-align: center; border-radius: 8px;">
                                        <img src="../../resource/1738683197_67a2333d3f3fbplusvalia.svg" alt="Plusvalía" class="mb-2" width="100px">
                                        <h4 class="text-uppercase " style="color: #F49A1A;">Plusvalía</h4>
                                        <p>Trabajar en bienes raíces te permite aprovechar la constante valorización de los
                                            terrenos y propiedades, un mercado que siempre se encuentra en ascenso.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 " data-aos="flip-left" data-aos-duration="1000" data-aos-delay="600">
                                    <div class="w-100 text-start text-white text-justify  " style="background: rgba(255, 255, 255, 0); color: black; padding: 15px; text-align: center; border-radius: 8px;">
                                        <img src="../../resource/1738620634_67a13eda888c5crecimiento.svg" alt="Crecimiento" class="mb-2" width="100px">
                                        <h4 class="text-uppercase " style="color: #F49A1A;">Crecimiento</h4>
                                        <p>El sector inmobiliario está en constante desarrollo, lo que garantiza estabilidad
                                            y nuevas oportunidades para quienes decidan formar parte de él.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 d-flex justify-content-start">
                                <a data-aos="flip-right" data-aos-duration="1000" data-aos-delay="600" href="#trabaja" class="btn text-white w-100 " style="background: #F49A1A; border: none; padding: 12px 40px; font-size: 1.2rem; border-radius: 40px;">
                                    <h1 class="pt-1 ">Conoce más</h1>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">

                    </div>
                </div>
            </div>
        </section>


        <section class="d-md-none py-0 d-flex align-items-center justify-content-center" style="position: relative; background: url('../../resource/1738686719_67a240ff56695banner-socio-comercial-celular.jpg') no-repeat center center/cover; height: 100vh; color: white;">
            <div class="container mt-0">
                <div class="row mt-0 mt-md-1">
                    <div class="col-lg-8 col-12 " data-aos="slide-right" data-aos-duration="1000" data-aos-delay="600">
                        <div class="container text-justify text-white" style="position: relative; z-index: 2; ">
                            <div class="text-justify">
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                              </div>
                            <h1 class="fw-bold text-uppercase fs-9  text-center"><b style="color: #F49A1A;">Oportunidades
                                    de ser un socio comercial</b> </h1>

                            <div class="row g-4 text-center">
                                <div class="col-md-6">
                                    <div class="w-100 text-start text-white " style="background: rgba(255, 255, 255, 0); color: black; padding: 15px; text-align: center; border-radius: 8px;">
                                        <img src="../../resource/1738683197_67a2333d3f3fbplusvalia.svg" style="float: left;height:160px" alt="Plusvalía" class="mb-2" width="100px">
                                        <h4 class="text-uppercase " style="color: #F49A1A;">Plusvalía</h4>
                                        <p style="text-align: justify">Trabajar en bienes raíces te permite aprovechar la
                                            constante valorización de los terrenos y propiedades, un mercado que siempre se
                                            encuentra en ascenso.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-n2">
                                    <div class="w-100 text-start text-white " style="background: rgba(255, 255, 255, 0); color: black; padding: 15px; text-align: center; border-radius: 8px;">
                                        <img src="../../resource/1738620634_67a13eda888c5crecimiento.svg" style="float: left;height:160px" alt="Plusvalía" class="mb-2" width="100px">
                                        <h4 class="text-uppercase " style="color: #F49A1A;">Crecimiento</h4>
                                        <p style="text-align: justify">El sector inmobiliario está en constante desarrollo,
                                            lo que garantiza estabilidad y nuevas oportunidades para quienes decidan formar
                                            parte de él.</p>
                                    </div>
                                </div>

                            </div>
                            <div class="mt-1 d-flex justify-content-start">
                                <a href="#trabaja" class="btn text-white w-100" style="background: #F49A1A; border: none; padding: 12px 40px; font-size: 1.2rem; border-radius: 40px;">
                                    <h1 class="pt-1 ">Conoce más</h1>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">

                    </div>
                </div>
            </div>
        </section>
<section class="text-center py-5" style="background: url('../../resource/1738692212_67a256741dddabanner-naranja.jpg');
background-repeat:no-repeat; color: white;background-size:cover;">
    <h1 class="fw-bold text-uppercase display-4 mb-5 mb-1">¿Qué ofrecemos?</h1>

    <!-- Carrusel solo para dispositivos pequeños -->
    <div id="carouselExample" class="carousel slide d-sm-none" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner container">

            <!-- Primer Slide (Activo) -->
            <div class="carousel-item active">
                <div class="d-flex align-items-center px-4 py-4" style="background: white; color: black; border-radius: 0px 80px 0px 80px;">
                    <img src="../../resource/1738690870_67a2513661ed2mayores%20comisiones.svg" alt="Mayores comisiones" style="width: 40%; height: 40%; margin-right: 15px;">
                    <div>
                        <h3 class="text-uppercase text-warning text-start fs-4">Mayores comisiones</h3>
                        <p class="fs-3" style="text-align:justify;font-family:RALEWAY-REGULAR">Gana más por cada venta exitosa.</p>
                    </div>
                </div>
            </div>

            <!-- Segundo Slide -->
            <div class="carousel-item">
                <div class="d-flex align-items-center px-4 py-4" style="background: white; color: black; border-radius: 0px 80px 0px 80px;">
                    <img src="../../resource/1738691122_67a25232b0268venta%20en%20feria.svg" alt="Venta en feria inmobiliaria" style="width: 40%; height: 40%; margin-right: 15px;">
                    <div>
                        <h3 class="text-uppercase text-warning text-start fs-4">Venta en feria inmobiliaria</h3>
                        <p class="fs-3" style="text-align:justify;font-family:RALEWAY-REGULAR">Accede a más oportunidades y multiplica tus ventas.</p>
                    </div>
                </div>
            </div>

            <!-- Tercer Slide -->
            <div class="carousel-item">
                <div class="d-flex align-items-center px-4 py-4" style="background: white; color: black; border-radius: 0px 80px 0px 80px;">
                    <img src="../../resource/1738691184_67a25270f269dacceso%20a%20sorteos.svg" alt="Acceso a sorteos y descuentos" style="width: 40%; height: 40%; margin-right: 15px;">
                    <div>
                        <h3 class="text-uppercase text-warning text-start fs-4">Acceso a sorteos y descuentos</h3>
                        <p class="fs-3" style="text-align:justify;font-family:RALEWAY-REGULAR">Disfruta de beneficios exclusivos por formar parte de nuestra empresa.</p>
                    </div>
                </div>
            </div>

            <!-- Cuarto Slide -->
            <div class="carousel-item">
                <div class="d-flex align-items-center px-4 py-4" style="background: white; color: black; border-radius: 0px 80px 0px 80px;">
                    <img src="../../resource/1738620804_67a13f8433153bonos%20por%20meta.svg" alt="Bono por metas" style="width: 40%; height: 40%; margin-right: 15px;">
                    <div>
                        <h3 class="text-uppercase text-warning text-start fs-4">Bono por metas</h3>
                        <p class="fs-3" style="text-align:justify;font-family:RALEWAY-REGULAR">Reconocemos tu esfuerzo y te premiamos.</p>
                    </div>
                </div>
            </div>

        </div>

        <!-- Controles del Carrusel -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Versión de escritorio sin carrusel -->
    <div class="container mt-4 d-none d-sm-block aos-init aos-animate" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="600">
        <div class="row g-4 text-center align-content-center justify-content-center">

            <div class="col-12 col-md-12 col-lg-8 col-xl-6">
                <div class="d-flex align-items-center px-4 py-4 py-sm-0" style="background: white; color: black; border-radius: 0px 80px 0px 80px;">
                    <img src="../../resource/1738690870_67a2513661ed2mayores%20comisiones.svg" alt="Mayores comisiones" style="width: 40%; height: 40%; margin-right: 15px;">
                    <div>
                        <h3 class="text-uppercase text-warning text-start">Mayores comisiones</h3>
                        <p class="text-start">Gana más por cada venta exitosa.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-12 col-lg-8 col-xl-6">
                <div class="d-flex align-items-center px-4 py-4 py-sm-0" style="background: white; color: black; border-radius: 0px 80px 0px 80px;">
                    <img src="../../resource/1738691122_67a25232b0268venta%20en%20feria.svg" alt="Venta en feria inmobiliaria" style="width: 40%; height: 40%; margin-right: 15px;">
                    <div>
                        <h3 class="text-uppercase text-warning text-start">Venta en feria inmobiliaria</h3>
                        <p class="text-start">Accede a más oportunidades y multiplica tus ventas.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section id="trabaja" class="text-center py-5" style="background: url('../../resource/1738695656_67a263e8cc4d1banner-negro.jpg') no-repeat center center/cover; color: white;">
        <div class="container mt-4">
            <h1 class="fw-bold text-uppercase display-4 text-lg-start my-4" style="color: #F49A1A;">Trabaja con Nosotros</h1>

                <div class="row g-3" data-aos="slide-up" data-aos-duration="1000" data-aos-delay="600">
                    <div class="col-12 col-md-6">
                        <input type="text" id="names" name="names" class="form-control" placeholder="Ingrese su nombre" style="background: rgba(255, 255, 255, 0.1); color: white; border: 1px solid #666464; padding: 12px;font-size:20px">
                    </div>
                    <div class="col-12 col-md-6">
                        <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Apellidos" style="background: rgba(255, 255, 255, 0.1); color: white; border: 1px solid #666464; padding: 12px;font-size:20px">
                    </div>
                    <div class="col-12 col-md-6">
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="Número celular" style="background: rgba(255, 255, 255, 0.1); color: white; border: 1px solid #666464; padding: 12px;font-size:20px">
                    </div>
                    <div class="col-12 col-md-6">
                        <input type="text" id="dni" name="dni" class="form-control" placeholder="DNI/C.E" style="background: rgba(255, 255, 255, 0.1); color: white; border: 1px solid #666464; padding: 12px;font-size:20px">
                    </div>
                    <div class="col-12">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Correo electrónico" style="background: rgba(255, 255, 255, 0.1); color: white; border: 1px solid #666464; padding: 12px;font-size:20px">
                    </div>
                    <div class="col-12">
                        <button data-aos="flip-right" data-aos-duration="1000" data-aos-delay="600" type="button" onclick="CustomerStorePublic();return false" class="btn w-100" style="background: #F49A1A; color: black; font-weight: bold; padding: 12px;"><h1 class="text-black">Enviar</h1> </button>
                    </div>
                </div>

        </div>
    </section>
<section class="container py-5">
        <h1 class="fw-bold text-uppercase display-4  text-lg-start text-center   " style="color: #F49A1A;">FAQ (PREGUNTAS FRECUENTES)</h1>
        <div class="accordion mt-4" id="faqAccordion">
            <div class="accordion-item" data-aos="flip-right" data-aos-duration="1000" data-aos-delay="600">

                    <h2 class="accordion-header " id="headingOne">
                        <button class="accordion-button collapsed fs-7 p-5 text-center " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="background: black; color: white; font-weight: bold;color: #F49A1A;border-radius:0px">
                            ▼ ¿Qué necesito para ser socio comercial de ComexLat?
                        </button>
                    </h2>


                <div id="collapseOne" class=" accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-justify fs-5">
                        <p>Unirte a nuestra red de socios comerciales es fácil y está diseñado para que puedas comenzar de inmediato. Esto es lo que necesitas:</p>
                        <ul>
                            <li>• Una membresía mensual accesible. Este pequeño aporte te da acceso exclusivo a herramientas, beneficios y oportunidades para maximizar tus ingresos.</li>
                            <li>• Una mentalidad positiva y muchas ganas de crecer. No importa si no tienes experiencia previa, en ComexLat valoramos tu entusiasmo y compromiso.</li>
                            <li>• Habilidades de comunicación y persuasión. Estas cualidades son clave para conectar con clientes, pero si estás comenzando, nosotros te ayudaremos a desarrollarlas.</li>
                            <li>• Espíritu emprendedor. Trabajar como socio comercial significa que tú decides cómo organizar tu tiempo y tus metas.</li>
                        </ul>
                        <p>¡Con estas características, estarás listo para formar parte de un sector en constante crecimiento y lleno de oportunidades!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item mt-2" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="600">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed fs-6 text-center p-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="background: black; color: #F49A1A; font-weight: bold;">
                    ▼ ¿Qué beneficios tengo al unirme a ComexLat?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-justify fs-5 p-4">
                    <p>Formar parte de ComexLat significa ser parte de un equipo que te ofrece todas las herramientas para crecer:</p>
                    <ul>
                        <li>• Catálogo exclusivo de proyectos. Tendrás acceso a una amplia gama de opciones inmobiliarias de alto valor.</li>
                        <li>• Altas comisiones por cada venta exitosa. Valoramos tu esfuerzo y te premiamos con una de las mejores tasas del mercado.</li>
                        <li>• Bonos por cumplimiento de metas. Reconocemos y celebramos tu desempeño, brindándote incentivos adicionales.</li>
                        <li>• Participación en ferias inmobiliarias. Aprovecha eventos exclusivos que te abrirán nuevas oportunidades de negocio y networking.</li>
                        <li>• Sorteos y descuentos exclusivos. Disfruta de premios adicionales solo por ser parte de nuestro equipo.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>





<div id="mycontent"></div>
<!-- FIN SECCION -->

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
                        <h6 class="text-warning text-center" style="font-size: 1.65rem">TRATAMIENTOS DE DATOS PERSONALES
                        </h6>

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
                            Los datos personales entregados a <strong>AYBAR S.A.C.</strong> serán almacenados mientras dure
                            mi
                            relación contractual, comercial y/o de cualquier índole con <strong>AYBAR S.A.C.</strong> y
                            hasta
                            por 10
                            años de culminada la misma en el banco de datos de su titularidad, con RUC 20603865813 y con
                            domicilio en Av. Circunvalación del Golf Los Incas N° 134 (Torre B Piso 19) Distrito de Santiago
                            de
                            Surco, Provincia y Departamento de Lima.
                            <br><br>
                            <strong>AYBAR S.A.C.</strong> podrá transferir sus datos personales a nivel nacional y/o
                            internacional.
                            sujetándose todos estos a las mismas obligaciones y medidas de seguridad, técnicas y legales
                            descritas en la Ley y el Reglamento.
                            <br><br>
                            De igual modo, la información podrá ser transferida a las autoridades o terceros autorizados
                            por ley bajo la regulación nacional y/o internacional vigente, incluyendo la Ley No. 29733,
                            su reglamento y aquellas que las modifiquen o sustituyan, así como las vinculadas a las
                            autoridades
                            que fiscalizan la labor de <strong>AYBAR S.A.C.</strong><br><br>
                            Declaro conocer mi derecho a solicitar acceso a mis datos personales y conocer su tratamiento,
                            así como, solicitar su actualización, inclusión, rectificación, cancelación y supresión,
                            pudiendo
                            oponerme a su uso o divulgación, pudiendo dirigir mi solicitud de ejercicio de los derechos a
                            través
                            de la dirección especificada en la página web de <strong>AYBAR S.A.C.</strong>, teniendo a salvo
                            además el
                            ejercicio de la tutela de sus derechos ante la Autoridad Nacional de Protección de Datos
                            Personales
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
                            que brinda <strong>AYBAR S.A.C.</strong> y de las empresas subsidiarias, a través de cualquier
                            medio
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
