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
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Búsqueda</li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->

    <div class="container">
        <div class="row mb-8">
            <div class="d-none d-xl-block col-xl-3 col-wd-2gdot5">
                <div class="mb-8">
                    <div class="border-bottom border-color-1 mb-5">
                        <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Más Productos</h3>
                    </div>
                    <ul class="list-unstyled">
                        @foreach($productos as $producto)
                        <li class="mb-4">
                            <div class="row">
                                <div class="col-auto">
                                    <a href="{{ url($producto->slug) }}" class="d-block width-75">
                                        <img class="img-fluid" src="/imagenes/{{$producto->id}}/212x200.jpg" alt="Image Description">
                                    </a>
                                </div>
                                <div class="col">
                                    <h3 class="text-lh-1dot2 font-size-14 mb-0"><a href="{{ url($producto->slug) }}">{{ $producto->nombre}}</a></h3>
                                    <div class="text-warning text-ls-n2 font-size-16 mb-1" style="width: 80px;">
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="far fa-star text-muted"></small>
                                    </div>
                                    <div class="font-weight-bold">
                                        <ins class="font-size-15 text-decoration-none d-block">Bs. {{ $producto->precio_actual }}</ins>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-xl-9 col-wd-9gdot5">
                <!-- Shop-control-bar Title -->
                <div class="d-block d-md-flex flex-center-between mb-3">
                    <h3 class="font-size-25 mb-2 mb-md-0"><i class="ec ec-search font-size-40"></i>{{ $buscar }}</h3>
                </div>
                <!-- End shop-control-bar Title -->
                <!-- Shop Body -->
                <!-- Tab Content -->
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade pt-2 show active" id="pills-three-example1" role="tabpanel" aria-labelledby="pills-three-example1-tab" data-target-group="groups">
                        <ul class="d-block list-unstyled products-group prodcut-list-view">
                            @foreach($prod as $producto)
                            <li class="product-item remove-divider">
                                <div class="product-item__outer w-100">
                                    <div class="product-item__inner remove-prodcut-hover py-4 row">
                                        <div class="product-item__header col-6 col-md-4">
                                            <div class="mb-2">
                                                <a href="{{ url($producto->slug) }}" class="d-block text-center"><img class="img-fluid" src="/imagenes/{{$producto->id}}/212x200.jpg" alt="Image Description"></a>
                                            </div>
                                        </div>
                                        <div class="product-item__body col-6 col-md-5">
                                            <div class="pr-lg-10">
                                                <h5 class="mb-2 product-item__title"><a href="{{ url($producto->slug) }}" class="text-blue font-weight-bold">{{ $producto->nombre }}</a></h5>
                                                <div class="prodcut-price mb-2 d-md-none">
                                                    <div class="text-gray-100">Bs. {{ $producto->precio_actual }}</div>
                                                </div>
                                                <div class="mb-3 d-none d-md-block">
                                                    <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                        <div class="text-warning mr-2">
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                        </div>
                                                        <span class="text-secondary">(40)</span>
                                                    </a>
                                                </div>
                                                <ul class="font-size-12 p-0 text-gray-110 mb-4 d-none d-md-block">
                                                    <li class="mb-1">{!! $producto->descripcion_corta !!}</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-item__footer col-md-3 d-md-block">
                                            <div class="mb-3">
                                                <div class="prodcut-price mb-2">
                                                    <div class="text-gray-100">Bs. {{ $producto->precio_actual }}</div>
                                                </div>
                                                <div class="prodcut-add-cart">
                                                    <a href="{{ route('cart-add', $producto->slug) }}" class="btn btn-sm btn-block btn-primary-dark btn-wide transition-3d-hover">Añadir al carrito</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- End Tab Content -->
                <!-- End Shop Body -->
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