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

    </head>

    <body>

        <header class="header clearfix element_to_stick">
            <div class="container-fluid">
                @include('layouts.logo')

                @if(Auth::guard('web')->check())
                <ul id="top_menu" class="drop_user">
                    <li>
                        <div class="dropdown user clearfix">
                            <a href="#" data-toggle="dropdown">
                                <figure><img src="{{ Auth::user()->avatar }}" alt=""></figure>{{ Auth::user()->name }}
                            </a> 
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-content">
                                    <ul>
                                        <li><a href="<?= url('/home') ?>"><i class="icon_cog"></i>Dashboard</a></li>
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
                    <li><a href="#sign-in-dialog" id="sign-in" class="btn_access">Masuk</a></li>
                    <li><a href="submit-professional.html" class="btn_access green">Daftar Menjadi Pemateri</a></li>
                </ul>
                @endif


            </div>
        </header>
        <!-- /header -->

        <main>
            @yield('content')

        </main>
        <!-- /main -->
    <x-footer ></x-footer>


    <div id="toTop"></div><!-- Back to top button -->

    <div class="layer"></div><!-- Opacity Mask Menu Mobile -->

    <!-- Sign In Modal -->
    <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
        <div class="modal_header">
            <h3>Sign In</h3>
        </div>
        <form method="POST" action="{{ route('login') }}">

            @csrf
            <div class="sign-in-wrapper">
                <!--<a href="#0" class="social_bt facebook">Login with Facebook</a>-->
                <a href="{{ url('auth/google') }}" class="social_bt google">Registrasi dan Login <br /> menggunakan Akun Google</a>
                <div class="divider"><span>Atau</span></div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                    <i class="icon_mail_alt"></i>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" id="password" value="">
                    <i class="icon_lock_alt"></i>
                </div>
                <div class="clearfix add_bottom_15">
                    <div class="checkboxes float-left">
                        <label class="container_check">Remember me
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Lupa Kata Sandi?</a></div>
                </div>
                <div class="text-center">
                    <input type="submit" value="Log In" class="btn_1 full-width mb_5">
                    Belum punya akun? <a href="./register">Registrasi</a>
                </div>
                <div id="forgot_pw">
                    <div class="form-group">
                        <label>Please confirm login email below</label>
                        <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                        <i class="icon_mail_alt"></i>
                    </div>
                    <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
                    <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
                </div>
            </div>
        </form>
        <!--form -->
    </div>
    <!-- /Sign In Modal -->

    <!-- COMMON SCRIPTS -->
    <script src="<?= asset('/tpl') ?>/js/common_scripts.min.js"></script>
    <script src="<?= asset('/tpl') ?>/js/common_func.js"></script>
    <script src="<?= asset('/tpl') ?>/validate.js"></script>
    @yield('scripts')

</body>
</html>