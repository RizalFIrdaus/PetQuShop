@extends('layouts.app')

@section('content')


<div class="headline">
    <div class="container">
        <div class="line">
            <div class="row d-flex flex-column justify-content-start">
                <div class="col-md-7">
                    <h1>Blog</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem 
                            Ipsum has been the industry's standard dummy text ever since 
                            the 1500s</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="blog-main">
    <div class="container">
        
        @foreach ($blog as $b)
        <div class="blog-link mt-5">
            <a href="/blog/{{$b->id}}">
                <div class="row">
                    <div class="col-md  d-flex justify-content-center">
                        <img src="{{asset('img/blog/'.$b->image)}}" class="img img-thumbnail" width="300px" alt="...">
                    </div>
                    <div class="col-md d-flex justify-content-center align-content-center flex-column">
                        <h1>{{$b->judul}}</h1>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection