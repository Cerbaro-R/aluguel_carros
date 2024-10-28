-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/10/2024 às 02:33
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aluguel_carros`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `alugueis`
--

CREATE TABLE `alugueis` (
  `id` int(11) NOT NULL,
  `carro_id` int(11) DEFAULT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_fim` date DEFAULT NULL,
  `preco_total` decimal(10,2) DEFAULT NULL,
  `aluguel_status_id` int(10) DEFAULT 8
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `alugueis`
--

INSERT INTO `alugueis` (`id`, `carro_id`, `cliente_id`, `data_inicio`, `data_fim`, `preco_total`, `aluguel_status_id`) VALUES
(5, 1, 2, '2024-10-02', '2024-10-05', 600.00, 1),
(6, 4, 3, '2024-10-03', '2024-10-30', 8100.00, 6),
(7, 4, 3, '2024-10-05', '2024-10-10', 250.00, 5),
(8, 4, 4, '2024-10-02', '2024-10-12', 600.00, 8),
(9, 5, 5, '2024-09-30', '2024-10-04', 240.00, 1),
(11, 7, 6, '2024-10-06', '2024-10-12', 1200.00, 8),
(13, 7, 6, '2024-10-08', '2024-10-09', 200.00, 8);

-- --------------------------------------------------------

--
-- Estrutura para tabela `aluguel_status`
--

CREATE TABLE `aluguel_status` (
  `id` int(10) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `aluguel_status`
--

INSERT INTO `aluguel_status` (`id`, `status`) VALUES
(1, 'Ativo'),
(2, 'Finalizado'),
(3, 'Cancelado'),
(4, 'Atrasado'),
(5, 'Pendente'),
(6, 'Prorrogado'),
(7, 'Não devolvido'),
(8, 'Reservado');

-- --------------------------------------------------------

--
-- Estrutura para tabela `carros`
--

CREATE TABLE `carros` (
  `id` int(11) NOT NULL,
  `marca_id` int(10) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `cor` varchar(50) DEFAULT NULL,
  `placa` varchar(20) DEFAULT NULL,
  `preco_aluguel` decimal(10,2) DEFAULT NULL,
  `carro_status_id` int(10) DEFAULT 8,
  `ativo` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `carros`
--

INSERT INTO `carros` (`id`, `marca_id`, `modelo`, `ano`, `cor`, `placa`, `preco_aluguel`, `carro_status_id`, `ativo`) VALUES
(1, 2, 'Civic', 2014, 'Branco', 'SFD1549', 200.00, 1, 1),
(2, 3, 'Civic', 2024, 'Preto', 'SFD1550', 300.00, 1, 1),
(3, 4, 'Celta', 2008, 'preto', 'TPP2838', 50.00, 4, 1),
(4, 5, 'IX-35', 2016, 'Prata', 'GHJ1564', 60.00, 2, 1),
(5, 6, 'Fit', 2017, 'Branco', 'SDG4567', 60.00, 5, 1),
(7, 7, 'Corola', 2024, 'Vermelho', 'KKK6598', 200.00, 1, 1),
(8, 9, 'Creta', 2024, 'Prata', 'NHM6598', 250.00, 8, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `carro_marca`
--

CREATE TABLE `carro_marca` (
  `id` int(10) NOT NULL,
  `marca` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `carro_marca`
--

INSERT INTO `carro_marca` (`id`, `marca`) VALUES
(1, 'Volkswagen'),
(2, 'Fiat'),
(3, 'Chevrolet'),
(4, 'Ford'),
(5, 'Renault'),
(6, 'Honda'),
(7, 'Toyota'),
(8, 'Nissan'),
(9, 'Hyundai'),
(10, 'Jeep');

-- --------------------------------------------------------

--
-- Estrutura para tabela `carro_status`
--

CREATE TABLE `carro_status` (
  `id` int(10) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `carro_status`
--

INSERT INTO `carro_status` (`id`, `status`) VALUES
(1, 'Disponível'),
(2, 'Alugado'),
(3, 'Reservado'),
(4, 'Em manutenção'),
(5, 'Lavando'),
(6, 'Aguardando devolução'),
(7, 'Avariado'),
(8, 'Em cadastramento');

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `endereco` text DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `ativo` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `endereco`, `email`, `ativo`) VALUES
(2, 'Rafael cerbaro', '120.508.449-56', '49988919298', 'Rua Alemanha', 'cerbarorarael1@gmail.com', 0),
(3, 'Volnei Cerbaro', '120.508.449-56', '49988919298', 'Rua Alemanha', 'vdfgvdsgvsdf@sefaesda', 1),
(4, 'Eduardo', '5531681536516', '6841354168135', 'vfdsgsdgdsfbvgdr', 'fevfsagfvsdv@dgvasd', 1),
(5, 'Elizandra', '1354351684', 'fsefaseded', 'fsdffgsargerf', 'fsfgweres@fsgdfs', 1),
(6, 'Isabela Schneider', '123658964-56', '49988652314', 'gshgtrshtguighriufgiaekfgeisufgyo', 'fefgsrgra@dfgasf', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `senha`) VALUES
(1, 'Rafael  Cerbaro', '1234');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `alugueis`
--
ALTER TABLE `alugueis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carro_id` (`carro_id`),
  ADD KEY `cliente_id` (`cliente_id`);

--
-- Índices de tabela `aluguel_status`
--
ALTER TABLE `aluguel_status`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `carros`
--
ALTER TABLE `carros`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `carro_marca`
--
ALTER TABLE `carro_marca`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `carro_status`
--
ALTER TABLE `carro_status`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alugueis`
--
ALTER TABLE `alugueis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `aluguel_status`
--
ALTER TABLE `aluguel_status`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `carros`
--
ALTER TABLE `carros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `carro_marca`
--
ALTER TABLE `carro_marca`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `carro_status`
--
ALTER TABLE `carro_status`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `alugueis`
--
ALTER TABLE `alugueis`
  ADD CONSTRAINT `alugueis_ibfk_1` FOREIGN KEY (`carro_id`) REFERENCES `carros` (`id`),
  ADD CONSTRAINT `alugueis_ibfk_2` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
