<?php

class Enviaremail{

    public function enviar($to, $msg, $subject){

        $ci = get_instance();

        $ci->load->library('email');

        $config['protocol'] = 'sendmail';
        $config['mailtype'] = 'html';

        $config['wordwrap'] = TRUE;
        $config['validate'] = TRUE;
        $config['newline'] = "\r\n";
        $config['crlf'] = "\r\n";

        $ci->email->initialize($config);
        $ci->email->from('admin@financecontrol.esy.es', 'Finance Control');
        $ci->email->to($to);
        $ci->email->subject($subject);
        $ci->email->message($msg);
        $ci->email->send();
        
        return true;
        
    }

}