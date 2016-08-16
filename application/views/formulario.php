<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <title></title>
        <script>


            function busca_estados(id_estado) {

                $.post("http://localhost/clinicavet/funcionarios/busca_cidades_por_estados", {
                    id_estado: id_estado
                }, function (data) {
                    $('#cidades').html(data);
                });
            }
        </script>
    </head>
    <body>
        
        <?php
        echo form_open("funcionarios/novo");
        echo form_label("Nome :", "nome");
        echo form_input(array(
                "name" => "nome",
                "class" => "form-control",
                "id" => "nome",
                "maxlength" => "255",
                "value" => set_value("nome", "")
                ));
        echo form_error("nome"); 
  
        ?>

        <label for="estados">Estado:</label>           
            <select name="estados" id="estados" onchange='busca_estados($(this).val())'>
                <?= $estados; ?>
            </select>
        
        <label for="cod_cidades">Cidade:</label>            
            <select name="cidades" id="cidades">
            </select>
        </p>


    </body>

</html>
