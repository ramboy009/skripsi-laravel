<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-icon">
            <i class="fas fa-laptop-medical"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Diagnosis Hepatitis</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::route()->getName() == 'dashboard' ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ Request::route()->getName() && strpos(Request::route()->getName(), 'diagnosis') === 0 ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('diagnosis.index') }}">
            <i class="fas fa-stethoscope"></i>
            <span>Diagnosis</span></a>
    <li class="nav-item {{ Request::route()->getName() && strpos(Request::route()->getName(), 'riwayat') === 0 ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('riwayat.index') }}">       
            <i class="fas fa-book-medical"></i>
            <span>Riwayat</span>
        </a>
    </li>
    </li>
    <li class="nav-item {{ Request::route()->getName() && strpos(Request::route()->getName(), 'keluhan') === 0 ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('keluhan.index') }}">       
            <i class="fas fa-envelope-open-text"></i>
            <span>Keluhan</span>
        </a>
    </li>
    <li class="nav-item {{ Request::route()->getName() && strpos(Request::route()->getName(), 'keterangan') === 0 ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('keterangan.index') }}">
            <i class="fas fa-clipboard-list"></i>
            <span>Keterangan</span>
        </a>
    </li>
    </li>
    <li class="nav-item {{ Request::route()->getName() && strpos(Request::route()->getName(), 'tentang') === 0 ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('tentang.index') }}">
            <i class="fas fa-info-circle"></i>            
            <span>Tentang</span>
        </a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>