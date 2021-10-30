-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Out-2021 às 14:36
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja_carros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque_car`
--

CREATE TABLE `estoque_car` (
  `id` int(11) NOT NULL,
  `marca_car` varchar(100) DEFAULT NULL,
  `modelo_car` varchar(100) DEFAULT NULL,
  `descricao_car` varchar(200) DEFAULT NULL,
  `ano_fab_car` varchar(100) DEFAULT NULL,
  `ano_mod_car` varchar(100) DEFAULT NULL,
  `cor_car` varchar(100) DEFAULT NULL,
  `placa_car` varchar(100) DEFAULT NULL,
  `valor_car` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estoque_car`
--

INSERT INTO `estoque_car` (`id`, `marca_car`, `modelo_car`, `descricao_car`, `ano_fab_car`, `ano_mod_car`, `cor_car`, `placa_car`, `valor_car`) VALUES
(8, 'Hyundai', 'HB20 ', 'Rodas de liga leve, automático', '2021', '2022', 'Prata', '345fgr', 48),
(10, 'Toyota', 'Corolla', 'Flex, automático', '2020', '2020', 'Prata', '567huy', 70);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `estoque_car`
--
ALTER TABLE `estoque_car`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `estoque_car`
--
ALTER TABLE `estoque_car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
