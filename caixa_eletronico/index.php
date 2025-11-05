<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Caixa Eletrônico - BBInvest</title>
</head>
<body>
    <main>
        <?php 
        // Valor que a pessoa quer sacar
        $valor = 1550;
        $total = $valor;

        $val100 = (int)($total / 100);
        $total = $total % 100;

        $valor50 = (int)($total / 50);
        $total = $total % 50; 

        $valor20 = (int)($total / 20);
        $total = $total % 20;

        $valor10 = (int)($total / 10);
        $total = $total % 10;

        $valor5 = (int)($total / 5);
        $total = $total % 5;

        echo "O saque de R$ $valor vai ser de: $val100 cédulas de 100. $valor50 cédulas de 50, $valor20 cédulas de 20, $valor10 cédulas de 10 e $valor5 cédulas de 5. Falta sacar $total."
        ?>
        </form>
    </main>
</body>
</html>