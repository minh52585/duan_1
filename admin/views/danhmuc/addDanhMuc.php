<!-- header -->
<?php
include "./views/layout/header.php"
?>
<!-- end header -->

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php
        include "./views/layout/navbar.php"
        ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php
        include "./views/layout/sidebar.php"
        ?>
        <!-- end sidebar -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">


                            <a href="index.php?act=form-them-danh-muc">
                                <h1>Quản Lý Sản Phẩm</h1>
                            </a>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Thêm Sản Phẩm</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action='index.php?act=them-danh-muc' method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Tên Sản Phẩm</label>
                            <input type="text" class="form-control" name='ten_danh_muc' placeholder="Nhập Sản Phẩm">
                            <?php
                            if (isset($_SESSION['error']['ten_danh_muc'])) { ?>
                                <p class="text-danger"><?= $_SESSION['error']['ten_danh_muc']; ?></p>

                            <?php
                            }

                            ?>
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <input type="text" name='mo_ta' class="form-control" placeholder="Nhập Mô Tả">
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <!-- /.card -->


                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Page specific script -->

        <!-- Code injected by live-server -->
        <!-- footer -->
        <?php
        include "./views/layout/footer.php"
        ?>

        <!-- end footer -->
</body>

</html>