<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{route('admin_dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                             <div class="sb-sidenav-menu-heading">Users</div>
                            <a class="nav-link" href="{{route('user_table')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Users
                            </a>
                            
                         
                           
                            <div class="sb-sidenav-menu-heading">Sales</div>
                            <a class="nav-link" href="{{route('table_sales_payment_merchant')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Sales Person
                            </a>
                            <a class="nav-link" href="{{route('table_sales_person_email')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Sales Payment
                            </a>

                             <div class="sb-sidenav-menu-heading">Invoices</div>
                            <a class="nav-link" href="{{route('table_invoice')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-file-invoice"></i></div>
                                Invoices
                            </a>
                          
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        {{session('name')}}
                    </div>
                </nav>