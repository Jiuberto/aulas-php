<?php include "recursos.php"; ?>
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
        <div class="alert alert-info">
            <p>Empresa: <?=EMPRESA?></p>
            <p>Ano fiscal: <?=$anoFiscal?></p>

        </div>
        <hr>
    <h1>array</h1>
    <hr>

    <?php
    // Declarando arrays
    $bandas = ["Rush", "Slayer", "Nightwish"];
    $cursos = array("HTML5", "PHP", "Design", "JS");

    define("UNIDADES_SESC", ["Belenzinho", "Bertioga"]);
    const UNIDADE_SESAC = ["Penha", "São Miguel", "Itaquera"];

    ?>
    <h3>Acesso e saída de dados</h3>
    <p>Curto a banda <?=$bandas[1]?>.</p>
    <p>Já estudei <?=$cursos[3]?></p>
    <p>Gostaria de conhecer o Sesc <?=UNIDADES_SESC[1]?></p>
    <p>Estamos no Senac <?=UNIDADE_SESAC[0]?></p>

    <hr>

    <h2>Arrays associados</h2>
    <?php
    $filme = [
        //Chave associativa
        "titulo" => "Principe do Egito", 
        "ano" => 1998,
        "genero" => "Ação",
        "personagens" => ["Moisés","Ramsés"]

    ];

    
    $livro = array(
        "titulo" => "Senhor dos Anéis",
        "autor" => "Tolkien"

    );
    ?>
    <h3>Acesso e saia de dados</h3>
    <p>O filme <?=$filme["titulo"]?> foi lançado em <?=$filme["ano"]?> </p>
    <p> <?=$livro['titulo']?> é um ótimo livro</p>

    <hr>

    <h2>Comandos úteis para análise/depuração de arrays</h2>
    <h3><code>print_r</code> e <code>var_dump()</code></h3>

    <pre>
    <?=print_r($bandas)?>
    </pre>


    <pre>
    <?=var_dump($bandas)?>
    </pre>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>