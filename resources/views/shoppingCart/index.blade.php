@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Winkelmand</h1>
        <table class="table shoppingCartTable">
            <thead>
                <tr>
                    <th scope="col">Ordernummer</th>
                    <th scope="col">Product</th>
                    <th scope="col">Prijs</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>192738</td>
                    <td>Trui Hilfiger M</td>
                    <td>99,80</td>
                </tr>
                <tr>
                    <td>192712</td>
                    <td>Trui DAILY PAPER V</td>
                    <td>120,00</td>
                </tr>
                <tr>
                    <td>152432</td>
                    <td>Ray-ban heren</td>
                    <td>220,00</td>
                </tr>
            </tbody>
        </table>

    </div>
</div>
@endsection
