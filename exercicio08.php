<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>   Verificar se o número é perfeito</title>
</head>
<body>

   <form method="POST" action="">
        <label for="numeros">   Verificar quantos pares tem</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar_par">Verificar</button>
   </form>

   <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['verificar_par'])) {
        $numero = $_POST['numero'];
        $pares = [];

        for ($i = 1; $i <= $numero; $i++) {
            if ($i % 2 == 0) {
                $pares[] = $i;
            }
        }

        echo "Os números pares de 1 a $numero são: " . implode(", ", $pares);
    }

   ?>
 
</body>
</html>