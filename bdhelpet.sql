-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Out-2023 às 03:11
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdhelpet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ligcampanunci`
--

CREATE TABLE `ligcampanunci` (
  `idLigCampAnunci` int(11) NOT NULL,
  `idCampanha` int(11) DEFAULT NULL,
  `idAnunciante` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbadocao`
--

CREATE TABLE `tbadocao` (
  `idAdocao` int(11) NOT NULL,
  `dataAdocao` date DEFAULT NULL,
  `idAnimal` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `idOng` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbanimal`
--

CREATE TABLE `tbanimal` (
  `idAnimal` int(11) NOT NULL,
  `nomeAnimal` varchar(30) DEFAULT NULL,
  `porteAnimal` varchar(20) DEFAULT NULL,
  `descAnimal` varchar(80) DEFAULT NULL,
  `idadeAnimal` varchar(30) DEFAULT NULL,
  `especieAnimal` varchar(30) DEFAULT NULL,
  `fotoPerfilAnimal` varchar(500) DEFAULT NULL,
  `idOng` int(11) DEFAULT NULL,
  `idRaca` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbanimal`
--

INSERT INTO `tbanimal` (`idAnimal`, `nomeAnimal`, `porteAnimal`, `descAnimal`, `idadeAnimal`, `especieAnimal`, `fotoPerfilAnimal`, `idOng`, `idRaca`) VALUES
(26, 'Tom', 'Pequeno', 'Macho', 'Filhote (Menos de 1 ano)', 'Cachorro', 'arquivo/615bb74ec5136c2a336206bc2234e40e.jpg', NULL, NULL),
(29, 'Lily', '', 'Fêmea', 'Adulto (Entre 1 e 3 anos)', 'Gato', 'arquivo/d9d53589b82d967ab7995d2f19130b24.jpg', NULL, NULL),
(30, 'Fred', 'Grande', 'Macho', 'Idoso (Mais de 5 anos)', 'Gato', 'arquivo/951989989112a118db465c402c5c680f.jpg', NULL, NULL),
(31, 'Lily', 'Médio', 'Macho', 'Filhote (Menos de 1 ano)', 'Cachorro', 'arquivo/a3f7c72d129fc0642cb32ed7c41b685b.jpeg', NULL, NULL),
(33, 'Frederico', '', 'Macho', '', 'Cachorro', 'arquivo/e67b678a371508bae03b77072efe6154.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbanunciante`
--

CREATE TABLE `tbanunciante` (
  `idAnunciante` int(11) NOT NULL,
  `nomeAnunciante` varchar(50) DEFAULT NULL,
  `emailAnunciante` varchar(70) DEFAULT NULL,
  `senhaAnunciante` varchar(260) NOT NULL,
  `logradouroAnunciante` varchar(20) DEFAULT NULL,
  `numLocalAnunciante` smallint(6) DEFAULT NULL,
  `complementoAnunciante` varchar(25) DEFAULT NULL,
  `estadoAnunciante` varchar(20) DEFAULT NULL,
  `bairroAnunciante` varchar(20) DEFAULT NULL,
  `cnpjAnunciante` char(14) DEFAULT NULL,
  `cepAnunciante` char(8) DEFAULT NULL,
  `fotoAnunciante` varchar(500) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbapadrinhamento`
--

CREATE TABLE `tbapadrinhamento` (
  `idApadrinhamento` int(11) NOT NULL,
  `dataApadrinhamento` date DEFAULT NULL,
  `idAnimal` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `idOng` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcampanha`
--

CREATE TABLE `tbcampanha` (
  `idCampanha` int(11) NOT NULL,
  `nomeCampanha` varchar(50) DEFAULT NULL,
  `informacaoCampanha` varchar(80) DEFAULT NULL,
  `horarioCampanha` time DEFAULT NULL,
  `diaCampanha` date DEFAULT NULL,
  `bairroCampanha` varchar(20) DEFAULT NULL,
  `logradouroCampanha` varchar(30) DEFAULT NULL,
  `numLocalCampanha` smallint(6) DEFAULT NULL,
  `complementoCampanha` varchar(25) DEFAULT NULL,
  `estadoCampanha` varchar(20) DEFAULT NULL,
  `cepCampanha` char(8) DEFAULT NULL,
  `idOng` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbcampanha`
--

INSERT INTO `tbcampanha` (`idCampanha`, `nomeCampanha`, `informacaoCampanha`, `horarioCampanha`, `diaCampanha`, `bairroCampanha`, `logradouroCampanha`, `numLocalCampanha`, `complementoCampanha`, `estadoCampanha`, `cepCampanha`, `idOng`) VALUES
(1, 'AnjoPet', 'Ajudar os animais', '10:00:00', '2023-11-06', 'Jardins Recanto das ', 'Avenida Itaberaba', 76, 'Bloco C', 'SP', '05038-16', NULL),
(2, 'ProAnima', 'Vacinação de animais', '13:00:00', '2023-10-31', 'Centro', 'Avenida Itaberaba', 123, 'Bloco C', 'SP', '02739-00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcartaovacina`
--

CREATE TABLE `tbcartaovacina` (
  `idCartaoVacina` int(11) NOT NULL,
  `dataAplicacaoCartaoVacina` date DEFAULT NULL,
  `idAnimal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbchat`
--

CREATE TABLE `tbchat` (
  `idChat` int(11) NOT NULL,
  `mensagemChat` varchar(800) DEFAULT NULL,
  `fotoChat` varchar(600) DEFAULT NULL,
  `idOng` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbdoacao`
--

CREATE TABLE `tbdoacao` (
  `idDoacao` int(11) NOT NULL,
  `valorDoacao` double DEFAULT NULL,
  `dataDoacao` date DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `idOng` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbdoenca`
--

CREATE TABLE `tbdoenca` (
  `idDoenca` int(11) NOT NULL,
  `tipoDoenca` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfotoanimal`
--

CREATE TABLE `tbfotoanimal` (
  `idFotoAnimal` int(11) NOT NULL,
  `fotosAnimal` varchar(800) DEFAULT NULL,
  `idAnimal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbligprontudoen`
--

CREATE TABLE `tbligprontudoen` (
  `idLigProntuDoen` int(11) NOT NULL,
  `idDoenca` int(11) DEFAULT NULL,
  `idProntuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbligvacinacartao`
--

CREATE TABLE `tbligvacinacartao` (
  `idLigVacinaCartao` int(11) NOT NULL,
  `idCartaoVacina` int(11) DEFAULT NULL,
  `idVacina` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbong`
--

CREATE TABLE `tbong` (
  `idOng` int(11) NOT NULL,
  `nomeOng` varchar(50) DEFAULT NULL,
  `capacidadeOng` smallint(6) DEFAULT NULL,
  `emailOng` varchar(30) DEFAULT NULL,
  `senhaOng` varchar(260) DEFAULT NULL,
  `logradouroOng` varchar(30) DEFAULT NULL,
  `numLogOng` smallint(6) DEFAULT NULL,
  `complementoOng` varchar(25) DEFAULT NULL,
  `estadoOng` varchar(20) DEFAULT NULL,
  `bairroOng` varchar(20) DEFAULT NULL,
  `cnpjOng` char(14) DEFAULT NULL,
  `cnasOng` varchar(15) DEFAULT NULL,
  `cebasOng` varchar(15) DEFAULT NULL,
  `cepOng` char(8) DEFAULT NULL,
  `fotoOng` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbong`
--

INSERT INTO `tbong` (`idOng`, `nomeOng`, `capacidadeOng`, `emailOng`, `senhaOng`, `logradouroOng`, `numLogOng`, `complementoOng`, `estadoOng`, `bairroOng`, `cnpjOng`, `cnasOng`, `cebasOng`, `cepOng`, `fotoOng`) VALUES
(1, 'Ampara Animal', 500, 'aa@gmail.com', '$2y$10$Ju/GwQyHAPyHHzz7EfOLIO.bVlD/bc13fB2rA73ZDkLXTrmixRuPC', 'Avenida Itaberaba', 76, '', 'SP', 'Itaberaba', '13244560000133', '231', '5443', '02739-00', 'upload/027d282cd3326ef2982f32bcaf408778.png'),
(2, 'MAPAN', 600, 'mapan@gmail.com', '$2y$10$o6yp31EBUhLZ4QuHTfWK8ugRFyRh19Q85iAVc.zcXVFhhQsambCw.', 'Rua Doutor Falcão Filho', 145, '', 'SP', 'Centro', '32791426000105', '345', '7653', '01007-01', 'upload/5a13281551a13b2e2263113c08d94c54.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbprefeusuario`
--

CREATE TABLE `tbprefeusuario` (
  `idPrefeUsuario` int(11) NOT NULL,
  `tipoPet` varchar(50) DEFAULT NULL,
  `PortePet` varchar(50) DEFAULT NULL,
  `PreferenciaUsuario` varchar(50) DEFAULT NULL,
  `idadePet` smallint(6) DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbprontuario`
--

CREATE TABLE `tbprontuario` (
  `idProntuario` int(11) NOT NULL,
  `tipoTratamento` varchar(40) DEFAULT NULL,
  `dataTratamento` date DEFAULT NULL,
  `idAnimal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbraca`
--

CREATE TABLE `tbraca` (
  `idRaca` int(11) NOT NULL,
  `nomeRaca` varchar(20) DEFAULT NULL,
  `especieRaca` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtelefoneanunciante`
--

CREATE TABLE `tbtelefoneanunciante` (
  `idTelefoneAnunciante` int(11) NOT NULL,
  `numTelefoneAnunciante` varchar(11) DEFAULT NULL,
  `idAnunciante` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtelefoneong`
--

CREATE TABLE `tbtelefoneong` (
  `idTelefoneOng` int(11) NOT NULL,
  `numTelefoneOng` varchar(11) DEFAULT NULL,
  `idOng` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbtelefoneong`
--

INSERT INTO `tbtelefoneong` (`idTelefoneOng`, `numTelefoneOng`, `idOng`) VALUES
(1, '11987654321', 1),
(2, '11933224567', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtelefoneusuario`
--

CREATE TABLE `tbtelefoneusuario` (
  `idTelefoneUsuario` int(11) NOT NULL,
  `numTelefoneUsuario` varchar(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(50) DEFAULT NULL,
  `cpfUsusario` char(11) DEFAULT NULL,
  `emailUsuario` varchar(50) DEFAULT NULL,
  `senhaUsuario` varchar(260) DEFAULT NULL,
  `bairroUsuario` varchar(20) DEFAULT NULL,
  `logradouroUsuario` varchar(40) DEFAULT NULL,
  `numLocalUsuario` smallint(6) DEFAULT NULL,
  `complementoUsuario` varchar(25) DEFAULT NULL,
  `estadoUsuario` varchar(20) DEFAULT NULL,
  `cepUsuario` char(8) DEFAULT NULL,
  `nivelUsuario` varchar(20) DEFAULT 'comum',
  `fotoUsuario` varchar(500) DEFAULT NULL,
  `telefoneFixo` varchar(18) DEFAULT NULL,
  `telefoneCelular` varchar(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbusuario`
--

INSERT INTO `tbusuario` (`idUsuario`, `nomeUsuario`, `cpfUsusario`, `emailUsuario`, `senhaUsuario`, `bairroUsuario`, `logradouroUsuario`, `numLocalUsuario`, `complementoUsuario`, `estadoUsuario`, `cepUsuario`, `nivelUsuario`, `fotoUsuario`, `telefoneFixo`, `telefoneCelular`) VALUES
(1, 'adm', NULL, NULL, '123', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbvacina`
--

CREATE TABLE `tbvacina` (
  `idVacina` int(11) NOT NULL,
  `tipoVacina` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ligcampanunci`
--
ALTER TABLE `ligcampanunci`
  ADD PRIMARY KEY (`idLigCampAnunci`),
  ADD KEY `idCampanha` (`idCampanha`),
  ADD KEY `idAnunciante` (`idAnunciante`);

--
-- Índices para tabela `tbadocao`
--
ALTER TABLE `tbadocao`
  ADD PRIMARY KEY (`idAdocao`),
  ADD KEY `idAnimal` (`idAnimal`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idOng` (`idOng`);

--
-- Índices para tabela `tbanimal`
--
ALTER TABLE `tbanimal`
  ADD PRIMARY KEY (`idAnimal`),
  ADD KEY `idOng` (`idOng`),
  ADD KEY `idRaca` (`idRaca`);

--
-- Índices para tabela `tbanunciante`
--
ALTER TABLE `tbanunciante`
  ADD PRIMARY KEY (`idAnunciante`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `tbapadrinhamento`
--
ALTER TABLE `tbapadrinhamento`
  ADD PRIMARY KEY (`idApadrinhamento`),
  ADD KEY `idAnimal` (`idAnimal`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idOng` (`idOng`);

--
-- Índices para tabela `tbcampanha`
--
ALTER TABLE `tbcampanha`
  ADD PRIMARY KEY (`idCampanha`),
  ADD KEY `idOng` (`idOng`);

--
-- Índices para tabela `tbcartaovacina`
--
ALTER TABLE `tbcartaovacina`
  ADD PRIMARY KEY (`idCartaoVacina`),
  ADD KEY `idAnimal` (`idAnimal`);

--
-- Índices para tabela `tbchat`
--
ALTER TABLE `tbchat`
  ADD PRIMARY KEY (`idChat`),
  ADD KEY `idOng` (`idOng`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `tbdoacao`
--
ALTER TABLE `tbdoacao`
  ADD PRIMARY KEY (`idDoacao`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idOng` (`idOng`);

--
-- Índices para tabela `tbdoenca`
--
ALTER TABLE `tbdoenca`
  ADD PRIMARY KEY (`idDoenca`);

--
-- Índices para tabela `tbfotoanimal`
--
ALTER TABLE `tbfotoanimal`
  ADD PRIMARY KEY (`idFotoAnimal`),
  ADD KEY `idAnimal` (`idAnimal`);

--
-- Índices para tabela `tbligprontudoen`
--
ALTER TABLE `tbligprontudoen`
  ADD PRIMARY KEY (`idLigProntuDoen`),
  ADD KEY `idDoenca` (`idDoenca`),
  ADD KEY `idProntuario` (`idProntuario`);

--
-- Índices para tabela `tbligvacinacartao`
--
ALTER TABLE `tbligvacinacartao`
  ADD PRIMARY KEY (`idLigVacinaCartao`),
  ADD KEY `idCartaoVacina` (`idCartaoVacina`),
  ADD KEY `idVacina` (`idVacina`);

--
-- Índices para tabela `tbong`
--
ALTER TABLE `tbong`
  ADD PRIMARY KEY (`idOng`);

--
-- Índices para tabela `tbprefeusuario`
--
ALTER TABLE `tbprefeusuario`
  ADD PRIMARY KEY (`idPrefeUsuario`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Índices para tabela `tbprontuario`
--
ALTER TABLE `tbprontuario`
  ADD PRIMARY KEY (`idProntuario`),
  ADD KEY `idAnimal` (`idAnimal`);

--
-- Índices para tabela `tbraca`
--
ALTER TABLE `tbraca`
  ADD PRIMARY KEY (`idRaca`);

--
-- Índices para tabela `tbtelefoneanunciante`
--
ALTER TABLE `tbtelefoneanunciante`
  ADD PRIMARY KEY (`idTelefoneAnunciante`),
  ADD KEY `idAnunciante` (`idAnunciante`);

--
-- Índices para tabela `tbtelefoneong`
--
ALTER TABLE `tbtelefoneong`
  ADD PRIMARY KEY (`idTelefoneOng`),
  ADD KEY `idOng` (`idOng`);

--
-- Índices para tabela `tbtelefoneusuario`
--
ALTER TABLE `tbtelefoneusuario`
  ADD PRIMARY KEY (`idTelefoneUsuario`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Índices para tabela `tbvacina`
--
ALTER TABLE `tbvacina`
  ADD PRIMARY KEY (`idVacina`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ligcampanunci`
--
ALTER TABLE `ligcampanunci`
  MODIFY `idLigCampAnunci` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbadocao`
--
ALTER TABLE `tbadocao`
  MODIFY `idAdocao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbanimal`
--
ALTER TABLE `tbanimal`
  MODIFY `idAnimal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `tbanunciante`
--
ALTER TABLE `tbanunciante`
  MODIFY `idAnunciante` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbapadrinhamento`
--
ALTER TABLE `tbapadrinhamento`
  MODIFY `idApadrinhamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbcampanha`
--
ALTER TABLE `tbcampanha`
  MODIFY `idCampanha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tbcartaovacina`
--
ALTER TABLE `tbcartaovacina`
  MODIFY `idCartaoVacina` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbchat`
--
ALTER TABLE `tbchat`
  MODIFY `idChat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbdoacao`
--
ALTER TABLE `tbdoacao`
  MODIFY `idDoacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbdoenca`
--
ALTER TABLE `tbdoenca`
  MODIFY `idDoenca` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbfotoanimal`
--
ALTER TABLE `tbfotoanimal`
  MODIFY `idFotoAnimal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbligprontudoen`
--
ALTER TABLE `tbligprontudoen`
  MODIFY `idLigProntuDoen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbligvacinacartao`
--
ALTER TABLE `tbligvacinacartao`
  MODIFY `idLigVacinaCartao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbong`
--
ALTER TABLE `tbong`
  MODIFY `idOng` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tbprefeusuario`
--
ALTER TABLE `tbprefeusuario`
  MODIFY `idPrefeUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbprontuario`
--
ALTER TABLE `tbprontuario`
  MODIFY `idProntuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbraca`
--
ALTER TABLE `tbraca`
  MODIFY `idRaca` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbtelefoneanunciante`
--
ALTER TABLE `tbtelefoneanunciante`
  MODIFY `idTelefoneAnunciante` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbtelefoneong`
--
ALTER TABLE `tbtelefoneong`
  MODIFY `idTelefoneOng` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tbtelefoneusuario`
--
ALTER TABLE `tbtelefoneusuario`
  MODIFY `idTelefoneUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbvacina`
--
ALTER TABLE `tbvacina`
  MODIFY `idVacina` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `ligcampanunci`
--
ALTER TABLE `ligcampanunci`
  ADD CONSTRAINT `ligcampanunci_ibfk_1` FOREIGN KEY (`idCampanha`) REFERENCES `tbcampanha` (`idCampanha`),
  ADD CONSTRAINT `ligcampanunci_ibfk_2` FOREIGN KEY (`idAnunciante`) REFERENCES `tbanunciante` (`idAnunciante`);

--
-- Limitadores para a tabela `tbadocao`
--
ALTER TABLE `tbadocao`
  ADD CONSTRAINT `tbadocao_ibfk_1` FOREIGN KEY (`idAnimal`) REFERENCES `tbanimal` (`idAnimal`),
  ADD CONSTRAINT `tbadocao_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`),
  ADD CONSTRAINT `tbadocao_ibfk_3` FOREIGN KEY (`idOng`) REFERENCES `tbong` (`idOng`);

--
-- Limitadores para a tabela `tbanimal`
--
ALTER TABLE `tbanimal`
  ADD CONSTRAINT `tbanimal_ibfk_1` FOREIGN KEY (`idOng`) REFERENCES `tbong` (`idOng`),
  ADD CONSTRAINT `tbanimal_ibfk_2` FOREIGN KEY (`idRaca`) REFERENCES `tbraca` (`idRaca`);

--
-- Limitadores para a tabela `tbanunciante`
--
ALTER TABLE `tbanunciante`
  ADD CONSTRAINT `tbanunciante_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`);

--
-- Limitadores para a tabela `tbapadrinhamento`
--
ALTER TABLE `tbapadrinhamento`
  ADD CONSTRAINT `tbapadrinhamento_ibfk_1` FOREIGN KEY (`idAnimal`) REFERENCES `tbanimal` (`idAnimal`),
  ADD CONSTRAINT `tbapadrinhamento_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`),
  ADD CONSTRAINT `tbapadrinhamento_ibfk_3` FOREIGN KEY (`idOng`) REFERENCES `tbong` (`idOng`);

--
-- Limitadores para a tabela `tbcampanha`
--
ALTER TABLE `tbcampanha`
  ADD CONSTRAINT `tbcampanha_ibfk_1` FOREIGN KEY (`idOng`) REFERENCES `tbong` (`idOng`);

--
-- Limitadores para a tabela `tbcartaovacina`
--
ALTER TABLE `tbcartaovacina`
  ADD CONSTRAINT `tbcartaovacina_ibfk_1` FOREIGN KEY (`idAnimal`) REFERENCES `tbanimal` (`idAnimal`);

--
-- Limitadores para a tabela `tbchat`
--
ALTER TABLE `tbchat`
  ADD CONSTRAINT `tbchat_ibfk_1` FOREIGN KEY (`idOng`) REFERENCES `tbong` (`idOng`),
  ADD CONSTRAINT `tbchat_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`);

--
-- Limitadores para a tabela `tbdoacao`
--
ALTER TABLE `tbdoacao`
  ADD CONSTRAINT `tbdoacao_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`),
  ADD CONSTRAINT `tbdoacao_ibfk_2` FOREIGN KEY (`idOng`) REFERENCES `tbong` (`idOng`);

--
-- Limitadores para a tabela `tbfotoanimal`
--
ALTER TABLE `tbfotoanimal`
  ADD CONSTRAINT `tbfotoanimal_ibfk_1` FOREIGN KEY (`idAnimal`) REFERENCES `tbanimal` (`idAnimal`);

--
-- Limitadores para a tabela `tbligprontudoen`
--
ALTER TABLE `tbligprontudoen`
  ADD CONSTRAINT `tbligprontudoen_ibfk_1` FOREIGN KEY (`idDoenca`) REFERENCES `tbdoenca` (`idDoenca`),
  ADD CONSTRAINT `tbligprontudoen_ibfk_2` FOREIGN KEY (`idProntuario`) REFERENCES `tbprontuario` (`idProntuario`);

--
-- Limitadores para a tabela `tbligvacinacartao`
--
ALTER TABLE `tbligvacinacartao`
  ADD CONSTRAINT `tbligvacinacartao_ibfk_1` FOREIGN KEY (`idCartaoVacina`) REFERENCES `tbcartaovacina` (`idCartaoVacina`),
  ADD CONSTRAINT `tbligvacinacartao_ibfk_2` FOREIGN KEY (`idVacina`) REFERENCES `tbvacina` (`idVacina`);

--
-- Limitadores para a tabela `tbprefeusuario`
--
ALTER TABLE `tbprefeusuario`
  ADD CONSTRAINT `tbprefeusuario_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `tbusuario` (`idUsuario`);

--
-- Limitadores para a tabela `tbprontuario`
--
ALTER TABLE `tbprontuario`
  ADD CONSTRAINT `tbprontuario_ibfk_1` FOREIGN KEY (`idAnimal`) REFERENCES `tbanimal` (`idAnimal`);

--
-- Limitadores para a tabela `tbtelefoneanunciante`
--
ALTER TABLE `tbtelefoneanunciante`
  ADD CONSTRAINT `tbtelefoneanunciante_ibfk_1` FOREIGN KEY (`idAnunciante`) REFERENCES `tbanunciante` (`idAnunciante`);

--
-- Limitadores para a tabela `tbtelefoneong`
--
ALTER TABLE `tbtelefoneong`
  ADD CONSTRAINT `tbtelefoneong_ibfk_1` FOREIGN KEY (`idOng`) REFERENCES `tbong` (`idOng`);

--
-- Limitadores para a tabela `tbtelefoneusuario`
--
ALTER TABLE `tbtelefoneusuario`
  ADD CONSTRAINT `tbtelefoneusuario_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
