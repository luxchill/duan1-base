@extends('layouts.admin')

@section('title')
Products
@endsection

@section('content')
<h1>Page table Index Products</h1>
<a class="btn btn-warning" href="products/create">Create new Product</a>

{{-- <table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Image</th>
        <th scope="col">Description</th>
        <th scope="col">Views</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <th scope="row">{{$product['id']}}</th>
<td>{{$product['name']}}</td>
<td>{{$product['price']}}</td>
<td>
    <img class="rounded-circle shadow-4" style="width: 70px; height: 70px" src="data:image/jpeg;base64,{{$product['image']}}" />
</td>
<td>{{$product['description']}}</td>
<td>{{$product['views'] ?? '0'}}</td>
<td>{{$product['id_category']}}</td>
<td>
    <a href="products/{{$product['id']}}/show" class="btn btn-warning">Chi Tiết</a>
    <a href="products/{{$product['id']}}/update" class="btn btn-info">Update</a>
    <a href="products/{{$product['id']}}/delete" onclick="return confirm('Bạn có chắc muốn xoá sản phẩm: {{$product['name']}} ?')" class="btn btn-danger">Delete</a>
</td>
</tr>
@endforeach
</tbody>
</table> --}}


<div class="h-screen">
    <table class="ui celled padded table">
        <thead>
            <tr>
                <th class="single line">Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Description</th>
                <th>Views</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>
                    <h2 class="ui aligned header">{{ $product['id'] }}</h2>
                </td>
                <td class="single line">
                    {{ $product['name'] }}
                </td>
                <td>{{ $product['price'] }}</td>
                <td><img src="data:image/jpeg;base64,{{$product['image']}}" alt="image product" class="w-36 h-36 avatar"></td>
                <td>{{ $product['description'] }}</td>
                <td>{{ $product['views'] ?? '0' }}</td>
                <td>{{ $product['id_category'] }}</td>
                <td>
                    <div class="flex">
                        <a href="http://localhost/duan1-php/admin/products/{{$product['id']}}/show" class="ui yellow button"><i class="ri-eye-line"></i></a>
                        <a href="http://localhost/duan1-php/admin/products/{{$product['id']}}/update" class="ui green button"><i class="ri-edit-line"></i></a>
                        <a href="http://localhost/duan1-php/admin/products/{{$product['id']}}/delete" class="ui red button" onclick="return confirm('Confirm {{ $product['name'] }} ?')"><i class="ri-delete-bin-2-line"></i></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>
                    <a class="item ui blue button" href="/duan1-php/admin/categorys/create">Create New Category</a>
                </th>
                <th colspan="8">
                    <div class="ui right floated pagination menu">
                        <a class="icon item" href="">
                            <i class="left chevron icon"></i>
                        </a>
                        @for($i = 1; $i <= $total_page; $i++) <a class="item" href="http://localhost/duan1-php/admin/products/{{ $i }}">{{ $i }}</a>
                            @endfor
                            {{-- @foreach($pages as $page)
                        <a class="item" href="http://localhost/duan1-php/admin/categorys/{{ $page }}">{{ $page }}</a>
                            @endforeach --}}
                            {{-- <a class="item" href="http://localhost/duan1-php/admin/categorys/1">1</a>
                        <a class="item">2</a>
                        <a class="item">3</a>
                        <a class="item">4</a> --}}
                            <a class="icon item" href="">
                                <i class="right chevron icon"></i>
                            </a>
                    </div>
                </th>
            </tr>
        </tfoot>
    </table>
</div>


@endsection
