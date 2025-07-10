<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "POST" action="">
        <label for="numero">Digite o número que você quer verificar:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name = "verificar_numero">Verificar</button>
    </form>

    <?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
       

            $numero = $_POST['numero'];

            if($numero % 2 === 0){
                echo "O número $numero é par";
            }else{
               echo "O número $numero é ímpar";
            };
        };

    ?>
</body>
</html>