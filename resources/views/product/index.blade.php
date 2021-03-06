@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>HUTS</h1>
    </div>
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    {{ $product->name }}
                </div>
                <img class="card-img-top img-fluid productImg" src="img/{{ $product->image }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">{{ $product->description }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/product/{{ $product->id }}" class="btn btn-sm btn-outline-secondary">Detail</a>
                            <form action="{{action('ShoppingCartController@add', ['id' => $product->id])}}"
                                method="post">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-outline-secondary"><i
                                        class="fas fa-shopping-cart"></i></button>
                            </form>
                        </div>
                        <small class="text-muted"><span>&#8364;</span> {{ $product->amount }}</small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
