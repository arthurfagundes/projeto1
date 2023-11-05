<?php
    $time1 = $_POST["time1"];
    $time2 = $_POST["time2"];
    $golsTime1 = (int)$_POST["golsTime1"];
    $golsTime2 = (int)$_POST["golsTime2"];

    if ($golsTime1 > $golsTime2) {
        $resultado = "$time1 VENCEU A PARTIDA $golsTime1-$golsTime2 $time2";
    } elseif ($golsTime2 > $golsTime1) {
        $resultado = "$time2 VENCEU A PARTIDA $golsTime2-$golsTime1 $time1";
    } else {
        $resultado = "A partida terminou em empate $golsTime1-$golsTime2";
    }
    echo "<h2>Resultado da Partida</h2>";
    echo "<p>$resultado</p>";

?>