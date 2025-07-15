<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar se um ano é bissexto.:</title>
</head>
<body>

   <form method="POST" action="">
        <label for="ano"> Verificar se um ano é bissexto:</label>
        <input type="float" id="ano" name="ano" required>
        <button type="submit" name="verificar_ano">Verificar</button>
   </form>

   <?php

        if (isset($_POST['verificar_ano'])) {
        $ano = $_POST['ano'];

            function verificarAnoBissexto($ano) {
                if (($ano % 400 == 0) || (($ano % 4 == 0) && ($ano % 100 != 0))) {
                    return true;
                } else {
                    return false;
                };
            };

            if (verificarAnoBissexto($ano)) {
                echo $ano . " é um ano bissexto.";
            } else {
                echo $ano . " não é um ano bissexto.";
            };

        };
    ?>
 
</body>
</html>