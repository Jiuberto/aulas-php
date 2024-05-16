<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="conteiner">
    <h1>loops</h1>
    <hr>

    <h2>Tradicionais: while e for</h2>

    <?php
    $i = 1;
    while( $i <= 3){
     ?>
            <p class="alert alert-info">Senac Penha</p>
        <?php
        $i++;
    }
    ?>
    <h3>for</h3>
    <?php
    for($i = 1; $i <= 5; $i++){
        ?>
        <p class="alert alert-warning">Exemplo <?=$i?></p>
        <?php
    }
    ?>

    <hr>

    <h3>for com array</h3>

    <?php
    $alunos = ["Aragorn", "Bem","Pedro"];
    for($i = 0; $i < count($alunos); $i++ ){
        ?>
        <p class="alert alert-success">
            <?=$alunos[$i]?>
        </p>
        <?php
    }
    ?>

    <hr>

    <h2>especifico do php: foreach, bom para arrays</h2>

    <?php foreach( $alunos as $aluno){ ?>
    <p class="alert alert-dark"> <?=$aluno?> </p>
    <?php } ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>