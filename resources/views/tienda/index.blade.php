@extends('plantilla.plantilla')
@section('titulo','SNDSUR | Salud Natural del Sur - Garcinia - Meizi - Paizhisu - Maxman')
@section('contenido')
<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
	<!-- Slider & Banner Section -->
	<div class="mb-4">
		<div class="container overflow-hidden">
			<div class="row">
				<!-- Slider -->
				<div class="col-xl pr-xl-2 mb-4 mb-xl-0">
					<div class="bg-img-hero mr-xl-1 height-410-xl max-width-1060-wd overflow-hidden" style="background-image: url(../../assets/img/1920X422/img1.jpg);">
						<div class="js-slick-carousel u-slick"
							data-autoplay="true"
							data-speed="7000"
							data-pagi-classes="text-center position-absolute right-0 bottom-0 left-0 u-slick__pagination u-slick__pagination--long justify-content-start mb-3 mb-md-4 offset-xl-3 pl-2 pb-1">
							<div class="js-slide bg-img-hero-center">
						<div class="row min-height-420 py-7 py-md-0">
							<div class="offset-xl-3 col-xl-4 col-6 mt-md-8">
								<h1 class="font-size-64 text-lh-57 font-weight-light"
									data-scs-animation-in="fadeInUp">
									Garcinia Cambogia
								</h1>
								<h6 class="font-size-15 font-weight-bold mb-3"
									data-scs-animation-in="fadeInUp"
									data-scs-animation-delay="200">Capsulas Doradas
								</h6>
								<div class="mb-4"
									data-scs-animation-in="fadeInUp"
									data-scs-animation-delay="300">
									<div class="font-size-50 font-weight-bold text-lh-45">
										<sup class="">Bs.</sup>210.00<sup class=""></sup>
									</div>
								</div>
								<a href="{{ url('/garcinia-cambogia-capsulas-doradas') }}" class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16"
									data-scs-animation-in="fadeInUp"
									data-scs-animation-delay="400">
									Comprar ahora
								</a>
							</div>
							<div class="col-xl-5 col-6  d-flex align-items-center"
								data-scs-animation-in="zoomIn"
								data-scs-animation-delay="500">
								<img class="img-fluid" src="../../assets/img/416X420/img1.png" alt="Image Description">
							</div>
						</div>
					</div>
					@foreach ($productos as $producto)
					@if($producto->sliderprincipal == 'Si')
					<div class="js-slide bg-img-hero-center" data-animation-delay="0">
						<div class="row min-height-420 py-7 py-md-0">
							<div class="offset-xl-3 col-xl-4 col-6 mt-md-8">
								<h1 class="font-size-64 text-lh-57 font-weight-light"
									data-scs-animation-in="fadeInUp">
									{{ $producto->nombre }}
								</h1>
								<h6 class="font-size-15 font-weight-bold mb-3"
									data-scs-animation-in="fadeInUp"
									data-scs-animation-delay="200">
								</h6>
								<div class="mb-4"
									data-scs-animation-in="fadeInUp"
									data-scs-animation-delay="300">
									<div class="font-size-50 font-weight-bold text-lh-45">
										<sup class="">Bs.</sup>{{ $producto->precio_actual }}<sup class=""></sup>
									</div>
								</div>
								<a href="{{$producto->slug}}" class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16"
									data-scs-animation-in="fadeInUp"
									data-scs-animation-delay="400">
									Comprar ahora
								</a>
							</div>
							@if($producto->images->count()<=0)
							<div class="col-xl-5 col-6  d-flex align-items-center"
								data-scs-animation-in="fadeInUp"
								data-scs-animation-delay="500">
								<img class="img-fluid" src="../../assets/img/416X420/img2.png" alt="Image Description">
							</div>
							@else
							<div class="col-xl-5 col-6  d-flex align-items-center"
								data-scs-animation-in="fadeInUp"
								data-scs-animation-delay="500">
								<img class="img-fluid" src="/imagenes/{{$producto->id}}/banner.png" alt="Image Description">
							</div>
							@endif
						</div>
					</div>
					@endif
					@endforeach
				</div>
				<!-- End Slider -->
				
			</div>
		</div>
	</div>
	<!-- End Slider & Banner Section -->

	<div class="container">
		<!-- Banner -->
		<div class="mb-5">
			<div class="row">
				<div class="col-md-6 mb-4 mb-xl-0 col-xl-3">
					<a href="capsulas-maxman-xl" class="d-black text-gray-90">
						<div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
							<div class="col-6 col-xl-5 col-wd-6 pr-0">
								<img class="img-fluid" src="../../assets/img/190X150/img1.png" alt="Image Description">
							</div>
							<div class="col-6 col-xl-7 col-wd-6">
								<div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
									CAPSULAS MAXMAN <strong>XL</strong>
								</div>
								<div class="link text-gray-90 font-weight-bold font-size-15" href="#">
									Comprar ahora
									<span class="link__icon ml-1">
										<span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
									</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6 mb-4 mb-xl-0 col-xl-3">
					<a href="capsulas-maxman-ix" class="d-black text-gray-90">
						<div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
							<div class="col-6 col-xl-5 col-wd-6 pr-0">
								<img class="img-fluid" src="../../assets/img/190X150/img2.jpg" alt="Image Description">
							</div>
							<div class="col-6 col-xl-7 col-wd-6">
								<div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
								CAPSULAS MAXMAN <strong>IX</strong>
								</div>
								<div class="link text-gray-90 font-weight-bold font-size-15" href="#">
									Comprar ahora
									<span class="link__icon ml-1">
										<span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
									</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6 mb-4 mb-xl-0 col-xl-3">
					<a href="capsulas-african-black-ant" class="d-black text-gray-90">
						<div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
							<div class="col-6 col-xl-5 col-wd-6 pr-0">
								<img class="img-fluid" src="../../assets/img/190X150/img3.jpg" alt="Image Description">
							</div>
							<div class="col-6 col-xl-7 col-wd-6">
								<div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
									CAPSULAS AFRICAN <strong>BLACK ANT</strong>
								</div>
								<div class="link text-gray-90 font-weight-bold font-size-15" href="#">
									Comprar ahora
									<span class="link__icon ml-1">
										<span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
									</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6 mb-4 mb-xl-0 col-xl-3">
					<a href="tabletas-g-female-oral" class="d-black text-gray-90">
						<div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
							<div class="col-6 col-xl-5 col-wd-6 pr-0">
								<img class="img-fluid" src="../../assets/img/190X150/img4.png" alt="Image Description">
							</div>
							<div class="col-6 col-xl-7 col-wd-6">
								<div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
								TABLETAS G-FEMALE <strong>ORAL</strong>
								</div>
								<div class="link text-gray-90 font-weight-bold font-size-15" href="#">
									Comprar ahora
									<span class="link__icon ml-1">
										<span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
									</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<!-- End Banner -->
	</div>
	<div class="container">
		<!-- Prodcut-cards-carousel -->
		<div class="space-top-2">
			<dv class=" d-flex justify-content-between border-bottom border-color-1 flex-md-nowrap flex-wrap border-sm-bottom-0">
				<h3 class="section-title mb-0 pb-2 font-size-22">Más vendidos</h3>
				<ul class="nav nav-pills mb-2 pt-3 pt-md-0 mb-0 border-top border-color-1 border-md-top-0 align-items-center font-size-15 font-size-15-md flex-nowrap flex-md-wrap overflow-auto overflow-md-visble">
					<li class="nav-item flex-shrink-0 flex-md-shrink-1">
						<a class="text-gray-90 btn btn-outline-primary border-width-2 rounded-pill py-1 px-4 font-size-15 text-lh-19 font-size-15-md" href="#">Top 10</a>
					</li>
					<li class="nav-item flex-shrink-0 flex-md-shrink-1">
						<a class="nav-link text-gray-8" href="{{ url('/categoria/salud-y-belleza') }}">Salud & Belleza</a>
					</li>
					<li class="nav-item flex-shrink-0 flex-md-shrink-1">
						<a class="nav-link text-gray-8" href="{{ url('/categoria/salud-sexual') }}">Salud Sexual</a>
					</li>
				</ul>
			</dv>
			<div class="js-slick-carousel u-slick u-slick--gutters-2 overflow-hidden u-slick-overflow-visble pt-3 pb-6"
				data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-4">
				<div class="js-slide">
					<ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
						@foreach($productos as $producto)
						@if($producto->id <= 6)
						<li class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
							<div class="product-item__outer h-100">
								<div class="product-item__inner p-md-3 row no-gutters">
									<div class="col col-lg-auto product-media-left">
										@if($producto->images->count()<=0)
										<a href="{{$producto->slug}}" class="max-width-150 d-block"><img class="img-fluid" src="../../assets/img/150X140/img1.jpg" alt="Image Description"></a>
										@else
										<a href="{{$producto->slug}}" class="max-width-150 d-block"><img class="img-fluid" src="/imagenes/{{$producto->id}}/150x140.jpg" alt="Image Description"></a>
										@endif
									</div>
									<div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
										<div class="mb-4">
											<div class="mb-2"><a href="{{ url('/categoria/'.$producto->category->slug) }}" class="font-size-12 text-gray-5">{{ $producto->category->nombre }}</a></div>
											<h5 class="product-item__title"><a href="{{$producto->slug}}" class="text-blue font-weight-bold">{{ $producto->nombre }}</a></h5>
										</div>
										<div class="flex-center-between mb-3">
											<div class="prodcut-price">
												<div class="text-gray-100">Bs. {{ $producto->precio_actual }}</div>
											</div>
											<div class="d-none d-xl-block prodcut-add-cart">
												<a href="#" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						@endif
						@endforeach
					</ul>
				</div>
				<div class="js-slide">
					<ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
						@foreach($productos as $producto)
						@if($producto->id > 6)
						<li class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
							<div class="product-item__outer h-100">
								<div class="product-item__inner p-md-3 row no-gutters">
									<div class="col col-lg-auto product-media-left">
										<a href="#" class="max-width-150 d-block"><img class="img-fluid" src="/imagenes/{{$producto->id}}/150x140.jpg" alt="Image Description"></a>
									</div>
									<div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
										<div class="mb-4">
											<div class="mb-2"><a href="#" class="font-size-12 text-gray-5">{{ $producto->category->nombre }}</a></div>
											<h5 class="product-item__title"><a href="#" class="text-blue font-weight-bold">{{ $producto->nombre }}</a></h5>
										</div>
										<div class="flex-center-between mb-3">
											<div class="prodcut-price">
												<div class="text-gray-100">Bs. {{ $producto->precio_actual }}</div>
											</div>
											<div class="d-none d-xl-block prodcut-add-cart">
												<a href="#" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						@endif
						@endforeach
					</ul>
				</div>
			</div>
		</div>
		<!-- End Prodcut-cards-carousel -->
		<!-- Banner 2 columns -->
		<div class="mb-8">
			<div class="row">
				<div class="col-md-6 mb-3 mb-md-0">
					<a href="{{ url('/categoria/salud-y-belleza') }}">
						<img class="img-fluid" src="../../assets/img/690X150/img1.jpg" alt="Image Description">
					</a>
				</div>
				<div class="col-md-6">
					<a href="{{ url('/categoria/salud-sexual') }}">
						<img class="img-fluid" src="../../assets/img/690X150/img1.jpg" alt="Image Description">
					</a>
				</div>
			</div>
		</div>
		<!-- End Banner 2 columns -->
		<!-- Recently viewed -->
		<div class="mb-6">
			<div class="position-relative">
				<div class="border-bottom border-color-1 mb-2">
					<h3 class="section-title mb-0 pb-2 font-size-22">Nuestros Productos</h3>
				</div>
				<div class="js-slick-carousel u-slick position-static overflow-hidden u-slick-overflow-visble pb-7 pt-2 px-1"
					data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 mt-md-0"
					data-slides-show="7"
					data-slides-scroll="1"
					data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
					data-arrow-left-classes="fa fa-angle-left right-1"
					data-arrow-right-classes="fa fa-angle-right right-0"
					data-responsive='[{
						"breakpoint": 1400,
						"settings": {
						"slidesToShow": 6
						}
					}, {
						"breakpoint": 1200,
						"settings": {
							"slidesToShow": 4
						}
					}, {
						"breakpoint": 992,
						"settings": {
						"slidesToShow": 3
						}
					}, {
						"breakpoint": 768,
						"settings": {
						"slidesToShow": 2
						}
					}, {
						"breakpoint": 554,
						"settings": {
						"slidesToShow": 2
						}
					}]'>
					@foreach ($productos as $producto)
					<div class="js-slide products-group">
						<div class="product-item">
							<div class="product-item__outer h-100">
								<div class="product-item__inner px-wd-4 p-2 p-md-3">
									<div class="product-item__body pb-xl-2">
										<div class="mb-2"><a href="{{ url('/categoria/'.$producto->category->slug) }}" class="font-size-12 text-gray-5">{{ $producto->category->nombre }}</a></div>
										<h5 class="mb-1 product-item__title"><a href="{{$producto->slug}}" class="text-blue font-weight-bold">{{ $producto->nombre }}</a></h5>
										<div class="mb-2">
											@if($producto->images->count()<=0)
											<a href="{{$producto->slug}}" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
											@else
											<a href="{{$producto->slug}}" class="d-block text-center"><img class="img-fluid" src="/imagenes/{{$producto->id}}/212x200.jpg" alt="Image Description"></a>
											@endif
										</div>
										<div class="flex-center-between mb-1">
											<div class="prodcut-price">
												<div class="text-gray-100">Bs. {{ $producto->precio_actual }}</div>
											</div>
											<div class="d-none d-xl-block prodcut-add-cart">
												<a href="#" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<!-- End Recently viewed -->
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