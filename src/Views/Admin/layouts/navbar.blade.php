@php

    $menuAdmin = [
		[
         'id' => 1,
         'name' => 'Dashboard',
         'url' => '/duan1-php/admin',
         'icon' => 'fa-solid fa-house'
    ],
    	[
         'id' => 2,
         'name' => 'Category',
         'url' => '/duan1-php/admin/categorys',
         'icon' => 'fa-solid fa-layer-group'
    ],
    	[
         'id' => 3,
         'name' => 'Products',
         'url' => '/duan1-php/admin/products',
         'icon' => 'fa-solid fa-shirt'
    ],
    	[
         'id' => 4,
         'name' => 'Comments',
         'url' => '/duan1-php/admin/comments',
         'icon' => 'fa-solid fa-comments'
    ],
    	[
         'id' => 5,
         'name' => 'User',
         'url' => '/duan1-php/admin/users',
         'icon' => 'fa-solid fa-users'
    ],
    [
         'id' => 6,
         'name' => 'Web',
         'url' => '/duan1-php',
         'icon' => 'fa-solid fa-hand-middle-finger'
    ]
    ];
	$activeMenu = $_SERVER['REQUEST_URI'];
@endphp
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/duan1-php/admin">LuxChill</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/duan1-php/admin">Lux</a>
        </div>
        <ul class="sidebar-menu">
            {{--            <li class="menu-header">Dashboard</li>--}}
            {{--            <li class="dropdown active">--}}
            {{--                <a href="admin" class="nav-link has-dropdown">--}}
            {{--                    --}}{{--                                                    <i class="fas fa-fire"></i>--}}
            {{--                    <i class="fa-solid fa-house"></i>--}}
            {{--                    <span>Dashboard</span>--}}
            {{--                </a>--}}
            {{--                <ul class="dropdown-menu">--}}
            {{--                    <li><a class="nav-link" href="index-0.html">General Dashboard</a></li>--}}
            {{--                    <li class=active><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}
            @foreach($menuAdmin as $key => $value)
                <li class="sidebar-menu {{$activeMenu === $value['url'] ? 'active' : ''}} ">
                    <a href="{{$value['url']}}" class="nav-link">
                        <i class="{{$value['icon']}}" style="margin-right: 0"></i>
                        <span>{{$value['name']}}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </aside>
</div>