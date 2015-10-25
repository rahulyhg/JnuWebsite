<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Admin_model extends CI_Model{
    
    public function SelectDesignation(){
        $this->load->database();
        $dbObject = $this->db->query("select * from designation");
        
        //print_r($dbObject->result());
        return $dbObject->result();
    }
            
}