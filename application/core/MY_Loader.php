<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Loader extends CI_Loader{

    public function main_template($nome, $dados = array()){
        $this->view("template/header.php");
        $this->view($nome, $dados);
        $this->view("template/footer.php");
    }


}