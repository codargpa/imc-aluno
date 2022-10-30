<!DOCTYPE html>
<html lang="pt/br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculo IMC</h1>
    <form action="calc_imc.php" method="get" >
        <fieldset>
            <legend>IMC-Araya</legend>
            <Label for="fname">Nome:</Label>
            <input type="text" id="fname" name="fname"><br><br>
            <Label for="faltura">Altura:</Label>
            <input type="text" id="faltura" name="faltura"><br><br>
            <Label for="fpeso">Peso:</Label>
            <input type="text" id="fpeso" name="fpeso"><br><br>
            <input type="submit" value="Enviar">
        </fieldset>
    </form>

    
</body>
</html>
<?php

?>