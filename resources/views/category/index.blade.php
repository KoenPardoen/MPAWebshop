@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Categorieën</h1>
        <div class="row">
        @foreach($categories as $category)
            <div class="col-sm-6">
                <div class="card categoryBox">
                    <div class="card-body">
                        <h5 class="card-title">{{  $category->name  }}</h5>
                        <p class="card-text">{{ $category->description }}</p>
                        <a href="/category/{{ $category->id }}" class="btn btn-primary">Ga naar categorie</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection
