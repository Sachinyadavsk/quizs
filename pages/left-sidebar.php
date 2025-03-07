    <!-- ========== Left Sidebar Start ========== -->
    <?php session_start();
    $company_name=$_SESSION['COMPANY_NAME'];
    $role=$_SESSION['ROLE'];
    $new_admin_name=$_SESSION['SLUG_ADMIN_NAME'];
    ?>
    <div class="sidebar-left">

        <div data-simplebar class="h-100">

            <!--- Sidebar-menu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="left-menu list-unstyled" id="side-menu">
                    <li>
                        <a href="dashboard" class="">
                            <i class="fas fa-desktop"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="leads"><i class="fas fa-pager"></i> <span>Leads</span></a>
                    </li>
                    
                    <li>
                        <a href="pages"><i class="fas fa-edit"></i> <span>My Pages</span></a>
                    </li>

                    <li>
                        <a href="agency"><i class="fas fa-building"></i> <span>My Agency</span></a>
                    </li>
                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->