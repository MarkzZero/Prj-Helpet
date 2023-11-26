-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Nov-2023 às 21:33
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
  `generoAnimal` varchar(30) DEFAULT NULL,
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

INSERT INTO `tbanimal` (`idAnimal`, `nomeAnimal`, `porteAnimal`, `descAnimal`, `generoAnimal`, `idadeAnimal`, `especieAnimal`, `fotoPerfilAnimal`, `idOng`, `idRaca`, `idVacina`, `idDoenca`) VALUES
(2, 'Lilith', '', 'Fêmea', NULL, '', 'Gato', 'arquivo/e5fb452e6e029ac736cc1b7205e286bd.jpg', 2, 1, NULL, NULL),
(3, 'Carlos', '', 'Macho', NULL, '', 'Cachorro', 'arquivo/edb8b7bdce47bac2a97f449b1ec091b5.jpg', 1, 2, NULL, NULL),
(5, 'Bob', 'Médio', 'Macho', NULL, '2 anos', 'Cachorro', NULL, 2, 6, NULL, NULL),
(6, 'Maribel', 'Pequeno', 'Fêmea', NULL, '6 anos', 'Gato', NULL, 1, 7, NULL, NULL),
(7, 'Flokinho', 'Pequeno', 'Macho', NULL, '4', 'Cachorro', NULL, 2, 4, NULL, NULL),
(8, 'Mel', 'Grande', 'Fêmea ', NULL, '3 anos ', 'Cachorro', NULL, 1, 10, NULL, NULL),
(9, 'Thor', 'Pequeno', 'Macho', NULL, '2 anos ', 'Gato', NULL, 2, 3, NULL, NULL),
(10, 'Cookie ', 'Médio', 'Macho', NULL, '10 meses', 'Gato', NULL, 2, 9, NULL, NULL),
(11, 'Café ', 'Grande', 'Macho', NULL, '1 ano', 'Cachorro', NULL, 2, 2, NULL, NULL),
(12, 'Costela', 'Pequeno ', 'Macho', NULL, '3 anos ', 'Cachorro', NULL, 1, 8, NULL, NULL),
(13, 'Jujuba ', 'Pequeno ', 'Fêmea ', NULL, '1 ano ', 'Gato', NULL, 2, 1, NULL, NULL),
(18, 'Teste', 'Médio', 'tste', 'Macho', 'Adulto (Entre 1 e 3 anos)', 'Cachorro', 'fotoPerfil/a76e6d92eda933eeee9ee0091634be05.jpg', 11, 5, 2, 3),
(20, 'Teste', 'Médio', 'Tetse', 'Macho', 'Adulto (Entre 3 e 5 anos)', 'Cachorro', 'fotoPerfil/81f5278d4646b45fc5540ad7655a84b1.jpg', 13, 4, 3, 4),
(21, 'Testeq2', 'Pequeno', 'Fêmea', 'Fêmea', 'Adulto (Entre 1 e 3 anos)', 'Cachorro', 'fotoPerfil/e723324a63ee67100b4dbfefddc6c4af.jpg', 17, 0, 0, 8),
(22, 'Teste2', 'Pequeno', 'Macho', 'Macho', 'Adulto (Entre 1 e 3 anos)', 'Gato', 'fotoPerfil/f00c7e32dd7750b3a83cf8a0d34d92b6.jpg', 17, 0, 0, 1),
(23, 'Tom', 'Médio', 'Oii', 'Macho', 'Filhote (Menos de 1 ano)', 'Cachorro', 'fotoPerfil/787f21c11c8c614635274314d96d3a5c.jpg', 0, 13, 3, 8),
(24, 'Lily', 'Pequeno', 'Gato siamês de porte pequeno', 'Fêmea', 'Filhote (Menos de 1 ano)', 'Gato', 'fotoPerfil/bfbe93d6d407663a588547b7d09da904.jpg', 0, 3, 1, 3),
(25, 'Lily', 'Pequeno', 'Gato siamês de porte pequeno', 'Fêmea', 'Filhote (Menos de 1 ano)', 'Gato', 'fotoPerfil/c5d6bbea80ec9043f566abb366148994.jpg', 0, 3, 1, 3),
(26, 'Lili', 'Pequeno', 'Oii', 'Fêmea', 'Filhote (Menos de 1 ano)', 'Gato', 'fotoPerfil/7da41d507ba75a3bb4180cc040fcd77d.jpg', 0, 3, 5, 7),
(27, 'Tom', 'Médio', 'Oii', 'Macho', 'Adulto (Entre 3 e 5 anos)', 'Cachorro', 'fotoPerfil/59ed1c6021c62106954fde6681830edc.jpg', 0, 13, 3, 2),
(28, 'Tom', 'Médio', 'Oii', 'Macho', 'Adulto (Entre 3 e 5 anos)', 'Cachorro', 'fotoPerfil/9b4dba6e2bc1c40ae1144c82796d62c8.jpg', 0, 13, 3, 2);

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
  `cepAnunciante` varchar(12) DEFAULT NULL,
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
  `descAnuncio` varchar(300) DEFAULT NULL,
  `dataInicioAnuncio` date DEFAULT NULL,
  `dataTerminoAnuncio` date DEFAULT NULL,
  `fotoAnuncio` varchar(600) DEFAULT NULL,
  `idAnunciante` int(11) DEFAULT NULL
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

