<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>   Verificar se o número é perfeito</title>
</head>
<body>

   <form method="POST" action="">
        <label for="numeros">   Verificar se o número é perfeito</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar_amigo">Verificar</button>
   </form>

   <?php

    function somarDivisores($n){

        $soma = 0;
        for($i = 1; $i < $n; $i++){

            if($n % $i == 0){
                $soma += $i;

            };
        };
        return $soma;
    };

        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset ( $_POST [ 'verificar_amigo'])){

            $a = $_POST['numero'];


            if(somarDivisores($a) == $a){
                echo " $a é perfeito";
            }else{
                echo " $a não é perfeito";
            };
        };


   ?>
 
</body>
</html>