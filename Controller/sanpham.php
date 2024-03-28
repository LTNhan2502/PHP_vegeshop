<?php
//Controller gọi view sanpham
    // include_once "./View/sanpham.php"
    $act = "sanpham";
    //Contrller điều phối tới những view khác thông qua 1 biến tên là act
    if(isset($_GET['act'])){
        $act = $_GET['act']; //sanphamkhuyenmai
    }
    switch($act){
        case "sanpham":
            include_once "./View/sanpham.php";
            break;
        case "sanphamkhuyenmai":
            include_once "./View/sanpham.php";
            break;
        case "sanphamchitiet":
            include_once "./View/chitietsanpham.php";
            break;
        case "timkiem":
            //Nhận giá trị người dùng gõ tìm kiếm vào và tìm kiếm trên sản phẩm
            include_once "./View/sanpham.php";
            break;
    }

?>