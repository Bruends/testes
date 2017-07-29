<?php 
class Crud extends ConnectDB 
{
    public function __construct(){
        parent::__construct();
    }

    //retorna array associativo com todos os livros
    public function selectAll(){
        $query = "SELECT * FROM livros";
        $select = $this->pdo->query($query);
        $result_array = $select->fetchAll(PDO::FETCH_ASSOC);

        return $result_array;
    }

    //retorna array associativo com todos os livros
    //de acordo com o titulo especificado
    public function selectByTitle($title){        
        $title = '%' . $title . '%';
        $query = "SELECT * FROM livros WHERE titulo LIKE(:title)";
        $select = $this->pdo->prepare($query);
        $select->execute(array(':title' => $title));
        $result_array = $select->fetchAll(PDO::FETCH_ASSOC);

        return $result_array;       
    }


    public function insertBook($title, $author){
        $query = "INSERT INTO livros VALUES (default, :title, :author)";
        $insert = $this->pdo->prepare($query);

        $insert->execute(array(
            ':title'  => $title, 
            ':author' => $author

        ));

    }

    public function deleteBook($cod){
        $query = "DELETE FROM livros WHERE cod = :cod";

        $delete = $this->pdo->prepare($query);

        $delete->execute(array(
            ':cod'  => $cod
        ));        
    }

    public function updateBook($cod, $title, $author){
        $query  = "UPDATE livros "; 
        $query .= "SET titulo = :title, autor = :author ";
        $query .= "WHERE cod = :cod";

        $update = $this->pdo->prepare($query);

        $update->execute(array(
            ':cod'    => $cod,
            ':title'  => $title,
            ':author' => $author
        ));   
    }

}
