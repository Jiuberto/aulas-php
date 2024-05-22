<!DOCTYPE html>
<html>
<head>
    <title>Processamento do Formulário</title>
</head>
<body>
    <h2>Dados Recebidos</h2>
    <?php
    // Recebendo e mostrando os dados recebidos via POST
    if ("POST") {
        $nome = $_POST["nome"];
        $fabricante = $_POST["fabricante"];
        $preco = $_POST["preco"];
        $descricao = $_POST["descricao"];

        // DESAFIO PREÇO
        $preco_formatado = "R$ " . number_format($preco, 2, ',', '.');

        echo "<p><strong>Nome do Produto:</strong> $nome</p>";
        echo "<p><strong>Fabricante:</strong> $fabricante</p>";
        echo "<p><strong>Preço:</strong> $preco_formatado</p>";
        echo "<p><strong>Descrição:</strong> $descricao</p>";
    }
    ?>
</body>
</html>
