@extends('app\partial\header\header')
@section('title', 'Ecommerce Product details')
@extends('app\partial\header\navbar')


<div class="container" style="margin-top: 80px">
    <div class="row justify-content-md-center">


        <!-- product card start -->
        <div class="card w-50" style="width: 18rem">
            <img class="card-img-top" src=" {{ asset('uploads/products/'.$data->image) }}" alt="Card image cap" />
            <div class="card-body">
                <h5 class="card-title"> {{ $data->title }} </h5>
                <p class="card-text">{{ $data->content }}.</p>


            </div>
        </div>
        <!-- product card end -->
        <div style="margin-left: 10px;">
            <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{ url('cart') }}">
                @csrf
                <input type="hidden" class="btn btn-primary" name="product_id" value="{{ $data->id }}"></a>
                <input type="submit" class="btn btn-primary" value="Add to cart"></a>
                <input type="number" style="width: 30%; text-align: center;" name="qnty" value="1"></a>
            </form>
        </div>

    </div>
</div>

@extends('app\partial\footer\footer')