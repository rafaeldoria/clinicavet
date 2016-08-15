<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css')?>">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <title></title>
        <script>
        function busca_cidades(id_departamento){
        alert(id_departamento);
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
        <select name="estados" id="cod_estados" onchange='busca_cidades($(this).val())'>
            <?= $options_estados; ?>
        </select>

        <label for="cod_cidades">Cidade:</label>
        <select name="cod_cidades" id="cod_cidades">
                <option value="">-- Escolha uma Cidade --</option>
        </select>
        
    </body>
    
    <!--
    $sql = "SELECT cod_estados, sigla
                                    FROM estados
                                    ORDER BY sigla";
                    $res = mysqli_query( $sql );
                    while ( $row = mysqli_fetch_assoc( $res ) ) {
                            echo '<option value="'.$row['cod_estados'].'">'.$row['sigla'].'</option>';
                    }
    
    $(function(){
	$('#cod_estados').change(function(){
		if( $(this).val() ) {
			$('#cod_cidades').hide();
			$('.carregando').show();
			$.getJSON('cidades.ajax.php?search=',{cod_estados: $(this).val(), ajax: 'true'}, function(j){
				var options = '<option value=""></option>';	
				for (var i = 0; i < j.length; i++) {
					options += '<option value="' + j[i].cod_cidades + '">' + j[i].nome + '</option>';
				}	
				$('#cod_cidades').html(options).show();
				$('.carregando').hide();
			});
		} else {
			$('#cod_cidades').html('<option value="">-- Escolha um estado --</option>');
		}
	});
    });-->
    
</html>
