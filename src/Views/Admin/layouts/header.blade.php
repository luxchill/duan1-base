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


                    <a href="/duan1-php/profile/{{$_SESSION['user']['id']}}" class="ui yellow button">{{$_SESSION['user']['username']}} - Profile</a>
                    <a href="/duan1-php/{{$_SESSION['user']['id']}}/logout" class="ui red button">Logout</a>
                @endif
            </div>
    </div>
</div>
