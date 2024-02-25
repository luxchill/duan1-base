{{--@extends('layouts.admin')--}}

{{--@section('title')--}}
{{--    Create--}}
{{--@endsection--}}

{{--@section('content')--}}

{{--    <h1>Form Create Product</h1>--}}

{{--    <div class="row">--}}
{{--        <div class="gap-2 flex">--}}
{{--            <a href="/duan1-php/admin" class="">Admin</a>--}}
{{--            <a href="/duan1-php/admin/products/" class="">Products</a>--}}
{{--        </div>--}}
{{--        <form action="" method="post" enctype="multipart/form-data">--}}
{{--            <div class="mb-3 mt-3">--}}
{{--                <label for="name" class="form-label">Name:</label>--}}
{{--                <input type="text" class="form-control" id="name" required--}}
{{--                       placeholder="Enter name" name="name">--}}
{{--            </div>--}}
{{--            <div class="mb-3 mt-3">--}}
{{--                <label for="name" class="form-label">Price:</label>--}}
{{--                <input type="tel" class="form-control" id="price" required--}}
{{--                       placeholder="Enter price" name="price">--}}
{{--            </div>--}}
{{--            <div class="mb-3 mt-3">--}}
{{--                <label for="name" class="form-label">Image:</label>--}}
{{--                <input type="file" class="form-control" id="image" required--}}
{{--                       placeholder="Enter image" name="image" >--}}
{{--            </div>--}}
{{--            <div class="mb-3 mt-3">--}}
{{--                <label for="name" class="form-label">Description:</label>--}}
{{--                <input type="text" class="form-control" id="description" required--}}
{{--                       placeholder="Enter description" name="description" >--}}
{{--            </div>--}}
{{--            <div class="mb-3 mt-3">--}}
{{--                <label for="name" class="form-label">Views:</label>--}}
{{--                <input type="tel" class="form-control" id="views" required--}}
{{--                       placeholder="Enter views" name="views" >--}}
{{--            </div>--}}
{{--            <div class="mb-3 mt-3">--}}
{{--                <label for="name" class="form-label">Category:</label>--}}
{{--                <input type="tel" class="form-control" id="category" required--}}
{{--                       placeholder="Enter category" name="id_category" >--}}
{{--            </div>--}}
{{--            <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--@endsection--}}


@extends('layouts.admin')

@section('title')
    Create
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <div class="section-header-back">
                    <a href="/duan1-php/admin/products" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                </div>
                <h1>Create New Product</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/duan1-php/admin/">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="/duan1-php/admin/products">Product</a></div>
                    <div class="breadcrumb-item">Create New Product</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Create New Product</h2>
{{--                <p class="section-lead">--}}
{{--                    Tạo category--}}
{{--                </p>--}}

                <form class="row" action="" method="post" enctype="multipart/form-data">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Write Your Product</h4>
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
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Price</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control {{!empty($_SESSION['errors']['price']) ? 'is-invalid' : ''}}" name="price">
                                        <div class="invalid-feedback">
                                            {{!empty($_SESSION['errors']['price']) ? $_SESSION['errors']['price'] : ''}}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                                    <div class="col-sm-12 col-md-7">
                                        <div id="image-preview" class="image-preview">
                                            <label for="image-upload" id="image-label">Choose File</label>
                                            <input type="file" name="image" id="image-upload" class="{{!empty($_SESSION['errors']['image']) ? 'is-invalid' : ''}}" style="height: 100%"/>
                                        </div>
                                        <div style="color: #dc3545; font-size: 80%; margin-top: 0.25rem; width: 100%;">{{!empty($_SESSION['errors']['image']) ? $_SESSION['errors']['image'] : ''}}</div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea class="summernote-simple" name="description"></textarea>
                                        <div style="color: #dc3545; font-size: 80%; margin-top: 0.25rem; width: 100%;">{{!empty($_SESSION['errors']['description']) ? $_SESSION['errors']['description'] : ''}}</div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control selectric" name="id_category">
                                            <option disabled selected>Select Category</option>
                                            <option value="1">Dien Thoai</option>
                                            <option value="2">Giay Dep</option>
                                            <option value="3">Quan Ao</option>
                                        </select>

                                        <div style="color: #dc3545; font-size: 80%; margin-top: 0.25rem; width: 100%;">{{!empty($_SESSION['errors']['id_category']) ? $_SESSION['errors']['id_category'] : ''}}</div>
                                    </div>
                                </div>


                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary">Create Product</button>
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

@section('script')
    <script src="/duan1-php/public/components/assets/js/page/features-post-create.js"></script>
@endsection