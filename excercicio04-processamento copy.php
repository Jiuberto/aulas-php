<!DOCTYPE html>
<html>
<head>
    <title>Processamento do Formulário</title>
</head>
<body>
    <h2>Dados Recebidos</h2>
    <?php
    // Recebendo e mostrando os dados recebidos via POST

        $nome = $_POST["nome"];
        $fabricante = $_POST["fabricante"];
        $preco = $_POST["preco"];
        $descricao = $_POST["descricao"];

?>

        <ul>
            <li><?=$nome?></li>
            <li><?=$fabricante?></li>
            <li>R$ <?=number_format($preco, 2, ",", ".")?></li>
            <li><?=$descricao?></li>
        </ul>
</body>
</html>
