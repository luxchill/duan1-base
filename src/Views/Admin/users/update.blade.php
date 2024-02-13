<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">

    @if(!empty($_SESSION['success']))
        <div class="alert alert-success">
            {{$_SESSION['success']}}
        </div>
        @php
        $_SESSION['success'] = null;
        @endphp
    @endif

    <h1>Form Update User</h1>

    <div class="row">
        <div class="gap-2 flex">
            <a href="/duan1-php/admin" class="">Admin</a>
            <a href="/duan1-php/admin/users/" class="">Users</a>
        </div>
        <form action="" method="post">
            <input type="text" class="form-control d-none" id="id" required
                   placeholder="Enter id" name="id" value="{{$user['id']}}">
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Username:</label>
                <input type="text" class="form-control" id="username" required
                       placeholder="Enter username" name="username" value="{{$user['username']}}">
            </div>
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Email:</label>
                <input type="text" class="form-control" id="email" required
                       placeholder="Enter email" name="email" value="{{$user['email']}}">
            </div>
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Password:</label>
                <input type="text" class="form-control" id="password" required
                       placeholder="Enter password" name="password" value="{{$user['password']}}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
</body>
</html>