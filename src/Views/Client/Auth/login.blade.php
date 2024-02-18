@extends('layouts.master')

@section('title')
Login
@endsection

@section('content')
<div class="container">
    <h1 class="text-2xl text-center mt-36">From Login</h1>
    {{-- <div class="row " style="height: 100vh">
        <form action="" method="post" >
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" required
                       placeholder="Enter Email" name="email">
            </div>
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" required
                       placeholder="Enter PassWord" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div> --}}

    {{-- <div class="ui form">
    <div class="ui message">
        <div class="header ui red ">Đăng Nhập Không Thành Công</div>
        <ul class="list">
            <li class="ui red ">Vui lòng nhập email</li>
            <li class="ui red">Vui lòng nhập password</li>
        </ul>
    </div>
</div> --}}
    <form class="ui form container" action="" method="post">
        <div class="field">
            <label>Email</label>
            <input type="email" name="email" placeholder="First Email" required>
        </div>
        <div class="field">
            <label>Password</label>
            <input type="password" name="password" placeholder="Last Password" required>
        </div>
        <div class="field">
            <a href="google"><i class="ri-google-fill"></i>Login google</a>
        </div>
        <button class="ui button" type="submit" name="submit">Submit</button>
    </form>
    @php

    @endphp

</div>
@endsection
