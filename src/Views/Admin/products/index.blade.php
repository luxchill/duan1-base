{{--@extends('layouts.admin')--}}
{{--@section('title', 'Products')--}}
{{--@section('content')--}}
{{--    <div class="h-[1000px]">--}}
{{--        <table class="ui celled padded table">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th class="single line">Id</th>--}}
{{--                <th>Name</th>--}}
{{--                <th>Price</th>--}}
{{--                <th>Image</th>--}}
{{--                <th>Description</th>--}}
{{--                <th>Views</th>--}}
{{--                <th>Category</th>--}}
{{--                <th>Action</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            @foreach($products as $product)--}}
{{--                <tr>--}}
{{--                    <td>--}}
{{--                        <h2 class="ui aligned header">{{ $product['id'] }}</h2>--}}
{{--                    </td>--}}
{{--                    <td class="single line">--}}
{{--                        {{ $product['name'] }}--}}
{{--                    </td>--}}
{{--                    <td>{{ $product['price'] }}</td>--}}
{{--                    <td><img src="data:image/jpeg;base64,{{$product['image']}}" alt="image product"--}}
{{--                             class="w-[100px] h-[100px] avatar"></td>--}}
{{--                    <td>{{ $product['description'] }}</td>--}}
{{--                    <td>{{ $product['views'] ?? '0' }}</td>--}}
{{--                    <td>{{ $product['id_category'] }}</td>--}}
{{--                    <td>--}}
{{--                        <div class="flex">--}}
{{--                            <a href="http://localhost/duan1-php/admin/products/{{$product['id']}}/show"--}}
{{--                               class="ui yellow button"><i class="ri-eye-line"></i></a>--}}
{{--                            <a href="http://localhost/duan1-php/admin/products/{{$product['id']}}/update"--}}
{{--                               class="ui green button"><i class="ri-edit-line"></i></a>--}}
{{--                            <a href="http://localhost/duan1-php/admin/products/{{$product['id']}}/delete"--}}
{{--                               class="ui red button" onclick="return confirm('Confirm {{ $product['name'] }} ?')"><i--}}
{{--                                        class="ri-delete-bin-2-line"></i></a>--}}
{{--                        </div>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--            @endforeach--}}
{{--            </tbody>--}}
{{--            <tfoot>--}}
{{--            <tr>--}}
{{--                <th>--}}
{{--                    <a class="item ui blue button" href="/duan1-php/admin/products/create">Create New Product</a>--}}
{{--                </th>--}}
{{--                <th colspan="8">--}}
{{--                    <div class="ui right floated pagination menu">--}}
{{--                        <a class="icon item" href="http://localhost/duan1-php/admin/products/{{$page - 1}}">--}}
{{--                            <i class="left chevron icon"></i>--}}
{{--                        </a>--}}
{{--                        @for($i = 1; $i <= $total_page; $i++)--}}
{{--                            <a class="item" href="http://localhost/duan1-php/admin/products/{{ $i }}">{{ $i }}</a>--}}
{{--                        @endfor--}}
{{--                        <a class="icon item" href="http://localhost/duan1-php/admin/products/{{ $page + 1  }}">--}}
{{--                            <i class="right chevron icon"></i>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </th>--}}
{{--            </tr>--}}
{{--            </tfoot>--}}
{{--        </table>--}}
{{--    </div>--}}
{{--@endsection--}}


@extends('layouts.admin')

@section('title', 'Products')
@section('content')

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Table</h1>
                <div class="section-header-button">
                    <a href="/duan1-php/admin/products/create" class="btn btn-primary">Add Product</a>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/duan1-php/admin">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="/duan1-php/admin/products">Products</a></div>
                    <div class="breadcrumb-item">Table</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Table</h2>
                <p class="section-lead">Hiển Thị Products</p>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Products Table</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-md">
                                        <tr>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                            <th>Views</th>
                                            <th>Categorys</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach($products as $product)
                                            <tr>
                                                <td>{{$product['name']}}</td>
                                                <td>
                                                    <div class="gallery">
                                                        <div class="gallery-item"
                                                             data-image="data:image/jpeg;base64,{{$product['image']}}"
                                                             data-title="{{$product['name']}}"></div>
                                                    </div>
                                                </td>
                                                <td>${{$product['price']}}</td>
                                                <td>{{$product['description']}}</td>
                                                <td>{{$product['views'] ? $product['views'] : 0}}</td>
                                                <td>{{$product['id_category']}}</td>
                                                <td>
                                                    <a href="/duan1-php/admin/products/{{$product['id']}}/show"
                                                       class="btn btn-secondary"><i class="fa-regular fa-eye"></i></a>
                                                    <a href="/duan1-php/admin/products/{{$product['id']}}/update"
                                                       class="btn btn-warning">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </a>
                                                    <a href="/duan1-php/admin/products/{{$product['id']}}/delete"
                                                       class="btn btn-danger"
                                                       onclick="return confirm('Ban co chac muon xoa product: {{$product['name']}}')">
                                                        <i class="fa-solid fa-trash-can"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <nav class="d-inline-block">
                                    <ul class="pagination mb-0">
                                        <li class="page-item {{$page == 1 ? 'disabled' : ''}}">
                                            <a class="page-link"
                                               href="/duan1-php/admin/products/{{($page > 1) ? ($page - 1) : '1'}}"
                                               tabindex="-1">
                                                <i class="fas fa-chevron-left"></i></a>
                                        </li>
                                        @for($i = 1; $i <= $total_page; $i++)
                                            <li class="page-item {{$i == $page ? 'active' : ''}}"><a class="page-link"
                                                                                                     href="/duan1-php/admin/products/{{$i}}">{{$i}}</a>
                                            </li>
                                        @endfor
                                        <li class="page-item {{$page == $total_page ? 'disabled' : ''}}">
                                            <a class="page-link"
                                               href="/duan1-php/admin/products/{{$page == $total_page ? $page : $page + 1}}"><i
                                                        class="fas fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
