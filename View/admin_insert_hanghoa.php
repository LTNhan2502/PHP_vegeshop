<?php
if (isset($_GET['id'])) {
    $mahh = $_GET['id'];
    //Lấy thông tin của sản phẩm dựa vào id
    $hh = new hanghoa();
    $result = $hh->getHangHoaAdminID($mahh);
    $tenhh = $result['tenhh'];
    $idloai = $result['idloai'];
    $mota = $result['mota'];
    $ngaytao = $result['ngaytao'];
}
?>
 <?php
    $ac=1;
    if(isset($_GET['action']))
    {
        if(isset($_GET['act'])&& $_GET['act']=='insert_hanghoa')
        {
            $ac=1;
        }
        else
        {
            $ac=2;
        }
    }
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <?php
        if($ac === 1){
            echo '<h1 class="h3 mb-2 text-gray-800">Add New Form</h1>';
        }else{
            echo '<h1 class="h3 mb-2 text-gray-800">Change Info Form</h1>';
        }
    ?>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <span class="m-0 font-weight-bold text-primary">Table hanghoa</span>
            <span class="font-weight-bold text-primary text-end">
                <a href="admin_index.php?action=admin_hanghoa_list">List</a>
            </span>
        </div>

        <!-- Khi trong cùng 1 view mà lại có nhiều chức năng thì mình gắn cờ -->
        <?php
            if($ac==1){
                echo '<form action="admin_index.php?action=admin_hanghoa_list&act=insert_action" method="post">';
            }else{
                echo '<form action="admin_index.php?action=admin_hanghoa_list&act=update_action" method="post">'; 
            }
        ?>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Mã loại</th>
                                <th>Tên hàng hóa</th>
                                <th>Mô tả</th>
                                <th>Ngày tạo</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Mã loại</th>
                                <th>Tên hàng hóa</th>
                                <th>Mô tả</th>
                                <th>Ngày tạo</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="number" class="form-control" name="mahh" id="" readonly value="<?php if (isset($mahh)) echo $mahh; ?>">
                                </td>
                                <td>
                                    <select name="idloai" class="form-control" id="">
                                        <?php
                                            $selectedLoai = -1;
                                            if(isset($idloai) && $idloai != -1){
                                                $selectedLoai = $idloai;
                                            }
                                            $loai = new phanloai();
                                            $result = $loai->getLoai();
                                            while ($set = $result->fetch()) :
                                        ?>
                                            <option value="<?php echo $set['idloai'] ?>" <?php if($selectedLoai == $set['idloai']) echo 'selected'; ?>><?php echo $set['tenloai'] ?></option>
                                        <?php
                                            endwhile;
                                        ?>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="tenhh" id="" value="<?php if (isset($tenhh)) echo $tenhh; ?>">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="mota" id="" value="<?php if (isset($mota)) echo $mota; ?>">
                                </td>
                                <td>
                                    <input type="date" class="form-control" name="ngaytao" id="" value="<?php if (isset($ngaytao)) echo $ngaytao; ?>">
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer py-3 d-flex justify-content-md-end">
                <span class="font-weight-bold text-primary text-end">
                    <button type="submit" class="btn btn-primary">
                        <?php 
                            if (isset($_GET['id'])) {
                                echo 'Change';
                            } else {
                                 echo 'Add new';
                            } 
                        ?>
                    </button>
                </span>
            </div>
        </form>

    </div>
</div>
<!-- /.container-fluid -->
<!-- End of Main Content -->