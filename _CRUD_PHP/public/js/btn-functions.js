//abre o modal de alterar livro
function btnOpenUpdateModal(){
    $(".btn-update").on("click", function(){
        //codigo da linha
        var cod = $(this).attr("id").split("-").pop();

        var title =  $("#title-" + cod).text();
        var author = $("#author-" + cod).text();

        //colocando os valores do livro que vai ser alterado
        //nos campos modal
        $('#txt-update-cod').val(cod);
        $('#txt-update-title').val(title);
        $('#txt-update-author').val(author);
        
        //abrindo o modal de alteração
        $(".update-book-modal").modal("show");
    })   
}

function btnDelete(){
    $(".btn-delete").on("click", function(){
        //codigo da linha
        var cod = $(this).attr("id").split("-").pop();
        var confirm_msg = "Apagar livro: " + $('#title-' + cod).text() + "?";

        if(confirm(confirm_msg)){
            window.location.replace('scripts-php/delete-book.php?cod=' + cod);                        
        }
    });
}