<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <span class="m-0 font-weight-bold text-primary">Table hoadon</span>    
            <!-- <span class="font-weight-bold text-primary text-end">
                <a href="admin_index.php?action=admin_hoadon_list&act=insert_hoadon">Add new</a>
            </span>         -->
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Mã khách hàng</th>
                            <th>Ngày lập</th>
                            <th>Tổng tiền</th>                            
                            <th colspan="2" class="text-center">Hành động</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Mã khách hàng</th>
                            <th>Ngày lập</th>
                            <th>Tổng tiền</th>                            
                            <th colspan="2" class="text-center">Hành động</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $kh = new hoadon();
                        $result = $kh->getHDAdmin();
                        while ($set = $result->fetch()) :
                        ?>
                            <tr>
                                <td><?php echo $set['idhd'] ?></td>
                                <td><?php echo $set['idkh'] ?></td>
                                <td><?php echo $set['ngaylap'] ?></td>
                                <td><?php echo $set['tongtien'] ?></td>                                
                                <td class="text-center"><a href="admin_index.php?action=admin_hoadon_list&act=update_hoadon&id=<?php echo $set['idhd']; ?>">Cập nhật</a></td>
                                <td class="text-center"><a onclick="return del('<?php echo $set['idhd']; ?>')" href="admin_index.php?action=admin_hoadon_list&act=delete_hoadon&id=<?php echo $set['idhd'] ?>">Xóa</a></td>
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
    function del(name, table){
        return confirm("Do you want to delete hoadon which has id '"+name+"' from this table?");
    }
</script>