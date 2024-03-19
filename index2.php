<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercico 2</title>
</head>
<body>
    <form method="post">
        <label  for="numero">Digite o numero:</label>
        <br>
        <input type="number" id="numero" name="numero">
        <br>
        <br>
        <input type="submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST["numero"];
        

            if ($numero % 2 == 0) {
                echo "O numero é Par";
            } else {
                echo "O numero é Ímpar";
            }
        }
    ?>
</body>
</html>
