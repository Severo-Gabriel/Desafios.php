<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes e atributos</title>
</head>
<body>
    <?php 
    require_once "Usuario.php";

    $Usuario01 = new Usuario();
    $Usuario01->setNome(nome: "Gabriel");
    $Usuario01->setEmail(email: "Gabriel@teste.com");

    echo $Usuario01->getNome();
    echo "<br>";
    echo $Usuario01->getEmail();
    echo "<br>";
    ?>
</body>
</html>