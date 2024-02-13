@extends('layouts.master')
@section('title')
    Shop
@endsection

@section('content')

    @foreach($products as $product)
        <div>
            <h1>Name: {{$product['name']}}</h1>
            <h1>Price: {{$product['price']}}</h1>
            <h1>Description: {{$product['description']}}</h1>
            <h1>Views: {{$product['views']}}</h1>
            <a href="/duan1-php/shop/{{$product['id']}}" class="btn btn-warning">Show detail</a>
            <hr>
        </div>
    @endforeach

@endsection
