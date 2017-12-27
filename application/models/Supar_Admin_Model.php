<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Supar_Admin_Model extends CI_Model {

//    category item
    public function save_catagory_by_id() {
        $data = array();
        $data['category_name'] = $this->input->post('category_name', TRUE);
        $data['category_description'] = $this->input->post('category_description', TRUE);
        $data['publication_status'] = $this->input->post('publication_status', TRUE);
        $this->db->insert('tbl_category', $data);
    }

    public function manage_category_by_id() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $qury_result = $this->db->get();
        $result = $qury_result->result();
        return $result;
    }

    public function unpublished_category_by_id($category_id) {
        $this->db->set('publication_status', 0);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category');
    }

    public function published_category_by_id($category_id) {
        $this->db->set('publication_status', 1);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category');
    }

    public function edit_category_by_info($category_id) {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('category_id', $category_id);
        $qury_result = $this->db->get();
        $result = $qury_result->row();
        return $result;
    }

    public function update_category_by_info() {
        $data = array();
        $category_id = $this->input->post('category_id', TRUE);
        $data['category_name'] = $this->input->post('category_name', TRUE);
        $data['category_description'] = $this->input->post('category_description', TRUE);
        $data['publication_status'] = $this->input->post('publication_status', TRUE);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category', $data);
    }

    public function delete_category_by_info($category_id) {
        $this->db->where('category_id', $category_id);
        $this->db->delete('tbl_category');
    }
//    manufacturer model

    public function save_manufacturer_info() {
        $data = array();
        $data['manufacturer_name'] = $this->input->post('manufacturer_name', TRUE);
        $data['manufacturer_description'] = $this->input->post('manufacturer_description', TRUE);
        $data['publication_status'] = $this->input->post('publication_status', TRUE);
        $this->db->insert('tbl_manufacturer', $data);
    }

    public function manage_manufacturer_info() {
        $this->db->select('*');
        $this->db->from('tbl_manufacturer');
        $qury_result = $this->db->get();
        $result = $qury_result->result();
        return $result;
    }

    public function unpublished_manufacturer_info($manufacturer_id) {
        $this->db->set('publication_status', 0);
        $this->db->where('manufacturer_id', $manufacturer_id);
        $this->db->update('tbl_manufacturer');
    }

    public function published_manufacturer_info($manufacturer_id) {
        $this->db->set('publication_status', 1);
        $this->db->where('manufacturer_id', $manufacturer_id);
        $this->db->update('tbl_manufacturer');
    }

    public function edit_manufacturer_info($manufacturer_id) {
        $this->db->select('*');
        $this->db->from('tbl_manufacturer');
        $this->db->where('manufacturer_id', $manufacturer_id);
        $qury_result = $this->db->get();
        $result = $qury_result->row();
        return $result;
    }

    public function update_manufacturer_info() {
        $data = array();
        $manufacturer_id = $this->input->post('manufacturer_id', TRUE);
        $data['manufacturer_name'] = $this->input->post('manufacturer_name', TRUE);
        $data['manufacturer_description'] = $this->input->post('manufacturer_description', TRUE);
        $data['publication_status'] = $this->input->post('publication_status', TRUE);
        $this->db->where('manufacturer_id', $manufacturer_id);
        $this->db->update('tbl_manufacturer', $data);
    }

    public function delete_manufacturer_by_info($manufacturer_id) {
        $this->db->where('manufacturer_id', $manufacturer_id);
        $this->db->delete('tbl_manufacturer');
    }

//    product item
    public function all_published_category() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status', 1);
        $qury_result = $this->db->get();
        $result = $qury_result->result();
        return $result;
    }

    public function all_publidhed_manufacturer() {
        $this->db->select('*');
        $this->db->from('tbl_manufacturer');
        $this->db->where('publication_status', 1);
        $qury_result = $this->db->get();
        $result = $qury_result->result();
        return $result;
    }
    
    public function save_product_by_info($upload_path) {
        $data = array();
        $data['product_name'] = $this->input->post('product_name', TRUE);
        $data['category_id'] = $this->input->post('category_id', TRUE);
        $data['manufacturer_id'] = $this->input->post('manufacturer_id', TRUE);
        $data['product_short_descrip'] = $this->input->post('product_short_descrip', TRUE);
        $data['product_long_descrip'] = $this->input->post('product_long_descrip', TRUE);
        $data['product_price'] = $this->input->post('product_price', TRUE);
        $data['product_new_price'] = $this->input->post('product_new_price', TRUE);
        $data['product_quantity'] = $this->input->post('product_quantity', TRUE);
        $is_featured = $this->input->post('is_featured', TRUE);
        if ($is_featured) {
            $data['is_featured'] = 1;
        } else {
            $data['is_featured'] = 0;
        }
        $data['product_image'] = $upload_path;
        $data['publication_status'] = $this->input->post('publication_status', TRUE);
        $this->db->insert('tbl_product', $data);
    }

    public function manage_product_by_info() {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $qury_result = $this->db->get();
        $result = $qury_result->result();
        return $result;
    }
    
    public function unpublish_product_by_info($product_id){
        $this->db->set('publication_status', 0);
        $this->db->where('product_id', $product_id);
        $this->db->update('tbl_product');
    }
    
    public function publish_product_by_info($product_id){
        $this->db->set('publication_status', 1);
        $this->db->where('product_id', $product_id);
        $this->db->update('tbl_product'); 
    }

    public function edit_product_by_info($product_id){
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('product_id', $product_id);
        $qury_result= $this->db->get();
        $result=$qury_result->row();
        return $result;
    }
    
    public function update_product_by_info($upload_path){
        $data= array();
        $product_id= $this->input->post('product_id', TRUE);
        $data['product_name']= $this->input->post('product_name', TRUE);
        $data['category_id']= $this->input->post('category_id', TRUE);
        $data['manufacturer_id']= $this->input->post('manufacturer_id', TRUE);
        $data['product_short_descrip']= $this->input->post('product_short_descrip', TRUE);
        $data['product_long_descrip']= $this->input->post('product_long_descrip', TRUE);
        $data['product_price']= $this->input->post('product_price', TRUE);
        $data['product_new_price']= $this->input->post('product_new_price', TRUE);
        $data['product_quantity']= $this->input->post('product_quantity', TRUE);
       $is_featured = $this->input->post('is_featured', TRUE);
        if ($is_featured =='on') {
            $data['is_featured'] = 1;
        } else {
            $data['is_featured'] = 0;
        }
        $data['product_image']= $upload_path;
        $data['publication_status']= $this->input->post('publication_status', TRUE);
        $this->db->where('product_id', $product_id);
        $this->db->update('tbl_product', $data);
        
    }
    
    public function delete_product_by_info($product_id){
        $this->db->where('product_id', $product_id);
        $this->db->delete('tbl_product');
    }
}
