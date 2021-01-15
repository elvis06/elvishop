@extends('plantilla.plantilla')
@section('titulo','SNDSUR | Salud Natural del Sur - Garcinia - Meizi - Paizhisu - Maxman')
@section('contenido')
<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
    <!-- breadcrumb -->
    <div class="bg-gray-13 bg-md-transparent">
        <div class="container">
            <!-- breadcrumb -->
            <div class="my-md-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="/">Inicio</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Sobre Nosotros</li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->


    <div class="container">
        <div class="mb-5">
            <h1 class="text-center">Salud Natural del Sur</h1>
        </div>
        <div class="row mb-10">
            <div class="col-lg-7 col-xl-6 mb-8 mb-lg-0">
                <div class="mr-xl-6">
                    <div class="border-bottom border-color-1 mb-5">
                        <h3 class="section-title mb-0 pb-2 font-size-25">Sobre Nosotros</h3>
                    </div>
                    <p class="max-width-830-xl text-gray-90">
                    Salud Natural del Sur es una Empresa que se preocupa por el bienestar de nuestros clientes, nuestro objetivo es cuidar tu salud ofreciendo productos naturales para Bajar de Peso, Cuidado Personal, Fitnes, Potenciadores y Salud Sexual, brindamos grandes oportunidades de negocios para toda Bolivia, nos encargamos de la importación, producción, distribución y comercialización de productos naturales con precios muy flexibles con ventas a por Mayor y Menor. Nos encargamos de enviarte el producto de una manera rápida, eficaz y eficiente sin importar el lugar que te encuentres.
                    </p>
                    <p class="max-width-830-xl text-gray-90">
                    Nos enfocamos en cuidar tu salud, damos asesoramiento personalizado para cada uno de nuestros clientes para obtener el mejor de los resultados con el uso de nuestros productos, nos basamos en estrictas normas de calidad GMP y control que avalan la calidad y originalidad de nuestros productos.
                    </p>
                    <p class="max-width-830-xl text-gray-90">
                    SALUD NATURAL DEL SUR TE BRINDA <strong>PRODUCTOS 100% NATURALES Y 100% GARANTIZADOS.</strong>
                    </p>
                </div>
            </div>
            <div class="col-lg-5 col-xl-6">
                <div class="col-auto">
                    <img class="img-fluid" src="../../assets/img/416X420/reduce-extreme.png" alt="Image Description">
                </div>
                <div class="border-bottom border-color-1 mb-5">
                    <h3 class="section-title mb-0 pb-2 font-size-25">Nuestra dirección</h3>
                </div>
                <address class="mb-6 text-lh-23">
                    Calle Cochabamba #947, 
                    Ciudad de Tarija – Bolivia
                    <div class="">Support(+591)78246463</div>
                    <div class="">Email: <a class="text-blue text-decoration-on" href="mailto:info@saludnaturaldelsur.com">info@saludnaturaldelsur.com</a></div>
                </address>
                <h5 class="font-size-14 font-weight-bold mb-3">Horas de atención</h5>
                <div class="">Lunea a Viernes: 8am-8pm</div>
                <div class="mb-6">Sábados y domingos: 9am-11pm</div>
                <h5 class="font-size-14 font-weight-bold mb-3">Trabajo</h5>
                <p class="text-gray-90">Si está interesado en trabajar con SNDSUR, envíenos un correo electrónico: <a class="text-blue text-decoration-on" href="mailto:miriam@saludnaturaldelsur.com">miriam@saludnaturaldelsur.com</a></p>
            </div>
        </div>
        <!-- Brand Carousel -->
        <div class="mb-8">
            <div class="py-2 border-top border-bottom">
                <div class="js-slick-carousel u-slick my-1"
                    data-slides-show="5"
                    data-slides-scroll="1"
                    data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-normal u-slick__arrow-centered--y"
                    data-arrow-left-classes="fa fa-angle-left u-slick__arrow-classic-inner--left z-index-9"
                    data-arrow-right-classes="fa fa-angle-right u-slick__arrow-classic-inner--right"
                    data-responsive='[{
                        "breakpoint": 992,
                        "settings": {
                            "slidesToShow": 2
                        }
                    }, {
                        "breakpoint": 768,
                        "settings": {
                            "slidesToShow": 1
                        }
                    }, {
                        "breakpoint": 554,
                        "settings": {
                            "slidesToShow": 1
                        }
                    }]'>
                    <div class="js-slide">
                        <a href="tel:+59178246463">
                            <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img2.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="tel:+59178246463">
                            <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img1.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="tel:+59178246463">
                            <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img3.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="tel:+59178246463">
                            <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img4.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="tel:+59178246463">
                            <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img5.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="tel:+59178246463">
                            <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img6.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="tel:+59178246463">
                            <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img7.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="tel:+59178246463">
                            <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img8.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="tel:+59178246463">
                            <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img9.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="tel:+59178246463">
                            <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img10.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="tel:+59178246463">
                            <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img11.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="tel:+59178246463">
                            <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img12.png" alt="Image Description">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Brand Carousel -->
    </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->
@endsection