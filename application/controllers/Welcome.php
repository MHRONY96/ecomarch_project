<?php
defined('BASEPATH') OR exit('No direct script access allowed' );

Class Welcome extends CI_Controller {

    public function index() {
        $data = array();
        $data['title'] = 'Home | E-shopor';
        $data['publish_product']= $this->Welcome_Model->all_publish_product_by_info();
        $data['recommend_item'] = $this->load->view('fontend/fontend_page/recommend_item', '', TRUE);
        $data['brand_item'] = $this->load->view('fontend/fontend_page/brand_item', '', TRUE);
        $data['features_item'] = $this->load->view('fontend/fontend_page/featurch_item', $data, TRUE);
        $data['catagory'] = $this->load->view('fontend/fontend_page/catagorey', '', TRUE);
        $data['slider_contant'] = $this->load->view('fontend/fontend_page/slider_contant', '', TRUE);
        $this->load->view('fontend/font_master', $data);
    }

    public function account() {
        $data = array();
        $data['title'] = 'Account | E-shopor';
        $data['recommend_item'] = '';
        $data['brand_item'] = '';
        $data['features_item'] = $this->load->view('fontend/fontend_page/account', '', TRUE);
        $data['catagory'] = $this->load->view('fontend/fontend_page/catagorey', '', TRUE);
        $data['slider_contant'] = '';
        $this->load->view('fontend/font_master', $data);
    }

    public function login() {
        $data = array();
        $data['title'] = 'Login | E-shopar';
        $data['recommend_item'] = '';
        $data['brand_item'] = '';
        $data['catagory'] = '';
        $data['features_item'] = $this->load->view('fontend/fontend_page/login_user', '', TRUE);
        $data['slider_contant'] = '';
        $this->load->view('fontend/font_master', $data);
    }

    public function shop() {
        $data = array();
        $data['title'] = "Shop | E-shopor";
        $data['recommend_item'] = '';
        $data['brand_item'] = '';
        $data['all_featch_product']= $this->Welcome_Model->all_featech_product_by_info();
        $data['features_item'] = $this->load->view('fontend/fontend_page/shop', $data, TRUE);
        $data['catagory'] = $this->load->view('fontend/fontend_page/catagorey', '', TRUE);
        $data['slider_contant'] = '';
        $this->load->view('fontend/font_master', $data);
    }

    public function product_details($product_id) {
        $data = array();
        $data['title'] = 'Product Detalis | E-shopar';
        $data['product_detels']= $this->Welcome_Model->product_details_by_info($product_id);
        $data['recommend_item'] = $this->load->view('fontend/fontend_page/recommend_item', '', TRUE);
        $data['brand_item'] = '';
        $data['catagory'] = $this->load->view('fontend/fontend_page/catagorey', '', TRUE);
        $data['slider_contant'] = '';
        $data['features_item'] = $this->load->view('fontend/fontend_page/product_detalis', $data, TRUE);
        $this->load->view('fontend/font_master', $data);
    }
   
    public function blog_list(){
        $data = array();
        $data['title'] = 'Blog List | E-shopar';
        $data['recommend_item'] = '';
        $data['brand_item'] = '';
        $data['catagory'] = $this->load->view('fontend/fontend_page/catagorey', '', TRUE);
        $data['features_item'] = $this->load->view('fontend/fontend_page/blog_list', '', TRUE);
        $data['slider_contant'] = '';
        $this->load->view('fontend/font_master', $data);
    }
    
    public function blog_single(){
        $data = array();
        $data['title'] = 'Blog List | E-shopar';
        $data['recommend_item'] = '';
        $data['brand_item'] = '';
        $data['catagory'] = $this->load->view('fontend/fontend_page/catagorey', '', TRUE);
        $data['features_item'] = $this->load->view('fontend/fontend_page/blog_single', '', TRUE);
        $data['slider_contant'] = '';
        $this->load->view('fontend/font_master', $data);
    }
    
    public function category_product($category_id){
        $data = array();
        $data['title'] = 'Home | E-shopor';
        $data['publish_product']= $this->Welcome_Model->category_publish_product_by_info($category_id);
        $data['recommend_item'] = $this->load->view('fontend/fontend_page/recommend_item', '', TRUE);
        $data['brand_item'] = $this->load->view('fontend/fontend_page/brand_item', '', TRUE);
        $data['features_item'] = $this->load->view('fontend/fontend_page/category_product', $data, TRUE);
        $data['catagory'] = $this->load->view('fontend/fontend_page/catagorey', '', TRUE);
        $data['slider_contant'] = '';
        $this->load->view('fontend/font_master', $data);
    }
    
    public function manufacturer_product($manufacturer_id){
        $data = array();
        $data['title'] = 'Home | E-shopor';
        $data['publish_product']= $this->Welcome_Model->manufacturer_product_by_info($manufacturer_id);
        $data['recommend_item'] = $this->load->view('fontend/fontend_page/recommend_item', '', TRUE);
        $data['brand_item'] = $this->load->view('fontend/fontend_page/brand_item', '', TRUE);
        $data['features_item'] = $this->load->view('fontend/fontend_page/brand_product', $data, TRUE);
        $data['catagory'] = $this->load->view('fontend/fontend_page/catagorey', '', TRUE);
        $data['slider_contant'] = '';
        $this->load->view('fontend/font_master', $data);
    }

}
