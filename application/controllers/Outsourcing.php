<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Outsourcing extends CI_Controller {

    public function index(){
        $data['title']='Data Outsourcing';
        $this->load->view('page/Outsourcing/dataOutSourcing',$data);
    }
}
class Vendor extends CI_Controller {

    public function index(){
        $data['title']='Data Vendor';
        $this->load->view('page/Data_Vendor/dataVendor',$data);
    }
    
}
?>