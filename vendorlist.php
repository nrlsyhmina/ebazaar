<?php 

	//include("pagesfunction/modalMessage.php");
	//include('connection.php');
	//include("encrypt_decrypt.php");
	//$sql = "SELECT * FROM admin";
	//$result = oci_parse($conn,$sql);
	//oci_execute($result);
	//$row = oci_fetch_assoc($result);
?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Grocery Shoppy an Ecommerce Category Bootstrap Responsive Web Template | Home :: w3layouts</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Grocery Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
        
        
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!--pop-up-box-->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!--//pop-up-box-->
	<!-- price range -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
   
</head>

<body>
	<!-- top-header -->
	<div class="header-most-top" >
		
	</div>
<div class="header-bot" align="center">
		<div class="header-bot_inner_wthreeinfo_header_mid" >
			<!-- header-bot-->
			<!-- header-bot -->
			<div class="col-md-8 header" align="center">
				<!-- header lists -->
				<ul style="lifestle:none;display:inline-block;min-width: 696px;padding-top: 20px;;padding-left: 400px;text-align: center;">
                    
                    
					<li>
                        <a href="adminpage.php">Admin </a>
					</li>
                    <li>
						<a href="vendorlist.php"> Vendor </a>
					</li>
                    <li>
						<a href="orderlist.php"> Order </a>
					</li>
                    
				</ul>
<!-- syarifah -->
	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
            
			<!-- tittle heading -->
			<h3 class="tittle-w3l">List Of VENDOR
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<div class="col-lg-10" style="float:none;margin:auto;background-color:white;border-radius:4px;padding:20px;">
              <div class="card" style="background-color:white;">
                <div class="card-body">
                  <h3 class="card-title" style="font-weight:bold;">VENDOR</h3>
                  <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">First Name</th>
                          <th scope="col">Last Name</th>
                          <th scope="col">Email</th>
                         <th scope="col">Address</th>
                          <th scope="col">Poscode</th>
                            <th scope="col">City</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Details</th>
                            <th scope="col">Details</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          include("connection.php");
                            //include("../encrypt_decrypt.php");
                          $sql = "SELECT * FROM vendor";
                          $qry = oci_parse($conn,$sql);
                          
                 oci_define_by_name($qry, 'VENDORID', $VENDORID);
                oci_define_by_name($qry, 'V_FIRSTNAME', $V_FIRSTNAME);
                oci_define_by_name($qry, 'V_LASTNAME', $V_LASTNAME);
                oci_define_by_name($qry, 'V_EMAIL', $V_EMAIL);
                oci_define_by_name($qry, 'V_ADDRESS', $V_ADDRESS);
                oci_define_by_name($qry, 'V_ZIPCODE', $V_ZIPCODE);
                oci_define_by_name($qry, 'V_CITY', $V_CITY);
                oci_define_by_name($qry, 'V_PHONE', $V_PHONE);

                        oci_execute($qry);
                        $nrows = oci_fetch_all($qry,$res);
                          
                            if($nrows>0)
                            {
                            $counter = 1;
                                
                            for($i=0;$i<count($res['V_FIRSTNAME']);$i++)
                            {
                               //echo count($res['A_USERNAME']);
                            ?>
                            <tr>
                              <td><?php echo $counter; ?></td>
                              <td><?php echo $res['V_FIRSTNAME'][$i]; ?></td>
                              <td><?php echo $res['V_LASTNAME'][$i]; ?></td>
                              <td><?php echo $res['V_EMAIL'][$i]; ?></td>
                                <td><?php echo $res['V_ADDRESS'][$i]; ?></td>
                                <td><?php echo $res['V_ZIPCODE'][$i]; ?></td>
                                <td><?php echo $res['V_CITY'][$i]; ?></td>
                                <td><?php echo $res['V_PHONE'][$i]; ?></td>
                                
                              <?php echo "<td><a href='updatevendor1.php?VENDORID=".($res['VENDORID'][$i])."'>Update</a></td>";?>
                                
                              <?php echo "<td><a href='deletevendor1.php?VENDORID=".($res['VENDORID'][$i])."'>Delete</a></td>";?>
                                
                             
                              
                            </tr>
                            <?php $counter++; } } 
                                
                    oci_free_statement($qry);
                    oci_close($conn);
                                ?>
                      </tbody>

                    </table>
                </div>
              </div>
            </div>    
            
		</div>
	</div>
    
    
    
<!-- footer -->
	<footer>
	</footer>
			<!-- //footer fourth section (text) -->
		
	<!-- //footer -->
	<!-- copyright -->
	<!-- //copyright -->

	<!-- js-files -->
	<!-- jquery -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- //jquery -->

	<!-- popup modal (for signin & signup)-->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- Large modal -->
	<!-- <script>
		$('#').modal('show');
	</script> -->
	<!-- //popup modal (for signin & signup)-->

	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		paypalm.minicartk.render(); //use only unique class names other than paypalm.minicartk.Also Replace same class name in css and minicart.min.js

		paypalm.minicartk.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- price range (top products) -->
	<script src="js/jquery-ui.js"></script>
	<script>
		//<![CDATA[ 
		$(window).load(function () {
			$("#slider-range").slider({
				range: true,
				min: 0,
				max: 9000,
				values: [50, 6000],
				slide: function (event, ui) {
					$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
				}
			});
			$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

		}); //]]>
	</script>
	<!-- //price range (top products) -->

	<!-- flexisel (for special offers) -->
	<script src="js/jquery.flexisel.js"></script>
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 2
					}
				}
			});

		});
	</script>
	<!-- //flexisel (for special offers) -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->

            </div>
    
    </div>
    </div>
    
</body>

</html>