<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de POO</title>
</head>
<body>
    <pre>
        <?php
            require_once('./Caneta.php');
            $c1 = new Caneta('BIC CRISTAL', 'Vermelha', 1.0);
            $c2 = new Caneta('NATURE', 'Verde', 0.4);
            print_r($c1);
            echo "<br>";
            print_r($c2);
        ?>
    </pre>
</body>
</html>