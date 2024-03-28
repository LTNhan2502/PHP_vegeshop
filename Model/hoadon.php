<?php
    class hoadon{
        function insertHD($makh){
            $db = new connect();
            $date = new DateTime('now');
            $ngay = $date->format('Y-m-d');  //Vì trong dbs là y-m-d
            $query = "insert into hoadon(idhd, idkh, ngaylap, tongtien) values (null, $makh, '$ngay', 0)";
            $db->exec($query);
            //Đã chèn xong vào bảng hóa đơn, sinh ra mã số hóa đơn
            $select = "select idhd from hoadon order by idhd desc limit 1";
            $idhd = $db->getInstance($select); //masohd
            return $idhd[0]; //Trả về mảng $idhd = array[0]

        }

        //Phương thức insert vào bảng cthoadon
        function insertCTHD($idhd, $mahh, $soluongmua, $thanhtien){
            $db = new connect();
            $query = "INSERT INTO cthoadon(idhd, mahh, soluongmua, thanhtien, tinhtrang) VALUES ($idhd, $mahh, $soluongmua, $thanhtien, 0)";
            $db->exec($query);
        }

        //Phương thức cập nhật tổng tiền
        function updateTongTien($idhd, $idkh, $tongtien){
            $db = new connect();
            $query = "update hoadon set tongtien =$tongtien where idhd = $idhd and idkh = $idkh";
            $db->exec($query);
        }

        //Phương thức lấy thông tin khách hàng mua hàng dựa vào mã số hóa đơn
        function selectThongTinKH($idhd){
            $db = new connect();
            $select = "SELECT hoadon.idhd, khachhang.tenkh, khachhang.sdt, hoadon.ngaylap, khachhang.diachi, khachhang.email FROM hoadon, khachhang WHERE hoadon.idkh=khachhang.idkh AND hoadon.idhd=$idhd";
            $result = $db->getInstance($select);
            return $result;
        }

        //Phương thức lấy thông tin hàng trên hóa đơn, xem trên hóa đơn có bao nhiêu hàng
        public function selectThongTinHoaDon($idhd){
            $db = new connect();
            $select = "SELECT DISTINCT hanghoa.tenhh, cthanghoa.dongia, cthoadon.soluongmua FROM hanghoa, cthanghoa, cthoadon WHERE hanghoa.mahh=cthanghoa.mahh AND hanghoa.mahh=cthoadon.mahh AND cthoadon.mahh=$idhd";
            $result = $db->getList($select);
            return $result;
        }

        //Phương thức lấy thông tin hoadon
        function getHDAdmin(){
            $db = new connect();
            $select = "SELECT * FROM hoadon WHERE deleted_at IS null";
            $result = $db->getList($select);
            return $result;
        }

        //Phương thức lấy thông tin của một hoadon
        function getHDAdminID($idhd){
            $db = new connect();
            $select = "SELECT * FROM hoadon WHERE idhd = $idhd";
            $result = $db->getInstance($select);
            return $result;
        }

        //Phương thức chỉnh sửa hóa đơn
        function updateHDAdmin($idhd, $ngaylap, $tongtien){
            $db = new connect();
            $query = "UPDATE hoadon SET hoadon.ngaylap = '$ngaylap', hoadon.tongtien = $tongtien WHERE hoadon.idhd = $idhd";
            $result = $db->exec($query);
            return $result;
        }

        //Phương thức xóa hóa đơn
        function deleteHDAdmin($idhd){
            $db = new connect();
            $query = "UPDATE hoadon SET hoadon.deleted_at = CURRENT_TIMESTAMP WHERE hoadon.idhd = $idhd";
            $result = $db->exec($query);
            return $result;
        }
    }
?>