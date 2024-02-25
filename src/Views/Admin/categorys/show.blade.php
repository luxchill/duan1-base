@extends('layouts.admin')

@section('title')
    Show
@endsection

@section('content')
{{--    <div class=" h-screen">--}}
{{--        <h1>Page Show Category</h1>--}}
{{--        <a href="/duan1-php/admin/categorys" class="btn btn-warning">Table Category</a>--}}

{{--        <table class="table">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th scope="col">Id</th>--}}
{{--                <th scope="col">Name</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            <tr>--}}
{{--                <th>{{$category['id']}}</th>--}}
{{--                <th>{{$category['name']}}</th>--}}
{{--            </tr>--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--    </div>--}}

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="/duan1-php/admin/categorys" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Show Category</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/duan1-php/admin/">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="/duan1-php/admin/categorys">Category</a></div>
                <div class="breadcrumb-item">Show</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Show Category</h2>
{{--            <p class="section-lead">--}}
{{--                Show Category--}}
{{--            </p>--}}

            <div class="row" action="" method="post">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Show Your Category</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Id</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="name" value="{{$category['id']}}" disabled>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="name" value="{{$category['name']}}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection