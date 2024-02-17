@extends('layouts.master')

@section('title')
    Profile
@endsection

@section('content')

    @php

        echo "<pre>";
        print_r($_SESSION['user']);
        echo "</pre>";


        if($_SESSION['user']['role'] != 1){
                            echo "User";
                        }else{
							echo "<a href='/duan1-php/admin'>Admin Manager</a>";
                        }

    @endphp

    <div>
        @php

            echo $_SESSION['success'] ?? null;

        @endphp

        <h1>Show Image</h1>
        <img src="data:image/jpeg;base64,{{$_SESSION['user']['image']}}" style="width: 500px; height: 500px">

        <h1> - Change Image</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" name="username" class="d-none" value="{{$_SESSION['user']['username']}}">
            <input type="text" name="email" class="d-none" value="{{$_SESSION['user']['email']}}">
                <label>Image</label>
            <input type="file" name="image" required>
            <button type="submit" name="submit">Submit</button>
        </form>


    </div>


@endsection