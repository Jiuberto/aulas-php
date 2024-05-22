<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>

<body>
    <h1>Formulário HTML</h1>
    <hr>
    <form autocomplete="off" method="post" action="excercicio04-processamento copy.php">
        <p> <label for="nome">Nome do produto:</label> <input required type="text" name="nome" id="nome"> </p>


    <div>
        <label for="fabricante">Fabricante:</label><br>
        <select id="fabricante" name="fabricante">
            <?php
            // DESAFIO FABRICANTE
            $fabricantes = ["Fabricante A", "Fabricante B", "Fabricante C", "Fabricante D"];
            foreach ($fabricantes as $fabricante) {
                ?>
                echo "<option><?=$fabricante?></option>";
                <?php
            }
            ?>
            
        </select>
        </div>

        <label for="preco">Preço:</label><br>
        <input type="number" id="preco" name="preco"><br><br>

        <label for="descricao">Descrição:</label><br>
        <textarea id="descricao" name="descricao"></textarea><br><br>

        <input type="submit" value="Enviar">


    </form>
</body>

</html>