--
-- Extraindo dados da tabela `tbcampanha`
--

INSERT INTO `tbcampanha` (`idCampanha`, `nomeCampanha`, `informacaoCampanha`, `horarioCampanha`, `diaCampanha`, `categoriaCampanha`, `bairroCampanha`, `logradouroCampanha`, `cidadeCampanha`, `numLocalCampanha`, `complementoCampanha`, `estadoCampanha`, `cepCampanha`, `fotoPerfilCampanha`, `idOng`) VALUES
(5, 'poggers', 'Teste', '05:14:00', '2023-11-16', NULL, 'Vila do Americano', 'Rua Bernadete', 'Ferraz de Vasconcelos', 12, '', 'SP', '08533-250', 'fotoCampanha/40f4fd8db1049feeb44581436e687cf6.jpg', 17),
(6, 'Teste', 'Teste', '04:14:00', '2023-11-18', NULL, 'Vila do Americano', 'Rua Bernadete', 'Ferraz de Vasconcelos', 12, '', 'SP', '08533-250', 'fotoCampanha/30e40f5e0e1412c87fcd119ad6dbaeee.jpg', 17),
(7, 'ProAnima', 'Ajudar os animais', '14:00:00', '2023-11-04', NULL, 'Itaberaba', 'Avenida Itaberaba', 'São Paulo', 145, '', 'SP', '02739-000', 'fotoCampanha/c31ec08afe9c1a4e571e90fa8fc35548.jpg', 0),
(8, 'ProAnima', 'Ajudar os animais', '14:00:00', '2023-11-04', NULL, 'Itaberaba', 'Avenida Itaberaba', 'São Paulo', 145, '', 'SP', '02739-000', 'fotoCampanha/177c60c0ca5c2c60458499c907d40045.jpg', 0),
(9, 'ProAnima', 'Vacinar os animais', '14:10:00', '2023-11-01', NULL, 'Itaberaba', 'Avenida Itaberaba', 'São Paulo', 145, '', 'SP', '02739-000', 'fotoCampanha/c21cbe84c25e2a627efa4457b656a46b.jpg', 0),
(10, 'Ampara Animal', 'Ajudar', '15:00:00', '2023-11-01', NULL, 'Água Branca', 'Rua Mateo Forte', 'São Paulo', 76, '', 'SP', '05038-160', 'fotoCampanha/78f1a03152b8755065ccc7358b5b4afa.jpg', 0),
(11, 'Ampara Animal', 'Ajudar', '15:00:00', '2023-11-01', NULL, 'Água Branca', 'Rua Mateo Forte', 'São Paulo', 76, '', 'SP', '05038-160', 'fotoCampanha/864a479b24dba67960f33d228f6e0b46.jpg', 0),
(12, 'ONG de Animais', 'Ajudar os pets', '15:00:00', '2023-11-02', NULL, 'Itaberaba', 'Avenida Itaberaba', 'São Paulo', 145, '', 'SP', '02739-000', 'fotoCampanha/e2d6eb92c12afa616cc5af5b722a22d1.jpg', 0),
(13, 'ONG de Animais', 'Ajudar os pets', '15:00:00', '2023-11-02', NULL, 'Itaberaba', 'Avenida Itaberaba', 'São Paulo', 145, '', 'SP', '02739-000', 'fotoCampanha/a91553f100d5d7364de3fb2ce6e1a21a.jpg', 0),
(14, 'Ampara Animal', 'Ajudar pets', '14:30:00', '2023-11-01', NULL, 'Itaberaba', 'Avenida Itaberaba', 'São Paulo', 76, '', 'SP', '02739-000', 'fotoCampanha/1eb8d696bb1ed76442fe1d7ad301dc28.jpg', 0),
(15, 'Ampara Animal', 'Ajudar pets', '14:30:00', '2023-11-01', NULL, 'Itaberaba', 'Avenida Itaberaba', 'São Paulo', 76, '', 'SP', '02739-000', 'fotoCampanha/d923c1dfe3b4f2bae67045479679162e.jpg', 0);

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

