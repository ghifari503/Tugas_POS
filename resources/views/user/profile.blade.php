@extends('layouts.master')

@section('title')
    Edit Profile
@endsection

@section('css')


@endsection
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <form action="{{ route('user.update_profile') }}" method="post" class="form-profile" data-toggle="validator" enctype="multipart/form-data">
                @csrf

                <div class="box-body">
                    <div class="alert alert-info alert-dismissible" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="icon fa fa-check"></i> Perubahan berhasil disimpan
                    </div>
                    <div class="form-group-row">
                        <label for="name" class="col-lg-2 col-lg-offset-1  control-label">Nama</label>
                        <div class="div col-lg-6">
                            <input type="text" name="name" id="name" class="form-control" required autofocus value="{{ $profile->name }}">
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="old_password">Password Lama</label>
                        <input type="password" name="old_password" id="old_password" class="form-control" value=""
                        minlength="6">
                        <span class="help-block with-errors"></span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" value=""
                        minlength="6">
                        <span class="help-block with-errors"></span>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" value=""
                        data-match="#password">
                        <span class="help-block with-errors"></span>
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
        $('#old_password').on('keyup', function () {
            if ($(this).val() != "") $('#password, #password_confirmation').attr('required', true);
            else $('#password, #password_confirmation').attr('required', false);
        });

        $('.form-profile').validator().on('submit', function (e) {
            if (! e.preventDefault()) {
                $.ajax({
                    url: $('.form-profile').attr('action'),
                    type: $('.form-profile').attr('method'),
                    data: new FormData($('.form-profile')[0]),
                    async: false,
                    processData: false,
                    contentType: false
                })
                .done(response => {
                    $('[name=name]').val(response.name);
                    $('.alert').fadeIn();
                    setTimeout(() => {
                        $('.alert').fadeOut();
                    }, 3000);
                })
                .fail(errors => {
                    if (errors.status == 422) {
                        alert(errors.responseJSON);
                    } else {
                        alert('Tidak dapat menyimpan data');
                    }
                    return;
                });
            }
        });
    });


</script>


@endsection
