<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Processamento de dados</h1>
    <hr>

    <?php
    /* Capturando os dados provenientes do formulario usando arry superglobal $_POST[]. Se o form usar método get, então usaríamos $_GET[].*/

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $nascimento = $_POST['nascimento'];
    $mensagem = $_POST['mensagem'];
?>
    <?php
    if ( empty($nome) || empty($email)) {
?>  
<p>preencha o nome e email seu vagabundo</p>   
<?php     
    } else {
?>        
    
    

<H2>Dados recebidos</H2>
    <ul>
        <li>Nome: <?=$nome?></li>
        <li>E-mail: <?=$email?></li>

        <?php if (!empty($nascimento)){ 
        ?>
        <li>Data de nascimento: <?=$nascimento?></li>
        <?php } ?>

        <?php if (!empty($mensagem)) {?>
        <li>Mensagem: <?=$mensagem?></li>
        <?php } ?>

    </ul>
    <?php } ?>
</body>
</html>