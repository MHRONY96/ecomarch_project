<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Cart_Model extends CI_Model{
    
    public function select_product_id($product_id){
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('product_id', $product_id);
        $qury_result = $this->db->get();
        $result = $qury_result->row();
        return $result;
    }
}
