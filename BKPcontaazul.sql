-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 12-Jul-2020 às 04:32
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `contaazul`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_company` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `address_neighb` varchar(100) DEFAULT NULL,
  `address_city` varchar(50) DEFAULT NULL,
  `address_state` varchar(50) DEFAULT NULL,
  `address_country` varchar(50) DEFAULT NULL,
  `address_zipcode` varchar(50) DEFAULT NULL,
  `stars` int(11) DEFAULT 3,
  `internal_obs` text DEFAULT NULL,
  `address_number` varchar(50) DEFAULT NULL,
  `address2` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clients`
--

INSERT INTO `clients` (`id`, `id_company`, `name`, `email`, `phone`, `address`, `address_neighb`, `address_city`, `address_state`, `address_country`, `address_zipcode`, `stars`, `internal_obs`, `address_number`, `address2`) VALUES
(3, 1, 'Rodrigo ', '', '', '', '', '', '', '', '', 1, '', '', ''),
(16, 1, 'JoÃ£o da Silva', 'jd@uol.com.br', '(11) 3586-4649', 'Avenida Morumbi', 'Morumbi', 'SÃ£o Paulo', 'SP', 'Brasil', '05650001', 5, '', '123', '36B'),
(4, 1, 'Sergio Malandro', 'salcifufu@gmail.com', '(11) 9754-33753', 'Rua Estrela Dalva (Jd SatÃ©lite)', 'Cooperativa', 'SÃ£o Bernardo do Campo', 'SP', 'Brasil', '09852-052', 2, 'RÃ¡ Yeah Yeah!', '123', ''),
(5, 1, 'Rodrigo Silveira Dias dos Santos', 'rsddossantos@gmail.com', '(11) 97543-3753', 'Rua Doutor SÃ­lvio Dante Bertacchi', 'Vila SÃ´nia', 'SÃ£o Paulo', 'SP', 'Brasil', '05625001', 3, '', '', ''),
(6, 1, 'Rodrigo Silveira Dias dos Santos', 'rsddossantos@gmail.com', '(11) 97543-3753', 'Rua Doutor SÃ­lvio Dante Bertacchi', 'Vila SÃ´nia', 'SÃ£o Paulo', 'SP', 'Brasil', '05625001', 2, '', '', ''),
(7, 1, 'Rodrigo Silveira Dias dos Santos', 'rsddossantos@gmail.com', '', 'Rua Doutor SÃ­lvio Dante Bertacchi', 'Vila SÃ´nia', 'SÃ£o Paulo', 'SP', 'Brasil', '05625001', 3, '', '1116', ''),
(8, 1, 'Rodrigo Silveira Dias dos Santos', 'rsddossantos@gmail.com', '(11) 99360-5638', 'Rua Doutor SÃ­lvio Dante Bertacchi', 'Vila SÃ´nia', 'SÃ£o Paulo', 'SP', 'Brasil', '05625001', 3, '', '', ''),
(9, 1, 'Rodrigo Silveira Dias dos Santos', 'rsddossantos@gmail.com', '(11) 3586-4649', 'Rua Doutor SÃ­lvio Dante Bertacchi', 'Vila SÃ´nia', 'SÃ£o Paulo', 'SP', 'Brasil', '05625001', 4, ' brggtf rgb h rtgdr herhrt her erh brggtf rgb h rtgdr herhrt her erh brggtf rgb h rtgdr herhrt her erh brggtf rgb h rtgdr herhrt her erh brggtf rgb h rtgdr herhrt her erhbrggtf rgb h rtgdr herhrt her erh brggtf rgb h rtgdr herhrt her erh brggtf rgb h rtgdr herhrt her erh brggtf rgb h rtgdr herhrt her erhbrggtf rgb h rtgdr herhrt her erhbrggtf rgb h rtgdr herhrt her erhbrggtf rgb h rtgdr herhrt her erhbrggtf rgb h rtgdr herhrt her erhbrggtf rgb h rtgdr herhrt her erhbrggtf rgb h rtgdr herhrt her erh', '1116', 'brggtf rgb h rtgdr herhrt her erh'),
(10, 1, 'Rodrigo Silveira Dias dos Santos', 'rsddossantos@gmail.com', '(11) 3586-4649', 'Rua Doutor SÃ­lvio Dante Bertacchi', 'Vila SÃ´nia', 'SÃ£o Paulo', 'SP', 'Brasil', '05625001', 4, 'brggtf rgb h rtgdr herhrt her erh', '1116', 'brggtf rgb h rtgdr herhrt her erh'),
(11, 1, 'Rodrigo Silveira Dias dos Santos', 'rsddossantos@gmail.com', '(11) 3586-4649', 'Rua Doutor SÃ­lvio Dante Bertacchi', 'Vila SÃ´nia', 'SÃ£o Paulo', 'SP', 'Brasil', '05625001', 4, 'brggtf rgb h rtgdr herhrt her erh', '1116', 'brggtf rgb h rtgdr herhrt her erh'),
(12, 1, 'Rodrigo Silveira Dias dos Santos', 'rsddossantos@gmail.com', '(11) 3586-4649', 'Rua Doutor SÃ­lvio Dante Bertacchi', 'Vila SÃ´nia', 'SÃ£o Paulo', 'SP', 'Brasil', '05625001', 4, 'brggtf rgb h rtgdr herhrt her erh', '1116', 'brggtf rgb h rtgdr herhrt her erh'),
(13, 1, 'Rodrigo Silveira Dias dos Santos', 'rsddossantos@gmail.com', '(11) 3586-4649', 'Rua Doutor SÃ­lvio Dante Bertacchi', 'Vila SÃ´nia', 'SÃ£o Paulo', 'SP', 'Brasil', '05625001', 4, 'brggtf rgb h rtgdr herhrt her erh', '1116', 'brggtf rgb h rtgdr herhrt her erh'),
(14, 1, 'Rodrigo Silveira Dias dos Santos', 'rsddossantos@gmail.com', '(11) 3586-4649', 'Rua Doutor SÃ­lvio Dante Bertacchi', 'Vila SÃ´nia', 'SÃ£o Paulo', 'SP', 'Brasil', '05625001', 4, 'brggtf rgb h rtgdr herhrt her erh', '1116', 'brggtf rgb h rtgdr herhrt her erh'),
(15, 1, 'Rodrigo Silveira Dias dos Santos', 'rsddossantos@gmail.com', '(11) 3586-4649', 'Rua Doutor SÃ­lvio Dante Bertacchi', 'Vila SÃ´nia', 'SÃ£o Paulo', 'SP', 'Brasil', '05625001', 4, 'brggtf rgb h rtgdr herhrt her erh', '1116', 'brggtf rgb h rtgdr herhrt her erh'),
(17, 1, 'Rodrigo Silveira Dias dos Santos', 'rsddossantos@gmail.com', '', 'Rua Doutor SÃ­lvio Dante Bertacchi', 'Vila SÃ´nia', 'SÃ£o Paulo', 'SP', 'Brasil', '05625001', 3, '', '', ''),
(18, 1, 'Rodrigo Silveira Dias dos Santos', 'rsddossantos@gmail.com', '', 'Rua Doutor SÃ­lvio Dante Bertacchi', 'Vila SÃ´nia', 'SÃ£o Paulo', 'SP', 'Brasil', '05625001', 3, '', '', ''),
(19, 1, 'Rodrigo Silveira Dias dos Santos', 'rsddossantos@gmail.com', '', 'Rua Doutor SÃ­lvio Dante Bertacchi', 'Vila SÃ´nia', 'SÃ£o Paulo', 'SP', 'Brasil', '05625001', 3, '', '', ''),
(20, 1, 'Rodrigo Silveira Dias dos Santos', 'rsddossantos@gmail.com', '', 'Rua Doutor SÃ­lvio Dante Bertacchi', 'Vila SÃ´nia', 'SÃ£o Paulo', 'SP', 'Brasil', '05625001', 3, '', '', ''),
(21, 1, 'Rodrigo Silveira Dias dos Santos', 'rsddossantos@gmail.com', '', 'Rua Doutor SÃ­lvio Dante Bertacchi', 'Vila SÃ´nia', 'SÃ£o Paulo', 'SP', 'Brasil', '05625001', 3, '', '', ''),
(22, 1, 'Sergio Malandro', 'salcifufu@gmail.com', '', 'Rua Estrela Dalva (Jd SatÃ©lite)', 'Cooperativa', 'SÃ£o Bernardo do Campo', 'SP', 'Brasil', '09852-052', 3, '', '', ''),
(23, 1, 'Sergio Malandro', 'salcifufu@gmail.com', '', 'Rua Estrela Dalva (Jd SatÃ©lite)', 'Cooperativa', 'SÃ£o Bernardo do Campo', 'SP', 'Brasil', '09852-052', 3, '', '', ''),
(24, 1, 'Rodrigo Silveira Dias dos Santos', 'rsddossantos@gmail.com', '', 'Rua Doutor SÃ­lvio Dante Bertacchi', 'Vila SÃ´nia', 'SÃ£o Paulo', 'SP', 'Brasil', '05625001', 3, '', '', ''),
(25, 1, 'Rodrigo Silveira Dias dos Santos', 'rsddossantos@gmail.com', '', 'Rua Doutor SÃ­lvio Dante Bertacchi', 'Vila SÃ´nia', 'SÃ£o Paulo', 'SP', 'Brasil', '05625001', 3, '', '', ''),
(26, 1, 'Sergio Malandro', 'salcifufu@gmail.com', '', 'Rua Estrela Dalva (Jd SatÃ©lite)', 'Cooperativa', 'SÃ£o Bernardo do Campo', 'SP', 'Brasil', '09852-052', 3, '', '', ''),
(27, 1, 'Sergio Malandro', 'salcifufu@gmail.com', '', 'Rua Estrela Dalva (Jd SatÃ©lite)', 'Cooperativa', 'SÃ£o Bernardo do Campo', 'SP', 'Brasil', '09852-052', 3, '', '', ''),
(28, 1, 'Rodrigo Silveira Dias dos Santos', 'rsddossantos@gmail.com', '(55) 97543-3753', 'Rua Doutor SÃ­lvio Dante Bertacchi', 'Vila SÃ´nia', 'SÃ£o Paulo', 'SP', 'Brasil', '05625001', 3, '', '', ''),
(29, 1, 'teste', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL),
(30, 1, 'teste', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL),
(31, 1, 'teste2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL),
(32, 1, 'teste3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL),
(33, 1, 'teste3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL),
(34, 1, 'Rodrigo  ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL),
(35, 1, 'Rodrigo Silveira Dias dos Santos', 'rsddossantos@gmail.com', '(11) 9936-05638', 'Rua Doutor SÃ­lvio Dante Bertacchi', 'Vila SÃ´nia', 'SÃ£o Paulo', 'SP', 'Brasil', '05625001', 3, '', '', ''),
(36, 1, 'Andrey Waldisnei', 'rsddossantos@gmail.com', '(11) 9936-05638', 'Rua Doutor SÃ­lvio Dante Bertacchi', 'Vila SÃ´nia', 'SÃ£o Paulo', 'SP', 'Brasil', '05625001', 3, '', '1116', ''),
(37, 1, 'SebastiÃ£o Camargo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL),
(38, 1, 'Wanderley Nogueira', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL),
(39, 1, 'Rodrigo  ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL),
(40, 1, 'Robson Cruz', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `companies`
--

DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `companies`
--

INSERT INTO `companies` (`id`, `name`) VALUES
(1, 'Empresa TESTE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `inventory`
--

DROP TABLE IF EXISTS `inventory`;
CREATE TABLE IF NOT EXISTS `inventory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_company` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `quant` int(11) NOT NULL,
  `min_quant` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `inventory`
--

INSERT INTO `inventory` (`id`, `id_company`, `name`, `price`, `quant`, `min_quant`) VALUES
(8, 1, 'TÃªnis Oasis', 239.9, -2, 20),
(9, 1, 'Bermuda BlueSky Flyhorse Memories', 69.9, 488, 520),
(10, 1, 'CalÃ§a Jeans OverLock', 100, 74, 100),
(36, 1, 'Bermuda Chong Lee', 105.99, 3, 10),
(39, 1, 'teste preÃ§o zero 2', 1, 12, 12),
(40, 1, 'teste', 1, 0, 1),
(37, 1, 'CalÃ§a Moleton HeyJoe', 123.73, 87, 100),
(21, 1, 'teste1', 1, 1, 1),
(22, 1, 'teste1', 1, 1, 1),
(23, 1, 'teste1', 1, 1, 1),
(24, 1, 'teste1', 1, 1, 1),
(25, 1, 'teste1', 1, 1, 1),
(26, 1, 'teste1', 1, 1, 1),
(27, 1, 'teste1', 1, 1, 1),
(28, 1, 'teste1', 1, 1, 1),
(29, 1, 'teste999', 999.99, 200, 300),
(30, 1, 'teste1', 1, 1, 1),
(31, 1, 'teste1', 1, 1, 1),
(32, 1, 'teste123', 1, 0, 1),
(33, 1, 'teste123', 1, 1, 1),
(34, 1, 'teste123', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `inventory_history`
--

DROP TABLE IF EXISTS `inventory_history`;
CREATE TABLE IF NOT EXISTS `inventory_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_company` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `action` varchar(3) NOT NULL,
  `date_action` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=99 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `inventory_history`
--

INSERT INTO `inventory_history` (`id`, `id_company`, `id_product`, `id_user`, `action`, `date_action`) VALUES
(18, 1, 8, 1, 'add', '2020-06-11 23:52:45'),
(19, 1, 9, 1, 'add', '2020-06-11 23:53:07'),
(20, 1, 10, 1, 'add', '2020-06-11 23:53:45'),
(21, 1, 8, 1, 'edt', '2020-06-11 23:54:14'),
(22, 1, 9, 1, 'edt', '2020-06-11 23:54:25'),
(23, 1, 11, 1, 'add', '2020-06-11 23:54:51'),
(24, 1, 11, 1, 'del', '2020-06-11 23:54:54'),
(25, 1, 12, 1, 'add', '2020-06-12 10:00:45'),
(26, 1, 12, 1, 'edt', '2020-06-12 10:00:50'),
(27, 1, 12, 1, 'del', '2020-06-12 10:00:54'),
(28, 1, 13, 1, 'add', '2020-06-12 10:27:45'),
(29, 1, 15, 1, 'add', '2020-06-12 10:47:56'),
(30, 1, 16, 1, 'add', '2020-06-12 10:48:00'),
(31, 1, 17, 1, 'add', '2020-06-12 10:48:07'),
(32, 1, 18, 1, 'add', '2020-06-12 10:48:13'),
(33, 1, 19, 1, 'add', '2020-06-12 10:48:20'),
(34, 1, 20, 1, 'add', '2020-06-12 10:48:30'),
(35, 1, 21, 1, 'add', '2020-06-12 10:48:39'),
(36, 1, 22, 1, 'add', '2020-06-12 10:48:53'),
(37, 1, 23, 1, 'add', '2020-06-12 10:48:59'),
(38, 1, 24, 1, 'add', '2020-06-12 10:49:05'),
(39, 1, 25, 1, 'add', '2020-06-12 10:49:12'),
(40, 1, 26, 1, 'add', '2020-06-12 10:49:19'),
(41, 1, 27, 1, 'add', '2020-06-12 10:49:30'),
(42, 1, 28, 1, 'add', '2020-06-12 10:49:38'),
(43, 1, 29, 1, 'add', '2020-06-12 10:49:49'),
(44, 1, 30, 1, 'add', '2020-06-12 10:50:15'),
(45, 1, 31, 1, 'add', '2020-06-12 10:50:19'),
(46, 1, 32, 1, 'add', '2020-06-12 10:50:24'),
(47, 1, 33, 1, 'add', '2020-06-12 10:50:32'),
(48, 1, 34, 1, 'add', '2020-06-12 10:50:37'),
(49, 1, 35, 1, 'add', '2020-06-12 10:50:43'),
(50, 1, 29, 1, 'edt', '2020-06-12 11:19:28'),
(51, 1, 20, 1, 'del', '2020-06-15 13:00:57'),
(52, 1, 19, 1, 'del', '2020-06-17 16:22:01'),
(53, 1, 18, 1, 'del', '2020-06-17 16:22:09'),
(54, 1, 13, 1, 'del', '2020-06-17 16:22:17'),
(55, 1, 35, 1, 'del', '2020-06-29 23:29:56'),
(56, 1, 10, 1, 'edt', '2020-07-01 10:42:28'),
(57, 1, 9, 1, 'edt', '2020-07-01 11:09:33'),
(58, 1, 9, 1, 'edt', '2020-07-01 11:12:24'),
(59, 1, 36, 1, 'add', '2020-07-01 11:20:07'),
(60, 1, 9, 1, 'edt', '2020-07-01 11:20:28'),
(61, 1, 37, 1, 'add', '2020-07-01 16:36:21'),
(62, 1, 14, 1, 'del', '2020-07-01 16:37:50'),
(63, 1, 15, 1, 'del', '2020-07-01 16:37:53'),
(64, 1, 16, 1, 'del', '2020-07-01 16:37:56'),
(65, 1, 17, 1, 'del', '2020-07-01 16:37:59'),
(66, 1, 38, 1, 'add', '2020-07-01 23:43:47'),
(67, 1, 39, 1, 'add', '2020-07-02 00:06:39'),
(68, 1, 38, 1, 'del', '2020-07-02 00:06:47'),
(69, 1, 40, 1, 'add', '2020-07-02 00:07:44'),
(70, 1, 10, 1, 'dwn', '2020-07-02 16:28:37'),
(71, 1, 8, 1, 'dwn', '2020-07-02 16:28:37'),
(72, 1, 10, 1, 'dwn', '2020-07-02 16:29:12'),
(73, 1, 8, 1, 'edt', '2020-07-02 16:33:13'),
(74, 1, 36, 1, 'edt', '2020-07-02 16:33:25'),
(75, 1, 10, 1, 'edt', '2020-07-02 16:33:32'),
(76, 1, 9, 1, 'edt', '2020-07-02 16:33:44'),
(77, 1, 39, 1, 'edt', '2020-07-02 16:34:08'),
(78, 1, 10, 1, 'dwn', '2020-07-02 17:39:34'),
(79, 1, 36, 1, 'dwn', '2020-07-02 17:39:34'),
(80, 1, 9, 1, 'dwn', '2020-07-02 23:28:18'),
(81, 1, 37, 1, 'dwn', '2020-07-02 23:45:21'),
(82, 1, 8, 1, 'dwn', '2020-07-03 18:01:51'),
(83, 1, 36, 1, 'dwn', '2020-07-03 18:01:51'),
(84, 1, 10, 1, 'dwn', '2020-07-03 18:07:27'),
(85, 1, 9, 1, 'dwn', '2020-07-03 18:07:38'),
(86, 1, 10, 1, 'dwn', '2020-07-03 18:07:51'),
(87, 1, 9, 1, 'dwn', '2020-07-03 18:09:22'),
(88, 1, 9, 1, 'dwn', '2020-07-03 18:09:35'),
(89, 1, 9, 1, 'dwn', '2020-07-03 18:09:44'),
(90, 1, 32, 1, 'dwn', '2020-07-03 18:09:53'),
(91, 1, 9, 1, 'dwn', '2020-07-03 18:17:06'),
(92, 1, 8, 1, 'dwn', '2020-07-03 18:17:06'),
(93, 1, 10, 1, 'dwn', '2020-07-08 18:05:12'),
(94, 1, 37, 1, 'dwn', '2020-07-11 01:26:32'),
(95, 1, 9, 1, 'dwn', '2020-07-11 01:35:58'),
(96, 1, 10, 1, 'dwn', '2020-07-11 01:35:58'),
(97, 1, 37, 1, 'dwn', '2020-07-11 01:35:58'),
(98, 1, 40, 1, 'dwn', '2020-07-11 01:35:58');

-- --------------------------------------------------------

--
-- Estrutura da tabela `permission_groups`
--

DROP TABLE IF EXISTS `permission_groups`;
CREATE TABLE IF NOT EXISTS `permission_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_company` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `params` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `permission_groups`
--

INSERT INTO `permission_groups` (`id`, `id_company`, `name`, `params`) VALUES
(1, 1, 'Desenvolvedores', '39,33,38,35,2,42,41,40,32'),
(8, 1, 'teste', '1,32');

-- --------------------------------------------------------

--
-- Estrutura da tabela `permission_params`
--

DROP TABLE IF EXISTS `permission_params`;
CREATE TABLE IF NOT EXISTS `permission_params` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_company` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `permission_params`
--

INSERT INTO `permission_params` (`id`, `id_company`, `name`) VALUES
(41, 1, 'sales_edit'),
(2, 1, 'permissions_view'),
(33, 1, 'clients_view'),
(32, 1, 'users_view'),
(39, 1, 'clients_edit'),
(35, 1, 'inventory_view'),
(40, 1, 'sales_view'),
(38, 1, 'inventory_edit'),
(42, 1, 'report_view');

-- --------------------------------------------------------

--
-- Estrutura da tabela `purchases`
--

DROP TABLE IF EXISTS `purchases`;
CREATE TABLE IF NOT EXISTS `purchases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_company` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_purchase` datetime NOT NULL,
  `total_price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `purchases`
--

INSERT INTO `purchases` (`id`, `id_company`, `id_user`, `date_purchase`, `total_price`) VALUES
(1, 1, 1, '2020-07-08 18:13:48', 100),
(2, 1, 1, '2020-07-03 00:00:00', 100);

-- --------------------------------------------------------

--
-- Estrutura da tabela `purchases_products`
--

DROP TABLE IF EXISTS `purchases_products`;
CREATE TABLE IF NOT EXISTS `purchases_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_company` int(11) NOT NULL,
  `id_purchase` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `quant` int(11) NOT NULL,
  `purchase_price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_company` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_sale` datetime NOT NULL,
  `total_price` float NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `sales`
--

INSERT INTO `sales` (`id`, `id_company`, `id_client`, `id_user`, `date_sale`, `total_price`, `status`) VALUES
(14, 1, 16, 1, '2020-07-02 01:02:15', 4709.7, 0),
(15, 1, 4, 1, '2020-07-02 16:28:37', 20849.5, 1),
(16, 1, 3, 1, '2020-07-02 16:29:12', 650, 0),
(13, 1, 4, 1, '2020-07-02 01:01:53', 375.19, 0),
(17, 1, 16, 1, '2020-07-02 17:39:34', 1529.95, 1),
(18, 1, 3, 1, '2020-07-02 23:28:18', 279.6, 0),
(19, 1, 39, 1, '2020-07-02 23:45:21', 494.92, 2),
(20, 1, 3, 1, '2020-07-03 18:01:51', 1171.58, 2),
(21, 1, 3, 1, '2020-07-03 18:07:27', 100, 0),
(22, 1, 4, 1, '2020-07-03 18:07:38', 69.9, 1),
(23, 1, 5, 1, '2020-07-03 18:07:51', 100, 2),
(24, 1, 7, 1, '2020-07-03 18:09:22', 69.9, 1),
(25, 1, 16, 1, '2020-07-03 18:09:35', 69.9, 2),
(26, 1, 16, 1, '2020-07-03 18:09:44', 69.9, 0),
(27, 1, 4, 1, '2020-07-03 18:09:53', 1, 1),
(28, 1, 40, 1, '2020-07-03 18:17:06', 929.4, 1),
(29, 1, 4, 1, '2020-07-08 18:05:12', 100, 1),
(30, 1, 3, 1, '2020-07-11 01:26:32', 618.65, 1),
(31, 1, 22, 1, '2020-07-11 01:35:58', 765.82, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sales_products`
--

DROP TABLE IF EXISTS `sales_products`;
CREATE TABLE IF NOT EXISTS `sales_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_company` int(11) NOT NULL,
  `id_sale` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quant` int(11) NOT NULL,
  `sale_price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `sales_products`
--

INSERT INTO `sales_products` (`id`, `id_company`, `id_sale`, `id_product`, `quant`, `sale_price`) VALUES
(24, 1, 20, 36, 2, 105.99),
(23, 1, 20, 8, 4, 239.9),
(22, 1, 19, 37, 4, 123.73),
(21, 1, 18, 9, 4, 69.9),
(20, 1, 17, 36, 5, 105.99),
(19, 1, 17, 10, 10, 100),
(18, 1, 16, 10, 1, 650),
(17, 1, 15, 8, 5, 1569.9),
(16, 1, 15, 10, 20, 650),
(15, 1, 14, 8, 3, 1569.9),
(14, 1, 13, 40, 4, 1),
(13, 1, 13, 37, 3, 123.73),
(25, 1, 21, 10, 1, 100),
(26, 1, 22, 9, 1, 69.9),
(27, 1, 23, 10, 1, 100),
(28, 1, 24, 9, 1, 69.9),
(29, 1, 25, 9, 1, 69.9),
(30, 1, 26, 9, 1, 69.9),
(31, 1, 27, 32, 1, 1),
(32, 1, 28, 9, 3, 69.9),
(33, 1, 28, 8, 3, 239.9),
(34, 1, 29, 10, 1, 100),
(35, 1, 30, 37, 5, 123.73),
(36, 1, 31, 9, 1, 69.9),
(37, 1, 31, 10, 2, 100),
(38, 1, 31, 37, 4, 123.73),
(39, 1, 31, 40, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_company` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `id_group` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `id_company`, `email`, `password`, `id_group`) VALUES
(1, 1, 'admin@empresateste.com.br', 'e10adc3949ba59abbe56e057f20f883e', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
