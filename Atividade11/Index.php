<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Regiões</title>
</head>

<body>
    <div class="container border m-4 p-2 mx-auto">
        <form action='Detalhes.php' method='POST' name="estados">
            <h1 class='p-2 m-2 bg-info text-white text-center'>Estados Brasileiros</h1>
</br>
                <label class="fw-bold">Selecione uma região:</label>
                    <select name="estados" required>
                        <option selected disabled>Selecione</option>
                        <option value="Centro-Oeste">Centro-Oeste</option>
                        <option value="Nordeste">Nordeste</option>
                        <option value="Norte">Norte</option>
                        <option value="Sudeste">Sudeste</option>
                        <option value="Sul">Sul</option>
                    </select>
</br></br>
                            <button type="submit" name="btnDetalhar">Detalhar</button>
        </form>
    </div>
</body>
</html>