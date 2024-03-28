<?php
	// include_once("Model/connect.php");
	// include_once("Model/hanghoa.php");
  // spl_autoload: load những file là hướng đối tượng (class)
  //Cách 1:
  //spl_autoload_register('myModelLoader');
  //function myModelLoader($classname){
  //   $path = 'Model/';
  //   include_once $path.$classname.'php';
  // }
  //Cách 2:
  session_start();
  include_once "Model/class.phpmailer.php";
  set_include_path(get_include_path().PATH_SEPARATOR.'Model/');
  spl_autoload_extensions('.php');
  spl_autoload_register();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Vegefoods - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="Content/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="Content/css/animate.css">
    
    <link rel="stylesheet" href="Content/css/owl.carousel.min.css">
    <link rel="stylesheet" href="Content/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="Content/css/magnific-popup.css">

    <link rel="stylesheet" href="Content/css/aos.css">

    <link rel="stylesheet" href="Content/css/ionicons.min.css">

    <link rel="stylesheet" href="Content/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="Content/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="Content/css/flaticon.css">
    <link rel="stylesheet" href="Content/css/icomoon.css">
    <link rel="stylesheet" href="Content/css/style.css">
	<!-- <link rel="stylesheet" href="Content/css/bootstrap.min.css"> -->
	
	<style>
		.form-ctrl{
			display:block;
			width:100%;
			padding:.375rem .75rem;
			font-size:1rem;
			line-height:1.5;
			color:#495057;
			background-color:#fff;
			background-clip:padding-box;
			border:1px solid #ced4da;
			border-radius:.25rem;
			transition:border-color .15s ease-in-out;
			box-shadow: .15s ease-in-out;
		}
		@media screen and (prefers-reduced-motion:reduce){
			.form-ctrl{
				transition:none
			}
		}
		.form-ctrl::-ms-expand{
			background-color:#82ae46;
			border:0
		}
		.form-ctrl:focus{
			color:#495057;
			background-color:#fff;
			border-color:#80bdff;
			outline:0;
			box-shadow:0 0 0 .2rem rgba(0,123,255,.25)
		}
		.btnn{
			border-radius: 50% !important;
		}
	</style>
  </head>
	<body class="goto-here">
		<?php
			$kn = new connect();
		?>
		<!-- Header -->
        <?php
			include_once("View/header.php");
		?>

		<!-- Home -->
		<div class="container">
			
      <?php
      //Tạo trang home
        $ctrl = 'home';
      //Index gọi tới các controller khác nhau
        if(isset($_GET['action'])){
          $ctrl = $_GET['action']; //sanpham          
        }
        include_once "Controller/$ctrl.php"
      ?>
		</div>

    
		<!-- Footer -->
		<?php
			include_once("View/footer.php");
		?>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="Content/js/jquery.min.js"></script>
  <script src="Content/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="Content/js/popper.min.js"></script>
  <script src="Content/js/bootstrap.min.js"></script>
  <script src="Content/js/jquery.easing.1.3.js"></script>
  <script src="Content/js/jquery.waypoints.min.js"></script>
  <script src="Content/js/jquery.stellar.min.js"></script>
  <script src="Content/js/owl.carousel.min.js"></script>
  <script src="Content/js/jquery.magnific-popup.min.js"></script>
  <script src="Content/js/aos.js"></script>
  <script src="Content/js/jquery.animateNumber.min.js"></script>
  <script src="Content/js/bootstrap-datepicker.js"></script>
  <script src="Content/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="Content/js/google-map.js"></script>
  <script src="Content/js/main.js"></script>
  
  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
  <!-- <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script> -->
  </body>
</html>