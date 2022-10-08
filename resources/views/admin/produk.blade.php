@extends('admin.layout.app')
@section('content')

<div class="animated fadeIn">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Produk Table</strong>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Deskripsi</th>
                                <th>Harga</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produk as $pro)
                            <tr>
                                <td>{{$pro->nama}}</td>
                                <td>{{$pro->kategori}}</td>
                                <td>{{$pro->deskripsi}}</td>
                                <td>Rp.{{number_format($pro->harga,2,',','.');}}</td>
                                <td>{{$pro->image}}</td>
                                <td>
                                    <a href="/dashboard/produk/edit/{{$pro->id}}" class="btn btn-primary">Update</a>
                                    <form action="/dashboard/produk/{{$pro->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
       
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->
    @endsection
   