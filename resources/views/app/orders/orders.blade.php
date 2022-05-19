@extends('app\partial\header\header')
@section('title', 'Ecommerce app')
@extends('app\partial\header\navbar')


<div class="container" style="margin-top: 80px">

    <h2>My Orders</h2>
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>Product ID</th>
            <th>Discount (%)</th>
            <th>Total Cost (tk)</th>
            <th>Status</th>
        </tr>
        @foreach($orders as $order)


        <tr>
            <td> <a href="/order/{{$order->id}}"> {{$order->id}} </a></td>
            <td> {{$order->discount}}</td>
            <td> {{$order->price}}</td>
            <td> {{$order->status}}</td>
        </tr>
        @endforeach

    </table>

</div>

@extends('app\partial\footer\footer')