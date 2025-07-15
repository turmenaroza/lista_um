<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>   Receber numero1 e numero2 e informar se a pessoa pode votar:</title>
</head>
<body>

   <form method="POST" action="">
        <label for="imc">  Checar se a pessoa pode votar:</label>
        <br>
        <label for="imc">  Numero1:</label>
        <input type="number" id="numero1" name="numero1" required>
        <label for="imc">  Numero2:</label>
        <input type="number" id="numero2" name="numero2" required>
        <label for="imc">  Numero3:</label>
        <input type="number" id="numero3" name="numero3" required>

        <button type="submit" name="verificar_numero">Verificar</button>
   </form>

   <?php

        if (isset($_POST['verificar_numero'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $numero3 = $_POST['numero3'];

       
            if( ($numero1 > $numero2)&& ($numero1> $numero3) ){
               echo $numero1 . " (numero 1) é o maior numero";
            }else{
               
                if( ($numero2 > $numero1 )&& ($numero2 > $numero3)){
                  echo $numero2 . " (numero 2) é o maior numero";
            }else{
                echo "O número $numero3 (numero 3) é o maior";
           
                }
            };

        };
    ?>
 
</body>
</html>