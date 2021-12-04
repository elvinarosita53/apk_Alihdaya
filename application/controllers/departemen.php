<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class departemen extends CI_Controller {

public function index(){
    $data['title']='Departemen';
    $this->load->view('page/Master_Data/departemen',$data);
}

}
?>