<?php
    $act = "admin_loai_list";
    if(isset($_GET['act'])){
        $act = $_GET['act'];
    }
    switch ($act){
        case 'admin_loai_list':
            include_once "View/admin_loai_list.php";
            break;
        case 'insert_loai':
            include_once 'View/admin_insert_loai.php';
            break;
        case 'loai_action':
            if(isset($_POST['submit'])){
                //B1: lấy được file từ server ($_FILES)
                $file = $_FILES['image']['tmp_name'];
                //Lấy về vì nó là file csv nên có thêm các ký tự đặc biệt xBB, xEF, xBF
                file_put_contents($file, str_replace("\xEF\xBB\xBF", "", file_get_contents($file)));
                //B2: Thực hiện mở file ra
                $file_open = fopen($file, "r");
                //B3: Đọc nội dung trong file
                while(($csv = fgetcsv($file_open, 1000, ",")) !== false){
                    $idloai = $csv[0];
                    $tenloai = $csv[1];
                    $db = new connect();
                    $query = "INSERT INTO loai(idloai, tenloai) VALUES ($idloai, '$tenloai')";
                    $db->exec($query);
                }
                echo "<script> alert('Add anew successfully'); </script>";
                echo '<meta http-equiv="refresh" content="0;url=../BTCK_PHP/admin_index.php?action=admin_loai_list"/>';
            }
            break;
        case 'delele_loai':
            if(isset($_GET['id'])){
                $idloai = $_GET['id'];
                $hh = new phanloai();
                $check = $hh->deleteLoaiAdmin($idloai);
                if($check !== false){
                    echo "<script> alert('Deleted successfully'); </script>";
                    echo '<meta http-equiv="refresh" content="0;url=../BTCK_PHP/admin_index.php?action=admin_loai_list"/>';
                }else{
                    echo '<script>alert("Failed to delete");</script>';
                    include_once "./View/admin_loai_list.php";
                }
            }
            break;
    }
?>