<script type="text/javascript">
//creat a bolean type of variable for ajax
    var xmlhttp = false;
//check we are using internet exploer
    try {
//   check we are using IE browser gater than 5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//alert(xmlhttp);
    } catch (e) {
//    alert(e);
//      check we are using IE browser Lasthan 5
        try {
            xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (E) {
//    alert(E);
//    if xmlhttp false we are using no ie browser
            xmlhttp = false;
        }

    }
//    alert(typeof XMLHttpRequest);
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
    }

    function makerequest(give_text, ObjId) {
//   alert(give_text);
        SarverPage = "<?php echo base_url(); ?>Checkout/ajax_email_check/" + give_text;
        xmlhttp.open("GET", SarverPage);
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById(ObjId).innerHTML = xmlhttp.responseText;
                if (xmlhttp.responseText == 'Email Address requread') {
                    document.getElementById('sbtn').disabled = true;
                } else if (xmlhttp.responseText == "Already Exists") {
                    document.getElementById('sbtn').disabled = true;
                } else if (xmlhttp.responseText == "Abable") {
                    document.getElementById('sbtn').disabled = false;
                }
            }
        }
        xmlhttp.send(null);
    }
</script>
<div class="container">
    <div class="step-one">
        <h2 class="heading">Step1: Checkout Method</h2>
    </div>
    <div class="shopper-informations">
        <div class="row">
            <div class="col-sm-7">

                <div class="shopper-info">
                    <h3>Create Customer Account</h3>
                    <p>If you have account Login without Register account</p>
                    <form class="form form-horizontal" action="<?php echo base_url(); ?>Checkout/save_customer" method="post" onsubmit="return validateStandard(this);">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Customer Name <span class="required">*</span></label>
                            <div class="col-sm-4">
                                <input type="text" placeholder="Enter your Full name" value="" required="" regexp="JSVAL_RX_ALPHA" name="customer_name" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Address</label>
                            <div class="col-sm-4">
                                <input type="text" placeholder="Enter your Address" name="address" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Email Address <span class="required">*</span></label>
                            <div class="col-sm-4">
                                <input type="email" placeholder="Enter your E-mail Address" name="email_address" required="" regexp="JSVAL_RX_EMAIL" class="form-control" onblur="makerequest(this.value, 'res')"/>
                                <span id="res" class="required"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Mobile Number <span class="required">*</span></label>
                            <div class="col-sm-4">
                                <input type="number" name="mobile_number" required="" regexp="JSVAL_RX_NUMERIC" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">City Name</label>
                            <div class="col-sm-4">
                                <input type="text" placeholder="Enter your City Name" name="city" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Country Name <span class="required">*</span></label>
                            <div class="col-sm-4">
                                <select class="form-control" required="" exclude=" " name="country_name">
                                    <option value=" ">Please Select your Country</option>
                                    <script type="text/javascript">
                                        printCountryOptions();
                                    </script>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Password <span class="required">*</span></label>
                            <div class="col-sm-4">
                                <input type="password" placeholder="Enter your password" name="password" required="" regexp="" class="form-control"/> 
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-4">
                                <input type="reset" name="btn" value="Cancel" class="btn btn-danger"/>
                                <input type="submit" id="sbtn" name="btn" value="Submit" class="btn btn-success pull-right"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-sm-5">
                <div class="shopper-info">
                    <div class="checkout-options">
                        <div class="login-form"><!--login form-->
                            <h2>Login to your account</h2>
                            <h4 class="required">
                                <?php
                                $ex_massege = $this->session->userdata('ex_massege');
                                if ($ex_massege) {
                                    echo $ex_massege;
                                    $this->session->unset_userdata('ex_massege');
                                }
                                ?>
                            </h4>
                            <form action="<?php echo base_url(); ?>checkout/customer_login_check" method="post" class="form form-horizontal" onsubmit="return validateStandard(this)">
                                <input type="text" required regexp="JSVAL_RX_EMAIL" placeholder="Email address" name="email_address" class="col-sm-5"/>
                                <input type="password" placeholder="password" name="password" class="col-sm-5" />
                                <div><a href="<?php echo base_url(); ?>checkout/forget_password">Forget Password</a></div>
                                <span>
                                    <input type="checkbox" class="checkbox">
                                    Keep me signed in
                                </span>
                                <button type="submit" class="btn btn-default">Login</button>

                            </form>
                        </div><!--/login form-->
                    </div><!--/checkout-options-->
                </div>
            </div>
        </div>
    </div>
</div>
