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
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">{{ $categoria->nombre }}</li>
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
                <div class="mb-8 border border-width-2 border-color-3 borders-radius-6">
                    <!-- List -->
                    <ul id="sidebarNav" class="list-unstyled mb-0 sidebar-navbar">
                        <li>
                            <a class="dropdown-toggle dropdown-toggle-collapse dropdown-title" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav1Collapse" data-target="#sidebarNav1Collapse">
                                Show All Categories
                            </a>

                            <div id="sidebarNav1Collapse" class="collapse" data-parent="#sidebarNav">
                                <ul id="sidebarNav1" class="list-unstyled dropdown-list">
                                    <!-- Menu List -->
                                    <li><a class="dropdown-item" href="#">Accessories<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                    <li><a class="dropdown-item" href="#">Cameras & Photography<span class="text-gray-25 font-size-12 font-weight-normal"> (11)</span></a></li>
                                    <li><a class="dropdown-item" href="#">Computer Components<span class="text-gray-25 font-size-12 font-weight-normal"> (22)</span></a></li>
                                    <li><a class="dropdown-item" href="#">Gadgets<span class="text-gray-25 font-size-12 font-weight-normal"> (5)</span></a></li>
                                    <li><a class="dropdown-item" href="#">Home Entertainment<span class="text-gray-25 font-size-12 font-weight-normal"> (7)</span></a></li>
                                    <li><a class="dropdown-item" href="#">Laptops & Computers<span class="text-gray-25 font-size-12 font-weight-normal"> (42)</span></a></li>
                                    <li><a class="dropdown-item" href="#">Printers & Ink<span class="text-gray-25 font-size-12 font-weight-normal"> (63)</span></a></li>
                                    <li><a class="dropdown-item" href="#">Smart Phones & Tablets<span class="text-gray-25 font-size-12 font-weight-normal"> (11)</span></a></li>
                                    <li><a class="dropdown-item" href="#">TV & Audio<span class="text-gray-25 font-size-12 font-weight-normal"> (66)</span></a></li>
                                    <li><a class="dropdown-item" href="#">Video Games & Consoles<span class="text-gray-25 font-size-12 font-weight-normal"> (31)</span></a></li>
                                    <!-- End Menu List -->
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="dropdown-current active" href="#">Smart Phones & Tablets <span class="text-gray-25 font-size-12 font-weight-normal"> (50)</span></a>

                            <ul class="list-unstyled dropdown-list">
                                <!-- Menu List -->
                                <li><a class="dropdown-item" href="#">Smartphones<span class="text-gray-25 font-size-12 font-weight-normal"> (30)</span></a></li>
                                <li><a class="dropdown-item" href="#">Tablets<span class="text-gray-25 font-size-12 font-weight-normal"> (20)</span></a></li>
                                <!-- End Menu List -->
                            </ul>
                        </li>
                    </ul>
                    <!-- End List -->
                </div>
                <div class="mb-6">
                    <div class="border-bottom border-color-1 mb-5">
                        <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Filters</h3>
                    </div>
                    <div class="border-bottom pb-4 mb-4">
                        <h4 class="font-size-14 mb-3 font-weight-bold">Brands</h4>

                        <!-- Checkboxes -->
                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="brandAdidas">
                                <label class="custom-control-label" for="brandAdidas">Adidas
                                    <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="brandNewBalance">
                                <label class="custom-control-label" for="brandNewBalance">New Balance
                                    <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="brandNike">
                                <label class="custom-control-label" for="brandNike">Nike
                                    <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="brandFredPerry">
                                <label class="custom-control-label" for="brandFredPerry">Fred Perry
                                    <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="brandTnf">
                                <label class="custom-control-label" for="brandTnf">The North Face
                                    <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                </label>
                            </div>
                        </div>
                        <!-- End Checkboxes -->

                        <!-- View More - Collapse -->
                        <div class="collapse" id="collapseBrand">
                            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="brandGucci">
                                    <label class="custom-control-label" for="brandGucci">Gucci
                                        <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="brandMango">
                                    <label class="custom-control-label" for="brandMango">Mango
                                        <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- End View More - Collapse -->

                        <!-- Link -->
                        <a class="link link-collapse small font-size-13 text-gray-27 d-inline-flex mt-2" data-toggle="collapse" href="#collapseBrand" role="button" aria-expanded="false" aria-controls="collapseBrand">
                            <span class="link__icon text-gray-27 bg-white">
                                <span class="link__icon-inner">+</span>
                            </span>
                            <span class="link-collapse__default">Show more</span>
                            <span class="link-collapse__active">Show less</span>
                        </a>
                        <!-- End Link -->
                    </div>
                </div>
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
                    <h3 class="font-size-25 mb-2 mb-md-0">{{ $categoria->nombre }}</h3>
                    <p class="font-size-14 text-gray-90 mb-0">{{ $categoria->descripcion }}</p>
                </div>
                <!-- End shop-control-bar Title -->
                <!-- Shop Body -->
                <!-- Tab Content -->
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade pt-2 show active" id="pills-three-example1" role="tabpanel" aria-labelledby="pills-three-example1-tab" data-target-group="groups">
                        <ul class="d-block list-unstyled products-group prodcut-list-view">
                            @foreach($categoria->products as $producto)
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
                                                <div class="mb-2"><a href="{{ url('/categoria/'.$categoria->slug) }}" class="font-size-12 text-gray-5">{{ $categoria->nombre }}</a></div>
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
                                                    <a href="#" class="btn btn-sm btn-block btn-primary-dark btn-wide transition-3d-hover">Añadir al carrito</a>
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