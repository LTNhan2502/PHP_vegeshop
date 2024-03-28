<?php
    include_once "./View/dangky.php";
    $act = "dangky";
    if(isset($_GET['act'])){
        $act = $_GET['act'];
    }
    switch($act){
        case "dangky":
            include_once "./View/dangky.php";
            break;
        case "dangky_action":
            //Chuyển toàn bộ thông tin về dangky_action
            //Nhận thông tin
            $tenkh = '';
            $diachi = '';
            $sodt = '';
            $user = '';
            $email = '';
            $pass = '';
            if(isset($_POST['submit'])){
                $tenkh = $_POST['txttenkh'];
                $diachi = $_POST['txtdiachi'];
                $sodt = $_POST['txtsdt'];
                $user = $_POST['txttendn'];
                $email = $_POST['txtemail'];
                $pass = $_POST['txtpass'];
                $salfF = "G435#";
                $salfL = "T34a!&";
                $passnew = md5($salfF.$pass.$salfL);
                //Controller yêu cầu model insert vào database
                //Trước khi insert thì kiểm tra xem user và email đã từng được đăng ký chưa
                $kh = new user();
                $check = $kh->checkUser($user, $email)->rowCount();
                if($check >= 1){
                    echo "<script> alert('Username hoặc email đã tồn tại'); </script>";
                    echo '<meta http-equiv="refresh" content="0;url=../BTCK_PHP/index.php?action=dangky"/>';
                    //Để khi mình đăng kí thất bại thì nó sẽ tự động quay trở lại trang đăng ký
                }else{
                    //insert vào database
                    $insertkh = $kh->insertKH($tenkh, $user, $passnew, $email, $diachi, $sodt);
                    if($insertkh !== false){
                        echo "<script> alert('Đăng ký thành công'); </script>";
                        include_once "./View/home.php";
                    }else{
                        echo "<script> alert('Đăng ký không thành công'); </script>";
                        echo '<meta http-equiv="refresh" content="0;url=../BTCK_PHP/index.php?action=dangky"/>';
                    }
                }
            }
            break;
    }
?>