@php
    $login = [
        (object) [
            'title' => 'Log Out',
            'path' => '/',
            'icon' => 'fas fa-door-open',
        ],
    ];
@endphp

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light fixed-top">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Profile</a>
        </li>
    </ul>

    <!-- Right navbar links (MENU LOGIN) -->
    <ul class="navbar-nav ml-auto">
        @foreach ($login as $loginItem)
            <li class="nav-item">
                <a href="{{ $loginItem->path[0] !== '/' ? '/' . $loginItem->path : $loginItem->path }}"
                    class="nav-link {{ request()->path() === $loginItem->path ? 'active' : '' }}
                    text-dark rounded px-3 py-2 transition"
                    style="transition: background-color 0.3s ease; border-radius: 5px;"
                    onmouseover="this.style.backgroundColor='red'; this.style.color='white';"
                    onmouseout="this.style.backgroundColor='transparent'; this.style.color='black';">
                    <i class="{{ $loginItem->icon }} "></i> <span class="ml-2">{{ $loginItem->title }}</span>
                </a>
            </li>
        @endforeach
    </ul>
</nav>
<!-- /.navbar -->
