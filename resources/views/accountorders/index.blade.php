@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Bestellingen</h1>
    </div>
    <div class="row row-eq-height">
    @foreach($orders as $order)
    <div class="col-md-4 colOrders">
        <div class="card border-secondary h-100 mb-3">
            <div class="card-header">{{ $order->created_at->format("d/m/Y") }}</div>
            <div class="card-body text-secondary">
                <h5 class="card-title">Ordernummer: {{$order->id}}</h5>
                @foreach($order->orderProducts as $orderProduct)
                    <p class="card-text">{{$orderProduct->product->name}} <small class="text-muted">x {{$orderProduct->quantity}}</small></p>
                @endforeach
                    <p class="card-text">&euro; {{ number_format($order->total_price , 2, ',', '.') }}</p>
            </div>
        </div>
        </div>
    @endforeach
    </div>
</div>
@endsection
