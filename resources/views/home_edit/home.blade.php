@extends('home_edit.template')


@section('content')




    <p></p>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const liteYoutubes = document.querySelectorAll('lite-youtube');

            liteYoutubes.forEach(liteYoutube => {
                const playButton = liteYoutube.shadowRoot.querySelector('#playButton');

                if (playButton) {
                    // playButton.style.visibility = 'hidden';
                    playButton.style.width = '0px';
                    playButton.style.height = '0px';
                    playButton.style.backgroundRepeat = 'no-repeat';
                }
            });
        });


//traer los projectos
            // Ejecutar cuando el DOM esté listo
    document.addEventListener('DOMContentLoaded', ProjectList);

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


@endsection
