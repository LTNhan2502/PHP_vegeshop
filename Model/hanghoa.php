<?php
    class hanghoa{
        function getHanghoaMoi(){
            //B1: kết nối với database
            $db = new connect();
            //B2: viết câu lệnh select lấy ra các dữ liệu mong muốn
            $select = "SELECT * FROM hanghoa, cthanghoa, loai WHERE hanghoa.mahh = cthanghoa.mahh AND loai.idloai = hanghoa.idloai AND cthanghoa.giamgia=0 AND hanghoa.deleted_at IS null ORDER BY hanghoa.mahh DESC LIMIT 8";
            //B3: Query thực hiện câu lệnh select, nằm trong getList, thuộc class connect;
            $result = $db->getList($select);
            return $result;
        }

        function getHanghoaSale(){
            //B1: kết nối với database
            $db = new connect();
            //B2: viết câu lệnh select lấy ra các dữ liệu mong muốn
            $select = "SELECT * FROM hanghoa, cthanghoa, loai WHERE hanghoa.mahh = cthanghoa.mahh AND loai.idloai = hanghoa.idloai AND cthanghoa.giamgia!=0  AND hanghoa.deleted_at IS null ORDER BY hanghoa.mahh DESC LIMIT 4;";
            //B3: Query thực hiện câu lệnh select, nằm trong getList, thuộc class connect;
            $result = $db->getList($select);
            return $result;
        }

        function getHanghoaAll(){
            //B1: kết nối với database
            $db = new connect();
            //B2: viết câu lệnh select lấy ra các dữ liệu mong muốn
            $select = "SELECT * FROM hanghoa, cthanghoa, loai WHERE hanghoa.mahh = cthanghoa.mahh AND loai.idloai = hanghoa.idloai AND hanghoa.deleted_at IS null";
            //B3: Query thực hiện câu lệnh select, nằm trong getList, thuộc class connect;
            $result = $db->getList($select);
            return $result;
        }

        function getHanghoaAllSale(){
            //B1: kết nối với database
            $db = new connect();
            //B2: viết câu lệnh select lấy ra các dữ liệu mong muốn
            $select = "SELECT * FROM hanghoa, cthanghoa, loai WHERE hanghoa.mahh = cthanghoa.mahh AND loai.idloai = hanghoa.idloai AND cthanghoa.giamgia!=0  AND hanghoa.deleted_at IS null";
            //B3: Query thực hiện câu lệnh select, nằm trong getList, thuộc class connect;
            $result = $db->getList($select);
            return $result;
        }

        function getHanghoaAllPage($start, $limit){
            //B1: kết nối với database
            $db = new connect();
            //B2: viết câu lệnh select lấy ra các dữ liệu mong muốn
            $select = "SELECT * FROM hanghoa, cthanghoa, loai WHERE hanghoa.mahh = cthanghoa.mahh AND loai.idloai = hanghoa.idloai AND hanghoa.deleted_at IS null ORDER BY hanghoa.mahh DESC LIMIT ".$start.",".$limit;
            //B3: Query thực hiện câu lệnh select, nằm trong getList, thuộc class connect;
            $result = $db->getList($select);
            return $result;
        }

        function getHangHoaId($id){
            $db = new connect();
            $select = "SELECT DISTINCT hanghoa.mahh, hanghoa.tenhh, hanghoa.mota, cthanghoa.dongia, cthanghoa.hinh, cthanghoa.soluongton FROM hanghoa, cthanghoa WHERE hanghoa.mahh=cthanghoa.mahh AND hanghoa.mahh=$id";
            $result = $db->getInstance($select);
            return $result;
        }

        // function getHangHoaSize($id){
        //     $db = new connect();
        //     $select ="SELECT DISTINCT size.idsize, size.size FROM cthanghoa, size WHERE cthanghoa.idsize=size.idsize AND cthanghoa.mahh=$id";
        //     $result=$db->getInstance($select);
        //     return $result;
        // }

        //Lấy hình dựa vào id
        function getHangHoaHinh($id){
            $db = new connect();
            $select = "SELECT DISTINCT cthanghoa.dongia, hanghoa.mota, cthanghoa.hinh FROM cthanghoa, hanghoa WHERE hanghoa.mahh=cthanghoa.mahh AND cthanghoa.mahh=$id";
            $result = $db->getInstance($select);
            return $result;
        }

        //Phương thức giảm số lượng hàng tồn kho của sản phẩm
        function increaseSLT($mahh, $slcart){
            $db = new connect();
            $query = "UPDATE cthanghoa SET cthanghoa.soluongton = cthanghoa.soluongton + $slcart WHERE cthanghoa.mahh = $mahh";
            $result = $db->exec($query);
            return $result;
        }

        //Phương thức giảm số hàng tồn kho của sản phẩm
        function decreaseSLT($mahh, $slcart){
            $db = new connect();
            $query = "UPDATE cthanghoa SET cthanghoa.soluongton = cthanghoa.soluongton - $slcart WHERE cthanghoa.mahh = $mahh";
            $result = $db->exec($query);
            return $result;
        }
        
        //Phương thức kiểm tra số lượng tồn
        function ktSLT($mahh){
            $db = new connect();
            $select= "SELECT * FROM cthanghoa WHERE soluongton = 0 AND mahh = $mahh";
            $result = $db->getInstance($select);
            return $result;
        }

        //Phương thức tìm kiếm sản phẩm
        function timkiemSP($timkiem){
            //B1: Kết nối tới CSDL
            $db = new connect();
            //B2: Cần lấy cái gì thì truy cập vào lấy cái đó
            $select = "SELECT hanghoa.tenhh, hanghoa.mahh, cthanghoa.hinh, cthanghoa.dongia, cthanghoa.giamgia FROM hanghoa, cthanghoa WHERE hanghoa.mahh = cthanghoa.mahh AND hanghoa.tenhh LIKE '%$timkiem%' AND hanghoa.deleted_at IS null ORDER BY hanghoa.mahh DESC;";
            //B3: Tạo đối tượng gọi phương thức. Vì queey nằm trong 2 phương thức getList và getInstance,
            // mà 2 phương thức này nằm trong connect
            $result = $db->getList($select);
            return $result;
        }

        //Phương thức lấy hàng hóa cho trang admin
        function getHangHoaAdmin(){
            $db = new connect();
            $select = "SELECT * FROM hanghoa WHERE hanghoa.deleted_at IS null";
            $result = $db->getList($select);
            return $result;
        }

        //Phương thức thêm hàng hoá
        function insertHangHoa($tenhh, $idloai, $mota, $ngaytao){
            $db = new connect();
            $query = "INSERT INTO hanghoa(mahh, tenhh, idloai, mota, ngaytao) VALUES (NULL, '$tenhh', $idloai, '$mota', '$ngaytao')";
            $result = $db->exec($query);
            return $result;
        }

        //Phương thức lấy thông tin môt sản phẩm
        function getHangHoaAdminID($id){
            $db = new connect();
            $select = "SELECT * FROM hanghoa WHERE mahh=$id";
            $result = $db->getInstance($select);
            return $result;
        }

        //Phương thức cập nhật hàng hóa
        function updateHangHoaAdmin($mahh, $tenhh, $idloai, $mota, $ngaytao){
            $db = new connect();
            $query = "UPDATE hanghoa SET tenhh='$tenhh', idloai='$idloai', mota='$mota', ngaytao='$ngaytao' WHERE mahh='$mahh'";
            $result = $db->exec($query);
            return $result;
        }

        //Phương thức xóa hàng hóa (soft delete)
        function deleteHangHoa($mahh){
            $db = new connect();
            $query = "UPDATE hanghoa SET hanghoa.deleted_at = CURRENT_TIMESTAMP WHERE hanghoa.mahh = $mahh";
            $result = $db->exec($query);
            return $result;
        }

        //Phương thức lấy thông tin cthanghoa
        function getCthanghoaAdmin(){
            $db = new connect();
            $select = "SELECT * FROM cthanghoa WHERE cthanghoa.deleted_at IS null";
            $result = $db->getList($select);
            return $result;
        }

        //Phương thức thêm cthanghoan
        function insertCTHHAdmin($hinh, $dongia, $giamgia, $slt){
            $db = new connect();
            $query = "INSERT INTO cthanghoa(mahh, hinh, dongia, giamgia, soluongton) VALUES (null, '$hinh', $dongia, $giamgia, $slt)";
            $result = $db->exec($query);
            return $result;
        }

        //Phương thức lấy thông tin của một cthanghoa
        function getCTHHAdminID($id){
            $db = new connect();
            $select = "SELECT * FROM cthanghoa WHERE mahh=$id";
            $result = $db->getInstance($select);
            return $result;
        }

        //Phương thức cập nhật thông tin của một cthanghoa
        function updateCTHHAdmin($mahh, $hinh, $dongia, $giamgia, $slt){
            $db = new connect();
            $query = "UPDATE cthanghoa SET mahh = $mahh, hinh = '$hinh', dongia = $dongia, giamgia = $giamgia, soluongton = $slt WHERE mahh = $mahh";
            $result = $db->exec($query);
            return $result;
        }

        //Phương thức xóa cthanghoa (soft delete)
        function deleteCTHHAdmin($mahh){
            $db = new connect();
            $query = "UPDATE cthanghoa SET cthanghoa.deleted_at = CURRENT_TIMESTAMP WHERE cthanghoa.mahh = $mahh";
            $result = $db->exec($query);
            return $result;
        }

        //Phương thức thực hiện thống kê
        function getThongkeAdmin(){
            $db = new connect();
            $select = "SELECT hanghoa.tenhh, SUM(cthoadon.thanhtien) as tongtien FROM cthoadon, hanghoa WHERE cthoadon.mahh=hanghoa.mahh GROUP BY hanghoa.tenhh";
            $result = $db->getList($select);
            return $result;
        }

        //Phương thức lấy sp đã bị xóa
        function getTrash(){
            $db = new connect();
            $select = "SELECT * FROM hanghoa WHERE hanghoa.deleted_at IS NOT null";
            $result = $db->getList($select);
            return $result;
        }

        //Phương thức khôi phục sp đã xóa
        function restoreAdmin($id){
            $db = new connect();
            $query = "UPDATE hanghoa SET hanghoa.deleted_at = null WHERE hanghoa.mahh = $id";
            $result = $db->exec($query);
            return $result;
        }

        //Phương thức xóa hoàn toàn 1 sp
        function deleteAdmin($id){
            $db = new connect();
            $query = "DELETE FROM hanghoa WHERE hanghoa.deleted_at IS NOT null AND hanghoa.mahh = $id";
            $result = $db->exec($query);
            return $result;
        }
    }
?>