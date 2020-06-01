-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 01-Jun-2020 às 02:14
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
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clients`
--

INSERT INTO `clients` (`id`, `id_company`, `name`, `email`, `phone`, `address`, `address_neighb`, `address_city`, `address_state`, `address_country`, `address_zipcode`, `stars`, `internal_obs`, `address_number`, `address2`) VALUES
(3, 1, 'Rodrigo ', '', '', '', '', '', '', '', '', 1, '', '', ''),
(16, 1, 'JoÃ£o da Silva', 'jd@uol.com.br', '(93) 45646-6465', 'Avenida Morumbi', 'Morumbi', 'SÃ£o Paulo', 'SP', 'Brasil', '05650001', 5, '', '123', '36B'),
(4, 1, 'Sergio Malandro', 'salcifufu@gmail.com', '(11) 9754-33753', 'Rua Estrela Dalva (Jd SatÃ©lite)', 'Cooperativa', 'SÃ£o Bernardo do Campo', 'SP', 'Brasil', '09852-052', 2, 'RÃ¡ Yeah Yeah!', '123', ''),
(5, 1, 'Rodrigo Silveira Dias dos Santos', 'rsddossantos@gmail.com', '(11) 97543-3753', 'Rua Doutor SÃ­lvio Dante Bertacchi', 'Vila SÃ´nia', 'SÃ£o Paulo', 'SP', 'Brasil', '05625001', 3, '', '', ''),
(6, 1, 'Rodrigo Silveira Dias dos Santos', 'rsddossantos@gmail.com', '(11) 97543-3753', 'Rua Doutor SÃ­lvio Dante Bertacchi', 'Vila SÃ´nia', 'SÃ£o Paulo', 'SP', 'Brasil', '05625001', 2, '', '', ''),
(7, 1, 'Rodrigo Silveira Dias dos Santos', 'rsddossantos@gmail.com', '', 'Rua Doutor SÃ­lvio Dante Bertacchi', 'Vila SÃ´nia', 'SÃ£o Paulo', 'SP', 'Brasil', '05625001', 3, '', '', ''),
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
(27, 1, 'Sergio Malandro', 'salcifufu@gmail.com', '', 'Rua Estrela Dalva (Jd SatÃ©lite)', 'Cooperativa', 'SÃ£o Bernardo do Campo', 'SP', 'Brasil', '09852-052', 3, '', '', '');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
(1, 1, 'Desenvolvedores', '34,33,1,2,32'),
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
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `permission_params`
--

INSERT INTO `permission_params` (`id`, `id_company`, `name`) VALUES
(1, 1, 'logout'),
(2, 1, 'permissions_view'),
(33, 1, 'clients_view'),
(32, 1, 'users_view'),
(34, 1, 'clients_edit');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
  `date-sale` datetime NOT NULL,
  `total_price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `id_company`, `email`, `password`, `id_group`) VALUES
(1, 1, 'admin@empresateste.com.br', 'e10adc3949ba59abbe56e057f20f883e', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
