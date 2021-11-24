<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Vendor extends CI_Controller {

public function index(){
    $data['title']='Data Vendor';
    $this->load->view('page/Data_Vendor/dataVendor',$data);
}

}
?>