<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carteira_model extends CI_Model{

    public function salvaCarteira($carteira){
        $this->db->insert('carteira', $carteira);
    }

    public function pegaCarteirasUsuario($id){
        $this->db->where('cd_usuario', $id);
        $this->db->where('status', 1);
        return $this->db->get('carteira')->result_array();
    }



}