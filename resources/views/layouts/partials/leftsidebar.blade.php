<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
        <div class="sidebar-title">
            Navigation
        </div>
        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                    <li>
                        <a href="{{ route('home') }}">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-parent {{ (request()->is('purchase*')) ? 'nav-expanded' : '' }}">
                        <a><i class="fa fa-money" aria-hidden="true"></i><span>Purchase</span></a>
                        <ul class="nav nav-children">
                            <li class="{{ (request()->is('purchases')) ? 'nav-active' : '' }}"><a href="{{ route('purchases.index') }}">Order</a></li>
                            <li class="{{ (request()->is('purchase/receipts')) ? 'nav-active' : '' }}"><a href="{{ route('receipts.index') }}">Receipt</a></li>
                           

                        </ul>
                    </li>

                    <li class="nav-parent {{ (request()->is('sale*')) ? 'nav-expanded' : '' }}">
                        <a><i class="fa fa-usd" aria-hidden="true"></i><span>Sales</span></a>
                        <ul class="nav nav-children">
                        <li class="{{ (request()->is('sales')) ? 'nav-active' : '' }}"><a href="{{ route('sales.index') }}">Order</a></li>
                        <li class="{{ (request()->is('sale/quotations')) ? 'nav-active' : '' }}"><a href="{{ route('quotations.index') }}">Quotation</a></li>
                                                    

                        </ul>
                    </li>

                    <li class="nav-parent {{ (request()->is('master*')) ? 'nav-expanded' : '' }}">
                        <a><i class="fa fa-database" aria-hidden="true"></i><span>Master</span></a>
                        <ul class="nav nav-children">
                            <li class="{{ (request()->is('master/companies')) ? 'nav-active' : '' }}"><a href="{{ route('companies.index') }}">Company</a></li>
                            <li class="{{ (request()->is('master/addresses')) ? 'nav-active' : '' }}"><a href="{{ route('addresses.index') }}">Ship Addresses</a></li>
                            <li class="{{ (request()->is('master/products')) ? 'nav-active' : '' }}"><a href="{{ route('products.index') }}">Product</a></li>
                        </ul>
                    </li>

                    @can('user-list')
                    <li class="nav-parent  {{ (request()->is('setting*')) ? 'nav-expanded' : '' }}">
                        <a><i class="fa fa-gear" aria-hidden="true"></i><span>Setting</span></a>
                        <ul class="nav nav-children">
                            <li class="{{ (request()->is('setting/users')) ? 'nav-active' : '' }}"><a href="{{ route('users.index') }}">Users</a></li>
                            <li class="{{ (request()->is('setting/roles')) ? 'nav-active' : '' }}"><a href="{{ route('roles.index') }}">Role</a></li>
                            <li class="{{ (request()->is('setting/permissions')) ? 'nav-active' : '' }}"><a class="" href="{{ route('permissions.index') }}">Permission</a></li>
                        </ul>
                    </li>

                    @endcan

                </ul>
            </nav>

            <hr class="separator" />



        </div>

    </div>

</aside>