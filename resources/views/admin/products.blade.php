@extends('admin\partial\header\header')
@section('title', 'Ecommerce Admin panel')


@section('content')

<div class="container">
    <h1>All products</h1>

    <ul>
        @foreach ($products as $product)
        <li> <a>{{ $product->title }}</a></li>
        @endforeach
    </ul>
</div>

@endsection

@extends('admin\partial\footer\footer')