         <aside class="main-sidebar sidebar-dark-primary elevation-4">
             <!-- Brand Logo -->
             <a href="../../index3.html" class="brand-link text-center">
             <svg xmlns="http://www.w3.org/2000/svg" width="200" height="100" viewBox="0 0 300 100">
                    <!-- Snowflake -->
                    <circle cx="50" cy="50" r="40" fill="none" stroke="lightblue" stroke-width="3" />
                    <line x1="50" y1="10" x2="50" y2="90" stroke="lightblue" stroke-width="2" />
                    <line x1="10" y1="50" x2="90" y2="50" stroke="lightblue" stroke-width="2" />
                    <line x1="20" y1="20" x2="80" y2="80" stroke="lightblue" stroke-width="2" />
                    <line x1="80" y1="20" x2="20" y2="80" stroke="lightblue" stroke-width="2" />

                    <!-- LuxeWinter text -->
                    <a class="navbar-brand fw-bold" href="index.php?act=home">
                <text x="110" y="55" font-family="Georgia, serif" font-size="36" fill="silver">
                        Luxe
                    </text>
                    <text x="190" y="55" font-family="Georgia, serif" font-size="28" fill="lightblue">
                        Winter
                    </text>
                </a>

                </svg>
                 <!--  -->
                 <!-- <span class="brand-text font-weight-light">Admin NBH</span> -->
             </a>

             <!-- Sidebar -->
             <div class="sidebar">
                 <!-- Sidebar user (optional) -->
                 <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                     <div class="image">
                         <img src="./assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                     </div>
                     <div class="info">
                         <a href="#" class="d-block">Duy</a>
                     </div>
                 </div>

                 <!-- SidebarSearch Form -->

                 <!-- Sidebar Menu -->
                 <nav class="mt-2">
                     <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                         <li class="nav-item">
                             <a href="index.php" class="nav-link">
                                 <i class="nav-icon fas fa-tachometer-alt"></i>
                                 <p>
                                     Trang chủ
                                 </p>
                             </a>
                         </li>

                         <li class="nav-item">
                             <a href="index.php?act=danh-muc-mi-pham" class="nav-link">
                                 <i class="nav-icon fas fa-th"></i>
                                 <p>
                                     Danh Mục Sản Phẩm
                                 </p>
                             </a>
                         </li>

                         <li class="nav-item">
                             <a href="index.php?act=san-pham" class="nav-link">
                                 <i class="nav-icon fas fa-coins"></i>
                                 <p>
                                     Sản Phẩm
                                 </p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="index.php?act=don-hang" class="nav-link">
                                 <i class="nav-icon fas fa-coins"></i>
                                 <p>
                                     Đơn Hàng
                                 </p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon fas fa-user"></i>
                                 <p>Quản lý tài khoản</p>
                                 <i class="fas fa-angle-left right"></i>
                             </a>
                             <ul class="nav nav-treeview">
                                 <li class="nav-item">
                                     <a href="<?= 'index.php?act=list-tai-khoan-quan-tri' ?>" class="nav-link">
                                         <i class="nav-icon far fa-user"></i>
                                         <p>Tài khoản quản trị</p>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="<?= 'index.php?act=list-tai-khoan-khach-hang' ?>" class="nav-link">
                                         <i class="nav-icon far fa-user"></i>
                                         <p>Tài khoản khách hàng</p>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="<?= 'index.php?act=form-sua-thong-tin-ca-nhan-quan-tri' ?>" class="nav-link">
                                         <i class="nav-icon far fa-user"></i>
                                         <p>Tài khoản cá nhân</p>
                                     </a>
                                 </li>
                             </ul>
                         </li>
                     </ul>
                 </nav>
                 <!-- /.sidebar-menu -->
             </div>
             <!-- /.sidebar -->
         </aside>