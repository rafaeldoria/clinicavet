<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author PC Niiel
 */
class Login extends CI_Controller{
    
    public function index(){ 
    //includes 
        $this->load->view("includes/header");
        $this->load->view("includes/menu");
        //$this->load->view("includes/sidibar");
        $this->load->view("includes/body");
  
        $this->load->view("formulario_login");
        //includes
        $this->load->view("includes/footer");
    }
    
    public function autenticar(){
        $this->load->model("usuarios_model");
        $login = $this->input->post("login");
        $senha = $this->input->post("senha");
        $usuario = $this->usuarios_model->buscaLogin($login, $senha);
        if($usuario){
            $this->session->set_userdata("usuario_logado", $usuario); // set_userdata "seta" a session
            $dados = array("mensagem" => "Logado");
        }else{
            $dados = array("mensagem" => "Não Logado");
        }
        $this->load->view("index", $dados);
    }
    
}
