<!DOCTYPE html>
<!-- Desenvolva em PHP um algoritmo que dado a idade de um nadador, classifique-o em uma das seguintes
categorias:
Infantil A: 5 a 7 anos
Infantil B: 8 a 10 anos
Juvenil A: 11 a 13 anos
Juvenil B: 14 a 17 anos
Adulto: Maiores de 18 anos -->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>
<body>
    <h1>Classificação de Nadador</h1>
    <form method="post" action="classificar_nadador.php">
        <label for="idade">Idade do nadador:</label>
        <input type="number" name="idade" required>
        <br>
        <input type="submit" value="Classificar">
    </form>
</body>
</html>