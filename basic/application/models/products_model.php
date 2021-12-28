<?php

class Products_model extends CI_Model {
    function __construct(){
        parent:: __construct();
    }


    function get_products_data(){
        $query = $this->db->get('products', 10);
        return $query->result();
    }
}