<?php
echo form_open("horarios/novo");

echo form_label("Horario Início", "horario_inicio");
echo form_input(array(
    "name" => "horario_inicio",
    "class" => "form-control",
    "id" => "horario_inicio",
    "maxlength" => "5",
    "style" => "width:25%",
    "type" => "datetime",
    "value" => set_value("horario_inicio", "")
));
echo form_error("horario_inicio");

echo form_label("Horário Fim :", "horario_fim");
echo form_input(array(
    "name" => "horario_fim",
    "class" => "form-control",
    "id" => "horario_fim",
    "maxlength" => "5",
    "style" => "width:25%",
    "type" => "datetime",
    "value" => set_value("horario_fim", "")
));
echo form_error("horario_fim");
?><br/>
<?php
echo form_button(array(
    "class" => "btn btn-primary",
    "content" => "Cadastrar",
    "type" => "submit",
));

echo form_close();
?>


