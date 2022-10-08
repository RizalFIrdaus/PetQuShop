@extends('layouts.app')

@section('content')


<div class="headline">
    <div class="container">
        <div class="line">
            <div class="row d-flex flex-column justify-content-start">
                <div class="col-md-7">
                    <h1>All Product Pets</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem 
                            Ipsum has been the industry's standard dummy text ever since 
                            the 1500s</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="product-main">
    <div class="container">
        <div class="row ">
            <div class="col-md d-flex flex-column">
                <ul class="nav nav-pills mb-3 justify-content-center " id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">All Product</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Cat Food</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Dog Food</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-accessories-tab" data-bs-toggle="pill" data-bs-target="#pills-accessories" type="button" role="tab" aria-controls="pills-accessories" aria-selected="false">Pet Accessories</button>
                    </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="row">
                              @foreach ($produk as $pro)
                                <div class="col-md">
                                    <div class="product-detil">
                                        <div class="card" style="width: 18rem;">
                                            <img src="{{asset('img/'.$pro->image.'.png')}}" class="card-img-top" alt="...">
                                            <div class="card-body">
                                              <p class="headproduct">{{$pro->nama}}</p>
                                              <div class="row">
                                                <div class="col-md-8">
                                                    <p class="card-text text-product price">Rp. {{number_format($pro->harga,2,',','.');}}</p>
                                                </div>
                                                <div class="col-md-4">
                                                  <a href="/product/detailproduct/{{$pro->id}}" class="btn btn-primary plus" style="text-decoration: none;color:#fff;font-weight:bold;">+</a>
                                                   
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                </div>
                              @endforeach
                            </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">2</div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">3</div>
                    <div class="tab-pane fade" id="pills-accessories" role="tabpanel" aria-labelledby="pills-accessories-tab" tabindex="0">4</div>
                    
                  </div>
            </div>
        </div>
    </div>
</div>

@endsection