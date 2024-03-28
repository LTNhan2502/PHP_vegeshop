<?php
    class user{
        //Phương thức kiểm tra user và email đã tồn tại hay chưa
        function checkUser($user, $email){
            $db = new connect();
            $select = "SELECT khachhang.username, khachhang.tenkh FROM khachhang WHERE khachhang.username = '$user' OR khachhang.email = '$email'";
            $result = $db->getList($select);
            return $result;
        }

        //Thực hiện insert vào database
        function insertKH($tenkh, $username, $matkhau, $email, $diachi, $sodt){
            $db = new connect();
            $query = "INSERT INTO khachhang (idkh, tenkh, diachi, sdt, username, email, matkhau) VALUES (NULL, '$tenkh', '$diachi', '$sodt', '$username', '$email', '$matkhau')";
            //exec
            $result = $db->exec($query);
            return $result;
        }

        //Phương thức thực hiện đăng nhập
        function logKH($user, $pass){
            $db = new connect();
            $select = "SELECT khachhang.idkh, khachhang.tenkh, khachhang.username FROM khachhang WHERE khachhang.username = '$user' AND khachhang.matkhau = '$pass'";
            $result = $db->getInstance($select);
            return $result;
        }

        //Phương thức kiểm tra email có tồn tại hay không
        function checkEmail($email){
            $db = new connect();
            $select = "select * from khachhang where khachhang.email='$email'";
            $result = $db->getList($select);
            return $result;
        }

        //Phương thức update email
        function updateEmail($email, $pass){
            $db = new connect();
            $query = "update KHACHHANG set matkhau = '$pass' where email = '$email'";
            echo $query;
            $db->exec($query);
        }

        //Phương thức lấy tài khoản admin
        function getAdmin($user, $pass){
            $db = new connect();
            $select = "select id, username, password from nhanvien where username='$user' and password='$pass'";
            $result = $db->getInstance($select);
            return $result;
        }

        //Phương thức thêm tài khoản admin mới
        function insertAdmin($fullname, $username, $email, $pass){
            $db = new connect();
            $query = "INSERT INTO nhanvien(id, fullname, username, email, password) VALUES (NULL, '$fullname', '$username', '$email', '$pass')";
            $result = $db->exec($query);
            return $result;
        }

        //Phương thức kiểm tra user và email trong table nhanvien đã tồn tại hay chưa
        function checkAdmin($username, $email){
            $db = new connect();
            $select = "SELECT nhanvien.username, nhanvien.fullname FROM nhanvien WHERE nhanvien.username = '$username' OR nhanvien.email = '$email'";
            $result = $db->getList($select);
            return $result;
        }

        //Phương thức lấy ra tất cả thông tin của người dùng
        function getKHAdmin(){
            $db = new connect();
            $select = "SELECT * FROM khachhang WHERE deleted_at IS null";
            $result = $db->getList($select);
            return $result;
        }

        //Phương thức lấy id của khách hàng
        function getKHAdminID($idkh){
            $db = new connect();
            $select = "SELECT * FROM khachhang WHERE idkh = $idkh";
            $result = $db->getInstance($select);
            return $result;
        }

        //Phương thức thêm khách hàng mới (dùng lại phương thức insertKH ở phía trên)
        function insertKHAdmin($tenkh, $username, $diachi, $sdt, $email){
            $db = new connect();
            $query = "INSERT INTO khachhang(idkh, tenkh, username, daichi, sdt, email) VALUES (null, '$tenkh', '$username', '$diachi', $sdt, '$email')";
            $result = $db->exec($query);
            return $result;
        }

        //Phương thức cập nhật thông tin khách hàng
        function updateKHAdmin($idkh, $tenkh, $username, $diachi, $sdt, $email){
            $db = new connect();
            $query = "UPDATE khachhang SET tenkh = '$tenkh', username = '$username', diachi = '$diachi', sdt = $sdt, email = '$email' WHERE idkh = $idkh";
            $result = $db->exec($query);
            return $result;
        }

        //Phương thức xóa khách hàng
        function deleteKHAdmin($idkh){
            $db = new connect();
            $query = "UPDATE khachhang SET khachhang.deleted_at = CURRENT_TIMESTAMP WHERE khachhang.idkh = $idkh";
            $result = $db->exec($query);
            return $result;
        }
    }
?>