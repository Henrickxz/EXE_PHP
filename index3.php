<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercico 3</title>
</head>
<body>
    <form method="post">
        <label for="varA">Digite o valor A:</label><br>
        <input type="number" id="varA" name="varA"><br><br>
        <label for="varB">Digite o valor B:</label><br>
        <input type="number" id="varB" name="varB"><br><br>
        <input type="submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $varA = $_POST["varA"];
            $varB = $_POST["varB"];

            if ($varA > $varB) {
                echo "A maior que B";
            } else {
                echo "B maior que A";
            }
        }
    ?>
</body>
</html>