
<meta charset="UTF-8">
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<title></title>
<script src="<?= base_url('assets/js/funcoes.js') ?>"></script>

</br>
<?php
$attributes = array(
    "div class" => "form-group",
);
echo form_open("funcoes/novo", $attributes);

echo form_label("Nome da Função:", "nome_funcao");
echo form_input(array(
    "name" => "nome_funcao",
    "class" => "form-control",
    "id" => "nome_funcao",
    "maxlength" => "255",
    "style" => "width:50%",
    "value" => set_value("nome_funcao", "Ex: Veterinário")
));
echo form_error("nome_funcao");

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
