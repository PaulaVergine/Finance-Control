<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movimentacao_model extends CI_Model{

    public function salvaMovimentacao($movimentacao){
        $this->db->insert('movimentacao', $movimentacao);
    }

    public function pegaMovimentacoesTabela($id_table, $type){
        $this->db->where('id_destino', $id_table);
        $this->db->where('ds_tipo', $type);
        return $this->db->get('movimentacao')->result_array();
    }

    public function pegaMovimentacoesCarteira(){
        $this->db->where('ds_destino', 1);
        $this->db->or_where('ds_origem', 1);
        return $this->db->get('movimentacao')->result_array();
    }

    public function pegaMovimentacoesCarteiraPorData($data){
        return $this->db->query("SELECT * FROM movimentacao WHERE (ds_destino = 1 OR ds_origem = 1) AND dt_movimentacao BETWEEN '$data[0]-$data[1]-1' AND '$data[0]-$data[1]-31' ")->result_array();
    }

    public function pegaMovimentacoesConta(){
        $this->db->where('ds_destino', 2);
        $this->db->or_where('ds_origem', 2);
        return $this->db->get('movimentacao')->result_array();
    }
    public function pegaMovimentacoesCartao(){
        $this->db->where('ds_destino', 3);
        $this->db->or_where('ds_origem', 3);
        return $this->db->get('movimentacao')->result_array();
    }

}