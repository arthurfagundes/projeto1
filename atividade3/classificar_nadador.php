<?php
    $idade = (int)$_POST["idade"];
    $categoria = "";

    switch ($idade) {
        case ($idade >= 5 && $idade <= 7):
            $categoria = "Infantil A";
            break;
        case ($idade >= 8 && $idade <= 10):
            $categoria = "Infantil B";
            break;
        case ($idade >= 11 && $idade <= 13):
            $categoria = "Juvenil A";
            break;
        case ($idade >= 14 && $idade <= 17):
            $categoria = "Juvenil B";
            break;
        case ($idade >=18):
                $categoria = "Adulto";
                break;
        default:
            $categoria = "NÃO CLASSIFICADO";
    }
    echo "O nadador de $idade anos pertence à categoria: $categoria.";
?>

<!-- Desenvolva em PHP um algoritmo que dado a idade de um nadador, classifique-o em uma das seguintes
categorias:
Infantil A: 5 a 7 anos
Infantil B: 8 a 10 anos
Juvenil A: 11 a 13 anos
Juvenil B: 14 a 17 anos
Adulto: Maiores de 18 anos -->