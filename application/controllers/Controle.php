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

        $usuario = $this->usuario_model->pegaUsuarioById($usuario['cd_usuario']);
        $categorias = $this->categoria_model->pegaCategoriasUsuario($usuario['cd_usuario']);;
        $contas = '';
        $carteiras = $this->carteira_model->pegaCarteirasUsuario($usuario['cd_usuario']);;
        $cartoes = '';
        $preferencias = '';
        $movimentacoes = '';

        $paramentros = array(
            'usuario' => $usuario,
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