<div class="container">
    <div class="step-one">
        <h2 class="heading" align="center">Forget Password</h2>
    </div>
    <div class="shopper-informations">
        <div class="row">
            <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                <div class="shopper-info">
                    <div class="checkout-options">
                        <div class="login-form"><!--login form-->
                            <h2>Are you forget your password</h2>
                            <h4 class="required">
                                <?php 
                                $ex_massage= $this->session->userdata('ex_massage');
                                if ($ex_massage)
                                {
                                    echo $ex_massage;
                                    $this->session->unset_userdata('ex_massage');
                                }
                                ?>
                            </h4>
                            <form action="<?php echo base_url();?>checkout/customer_email_check" method="post" class="form form-horizontal" onsubmit="return validateStandard(this)">
                                <input type="text" required regxep="JSVAL_RX_EMAIL" placeholder="Email address" name="email_address" class="col-sm-5"/>
                                <button type="submit" class="btn btn-default">Send</button>

                            </form>
                        </div><!--/login form-->
                    </div><!--/checkout-options-->
                </div>
            </div>
        </div>
    </div>

</div>


