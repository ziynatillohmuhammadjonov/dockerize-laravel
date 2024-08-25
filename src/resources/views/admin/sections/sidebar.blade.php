<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{route('admin.dashboard')}}"> <img alt="image" src="assets/img/logo.png" class="header-logo" /> <span
                    class="logo-name">Otika</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <a href="{{route('admin.dashboard')}}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown {{ request()->routeIs('admin.settings.index') ? 'active' : '' }}">
                <a href="{{route('admin.settings.index')}}" class="nav-link"><i class="fas fa-cog"></i><span>Settings</span></a>
            </li>
            <li class="dropdown {{ request()->routeIs('admin.blogs.index') ? 'active' : '' }}">
                <a href="{{route('admin.blogs.index')}}" class="nav-link"><i class="fab fa-readme"></i><span>Blogs</span></a>
            </li>
        </ul>
    </aside>
</div>
