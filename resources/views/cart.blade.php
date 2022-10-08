@extends('layouts.app')

@section('content')
<section class="h-100 gradient-custom">
    <div class="container py-5">
      <div class="row d-flex justify-content-center my-4">
        <div class="col-md-8">
          <div class="card mb-4">
            <div class="card-header py-3">
              <h5 class="mb-0">List Cart</h5>
            </div>
            <div class="card-body">
              <!-- Single item -->
              @foreach ($cart as $c)
              @if ( $c->id_pelanggan === Auth::User()->id )
              <div class="row">
                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                  <!-- Image -->
                  <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                    <img src="{{asset('img/'.$c->product->image.'.png')}}"
                      class="w-100" alt="Blue Jeans Jacket" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                    </a>
                  </div>
                  <!-- Image -->
                </div>
  
                <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                  <!-- Data -->
                  <p><strong>{{$c->product->nama}}</strong></p>
                  <p>{{ucwords($c->product->kategori)}} Food</p>
                  <strong>Rp. {{number_format($c->total,2,',','.');}}</strong>
                  <!-- Data -->
                </div>
  
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                  <!-- Quantity -->
                  <div class="d-flex mb-4" style="max-width: 300px">
  
                    <div class="form-outline">
                      <form action="/cart/{{$c->id}}" method="post">
                        @csrf
                        @method('put')
                        <input id="form1" min="0" name="unit" value="{{$c->unit}}" type="number" class="form-control" disabled/>
                        <label class="form-label" for="form1">Quantity</label>
                      </form>
                    </div>
                    <div class="form-outline">
                        <form action="/cart/{{$c->id}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="id" value="{{$c->id}}">
                            <button class="btn btn-danger" type="submit">X</button>
                        </form>
                    </div>
                  </div>
                  <!-- Quantity -->
  
                  <!-- Price -->
                </div>
              </div>
              <!-- Single item -->
              <hr class="my-4" />
              @endif
              @endforeach
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-body">
              <p><strong>Expected shipping delivery</strong></p>
              <p class="mb-0">3 Hours</p>
            </div>
          </div>
          <div class="card mb-4 mb-lg-0">
            <div class="card-body">
              <p><strong>We accept</strong></p>
              <img class="me-2" width="45px"
                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                alt="Visa" />
              <img class="me-2" width="45px"
                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
                alt="American Express" />
              <img class="me-2" width="45px"
                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
                alt="Mastercard" />
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <div class="card-header py-3">
              <h5 class="mb-0">Summary</h5>
            </div>
            <div class="card-body">
              <ul class="list-group list-group-flush">
                <li
                  class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                  Products
                  <span>Rp. {{number_format($sum,2,',','.');}}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                  Shipping
                  <span>Gratis</span>
                </li>
                <li
                  class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                  <div>
                    <strong>Total amount</strong>
                    <strong>
                      <p class="mb-0">(including VAT)</p>
                    </strong>
                  </div>
                  <span><strong>Rp. {{number_format($sum,2,',','.');}}</strong></span>
                </li>
              </ul>
  
              <form action="/cart" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-primary btn-lg btn-block">
                  Go to checkout
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection