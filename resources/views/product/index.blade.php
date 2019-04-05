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
                        src="/img/hamer1.png"
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Hamer slaat heel goed, gooien kan ook maar alleen uit vrustratie.
                        Het is geen boomerang dus je moet hem zelf weer halen.
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
                        src="/img/hamer2.jpg"
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Hamer is zeer zwaar maar lastig mee mist te slaan. koop je hem niet kan je beter een slipper naar je hoofd krijgen.</p>
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
                        src="/img/hamer3.gif"
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Hamer is geel dus zeer snel net thunder bolt PATS, Kopen dus! je weet niet wat je mist<br>(in ieder geval geen spijker met deze hamer).</p>
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
