@extends('app\partial\header\header')
@section('title', 'Ecommerce app')
@extends('app\partial\header\navbar')


<div class="container" style="margin-top: 80px">
    <!-- product card start -->
    <div class="card" style="width: 18rem">
        <img class="card-img-top" src="assets/images/watch.webp" alt="Card image cap" />
        <div class="card-body">
            <h5 class="card-title">Rolex Watch</h5>
            <p class="card-text">Buy this awesome watch.</p>

            <a href="#" class="btn btn-primary">Add to cart</a>
        </div>
    </div>
    <!-- product card end -->
</div>

@extends('app\partial\footer\footer')