@extends('layouts.master')

@section('title')
    Daftar User
@endsection

@section('css')


@endsection
@section('content')

<div id="controller">
    <div class="card">
        <div class="card-header">
            <button onclick="addForm('{{ route('user.store') }}')" class="btn-sm btn-success fa fa-pencil">User</button>
        </div>

        <div class="card-body p-0">
        <table class="table table-striped" id="dataTable">
        <thead>
        <tr>
        <th width=5%>No</th>
        <th>Nama </th>
        <th>Email</th>
        <th width="15%"><i class="fa fa-cog"></i></th>
        </tr>
        </thead>
        </table>
        </div>


    </div>
</div>
@includeIf('user.form')
@endsection

@section('js')

<script>
    let table;

    $(function () {
        table = $('#dataTable').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            autoWidth: false,
            ajax: {
                url: '{{ route('user.data') }}',
            },
            columns: [
                {data: 'DT_RowIndex', searchable: true, sortable: true},
                {data: 'name'},
                {data: 'email'},
                {data: 'aksi', searchable: false, sortable: false},
            ]
        });

        $('#modal-form').validator().on('submit', function (e) {
            if (! e.preventDefault()) {
                $.ajax({
                    url: $('#modal-form form').attr('action'),
                    type: 'post',
                    data: $('#modal-form form').serialize()
                })
                .done((response) => {
                    $('#modal-form').modal('hide');
                    table.ajax.reload();
                })
                .fail((errors) => {
                    alert('Tidak dapat menyimpan data');
                    return;
                });
            }
        });
    });

    function addForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Tambah User');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('post');
        $('#modal-form [name=name]').focus();

        $('#password, #password_confirmation').attr('required', true);
    }

    function editForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Edit User');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('put');
        $('#modal-form [name=name]').focus();

        $('#password, #password_confirmation').attr('required', false);

        $.get(url)
            .done((response) => {
                $('#modal-form [name=name]').val(response.name);
                $('#modal-form [name=email]').val(response.email);
            })
            .fail((errors) => {
                alert('Tidak dapat menampilkan data');
                return;
            });
    }

    function deleteData(url) {
        if (confirm('Yakin ingin menghapus data terpilih?')) {
            $.post(url, {
                    '_token': $('[name=csrf-token]').attr('content'),
                    '_method': 'delete'
                })
                .done((response) => {
                    table.ajax.reload();
                })
                .fail((errors) => {
                    alert('Tidak dapat menghapus data');
                    return;
                });
        }
    }
</script>


@endsection
