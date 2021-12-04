<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class kompartemen extends CI_Controller {

public function index(){
    $data['title']='Kompartemen';
    $this->load->view('page/Master_Data/kompartemen',$data);
}

}
?>