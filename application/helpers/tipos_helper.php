<?php
function retorna_tiposDeUsuario() {
    $ci = get_instance();
    $ci->load->model("tiposUsuarios_model");
    $tiposDeUsuarios = $ci->tiposUsuarios_model->retorna_tiposDeUsuarios();
    $option = "<option value=''></option>";
    foreach ($tiposDeUsuarios->result() as $linha) {
        $option .= "<option value='$linha->idtiposusuario'>$linha->tipousuario</option>";
    }
    return $option;
}
