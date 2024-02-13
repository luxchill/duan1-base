@extends('layouts.master')
@section('title')
    Trang Chủ
@endsection

@section('content')
<h1 class="text-bold">Đây là trang chủ!</h1>

<a href="/duan1-php/shop" class="text-error">Shop now</a>

@php
//echo "<pre>";
//print_r($categorys);
//echo "</pre>";
@endphp

<h1>List Products</h1>
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

<br>

<h1>List Category</h1>
@foreach($categorys as $category)
    <div>
        <h1>Name: {{$category['name']}}</h1>
        <hr>
    </div>
@endforeach

@endsection

