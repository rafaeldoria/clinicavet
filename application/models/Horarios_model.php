<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Horarios_model
 *
 * @author admin
 */
class Horarios_model extends CI_Model {

    public function salva_horario($horario) {
        $this->db->insert("horarios", $horario);
    }

    public function retorna_horarios() {
        $this->db->order_by("horarioinicio", "asc");
        $consulta = $this->db->get("horarios");

        return $consulta;
    }

}
