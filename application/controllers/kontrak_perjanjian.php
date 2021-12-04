<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class kontrak_perjanjian extends CI_Controller {

public function index(){
    $data['title']='Kontrak Perjanjian';
    $this->load->view('page/Master_Data/kontrak_perjanjian',$data);
}

}
?>