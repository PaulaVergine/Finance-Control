<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {

    public function novaCategoria(){

        $usuario = $this->session->userdata('usuario_logado');

        if(isset($_POST['novaCategoria'])) {
            $cat = array(
                'nm_categoria' => $this->input->post('nome'),
                'ds_cor' => $this->input->post('cor'),
                'cd_usuario' => $usuario['cd_usuario'],
            );

            $this->load->model('categoria_model');
            $this->categoria_model->salvaCategoria($cat);
        }

        return false;
    }
}