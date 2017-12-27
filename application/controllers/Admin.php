<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id != NULL) {
            redirect('Supar_Admin/dashboard');
        }
    }

    public function index() {
        $this->load->view('admin/admin_page/admin_login');
    }

    public function admin_login_chake() {

        $email_address = $this->input->post('email_address', TRUE);
        $admin_password = md5($this->input->post('admin_password', TRUE));
        $this->load->model('Admin_model');

        $admin_info = $this->Admin_model->admin_login_chake_info($email_address, $admin_password);
        if ($admin_info) {
            $data = array();
            $data['admin_id'] = $admin_info->admin_id;
            $data['admin_name'] = $admin_info->admin_name;
            $this->session->set_userdata($data);
            redirect('Supar_Admin/dashboard');
        } else {
            $data = array();
            $data['example'] = "Your E-mail OR password Wrong";
            $this->session->set_userdata($data);
            redirect('Admin');
        }
    }

}
