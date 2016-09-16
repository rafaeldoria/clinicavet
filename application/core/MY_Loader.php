<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Loader extends CI_Loader {

    public function template($nome, $dados = array()) {
        $this->view("includes/header");
        $this->view("includes/menu");
        //$this->view("includes/sidibar");
        $this->view("includes/body");
        $this->view($nome, $dados);
        $this->view("includes/footer");
    }
}