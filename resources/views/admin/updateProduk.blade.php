@extends('admin.layout.app')
@section('content')
<div class="container">
    <form enctype="multipart/form-data" method="POST">
        @csrf
        @method('put')
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="{{$produk->nama}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="kategori">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori" value="{{$produk->kategori}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi" value="{{$produk->deskripsi}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga" value="{{$produk->harga}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="image">Gambar</label>
                <input type="text" class="form-control" id="image" name="image" placeholder="Gambar" value="{{$produk->image}}">
            </div>
        </div>
     
        <a href="/dashboard/produk" class="btn btn-primary">Kembali</a>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
   