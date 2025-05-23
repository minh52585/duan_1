<?php require_once 'layout/header.php'; ?>
<?php require_once 'layout/menu.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Tin Tức</title>
    <style>
        /* body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        } */
        .container1 {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);

        }
        h1 {
            font-size: 2.5rem;
            color: #333;
        }
        .breadcrumb {
            font-size: 1rem;
            background: #f4f4f4;
            padding: 10px 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .breadcrumb a {
            color: #007bff;
            text-decoration: none;
        }
        .breadcrumb span {
            color: #555;
        }
        /* .row {
            display: flex;
            flex-wrap: wrap; 
            gap: 20px; 
            margin-top: 20px;
        } */
        .col-md-4 {
            flex: 0 0 calc(33.333% - 20px); 
            max-width: calc(33.333% - 20px);
            box-sizing: border-box;
        }
        .card {
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 8px;
            overflow: hidden;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }
        .card-body {
            padding: 15px;
        }
        .card-title {
            font-size: 1.2rem;
            color: #333;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .card-text {
            font-size: 0.9rem;
            color: #666;
        }
    </style>
</head>
<body>
    <main>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "duan2";
        
        try {
  
            $con = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $con->prepare("SELECT * FROM tin_tucs");
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $kq = $stmt->fetchAll();

        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
        }
        $con = null; 
        ?>

        <div class="container1">
            <h1>Tin Tức</h1>
            <div class="breadcrumb">
                <a href="#">Trang chủ</a> / <span>Tin Tức</span>
            </div>

            <div class="row">
                <?php if (isset($kq) && count($kq) > 0) {
                    foreach ($kq as $row) { 
                        echo '<div class="col-md-4">'; 
                        echo '    <div class="card">';
                    
                        $image = $row['anh_tin_tuc'] ? $row['anh_tin_tuc'] : 'default-image.jpg';
                        echo '        <img src="'.$image.'" alt="Tin Tức">';
                        
                        echo '        <div class="card-body">';
                        echo '            <h5 class="card-title">'.$row['noi_dung'].'</h5>';
                        echo '            <p class="card-text text-muted">'.$row['ngay_dang'].'</p>';
                        echo '        </div>';
                        echo '    </div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>Không có dữ liệu để hiển thị.</p>';
                }
                ?>
            </div>
        </div>
    </main>
</body>
</html>
<?php require_once 'layout/miniCart.php' ?>
<!-- offcanvas mini cart end -->

<?php require_once 'layout/footer.php' ?>
