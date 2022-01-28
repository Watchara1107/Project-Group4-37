<aside class="main-sidebar green elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="{{ asset('img/ananta.png') }}" alt="Ananta" class="brand-img img-circle elevation-1" height="50px"
            width="50px">
        <span class="brand-text text-white">&nbspAnanta</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item menu-open ">
                    <a href="{{route('admin')}}"
                        class="nav-link {{ (request()->is('admin/dashboard')) ? 'active' : '' }}">
                        {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                        <p class="text-white ">
                            หน้าแรก
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('herb')}}" class="nav-link {{ (request()->is('admin/herbs*')) ? 'active' : '' }}">
                        {{-- <i class="nav-icon far fa-image"></i> --}}
                        <p class="text-white">
                            จัดการสมุนไพร
                        </p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{route('content')}}"
                        class="nav-link {{ (request()->is('admin/contents*')) ? 'active' : '' }}">
                        <p class="text-white">
                            แก้ไขข้อมูลหน้าแรก
                        </p>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a href="{{route('background')}}"
                        class="nav-link {{ (request()->is('admin/background*')) ? 'active' : '' }}">
                        {{-- <i class="nav-icon fas fa-columns"></i> --}}
                        <p class="text-white">
                            ภาพพื้นหลังหน้าแรก
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('user')}}"
                        class="nav-link {{ (request()->is('admin/users*')) ? 'active' : '' }}">
                        {{-- <i class="nav-icon fas fa-columns"></i> --}}
                        <p class="text-white">
                            จัดการผู้ใช้งาน
                        </p>
                    </a>
                </li>


                {{-- logout --}}
                <li class="nav-item">

                    <a class="nav-link text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        {{-- <i class="nav-icon fas fa-sign-out-alt gray"></i> --}}
                        <p class="text-white">
                            ออกจากระบบ
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <div class="header-center">
        <a class="header-text">{{ (request()->is('admin/herb')) ? 'จัดการสมุนไพร' : '' }}</a>
        <a class="header-text">{{ (request()->is('admin/edit-content')) ? 'แก้ไขข้อมูลหน้าแรก' : '' }}</a>
        <a class="header-text">{{ (request()->is('admin/create')) ? 'เพิ่มข้อมูล' : '' }}</a>
        <a class="header-text">{{ (request()->is('admin/edit')) ? 'แก้ไขข้อมูล' : '' }}</a>
    </div>
</nav>
