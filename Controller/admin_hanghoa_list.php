<?php
    $act = "admin_hanghoa_list";
    if(isset($_GET['act'])){
        $act = $_GET['act'];
    }
    switch ($act){
        case 'admin_hanghoa_list';
            include_once "View/admin_hanghoa_list.php";
            break;
        case 'insert_hanghoa':
            include_once "View/admin_insert_hanghoa.php";
            break;
        case 'insert_action':
            //Nhận thông tin về
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $mahh = $_POST['mahh'];
                $idloai = $_POST['idloai'];
                $tenhh = $_POST['tenhh'];
                $mota =$_POST['mota'];
                $ngaytao = $_POST['ngaytao'];
                //Đem insert vào database 
                $hh = new hanghoa();
                $check = $hh->insertHangHoa($tenhh, $idloai, $mota, $ngaytao);
                if($check !== false){
                    echo "<script> alert('Add anew successfully'); </script>";
                    echo '<meta http-equiv="refresh" content="0;url=../BTCK_PHP/admin_index.php?action=admin_hanghoa_list"/>';
                }else{
                    echo '<script>alert("Failed to add anew");</script>';
                    include_once "./View/admin_insert_hanghoa.php";
                }
            }
            break;
        case 'update_hanghoa':
            include_once "View/admin_insert_hanghoa.php";
            break;
        case 'update_action':
             //Nhận thông tin về
             if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $mahh = $_POST['mahh'];
                $idloai = $_POST['idloai'];
                $tenhh = $_POST['tenhh'];
                $mota =$_POST['mota'];
                $ngaytao = $_POST['ngaytao'];
                //Đem insert vào database 
                $hh = new hanghoa();
                $check = $hh->updateHangHoaAdmin($mahh, $tenhh, $idloai, $mota, $ngaytao);
                if($check !== false){
                    echo "<script> alert('Changed successfully'); </script>";
                    echo '<meta http-equiv="refresh" content="0;url=../BTCK_PHP/admin_index.php?action=admin_hanghoa_list"/>';
                }else{
                    echo '<script>alert("Failed to change");</script>';
                    include_once "./View/admin_insert_hanghoa.php";
                }
            }
            break;
        case 'delete_hanghoa':
            if(isset($_GET['id'])){
                $mahh = $_GET['id'];
                $hh = new hanghoa();
                $check = $hh->deleteHangHoa($mahh);
                if($check !== false){
                    echo "<script> alert('Deleted successfully'); </script>";
                    echo '<meta http-equiv="refresh" content="0;url=../BTCK_PHP/admin_index.php?action=admin_hanghoa_list"/>';
                }else{
                    echo '<script>alert("Failed to delete");</script>';
                    include_once "./View/admin_hanghoa_list.php";
                }
            }
            break;
        
            
    }
?>