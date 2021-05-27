-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Maio-2021 às 17:12
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `trabalho2b`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `city`
--

CREATE TABLE `city` (
  `idCity` int(11) NOT NULL,
  `nameCity` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `city`
--

INSERT INTO `city` (`idCity`, `nameCity`) VALUES
(1, 'sumare'),
(2, 'londrina'),
(22, 'Campinas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `logging`
--

CREATE TABLE `logging` (
  `idLogging` int(11) NOT NULL,
  `dateLogging` datetime NOT NULL,
  `level` varchar(100) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `fk_reg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `logging`
--

INSERT INTO `logging` (`idLogging`, `dateLogging`, `level`, `msg`, `fk_reg`) VALUES
(1, '2021-05-24 22:04:12', 'INFO', 'Test DB', 33),
(32, '2021-05-24 18:22:17', 'INFO', 'Executando a tarefa X...', 33),
(33, '2021-05-24 18:22:17', 'WARNING', 'Isto é um aviso.... a operação X pode falhar...', 33),
(34, '2021-05-24 18:22:17', 'ERROR', 'Isto é um erro. A operação X falhou', 33),
(35, '2021-05-24 18:22:20', 'INFO', 'Executando a tarefa X...', 33),
(36, '2021-05-24 18:22:20', 'WARNING', 'Isto é um aviso.... a operação X pode falhar...', 33),
(37, '2021-05-24 18:22:20', 'ERROR', 'Isto é um erro. A operação X falhou', 33),
(38, '2021-05-24 18:22:53', 'INFO', 'Executando a tarefa X...', 33),
(39, '2021-05-24 18:22:53', 'WARNING', 'Isto é um aviso.... a operação X pode falhar...', 33),
(40, '2021-05-24 18:22:53', 'ERROR', 'Isto é um erro. A operação X falhou', 33),
(41, '2021-05-24 18:24:16', 'INFO', 'Executando a tarefa X...', 33),
(42, '2021-05-24 18:24:16', 'WARNING', 'Isto é um aviso.... a operação X pode falhar...', 33),
(43, '2021-05-24 18:24:16', 'ERROR', 'Isto é um erro. A operação X falhou', 33),
(44, '2021-05-24 18:27:39', 'INFO', 'Executando a tarefa X...', 33),
(45, '2021-05-24 18:27:39', 'WARNING', 'Isto é um aviso.... a operação X pode falhar...', 33),
(46, '2021-05-24 18:27:39', 'ERROR', 'Isto é um erro. A operação X falhou', 33),
(47, '2021-05-24 18:28:16', 'INFO', 'Executando a tarefa X...', 33),
(48, '2021-05-24 18:28:16', 'WARNING', 'Isto é um aviso.... a operação X pode falhar...', 33),
(49, '2021-05-24 18:28:16', 'ERROR', 'Isto é um erro. A operação X falhou', 33),
(50, '2021-05-24 18:29:04', 'INFO', 'Executando a tarefa X...', 33),
(51, '2021-05-24 18:29:04', 'WARNING', 'Isto é um aviso.... a operação X pode falhar...', 33),
(52, '2021-05-24 18:29:04', 'ERROR', 'Isto é um erro. A operação X falhou', 33),
(53, '2021-05-26 10:39:38', 'INFO', 'Executando a tarefa X...', 33),
(54, '2021-05-26 10:39:38', 'WARNING', 'Isto é um aviso.... a operação X pode falhar...', 33),
(55, '2021-05-26 10:39:38', 'ERROR', 'Isto é um erro. A operação X falhou', 33),
(56, '2021-05-26 10:40:33', 'INFO', 'Executando a tarefa X...', 33),
(57, '2021-05-26 10:40:33', 'WARNING', 'Isto é um aviso.... a operação X pode falhar...', 33),
(58, '2021-05-26 10:40:33', 'ERROR', 'Isto é um erro. A operação X falhou', 33),
(59, '2021-05-26 10:40:39', 'INFO', 'Executando a tarefa X...', 33),
(60, '2021-05-26 10:40:39', 'WARNING', 'Isto é um aviso.... a operação X pode falhar...', 33),
(61, '2021-05-26 10:40:39', 'ERROR', 'Isto é um erro. A operação X falhou', 33),
(62, '2021-05-26 10:46:50', 'INFO', 'Executando a tarefa X...', 33),
(63, '2021-05-26 10:46:50', 'WARNING', 'Isto é um aviso.... a operação X pode falhar...', 33),
(64, '2021-05-26 10:46:50', 'INFO', 'Executando a tarefa X...', 33),
(65, '2021-05-26 10:46:50', 'ERROR', 'Isto é um erro. A operação X falhou', 33),
(66, '2021-05-26 10:46:50', 'WARNING', 'Isto é um aviso.... a operação X pode falhar...', 33),
(67, '2021-05-26 10:46:50', 'ERROR', 'Isto é um erro. A operação X falhou', 33),
(68, '2021-05-26 10:47:52', 'INFO', 'Executando a tarefa X...', 33),
(69, '2021-05-26 10:47:52', 'WARNING', 'Isto é um aviso.... a operação X pode falhar...', 33),
(70, '2021-05-26 10:47:52', 'ERROR', 'Isto é um erro. A operação X falhou', 33),
(71, '2021-05-26 10:51:24', 'INFO', 'Executando a tarefa X...', 33),
(72, '2021-05-26 10:51:24', 'WARNING', 'Isto é um aviso.... a operação X pode falhar...', 33),
(73, '2021-05-26 10:51:24', 'ERROR', 'Isto é um erro. A operação X falhou', 33),
(74, '2021-05-26 10:51:29', 'INFO', 'Executando a tarefa X...', 33),
(75, '2021-05-26 10:51:29', 'WARNING', 'Isto é um aviso.... a operação X pode falhar...', 33),
(76, '2021-05-26 10:51:29', 'ERROR', 'Isto é um erro. A operação X falhou', 33),
(77, '2021-05-27 11:17:32', 'INFO', 'Executando a tarefa X...', 33),
(78, '2021-05-27 11:17:32', 'WARNING', 'Isto é um aviso.... a operação X pode falhar...', 33),
(79, '2021-05-27 11:17:32', 'ERROR', 'Isto é um erro. A operação X falhou', 33),
(80, '2021-05-27 11:21:25', 'INFO', 'Executando a tarefa X...', 33),
(81, '2021-05-27 11:21:25', 'WARNING', 'Isto é um aviso.... a operação X pode falhar...', 33),
(82, '2021-05-27 11:21:25', 'ERROR', 'Isto é um erro. A operação X falhou', 33),
(83, '2021-05-27 11:25:31', 'INFO', 'Executando a tarefa X...', 33),
(84, '2021-05-27 11:25:31', 'WARNING', 'Isto é um aviso.... a operação X pode falhar...', 33),
(85, '2021-05-27 11:25:31', 'ERROR', 'Isto é um erro. A operação X falhou', 33),
(86, '2021-05-27 11:39:34', 'INFO', 'Executando a tarefa X...', 33),
(87, '2021-05-27 11:39:34', 'WARNING', 'Isto é um aviso.... a operação X pode falhar...', 33),
(88, '2021-05-27 11:39:34', 'ERROR', 'Isto é um erro. A operação X falhou', 33),
(89, '2021-05-27 12:01:05', 'INFO', 'Executando a tarefa X...', 33),
(90, '2021-05-27 12:01:05', 'WARNING', 'Isto é um aviso.... a operação X pode falhar...', 33),
(91, '2021-05-27 12:01:05', 'ERROR', 'Isto é um erro. A operação X falhou', 33),
(92, '2021-05-27 12:09:29', 'INFO', 'Executando a tarefa X...', 33),
(93, '2021-05-27 12:09:29', 'WARNING', 'Isto é um aviso.... a operação X pode falhar...', 33),
(94, '2021-05-27 12:09:29', 'ERROR', 'Isto é um erro. A operação X falhou', 33),
(95, '2021-05-27 12:09:33', 'INFO', 'Executando a tarefa X...', 33),
(96, '2021-05-27 12:09:33', 'WARNING', 'Isto é um aviso.... a operação X pode falhar...', 33),
(97, '2021-05-27 12:09:33', 'ERROR', 'Isto é um erro. A operação X falhou', 33);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preco` float NOT NULL,
  `total` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `id_produto`, `quantidade`, `preco`, `total`) VALUES
(116, 4, 10, 100, 100),
(115, 2, 25, 400, 400);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `quantidade` varchar(10) NOT NULL,
  `preco` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `quantidade`, `preco`) VALUES
(2, 'lente de contato', '25', '400.00'),
(1, 'Oculos ', '20', '200.00'),
(4, 'Armação', '10', '100.00'),
(5, 'Oculos de sol', '14', '180.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `profile_reg`
--

CREATE TABLE `profile_reg` (
  `idProfile` int(11) NOT NULL,
  `nameProfile` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `profile_reg`
--

INSERT INTO `profile_reg` (`idProfile`, `nameProfile`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reg`
--

CREATE TABLE `reg` (
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `city` varchar(15) NOT NULL,
  `image` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `id` int(11) NOT NULL,
  `fk_idProfile` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `reg`
--

INSERT INTO `reg` (`name`, `username`, `password`, `city`, `image`, `gender`, `id`, `fk_idProfile`) VALUES
('gustavo', 'gu', '123', 'sumare', 'image/gustavo.jpeg', 'male', 33, 1),
('Jose', 'jose@123', '123', 'londrina', 'image/jose.jpeg', 'male', 34, 1),
('kamille', 'ka', '123', 'sumare', 'image/kamille.jpeg', 'female', 35, 2),
('gustavo', 'gu@123', '123', 'sumare', 'image/gustavo.jpeg', 'male', 37, 1),
('gustavo', 'gustavo@123', '123', 'sumare', 'image/gustavo.jpeg', 'male', 38, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`idCity`);

--
-- Índices para tabela `logging`
--
ALTER TABLE `logging`
  ADD PRIMARY KEY (`idLogging`),
  ADD KEY `fk_reg` (`fk_reg`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `profile_reg`
--
ALTER TABLE `profile_reg`
  ADD PRIMARY KEY (`idProfile`);

--
-- Índices para tabela `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_idProfile` (`fk_idProfile`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `city`
--
ALTER TABLE `city`
  MODIFY `idCity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `logging`
--
ALTER TABLE `logging`
  MODIFY `idLogging` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `profile_reg`
--
ALTER TABLE `profile_reg`
  MODIFY `idProfile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `logging`
--
ALTER TABLE `logging`
  ADD CONSTRAINT `logging_ibfk_1` FOREIGN KEY (`fk_reg`) REFERENCES `reg` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
