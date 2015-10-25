<?php

class Academics extends CI_Controller {

	public function Index($page = 'faculty')
	{
            if(!file_exists('application/views/academics/'.$page.'.php')) {echo 'no file';return ;}

            
            $data['title']= ucfirst($page);
            $this->load->view('templates/Header',$data);
            $this->load->view('academics/'.$page);
            $this->load->view('templates/Footer');
	}
        
}