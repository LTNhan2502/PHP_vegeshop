<div class="container-fluid">
		<div class="hero-wrap hero-bread" style="background-image: url('Content/images/bg_1.jpg');">
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Products</span></p>
					<h1 class="mb-0 bread">Fruits</h1>
				</div>
				</div>
			</div>
    	</div>
	</div>
	<?php
		//Phân trang
		$hh = new phanloai();
		//B1: Xác định trang mình đang phân trang có bao nhiêu sản phẩm
			//C1:Dùng count
			//$count = $hh->getHangHoaCountAll();
			//C2: 
			$count = $hh->getFruits()->rowCount();
		//B2: Giới hạn 1 trang có bao nhiêu sản phẩm
		$limit = 8;
		//B3: Tính ra số trang dựa trên tổng sản phẩm và limit
		$trang = new page();
		//Lấy ra số trang
		$page = $trang->findPage($count, $limit);
		//Lấy ra start
		$start = $trang->findStart($limit);
	?>
	<?php
		$ac = 1;
		if(isset($_GET['action'])){
			if(isset($_GET['act']) && $_GET['act'] =="fruits"){
				$ac = 1;
			}
            if(isset($_GET['act']) && $_GET['act'] =="vegetables"){
				$ac = 2;
			}
            if(isset($_GET['act']) && $_GET['act'] =="juices"){
				$ac= 3;
			}
            if(isset($_GET['act']) && $_GET['act'] =="dried"){
				$ac= 4;
			}
		}
	?>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
    					<li><a href="index.php?action=sanpham">All</a></li>
    					<li><a href="index.php?action=loai&act=vegetables">Vegetables</a></li>
    					<li><a href="index.php?action=loai&act=fruits" class="active">Fruits</a></li>
    					<li><a href="index.php?action=loai&act=juices">Juices</a></li>
    					<li><a href="index.php?action=loai&act=dried">Dried</a></li>
    				</ul>
    			</div>
    		</div>
    		<div class="row">
				<?php
					$hh = new phanloai();
					if($ac === 1){
						// $result = $hh->getHanghoaAll();  21 sản phẩm
						$result = $hh->getFruitsPage($start, $limit); //Phân trang
					}
					if($ac === 2){
						$result = $hh->getVegetablesPage($start, $limit);
					}
                    if($ac === 3){
						$result = $hh->getJuicesPage($start, $limit);
					}
                    if($ac === 4){
						$result = $hh->getDriedPage($start, $limit);
					}
					while($set = $result->fetch()):
				?>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="Content/images/<?php echo $set['hinh'] ?>" alt="Colorlib Template">
    						<span class="status">30%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#"><?php echo $set['tenhh'] ?></a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price">
										<?php
											if($set['giamgia'] != 0){
												echo '<span class="mr-2 price-dc">'.number_format($set['dongia']).' </span><span class="price-sale">'.number_format($set['giamgia']).' </span>';
											}else{
												echo '<span class="mr-2 price-sale">'.number_format($set['dongia']).' </span>';
											}
										?>
									</p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
				<?php
					endwhile;
				?>
    		</div>
		
    	<div class="row mt-5">
			
			<div class="col text-center">
				<div class="block-27">
				<ul>
					<?php
						//Nút lùi hiển thị khi trang > 1 và tổng trang > 1
						$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
						if($current_page > 1 && $page > 1){
							echo "<li><a href='index.php?action=loai&page=".($current_page-1)."'>&lt;</a></li>";
						}
						for($i=1; $i<=$page;$i++):
					?>					
					<li><span><a href="index.php?action=loai&page=<?php echo $i; ?>"><?php echo $i; ?></a></span></li>
					<?php
						endfor;
						//Nút next tới khi nhỏ hơn tổng số trang và trang > 1
						if($current_page < $page && $page > 1){
							echo "<li><a href='index.php?action=loai&page=".($current_page+1)."'>&gt;</a></li>"; 
						}
					?>					
				</ul>
				</div>
          	</div>
        </div>
    	</div>
    </section>


    
  

  