<?php

    $a=$_GET["faltura"];
    $altura=str_replace (",",".","$a");
    floatval($altura);

    $p=$_GET["fpeso"];
    $peso=str_replace (",",".","$p");//troca a virgula por ponto
    floatval($peso);//converte em 
    $n=$_GET["fname"];
    $situacao="";
    
    function pesoIdeal($peso, $altura, $situacao ){
        
            $imc= $peso/($altura*$altura);
            if ($imc<17){
                echo "IMC é igual a ".number_format($imc, 2, ',', '.')."<br>";
                $situacao="Muito abaixo do peso";
                echo "Sua situação é... <p style=color:yellow>".$situacao."</p>";
            }elseif($imc<18.49){
                echo "IMC é igual a ".number_format($imc, 2, ',', '.')."<br>";
                $situacao="abaixo do peso";
                echo "Sua situação é... <p style=color:orange>".$situacao."</p>";
            }elseif($imc<24.99){
                echo "IMC é igual a ".number_format($imc, 2, ',', '.')."<br>";
                $situacao="Peso Normal";
                echo "Sua situação é... <p style=color:green>".$situacao."</p>";
            }elseif($imc<29.99){
                echo "IMC é igual a ".number_format($imc, 2, ',', '.')."<br><br>";
                $situacao="Acima do peso";
                echo "Sua situação é... <p style=color:red>".$situacao."</p>";
            }elseif($imc<34.99){
                echo "IMC é igual a ".number_format($imc, 2, ',', '.')."<br>";
                $situacao="Obesidade I";
                echo "Sua situação é... <p style=color:red>".$situacao."</p>";
            }elseif($imc<39.99){
                echo "IMC é igual a ".number_format($imc, 2, '.', ',')."<br>";
                $situacao="Obesidade II(severa)";
                echo "Sua situação é... <p style=color:red>".$situacao."</p>";
            }elseif($imc>40){
                echo "IMC é igual a ".number_format($imc, 2, ',', '.')."<br><br>";
                $situacao="Obesidade III(mórbida)";
                echo "Sua situação é... <p style=color:red>".$situacao."</p>";
            }
           
        
    }
    echo "Olá ".$n."<br><br>";
    $final=pesoIdeal($peso, $altura, $situacao);
    echo $final."<br> <a href=form_imc.php>Voltar ao formulário </a>";

    
?>