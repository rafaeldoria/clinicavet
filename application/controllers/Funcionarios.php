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
        //includes 
        $this->load->view("includes/header");
        $this->load->view("includes/menu");
        //$this->load->view("includes/sidibar");
        $this->load->view("includes/body");

        $dados_estados ['estados'] = retorna_estados();
        $dados_funcoes ['funceos'] = retorna_funcoes();           
        
        $data = array(
            'estados' => $dados_estados,
            'funcoes' =>  $dados_funcoes,
        );

        $this->load->view("formulario", $data);
        //includes
        $this->load->view("includes/footer");
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
        /* $this->load->library("form_validation");
          $this->form_validation->set_rules("nome", "nome", "trim|required|min_length[5]");
          $this->form_validation->set_rules("endereco", "endereco", "required");
          $this->form_validation->set_rules("cep", "cep", "required|max_length[8]");
          $this->form_validation->set_error_delimiters("<p class='alert alert-danger'>", "</p>");

          $sucesso = $this->form_validation->run();

          if ($sucesso) { */
        $funcionario = array(
            "nomefuncionario" => $this->input->post('nome'),
            "enderecofuncionario" => $this->input->post('endereco'),
            "cepfuncionario" => $this->input->post('cep'),
            "cidades_idcidades" => $this->input->post('cidades')
        );
        $this->load->model("funcionarios_model");
        $this->funcionarios_model->salva($funcionario);
        redirect("/");
        /* } else{
          $this->load->view("funcionarios");
          } */
    }

}
