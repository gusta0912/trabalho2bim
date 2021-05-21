-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Maio-2021 às 15:41
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
-- Estrutura da tabela `cadastrar`
--

CREATE TABLE `cadastrar` (
  `id` int(13) NOT NULL,
  `emailCliente` varchar(50) NOT NULL,
  `senhaCliente` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastrar`
--

INSERT INTO `cadastrar` (`id`, `emailCliente`, `senhaCliente`, `image`) VALUES
(1, 'alciomar@123', '123', ''),
(2, 'alciomar@123', '123', ''),
(3, 'alciomar@123', '123', ''),
(4, 'alciomar@123', '123', ''),
(5, 'alciomar@123', '123', ''),
(6, 'gustavo@121', '1234', ''),
(7, 'gustavo@121', '1234', ''),
(8, 'gustavo@121', '1234', ''),
(9, 'gustavo@121', '1234', ''),
(10, 'camilla@21', '1234', ''),
(11, 'camilla@21', '1234', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `consultas`
--

CREATE TABLE `consultas` (
  `ID_consulta` smallint(6) NOT NULL,
  `Nome_paciente` varchar(40) NOT NULL,
  `Valor_consulta` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `exame`
--

CREATE TABLE `exame` (
  `ID_exame` smallint(6) NOT NULL,
  `Nome_paciente` varchar(40) NOT NULL,
  `Resultado_exame` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
--

CREATE TABLE `medico` (
  `ID_medico` smallint(6) DEFAULT NULL,
  `Nome_medico` varchar(40) NOT NULL,
  `Sobrenome_medico` varchar(60) DEFAULT NULL,
  `ID_consulta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(14, 2, 25, 400, 800),
(13, 1, 20, 200, 600);

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
(1, 'Oculos ', '20', '200.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissional`
--

CREATE TABLE `profissional` (
  `ID_profissional` smallint(6) NOT NULL,
  `Nome_profissional` varchar(40) NOT NULL,
  `Sobrenome_profissional` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `reg`
--

INSERT INTO `reg` (`name`, `username`, `password`, `city`, `image`, `gender`) VALUES
('gustavo', 'gomes', '123', '', 'image/imagem.jpg', 'male'),
('gustavo', 'gomes', '123', '', 'image/imagem.jpg', 'male'),
('gustavo', 'gomes', '123', '', 'image/imagem.jpg', 'male'),
('gustavo', 'gomes', '23123', '', 'image/i.png', 'male'),
('gustavo', 'gomes', 'qwwrqw13', '', 'image/i2.jpeg', 'male'),
('gustavo', 'gomes', 'qwwrqw13', '', 'image/i2.jpeg', 'male'),
('gustavo', 'gomes', '1232', '', 'image/imagem.jpg', 'male'),
('gustavo', 'gustavo123@gmail.com', '12345', '', '', ''),
('gustavo', 'gustavo123@gmail.com', '12345', '', '', ''),
('gustavo', 'gustavo123@gmail.com', '121321', '', '', ''),
('gustavo', 'gustavo123@gmail.com', '121321', '', '', ''),
('gustavo', 'gustavo123@gmail.com', '121321', '', '', ''),
('gustavo', 'gustavo123@gmail.com', '121321', '', '', ''),
('gustavo', 'gustavo123@gmail.com', '121321', '', '', ''),
('gustavo', 'gomes', '1213', '', 'image/i2.jpeg', 'male'),
('gustavo', 'gomes', '12321', '', '', 'female'),
('gustavo', 'gomes', '12321', '', '', 'female'),
('gustavo', '2q321', '2q31231212312', '', '', 'male'),
('gustavo', '2q321', '2q31231212312', '', '', 'male');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastrar`
--
ALTER TABLE `cadastrar`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`ID_consulta`);

--
-- Índices para tabela `exame`
--
ALTER TABLE `exame`
  ADD PRIMARY KEY (`ID_exame`);

--
-- Índices para tabela `medico`
--
ALTER TABLE `medico`
  ADD KEY `fk_medico` (`ID_medico`);

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
-- Índices para tabela `profissional`
--
ALTER TABLE `profissional`
  ADD PRIMARY KEY (`ID_profissional`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastrar`
--
ALTER TABLE `cadastrar`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `medico`
--
ALTER TABLE `medico`
  ADD CONSTRAINT `fk_medico` FOREIGN KEY (`ID_medico`) REFERENCES `consultas` (`ID_consulta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;