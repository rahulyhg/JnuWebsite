<?php

class Academics extends CI_Controller {

    public function index(){
        echo 'comming soon';
    }

    public function faculty() {
        $data['title'] = 'Faculty';
        $this->load->view('templates/Header', $data);
        $this->load->view('academics/faculty');
        $this->load->view('templates/Footer');
    }

}
