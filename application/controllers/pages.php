<?php

class Pages extends CI_Controller {

	public function index()
	{
            $this->load->helper('url');
            $data['title']='Home';
            $this->load->view('templates/Header',$data);
            $this->load->view('pages/Home');
            $this->load->view('templates/Footer');
	}
        public function Contact(){
            $this->load->helper('url');
            $data['title']='Contact';
            $this->load->view('templates/Header',$data);
            $this->load->view('pages/Contact');
            $this->load->view('templates/Footer');
        }
        
}