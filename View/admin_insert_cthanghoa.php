<?php
if (isset($_GET['id'])) {
    $mahh = $_GET['id'];
    //Lấy thông tin của sản phẩm dựa vào id
    $hh = new hanghoa();
    $result = $hh->getCTHHAdminID($mahh);
    $hinh = $result['hinh'];
    $dongia = $result['dongia'];
    $giamgia = $result['giamgia'];
    $slt = $result['soluongton'];
}
?>
 <?php
    $ac=1;
    if(isset($_GET['action']))
    {
        if(isset($_GET['act'])&& $_GET['act']=='insert_cthanghoa')
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
                <a href="admin_index.php?action=admin_cthanghoa_list">List</a>
            </span>
        </div>

        <!-- Khi trong cùng 1 view mà lại có nhiều chức năng thì mình gắn cờ -->
        <?php
            if($ac==1){
                echo '<form action="admin_index.php?action=admin_cthanghoa_list&act=insert_action" enctype="multipart/form-data" method="post">';
            }else{
                echo '<form action="admin_index.php?action=admin_cthanghoa_list&act=update_action" enctype="multipart/form-data" method="post">'; 
            }
        ?>
        <!-- <form action="admin_index.php?action=admin_cthanghoa_list&act=insert_action"> -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Hình</th>
                                <th>Đơn giá</th>
                                <th>Giảm giá</th>
                                <th>Số lượng tồn</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Hình</th>
                                <th>Đơn giá</th>
                                <th>Giảm giá</th>
                                <th>Số lượng tồn</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="number" class="form-control" name="mahh" id="" readonly value="<?php if (isset($mahh)) echo $mahh; ?>">
                                </td>
                                <td>
                                    <?php
                                        if(isset($hinh)){
                                            echo "<img src='Content/images/".$hinh."' width='70px' height='60px'>
                                                  <input type='file' name='image'>";
                                        }else{
                                            echo "<img src='' width='70px' height='60px'>
                                                  <input type='file' name='image'>";
                                        }
                                    ?>
                                </td>
                                <td>
                                    <input type="number" class="form-control" name="dongia" id="" value="<?php if (isset($dongia)) echo $dongia; ?>">
                                </td>
                                <td>
                                    <input type="number" class="form-control" name="giamgia" id="" value="<?php if (isset($giamgia)) echo $giamgia; ?>">
                                </td>
                                <td>
                                    <input type="number" class="form-control" name="slt" id="" value="<?php if (isset($slt)) echo $slt; ?>">
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer py-3 d-flex justify-content-md-end">
                <span class="font-weight-bold text-primary text-end">
                    <button type="submit" name="submit" class="btn btn-primary">
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