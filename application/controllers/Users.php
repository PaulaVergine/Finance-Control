<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function newUser(){

        

        if($this->input->post('submitEmail')){
            $email = $this->input->post('email');
            
            $parametros = array('email' => $email);
            
            $this->load->view("users/new_user.php",$parametros);
            
        }elseif ($this->input->post('submitUser')){
            $this->load->view("users/new_user_conf.php");
        }else{
            $this->load->view("users/new_user.php");
        }
        
    }
}