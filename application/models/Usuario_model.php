<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model{

    public function verificaLogin($email,$senha){
        $this->db->where('nm_email',$email);
        $this->db->where('cd_senha',$senha);
        return $this->db->get("usuario")->row_array();
    }

    public function pegaUsuarioById($id){
        $this->db->where('cd_usuario',$id);
        return $this->db->get("usuario")->row_array();
    }

    public function verificaUsuarioExistente($email){
        $this->db->where('nm_email',$email);
        return $this->db->get("usuario");
    }

    public function salvaUsuario($usuario){
        $this->db->insert('usuario', $usuario);
    }

}