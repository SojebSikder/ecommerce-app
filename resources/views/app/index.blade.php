@extends('app\partial\header\header')
@section('title', 'Ecommerce app')
@extends('app\partial\header\navbar')


<div class="container" style="margin-top: 80px">
    <h2>Explore from latest collection</h2>
    <hr>

    <div class="row justify-content-md-center">
        @forelse ($data as $row)

        <!-- product card start -->
        <div class="card" style="width: 18rem; margin: 10px;">
            <a href="/product/{{ $row->id }}">
                <img class="card-img-top" src="{{ asset('assets/images/'.$row->image) }} " alt="{{ $row->title }}" /></a>
            <div class="card-body">
                <h5 class="card-title"> <a href="/product/{{ $row->id }}">{{ $row->title }}</a> </h5>
                <p class="card-text">{{ $row->content }}</p>

                <a href="/product/{{ $row->id }}" class="btn btn-primary">Add to cart</a>
            </div>
        </div>
        <!-- product card end -->

        @empty
        <p>No product</p>
        @endforelse

    </div>


</div>

@extends('app\partial\footer\footer')