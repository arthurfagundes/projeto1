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