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
        <form action='listar.php' method='post' name="assunto">
        
            <h1 class='p-2 m-2 bg-info text-white text-center'>Noticias Sobre Tecnologia</h1>
            <label class="input-group-text" for="inputGroupSelect01">Selecione</label>
            <select class="form-select" id="inputGroupSelect01" name="assuntosel" required>
                <option selected disabled>Clique aqui</option>
                <option value="Hardware">Hardware</option>
                <option value="Mercado">Mercado</option>
                <option value="Software">Software</option>
            </select><br>
            <button class="btn btn-primary" type="submit" name="btnassunto">Procurar</button>
        </form>
    </div>
</body>
</html>