--
-- Extraindo dados da tabela `tbfotoanimal`
--

INSERT INTO `tbfotoanimal` (`idFotoAnimal`, `fotosAnimal`, `idAnimal`) VALUES
(1, 'Arquivos/fbecee714c319be6980a5088936aa189.jpg', 23),
(2, 'Arquivos/d4407ec8cf1177a3d82a3e1edd6b8e7f.jpg', 23),
(3, 'Arquivos/ae7ddb1bf289d999882a5dd706a5ea56.jpeg', 23),
(4, 'Arquivos/427650be3b95cda98018a46ea1e99cb3.jpg', 23),
(5, 'Arquivos/5056f2d5088e8b1a9ae5fdcfdd372610.jpg', 24),
(6, 'Arquivos/31ce5f906780211501ea18fbfd90fd47.jpg', 24),
(7, 'Arquivos/b85e696d52a1d46ba6118ff1dcb42320.jpg', 25),
(8, 'Arquivos/5be3bdf38652306d9b54b2d95c53b3d5.jpg', 25),
(9, 'Arquivos/741a3d68ad82c0e9554f1aa3096756cf.jpeg', 26),
(10, 'Arquivos/084e613a0234b81944a03d6eedb4f091.jpg', 26),
(11, 'Arquivos/c3deded08f6c20cb2dee2f81f20003c2.jpg', 27),
(12, 'Arquivos/d8aa6d2363d6a89bddd53dde5c676af0.jpg', 27),
(13, 'Arquivos/626a598df7969dc1b10b8a59ac290a49.jpeg', 27),
(14, 'Arquivos/e9b139379eb964f40ceeaab09bfd65de.jpg', 28),
(15, 'Arquivos/7ba67ed8c081aa153f15ea6ac909d3e7.jpg', 28),
(16, 'Arquivos/376e9249cf69e64c474e582aaa5021b5.jpeg', 28);

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
(1, 'arquivoCampanha/bfde2c4776d4d557685e30b2c43982c2.Array', 1),
(2, 'arquivoCampanha/355fc55bbba2337b2e1f51ebf075dea2.Array', 1),
(3, 'arquivoCampanha/7e186ce1ac53d177aad6e380a85c8da1.Array', 1),
(4, 'arquivoCampanha/f3dd00d4215456f6d6dbe23b6ffde718.Array', 1),
(5, 'arquivoCampanha/ee4ab13e1f63b15e4e0539bd793ff35d.Array', 1),
(6, 'arquivoCampanha/f2b443e19043627e0aa7f5fc68fb4779.Array', 1),
(7, 'arquivoCampanha/03f42f03d9ad74472cebb724981515f5.Array', 2),
(8, 'arquivoCampanha/2758b65f0a2c17c6baca60887ecddf52.Array', 2),
(9, 'arquivoCampanha/1362c1097563dac66a826dbcb882fe4d.Array', 2),
(10, 'arquivoCampanha/eb5079e2b2b91067eb4cf7c0991e5e69.Array', 2),
(11, 'arquivoCampanha/75f26c3a36000be0fea447e4e40da252.Array', 2),
(12, 'arquivoCampanha/b0f3a15215bd324113aa77c319643f23.Array', 2),
(19, 'arquivoCampanha/11a14284db8cf06d8c4936806aeae9b2.Array', 4),
(20, 'arquivoCampanha/4c39e2677a50aa4514915513c59cfeb0.Array', 4),
(21, 'arquivoCampanha/f86aa7bae411293c8f7b3443de8535b9.Array', 4),
(22, 'arquivoCampanha/302d6ba6255eac28d54199c9237d3bb0.Array', 4),
(23, 'arquivoCampanha/8a1a8587b0358c6d22a6b286b999a493.Array', 4),
(24, 'arquivoCampanha/8ab9afc2bbd17454c25a206657b7e6e1.Array', 4),
(25, 'arquivoCampanha/727828033d4afd8725cdb37e263b6ec1.Array', 5),
(26, 'arquivoCampanha/e971300da05f309b519f1499a4c818df.Array', 5),
(27, 'arquivoCampanha/017a3555346a4e90095bf9be91eb71c1.Array', 5),
(28, 'arquivoCampanha/1723c0891794a34e6b7009e25943304c.Array', 5),
(29, 'arquivoCampanha/4c3d709dc32c22103157a1233a7d470e.Array', 5),
(30, 'arquivoCampanha/ddf2a83d34c97505cfd76b3e590bff31.Array', 5),
(31, 'arquivoCampanha/ba2515732ea672f83f12ca41deee23f6.Array', 6),
(32, 'arquivoCampanha/38b85dea0db73a5ac7a8645f5db44340.Array', 6),
(33, 'arquivoCampanha/7d63ba26a33ed30d93689d12301d2fc4.Array', 6),
(34, 'arquivoCampanha/10812e5943b9d8b4ba4e307c44683f66.Array', 6),
(35, 'arquivoCampanha/ffac53bd7df634228214e7ed771fab9e.Array', 6),
(36, 'arquivoCampanha/471450f45a1c324471ced9eef85fa738.Array', 6),
(37, 'arquivoCampanha/fb3ba1dc93906468e1e350899163d4a2.Array', 7),
(38, 'arquivoCampanha/1ef03602252e8b3f6edfd432fb39088e.Array', 7),
(39, 'arquivoCampanha/d9b7fedccabd6bd80efc293d55839aa6.Array', 7),
(40, 'arquivoCampanha/d57c519a16fdb0cae8371f09b3ee370b.Array', 7),
(41, 'arquivoCampanha/5177c7b3388e013ec933a6e58b2f7539.Array', 7),
(42, 'arquivoCampanha/1996f14260cdf3ff297f7b98e64c3ee5.Array', 7),
(43, 'arquivoCampanha/e951ae32c1fd202e28bb089b2ae0352a.Array', 8),
(44, 'arquivoCampanha/51bcd6d11752afc10eda048c27ca6475.Array', 8),
(45, 'arquivoCampanha/7c0ce8cf73e79eff0fd5cc50875f1811.Array', 8),
(46, 'arquivoCampanha/dfbd2f8029a4e8d720dbd1c38e89415b.Array', 8),
(47, 'arquivoCampanha/6614ac10b40839f884a35a7935b38a51.Array', 8),
(48, 'arquivoCampanha/f34d3b9a0f75998fe58a9085d11e1a4e.Array', 8),
(49, 'arquivoCampanha/390d549018319afead25a8f0be89ed60.Array', 9),
(50, 'arquivoCampanha/414875325d4a8a699a3d03c153c0b100.Array', 9),
(51, 'arquivoCampanha/52e37dc609911d8223201676124847d8.Array', 9),
(52, 'arquivoCampanha/b3c5406ec04ca759cc1815982058f392.Array', 9),
(53, 'arquivoCampanha/b0923c76f7c6ff3275ec8afd84a0b4e6.Array', 9),
(54, 'arquivoCampanha/fed4c3c8261e23ae0ab5c25f4c4845ba.Array', 9),
(55, 'arquivoCampanha/44994556dc4be7d71d620107dc0190ad.Array', 10),
(56, 'arquivoCampanha/41ceb8058e60c06d0fc4a81b62a8ae6b.Array', 10),
(57, 'arquivoCampanha/f536305d2c62c184a77483b72bbb5c7a.Array', 10),
(58, 'arquivoCampanha/133c5e4cffb04d777c4f51abd63f8e89.Array', 10),
(59, 'arquivoCampanha/9592b5ed947960055f2961308c75f8bd.Array', 10),
(60, 'arquivoCampanha/e3388a7f41cd71497778c42e7d1cef2e.Array', 10),
(61, 'arquivoCampanha/d59d150a3d8636f08749b84d426e432c.Array', 11),
(62, 'arquivoCampanha/169aaf7d1af6d9c6d12d084be9cdb01c.Array', 11),
(63, 'arquivoCampanha/4ea78dab5ae410fc9ae81c959e39837a.Array', 11),
(64, 'arquivoCampanha/e4e31cae92c0b6bdc21825699b9f3023.Array', 11),
(65, 'arquivoCampanha/e2ba5abfcc569ecf1a9b1a3b5ff1b351.Array', 11),
(66, 'arquivoCampanha/924d244bbf82f86b77864e67dfbba0cf.Array', 11),
(67, 'arquivoCampanha/364f18ba58808647b6ca6d9950cde625.Array', 12),
(68, 'arquivoCampanha/469c13331c2787d0759a8fb7da8231cd.Array', 12),
(69, 'arquivoCampanha/3519e5dd11e11401e5073411c7241166.Array', 12),
(70, 'arquivoCampanha/84864b463911e74887cff4ef722dad6a.Array', 12),
(71, 'arquivoCampanha/0907cb69b0c413bc7688052a17dde3d7.Array', 12),
(72, 'arquivoCampanha/4db37716f474776238dac7b37910500b.Array', 12),
(73, 'arquivoCampanha/c2b13188633c64815d11d5dc4d9d4f40.Array', 13),
(74, 'arquivoCampanha/339487b876ad06c3d12ef0a0338b18e2.Array', 13),
(75, 'arquivoCampanha/f1205d63858f61f246fb680d0836cb2c.Array', 13),
(76, 'arquivoCampanha/7a311b1a413c93f38e7a4cb7e8e28cbe.Array', 13),
(77, 'arquivoCampanha/e56dec4a3584221433fb71b2ba7c5143.Array', 13),
(78, 'arquivoCampanha/787ea311fa6dd7d153b430cd0a561833.Array', 13),
(79, 'arquivoCampanha/eddbdb021f7e7ca89593883ec82918a0.Array', 14),
(80, 'arquivoCampanha/a64c94465b6b61412baa5eda05225ff3.Array', 14),
(81, 'arquivoCampanha/810752a014e872382145705963bf8777.Array', 14),
(82, 'arquivoCampanha/7067e062c42ba6ecafd9859827e85f25.Array', 14),
(83, 'arquivoCampanha/b86be6a8b7d9da52686d4a054a111f05.Array', 14),
(84, 'arquivoCampanha/70d7b1374f8a30406a38f83818eb5e44.Array', 14),
(85, 'arquivoCampanha/01bf04865ef1d9de6bb26447de5e317d.Array', 15),
(86, 'arquivoCampanha/8e6833df6e102720d66ee21f9adc6b5e.Array', 15),
(87, 'arquivoCampanha/9a18c105d5d3b2d0f277beed553eaf02.Array', 15),
(88, 'arquivoCampanha/c56cd5f8e2a1025e78ebeca652b029ef.Array', 15),
(89, 'arquivoCampanha/0145b56fc4f58ac940d711a3aa65fd85.Array', 15),
(90, 'arquivoCampanha/acb995dc08d590a49ca0bbb714ad2100.Array', 15);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfotosanuncio`
--

CREATE TABLE `tbfotosanuncio` (
  `idFotosAnuncio` int(11) NOT NULL,
  `fotosAnuncio` varchar(600) DEFAULT NULL,
  `idAnuncio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(17, 'poggers', 200, 'teste@teste.com', '$2y$10$P.sHQXkr.kKntsgfs4V65efKLaZTG2nsYsbBrxoVMRwmHAThnlVY6', 'Rua Bernadete', 'Ferraz de Vasconcelos', 12, '', 'SP', 'Vila do Americano', '75004065000104', '234234', '434234', '08533250', 'upload/6beaf51c7d982599fbbae6b622672270.jpg'),
