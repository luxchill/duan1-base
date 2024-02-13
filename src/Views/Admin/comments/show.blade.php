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

<h1>Page Show Products</h1>
<a href="/duan1-php/admin/products" class="btn btn-warning">Create Product</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Content</th>
        <th scope="col">Id_User</th>
        <th scope="col">Id_Product</th>
        <th scope="col">Time_Comment</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <th>{{$comment['id']}}</th>
            <th>{{$comment['content']}}</th>
            <th>{{$comment['id_user']}}</th>
            <th>{{$comment['id_product']}}</th>
            <th>{{$comment['time_comment']}}</th>
        </tr>
    </tbody>
</table>

</body>

</html>