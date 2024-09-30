<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico de Aluguéis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/css.css">
</head>
<body>
    <!--Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="logoIndex"><img src="../public/images/AutoAdminLogo.webp" alt="logo"></div>
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
                        <i class="bi bi-bookmark-fill"></i> Ver Reservas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-gear-fill"></i> Configurações
                    </a>
                </li>
            </ul>
        </div>

        <div class="container mt-4">
            <h1 class="text-center">Histórico de Aluguéis</h1>
            <a href="/aluguel/create" class="btn btn-primary mb-3">Alugar Veículo</a>
            
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Cliente</th>
                        <th>Data de Início</th>
                        <th>Data de Fim</th>
                        <th>Preço Total (R$)</th>
                        <th>Status</th>
                        <th>Ações</th>
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
                        <td>
                            <a href="/aluguel/edit/<?= $aluguel->id ?>" class="btn btn-warning btn-sm">Editar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Rodapé -->
    <footer class="footer mt-auto py-3 bg-dark text-light">
        <div class="container text-center">
            <span class="text-muted">© 2024 AutoAdmin. Todos os direitos reservados.</span>
        </div>
    </footer>

    <!-- Bootstrap JS e dependências (Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Ícones Bootstrap (opcional) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</body>
</html>
