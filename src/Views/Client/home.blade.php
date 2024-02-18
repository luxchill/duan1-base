@extends('layouts.master')
@section('title')
Trang Chủ
@endsection


@section('css')
<style>
    .swiper {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

</style>
@endsection


@section('content')
@php
$listImages = [
[
'id' => 1,
'url' => 'https://salt.tikicdn.com/ts/tmp/97/82/fc/b199b26f378fcca461c5df7217832220.jpg'
],
[
'id' => 2,
'url' => 'https://vnn-imgs-f.vgcloud.vn/2021/09/28/08/ban-hang-online.jpg'
],
[
'id' => 3,
'url' => 'https://img.freepik.com/free-photo/online-fashion-shopping-with-computer_23-2150400628.jpg'
],
[
'id' => 4,
'url' => 'https://cdn.ntlogistics.vn/images/NTX/new_images/cach-thuc-gui-hang-nhanh-danh-cho-shop-online-04.jpg'
],
]
@endphp
<div class="banner h-96 w-screen">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            @foreach($listImages as $image)
            <div class="swiper-slide "><img src="{{ $image['url'] }}" alt="{{ $image['id'] }}" class="object-none"></div>
            @endforeach
            {{-- <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div>
            <div class="swiper-slide">Slide 5</div>
            <div class="swiper-slide">Slide 6</div>
            <div class="swiper-slide">Slide 7</div>
            <div class="swiper-slide">Slide 8</div>
            <div class="swiper-slide">Slide 9</div> --}}
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

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

@section('script')
<script>
    var swiper = new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination"
            , dynamicBullets: true
        , }
    , });

</script>
@endsection
