<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class add_template extends CI_Controller {

public function index(){
    $data['title']='ADD Template';
    $this->load->view('page/Outsourcing/add_template',$data);
}

}
?>