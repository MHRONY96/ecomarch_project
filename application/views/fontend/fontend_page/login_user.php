
<div class="container">
    <div class="step-one">
        <h2 class="heading" align="center">Login Your Account</h2>
    </div>
    <div class="shopper-informations">
        <div class="row">
            <div class="col-sm-offset-2 col-sm-5 col-sm-offset-2">
                <div class="shopper-info">
                    <div class="checkout-options">
                        <div class="login-form"><!--login form-->
                            <h2>Login to your account</h2>
                            <h4 style="color: red">
                                <?php 
                                $ex_massege=$this->session->userdata('ex_massege');
                                if ($ex_massege) {
                                    echo $ex_massege;
                                    $this->session->unset_userdata('ex_massege');
                                }
                                ?>
                            </h4>
                            <form action="<?php echo base_url(); ?>checkout/customer_login_check" method="post" class="form form-horizontal">
                                <input type="text" required regxep="JSVAL_RX_EMAIL" placeholder="Email address" name="email_address" class="col-sm-5"/>
                                <input type="password" placeholder="password" name="password" class="col-sm-5" />
                                <span>
                                    <input type="checkbox" class="checkbox col-sm-3"> 
                                   Keep me signed in
                                </span>
                                <button type="submit" class="btn btn-default">Login</button>
                                <span><a href="<?php echo base_url();?>Checkout/add_checkout">Don't have an account?</a></span>
                            </form>
                        </div><!--/login form-->
                    </div><!--/checkout-options-->
                </div>
            </div>
        </div>
    </div>

</div>
