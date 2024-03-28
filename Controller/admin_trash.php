<?php
    $act = "admin_trash";
    if(isset($_GET['act'])){
        $act = $_GET['act'];
    }
    switch($act){
        case 'admin_trash':
            include_once "View/admin_trash.php";
            break;
        case 'update_hanghoa':
            if(isset($_GET['id'])){
                $mahh = $_GET['id'];
                $hh = new hanghoa();
                $check = $hh->restoreAdmin($mahh);
                if($check){
                    echo '<script>alert("Restore successfully");</script>';
                    echo '<meta http-equiv="refresh" content="0;url=../BTCK_PHP/admin_index.php?action=admin_trash"/>';
                }else{
                    echo '<script>alert("Failed to restore");</script>';
                    include_once "./View/admin_trash.php";
                }
            }
            break;
        case 'delete_hanghoa':
            if(isset($_GET['id'])){
                $mahh = $_GET['id'];
                $hh = new hanghoa();
                $check = $hh->deleteAdmin($mahh);
                if($check){
                    echo '<script>alert("Delete successfully")</script>';
                    echo '<meta http-equiv="refresh" content="0;url=../BTCK_PHP/admin_index.php?action=admin_trash"/>';
                }else{
                    echo '<script>alert("Failed to delete")</script>';
                    include_once "./View/admin_trash.php";
                }
            }
            break;
    }
?>