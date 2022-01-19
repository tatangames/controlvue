<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
        <img src="{{ asset('images/icono-sistema.png') }}" alt="Logo" class="brand-image img-circle elevation-3" >
        <span class="brand-text font-weight" style="color: white">ACTIVO</span>
    </a>

    <div class="sidebar">

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

             <li class="nav-item">


                 <a href="#" class="nav-link">
                    <i class="far fa-edit"></i>
                    <p>
                        Roles y Permisos
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.roles.index') }}" target="frameprincipal" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Roles</p>
                        </a>
                    </li>

                    @can('seccion.roles.y.permisos')
                    <li class="nav-item">
                        <a href="{{ route('admin.permisos.index') }}" target="frameprincipal" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Permisos</p>
                        </a>
                    </li>
                    @endcan

                </ul>
             </li>

                <li class="nav-item">
                    <a href="{{ route('admin.vista.principal') }}" target="frameprincipal" class="nav-link">
                        <i class="fas fa-home nav-icon"></i>
                        <p>Principal</p>
                    </a>
                </li>


            </ul>
        </nav>




    </div>
</aside>






