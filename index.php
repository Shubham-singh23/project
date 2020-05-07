<?php
if(isset($_POST['reg']))
{
    $email=$_POST['email'];
    $uname=$_POST['uname'];
    $mobile=$_POST['mobile'];
    $pass1=$_POST['pass1'];
    // $pass2=$_POST['pass2'];

    $con=mysqli_connect('localhost','root','','insurance');
    if(!$con)
        die("error!!!");
    else
    {
        $reg="insert into user(email,username,mobile,password,cpassword) values('$email','$uname','$mobile','$pass1','$pass1')";
    
        if(mysqli_query($con,$reg))
            echo "Registration successs full";
        else
            echo "failed";
    }
}
?>

<?php
if(isset($_POST['log']))
{
    session_start();
    $email=$_POST['email'];
    $pass=$_POST['password'];

    $con=mysqli_connect('localhost','root','','insurance');
    if(!$con)
        die("error!!!");
    else
    {
        $reg="select * from user where email='$email' AND password='$pass'";
        $result=mysqli_query($con,$reg);
        if(mysqli_num_rows($result)>0)
        {
            $row=mysqli_fetch_array($result);
            $u=$row['username'];
            
            $_SESSION['email']=$email;
            $_SESSION['username']=$u;
            header('location:plans.php');
        }

        else
            echo "failed";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Insurance - Point</title>
    <link rel="shortcut icon" href="images/favicon.png" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/icons.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
    <link rel="stylesheet" type="text/css" href="css/flexslider.css " />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" href="ie7/ie7.css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="style1.css" rel="stylesheet" type="text/css">
</head>

<body data-spy="scroll" data-target=".navbar-fixed-top">
    <!---modal start-->
    <!-- <script type="text/javascript">
        $(document).ready(function($) {
            $('.action').click(function() {
                /* Act on the event */
                $('#loginform').hide();
                $('#signupform').show();
            });
        });
    </script> -->
    <div class="container">
        <div class="modal" id="loginform">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" id="login">
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times-circle fa-2x"></i></button>
                        <form class="login-form text-center" method="post" action="plans.php">
                            <h1 class="mb-5 font-weight-light text-uppercase">LogIn</h1>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control rounded-pill form-control-lg" placeholder=" User Name" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control rounded-pill form-control-lg" placeholder=" Password" required>
                            </div>
                            <div class="forgot-link d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="remember">
                                    <label for="remember">Remember Password</label>
                                </div>
                                <a href="#" id="forgot"><strong>Forgot Password?</strong></a>
                            </div>
                            <button type="submit" name="log"  class="btn btn-block btn-custom  -text-uppercase mt-5 rounded-pill form-control-lg">Login</button>
                            <p class="mt-3 font-weight-normal">Don't have an account 
                                <a href="#" class="action" data-target="#signupform" data-toggle="modal" ><strong>Register Now</strong></a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container1">
        <div class="modal" id="signupform">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" id="signup">
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times-circle fa-2x"></i></button>
                        <form class="login-form text-center" method="post" action="#">
                            <h1 class="mb-5 font-weight-light text-uppercase">Register yourself</h1>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control rounded-pill form-control-lg" placeholder=" Email - Id">
                            </div>
                            <div class="form-group">
                                <input type="text" name="uname" class="form-control rounded-pill form-control-lg" placeholder=" User Name">
                            </div>
                           <!--  <div class="form-group">
                                <select class="form-control rounded-pill" name="country" id="">
                                    <option value="">Select</option>
                                    <option value="+91">India</option>
                                    <option value="+44">United Kingdom</option>
                                    <option value="+7">Rusia</option>
                                    <option value="+1">Canada</option>
                                    <option value="+86">China</option>
                                    <option value="+92">Pakistan</option>
                                </select>
                            </div> -->
                            <div class="form-group">
                                <input type="number" name="mobile" class="form-control rounded-pill form-control-lg" maxlength="10" minlength="10" placeholder=" Mobile number">
                            </div>
<!--                             <div class="form-group">
                                <input type="number" class="form-control rounded-pill form-control-lg" placeholder=" Car number">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control rounded-pill form-control-lg" placeholder=" Car Manufacturer">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control rounded-pill form-control-lg" placeholder=" Car Model">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control rounded-pill form-control-lg" placeholder=" Car Fule-Type">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control rounded-pill form-control-lg" placeholder=" Car Varient">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control rounded-pill form-control-lg" placeholder=" Registration Year">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control rounded-pill form-control-lg" placeholder=" City">
                            </div> -->
                            <div class="form-group">
                                <input type="password" name="pass1" class="form-control rounded-pill form-control-lg" placeholder=" Password">
                            </div>
                            <!-- <div class="form-group">
                                <input type="password" name="pass2" class="form-control rounded-pill form-control-lg" placeholder=" Re-enter Password">
                            </div> -->
                            <!-- <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="remember">
                                    <label for="remember">I have checked all above mentioned details</label>
                                </div> -->
                            <button type="submit" name="reg"  class="btn btn-group btn-custom text-uppercase mt-5 rounded-pill form-control-lg">SignUp</button>
                            <button type="reset" class="btn btn-group"> Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END -->
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
                    <p><b>(India's largest Online insurance aggregator)</b></p>
                    <p>Call Us Now <b>+91 8400 480 468</b></p>
                </div>
                <div class="collapse navbar-collapse navbar-main-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                       <!--  <li>
                            <a href="blog.php">Blog</a>
                        </li> -->
                        <li>
                            <a href="contact-us.php">Contact</a>
                        </li>
						<li>
                            <a href="#" data-target="#loginform" data-toggle="modal" ><i class="fa fa-sign-in fa-2x"> Login</i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="clear"></div>
    <div id="page-content">
        <section class="flexslider">
            <ul class="slides">
                <li>
                    <img src="images/slider-imag.jpg" />
                    <div class="slide-info">
                        <div class="slide-con">
                            <b>Car insurancePoint</b>
                            <h3>Car Insurance</h3>
                            <p>we care of your cars, we understand your your need,that's why
                            we provide you a best platform to choose the best deal for cars. </p>
                            <a href="#" class="ti-arrow-right"></a>                        </div>
                    </div>
                </li>
                <li>
                    <img src="images/slider-img.jpg" />
                    <div class="slide-info">
                        <div class="slide-con">
                            <b>Healthcare</b>
                            <h3>Health Insurance</h3>
                            <p>We know you care of your family, We provide you helth insurance in your budget. keep healthy, keep safe you and your family.</p>
                            <a href="#" class="ti-arrow-right"></a>                        </div>
                    </div>
                </li>
                <li>
                    <img src="images/slider-img1.jpg" />
                    <div class="slide-info">
                        <div class="slide-con">
                            <b>Lifecare</b>
                            <h3>Life Insurance</h3>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris hendrerit fringilla ligula, nec congue leo pharetra in.</p> -->
                            <a href="#" class="ti-arrow-right"></a>                        
                        </div>
                    </div>
                </li>
                
            </ul>
        </section>
        
        <section class="product-tab">
            <div class="container">
                <div class="row">
                    <div id="parentVerticalTab">
                        <h2>Products</h2>
                        <ul class="resp-tabs-list hor_1 col-sm-3 col-md-3 col-lg-3">
                            <li><i class="ti-car"></i> Car Insurance</li>
                            <li><i class="ti-home"></i> House Insurance</li>
                            <li><i class="fa fa-plane"></i> Travel Insurance</li>
                            <li><i class="ti-heart-broken"></i> Life Insurance</li>           
                        </ul>
                        <div class="col-sm-5 col-md-5 col-lg-5 resp-tabs-container hor_1">
                            <div>
                                <div class="prod-tab-content">
                                    <h4>
                                        <span class="prod-cion"><i class="ti-car"></i></span>
                                        Car Insurance
                                    </h4>
                                    <p>Car Insurance is a vehicle policy to protect yourself from financial losses arising from unforeseen risks such as accidents, thefts or Third Party Liabilities. It is also known as auto or motor insurance. As per the Motor Vehicles Act, 1988, Motor Car Insurance is mandatory in India.</p>
                                    <p class="tel">
                                        <i class="fa fa-phone"></i> +123 456 7890 <span>Toll Free</span>
                                    </p>
                                    <p>
                                        <a class="btn-default" href="plans.php">Get Free Quote</a>
                                    </p>
                                </div>
                                <img src="images/2.jpg" alt="" class="img-responsive" />
                            </div>
                            <div>
                                <div class="prod-tab-content">
                                    <h4>
                                        <span class="prod-cion"><i class="ti-home"></i></span>
                                        House Insurance
                                    </h4>
                                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer</p>
                                    <p>et placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. </p> -->
                                    <p class="tel">
                                        <i class="fa fa-phone"></i> +123 456 7890 <span>Toll Free</span>
                                    </p>
                                    <p>
                                        <a class="btn-default" href="product-houseinsurance.php">Get Free Quote</a>
                                    </p>
                                </div>
                              <img src="images/product-img.jpg" alt="" class="img-responsive" />                           
                            </div>
                            <div>
                                <div class="prod-tab-content">
                                    <h4>
                                        <span class="prod-cion"><i class="fa fa-plane"></i></span>
                                        Travel Insurance
                                    </h4>
                                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer</p>
                                    <p>et placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. </p> -->
                                    <p class="tel">
                                        <i class="fa fa-phone"></i> +123 456 7890 <span>Toll Free</span>
                                    </p>
                                    <p>
                                        <a class="btn-default" href="#">Get Free Quote</a>
                                    </p>
                                </div>
                                <img src="images/1.jpg" alt="" class="img-responsive" />
                            </div>
                            <div>
                                <div class="prod-tab-content">
                                    <h4>
                                        <span class="prod-cion"><i class="ti-heart-broken"></i></span>
                                        Life Insurance
                                    </h4>
                                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer</p>
                                    <p>et placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. </p> -->
                                    <p class="tel">
                                        <i class="fa fa-phone"></i> +123 456 7890 <span>Toll Free</span>
                                    </p>
                                    <p>
                                        <a class="btn-default" href="#">Get Free Quote</a>
                                    </p>
                                </div>
                                <img src="images/3.jpg" alt="" class="img-responsive" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="services">
            <h2 class="text-center">Insurance made Simpler And Faster</h2>
            <p class="text-center">All insuarance solution at one place</p>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 services-dtl">
                        <span class="fa fa-life-bouy"></span>
                        <h3>24x7 Support</h3>
                        <p>Always at your service</p>
                        <p>+91124-6656507</p>
                    </div>
                    <div class="col-sm-3 services-dtl">
                        <span class="fa fa-balance-scale"></span>
                        <h3>compare 250+ Plans</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                    <div class="col-sm-3 services-dtl">
                        <span class="fa fa-line-chart"></span>
                        <h3>Over 10L corore</h3>
                        <p>Cover Provided</p>
                    </div>
                    <div class="col-sm-3 services-dtl">
                        <span class="fa fa-ban"></span>
                        <h3>Cancellation support</h3>
                        <p>Full support fro cancellation and endorsements</p>
                    </div>
                   
                    <div class="col-sm-3 services-dtl">
                        <span class="fa fa-users">(live)</span>
                        <h3>7743 people</h3>
                        <p>Currently comparing online</p>
                    </div>
                    <div class="col-sm-3 services-dtl">
                        <span class="fa fa-trophy"></span>
                        <h3>50+ awards</h3>
                        <p>winning hearts for your financial protection</p>
                    </div>
                    
                </div>
            </div>
        </section>
        <section class="testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <h2 class="text-center">Know what people says</h2>
                        <div class="testimonial-tab">
                            <div class="testimonials-tab-list">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);" data-tab="tab1"><img src="images/devesh.jpeg" alt="Client" /></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" data-tab="tab2"><img src="images/mustkim.jpeg" alt="Client" /></a>
                                    </li>
                                    <li class="active">
                                        <a href="javascript:void(0);" data-tab="tab3"><img src="images/prateek.jpeg" alt="Client" /></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" data-tab="tab4"><img src="images/akhil.jpeg" alt="Client" /></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" data-tab="tab5"><img src="images/shubham.jpeg" alt="Client" /></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="testimonials-tab-content">
                                <div class="clearfix testimonial-con" id="testimonial-tab1">
                                    <h3>Devesh pandey<br /><span>MCA-II year</span></h3>
                                    <i class="fa fa-quote-left left-quote"></i>
                                    <p class="col-sm-offset-1 col-sm-10">The Services provided by InsurancePoint are extremely helpful in making the right choice. Overall i had good Experience with InsurancePoint</p>
                                    <i class="fa fa-quote-right right-quote"></i>                                </div>
                                <div class="clearfix testimonial-con" id="testimonial-tab2">
                                    <h3>Mustkim<br /><span>MCA-II year</span></h3>
                                    <i class="fa fa-quote-left left-quote"></i>
                                    <p class="col-sm-offset-1 col-sm-10">Thanks for correction done in time and really Appreciated...!!
                                    Good To Have InsurancePoint. Life is easy with you..!!!</p>
                                    <i class="fa fa-quote-right right-quote"></i>                                </div>
                                <div class="clearfix testimonial-con" id="testimonial-tab3">
                                    <h3>Prateek<br /><span>MCA-II year</span></h3>
                                    <i class="fa fa-quote-left left-quote"></i>
                                    <p class="col-sm-offset-1 col-sm-10">Thank you for faciliting and following Up on the policy. Its been a very Pleasurable experience with you folks and InsurancePoint</p>
                                    <i class="fa fa-quote-right right-quote"></i>                                </div>
                                <div class="clearfix testimonial-con" id="testimonial-tab4">
                                    <h3>Akhil<br /><span>MCA-II year</span></h3>
                                    <i class="fa fa-quote-left left-quote"></i>
                                    <p class="col-sm-offset-1 col-sm-10">I would like thank to website "www.InsurancePoint.com" because of which i could get a good policy.</p>
                                    <i class="fa fa-quote-right right-quote"></i>                                </div>
                                <div class="clearfix testimonial-con" id="testimonial-tab5">
                                    <h3>Shubham<br /><span>MCA-II year</span></h3>
                                    <i class="fa fa-quote-left left-quote"></i>
                                    <p class="col-sm-offset-1 col-sm-10">Thanking you very much for Your Support for getting our policy quickly, i appriciate your work.</p>
                                    <i class="fa fa-quote-right right-quote"></i>                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <section class="partners">
            <div class="container">
                <div class="row">
                    <div class="parner-slider-mn">
                        <div class="col-sm-3">
                            <h2>
                                <b>Insurance</b> Partners
                            </h2>
                        </div>
                        <div class="col-sm-9">
                            <div class="partner-slider owl-carousel">
                                <div>
                                    <div class="partner-logo">
                                        <p><img src="images/partner-logo-01.jpg" alt="Partner" /></p>
                                    </div>
                                    <div class="partner-logo">
                                        <p><img src="images/partner-logo-04.jpg" alt="Partner" /></p>
                                    </div>
                                </div>
                                <div>
                                    <div class="partner-logo">
                                        <p><img src="images/partner-logo-02.jpg" alt="Partner" /></p>
                                    </div>
                                    <div class="partner-logo">
                                        <p><img src="images/partner-logo-05.jpg" alt="Partner" /></p>
                                    </div>
                                </div>
                                <div>
                                    <div class="partner-logo">
                                        <p><img src="images/partner-logo-03.jpg" alt="Partner" /></p>
                                    </div>
                                    <div class="partner-logo">
                                        <p><img src="images/partner-logo-06.jpg" alt="Partner" /></p>
                                    </div>
                                </div>
                                <div>
                                    <div class="partner-logo">
                                        <p><img src="images/partner-logo-04.jpg" alt="Partner" /></p>
                                    </div>
                                    <div class="partner-logo">
                                        <p><img src="images/partner-logo-01.jpg" alt="Partner" /></p>
                                    </div>
                                </div>
                                <div>
                                    <div class="partner-logo">
                                        <p><img src="images/partner-logo-05.jpg" alt="Partner" /></p>
                                    </div>
                                    <div class="partner-logo">
                                        <p><img src="images/partner-logo-02.jpg" alt="Partner" /></p>
                                    </div>
                                </div>
                                <div>
                                    <div class="partner-logo">
                                        <p><img src="images/partner-logo-06.jpg" alt="Partner" /></p>
                                    </div>
                                    <div class="partner-logo">
                                        <p><img src="images/partner-logo-03.jpg" alt="Partner" /></p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="clear"></div>
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <!-- <li><a href="blog.php">Blog</a></li>
                        <li><a href="#">Compnies represented</a></li>
 -->                        <li><a href="contact-us.php">Contact us</a></li>
                        <!-- <li><a href="#">Services</a></li>
                        <li><a href="#">Products</a></li> -->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/easyResponsiveTabs.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/custom.js"></script>

    
</body>

</html>
