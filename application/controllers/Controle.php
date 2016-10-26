<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controle extends CI_Controller {

    public function index(){
        $usuario = $this->session->userdata('usuario_logado');

        if ($usuario == null){
            redirect('../');
        }

        $this->load->model('usuario_model');
        $this->load->model('categoria_model');
        $this->load->model('carteira_model');
        $this->load->model('conta_model');
        $this->load->model('cartao_model');
        $this->load->model('movimentacao_model');

        $data = date('Y-m-d');
        $data = explode('-',$data);

        $mes = $data[1];

        if(isset($_POST['filterMes'])){
            $mes = $this->input->post('filterMes');
            $data = date('Y-m-d');
            $data = explode('-',$data);
            $data[1] = intval($mes);
        }

        $movimentacoes['carteira'] = $this->movimentacao_model->pegaMovimentacoesCarteiraPorData($data);

        $usuario = $this->usuario_model->pegaUsuarioById($usuario['cd_usuario']);
        $categorias = $this->categoria_model->pegaCategoriasUsuario($usuario['cd_usuario']);
        $contas = $this->conta_model->pegaContasUsuario($usuario['cd_usuario']);
        $carteiras = $this->carteira_model->pegaCarteirasUsuario($usuario['cd_usuario']);
        $cartoes = $this->cartao_model->pegaCartoesUsuario($usuario['cd_usuario']);;
        $preferencias = '';
        //$movimentacoes['carteira'] = $this->movimentacao_model->pegaMovimentacoesCarteira();
        $movimentacoes['conta'] = $this->movimentacao_model->pegaMovimentacoesConta();
        $movimentacoes['cartao'] = $this->movimentacao_model->pegaMovimentacoesCartao();

        $paramentros = array(
            'usuario' => $usuario,
            'mes' => $mes,
            'categorias' => $categorias ,
            'carteiras' => $carteiras,
            'cartoes' => $cartoes,
            'contas' => $contas,
            'preferencias' => $preferencias,
            'movimentacoes' => $movimentacoes
        );

        $this->load->main_template('controle/index.php', $paramentros);
    }

}