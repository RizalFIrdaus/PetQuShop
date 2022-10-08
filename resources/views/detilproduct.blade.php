@extends('layouts.app')

@section('content')


<div class="headline">
    <div class="container">
        <div class="line">
            <div class="row d-flex flex-column justify-content-start">
                <div class="col-md-7">
                    <h1>Detil Product</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem 
                            Ipsum has been the industry's standard dummy text ever since 
                            the 1500s</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="main-detail mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('img/'.$produk->image.'.png')}}" class="card-img-top" alt="...">
            </div>
            <div class="col-md-4">
                <h1>{{$produk->nama}}</h1>
                <p>{{$produk->deskripsi}}</p>
                <form action="" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$produk->id}}">
                      <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupFile01">Unit</label>
                        <input class="form-control" type="number" name="unit" min="1"  step="1"/>
                      </div>
                     <input type="submit" name="submit" value="Add to Cart" class="btn btn-primary">
                </form>
            </div>
            <div class="col-md-4 d-flex justify-content-end">
                <h2>Rp. {{number_format($produk->harga,2,',','.');}}</h2>
            </div>
        </div>
    </div>
</div>

@endsection