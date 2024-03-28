<?php
    $act = "dangnhap";
    if(isset($_GET['act'])){
        $act = $_GET['act'];
    }
    switch($act){
        case 'dangnhap':
            include_once "./View/login.php";
            break;
        case 'dangnhap_action':
            //Gửi thông tin đăng nhập qua đây
            $user = '';
            $pass = '';
            if(isset($_POST['txttendn']) && isset($_POST['txtpass'])){
                $user = $_POST['txttendn'];
                $pass = $_POST['txtpass'];
                $salfF = "G435#";
                $salfL = "T34a!&";
                $passnew = md5($salfF.$pass.$salfL);
                //Controller yêu cầu kiểm tra xem có người này hay không
                $kh = new user();
                $logkh = $kh->logKH($user, $passnew);
                if($logkh){
                    //Nếu đăng nhập thành công thì lưu thông tin vào session
                    $_SESSION['makh'] = $logkh['idkh'];
                    $_SESSION['tenkh'] = $logkh['tenkh'];
                    echo "<script> alert('Đăng nhập thành công'); </script>";
                    echo '<meta http-equiv="refresh" content="0;url=../BTCK_PHP/index.php?action=home"/>';
                }else{
                    echo "<script> alert('Đăng nhập không thành công'); </script>";
                    echo '<meta http-equiv="refresh" content="0;url=../BTCK_PHP/index.php?action=dangnhap"/>';
                }
            }
            break;
        case 'dangxuat':
            unset($_SESSION['makh']);
            unset($_SESSION['tenkh']);
            echo '<meta http-equiv="refresh" content="0;url=../BTCK_PHP/index.php?action=home"/>';
            break;
    }
?>