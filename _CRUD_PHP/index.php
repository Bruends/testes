<?php require_once 'head.php'; ?>
<body>
    <main class="main-container col-lg-8 col-lg-offset-2">    
        <h1> 
            Cadastro de Livros <i class="glyphicon glyphicon-book" aria-hidden='true'></i>
        </h1>

        <!--  Botão de novo livro -->
        <button class="btn btn-success" data-toggle="modal" data-target=".add-book-modal">
            Adicionar Livro <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
        </button>        

        <!-- FORM PESQUISAR -->
        <form class="form-inline">
            <input type="text" name="txt-search" class="form-control" >
            <input type="submit" value="Pesquisar" id="btn-search" class="btn btn-info">            
        </form>

        <!-- tabela de livros cadastrados -->
        <table class="table table-striped table-hover" id="book-table">
            <tr>
                <thead>
                    <th>Cod</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th colspan="2"></th>
                </thead>                
            </tr>            
            <?php
                //habilita função de pesquisa
                $table->searchTable();
                //cria tabela
                echo $table->makeTable(); 
            ?>
        </table>      
    </main>
    <?php require_once 'modals.php'; ?>
</body>
<?php require_once 'footer.php'; ?>