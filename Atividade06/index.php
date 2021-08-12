<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade06</title>
    
</head>
<body>
<form action="tabela.php" method="GET" class="a">
<div class= "w-75 container border m-2 p-2 visible" id= "margin">
    <h1>Tabela De Imagens</h1>
    <p>Preencha a Quantidade de Colunas: <input type="number" name="qtdcol" min="1" max="5" value="1" required></p>
    <br /><br />
    <input type="submit" value="Enviar" onclick="location.href='tabela.php'"/> 
    <input type=reset value="Limpar">
</div> 
</form>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</html>

