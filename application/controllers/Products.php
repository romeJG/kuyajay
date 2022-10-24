<?php
class Products extends CI_Controller
{
    public function __construct()
    {
        //never load libraries or models in here.
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
    public function add_product()
    {

        $this->load->library('form_validation'); //includes the form validation library.
        //set form validation rules
        $this->form_validation->set_rules('prod_name', 'Product Name', 'required|is_unique[tblproducts.prod_name]', array('is_unique' => '$s already exist'));
        $this->form_validation->set_rules('prod_description', 'Product description', 'required');
        // use required|numeric to add multiple validations
        $this->form_validation->set_rules('prod_price', 'Product Price', 'required|numeric');

        // Run the form validation
        // if the return of the validation is false it will refresh the page index().
        if ($this->form_validation->run() == FALSE) {

            $this->index();
        } else {
            //get the form's data and put it in the $data array.
            $data = array(
                'prod_name' => $this->input->post('prod_name'),
                'prod_description' => $this->input->post('prod_description'),
                'prod_price' => $this->input->post('prod_price')
            );
            //loads the products model
            //kaya natin dito nilagay kasi dito lang gagamitin.
            $this->load->model('Products_model');
            //save the data to the database
            $this->Products_model->save_product($data);
            redirect('home/view_products');
        }
    }
}
