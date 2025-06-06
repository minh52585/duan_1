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
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Quản lý tài khoản quản trị</h1>
                        </div>
                    </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Thêm tài khoản quản trị</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="<?= BASE_URL_ADMIN . '?act=them-quan-tri' ?>" method="POST">
                                    <div class="card-body row">
                                        <div class="form-group col-12">
                                            <label>Họ tên</label>
                                            <input type="text" class="form-control" name="ho_ten" placeholder="Nhập họ tên">
                                            <?php if (isset($_SESSION['errors']['ho_ten'])) { ?>
                                                <p class="text-danger"><?= $_SESSION['errors']['ho_ten'] ?></p>
                                            <?php } ?>
                                        </div>

                                        <div class="form-group col-12">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="email" placeholder="Nhập email">
                                            <?php if (isset($_SESSION['errors']['email'])) { ?>
                                                <p class="text-danger"><?= $_SESSION['errors']['email'] ?></p>
                                            <?php } ?>
                                        </div>


                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
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
        <?php
        include "./views/layout/footer.php"
        ?>

        <!-- end footer -->
</body>

</html>