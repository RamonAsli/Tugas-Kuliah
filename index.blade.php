@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Keluar Masuk Barang</h2>
    <a href="{{ route('KeluarMasukBarang.create') }}" class="btn btn-primary mb-3">Tambah Barang</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered align-middle">
        <thead>
            <tr>
                <th>Code</th>
                <th>Nama Barang</th>
                <th>Deskripsi</th>
                <th>Harga Satuan</th>
                <th>Jumlah</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barang as $item)
            <tr>
                <td>{{ $item->code }}</td>
                <td>{{ $item->nama_barang }}</td>
                <td>{{ $item->deskripsi }}</td>
                <td>Rp {{ number_format($item->harga_satuan, 0, ',', '.') }}</td>
                <td>{{ $item->jumlah }}</td>
                <td>
                    @if ($item->foto)
                        <img src="{{ asset('storage/' . $item->foto) }}" alt="Foto" width="80">
                    @else
                        -
                    @endif
                </td>
                <td>
                    <a href="{{ route('KeluarMasukBarang.show', $item->id) }}" class="btn btn-sm btn-info">Detail</a>
                    <a href="{{ route('KeluarMasukBarang.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('KeluarMasukBarang.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
