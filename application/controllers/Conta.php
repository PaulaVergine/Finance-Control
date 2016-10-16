<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conta extends CI_Controller {
    
    public function novaConta(){
        $usuario = $this->session->userdata('usuario_logado');

        if(isset($_POST)){
            $conta = array(
                'nm_conta' => $this->input->post('nome'),
                'ds_cor' => $this->input->post('cor'),
                'tipo' => $this->input->post('tipo'),
                'banco' => $this->input->post('banco'),
                'cd_usuario' => $usuario['cd_usuario'],
                'status' => 1
            );
            $this->load->model('conta_model');
            $this->conta_model->salvaConta($conta);
        }

        redirect("controle/index");
    }

    public function deletarConta($id_conta){
        $usuario = $this->session->userdata('usuario_logado');

        $this->load->model('conta_model');
        $conta = $this->conta_model->pegaConta($id_conta);

        if($usuario['cd_usuario'] == $conta['cd_usuario']){
            $conta['status'] = 0;
            $this->conta_model->deletaConta($id_conta, $conta);
            $this->session->set_flashdata("aviso", "<p class='alert alert-success text-center' id='aviso'><strong>Deletado conta com sucesso</strong></p>");
        }else{
            $this->session->set_flashdata("aviso", "<p class='alert alert-danger text-center' id='aviso'><strong>Erro ao deletar conta, Não Autorizado</strong></p>");
        }

        redirect("controle/index");

    }

    public function editarConta($id_conta){

        if(isset($_POST)){

            $this->load->model('conta_model');

            $contaAtual = $this->conta_model->pegaConta($id_conta);


            $conta = array(
                'nm_conta' => empty($this->input->post('nome')) ? $contaAtual['nm_conta'] : $this->input->post('nome') ,
                'ds_cor' => $this->input->post('cor'),
                'tipo' => $this->input->post('tipo'),
                'banco' => $this->input->post('banco')
            );

            $this->conta_model->editaConta($id_conta, $conta);
        }

        redirect("controle/index");

    }
    
}