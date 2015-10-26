<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Admin_model extends CI_Model{
    
   
    public function LoginCheck($data)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('UserName', $data['UserName']);
        $this->db->where('Password', $data['Password']);
        $this->db->where('Role', 1); // 1 for admin role 
        $result = $this->db->get();
        return $result;
    }
            
}