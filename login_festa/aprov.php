<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado da inscrição</title>
</head>
<body>
    <header>
        <main>
            <?php 

            //Sistema para inscrição de pessoas +18 anos para uma festa
            $nome = $_GET ["name"];
            $sobrenome = $_GET ["sobrenome"];
            $idade = $_GET ["idade"];

             echo "<h1>Olá, $nome $sobrenome!</h1>";
             
             if ($idade >= 18) {
             
                echo "<p>Você está <strong>aprovado(a)</strong> para a festa!</p>";
                echo "<p>Apresente este ingresso na entrada:</p>";
             } else {
                echo "<p>Desculpe, você tem $idade anos.</p>";
                echo "<p>Esta festa é permitida apenas para maiores de 18 anos!</p>";
            }
            ?>
             <P><a href="Javascript:history.go(-1)">Voltar</a></P>
        </main>
    </header>
</body>
</html>