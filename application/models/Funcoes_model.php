<?php

class Funcoes_model extends CI_Model {

    public function retorna_funcoes() {
        $this->db->order_by("nomefuncao", "asc");
        $consulta = $this->db->get("funcoes");

        return $consulta;
    }
        
    public function salva_funcao($funcao) {
        $this->db->insert("funcoes", $funcao);
    }

}
