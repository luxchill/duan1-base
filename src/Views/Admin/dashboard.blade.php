@extends('layouts.admin')
@section('title')
DashBoard
@endsection
@section('content')
@php

if(isset($_SESSION['user'])){
$role = $_SESSION['user']['role'];

if($role != 1){
header('location: /duan1-php/');
}

print_r($_SESSION['user']);
}else{
header('location: /duan1-php/');
}

@endphp
<h1>Page Dashboard</h1>

<div class="ui vertical animated button" tabindex="0">
    <div class="hidden content">Shop</div>
    <div class="visible content">
        <i class="shop icon"></i>
    </div>
</div>

<h1>Header</h1>
<h4 class="ui header">Header</h4>
<i class="vn flag"></i>

<div class="ui big breadcrumb">
    <a class="section">Home</a>
    <i class="right chevron icon divider"></i>
    <a class="section">Registration</a>
    <i class="right chevron icon divider"></i>
    <div class="active section">Personal Information</div>
</div>

@php



@endphp

@endsection