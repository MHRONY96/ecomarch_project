<div class="container">
    <div class="step-one">
        <h2 class="heading" align="center">Recovery Password</h2>
    </div>
    <h2 class="required">
        <?php
        $massage = $this->session->userdata('massage');
        if ($massage)
        {
            echo $massage;
            $this->sesssion->unset_userdata('massage');
        }
        ?>
    </h2>
    <div class="shopper-informations">
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10 col-sm-offset-1">
                <div class="shopper-info">
                    <form class="form form-horizontal" action="<?php echo base_url(); ?>email/update_password" method="post" onsubmit="return validateStandard(this);">
                        <div class="form-group">
                            <label class="col-sm-5 control-label">Enter your New Password <span class="required">*</span></label>
                            <div class="col-sm-5">
                                <input type="password" placeholder="Enter your New password" required="" regexp="JSVAL_RX_ALPHA_NUMERIC" name="new_password" class="form-control"/>
                                <input type="hidden" value="<?php echo $email_address; ?>" class="form-control" name="email_address" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">Retype New Password <sapn class="required">*</sapn></label>
                            <div class="col-sm-5">
                                <input type="password" placeholder="Retype New Password" required="" equals="new_password" err="New password Retype password not matched" name="confrim_password" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-6 col-sm-4">
                                <input type="submit" name="btn" value="Update" class="btn btn-success pull-right"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
