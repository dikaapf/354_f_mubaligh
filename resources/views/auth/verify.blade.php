@extends('layouts.blog')

@section('title')
Mubaligh || Teacher of The World || Gurune Jagad
@stop

@section('content')
<div class="container margin_45_40">			
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-12">
                    <article class="blog">

                        <div class="post_info">
                            <div class="card-header">{{ __('Verifikasi alamat email anda') }}</div>

                            <div class="card-body">
                                @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('Sebuah link baru telah dikirim melalui alamat email anda.') }}
                                </div>
                                @endif

                                {{ __('Silahkah cek email anda untuk mengaktifkan akun anda melalui link verifikasi yang dikirim melalui email anda.') }}
                                {{ __('Jika anda tidak menerima email') }},
                                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                    @csrf
                                    <button type="submit" class="btn_access green">{{ __('Kirim ulang') }}</button>.
                                </form>
                            </div>

                        </div>

                    </article>
                    <!-- /article -->
                </div>
                <!-- /col -->

            </div>
            <!-- /row -->



        </div>
        <!-- /col -->


        <!-- /aside -->
    </div>
    <!-- /row -->	
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {

    });
</script>
@endsection