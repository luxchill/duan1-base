{{--@extends('layouts.admin')--}}

{{--@section('title')--}}
{{--Category--}}
{{--@endsection--}}

{{--@section('content')--}}

{{-- <h1>Page table Index Category</h1>--}}
{{--        <a class="btn btn-warning" href="categorys/create">Create new Category</a>--}}

{{--        <table class="table">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th scope="col">Id</th>--}}
{{--                <th scope="col">Name</th>--}}
{{--                <th scope="col">Action</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            @foreach($categorys as $category)--}}
{{--                <tr>--}}
{{--                    <th scope="row">{{$category['id']}}</th>--}}
{{--<td>{{$category['name']}}</td>--}}
{{--<td>--}}
{{--    <a href="categorys/{{$category['id']}}/show" class="btn btn-warning">Chi Tiết</a>--}}
{{--    <a href="categorys/{{$category['id']}}/update" class="btn btn-info">Update</a>--}}
{{--    <a href="categorys/{{$category['id']}}/delete" onclick="return confirm('Bạn có chắc muốn xoá loại hàng: {{$category['name']}} ?')" class="btn btn-danger">Delete</a>--}}
{{--</td>--}}
{{--</tr>--}}
{{--@endforeach--}}
{{--</tbody>--}}
{{--</table> --}}

{{--<div class="h-screen">--}}
{{--    <table class="ui celled padded table">--}}
{{--        <thead>--}}
{{--            <tr>--}}
{{--                <th class="single line">Id</th>--}}
{{--                <th>Name</th>--}}
{{--                <th>Action</th>--}}
{{--            </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--            @foreach($categorys as $category)--}}
{{--            <tr>--}}
{{--                <td>--}}
{{--                    <h2 class="ui aligned header">{{ $category['id'] }}</h2>--}}
{{--                </td>--}}
{{--                <td class="single line">--}}
{{--                    {{ $category['name'] }}--}}
{{--                </td>--}}
{{--                <td>--}}
{{--                    <a href="http://localhost/duan1-php/admin/categorys/{{$category['id']}}/show" class="ui yellow button"><i class="ri-eye-line"></i></a>--}}
{{--                    <a href="http://localhost/duan1-php/admin/categorys/{{$category['id']}}/update" class="ui green button"><i class="ri-edit-line"></i></a>--}}
{{--                    <a href="http://localhost/duan1-php/admin/categorys/{{$category['id']}}/delete" class="ui red button" onclick="return confirm('Confirm {{ $category['name'] }} ?')"><i class="ri-delete-bin-2-line"></i></a>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--            @endforeach--}}
{{--        </tbody>--}}
{{--        <tfoot>--}}
{{--            <tr>--}}
{{--                <th>--}}
{{--                    <a class="item ui blue button" href="/duan1-php/admin/categorys/create">Create New Category</a>--}}
{{--                </th>--}}
{{--                <th colspan="5">--}}
{{--                    <div class="ui right floated pagination menu">--}}
{{--                        <a class="icon item" href="">--}}
{{--                            <i class="left chevron icon"></i>--}}
{{--                        </a>--}}
{{--                        @php--}}
{{--                        $pages = [1,2,3,4,5];--}}
{{--                        @endphp--}}
{{--                        @for($i = 1; $i <= $total_page; $i++) <a class="item" href="http://localhost/duan1-php/admin/categorys/{{ $i }}">{{ $i }}</a>--}}
{{--                            @endfor--}}
{{--                            --}}{{-- @foreach($pages as $page)--}}
{{--                        <a class="item" href="http://localhost/duan1-php/admin/categorys/{{ $page }}">{{ $page }}</a>--}}
{{--                            @endforeach --}}
{{--                            --}}{{-- <a class="item" href="http://localhost/duan1-php/admin/categorys/1">1</a>--}}
{{--                        <a class="item">2</a>--}}
{{--                        <a class="item">3</a>--}}
{{--                        <a class="item">4</a> --}}
{{--                            <a class="icon item" href="">--}}
{{--                                <i class="right chevron icon"></i>--}}
{{--                            </a>--}}
{{--                    </div>--}}
{{--                </th>--}}
{{--            </tr>--}}
{{--        </tfoot>--}}
{{--    </table>--}}
{{--</div>--}}

{{-- @php--}}
{{--echo $total_page ?? '123';--}}
{{--var_dump($total_page);--}}
{{--@endphp --}}

{{--@endsection--}}


@extends('layouts.admin')

@section('title', 'Category')
@section('content')

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Table</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/duan1-php/admin">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="/duan1-php/admin/categorys">Categorys</a></div>
                    <div class="breadcrumb-item">Table</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Table</h2>
                <p class="section-lead">Hiển Thị Category</p>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Categorys Table</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-md">
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach($categorys as $category)
                                            <tr>
                                                <td>{{$category['id']}}</td>
                                                <td>{{$category['name']}}</td>
                                                <td>
                                                    <a href="/duan1-php/admin/categorys/{{$category['id']}}/show"
                                                       class="btn btn-secondary"><i class="fa-regular fa-eye"></i></a>
                                                    <a href="/duan1-php/admin/categorys/{{$category['id']}}/update"
                                                       class="btn btn-warning">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </a>
                                                    <a href="/duan1-php/admin/categorys/{{$category['id']}}/delete"
                                                       class="btn btn-danger"
                                                       onclick="return confirm('Ban co chac muon xoa category: {{$category['name']}}')">
                                                        <i class="fa-solid fa-trash-can"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <div class="text-left">
                                    <a class="btn btn-success" href="/duan1-php/admin/categorys/create">Create New
                                        Category</a>
                                </div>
                                <nav class="text-right">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="/duan1-php/admin/categorys/{{($id > 1) ? ($id - 1) : '1'}}" tabindex="-1">
                                                <i class="fas fa-chevron-left"></i></a>
                                        </li>
                                        @for($i = 1; $i <= $total_page; $i++)
                                            <li class="page-item {{$i == $id ? 'active' : ''}}"><a class="page-link" href="/duan1-php/admin/categorys/{{$i}}">{{$i}}</a></li>
                                        @endfor
                                        <li class="page-item">
                                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
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