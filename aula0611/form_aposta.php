<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APOSTA FLIX</title>
    <style>
        .container {
            width: 1000px;
            padding: 20px;
            border: 1px solid black;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            margin: 10px auto;
            align-items: center;                
        }
        form {
            display: flex;
            flex-direction: column;
        }
        form input {
            width: 100px;
            padding: 10px;
            margin-top: 10px;
            margin-right: 10px;
            align-items: center;
            justify-content: center;
        }

        .time1 {
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }
        .time2 {
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }
        .botoes {
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }

        .versus {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>APOSTA FLIX</h1>
        <form action="" method="post">
            <div class="time1">
                <input class="time1input" type="text" name="time1" placeholder="Insira o time 1" required>
                <input class="time1gols" type="number" name="time1gols" placeholder="Gols time 1" required>
            </div>

            <DIV class="versus">
                X
            </DIV>

            <div class="time2">
                <input class="time2input" type="text" name="time2" placeholder="Insira o time 2" required>
                <input class="time2gols" type="number" name="time2gols" placeholder="Gols time 2" required>
            </div>

            <div class="botoes">
            <input type="submit" value="Ver resultados">
            <input type="reset" value="Limpar">
            </div>

            <?php
            $time1 = $_POST["time1"];
            $time2 = $_POST["time2"];
            $time1gols = $_POST["time1gols"];
            $time2gols = $_POST["time2gols"];

            if ($time1gols > $time2gols) {
                $resultado = "$time1 VENCEU A PARTIDA $time1gols-$time2gols $time2";
            } elseif ($time2gols > $time1gols) {
                $resultado = "$time2 VENCEU A PARTIDA $time2gols-$time1gols $time1";
            } else {
                $resultado = "A partida terminou em empate $time1gols-$time2gols";
            }
            echo "<h2>Resultado da Partida</h2>";
            echo "<p>$resultado</p>";

            ?>
        </form>
    </div>
</body>

</html>