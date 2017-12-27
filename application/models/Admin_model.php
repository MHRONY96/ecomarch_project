<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function admin_login_chake_info($email_address, $admin_password){
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('email_address', $email_address);
        $this->db->where('admin_password', $admin_password);
        $qury_result= $this->db->get();
        $result= $qury_result->row();
        return $result;
    }

}
