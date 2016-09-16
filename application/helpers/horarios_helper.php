<?php

function retorna_horarios() {
    $ci = get_instance();
    $ci->load->model("horarios_model");
    $horarios = $ci->horarios_model->retorna_horarios();
    $option = "<option value=''></option>";
    foreach ($horarios->result() as $linha) {
        $option .= "<option value='$linha->idhorario'>$linha->horarioinicio de $linha->horariofim</option>";
    }
    return $option;
}
