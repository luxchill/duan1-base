@extends('layouts.master')

@section('title')
    Detail
@endsection

@section('content')
<h1>Page Show Detail Product</h1>

@php
    echo "<pre>";
    print_r($detail);
    echo "</pre>";
@endphp

<div class="card" style="width: 18rem;">
    <img src="data:image/jpeg;base64,{{ $detail['image'] }}" class="card-img-top " alt="Image Show" style="height: 300px; width: auto">
    <div class="card-body">
        <h5 class="card-title">{{$detail['name']}}</h5>
        <p class="card-text">{{$detail['description']}}.</p>
        <button class="btn btn-info">Add To Cart</button>
    </div>
</div>

@endsection
