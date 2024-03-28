<?php
    $act = "admin_dangky";
    if(isset($_GET['act'])){
        $act = $_GET['act'];
    }
    switch($act){
        case "admin_dangky":
            include_once "./View/admin_register.php";
            break;
        case "dangky_action":
            //Chuyển toàn bộ thông tin về dangky_action
            //Nhận thông tin
            $fullname = '';
            $username = '';
            $email = '';
            $pass = '';
            $retypepass = '';
            if(isset($_POST['submit'])){
                $fullname = $_POST['txtfullname'];
                $username = $_POST['txtusername'];                
                $email = $_POST['txtemail'];
                $pass = $_POST['txtpass'];
                $retypepass = $_POST['txtretype'];
                $salfF = "G435#";
                $salfL = "T34a!&";
                $passnew = md5($salfF.$pass.$salfL);
                //Controller yêu cầu model insert vào database
                //Kiểm tra retypepass có trùng với pass không
                if($retypepass !== $pass){
                    echo "Retype password does not match";                    
                }
                //Trước khi insert thì kiểm tra xem user và email đã từng được đăng ký chưa
                $kh = new user();
                $check = $kh->checkAdmin($username, $email)->rowCount();
                if($check >= 1){
                    echo "<script> alert('Username hoặc email đã tồn tại'); </script>";
                    echo '<meta http-equiv="refresh" content="0;url=../BTCK_PHP/admin_index.php?action=admin_dangky"/>';
                    //Để khi mình đăng kí thất bại thì nó sẽ tự động quay trở lại trang đăng ký
                }else{
                    //insert vào database
                    $insertkh = $kh->insertAdmin($fullname,$username, $email, $passnew);
                    if($insertkh !== false){
                        echo "<script> alert('Đăng ký thành công'); </script>";
                        include_once "./View/admin_home.php";
                    }else{
                        echo "<script> alert('Đăng ký không thành công'); </script>";
                        echo '<meta http-equiv="refresh" content="0;url=../BTCK_PHP/admin_index.php?action=admin_dangky"/>';
                    }
                }
            }
            break;
    }
?>