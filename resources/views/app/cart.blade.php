@extends('app\partial\header\header')
@section('title', 'Ecommerce app')
@extends('app\partial\header\navbar')


<div class="container" style="margin-top: 80px">
    <h2>Cart</h2>
    <!-- @if (session('success'))
    <p>{{ session('success') }}</p>
    @endif -->

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Description</th>
                <th scope="col">Brand</th>
                <th scope="col">Qnty</th>
                <th scope="col">Price</th>
                <th scope="col">Option</th>
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
                <td>
                    <form method="post" action="{{ route('cart.destroy', $row->id) }}">
                        @csrf
                        @method("DELETE")

                        <button type="submit" class="btn btn-danger">Remove</button>
                    </form>
                </td>
            </tr>

            @empty
            <p>No product</p>
            @endforelse
        </tbody>
    </table>
    <hr>

    <?php
    $total = 0;
    foreach ($data as $rows) {
        $total = ($rows->products->price * $rows->qnty) + $total;
    }
    ?>
    <div class="d-flex flex-row justify-content-between">
        <div class="p-2">
            <h3>Total Price:</h3>
        </div>
        <div class="p-2">
            <h3>{{ $total }}tk</h3>
        </div>
    </div>

    <div class="d-flex flex-row justify-content-center">
        <button type="submit" class="btn btn-info btn-lg">Place Order</button>
    </div>

</div>

@extends('app\partial\footer\footer')