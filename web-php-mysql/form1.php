<?php

if(isset($_POST["submit"]))
{
    include_once("config.php");
    $tipoprop = $_POST["tipoprop"];
    $enderecoprop = $_POST["enderecoprop"];
    $precoprop = $_POST["precoprop"];
    $areaprop = $_POST["areaprop"];
    $nquarto = $_POST["nquarto"];
    $nbanheiro =$_POST["nbanheiro"];
   

    $response = mysqli_query($conexao, "INSERT INTO table1(tipoprop, enderecoprop, precoprop, areaprop, nquarto, nbanheiro)values('$tipoprop','$enderecoprop','$precoprop','$areaprop','$nquarto','$nbanheiro')");
}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div class="form1">
           
        <form action="form1.php" method="post">
                <h1>Cadastro de imóveis</h1>
                <label for="tipoprop">Tipo de propriedade</label>
                <select name="tipoprop" id="tipoprop" >
                <option value="0">Selecione uma opção</option>
                <option value="Apartamento">Apartamento</option>
                <option value="Casa">Casa</option>
                <option value="Terreno">Terreno</option>
                </select>
            <br>
                <label for="enderecoprop">Endereço da propriedade</label>
                <input type="text" placeholder="Insira o endereço da propriedade" name="enderecoprop" id="enderecoprop">
            <br>
                <label for="precoprop">Preço da propriedade</label>
                <input type="text" placeholder="Valor da propriedade" name="precoprop" id="precoprop">
            <br>  
                <label for="areaprop">Área de propriedade</label>
                <input type="text" placeholder="Área da propriedade" name="areaprop" id="areaprop">
            <br>
                <label for="nquarto">Número de quartos</label>
                <input type="text" placeholder="Caso não tenha digite 0" name="nquarto" id="nquarto">
            <br>  
                <label for="nbanheiro">Número de banheiros</label>
                <input type="text" placeholder="Caso não tenha digite 0" name="nbanheiro" id="nbanheiro">
            <br>  
            <br><br>
            <input type="submit" name="submit" id="submit">
        </form>

        </div>
    </main>
</body>
</html>