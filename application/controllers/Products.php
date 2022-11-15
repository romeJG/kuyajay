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

        //this should be in functions
        $this->load->library('upload');
        $this->load->library('image_lib');
    }
    public function add_product()
    {

        //set conofiguration for the upload library
        $image_config['upload_path'] = './uploads/images/';
        $image_config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        // $config['max_size'] = '10000';
        // $config['max_width'] = '10000';
        // $config['max_height'] = '10000';
        // $config['encrypt_name'] = true;

        $this->upload->initialize($image_config);

        //set configurations for image manipulation library
        $manip_config['image_library'] = 'gd2';
        $manip_config['maintain_ratio'] = true;
        $manip_config['width'] = 75;
        $manip_config['height'] = 50;
        $manip_config['new_image'] = './uploads/images/thumbs/';
        $manip_config['source_image'] = '';
        $manip_config['create_thumb'] = true;
        // $manip_config['tumb_marker'] = true;
        $this->image_lib->initialize($manip_config);



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

            if ($this->upload->do_upload('prod_image')) {
                $image_data = $this->upload->data();
                $manip_config['source_image'] = $image_data["full_path"];
                $this->image_lib->initialize($manip_config);
                $this->image_lib->resize();
                $this->image_lib->clear();
            } else {
                $error = array('error' => $this->upload->display_errors());
                $this->index();
            }




            redirect('home/view_products');
        }
    }
}
