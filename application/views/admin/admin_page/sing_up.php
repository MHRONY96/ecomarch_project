<html>
    <head>
        <title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Register :: w3layouts</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url(); ?>asset/admin_asset/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
        <!-- Custom CSS -->
        <link href="<?php echo base_url(); ?>asset/admin_asset/css/style.css" rel='stylesheet' type='text/css' />
        <link href="<?php echo base_url(); ?>asset/admin_asset/css/font-awesome.css" rel="stylesheet"> 
        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>asset/admin_asset/js/jquery.min.js"></script>
        <!----webfonts--->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
        <!---//webfonts--->  
        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url(); ?>asset/admin_asset/js/bootstrap.min.js"></script>
    </head>
    <body id="login">
        <div class="login-logo">
            <a href="index.html"><img src="<?php echo base_url(); ?>asset/admin_asset/images/logo.png" alt=""/></a>
        </div>
        <h2 class="form-heading">Register</h2>
        <form class="form-signin app-cam" method="post" action="<?php echo base_url(); ?>sing-up">
            <h3 style="color: green">
            <?php
            $massage= $this->session->userdata('massage');
            if ($massage) {
               echo $massage;
               $this->session->unset_userdata('massage');
            }
            ?>
            </h3>
            <p>Enter your personal details below</p>
            <input type="text" class="form-control1" placeholder="Full Name" name="full_name" autofocus="">
            <input type="text" class="form-control1" placeholder="Address" name="address" autofocus="">
            <input type="text" class="form-control1" placeholder="Email" name="email_address" autofocus="">
            <p> Enter your account details below</p>
            <input type="text" class="form-control1" placeholder="User Name" name="user_name" autofocus="">
            <input type="password" class="form-control1" placeholder="Password" name="admin_password">
            <input type="password" class="form-control1" placeholder="Re-type Password" name="re_type password">
            <label class="checkbox-custom check-success">
                <input type="checkbox" value="agree this condition" id="checkbox1"> <label for="checkbox1">I agree to the Terms of Service and Privacy Policy</label>
            </label>
            <button class="btn btn-lg btn-success1 btn-block" type="submit">Submit</button>
            <div class="registration">
                Already Registered.
                <a class="" href="login.html">
                    Login
                </a>
            </div>
        </form>
        <div class="copy_layout login register">
            <p>Copyright &copy; 2015 Modern. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
        </div>
    </body>
</html>


