<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST" action="">
        <label for="digita_numero">Digite um número</label>
        <input type="number" id="digita_numero" name="digita_numero" required>
        <button type="submit" name="verificar_digitado">Verificar</button>
   </form>

<?php
if (isset($_POST['verificar_digitado'])) {
    $numero = $_POST['digita_numero'];
   
    
     $a = 0;
    $b = 1;

    echo "<p>Sequência de Fibonacci até $numero:</p>";
    echo "<p>";

    while ($a <= $numero) {
        echo "$a ";
        $proximo = $a + $b;
        $a = $b;
        $b = $proximo;
    }

    echo "</p>";
}
?>
    
</body>
</html>