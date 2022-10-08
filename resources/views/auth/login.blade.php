@extends('layouts.login')

@section('content')


{{-- 
    <div class="row">
        <div class="col-md-6 loginform">
            <div class="container">
                <img src="{{asset('img/logo.png')}}" class="card-img-top" alt="...">
                <h1>Login Form</h1>
                    
                <form method="POST" action="{{ route('login') }}" class="p-5">
                    @csrf
                        <div class="input-group mb-4">
                            <span class="input-group-text" id="basic-addon1">Username</span>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">Password</span>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="row mb-0 mt-5">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                  
                                    
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <a class="btn btn-link" href="/register">
                                    {{ __('Daftar Member') }}
                                </a>
                            </div>
                        </div>
                </form>
            </div>
        </div>
        <div class="col-md-6 background">

        </div>
    </div> 
 --}}

    <section class="vh-100">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 text-black">
      
              <div class="px-5 ms-xl-4">
                <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                <span class="h1 fw-bold mb-0"><img src="{{asset('img/logo.png')}}" class="card-img-top" alt="..."></span>
              </div>
      
              <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
      
                <form style="width: 23rem;" method="POST" action="{{ route('login') }}">
                    @csrf
                  <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>
      
                  <div class="form-outline mb-4">
                    <input class="form-control form-control-lg" id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" autofocus />
                    <label class="form-label" for="email">Email address</label>
                    @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  </div>
      
                  <div class="form-outline mb-4">
                    <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
                    <label class="form-label" for="password">Password</label>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
      
                  <div class="pt-1 mb-4">
                    <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
                  </div>
      
                  <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Lupa Passowrd ?</a></p>
                  <p>Belum daftar member ? <a href="/register" class="link-info">Daftar disini</a></p>
      
                </form>
      
              </div>
      
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
              <img src="{{asset('img/kucing.png')}}"
                alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
          </div>
        </div>
      </section>
@endsection

