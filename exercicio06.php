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

   

    if (isset($_POST['divisores'])) {
        $numero = $_POST['numero'];
        $divisores = [];

        for ($i = 1; $i <= $numero; $i++) {
            if ($numero % $i == 0) {
                $divisores[] = $i;
            }
        }

        echo "Os divisores de $numero são: " . implode(", ", $divisores);

}
  }
    ?>
</body>
</html>