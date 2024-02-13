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

<h1>Page table Index Category</h1>
<a class="btn btn-warning" href="categorys/create">Create new Category</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($categorys as $category)
        <tr>
            <th scope="row">{{$category['id']}}</th>
            <td>{{$category['name']}}</td>
            <td>
                <a href="categorys/{{$category['id']}}/show" class="btn btn-warning">Chi Tiết</a>
                <a href="categorys/{{$category['id']}}/update" class="btn btn-info">Update</a>
                <a href="categorys/{{$category['id']}}/delete" onclick="return confirm('Bạn có chắc muốn xoá loại hàng: {{$category['name']}} ?')" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>

</html>