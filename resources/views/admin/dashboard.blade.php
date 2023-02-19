@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')

    <div class="row">
    <div class="col-lg-3 col-6">

    <div class="small-box bg-info">
    <div class="inner">
    <h3>{{ $kategori }}</h3>
    <p>Total Kategori</p>
    </div>
    <div class="icon">
        <i class="fa-solid fa-k"></i>
    </div>
    <a href="{{ route ('kategori.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>

    <div class="col-lg-3 col-6">

    <div class="small-box bg-success">
    <div class="inner">
    <h3>{{ $produk }}</h3>
    <p>Total Produk</p>
    </div>
    <div class="icon">
        <i class="fa-solid fa-box"></i>
    </div>
    <a href="{{ route ('produk.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>

    <div class="col-lg-3 col-6">

    <div class="small-box bg-warning">
    <div class="inner">
    <h3>{{ $member }}</h3>
    <p>Total Member</p>
    </div>
    <div class="icon">
        <i class="fa-solid fa-id-card"></i>
    </div>
    <a href="{{ route ('member.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>

    <div class="col-lg-3 col-6">

    <div class="small-box bg-danger">
    <div class="inner">
    <h3>{{ $supplier }}</h3>
    <p>Total Supplier</p>
    </div>
    <div class="icon">
        <i class="fa-solid fa-truck"></i>
    </div>
    <a href="{{ route ('supplier.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>

    </div>

@endsection
