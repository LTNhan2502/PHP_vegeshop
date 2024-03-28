<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Trash</h1>
    <p class="mb-4">This is the trash where you can restore what do have deleted and completely delete a product.
    <p class="mb-4">For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> 

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <span class="m-0 font-weight-bold text-primary">Trash</span>                  
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
                        $result = $hh->getTrash();
                        while ($set = $result->fetch()) :
                        ?>
                            <tr>
                                <td><?php echo $set['mahh'] ?></td>
                                <td><?php echo $set['idloai'] ?></td>
                                <td><?php echo $set['tenhh'] ?></td>
                                <td><?php echo $set['mota'] ?></td>
                                <td><?php echo $set['ngaytao'] ?></td>
                                <td class="text-center"><a href="admin_index.php?action=admin_trash&act=update_hanghoa&id=<?php echo $set['mahh']; ?>">Khôi phục</a></td>
                                <td class="text-center"><a onclick="return del('<?php echo $set['tenhh']; ?>')" href="admin_index.php?action=admin_trash&act=delete_hanghoa&id=<?php echo $set['mahh'] ?>">Xóa</a></td>
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
        return confirm("Do you want to delete '"+name+"' from this table? This will completely delete this from your database.");
    }
</script>