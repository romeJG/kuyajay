<?php
class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation'); //includes the form validation library.
    }
    public function index()
    {
        $data['title'] = 'Add Product';
        $this->load->view('include/header', $data);
        $this->load->view('include/navbar');
        $this->load->view('add_product_view');
    }
    public function add_products()
    {
        //set form validation rules
        $this->form_validation->set_rules('prod_name', 'Product Name', 'required');
        $this->form_validation->set_rules('prod_description', 'Product Name', 'required');
        $this->form_validation->set_rules('prod_price', 'Product Name', 'required');
    }
}
