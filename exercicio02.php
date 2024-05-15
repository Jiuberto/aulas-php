<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>exer 2</h1>
    <hr>

    <?php
    $identidade = array(
        //Chave associativa
        "nome" => "Aragorn", 
        "senha" => "1998",
        "idade" => 86,
        "cidade" => "Gondor",
        "telefone" => ["11-3535-5667", "11-3708-27828"]

    );
    ?>

    <pre><?=var_dump($identidade)?></pre>
    
    <ol>
    <li>Nome: <?=$identidade["nome"]?></li>
    <li>Senha: <?=$identidade["senha"]?></li>
    <li>Idade: <?=$identidade["idade"]?></li>
    <li>Cidade: <?=$identidade["cidade"]?></li>
    <li>Telefone: <?=$identidade["telefone"][0]?></li>
    </ol>

</body>
</html>