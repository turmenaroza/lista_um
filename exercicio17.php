<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Receber uma data (dia, mês, ano) e validar se é uma data válida: </title>
</head>
<body>

   <form method="POST" action="">
        <label for="data"> Receber uma data (dia, mês, ano) e validar se é uma data válida: </label>
        <br>
        <label for="data">  Dia</label>
        <input type="number" id="dia" name="dia" required>
        <label for="data">  Mes:</label>
        <input type="number" id="mes" name="mes" required>
        <label for="data">  Ano:</label>
        <input type="number" id="ano" name="ano" required>
        <br>
        <button type="submit" name="verificar_data">Verificar</button>
   </form>

   <?php

        if (isset($_POST['verificar_data'])) { 
        $dia = $_POST['dia'];
        $mes = $_POST['mes'];
        $ano = $_POST['ano'];

        if (( $dia < 32 ) && ( $mes < 13 ) && ( $ano > 0)){
            echo "data valida";
        }else{
            echo "data invalida";
        };

        };
    ?>
 
</body>
</html>