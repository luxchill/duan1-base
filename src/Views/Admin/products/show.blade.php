@extends('layouts.admin')

@section('title')
    Show
@endsection

@section('content')

<h1>Page Show Product</h1>
<a href="/duan1-php/admin/products" class="btn btn-warning">Table Products</a>

@php
echo "<pre>";
print_r($product);
echo "</pre>";
@endphp

<div class="card" style="width: 18rem;">
    <img src="data:image/jpeg;base64,{{ $product['image'] }}" class="card-img-top " alt="Image Show" style="height: 300px; width: 300px">
    <div class="card-body">
        <h5 class="card-title">{{$product['name']}}</h5>
        <p class="card-text">{{$product['description']}}.</p>
    </div>
</div>

@endsection