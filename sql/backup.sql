-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06-Nov-2015 às 18:39
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `suporte`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_call_add`(
	IN client INT,
	IN depart INT,
	IN descpt TEXT,
        IN cuser INT
	)
BEGIN
	
	DECLARE EXIT HANDLER FOR SQLEXCEPTION
	BEGIN
		ROLLBACK;
	END;
	
	START TRANSACTION;
	
	INSERT INTO calls (client_id, depart_id, description, created) VALUES (client, depart, descpt, NOW());
	
	INSERT INTO actions (call_id,user_id, date, desc_act) VALUES (last_insert_id(), cuser, NOW(), 'CHAMADO FOI ABERTO');
	
	COMMIT;
	
	END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_user_add`(IN `uname` VARCHAR(100), IN `upasswd` VARCHAR(100), IN `ulogin` VARCHAR(100), IN `ulevel` INT, IN `uactive` BOOLEAN)
BEGIN
	
	DECLARE EXIT HANDLER FOR SQLEXCEPTION
	BEGIN
		ROLLBACK;
	END;
	
	START TRANSACTION;
	
	INSERT INTO users (name, login, passwd, level, active) VALUES (uname, ulogin, upasswd, ulevel, uactive);
	
	INSERT INTO log (user_id, date) VALUES (last_insert_id(), NOW());
	
	COMMIT;
	
	END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `actions`
--

CREATE TABLE IF NOT EXISTS `actions` (
  `call_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `desc_act` text,
  `daytime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`call_id`,`user_id`,`daytime`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `calls`
--

CREATE TABLE IF NOT EXISTS `calls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `depart_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `status` char(1) DEFAULT 'O',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `closed` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_depart_calls` (`depart_id`),
  KEY `fk_client_calls` (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `depart_id` int(11) NOT NULL,
  `fone` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_client_depart` (`depart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `depart`
--

CREATE TABLE IF NOT EXISTS `depart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `initials` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `initials` (`initials`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `passwd` varchar(100) NOT NULL,
  `level` int(11) DEFAULT '0',
  `active` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `calls`
--
ALTER TABLE `calls`
  ADD CONSTRAINT `fk_depart_calls` FOREIGN KEY (`depart_id`) REFERENCES `depart` (`id`),
  ADD CONSTRAINT `fk_client_calls` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);

--
-- Limitadores para a tabela `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `fk_client_depart` FOREIGN KEY (`depart_id`) REFERENCES `depart` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
