<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
        autorizar();
        $dados_estados = retorna_estados();
        $dados_funcoes = retorna_funcoes(); 
        $dados_horarios = retorna_horarios();
        
        $data = array(
            'estados' => $dados_estados,
            'funcoes' =>  $dados_funcoes,
            'horarios' => $dados_horarios, 
        );

        $this->load->template("formulario", $data);

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

    public function novo() {        

        $funcionario = array(
            "nomefuncionario" => $this->input->post('nome'),
            "enderecofuncionario" => $this->input->post('endereco'),
            "cepfuncionario" => $this->input->post('cep'),
            "cidades_idcidades" => $this->input->post('cidades')
        );
        $this->load->model("funcionarios_model");
        $this->funcionarios_model->salva($funcionario);
        redirect("/welcome");
    }

}
