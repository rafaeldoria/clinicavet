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
class Funcionarios_model extends CI_Model {

    public function salva($funcionario){
        autorizar();
        $this->db->insert("funcionarios", $funcionario);
    }
    
}