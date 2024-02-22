@extends('layouts.admin')
@section('title', 'Products')
@section('content')
    <div class="h-[1000px]">
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
                    <td><img src="data:image/jpeg;base64,{{$product['image']}}" alt="image product"
                             class="w-[100px] h-[100px] avatar"></td>
                    <td>{{ $product['description'] }}</td>
                    <td>{{ $product['views'] ?? '0' }}</td>
                    <td>{{ $product['id_category'] }}</td>
                    <td>
                        <div class="flex">
                            <a href="http://localhost/duan1-php/admin/products/{{$product['id']}}/show"
                               class="ui yellow button"><i class="ri-eye-line"></i></a>
                            <a href="http://localhost/duan1-php/admin/products/{{$product['id']}}/update"
                               class="ui green button"><i class="ri-edit-line"></i></a>
                            <a href="http://localhost/duan1-php/admin/products/{{$product['id']}}/delete"
                               class="ui red button" onclick="return confirm('Confirm {{ $product['name'] }} ?')"><i
                                        class="ri-delete-bin-2-line"></i></a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>
                    <a class="item ui blue button" href="/duan1-php/admin/products/create">Create New Product</a>
                </th>
                <th colspan="8">
                    <div class="ui right floated pagination menu">
                        <a class="icon item" href="http://localhost/duan1-php/admin/products/{{$page - 1}}">
                            <i class="left chevron icon"></i>
                        </a>
                        @for($i = 1; $i <= $total_page; $i++)
                            <a class="item" href="http://localhost/duan1-php/admin/products/{{ $i }}">{{ $i }}</a>
                        @endfor
                        <a class="icon item" href="http://localhost/duan1-php/admin/products/{{ $page + 1  }}">
                            <i class="right chevron icon"></i>
                        </a>
                    </div>
                </th>
            </tr>
            </tfoot>
        </table>
    </div>
@endsection


