<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TiposUsuarios_model
 *
 * @author admin
 */
class TiposUsuarios_model extends CI_Model{
    
    public function salva_tipousuario($tipoDeUsuario){
        $this->db->insert("tiposusuarios",$tipoDeUsuario);
    }
    
    public function retorna_tiposDeUsuarios(){
        $this->db->order_by("tipousuario", "asc");
        $consulta = $this->db->get("tiposusuarios");

        return $consulta;
    }
    
}
