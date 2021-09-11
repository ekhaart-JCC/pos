<div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">
    
                <!-- LOGO -->
                <a href="index.html" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="<?= base_url('vendor/'); ?>auth/img/Logo/logo-brand.png" alt="" height="66px" style="margin-top: 20px">
                    </span>
                    <span class="logo-sm">
                        <img src="<?= base_url('vendor/'); ?>auth/img/Logo/logo-brand.png" alt="" height="26px">
                    </span>
                </a>
                <div class="h-100" id="leftside-menu-container" data-simplebar="">

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <li class="side-nav-title side-nav-item text-dark">Main Menu</li>

                        <li class="side-nav-item text-dark">
                            <a data-bs-toggle="collapse" href="dashboard" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span> Dashboards </span>
                            </a>
                        </li>
                        <li class="side-nav-item text-dark">
                            <a data-bs-toggle="collapse" href="#sidebarReport" aria-expanded="false" aria-controls="sidebarReport" class="side-nav-link">
                                <i class="uil-clipboard-alt"></i>
                                <span> Report </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarReport">
                                <ul class="side-nav-second-level text-dark">
                                    <li>
                                        <a href="report/sales">Sales</a>
                                    </li>
                                    <li>
                                        <a href="report/transaction">Transactions</a>
                                    </li>
                                    <li>
                                        <a href="report/invoice">Invoice</a>
                                    </li>
                                    <li>
                                        <a href="report/shift">Shift</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item text-dark">
                            <a data-bs-toggle="collapse" href="#sidebarLibrary" aria-expanded="false" aria-controls="sidebarLibrary" class="side-nav-link">
                                <i class="uil-briefcase"></i>
                                <span> Library </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarLibrary">
                                <ul class="side-nav-second-level text-dark">
                                    <li>
                                        <a href="library/item-library">Item Library</a>
                                    </li>
                                    <li>
                                        <a href="library/modifier">Modifiers</a>
                                    </li>
                                    <li>
                                        <a href="library/category">Categories</a>
                                    </li>
                                    <li>
                                        <a href="library/promo">Promo</a>
                                    </li>
                                    <li>
                                        <a href="library/discount">Discounts</a>
                                    </li>
                                    <li>
                                        <a href="library/sales-type">Sales Type</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item text-dark">
                            <a data-bs-toggle="collapse" href="#sidebarInggredients" aria-expanded="false" aria-controls="sidebarInggredients" class="side-nav-link">
                                <i class="uil-briefcase"></i>
                                <span> Inggredient </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarInggredients">
                                <ul class="side-nav-second-level text-dark">
                                    <li>
                                        <a href="inggredient/inggredient-library">Inggredient Library</a>
                                    </li>
                                    <li>
                                        <a href="inggredient/inggredient-category">Inggredient categories</a>
                                    </li>
                                    <li>
                                        <a href="inggredient/recipes">Recipes</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item text-dark">
                            <a data-bs-toggle="collapse" href="#sidebarInventory" aria-expanded="false" aria-controls="sidebarInventory" class="side-nav-link">
                                <i class="uil-clipboard-alt"></i>
                                <span> Inventory </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarInventory">
                                <ul class="side-nav-second-level text-dark">
                                    <li>
                                        <a href="inventory/summary">Summary</a>
                                    </li>
                                    <li>
                                        <a href="inventory/purchase-order">Purchase Order (PO)</a>
                                    </li>
                                    <li>
                                        <a href="inventory/transfer">Transfer</a>
                                    </li>
                                    <li>
                                        <a href="inventory/adjusment">Adjusment</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item text-dark">
                            <a data-bs-toggle="collapse" href="#sidebarCustomer" aria-expanded="false" aria-controls="sidebarCustomer" class="side-nav-link">
                                <i class="uil-user"></i>
                                <span> Customer </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarCustomer">
                                <ul class="side-nav-second-level text-dark">
                                    <li>
                                        <a href="customer/customer-list">Customer List</a>
                                    </li>
                                    <li>
                                        <a href="customer/feedback">Feedback</a>
                                    </li>
                                    <li>
                                        <a href="customer/loyalty-program">Loyalty Program</a>
                                    </li>
                            </div>
                        </li>

                        <li class="side-nav-item text-dark">
                            <a href="employes" class="side-nav-link">
                                <i class="uil-rss"></i>
                                <span> Employees </span>
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>