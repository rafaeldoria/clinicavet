<?php

function retorna_funcoes() {
    $ci = get_instance();
    $ci->load->model("funcoes_model");
    $funcoes = $ci->funcoes_model->retorna_funcoes();
    $option = "<option value=''></option>";
    foreach ($funcoes->result() as $linha) {
        $option .= "<option value='$linha->idfuncao'>$linha->nomefuncao</option>";
    }
    return $option;
}
