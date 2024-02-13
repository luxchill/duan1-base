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

<h1>Page table Index Comments</h1>

<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Content</th>
        <th scope="col">Id_User</th>
        <th scope="col">Id_Product</th>
        <th scope="col">Time_Comment</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($comments as $comment)
        <tr>
            <th scope="row">{{$comment['id']}}</th>
            <td>{{$comment['content']}}</td>
            <td>{{$comment['id_user']}}</td>
            <td>{{$comment['id_product']}}</td>
            <td>{{$comment['time_comment']}}</td>
            <td>
                <a href="comments/{{$comment['id']}}/show" class="btn btn-warning">Chi Tiết</a>
                <a href="comments/{{$comment['id']}}/update" class="btn btn-info">Update</a>
                <a href="comments/{{$comment['id']}}/delete" onclick="return confirm('Bạn có chắc muốn xoá loại hàng: {{$comment['content']}} ?')" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>

</html>