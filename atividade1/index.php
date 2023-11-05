<!DOCTYPE html>
<!-- Desenvolva em PHP um algoritmo que: 
Um restuarante vende comida a quilo, ela cobra r$21,50 por quilo de refeição. O usuario entra com o peso do prato montado pelo usuario
não esqueça a tara do prato que pesa 200g). Mostre na tela o valor que o usuario deverá pagar. -->
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>

<body>
    <h1>Calculadora de Preço de Refeição a KG</h1>
    <form method="post" action="calcular_preco.php">
        <label for="peso_prato">Peso do Prato (em gramas, incluindo a tara de 200g):</label>
        <input type="text" name="peso_prato" id="peso_prato" required>
        <br>
        <input type="submit" value="Calcular Preço">
    </form>

</body>

</html>