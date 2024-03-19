<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
    <style>
        img {
            width: 350px;
        }
    </style>
</head>
<body>
    <form method="post">
        <label for="lado1">Lado 1:</label><br>
        <input type="number" id="lado1" name="lado1" required><br><br>
        <label for="lado2">Lado 2:</label><br>
        <input type="number" id="lado2" name="lado2" required><br><br>
        <label for="lado3">Lado 3:</label><br>
        <input type="number" id="lado3" name="lado3" required><br><br>
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lado1 = $_POST["lado1"];
        $lado2 = $_POST["lado2"];
        $lado3 = $_POST["lado3"];

        if (($lado1 + $lado2 > $lado3) && ($lado1 + $lado3 > $lado2) && ($lado2 + $lado3 > $lado1)) {
            echo "<p>Os lados informados podem formar um triângulo.</p>";

            if ($lado1 == $lado2 && $lado2 == $lado3) {
                echo "<p>Triângulo Equilátero</p>";
                echo "<img src='equilatero.png' alt='Equilátero'>";
            } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
                echo "<p>Triângulo Isósceles</p>";
                echo "<img src='isosceles.png' alt='Isósceles'>";
            } else {
                echo "<p>Triângulo Escaleno</p>";
                echo "<img src='escaleno.png' alt='Escaleno'>";
            }
        } else {
            echo "<p>Os lados informados não podem formar um triângulo.</p>";
        }
    }
    ?>
</body>
</html>
