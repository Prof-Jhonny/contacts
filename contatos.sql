-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 27-Jul-2023 às 19:37
-- Versão do servidor: 8.0.27
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_contatos`
--
CREATE DATABASE IF NOT EXISTS `bd_contatos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `bd_contatos`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_contatos`
--

DROP TABLE IF EXISTS `tb_contatos`;
CREATE TABLE IF NOT EXISTS `tb_contatos` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `idade` int NOT NULL,
  `foto` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_contatos`
--

INSERT INTO `tb_contatos` (`codigo`, `nome`, `sexo`, `telefone`, `email`, `idade`, `foto`) VALUES
(13, 'José Evangelista da Silva', 'm', '(11)65565-4545', 'evangelio@gmail.com', 0, 'imgs/60f9d0e61bf8dcfda9969478891cf9ff.jpg'),
(3, 'JOAO GONCALVES DE LIMA', 'm', '(11)65654-6546', 'aruspice@gmail.com', 0, 'imgs/0dcf572f301802947fd0f8785c18cd65.jpg'),
(5, 'JOAO GONCALVES LIMA', 'f', '(11)99167-4849', 'aruspice@gmail.com', 0, 'imgs/53611c052d3a4e72214a8731dc681675.jpg'),
(6, 'Geriomar Lima', '', '(21)31321-3213', 'aruspice@gmail.com', 0, 'imgs/03f5f52edf6d4ef7a47303fbd997ded1.jpg'),
(8, 'JOAO GONCALVES DE LIMA', 'm', '(11)93211-4704', 'aruspice@gmail.com', 0, 'imgs/64415ec6092903aa79eeb084af8318e7.jpg'),
(9, 'Kerolyne', 'f', '(11)98765-0987', 'kerolyne@gmail.com', 0, 'imgs/e11523dde9f4810370d9ea5f531800c8.jpg'),
(10, 'Tafnes', 'f', '(11)65456-4654', 'aruspice@gmail.com', 0, 'imgs/9e8f58da3cf52974bd892c5bde2a47b4.jpg'),
(11, 'Panda', 'm', '(11)98765-1234', 'pandinha@fofinho.com', 0, 'imgs/a00d156e88d12c35c220b7ed5907b26b.jpg'),
(12, 'Vereador', 'm', '(66)-0987', 'vereador@gmail.com', 0, 'imgs/51228e8dabd7254e3e6b324713866352.jpg'),
(14, 'Geralda Constantina', 'f', '(11)36556-6565', 'geralda@gmail.com', 0, 'imgs/92c9195166078597ed156540042d71b5.jpg'),
(15, 'Gertrudes da Silva', 'f', '(11)65465-4564', 'gege@gmail.com', 0, 'imgs/60828d72057afe9e391a51ff4443d16e.jpg'),
(16, 'Gislaine da Silva', 'f', '(11)66546-5454', 'giza@gmail.com', 0, 'imgs/2797e5079502746d1d4d6e4b73e38609.jpg'),
(17, 'Wellington Macedo', 'm', '(11)65465-6545', 'well@gmail.com', 0, 'imgs/0f1d1d88883ddc0454a0e8e7e6da8251.jpg'),
(18, 'Usuário de teste 123', 'm', '(11)65465-4556', 'teste123@gmail.com', 0, 'imgs/18ed08da4c068b2187c268078417667f.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

DROP TABLE IF EXISTS `tb_usuarios`;
CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`codigo`, `nome`, `email`, `senha`) VALUES
(2, 'João Lima', 'joao@joao.com', '202cb962ac59075b964b07152d234b70'),
(4, 'estevão', 'estevao@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'ben 10', 'ben10@gmail.com', '202cb962ac59075b964b07152d234b70'),
(6, 'Ana Paula', 'ana@gmail.com', '202cb962ac59075b964b07152d234b70'),
(7, '(11)45664-5654', '@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
