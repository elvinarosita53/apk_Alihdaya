<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class direktorat extends CI_Controller {

public function index(){
    $data['title']='Direktorat';
    $this->load->view('page/Master_Data/direktorat',$data);
}

}
?>