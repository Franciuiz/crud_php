-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Maio-2017 às 05:55
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `empresa`
--
CREATE DATABASE IF NOT EXISTS `empresa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `empresa`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `socio`
--

CREATE TABLE `socio` (
  `id` int(11) NOT NULL,
  `cpf` bigint(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `socio`
--

INSERT INTO `socio` (`id`, `cpf`, `nome`, `email`) VALUES
(3, 111, 'aaaa', 'asd@a.com'),
(4, 12345612359, 'bbbbb', 'asd@a.com'),
(5, 12345612359, 'bbbbbaaaaa', 'sdsd@sdsd'),
(6, 12345612359, 'asd', 'bbbbb@aaaa'),
(7, 11, 'ccccc', 'sd@sd'),
(8, 11, 'a', 'qwe@qwe'),
(9, 12345676, 'ccccc', 'sd@sd'),
(10, 111111, 'aaaa', 'cccc@cccc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `socio`
--
ALTER TABLE `socio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `socio`
--
ALTER TABLE `socio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
