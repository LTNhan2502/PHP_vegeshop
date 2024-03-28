<?php
$act = 'admin_cthanghoa_list';
    if(isset($_GET['act'])){
        $act = $_GET['act'];
    }
    switch($act){
        case 'admin_cthanghoa_list':
            include_once "View/admin_cthanghoa_list.php";
            break;
        case 'insert_cthanghoa':
            include_once "View/admin_insert_cthanghoa.php";
            break;
        case "insert_action":
            if(isset($_POST['submit'])){
                $mahh = $_POST['mahh'];
                $dongia = $_POST['dongia'];
                $giamgia = $_POST['giamgia'];
                $slt = $_POST['slt'];
                $hinh = $_FILES['image']['name'];
                //Đưa vào database
                $cthh = new hanghoa();
                $checkInsert = $cthh->insertCTHHAdmin($hinh, $dongia, $giamgia, $slt);
                if($checkInsert !== false){
                    uploadImage();
                    echo "<script> alert('Add anew successfully'); </script>";
                    echo '<meta http-equiv="refresh" content="0;url=../BTCK_PHP/admin_index.php?action=admin_cthanghoa_list"/>';
                }
            }
            break;
        case "update_cthanghoa":
            include_once "View/admin_insert_cthanghoa.php";
            break;
        case "update_action":
            if(isset($_POST['submit'])){
                $mahh = $_POST['mahh'];
                $hinh = $_FILES['image']['name'];
                $dongia = $_POST['dongia'];
                $giamgia = $_POST['giamgia'];
                $slt = $_POST['slt'];
                $hh = new hanghoa();
                $check = $hh->updateCTHHAdmin($mahh, $hinh, $dongia, $giamgia, $slt);
                if($check !== false){
                    echo "<script> alert('Updated successfully'); </script>";
                    echo '<meta http-equiv="refresh" content="0;url=../BTCK_PHP/admin_index.php?action=admin_cthanghoa_list"/>';
                }else{
                    echo "<script> alert('Failed to update'); </script>";
                    include_once "View/admin_cthanghoa_list.php";
                }
            }
            break;
        case "delete_cthanghoa":
            if(isset($_GET['id'])){
                $mahh = $_GET['id'];
                $hh = new hanghoa();
                $check = $hh->deleteCTHHAdmin($mahh);
                if($check !== false){
                    echo "<script> alert('Deleted successfully'); </script>";
                    echo '<meta http-equiv="refresh" content="0;url=../BTCK_PHP/admin_index.php?action=admin_cthanghoa_list"/>';
                }else{
                    echo "<script> alert('Failed to delete'); </script>";
                    include_once "View/admin_cthanghoa_list.php";                
                }
            }
            break;
    }
?>