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
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Contáctenos</li>
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
                        <h3 class="section-title mb-0 pb-2 font-size-25">Déjanos un mensaje</h3>
                    </div>
                    <p class="max-width-830-xl text-gray-90">
                    La empresa Salud Natural del Sur, es una marca registrada en el Departamento de Tarija – Bolivia. con base de operaciones en la ciudad de Tarija, en la Calle Cochabamba Nº 947. Es una empresa que se dedica a la importación de productos naturales, distribución y comercialización.
                    </p>
                    <form class="js-validate" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Input -->
                                <div class="js-form-message mb-4">
                                    <label class="form-label">
                                        Nombres
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="firstName" placeholder="" aria-label="" required="" data-msg="Please enter your frist name." data-error-class="u-has-error" data-success-class="u-has-success" autocomplete="off">
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-md-6">
                                <!-- Input -->
                                <div class="js-form-message mb-4">
                                    <label class="form-label">
                                        Apellidos
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="lastName" placeholder="" aria-label="" required="" data-msg="Please enter your last name." data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-md-12">
                                <!-- Input -->
                                <div class="js-form-message mb-4">
                                    <label class="form-label">
                                        Asunto
                                    </label>
                                    <input type="text" class="form-control" name="Subject" placeholder="" aria-label="" data-msg="Please enter subject." data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                                <!-- End Input -->
                            </div>
                            <div class="col-md-12">
                                <div class="js-form-message mb-4">
                                    <label class="form-label">
                                        Mensaje
                                    </label>

                                    <div class="input-group">
                                        <textarea class="form-control p-5" rows="4" name="text" placeholder=""></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary-dark-w px-5">Enviar mensaje</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 col-xl-6">
                <div class="mb-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d927.8805645775996!2d-64.73639829999999!3d-21.526425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9406480c5b0b34d9%3A0x10eb1906ed6bab01!2sSalud%20Natural%20del%20Sur!5e0!3m2!1ses!2sbo!4v1600483990147!5m2!1ses!2sbo" width="100%" height="288" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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