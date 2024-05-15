<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container">
    <h1>Variáveis e constantes</h1>
    <hr>

    <?php

    //variavel
    $curso = "Dev web";
    $ano = 2024;
    $area = "Back-end";

    // Esramos no Programador web em 2024.
    echo "<p> Estamos no $curso em $ano.</p>";

    //com aspas simples não funciona a execuçaõ dinamica
    echo '<p> Estamos no $curso em $ano.</p>';

    //constantes (recomendavel: declarar const com letras maiusculas)
    define("AUTOR", "Jiu");//antiga
    const Empresa = "abc tec";//moderna

    // Tiago trabalha na ABC tecnologia.
    echo  "AUTOR . trabalha na empresa .Empresa" ;
    ?>

    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>