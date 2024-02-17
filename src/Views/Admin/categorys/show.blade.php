@extends('layouts.admin')

@section('title')
    Show
@endsection

@section('content')

        <h1>Page Show Category</h1>
        <a href="/duan1-php/admin/categorys" class="btn btn-warning">Table Category</a>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>{{$category['id']}}</th>
                <th>{{$category['name']}}</th>
            </tr>
            </tbody>
        </table>
@endsection