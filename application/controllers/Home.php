<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        // Create an array to be passed to the view
        $data['full_name'] = 'Guillermo, Justine Rome M.';
        $data['title'] = "Kuya Jay's Karinderia";
        $this->load->view('include/header', $data);
        $this->load->view('include/navbar');
        $this->load->view('home_view', $data);
        $this->load->view('include/footer');
    }

    public function view_products()
    {
        $this->load->model('Products_model');
        $data['products'] = $this->Products_model->get_products_no_limit();
        $data['title'] = 'View Products';
        $this->load->view('include/header', $data);
        $this->load->view('include/navbar');
        $this->load->view('product_view', $data);
        $this->load->view('include/footer');
    }
}
