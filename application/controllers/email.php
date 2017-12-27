<?php

Class Email extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mailer_model');
    }

    public function recovery_password($en_email)
    {
        // echo $en_email.'<br/>';
        $email= str_replace("%F2","/", $en_email);
        $email_address = $this->encrypt->decode($email);
        //echo $email_address;
        $data = array();
        $data['title'] = "Recovery Password | E-shoper";
        $data['recommend_item'] = '';
        $data['brand_item'] = '';
        $data['catagory'] = '';
        $data['slider_contant'] = '';
        $data['email_address'] = $email_address;
        $data['features_item'] = $this->load->view('fontend/fontend_page/password_recovery_page', $data, TRUE);
        $this->load->view('fontend/font_master', $data);
    }

    public function update_password()
    {
        $this->mailer_model->update_new_password();
        $data['massage']="Update Your New Password Successfully";
        $this->session->set_userdata($data);
        redirect('email/update_password_successfully');
    }
    
    public function update_password_successfully(){
        $data = array();
        $data['title'] = "Update Password | E-shoper";
        $data['recommend_item'] = '';
        $data['brand_item'] = '';
        $data['catagory'] = '';
        $data['slider_contant'] = '';
        $data['features_item'] = $this->load->view('fontend/fontend_page/update_password_successfull', '', TRUE);
        $this->load->view('fontend/font_master', $data);
    }

}
