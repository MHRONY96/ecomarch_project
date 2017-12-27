<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Supar_Admin extends CI_Controller {

//    securete
    public function __construct() {
        parent::__construct();

        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL) {
            redirect('Admin');
        }

        $this->load->model('Supar_Admin_Model');
    }

//dashboard
    public function dashboard() {
        $data = array();
        $data['title'] = 'Dashboard';
        $data['maincontant'] = $this->load->view('admin/admin_page/home_contant', '', TRUE);
        $this->load->view('admin/admin_master', $data);
    }

//logout
    public function logout() {
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_name');
        $data = array();
        $data['massage'] = "You Logout Successfully";
        $this->session->set_userdata($data);
        redirect('Admin');
    }

//    category item
    public function add_category() {
        $data = array();
        $data['title'] = 'Add Category';
        $data['maincontant'] = $this->load->view('admin/admin_page/add_category', '', TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_category() {
        $data = array();
        $this->Supar_Admin_Model->save_catagory_by_id();
        $data['massage'] = 'Category Save Successfully';
        $this->session->set_userdata($data);
        redirect('Supar_Admin/add_category');
    }

    public function manage_category() {
        $data = array();
        $data['title'] = "Manage Category";
        $data['manage_cate'] = $this->Supar_Admin_Model->manage_category_by_id();
        $data['maincontant'] = $this->load->view('admin/admin_page/manage_category', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function unpublished_category($category_id) {
        $data = array();
        $this->Supar_Admin_Model->unpublished_category_by_id($category_id);
        $data['massege'] = "Category Unpublished Successfully";
        $this->session->set_userdata($data);
        redirect('Supar_Admin/manage_category');
    }

    public function published_category($category_id) {
        $data = array();
        $this->Supar_Admin_Model->published_category_by_id($category_id);
        $data['massage'] = "Category Published Successfully";
        $this->session->set_userdata($data);
        redirect('Supar_Admin/manage_category');
    }

    public function edit_category($category_id) {
        $data = array();
        $data['title'] = "Edit Category";
        $data['edit_categor'] = $this->Supar_Admin_Model->edit_category_by_info($category_id);
        $data['maincontant'] = $this->load->view('admin/admin_page/edit_category', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_category() {
        $data = array();
        $this->Supar_Admin_Model->update_category_by_info();
        $data['massage'] = "Category Update Successfully";
        $this->session->set_userdata($data);
        redirect('Supar_Admin/manage_category');
    }

    public function delete_category($category_id) {
        $data = array();
        $this->Supar_Admin_Model->delete_category_by_info($category_id);
        $data['massege'] = "Category Delete Successfully";
        $this->session->set_userdata($data);
        redirect('Supar_Admin/manage_category');
    }

//    manufacturer product
    public function add_manufacturer() {
        $data = array();
        $data['title'] = "Add Manufacturer";
        $data['published_category'] = $this->Supar_Admin_Model->all_published_category();
        $data['maincontant'] = $this->load->view('admin/admin_page/add_manufacturer', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_manufacturer() {
        $data = array();
        $this->Supar_Admin_Model->save_manufacturer_info();
        $data['massage'] = 'Manufacturer Save Successfully';
        $this->session->set_userdata($data);
        redirect('Supar_Admin/add_manufacturer');
    }

    public function manage_manufacturer() {
        $data = array();
        $data['title'] = 'Manage Manufacturer';
        $data['manufacturer_item'] = $this->Supar_Admin_Model->manage_manufacturer_info();
        $data['maincontant'] = $this->load->view('admin/admin_page/manage_manufacturer', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function unpublished_manufacturer($manufacturer_id) {
        $data = array();
        $this->Supar_Admin_Model->unpublished_manufacturer_info($manufacturer_id);
        $data['massage'] = "Manufacturer Product Unpublished Successfully";
        $this->session->set_userdata($data);
        redirect('Supar_Admin/manage_manufacturer');
    }

    public function published_manufacturer($manufacturer_id) {
        $data = array();
        $this->Supar_Admin_Model->published_manufacturer_info($manufacturer_id);
        $data['massag'] = "Manufacturer Product published Successfully";
        $this->session->set_userdata($data);
        redirect('Supar_Admin/manage_manufacturer');
    }

    public function edit_manufacturer($manufacturer_id) {
        $data = array();
        $data['title'] = 'Edit Manufacturer';
        $data['edit_manufacturer'] = $this->Supar_Admin_Model->edit_manufacturer_info($manufacturer_id);
        $data['maincontant'] = $this->load->view('admin/admin_page/edit_manufacturer', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_manufacturer() {
        $data = array();
        $this->Supar_Admin_Model->update_manufacturer_info();
        $data['massage'] = "Manufacturer Product update successfully";
        $this->session->set_userdata($data);
        redirect('Supar_Admin/manage_manufacturer');
    }

    public function delete_manufacturer($manufacturer_id) {
        $data = array();
        $this->Supar_Admin_Model->delete_manufacturer_by_info($manufacturer_id);
        $data['massge'] = 'Manufacturer product delete successfully';
        $this->session->set_userdata($data);
        redirect('Supar_Admin/manage_manufacturer');
    }

//    product item
    public function add_product() {
        $data = array();
        $data['title'] = 'Add Product';
        $data['published_category'] = $this->Supar_Admin_Model->all_published_category();
        $data['published_manufacturer'] = $this->Supar_Admin_Model->all_publidhed_manufacturer();
        $data['maincontant'] = $this->load->view('admin/admin_page/add_product', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_product() {
        /*
         * Start product image 
         */
        $config['upload_path'] = './product_image_path/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 1024;
        $config['max_width'] = 0;
        $config['max_height'] = 0;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('product_image')) {
            $error = array('error' => $this->upload->display_errors());
            $data['massage'] = $error;
            $this->session->set_userdata($data);
            redirect('Supar_Admin/add_product');
        } else {
            $data = array('upload_data' => $this->upload->data());
            $upload_path = $config['upload_path'] . $data['upload_data']['file_name'];
        }

        /*
         * end product image
         */
        $data = array();
        $this->Supar_Admin_Model->save_product_by_info($upload_path);
        $data['massage'] = "Product Save successfully";
        $this->session->set_userdata($data);
        redirect('Supar_Admin/add_product');
    }

    public function manage_product() {
        $data = array();
        $data['title'] = 'Manage product';
        $data['take_product'] = $this->Supar_Admin_Model->manage_product_by_info();
        $data['maincontant'] = $this->load->view('admin/admin_page/manage_product', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function unpublish_product($product_id) {
        $data = array();
        $this->Supar_Admin_Model->unpublish_product_by_info($product_id);
        $data['massage'] = "Product Unpublish Successfully";
        $this->session->set_userdata($data);
        redirect('Supar_Admin/manage_product');
    }

    public function publish_product($product_id) {
        $data = array();
        $this->Supar_Admin_Model->publish_product_by_info($product_id);
        $data['massag'] = "Product publish Successfully";
        $this->session->set_userdata($data);
        redirect('Supar_Admin/manage_product');
    }

    public function edit_product($product_id) {
        $data = array();
        $data['title'] = "Edit Product";
        $data['published_category'] = $this->Supar_Admin_Model->all_published_category();
        $data['published_manufacturer'] = $this->Supar_Admin_Model->all_publidhed_manufacturer();
        $data['edit_data'] = $this->Supar_Admin_Model->edit_product_by_info($product_id);
        $data['maincontant'] = $this->load->view('admin/admin_page/edit_product', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_product() {
        /*
         * Start product image 
         */
        $config['upload_path'] = './product_image_path/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 1024;
        $config['max_width'] = 0;
        $config['max_height'] = 0;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('product_image')) {
            $error = array('error' => $this->upload->display_errors());
            $data['massage'] = $error;
            $this->session->set_userdata($data);
            redirect('Supar_Admin/add_product');
        } else {
            $data = array('upload_data' => $this->upload->data());
            $upload_path = $config['upload_path'] . $data['upload_data']['file_name'];
        }

        /*
         * end product image
         */
        $data = array();
        $this->Supar_Admin_Model->update_product_by_info($upload_path);
        $data['massag'] = 'Product Update Successfully';
        $this->session->set_userdata($data);
        redirect('Supar_Admin/manage_product');
    }

    public function delete_product($product_id) {
        $data = array();
        $this->Supar_Admin_Model->delete_product_by_info($product_id);
        $data['massa'] = 'Product delete successfully';
        $this->session->set_userdata($data);
        redirect('Supar_Admin/manage_product');
    }

}
