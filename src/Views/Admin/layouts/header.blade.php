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
    </div>
</div>