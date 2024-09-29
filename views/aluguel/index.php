<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="/aluguel/create"><input type="button" value="Alugar Veiculo"></a>
<h1>Histórico de Aluguéis</h1>
<table>
    <thead>
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Cliente</th>
            <th>Data de Início</th>
            <th>Data de Fim</th>
            <th>Preço Total (R$)</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($alugueis as $aluguel): ?>
        <tr>
            <td><?= htmlspecialchars($aluguel->marca) ?></td>
            <td><?= htmlspecialchars($aluguel->modelo) ?></td>
            <td><?= htmlspecialchars($aluguel->nome) ?></td>
            <td><?= htmlspecialchars($aluguel->data_inicio) ?></td>
            <td><?= htmlspecialchars($aluguel->data_fim) ?></td>
            <td><?= htmlspecialchars($aluguel->preco_total) ?></td>
            <td><?= htmlspecialchars($aluguel->status) ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>