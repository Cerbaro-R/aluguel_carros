<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastrar Novo Carro</h1>
    <form action="/carros/store" method="post">
        <label>Marca</label>
        <input type="text" name="marca" required><br><br>
        <label>Modelo</label>
        <input type="text" name="modelo" required><br><br>
        <label>Ano</label>
        <input type="text" name="ano" required><br><br>
        <label>Cor</label>
        <input type="text" name="cor" required><br><br>
        <label>Placa</label>
        <input type="text" name="placa" required><br><br>
        <label>Preço do Aluguel</label>
        <input type="number" step="0.01" name="preco_aluguel" required><br><br>
        <button type="submit">Cadastrar Carro</button>
    </form>
</body>
</html>