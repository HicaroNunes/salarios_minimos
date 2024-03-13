<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salarios mininos</title>
</head>
<body>
   <main>
        <?php 
            $salario = $_POST["sal"] ?? 0;
            $res = $salario % 1412;
            $int = intdiv($salario,1412);
        ?>
    
            <form action="<?PHP echo $_SERVER['PHP_SELF'] ?>" method="post"
            <h3>Quanto você ganha?</h3>
            <input type="number" name="sal" id="box" step="0.01" value="<?= $salario?>">
            <input type="submit" value="Calcular">
    </main> 

   <section id="resultado">
        <?php
            echo "Seu salário de " . $salario . " equivale a " . $int . " salários míninos + R$" . $res . "!";
        ?>
</body>
</html>