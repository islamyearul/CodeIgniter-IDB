<?php 

class user_model extends CI_Controller{

    function __construct(){
        parent::__construct();
        
    }

    public function register($data){
        return $this->db->insert('user',  $data);
    }

   
    




















}































?> 