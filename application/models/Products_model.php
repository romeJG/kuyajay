<?php
class Products_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_products_no_limit()
    { // Get records without limit and offset
        //Equivalent to: SELECT * FROM tblproducts
        $this->db->order_by('prod_id');
        $query = $this->db->get('tblproducts');
        $result = $query->result();
        return $result;

        // The three lines of code above is equivalent to the one below.
        //return $this->db->get('tblproducts')->result();
    }

    public function get_products($limit, $offset)
    { // Get records with limit and offset
        //Equivalent to: SELECT * FROM tblproducts
        $query = $this->db->get('tblproducts');
        $result = $query->result();
        return $result;

        // The three lines of code above is equivalent to the one below.
        //return $this->db->get('tblproducts')->result();
    }

    public function get_products_where($name)
    { // Get records with filter
        //Equivalent to: SELECT * FROM tblproducts WHERE prod_id != 1
        $where = array('prod_name' => $name);
        $query = $this->db->get_where('tblproducts', $where);

        // The two lines of code above is equivalent to the two lines below.
        // $this->db->where('prod_name', $name);
        // $query = $this->db->get('tblproducts');

        $result = $query->result();
        return $result;

        // The three lines of code above is equivalent to the one below.
        //return $this->db->get('tblproducts')->result();
    }

    //Save the records to the database
    public function save_product($data)
    {
        $this->db->insert('tblproducts', $data);
        //
    }
}
