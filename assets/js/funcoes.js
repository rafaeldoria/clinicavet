function busca_estados(id_estado) {

    $.post("http://localhost/clinicavet/funcionarios/busca_cidades_por_estados", {
        id_estado: id_estado
    }, function (data) {
        $('#cidades').html(data);
    });
}


