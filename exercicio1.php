<?php
$nome = "Adagamilson Santos da Silva";
$anoNasc = 2003;
$idade = 2023 - $anoNasc;

$altura = 1.89;
$peso = 110.0;
$imc = $peso / pow($altura,2);





echo"<h1 style='color:blue;text-align:center'> 
    Olá $nome, me disseram que você tem $idade anos.</h1 <br>";

    echo"<h2 style=text-align:center;'>Seu peso atual é de $peso, seu IMC é de $imc</h2>";
    
    if($imc<17){
        echo"$nome coma por favor";
    }else if ($imc>=17 && $imc<18.5){
        echo"$nome continue comendo!! ta muito magro";
    }else if($imc>=18.5 && $imc<24.9){
        echo"$nome está se achando, está pronto para a praia";
    }else if($imc>=25 && $imc<29.9){
        echo"$nome larga a bolachinha trakinas, está acima do peso";
    }else if($imc>=30 && $imc<=34.9){
        echo"$nome larga o MCDonalds ta obeso II";
    }else if($imc>=35 && $imc<=40){
        echo"$nome seu porquinho(a)";
    }else{
        echo"$nome chama o guincho!";
    };
    

