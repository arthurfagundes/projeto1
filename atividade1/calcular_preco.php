<?php
    $precoPorKG = 21.50;
    $taraDoPratoGramas = 200;
    $pesoDoPratoGramas = $_POST["peso_prato"];
    $pesoRefeicaoGramas = $pesoDoPratoGramas - $taraDoPratoGramas;
    $valorAPagar = ($pesoRefeicaoGramas / 1000) * $precoPorKG;
    echo "O valor a ser pago é: R$ " . $valorAPagar;
    ?>