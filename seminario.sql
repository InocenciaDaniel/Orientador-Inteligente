-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Out-2019 às 16:10
-- Versão do servidor: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seminario`
--
CREATE DATABASE IF NOT EXISTS `seminario` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `seminario`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `logar`
--

CREATE TABLE `logar` (
  `pk_logar` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `logar`
--

INSERT INTO `logar` (`pk_logar`, `nome`, `senha`) VALUES
(1, 'root', 'root');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `pk_usuario` int(11) NOT NULL,
  `p_nome` varchar(200) NOT NULL,
  `s_nome` varchar(200) NOT NULL,
  `idade` int(11) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `cidade` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `resultado` varchar(200) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`pk_usuario`, `p_nome`, `s_nome`, `idade`, `sexo`, `cidade`, `email`, `resultado`, `data`) VALUES
(1, 'imperador', 'angolano', 26, 'Masculino', 'Benguela', 'imperador@hotmail.com', 'sentinela', '2019-09-13'),
(2, 'fabio', 'baziota', 24, 'Masculino', 'Luanda', 'fabio@gmail.com', 'analista', '2019-09-13'),
(3, 'linda', 'miriana', 18, 'Feminino', 'Bie', 'linda@gmail.com', 'explorador', '2019-09-13'),
(4, 'Maria', 'Karina', 16, 'Feminino', 'Huambo', 'marina@hotmail.com', 'competetivo', '2019-09-13'),
(5, 'marinela', 'filomena', 20, 'Feminino', 'Namibe', 'marinela@hotmail.com', 'analista', '2019-09-13'),
(6, 'josefa', 'ariana', 12, 'Feminino', 'Namibe', 'josefa@hotmail.com', 'analista', '2019-09-13'),
(7, 'irina', 'ariana', 12, 'Feminino', 'Namibe', 'irina@hotmail.com', '', '2019-10-01'),
(8, 'Luis', 'Carlos', 29, 'Masculino', 'Luanda', 'luis@hotmail.com', 'individualista', '2019-10-09'),
(9, 'Inocencia', 'Daniel', 26, 'Feminino', 'Luanda', 'idaniel@ucan.edu', 'sentinela', '2019-10-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logar`
--
ALTER TABLE `logar`
  ADD PRIMARY KEY (`pk_logar`);

--
-- Indexes for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`pk_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logar`
--
ALTER TABLE `logar`
  MODIFY `pk_logar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `pk_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
