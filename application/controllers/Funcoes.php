<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Funcoes
 *
 * @author admin
 */
class Funcoes extends CI_Controller {

    public function index() {
        //includes 
        $this->load->view("includes/header");
        $this->load->view("includes/menu");
        $this->load->view("includes/sidibar");
        $this->load->view("includes/body");

        $this->load->view("funcoes_funcionarios");
        
        //includes
        $this->load->view("includes/footer");
    }

    public function novo() {

        $funcao = array(
            "nomefuncao" => $this->input->post('nome_funcao'),
            "descricao" => $this->input->post('descricao')
        );

        $this->load->model("form_model");
        $this->form_model->salva_funcao($funcao);
        redirect("/");
    }

}
