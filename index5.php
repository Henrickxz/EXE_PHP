<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
    <style>
        .choices img {
            width: 100px;
            margin: 10px;
        }
    </style>
</head>
<body>
    <form method="post">
        <label for="nome">Digite seu nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>
        <label for="escolha">Escolha sua opção:</label><br>
        <select id="escolha" name="escolha" required>
            <option value="pedra">Pedra</option>
            <option value="papel">Papel</option>
            <option value="tesoura">Tesoura</option>
        </select><br><br>
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $escolha_usuario = $_POST["escolha"];

        
        $opcoes = array("pedra", "papel", "tesoura");
        $escolha_computador = $opcoes[array_rand($opcoes)];

        
        if ($escolha_usuario == $escolha_computador) {
            $resultado = "Empate!";
        } elseif (
            ($escolha_usuario == "pedra" && $escolha_computador == "tesoura") ||
            ($escolha_usuario == "papel" && $escolha_computador == "pedra") ||
            ($escolha_usuario == "tesoura" && $escolha_computador == "papel")
        ) {
            $resultado = "$nome venceu!";
        } else {
            $resultado = "Computador venceu!";
        }


        echo "<h3>Resultado:</h3>";
        echo "<p>$nome escolheu: <strong>$escolha_usuario</strong></p>";
        echo "<p>Computador escolheu: <strong>$escolha_computador</strong></p>";
        echo "<p><strong>$resultado</strong></p>";

        echo "<div class='choices'>";
        echo "<img src='$escolha_usuario.png' alt='$escolha_usuario'>";
        echo "<img src='$escolha_computador.png' alt='$escolha_computador'>";
        echo "</div>";
    }
    ?>
</body>
</html>
