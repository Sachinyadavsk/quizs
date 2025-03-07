    <!-- Start topbar -->
    <?php
    session_start();
    ?>
    <header id="page-topbar">
        <div class="navbar-header">

            <!-- Logo -->

            <!-- Start Navbar-Brand -->
            <div class="navbar-logo-box">


                <a href="" class="logo logo-dark">
                            
                            <span class="logo-lg">
                                <img src="" alt="logo here" height="100%">
                            </span>
                        </a>

                <button type="button" class="btn btn-sm top-icon sidebar-btn" id="sidebar-btn">
                    <i class="mdi mdi-menu-open align-middle fs-19"></i>
                </button>
            </div>
            <!-- End navbar brand -->

            <!-- Start menu -->
            <div class="d-flex justify-content-between menu-sm px-3 ms-auto">
                <div class="d-flex align-items-center gap-2">
                    <div class="dropdown d-none d-lg-block">
                    </div>
                </div>

                <div class="d-flex align-items-center gap-2">
                   

                    <!-- Start Profile -->
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn btn-sm top-icon p-0" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded avatar-2xs p-0" src="https://drive360.in/pages/super-admin//assets/images/users/avatar-6.png" alt="Header Avatar">
                        </button>
                        <div class="dropdown-menu dropdown-menu-wide dropdown-menu-end dropdown-menu-animated overflow-hidden py-0">
                            <div class="card border-0">
                                <div class="card-header bg-primary rounded-0">
                                    <div class="rich-list-item w-100 p-0">
                                        <div class="rich-list-prepend">
                                            <div class="avatar avatar-label-light avatar-circle">
                                                <div class="avatar-display"><i class="fa fa-user-alt"></i></div>
                                            </div>
                                        </div>
                                        <div class="rich-list-content">
                                            <h3 class="rich-list-title text-white"><?php echo $_SESSION['SUPER_ADMIN_NAME'];?></h3>
                                            <!--<span class="rich-list-subtitle text-white">admin@codubucks.in</span>-->
                                        </div>
                                        <!--<div class="rich-list-append"><span class="badge badge-label-light fs-6">6+</span></div>-->
                                    </div>
                                </div>
                        
                                <div class="card-footer card-footer-bordered rounded-0"><a href="auth-false" class="btn btn-label-danger">Sign out</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- End Profile -->
                </div>
            </div>
            <!-- End menu -->
        </div>
    </header>