@php
        $menuItems = [
        [
        'id' => 1,
        'name' => 'Home',
        'url' => '/duan1-php/admin'
        ],
        [
        'id' => 2,
        'name' => 'Categorys',
        'url' => '/duan1-php/admin/categorys'
        ],
        [
        'id' => 3,
        'name' => 'Comments',
        'url' => '/duan1-php/admin/comments'
        ],
        [
        'id' => 4,
        'name' => 'Products',
        'url' => '/duan1-php/admin/products'
        ],
        [
        'id' => 5,
        'name' => 'Users',
        'url' => '/duan1-php/admin/users'
        ],
        [
        'id' => 6,
        'name' => 'Web',
        'url' => '/duan1-php/'
        ],
        ];
        $active = $_SERVER['REQUEST_URI'];
        @endphp

{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/duan1-php/admin">Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @foreach($menuItems as $key => $value)
                <li class="nav-item">
                    <a class="nav-link {{ $active === $value['url'] ? 'active' : '' }}" aria-current="page"
href="{{ $value['url'] }}">{{ $value['name'] }}</a>
</li>
@endforeach
</ul>
<div class="d-flex gap-2">
    @if(isset($_SESSION['user']))
    <a href="/duan1-php/profile/{{$_SESSION['user']['id']}}" class="btn btn-info"><i class="fa-solid fa-user-tie fa-bounce" style="color: #383838;"></i>
        - {{$_SESSION['user']['username']}}</a>
    <a class="btn btn-warning" href="/duan1-php/{{$_SESSION['user']['id']}}/logout"><i class="fa-solid fa-arrow-right-from-bracket" style="color: #616161;"></i></a>
    @endif
</div>
</div>
</div>
</nav> --}}

<div class="ui inverted segment">
    <div class="ui inverted secondary pointing menu">
        @foreach($menuItems as $key => $value)
        <a class="item {{ $active === $value['url'] ? 'active' : '' }}" href="{{ $value['url'] }}">
            {{ $value['name'] }}
        </a>
        @endforeach
            <div class="right menu">
                @if(!isset($_SESSION['user']))
                    <a href="/duan1-php/login" class="ui blue button">Login</a>
                    <a class="ui gray button" href="/duan1-php/register">
                        Register
                    </a>
                @else
{{--                    <a href="" class="ui avatar image">--}}
{{--                        <img src="data:image/jpeg;base64,{{$_SESSION['user']['image']}}" alt="">--}}
{{--                        {{$_SESSION['user']['username']}}--}}
{{--                    </a>--}}

                    <div class="ui menu">
                        <a class="item">
                            Home
                        </a>
                        <div class="ui pointing dropdown link item">
                            <span class="">Shopping</span>
                            <i class="dropdown icon"></i>
                            <div class="menu">
                                <div class="item">
                                    <i class="dropdown icon"></i>
                                    <span class="text">Clothing</span>
                                    <div class="menu">
                                        <div class="header">Mens</div>
                                        <div class="item">Shirts</div>
                                        <div class="item">Pants</div>
                                        <div class="item">Jeans</div>
                                        <div class="item">Shoes</div>
                                        <div class="divider"></div>
                                        <div class="header">Womens</div>
                                        <div class="item">Dresses</div>
                                        <div class="item">Shoes</div>
                                        <div class="item">Bags</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="item">
                            Forums
                        </a>
                        <a class="item">
                            Contact Us
                        </a>
                    </div>


{{--                    <a href="/duan1-php/profile/{{$_SESSION['user']['id']}}" class="ui yellow button">{{$_SESSION['user']['username']}} - Profile</a>--}}
{{--                    <a href="/duan1-php/{{$_SESSION['user']['id']}}/logout" class="ui red button">Logout</a>--}}
                @endif
            </div>
    </div>
</div>
