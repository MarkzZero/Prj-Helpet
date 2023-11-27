$(function() {
    $("#pesquisa").keyup(function(){
        var pesquisa = $(this).val();

        if(pesquisa != ''){
            var dados = {
                palavra: pesquisa
            }
            $.post('../cadastro/processar_pesquisa.php', dados, function(retorna) {
                $(".teste").html(retorna);
            });
        }
    });
});