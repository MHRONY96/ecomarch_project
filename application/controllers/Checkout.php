<?php

defined("BASEPATH") OR exit('No direct script access allowed');

Class Checkout extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("checkout_model");
    }

    public function add_checkout() {
        $data = array();
        $data['title'] = 'Checkout | E-shopar';
        $data['recommend_item'] = '';
        $data['brand_item'] = '';
        $data['catagory'] = '';
        $data['features_item'] = $this->load->view('fontend/fontend_page/checkout_from', '', TRUE);
        $data['slider_contant'] = '';
        $this->load->view('fontend/font_master', $data);
    }

    public function save_customer() {
        $this->checkout_model->save_customer_info();
        redirect('Checkout/shipping_address');
    }

    public function shipping_address() {
        $data = array();
        $data['title'] = 'Shipping information| E-shopar';
        $data['recommend_item'] = '';
        $data['brand_item'] = '';
        $data['catagory'] = '';
        $data['features_item'] = $this->load->view('fontend/fontend_page/blling_information', '', TRUE);
        $data['slider_contant'] = '';
        $this->load->view('fontend/font_master', $data);
    }

    public function logout() {
        $this->session->unset_userdata("customer_id");
        $this->session->unset_userdata("customer_name");
        $this->session->unset_userdata("shipping_id");
        redirect("welcome");
    }

    public function ajax_email_check($email_address = null) {
        // this code problem Checkout_Model because i set contruct checkout_model
//       $result= $this->Checkout_Model->ajax_email_address_check($email_address);
//       echo '<pre>';
//       print_r($result);
        $result = $this->checkout_model->ajax_email_address_check($email_address);
        if ($email_address == NULL) {
            echo 'Email Address requread';
        } else if ($result) {
            echo "Already Exists";
        } else {
            echo "Abable";
        }
    }

    public function customer_login_check() {
        $result = $this->checkout_model->customer_login_check_info();
        if ($result) {
            $data = array();
            $data['customer_id'] = $result->customer_id;
            $data['customer_name'] = $result->customer_name;
            $this->session->set_userdata($data);
            redirect('welcome');
        } else {
            $data['ex_massege'] = "E-mail Address OR Password invalide";
            $this->session->set_userdata($data);
            redirect('checkout/add_checkout');
        }
    }

    public function forget_password() {
        $data = array();
        $data['title'] = 'Forget Password';
        $data['recommend_item'] = '';
        $data['brand_item'] = '';
        $data['catagory'] = '';
        $data['features_item'] = $this->load->view('fontend/fontend_page/forget_password', '', TRUE);
        $data['slider_contant'] = '';
        $this->load->view('fontend/font_master', $data);
    }

    public function customer_email_check() {
        $email_address = $this->input->post('email_address', TRUE);
        $result = $this->checkout_model->ajax_email_address_check($email_address);
        $data = array();
        if ($result) {
            $data = array();
            $data['title'] = "Forget Password | E-shopar";
            $data['from_address'] = "admin@Eshoper.com";
            $data['admin_full_name'] = "E-shoper";
            $data['to_address'] = $email_address;
            $data['subject'] = "Password Reset E-mail";
            $data['customer_name'] = $result->customer_name;
            $this->load->model('mailer_model');
            $this->mailer_model->send_email($data, 'password_recovery_email');
            redirect('checkout/send_password_succssfully');
        } else {
            $data['ex_massage'] = "Your E-mail address not register";
            $this->session->set_userdata($data);
            redirect('checkout/forget_password');
        }
    }

    public function send_password_succssfully() {
        $data = array();
        $data['title'] = 'Forget Password| E-shopar';
        $data['recommend_item'] = '';
        $data['brand_item'] = '';
        $data['catagory'] = '';
        $data['slider_contant'] = '';
        $data['features_item'] = $this->load->view('fontend/fontend_page/forget_password', '', TRUE);
        $this->load->view('fontend/font_master', $data);
    }
    
    public function save_shipping(){
        $this->checkout_model->save_shipping_info();
        redirect("Checkout/payment_order");
    }
    
    public function payment_order(){
        $data= array();
        $data['title'] = 'Payment Orider | E-shopar';
        $data['recommend_item'] = '';
        $data['brand_item'] = '';
        $data['catagory'] = '';
        $data['features_item'] = $this->load->view('fontend/fontend_page/payment_order_from', '', TRUE);
        $data['slider_contant'] = '';
        $this->load->view('fontend/font_master', $data);
    }

}
