<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class data_kontrak extends CI_Controller {

public function index(){
    $data['title']='Data Kontrak';
    $this->load->view('page/Master_Data/data_kontrak',$data);
}

}
?>