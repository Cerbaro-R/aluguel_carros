<!DOCTYPE html>
<html lang="pt-br">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluguel de Carros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css.css">
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
                    <a class="nav-link" href="/config">
                        <i class="bi bi-gear-fill"></i> Configurações
                    </a>
                </li>
            </ul>
        </div>

         <!-- Conteúdo Principal -->
         <div class="content">
            <h1>Configurações</h1>
            <div class="row">
                <!-- Card cadastrar usuários -->
                <div class="col-md-4">
                    <div id="box" class="card text-white bg-primary mb-3">
                      <div class="card-header">Usuários</div>
                      <div class="card-body">
                        <h5 class="card-title">Gerenciar Usuários</h5>
                        <a href="/config/users" class="btn btn-light rounded-pill">Acessar</a>
                      </div>
                    </div>
                </div>
                <!-- Card Gerenciar Status -->
                <div class="col-md-4">
                    <div id="box" class="card text-white bg-success mb-3">
                      <div class="card-header">Status</div>
                      <div class="card-body">
                        <h5 class="card-title">Gerenciar Status</h5>
                        <a href="/clientes" class="btn btn-light rounded-pill">Acessar</a>
                      </div>
                    </div>
                </div>
            </div>



    <!-- Bootstrap JS e dependências (Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Ícones Bootstrap (opcional) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</body>
</html>
