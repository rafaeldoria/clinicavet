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
        autorizar();
        $this->load->template("contatos");
    }

    public function novo() {
        $contato = array(
            "tipocontato" => $this->input->post("tipo_contato"));
        $this->load->model("contatos_model");
        $this->contatos_model->salva_contato($contato);
        redirect("/contatos");        
    }

}
