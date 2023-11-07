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

            <input class="time1input" type="text" name="time1" placeholder="Insira o time 1" required>
            <input class="time1gols" type="number" name="time1gols" placeholder="Gols time 1" required>

            <input class="time2input" type="text" name="time2" placeholder="Insira o time 2" required>
            <input class="time2gols" type="number" name="time2gols" placeholder="Gols time 2" required>

            <input type="submit" value="Ver resultados">
            <input type="reset" value="Limpar">

        </form>
    </div>
</body>

</html>