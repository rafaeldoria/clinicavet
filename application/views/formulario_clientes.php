<meta charset="UTF-8">
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<title>Clinica Vet</title>
<script src="<?= base_url('assets/js/funcoes.js') ?>"></script>


<?php
$attributes = array(
    "div class" => "form-group",
);
echo form_open("clientes/novo", $attributes);

echo form_label("Nome :", "nome");
echo form_input(array(
    "name" => "nome",
    "class" => "form-control",
    "id" => "nome",
    "maxlength" => "255",
    "style" => "width:50%",
    "value" => set_value("nome", "")
));
echo form_error("nome");

echo form_error("nome");

echo form_label("Endereço :", "endereco");
echo form_input(array(
    "name" => "endereco",
    "class" => "form-control",
    "id" => "endereco",
    "maxlength" => "255",
    "style" => "width:50%",
    "value" => set_value("endereco", "")
));
echo form_error("endereco");

echo form_label("Cep :", "cep");
echo form_input(array(
    "name" => "cep",
    "class" => "form-control",
    "id" => "cep",
    "maxlength" => "8",
    "style" => "width:25%",
    "value" => set_value("cep", "")
));
echo form_error("cep");

echo form_label("CPF :", "cep");
echo form_input(array(
    "name" => "cep",
    "class" => "form-control",
    "id" => "cep",
    "maxlength" => "11",
    "style" => "width:25%",
    "value" => set_value("cep", "")
));
echo form_error("cpf");

echo form_label("Telefone Contato :", "tel_contato");
echo form_input(array(
    "name" => "tel_contato",
    "class" => "form-control",
    "id" => "tel_fixo",
    "maxlength" => "9",
    "style" => "width:25%",
    "value" => set_value("tel_contato", "")
));
echo form_error("tel_contato");

echo form_label("Nome do Animal:", "nomeanimal");
echo form_input(array(
    "name" => "nomeanimal",
    "class" => "form-control",
    "id" => "nomeanimal",
    "maxlength" => "255",
    "style" => "width:50%",
    "value" => set_value("nomeanimal", "")
));

echo form_label("Idade do Animal:", "idadeanimal");
echo form_input(array(
    "name" => "idadeanimal",
    "class" => "form-control",
    "id" => "idadeanimal",    
    "style" => "width:10%",
    "type" => "number",
    "value" => set_value("idadeanimal", "")
));

?><br/>
<?php

echo form_button(array(
    "class" => "btn btn-primary",
    "content" => "Cadastrar",
    "type" => "submit",
));

echo form_close();
?>


