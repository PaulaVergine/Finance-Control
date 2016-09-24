<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function newUser(){

        if($this->input->post('submitEmail')){
            $email = $this->input->post('email');
            
            $parametros = array('email' => $email);
            
            $this->load->view("users/new_user.php",$parametros);
            
        }elseif ($this->input->post('submitUser')){
            if($email = $this->input->post('pass') != $email = $this->input->post('passConf')){
                $status = array('danger','<span class="glyphicon glyphicon-exclamation-sign"></span>', 'Senhas não Conferem');
                $this->load->view("users/new_user.php", array('status' => $status));
                return;
            }

            $user = array(
                'nome' => $email = $this->input->post('nome'),
                'email' => $email = $this->input->post('email'),
                'senha' => $email = $this->input->post('pass')
            );

            $this->load->view("users/new_user_sucess.php");
        }else{
            $this->load->view("users/new_user.php");
        }
        
    }
}