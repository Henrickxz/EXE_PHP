<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercico 1</title>
</head>
<body>
    <form method="post">
        <label for="numero">Digite um número:</label><br>
        <input type="number" id="numero" name="numero" required><br><br>
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $numero = $_POST["numero"];

        if ($numero > 0) {
            echo "Valor Positivo";
        } elseif ($numero < 0) {
            echo "Valor Negativo";
        } else {
            echo "Igual a Zero";
        }
    }
    ?>
</body>
</html>