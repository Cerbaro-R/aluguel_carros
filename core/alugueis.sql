-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/10/2024 às 03:33
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
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alugueis`
--
ALTER TABLE `alugueis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
