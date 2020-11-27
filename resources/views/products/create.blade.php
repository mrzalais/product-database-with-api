@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">
            Back
        </a>
        <form method="post" action="{{ route('products.store')}}">
            @csrf
            <div class="form-group">
                <label for="name">Preces nosaukums</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Jauns Produkts Šeit...">
            </div>
            <div class="form-group">
                <label for="amount">Vienību skaits</label>
                <input type="text" class="form-control" id="amount" name="amount" placeholder="Skaits...">
            </div>
            <div class="form-group">
                <label for="price">Cena par vienu vienību</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Cena...">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Pievienot</button>
            </div>
        </form>
    </div>
@endsection
