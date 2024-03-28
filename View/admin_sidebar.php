<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="admin_index.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Table
</div>

<!-- Nav Item - Table hanghoa Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-shopping-cart"></i>
        <span>Hàng hóa</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Action:</h6>
            <a class="collapse-item" href="admin_index.php?action=admin_hanghoa_list">List</a>
            <a class="collapse-item" href="admin_index.php?action=admin_hanghoa_list&act=insert_hanghoa">Add new</a>
        </div>
    </div>
</li>

<!-- Nav Item - Table khachhang Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKhachhang"
        aria-expanded="true" aria-controls="collapseKhachhang">
        <i class="fas fa-fw fa-user"></i>
        <span>Khách hàng</span>
    </a>
    <div id="collapseKhachhang" class="collapse" aria-labelledby="headingKhachhang"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Action:</h6>
            <a class="collapse-item" href="admin_index.php?action=admin_khachhang_list">List</a>
            <a class="collapse-item" href="admin_index.php?action=admin_khachhang_list&act=insert_khachhang">Add new</a>
        </div>
    </div>
</li>

<!-- Nav Item - Table hoadon Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHoadon"
        aria-expanded="true" aria-controls="collapseHoadon">
        <i class="fas fa-fw fa-receipt"></i>
        <span>Hóa đơn</span>
    </a>
    <div id="collapseHoadon" class="collapse" aria-labelledby="headingHoadon"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Action:</h6>
            <a class="collapse-item" href="admin_index.php?action=admin_hoadon_list">List</a>
            <!-- <a class="collapse-item" href="admin_index.php?action=admin_hoadon_list&act=insert_hoadon">Add new</a> -->
        </div>
    </div>
</li>

<!-- Nav Item - Table loai Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLoai"
        aria-expanded="true" aria-controls="collapseLoai">
        <i class="fas fa-fw fa-list"></i>
        <span>Loại</span>
    </a>
    <div id="collapseLoai" class="collapse" aria-labelledby="headingLoai"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Action:</h6>
            <a class="collapse-item" href="admin_index.php?action=admin_loai_list">List</a>
            <a class="collapse-item" href="admin_index.php?action=admin_loai_list&act=insert_loai">Add new</a>
        </div>
    </div>
</li>

<!-- Nav Item - Table Size Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCthanghoa"
        aria-expanded="true" aria-controls="collapseCthanghoa">
        <i class="fas fa-fw fa-info"></i>
        <span>Cthanghoa</span>
    </a>
    <div id="collapseCthanghoa" class="collapse" aria-labelledby="headingCthanghoa"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Action:</h6>
            <a class="collapse-item" href="admin_index.php?action=admin_cthanghoa_list">List</a>
            <a class="collapse-item" href="admin_index.php?action=admin_cthanghoa_list">Add new</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Addons
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="admin_index.php?action=admin_dangnhap">Login</a>
            <a class="collapse-item" href="admin_index.php?action=admin_dangky">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="admin_index.php?action=admin_trash">Trash</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->