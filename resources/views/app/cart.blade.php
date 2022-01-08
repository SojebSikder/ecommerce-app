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

    use Illuminate\Support\Facades\Http;

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

    <section>
        <div class="d-flex flex-column justify-content-center">

            <div class="mb-3 row">
                <label for="staticUsername" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-5">
                    <textarea name="address" class="form-control" placeholder="Address" id="staticUsername"></textarea>
                </div>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="payment_mode" id="inlineRadio1" value="cod" checked>
                <label class="form-check-label" for="inlineRadio1">Cash on delivery</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="payment_mode" id="inlineRadio2" value="bkash">
                <label class="form-check-label" for="inlineRadio2">Bkash</label>
            </div>

            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Comment</label>
                <div class="col-sm-5">
                    <textarea id="comment" name="comment" class="form-control" placeholder="Comment (If any)" id="inputPassword"></textarea>
                </div>
            </div>
        </div>
        <div class="d-flex flex-row justify-content-center">
            <button id="submit" type="submit" class="btn btn-info btn-lg">Place Order</button>
        </div>
    </section>

</div>

<?php
$order_product_id = uniqid(true);
?>

<!-- Script -->
<script src=" {{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

<script>
    $(document).ready(function() {
        $("#submit").click(function() {

            if ($("#address").val() == "") {
                return alert("Enter address")
            }

            // // Example POST method implementation:
            // async function postData(url = '', data = {}) {
            //     // Default options are marked with *
            //     const response = await fetch(url, {
            //         method: 'POST', // *GET, POST, PUT, DELETE, etc.
            //         mode: 'cors', // no-cors, *cors, same-origin
            //         cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
            //         credentials: 'same-origin', // include, *same-origin, omit
            //         headers: {
            //             'Content-Type': 'application/json',
            //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //             // 'Content-Type': 'application/x-www-form-urlencoded',
            //         },
            //         redirect: 'follow', // manual, *follow, error
            //         referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
            //         body: JSON.stringify(data) // body data type must match "Content-Type" header
            //     });
            //     return response.json(); // parses JSON response into native JavaScript objects
            // }

            // postData('/order', {
            //         order_product_id: "{{ $order_product_id }}",
            //         price: "{{ $total }}",
            //         address: $("#address").val(),
            //         comment: $("#comment").val(),
            //         payment_mode: $('input[name="payment_mode"]:checked').val(),
            //     })
            //     .then(data => {
            //         console.log(data); // JSON data parsed by `data.json()` call
            //     });

            $.ajax({
                url: '/order',
                type: 'POST',
                data: {
                    order_product_id: "{{ $order_product_id }}",
                    price: "{{ $total }}",
                    address: $("#address").val(),
                    comment: $("#comment").val(),
                    payment_mode: $('input[name="payment_mode"]:checked').val(),
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                dataType: 'json',
                success: function(data) {
                    console.info(data);
                }
            });
        });
    })
</script>

@extends('app\partial\footer\footer')