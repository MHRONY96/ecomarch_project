<?php

defined("BASEPATH") OR exit("No direct script access allowed");

Class Checkout_Model extends CI_Model {

    public function save_customer_info()
    {
        $data = array();
        $data['customer_name'] = $this->input->post('customer_name', TRUE);
        $data['	address'] = $this->input->post('address', TRUE);
        $data['mobile_number'] = $this->input->post('mobile_number', TRUE);
        $data['email_address'] = $this->input->post('email_address', TRUE);
        $data['city'] = $this->input->post('city', TRUE);
        $data['country_name'] = $this->input->post('country_name', TRUE);
        $data['	password'] = md5($this->input->post('password', TRUE));
        $this->db->insert('tbl_customer', $data);
        $customer_id = $this->db->insert_id();
        $sdata = array();
        $sdata['customer_id'] = $customer_id;
        $sdata['customer_name'] = $data['customer_name'];
        $this->session->set_userdata($sdata);
    }

    public function ajax_email_address_check($email_address)
    {
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('email_address', $email_address);
        $qury_result = $this->db->get();
        $result = $qury_result->row();
        return $result;
    }
    
    public function customer_login_check_info(){
        $email_address= $this->input->post('email_address', TRUE);
        $password= md5($this->input->post('password', TRUE));
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('email_address',$email_address);
        $this->db->where('password', $password);
        $qury_result= $this->db->get();
        $result= $qury_result->row();
        return $result;
    }
    
    public function save_shipping_info(){
        $data= array();
        $data['customer_name']= $this->input->post('customer_name',TRUE);
        $data['email_address']= $this->input->post('email_address', TRUE);
        $data['mobile_number']= $this->input->post('mobile_number', TRUE);
        $data['address']= $this->input->post('address', TRUE);
        $data['zip_code']= $this->input->post('zip_code', TRUE);
        $data['city']= $this->input->post('city', TRUE);
        $data['country']= $this->input->post('country', TRUE);
        $this->db->insert("tb_shipping", $data);
         $shipping_id= $this->db->insert_id('shipping_id');
        $sdata= array();
        $sdata['shipping_id']=$shipping_id;
        $this->session->set_userdata($sdata);
       
        
    }

}
