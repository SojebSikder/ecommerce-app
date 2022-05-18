@extends('app\partial\header\header')
@section('title', 'Ecommerce app')
@extends('app\partial\header\navbar')


<div class="container" style="margin-top: 80px">
    <h2>Hello {{ session('username') }}</h2>



    <h2>My Orders</h2>

    @foreach($orders as $order)
    <ol>
        <li>{{$order->id}}</li>
    </ol>
    @endforeach
    
</div>

@extends('app\partial\footer\footer')