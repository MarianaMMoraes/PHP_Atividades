<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Atividade05</title>
    
   <script>
        function dimen67(dimen){
          
    if (dimen == "uni") {
        qtdcolp.className = 'invisible';
        qtdcolinput.className = 'invisible';
    }
    else {
        qtdcolp.className = 'visible';
        qtdcolinput.className = 'visible';
        
    }
}
        
</script>
    <!-- Bootstrap-CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <style type="text/css">
         
    </style>

</head>

<body>
<form id="tabela" action="tabela.php" method="POST" class="a">
<div class= "w-75 container border m-2 p-2 visible" id= "margin">
        <h1>Montar Tabela</h1>
        <p>Selecione a dimensão:</p>
               
                    
                    <input type="radio" name="dimen" value="uni" onclick="dimen67(this.value)" checked/> Unidimensional(uma coluna)</br>
                    <input type="radio" name="dimen" value="bid" onclick="dimen67(this.value)"/>Bidimensional(várias colunas)</br>
    
            <div id="dimensao" class="w-75 container border m-2 p-2 visible">
                <p class= "fw-bold">Preencha as Dimensões da Tabela: </p>  
                <p>Quantidade de linhas: <input type="number" name="qtdlinhas" require size=10 maxlength=10 max=10 min=1 value=1 autocomplete=on/></p>
                <p ><span id="qtdcolp" class ="invisible" >Quantidade de colunas: <input type=number class ="invisible" id="qtdcolinput" name="qtdcolunas" require size=10 maxlength=10 max=10 min=2 value=2 autocomplete=on/></span></p>
            </div>
                    <button type="submit" name="btnEnviar" onclick="location.href='tabela.php'"> Enviar </button>
                    <button type="reset" name="btnLimpar" onclick="location.reload()"> Limpar </button>
</div>       
    </form>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" 
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" 
integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</html>