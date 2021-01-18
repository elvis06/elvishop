@extends('plantilla.plantilla')
@section('titulo','SNDSUR | Salud Natural del Sur - Garcinia - Meizi - Paizhisu - Maxman')
@section('contenido')
<?php $productos = ''; ?>
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
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Carrito</li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->
    <div class="container">
        <div class="mb-4">
            <h1 class="text-center"><i class="fa fa-shopping-cart"></i> Carrrito de compras</h1>
        </div>
        @if(count($cart))
        <p class="text-center">
            <a href="{{ route('cart-trash') }}" class="btn btn-danger">
                Vaciar carrito <i class="fa fa-trash"></i>
            </a>
        </p>
        <div class="mb-10 cart-table">
            <form class="mb-4" action="#" method="post">
                <table class="table" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="product-remove">&nbsp;</th>
                            <th class="product-thumbnail">&nbsp;</th>
                            <th class="product-name">Producto</th>
                            <th class="product-price">Precio</th>
                            <th class="product-quantity w-lg-15">Cantidad</th>
                            <th class="product-subtotal">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart as $item)
                        {{ $productos = $productos . '%0' . $item->nombre }};
                        <tr class="">
                            <td class="text-center">
                                <a href="{{ route('cart-delete', $item->slug) }}" class="text-gray-32 font-size-26">×</a>
                            </td>
                            <td class="d-none d-md-table-cell">
                                <a href="#"><img class="img-fluid max-width-100 p-1 border border-color-1" src="{{ asset('/imagenes/'.$item->id.'/300x300.jpg') }}" alt="Image Description"></a>
                            </td>

                            <td data-title="Product">
                                <a href="#" class="text-gray-90">{{ $item->nombre }}</a>
                            </td>

                            <td data-title="Price">
                                <span class="">Bs. {{ number_format($item->precio_actual,2) }}</span>
                            </td>

                            <td data-title="Quantity">
                                <span class="sr-only">Cantidad</span>
                                <!-- Quantity -->
                                <div class="border rounded-pill py-1 width-122 w-xl-80 px-3 border-color-1">
                                    <div class="js-quantity row align-items-center">
                                        <div class="col">
                                            <input 
                                                class="js-result form-control h-auto border-0 rounded p-0 shadow-none"
                                                type="text"
                                                value="{{ $item->cant }}"
                                                id="product_{{ $item->id }}"
                                                disabled
                                            >
                                        </div>
                                        <div class="col-auto pr-1">
                                            <a 
                                                class="btn-update-item js-minus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0"
                                                href="#"
                                                data-href="{{ $item->slug }}"
                                                data-id="{{ $item->id }}"
                                            >
                                                <small class="fas fa-minus btn-icon__inner"></small>
                                            </a>
                                            <a 
                                                class="btn-update-item js-plus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0"
                                                href="#"
                                                data-href="{{ $item->slug }}"
                                                data-id="{{ $item->id }}"
                                            >
                                                <small class="fas fa-plus btn-icon__inner"></small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Quantity -->
                            </td>

                            <td data-title="Total">
                                <span class="">Bs. {{ number_format($item->precio_actual * $item->cant, 2) }}</span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
        <div class="mb-8 cart-total">
            <div class="row">
                <div class="col-xl-5 col-lg-6 offset-lg-6 offset-xl-7 col-md-8 offset-md-4">
                    <div class="border-bottom border-color-1 mb-3">
                        <h3 class="d-inline-block section-title mb-0 pb-2 font-size-26">Total compras</h3>
                    </div>
                    <table class="table mb-3 mb-md-0">
                        <tbody>
                            <tr class="order-total">
                                <th>Total</th>
                                <td data-title="Total"><strong><span class="amount">Bs. {{ number_format($total,2) }}</span></strong></td>
                            </tr>
                            <tr>
                                <td colspan="6" class="border-top space-top-2 justify-content-center">
                                    <div class="pt-md-3">
                                        <div class="d-block d-md-flex flex-center-between">
                                            <div class="d-md-flex">
                                                <a href="/" class="btn btn-soft-secondary mb-3 mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5 w-100 w-md-auto">Seguir comprando</a>
                                                <a href="https://api.whatsapp.com/send?phone=59174505444&text=Hola%20www.saludnaturaldelsur.com%0Quiero%20realizar%20el%20siguiente%20pedido!{{$productos}}%0 Total:%20Bs.{{number_format($total,2)}}" class="btn btn-primary-dark-w ml-md-2 px-5 px-md-4 px-lg-5 w-100 w-md-auto d-none d-md-inline-block">Realizar pedido</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="https://api.whatsapp.com/send?phone=59174505444&text=Hola%20www.saludnaturaldelsur.com%0Quiero%20realizar%20el%20siguiente%20pedido!{{$productos}}%0 Total:%20Bs.{{number_format($total,2)}}" class="btn btn-primary-dark-w ml-md-2 px-5 px-md-4 px-lg-5 w-100 w-md-auto d-md-none">Realizar pedido</a>
                </div>
            </div>
        </div>
        @else
        <h3 class="text-center"><span class="label label-warning">No hay productos en el carrito :(</span></h3>
        @endif
    </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->
@endsection