
  
    <div class="hero-wrap hero-bread" style="background-image: url('Content/images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Checkout</span></p>
            <h1 class="mb-0 bread">Checkout</h1>
          </div>
        </div>
      </div>
    </div>
	
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
          	<div class="col-xl-7 ftco-animate">

		<?php
			if(!isset($_SESSION['makh'])):
				echo "<script> alert('Bạn phải đăng nhập'); </script>";
				echo '<meta http-equiv="refresh" content="0;url=../BTCK_PHP/index.php?action=dangnhap"/>';
			
		?>
		<?php
			else:
		?>		
			<form action="#" method="post" class="billing-form">
				<?php
					if(isset($_SESSION['idhd'])){
						//View đòi hỏi phải có thông tin thì mới hiển thị
						$idhd = $_SESSION['idhd'];
						$hd = new hoadon();
						$kh = $hd->selectThongTinKH($idhd);
						$tenkh = $kh['tenkh'];
						$ngay = $kh['ngaylap'];
						$dc = $kh['diachi'];
						$sdt = $kh['sdt'];
						$email = $kh['email'];
				?>
					<h3 class="mb-4 billing-heading">Billing Details</h3>
					<div class="row align-items-end">
						<div class="col-md-6">
							<div class="form-group">
								<label for="firstname">Tên khách hàng</label>
							<input type="text" class="form-control" placeholder="" value="<?php echo $_SESSION['tenkh'] ?>">
							</div>
						</div>	              
						<div class="w-100"></div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="country">State / Country</label>
								<div class="select-wrap">
							<div class="icon"><span class="ion-ios-arrow-down"></span></div>
							<select name="" id="" class="form-control">
								<option value="">Việt Nam</option>
								<option value="">Malaysia</option>
								<option value="">Philippines</option>
								<option value="">Campuchia</option>
								<option value="">Laos</option>		                    
							</select>
							</div>
							</div>
						</div>
						<div class="w-100"></div>
						<div class="col-md-6">
							<div class="form-group">
							<label for="streetaddress">Địa chỉ</label>
						<input type="text" class="form-control" value="<?php echo $dc ?>">
						</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
						<input type="text" class="form-control">
						</div>
						</div>
						<div class="w-100"></div>
						<div class="col-md-6">
							<div class="form-group">
							<label for="towncity">Thành phố</label>
						<input type="text" class="form-control" placeholder="...">
						</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="postcodezip">Postcode / ZIP *</label>
						<input type="text" class="form-control" placeholder="">
						</div>
						</div>
						<div class="w-100"></div>
						<div class="col-md-6">
						<div class="form-group">
							<label for="phone">Số điện thoại</label>
						<input type="text" class="form-control" value="<?php echo $sdt; ?>">
						</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="emailaddress">Email</label>
							<input type="text" class="form-control" value="<?php echo $email; ?>">
							</div>
						</div>
						<div class="w-100"></div>
						<div class="col-md-12">
							<div class="form-group mt-4">
								<div class="radio">
									<label><input type="radio" name="optradio"> Ship to different address</label>
								</div>
							</div>
						</div>
					</div>
				
			  <!-- END -->
			</div>
		
			<div class="col-xl-5">
				<div class="row mt-5 pt-3">
					<div class="col-md-12 d-flex mb-5">
						<div class="cart-detail cart-total p-3 p-md-4">
							<h3 class="billing-heading mb-4">Cart Total</h3>								
								<!-- <table class="order-details">
									<thead>
										<tr>
											<th>Your order Details</th>
											<th>Price</th>
										</tr>
									</thead>
									<tbody class="order-details-body">
										<?php							
											// $hd = new hoadon();
											// $j=0;
											// $sp = $hd->selectThongTinHoaDon($idhd);	
											// while($set = $sp->fetch()):	
											// 	$j++;
										?>
										<tr>
											<td>Product</td>
											<td>Total</td>
										</tr>
										<tr>
											<!-- <td><?php echo $set['tenhh']; ?> X<?php echo $set['soluong'] ?></td>
											<td><?php echo number_format($set['dongia']); ?></td> -->
										</tr>
										
									</tbody>
									<!-- <tbody class="checkout-details">                            
										<tr>
											<td>Total</td>
											<td></td>
										</tr>
									</tbody> -->
								</table> 
								<?php
										// endwhile;							
								?>						 
								<hr>
								<p class="d-flex total-price">
									<span>Tổng</span>
									<span>
										<?php
											$gh = new giohang();
											echo $gh->getSubTotal();
									
										?>
									</span>
								</p>
							</div>
					</div>
					<?php 
						}
					?>
				</form>
				<?php
					endif;
				?> 
					<div class="col-md-12">
						<div class="cart-detail p-3 p-md-4">
							<h3 class="billing-heading mb-4">Phương thức thanh toán</h3>
							<div class="form-group">
								<div class="col-md-12">
									<div class="radio">
										<label><input type="radio" name="optradio" class="mr-2"> Direct Bank Tranfer</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<div class="radio">
										<label><input type="radio" name="optradio" class="mr-2"> Check Payment</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<div class="radio">
										<label><input type="radio" name="optradio" class="mr-2"> Paypal</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<div class="checkbox">
										<label><input type="checkbox" value="" class="mr-2"> I have read and accept the terms and conditions</label>
									</div>
								</div>
							</div>
							<p><a href="#"class="btn btn-primary py-3 px-4">Đặt hàng</a></p>
						</div>
					</div>
				</div>
			</div> <!-- .col-md-8 -->
    	</div>
    </div>
</section> <!-- .section -->


