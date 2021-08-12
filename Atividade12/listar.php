
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>noticias</title>
    <style>
        h1 
        {
            background-color: blue;
            text-align: center;
            color: white;
        }
  
    </style>
</head>
<body> 
        
    <div class="container border m-4 p-2 mx-auto d-grid gap-2">
        <?php
        
            include "Matriz_Noticias.php";
            $assunto = $_POST['assuntosel'];
            echo ("<h1 class='p-2 m-2 bg-info text-white text-center'>Noticias Sobre Tecnologia: <span class='text-warning'>$assunto</span> </h1>");
        foreach($matriz_noticias as $value)
            if ($assunto == $value[0]){
                echo("  
                        <div class='container'>
                        <div class='row'>
                            <div class='col text-center'>
                                <p class='font-weight-bold'> $value[1] </p>
                                 <img class='img-thumbnail'src='$value[3]' alt='Foto da Notícia' />
                                 <p class='text-justify'> $value[2]</p>
                            </div
                        </div>
                       </div>
                       ");
                }
            
                          
       
       ?>
   