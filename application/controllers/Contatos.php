<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Contatos
 *
 * @author admin
 */
class Contatos extends CI_Controller {

    public function index() {
        //includes 
        $this->load->view("includes/header");
        $this->load->view("includes/menu");
        $this->load->view("includes/sidibar");
        $this->load->view("includes/body");

        $this->load->view("contatos");

        //includes
        $this->load->view("includes/footer");
    }

    public function novo() {
        $contato = array(
            "tipocontato" => $this->input->post("tipo_contato"));
        $this->load->model("contatos_model");
        $this->contatos_model->salva_contato($contato);
        redirect("/");        
    }

}
