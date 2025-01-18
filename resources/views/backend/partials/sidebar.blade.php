<div class="sidebar pe-4 pb-3">
    <!-- Sidebar navigation menu -->
    <nav class="navbar bg-secondary navbar-dark">
        
        <!-- Brand logo and name -->
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary">
                Elegance Saloon
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

            <!-- Dashboard link -->
            <a
                href="{{ url('/dashboard') }}"
                class="nav-item nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}"
            >
                <i class="fa fa-tachometer-alt me-2"></i>Dashboard
            </a>

            <!-- Dashboard link -->
            <a
                href="{{ url('/view-services') }}"
                class="nav-item nav-link {{ Route::currentRouteName() == 'view-services' ? 'active' : '' }}"
            >
                <i class="fa fa-tachometer-alt me-2"></i>Services
            </a>
            
            <!-- Inquiries link -->
            <a
                href="{{ url('/inquiries') }}"
                class="nav-item nav-link {{ Route::currentRouteName() == 'inquiries' ? 'active' : '' }}"
            >
                <i class="fa fa-envelope me-2"></i>Inquiries
            </a>
            
            <!-- Appointments link -->
            <a
                href="{{ url('/appointments') }}"
                class="nav-item nav-link {{ Route::currentRouteName() == 'appointments' ? 'active' : '' }}"
            >
                <i class="fa fa-shopping-cart me-2"></i>Appointments
            </a>
            
            <!-- Reports link -->
            {{-- <a
                href="{{ url('/reports') }}"
                class="nav-item nav-link {{ Route::currentRouteName() == 'reports' ? 'active' : '' }}"
            >
                <span><i class="fa fa-chart-line me-2"></i>Reports</span>
            </a> --}}
            
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
                    {{-- <a
                        href="{{ url('/permissions') }}"
                        class="dropdown-item {{ Route::currentRouteName() == 'permissions' ? 'active' : '' }}"
                    >Permissions</a> --}}
                    <a
                        href="{{ url('/create-account') }}"
                        class="dropdown-item {{ Route::currentRouteName() == 'create-account' ? 'active' : '' }}"
                    >Create New Account</a>
                </div>
            </div>
            
            <!-- System Configuration link -->
            {{-- <a
                href="{{ url('/system-configuration') }}"
                class="nav-item nav-link {{ Route::currentRouteName() == 'system-configuration' ? 'active' : '' }}"
            >
                <div class="d-flex">
                    <i class="fa fa-cogs me-2"></i>
                    <span class="align-content-center">System Configuration</span>
                </div>
            </a> --}}

            <!-- Data Backup & Restore link -->
            {{-- <a
                href="{{ url('/data-backup-restore') }}"
                class="nav-item nav-link {{ Route::currentRouteName() == 'data-backup-restore' ? 'active' : '' }}"
            >
                <div class="d-flex">
                    <i class="fa fa-hdd me-2"></i>
                    <span class="align-content-center">Data Backup & Restore</span>
                </div> --}}
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
