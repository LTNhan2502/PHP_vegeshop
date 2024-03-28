<?php
    function uploadimage(){
        //B1: Tạo đường dẫn chứa hình
        $target_dir = "../PHP2/CuoiKy/BTCK_PHP/Content/images";
        //B2: Lấy tên hình từ server về gán vào trong đường dẫn trên
        $target_file = $target_dir.basename($_FILES['image']['name']);
        //Kiểm tra xem hình đã được up lên server chưa
        $upload = 1;
        if(isset($_POST['submit'])){
            $check = getimagesize($_FILES['image']['tmp_name']);
            //$check = $_FILES['image']['size']
            if($check !== false){
                $upload = 1;
            }else{
                $upload = 0;
            }            
        }
        //Kiểm tra xem có tồn tại hay không
        if(file_exists($target_file)){
            echo "<script> alert('Already exist'); </script>";
            $upload = 0;    
        }
        //Kiểm tra xem hình lấy từ server về có vượt quá dung lượng cho phép không
        //500kb = 500000b
        if($_FILES['image']['size']>500000){
            echo "<script> alert('Your image is too large to upload'); </script>";
            $upload = 0;
        }
        //Kiểm tra xem phần mở rộng có phải là hình hay không
        $imagefileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if($imagefileType !== 'jpg' && $imagefileType != 'jpeg' && $imagefileType != 'png' && $imagefileType != 'gif'){
            echo "<script> alert('Not an image'); </script>";
            $upload = 0;
        }
        //Tiến hành upload
        if($upload == 1){
            if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file)){
                echo "<script> alert('Uploaded your image successfully'); </script>";           
            }else{
                echo "<script> alert('Failed to upload your image'); </script>";           
            }
        }
    }
?>