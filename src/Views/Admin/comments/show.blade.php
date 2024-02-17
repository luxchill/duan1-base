@extends('layouts.admin')

@section('title')
    Show
@endsection

@section('content')

<h1>Page Show Comments</h1>
<a href="/duan1-php/admin/comments/create" class="btn btn-warning">Create Comment</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Content</th>
        <th scope="col">Id_User</th>
        <th scope="col">Id_Product</th>
        <th scope="col">Time_Comment</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <th>{{$comment['id']}}</th>
            <th>{{$comment['content']}}</th>
            <th>{{$comment['id_user']}}</th>
            <th>{{$comment['id_product']}}</th>
            <th>{{$comment['time_comment']}}</th>
        </tr>
    </tbody>
</table>

@endsection