<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>   Receber nome e idade e informar se a pessoa pode votar:</title>
</head>
<body>

   <form method="POST" action="">
        <label for="imc">  Checar se a pessoa pode votar:</label>
        <br>
        <label for="imc">  nome:</label>
        <input type="string" id="nome" name="nome" required>
        <label for="imc">  idade:</label>
        <input type="number" id="idade" name="idade" required>
        <button type="submit" name="verificar_imc">Verificar</button>
   </form>

   <?php

        if (isset($_POST['verificar_imc'])) {
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];

       if ($idade >= 16){
        echo $nome . " pode votar";
       }else{
         echo $nome . " não pode votar";
       };

        };
    ?>
 
</body>
</html>