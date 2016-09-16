<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TiposDeUsuarios
 *
 * @author admin
 */
class TiposDeUsuarios extends CI_Controller{
    public function index(){
        autorizar();
        $this->load->template("tiposDeUsuarios");
    }
    
    public function novo(){
        $tipoDeUsuario = array(
          "tipousuario" => $this->input->post("tipousuario"),  
          "descricao" => $this->input->post("descricao")  
        );
        
        $this->load->model("tiposusuarios_model");
        $this->tiposusuarios_model->salva_tipousuario($tipoDeUsuario);
        
        redirect("/TiposDeUsuarios");
        
    }
}
