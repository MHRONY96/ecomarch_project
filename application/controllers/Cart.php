<?php

defined('BASEPATH') or exit("No direct script access allowed");

Class Cart extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Cart_Model');
        $this->load->library('cart');
    }

    public function add_to_cart() {
        $product_id = $this->input->post('product_id', TRUE);
        $qty = $this->input->post('qty', TRUE);
        $product_info = $this->Cart_Model->select_product_id($product_id);

        $data = array(
            'id' => $product_info->product_id,
            'qty' => $qty,
            'price' => $product_info->product_new_price,
            'name' => $product_info->product_name,
            'options' => array('image' => $product_info->product_image)
        );

        $this->cart->insert($data);
        redirect('Cart/show_cart');
    }

    public function show_cart() {
        $data = array();
        $data['title'] = 'Cart | E-shopar';
        $data['recommend_item'] = '';
        $data['brand_item'] = '';
        $data['catagory'] = '';
        $data['features_item'] = $this->load->view('fontend/fontend_page/cart_view', '', TRUE);
        $data['slider_contant'] = '';
        $this->load->view('fontend/font_master', $data);
    }

    public function delete_cart($rowid) {
        $data = array(
            'rowid' => $rowid,
            'qty' => 0
        );

        $this->cart->update($data);
        redirect('Cart/show_cart');
    }

    public function update_cart() {
        $qty = $this->input->post('qty', TRUE);
        $rowid = $this->input->post('rowid', TRUE);
        $data = array(
            'qty' => $qty,
            'rowid' => $rowid
        );

        $this->cart->update($data);
        redirect('cart/show_cart');
    }

}
