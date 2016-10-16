<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conta_model extends CI_Model{

    public function salvaConta($conta){
        $this->db->insert('conta', $conta);
    }

    public function pegaContasUsuario($id){
        $this->db->where('cd_usuario', $id);
        $this->db->where('status', 1);
        return $this->db->get('conta')->result_array();
    }

    public function pegaConta($id){
        $this->db->where('cd_conta', $id);
        $this->db->where('status', 1);
        return $this->db->get('conta')->row_array();
    }

    public function editaConta($id, $carteira){
        $this->db->where('cd_conta', $id);
        $this->db->update('conta', $carteira);
    }

    public function deletaConta($id){
        $tables = array('conta'); // TODO deletar movimentacoes ao deletar a conta
        $this->db->where('cd_conta', $id);
        $this->db->delete($tables);
    }




}