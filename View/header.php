<div class="py-1 bg-primary">
			<div class="container">
				<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
					<div class="col-lg-12 d-block">
						<div class="row d-flex">
							<div class="col-md pr-4 d-flex topper align-items-center">
								<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
								<span class="text">+ 1235 2355 98</span>
							</div>
							<div class="col-md pr-4 d-flex topper align-items-center">
								<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
								<span class="text">youremail@email.com</span>
							</div>
							<div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
								<span class="text">3-5 Business days delivery &amp; Free Returns</span>
							</div>
						</div>
					</div>
				</div>
			</div>
    	</div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Vegefoods</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>		  
	      <div class="collapse navbar-collapse" id="ftco-nav">
		  	<nav class="navbar bg-body-tertiary">
				<div class="container-fluid">
					<form action="index.php?action=sanpham&act=timkiem" method="post" class="d-flex" role="search">
						<input class="form-ctrl me-2" type="search" name="txtsearch" placeholder="Search" aria-label="Search">
						<button class="btn btnn" type="submit">
							<i class="bi bi-search"></i>
						</button>
					</form>
				</div>
			</nav>
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
				<div class="dropdown-menu" aria-labelledby="dropdown04">				
					<a class="dropdown-item" href="shop.html">Shop</a>
					<a class="dropdown-item" href="wishlist.html">Wishlist</a>
					<a class="dropdown-item" href="product-single.html">Single Product</a>
					<a class="dropdown-item" href="">Cart</a>
					<a class="dropdown-item" href="">Checkout</a>
				</div>
				</li>
				<?php
						if(isset($_SESSION['makh'])){
							echo '<li class="nav-item"><a href="index.php?action=dangnhap&act=dangxuat" class="nav-link">Log out</a></li>';
						}else{
							echo '<li class="nav-item"><a href="index.php?action=dangky" class="nav-link">Register</a></li>
							<li class="nav-item"><a href="index.php?action=dangnhap" class="nav-link">Log in</a></li>';
						}
				?>
				<?php
						if(isset($_SESSION['makh'])){
							echo '<li class="nav-item"><a href="" class="nav-link">'.$_SESSION['tenkh'].'</a></li>';
						}else{
							echo '<li class="nav-item"><a href="" class="nav-link">Hello ...</a></li>';
						}
				?>	          
	          <li class="nav-item cta cta-colored"><a href="index.php?action=giohang" class="nav-link"><span class="icon-shopping_cart"></span>[<?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?>]</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    