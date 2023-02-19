@extends('layouts.master')

@section('title')
     Laporan {{tanggal_indonesia($tanggalAwal, false) }} s/d {{ tanggal_indonesia($tanggalAkhir, false) }}
@endsection

@section('css')
<link rel="stylesheet" href="{{asset ('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">

@endsection
@section('content')

<div id="controller">
    <div class="card">
        <div class="card-header">
            <button onclick="updatePeriode()" class="btn btn-info btn-xs btn-flat"><i class="fa fa-plus-circle"></i> Ubah Periode</button>

        </div>



        <div class="card-body p-0">
        <table class="table table-striped" id="dataTable">
        <thead>
        <tr>
        <th width=5%>No</th>
        <th>Tanggal </th>
        <th>Penjualan</th>
        <th>Pembelian</th>
        <th>Pengeluaran</th>
        <th>Pendapatan</th>
        </tr>
        </thead>
        </table>
        </div>


    </div>
</div>
@includeIf('laporan.form')
@endsection

@section('js')

<script src="{{ asset('assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>


<script>
    // //Date picker
    // $('#reservationdate').datetimepicker({
    //     format: 'L',

    // });

        //Date picker
        $('#reservationdate_start').datetimepicker({
        format:  'YYYY-MM-DD',
        toggleActive: true,
    });
    $('#reservationdate_end').datetimepicker({
         format: 'YYYY-MM-DD',
        toggleActive: true
    });

    </script>
<script>
    let table;

    $(function () {
        table = $('#dataTable').DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        autoWidth: false,
        ajax: {
            url: '{{ route('laporan.data', [$tanggalAwal, $tanggalAkhir]) }}',
        },
        columns: [
            {data: 'DT_RowIndex', searchable: false, sortable: false},
            {data: 'tanggal'},
            {data: 'penjualan'},
            {data: 'pembelian'},
            {data: 'pengeluaran'},
            {data: 'pendapatan'}
        ],
        dom: 'Brt',
        bSort: false,
        bPaginate: false,
    });
 });

 function updatePeriode() {
        $('#modal-form').modal('show');
    }
</script>


@endsection
