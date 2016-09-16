<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<h1>Cadastro Tipos de Usuarios</h1>
<?php
echo form_open("tiposDeUsuarios/novo");

echo form_label("Tipo de Usuario :", "tipousuario");
echo form_input(array(
    "name" => "tipousuario",
    "class" => "form-control",
    "id" => "tipousuario",
    "maxlength" => "255",
    "style" => "width:50%",
    "value" => set_value("tipousuario", "")
));
echo form_error("tipousuario");

echo form_label("Descrição :", "descricao");
echo form_textarea(array(
    "name" => "descricao",
    "class" => "form-control",
    "id" => "descricao",
    "style" => "width:50%",
    "value" => set_value("descricao", "")
));
echo form_error("descricao");

?><br/>
<?php
echo form_button(array(
    "class" => "btn btn-primary",
    "content" => "Cadastrar",
    "type" => "submit",
));

echo form_close();
?>




