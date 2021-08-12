<html>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</html>

<?php
extract($_REQUEST,EXTR_OVERWRITE);
$dim = $_POST['dimen'];
$qtdlinha = $_POST['qtdlinhas'];
$qtdcoluna = $_POST['qtdcolunas'];


if ($dim == 'uni') {

    echo ("<h1> Tabela Unidimensional com $qtdlinha linhas</h1>");
    echo "<table class='table table-striped table-dark'>";

    $l = 0;

    while ($l < $qtdlinha) {
        $l++;
        echo "<tr>";
        $c = 0;
        echo "<td style='FontSize='12px'> Linha " . $l . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<h1> Tabela Bidimensional com $qtdlinha linha(s) e $qtdcoluna coluna(s) </h1>";

    echo "<table class='table table-striped table-dark'>";

    $l = 0;

    while ($l < $qtdlinha) {
        $l++;
        echo "<tr>";
        $c = 0;
        while ($c < $qtdcoluna) {
            $c++;
            echo "<td style='FontSize='12px'> Linha " . $l . "<br>Coluna " . $c . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}


echo "</div>";


?>
<html>
<input type="submit" value="voltar" onclick="location.href='Index.php'"/> 
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

