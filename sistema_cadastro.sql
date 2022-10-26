-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Out-2022 às 01:07
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema_cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `credenciais`
--

CREATE TABLE `credenciais` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `credenciais`
--

INSERT INTO `credenciais` (`id_usuario`, `usuario`, `senha`) VALUES
(1, 'fatec', 'araras'),
(2, 'bruno', '123bruno');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogadores`
--

CREATE TABLE `jogadores` (
  `id_jogador` int(11) NOT NULL,
  `nome` varchar(20) DEFAULT NULL,
  `equipe` varchar(50) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `credenciais`
--
ALTER TABLE `credenciais`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices para tabela `jogadores`
--
ALTER TABLE `jogadores`
  ADD PRIMARY KEY (`id_jogador`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `credenciais`
--
ALTER TABLE `credenciais`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `jogadores`
--
ALTER TABLE `jogadores`
  MODIFY `id_jogador` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
