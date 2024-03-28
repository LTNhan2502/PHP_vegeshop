<?php
    class giohang{
        //Phương thức add hàng
        function addHangHoa($mahh, $soLuong){
            //Thiếu hình, tên, giá, thành tiền
            $sanpham = new hanghoa();
            $sp = $sanpham->getHangHoaId($mahh); //Trả về 1 dòng, đã được fetch -> là array
            $tenhh = $sp['tenhh'];
            $dongia = $sp['dongia'];
            $total = $soLuong * $dongia;
            //Lấy hình
            $hinh = $sanpham->getHangHoaHinh($mahh);
            $img = $hinh['hinh'];
            $mota = $hinh['mota'];
            $flag = false;
            //Vì giỏ hàng là object nên phải có thuộc tính
            //Trước khi thêm vào giỏ hàng cần kiểm tra xem hàng đó đã tồn tại chưa
            foreach($_SESSION['cart'] as $key => $item){
                if($item['mahh'] == $mahh){
                    $flag = true;
                    $soLuong += $item['soluong'];
                    $this->updateHH($key, $soLuong); //giohang::updateHH()
                }
            }
            if($flag == false){
                //Tạo đối tượng
                $item = array(
                    'mahh' => $mahh,
                    'hinh' => $img,
                    'mota' => $mota,
                    'tenhh' => $tenhh,
                    'dongia' => $dongia,
                    'soluong' => $soLuong,
                    'thanhtien' => $total
                );
                //Đem đối tượng ép vào giỏ hàng
                $_SESSION['cart'][] = $item;
                $sanpham->decreaseSLT($item['mahh'], $item['soluong']);                
            } 
        }

        //Phương thức update hàng hóa
        function updateHH($index, $soLuong){
            $mahh = $_SESSION['cart'][$index]['mahh'];
            $hh = new hanghoa();
            $check = $hh->ktSLT($mahh);
            if($check){
                echo "Đã hết hàng";
            } else {
                // Cập nhật số lượng sản phẩm trong giỏ hàng và giảm số lượng tồn xuống
                $diff = $_SESSION['cart'][$index]['soluong'] - $soLuong;
                $hanghoa = new hanghoa();
                $_SESSION['cart'][$index]['soluong'] = $soLuong;
                $_SESSION['cart'][$index]['thanhtien'] = $_SESSION['cart'][$index]['soluong'] * $_SESSION['cart'][$index]['dongia'];
                $hanghoa->decreaseSLT($mahh, $diff);
            }
        }

        //Phương thức updateHH() khi xóa sản phẩm trong cart
        function deleteHHCart($index, $soLuong){    
            $mahh = $_SESSION['cart'][$index]['mahh'];        
            // Xóa sản phẩm khỏi giỏ hàng và tăng số lượng tồn lên
            $hanghoa = new hanghoa();
            $hanghoa->increaseSLT($mahh, $soLuong);
            unset($_SESSION['cart'][$index]);
        }
        

        //Phương thức tính thành tiền
        function getSubTotal(){
            $subtotal = 0;
            foreach($_SESSION['cart'] as $item){
                $subtotal += $item['thanhtien'];
            }
            $subtotal = number_format($subtotal, 2);
            return $subtotal;
        }
    }
?>