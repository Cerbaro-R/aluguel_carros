<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/css.css">
</head>
<body>
    <!--Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <div class="logoIndex"><img src="public/images/AutoAdminLogo.webp" alt="logo"></div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarAdmin" aria-controls="navbarAdmin" aria-expanded="false" aria-label="Alternar navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarAdmin">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/home">Painel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/">Sair</a>
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
                        <i class="bi bi-car-front-fill"></i> Carros
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/clientes">
                        <i class="bi bi-people-fill"></i> Clientes
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/aluguel">
                        <i class="bi bi-bookmark-fill"></i> Alugueis
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-gear-fill"></i> Configurações
                    </a>
                </li>
            </ul>
        </div>

        <!-- Conteúdo Principal -->
        <div class="container mt-4">
            <!-- Botão Cadastrar Novo Cliente -->
            <div class="mb-3">
                <a href="/clientes/create" class="btn btn-success">Cadastrar Novo Cliente</a>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Telefone</th>
                        <th>E-mail</th>
                        <th>Endereço</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($clientes as $cliente): ?>
                    <tr>
                        <td><?= htmlspecialchars($cliente->nome) ?></td>
                        <td><?= htmlspecialchars($cliente->cpf) ?></td>
                        <td><?= htmlspecialchars($cliente->telefone) ?></td>
                        <td><?= htmlspecialchars($cliente->email) ?></td>
                        <td><?= htmlspecialchars($cliente->endereco) ?></td>
                        <td>
                            <a href="/clientes/edit/<?= $cliente->id ?>" class="btn btn-warning btn-sm">Editar</a> |
                            <a href="/clientes/delete/<?= $cliente->id ?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Rodapé -->
    <footer class="footer">
        <div class="container">
            <span class="text-muted">© 2024 AutoAdmin. Todos os direitos reservados.</span>
        </div>
    </footer>

    <!-- Bootstrap JS e dependências (Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Ícones Bootstrap (opcional) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</body>
</html>
