<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Muballigh - Mengaji kapan saja di mana saja dari mana saja....">
        <meta name="author" content="muballigh of the world">
        <title>@yield('title')</title>
        <!-- Favicons-->
        <link rel="shortcut icon" href="<?= asset('/tpl') ?>/img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="<?= asset('/tpl') ?>/img/apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?= asset('/tpl') ?>/img/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?= asset('/tpl') ?>/img/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?= asset('/tpl') ?>/img/apple-touch-icon-144x144-precomposed.png">

        <!-- BASE CSS -->
        <link href="<?= asset('/tpl') ?>/css/bootstrap_customized.min.css" rel="stylesheet">
        <link href="<?= asset('/tpl') ?>/css/style.css" rel="stylesheet">

        <!-- SPECIFIC CSS -->
        <link href="<?= asset('/tpl') ?>/css/home.css" rel="stylesheet">
        <!-- SPECIFIC CSS -->
        <link href="<?= asset('/tpl') ?>/css/detail-page.css" rel="stylesheet"> 

    </head>

    <body>
        <header class="header_in shadow element_to_stick clearfix">
            <div class="container">
                @include('layouts.logo')

                @if(Auth::guard('web')->check())
                <ul id="top_menu" class="drop_user">
                    <li>
                        <div class="dropdown user clearfix">
                            <a href="#" data-toggle="dropdown">
                                <figure>
                                    @if(Auth::user()->user_provider==null)
                                    <img src="{{ asset('/tpl/img').'/'.Auth::user()->avatar }}" alt="">

                                    @else
                                    <img src="{{ Auth::user()->avatar }}" alt="">

                                    @endif
                                </figure>{{ Auth::user()->name }}
                            </a> 
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-content">
                                    <ul>
                                        <li><a href="<?= url('/user/dashboard') ?>"><i class="icon_cog"></i>Dashboard</a></li>
                                        <li><a href="#0"><i class="icon_document"></i>Bookings</a></li>
                                        <li><a href="#0"><i class="icon_mail"></i>Messages</a></li>
                                        <li><a href="{{ route('user.logout') }}"><i class="icon_key"></i>Log out</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /dropdown -->
                    </li>
                </ul>
                @elseif(Auth::guard('pengajar')->check())
                <!--pengajar-->
                @else
                <ul id="top_menu">
                    <li><a href="<?= url('/login') ?>" class="btn_access">Masuk</a></li>
                    <li><a href="submit-professional.html" class="btn_access green">Daftar Menjadi Pemateri</a></li>
                </ul>
                @endif
                <!-- /top_menu -->
                <a href="#0" class="open_close">
                    <i class="icon_menu"></i><span>Menu</span>
                </a>
                <nav class="main-menu">
                    <div id="header_menu">
                        <a href="#0" class="open_close">
                            <i class="icon_close"></i><span>Menu</span>
                        </a>
                        <a href="index.html"><img src="img/logo.svg" width="155" height="45" alt=""></a>
                    </div>
                    <ul>
                        <li><a href="<?= url('/') ?>" target="_parent">Beranda</a></li>
                        <li><a href="#" target="_parent">Cari Pengajar</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <!-- /header -->

        <main>
            @yield('content')

            <!--/call_section-->
        </main>
        <!-- /main -->
        <x-footer />
        <!--/footer-->
        <div id="toTop"></div><!-- Back to top button -->
        <div class="layer"></div><!-- Opacity Mask Menu Mobile -->
        <!-- COMMON SCRIPTS -->
        <script src="<?= asset('/tpl') ?>/js/common_scripts.min.js"></script>
        <script src="<?= asset('/tpl') ?>/js/common_func.js"></script>
        <script src="<?= asset('/tpl') ?>/assets/validate.js"></script>
        <!-- SPECIFIC SCRIPTS -->
        <script src="<?= asset('/tpl') ?>/js/sticky_sidebar.min.js"></script>
        <script src="<?= asset('/tpl') ?>/js/specific_detail.min.js"></script>
        <script src="<?= asset('/tpl') ?>/js/datepicker.min.js"></script>
        <script src="<?= asset('/tpl') ?>/js/datepicker_func_1.js"></script>
        @yield('scripts')
    </body>
</html>