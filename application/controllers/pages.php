<?php

class Pages extends CI_Controller {

	public function index()
	{
            $data['title']='Home';
            $this->load->view('templates/Header',$data);
            $this->load->view('pages/Home');
            $this->load->view('templates/Footer');
	}
        public function Contact(){
            $data['title']='Contact';
            $this->load->view('templates/Header',$data);
            $this->load->view('pages/Contact');
            $this->load->view('templates/Footer');
        }
        public function News()
	{            
            $data['title']= 'News';
            $this->load->view('templates/Header',$data);
            $this->load->view('pages/News');
            $this->load->view('templates/Footer');
	}
        
}