<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receber uma senha e verificar se ela é forte</title>
</head>
<body>
    <form method="POST" action="">
    Digite sua senha: <input type="password" name="senha">
    <input type="submit" name="ver" value="Verificar senha">
   

</form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

if(isset($_POST['ver'])){
    $s = $_POST['senha'];

    if(strlen($s) >= 8){
        if(preg_match("/[a-z]/i", $s)){
            if(preg_match("/[0-9]/", $s)){
                echo "Senha forte";
            } else {
                echo "use algum número";
            }
        } else {
            echo "use alguma letra letra";
        }
    } else {
        echo "digite pelo menos 8 caracteres";
    }
}
}
?>

    
</body>
</html>