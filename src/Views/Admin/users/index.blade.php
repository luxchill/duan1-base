@extends('layouts.admin')
@section('title')
User
@endsection

@section('content')
<a href="users/create" class="btn btn-info">Thêm mới user</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <th scope="row">{{$user['id']}}</th>
            <td>{{$user['username']}}</td>
            <td>{{$user['email']}}</td>
            <td>{{$user['password']}}</td>
            <td>
                <a href="users/{{$user['id']}}/show" class="btn btn-warning">Chi Tiết</a>
                <a href="users/{{$user['id']}}/update" class="btn btn-info">Update</a>
                <a href="users/{{$user['id']}}/delete" onclick="return confirm('Bạn có chắc muốn xoá người dùng {{$user['username']}} ?')" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
