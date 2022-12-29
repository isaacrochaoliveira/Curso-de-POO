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
            $c1 = new Caneta();
            $c1->setModelo('BIC CRISTAL');
            $c1->setPonta(0.5);
            print_r($c1);
        ?>
    </pre>
</body>
</html>