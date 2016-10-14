<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carteira extends CI_Controller {
    
    public function novaCarteira(){
        $usuario = $this->session->userdata('usuario_logado');

        if(isset($_POST)){
            $carteira = array(
                'nm_carteira' => $this->input->post('nome'),
                'ds_cor' => $this->input->post('cor'),
                'cd_usuario' => $usuario['cd_usuario'],
                'status' => 1
            );
            $this->load->model('carteira_model');
            $this->carteira_model->salvaCarteira($carteira);
        }

        redirect("controle/index");
    }

    public function deletarCarteira($id_carteira){
        $usuario = $this->session->userdata('usuario_logado');

        $this->load->model('carteira_model');
        $carteira = $this->carteira_model->pegaCarteira($id_carteira);

        if($usuario['cd_usuario'] == $carteira['cd_usuario']){
            $carteira['status'] = 0;
            $this->carteira_model->deletaCarteira($id_carteira, $carteira);
            $this->session->set_flashdata("aviso", "<p class='alert alert-success text-center' id='aviso'><strong>Deletado Carteira com sucesso</strong></p>");
        }else{
            $this->session->set_flashdata("aviso", "<p class='alert alert-danger text-center' id='aviso'><strong>Erro ao deletar Carteira, Não Autorizado</strong></p>");
        }

        redirect("controle/index");

    }
    
}