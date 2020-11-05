-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Nov-2018 às 11:30
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fundamentes`
--
CREATE DATABASE IF NOT EXISTS `fundamentes` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `fundamentes`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `codadm` int(11) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nomeadm` varchar(50) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`codadm`, `telefone`, `senha`, `email`, `nomeadm`, `login`) VALUES
(1, '95998969', 'magovaldivia', 'andre@email.com', 'André Torres Guimarães Chagas', 'Torresmo32'),
(2, '945697895', '123456', 'ana@email.com', 'Ana Carolina', 'ana321');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `senha` varchar(100) DEFAULT NULL,
  `codaluno` int(11) NOT NULL,
  `nomealuno` varchar(100) DEFAULT NULL,
  `datanasc` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`senha`, `codaluno`, `nomealuno`, `datanasc`, `email`, `telefone`, `login`) VALUES
('ronaldofenomeno', 1, 'George Bovino', '2008-08-16', 'geroge@email.com', '48214569', 'georginho'),
('12345', 2, 'Romero Jucá', '2007-06-09', 'casadoromerojuca@email.com', '48955689', 'romerojuca');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno_atividade`
--

CREATE TABLE `aluno_atividade` (
  `codaluno` int(11) DEFAULT NULL,
  `codatividade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividades`
--

CREATE TABLE `atividades` (
  `codatividade` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `codadm` int(11) DEFAULT NULL,
  `codmateria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `materias`
--

CREATE TABLE `materias` (
  `nome` varchar(100) DEFAULT NULL,
  `codmateria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `materias`
--

INSERT INTO `materias` (`nome`, `codmateria`) VALUES
('Português', 1),
('Matemática', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor_atividade`
--

CREATE TABLE `professor_atividade` (
  `codpro` int(11) DEFAULT NULL,
  `codatividade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professsor`
--

CREATE TABLE `professsor` (
  `codpro` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nomepro` varchar(50) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professsor`
--

INSERT INTO `professsor` (`codpro`, `email`, `nomepro`, `senha`, `login`, `data_nasc`, `telefone`) VALUES
(1, 'vsantos@email.com', 'Valdir Santos', '123456', 'valsantos', '1988-06-11', '956895632'),
(2, 'toro@email.com', 'Gabriel Toro', '123456', 'totoro', '1990-09-06', '948679869');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`codadm`);

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`codaluno`);

--
-- Indexes for table `aluno_atividade`
--
ALTER TABLE `aluno_atividade`
  ADD KEY `codaluno` (`codaluno`),
  ADD KEY `codatividade` (`codatividade`);

--
-- Indexes for table `atividades`
--
ALTER TABLE `atividades`
  ADD PRIMARY KEY (`codatividade`),
  ADD KEY `codadm` (`codadm`),
  ADD KEY `codmateria` (`codmateria`);

--
-- Indexes for table `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`codmateria`);

--
-- Indexes for table `professor_atividade`
--
ALTER TABLE `professor_atividade`
  ADD KEY `codpro` (`codpro`),
  ADD KEY `codatividade` (`codatividade`);

--
-- Indexes for table `professsor`
--
ALTER TABLE `professsor`
  ADD PRIMARY KEY (`codpro`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `codadm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `codaluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `atividades`
--
ALTER TABLE `atividades`
  MODIFY `codatividade` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materias`
--
ALTER TABLE `materias`
  MODIFY `codmateria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `professsor`
--
ALTER TABLE `professsor`
  MODIFY `codpro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `aluno_atividade`
--
ALTER TABLE `aluno_atividade`
  ADD CONSTRAINT `aluno_atividade_ibfk_1` FOREIGN KEY (`codaluno`) REFERENCES `aluno` (`codaluno`),
  ADD CONSTRAINT `aluno_atividade_ibfk_2` FOREIGN KEY (`codatividade`) REFERENCES `atividades` (`codatividade`);

--
-- Limitadores para a tabela `atividades`
--
ALTER TABLE `atividades`
  ADD CONSTRAINT `atividades_ibfk_1` FOREIGN KEY (`codadm`) REFERENCES `administrador` (`codadm`),
  ADD CONSTRAINT `atividades_ibfk_2` FOREIGN KEY (`codmateria`) REFERENCES `materias` (`codmateria`);

--
-- Limitadores para a tabela `professor_atividade`
--
ALTER TABLE `professor_atividade`
  ADD CONSTRAINT `professor_atividade_ibfk_1` FOREIGN KEY (`codpro`) REFERENCES `professsor` (`codpro`),
  ADD CONSTRAINT `professor_atividade_ibfk_2` FOREIGN KEY (`codatividade`) REFERENCES `atividades` (`codatividade`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
