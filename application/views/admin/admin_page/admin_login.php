<!DOCTYPE HTML>
<html>
    <head>
        <title>Admin Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <link href="<?php echo base_url(); ?>asset/admin_asset/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
        <!-- Custom Theme files -->
        <link href="<?php echo base_url(); ?>asset/admin_asset/css/style.css" rel="stylesheet" type="text/css" media="all"/>
        <!--js-->
        <script src="<?php echo base_url(); ?>asset/admin_asset/js/jquery-2.1.1.min.js"></script> 
        <!--icons-css-->
        <link href="<?php echo base_url(); ?>asset/admin_asset/css/font-awesome.css" rel="stylesheet"> 
        <!--Google Fonts-->
        <link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
        <!--static chart-->
    </head>
    <body>	
        <div class="login-page">
            <div class="login-main">  	
                <div class="login-head">
                    <h1>Login</h1>
                </div>
                <div class="login-block">
                    <form method="post" action="<?php echo base_url(); ?>Admin/admin_login_chake" name="click_vlid" onsubmit="return click_form();">
                        <h4 style="color: red" align="center">
                            <?php
                            $example = $this->session->userdata('example');
                            if ($example) {
                                echo $example;
                                $this->session->unset_userdata('example');
                            }
                            ?>
                        </h4>
                        <h4 style="color: green" align="center">
                            <?php
                            $massage = $this->session->userdata('massage');
                            if ($massage) {
                                echo $massage;
                                $this->session->unset_userdata('massage');
                            }
                            ?>
                        </h4>
                        <input type="text" name="email_address" placeholder="Email" required="">
                        <input type="password" name="admin_password" class="lock" placeholder="Password">
                        <span id="key"></span>
                        <div class="forgot-top-grids">
                            <div class="forgot-grid">
                                <ul>
                                    <li>
                                        <input type="checkbox" id="brand1" value="">
                                        <label for="brand1"><span></span>Remember me</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="forgot">
                                <a href="#">Forgot password?</a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <input type="submit" name="Sign In" value="Login">	
                        <h3>Not a member?<a href="signup.html"> Sign up now</a></h3>				
                        <h2>or login with</h2>
                        <div class="login-icons">
                            <ul>
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>						
                            </ul>
                        </div>
                    </form>
                    <h5><a href="index.html">Go Back to Home</a></h5>
                </div>
            </div>
        </div>
        <!--inner block end here-->
        <!--copy rights start here-->
        <div class="copyrights">
            <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
        </div>	
        <!--COPY rights end here-->

        <!--scrolling js-->
        <script src="<?php echo base_url(); ?>asset/admin_asset/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url(); ?>asset/admin_asset/js/scripts.js"></script>
        <!--//scrolling js-->
        <script src="<?php echo base_url(); ?>asset/admin_asset/js/bootstrap.js"></script>
        <!-- mother grid end here-->
        <!--from valid script-->
        <script type="text/javascript">
                        function click_form() {
                            var password = document.click_vlid.admin_password.value;
                            if (password==null || password== "") {
                                window.alert("Plese enter your password");
                                return false;
                            }
                        }
        </script>
        <!--from valid script-->
    </body>
</html>




