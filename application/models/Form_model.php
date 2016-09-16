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
class Form_model extends CI_Model {

    public function retorna_estados() {
        $this->db->order_by("nomeestado", "asc");
        $consulta = $this->db->get("estados");

        return $consulta;
    }

    public function retorna_cidades_por_estados() {
        $id_estado = $this->input->post("id_estado");
        $this->db->where("estados_idestados", $id_estado);
        $this->db->order_by("nomecidade", "asc");
        $consulta = $this->db->get("cidades");

        return $consulta;
    }

}
