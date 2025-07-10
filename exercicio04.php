<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "POST" action="">
        <label for="numero">Digite o número que você quer o fatorial:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name = "tabuada">Verificar</button>
    </form>

    <?php

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero = $_POST['numero'];

    function calcularFatorial($numero) {
    if ($numero <= 1) {
        return 1;
    } else {
        return $numero * calcularFatorial($numero - 1);
    }
}
$resultado = calcularFatorial($numero);
echo "O fatorial de $numero é $resultado\n";
}
    ?>
</body>
</html>