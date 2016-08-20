
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
echo form_open("contatos/novo", $attributes);

echo form_label("Tipo do contato:", "tipo_contato");
echo form_input(array(
    "name" => "tipo_contato",
    "class" => "form-control",
    "id" => "tipo_contato",
    "maxlength" => "255",
    "style" => "width:50%",
    "value" => set_value("tipo_contato", "Ex: Telefone Celular")
));
echo form_error("tipo_contato");
?><br/>
<?php
echo form_button(array(
    "class" => "btn btn-primary",
    "content" => "Cadastrar",
    "type" => "submit",
));

echo form_close();
?>