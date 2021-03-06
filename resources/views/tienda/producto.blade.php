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
                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">{{ $producto->nombre }}</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- End breadcrumb -->
                </div>
            </div>
            <!-- End breadcrumb -->

            <div class="container">
                <div class="row">
                    <div class="d-none d-xl-block col-xl-3 col-wd-2gdot5">
                        <aside class="mb-7">
                            <div class="border-bottom border-color-1 mb-5">
                                <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">{{ $producto->category->nombre }}</h3>
                            </div>
                            <div class="list-group">
                                @foreach($productos as $p)
                                @if($producto->category->nombre == $p->category->nombre)
                                <a href="{{url($p->slug)}}" class="font-bold-on-hover px-3 py-2 list-group-item list-group-item-action border-right-0 border-left-0 border-bottom-0"><i class="mr-2 fas fa-angle-right"></i> {{ $p->nombre }}</a>
                                @endif
                                @endforeach
                            </div>
                        </aside>
                        <div class="mb-8">
                            <div class="border-bottom border-color-1 mb-5">
                                <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Más Productos</h3>
                            </div>
                            <ul class="list-unstyled">
                                @foreach($productos as $p)
                                <li class="mb-4">
                                    <div class="row">
                                        <div class="col-auto">
                                            <a href="{{$p->slug}}" class="d-block width-75">
                                                <img class="img-fluid" src="/imagenes/{{$p->id}}/300x300.jpg" alt="Image Description">
                                            </a>
                                        </div>
                                        <div class="col">
                                            <h3 class="text-lh-1dot2 font-size-14 mb-0"><a href="{{$p->slug}}">{{$p->nombre}}</a></h3>
                                            <div class="text-warning text-ls-n2 font-size-16 mb-1" style="width: 80px;">
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="far fa-star text-muted"></small>
                                            </div>
                                            <div class="font-weight-bold font-size-15">
                                                Bs. {{$p->precio_actual}}
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-9 col-wd-9gdot5">
                        <!-- Single Product Body -->
                        <div class="mb-xl-14 mb-6">
                            <div class="row">
                                <div class="col-md-5 mb-4 mb-md-0">
                                    <div id="sliderSyncingNav" class="js-slick-carousel u-slick mb-2"
                                        data-infinite="true"
                                        data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle"
                                        data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4"
                                        data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4"
                                        data-nav-for="#sliderSyncingThumb">
                                        <div class="js-slide">
                                            <img class="img-fluid" src="/imagenes/{{$producto->id}}/1-720x660.jpg" alt="Image Description">
                                        </div>
                                        <div class="js-slide">
                                            <img class="img-fluid" src="/imagenes/{{$producto->id}}/2-720x660.jpg" alt="Image Description">
                                        </div>
                                        <div class="js-slide">
                                            <img class="img-fluid" src="/imagenes/{{$producto->id}}/3-720x660.jpg" alt="Image Description">
                                        </div>
                                        <div class="js-slide">
                                            <img class="img-fluid" src="/imagenes/{{$producto->id}}/4-720x660.jpg" alt="Image Description">
                                        </div>
                                        <div class="js-slide">
                                            <img class="img-fluid" src="/imagenes/{{$producto->id}}/5-720x660.jpg" alt="Image Description">
                                        </div>
                                    </div>

                                    <div id="sliderSyncingThumb" class="js-slick-carousel u-slick u-slick--slider-syncing u-slick--gutters-1 u-slick--transform-off"
                                        data-infinite="true"
                                        data-slides-show="5"
                                        data-is-thumbs="true"
                                        data-nav-for="#sliderSyncingNav">
                                        <div class="js-slide" style="cursor: pointer;">
                                            <img class="img-fluid" src="/imagenes/{{$producto->id}}/1-720x660.jpg" alt="Image Description">
                                        </div>
                                        <div class="js-slide" style="cursor: pointer;">
                                            <img class="img-fluid" src="/imagenes/{{$producto->id}}/2-720x660.jpg" alt="Image Description">
                                        </div>
                                        <div class="js-slide" style="cursor: pointer;">
                                            <img class="img-fluid" src="/imagenes/{{$producto->id}}/3-720x660.jpg" alt="Image Description">
                                        </div>
                                        <div class="js-slide" style="cursor: pointer;">
                                            <img class="img-fluid" src="/imagenes/{{$producto->id}}/4-720x660.jpg" alt="Image Description">
                                        </div>
                                        <div class="js-slide" style="cursor: pointer;">
                                            <img class="img-fluid" src="/imagenes/{{$producto->id}}/5-720x660.jpg" alt="Image Description">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 mb-md-6 mb-lg-0">
                                    <div class="mb-2">
                                        <div class="border-bottom mb-3 pb-md-1 pb-3">
                                            <a href="{{ url($producto->category->slug) }}" class="font-size-12 text-gray-5 mb-2 d-inline-block">{{ $producto->category->nombre }}</a>
                                            <h2 class="font-size-25 text-lh-1dot2">{{ $producto->nombre }}</h2>
                                            <div class="d-md-flex align-items-center">
                                                <a href="{{ url($producto->slug) }}" class="max-width-150 ml-n2 mb-2 mb-md-0 d-block"><img class="img-fluid" src="../../assets/img/200X60/img2.png" alt="Image Description"></a>
                                                <div class="ml-md-3 text-gray-9 font-size-14">Disponibles: <span class="text-green font-weight-bold">{{ $producto->cantidad }} en stock</span></div>
                                            </div>
                                        </div>
                                        {!! $producto->descripcion_corta !!}
                                        <div class="mb-4">
                                            <div class="d-flex align-items-baseline">
                                                <ins class="font-size-36 text-decoration-none">Bs. {{ $producto->precio_actual }}</ins>
                                                <del class="font-size-20 ml-2 text-gray-6">Bs. {{ $producto->precio_anterior }}</del>
                                            </div>
                                        </div>
                                        <div class="d-md-flex align-items-end mb-3">
                                            <div class="ml-md-3">
                                                <a href="{{ route('cart-add', $producto->slug) }}" class="btn px-5 btn-primary-dark transition-3d-hover"><i class="ec ec-add-to-cart mr-2 font-size-20"></i> Añadir al carrito</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product Body -->
                        <!-- Single Product Tab -->
                        <div class="mb-8">
                            <div class="position-relative mx-md-6">
                                <ul class="nav nav-classic nav-tab nav-tab-lg justify-content-xl-center flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble border-0 pb-1 pb-xl-0 mb-n1 mb-xl-0" id="pills-tab-8" role="tablist">
                                    <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                        <a class="nav-link active" id="Jpills-one-example1-tab" data-toggle="pill" href="#Jpills-one-example1" role="tab" aria-controls="Jpills-one-example1" aria-selected="true">Descripciones</a>
                                    </li>
                                    <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                        <a class="nav-link" id="Jpills-four-example1-tab" data-toggle="pill" href="#Jpills-four-example1" role="tab" aria-controls="Jpills-four-example1" aria-selected="false">Comentarios</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Tab Content -->
                            <div class="borders-radius-17 border p-4 mt-4 mt-md-0 px-lg-10 px-xl-4 px-wd-10 py-lg-9 py-xl-5 py-wd-9">
                                <div class="tab-content" id="Jpills-tabContent">
                                    <div class="tab-pane fade active show" id="Jpills-one-example1" role="tabpanel" aria-labelledby="Jpills-one-example1-tab">
                                        <h3 class="font-size-24 mb-3">{{ $producto->nombre }}</h3>
                                        {!! $producto->descripcion_larga !!}
                                        
                                    </div>
                                    <div class="tab-pane fade" id="Jpills-four-example1" role="tabpanel" aria-labelledby="Jpills-four-example1-tab">
                                        <div class="row mb-8">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <h3 class="font-size-18 mb-6">Based on 3 reviews</h3>
                                                    <h2 class="font-size-30 font-weight-bold text-lh-1 mb-0">4.3</h2>
                                                    <div class="text-lh-1">overall</div>
                                                </div>

                                                <!-- Ratings -->
                                                <ul class="list-unstyled">
                                                    <li class="py-1">
                                                        <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                                                            <div class="col-auto mb-2 mb-md-0">
                                                                <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="far fa-star text-muted"></small>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto mb-2 mb-md-0">
                                                                <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto text-right">
                                                                <span class="text-gray-90">205</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-1">
                                                        <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                                                            <div class="col-auto mb-2 mb-md-0">
                                                                <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="far fa-star text-muted"></small>
                                                                    <small class="far fa-star text-muted"></small>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto mb-2 mb-md-0">
                                                                <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                                    <div class="progress-bar" role="progressbar" style="width: 53%;" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto text-right">
                                                                <span class="text-gray-90">55</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-1">
                                                        <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                                                            <div class="col-auto mb-2 mb-md-0">
                                                                <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="far fa-star text-muted"></small>
                                                                    <small class="far fa-star text-muted"></small>
                                                                    <small class="far fa-star text-muted"></small>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto mb-2 mb-md-0">
                                                                <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                                    <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto text-right">
                                                                <span class="text-gray-90">23</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-1">
                                                        <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                                                            <div class="col-auto mb-2 mb-md-0">
                                                                <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="far fa-star text-muted"></small>
                                                                    <small class="far fa-star text-muted"></small>
                                                                    <small class="far fa-star text-muted"></small>
                                                                    <small class="far fa-star text-muted"></small>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto mb-2 mb-md-0">
                                                                <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto text-right">
                                                                <span class="text-muted">0</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-1">
                                                        <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                                                            <div class="col-auto mb-2 mb-md-0">
                                                                <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="far fa-star text-muted"></small>
                                                                    <small class="far fa-star text-muted"></small>
                                                                    <small class="far fa-star text-muted"></small>
                                                                    <small class="far fa-star text-muted"></small>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto mb-2 mb-md-0">
                                                                <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                                    <div class="progress-bar" role="progressbar" style="width: 1%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto text-right">
                                                                <span class="text-gray-90">4</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- End Ratings -->
                                            </div>
                                            <div class="col-md-6">
                                                <h3 class="font-size-18 mb-5">Add a review</h3>
                                                <!-- Form -->
                                                <form class="js-validate">
                                                    <div class="row align-items-center mb-4">
                                                        <div class="col-md-4 col-lg-3">
                                                            <label for="rating" class="form-label mb-0">Your Review</label>
                                                        </div>
                                                        <div class="col-md-8 col-lg-9">
                                                            <a href="#" class="d-block">
                                                                <div class="text-warning text-ls-n2 font-size-16">
                                                                    <small class="far fa-star text-muted"></small>
                                                                    <small class="far fa-star text-muted"></small>
                                                                    <small class="far fa-star text-muted"></small>
                                                                    <small class="far fa-star text-muted"></small>
                                                                    <small class="far fa-star text-muted"></small>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="js-form-message form-group mb-3 row">
                                                        <div class="col-md-4 col-lg-3">
                                                            <label for="descriptionTextarea" class="form-label">Your Review</label>
                                                        </div>
                                                        <div class="col-md-8 col-lg-9">
                                                            <textarea class="form-control" rows="3" id="descriptionTextarea"
                                                            data-msg="Please enter your message."
                                                            data-error-class="u-has-error"
                                                            data-success-class="u-has-success"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="js-form-message form-group mb-3 row">
                                                        <div class="col-md-4 col-lg-3">
                                                            <label for="inputName" class="form-label">Name <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input type="text" class="form-control" name="name" id="inputName" aria-label="Alex Hecker" required
                                                            data-msg="Please enter your name."
                                                            data-error-class="u-has-error"
                                                            data-success-class="u-has-success">
                                                        </div>
                                                    </div>
                                                    <div class="js-form-message form-group mb-3 row">
                                                        <div class="col-md-4 col-lg-3">
                                                            <label for="emailAddress" class="form-label">Email <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input type="email" class="form-control" name="emailAddress" id="emailAddress" aria-label="alexhecker@pixeel.com" required
                                                            data-msg="Please enter a valid email address."
                                                            data-error-class="u-has-error"
                                                            data-success-class="u-has-success">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="offset-md-4 offset-lg-3 col-auto">
                                                            <button type="submit" class="btn btn-primary-dark btn-wide transition-3d-hover">Add Review</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- End Form -->
                                            </div>
                                        </div>
                                        <!-- Review -->
                                        <div class="border-bottom border-color-1 pb-4 mb-4">
                                            <!-- Review Rating -->
                                            <div class="d-flex justify-content-between align-items-center text-secondary font-size-1 mb-2">
                                                <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                                    <small class="fas fa-star"></small>
                                                    <small class="fas fa-star"></small>
                                                    <small class="fas fa-star"></small>
                                                    <small class="far fa-star text-muted"></small>
                                                    <small class="far fa-star text-muted"></small>
                                                </div>
                                            </div>
                                            <!-- End Review Rating -->

                                            <p class="text-gray-90">Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis. Donec luctus condimentum ante et euismod.</p>

                                            <!-- Reviewer -->
                                            <div class="mb-2">
                                                <strong>John Doe</strong>
                                                <span class="font-size-13 text-gray-23">- April 3, 2019</span>
                                            </div>
                                            <!-- End Reviewer -->
                                        </div>
                                        <!-- End Review -->
                                        <!-- Review -->
                                        <div class="border-bottom border-color-1 pb-4 mb-4">
                                            <!-- Review Rating -->
                                            <div class="d-flex justify-content-between align-items-center text-secondary font-size-1 mb-2">
                                                <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                                    <small class="fas fa-star"></small>
                                                    <small class="fas fa-star"></small>
                                                    <small class="fas fa-star"></small>
                                                    <small class="fas fa-star"></small>
                                                    <small class="fas fa-star"></small>
                                                </div>
                                            </div>
                                            <!-- End Review Rating -->

                                            <p class="text-gray-90">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse eget facilisis odio. Duis sodales augue eu tincidunt faucibus. Etiam justo ligula, placerat ac augue id, volutpat porta dui.</p>

                                            <!-- Reviewer -->
                                            <div class="mb-2">
                                                <strong>Anna Kowalsky</strong>
                                                <span class="font-size-13 text-gray-23">- April 3, 2019</span>
                                            </div>
                                            <!-- End Reviewer -->
                                        </div>
                                        <!-- End Review -->
                                        <!-- Review -->
                                        <div class="pb-4">
                                            <!-- Review Rating -->
                                            <div class="d-flex justify-content-between align-items-center text-secondary font-size-1 mb-2">
                                                <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                                    <small class="fas fa-star"></small>
                                                    <small class="fas fa-star"></small>
                                                    <small class="fas fa-star"></small>
                                                    <small class="fas fa-star"></small>
                                                    <small class="far fa-star text-muted"></small>
                                                </div>
                                            </div>
                                            <!-- End Review Rating -->

                                            <p class="text-gray-90">Sed id tincidunt sapien. Pellentesque cursus accumsan tellus, nec ultricies nulla sollicitudin eget. Donec feugiat orci vestibulum porttitor sagittis.</p>

                                            <!-- Reviewer -->
                                            <div class="mb-2">
                                                <strong>Peter Wargner</strong>
                                                <span class="font-size-13 text-gray-23">- April 3, 2019</span>
                                            </div>
                                            <!-- End Reviewer -->
                                        </div>
                                        <!-- End Review -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Tab Content -->
                        </div>
                        <!-- Single Product Tab -->
                        <!-- Related products -->
                        <div class="mb-6">
                            <div class="d-flex justify-content-between align-items-center border-bottom border-color-1 flex-lg-nowrap flex-wrap mb-4">
                                <h3 class="section-title mb-0 pb-2 font-size-22">Productos relacionados</h3>
                            </div>
                            <ul class="row list-unstyled products-group no-gutters">
                                @foreach($productos as $p)
                                @if(($producto->category->id == $p->category->id) && ($producto->id != $p->id))
                                <li class="col-6 col-md-3 col-wd-2gdot4 product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-xl-4 p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="{{ url('categoria/'.$p->category->slug) }}" class="font-size-12 text-gray-5">{{$p->category->nombre}}</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="{{ url($p->slug) }}" class="text-blue font-weight-bold">{{$p->nombre}}</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url($p->slug) }}" class="d-block text-center"><img class="img-fluid" src="/imagenes/{{$p->id}}/212x200.jpg" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">Bs. {{$p->precio_actual}}</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url($p->slug) }}" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
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
                        <!-- End Related products -->
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