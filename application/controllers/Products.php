<?php
class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }
    public function index()
    {
        $data['title'] = 'Add Product';
        $this->load->view('include/header', $data);
        $this->load->view('include/navbar');
        $this->load->view('add_product_view');
    }
}
