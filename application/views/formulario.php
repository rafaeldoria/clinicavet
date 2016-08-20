
<meta charset="UTF-8">
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<title></title>
<script src="<?= base_url('assets/js/funcoes.js') ?>"></script>


<?php
$attributes = array(
    "div class" => "form-group",
);
echo form_open("funcionarios/novo", $attributes);

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
    "maxlength" => "255",
    "style" => "width:50%",
    "value" => set_value("cep", "")
));
echo form_error("cep");

$js = 'onChange="busca_estados($(this).val())"';
echo form_label("Estado: ", "estados");
echo form_dropdown(array(
    "name" => "estados",
    "class" => "form-control",
    "id" => "estados",
    "style" => "width:50%",
        ), $estados, '1', $js
);

echo form_label("Cidade: ", "cidades");
echo form_dropdown(array(
    "name" => "cidades",
    "class" => "form-control",
    "id" => "cidades",
    "style" => "width:50%",
));

echo form_label("Função: ", "funcoes");
echo form_dropdown(array(
    "name" => "funcoes",
    "class" => "form-control",
    "id" => "funcoes",
    "style" => "width:50%",
        ), $funcoes
);

?><br/>
<?php

echo form_button(array(
    "class" => "btn btn-primary",
    "content" => "Cadastrar",
    "type" => "submit",
));

echo form_close();
?>
