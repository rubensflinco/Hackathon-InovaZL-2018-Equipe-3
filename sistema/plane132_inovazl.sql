-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 07-Set-2018 às 02:18
-- Versão do servidor: 10.2.17-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plane132_inovazl`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico`
--

CREATE TABLE `historico` (
  `id` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `sintoma` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `JSON_perguntas` text COLLATE utf8_unicode_ci NOT NULL,
  `nivel` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `P_nivel` int(11) NOT NULL,
  `C_nivel` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `posicao` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `historico`
--

INSERT INTO `historico` (`id`, `usuario`, `sintoma`, `JSON_perguntas`, `nivel`, `P_nivel`, `C_nivel`, `data`, `posicao`) VALUES
(31, 1, 'Febre', '{VAZIO}', 'Verde', 15, 'Verde', '2018-08-26', 8),
(30, 1, 'Febre', '{VAZIO}', 'Azul', 9, 'Azul', '2018-08-26', 7),
(29, 1, 'Dor de cabeça', '{VAZIO}', 'Amarelo', 27, 'Amarelo', '2018-08-26', 6),
(28, 1, 'tosse', '{aaa}', 'medio', 10, 'azul', '2018-08-26', 5),
(27, 1, 'gripe 4', '{aaa}', 'medio', 10, 'azul', '2018-08-26', 4),
(26, 1, 'gripe 3', '{aaa}', 'medio', 10, 'azul', '2018-08-26', 3),
(25, 1, 'gripe 2', '{aaa}', 'medio', 10, 'azul', '2018-08-26', 2),
(24, 1, 'gripe', '{aaa}', 'medio', 10, 'azul', '2018-08-26', 1),
(23, 3, 'gripe 2', '{aaa}', 'medio', 10, 'azul', '2018-08-26', 2),
(22, 3, 'gripe', '{aaa}', 'medio', 10, 'azul', '2018-08-26', 1),
(32, 1, 'Febre', '{VAZIO}', 'Azul', 8, 'Azul', '2018-08-26', 9),
(33, 1, 'Febre', '{VAZIO}', 'Azul', 8, 'Azul', '2018-08-26', 10),
(34, 1, 'Febre', '{VAZIO}', 'Azul', 9, 'Azul', '2018-08-26', 11),
(35, 1, 'Febre', '{VAZIO}', 'Verde', 13, 'Verde', '2018-08-26', 12),
(36, 5, 'Febre', '{VAZIO}', 'Verde', 15, 'Verde', '2018-08-26', 1),
(37, 5, 'Febre', '{VAZIO}', 'Verde', 13, 'Verde', '2018-08-26', 2),
(38, 5, 'Dor de cabeça', '{VAZIO}', 'Verde', 17, 'Verde', '2018-08-26', 3),
(39, 5, 'Febre', '{VAZIO}', 'Verde', 15, 'Verde', '2018-08-26', 4),
(40, 6, 'Dor de cabeça', '{VAZIO}', 'Amarelo', 24, 'Amarelo', '2018-08-26', 1),
(41, 6, 'Dor de cabeça', '{VAZIO}', 'Verde', 17, 'Verde', '2018-08-26', 2),
(42, 5, 'Febre', '{VAZIO}', 'Verde', 13, 'Verde', '2018-08-26', 5),
(43, 6, 'Febre', '{VAZIO}', 'Verde', 15, 'Verde', '2018-08-26', 3),
(44, 5, 'Febre', '{VAZIO}', 'Verde', 15, 'Verde', '2018-08-26', 6),
(45, 5, 'Dor de cabeça', '{VAZIO}', 'Laranja', 43, 'Laranja', '2018-08-26', 7),
(46, 6, 'Dor de cabeça', '{VAZIO}', 'Azul', 10, 'Azul', '2018-08-26', 4),
(47, 5, 'Dor de cabeça', '{VAZIO}', 'Laranja', 43, 'Laranja', '2018-08-26', 8),
(48, 5, 'Febre', '{VAZIO}', 'Verde', 13, 'Verde', '2018-08-26', 9),
(49, 5, 'Dor de cabeça', '{VAZIO}', 'Azul', 11, 'Azul', '2018-08-26', 10),
(50, 5, 'Febre', '{VAZIO}', 'Azul', 4, 'Azul', '2018-08-26', 11),
(51, 1, 'Febre', '{VAZIO}', 'Azul', 10, 'Azul', '2018-08-26', 13),
(52, 5, 'Febre', '{VAZIO}', 'Azul', 8, 'Azul', '2018-08-27', 1),
(53, 5, 'Febre', '{VAZIO}', 'Verde', 13, 'Verde', '2018-08-27', 2),
(54, 5, 'Febre', '{VAZIO}', 'Verde', 15, 'Verde', '2018-08-27', 3),
(55, 5, 'Dor de cabeça', '{VAZIO}', 'Laranja', 42, 'Laranja', '2018-08-27', 4),
(56, 5, 'Dor de cabeça', '{VAZIO}', 'Laranja', 38, 'Laranja', '2018-08-27', 5),
(57, 5, 'Dor de cabeça', '{VAZIO}', 'Laranja', 31, 'Laranja', '2018-08-27', 6),
(58, 5, 'Dor de cabeça', '{VAZIO}', 'Amarelo', 29, 'Amarelo', '2018-08-27', 7),
(59, 5, 'Dor de cabeça', '{VAZIO}', 'Laranja', 37, 'Laranja', '2018-08-27', 8),
(60, 5, 'Dor de cabeça', '{VAZIO}', 'Amarelo', 25, 'Amarelo', '2018-08-27', 9),
(61, 7, 'Dor de cabeça', '{VAZIO}', 'Azul', 12, 'Azul', '2018-08-28', 1),
(62, 7, 'Febre', '{VAZIO}', 'Azul', 8, 'Azul', '2018-08-28', 2),
(63, 7, 'Dor de cabeça', '{VAZIO}', 'Azul', 11, 'Azul', '2018-08-28', 3),
(64, 1, 'Febre', '{VAZIO}', 'Verde', 13, 'Verde', '2018-08-29', 1),
(65, 5, 'Febre', '{VAZIO}', 'Azul', 8, 'Azul', '2018-08-30', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'rubens', 'rubens@planetsweb.com.br', '88285eed899d36060219f89f4132895b'),
(2, 'rubens', 'rubens@planetsweb.com.br', '88285eed899d36060219f89f4132895b'),
(3, 'João', 'joao@planetsweb.com.br', '202cb962ac59075b964b07152d234b70'),
(4, 'Matheus', 'matheus@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'joao', 'jvsadesign@gmail.com', '00a4ac859821c9c8bce5e3b24e1b2202'),
(6, 'Chaves', 'chaves@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'Matheus', 'matheus@hotmail.com', 'a3730f9dd8f42c472ee073748f37c48d'),
(8, 'Teste', 'teste@teste.com', '698dc19d489c4e4db73e28a713eab07b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `historico`
--
ALTER TABLE `historico`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `historico`
--
ALTER TABLE `historico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
