<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APOSTA FLIX</title>
    <style>
        h1{
            font-family: Arial, Helvetica, sans-serif;
        }
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
    </style>
</head>

<body>
    <div class="container">
        <h1>CADASTRO</h1>
        <form action="" method="post">
            <input class="nome" type="text" name="nome" placeholder="Nome" >
            <label for="Sexo">Sexo</label>
            <input type="radio" name="Masculino" id="masculino">Masculino
            <input type="radio" name="Feminino" id="feminino">Feminino 

            <input class="email" type="text" name="email" placeholder="E-mail">
            <input type="number" name="altura" id="altura" placeholder="Altura">
            <input type="number" name="peso" id="peso" placeholder="Peso">

            
            <input type="submit" value="Ver resultados">
            <input type="reset" value="Limpar">

        </form>
    </div>
</body>

</html>