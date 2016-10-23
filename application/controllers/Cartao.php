<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cartao extends CI_Controller {

    public function novoCartao(){
        $usuario = $this->session->userdata('usuario_logado');

        if(isset($_POST)){
            $cartao = array(
                'nm_cartao' => $this->input->post('nome'),
                'ds_cor' => $this->input->post('cor'),
                'tipo' => $this->input->post('tipo'),
                'bandeira' => $this->input->post('bandeira'),
                'dt_vencimento' => $this->input->post('dt_vencimento'),
                'dt_validade' => $this->input->post('dt_validade'),
                'cd_usuario' => $usuario['cd_usuario'],
                'status' => 1
            );
            $this->load->model('cartao_model');
            $this->cartao_model->salvaCartao($cartao);
        }
        redirect("controle/index");
    }

    public function deletarCartao($id_cartao){
        $usuario = $this->session->userdata('usuario_logado');

        $this->load->model('cartao_model');
        $cartao = $this->cartao_model->pegaCartao($id_cartao);

        if($usuario['cd_usuario'] == $cartao['cd_usuario']){
            $cartao['status'] = 0;
            $this->cartao_model->deletaCartao($id_cartao, $cartao);
            $this->session->set_flashdata("aviso", "<p class='alert alert-success text-center' id='aviso'><strong>Deletado cartão com sucesso</strong></p>");
        }else{
            $this->session->set_flashdata("aviso", "<p class='alert alert-danger text-center' id='aviso'><strong>Erro ao deletar cartão, Não Autorizado</strong></p>");
        }
        redirect("controle/index");
    } 

    public function editarCartao($id_cartao){
        if(isset($_POST)){
            $cartao = array(
                'nm_cartao' => $this->input->post('nome'),
                'ds_cor' => $this->input->post('cor'),
                'tipo' => $this->input->post('tipo'),
                'bandeira' => $this->input->post('bandeira'),
                'dt_vencimento' => $this->input->post('dt_vencimento'),
                'dt_validade' => $this->input->post('dt_validade')
            );
            $this->load->model('cartao_model');
            $this->cartao_model->editaCartao($id_cartao, $cartao);
        }

        redirect("controle/index");
    }

}