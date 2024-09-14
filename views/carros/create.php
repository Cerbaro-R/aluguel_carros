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
        <input type="text" name="Marca" required><br><br>
        <label>Modelo</label>
        <input type="text" name="Modelo" required><br><br>
        <label>Ano</label>
        <input type="text" name="Ano" required><br><br>
        <label>Cor</label>
        <input type="text" name="Cor" required><br><br>
        <label>Placa</label>
        <input type="text" name="Placa" required><br><br>
        <label>Preço do Aluguel</label>
        <input type="number" step="0.01" name="Preco_Aluguel" required><br><br>
        <button type="submit">Cadastrar Carro</button>
    </form>
</body>
</html>