-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Dez-2023 às 06:43
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
  `idOng` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `idAnimal` int(11) DEFAULT NULL,
  `dataSolicitacao` timestamp NULL DEFAULT NULL,
  `STATUS` enum('pendente','aprovada','rejeitada') DEFAULT 'pendente'
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
  `generoAnimal` varchar(30) DEFAULT NULL,
  `idadeAnimal` varchar(30) DEFAULT NULL,
  `especieAnimal` varchar(30) DEFAULT NULL,
  `fotoPerfilAnimal` varchar(500) DEFAULT NULL,
  `idOng` int(11) DEFAULT NULL,
  `idRaca` int(11) DEFAULT NULL,
  `idVacina` int(11) DEFAULT NULL,
  `idDoenca` int(11) DEFAULT NULL,
  `STATUS` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbanimal`
--

INSERT INTO `tbanimal` (`idAnimal`, `nomeAnimal`, `porteAnimal`, `descAnimal`, `generoAnimal`, `idadeAnimal`, `especieAnimal`, `fotoPerfilAnimal`, `idOng`, `idRaca`, `idVacina`, `idDoenca`, `STATUS`) VALUES
(1, 'poggers', 'Médio', 'Teste', 'Macho', 'Idoso (Mais de 5 anos)', 'Cachorro', 'fotoPerfil/2a91259d3bdb063f5764bd020c68bf52.jpg', 7, 12, 7, 8, 'Disponível'),
(2, 'Teste', 'Pequeno', 'Teste', 'Fêmea', 'Adulto (Entre 1 e 3 anos)', 'Gato', 'fotoPerfil/fe3cc2be827e8d483b07345e1b5beba4.jpg', 7, 11, 7, 8, 'Disponível'),
(3, 'Gato', 'Médio', 'Teste', 'Fêmea', 'Adulto (Entre 3 e 5 anos)', 'Gato', 'fotoPerfil/1047cebc7c70206b88297b5cf70b54f3.jpg', 7, 5, 7, 8, 'Disponível'),
(5, 'aaaaaaaaaa', 'Médio', 'Teste', 'Fêmea', 'Idoso (Mais de 5 anos)', 'Cachorro', 'fotoPerfil/2157874a98c8798316fce67c813efb41.jpg', 8, 11, 7, 7, 'Indisponível'),
(7, 'Bilba', 'Médio', 'Teste', 'Fêmea', 'Adulto (Entre 3 e 5 anos)', 'Cachorro', 'fotoPerfil/66fc87497a23afeab735fffc9e9e5c87.jpg', 7, 13, 7, 8, 'Indisponível');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbanunciante`
--

