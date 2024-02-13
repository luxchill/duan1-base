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

    <h1>Form Create Product</h1>

    <div class="row">
        <div class="gap-2 flex">
            <a href="/duan1-php/admin" class="">Admin</a>
            <a href="/duan1-php/admin/products/" class="">Products</a>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" required
                       placeholder="Enter name" name="name">
            </div>
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Price:</label>
                <input type="tel" class="form-control" id="price" required
                       placeholder="Enter price" name="price">
            </div>
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Image:</label>
                <input type="file" class="form-control" id="image" required
                       placeholder="Enter image" name="image" >
            </div>
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Description:</label>
                <input type="text" class="form-control" id="description" required
                       placeholder="Enter description" name="description" >
            </div>
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Views:</label>
                <input type="tel" class="form-control" id="views" required
                       placeholder="Enter views" name="views" >
            </div>
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Category:</label>
                <input type="tel" class="form-control" id="category" required
                       placeholder="Enter category" name="id_category" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</body>
</html>