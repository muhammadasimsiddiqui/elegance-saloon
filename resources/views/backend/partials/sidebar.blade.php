<div class="sidebar pe-4 pb-3">
    <!-- Sidebar navigation menu -->
    <nav class="navbar bg-secondary navbar-dark">
        
        <!-- Brand logo and name -->
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary">
                <i class="fa fa-user-edit me-2"></i>DarkPan
            </h3>
        </a>
        
        <!-- Admin user profile section -->
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img
                    class="rounded-circle"
                    src="backend/img/user.jpg"
                    alt=""
                    style="width: 40px; height: 40px"
                />
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"
                ></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Jhon Doe</h6>
                <span>Admin</span>
            </div>
        </div>
        
        <!-- Navigation links -->
        <div class="navbar-nav w-100">
            
            <!-- Elements dropdown menu -->
            <div class="nav-item dropdown">
                <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-bs-toggle="dropdown"
                    ><i class="fa fa-laptop me-2"></i>Elements</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a
                        href="{{ url('/button') }}"
                        class="dropdown-item {{ Route::currentRouteName() == 'button' ? 'active' : '' }}"
                    >Buttons</a>
                    <a
                        href="{{ url('/typography') }}"
                        class="dropdown-item {{ Route::currentRouteName() == 'typography' ? 'active' : '' }}"
                    >Typography</a>
                    <a
                        href="{{ url('/element') }}"
                        class="dropdown-item {{ Route::currentRouteName() == 'element' ? 'active' : '' }}"
                    >Other Elements</a>
                </div>
            </div>
            
            <!-- Widgets link -->
            <a
                href="{{ url('/widget') }}"
                class="nav-item nav-link {{ Route::currentRouteName() == 'widget' ? 'active' : '' }}"
            >
                <i class="fa fa-th me-2"></i>Widgets
            </a>
            
            <!-- Forms link -->
            <a
                href="{{ url('/form') }}"
                class="nav-item nav-link {{ Route::currentRouteName() == 'form' ? 'active' : '' }}"
            >
                <i class="fa fa-keyboard me-2"></i>Forms
            </a>
            
            <!-- Tables link -->
            <a
                href="{{ url('/table') }}"
                class="nav-item nav-link {{ Route::currentRouteName() == 'table' ? 'active' : '' }}"
            >
                <i class="fa fa-table me-2"></i>Tables
            </a>
            
            <!-- Charts link -->
            <a
                href="{{ url('/chart') }}"
                class="nav-item nav-link {{ Route::currentRouteName() == 'chart' ? 'active' : '' }}"
            >
                <i class="fa fa-chart-bar me-2"></i>Charts
            </a>
            
            <!-- Pages dropdown menu -->
            <div class="nav-item dropdown">
                <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-bs-toggle="dropdown"
                    ><i class="far fa-file-alt me-2"></i>Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a
                        href="{{ url('/signin') }}"
                        class="dropdown-item {{ Route::currentRouteName() == 'signin' ? 'active' : '' }}"
                    >Sign In</a>
                    <a
                        href="{{ url('/signup') }}"
                        class="dropdown-item {{ Route::currentRouteName() == 'signup' ? 'active' : '' }}"
                    >Sign Up</a>
                    <a
                        href="{{ url('/404') }}"
                        class="dropdown-item {{ Route::currentRouteName() == '404' ? 'active' : '' }}"
                    >404 Error</a>
                    <a
                        href="{{ url('/blank') }}"
                        class="dropdown-item {{ Route::currentRouteName() == 'blank' ? 'active' : '' }}"
                    >Blank Page</a>
                </div>
            </div>
            
            <!-- Dashboard link -->
            <a
                href="{{ url('/dashboard') }}"
                class="nav-item nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}"
            >
                <i class="fa fa-tachometer-alt me-2"></i>Dashboard
            </a>
            
            <!-- Inquiries link -->
            <a
                href="{{ url('/inquiries') }}"
                class="nav-item nav-link {{ Route::currentRouteName() == 'inquiries' ? 'active' : '' }}"
            >
                <i class="fa fa-envelope me-2"></i>Inquiries
            </a>
            
            <!-- Orders link -->
            <a
                href="{{ url('/orders') }}"
                class="nav-item nav-link {{ Route::currentRouteName() == 'orders' ? 'active' : '' }}"
            >
                <i class="fa fa-shopping-cart me-2"></i>Orders
            </a>
            
            <!-- Reports link -->
            <a
                href="{{ url('/reports') }}"
                class="nav-item nav-link {{ Route::currentRouteName() == 'reports' ? 'active' : '' }}"
            >
                <span><i class="fa fa-chart-line me-2"></i>Reports</span>
            </a>
            
            <!-- Accounts dropdown menu -->
            <div class="nav-item dropdown">
                <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-bs-toggle="dropdown"
                    ><i class="far fa-id-card me-2"></i>Accounts</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a
                        href="{{ url('/accounts') }}"
                        class="dropdown-item {{ Route::currentRouteName() == 'accounts' ? 'active' : '' }}"
                    >Accounts Details</a>
                    <a
                        href="{{ url('/permissions') }}"
                        class="dropdown-item {{ Route::currentRouteName() == 'permissions' ? 'active' : '' }}"
                    >Permissions</a>
                    <a
                        href="{{ url('/create-account') }}"
                        class="dropdown-item {{ Route::currentRouteName() == 'create-account' ? 'active' : '' }}"
                    >Create New Account</a>
                </div>
            </div>
            
            <!-- System Configuration link -->
            <a
                href="{{ url('/system-configuration') }}"
                class="nav-item nav-link {{ Route::currentRouteName() == 'system-configuration' ? 'active' : '' }}"
            >
                <div class="d-flex">
                    <i class="fa fa-cogs me-2"></i>
                    <span class="align-content-center">System Configuration</span>
                </div>
            </a>

            <!-- Data Backup & Restore link -->
            <a
                href="{{ url('/data-backup-restore') }}"
                class="nav-item nav-link {{ Route::currentRouteName() == 'data-backup-restore' ? 'active' : '' }}"
            >
                <div class="d-flex">
                    <i class="fa fa-hdd me-2"></i>
                    <span class="align-content-center">Data Backup & Restore</span>
                </div>
            </a>
            <a
                href="{{ url('/logout') }}"
                class="nav-item nav-link active bg-primary"
            >
                <span class="text-white">Logout</span>
            </a>
        </div>
    </nav>
</div>
