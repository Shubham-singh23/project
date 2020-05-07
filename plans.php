<?php
	session_start();
	if(isset($_SESSION['email']))
	{
		header('location:index.php');
	}
?>
<?php
if(isset($_POST['logout']))
{
	if(!isset($_SESSION['email']))
	{
		$_SESSION['email']="";
		$_SESSION['username']="";
		header('location:plans.php');
	}


	
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Insurance - Point</title>
    <link rel="shortcut icon" href="images/favicon.png" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/icons.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 8]><!-->
    <link rel="stylesheet" href="ie7/ie7.css">
    <!--<![endif]-->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="style1.css" rel="stylesheet" type="text/css">
</head>

<body data-spy="scroll" data-target=".navbar-fixed-top">
	
    <header>
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 address">
                        <i class="ti-location-pin"></i> Sant Tukara  Nagar, Near YCM Hospital, 411018
                    </div>
                    <div class="col-sm-6 social">
                        <ul>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        Insurance<span>Point</span>
                    </a>
                    <p>Call Us Now <b>+215 (362) 4579</b></p>
                </div>
                <div class="collapse navbar-collapse navbar-main-collapse">
                    <ul class="nav navbar-nav navbar-right">
                       	<a class="navbar-brand"><h2 class="text text-capitalize ">Hello, <strong> 
							
                       		<?php
                       		 echo $_SESSION['username']; 
                       		 ?></strong></h2></a>
                        <li>
                            <a href="index.php" name="logout" class="btn-default">logout</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="clear"></div>
    <div id="page-content">
    	<section class="services">
            <h2 class="text-center">Insurance made Simpler And Faster</h2>
            <p class="text-center">All insuarance solution at one place</p>
            <div class="container">
                <div class="row">
                    <div class="bg-info col-sm-3 services-dtl m-5">
                        <img src="images/united.png" width="200px" height="100px" alt="">
                        <h3>(IDV)</h3>
						<h4>RS.5,47,200</h4>
                        <h3>Addons</h3>
						<h4>Zero Dep:RS.1,829</h4>
						<p>1 year own Damage + 3years thirdparty</p>
						<div class="bg-danger">
							<p><strike>Rs.42,598</strike></p>
							<span>Rs.31,622 <button class="bg-danger"><a href="https://retail.onlinesbi.com/retail/login.htm"><i class="fa fa-arrow-circle-right"></i></a></button></span>

						</div>
                    </div>
                    <div class="bg-info col-sm-3 services-dtl">
                        <img src="images/new.jpg" width="200px" height="100px" alt="">
                        <h3>(IDV)</h3>
						<h4>RS.7,69,550</h4>
                        <h3>Addons</h3>
						<h4>Zero Dep:RS.10,996</h4>
						<p>1 year own Damage + 3years thirdparty</p>
						<div class="bg-danger">
							<p><strike>Rs.1,01,478</strike></p>
							<span>Rs.47,526 <button class="bg-danger"><a href="https://retail.onlinesbi.com/retail/login.htm"><i class="fa fa-arrow-circle-right"></i></a></button></span>

						</div>
                    </div>
                    <div class="bg-info col-sm-3 services-dtl">
                        <img src="images/hdfc.png" width="200px" height="100px" alt="">
                        <h3>(IDV)</h3>
						<h4>RS.8,71,954</h4>
                        <h3>Addons</h3>
						<h4>Zero Dep:RS.3,052</h4>
						<p>1 year own Damage + 3years thirdparty</p>
						<div class="bg-danger">
							<p><strike>Rs.1,08,478</strike></p>
							<span>Rs.53,454 <button class="bg-danger"><a href="https://retail.onlinesbi.com/retail/login.htm"><i class="fa fa-arrow-circle-right"></i></a></button></span>
						</div>
                    </div>
                    <div class="bg-info col-sm-3 services-dtl">
                       <img src="images/digit.png" width="200px" height="100px" alt="">
                        <h3>(IDV)</h3>
						<h4>RS.7,39,550</h4>
                        <h3>Addons</h3>
						<h4>Zero Dep:RS.4,807</h4>
						<p>1 year own Damage + 3years thirdparty</p>
						<div class="bg-danger">
							<p><strike>Rs.49,025</strike></p>
							<span>Rs.47,200 <button class="bg-danger"><a href="https://retail.onlinesbi.com/retail/login.htm"><i class="fa fa-arrow-circle-right"></i></a></button></span>
						</div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer>
        <div class="container">
            <div class="row contact-sec">
                <div class="col-md-5 col-lg-5">
                    <h2>Insurance<span>Point</span></h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <p>Sant Tukaram Nagar,Near YCM Hospital
                                <br/>Zip - 411018</p>
                        </div>
                        <div class="col-sm-6">
                            <ul>
                                <li><a href="#"><i class="fa fa-phone"></i> +91 840 048 0468</a></li>
                                <li><a href="#"><i class="ti-email"></i>priyadrashansingh@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="btn-default">Contact Us</a>
                </div>
                <div class="col-md-5 col-lg-5 col-md-offset-2 col-lg-offset-2">
                    <h2>Agent<span>Detail</span></h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <p>Kachaudi Gali,Godauliya, Varanasi, U.P.
                                <br/>Zip - 221001</p>
                        </div>
                        <div class="col-sm-6">
                            <ul>
                                <li><a href="#"><i class="fa fa-phone"></i> +91 868 776 7493</a></li>
                                <li><a href="#"><i class="ti-email"></i>prateekpandey736@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="btn-default">Contact Agent</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-lg-8">
                    <ul class="footer-nav">
                        <li><a href="plan.php">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="#">Compnies represented</a></li>
                        <li><a href="contact-us.php">Contact us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Products</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-lg-2 col-md-offset-2 col-lg-offset-2">
                    <ul class="footer-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        Copyright &copy; 2018 <a href="#">insurancepoint.com</a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 text-right">
                        <a href="#">Terms & Conditions</a>
                        <a href="#">Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-hover-dropdown/2.2.1/bootstrap-hover-dropdown.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>