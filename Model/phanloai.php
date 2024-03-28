<?php
    class phanloai{
        function getFruits(){
            //B1: kết nối với database
            $db = new connect();
            //B2: viết câu lệnh select lấy ra các dữ liệu mong muốn
            $select = "SELECT hanghoa.tenhh, cthanghoa.hinh, cthanghoa.dongia, cthanghoa.giamgia FROM hanghoa, cthanghoa, loai WHERE loai.idloai = 2 AND hanghoa.mahh = cthanghoa.mahh AND loai.idloai = hanghoa.idloai";
            //B3: Query thực hiện câu lệnh select, nằm trong getList, thuộc class connect;
            $result = $db->getList($select);
            return $result;
        }

        function getVegetables(){
            //B1: kết nối với database
            $db = new connect();
            //B2: viết câu lệnh select lấy ra các dữ liệu mong muốn
            $select = "SELECT hanghoa.tenhh, cthanghoa.hinh, cthanghoa.dongia, cthanghoa.giamgia FROM hanghoa, cthanghoa, loai WHERE loai.idloai = 1 AND hanghoa.mahh = cthanghoa.mahh AND loai.idloai = hanghoa.idloai";
            //B3: Query thực hiện câu lệnh select, nằm trong getList, thuộc class connect;
            $result = $db->getList($select);
            return $result;
        }

        function getJuices(){
            //B1: kết nối với database
            $db = new connect();
            //B2: viết câu lệnh select lấy ra các dữ liệu mong muốn
            $select = "SELECT hanghoa.tenhh, cthanghoa.hinh, cthanghoa.dongia, cthanghoa.giamgia FROM hanghoa, cthanghoa, loai WHERE loai.idloai = 3 AND hanghoa.mahh = cthanghoa.mahh AND loai.idloai = hanghoa.idloai";
            //B3: Query thực hiện câu lệnh select, nằm trong getList, thuộc class connect;
            $result = $db->getList($select);
            return $result;
        }

        function getDried(){
            //B1: kết nối với database
            $db = new connect();
            //B2: viết câu lệnh select lấy ra các dữ liệu mong muốn
            $select = "SELECT hanghoa.tenhh, cthanghoa.hinh, cthanghoa.dongia, cthanghoa.giamgia FROM hanghoa, cthanghoa, loai WHERE loai.idloai = 4 AND hanghoa.mahh = cthanghoa.mahh AND loai.idloai = hanghoa.idloai";
            //B3: Query thực hiện câu lệnh select, nằm trong getList, thuộc class connect;
            $result = $db->getList($select);
            return $result;
        }

        function getFruitsPage($start, $limit){
            //B1: kết nối với database
            $db = new connect();
            //B2: viết câu lệnh select lấy ra các dữ liệu mong muốn
            $select = "SELECT hanghoa.tenhh, hanghoa.mahh, cthanghoa.hinh, cthanghoa.dongia, cthanghoa.giamgia FROM hanghoa, cthanghoa, loai WHERE loai.idloai = 2 AND hanghoa.mahh = cthanghoa.mahh AND loai.idloai = hanghoa.idloai AND hanghoa.deleted_at IS null ORDER BY hanghoa.mahh DESC LIMIT ".$start.",".$limit;
            //B3: Query thực hiện câu lệnh select, nằm trong getList, thuộc class connect;
            $result = $db->getList($select);
            return $result;
        }

        function getVegetablesPage($start, $limit){
            //B1: kết nối với database
            $db = new connect();
            //B2: viết câu lệnh select lấy ra các dữ liệu mong muốn
            $select = "SELECT hanghoa.tenhh, hanghoa.mahh, cthanghoa.hinh, cthanghoa.dongia, cthanghoa.giamgia FROM hanghoa, cthanghoa, loai WHERE loai.idloai = 1 AND hanghoa.mahh = cthanghoa.mahh AND loai.idloai = hanghoa.idloai AND hanghoa.deleted_at IS null ORDER BY hanghoa.mahh DESC LIMIT ".$start.",".$limit;
            //B3: Query thực hiện câu lệnh select, nằm trong getList, thuộc class connect;
            $result = $db->getList($select);
            return $result;
        }

        function getJuicesPage($start, $limit){
            //B1: kết nối với database
            $db = new connect();
            //B2: viết câu lệnh select lấy ra các dữ liệu mong muốn
            $select = "SELECT hanghoa.tenhh, hanghoa.mahh, cthanghoa.hinh, cthanghoa.dongia, cthanghoa.giamgia FROM hanghoa, cthanghoa, loai WHERE loai.idloai = 3 AND hanghoa.mahh = cthanghoa.mahh AND loai.idloai = hanghoa.idloai AND hanghoa.deleted_at IS null ORDER BY hanghoa.mahh DESC LIMIT ".$start.",".$limit;
            //B3: Query thực hiện câu lệnh select, nằm trong getList, thuộc class connect;
            $result = $db->getList($select);
            return $result;
        }

        function getDriedPage($start, $limit){
            //B1: kết nối với database
            $db = new connect();
            //B2: viết câu lệnh select lấy ra các dữ liệu mong muốn
            $select = "SELECT hanghoa.tenhh, hanghoa.mahh, cthanghoa.hinh, cthanghoa.dongia, cthanghoa.giamgia FROM hanghoa, cthanghoa, loai WHERE loai.idloai = 4 AND hanghoa.mahh = cthanghoa.mahh AND loai.idloai = hanghoa.idloai AND hanghoa.deleted_at IS null ORDER BY hanghoa.mahh DESC LIMIT ".$start.",".$limit;
            //B3: Query thực hiện câu lệnh select, nằm trong getList, thuộc class connect;
            $result = $db->getList($select);
            return $result;
        }

        //Phương thức lấy loại ra trang admin
        function getLoai(){
            $db = new connect();
            $select = "SELECT * FROM loai WHERE loai.deleted_at IS null";
            $result = $db->getList($select);
            return $result;
        }

        //Phương thức xóa loại (soft delete)
        function deleteLoaiAdmin($idloai){
            $db = new connect();
            $query = "UPDATE loai SET loai.deleted_at = CURRENT_TIMESTAMP WHERE loai.idloai = $idloai";
            $result = $db->exec($query);
            return $result;
        }
    }
?>