(18, 'Ampara Animal', 500, 'aa@gmail.com', '$2y$10$cfplxrsMnbn0ATVaJl//IOgJ6C6RLQrVeUS.q9nUH43BJlG8PsEdO', 'Avenida Itaberaba', 'São Paulo', 145, '', 'SP', 'Itaberaba', '13244560000133', '231', '7899', '02739-000', 'upload/84cbacf261a472b1cced23a812156fd8.png'),
(19, 'MAPAN', 500, 'mapan@gmail.com', '$2y$10$nsGtIMUoJZg2mC9cE5tOj.POgrv5aGAH1XysAQwmNQeWx16vyssFi', 'Avenida Itaberaba', 'São Paulo', 145, '', 'SP', 'Itaberaba', '80392434000113', '444', '544388', '02739-000', 'upload/0407de9db30038224e946b5ed1d314b7.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpost`
--

CREATE TABLE `tbpost` (
  `idPost` int(11) NOT NULL,
  `curtidaPost` int(11) DEFAULT NULL,
  `descricaoPost` varchar(200) DEFAULT NULL,
  `fotoPost` varchar(800) DEFAULT NULL,
  `tituloPost` varchar(50) DEFAULT NULL,
  `categoriaPost` varchar(50) DEFAULT NULL,
  `dataPost` date DEFAULT NULL,
  `horaPost` time DEFAULT NULL,
  `idOng` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

--
-- Extraindo dados da tabela `tbprefeusuario`
--

INSERT INTO `tbprefeusuario` (`idPrefeUsuario`, `tipoPet`, `generoPet`, `portePet`, `preferenciaUsuario`, `idadePet`, `idRaca`, `idUsuario`) VALUES
(1, 'Gato', 'Macho', 'Pequeno', 'Adotar', 0, 9, 0);

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
(2, '11986036737', 3),
(3, '11964352175', 4),
(4, '11964352175', 5),
(5, '11964352175', 6),
(6, '11964352175', 7),
(7, '11964352175', 8),
(8, '11964352175', 9),
(9, '11964352175', 10),
(10, '11964352175', 11),
(11, '11964352175', 12),
(12, '11964352175', 13),
(13, '11964352175', 14),
(16, '11964352175', 17),
(17, '11933224567', 18),
(18, '11987654321', 19);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtelefoneusuario`
--

CREATE TABLE `tbtelefoneusuario` (
  `idTelefoneUsuario` int(11) NOT NULL,
  `numTelefoneUsuario` varchar(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbtelefoneusuario`
--

INSERT INTO `tbtelefoneusuario` (`idTelefoneUsuario`, `numTelefoneUsuario`, `idUsuario`) VALUES
(1, '11964352175', 0);

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
  `cepUsuario` varchar(10) DEFAULT NULL,
  `nivelUsuario` varchar(20) DEFAULT 'comum',
  `fotoUsuario` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbusuario`
--

INSERT INTO `tbusuario` (`idUsuario`, `nomeUsuario`, `cpfUsusario`, `emailUsuario`, `senhaUsuario`, `bairroUsuario`, `logradouroUsuario`, `cidadeUsuario`, `numLocalUsuario`, `complementoUsuario`, `estadoUsuario`, `cepUsuario`, `nivelUsuario`, `fotoUsuario`) VALUES
(0, 'Teste', NULL, 'teste@teste.com', '$2y$10$uwNdi8G2jhhUs2uBRf0y8epFpW2XS5ZKCJcnR/Evw3oVxYiaACF2S', 'Vila do Americano', 'Rua Bernadete', 'Ferraz de Vasconcelos', 12, '', 'SP', '08533-250', 'comum', NULL),
(2, 'adm', NULL, NULL, '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL),
(5, 'gab', '81871252091', 'gab@gmail.com', '123', 'jdFanganiello', 'Guaianases', 'SP', 11, 'B', 'SP', '08450-48', 'comum', NULL);

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
(0, 'Nenhum'),
(1, 'V8'),
(2, 'V10'),
(3, 'Gripe canina'),
(4, 'Giárdia'),
(5, 'Antirrábica'),
(6, 'Leishmaniose');

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
-- Índices para tabela `tbanuncio`
--
ALTER TABLE `tbanuncio`
  ADD PRIMARY KEY (`idAnuncio`),
  ADD KEY `idAnunciante` (`idAnunciante`);

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
-- Índices para tabela `tbfotosanuncio`
--
ALTER TABLE `tbfotosanuncio`
  ADD PRIMARY KEY (`idFotosAnuncio`),
  ADD KEY `idAnuncio` (`idAnuncio`);

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
-- Índices para tabela `tbong`
--
ALTER TABLE `tbong`
  ADD PRIMARY KEY (`idOng`);

--
-- Índices para tabela `tbpost`
--
ALTER TABLE `tbpost`
  ADD PRIMARY KEY (`idPost`),
  ADD KEY `idOng` (`idOng`);

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
  MODIFY `idAnimal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `tbanunciante`
--
ALTER TABLE `tbanunciante`
  MODIFY `idAnunciante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbanuncio`
--
ALTER TABLE `tbanuncio`
  MODIFY `idAnuncio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbapadrinhamento`
--
ALTER TABLE `tbapadrinhamento`
  MODIFY `idApadrinhamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbcampanha`
--
ALTER TABLE `tbcampanha`
  MODIFY `idCampanha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `idFotoAnimal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `tbfotocampanha`
--
ALTER TABLE `tbfotocampanha`
  MODIFY `idFotoCampanha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT de tabela `tbfotosanuncio`
--
ALTER TABLE `tbfotosanuncio`
  MODIFY `idFotosAnuncio` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `idOng` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `tbpost`
--
ALTER TABLE `tbpost`
  MODIFY `idPost` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbprefeusuario`
--
ALTER TABLE `tbprefeusuario`
  MODIFY `idPrefeUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `idTelefoneAnunciante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbtelefoneong`
--
ALTER TABLE `tbtelefoneong`
  MODIFY `idTelefoneOng` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `tbtelefoneusuario`
--
ALTER TABLE `tbtelefoneusuario`
  MODIFY `idTelefoneUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbanimal`
--
ALTER TABLE `tbanimal`
  ADD CONSTRAINT `idDoenca` FOREIGN KEY (`idDoenca`) REFERENCES `tbdoenca` (`idDoenca`),
  ADD CONSTRAINT `idVacina` FOREIGN KEY (`idVacina`) REFERENCES `tbvacina` (`idVacina`);

--
-- Limitadores para a tabela `tbanunciante`
--
ALTER TABLE `tbanunciante`
  ADD CONSTRAINT `tbanunciante_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`);

--
-- Limitadores para a tabela `tbanuncio`
--
ALTER TABLE `tbanuncio`
  ADD CONSTRAINT `tbanuncio_ibfk_1` FOREIGN KEY (`idAnunciante`) REFERENCES `tbanunciante` (`idAnunciante`);

--
-- Limitadores para a tabela `tbfotosanuncio`
--
ALTER TABLE `tbfotosanuncio`
  ADD CONSTRAINT `tbfotosanuncio_ibfk_1` FOREIGN KEY (`idAnuncio`) REFERENCES `tbanuncio` (`idAnuncio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
