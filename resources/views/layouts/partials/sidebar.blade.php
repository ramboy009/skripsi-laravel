<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon">
            <i class="fas fa-laptop-medical"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Diagnosis Hepatitis</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::route()->getName() == 'dashboard' ? 'active' : ''}}">
        <a class="nav-link" href="dashboard">
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
        <a class="nav-link" href="diagnosis">
            <i class="fas fa-stethoscope"></i>
            <span>Diagnosis</span></a>
    </li>
    <li class="nav-item {{ Request::route()->getName() && strpos(Request::route()->getName(), 'keluhan') === 0 ? 'active' : ''}}">
        <a class="nav-link" href="keluhan">           
            <i class="fas fa-envelope-open-text"></i>
            <span>Keluhan</span>
        </a>
    </li>
    <li class="nav-item {{ Request::route()->getName() && strpos(Request::route()->getName(), 'keterangan') === 0 ? 'active' : ''}}">
        <a class="nav-link" href="keterangan">
            <i class="fas fa-clipboard-list"></i>
            <span>Keterangan</span>
        </a>
    </li>
    </li>
    <li class="nav-item {{ Request::route()->getName() == 'tentang' ? 'active' : ''}}">
        <a class="nav-link" href="tentang">
            <i class="fas fa-info-circle"></i>            
            <span>Tentang</span>
        </a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>