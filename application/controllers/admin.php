<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class Admin extends CI_Controller{
    
    


    public function index(){
        
        $this->load->model("admin_model","admodel");
        $data['designation'] = $this->admodel->SelectDesignation();
        
        
        $this->load->view('templates/admin_header');
        $this->load->view("Admin/admin_index",$data);
        $this->load->view('templates/admin_footer');
    }
    
    
    public function login() {
        $this->load->view('Admin/login');
        
    }
    
    public function logincheck() {
        
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_rules('user', 'UserName', 'required');
        $this->form_validation->set_rules('pass', 'Password', 'required');


        if ($this->form_validation->run() == FALSE) {
            //$this->load->view('Admin/add-faq');
            $query['errMsg'] = "Invalid Inputs";
            $this->load->view('Admin/login', $query);
            return;
        } else {
            // Setting Values For Tabel Columns
            $data = array(
                'UserName' => $this->input->post('user'),
                'Password' => $this->input->post('pass')
            );

            $result = $this->login_model->LoginCheck($data);
            if ($result->num_rows() > 0) {
                $row = $result->row();
                $loged_user_data = array(
                    'fullname' => $row->name,
                    'username' => $this->input->post('user'),
                    'password' => $this->input->post('pass'),
                    'email' => $row->email,
                    'designation' => $row->designation,
                    'organization' => $row->organization,
                    'userid' => $row->id,
                    'roleid' => $row->role_id,
                    'status' => $row->status,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($loged_user_data);
                redirect('/faq/cpanel', 'refresh');
            } else {
                $query['errMsg'] = "<br/>User Name or Password is not Exist";
                $this->load->view('login', $query);
                return;
            }
        }
    }
    
    
}