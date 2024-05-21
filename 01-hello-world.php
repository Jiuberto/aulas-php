<?php include "recursos.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= EMPRESA ?> - Start php</title>
</head>

<body>
    <h1>Exp PHP</h1>
    <hr>

    <!-- Delimitadores de abertura/fechamento -->
    <?php

    echo "ola";
    echo '<p>Senac Penha</p>';
    echo "<p>Senac Penha</p>";
    echo "<p>Senac Penha</p>"

    /* Delimitadores de abertura/fechamento */
    ?>

    <hr>

    <h2>Tecnologias trabalhadas</h2>
    <?php foreach ($tecnologias as $tecnologia) { ?>
        <p> <?= $tecnologia ?> </p>
    <?php  } ?>
</body>

</html>