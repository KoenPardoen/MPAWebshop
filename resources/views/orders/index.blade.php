@extends('layouts.app')

@section('content')
<?php 
    $cartItems = session('cart');
?>
<div class="container">
    <div class="row justify-content-center">
        <h1 id="orderTitle">Kassa</h1>
        <div class="row orderRow">
            <div class="col-8">
                <table class="table shoppingCartTable">
                    <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Aantal</th>
                            <th scope="col" colspan="2">Prijs</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        @if ($product['quantity'] > 0)
                        <tr>
                            <td> {{ $product['name'] }}</td>
                            <td>  {{ $product['quantity'] }}</td>
                            <td> &euro;{{ $product['productTtl'] }} </td>
                        </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
                <div class="alert alert-success" role="alert">
                Totaal bedrag &euro;{{ $cartTotalPrice }}
                </div>
            </div>
            <div class="col-4">
                <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">Account</div>
                    <div class="card-body">
                        <p>Naam: {{ $user->name }} </p>
                        <p>Email: {{$user->email }} </p>
                    </div>
                </div>
                <button type="button" class="btn btn-outline-success">Bestelling afronden</button>
            </div>
        </div> 
    </div>
</div>
@endsection


