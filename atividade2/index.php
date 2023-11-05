<!DOCTYPE html>
<!-- Crie um algoritmo em php onde é informado o nome de 2 times(ex: GRÊMIO e inter) e o
número de gols marcados na partida ex:(GRÊMIO - 5 gold e inter - 0 gols)
Mostre na tela o nome do time que ganhou a partida e a quantidade de gols: Ex:(GRÊMIO VENCEU A PARTIDA 5X0inter) -->
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>

<body>
    <h1>Resultado da Partida</h1>
    <form method="post" action="resultado_partida.php">
        <label for="time1">Nome do primeiro time:</label>
        <input type="text" name="time1" required>
        <br>

        <label for="time2">Nome do segundo time:</label>
        <input type="text" name="time2" required>
        <br>

        <label for="golsTime1">Gols marcados pelo primeiro time:</label>
        <input type="number" name="golsTime1" required>
        <br>

        <label for="golsTime2">Gols marcados pelo segundo time:</label>
        <input type="number" name="golsTime2" required>
        <br>

        <input type="submit" value="Calcular Resultado">
    </form>
</body>

</html>