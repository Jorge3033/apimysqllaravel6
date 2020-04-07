<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
<link href="{{ asset('/public/adminTemplate/main.css') }}" rel="stylesheet"></head>



<script src="{{ asset('/public/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('/public/js/bootbox/bootbox.all.min.js') }}"></script>
<script src="{{ asset('/public/js/bootbox/bootbox.min.js') }}"></script>
<script src="{{ asset('/public/js/bootbox/bootbox.locales.min.js') }}"></script>
<!-- Development version -->
<!-- -->
<script src="{{ asset('https://unpkg.com/@popperjs/core@2/dist/umd/popper.js') }}"></script>
<script src="{{ asset('https://unpkg.com/@popperjs/core@2') }}"></script>
<!---->
<link rel="stylesheet" type="text/css" href="{{ asset('/public/DataTables/datatables.min.css') }}"/>
<script src="{{ asset('/public/DataTables\jQuery-3.3.1/jQuery-3.3.1.js') }}"></script>
<script src="{{ asset('/public/DataTables\jQuery-3.3.1/jQuery-3.3.1.min.js') }}"></script>
<script src="{{ asset('/public/DataTables/datatables.min.js') }}"></script>
<script src="{{ asset('/public/DataTables/datatables.js') }}"></script>
<script src="{{ asset('/public/DataTables\Buttons-1.6.1\js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('/public/DataTables\Buttons-1.6.1\js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('/public/DataTables/JSZip-2.5.0/jszip.min.js') }}"></script>
<script src="{{ asset('/public/DataTables/pdfmake-0.1.36/pdfmake.min.js') }}"></script>
<script src="{{ asset('/public/DataTables/pdfmake-0.1.36/vfs_fonts.js') }}"></script>
<script src="{{ asset('/public/DataTables/buttons-1.6.1/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('/public/DataTables/buttons-1.6.1/js/buttons.print.min.js') }}"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- bootbox js -->
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.js') }}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js') }}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js.map') }}"></script>
<!---->
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-database"> </i>
                                Statistics
                            </a>
                        </li>
                        <li class="btn-group nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-edit"></i>
                                Projects
                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-cog"></i>
                                Settings
                            </a>
                        </li>
                    </ul>        </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="{{ asset('/public/adminTemplate/assets/images/avatars/1.jpg') }}" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                            <h6 tabindex="-1" class="dropdown-header">Acciones</h6>

                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>

                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        {{ Auth::user()->name }}
                                    </div>
                                    <div class="widget-subheading">
                                        {{ Auth::user()->email }}
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>        </div>
            </div>
        </div>
        <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>
                    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Admin</li>
                                <li>
                                    <a href="" class="mm-active">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Index
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Administracion</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        Adminstracion
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="/categories">
                                                <i class="metismenu-icon"></i>
                                                Categorias
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/products">
                                                <i class="metismenu-icon">
                                                </i>productos
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/sellers">
                                                <i class="metismenu-icon">
                                                </i>Vendedores
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/storetypes">
                                                <i class="metismenu-icon">
                                                </i>Tipos de tienda
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/stores">
                                                <i class="metismenu-icon">
                                                </i>Tirndas
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/paymodes">
                                                <i class="metismenu-icon">
                                                </i>metodos de pago
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <!--Seccion Mi Negocio -->
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        Mi Negocio
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="">
                                                <i class="metismenu-icon"></i>
                                                Tienda
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <i class="metismenu-icon"></i>
                                                Productos
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <i class="metismenu-icon">
                                                </i>Ventas
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <i class="metismenu-icon">
                                                </i>Comentarios
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <i class="metismenu-icon">
                                                </i>Progreso
                                            </a>
                                        </li>
                                    </ul>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        @yield('content')
                    </div>
                </div>
    </div>
<script type="text/javascript" src="{{ asset('/public/adminTemplate/assets/scripts/main.js') }}"></script></body>
</html>
