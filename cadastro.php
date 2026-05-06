<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<h2>Para acessar nossa loja é necessário colocar os dados abaixo:</h2>

<form action="salvar.php" method="POST">
    <label>Nome:</label>
    <input type="text" name="nome" required>

    <label>Idade:</label>
    <input type="text" name="tipo" required>
    

    <label>Preço:</label>
    <input type="number" step="0.01" name="preco" required>

    <button type="submit">Salvar</button>
</form>

</body>
</html>