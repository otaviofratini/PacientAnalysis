<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>DELLIT</title>
</head>
<body>
    <div class="campo-form">
        <?php
            require_once 'class\paciente.class.php';
            require_once 'reading_csv.php';
            requisito1();
        ?>
    </div>
</body>
</html>