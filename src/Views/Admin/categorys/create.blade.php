@extends('layouts.admin')

@section('title')
    Create
@endsection

@section('content')
    {{--        <div class="row">--}}
    {{--            <form action="" method="post">--}}
    {{--                <div class="mb-3 mt-3">--}}
    {{--                    <label for="name" class="form-label">Name:</label>--}}
    {{--                    <input type="text" class="form-control" id="name" required--}}
    {{--                           placeholder="Enter name" name="name">--}}
    {{--                </div>--}}
    {{--                <button type="submit" class="btn btn-primary">Submit</button>--}}
    {{--            </form>--}}
    {{--        </div>--}}
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <div class="section-header-back">
                    <a href="/duan1-php/admin/categorys" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                </div>
                <h1>Create New Category</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/duan1-php/admin/">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="/duan1-php/admin/categorys">Category</a></div>
                    <div class="breadcrumb-item">Create New Category</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Create New Category</h2>
                <p class="section-lead">
                    Tạo category
                </p>

                <form class="row" action="" method="post">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Write Your Category</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control {{!empty($_SESSION['errors']['name']) ? 'is-invalid' : ''}}" name="name">
                                        <div class="invalid-feedback">
                                            {{!empty($_SESSION['errors']['name']) ? $_SESSION['errors']['name'] : ''}}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary">Create Category</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection

{{--@section('script')--}}
{{--    <script src="/duan1-php/public/components/assets/js/page/features-post-create.js"></script>--}}
{{--@endsection--}}