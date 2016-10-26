<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movimentacao extends CI_Controller {

    public function novo (){
        if($this->input->post('submitRegistro')){
            $registro = array(
              'dt_movimentacao' => $this->input->post('data'),
              'ds_movimentacao' => $this->input->post('desc'),
              'vl_movimentacao' => $this->input->post('valor'),
              'id_categoria' => $this->input->post('categoria'),
              'id_destino' => $this->input->post('id_table'),
              'id_origem' => 0,
              'ds_destino' => 1,
              'ds_origem' => 0,
              'ds_tipo' => 0
            );
            $this->load->model('movimentacao_model');
            $this->movimentacao_model->salvaMovimentacao($registro);
        }
        redirect("controle/index");
    }

}