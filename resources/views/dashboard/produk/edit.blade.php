@extends('dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Produk</h1>
</div>

    @if (session()->has('success'))
       <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div> 
    @endif

    <div class="col-lg-8">
        <form action="/dashboard/produk/{{ $produk->id }}" method="post">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="nama_produk" class="form-label">nama produk</label>
                <input type="text" class="form-control @error('nama_produk')
                    is-invalid
                @enderror" id="nama_produk" name="nama_produk" value="{{ old('nama_produk', $produk->nama_produk) }}" autofocus>
                @error('nama_produk')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <input type="text" class="form-control @error('keterangan')
                    is-invalid
                @enderror" id="keterangan" name="keterangan" value="{{ old('keterangan', $produk->keterangan) }}" autofocus>
                @error('keterangan')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">harga</label>
                <input type="text" class="form-control @error('harga')
                    is-invalid
                @enderror" id="harga" name="harga" value="{{ old('harga', $produk->harga) }}" autofocus>
                @error('harga')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">jumlah</label>
                <input type="text" class="form-control @error('jumlah')
                    is-invalid
                @enderror" id="jumlah" name="jumlah" value="{{ old('jumlah', $produk->jumlah) }}" autofocus>
                @error('jumlah')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Edit Product</button>
        </form>
    </div>
@endsection