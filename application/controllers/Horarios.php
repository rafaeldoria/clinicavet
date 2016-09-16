<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Horarios
 *
 * @author admin
 */
class Horarios extends CI_Controller{
    public function index() {
        autorizar();
        $this->load->template("horarios_funcionarios");

    }

    public function novo() {

        $funcao = array(
            "horarioinicio" => $this->input->post('horario_inicio'),
            "horariofim" => $this->input->post('horario_fim')
        );

        $this->load->model("horarios_model");
        $this->horarios_model->salva_horario($funcao);
        redirect("/horarios");
    }
}
