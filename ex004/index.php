<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste classes e func</title>
</head>
<body>
    <?php 
    require_once "Pessoa.php";
    $pessoa = new Pessoa();   
    $pessoa->setarNome (nome: "Gabriel");
    $pessoa->pegarNome();

    print_r($pessoa);
    //$p1->falar();  
    ?>
</body>
</html>