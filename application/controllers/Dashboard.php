<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index(){
        $data['title']='Dashboard';
        $this->load->view('page/dashboard',$data);
    }

    public function page($id=''){
        $data['title']='Dashboard';
        echo "uri 1 ".$this->uri->segment(1)."</br>";
        echo "uri 2 ".$this->uri->segment(2)."</br>";
        echo "uri 3 ".$this->uri->segment(3)."</br>";

        if("Dashboard"=="dashboard"){
            echo "benar";
        }else{
            echo "salah";
        }
        // $this->load->view('page/dashboard',$data);
    }

    public function page_vina($id=''){
        $data['title']='Dashboard';
        echo "uri 1 ".$this->uri->segment(1)."</br>";
        echo "uri 2 ".$this->uri->segment(2)."</br>";
        echo "uri 3 ".$this->uri->segment(3)."</br>";
        // $this->load->view('page/dashboard',$data);
    }

}

?>