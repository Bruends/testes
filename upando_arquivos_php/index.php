<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        .container{
            font-family: sans-serif;
            max-width: 960px;
            margin: 100px auto;
            text-align: center;
        }

        h2{
            color: #444;
        }

        input{
            margin: 10px;
        }

        .btn{
            color: #fff;
            background-color: #444;
            padding: 10px;
            display: block;
            margin: 10px auto;
            width: 100px;
            text-decoration: none;
        }

        .btn:hover{
            background-color: #111;
            transition: 0.5s;

        }

    </style>
</head>
<body>
    <section class="container">
        <h2>Enviar arquivo com PHP</h2>

        <!-- formulario -->
        <form action="#" method="POST" enctype="multipart/form-data">
            
            <input type="file" name="doc">
            <br>
            <input type="submit" value="Enviar">
        </form>
        
        <?php
        //caso tenha um documento na espera
        if(isset($_FILES['doc'])){
            //configurando date, para nomear arquivos e evitar nomes duplicados
            date_default_timezone_set("Brazil/East");

            $nome_antigo = strtolower(substr($_FILES['doc']['name'], -4));
            $novo_nome = date("Y.m.d-H.i.s") . $nome_antigo;
            $destino = 'documentos/';

            move_uploaded_file($_FILES['doc']['tmp_name'], $destino . $novo_nome);
        }

        ?>

        <a href="documentos/" class="btn">Ver arquivos</a>
    </section>
    
</body>
</html>