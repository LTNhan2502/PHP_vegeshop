<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <span class="m-0 font-weight-bold text-primary">Table hanghoa</span>    
            <span class="font-weight-bold text-primary text-end">
                <a href="admin_index.php?action=admin_hanghoa_list&act=insert_hanghoa">Add new</a>
            </span>        
        </div>
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
                            <th colspan="2" class="text-center">Hành động</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Mã loại</th>
                            <th>Tên hàng hóa</th>
                            <th>Mô tả</th>
                            <th>Ngày tạo</th>
                            <th colspan="2" class="text-center">Hành động</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $hh = new hanghoa();
                        $result = $hh->getHangHoaAdmin();
                        while ($set = $result->fetch()) :
                        ?>
                            <tr>
                                <td><?php echo $set['mahh'] ?></td>
                                <td><?php echo $set['idloai'] ?></td>
                                <td><?php echo $set['tenhh'] ?></td>
                                <td><?php echo $set['mota'] ?></td>
                                <td><?php echo $set['ngaytao'] ?></td>
                                <td class="text-center"><a href="admin_index.php?action=admin_hanghoa_list&act=update_hanghoa&id=<?php echo $set['mahh']; ?>">Cập nhật</a></td>
                                <td class="text-center"><a onclick="return del('<?php echo $set['tenhh']; ?>')" href="admin_index.php?action=admin_hanghoa_list&act=delete_hanghoa&id=<?php echo $set['mahh'] ?>">Xóa</a></td>
                            </tr>
                        <?php
                        endwhile;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<!-- End of Main Content -->
<script>
    function del(name){
        return confirm("Do you want to delete '"+name+"' from this table?");
    }
</script>