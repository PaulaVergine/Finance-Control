<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {

    public function index(){
        $this->load->main_template('control/index.php');
    }


}