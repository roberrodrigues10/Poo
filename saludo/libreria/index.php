<?php
    include('saludo.php');
    $saludo = new saludo();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $saludo->saluda(saludar:'Hola Mundo!!!')
    ?>
</body>
</html>