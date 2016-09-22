<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function newUser(){
        $this->load->view("users/new_user.php");
    }
}