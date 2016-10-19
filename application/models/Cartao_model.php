<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cartao_model extends CI_Model{

    public function salvaCartao($cartao){
        $this->db->insert('cartao', $cartao);
    }

    public function pegaCartoesUsuario($id){
        $this->db->where('cd_usuario', $id);
        $this->db->where('status', 1);
        return $this->db->get('cartao')->result_array();
    }

    public function pegaCartao($id){
        $this->db->where('cd_cartao', $id);
        $this->db->where('status', 1);
        return $this->db->get('cartao')->row_array();
    }

    public function editaCartao($id, $carteira){
        $this->db->where('cd_cartao', $id);
        $this->db->update('cartao', $carteira);
    }

    public function deletaCartao($id){
        $tables = array('cartao'); // TODO deletar movimentacoes ao deletar a cartao
        $this->db->where('cd_cartao', $id);
        $this->db->delete($tables);
    }




}