<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Form_model
 *
 * @author PC Niiel
 */
class Funcionarios_model extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function salva($funcionario){
        $this->db->insert("funcionarios", $funcionario);
    }
    
}