@extends('app\partial\header\header')
@section('title', 'Ecommerce Product details')
@extends('app\partial\header\navbar')


<div class="container" style="margin-top: 80px">
    <div class="row justify-content-md-center">


        <!-- product card start -->
        <div class="card" style="width: 18rem">
            <img class="card-img-top" src=" {{ asset('uploads/products/'.$data->image) }}" alt="Card image cap" />
            <div class="card-body">
                <h5 class="card-title"> {{ $data->title }} </h5>
                <p class="card-text">{{ $data->content }}.</p>

                <a href="#" class="btn btn-primary">Add to cart</a>
            </div>
        </div>
        <!-- product card end -->
    </div>
</div>

@extends('app\partial\footer\footer')