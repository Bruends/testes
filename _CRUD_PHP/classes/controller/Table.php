<?php 

class Table
{
    private $bd_functions;
    private $books_array;

    public function __construct(){
        $this->bd_functions = new Crud();
    } 

    //função de pesquisa por titulo
    public function searchTable(){
        if(isset($_GET['txt-search'])){
            $title = $_GET['txt-search'];
            $this->books_array = $this->bd_functions->selectByTitle($title);

        } else {
            $this->books_array = $this->bd_functions->selectAll();

        }
    }  

    //retorna html com as linhas da tabela 
    public function makeTable(){
        $table_html = "";

        if(count($this->books_array > 0)){
            for ($i=0; $i < count($this->books_array); $i++) {
                $cod   = $this->books_array[$i]["cod"];
                $title = $this->books_array[$i]["titulo"];
                $author = $this->books_array[$i]["autor"];

                //codigo do livro na linha 
                $table_html .= "<tr>";
                
                    $table_html .= "<td>" . $cod . "</td>";               
                    $table_html .= "<td id='title-"   . $cod . "'>" . $title  . "</td>";               
                    $table_html .= "<td id='author-"  . $cod . "'>" . $author . "</td>";

                    //Botão alterar             
                    $table_html .= "<td>";               
                        $table_html .= "<button id='update-" . $cod ."' class='btn btn-warning btn-update'>";               
                            $table_html .= "<i class='glyphicon glyphicon-pencil'></i>";               
                        $table_html .= "</button>";               
                    $table_html .= "</td>";            

                    //botão Deletar   
                    $table_html .= "<td>";               
                        $table_html .= "<button id='delete-" . $cod ."' class='btn btn-danger btn-delete'>";               
                            $table_html .= "<i class='glyphicon glyphicon-trash'></i>";               
                        $table_html .= "</button>";               
                    $table_html .= "</td>"; 

                $table_html .= "</tr>";
            }            
        }

        return $table_html;
    }
}