
<!-- MODAL NOVO LIVRO -->
<div class="modal fade add-book-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Novo Livro</h4>
      </div>
      <!-- conteudo do modal -->
      <div class="modal-body">
        <form class="form" action="scripts-php/add-book.php" method="get">
            <label>Título:</label>
            <input type="text" name="txt-new-title" class="form-control" required>
            <label>Autor:</label>
            <input type="text" name="txt-new-author" class="form-control" required>
            <br>
            <button class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-success">Adicionar Livro</button>
        </form>
      </div>
      
    </div>
  </div>
</div>

<!-- MODAL ALTERAR LIVRO -->
<div class="modal fade update-book-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Alterar Livro</h4>
      </div>
      <!-- conteudo do modal -->
      <div class="modal-body">
        <form class="form" action="scripts-php/update-book.php" method="get">
            <label>Código:</label>
            <input type="text" name="txt-update-cod" id="txt-update-cod" class="form-control" readonly>
            <label>Título:</label>
            <input type="text" name="txt-update-title" id="txt-update-title" class="form-control" required>
            <label>Autor:</label>
            <input type="text" name="txt-update-author" id="txt-update-author" class="form-control" required>
            <br>
            <button class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-success">Salvar alterações</button>
        </form>
      </div>      
    </div>
  </div>
</div>