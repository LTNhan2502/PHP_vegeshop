<?php
    $act = "admin_khachhang_list";
    if(isset($_GET['act'])){
        $act = $_GET['act'];
    }
    switch($act){
        case "admin_khachhang_list":
            include_once "View/admin_khachhang_list.php";
            break;
        case "insert_khachhang":
            include_once "View/admin_insert_khachhang.php";
            break;
        case "insert_action":
            //Insert nhưng thật ra là đăng kí. Khi thêm 1 tài khoản người dùng, chỉ khi người dùng
            //có nhu cầu mới đăng kí và từ đó thông tin sẽ được insert vào batabase. Sẽ có ít trường hợp
            //tự thân admin insert 1 tài khoản user vào database
            $tenkh = '';
            $diachi = '';
            $sodt = '';
            $username = '';
            $email = '';
            $pass = '';
            if(isset($_POST['submit'])){
                $tenkh = $_POST['txttenkh'];
                $diachi = $_POST['txtdiachi'];
                $sodt = $_POST['txtsdt'];
                $username = $_POST['txtusername'];
                $email = $_POST['txtemail'];
                $pass = $_POST['txtpass'];
                $salfF = "G435#";
                $salfL = "T34a!&";
                $passnew = md5($salfF.$pass.$salfL);
                //Controller yêu cầu model insert vào database
                //Trước khi insert thì kiểm tra xem user và email đã từng được đăng ký chưa
                $kh = new user();
                $check = $kh->checkUser($username, $email)->rowCount();
                if($check >= 1){
                    echo "<script> alert('Username or email already existed'); </script>";
                    echo '<meta http-equiv="refresh" content="0;url=../BTCK_PHP/admin_index.php?action=admin_khachhang_list&act=insert_khachhang"/>';
                    //Để khi mình đăng kí thất bại thì nó sẽ tự động quay trở lại trang đăng ký
                }else{
                    //insert vào database
                    $insertkh = $kh->insertKH($tenkh, $username, $passnew, $email, $diachi, $sodt);
                    if($insertkh !== false){
                        echo "<script> alert('Add anew successfully'); </script>";
                        include_once "./View/admin_khachhang_list.php";
                    }else{
                        echo "<script> alert('Failed to add anew'); </script>";
                        echo '<meta http-equiv="refresh" content="0;url=../BTCK_PHP/admin_index.php?action=admin_khachhang_list&act=insert_khachhang"/>';
                    }
                }
            }
            break;
        case "update_khachhang":
            include_once "View/admin_insert_khachhang.php";
            break;
        case "update_action":
            if(isset($_POST['submit'])){
                $idkh = $_POST['txtidkh'];
                $tenkh = $_POST['txttenkh'];
                $email = $_POST['txtemail'];
                $username = $_POST['txtusername'];
                $diachi = $_POST['txtdiachi'];
                $sdt = $_POST['txtsdt'];
                //Chỉnh sửa
                $kh = new user();
                $check = $kh->updateKHAdmin($idkh, $tenkh, $username, $diachi, $sdt, $email);
                if($check !== false){
                    echo "<script> alert('Updated successfully'); </script>";
                    echo '<meta http-equiv="refresh" content="0;url=../BTCK_PHP/admin_index.php?action=admin_khachhang_list"/>';
                }else{
                    echo "<script> alert('Failed to update'); </script>";
                    include_once "View/admin_khachhang_list.php";
                }
            }
            break;
        case "delete_khachhang":
            if(isset($_GET['id'])){
                $idkh = $_GET['id'];
                $kh = new user();
                $check = $kh->deleteKHAdmin($idkh);
                if($check !== false){
                    echo "<script> alert('Deleted successfully'); </script>";
                    echo '<meta http-equiv="refresh" content="0;url=../BTCK_PHP/admin_index.php?action=admin_khachhang_list"/>';
                }else{
                    echo "<script> alert('Failed to delete'); </script>";
                    include_once "View/admin_khachhang_list.php";
                }
            }
            break;
    }
?>