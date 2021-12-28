<?php

if ( ! defined('BASEPATH')) exit ('No direct script access allowed');


class Home extends CI_Controller{

    function __construct(){
        parent:: __construct();
        // $this->load->library('database');
        // $this->load->database();        
       

    }


    public function index(){
        
        $this->load->model('Students_model');
        $this->load->model('Products_model');

        $data['students'] = $this->Students_model->get_students();
        $data['products'] = $this->Products_model->get_products_data();

        // print_r($data);

        $this->load->view('home', $data);
    }

    public function about(){
        $this->load->view('about');
    }
}



