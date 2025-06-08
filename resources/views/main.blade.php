@extends('dashboard')
@section('content')
    <div class="blog-menu">
        <div class="box">
            <h4>Pizza</h4>
            <h4>{{ $pizzaCount }}</h4>
        </div>
        <div class="box">
            <h4>Burger</h4>
            <h4>{{ $burgerCount }}</h4>
        </div>
        <div class="box">
            <h4>Pasta</h4>
            <h4>{{ $pastaCount }}</h4>
        </div>
        <div class="box">
            <h4>Salad</h4>
            <h4>{{ $saladCount }}</h4>
        </div>
    </div>
@endsection
