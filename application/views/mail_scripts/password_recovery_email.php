<?php
$en_email= $this->encrypt->encode($to_address);
$email= str_replace("/", "%F2" ,$en_email);
//$email = str_replace("/","%F2", $enc_email );
?>
<strong>Hello <?php echo $customer_name;?></strong>
<br/>
<span>Please click the link bellow To reset your password</span><br/>
<a href="<?php echo base_url();?>email/recovery_password/<?php echo $email;?>"><?php echo base_url();?>email/recovery_password/<?php echo $email;?></a>

<h2>Thank Your to being with us</h2>
