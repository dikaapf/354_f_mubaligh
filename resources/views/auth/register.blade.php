@extends('layouts.register')

@section('content')
<nav id="menu" class="fake_menu"></nav>

<div id="login">
    <aside>
        <figure>
            <a href="./"><img src="<?= asset('/tpl') ?>/img/mubaligh_logo.png" width="120" height="35" alt="" class="logo_sticky"></a>
        </figure>
        <div class="access_social">
            <!--<a href="#0" class="social_bt facebook">Register with Facebook</a>-->
            <!--<a href="#0" class="social_bt google">Register with Google</a>-->
        </div>
        <div class="divider"><span>Or</span></div>
        @if (session('status')) 
        <b>Informasi!</b> {{ session('status') }}
        @endif
        <form method="POST" action="{{ route('register') }}">
            @csrf


            <div class="form-group">
                <input id="name" placeholder="Isi nama lengkap" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                <i class="icon_pencil-edit"></i>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">

                <input placeholder="isi alamat email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                <i class="icon_mail"></i>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group ">

                <input placeholder="isi kata sandi" id="password1" type="password"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                <i class="icon_lock_alt"></i>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group ">

                <input placeholder="konfirmasi kata sandi" id="password2" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                <i class="icon_lock_alt"></i>
            </div>
            <?= Captcha::img('math') ?>
            <div class="form-group ">

                <input type="text" class="form-control" name="captcha" placeholder="isi hasil penjumlahan">
                <i class="icon_box-checked"></i>

            </div>
            <div id="pass-info" class="clearfix"></div>
            <div class="form-group row mb-0">
                <button type="submit" class="btn_1 rounded full-width">
                    {{ __('Register') }}
                </button>
            </div>
            <div class="text-center add_top_10">Sudah ada akun? <strong><a href="login.html">Masuk</a></strong></div>

        </form>

        <div class="copy">© 2020 Mubaligh.id</div>
    </aside>

</div>

@endsection
