<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Outsourcing extends CI_Controller {

    public function index(){
        $data['title']='Data Outsourcing';
        $this->load->view('page/Outsourcing/dataOutSourcing',$data);
    }
    public function index1(){
        $data['title']='Master data';
        $this->load->view('page/Master_Data/direktorat',$data);
    }
    
}

?>