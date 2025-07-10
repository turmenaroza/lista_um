<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "POST" action="">
        <label for="numero">Número 1:</label>
        <input type="number" id="numero" name="numero" required>
        <label for="numero2">Número 2:</label>
        <input type="number" id="numero2" name="numero2" required>
        <button type="submit" name = "verificar_soma">Verificar </button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['verificar_soma'])) {
        $numero1 = $_POST['numero'];
        $numero2 = $_POST['numero2'];

        if ($numero1 > $numero2) {
            list($numero1, $numero2) = array($numero2, $numero1);
        }

        $soma = 0;
        for ($i = $numero1 + 1; $i < $numero2; $i++) {
            if ($i != $numero1 && $i != $numero2) {
                $soma += $i;
            }
        }

        echo "A soma de todos os números entre $numero1 e $numero2,  é: " . $soma;
    }
  
    ?>
</body>
</html>