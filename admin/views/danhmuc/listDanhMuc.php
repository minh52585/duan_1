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
                                <h1>Quản Lý Danh Mục Sản Phẩm</h1>
                            </a>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <!-- /.card -->

                            <div class="card">
                                <div class="card-header">
                                    <a href="?act=form-them-danh-muc">
                                        <button class="btn btn-success">Thêm Danh Mục</button>
                                    </a>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Tên Danh Mục</th>
                                                <th>Mô Tả</th>
                                                <th>Thao Tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            foreach ($listDanhMuc as $key => $danhmuc) {
                                            ?>
                                                <tr>
                                                    <td><?= $key + 1 ?></td>
                                                    <td><?= $danhmuc['ten_danh_muc'] ?></td>
                                                    <td><?= $danhmuc['mo_ta'] ?></td>
                                                    <td>
                                                        <a href="?act=form-sua-danh-muc&id_danh_muc=<?= $danhmuc['id']  ?>">
                                                            <button class=" btn btn-warning">Sửa </button>
                                                        </a>
                                                        <a href="?act=form-xoa-danh-muc&id_danh_muc=<?= $danhmuc['id']  ?>" onclick="return confirm('ban co dong y muon xoa khong?')">
                                                            <button class="btn btn-danger">Xóa</button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>STT</th>
                                                <th>Tên Danh Mục</th>
                                                <th>Mô Tả</th>
                                                <th>Thao Tác</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
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
        <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true
                });
            });
        </script>

        <!-- Code injected by live-server -->
        <!-- footer -->
        <?php
        include "./views/layout/footer.php"
        ?>

        <!-- end footer -->
</body>

</html>