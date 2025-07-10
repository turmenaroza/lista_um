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
        <button type="submit" name = "verificar_amigos">Verificar</button>
    </form>

    <?php

  
  function somarDivisores ($n){
    $soma = 0;

    for ($i = 1; $i < $n; $i++){
        if($n %$i ==0) {
            $soma += $i;
        }
    }

        return $soma;
  }
  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset ($_POST['verificar_amigos'])){

    $a = $_POST['numero'];
    $b = $_POST['numero2'];

    $somar1 = somarDivisores($a);
    $somar2 = somarDivisores($b);

    if ($somar1 == $b && somarDivisores($b) == $a) {
        echo "Os números $a e $b são amigos.";
    } else {
        echo "Os números $a e $b não são amigos.";
    }
}
    ?>
</body>
</html>