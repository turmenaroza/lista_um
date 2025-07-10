<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "POST" action="">
        <label for="numero">Digite o número que você quer os divisores:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name = "divisores">Verificar</button>
    </form>

    <?php

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero = $_POST['numero'];

    for ($i = 1; $i <= 10; $i++) {
        $result = $numero / $i;
        echo "$numero / $i = $result<br>";
    }
}
    ?>
</body>
</html>