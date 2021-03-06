
<meta charset="UTF-8">
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<title>Clinica Vet</title>
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

echo form_label("Email :", "email");
echo form_input(array(
    "name" => "email",
    "class" => "form-control",
    "id" => "email",
    "maxlength" => "255",
    "style" => "width:50%",
    "value" => set_value("email", "")
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
    "maxlength" => "8",
    "style" => "width:25%",
    "value" => set_value("cep", "")
));
echo form_error("cep");

echo form_label("Identidade :", "identidade");
echo form_input(array(
    "name" => "identidade",
    "class" => "form-control",
    "id" => "identidade",
    "maxlength" => "8",
    "style" => "width:25%",
    "value" => set_value("identidade", "")
));
echo form_error("identidade");

echo form_label("CPF :", "cep");
echo form_input(array(
    "name" => "cep",
    "class" => "form-control",
    "id" => "cep",
    "maxlength" => "11",
    "style" => "width:25%",
    "value" => set_value("cep", "")
));
echo form_error("cep");

echo form_label("Telefone fixo :", "tel_fixo");
echo form_input(array(
    "name" => "tel_fixo",
    "class" => "form-control",
    "id" => "tel_fixo",
    "maxlength" => "9",
    "style" => "width:25%",
    "value" => set_value("tel_fixo", "")
));
echo form_error("tel_fixo");

echo form_label("Telefone celular :", "tel_celular");
echo form_input(array(
    "name" => "tel_celular",
    "class" => "form-control",
    "id" => "tel_celular",
    "maxlength" => "9",
    "style" => "width:25%",
    "value" => set_value("tel_celular", "")
));
echo form_error("tel_celular");

$js = 'onChange="busca_estados($(this).val())"';
echo form_label("Estado: ", "estados");
echo form_dropdown(array(
    "name" => "estados",
    "class" => "form-control",
    "id" => "estados",
    "style" => "width:10%",
        ), $estados, '1', $js
);

echo form_label("Cidade: ", "cidades");
echo form_dropdown(array(
    "name" => "cidades",
    "class" => "form-control",
    "id" => "cidades",
    "style" => "width:25%",
));

echo form_label("Função: ", "funcoes");
echo form_dropdown(array(
    "name" => "funcoes",
    "class" => "form-control",
    "id" => "funcoes",
    "style" => "width:25%",
        ), $funcoes
);

echo form_label("Horário: ", "horarios");
echo form_dropdown(array(
    "name" => "horarios",
    "class" => "form-control",
    "id" => "horarios",
    "style" => "width:25%",
        ), $horarios
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
