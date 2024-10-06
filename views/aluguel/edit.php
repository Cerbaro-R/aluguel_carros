<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Aluguel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../public/css.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="logoIndex"><img src="../../public/images/AutoAdminLogo.webp" alt="logo"></div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarAdmin" aria-controls="navbarAdmin" aria-expanded="false" aria-label="Alternar navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarAdmin">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Painel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar">
            <ul class="nav flex-column p-3">
                <li class="nav-item">
                    <a class="nav-link" href="/carros">
                        <i class="bi bi-car-front-fill"></i> Gerenciar Carros
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/clientes">
                        <i class="bi bi-people-fill"></i> Gerenciar Clientes
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/aluguel">
                        <i class="bi bi-bookmark-fill"></i> Ver Alugueis
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-gear-fill"></i> Configurações
                    </a>
                </li>
            </ul>
        </div>

        <!-- Formulário de Edição -->
        <div class="container mt-4 form-container">
            <h1 class="text-center">Editar Aluguel</h1>
            <form action="/aluguel/update/<?= $aluguel->id ?>" method="post" class="mt-4">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="carro_id" class="form-label">Carro</label>
                        <select id="carro_id" name="carro_id" class="form-control">
                            <?php foreach ($carros as $carro): ?>
                            <option value="<?= $carro->id ?>" data-preco="<?= $carro->preco_aluguel ?>"
                                <?= $carro->id == $aluguel->carro_id ? 'selected' : '' ?>>
                                <?= $carro->marca ?> - <?= $carro->modelo ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="cliente_id" class="form-label">Cliente</label>
                        <select id="cliente_id" name="cliente_id" class="form-control">
                            <?php foreach ($clientes as $cliente): ?>
                            <option value="<?= $cliente->id ?>"
                                <?= $cliente->id == $aluguel->cliente_id ? 'selected' : '' ?>>
                                <?= $cliente->nome ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="data_inicio" class="form-label">Data de Início</label>
                        <input type="date" id="data_inicio" name="data_inicio" class="form-control" value="<?= $aluguel->data_inicio ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="data_fim" class="form-label">Data de Término</label>
                        <input type="date" id="data_fim" name="data_fim" class="form-control" value="<?= $aluguel->data_fim ?>" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="preco_total" class="form-label">Valor Total</label>
                        <input type="text" id="preco_total" name="preco_total" class="form-control" value="<?= $aluguel->preco_total ?>" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="status" class="form-label">Status</label>
                        <input type="text" id="status" name="status" class="form-control" value= "<?= $aluguel->status ?>" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Atualizar Aluguel</button>
                        <a href="/aluguel/delete/<?= $aluguel->id ?>" class="btn btn-danger ms-2" onclick="return confirm('Tem certeza que deseja excluir este aluguel?')">Excluir</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Rodapé -->
    <footer class="footer mt-auto py-3 bg-dark text-light">
        <div class="container text-center">
            <span class="text-muted">© 2024 AutoAdmin. Todos os direitos reservados.</span>
        </div>
    </footer>

    <!-- Bootstrap JS e dependências -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Ícones Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="../../public/js.js"></script>
</body>
</html>
