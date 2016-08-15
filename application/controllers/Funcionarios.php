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
        $estados = $this->form_model->busca_estados();

        $option = "<option value=''></option>";
        foreach ($estados->result() as $estado) {
            $option .= "<option value='$estado->siglaestado'>$estado->siglaestado</option>";
        }
        $dados['options_estados'] = $option;       

        $this->load->view("formulario", $dados);
        $this->load->view("includes/footer");
    }

}
