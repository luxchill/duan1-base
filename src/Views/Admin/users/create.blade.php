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
    <h1>Page crreate user admin</h1>
    <div class="container">
        <h1>Form Register</h1>

        <div class="row">
            <a href="/duan1-php/admin" class="">Admin</a>
            <form action="" method="post">
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Username:</label>
                    <input type="text" class="form-control" id="username" required
                           placeholder="Enter username" name="username">
                </div>
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Email:</label>
                    <input type="text" class="form-control" id="email" required
                           placeholder="Enter email" name="email">
                </div>
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Password:</label>
                    <input type="text" class="form-control" id="password" required
                           placeholder="Enter password" name="password">
                </div>
            </form>
        </div>
    </div>
</body>
</html>