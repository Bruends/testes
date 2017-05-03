$(function(){
    $("#txtCep").focusout(function(){
    var cep = $("#txtCep").val(); 

        $.ajax({
            url: 'http://api.postmon.com.br/v1/cep/' + cep,
            dataType: "json",
            statusCode: {
                404: function(){
                    alert("cep não encontrado!");
                },

                200: function(endereco){
                    $("#txtRua").val(endereco['logradouro']);
                    $("#txtBairro").val(endereco['bairro']);
                    $("#txtCidade").val(endereco['cidade']);
                    $("#txtEstado").val(endereco['estado']);
                }
            } 
        });
    });  
})
