@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>{{ $product->name }}</h1>
        <p>
            Vienību skaits: <b>{{ $product->amount }}</b>
        </p>
        <p>
            Cena par vienu vienību <b>{{ $product->price/100 }}</b>
        </p>
    </div>
@endsection
