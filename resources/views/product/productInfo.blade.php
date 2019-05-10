@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Details</h1>
    </div>
    <div class="row">
        <div class="row no-gutters justify-content-between">
            <div class="col-12 col-sm-6 col-md-7">
                <div class="card">
                    <div class="card-header">
                    {{ $product->name }}
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source
                                    Title</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <img src="{{ asset('img/' . $product->image) }}" class="img-fluid" alt="Product image">
            </div>
        </div>
    </div>
</div>
@endsection
