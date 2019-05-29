@extends('layouts.app')

@section('content')
<?php 
    $cartItems = session('cart');
?>
<div class="container">
    @if(Session::has('cart'))
    <div class="row justify-content-center">
        <h1>Winkelmand</h1>
        <table class="table shoppingCartTable">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Product</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Prijs</th>
                </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td> {{ $product['id'] }}</td>
                    <td> {{ $product['name'] }}</td>
                    <td>  <input type="number" onchange="quantity()" value="{{ $product['quantity'] }}" class="quantityCart form-control" id="pwd"></td>
                    <td> {{ $product['amount'] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
        @else
        <div class="row justify-content-center">
            <h1>Winkelmand</h1>
        </div>
        <div class="emptyAlert  alert alert-info" role="alert">
            Er zit niks in je winkelmandje
        </div>
        @endif
</div>
<script type="text/javascript" src="{{ URL::asset('js/shoppingCart.js') }}"></script>
@endsection
