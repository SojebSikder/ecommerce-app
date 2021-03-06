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
                <img class="card-img-top" src="{{ asset('uploads/products/'.$row->image) }} " alt="{{ $row->title }}" /></a>
            <div class="card-body">
                <h5 class="card-title"> <a href="/product/{{ $row->id }}">{{ $row->title }}</a> </h5>
                <p class="card-text">{{ $row->content }}</p>

                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{ url('cart') }}">
                    @csrf
                    <input type="hidden" class="btn btn-primary" name="product_id" value="{{ $row->id }}"></a>
                    <input type="submit" class="btn btn-primary" value="Add to cart"></a>
                    <input type="number" style="width: 30%; text-align: center;" name="qnty" value="1"></a>
                </form>
            </div>
        </div>
        <!-- product card end -->

        @empty
        <p>No product</p>
        @endforelse

    </div>


</div>

@extends('app\partial\footer\footer')