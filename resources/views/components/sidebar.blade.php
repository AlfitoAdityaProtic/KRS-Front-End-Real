@php
    $menus = [
        (object) [
            'title' => 'Dashboard',
            'path' => 'dashboard',
            'icon' => 'fas fa-home',
        ],
        (object) [
            'title' => 'Program Studi',
            'path' => 'prodi',
            'icon' => 'fas fa-university',
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
            'icon' => 'fas fa-file-alt',
        ],
    ];
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4 position-fixed h-100">
    <!-- Brand Logo -->
    <a href="dashboard" class="brand-link" style="display: flex; align-items: center; ">
        <img src="templates/dist/img/Logo_pnc.png" alt="KRS PNC" class="brand-image img-circle"
            style="width: 40px; height: 40px; object-fit: cover; opacity: 1;">
        <span class="brand-text font-weight-light" style="font-size: 16px; font-weight: 600; color: white;">
            KRS PNC
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="templates/dist/img/icon1.JPG" class="img-circle elevation-2" alt="User Image"
                    style="width: 30px; height: 30px; border-radius: 50%; object-fit: cover;">
            </div>
            <div class="info">
                <span class="d-block" style="font-weight: 600; font-size: 16px; color:white">Alfito Dwi Aditya</span>
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
