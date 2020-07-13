@extends('layouts.admin_tpl')

@section('content')
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div id="result_">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Dashboard</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Beranda</a></li>
                        <li class="breadcrumb-item active">Dashboard Admin</li>
                    </ol>
                    <button data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tambah Kategori Ajar" data-toggle="modal" data-target=".bs-example-modal-lg" type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Tambah Data</button>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        This is some text within a card block.
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
{!! Form::open(['url' => '#', 'class' => 'form-horizontal']) !!}
{!! Form::close() !!}

@endsection
@section('scripts')

<script type="text/javascript">

    $(document).ready(function () {
        xMenu();
    });

    function xMenu() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('[name="_token"]').val()
            }
        });
        $('._mtransaksi').on('click', function (e) {
            e.stopImmediatePropagation();
            e.preventDefault();
            var menu = $(this).data('coba');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('[name="_token"]').val()
                }
            });
            if (e.handled != true) {
                $.ajax({
                    url: "<?= url('/admin') ?>/" + menu,
                    type: "POST",
                    async: false,
                    //                    dataType: 'json',
                    success: function (data) {
                        $('#result_').html(data);

                    },
                    error: function (jqXHR, textStatus, errorThrown) {
//                        alert(jqXHR.status);
//                        alert(textStatus);
                        if (errorThrown == 'Unauthorized') {
                            alert('Sesi login anda berakhir, \nSilahkan login kembali');
                            location.reload();

                        }
                    }
                });

            }


        });
    }


</script>
@endsection

