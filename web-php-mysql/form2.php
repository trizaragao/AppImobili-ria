<?php

if(isset($_POST["submit"]))
{
    include_once("config.php");
    $nomecliente = $_POST["nomecliente"];
    $enderecocliente = $_POST["enderecocliente"];
    $telefonecliente = $_POST["telefonecliente"];
    $emailcliente = $_POST["emailcliente"];

    $response = mysqli_query($conexao, "INSERT INTO table2(nomecliente,enderecocliente,telefonecliente,emailcliente)values('$nomecliente','$enderecocliente','$telefonecliente','$emailcliente')");
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
    <div class="form2">
        <form action="form2.php" method="post">
        <h1>Deseja alugar? Cadastre-se:</h1>
        <label for="nomecliente">Nome</label>
        <input type="text" placeholder="Insira seu nome" name="nomecliente" id="nomecliente">
    <br> 
        <label for="enderecocliente">Endereço</label>
        <input type="text" placeholder="Insira seu endereço" name="enderecocliente" id="enderecocliente">
    <br>
        <label for="telefonecliente">Telefone</label>
        <input type="text" placeholder="Insira seu número de telefone" name="telefonecliente" id="telefonecliente">
    <br>  
        <label for="emailcliente">Email</label>
        <input type="text" placeholder="Insira seu endereço de Email" name="emailcliente" id="emailcliente">
    <br><br>
    <input type="submit" name="submit" id="submit">
</form>
        <a href="form1.html"> Deseja Cadastrar uma propriedade?</a>

    </div>
    </main>
</body>
</html>