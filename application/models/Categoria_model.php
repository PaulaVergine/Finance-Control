<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_model extends CI_Model{

    public function SalvaCategoria($categoria){
        $this->db->insert('categoria', $categoria);
    }

    public function pegaCategoriasUsuario($id){

    }



}