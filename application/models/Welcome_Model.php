<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Welcome_Model extends CI_Model {

    public function get_category_by_info() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status', 1);
        $qury_result = $this->db->get();
        $result = $qury_result->result();
        return $result;
    }

    public function get_manufactur_by_info() {
        $this->db->select('*');
        $this->db->from('tbl_manufacturer');
        $this->db->where('publication_status', 1);
        $qury_result = $this->db->get();
        $result = $qury_result->result();
        return $result;
    }

    public function all_publish_product_by_info() {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('publication_status', 1);
        $this->db->order_by('product_id', 'DESC');
        $this->db->limit('6');
        $qury_result = $this->db->get();
        $result = $qury_result->result();
        return $result;
    }

    public function all_featech_product_by_info() {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('publication_status', 1);
        $this->db->order_by('product_id', 'DESC');
        $qury_result = $this->db->get();
        $result = $qury_result->result();
        return $result;
    }

    public function all_slider_image_by_info() {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('	is_featured', 1);
        $this->db->where('publication_status',1);
        $this->db->order_by('product_id', 'DESC');
        $this->db->limit('3');
        $qury_result = $this->db->get();
        $result = $qury_result->result();
        return $result;
    }

    public function category_publish_product_by_info($category_id) {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('publication_status', 1);
        $this->db->where('	category_id', $category_id);
        $this->db->order_by('product_id', 'DESC');
        $qury_result = $this->db->get();
        $result = $qury_result->result();
        return $result;
    }

    public function manufacturer_product_by_info($manufacturer_id) {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('publication_status', 1);
        $this->db->where('manufacturer_id', $manufacturer_id);
        $this->db->order_by('product_id', 'DESC');
        $qury_result = $this->db->get();
        $result = $qury_result->result();
        return $result;
    }

    public function product_details_by_info($product_id) {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->join('tbl_manufacturer', 'tbl_manufacturer.manufacturer_id=tbl_product.manufacturer_id');
        $this->db->where('product_id', $product_id);
        $qury_result = $this->db->get();
        $result = $qury_result->row();
        return $result;
    }

}
