<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   < <style>
li:nth-child(even) {
    background-color: red;
}

li:nth-child(odd) {
    background-color: green;
}
/* .even {
            background-color: blue; 
        }
        .odd {
            background-color: red; 
        } */
    </style> 
</head>
<body>

<div class="container">

    <?php
    $meses = ["Janeiro","Fevereiro","Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro","Outubro", "Novembro","Dezembro"];
    ?>

    <ol class=">
        <?php 
        foreach ( /* $i = 0; $i < count($meses); $i++ */  $meses as $index => $mes) { 

            /* Neste caso, avaliamos o resto da divisão por 2. Quando é zero (ou seja, número par), atribuimos a cor vermelha. Quando é diferente de zero (ou seja, ímpar), atributos a cor azul. */

            /* $cor = $i % 2 == 0 ? "red" : "blue"; */
            $class = ($index % 2 == 0) ? 'even' : 'odd';
        ?>
             li style="color: <?=$cor?"> <?=$meses[$i]
        
        <?php 
        } ?>
    </ol>