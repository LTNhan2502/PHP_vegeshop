<meta charset="UTF-8">
<!--Load the AJAX API-->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
    google.load('visualization', '1.0', {
        'packages': ['corechart']
    });
    google.setOnLoadCallback(drawVisualization);

    function drawVisualization() {
        //thống kê số lượng bán hàng theo mặt hàng vẽ bieu do tron
        var rows = new Array();
        var tenhh = new Array();
        var thanhtoan = new Array();
        var dataTen = 0;
        var dataTT = 0;
        // b1: tạo bảng
        var data = new google.visualization.DataTable();
        // +lấy dữ liệu từ database đưa vào dòng
        <?php
        $hh = new hanghoa();
        $result = $hh->getThongKeAdmin();
        while ($set = $result->fetch()) {
            $tenhh = $set['tenhh'];
            $thanhtien = $set['tongtien'];
            echo "tenhh.push('" . $tenhh . "');";
            echo "thanhtoan.push('" . $thanhtien . "');";
        }
        ?>
        // + tạo dòng
        for (var i = 0; i < tenhh.length; i++) {
            dataTen = tenhh[i];
            dataTT = parseInt(thanhtoan[i]);
            rows.push([dataTen, dataTT]);
        }
        // + tạo cột
        data.addColumn('string', 'Tên hàng hóa');
        data.addColumn('number', 'Tổng tiền');
        data.addRows(rows);
        // b2: tạo options
        var options = {
            title: "Thống kê doanh thu",
            'width': 600,
            'height': 500,
            'backgroundColor': '#ffffff',
            is3D: true,
        }
        // b3: tiến hành vẽ
        var chart = new google.visualization.PieChart(document.getElementById('chart'));
        chart.draw(data, options);


    }
</script>


<?php
    if (isset($_SESSION['admin'])) :
?>

    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Earnings (Monthly)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Earnings (Annual)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                    </div>
                                    <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Pending Requests</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div id="chart">

                        </div>
                    </div>
                </div>
            </div>

            <!-- Pie Chart -->

        </div>

        <!-- Content Row -->
        <div class="row">
            <!-- Content Column -->
        </div>

    </div>

<?php   else:   ?>
    <div class="card d-flex justify-content-center text-center">
    <div class="card-body">
        <h5 class="card-title">Must login</h5>
        <p class="card-text">You must log in to enter the Admin Page.</p>
        <a href="admin_index.php?action=admin_dangnhap" class="btn btn-primary">Go to the Login Page</a>
    </div>
    </div>
<?php  endif;   ?>