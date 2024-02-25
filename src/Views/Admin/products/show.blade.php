{{--@extends('layouts.admin')--}}

{{--@section('title')--}}
{{--    Show--}}
{{--@endsection--}}

{{--@section('content')--}}

{{--<h1>Page Show Product</h1>--}}
{{--<a href="/duan1-php/admin/products" class="btn btn-warning">Table Products</a>--}}

{{--@php--}}
{{--echo "<pre>";--}}
{{--print_r($product);--}}
{{--echo "</pre>";--}}
{{--@endphp--}}

{{--<div class="card" style="width: 18rem;">--}}
{{--    <img src="data:image/jpeg;base64,{{ $product['image'] }}" class="card-img-top " alt="Image Show" style="height: 300px; width: 300px">--}}
{{--    <div class="card-body">--}}
{{--        <h5 class="card-title">{{$product['name']}}</h5>--}}
{{--        <p class="card-text">{{$product['description']}}.</p>--}}
{{--    </div>--}}
{{--</div>--}}

{{--@endsection--}}

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
                    <a href="/duan1-php/admin/products" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                </div>
                <h1>Show Products</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/duan1-php/admin/">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="/duan1-php/admin/products">Products</a></div>
                    <div class="breadcrumb-item">Show</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Show Products</h2>
                {{--            <p class="section-lead">--}}
                {{--                Show Category--}}
                {{--            </p>--}}

                <div class="row" action="" method="post">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Show Your Products</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Id</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="name" value="{{$product['id']}}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="name" value="{{$product['name']}}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Price</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="name" value="${{$product['price']}}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="gallery gallery-md">
                                            <div class="gallery-item" data-image="data:image/jpeg;base64,{{$product['image']}}" data-title="{{$product['name']}}" style="width: 100%; height: 500px"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="name" value="{{$product['id_category']}}" disabled>
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