<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="conteiner">
    <div>
        <h1>Cond</h1>
        <hr>
        <h2>Simples (não tem o <code>else</code> )</h2>

        <?php

        $numero = 50;
        if ($numero < 100) {
            echo "<p>Condição é verdadeira</p>";
        }

        ?>

        <hr>
        <h2>Composta(usa <code>if/else</code>)</h2>

        <?php

        /* Controle de estoque */
        $produto = "Ultrabook";
        $qtdEmEstoque = 10; //o que temos no momento
        $qtdCritica = 2; // minimo nescessario
        ?>

        <h3>Produto: <?= $produto ?></h3>
        <h3>Estoque: <?= $qtdEmEstoque ?></h3>

        <?php
        /* Se a quantidade em estoque for abaixo da quantidade c´ritica, o sistema deve avisar e pedir pra repor */

        if ($qtdEmEstoque < $qtdCritica) {
            echo "<p class=\"alert alert-danger\">É nescessario repor</p>";
        } else {
            /* Casocontrário, simplesmente falar que o estoque esta normal */
            echo "<p class=\"alert alert-success\">Estoque normal</p>";
        }


        /* Casocontrário, simplesmente falar que o estoque esta normal */
        ?>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>