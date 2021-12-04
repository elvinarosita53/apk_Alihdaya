<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class kualifikasi_kerja extends CI_Controller {

public function index(){
    $data['title']='Kualifikasi Kerja';
    $this->load->view('page/Master_Data/kualifikasi_kerja',$data);
}

}
?>