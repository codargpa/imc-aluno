<?php

    $n1=$_GET["fnota1"];
    $nota1=str_replace (",",".","$n1");
    floatval($nota1);

    $n2=$_GET["fnota2"];
    $nota2=str_replace (",",".","$n2");//troca a virgula por ponto
    floatval($nota2);//converte em 
    $n=$_GET["fname"];
    $situacao="";
    $media="";
    
    function notafinal($nota1, $nota2, $situacao, $media){
        $media= ($nota1+$nota2)/2;
            
            if ($media<4){
                $situacao="Reprovado";
                echo "<p style=color:red>".$situacao."</p>".number_format($media, 2, ',', '.')."<br>";
                                
            }elseif(($media>=4)and($media<6)){
                $situacao="Exame final";
                echo "<p style=color:yellow>".$situacao."</p>".number_format($media, 2, ',', '.')."<br>";

            }else{
                $situacao="aprovado";
                echo "<p style=color:green>".$situacao."</p>".number_format($media, 2, ',', '.')."<br>";

            }
           
        
    }
    echo "Olá ".$n."<br>";
    $final=notafinal($nota1, $nota2, $situacao, $media );
    echo $final."<br> <a href=form_notas.php>Voltar ao formulário </a>";

    
?>