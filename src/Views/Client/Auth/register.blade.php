@extends('layouts.master')

@section('title')
    Register
@endsection

@section('content')
    <h1>From Register</h1>
    <div class="row " style="height: 100vh">
        <form action="" method="post" >
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Username:</label>
                <input type="text" class="form-control" id="username" required
                       placeholder="Enter Username" name="username">
{{--                <label class="text-danger">*Vui lòng nhập username</label>--}}
            </div>
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
    </div>

@endsection