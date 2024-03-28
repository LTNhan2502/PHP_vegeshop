<?php
    $act = "admin_dangnhap";
    if(isset($_GET['act'])){
        $act = $_GET['act'];
    }
    switch($act){
        case 'admin_dangnhap':
            include_once './View/admin_login.php';
            break;
        case 'dangnhap_action':
            //Truyền thông tin admin, 123123
            //Kiểm tra if(isset($_POST['txtusername']) && isset$_POST['txtpassword']))
            //Cách if(isset($_POST['login']))
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $user = $_POST['txtusername'];
                $pass = $_POST['txtpassword'];
                //Đem so sánh trong dbs xem có hay không
                $nv = new user();
                $check = $nv->getAdmin($user, $pass);
                if($check !== false){
                    $_SESSION['admin'] = $check['id'];
                    $_SESSION['tenadmin'] = $check['username'];
                    echo "<script> alert('Đăng nhập thành công'); </script>";
                    echo '<meta http-equiv="refresh" content="0;url=../BTCK_PHP/admin_index.php?action=admin_home"/>';
                }else{
                    echo '<script>alert("Đăng nhập không thành công");</script>';
                    include_once "./View/admin_login.php";
                }
            }
            break;
        case 'dangxuat_action':
            unset($_SESSION['admin']);
            unset($_SESSION['tenadmin']);
            echo '<meta http-equiv="refresh" content="0;url=../BTCK_PHP/admin_index.php?action=admin_home"/>';
            break;
        
    }
?>