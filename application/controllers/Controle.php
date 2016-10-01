<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controle extends CI_Controller {

    public function index(){
        $usuario = $this->session->userdata('usuario_logado');

        $this->load->model('usuario_model');
        $usuario = $this->usuario_model->pegaUsuarioById($usuario['cd_usuario']);
        $categorias = '';
        $contas = '';
        $carteiras = '';
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