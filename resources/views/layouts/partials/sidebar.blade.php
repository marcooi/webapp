        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">{{ config('app.name') }}</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ (request()->is('home')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <li class="nav-item {{ (request()->is('purchases')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('purchases.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Purchase</span></a>
            </li>
            
            <li class="nav-item ">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Master</span>
                </a>
                <div id="collapseOne" class="collapse {{ (request()->is('master*')) ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ (request()->is('master/companies')) ? 'active' : '' }}" href="{{ route('companies.index') }}">Company</a>
                        <a class="collapse-item {{ (request()->is('master/products')) ? 'active' : '' }}" href="{{ route('products.index') }}">Product</a>
                        <a class="collapse-item {{ (request()->is('master/vendors')) ? 'active' : '' }}" href="{{ route('vendors.index') }}">Vendor / Customer</a>

                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item ">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Setting</span>
                </a>
                <div id="collapseTwo" class="collapse {{ (request()->is('setting*')) ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">User Role Management</h6>

                        <a class="collapse-item {{ (request()->is('setting/users')) ? 'active' : '' }}" href="{{ route('users.index') }}">Users</a>
                        <a class="collapse-item {{ (request()->is('setting/roles')) ? 'active' : '' }}" href="{{ route('roles.index') }}">Role</a>
                        <a class="collapse-item {{ (request()->is('setting/permissions')) ? 'active' : '' }}" href="{{ route('permissions.index') }}">Permission</a>



                    </div>
                </div>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->