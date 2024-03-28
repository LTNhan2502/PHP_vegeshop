<?php
if (isset($_GET['id'])) {
    $idkh = $_GET['id'];
    //Lấy thông tin của sản phẩm dựa vào id
    $kh = new user();
    $result = $kh->getKHAdminID($idkh);
    $tenkh = $result['tenkh'];
    $username = $result['username'];
    $email = $result['email'];
    $diachi = $result['diachi'];
    $sdt = $result['sdt'];
}
?>
 <?php
    $ac=1;
    if(isset($_GET['action']))
    {
        if(isset($_GET['act'])&& $_GET['act']=='insert_khachhang')
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
            <span class="m-0 font-weight-bold text-primary">Table khachhang</span>
            <span class="font-weight-bold text-primary text-end">
                <a href="admin_index.php?action=admin_khachhang_list">List</a>
            </span>
        </div>

        <!-- Khi trong cùng 1 view mà lại có nhiều chức năng thì mình gắn cờ -->
        <?php
            if($ac==1){
                echo '<form action="admin_index.php?action=admin_khachhang_list&act=insert_action" method="post">';
            }else{
                echo '<form action="admin_index.php?action=admin_khachhang_list&act=update_action" method="post">'; 
            }
        ?>
        <!-- <form action="admin_index.php?action=admin_khachhang_list&act=insert_khachhang"> -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên khách hàng</th>
                                <th>Username</th>
                                <th>Email</th>
                                <?php
                                    if(isset($_GET['act']) && $_GET['act'] == 'insert_khachhang'){
                                        echo "<th>Mật khẩu</th>";
                                    }
                                ?>                                
                                <th>Địa chỉ</th>
                                <th>Số điện thoại</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Tên khách hàng</th>
                                <th>Username</th>
                                <th>Email</th>
                                <?php
                                    if(isset($_GET['act']) && $_GET['act'] == 'insert_khachhang'){
                                        echo "<th>Mật khẩu</th>";
                                    }
                                ?>  
                                <th>Địa chỉ</th>
                                <th>Số điện thoại</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="number" class="form-control" name="txtidkh" readonly value="<?php if (isset($idkh)) echo $idkh; ?>">
                                </td>                                
                                <td>
                                    <input type="text" class="form-control" name="txttenkh" value="<?php if (isset($tenkh)) echo $tenkh; ?>">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="txtusername" value="<?php if (isset($username)) echo $username; ?>">
                                </td>
                                <td>
                                    <input type="email" class="form-control" name="txtemail" value="<?php if(isset($email)) echo $email; ?>">
                                </td>
                                <?php
                                    if($ac == 1):
                                ?>
                                    <td>
                                        <input type="password" class="form-control" name="txtpass" value="">
                                    </td> 
                                <?php                                    
                                    endif;
                                ?>
                                 
                                <td>
                                    <input type="text" class="form-control" name="txtdiachi" value="<?php if(isset($diachi)) echo $diachi; ?>">
                                </td>
                                <td>
                                    <input type="tel" class="form-control" name="txtsdt" value="<?php if (isset($sdt)) echo $sdt; ?>">
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