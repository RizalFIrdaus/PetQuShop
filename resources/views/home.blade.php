@extends('layouts.app')

@section('content')

<div class="jumbo">
    <div class="container">
        <div class="tron">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <h1>BELI SEMUA KEBUTUHAN PET 
                        YANG ANDA INGINKAN</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem 
                            Ipsum has been the industry's standard dummy text ever since 
                            the 1500s</p>
                    <a href="" class="btn btn-primary">About Us</a>
                </div>
                <div class="col-md">
                    <img src="{{asset('img/wiskas.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>



<div class="product">
    <div class="container">
        <div class="row jutify-content-center">
            <div class="col-md">
                <p class="headtext">Our Product</p>
                <p class="tagline">Lorem Ipsum is simply dummy text of the 
                    printing and typesetting industry. Lorem 
                    </p>
            </div>
        </div>
            <div class="row">
              @foreach ($produk as $pro)
                <div class="col-md product-detil">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('img/'.$pro->image.'.png')}}" class="img-thumbnail" alt="...">
                        <div class="card-body">
                          <p class="headproduct">{{$pro->nama}}</p>
                        </div>
                      </div>
                </div>
              @endforeach
        </div>
    </div>
</div>


{{-- blolg --}}

<div class="blog ">
    <div class="container d-flex  flex-column ">
        <div class="row">
            <div class="col-md">
                <p class="headtext">Tips for Pet</p>
                <p class="tagline">Lorem Ipsum is simply dummy text of the 
                    printing and typesetting industry. Lorem 
                    </p>
            </div>
        </div>
        <div class="row mt-5 justify-content-around">
            <div class="col-md ">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('img/pororo.png')}}" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-center flex-column">
                      <h5 class="card-title littlehead">Pororo Cat</h5>
                      <p class="card-text littletext">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi iure laboriosam debitis vel </p>
                      <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                  </div>
            </div>
            <div class="col-md ">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('img/pororo.png')}}" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-center flex-column">
                      <h5 class="card-title littlehead">Pororo Cat</h5>
                      <p class="card-text littletext">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi iure laboriosam debitis vel </p>
                      <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                  </div>
            </div>
            <div class="col-md ">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('img/pororo.png')}}" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-center flex-column">
                      <h5 class="card-title littlehead">Pororo Cat</h5>
                      <p class="card-text littletext">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi iure laboriosam debitis vel </p>
                      <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                  </div>
            </div>
            <div class="col-md ">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('img/pororo.png')}}" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-center flex-column">
                      <h5 class="card-title littlehead">Pororo Cat</h5>
                      <p class="card-text littletext">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi iure laboriosam debitis vel </p>
                      <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>



@endsection
