

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
            <h1 class="mb-0 bread">My Cart</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
		 <?php
			//Khi giỏ hàng tồn tại và đang có hàng thì hiển thị giỏ hàng ra
			if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0){
		?> 
			<form action="index.php?action=giohang&act=update_cart" method="post">
				<div class="container">
					<div class="row">
					<div class="col-md-12 ftco-animate">
						<div class="cart-list">
							<table class="table">
								<thead class="thead-primary">
								<tr class="text-center">
									<th>&nbsp;</th>
									<th>&nbsp;</th>
									<th>Product name</th>
									<th>Price</th>
									<th>Quantity</th>
									<th>Total</th>
								</tr>
								</thead>
								<tbody>
									<?php
										$j = 0;
										foreach($_SESSION['cart'] as $key => $item):
											$j++;
									?>
								<tr class="text-center">
									<td class="">
										<a href="index.php?action=giohang&act=delete_cart&id=<?php echo $key; ?>">
											<button type="button" class="btn btn-primary">Xóa</button>
										</a>
										<a href="#"><span class="ion-ios-refresh"></span></a>
									</td>
									
									<td class="image-prod"><div class="img" style="background-image:url(Content/images/<?php echo $item['hinh']; ?>);"></div></td>
									
									<td class="product-name">
										<h3><?php echo $item['tenhh'] ?></h3>
										<p><?php echo $item['mota']; ?></p>
									</td>
									
									<td class="price"><?php echo number_format($item['dongia']); ?></td>
									
									<td class="quantity">
										<div class="input-group mb-3">
										<input type="number" name="quantity" class="quantity form-control input-number" value="<?php echo $item['soluong'] ?>" min="1" max="100">
									</div>
								</td>
									
									<td class="total"><?php echo number_format($item['thanhtien']); ?></td>
								</tr>
								<?php
									endforeach;
								?>
								<!-- END TR-->						      
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="row justify-content-end">
					<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
						<div class="cart-total mb-3">
							<h3>Coupon Code</h3>
							<p>Enter your coupon code if you have one</p>
							<form action="#" class="info">
					<div class="form-group">
						<label for="">Coupon code</label>
						<input type="text" class="form-control text-left px-3" placeholder="">
					</div>
					</form>
						</div>
						<p><a href="checkout.html" class="btn btn-primary py-3 px-4">Apply Coupon</a></p>
					</div>
					<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
						<div class="cart-total mb-3">
							<h3>Estimate shipping and tax</h3>
							<p>Enter your destination to get a shipping estimate</p>
							<form action="#" class="info">
					<div class="form-group">
						<label for="">Country</label>
						<input type="text" class="form-control text-left px-3" placeholder="">
					</div>
					<div class="form-group">
						<label for="country">State/Province</label>
						<input type="text" class="form-control text-left px-3" placeholder="">
					</div>
					<div class="form-group">
						<label for="country">Zip/Postal Code</label>
						<input type="text" class="form-control text-left px-3" placeholder="">
					</div>
					</form>
						</div>
						<p><a href="checkout.html" class="btn btn-primary py-3 px-4">Estimate</a></p>
					</div>
					<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
						<div class="cart-total mb-3">
							<h3>Cart Totals</h3>
							<p class="d-flex">
								<span>Subtotal</span>
								<span>
									<?php
										$giohang = new giohang();
										echo $giohang->getSubTotal();
									?>
								</span>
							</p>
							<p class="d-flex">
								<span>Delivery</span>
								<span>0.00</span>
							</p>
							<p class="d-flex">
								<span>Discount</span>
								<span>0.00</span>
							</p>
							<hr>
							<p class="d-flex total-price">
								<span>Total</span>
								<span><?php echo $giohang->getSubTotal(); ?></span>
							</p>
						</div>
						<p><a href="index.php?action=thanhtoan" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
					</div>
				</div>
				</div>
			</form>
			<?php
			}else{
				echo "<script> alert('Bạn chưa có hàng'); </script>";
				echo '<meta http-equiv="refresh" content="0;url=../BTCK_PHP/index.php?action=home"/>';
			}
			?>

		</section>