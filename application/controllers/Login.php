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
class Login extends CI_Controller {

    public function index() {
        if ($this->session->userdata("usuario_logado")) {
            redirect("/funcionarios");
        } else {
            $this->load->template("formulario_login");
        }
    }

    public function autenticar() {
        $this->load->model("usuarios_model");
        $login = $this->input->post("login");
        $senha = md5($this->input->post("senha"));
        $usuario = $this->usuarios_model->buscaLogin($login, $senha);
        if ($usuario) {
            $this->session->set_userdata("usuario_logado", $usuario);
            $this->session->set_flashdata("success", "Logado com sucesso");
        } else {
            $this->session->set_flashdata("danger", "Usuário ou senha inválida");
        }
        redirect("/welcome");
    }

    public function logout() {
        $this->session->unset_userdata("usuario_logado");
        $this->session->set_flashdata("success", "Deslogado");
        redirect("/login");
    }

}
