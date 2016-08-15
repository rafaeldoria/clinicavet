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
class Form_model extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    /*public function retorna_departamentos() {

        $this->db->order_by("departamentos_nome", "asc");
        $consulta = $this->db->get("departamentos");

        return $consulta;
    }*/

    public function busca_estados() {
        $this->db->order_by("siglaestado", "asc");
        $estados = $this->db->get("estados");
        return  $estados;
    }

}
