<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Admin extends CI_Controller{
    
    


    public function index(){
        
        $this->load->helper('url');
        $this->load->model("admin_model","admodel");
        $data['designation'] = $this->admodel->SelectDesignation();
        
        
        $this->load->view('templates/admin_header');
        $this->load->view("Admin/admin_index",$data);
        $this->load->view('templates/admin_footer');
    }
    
    
}