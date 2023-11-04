<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
    <h1>AULA DE PHP</h1>
    <p>Testaremos neste bloco o uso do SWITCH CASE</p>
    <div class="container">
    <?php
        $op = 5;
        switch($op){
            case 1: echo"Sexta-feira!! Sextouu"; break;
            case 2: echo"Aula de PHP"; break;
            default: 
            echo"Nem 1 e nem 2";
        } 
    ?>
    </div>
</body>
</html>