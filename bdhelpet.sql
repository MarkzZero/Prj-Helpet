-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Out-2023 às 03:51
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
  `idRaca` int(11) DEFAULT NULL,
  `idVacina` int(11) DEFAULT NULL,
  `idDoenca` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbanimal`
--

INSERT INTO `tbanimal` (`idAnimal`, `nomeAnimal`, `porteAnimal`, `descAnimal`, `idadeAnimal`, `especieAnimal`, `fotoPerfilAnimal`, `idOng`, `idRaca`, `idVacina`, `idDoenca`) VALUES
(2, 'Lilith', '', 'Fêmea', '', 'Gato', 'arquivo/e5fb452e6e029ac736cc1b7205e286bd.jpg', NULL, 1, NULL, NULL),
(3, 'Carlos', '', 'Macho', '', 'Cachorro', 'arquivo/edb8b7bdce47bac2a97f449b1ec091b5.jpg', NULL, 2, NULL, NULL),
(5, 'Bob', 'Médio', 'Macho', '2 anos', 'Cachorro', NULL, 2, 6, NULL, NULL),
(6, 'Maribel', 'Pequeno', 'Fêmea', '6 anos', 'Gato', NULL, 1, 7, NULL, NULL),
(7, 'Flokinho', 'Pequeno', 'Macho', '4', 'Cachorro', NULL, 2, 4, NULL, NULL),
(8, 'Mel', 'Grande', 'Fêmea ', '3 anos ', 'Cachorro', NULL, 1, 10, NULL, NULL),
(9, 'Thor', 'Pequeno', 'Macho', '2 anos ', 'Gato', NULL, 2, 3, NULL, NULL),
(10, 'Cookie ', 'Médio', 'Macho', '10 meses', 'Gato', NULL, 2, 9, NULL, NULL),
(11, 'Café ', 'Grande', 'Macho', '1 ano', 'Cachorro', NULL, 2, 2, NULL, NULL),
(12, 'Costela', 'Pequeno ', 'Macho', '3 anos ', 'Cachorro', NULL, 1, 8, NULL, NULL),
(13, 'Jujuba ', 'Pequeno ', 'Fêmea ', '1 ano ', 'Gato', NULL, 2, 1, NULL, NULL),
(46, 'Bilbo', 'Pequeno', 'Macho', 'Filhote (Menos de 1 ano)', 'Cachorro', 'fotoPerfil/eb6bf6c3501f7dbd65e73882d7e4ea19.jpg', 3, 2, 2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbanunciante`
--

