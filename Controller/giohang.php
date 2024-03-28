<?php
// unset($_SESSION['cart']);
//Trước khi điều hướng qua view, kiểm tra người dùng đã có giỏ hàng chưa
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array(); //Chứa nhiều hàng, mỗi hàng là 1 object
}
$act = 'giohang';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'giohang':
        include_once "./View/cart.php";
        break;
    case 'giohang_action':
        //Những thông tin cần mua
        //Nhận mahh, soluong
        $mahh = 0;
        $soLuong = 0;
        if (isset($_POST['mahh'])) {
            $mahh = $_POST['mahh'];
            // $tenhh = $_POST['tenhh'];
            $soLuong = $_POST['quantity'];
            //Controller yêu cầu model add thông tin này vào trong giỏ hàng
            $gh = new giohang();
            $gh->addHangHoa($mahh, $soLuong);
            echo '<meta http-equiv="refresh" content="0;url=../BTCK_PHP/index.php?action=giohang"/>';
        }
        break;
    case 'delete_cart':
        // Nhận id
        if (isset($_GET['id'])) {
            $gh = new giohang();
            $vt = $_GET['id'];
            $slton = $_SESSION['cart'][$vt]['soluong']; 
            $gh->deleteHHCart($vt, $slton);           
            unset($_SESSION['cart'][$vt]);            
            echo '<meta http-equiv="refresh" content="0;url=../BTCK_PHP/index.php?action=giohang"/>';
        }
        break;
    case 'update_cart':
        //Người dùng nhấn submit chuyển thông tin tới server (tới action)
        if (isset($_POST['newqty'])) {
            $newqty = $_POST['newqty']; //$newqty = [0:1, 1:2, 2:3]; [1, 2, 4]
            //Dò trong newqty cái nào có số lượng khác với số lượng trong giỏ hàng thì update
            foreach ($newqty as $key => $value) {
                if ($_SESSION['cart'][$key]['soluong'] != $value) {
                    $gh = new giohang();
                    $gh->updateHH($key, $value);
                }
            }
        }
        echo '<meta http-equiv="refresh" content="0;url=../BTCK_PHP/index.php?action=giohang"/>';
        break;
}
