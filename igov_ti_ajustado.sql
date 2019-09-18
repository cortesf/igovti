-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 10-Jun-2019 às 13:41
-- Versão do servidor: 8.0.13-4
-- versão do PHP: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `igov_ti_ajustado`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas`
--

CREATE TABLE `respostas` (
  `Id` int NOT NULL AUTO INCREMENT,
  `Estado` char NOT NULL,
  `Instituicao` char NOT NULL,
  `Pergunta1` float NOT NULL,
  `Pergunta2` float NOT NULL,
  `Pergunta3` float NOT NULL,
  `Pergunta4` float NOT NULL,
  `Pergunta5` float NOT NULL,
  `Pergunta6` float NOT NULL,
  `Pergunta7` float NOT NULL,
  `Pergunta8` float NOT NULL,
  `Pergunta9` float NOT NULL,
  `Pergunta10` float NOT NULL,
  `Pergunta11` float NOT NULL,
  `Pergunta12` float NOT NULL,
  `Pergunta13` float NOT NULL,
  `Pergunta14` float NOT NULL,
  `Pergunta15` float NOT NULL,
  `Pergunta16` float NOT NULL,
  `Pergunta17` float NOT NULL,
  `Pergunta18` float NOT NULL,
  `Pergunta19` float NOT NULL,
  `Pergunta20` float NOT NULL,
  `Pergunta21` float NOT NULL,
  `Pergunta22` float NOT NULL,
  `Pergunta23` float NOT NULL,
  `Pergunta24` float NOT NULL,
  `Pergunta25` float NOT NULL,
  `Pergunta26` float NOT NULL,
  `Pergunta27` float NOT NULL,
  `Pergunta28` float NOT NULL,
  `Pergunta29` float NOT NULL,
  `Pergunta30` float NOT NULL,
  `Pergunta31` float NOT NULL,
  `Pergunta32` float NOT NULL,
  `Pergunta33` float NOT NULL,
  `Pergunta34` float NOT NULL,
  `Pergunta35` float NOT NULL,
  `Pergunta36` float NOT NULL,
  `Pergunta37` float NOT NULL,
  `Pergunta38` float NOT NULL,
  `Pergunta39` float NOT NULL,
  `Pergunta40` float NOT NULL,
  `Pergunta41` float NOT NULL,
  `Pergunta42` float NOT NULL,
  `Pergunta43` float NOT NULL,
  `Pergunta44` float NOT NULL,
  `Pergunta45` float NOT NULL,
  `Pergunta46` float NOT NULL,
  `Pergunta47` float NOT NULL,
  `Pergunta48` float NOT NULL,
  `Pergunta49` float NOT NULL,
  `Pergunta50` float NOT NULL,
  `Pergunta51` float NOT NULL,
  `Pergunta52` float NOT NULL,
  `Pergunta53` float NOT NULL,
  `Pergunta54` float NOT NULL,
  `Pergunta55` float NOT NULL,
  `Pergunta56` float NOT NULL,
  `Pergunta57` float NOT NULL,
  `Pergunta58` float NOT NULL,
  `Pergunta59` float NOT NULL,
  `Pergunta60` float NOT NULL,
  `Pergunta61` float NOT NULL
) ENGINE=innodb DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
