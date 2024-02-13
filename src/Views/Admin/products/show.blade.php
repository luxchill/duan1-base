<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

<h1>Page Show Product</h1>
<a href="/duan1-php/admin/products" class="btn btn-warning">Table Products</a>

@php
echo "<pre>";
print_r($product);
echo "</pre>";
@endphp

<div class="card" style="width: 18rem;">
    <img src="data:image/jpeg;base64,{{ $product['image'] }}" class="card-img-top " alt="Image Show" style="height: 300px; width: 300px">
    <div class="card-body">
        <h5 class="card-title">{{$product['name']}}</h5>
        <p class="card-text">{{$product['description']}}.</p>
    </div>
</div>

</body>

</html>