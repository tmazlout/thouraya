<?PHP

session_start();
if(!isset($_SESSION["id"]))
{
	header("Location:login.php");
}

include "../core/livraisonC.php";

$lc=new LivraisonC();
$idc=$lc->getCommandeById($_SESSION["id"]);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
 <link href="ajouterlivraisonstyle.css" rel="stylesheet" media="all" type="text/css">
<script language="javascript">
	var valid=0;
	function tester(){ 
	var test=0;
	var num=document.f.idlivraison.value;
	if	(num==0){
		alert ("you must fill the number "); 
		test=0;
		
	}	
		
	else if (num.length!=8)
	{ test=0;
		alert("this must contain 8 numbers ");
	
	}
	
	 var adresse=document.f.adressel.value;
	 if (adresse=="")
	 { 
	 alert("adress must be filled");
	 document.getElementById("element").style.backgroundColor="red";
	 }
	 var ref=document.f.numfacture.value;
	 if (ref=="")
	 {
	   alert("product reference must be filled");
	   document.getElementById("ref").style.backgroundColor="red";
	}
	
		else if (test==1)
	 {
		 alert("we will send you an email to confirm your delivery in a maximum of 24 hours");
	 }
	
}
	
</script>
    <!-- Title  -->
    <title>Amado - Furniture Ecommerce Template | Checkout</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
		
        <?php include_once "header.php"; ?>
        <!-- Header Area End -->

        <!--<div class="cart-table-area section-padding-100">-->
			<!--tzid amine lehne-->
           
		
			<div class="form-style-5">
<center>
<form name="f" id="f" method="POST" action="ajouterlivraison.php" onSubmit="tester()">
<table width="869">
	<br>
	<br>
<tr><td >
  <td width="393">&nbsp;</td>
	<br>
	<br>
	<br>
 <h4>Add needed informations </h4> 
 <tr>
   <td>&nbsp;</td> 
	<br>
	<br>
	<br>
	
	
<tr>
<td > <h4>phone number</h4></td>
<td><input name="idlivraison" required type="number">
	

	 </td>
</tr>
<tr>
<td><h4>adress</h4></td>
<td><input type="text" required name="adressel" id="element"></td>
</tr>
<tr>
<td><h4>Id Commande</h4></td>
<td><input type="text" value="<?php echo $idc ?>"  readonly name="numfacture" id="ref"></td>
</tr>
<tr>
<td><h4>e.mail adress</h4></td>
<td><input id="message" required type="email" name="message"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="ajouter" value="submit" ></td>
</tr>
	<td></td>
<td><a href="http://localhost/snack-fit/views/checkout.php" class="btn amado-btn w-100"> return to checkout </a></td>
</tr>
	
</table>
</center>
</form>
</div>
			
               
                    
                                </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Newsletter Area Start ##### -->
    <section class="newsletter-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <!-- Newsletter Text -->
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="newsletter-text mb-100">
                        <h2>Subscribe for a <span>25% Discount</span></h2>
                        <p>Nulla ac convallis lorem, eget euismod nisl. Donec in libero sit amet mi vulputate consectetur. Donec auctor interdum purus, ac finibus massa bibendum nec.</p>
                    </div>
                </div>
                <!-- Newsletter Form -->
                <div class="col-12 col-lg-6 col-xl-5">
                    <div class="newsletter-form mb-100">
                        <form action="#" method="post">
                            <input type="email" name="email" class="nl-email" placeholder="Your E-mail">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Newsletter Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="index.html"><img src="img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Copywrite Text -->
                        <p class="copywrite"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> & Re-distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-8">
                    <div class="single_widget_area">
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <nav class="navbar navbar-expand-lg justify-content-end">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footerNavContent" aria-controls="footerNavContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                                <div class="collapse navbar-collapse" id="footerNavContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="index.html">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="shop.html">Shop</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="product-details.html">Product</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="cart.html">Cart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="checkout.html">Checkout</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>