<?php

class Pages extends CI_Controller {

	public function index()
	{
            $data['title']='Home';
            $this->load->view('templates/Header',$data);
            $this->load->view('pages/Home');
            $this->load->view('templates/Footer');
	}
        public function contact(){
            $data['title']='Contact';
            $this->load->view('templates/Header',$data);
            $this->load->view('pages/Contact');
            $this->load->view('templates/Footer');
        }
        public function news()
	{            
            $data['title']= 'News';
            $this->load->view('templates/Header',$data);
            $this->load->view('pages/News');
            $this->load->view('templates/Footer');
	}
        public function newsDetails()
	{            
            $data['title']= 'News';
            $this->load->view('templates/Header',$data);
            $this->load->view('pages/NewsDetails');
            $this->load->view('templates/Footer');
	}public function events()
	{            
            $data['title']= 'Events';
            $this->load->view('templates/Header',$data);
            $this->load->view('pages/Events');
            $this->load->view('templates/Footer');
	}
        public function eventDetails()
	{            
            $data['title']= 'Event';
            $this->load->view('templates/Header',$data);
            $this->load->view('pages/EventDetails');
            $this->load->view('templates/Footer');
	}
}