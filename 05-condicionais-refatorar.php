<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<style>
    html {
        margin: 5%;
    }
</style>

<body class="conteiner">
    <div>
        <h1>Cond(ref)</h1>
        <hr>
        <h2>Simples (não tem o <code>else</code> )</h2>

        <?php
        $numero = 50;
        if ($numero < 100) {
        ?>
        
            <p>Condição é verdadeira</p>
        <?php
        }
        ?>

        <hr>
        <h2>Composta(usa <code>if/else</code>)</h2>

        <?php

        $produto = "Ultrabook";
        $qtdEmEstoque = 10; 
        $qtdCritica = 2; 
        ?>

        <h3>Produto: <?= $produto ?></h3>
        <h3>Estoque: <?= $qtdEmEstoque ?></h3>

        <?php
   

        if ($qtdEmEstoque < $qtdCritica) {
            echo "<p class=\"alert alert-warning\">É nescessario repor</p>";

            if ($qtdEmEstoque == 0) {
                echo "<p class=\"alert alert-danger\">AGORA</p>";
            }

        } else {
         
            echo "<p class=\"alert alert-success\">Estoque normal</p>";
        }


        ?>

        <hr>

        <h2>Encadeada (usa <code>if, else, elseif</code>)</h2>
        <?php
        if ($produto == "Ultrabook") {
            $garantia = 5;
        } elseif ($produto =="Geladeira") {
            $garantia = 3;
        } elseif ($produto == "TV") {
            $garantia = 2;
        } else {
            $garantia = 1;
        }
        ?>

        <p>O produto <?=$produto?> tem garatia de <span class="badge text-bg-primary"><?=$garantia?></span> ano<?php if ($garantia > 1) echo "s" ?>.</p>

        <hr>

        <h2>Switch/case </h2>
        <p><i>alternativa a condicionais encadeada</i></p>

        <?php
        switch($produto){
                case "Ultrabook": $garantiab = 5; break;
                case "Geladeira": $garantiab = 3; break;
                case "TV": $garantiab = 2; break;
                default: $garantiab = 1; break;
        }

        ?>
        
        <p>Garantia b: <?=$garantiab?></p>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>