<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<h1>ENTRAR</h1>
<?php
echo form_open("login/autenticar");

echo form_label("Login :", "login");
echo form_input(array(
    "name" => "login",
    "class" => "form-control",
    "id" => "login",
    "maxlength" => "255",
    "style" => "width:50%",
    "value" => set_value("login", "")
));
echo form_error("login");

echo form_label("Senha :", "senha");
echo form_password(array(
    "name" => "senha",
    "class" => "form-control",
    "id" => "senha",
    "maxlength" => "255",
    "style" => "width:50%",
    "value" => set_value("senha", "")
));
echo form_error("senha");
?><br/>
<?php
echo form_button(array(
    "class" => "btn btn-primary",
    "content" => "Login",
    "type" => "submit",
));
?>
<div>
</br>
    <?= anchor('usuarios', 'Cadastrar', array("class" => "btn btn-primary")); ?></li>
</div>    
<?php
echo form_close();
?>


