<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('assets/be/dist/img/AdminLTELogo.png') }}"" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Karibe Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://avatars.dicebear.com/4.5/api/male/axel.svg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Stephan Vebrian</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('be.home') }}" class="nav-link ">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('be.post') }}" class="nav-link">
                        <i class="nav-icon fas fa-clipboard" aria-hidden="true"></i>
                        <p>
                            Post Management
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('be.user') }}" class="nav-link">
                        <i class="nav-icon fas fa-user" aria-hidden="true"></i>
                        <p>
                            User Management
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('be.comment') }}" class="nav-link">
                        <i class="nav-icon fa fa-comments" aria-hidden="true"></i>
                        <p>
                            Comment Management
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('be.stats') }}" class="nav-link">
                        <i class="nav-icon fa fa-window-restore"></i>
                        <p>
                            Website Statistic
                        </p>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>