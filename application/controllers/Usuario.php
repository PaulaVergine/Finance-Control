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

    public function login(){
        if($this->input->post('submitLogin')) {
            $email = $this->input->post('email');
            $senha = $this->input->post('senha');

            $this->load->model('usuario_model');
            $usuario  = $this->usuario_model->verificaLogin($email,$senha);

            if($usuario!=null){
                $this->session->set_userdata("usuario_logado", $usuario);

                $this->load->library('email');

                $config['protocol'] = 'mail';
                $config['mailtype'] = 'text';

                $this->email->initialize($config);
                $this->email->from('jcmartins87@outlook.com', 'Finance Control');
                $this->email->to('jcramone@gmail.com');
                $this->email->subject('Testeeeee');
                $this->email->message('testesss');
                $this->email->send();

                redirect("controle/index");
            }else{
                $this->session->set_flashdata("aviso", "<p class='alert alert-danger' id='aviso'>Usuário ou senha inválida</p>");
                redirect('../');
            }
        }
    }
    
    public function logoff(){
        unset($_SESSION["usuario_logado"]);
        redirect('../');
    }
    
    


}