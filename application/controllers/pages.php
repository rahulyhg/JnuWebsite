<?php

class Pages extends CI_Controller {

	public function index($page = 'home')
	{
            $this->load->helper('url');
            if(!file_exists('application/views/pages/'.$page.'.php')) {show_404 ();}
            
            $data['title']= ucfirst($page);
            $this->load->view('templates/Header',$data);
            $this->load->view('pages/'.$page);
            $this->load->view('templates/Footer');
	}
        
}