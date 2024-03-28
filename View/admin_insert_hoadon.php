<?php
if (isset($_GET['id'])) {
    $idhd = $_GET['id'];
    //Lấy thông tin của sản phẩm dựa vào id
    $hd = new hoadon();
    $result = $hd->getHDAdminID($idhd);
    $idkh = $result['idkh'];
    $ngaylap = $result['ngaylap'];
    $tongtien = $result['tongtien'];
}
?>

<div class="container-fluid">

    <!-- Page Heading -->    
    <h1 class="h3 mb-2 text-gray-800">Change Info Form</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <span class="m-0 font-weight-bold text-primary">Table hoadon</span>
            <span class="font-weight-bold text-primary text-end">
                <a href="admin_index.php?action=admin_hoadon_list">List</a>
            </span>
        </div>

                
        <form action="admin_index.php?action=admin_hoadon_list&act=update_action" method="post">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Mã khách hàng</th>
                                <th>Ngày lập</th>
                                <th>Tổng tiền</th> 
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Mã khách hàng</th>
                                <th>Ngày lập</th>
                                <th>Tổng tiền</th>                               
                                
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="number" class="form-control" name="idhd" readonly value="<?php if (isset($idhd)) echo $idhd; ?>">
                                </td>                                
                                <td>
                                    <input type="number" class="form-control" name="idkh" readonly value="<?php if (isset($idkh)) echo $idkh; ?>">
                                </td>
                                <td>
                                    <input type="date" class="form-control" name="ngaylap" value="<?php if (isset($ngaylap)) echo $ngaylap; ?>">
                                </td>
                                <td>
                                    <input type="number" class="form-control" name="tongtien" value="<?php if(isset($tongtien)) echo $tongtien; ?>">
                                </td>                                
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer py-3 d-flex justify-content-md-end">
                <span class="font-weight-bold text-primary text-end">
                    <button type="submit" name="submit" class="btn btn-primary">Change</button>
                </span>
            </div>
        </form>

    </div>
</div>
<!-- /.container-fluid -->
<!-- End of Main Content -->