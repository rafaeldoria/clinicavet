<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Clientes
 *
 * @author admin
 */
class Clientes extends CI_Controller{
    
    public function index(){
        $this->load->template("formulario_clientes");
    }
    
    public function novo(){
        
        $cliente = array(
            "nomecliente" => $this->input->post("nome"),
            "enderecocliente" => $this->input->post("endereco"),
            "cepcliente" => $this->input->post("cep"),
            "cpfcliente" => $this->input->post("cpf"),
            "telefonecliente" => $this->input->post("tel_contato")
        );
    }
}
