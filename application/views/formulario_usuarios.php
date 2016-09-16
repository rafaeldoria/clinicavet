<?php

echo form_open("usuarios/novo");

echo form_label("Login:", "loginusuario");
echo form_input(array(
    "name" => "loginusuario",
    "class" => "form-control",
    "id" => "loginusuario",
    "maxlength" => "255",
    "style" => "width:50%",
    "value" => set_value("loginusuario", "")
));
echo form_error("login_usuario");

echo form_label("Senha :", "senhausuario");
echo form_password(array(
    "name" => "senhausuario",
    "class" => "form-control",
    "id" => "senhausuario",
    "maxlength" => "255",
    "style" => "width:50%",
));
echo form_error("senhausuario");

echo form_label("Tipo de Usuario: ", "tipoDeUsuario");
echo form_dropdown(array(
    "name" => "tipoDeUsuario",
    "class" => "form-control",
    "id" => "tipoDeUsuario",
    "style" => "width:25%",
        ), $tipoDeUsuario
);
?>
<script>
    console.log(document.querySelector('#tipoDeUsuario'));
</script>

<br/>
<?php

echo form_button(array(
    "class" => "btn btn-primary",
    "content" => "Cadastrar",
    "type" => "submit",
));
