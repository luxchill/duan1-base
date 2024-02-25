@extends('layouts.admin')

@section('title', 'Category')
@section('content')

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Table</h1>
                <div class="section-header-button">
                    <a href="/duan1-php/admin/categorys/create" class="btn btn-primary">Add Category</a>
                </div>
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
                            <div class="card-body" style="height: 660px">
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
                            <div class="card-footer text-right">
                                <nav class="d-inline-block">
                                    <ul class="pagination mb-0">
                                        <li class="page-item {{$id == 1 ? 'disabled' : ''}}">
                                            <a class="page-link"
                                               href="/duan1-php/admin/categorys/{{($id > 1) ? ($id - 1) : '1'}}"
                                               tabindex="-1">
                                                <i class="fas fa-chevron-left"></i></a>
                                        </li>
                                        @for($i = 1; $i <= $total_page; $i++)
                                            <li class="page-item {{$i == $id ? 'active' : ''}}"><a class="page-link"
                                                                                                   href="/duan1-php/admin/categorys/{{$i}}">{{$i}}</a>
                                            </li>
                                        @endfor
                                        <li class="page-item {{$id == $total_page ? 'disabled' : ''}}">
                                            <a class="page-link"
                                               href="/duan1-php/admin/categorys/{{$id == $total_page ? $id : $id + 1}}"><i
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
