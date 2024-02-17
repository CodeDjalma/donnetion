-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 20-Jun-2023 às 19:28
-- Versão do servidor: 5.6.34
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
-- Banco de dados: `donnetion`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `doacao_voucher`
--

CREATE TABLE `doacao_voucher` (
  `id_doacao_voucher` int(11) NOT NULL,
  `id_doacao` int(11) DEFAULT NULL,
  `id_voucher` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `doacao_voucher`
--

INSERT INTO `doacao_voucher` (`id_doacao_voucher`, `id_doacao`, `id_voucher`) VALUES
(9, 57, 1),
(10, 58, 1),
(11, 63, 1),
(12, 64, 1),
(13, 65, 1),
(14, 66, 1),
(15, 67, 1),
(16, 68, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `doacoes`
--

CREATE TABLE `doacoes` (
  `id_doacao` int(11) NOT NULL,
  `data_hora` datetime NOT NULL,
  `preco` float NOT NULL,
  `cupom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `doacoes`
--

INSERT INTO `doacoes` (`id_doacao`, `data_hora`, `preco`, `cupom`, `id_usuario`) VALUES
(52, '2023-06-20 13:43:33', 0, 'sdasdsad-585b', 1),
(53, '2023-06-20 13:53:05', 0, 'sdasdsad-9431', 1),
(54, '2023-06-20 13:54:31', 0, 'sdasdsad-81a2', 1),
(55, '2023-06-20 13:54:58', 0, 'sdasdsad-d82b', 1),
(56, '2023-06-20 14:04:56', 0, 'sdasdsad-23b7', 1),
(57, '2023-06-20 14:06:54', 0, 'sdasdsad-548c', 1),
(58, '2023-06-20 14:07:21', 0, 'sdasdsad-edb2', 1),
(59, '2023-06-20 14:48:17', 0, 'sdasdsad-2888', 1),
(60, '2023-06-20 14:48:43', 0, 'sdasdsad-76d7', 1),
(61, '2023-06-20 15:55:43', 0, 'sdasdsad-170c', 1),
(62, '2023-06-20 15:59:11', 0, 'sdasdsad-03b0', 1),
(63, '2023-06-20 16:05:14', 0, 'sdasdsad-6982', 1),
(64, '2023-06-20 16:05:36', 0, 'sdasdsad-d4b1', 1),
(65, '2023-06-20 16:05:39', 0, 'sdasdsad-f1e7', 1),
(66, '2023-06-20 16:07:55', 0, 'sdasdsad-7c88', 1),
(67, '2023-06-20 16:11:01', 0, 'sdasdsad-06ec', 1),
(68, '2023-06-20 16:14:26', 0, 'sdasdsad-8da0', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

CREATE TABLE `empresas` (
  `id_empresa` int(11) NOT NULL,
  `nome_empresa` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `cnpj_empresa` char(18) COLLATE utf8_unicode_ci NOT NULL,
  `email_empresa` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `senha_empresa` char(40) COLLATE utf8_unicode_ci NOT NULL,
  `area_empresa` varchar(35) COLLATE utf8_unicode_ci NOT NULL COMMENT 'area de atuação ',
  `texto_empresa` text COLLATE utf8_unicode_ci NOT NULL,
  `endereco_empresa` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `telefone_empresa` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(37) COLLATE utf8_unicode_ci NOT NULL,
  `token_empresa` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_empresa` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `empresas`
--

INSERT INTO `empresas` (`id_empresa`, `nome_empresa`, `cnpj_empresa`, `email_empresa`, `senha_empresa`, `area_empresa`, `texto_empresa`, `endereco_empresa`, `telefone_empresa`, `foto`, `token_empresa`, `status_empresa`) VALUES
(75, 'teste gui', '66.725.425/0001-76', 'teste@gmail.com', '2bd9b489ba558edf550f3d571ed900215f79405c', 'aaaa', 'aaaa', 'aaaa', '11-9799-18259', '9b0c8a8f8c00c0301a0740c5a90e742a.jpg', '6489a19cf169e', 1),
(76, 'teste teste 2', '78.371.952/0001-09', 'teste1@gmail.com', '2bd9b489ba558edf550f3d571ed900215f79405c', 'buceta', 'aaaaaaaaaaaa', 'teste', '11-9799-18259', '22bd9196d72141ad40566e560cf2056c.jpg', '6489ad06eb9bc', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `instituicoes`
--

CREATE TABLE `instituicoes` (
  `id_instituicao` int(11) NOT NULL,
  `nome` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `cnpj` char(18) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` int(11) NOT NULL COMMENT 'área de atuação',
  `endereço` int(11) NOT NULL,
  `contato` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` char(14) COLLATE utf8_unicode_ci NOT NULL,
  `datnasc` date NOT NULL,
  `genero` enum('m','f','o') COLLATE utf8_unicode_ci NOT NULL,
  `tel` char(13) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `senha` char(40) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(37) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `token_recupera_senha` char(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `cpf`, `datnasc`, `genero`, `tel`, `email`, `senha`, `foto`, `token`, `token_recupera_senha`, `status`) VALUES
(1, 'Christian Pereira da Silva', '812.004.410-01', '2000-05-14', 'm', '11-9775-89834', 'chris@gmail.com', '2bd9b489ba558edf550f3d571ed900215f79405c', '0c56f572171b3c88349af86f96606d7b.jpg', 'bfaa0f10469d1422da072e82b20bce68714e40ad99bf667072a92d571d3e736c', '09c9fe50b4eb843270154618b7e4462cf9ba33e40e8f44f5773902458eaecf3e', 3),
(2, 'Amanda Pereira', '614.034.640-14', '1970-02-08', 'f', '11-9775-7331', 'amanda@gmail.com', '2bd9b489ba558edf550f3d571ed900215f79405c', '6bb7e7e7b8723e1cf2be1937a2ecd28b.jpg', NULL, '0e94011bec2517aceb5e56b16bf90cb290cd3bc7bb7e9db9838d9322b7f9ff12', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vouchers`
--

CREATE TABLE `vouchers` (
  `id_voucher` int(11) NOT NULL,
  `codigo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `validade` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `quantidade` int(11) NOT NULL,
  `data_criacao` datetime NOT NULL,
  `id_empresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `vouchers`
--

INSERT INTO `vouchers` (`id_voucher`, `codigo`, `validade`, `quantidade`, `data_criacao`, `id_empresa`) VALUES
(1, 'sdasdsad', '16/05/2003', 1000, '0000-00-00 00:00:00', 75),
(2, 'sdasdsad', '16/05/2003', 1000, '0000-00-00 00:00:00', 75),
(3, 'sdasdsad', '16/05/2003', 1000, '0000-00-00 00:00:00', 75),
(4, 'sdasdsadadsasad', '16/05/2024', 1000, '0000-00-00 00:00:00', 75),
(5, 'sdasdsadadsasad', '16/05/2024', 1000, '0000-00-00 00:00:00', 75),
(6, 'lecon', '20/07/2023', 1000, '0000-00-00 00:00:00', 75);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `doacao_voucher`
--
ALTER TABLE `doacao_voucher`
  ADD PRIMARY KEY (`id_doacao_voucher`),
  ADD KEY `id_doacao` (`id_doacao`),
  ADD KEY `id_voucher` (`id_voucher`);

--
-- Índices para tabela `doacoes`
--
ALTER TABLE `doacoes`
  ADD PRIMARY KEY (`id_doacao`);

--
-- Índices para tabela `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id_empresa`),
  ADD UNIQUE KEY `cnpj_empresa` (`cnpj_empresa`);

--
-- Índices para tabela `instituicoes`
--
ALTER TABLE `instituicoes`
  ADD PRIMARY KEY (`id_instituicao`),
  ADD UNIQUE KEY `cnpj` (`cnpj`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Índices para tabela `vouchers`
--
ALTER TABLE `vouchers`
  ADD PRIMARY KEY (`id_voucher`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `doacao_voucher`
--
ALTER TABLE `doacao_voucher`
  MODIFY `id_doacao_voucher` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `doacoes`
--
ALTER TABLE `doacoes`
  MODIFY `id_doacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de tabela `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de tabela `instituicoes`
--
ALTER TABLE `instituicoes`
  MODIFY `id_instituicao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `vouchers`
--
ALTER TABLE `vouchers`
  MODIFY `id_voucher` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `doacao_voucher`
--
ALTER TABLE `doacao_voucher`
  ADD CONSTRAINT `doacao_voucher_ibfk_1` FOREIGN KEY (`id_doacao`) REFERENCES `doacoes` (`id_doacao`),
  ADD CONSTRAINT `doacao_voucher_ibfk_2` FOREIGN KEY (`id_voucher`) REFERENCES `vouchers` (`id_voucher`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
