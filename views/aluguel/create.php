<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Novo Carro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Aluguel de Carros</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/carros">Carros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/clientes">Clientes</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4 form-container">
     
    <h1>Alugar Carro</h1>
        <form action="/aluguel/store" method="post" class="mt-4">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="carro" class="form-label">Carro</label>
                    <select id="carro_id" name="carro_id" class="form-control">
                        <?php foreach ($carros as $carro): ?>
                        <option value="<?= $carro->id ?>" data-preco="<?= $carro->preco_aluguel ?>">
                            <?= $carro->marca ?> - <?= $carro->modelo ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
                <div class="col-md-6">
                    <label for="cliente" class="form-label">Cliente</label>
                    <select id="cliente_id" name="cliente_id" class="form-control">
                        <?php foreach ($clientes as $cliente): ?>
                        <option value="<?= $cliente['id'] ?>"><?= $cliente['nome'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                    <label for="data_inicio" class="form-label">Data de Início</label>
                    <input type="date" id="data_inicio" name="data_inicio" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="data_fim" class="form-label">Data de Término</label>
                    <input type="date" id="data_fim" name="data_fim" class="form-control" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="preco_total" class="form-label">Valor Total</label>
                    <input type="text" id="preco_total" name="preco_total" class="form-control" readonly>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Alugar</button>
                </div>
            </div>
        </form>

        <script src="../../public/js.js"></script>

    </div>
</body>
</html>
