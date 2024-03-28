<?php
    $act = "admin_hoadon_list";
    if(isset($_GET['act'])){
        $act = $_GET['act'];
    }

    switch($act){
        case "admin_hoadon_list":
            include_once "View/admin_hoadon_list.php";
            break;
        case "insert_hoadon":
            include_once "View/admin_insert_hoadon.php";
            break;
        case "update_action":
            if(isset($_POST['submit'])){
                $idhd = $_POST['idhd'];
                $idkh = $_POST['idkh'];
                $ngaylap = $_POST['ngaylap'];
                $tongtien = $_POST['tongtien'];
                $hd = new hoadon();
                $check = $hd->updateHDAdmin($idhd, $ngaylap, $tongtien);
                if($check !== false){
                    echo "<script> alert('Updated successfully'); </script>";
                    echo '<meta http-equiv="refresh" content="0;url=../BTCK_PHP/admin_index.php?action=admin_hoadon_list"/>';
                }else{
                    echo "<script> alert('Failed to update'); </script>";
                    include_once "View/admin_hoadon_list.php";
                }
            }
            break;
        case "update_hoadon":
            include_once "View/admin_insert_hoadon.php";
            break;
        case "delete_hoadon":
            if(isset($_GET['id'])){
                $idhd = $_GET['id'];
                $hd = new hoadon();
                $check = $hd->deleteHDAdmin($idhd);
                if($check !== false){
                    echo "<script> alert('Deleted successfully'); </script>";
                    echo '<meta http-equiv="refresh" content="0;url=../BTCK_PHP/admin_index.php?action=admin_hoadon_list"/>';
                }else{
                    echo "<script> alert('Failed to deleted'); </script>";
                    include_once "View/admin_hoadon_list.php";
                }
            }
            break;
    }
?>