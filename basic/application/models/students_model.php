<?php


class Students_model extends CI_Model{
    function __construct()
    {
        parent:: __construct();
    }


    function get_students(){
        $query = $this->db->get('students', 10);
        return $query->result();

    }




}