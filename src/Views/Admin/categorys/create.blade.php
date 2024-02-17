@extends('layouts.admin')

@section('title')
    Create
@endsection

@section('content')
        <h1>Thêm mới Category</h1>

        <div class="row">
            <form action="" method="post">
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" required
                           placeholder="Enter name" name="name">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
@endsection