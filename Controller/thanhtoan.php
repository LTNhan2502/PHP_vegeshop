<?php
    //Controller yêu cầu model thêm dữ liệu vào dbs
    if(isset($_SESSION['makh'])){
        $makh = $_SESSION['makh'];
        //Gọi mã số hóa đơn vừa chèn vào
        $hd = new hoadon();
        $sohd = $hd->insertHD($makh);
        //Lưu hóa đơn vừa thêm vào session
        $_SESSION['idhd'] = $sohd;
        $total = 0;
        //Tiến hành thêm dữ liệu từ giỏ hàng vào bảng cthoadon
        foreach($_SESSION['cart'] as $key => $item){
            //Controller yêu cầu model insert vào bảng cthoadon
            $hd->insertCTHD($sohd, $item['mahh'], $item['soluong'], $item['thanhtien']);
            $total += $item['thanhtien'];
            //Hàm cập nhật hàng tồn kho

        }
        //Khi insert xog cthoadon thì phải update tổng thành tiền vào bảng hóa đơn
        $hd->updateTongTien($sohd, $makh, $total);
    }
    // unset($_SESSION['cart']);
    include_once './View/hoadon.php';
?>