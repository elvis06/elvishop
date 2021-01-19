<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Title -->
        <title>@yield('titulo')</title>

        <!-- Required Meta Tags Always Come First -->
        <meta charset="utf-8">
        <meta name="keywords" content="adelgazar,reducir,peso,reduce,extreme,maxman,sexual" />
        <meta name="description" content="Salud Natural del Sur ofrece productos naturales para reducir peso y mejorar el rendimiento sexual. Nuestros productos son: Reduce Extreme, Paizhisu STRONG Version, Meizi Evolution Soft Gel, Garcinia Cambogia Soft Gel, G-Female Oral, Maxman IV, Maxman IX, Maxman XL, African Black Ant">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('assets/favicon_natural.png')}}">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

        <!-- CSS Implementing Plugins -->
        <link href="{{ asset('assets/vendor/font-awesome/css/fontawesome-all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/font-electro.css') }}" rel="stylesheet">
        
        <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/hs-megamenu/src/hs.megamenu.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/fancybox/jquery.fancybox.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/slick-carousel/slick/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">

        <!-- CSS Electro Template -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/theme.css')}}">

    </head>

    <body>

        <!-- ========== HEADER ========== -->
        <header id="header" class="u-header u-header-left-aligned-nav">
            <div class="u-header__section">
                <!-- Topbar -->
                <div class="u-header-topbar py-2 d-none d-xl-block">
                    <div class="container">
                        <div class="d-flex align-items-center">
                            <div class="topbar-left">
                                <a href="#" class="text-gray-110 font-size-13 u-header-topbar__nav-link">Bienvenido a la mejor tienda de salud natural</a>
                            </div>
                            <div class="topbar-right ml-auto">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                        <a href="{{ url('/sndsur/contactos') }}" class="u-header-topbar__nav-link"><i class="ec ec-map-pointer mr-1"></i> Localiza nuestra tienda</a>
                                    </li>
                                    <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                        <!-- Account Sidebar Toggle Button -->
                                        <a id="sidebarNavToggler" href="javascript:;" role="button" class="u-header-topbar__nav-link"
                                            aria-controls="sidebarContent"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                            data-unfold-event="click"
                                            data-unfold-hide-on-scroll="false"
                                            data-unfold-target="#sidebarContent"
                                            data-unfold-type="css-animation"
                                            data-unfold-animation-in="fadeInRight"
                                            data-unfold-animation-out="fadeOutRight"
                                            data-unfold-duration="500">
                                            <i class="ec ec-user mr-1"></i> Registro <span class="text-gray-50">|</span> Inicio de sesión
                                        </a>
                                        <!-- End Account Sidebar Toggle Button -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Topbar -->

                <!-- Logo and Menu -->
                <div class="py-2 py-xl-4 bg-primary-down-lg">
                    <div class="container my-0dot5 my-xl-0">
                        <div class="row align-items-center">
                            <!-- Logo-offcanvas-menu -->
                            <div class="col-auto">
                                <!-- Nav -->
                                <nav class="navbar navbar-expand u-header__navbar py-0 justify-content-xl-between max-width-270 min-width-270">
                                    <!-- Logo -->
                                    <a class="order-1 order-xl-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="/" aria-label="sndsur">
                                    <div class="d-flex flex-row align-items-center justify-content-start">
                                        <div><img src="{{ asset('assets/sndsur.png') }}" alt=""></div>
                                    </div>
                                    </a>
                                    <!-- End Logo -->

                                    <!-- Fullscreen Toggle Button -->
                                    <button id="sidebarHeaderInvokerMenu" type="button" class="navbar-toggler d-block btn u-hamburger mr-3 mr-xl-0"
                                        aria-controls="sidebarHeader"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                        data-unfold-event="click"
                                        data-unfold-hide-on-scroll="false"
                                        data-unfold-target="#sidebarHeader1"
                                        data-unfold-type="css-animation"
                                        data-unfold-animation-in="fadeInLeft"
                                        data-unfold-animation-out="fadeOutLeft"
                                        data-unfold-duration="500">
                                        <span id="hamburgerTriggerMenu" class="u-hamburger__box">
                                            <span class="u-hamburger__inner"></span>
                                        </span>
                                    </button>
                                    <!-- End Fullscreen Toggle Button -->
                                </nav>
                                <!-- End Nav -->

                                <!-- ========== HEADER SIDEBAR ========== -->
                                <aside id="sidebarHeader1" class="u-sidebar u-sidebar--left" aria-labelledby="sidebarHeaderInvokerMenu">
                                    <div class="u-sidebar__scroller">
                                        <div class="u-sidebar__container">
                                            <div class="u-header-sidebar__footer-offset pb-0">
                                                <!-- Toggle Button -->
                                                <div class="position-absolute top-0 right-0 z-index-2 pt-4 pr-7">
                                                    <button type="button" class="close ml-auto"
                                                        aria-controls="sidebarHeader"
                                                        aria-haspopup="true"
                                                        aria-expanded="false"
                                                        data-unfold-event="click"
                                                        data-unfold-hide-on-scroll="false"
                                                        data-unfold-target="#sidebarHeader1"
                                                        data-unfold-type="css-animation"
                                                        data-unfold-animation-in="fadeInLeft"
                                                        data-unfold-animation-out="fadeOutLeft"
                                                        data-unfold-duration="500">
                                                        <span aria-hidden="true"><i class="ec ec-close-remove text-gray-90 font-size-20"></i></span>
                                                    </button>
                                                </div>
                                                <!-- End Toggle Button -->

                                                <!-- Content -->
                                                <div class="js-scrollbar u-sidebar__body">
                                                    <div id="headerSidebarContent" class="u-sidebar__content u-header-sidebar__content">
                                                        <!-- Logo -->
                                                        <a class="d-flex ml-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-vertical" href="/" aria-label="Electro">
                                                            <div class="d-flex flex-row align-items-center justify-content-start">
                                                                <div><img src="{{asset('assets/sndsur.png')}}" alt=""></div>
                                                            </div>
                                                        </a>
                                                        <!-- End Logo -->

                                                        <!-- List -->
                                                        <ul id="headerSidebarList" class="u-header-collapse__nav">
                                                            <!-- Home Section -->
                                                            <li class="u-has-submenu u-header-collapse__submenu">
                                                                <a class="u-header-collapse__nav-link" href="/">Inicio</a>
                                                            </li>
                                                            <!-- End Home Section -->

                                                            <!-- Shop Pages -->
                                                            <li class="u-has-submenu u-header-collapse__submenu">
                                                                <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarPagesCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarPagesCollapse">
                                                                    Salud & Belleza
                                                                </a>

                                                                <div id="headerSidebarPagesCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                    <ul id="headerSidebarPagesMenu" class="u-header-collapse__nav-list">
                                                                        <!-- Product -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="garcinia-cambogia-capsulas-doradas">Reduce Extreme</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="paizhisu-strong-version">Paizhisu STRONG Versión</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="meizi-evolution-soft-gel">Meizi Evolution Soft Gel</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="garcinia-cambogia-soft-gel">Garcinia Cambogia Soft Gel</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="tabletas-g-female-oral">Tabletas G-Female Oral</a></li>
                                                                        <!-- End Product -->
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <!-- End Shop Pages -->

                                                            <!-- Product Categories -->
                                                            <li class="u-has-submenu u-header-collapse__submenu">
                                                                <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarBlogCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarBlogCollapse">
                                                                    Salud Sexual
                                                                </a>

                                                                <div id="headerSidebarBlogCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                    <ul id="headerSidebarBlogMenu" class="u-header-collapse__nav-list">
                                                                        <!-- 4 Producto -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="capsulas-maxman-iv">Capsulas maxman IV</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="capsulas-maxman-ix">Capsulas maxman IX</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="capsulas-maxman-xl">Capsulas maxman XL</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="capsulas-african-black-ant">Capsulas African Black Ant</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="viagra-vegetal">Viagra Vegetal</a></li>
                                                                        <!-- End 4 Producto -->
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <!-- End Product Categories -->

                                                            <!-- Single Product Pages -->
                                                            <li class="u-has-submenu u-header-collapse__submenu">
                                                                <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarShopCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarShopCollapse">
                                                                    Empresa
                                                                </a>

                                                                <div id="headerSidebarShopCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                    <ul id="headerSidebarShopMenu" class="u-header-collapse__nav-list">
                                                                        <!-- Single Product Extended -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="{{ url('/sndsur/sobre-nosotros') }}">Sobre Nosotros</a></li>
                                                                        <!-- End Single Product Extended -->

                                                                        <!-- Single Product Sidebar -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="{{ url('/sndsur/trabaja-con-nosotros') }}">Trabaja con Nosotros</a></li>
                                                                        <!-- End Single Product Sidebar -->
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <!-- End Single Product Pages -->

                                                            <!-- Ecommerce Pages -->
                                                            <li class="u-has-submenu u-header-collapse__submenu">
                                                                <a class="u-header-collapse__nav-link" href="{{ url('/sndsur/contactos') }}">Contáctenos</a>
                                                            </li>
                                                            <!-- End Ecommerce Pages -->
                                                        </ul>
                                                        <!-- End List -->
                                                    </div>
                                                </div>
                                                <!-- End Content -->
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                                <!-- ========== END HEADER SIDEBAR ========== -->
                            </div>
                            <!-- End Logo-offcanvas-menu -->
                            <!-- Primary Menu -->
                            <div class="col d-none d-xl-block">
                                <!-- Nav -->
                                <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space">
                                    <!-- Navigation -->
                                    <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                                        <ul class="navbar-nav u-header__navbar-nav">
                                            <!-- Home -->
                                            <li class="nav-item u-header__nav-item">
                                                <a class="nav-link u-header__nav-link" href="/">Inicio</a>
                                            </li>
                                            <!-- End Home -->

                                            <!-- About us -->
                                            <li class="nav-item u-header__nav-item">
                                                <a class="nav-link u-header__nav-link" href="{{ url('/categoria/salud-y-belleza') }}">Salud & Belleza</a>
                                            </li>
                                            <!-- End About us -->

                                            <!-- FAQs -->
                                            <li class="nav-item u-header__nav-item">
                                                <a class="nav-link u-header__nav-link" href="{{ url('/categoria/salud-sexual') }}">Salud Sexual</a>
                                            </li>
                                            <!-- End FAQs -->

                                            <!-- Nuestra empresa -->
                                            <li class="nav-item hs-has-sub-menu u-header__nav-item"
                                                data-event="hover"
                                                data-animation-in="slideInUp"
                                                data-animation-out="fadeOut">
                                                <a id="blogMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="blogSubMenu">Empresa</a>

                                                <!-- Blog - Submenu -->
                                                <ul id="blogSubMenu" class="hs-sub-menu u-header__sub-menu" aria-labelledby="blogMegaMenu" style="min-width: 230px;">
                                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="{{ url('/sndsur/sobre-nosotros') }}">Sobre Nosotros</a></li>
                                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="{{ url('/sndsur/trabaja-con-nosotros') }}">Trabaja con Nosotros</a></li>
                                                </ul>
                                                <!-- End Submenu -->
                                            </li>
                                            <!-- End Nuestra empresa -->

                                            <!-- Contact Us -->
                                            <li class="nav-item u-header__nav-item">
                                                <a class="nav-link u-header__nav-link" href="{{ url('/sndsur/contactos') }}">Contáctenos</a>
                                            </li>
                                            <!-- End Contact Us -->
                                        </ul>
                                    </div>
                                    <!-- End Navigation -->
                                </nav>
                                <!-- End Nav -->
                            </div>
                            <!-- End Primary Menu -->
                            <!-- Customer Care -->
                            <div class="d-none d-xl-block col-md-auto">
                                <div class="d-flex">
                                    <i class="ec ec-support font-size-50 text-primary"></i>
                                    <div class="ml-2">
                                        <div class="phone">
                                            <strong>Contáctenos</strong> <a href="tel:+59178246463" class="text-gray-90">(591) 782 - 46463</a>
                                        </div>
                                        <div class="email">
                                            E-mail: <a href="mailto:info@saludnaturaldelsur.com?subject=Help Need" class="text-gray-90">info@saludnaturaldelsur.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Customer Care -->
                            <!-- Header Icons -->
                            <div class="d-xl-none col col-xl-auto text-right text-xl-left pl-0 pl-xl-3 position-static">
                                <div class="d-inline-flex">
                                    <ul class="d-flex list-unstyled mb-0 align-items-center">
                                        <!-- Search -->
                                        <li class="col d-xl-none px-2 px-sm-3 position-static">
                                            <a id="searchClassicInvoker" class="font-size-22 text-gray-90 text-lh-1 btn-text-secondary" href="javascript:;" role="button"
                                                data-toggle="tooltip"
                                                data-placement="top"
                                                title="Search"
                                                aria-controls="searchClassic"
                                                aria-haspopup="true"
                                                aria-expanded="false"
                                                data-unfold-target="#searchClassic"
                                                data-unfold-type="css-animation"
                                                data-unfold-duration="300"
                                                data-unfold-delay="300"
                                                data-unfold-hide-on-scroll="true"
                                                data-unfold-animation-in="slideInUp"
                                                data-unfold-animation-out="fadeOut">
                                                <span class="ec ec-search"></span>
                                            </a>

                                            <!-- Input -->
                                            <div id="searchClassic" class="dropdown-menu dropdown-unfold dropdown-menu-right left-0 mx-2" aria-labelledby="searchClassicInvoker">
                                                <form class="js-focus-state input-group px-3">
                                                    <input class="form-control" type="search" placeholder="Buscar Producto">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary px-3" type="button"><i class="font-size-18 ec ec-search"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- End Input -->
                                        </li>
                                        <!-- End Search -->
                                        <li class="col d-xl-none px-2 px-sm-3"><a href="#" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="My Account"><i class="font-size-22 ec ec-user"></i></a></li>
                                        <li class="col pr-xl-0 px-2 px-sm-3">
                                            <a href="{{ route('cart-show') }}" class="text-gray-90 position-relative d-flex " data-toggle="tooltip" data-placement="top" title="Cart">
                                                <i class="font-size-22 ec ec-shopping-bag"></i>
                                                <span class="width-22 height-22 bg-dark position-absolute d-flex align-items-center justify-content-center rounded-circle left-12 top-8 font-weight-bold font-size-12 text-white">{{ count($cart) }}</span>
                                                <span class="d-none d-xl-block font-weight-bold font-size-16 text-gray-90 ml-3">Bs. {{ number_format($total,2) }}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Header Icons -->
                        </div>
                    </div>
                </div>
                <!-- End Logo and Menu -->

                <!-- Vertical-and-Search-Bar -->
                <div class="d-none d-xl-block bg-primary">
                    <div class="container">
                        <div class="row align-items-stretch min-height-50">
                            <!-- Vertical Menu -->
                            <div class="col-md-auto d-none d-xl-flex align-items-end">
                                <div class="max-width-270 min-width-270">
                                    <!-- Basics Accordion -->
                                    <div id="basicsAccordion">
                                        <!-- Card -->
                                        <div class="card border-0 rounded-0">
                                            <div class="card-header bg-primary rounded-0 card-collapse border-0" id="basicsHeadingOne">
                                                <button type="button" class="btn-link btn-remove-focus btn-block d-flex card-btn py-3 text-lh-1 px-4 shadow-none btn-primary rounded-top-lg border-0 font-weight-bold text-gray-90"
                                                    data-toggle="collapse"
                                                    data-target="#basicsCollapseOne"
                                                    aria-expanded="true"
                                                    aria-controls="basicsCollapseOne">
                                                    <span class="pl-1 text-gray-90">Productos</span>
                                                    <span class="text-gray-90 ml-3">
                                                        <span class="ec ec-arrow-down-search"></span>
                                                    </span>
                                                </button>
                                            </div>
                                            <div id="basicsCollapseOne" class="collapse vertical-menu v3 border-top-primary border-top border-width-2"
                                                aria-labelledby="basicsHeadingOne"
                                                data-parent="#basicsAccordion">
                                                <div class="card-body p-0">
                                                    <nav class="js-mega-menu navbar navbar-expand-xl u-header__navbar u-header__navbar--no-space hs-menu-initialized">
                                                        <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                                                            <ul class="navbar-nav u-header__navbar-nav border-primary border-top-0">
                                                                <li class="nav-item u-header__nav-item"
                                                                    data-event="hover"
                                                                    data-position="left">
                                                                    <a href="{{ url('garcinia-cambogia-capsulas-doradas') }}" class="nav-link u-header__nav-link font-weight-bold">Garcinia Cambogia Capsulas Doradas</a>
                                                                </li>
                                                                <li class="nav-item u-header__nav-item"
                                                                    data-event="hover"
                                                                    data-position="left">
                                                                    <a href="{{ url('meizi-evolution-soft-gel') }}" class="nav-link u-header__nav-link font-weight-bold">Meizi Evolution Soft Gel</a>
                                                                </li>
                                                                <li class="nav-item u-header__nav-item"
                                                                    data-event="hover"
                                                                    data-position="left">
                                                                    <a href="{{ url('paizhisu-strong-version') }}" class="nav-link u-header__nav-link font-weight-bold">Paizhisu STRONG Versión</a>
                                                                </li>
                                                                <li class="nav-item u-header__nav-item"
                                                                    data-event="hover"
                                                                    data-position="left">
                                                                    <a href="{{ url('garcinia-cambogia-soft-gel') }}" class="nav-link u-header__nav-link font-weight-bold">Garcinia Cambogia Soft Gel</a>
                                                                </li>
                                                                <li class="nav-item u-header__nav-item"
                                                                    data-event="hover"
                                                                    data-position="left">
                                                                    <a href="{{ url('viagra-vegetal') }}" class="nav-link u-header__nav-link font-weight-bold">Viagra Vegetal</a>
                                                                </li>
                                                                <li class="nav-item u-header__nav-item"
                                                                    data-event="hover"
                                                                    data-position="left">
                                                                    <a href="{{ url('capsulas-maxman-iv') }}" class="nav-link u-header__nav-link font-weight-bold">Capsulas maxman IV</a>
                                                                </li>
                                                                <li class="nav-item u-header__nav-item"
                                                                    data-event="hover"
                                                                    data-position="left">
                                                                    <a href="{{ url('capsulas-maxman-ix') }}" class="nav-link u-header__nav-link font-weight-bold">Capsulas maxman IX</a>
                                                                </li>
                                                                <li class="nav-item u-header__nav-item"
                                                                    data-event="hover"
                                                                    data-position="left">
                                                                    <a href="{{ url('capsulas-maxman-xl') }}" class="nav-link u-header__nav-link font-weight-bold">Capsulas maxman XL</a>
                                                                </li>
                                                                <li class="nav-item u-header__nav-item"
                                                                    data-event="hover"
                                                                    data-position="left">
                                                                    <a href="{{ url('capsulas-african-black-ant') }}" class="nav-link u-header__nav-link font-weight-bold">Capsulas African Black Ant</a>
                                                                </li>
                                                                <li class="nav-item u-header__nav-item"
                                                                    data-event="hover"
                                                                    data-position="left">
                                                                    <a href="{{ url('tabletas-g-female-oral') }}" class="nav-link u-header__nav-link font-weight-bold">Tabletas G-Female Oral</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Card -->
                                    </div>
                                    <!-- End Basics Accordion -->
                                </div>
                            </div>
                            <!-- End Vertical Menu -->
                            <!-- Search bar -->
                            <div class="col align-self-center">
                                <!-- Search-Form -->
                                <form class="js-focus-state">
                                
                                    <label class="sr-only" for="searchProduct">Buscar</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control py-2 pl-5 font-size-15 border-0 height-40 rounded-left-pill" name="buscar" id="searchProduct" placeholder="Busca productos" aria-label="Search for Products" aria-describedby="searchProduct1" required>
                                        <div class="input-group-append">
                                            <!-- Select -->
                                            <select name="cat" class="js-select selectpicker dropdown-select custom-search-categories-select"
                                                data-style="btn height-40 text-gray-60 font-weight-normal border-0 rounded-0 bg-white px-5 py-2">
                                                <option value="0" selected>Todas las categorias</option>
                                                <option value="salud-y-belleza">Bajar de peso</option>
                                                <option value="salud-sexual">Estimuladores & Potenciadores</option>
                                                <option value="salud-y-belleza">Garnicia Cambogia</option>
                                                <option value="salud-sexual">Maxman</option>
                                                <option value="salud-y-belleza">Salud & Belleza</option>
                                                <option value="salud-sexual">Salud Sexual</option>
                                            </select>
                                            <!-- End Select -->
                                            <button class="btn btn-dark height-40 py-2 px-3 rounded-right-pill" type="submit" id="searchProduct1">
                                                <span class="ec ec-search font-size-24"></span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!-- End Search-Form -->
                            </div>
                            <!-- End Search bar -->
                            <!-- Header Icons -->
                            <div class="col-md-auto align-self-center">
                                <div class="d-flex">
                                    <ul class="d-flex list-unstyled mb-0">
                                        <li class="col pr-0">
                                            <a href="{{ route('cart-show') }}" class="text-gray-90 position-relative d-flex " data-toggle="tooltip" data-placement="top" title="Carrito">
                                                <i class="font-size-22 ec ec-shopping-bag"></i>
                                                <span class="width-22 height-22 bg-dark position-absolute flex-content-center text-white rounded-circle left-12 top-8 font-weight-bold font-size-12">{{ count($cart) }}</span>
                                                <span class="font-weight-bold font-size-16 text-gray-90 ml-3">Bs. {{ number_format($total,2) }}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Header Icons -->
                        </div>
                    </div>
                </div>
                <!-- End Vertical-and-secondary-menu -->
            </div>
        </header>
        <!-- ========== END HEADER ========== -->
        
        @yield('contenido')

        <!-- ========== FOOTER ========== -->
        <footer>
            <!-- Footer-top-widget -->
            <div class="container d-none d-lg-block mb-3">
                <div class="row">
                    <div class="col-wd-3 col-lg-4">
                        <div class="widget-column">
                            <div class="border-bottom border-color-1 mb-5">
                                <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Productos destacados</h3>
                            </div>
                            <ul class="list-unstyled products-group">
                                <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                    <div class="col-auto">
                                        <a href="{{ url('capsulas-african-black-ant') }}" class="d-block width-75 text-center"><img class="img-fluid" src="../../assets/img/75X75/img1.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col pl-4 d-flex flex-column">
                                        <h5 class="product-item__title mb-0"><a href="{{ url('capsulas-african-black-ant') }}" class="text-blue font-weight-bold">Capsulas African Black Ant</a></h5>
                                        <div class="prodcut-price mt-auto">
                                            <div class="font-size-15">Bs. 180.00</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                    <div class="col-auto">
                                        <a href="{{ url('paizhisu-strong-version') }}" class="d-block width-75 text-center"><img class="img-fluid" src="../../assets/img/75X75/img2.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col pl-4 d-flex flex-column">
                                        <h5 class="product-item__title mb-0"><a href="{{ url('paizhisu-strong-version') }}" class="text-blue font-weight-bold">Paizhisu STRONG Versión</a></h5>
                                        <div class="prodcut-price mt-auto">
                                            <div class="font-size-15">$210.00</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                    <div class="col-auto">
                                        <a href="{{ url('garcinia-cambogia-soft-gel') }}" class="d-block width-75 text-center"><img class="img-fluid" src="../../assets/img/75X75/img3.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col pl-4 d-flex flex-column">
                                        <h5 class="product-item__title mb-0"><a href="{{ url('garcinia-cambogia-soft-gel') }}" class="text-blue font-weight-bold">Garcinia Cambogia Soft Gel</a></h5>
                                        <div class="prodcut-price mt-auto">
                                            <div class="font-size-15">$180.00</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-wd-3 col-lg-4">
                        <div class="border-bottom border-color-1 mb-5">
                            <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Productos en oferta</h3>
                        </div>
                        <ul class="list-unstyled products-group">
                            <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                <div class="col-auto">
                                    <a href="{{ url('capsulas-maxman-iv') }}" class="d-block width-75 text-center"><img class="img-fluid" src="../../assets/img/75X75/img4.jpg" alt="Image Description"></a>
                                </div>
                                <div class="col pl-4 d-flex flex-column">
                                    <h5 class="product-item__title mb-0"><a href="{{ url('capsulas-maxman-iv') }}" class="text-blue font-weight-bold">Capsulas maxman IV</a></h5>
                                    <div class="prodcut-price mt-auto flex-horizontal-center">
                                    <ins class="font-size-15 text-decoration-none">Bs. 160.00</ins>
                                        <del class="font-size-12 text-gray-9 ml-2">Bs. 200.00</del>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                <div class="col-auto">
                                    <a href="{{ url('capsulas-maxman-xl') }}" class="d-block width-75 text-center"><img class="img-fluid" src="../../assets/img/75X75/img5.jpg" alt="Image Description"></a>
                                </div>
                                <div class="col pl-4 d-flex flex-column">
                                    <h5 class="product-item__title mb-0"><a href="{{ url('capsulas-maxman-xl') }}" class="text-blue font-weight-bold">Capsulas maxman XL</a></h5>
                                    <div class="prodcut-price mt-auto flex-horizontal-center">
                                        <ins class="font-size-15 text-decoration-none">Bs. 180.00</ins>
                                        <del class="font-size-12 text-gray-9 ml-2">Bs. 210.00</del>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                <div class="col-auto">
                                    <a href="{{ url('reduce-extreme') }}" class="d-block width-75 text-center"><img class="img-fluid" src="../../assets/img/75X75/img6.jpg" alt="Image Description"></a>
                                </div>
                                <div class="col pl-4 d-flex flex-column">
                                    <h5 class="product-item__title mb-0"><a href="{{ url('reduce-extreme') }}" class="text-blue font-weight-bold">Reduce Extreme Premium</a></h5>
                                    <div class="prodcut-price mt-auto flex-horizontal-center">
                                    <ins class="font-size-15 text-decoration-none">Bs. 250.00</ins>
                                        <del class="font-size-12 text-gray-9 ml-2">Bs. 280.00</del>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-wd-3 col-lg-4">
                        <div class="border-bottom border-color-1 mb-5">
                            <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Mejor valorados</h3>
                        </div>
                        <ul class="list-unstyled products-group">
                            <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                <div class="col-auto">
                                    <a href="{{ url('capsulas-maxman-ix') }}" class="d-block width-75 text-center"><img class="img-fluid" src="../../assets/img/75X75/img7.jpg" alt="Image Description"></a>
                                </div>
                                <div class="col pl-4 d-flex flex-column">
                                    <h5 class="product-item__title mb-0"><a href="{{ url('capsulas-maxman-ix') }}" class="text-blue font-weight-bold">Capsulas maxman IX</a></h5>
                                    <div class="text-warning mb-2">
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                    </div>
                                    <div class="prodcut-price mt-auto">
                                        <div class="font-size-15">Bs. 180.00</div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                <div class="col-auto">
                                    <a href="{{ url('viagra-vegetal') }}" class="d-block width-75 text-center"><img class="img-fluid" src="../../assets/img/75X75/img8.jpg" alt="Image Description"></a>
                                </div>
                                <div class="col pl-4 d-flex flex-column">
                                    <h5 class="product-item__title mb-0"><a href="{{ url('viagra-vegetal') }}" class="text-blue font-weight-bold">Viagra Vegetal</a></h5>
                                    <div class="text-warning mb-2">
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="far fa-star text-muted"></small>
                                    </div>
                                    <div class="prodcut-price mt-auto">
                                        <div class="font-size-15">Bs. 180.00</div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                <div class="col-auto">
                                    <a href="{{ url('meizi-evolution-soft-gel') }}" class="d-block width-75 text-center"><img class="img-fluid" src="../../assets/img/75X75/img9.jpg" alt="Image Description"></a>
                                </div>
                                <div class="col pl-4 d-flex flex-column">
                                    <h5 class="product-item__title mb-0"><a href="{{ url('meizi-evolution-soft-gel') }}" class="text-blue font-weight-bold">Meizi Evolution Soft Gel</a></h5>
                                    <div class="text-warning mb-2">
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="far fa-star text-muted"></small>
                                    </div>
                                    <div class="prodcut-price mt-auto">
                                        <div class="font-size-15">Bs. 140.00</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Footer-top-widget -->
            <!-- Footer-newsletter -->
            <div class="bg-primary py-3">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 mb-md-3 mb-lg-0">
                            <div class="row align-items-center">
                                <div class="col-auto flex-horizontal-center">
                                    <i class="ec ec-newsletter font-size-40"></i>
                                    <h2 class="font-size-20 mb-0 ml-3">Suscríbete</h2>
                                </div>
                                <div class="col my-4 my-md-0">
                                    <h5 class="font-size-15 ml-4 mb-0">...y recibe <strong>Las mejores promociones.</strong></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <!-- Subscribe Form -->
                            <form class="js-validate js-form-message">
                                <label class="sr-only" for="subscribeSrEmail">Dirección de correo electrónico</label>
                                <div class="input-group input-group-pill">
                                    <input type="email" class="form-control border-0 height-40" name="email" id="subscribeSrEmail" placeholder="Email" aria-label="Email address" aria-describedby="subscribeButton" required
                                    data-msg="Please enter a valid email address.">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-dark btn-sm-wide height-40 py-2" id="subscribeButton">Registrar</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End Subscribe Form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer-newsletter -->
            <!-- Footer-bottom-widgets -->
            <div class="pt-8 pb-4 bg-gray-13">
                <div class="container mt-1">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-6">
                                <a href="#" class="d-inline-block">
                                    <div class="d-flex flex-row align-items-center justify-content-start">
                                        <div><img src="{{asset('assets/sndsur.png')}}" alt=""></div>
                                    </div>
                                </a>
                            </div>
                            <div class="mb-4">
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <i class="ec ec-support text-primary font-size-56"></i>
                                    </div>
                                    <div class="col pl-3">
                                        <div class="font-size-13 font-weight-light">¿Tienes preguntas? ¡Llámanos 24/7!</div>
                                        <a href="tel:+59178246463" class="font-size-20 text-gray-90">(591) 782 - 46463, </a><a href="tel:+59178246463" class="font-size-20 text-gray-90">(591) 782 - 46463</a>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h6 class="mb-1 font-weight-bold">Dirección</h6>
                                <address class="">
                                    Calle Cochabamba Nº 947, Tarija - Bolivia
                                </address>
                            </div>
                            <div class="my-4 my-md-4">
                                <ul class="list-inline mb-0 opacity-7">
                                    <li class="list-inline-item mr-0">
                                        <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                            <span class="fab fa-facebook-f btn-icon__inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0">
                                        <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                            <span class="fab fa-google btn-icon__inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0">
                                        <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                            <span class="fab fa-twitter btn-icon__inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0">
                                        <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                            <span class="fab fa-instagram btn-icon__inner"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-7 col-md mb-8 mb-md-0">
                                    <h6 class="mb-3 font-weight-bold">Salud Natural del Sur</h6>
                                    <!-- List Group -->
                                    <ul class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent">
                                        <li>Salud Natural del Sur, es una empresa especializada en la distribución, venta y comercialización de productos hechos a base de hierbas naturales, para la mejora de la salud, perdida de peso, energizantes, potenciadores, Nuestro objetivo es "Cuidar tu Salud" y mejorar tu calidad de vida</li>
                                    </ul>
                                    <!-- End List Group -->
                                </div>

                                <div class="col-1">
                                    <!-- List Group -->
                                    
                                    <!-- End List Group -->
                                </div>

                                <div class="col-4 col-md mb-4 mb-md-0">
                                    <h6 class="mb-3 font-weight-bold">Información</h6>
                                    <!-- List Group -->
                                    <ul class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent">
                                        <li><a class="list-group-item list-group-item-action" href="{{ url('/sndsur/sobre-nosotros') }}">Sobre Nosotros</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="{{ url('/sndsur/condiciones') }}">Condiciones de Uso</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="{{ url('/sndsur/trabaja-con-nosotros') }}">Trabaja con Nosotros</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="{{ url('/sndsur/contactos') }}">Contáctanos</a></li>
                                    </ul>
                                    <!-- End List Group -->
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer-bottom-widgets -->
        </footer>
        <!-- ========== END FOOTER ========== -->

        <!-- ========== SECONDARY CONTENTS ========== -->
        <!-- Account Sidebar Navigation -->
        <aside id="sidebarContent" class="u-sidebar u-sidebar__lg" aria-labelledby="sidebarNavToggler">
            <div class="u-sidebar__scroller">
                <div class="u-sidebar__container">
                    <div class="js-scrollbar u-header-sidebar__footer-offset pb-3">
                        <!-- Toggle Button -->
                        <div class="d-flex align-items-center pt-4 px-7">
                            <button type="button" class="close ml-auto"
                                aria-controls="sidebarContent"
                                aria-haspopup="true"
                                aria-expanded="false"
                                data-unfold-event="click"
                                data-unfold-hide-on-scroll="false"
                                data-unfold-target="#sidebarContent"
                                data-unfold-type="css-animation"
                                data-unfold-animation-in="fadeInRight"
                                data-unfold-animation-out="fadeOutRight"
                                data-unfold-duration="500">
                                <i class="ec ec-close-remove"></i>
                            </button>
                        </div>
                        <!-- End Toggle Button -->

                        <!-- Content -->
                        <div class="js-scrollbar u-sidebar__body">
                            <div class="u-sidebar__content u-header-sidebar__content">
                                <form class="js-validate">
                                    <!-- Login -->
                                    <div id="login" data-target-group="idForm">
                                        <!-- Title -->
                                        <header class="text-center mb-7">
                                        <h2 class="h4 mb-0">Bienvenido!</h2>
                                        <p>Inicie sesión para administrar su cuenta.</p>
                                        </header>
                                        <!-- End Title -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                                <label class="sr-only" for="signinEmail">Email</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="signinEmailLabel">
                                                            <span class="fas fa-user"></span>
                                                        </span>
                                                    </div>
                                                    <input type="email" class="form-control" name="email" id="signinEmail" placeholder="Email" aria-label="Email" aria-describedby="signinEmailLabel" required
                                                    data-msg="Please enter a valid email address."
                                                    data-error-class="u-has-error"
                                                    data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Form Group -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                              <label class="sr-only" for="signinPassword">Contraseña</label>
                                              <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="signinPasswordLabel">
                                                        <span class="fas fa-lock"></span>
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control" name="password" id="signinPassword" placeholder="Contraseña" aria-label="Password" aria-describedby="signinPasswordLabel" required
                                                   data-msg="Your password is invalid. Please try again."
                                                   data-error-class="u-has-error"
                                                   data-success-class="u-has-success">
                                              </div>
                                            </div>
                                        </div>
                                        <!-- End Form Group -->

                                        <div class="d-flex justify-content-end mb-4">
                                            <a class="js-animation-link small link-muted" href="javascript:;"
                                               data-target="#forgotPassword"
                                               data-link-group="idForm"
                                               data-animation-in="slideInUp">¿Se te olvidó tu contraseña?</a>
                                        </div>

                                        <div class="mb-2">
                                            <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Iniciar Sesión</button>
                                        </div>

                                        <div class="text-center mb-4">
                                            <span class="small text-muted">¿No tienes una cuenta?</span>
                                            <a class="js-animation-link small text-dark" href="javascript:;"
                                               data-target="#signup"
                                               data-link-group="idForm"
                                               data-animation-in="slideInUp">Regístrate
                                            </a>
                                        </div>

                                        <div class="text-center">
                                            <span class="u-divider u-divider--xs u-divider--text mb-4">O</span>
                                        </div>

                                        <!-- Login Buttons -->
                                        <div class="d-flex">
                                            <a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1" href="{{url('login/facebook')}}">
                                              <span class="fab fa-facebook-square mr-1"></span>
                                              Facebook
                                            </a>
                                            <a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0" href="{{url('login/google')}}">
                                              <span class="fab fa-google mr-1"></span>
                                              Google
                                            </a>
                                        </div>
                                        <!-- End Login Buttons -->
                                    </div>

                                    <!-- Signup -->
                                    <div id="signup" style="display: none; opacity: 0;" data-target-group="idForm">
                                        <!-- Title -->
                                        <header class="text-center mb-7">
                                        <h2 class="h4 mb-0">Welcome to Electro.</h2>
                                        <p>Fill out the form to get started.</p>
                                        </header>
                                        <!-- End Title -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                                <label class="sr-only" for="signupEmail">Email</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="signupEmailLabel">
                                                            <span class="fas fa-user"></span>
                                                        </span>
                                                    </div>
                                                    <input type="email" class="form-control" name="email" id="signupEmail" placeholder="Email" aria-label="Email" aria-describedby="signupEmailLabel" required
                                                    data-msg="Please enter a valid email address."
                                                    data-error-class="u-has-error"
                                                    data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Input -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                                <label class="sr-only" for="signupPassword">Password</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="signupPasswordLabel">
                                                            <span class="fas fa-lock"></span>
                                                        </span>
                                                    </div>
                                                    <input type="password" class="form-control" name="password" id="signupPassword" placeholder="Password" aria-label="Password" aria-describedby="signupPasswordLabel" required
                                                    data-msg="Your password is invalid. Please try again."
                                                    data-error-class="u-has-error"
                                                    data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Input -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                            <label class="sr-only" for="signupConfirmPassword">Confirm Password</label>
                                                <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="signupConfirmPasswordLabel">
                                                        <span class="fas fa-key"></span>
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control" name="confirmPassword" id="signupConfirmPassword" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="signupConfirmPasswordLabel" required
                                                data-msg="Password does not match the confirm password."
                                                data-error-class="u-has-error"
                                                data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Input -->

                                        <div class="mb-2">
                                            <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Get Started</button>
                                        </div>

                                        <div class="text-center mb-4">
                                            <span class="small text-muted">Already have an account?</span>
                                            <a class="js-animation-link small text-dark" href="javascript:;"
                                                data-target="#login"
                                                data-link-group="idForm"
                                                data-animation-in="slideInUp">Login
                                            </a>
                                        </div>

                                        <div class="text-center">
                                            <span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
                                        </div>

                                        <!-- Login Buttons -->
                                        <div class="d-flex">
                                            <a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1" href="#">
                                                <span class="fab fa-facebook-square mr-1"></span>
                                                Facebook
                                            </a>
                                            <a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0" href="#">
                                                <span class="fab fa-google mr-1"></span>
                                                Google
                                            </a>
                                        </div>
                                        <!-- End Login Buttons -->
                                    </div>
                                    <!-- End Signup -->

                                    <!-- Forgot Password -->
                                    <div id="forgotPassword" style="display: none; opacity: 0;" data-target-group="idForm">
                                        <!-- Title -->
                                        <header class="text-center mb-7">
                                            <h2 class="h4 mb-0">Recover Password.</h2>
                                            <p>Enter your email address and an email with instructions will be sent to you.</p>
                                        </header>
                                        <!-- End Title -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                                <label class="sr-only" for="recoverEmail">Your email</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="recoverEmailLabel">
                                                            <span class="fas fa-user"></span>
                                                        </span>
                                                    </div>
                                                    <input type="email" class="form-control" name="email" id="recoverEmail" placeholder="Your email" aria-label="Your email" aria-describedby="recoverEmailLabel" required
                                                    data-msg="Please enter a valid email address."
                                                    data-error-class="u-has-error"
                                                    data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Form Group -->

                                        <div class="mb-2">
                                            <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Recover Password</button>
                                        </div>

                                        <div class="text-center mb-4">
                                            <span class="small text-muted">Remember your password?</span>
                                            <a class="js-animation-link small" href="javascript:;"
                                               data-target="#login"
                                               data-link-group="idForm"
                                               data-animation-in="slideInUp">Login
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Forgot Password -->
                                </form>
                            </div>
                        </div>
                        <!-- End Content -->
                    </div>
                </div>
            </div>
        </aside>
        <!-- End Account Sidebar Navigation -->
        <!-- ========== END SECONDARY CONTENTS ========== -->

        <!-- Go to Top -->
        <a class="js-go-to u-go-to" href="#"
            data-position='{"bottom": 15, "right": 15 }'
            data-type="fixed"
            data-offset-top="400"
            data-compensation="#header"
            data-show-effect="slideInUp"
            data-hide-effect="slideOutDown">
            <span class="fas fa-arrow-up u-go-to__inner"></span>
        </a>
        <!-- End Go to Top -->
        <!-- JS Global Compulsory -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="{{ asset('assets/vendor/jquery-migrate/dist/jquery-migrate.min.js') }}" defer></script>
        <script src="{{ asset('assets/vendor/popper.js/dist/umd/popper.min.js') }}" defer></script>
	    <script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js') }}" defer></script>

        <!-- JS Implementing Plugins -->
        <script src="{{ asset('assets/vendor/appear.js') }}" defer></script>
        <script src="{{ asset('assets/vendor/jquery.countdown.min.js') }}" defer></script>
        <script src="{{ asset('assets/vendor/hs-megamenu/src/hs.megamenu.js') }}" defer></script>
        <script src="{{ asset('assets/vendor/svg-injector/dist/svg-injector.min.js') }}" defer></script>
        <script src="{{ asset('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}" defer></script>
        <script src="{{ asset('assets/vendor/jquery-validation/dist/jquery.validate.min.js') }}" defer></script>
        <script src="{{ asset('assets/vendor/fancybox/jquery.fancybox.min.js') }}" defer></script>
        <script src="{{ asset('assets/vendor/typed.js/lib/typed.min.js') }}" defer></script>
        <script src="{{ asset('assets/vendor/slick-carousel/slick/slick.js') }}" defer></script>
        <script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}" defer></script>

        <!-- JS Electro -->
        <script src="{{ asset('assets/js/hs.core.js') }}" defer></script>
        <script src="{{ asset('assets/js/components/hs.countdown.js') }}" defer></script>
        <script src="{{ asset('assets/js/components/hs.header.js') }}" defer></script>
        <script src="{{ asset('assets/js/components/hs.hamburgers.js') }}" defer></script>
        <script src="{{ asset('assets/js/components/hs.unfold.js') }}" defer></script>
        <script src="{{ asset('assets/js/components/hs.focus-state.js') }}" defer></script>
        <script src="{{ asset('assets/js/components/hs.malihu-scrollbar.js') }}" defer></script>
        <script src="{{ asset('assets/js/components/hs.validation.js') }}" defer></script>
        <script src="{{ asset('assets/js/components/hs.fancybox.js') }}" defer></script>
        <script src="{{ asset('assets/js/components/hs.onscroll-animation.js') }}" defer></script>
        <script src="{{ asset('assets/js/components/hs.slick-carousel.js') }}" defer></script>
        <script src="{{ asset('assets/js/components/hs.quantity-counter.js') }}" defer></script>
        <script src="{{ asset('assets/js/components/hs.show-animation.js') }}" defer></script>
        <script src="{{ asset('assets/js/components/hs.svg-injector.js') }}" defer></script>
        <script src="{{ asset('assets/js/components/hs.go-to.js') }}" defer></script>
        <script src="{{ asset('assets/js/components/hs.selectpicker.js') }}" defer></script>

        <!-- JS Plugins Init. -->
        <script>
            $(window).on('load', function () {
                // initialization of HSMegaMenu component
                $('.js-mega-menu').HSMegaMenu({
                    event: 'hover',
                    direction: 'horizontal',
                    pageContainer: $('.container'),
                    breakpoint: 767.98,
                    hideTimeOut: 0
                });
            });

            $(document).on('ready', function () {
                // initialization of header
                $.HSCore.components.HSHeader.init($('#header'));

                // initialization of animation
                $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');

                // initialization of unfold component
                $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                    afterOpen: function () {
                        $(this).find('input[type="search"]').focus();
                    }
                });

                // initialization of quantity counter
                $.HSCore.components.HSQantityCounter.init('.js-quantity');
                
                // initialization of popups
                $.HSCore.components.HSFancyBox.init('.js-fancybox');

                // initialization of countdowns
                var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
                    yearsElSelector: '.js-cd-years',
                    monthsElSelector: '.js-cd-months',
                    daysElSelector: '.js-cd-days',
                    hoursElSelector: '.js-cd-hours',
                    minutesElSelector: '.js-cd-minutes',
                    secondsElSelector: '.js-cd-seconds'
                });

                // initialization of malihu scrollbar
                $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

                // initialization of forms
                $.HSCore.components.HSFocusState.init();

                // initialization of form validation
                $.HSCore.components.HSValidation.init('.js-validate', {
                    rules: {
                        confirmPassword: {
                            equalTo: '#signupPassword'
                        }
                    }
                });

                // initialization of show animations
                $.HSCore.components.HSShowAnimation.init('.js-animation-link');

                // initialization of fancybox
                $.HSCore.components.HSFancyBox.init('.js-fancybox');

                // initialization of slick carousel
                $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

                // initialization of go to
                $.HSCore.components.HSGoTo.init('.js-go-to');

                // initialization of hamburgers
                $.HSCore.components.HSHamburgers.init('#hamburgerTrigger');

                // initialization of unfold component
                $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                    beforeClose: function () {
                        $('#hamburgerTrigger').removeClass('is-active');
                    },
                    afterClose: function() {
                        $('#headerSidebarList .collapse.show').collapse('hide');
                    }
                });

                $('#headerSidebarList [data-toggle="collapse"]').on('click', function (e) {
                    e.preventDefault();

                    var target = $(this).data('target');

                    if($(this).attr('aria-expanded') === "true") {
                        $(target).collapse('hide');
                    } else {
                        $(target).collapse('show');
                    }
                });

                // initialization of unfold component
                $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

                // initialization of select picker
                $.HSCore.components.HSSelectPicker.init('.js-select');
                
                //Update item cart
                $(".btn-update-item").on('click', function(e){
                    e.preventDefault();
                    
                    var id = $(this).data('id');
                    var href = $(this).data('href');
                    var cantidad = $("#product_" + id).val();
                    if(cantidad < 1){
                        cantidad = 1;
                    }

                    window.location.href = "update/" + href + "/" + cantidad;
                });
            
            });
        </script>
        
    </body>
</html>