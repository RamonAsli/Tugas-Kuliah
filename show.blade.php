@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Barang</h2>

    <a href="{{ route('KeluarMasukBarang.index') }}" class="btn btn-secondary mb-3">Kembali</a>

    <table class="table table-bordered">
        <tr>
            <th>Code</th>
            <td>{{ $barang->code }}</td>
        </tr>
        <tr>
            <th>Nama Barang</th>
            <td>{{ $barang->nama_barang }}</td>
        </tr>
        <tr>
            <th>Deskripsi</th>
            <td>{{ $barang->deskripsi }}</td>
        </tr>
        <tr>
            <th>Harga Satuan</th>
            <td>Rp {{ number_format($barang->harga_satuan, 0, ',', '.') }}</td>
        </tr>
        <tr>
            <th>Jumlah</th>
            <
