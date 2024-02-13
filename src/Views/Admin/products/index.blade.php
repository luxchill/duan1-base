<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<h1>Page table Index Products</h1>
<a class="btn btn-warning" href="products/create">Create new Product</a>

<table class="table">
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
</table>



</body>
</html>