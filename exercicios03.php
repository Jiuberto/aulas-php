<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .even {
            background-color: #f0f8ff; /* AliceBlue */
        }
        .odd {
            background-color: #faebd7; /* AntiqueWhite */
        }
    </style>
</head>
<body>

<div class="container">

    <?php
    $meses = ["Janeiro","Fevereiro","Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro","Outubro", "Novembro","Dezembro"];
    ?>

    <ol class="alert alert-dark">
        <?php 
        foreach ($meses as $index => $mes) { 
            $class = ($index % 2 == 0) ? 'even' : 'odd';
        ?>
            <li class="<?= $class ?>"><?= $mes ?></li>
        <?php 
        } ?>
    </ol>

</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
