<?php

function retorna_estados() {
    //load estados
    $ci = get_instance(); 
    $ci->load->model("form_model");
    $estados = $ci->form_model->retorna_estados();
    $option = "<option value=''></option>";
    foreach ($estados->result() as $linha) {
        $option .= "<option value='$linha->idestados'>$linha->siglaestado</option>";
    }
    return $option;
}
