-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Jun-2024 às 16:28
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `saep_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicos`
--

CREATE TABLE `medicos` (
  `id_med` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `nome_med` varchar(100) NOT NULL,
  `crm` bigint(4) NOT NULL,
  `esp_med` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `medicos`
--

INSERT INTO `medicos` (`id_med`, `tipo`, `nome_med`, `crm`, `esp_med`, `usuario`, `senha`) VALUES
(1, 'medico', 'MEDICO 1', 1010, 'Pediatra', 'med1', '123'),
(2, 'medico', 'MEDICO 2', 2020, 'Cardiologista', 'med2', '321');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacientes`
--

CREATE TABLE `pacientes` (
  `id_pac` int(11) NOT NULL,
  `id_med` int(11) NOT NULL,
  `nome_pac` varchar(100) NOT NULL,
  `cpf` bigint(11) NOT NULL,
  `atendido` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `pacientes`
--

INSERT INTO `pacientes` (`id_pac`, `id_med`, `nome_pac`, `cpf`, `atendido`) VALUES
(1, 1, 'PACIENTE TESTE', 12345678910, 'sim'),
(3, 2, 'CICLANO SOARES', 99988877712, 'nao'),
(6, 1, 'OUTRO PACIENTE', 12931293219, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prescricoes`
--

CREATE TABLE `prescricoes` (
  `id_presc` int(11) NOT NULL,
  `id_med` int(11) NOT NULL,
  `nome_med` varchar(100) NOT NULL,
  `nome_pac` varchar(100) NOT NULL,
  `descricao` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `prescricoes`
--

INSERT INTO `prescricoes` (`id_presc`, `id_med`, `nome_med`, `nome_pac`, `descricao`) VALUES
(1, 0, '', '', 'a'),
(2, 0, '', '', 'A');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`id_med`);

--
-- Índices para tabela `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id_pac`);

--
-- Índices para tabela `prescricoes`
--
ALTER TABLE `prescricoes`
  ADD PRIMARY KEY (`id_presc`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `medicos`
--
ALTER TABLE `medicos`
  MODIFY `id_med` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id_pac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `prescricoes`
--
ALTER TABLE `prescricoes`
  MODIFY `id_presc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
