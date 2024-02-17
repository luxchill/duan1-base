@extends('layouts.master')
@section('title')
    Trang Chủ
@endsection

@section('content')

    <div class="home__container">
        <h1 class="text-bold">Đây là trang chủ!</h1>

        <a href="/duan1-php/shop" class="text-error">Shop now</a>

    </div>


    <h1>List Products</h1>
    @foreach($products as $product)
        <div>
            <h1>Name: {{$product['name']}}</h1>
            <h1>Price: {{$product['price']}}</h1>
            <h1>Description: {{$product['description']}}</h1>
            <h1>Views: {{$product['views'] ?? '0'}}</h1>
            <a href="/duan1-php/shop/{{$product['id']}}/show" class="btn btn-warning"><i class="fa-regular fa-eye" style="color: #919191;"></i></a>
            <a class="btn btn-info" href="@"> <i class="fa-brands fa-shopify" style="color: #808080;"></i> </a>
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

