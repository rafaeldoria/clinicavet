<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuarios_model
 *
 * @author PC Niiel
 */
class usuarios_model extends CI_Model{
    public function buscaLogin($login, $senha){
        $this->db->where("loginusuario", $login);
        $this->db->where("senhausuario", $senha);        
        $usuario = $this->db->get("usuarios")->row_array();
        return $usuario;
    }
}