CREATE TABLE `tbanunciante` (
  `idAnunciante` int(11) NOT NULL,
  `nomeAnunciante` varchar(50) DEFAULT NULL,
  `emailAnunciante` varchar(70) DEFAULT NULL,
  `senhaAnunciante` varchar(260) DEFAULT NULL,
  `logradouroAnunciante` varchar(20) DEFAULT NULL,
  `cidadeAnunciante` varchar(40) DEFAULT NULL,
  `numLocalAnunciante` smallint(6) DEFAULT NULL,
  `complementoAnunciante` varchar(25) DEFAULT NULL,
  `estadoAnunciante` varchar(20) DEFAULT NULL,
  `bairroAnunciante` varchar(20) DEFAULT NULL,
  `cnpjAnunciante` char(14) DEFAULT NULL,
  `cepAnunciante` varchar(10) DEFAULT NULL,
  `fotoAnunciante` varchar(500) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbanuncio`
--

CREATE TABLE `tbanuncio` (
  `idAnuncio` int(11) NOT NULL,
  `nomeAnuncio` varchar(50) DEFAULT NULL,
  `descAnuncio` varchar(200) DEFAULT NULL,
  `dataInicioAnuncio` date DEFAULT NULL,
  `dataTerminoAnuncio` date DEFAULT NULL,
  `fotoAnuncio` varchar(600) DEFAULT NULL,
  `idAnunciante` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbanunciofavorito`
--

CREATE TABLE `tbanunciofavorito` (
  `idAnuncioFavorito` int(11) NOT NULL,
  `idAnuncio` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbanunciofavorito`
--

INSERT INTO `tbanunciofavorito` (`idAnuncioFavorito`, `idAnuncio`, `idUsuario`) VALUES
(1, 5, 11);

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
  `categoriaCampanha` varchar(30) DEFAULT NULL,
  `bairroCampanha` varchar(20) DEFAULT NULL,
  `logradouroCampanha` varchar(30) DEFAULT NULL,
  `cidadeCampanha` varchar(40) DEFAULT NULL,
  `numLocalCampanha` smallint(6) DEFAULT NULL,
  `complementoCampanha` varchar(25) DEFAULT NULL,
  `estadoCampanha` varchar(20) DEFAULT NULL,
  `cepCampanha` varchar(10) DEFAULT NULL,
  `fotoPerfilCampanha` varchar(600) DEFAULT NULL,
  `idOng` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Estrutura da tabela `tbfavorito`
--

CREATE TABLE `tbfavorito` (
  `idFavorito` int(11) NOT NULL,
  `idAnimal` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbfavorito`
--

INSERT INTO `tbfavorito` (`idFavorito`, `idAnimal`, `idUsuario`) VALUES
(1, 3, 11),
(2, 2, 11),
(3, NULL, 11),
(4, NULL, 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfavoritocampanha`
--

CREATE TABLE `tbfavoritocampanha` (
  `idCampanhaFavorita` int(11) NOT NULL,
  `idCampanha` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbfavoritocampanha`
--

INSERT INTO `tbfavoritocampanha` (`idCampanhaFavorita`, `idCampanha`, `idUsuario`) VALUES
(1, 1, 11);

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

--
-- Extraindo dados da tabela `tbfotocampanha`
--

INSERT INTO `tbfotocampanha` (`idFotoCampanha`, `fotosCampanha`, `idCampanha`) VALUES
(7, 'arquivoCampanha/855480704753683762735030b0b706b1.Array', 5),
(8, 'arquivoCampanha/0b0252e9fd8f7bf0f008c7ac118683b3.Array', 5),
(9, 'arquivoCampanha/0e75a7330606e1540294db62bf5e49b4.Array', 5),
(10, 'arquivoCampanha/a69cb29baaeabbf173f3b8f1c7248b7f.Array', 5),
(11, 'arquivoCampanha/5eb46ca4a5dd094874ba416f015f49c3.Array', 5),
(12, 'arquivoCampanha/6956f5da9d343f793b4e1e301cc8a286.Array', 5),
(13, 'arquivoCampanha/8cc363967a20aae75c122450bf75b71d.Array', 7),
(14, 'arquivoCampanha/ab744ff07887b4c30f40d0d44882a7e9.Array', 7),
(15, 'arquivoCampanha/e0846ebc946677245054aeb10c57cdda.Array', 7),
(16, 'arquivoCampanha/152530065b0a90efd8ada75cb86a71f5.Array', 7),
(17, 'arquivoCampanha/4f4ff751a28e86f253def97724d93f1e.Array', 7),
(18, 'arquivoCampanha/3b1b622ea71d6e61d5bd54c4d9f16d18.Array', 7),
(19, 'arquivoCampanha/67d3bf45e2fe75a0b4152a739548f3d9.Array', 8),
(20, 'arquivoCampanha/cce9579f2afc95d90c995c23327a4140.Array', 8),
(21, 'arquivoCampanha/324558eb419aa7b81879ee211b0a4fa3.Array', 8),
(22, 'arquivoCampanha/c94aff639719f543dea7219f304f0dc4.Array', 8),
(23, 'arquivoCampanha/ab8b07dd5b57a01d370591372402e709.Array', 8),
(24, 'arquivoCampanha/52246aa7fa38e364b7c17203e8e41adc.Array', 8),
(25, 'arquivoCampanha/ba339729aee71179ca827b67f8cec18e.Array', 10),
(26, 'arquivoCampanha/00e8aa173d108459bc72dacc447abfa8.Array', 10),
(27, 'arquivoCampanha/2a4ecb89350eb555e916f5b3289e122a.Array', 10),
(28, 'arquivoCampanha/451c858ad692be648c7ae4af506eefa8.Array', 10),
(29, 'arquivoCampanha/90a6aaef1b1fbca3decc4150cfb3feca.Array', 10),
(30, 'arquivoCampanha/68dd9c34bf05c46f3c2352b19f9f8e40.Array', 10),
(31, 'arquivoCampanha/11402fc521c24217ca0d096dc23db9bc.Array', 11),
(32, 'arquivoCampanha/43c46000bc3820bbc0f4703dc79b5991.Array', 11),
(33, 'arquivoCampanha/98b9546da33f01473d64bb5a0e3047f9.Array', 11),
(34, 'arquivoCampanha/2103bee87d20477d6c99129e8ba9c360.Array', 11),
(35, 'arquivoCampanha/46a13f6911594cefc02db145e689316f.Array', 11),
(36, 'arquivoCampanha/e5b1e78a8d3564caa115ba8a01c5c554.Array', 11),
(37, 'arquivoCampanha/95c955f0b50ac2c77a4daecf135a81ae.Array', 12),
(38, 'arquivoCampanha/e0b3b77e010233cd7107a2b3e63bd035.Array', 12),
(39, 'arquivoCampanha/786e38bf6302e6f2d08e638e3b2c5bd7.Array', 12),
(40, 'arquivoCampanha/0d4ce085984ba5bec53ae445a57b349d.Array', 12),
(41, 'arquivoCampanha/9ac588b84a0559af2672720123970731.Array', 12),
(42, 'arquivoCampanha/8c48d31e8f5b904ab07420ffd52f92e1.Array', 12),
(43, 'arquivoCampanha/789070af2b5572438c2711573c560a1f.Array', 13),
(44, 'arquivoCampanha/78e6cd060d8fd2f2937185a7cdf95462.Array', 13),
(45, 'arquivoCampanha/d9d645e1e06fe52816eada14abb1f2c6.Array', 13),
(46, 'arquivoCampanha/5bb0e5fe95472263bdd56a74d3d8be4c.Array', 13),
(47, 'arquivoCampanha/e4e4aca676cf8af6b36f9e3dabb0b2ac.Array', 13),
(48, 'arquivoCampanha/266777cfd8a023383a36460887edd824.Array', 13),
(49, 'arquivoCampanha/aaf24015d91f3bc482a54b42bf649d63.Array', 1),
(50, 'arquivoCampanha/a0fb7b019046c952453722543f73139b.Array', 1),
(51, 'arquivoCampanha/d2653168a7a15481f16b4fbec74be6ce.Array', 1),
(52, 'arquivoCampanha/69cef9532c41452fcd4761e665bfb6e6.Array', 1),
(53, 'arquivoCampanha/8f40533eb07a192bba8b9287002eff57.Array', 1),
(54, 'arquivoCampanha/7f955b949a3cae40ef04a0fbf7432a93.Array', 1),
(55, 'arquivoCampanha/7ec3f22a8cd042eac7972b7648c2cc32.Array', 2),
(56, 'arquivoCampanha/3cd99899727740c07309a9c1308f702e.Array', 2),
(57, 'arquivoCampanha/8cc6f62611fcc30432b377f69e8ccba9.Array', 2),
(58, 'arquivoCampanha/748f5c65f1478041eba8be98340631ce.Array', 2),
(59, 'arquivoCampanha/29aee1348c9b548650fc17b7b7cb01f7.Array', 2),
(60, 'arquivoCampanha/8803791f6c23b5e5356ce5675f04e0d2.Array', 2),
(61, 'arquivoCampanha/0cdfa511f5140e14b229b80df4c73f3a.Array', 3),
(62, 'arquivoCampanha/2831edf1457a56d438395c51325f549f.Array', 3),
(63, 'arquivoCampanha/7fd3f39afa49e95ceaa4ea6ae217ea24.Array', 3),
(64, 'arquivoCampanha/66c6941cec5ee0bc75fc84831d8ba7dc.Array', 3),
(65, 'arquivoCampanha/76738915c3ebd20dc26d7aea77152cb6.Array', 3),
(66, 'arquivoCampanha/6a9800589dd8d6cb5e6a5ef4a655888b.Array', 3),
(67, 'arquivoCampanha/4fb4b85c432043e2f8d657df3380a516.Array', 4),
(68, 'arquivoCampanha/421a0577ef0655e7d0fc5afba14bc94f.Array', 4),
(69, 'arquivoCampanha/ad27108e1504433523360b5cd54e45f5.Array', 4),
(70, 'arquivoCampanha/e5c4719b54d74914af0fcb055bf3997a.Array', 4),
(71, 'arquivoCampanha/ae702c5a4175933569f9440016c8d9f2.Array', 4),
(72, 'arquivoCampanha/9b43c13e7a5af5dddfcd988e1145fc18.Array', 4),
(73, 'arquivoCampanha/f0b7115df3da20af51eac70878849e67.Array', 1),
(74, 'arquivoCampanha/2e35aefe175156868ec0774dfce1f931.Array', 1),
(75, 'arquivoCampanha/aa5900434d09d216e13e4b708b674021.Array', 1),
(76, 'arquivoCampanha/85eb2812bb681e25ee6239360f5183cb.Array', 1),
(77, 'arquivoCampanha/cd0a335ddc900b0cf3ca33bf5c16b74e.Array', 1),
(78, 'arquivoCampanha/89edfa7759a059677909348e13b89cc0.Array', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbinteracao`
--

CREATE TABLE `tbinteracao` (
  `idInteracao` int(11) NOT NULL,
  `dataInteracao` date DEFAULT NULL,
  `horaInteracao` time DEFAULT NULL,
  `comentarioInteracao` tinyint(1) DEFAULT NULL,
  `curtidaInteracao` tinyint(1) DEFAULT NULL,
  `compartilhaInteracao` tinyint(1) DEFAULT NULL,
  `descriComentarioInteracao` varchar(200) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `idPost` int(11) DEFAULT NULL
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
-- Estrutura da tabela `tbmensagem`
--

CREATE TABLE `tbmensagem` (
  `textoMensagem` varchar(512) DEFAULT NULL,
  `horaMensagem` time DEFAULT NULL,
  `origemMensagem` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `idOng` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbmensagem`
--

INSERT INTO `tbmensagem` (`textoMensagem`, `horaMensagem`, `origemMensagem`, `idUsuario`, `idOng`) VALUES
('aa', NULL, 1, 8, 5),
('SALVE GURI', '01:51:24', 1, 8, 5),
('SALVE', '01:51:29', 0, 8, 5),
('AA', '01:51:30', 0, 8, 5),
('A', '01:51:30', 0, 8, 5),
('A', '01:51:30', 0, 8, 5),
('A', '01:51:30', 0, 8, 5),
('A', '01:51:30', 0, 8, 5),
('AA', '01:51:31', 0, 8, 5),
('A', '01:51:31', 0, 8, 5),
('A', '01:51:31', 0, 8, 5),
('A', '01:51:31', 0, 8, 5),
('AA', '01:51:31', 0, 8, 5),
('A', '01:51:31', 0, 8, 5);

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
  `cidadeOng` varchar(40) DEFAULT NULL,
  `numLogOng` smallint(6) DEFAULT NULL,
  `complementoOng` varchar(25) DEFAULT NULL,
  `estadoOng` varchar(20) DEFAULT NULL,
  `bairroOng` varchar(20) DEFAULT NULL,
  `cnpjOng` char(14) DEFAULT NULL,
  `cnasOng` varchar(15) DEFAULT NULL,
  `cebasOng` varchar(15) DEFAULT NULL,
  `cepOng` varchar(10) DEFAULT NULL,
  `fotoOng` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbong`
--

INSERT INTO `tbong` (`idOng`, `nomeOng`, `capacidadeOng`, `emailOng`, `senhaOng`, `logradouroOng`, `cidadeOng`, `numLogOng`, `complementoOng`, `estadoOng`, `bairroOng`, `cnpjOng`, `cnasOng`, `cebasOng`, `cepOng`, `fotoOng`) VALUES
(1, 'animais', 500, 'gabriel.fliv@gmail.com', '$2y$10$A7vtMoqCvPXJkQwluExI4OiLxQ6zxLAvc7654xaz2R7/XEI.dzfj.', 'Rua Gaspar Sardinha', NULL, 11, 'B', 'SP', 'Jardim Fanganiello', '64608155000198', '12512', '5235', '08450-48', '470b435b1a58070321e7ea6717e7ed01.jpg'),
(2, 'Intituto Pet Maria ', 200, 'petMariaInstituto@gmail.com', 'pet@ma00', 'Rua Castelo de Leça', 'São Paulo', 12, NULL, 'São Paulo', 'Jardim Soares ', '12345678987655', NULL, NULL, '08460-16', NULL),
(3, 'gabriels', 1, 'gab@gmail.com', '$2y$10$HZlDSWiPfy0WiMFb7SnaReWaWjzMyCHi0jaLLJthDOz3r1OthLWja', 'Rua Gaspar Sardinha', NULL, 11, 'B', 'SP', 'Jardim Fanganiello', '96491920000129', '235232', '325235', '08450-48', 'upload/a000dcb31f7a1d6e70bfb8215907d2b5.jpg'),
(4, 'Eduardo', 123, 'eduardofranklin@gmail.com', '$2y$10$0mWUaDuvGcBPzEpnCSegX.gJ3GpHscN/dy58FWRrcar0IiTr2p6vy', 'Rua Estevão Bersani', NULL, 23, '2', 'SP', 'Jardim Miriam', '29392203000152', '111', '111', '08142-490', 'upload/4a2cd03481d3c2926e276b66d32af994.jpeg'),
(5, 'Deivid Menezes da Silva', 500, 'menezes0067@gmail.com', '$2y$10$g3GX/6MB0rsDK6IJyZVf8uLeATjhurV/JfLZjPZ61yqmPHReYyDgm', 'Rua Estevão Bersani', '', 2, '2', 'SP', 'Jardim Miriam', '10062356000103', '11', '11', '08142490', 'upload/36c0bbdffbb6f7bd0792cfa246ea4e44.jpeg'),
(6, 'Teste', 200, 'teste@teste.com', '$2y$10$PNbikL1WHLo1nscC3jmneeolC2a/Wo1SGWUDHeggWPTs6rjZAhM..', 'Rua Bernadete', 'Ferraz de Vasconcelos', 12, '', 'SP', 'Vila do Americano', '75004065000104', '213123', '324234', '08533250', 'upload/95679a62fa4bf855b6cd4c6a8a294e99.jpeg'),
(7, 'noggers', 200, 'lineu@gmail.com', '$2y$10$qLsb61LSecv8ZNtjLkFM6eCLHreoQnc9hiMalE5Bd6iHZDHG/VawS', 'Rua Bernadete', 'Ferraz de Vasconcelos', 12, '', 'SP', 'Vila do Americano', '33666244000167', '234234', '23423423', '08533250', 'upload/227409251c7e102d9e68a46089113c1a.jpg'),
(8, 'froggers', 200, 'pog@gmail.com', '$2y$10$3INgdoHifnWO2C78xfr90..KT0CR8/cD4bRqvGn06n3XWejJx04je', 'Rua Bernadete', 'Ferraz de Vasconcelos', 23, '', 'SP', 'Vila do Americano', '77723867000108', '43534', '345345', '08533-250', 'upload/7a1e13ca91feb4b92ab2b51ae15af60e.jpg');

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
  `idadePet` varchar(50) DEFAULT NULL,
  `idRaca` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbprefeusuario`
--

INSERT INTO `tbprefeusuario` (`idPrefeUsuario`, `tipoPet`, `generoPet`, `portePet`, `preferenciaUsuario`, `idadePet`, `idRaca`, `idUsuario`) VALUES
(1, 'Gato', 'Femea', 'Pequeno', 'Adotar', '0', 3, 6),
(2, 'Sem Preferência', 'Femea', 'Sem Preferência', 'Adotar', '0', 3, 7),
(3, 'Sem Preferência', 'Femea', 'Sem Preferência', 'Adotar', '0', 10, 8),
(4, 'Cachorro', '', 'Sem Preferência', 'Apadrinhar', '0', 13, 9),
(6, 'Sem Preferência', 'Femea', 'Médio', 'Apadrinhar', 'Idoso', 11, 11);

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
(12, 'Bulldogue francês', 'Cachorro'),
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtelefoneusuario`
--

CREATE TABLE `tbtelefoneusuario` (
  `idTelefoneUsuario` int(11) NOT NULL,
  `numTelefoneUsuario` varchar(16) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(50) DEFAULT NULL,
  `emailUsuario` varchar(50) DEFAULT NULL,
  `senhaUsuario` varchar(260) DEFAULT NULL,
  `cpfUsuario` varchar(14) DEFAULT NULL,
  `bairroUsuario` varchar(20) DEFAULT NULL,
  `logradouroUsuario` varchar(40) DEFAULT NULL,
  `cidadeUsuario` varchar(40) DEFAULT NULL,
  `numLocalUsuario` smallint(6) DEFAULT NULL,
  `complementoUsuario` varchar(25) DEFAULT NULL,
  `estadoUsuario` varchar(20) DEFAULT NULL,
  `cepUsuario` varchar(10) DEFAULT NULL,
  `nivelUsuario` varchar(20) DEFAULT 'comum',
  `fotoUsuario` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbusuario`
--

INSERT INTO `tbusuario` (`idUsuario`, `nomeUsuario`, `emailUsuario`, `senhaUsuario`, `cpfUsuario`, `bairroUsuario`, `logradouroUsuario`, `cidadeUsuario`, `numLocalUsuario`, `complementoUsuario`, `estadoUsuario`, `cepUsuario`, `nivelUsuario`, `fotoUsuario`) VALUES
(2, 'adm', NULL, '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'comum', NULL),
(6, 'EDUARDOUUU', 'dudufranknado@gmail.com', '$2y$10$szPJ47aZF/LE8MWZxC2SUOwbdab45qNxspUQauWkBOfvEEeb1DuZG', NULL, 'Jardim Miriam', 'Rua Estevão Bersani', 'São Paulos', 0, 'aa', 'SP', '59060-157', 'comum', NULL),
(7, 'Eduardo Franco', 'edufranco@gmail.com', '$2y$10$DzRwG8c2o9Srtq6TYIuC0.7i9mkY4dIl0lMSbRk5eujfGy5Y8e6g6', NULL, 'Jardim Miriam', 'Rua Estevão Bersani', 'São Paulo', 17, '2', 'SP', '08142-490', 'comum', NULL),
(8, 'DVDOLAS', 'menezes0067@gmail.com', '$2y$10$4xZrPZ1CE3ZoMiK7sVOz/eMyDXEmJWZ3CrDx1Iwn/ft3Itryopho2', NULL, 'Jardim Miriam', 'Rua Estevão Bersani', 'São Paulo', 2, '23', 'São Paulo', '68909-531', 'comum', NULL),
(9, 'Gabriel', 'gab@gmail.com', '$2y$10$9/rvVU7pDxdrKY9mGMEhauCkVLf8/4o776KPT4YGtwsCGctPNsLOG', NULL, 'Centro', 'Rua Cavalcante', 'Ananindeua', 2, '23', 'PA', '67030-045', 'comum', NULL),
(11, 'Alguem me mata', 'lineu@gmail.com', '$2y$10$Q3m/DmDBDsE5iX1eswqP1OoyW0O1JJZAHKmhJ7E99JGYcj42LPSJW', '554.341.058-18', 'Vila do Americano', 'Rua Bernadete', 'Ferraz de Vasconcelos', 12, '', 'SP', '08533-250', 'comum', '../cadastro/fotoUsuario/b352ddf34f61a5e4a676dcc953a560f6.jpeg');

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
  ADD KEY `idOng` (`idOng`),
  ADD KEY `fk_idUsuario` (`idUsuario`),
  ADD KEY `fk_idAnimal` (`idAnimal`);

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
-- Índices para tabela `tbanuncio`
--
ALTER TABLE `tbanuncio`
  ADD PRIMARY KEY (`idAnuncio`),
  ADD KEY `idAnunciante` (`idAnunciante`);

--
-- Índices para tabela `tbanunciofavorito`
--
ALTER TABLE `tbanunciofavorito`
  ADD PRIMARY KEY (`idAnuncioFavorito`);

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
-- Índices para tabela `tbfavorito`
--
ALTER TABLE `tbfavorito`
  ADD PRIMARY KEY (`idFavorito`),
  ADD KEY `idAnimal` (`idAnimal`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `tbfavoritocampanha`
--
ALTER TABLE `tbfavoritocampanha`
  ADD PRIMARY KEY (`idCampanhaFavorita`),
  ADD KEY `idCampanha` (`idCampanha`),
  ADD KEY `idUsuario_fk` (`idUsuario`);

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
-- Índices para tabela `tbinteracao`
--
ALTER TABLE `tbinteracao`
  ADD PRIMARY KEY (`idInteracao`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idPost` (`idPost`);

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
-- Índices para tabela `tbmensagem`
--
ALTER TABLE `tbmensagem`
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idOng` (`idOng`);

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
  MODIFY `idAnimal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tbanunciante`
--
ALTER TABLE `tbanunciante`
  MODIFY `idAnunciante` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbanuncio`
--
ALTER TABLE `tbanuncio`
  MODIFY `idAnuncio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbanunciofavorito`
--
ALTER TABLE `tbanunciofavorito`
  MODIFY `idAnuncioFavorito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbapadrinhamento`
--
ALTER TABLE `tbapadrinhamento`
  MODIFY `idApadrinhamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbcampanha`
--
ALTER TABLE `tbcampanha`
  MODIFY `idCampanha` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT de tabela `tbfavorito`
--
ALTER TABLE `tbfavorito`
  MODIFY `idFavorito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tbfavoritocampanha`
--
ALTER TABLE `tbfavoritocampanha`
  MODIFY `idCampanhaFavorita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbfotoanimal`
--
ALTER TABLE `tbfotoanimal`
  MODIFY `idFotoAnimal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbfotocampanha`
--
ALTER TABLE `tbfotocampanha`
  MODIFY `idFotoCampanha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de tabela `tbinteracao`
--
ALTER TABLE `tbinteracao`
  MODIFY `idInteracao` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `idOng` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tbprefeusuario`
--
ALTER TABLE `tbprefeusuario`
  MODIFY `idPrefeUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `idTelefoneOng` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbtelefoneusuario`
--
ALTER TABLE `tbtelefoneusuario`
  MODIFY `idTelefoneUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  ADD CONSTRAINT `fk_idAnimal` FOREIGN KEY (`idAnimal`) REFERENCES `tbanimal` (`idAnimal`),
  ADD CONSTRAINT `fk_idUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`),
  ADD CONSTRAINT `idOng` FOREIGN KEY (`idOng`) REFERENCES `tbong` (`idOng`);

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
-- Limitadores para a tabela `tbanuncio`
--
ALTER TABLE `tbanuncio`
  ADD CONSTRAINT `idAnunciante` FOREIGN KEY (`idAnunciante`) REFERENCES `tbanunciante` (`idAnunciante`);

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
-- Limitadores para a tabela `tbfavorito`
--
ALTER TABLE `tbfavorito`
  ADD CONSTRAINT `idAnimal` FOREIGN KEY (`idAnimal`) REFERENCES `tbanimal` (`idAnimal`),
  ADD CONSTRAINT `idUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`);

--
-- Limitadores para a tabela `tbfavoritocampanha`
--
ALTER TABLE `tbfavoritocampanha`
  ADD CONSTRAINT `idCampanha` FOREIGN KEY (`idCampanha`) REFERENCES `tbcampanha` (`idCampanha`),
  ADD CONSTRAINT `idUsuario_fk` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`);

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
-- Limitadores para a tabela `tbinteracao`
--
ALTER TABLE `tbinteracao`
  ADD CONSTRAINT `tbinteracao_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`),
  ADD CONSTRAINT `tbinteracao_ibfk_2` FOREIGN KEY (`idPost`) REFERENCES `tbpost` (`idPost`);

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
-- Limitadores para a tabela `tbmensagem`
--
ALTER TABLE `tbmensagem`
  ADD CONSTRAINT `tbmensagem_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`),
  ADD CONSTRAINT `tbmensagem_ibfk_2` FOREIGN KEY (`idOng`) REFERENCES `tbong` (`idOng`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
