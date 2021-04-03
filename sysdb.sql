-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 03-Abr-2021 às 10:42
-- Versão do servidor: 5.6.41
-- versão do PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sysdb`
--
CREATE DATABASE IF NOT EXISTS `sysdb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sysdb`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_materia_prima`
--

CREATE TABLE `tb_materia_prima` (
  `id_mp_pk` int(11) NOT NULL,
  `id_tipo_fk` int(11) NOT NULL,
  `descricao_mp` varchar(50) NOT NULL,
  `estoque_mp` int(11) DEFAULT NULL COMMENT 'Quantidade inserida deve ser em ml'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_materia_prima`
--

INSERT INTO `tb_materia_prima` (`id_mp_pk`, `id_tipo_fk`, `descricao_mp`, `estoque_mp`) VALUES
(1, 1, 'Água', 6000),
(2, 2, 'Álcool', 560),
(3, 3, 'Fragrância X', 740),
(4, 3, 'Fragrância Y', 760),
(5, 3, 'Fragrância Z', 800);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pedido`
--

CREATE TABLE `tb_pedido` (
  `id_ped_pk` int(11) NOT NULL,
  `id_perf_fk` int(11) NOT NULL,
  `solicitante_ped` varchar(100) DEFAULT NULL,
  `data_ped` date DEFAULT NULL,
  `qtd_ped` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_pedido`
--

INSERT INTO `tb_pedido` (`id_ped_pk`, `id_perf_fk`, `solicitante_ped`, `data_ped`, `qtd_ped`) VALUES
(1, 2, 'Fulano de Teste', '2021-04-02', 500),
(2, 2, 'Ciclano Silva', '2021-04-02', 300),
(3, 2, 'Beltrano', '2021-04-02', 600),
(4, 1, 'Joãosinho do Teste', '2021-04-02', 800),
(5, 1, 'Mariazinha testadora', '2021-04-02', 500);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_perfume`
--

CREATE TABLE `tb_perfume` (
  `id_perf_pk` int(11) NOT NULL,
  `id_mp_fk` int(11) NOT NULL,
  `nome_perf` varchar(100) DEFAULT NULL,
  `qtd_h2o_perf` int(11) DEFAULT NULL COMMENT 'Quantidade inserida deve ser relativo a porcentagem',
  `qtd_alcool_perf` int(11) DEFAULT NULL COMMENT 'Quantidade inserida deve ser relativo a porcentagem',
  `qtd_frag_perf` int(11) DEFAULT NULL COMMENT 'Quantidade inserida deve ser relativo a porcentagem'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_perfume`
--

INSERT INTO `tb_perfume` (`id_perf_pk`, `id_mp_fk`, `nome_perf`, `qtd_h2o_perf`, `qtd_alcool_perf`, `qtd_frag_perf`) VALUES
(1, 3, 'Perfume A', 70, 10, 20),
(2, 4, 'Perfume B', 75, 15, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tipo_mp`
--

CREATE TABLE `tb_tipo_mp` (
  `id_tipo_pk` int(11) NOT NULL,
  `descricao_tipo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_tipo_mp`
--

INSERT INTO `tb_tipo_mp` (`id_tipo_pk`, `descricao_tipo`) VALUES
(1, 'H20 (Água)'),
(2, 'Álcool'),
(3, 'Fragância');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_materia_prima`
--
ALTER TABLE `tb_materia_prima`
  ADD PRIMARY KEY (`id_mp_pk`),
  ADD KEY `fk_tb_materia_prima_tb_tipo_mp_idx` (`id_tipo_fk`);

--
-- Índices para tabela `tb_pedido`
--
ALTER TABLE `tb_pedido`
  ADD PRIMARY KEY (`id_ped_pk`),
  ADD KEY `fk_tb_pedido_tb_perfume1_idx` (`id_perf_fk`);

--
-- Índices para tabela `tb_perfume`
--
ALTER TABLE `tb_perfume`
  ADD PRIMARY KEY (`id_perf_pk`),
  ADD KEY `fk_tb_perfume_tb_materia_prima1_idx` (`id_mp_fk`);

--
-- Índices para tabela `tb_tipo_mp`
--
ALTER TABLE `tb_tipo_mp`
  ADD PRIMARY KEY (`id_tipo_pk`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_materia_prima`
--
ALTER TABLE `tb_materia_prima`
  MODIFY `id_mp_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_pedido`
--
ALTER TABLE `tb_pedido`
  MODIFY `id_ped_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_perfume`
--
ALTER TABLE `tb_perfume`
  MODIFY `id_perf_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_tipo_mp`
--
ALTER TABLE `tb_tipo_mp`
  MODIFY `id_tipo_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_materia_prima`
--
ALTER TABLE `tb_materia_prima`
  ADD CONSTRAINT `fk_tb_materia_prima_tb_tipo_mp` FOREIGN KEY (`id_tipo_fk`) REFERENCES `tb_tipo_mp` (`id_tipo_pk`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_pedido`
--
ALTER TABLE `tb_pedido`
  ADD CONSTRAINT `fk_tb_pedido_tb_perfume1` FOREIGN KEY (`id_perf_fk`) REFERENCES `tb_perfume` (`id_perf_pk`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_perfume`
--
ALTER TABLE `tb_perfume`
  ADD CONSTRAINT `fk_tb_perfume_tb_materia_prima1` FOREIGN KEY (`id_mp_fk`) REFERENCES `tb_materia_prima` (`id_mp_pk`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
