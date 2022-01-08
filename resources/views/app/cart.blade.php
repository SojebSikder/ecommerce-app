@extends('app\partial\header\header')
@section('title', 'Ecommerce app')
@extends('app\partial\header\navbar')


<div class="container" style="margin-top: 80px">
    <h2>Cart Page</h2>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Description</th>
                <th scope="col">Brand</th>
                <th scope="col">Qnty</th>
                <th scope="col">Price</th>
            </tr>
        </thead>
        <tbody>
            @php
            $id = 0;
            @endphp

            @forelse ($data as $row)

            @php
            $id++;
            @endphp

            <tr>
                <th scope="row">{{ $id }}</th>
                <td> {{ $row->products->title }} </td>
                <td> {{ $row->products->content }} </td>
                <td> {{ $row->products->brand }} </td>
                <td> {{ $row->qnty }} </td>
                <td> {{ $row->products->price }}tk </td>
            </tr>

            @empty
            <p>No product</p>
            @endforelse
        </tbody>
    </table>
    <hr>
    Total Price:
</div>

@extends('app\partial\footer\footer')