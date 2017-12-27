<div class="container">
    <div class="row">
          <div class="step-one">
                <h2 class="heading" align="center">Billing Method</h2>
            </div>
        <div class="col-lg-offset-2 col-lg-8 col-lg-offset-2">
            <form class="form-horizontal" action="<?php echo base_url();?>Checkout/save_shipping" method="post" onsubmit="return validateStandard(this);">
                <div class="form-group">
                    <label class="col-lg-4 control-label">Customer Name <span class="required">*</span></label>
                    <div class="col-lg-4">
                        <input type="text" name="customer_name" class="form-control" required="" regexp="JSVAL_RX_ALPHA"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-4 control-label">E-mail Address <span class="required">*</span></label>
                    <div class="col-lg-4">
                        <input type="email" name="email_address" class="form-control" required="" regexp="JSVAL_RX_EMAIL"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-4 control-label">Mobile Number <span class="required">*</span></label>
                    <div class="col-lg-4">
                        <input type="number" name="mobile_number" class="form-control" required="" regexp="JSVAL_RX_ALPHA_NUMERIC"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-4 control-label">Address <span class="required">*</span></label>
                    <div class="col-lg-4">
                        <textarea cols="4" rows="6" name="address" required="" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-4 control-label">Zip Code <span class="required">*</span></label>
                    <div class="col-lg-4">
                        <input type="text" name="zip_code" class="form-control" required="" regexp="JSVAL_RX_ZIP"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-4 control-label">City <span class="required">*</span></label>
                    <div class="col-lg-4">
                        <input type="text" name="city" class="form-control" required="" regexp="JSVAL_RX_ALPHA"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-4 control-label">Country <span class="required">*</span></label>
                    <div class="col-lg-4">
                        <select  class="form-control" name="country" required="" exclude=" ">
                            <option value=" ">Please Select your Country</option>
                            <script type="text/javascript">
                                printCountryOptions();
                            </script>
                        </select>
                    </div>
                </div>
                <div>&nbsp;</div>
                <div class="form-group">
                    <div class="col-lg-offset-6 col-lg-2">
                        <input type="submit" name="btn" value="Save shipping"  class="btn btn-success"/>
                    </div>
                </div>
            </form>    
        </div>
    </div>
</div>

