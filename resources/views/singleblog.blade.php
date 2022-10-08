@extends('layouts.app')

@section('content')


<div class="headline">
    <div class="container">
        <div class="line">
            <div class="row d-flex flex-column justify-content-start">
                <div class="col-md-7">
                    <h1>Single Blog</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem 
                            Ipsum has been the industry's standard dummy text ever since 
                            the 1500s</p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="main-singleblog mt-5">
    <div class="container d-flex flex-column">
        <div class="row">
            <div class="col-md">
                <h1>{{$blog->judul}} </h1>
            </div>
        </div>
        <div class="row col-md justify-content-center">
            <img src="{{asset('img/blog/'.$blog->image)}}" class="img-thumbnail justify-content-center"  alt="...">
        </div>
        <div class="row">
            <div class="col-md">
                <p style="text-indent: 6em;">
                   {{$blog->isi}}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection