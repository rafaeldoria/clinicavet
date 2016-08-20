<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Contatos_model
 *
 * @author admin
 */
class Contatos_model extends CI_Model{
    
    public function salva_contato($contato){
        $this->db->insert("contatos",$contato);
    }
}
