  <!-- ========== App Menu ========== -->
  <div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('steex/layouts/assets/images/logo-sm.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('steex/layouts/assets/images/logo-dark.png')}}" alt="" height="22">
            </span>
        </a>
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('steex/layouts/assets/images/logo-sm.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('steex/layouts/assets/images/logo-light.png')}}" alt="" height="22">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">

                <li class="menu-title"><span data-key="t-menu">DashBoards</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ph-gauge"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                </li>


                <li class="menu-title"><span data-key="t-menu">Users & Previlages</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ph-layout"></i> <span data-key="t-layouts">Users Previlage & Permission</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="layouts-horizontal.html" target="_blank" class="nav-link" data-key="t-horizontal">Users</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-detached.html" target="_blank" class="nav-link" data-key="t-detached">Rows</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-two-column.html" target="_blank" class="nav-link" data-key="t-two-column">Permission</a>
                            </li>
                        </ul>
                    </div>
                </li>




                <li class="menu-title"><span data-key="t-menu">Basic Settings</span></li>
                <li class="nav-item">
                    <a href="#sidebarEcommerce" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEcommerce11">
                        <i class="ph-storefront"></i> <span data-key="t-ecommerce11">Basic Settings</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarEcommerce">
                        <ul class="nav nav-sm flex-column">

                            <li class="nav-item">
                                <a href="{{ route ('style')}}" class="nav-link " data-key="t-products-grid">Styles Settings</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('styleparameter')}}" class="nav-link" data-key="t-product-Details">Styles Parameters Settings</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('project')}}" class="nav-link" data-key="t-create-product">Projects Settings</a>
                            </li>

                        </ul>
                    </div>
                </li>


                <li class="menu-title"><span data-key="t-menu">Apps Manager</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarTables" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTables">
                        <i class="ph-graduation-cap"></i> <span data-key="t-tables">Apps</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarTables">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('client')}}" class="nav-link" data-key="t-basic-tables">Client Manager</a>
                            </li>
                            <li class="nav-item">
                                <a href="tables-gridjs.html" class="nav-link" data-key="t-grid-js">Styles Manager</a>
                            </li>
                            <li class="nav-item">
                                <a href="tables-listjs.html" class="nav-link" data-key="t-list-js">All Measurement Manager</a>
                            </li>
                            <li class="nav-item">
                                <a href="tables-datatables.html" class="nav-link" data-key="t-datatables">Contacts Manager</a>
                            </li>
                            <li class="nav-item">
                                <a href="tables-datatables.html" class="nav-link" data-key="t-datatables">Projects Manager</a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li class="menu-title"><span data-key="t-menu">Pos</span></li>
                <li class="nav-item">
                    <a href="#sidebarInvoices" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInvoices">
                        <i class="ph-file-text"></i> <span data-key="t-invoices">POS</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarInvoices">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="apps-invoices-list.html" class="nav-link active" data-key="t-list-view">List View</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-invoices-overview.html" class="nav-link" data-key="t-overview">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-invoices-create.html" class="nav-link" data-key="t-create-invoice">Create Invoice</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title"><span data-key="t-menu">Inventory & Reports</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarMaps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMaps">
                        <i class="ph-map-trifold"></i> <span data-key="t-maps">Inventory & Reports</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarMaps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="maps-google.html" class="nav-link" data-key="t-google">Order</a>
                            </li>
                            <li class="nav-item">
                                <a href="maps-vector.html" class="nav-link" data-key="t-vector">Sales</a>
                            </li>
                            <li class="nav-item">
                                <a href="maps-leaflet.html" class="nav-link" data-key="t-leaflet">Stocks</a>
                            </li>
                        </ul>
                    </div>
                </li>

                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
