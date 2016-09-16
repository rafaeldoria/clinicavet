<?php

class Usuarios extends CI_Controller {

    public function index() {
        $tipoDeUsuario = retorna_tiposDeUsuario();
        $dados ['tipoDeUsuario'] = $tipoDeUsuario;       
        $this->load->template("formulario_usuarios", $dados);
    }

    public function novo() {
        
        $usuario = array(
            "loginusuario" => $this->input->post("loginusuario"),
            "senhausuario" => md5($this->input->post("senhausuario")),
            "tiposusuarios_idtiposusuarios" => $this->input->post("tipoDeUsuario")            
        );

        $this->load->model("usuarios_model");
        $this->usuarios_model->salva_usuario($usuario);

        if ($usuario) {
            $this->session->set_userdata("usuario_logado", $usuario);
            $this->session->set_flashdata("success", "Cadastrado com Sucesso");
        } else {
            $this->session->set_flashdata("danger", "Cadastro não realizado");
        }

        redirect("welcome");
    }

}
