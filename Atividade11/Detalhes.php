<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Detalhes</title>
</head>

<style>
    .col {

        margin-top: 1cm;
        margin-left: 1cm;
        margin-bottom: 1cm;
        align-content: center;
    }
    img {
        width: 200px;
    }
</style>


<body>
    <div class="container border m-4 p-2 mx-auto">
        <?php
        extract($_REQUEST, EXTR_OVERWRITE);
        $estados = $_POST['estados'];
        echo ("<h1 class='p-2 m-2 bg-info text-white text-center'>Estados da Região $estados</h1>");
        include "matriz_estados.inc";
        echo ("<div class='container'>");

        for ($i = 0; $i < 26; $i++) {

            if ($matriz_estados[$i][3] == $estados) {
                echo (" <div class='row'>
                <div class='col'>
                    <h6>Estado: <span class='text-info'>" . $matriz_estados[$i][1] . "</span></h6>
                    <h6>Sigla: <span class='text-info'>" . $matriz_estados[$i][0] . "</span></h6>
                    <h6>Capital: <span class='text-info'>" . $matriz_estados[$i][2] . "</span></h6>
                    <h6>Região: <span class='text-info'>" . $matriz_estados[$i][3] . "</span></h6>
                </div>
                <div class='col'>
                        <img class= border d-block m-auto' src=" . './Imagens/' . $matriz_estados[$i][4] . " alt='Bandeira do Estado' 
                </div></div>");
            }
        }
        echo ("</div>");
        ?>
        <input type="submit" value="Voltar" onclick="history.go(-1)" />
    </div>
</body>

</html>