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
                    <th scope="col">Aantal</th>
                    <th scope="col" colspan="2">Prijs</th>
                </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                @if ($product['quantity'] > 0)
                <tr id="pr-{{ $product['id'] }}">
                    <td> {{ $product['id'] }}</td>
                    <td> {{ $product['name'] }}</td>
                    <td>  <input type="number" data-val="{{ $product['quantity'] }}" data-id="{{ $product['id'] }}" value="{{ $product['quantity'] }}" class="quintityID quantityCart form-control"></td>
                    <td> &euro;{{ $product['productTtl'] }} </td>
                    <td>
                        <form action="{{ action('ShoppingCartController@destroy', ['id' => $product->id]) }}" method="POST">    
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-outline-secondary" >X</button>
                        </form>
                    </td>
                </tr>
                @endif
            @endforeach
            </tbody>
        </table>
        
        
        @if($cartTotalPrice > 0)
        <div class="container">
        <div class="row">
        <div class="col align-self-start">
            <a href="{{ route('order.index') }}" class="btn btn-outline-info">Bestellen</a>
        </div>
        <div class="col align-self-start">
            <h2 class="float-right">&euro;{{ $cartTotalPrice }}</h2>
        </div>
        </div>
        @endif
        @else
        <div class="row justify-content-center">
            <h1>Winkelmand</h1>
        </div>
        <div class="emptyAlert  alert alert-info" role="alert">
            Er zit niks in je winkelmandje
        </div>
        @endif
    </div>    
</div>

@endsection
