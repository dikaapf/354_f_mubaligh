<link href="<?= asset('theme/skin') ?>/dist/css/style.min.css" rel="stylesheet">
<!--alerts CSS -->
<link href="<?= asset('theme/skin') ?>/assets/node_modules/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"><div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Kategori Pengajar</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Beranda</a></li>
                <li class="breadcrumb-item active">Kategori Pengajar</li>
            </ol>
            <span >
                <button id="_openFOrm" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tambah Kategori Ajar"  type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Tambah Data</button>

            </span>
            <!-- sample modal content -->
            <div class="modal fade bs-example-modal-lg" id="modal_form" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">

                            <h4 class="modal-title" id="myLargeModalLabel">Form Tambah Kategori</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body ">
                            {!! Form::open(['url' => 'dokumen', 'class' => 'form-horizontal','id'=>'form_kategori']) !!}
                            <div class="form-group text-left">
                                <label for="exampleInputuname">Nama Kategori</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="ti-files"></i></span>
                                    </div>
                                    {!! Form::text('nama_kategori', null, ['class' => 'form-control','placeholder'=>'Isi nama kategori']) !!}

                                </div>
                            </div>
                            <div class="form-group text-left">
                                <label for="exampleInputEmail1">Deskripsi</label>
                                <div class="input-group mb-3">

                                    {!! Form::textarea('deskripsi', null, ['class' => 'form-control','rows'=>2]) !!}

                                </div>
                            </div>
                            <div class="form-group text-left">
                                <label for="exampleInputuname">Status</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="ti-files"></i></span>
                                    </div>
                                    {!! Form::select('status',['1'=>'Aktif','0'=>'Tidak Aktif'] ,null, ['class' => 'form-control', 'required']) !!}

                                </div>
                            </div>
                            <div class="form-group text-left">
                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                            </div>




                            {!! Form::close() !!}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Tutup Form</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <div class="modal fade bs-example-modal-lg" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">

                            <h4 class="modal-title" id="myLargeModalLabel">Form Edit Kategori</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body ">
                            <div id="form_edit"></div>
                            {!! Form::open(['url' => 'dokumen', 'class' => 'form-horizontal','id'=>'form_editkategori']) !!}
                            <div class="form-group text-left">
                                <label for="exampleInputuname">Nama Kategori</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="ti-files"></i></span>
                                    </div>
                                    {!! Form::text('nama_kategori', null, ['class' => 'form-control','placeholder'=>'Isi nama kategori','id'=>'nama_kat']) !!}
                                    {!! Form::hidden('id', null, ['class' => 'form-control','placeholder'=>'Isi nama kategori','id'=>'kat_id']) !!}

                                </div>
                            </div>
                            <div class="form-group text-left">
                                <label for="exampleInputEmail1">Deskripsi</label>
                                <div class="input-group mb-3">

                                    {!! Form::textarea('deskripsi', null, ['class' => 'form-control','rows'=>2,'id'=>'deskripsi']) !!}

                                </div>
                            </div>
                            <div class="form-group text-left">
                                <label for="exampleInputuname">Status</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="ti-files"></i></span>
                                    </div>
                                    {!! Form::select('status',['1'=>'Aktif','0'=>'Tidak Aktif'] ,null, ['class' => 'form-control', 'required','id'=>'status_kat']) !!}

                                </div>
                            </div>
                            <div class="form-group text-left">
                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                            </div>




                            {!! Form::close() !!}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Tutup Form</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
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
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Kategori</h4>
                        <!--<h6 class="card-subtitle">Data table example</h6>-->
                        <div class="table-responsive m-t-40">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Kategori</th>
                                        <th>Deskripsi</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1 ?>
                                    @foreach($kategori as $item)
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $item->nama_kategori ?></td>
                                        <td><?= $item->status ?></td> 
                                        <td><?= $item->deskripsi ?></td> 
                                        <td> 
                                            <a data-desc_kat="<?= ($item->deskripsi) ?>" data-kat_id="<?= ($item->id) ?>" data-nama_kat="<?= $item->nama_kategori ?>" data-status_kat="<?= $item->status ?>"  class="btn btn-info btn-sm _edit" href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>

                                        </td>
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= asset('theme/skin') ?>/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?= asset('theme/skin') ?>/assets/node_modules/popper/popper.min.js"></script>
<script src="<?= asset('theme/skin') ?>/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?= asset('theme/skin') ?>/dist/js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="<?= asset('theme/skin') ?>/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?= asset('theme/skin') ?>/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?= asset('theme/skin') ?>/dist/js/custom.min.js"></script>
<script src="<?= asset('theme/skin') ?>/assets/node_modules/sweetalert/sweetalert.min.js"></script>

<script>
$(function () {
    $('#_openFOrm').click(function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();

        if (e.handled !== true) {
            $('#modal_form').modal().show();
        }

    });

    $('form#form_kategori').on('submit', function (e) {

        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#modal_form').modal('hide');

        var formData = new FormData(this);

        $.ajax({
            url: "<?= url('admin/kategori/submit') ?>",
            type: "POST",
            async: false,
            data: formData,
            success: function (data) {

                if (data == 1) {
                    swal("OK!", "Kategori tersimpan.", "success")

                    $.ajax({
                        url: "<?= url('/admin') ?>/kategori",
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

            },
//                cache: false,
            contentType: false,
            processData: false,
            error: function (jqXHR, textStatus, errorThrown) {
                //                        alert(jqXHR.status);
                //                        alert(textStatus);
                $('#er_result').html('Status Proses \n' + jqXHR.responseText);

                alert('Data tidak ditemukan silahkan periksa inputan anda ')
                if (errorThrown == 'Unauthorized') {
                    alert('Sesi login anda berakhir, \nSilahkan login kembali');
                    location.reload();

                }
            }
        });


    });

    $('._edit').click(function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();

        if (e.handled !== true) {
            var kat_id = ($(this).data('kat_id'));
            var nama_kat = ($(this).data('nama_kat'));
            var status_kat = ($(this).data('status_kat'));
            var deskripsi = ($(this).data('desc_kat'));
            $('#modal_edit').modal().show();
            $('#kat_id').val(kat_id);
            $('#nama_kat').val(nama_kat);
            $('#status_kat').val(status_kat);
            $('#deskripsi').val(deskripsi);
//            $("textarea[name='deskripsi']").val(deskripsi)
        }

    });

    $('form#form_editkategori').on('submit', function (e) {

        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#modal_form').modal('hide');

        var formData = new FormData(this);

        $.ajax({
            url: "<?= url('admin/kategori/submit') ?>",
            type: "POST",
            async: false,
            data: formData,
            success: function (data) {

                if (data == 1) {
                    swal("OK!", "Kategori tersimpan.", "success")

                    $.ajax({
                        url: "<?= url('/admin') ?>/kategori",
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

            },
//                cache: false,
            contentType: false,
            processData: false,
            error: function (jqXHR, textStatus, errorThrown) {
                //                        alert(jqXHR.status);
                //                        alert(textStatus);
                $('#er_result').html('Status Proses \n' + jqXHR.responseText);

                alert('Data tidak ditemukan silahkan periksa inputan anda ')
                if (errorThrown == 'Unauthorized') {
                    alert('Sesi login anda berakhir, \nSilahkan login kembali');
                    location.reload();

                }
            }
        });


    });
});


</script>


