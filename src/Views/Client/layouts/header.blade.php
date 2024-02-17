<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/duan1-php/">LuxChill</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/duan1-php/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/duan1-php/shop">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/duan1-php/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/duan1-php/news">News</a>
                </li>
            </ul>
            <div class="d-flex gap-2">
                <span onclick="window.location.href = '/duan1-php/cart/'">
                <i class="fa-solid fa-cart-shopping" style="color: #878787;"></i>
                    <span class="text-info count__card">
                        @php
                            echo !empty($_SESSION['cart']) ? count($_SESSION['cart']) : 0
                        @endphp
                    </span>
                </span>
                @if(!isset($_SESSION['user']))
                    <a href="/duan1-php/login" class="btn btn-success">Login</a>
                    <a href="/duan1-php/register" class="btn btn-warning">Register</a>
                @else
                    <a href="/duan1-php/profile/{{$_SESSION['user']['id']}}" class="btn btn-info"><i class="fa-regular fa-user"></i>
                        - {{$_SESSION['user']['username']}}</a>
                    <a class="btn btn-warning" href="/duan1-php/{{$_SESSION['user']['id']}}/logout"><i class="fa-solid fa-arrow-right-from-bracket" style="color: #616161;"></i></a>
                @endif
            </div>
        </div>
    </div>
</nav>