<?php

function pegaOrigemTable($origem, $id_origem){
    $ci =& get_instance();


    $ci->load->model('carteira_model');
    $ci->load->model('conta_model');
    $ci->load->model('cartao_model');

    $nm_origem = ' - ';

    if($origem == 1){
        $carteira = $ci->carteira_model->pegaCarteira($id_origem);
        $nm_origem  = $carteira['nm_carteira'];
    }elseif ($origem == 2){
        $conta = $ci->conta_model->pegaConta($id_origem);
        $nm_origem  = $conta['nm_conta'];

    }elseif ($origem == 3){
        $cartao = $ci->cartao_model->pegaCartao($id_origem);
        $nm_origem  = $cartao['nm_cartao'];
    }

    return $nm_origem;

}