CREATE TABLE `tbanunciante` (
  `idAnunciante` int(11) NOT NULL,
  `nomeAnunciante` varchar(50) DEFAULT NULL,
  `emailAnunciante` varchar(70) DEFAULT NULL,
  `logradouroAnunciante` varchar(20) DEFAULT NULL,
  `cidadeAnunciante` varchar(40) DEFAULT NULL,
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
  `valorApadrinhamento` double DEFAULT NULL,
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
  `cidadeCampanha` varchar(40) DEFAULT NULL,
  `numLocalCampanha` smallint(6) DEFAULT NULL,
  `complementoCampanha` varchar(25) DEFAULT NULL,
  `estadoCampanha` varchar(20) DEFAULT NULL,
  `cepCampanha` char(8) DEFAULT NULL,
  `fotoPerfilCampanha` varchar(600) DEFAULT NULL,
  `idOng` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbcampanha`
--

INSERT INTO `tbcampanha` (`idCampanha`, `nomeCampanha`, `informacaoCampanha`, `horarioCampanha`, `diaCampanha`, `bairroCampanha`, `logradouroCampanha`, `cidadeCampanha`, `numLocalCampanha`, `complementoCampanha`, `estadoCampanha`, `cepCampanha`, `fotoPerfilCampanha`, `idOng`) VALUES
(7, 'Teste', 'Teste', '02:06:00', '2023-10-27', 'Vila do Americano', 'Rua Bernadete', 'Ferraz de Vasconcelos', 12, '', 'SP', '08533-25', 'fotoCampanha/52dc92131feb0834c335b62e27f89116.jpg', NULL),
(8, 'Bilbo', 'tretertret', '18:00:00', '2023-11-11', 'Vila do Americano', 'Rua Bernadete', 'Ferraz de Vasconcelos', 12, '', 'SP', '08533-25', 'fotoCampanha/8a938807eda82784dd4f76b454197fc0.jpg', NULL);

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

--
-- Extraindo dados da tabela `tbdoenca`
--

INSERT INTO `tbdoenca` (`idDoenca`, `tipoDoenca`) VALUES
(1, 'Lacerações de córnea e esclera'),
(2, 'Raiva'),
(3, 'Cancer'),
(4, 'Laringite'),
(5, 'Laringopatia'),
(6, 'Leptospirose'),
(7, 'Leucemia Linfoide.'),
(8, 'Nenhum');

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
-- Estrutura da tabela `tbfotocampanha`
--

CREATE TABLE `tbfotocampanha` (
  `idFotoCampanha` int(11) NOT NULL,
  `fotosCampanha` varchar(800) DEFAULT NULL,
  `idCampanha` int(11) DEFAULT NULL
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
  `idUnicoOng` int(100) DEFAULT NULL,
  `nomeOng` varchar(50) DEFAULT NULL,
  `capacidadeOng` smallint(6) DEFAULT NULL,
  `emailOng` varchar(30) DEFAULT NULL,
  `senhaOng` varchar(260) DEFAULT NULL,
  `logradouroOng` varchar(30) DEFAULT NULL,
  `cidadeOng` varchar(40) DEFAULT NULL,
  `numLogOng` smallint(6) DEFAULT NULL,
  `complementoOng` varchar(25) DEFAULT NULL,
  `estadoOng` varchar(20) DEFAULT NULL,
  `bairroOng` varchar(20) DEFAULT NULL,
  `cnpjOng` char(14) DEFAULT NULL,
  `cnasOng` varchar(15) DEFAULT NULL,
  `cebasOng` varchar(15) DEFAULT NULL,
  `cepOng` char(8) DEFAULT NULL,
  `fotoOng` varchar(500) DEFAULT NULL,
  `statusChatOng` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbong`
--

INSERT INTO `tbong` (`idOng`, `idUnicoOng`, `nomeOng`, `capacidadeOng`, `emailOng`, `senhaOng`, `logradouroOng`, `cidadeOng`, `numLogOng`, `complementoOng`, `estadoOng`, `bairroOng`, `cnpjOng`, `cnasOng`, `cebasOng`, `cepOng`, `fotoOng`, `statusChatOng`) VALUES
(1, NULL, 'animais', 500, 'gabriel.fliv@gmail.com', '$2y$10$A7vtMoqCvPXJkQwluExI4OiLxQ6zxLAvc7654xaz2R7/XEI.dzfj.', 'Rua Gaspar Sardinha', NULL, 11, 'B', 'SP', 'Jardim Fanganiello', '64608155000198', '12512', '5235', '08450-48', '470b435b1a58070321e7ea6717e7ed01.jpg', ''),
(2, NULL, 'Intituto Pet Maria ', 200, 'petMariaInstituto@gmail.com', 'pet@ma00', 'Rua Castelo de Leça', 'São Paulo', 12, NULL, 'São Paulo', 'Jardim Soares ', '12345678987655', NULL, NULL, '08460-16', NULL, NULL),
(3, NULL, 'Teste', 12, 'lineu@gmail.com', '$2y$10$HvbVUPEmi2q6Osg45jzYwOYET7Ehq5bvGaCZXKl.dA2XSt242G7Ly', 'Rua Bernadete', NULL, 12, '', 'SP', 'Vila do Americano', '99116415000192', '456645', '3454555', '08533-25', 'upload/e532b50e0135c0bf7cc374338946b7f5.jpg', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbprefeusuario`
--

CREATE TABLE `tbprefeusuario` (
  `idPrefeUsuario` int(11) NOT NULL,
  `tipoPet` varchar(50) DEFAULT NULL,
  `generoPet` varchar(50) DEFAULT NULL,
  `portePet` varchar(50) DEFAULT NULL,
  `preferenciaUsuario` varchar(100) DEFAULT NULL,
  `idadePet` smallint(6) DEFAULT NULL,
  `idRaca` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL
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

--
-- Extraindo dados da tabela `tbraca`
--

INSERT INTO `tbraca` (`idRaca`, `nomeRaca`, `especieRaca`) VALUES
(1, ' Persa', 'Gato'),
(2, 'Pinscher', 'Cachorro'),
(3, 'Siamês', 'Gato'),
(4, 'Pastor Alemão', 'Cachorro'),
(5, 'Ragdoll', 'Gato'),
(6, 'Pug', 'Cachorro'),
(7, 'American Shorthair', 'Gato'),
(8, 'Chow Chow', 'Cachorro'),
(9, 'Sem Raça Definida', 'Gato'),
(10, 'Yorkshire', 'Cachorro'),
(11, 'vira-lata', 'Cachorro'),
(12, 'Buldogue francês', 'Cachorro'),
(13, 'Golden Retriever', 'Cachorro');

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
(1, '11986036737', 1),
(2, '11964352175', 3);

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
  `cidadeUsuario` varchar(40) DEFAULT NULL,
  `numLocalUsuario` smallint(6) DEFAULT NULL,
  `complementoUsuario` varchar(25) DEFAULT NULL,
  `estadoUsuario` varchar(20) DEFAULT NULL,
  `cepUsuario` char(8) DEFAULT NULL,
  `nivelUsuario` varchar(20) DEFAULT 'comum',
  `fotoUsuario` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbusuario`
--

INSERT INTO `tbusuario` (`idUsuario`, `nomeUsuario`, `cpfUsusario`, `emailUsuario`, `senhaUsuario`, `bairroUsuario`, `logradouroUsuario`, `cidadeUsuario`, `numLocalUsuario`, `complementoUsuario`, `estadoUsuario`, `cepUsuario`, `nivelUsuario`, `fotoUsuario`) VALUES
(1, 'Gabriel', '65458836235', 'gabriel@gmail.com', '123', 'Jd. fanganiello', 'Guaianases', 'Sao Paulo', 11, 'b', 'Sao Paulo', '08450-48', 'adm', NULL),
(2, 'gustavo', NULL, 'teste@teste.com', '1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'comum', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbvacina`
--

CREATE TABLE `tbvacina` (
  `idVacina` int(11) NOT NULL,
  `tipoVacina` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbvacina`
--

INSERT INTO `tbvacina` (`idVacina`, `tipoVacina`) VALUES
(1, 'V8'),
(2, 'V10'),
(3, 'Gripe canina'),
(4, 'Giárdia'),
(5, 'Antirrábica'),
(6, 'Leishmaniose'),
(7, 'Nenhum');

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
  ADD KEY `idRaca` (`idRaca`),
  ADD KEY `idVacina` (`idVacina`),
  ADD KEY `idDoenca` (`idDoenca`);

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
-- Índices para tabela `tbfotocampanha`
--
ALTER TABLE `tbfotocampanha`
  ADD PRIMARY KEY (`idFotoCampanha`),
  ADD KEY `idCampanha` (`idCampanha`);

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
  ADD KEY `idRaca` (`idRaca`),
  ADD KEY `idUsuario` (`idUsuario`);

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
  MODIFY `idAnimal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

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
  MODIFY `idCampanha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `idDoenca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tbfotoanimal`
--
ALTER TABLE `tbfotoanimal`
  MODIFY `idFotoAnimal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbfotocampanha`
--
ALTER TABLE `tbfotocampanha`
  MODIFY `idFotoCampanha` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `idOng` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `idRaca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tbvacina`
--
ALTER TABLE `tbvacina`
  MODIFY `idVacina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  ADD CONSTRAINT `idDoenca` FOREIGN KEY (`idDoenca`) REFERENCES `tbdoenca` (`idDoenca`),
  ADD CONSTRAINT `idVacina` FOREIGN KEY (`idVacina`) REFERENCES `tbvacina` (`idVacina`),
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
-- Limitadores para a tabela `tbfotocampanha`
--
ALTER TABLE `tbfotocampanha`
  ADD CONSTRAINT `tbfotocampanha_ibfk_1` FOREIGN KEY (`idCampanha`) REFERENCES `tbcampanha` (`idCampanha`);

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
  ADD CONSTRAINT `tbprefeusuario_ibfk_1` FOREIGN KEY (`idRaca`) REFERENCES `tbraca` (`idRaca`),
  ADD CONSTRAINT `tbprefeusuario_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`);

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
