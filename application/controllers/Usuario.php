<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function novoUsuario(){

        if($this->input->post('submitEmail')){
            $email = $this->input->post('email');
            
            $parametros = array('email' => $email);
            
            $this->load->view("usuario/novo_usuario.php",$parametros);
            
        }elseif ($this->input->post('submitUser')){
            if($email = $this->input->post('pass') != $email = $this->input->post('passConf')){
                $status = array('danger','<span class="glyphicon glyphicon-exclamation-sign"></span>', 'Senhas não Conferem');
                $this->load->view("usuario/novo_usuario.php", array('status' => $status));
                return;
            }

            $usuario = array(
                'nm_usuario' => $email = $this->input->post('nome'),
                'nm_email' => $email = $this->input->post('email'),
                'cd_senha' => $email = $this->input->post('pass')
            );
         
            $this->load->model('usuario_model');
            if($this->usuario_model->verificaUsuarioExistente($usuario['nm_email'])){
                $this->usuario_model->salvaUsuario($usuario);
                $this->load->view("usuario/novo_usuario_confirm.php");
            }else{
                $status = array('danger','<span class="glyphicon glyphicon-exclamation-sign"></span>', 'Usuario já cadastrado');
                $this->load->view("usuario/novo_usuario.php", array('status' => $status));
            }
        }else{
            
            $this->load->view("usuario/novo_usuario.php");
        }
    }
}