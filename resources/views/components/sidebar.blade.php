@php
    $menus = [
        (object) [
            'title' => 'Dashboard',
            'path' => '/',
            'icon' => 'fas fa-home',
        ],
        (object) [
            'title' => 'Program Studi',
            'path' => 'prodi',
            'icon' => 'fas fa-wrench',
        ],
        (object) [
            'title' => 'Mahasiswa',
            'path' => 'mahasiswa',
            'icon' => 'fas fa-user-graduate',
        ],
        (object) [
            'title' => 'Mata Kuliah',
            'path' => 'matkul',
            'icon' => 'fas fa-book',
        ],
        (object) [
            'title' => 'KRS',
            'path' => 'krs',
            'icon' => 'fas fa-file-alt'
        ]
    ];
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="templates/index3.html" class="brand-link">
        <img src="templates/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">KRS an</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="templates/dist/img/icon1.JPG" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Sugeng Young Lex</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                @foreach ($menus as $menu)
                    <li class="nav-item">
                        <a href="{{ $menu->path[0] !== '/' ? '/' . $menu->path : $menu->path }}"
                            class="nav-link {{ request()->path() === $menu->path ? 'active' : '' }}">
                            <i class="nav-icon {{ $menu->icon }}"></i>
                            <p>
                                {{ $menu->title }}
                            </p>
                        </a>
                    </li>
                @endforeach

                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
