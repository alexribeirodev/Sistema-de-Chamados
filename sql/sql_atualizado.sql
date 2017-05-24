-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27-Jun-2016 às 19:45
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sicvigo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamado`
--

CREATE TABLE IF NOT EXISTS `chamado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` mediumtext,
  `anotacao` mediumtext,
  `atribuicao` varchar(100) DEFAULT 'TI',
  `usuario_id` int(11) NOT NULL,
  `usuario_setor_id` int(11) NOT NULL,
  `natureza_id` int(11) NOT NULL,
  `situacao` varchar(45) NOT NULL DEFAULT 'aberto',
  `data_abertura` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_conclusao` timestamp NOT NULL,
  PRIMARY KEY (`id`,`usuario_id`,`usuario_setor_id`,`natureza_id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_chamado_usuario1_idx` (`usuario_id`,`usuario_setor_id`),
  KEY `fk_chamado_natureza1_idx` (`natureza_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `chamado`
--
ALTER TABLE `chamado`
  ADD CONSTRAINT `fk_chamado_natureza1` FOREIGN KEY (`natureza_id`) REFERENCES `natureza` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_chamado_usuario1` FOREIGN KEY (`usuario_id`, `usuario_setor_id`) REFERENCES `usuario` (`id`, `setor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
