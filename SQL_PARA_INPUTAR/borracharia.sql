-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/09/2021 às 03:18
-- Versão do servidor: 10.4.21-MariaDB
-- Versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `borracharia`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tarefas`
--

CREATE TABLE `tarefas` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `NOME` varchar(50) NOT NULL,
  `VALOR` decimal(10,0) NOT NULL,
  `DESCRICAO` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tarefas`
--

INSERT INTO `tarefas` (`ID`, `NOME`, `VALOR`, `DESCRICAO`) VALUES
(1, 'Vulcanização', '200', 'Vulcanização');

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendas`
--

CREATE TABLE `vendas` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `PLACA` varchar(50) NOT NULL,
  `COR` varchar(50) NOT NULL,
  `TAREFAID` int(11) NOT NULL,
  `TIPO_PAGAMENTO` varchar(50) NOT NULL,
  `DATA_PAGAMENTO` date NOT NULL,
  `DATA_SERVICO` date NOT NULL,
  `TOTAL_SERVICO` float NOT NULL,
  `OBSERVACAO` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `vendas`
--

INSERT INTO `vendas` (`ID`, `PLACA`, `COR`, `TAREFAID`, `TIPO_PAGAMENTO`, `DATA_PAGAMENTO`, `DATA_SERVICO`, `TOTAL_SERVICO`, `OBSERVACAO`) VALUES
(1, '5434SDA', 'Verde', 1, 'Cartão de Crédito', '2021-09-22', '2021-09-22', 200.5, 'Breve Observação'),
(2, '5434SDA', 'Azul', 1, 'Cartão de Crédito', '2021-09-22', '2021-09-22', 200, 'Breve Observação');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tarefas`
--
ALTER TABLE `tarefas`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Índices de tabela `vendas`
--
ALTER TABLE `vendas`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tarefas`
--
ALTER TABLE `tarefas`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
