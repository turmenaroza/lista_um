<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Calcular IMC a partir do peso e altura e exibir a categoria:</title>
</head>
<body>

   <form method="POST" action="">
        <label for="imc">  Calcular IMC a partir do peso e altura e exibir a categoria:</label>
        <br>
        <label for="imc">  Peso:</label>
        <input type="float" id="peso" name="peso" required>
        <label for="imc">  Altura:</label>
        <input type="float" id="altura" name="altura" required>
        <button type="submit" name="verificar_imc">Verificar</button>
   </form>

   <?php

        if (isset($_POST['verificar_imc'])) {
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        $resultado = ($peso / ($altura * $altura)) * 10000;


        echo " Seu imc é $resultado";

        };
    ?>
 
</body>
</html>