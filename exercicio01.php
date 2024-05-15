<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .um {color: red;}
        .dois {color: purple;}
    </style>
</head>

<body>
    <div class="conteiner">
    <h1>Exercicio 1 de php</h1>
    <hr>

    <?php

    $nome = "Aragorn";
    $ano = "86";
    const IDADE = "80";

    echo "<p> Meu nome é $nome e tenho " .IDADE. " anos.</p>"

    ?>

    <p> Meu nome é <b class="um"><?=$nome?></b> e tenho <i class="dois"><?=$ano?></i> anos. </p>

    

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>