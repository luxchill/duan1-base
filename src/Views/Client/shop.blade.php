@extends('layouts.master')
@section('title')
    Shop
@endsection

@section('content')

        @foreach($categorys as $category)
            <a href="/duan1-php/shop/{{$category['id']}}/filter" class="">{{$category['name']}}</a>
        @endforeach



    @foreach($products as $product)
        @php
//echo "<pre>";
//        print_r($product);
//echo "</pre>";
        @endphp
        <div>
            <h1>Name: {{$product['name']}}</h1>
            <h1>Price: {{$product['price']}}</h1>
            <h1>Description: {{$product['description']}}</h1>
            <h1 class="bg-success p-2 text-dark bg-opacity-25">Views: {{$product['views'] ?? '0'}}</h1>
            <img src="data:image/jpeg;base64,{{$product['image']}}" style="width: 500px; height: 200px">
            <a href="/duan1-php/shop/{{$product['id']}}/show" class="btn btn-warning"><i class="fa-regular fa-eye" style="color: #919191;"></i></a>
{{--            <a href="/duan1-php/cart/" class="btn btn-info" onclick="handleToCard('{{$product['id']}}', '{{$product['name']}}', '{{$product['price']}}', '{{$product['image']}}', '{{$product['id_category']}}')"><i class="fa-brands fa-shopify" style="color: #808080;"></i></a>--}}
            <button class="btn btn-info" onclick="handleToCard('{{$product['id']}}', '{{$product['name']}}', '{{$product['price']}}', '{{$product['image']}}', '{{$product['id_category']}}')">
                <i class="fa-brands fa-shopify" style="color: #808080;"></i>
            </button>
            <hr>
        </div>
    @endforeach

@endsection

@section('script')
    <script>
        const handleToCard = (id, name, price, image, id_category) => {
            const count__card = document.querySelector('.count__card')
            // console.log(id, name, price, id_category);
            $.ajax({
                type: 'POST',
                url: '/duan1-php/cart/',
                data:{
                    id, name, price, image, id_category
                },
                success: function (response){
                    count__card.innerHTML = response;
                    alert('123131');
                },
                error: function (err){
                    console.log(err)
                }
            })

        }
    </script>


@endsection
