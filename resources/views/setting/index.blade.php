@extends('layouts.master')

@section('title')
    Pengaturan
@endsection

@section('css')


@endsection
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <form action="{{ route('setting.update') }}" method="post" class="form-setting" data-toggle="validator" enctype="multipart/form-data">
                @csrf

                <div class="box-body">
                    <div class="alert alert-info alert-dismissible" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="icon fa fa-check"></i> Perubahan berhasil disimpan
                    </div>
                    <div class="form-group-row">
                        <label for="nama_perusahaan" class="col-lg-2 col-lg-offset-1  control-label">Nama Perusahaan</label>
                        <div class="div col-lg-6">
                            <input type="text" name="nama_perusahaan" id="nama_perusahaan" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group-row">
                        <label for="telepon" class="col-lg-2 col-lg-offset-1  control-label">Telepon</label>
                        <div class="div col-lg-6">
                            <input type="number" name="telepon" id="telepon" class="form-control" required>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group-row">
                        <label for="alamat" class="col-lg-2 col-lg-offset-1 control-label">Alamat</label>
                        <div class="div col-lg-6">
                            <textarea name="alamat" id="alamat" class="form-control" rows="3" required></textarea>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group-row">
                        <label for="diskon" class="col-lg-2 col-lg-offset-1 control-label">Diskon</label>
                        <div class="div col-lg-2">
                            <input type="number" name="diskon" id="diskon" class="form-control" required>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group-row">
                        <label for="tipe_nota" class="col-lg-2 col-lg-offset-1 control-label">Tipe Nota</label>
                        <div class="div col-lg-2">
                            <select name="tipe_nota" id="tipe_nota" class="form-control" required>
                                <option value="1">Nota Kecil</option>
                                <option value="2">Nota Besar</option>
                            </select>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                </div>

                <div class="box-footer text-right">
                    <button class="btn btn-primary">Confirm</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection


@section('js')

<script>
    $(function () {
        showData();

        $('.form-setting').validator().on('submit', function (e) {
            if (! e.preventDefault()) {
                $.ajax({
                    url: $('.form-setting').attr('action'),
                    type: $('.form-setting').attr('method'),
                    data: new FormData($('.form-setting')[0]),
                    async: false,
                    processData: false,
                    contentType: false
                })
                .done(response => {
                    showData();
                    $('.alert').fadeIn();

                    setTimeout(() => {
                        $('.alert').fadeOut();
                    }, 3000);
                })
                .fail(errors => {
                    alert('Tidak dapat menyimpan data');
                    return;
                });
            }
        });
    });

    function showData() {
        $.get('{{ route('setting.show') }}')
            .done(response => {
                $('[name=nama_perusahaan]').val(response.nama_perusahaan);
                $('[name=telepon]').val(response.telepon);
                $('[name=alamat]').val(response.alamat);
                $('[name=diskon]').val(response.diskon);
                $('[name=tipe_nota]').val(response.tipe_nota);
                $('title').text(response.nama_perusahaan + ' | Pengaturan');
            })
            .fail((errors) => {
                alert('Tidak dapat menampilkan data');
                return;
            });
    }

</script>


@endsection
