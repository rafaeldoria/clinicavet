<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Funcionarios
 *
 * @author Rafael
 */
class Funcionarios extends CI_Controller {

    public function index() {
        $this->load->view("includes/header");
        $this->load->view("includes/menu");
        //$this->load->view("includes/sidibar");
        
        
        $this->load->model("form_model");
        $estados = $this->form_model->retorna_estados();
        $option = "<option value=''></option>";
        foreach ($estados->result() as $linha) {
            $option .= "<option value='$linha->idestados'>$linha->siglaestado</option>";
        }
        $dados ['estados'] = $option;
        $this->load->view("formulario", $dados);
        $this->load->view("includes/footer");
    }

    public function busca_cidades_por_estados() {

        $this->load->model("form_model");

        $cidades = $this->form_model->retorna_cidades_por_estados();

        $option = "<option value=''></option>";
        foreach ($cidades->result() as $linha) {
            $option .= "<option value='$linha->idcidade'>$linha->nomecidade</option>";
        }

        echo $option;
    }

}
