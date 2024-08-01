<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="./index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img src="/assets/assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image opacity-75 shadow">
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">BioLinks</span>
            <!--end::Brand Text-->
        </a>
        <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2"> <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item"> <a href="<?php echo $menu_activo == 'dashboard' ? '#' : base_url('dashboard/'); ?>" class="nav-link <?php echo $menu_activo == 'dashboard' ? 'active' : ''; ?>"> <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                <li class="nav-item"> <a href="<?php echo base_url('dashboard/links'); ?>" class="nav-link <?php echo $menu_activo == 'enlaces' ? 'active' : ''; ?>"> <i class="nav-icon bi bi-link-45deg"></i>
                        <p>Enlaces</p>
                    </a> </li>
                <li class="nav-item"> <a href="<?php echo $menu_activo == 'apariencia' ? '#' : base_url('dashboard/appearance'); ?>" class="nav-link <?php echo $menu_activo == 'apariencia' ? 'active' : ''; ?>"> <i class="nav-icon bi bi-columns-gap"></i>
                        <p>Apariencia</p>
                    </a> </li>
                <li class="nav-item"> <a href="<?php echo $menu_activo == 'tienda' ? '#' : base_url('dashboard/shop'); ?>" class="nav-link <?php echo $menu_activo == 'shop' ? 'active' : ''; ?>"> <i class="nav-icon bi bi-shop"></i>
                        <p>Tienda</p>
                    </a> </li>
                </li>
            </ul> <!--end::Sidebar Menu-->
        </nav>
    </div> <!--end::Sidebar Wrapper-->
</aside> <!--end::Sidebar-->