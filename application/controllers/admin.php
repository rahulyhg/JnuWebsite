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
        
        if ($this->session->userdata('userid') != null) {
            $this->load->view('templates/admin_header');
            $this->load->view("Admin/index");
            $this->load->view('templates/admin_footer');
        }  else {
            redirect('/admin/login', 'refresh');
        }
    }
    
    
    public function login() {
        if ($this->session->userdata('userid') != null) {
            redirect('/admin', 'refresh');
        }
        else {
            $this->load->view('Admin/login');
        }
        
        
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

            $result = $this->admin_model->LoginCheck($data);
            if ($result->num_rows() > 0) {
                $row = $result->row();
                $loged_user_data = array(
                    'fullname' => $row->FullName,
                    'username' => $this->input->post('user'),
                    'password' => $this->input->post('pass'),
                    'email' => $row->Email,
                    'designation' => $row->designationId,
                    'userid' => $row->Id,
                    'roleid' => $row->Role,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($loged_user_data);
                redirect('/admin', 'refresh');
            } else {
                $query['errMsg'] = "<br/>User Name or Password is not Exist";
                $this->load->view('admin/login', $query);
                return;
            }
        }
    }
    
    public function logout() {
        $loged_user_data = array(
            'fullname' => '',
            'username' => '',
            'password' => '',
            'email' => '',
            'designation' => '',
            'userid' => '',
            'roleid' => '',
            'logged_in' => FALSE
        );
        $this->session->unset_userdata($loged_user_data);
        $this->session->sess_destroy();
        redirect('/admin/login', 'refresh');
    }
    
    
    
    
}