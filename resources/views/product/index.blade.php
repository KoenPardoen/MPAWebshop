@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>HUTS</h1>
    </div>

    <div class="album py-5 bg-light">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top productImg"
                        src="/img/shoes.jpeg"
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ipsam velit laborum nihil blanditiis placeat illum quibusdam possimus vitae, quidem eveniet temporibus est magnam incidunt eum autem quaerat voluptate ad?
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Product info</button>
                            </div>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Add</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top productImg"
                        src="/img/shoes2.jpg"
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ipsam velit laborum nihil blanditiis placeat illum quibusdam possimus vitae, quidem eveniet temporibus est magnam incidunt eum autem quaerat voluptate ad?</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Product info</button>
                            </div>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Add</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top productImg"
                        src="/img/shoes3.jpg"
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ipsam velit laborum nihil blanditiis placeat illum quibusdam possimus vitae, quidem eveniet temporibus est magnam incidunt eum autem quaerat voluptate ad?</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Product info</button>
                            </div>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Add</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
