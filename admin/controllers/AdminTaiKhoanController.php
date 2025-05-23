<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

class AdminTaiKhoanController
{
    public $modelTaiKhoan;
    public $modelDonHang;
    public $modelSanPham;

    public function __construct()
    {
        $this->modelTaiKhoan = new AdminTaiKhoan();
        $this->modelDonHang = new AdminDonHang();
        $this->modelSanPham = new AdminSanPham();
    }

    public function danhSachQuanTri()
    {
        $listQuanTri = $this->modelTaiKhoan->getAllTaiKhoan(1);
        require_once './views/taikhoan/quantri/listQuantri.php';
    }

    public function formAddQuanTri()
    {
        require_once './views/taikhoan/quantri/addQuanTri.php';
        if (function_exists('deleteSessionErrors')) {
            deleteSessionErrors();
        }
    }

    public function postAddQuanTri()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ho_ten = trim($_POST['ho_ten'] ?? '');
            $email = trim($_POST['email'] ?? '');

            $errors = [];
            if (empty($ho_ten)) {
                $errors['ho_ten'] = 'Tên không được để trống';
            }
            if (empty($email)) {
                $errors['email'] = 'Email không được để trống';
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Email không hợp lệ';
            }
            $_SESSION['errors'] = $errors;

            if (empty($errors)) {
                $password = password_hash('123', PASSWORD_BCRYPT);
                $chuc_vu_id = 1;
                $this->modelTaiKhoan->insertTaiKhoan($ho_ten, $email, $password, $chuc_vu_id);
                header("Location: " . BASE_URL_ADMIN . '?act=list-tai-khoan-quan-tri');
                exit();
            } else {
                $_SESSION['flash'] = true;
                header("Location: " . BASE_URL_ADMIN . '?act=form-them-quan-tri');
                exit();
            }
        }
    }

    public function formEditQuanTri()
    {
        $quan_tri_id = $_GET['id_quan_tri'] ?? '';
        $quanTri = $this->modelTaiKhoan->getDetailTaiKhoan($quan_tri_id);
        require_once './views/taikhoan/quantri/editQuanTri.php';
        if (function_exists('deleteSessionErrors')) {
            deleteSessionErrors();
        }
    }

    public function postEditQuanTri()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $quan_tri_id = $_POST['quan_tri_id'] ?? '';
            $ho_ten = trim($_POST['ho_ten'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $so_dien_thoai = trim($_POST['so_dien_thoai'] ?? '');
            $trang_thai = $_POST['trang_thai'] ?? '';

            $errors = [];
            if (empty($ho_ten)) {
                $errors['ho_ten'] = 'Tên người dùng không được để trống';
            }
            if (empty($email)) {
                $errors['email'] = 'Email người dùng không được để trống';
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Email không hợp lệ';
            }
            if (empty($trang_thai)) {
                $errors['trang_thai'] = 'Vui lòng chọn trạng thái';
            }
            $_SESSION['errors'] = $errors;

            if (empty($errors)) {
                $this->modelTaiKhoan->updateTaiKhoan($quan_tri_id, $ho_ten, $email, $so_dien_thoai, $trang_thai);
                header("Location: " . BASE_URL_ADMIN . '?act=list-tai-khoan-quan-tri');
                exit();
            } else {
                $_SESSION['flash'] = true;
                header("Location: " . BASE_URL_ADMIN . '?act=form-sua-quan-tri&id_quan_tri=' . $quan_tri_id);
                exit();
            }
        }
    }

    public function resetPassword()
    {
        $tai_khoan_id = $_GET['id_quan_tri'] ?? '';
        $tai_khoan = $this->modelTaiKhoan->getDetailTaiKhoan($tai_khoan_id);
        $password = password_hash('123', PASSWORD_BCRYPT);

        $status = $this->modelTaiKhoan->resetPassword($tai_khoan_id, $password);
        if ($status) {
            $redirect = isset($tai_khoan['chuc_vu_id']) && $tai_khoan['chuc_vu_id'] == 1 ? 'list-tai-khoan-quan-tri' : 'list-tai-khoan-khach-hang';
            header('Location: ' . BASE_URL_ADMIN . '?act=' . $redirect);
            exit();
        } else {
            die('Lỗi khi reset tài khoản');
        }
    }

    public function formLogin()
    {
        if (isset($_SESSION['user_admin'])) {
            header('Location:' . BASE_URL_ADMIN);
            exit();
        }
        require_once './views/auth/formLogin.php';
        if (function_exists('deleteSessionErrors')) {
            deleteSessionErrors();
        }
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = trim($_POST['email'] ?? '');
            $password = $_POST['password'] ?? '';

            $user = $this->modelTaiKhoan->checkLogin($email, $password);
            if ($user && is_array($user)) {
                $_SESSION['user_admin'] = $user;
                header("Location:" . BASE_URL_ADMIN);
                exit();
            } else {
                $_SESSION['errors'] = ['login' => 'Email hoặc mật khẩu không đúng'];
                $_SESSION['flash'] = true;
                header("Location:" . BASE_URL_ADMIN . '?act=login-admin');
                exit();
            }
        }
    }

    public function logout()
    {
        unset($_SESSION['user_admin']);
        header('Location:' . BASE_URL_ADMIN . '?act=login-admin');
        exit();
    }
}
