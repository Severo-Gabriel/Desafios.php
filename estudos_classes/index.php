<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de classes</title>
</head>
<body>
    <?php 
    require_once "Caneta.php";

    $caneta = new Caneta();

    $caneta->setarModelo(modelo: "modelo compacto");
    $caneta->pegarModelo();
    $caneta->tampar();
    $caneta->setarCor(cor: "Azul");
    $caneta->pegarCor();
    $caneta->setarPonta(ponta: 0.5);
    
    print_r(value: $caneta);
   
    //print_r($caneta);
    ?>
</body>
</html>