-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2016 at 12:48 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cdcol`
--

-- --------------------------------------------------------

--
-- Table structure for table `cds`
--

CREATE TABLE IF NOT EXISTS `cds` (
  `titel` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `interpret` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `jahr` int(11) DEFAULT NULL,
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `cds`
--

INSERT INTO `cds` (`titel`, `interpret`, `jahr`, `id`) VALUES
('Beauty', 'Ryuichi Sakamoto', 1990, 1),
('Goodbye Country (Hello Nightclub)', 'Groove Armada', 2001, 4),
('Glee', 'Bran Van 3000', 1997, 5);
--
-- Database: `phpmyadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `pma_bookmark`
--

CREATE TABLE IF NOT EXISTS `pma_bookmark` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pma_column_info`
--

CREATE TABLE IF NOT EXISTS `pma_column_info` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin' AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pma_column_info`
--

INSERT INTO `pma_column_info` (`id`, `db_name`, `table_name`, `column_name`, `comment`, `mimetype`, `transformation`, `transformation_options`) VALUES
(1, 'users', 'search', 'id', '', '', '_', ''),
(2, 'users', 'search', 'title', '', '', '_', ''),
(3, 'users', 'search', 'link', '', '', '_', '');

-- --------------------------------------------------------

--
-- Table structure for table `pma_designer_coords`
--

CREATE TABLE IF NOT EXISTS `pma_designer_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `x` int(11) DEFAULT NULL,
  `y` int(11) DEFAULT NULL,
  `v` tinyint(4) DEFAULT NULL,
  `h` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`db_name`,`table_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma_history`
--

CREATE TABLE IF NOT EXISTS `pma_history` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`,`db`,`table`,`timevalue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pma_pdf_pages`
--

CREATE TABLE IF NOT EXISTS `pma_pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  PRIMARY KEY (`page_nr`),
  KEY `db_name` (`db_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pma_recent`
--

CREATE TABLE IF NOT EXISTS `pma_recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma_recent`
--

INSERT INTO `pma_recent` (`username`, `tables`) VALUES
('root', '[{"db":"project","table":"votelist"},{"db":"users","table":"two"},{"db":"project","table":"temp"},{"db":"project","table":"pma_table_coords"},{"db":"project","table":"pma_userconfig"},{"db":"users","table":"users"},{"db":"users","table":"search"},{"db":"phpmyadmin","table":"pma_column_info"},{"db":"phpmyadmin","table":"pma_designer_coords"},{"db":"phpmyadmin","table":"pma_history"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma_relation`
--

CREATE TABLE IF NOT EXISTS `pma_relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  KEY `foreign_field` (`foreign_db`,`foreign_table`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma_table_coords`
--

CREATE TABLE IF NOT EXISTS `pma_table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float unsigned NOT NULL DEFAULT '0',
  `y` float unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma_table_info`
--

CREATE TABLE IF NOT EXISTS `pma_table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`db_name`,`table_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma_table_uiprefs`
--

CREATE TABLE IF NOT EXISTS `pma_table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`username`,`db_name`,`table_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma_tracking`
--

CREATE TABLE IF NOT EXISTS `pma_tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) unsigned NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`db_name`,`table_name`,`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma_userconfig`
--

CREATE TABLE IF NOT EXISTS `pma_userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma_userconfig`
--

INSERT INTO `pma_userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2016-01-03 15:30:08', '{"collation_connection":"utf8mb4_general_ci"}');
--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cds`
--

CREATE TABLE IF NOT EXISTS `cds` (
  `titel` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `interpret` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `jahr` int(11) DEFAULT NULL,
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `cds`
--

INSERT INTO `cds` (`titel`, `interpret`, `jahr`, `id`) VALUES
('Beauty', 'Ryuichi Sakamoto', 1990, 1),
('Goodbye Country (Hello Nightclub)', 'Groove Armada', 2001, 4),
('Glee', 'Bran Van 3000', 1997, 5);

-- --------------------------------------------------------

--
-- Table structure for table `mem1`
--

CREATE TABLE IF NOT EXISTS `mem1` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `gen` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `user` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pma_bookmark`
--

CREATE TABLE IF NOT EXISTS `pma_bookmark` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pma_column_info`
--

CREATE TABLE IF NOT EXISTS `pma_column_info` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin' AUTO_INCREMENT=73 ;

--
-- Dumping data for table `pma_column_info`
--

INSERT INTO `pma_column_info` (`id`, `db_name`, `table_name`, `column_name`, `comment`, `mimetype`, `transformation`, `transformation_options`) VALUES
(42, 'project', 'mem1', 'fname', '', '', '_', ''),
(43, 'project', 'mem1', 'lname', '', '', '_', ''),
(44, 'project', 'mem1', 'uname', '', '', '_', ''),
(45, 'project', 'mem1', 'gen', '', '', '_', ''),
(46, 'project', 'mem1', 'email', '', '', '_', ''),
(47, 'project', 'mem1', 'pass', '', '', '_', ''),
(48, 'project', 'mem1', 'user', '', '', '_', ''),
(49, 'project', 'votelist', 'id', '', '', '_', ''),
(52, 'project', 'votelist', 'op1', '', '', '_', ''),
(51, 'project', 'votelist', 'description', '', '', '_', ''),
(50, 'project', 'votelist', 'title', '', '', '_', ''),
(57, 'project', 'votelist', 'email', '', '', '_', ''),
(56, 'project', 'votelist', 'op5', '', '', '_', ''),
(55, 'project', 'votelist', 'op4', '', '', '_', ''),
(54, 'project', 'votelist', 'op3', '', '', '_', ''),
(53, 'project', 'votelist', 'op2', '', '', '_', ''),
(41, 'project', 'temp', 'user', '', '', '_', ''),
(40, 'project', 'temp', 'pass', '', '', '_', ''),
(36, 'project', 'temp', 'email', '', '', '_', ''),
(35, 'project', 'temp', 'gen', '', '', '_', ''),
(72, 'project', 'temp', 'uname', '', '', '_', ''),
(33, 'project', 'temp', 'lname', '', '', '_', ''),
(32, 'project', 'temp', 'fname', '', '', '_', ''),
(58, 'project', 'votelist', 'time', '', '', '_', ''),
(69, 'project', 'result', '5', '', '', '_', ''),
(68, 'project', 'result', '4', '', '', '_', ''),
(67, 'project', 'result', '3', '', '', '_', ''),
(66, 'project', 'result', '2', '', '', '_', ''),
(65, 'project', 'result', '1', '', '', '_', ''),
(70, 'project', 'result', 'id', '', '', '_', '');

-- --------------------------------------------------------

--
-- Table structure for table `pma_designer_coords`
--

CREATE TABLE IF NOT EXISTS `pma_designer_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `x` int(11) DEFAULT NULL,
  `y` int(11) DEFAULT NULL,
  `v` tinyint(4) DEFAULT NULL,
  `h` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`db_name`,`table_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma_history`
--

CREATE TABLE IF NOT EXISTS `pma_history` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`,`db`,`table`,`timevalue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pma_pdf_pages`
--

CREATE TABLE IF NOT EXISTS `pma_pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  PRIMARY KEY (`page_nr`),
  KEY `db_name` (`db_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pma_recent`
--

CREATE TABLE IF NOT EXISTS `pma_recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma_recent`
--

INSERT INTO `pma_recent` (`username`, `tables`) VALUES
('root', '[{"db":"project","table":"result"},{"db":"project","table":"votelist"},{"db":"project","table":"temp"},{"db":"project","table":"mem1"},{"db":"project","table":"last"},{"db":"project","table":"login"},{"db":"project","table":"user"},{"db":"project","table":"userlist"},{"db":"project","table":"sign"},{"db":"phpmyadmin","table":"pma_column_info"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma_relation`
--

CREATE TABLE IF NOT EXISTS `pma_relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  KEY `foreign_field` (`foreign_db`,`foreign_table`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma_table_coords`
--

CREATE TABLE IF NOT EXISTS `pma_table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float unsigned NOT NULL DEFAULT '0',
  `y` float unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma_table_info`
--

CREATE TABLE IF NOT EXISTS `pma_table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`db_name`,`table_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma_table_uiprefs`
--

CREATE TABLE IF NOT EXISTS `pma_table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`username`,`db_name`,`table_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma_table_uiprefs`
--

INSERT INTO `pma_table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'project', 'temp', '{"sorted_col":"`temp`.`uname` ASC"}', '2015-12-18 22:08:15');

-- --------------------------------------------------------

--
-- Table structure for table `pma_tracking`
--

CREATE TABLE IF NOT EXISTS `pma_tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) unsigned NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`db_name`,`table_name`,`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma_userconfig`
--

CREATE TABLE IF NOT EXISTS `pma_userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma_userconfig`
--

INSERT INTO `pma_userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2015-11-23 19:44:51', '{"collation_connection":"utf8mb4_general_ci"}');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `id` varchar(11) NOT NULL,
  `1` varchar(11) NOT NULL DEFAULT '0',
  `2` varchar(11) NOT NULL DEFAULT '0',
  `3` varchar(11) NOT NULL DEFAULT '0',
  `4` varchar(11) NOT NULL DEFAULT '0',
  `5` varchar(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `1`, `2`, `3`, `4`, `5`) VALUES
('40', '1', '1', '1', '1', '1'),
('41', '1', '1', '1', '1', '1'),
('42', '1', '1', '1', '1', '1'),
('43', '0', '0', '0', '0', '0'),
('44', '2', '2', '8', '1', '1'),
('45', '4', '4', '3', '3', '6'),
('47', '7', '8', '2', '4', '1'),
('48', '9', '7', '10', '8', '4'),
('49', '2', '4', '2', '3', '1'),
('50', '0', '0', '5', '1', '0'),
('51', '0', '0', '0', '0', '0'),
('52', '1', '0', '1', '0', '0'),
('54', '1', '0', '2', '1', '0'),
('55', '1', '2', '0', '1', '0'),
('56', '0', '0', '1', '0', '0'),
('57', '0', '0', '0', '0', '0'),
('58', '0', '1', '0', '0', '0'),
('59', '0', '0', '0', '0', '0'),
('60', '1', '0', '0', '0', '0'),
('61', '1', '0', '1', '0', '0'),
('62', '0', '0', '0', '0', '0'),
('63', '1', '0', '0', '0', '0'),
('65', '0', '1', '1', '0', '0'),
('66', '0', '0', '0', '0', '0'),
('67', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE IF NOT EXISTS `temp` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `gen` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `user` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=98 ;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`fname`, `lname`, `uname`, `gen`, `email`, `pass`, `user`) VALUES
('ukpaul', 'kuet', '', 'male', 'ukpaulbd@gmail.com', '11111111', 73),
('manik', 'uddin', '', 'male', 'rhrhrdh@gmail.com', '11111111', 74),
('tamzid', 'Rahman', '', 'male', 'oronno@gmail.com', '1234', 90),
('Zarif', 'haque', '', 'male', 'Zarif@gmail.com', '1234', 91),
('ahshan', 'haque', '', 'male', 'haque@yahoo.com', '1234', 92),
('Prodhi', 'Parisha', '', 'male', 'prodhi@gmail.com', '1111', 93),
('manik', 'uddin', '', 'male', 'manik@gmail.com', '1234', 94),
('uk', 'paul', '', 'male', 'paul@gmail.com', '1234', 95),
('oro', 'nno', '', 'male', 'tamzid@gmail.com', '1111', 96),
('tasfia', 'mashiat', '', 'female', 'tasfia@yahoo.com', '1234', 97);

-- --------------------------------------------------------

--
-- Table structure for table `user_pwd`
--

CREATE TABLE IF NOT EXISTS `user_pwd` (
  `name` char(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `pass` char(32) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user_pwd`
--

INSERT INTO `user_pwd` (`name`, `pass`) VALUES
('xampp', 'wampp');

-- --------------------------------------------------------

--
-- Table structure for table `votelist`
--

CREATE TABLE IF NOT EXISTS `votelist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `op1` varchar(20) NOT NULL,
  `op2` varchar(20) NOT NULL,
  `op3` varchar(20) NOT NULL,
  `op4` varchar(20) NOT NULL,
  `op5` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `votelist`
--

INSERT INTO `votelist` (`id`, `title`, `description`, `op1`, `op2`, `op3`, `op4`, `op5`, `email`, `time`) VALUES
(47, 'Who is the best Actress in Bollywood', 'Bollywood female celebrities are stirring and striking with incredible worldwide fans, these alluring and stunning beauties are equivalent and very promising and talented as well contrary to Indian films actors.Now share your own opinion', ' Deepika Padukone', ' Priyanka Chopra', 'Kangana Ranaut', 'Katrina Kaif', ' Sonam Kapoor', 'ukpaulbd@gmail.com', 'December 18, 2015, 7:31 pm'),
(48, 'Who is the best crickter in Bangladesh', 'The cricketing culture in Bangladesh is not that older than any other test playing nations. Yet, the team is coming up in the aristocratic level with the performance of some talented players. These players, with their dexterity and performance level, have become star in world cricket', 'Tamim', 'Sakib', 'Taskin', 'Masrafee', 'Soumay', 'ukpaulbd@gmail.com', 'December 18, 2015, 7:35 pm'),
(49, 'What is your favourite Online Judge', 'I know,Coders are used to solve problem more than one judge.But i want to know that amon thm which is your most favourite ', 'UVA', 'Codeforces', 'CodeMarshal', 'LightOJ', 'TopCoder', 'ukpaulbd@gmail.com', 'December 21, 2015, 10:42 am'),
(54, 'Who are the best friends In CSE 2K13', 'bla bla blaaaa', 'tasfia-tamanna', 'jis-sharif', 'oronno-xenon', 'sajal-shauqi', 'asif-sakif', 'tasfia@yahoo.com', 'January 6, 2016, 9:39 am'),
(58, 'Who is your favourite male Singer of Bollywood', 'Among All of them,i want to know your choice', 'Arijit singh', 'Rahat Fateh Ali khan', 'Saan', 'Atif Aslam', 'Sonu Nigam', 'oronno@gmail.com', 'January 19, 2016, 6:22 pm'),
(59, 'Who is your favourite female Singer ', 'Among All of them,i want to know your choice', 'Shreya Ghosal', 'Sunidhi chuohan', 'Anushka Manchanda', 'Shalmali Kholgade', 'Palak Mucchal', 'oronno@gmail.com', 'January 19, 2016, 6:25 pm'),
(60, 'Your Most Fvrt bengali food is', 'Among All of them,i want to know your choice', 'Chingri Malai Curry', 'Sorshe ilish', 'Dhokker Dalna AND Lu', 'Bhapa Alu', '', 'oronno@gmail.com', 'January 19, 2016, 6:30 pm'),
(61, 'Foods of which country we like most', 'Among All of them,i want to know your choice', 'Bangladesh', 'China', 'Thailand', 'India', 'Indonesia', 'oronno@gmail.com', 'January 19, 2016, 6:32 pm'),
(62, 'Who is Best cricketer of the World', 'give your opinion', 'Sakib Al Hasan', 'Virat Kholi', 'AB Divilers', 'Masrafee Mortaza', 'Sachine Tandulkar', 'ukpaulbd@gmail.com', 'January 19, 2016, 6:34 pm'),
(65, 'Which work you like most', 'tjtjtntnt ', 'Ip', 'java', 'android', 'hardware', '', 'oronno@gmail.com', 'January 27, 2016, 3:34 pm');
--
-- Database: `test`
--
--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE IF NOT EXISTS `search` (
  `id` int(100) NOT NULL,
  `title` varchar(300) NOT NULL,
  `link` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `title`, `link`) VALUES
(1, 'Academic Advisory', 'notredame.ac.bd'),
(2, 'Academic Assistance', 'notredame.ac.bd'),
(3, 'Academic Calendars', 'notredame.ac.bd'),
(4, 'Academics Office', 'notredame.ac.bd'),
(5, 'Adult Learners', 'notredame.ac.bd'),
(6, 'Alumni Chapters', 'notredame.ac.bd'),
(7, 'Alumni Events', 'notredame.ac.bd'),
(8, 'Campus Life At a Glance', 'notredame.ac.bd'),
(9, 'Campus Recreation', 'notredame.ac.bd'),
(10, 'Campus Safety &amp; Security', 'notredame.ac.bd');

-- --------------------------------------------------------

--
-- Table structure for table `two`
--

CREATE TABLE IF NOT EXISTS `two` (
  `fname` varchar(50) NOT NULL,
  `roll` int(20) NOT NULL,
  `batch` int(10) NOT NULL,
  `phone` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`fname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `two`
--

INSERT INTO `two` (`fname`, `roll`, `batch`, `phone`, `email`, `username`, `password`) VALUES
('ashik', 12345, 1964, 1234, 'ashik@gmail.com', 'ashik', '3456'),
('f', 12, 1971, 3456, 'f@gmail.com', 'fg', '8963'),
('ig', 2345, 1969, 123456, 'h@gmail.com', 'ig', '7050'),
('manik uddin', 1307007, 1972, 1797074749, 'manik@gmail.com', 'manik', '12345'),
('Masum', 1207012, 1972, 123123, 'masumalmasba@gmail.com', 'Masum Al Mesbah', '12345'),
('mehedi', 1201003, 1964, 3468989, 'mehedi@gmail.com', 'mehedi', '6789'),
('munna', 23, 1968, 34567, 'munna@gmail.com', 'munna', '1234'),
('nur', 23, 1972, 234567890, 'nur@gmail.com', 'nur', 'manik'),
('s', 123, 1973, 123, 't@gmail.cos', 's', '2345'),
('sagar', 12345, 2033, 1234567890, 'sagar@gmail.com', 'sagor', '1234'),
('t', 12345, 1955, 123456789, 't@gmail.com', 't', '5678'),
('tarek', 1201007, 1964, 346843, 'tarek@gmail.com', 'tarek', 'manik'),
('uk', 5, 1965, 5, 'uk@gmail.com', 'grdgr', '1234'),
('v', 123, 1972, 12347, 'v@gmail.vom', 'v', '1357'),
('yy3ur3y', 345464, 1973, 567890098, 'y@gmail.com', 'yyyy', '8901');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_pass`, `user_email`) VALUES
(1, 'masum', '1207012', 'masum@gmail.com'),
(2, 'manik', '12345', 'manik@gmail.com'),
(3, 'onik', '1290', 'onik@gmail.com'),
(4, 'manik', '123456', 'maanik@gmail.com'),
(5, 'it', '567', 'it@gmail.com'),
(6, 'my', '12345', 'my@gmail.com'),
(7, 'ashik', '1307017', 'ashik@gmail.com'),
(8, 'ami', '45678', 'ami@gmail.com'),
(9, 'qwer', '3456', 'qwer@gmail.com'),
(10, 'hy', '123', 'hy@gmail.com'),
(11, 'jk', '123', 'jk@gmail.com'),
(12, 'anik', '1407003', 'anik@gmail.com'),
(13, 'iugeruvw', '34567', 'qgcc@gmail.com'),
(14, 'shahin', '1321004', 'shahin@gmail.com'),
(15, 'manik', '123', 'iut@gmail.com'),
(16, 'shakil', '1301001', 'shakil@gmail.com'),
(17, 'toha', '14001', 'toha@gmail.com'),
(18, 'omok', '12367', 'omok@gmail.com'),
(19, 'iqbal', '1234', 'iqbal@gmail.com'),
(20, 'mahmud', '1456', '1@gmail.com'),
(21, 'dtfgh', '6789', 'fghj@gmail.com'),
(22, 'qwwe', '789', 'qw@gmail.com'),
(23, 'amr', '7890', 'amar@gmail.com'),
(24, 'rashid', '1357', 'rashid@gmail.com');
--
-- Database: `webauth`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_pwd`
--

CREATE TABLE IF NOT EXISTS `user_pwd` (
  `name` char(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `pass` char(32) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user_pwd`
--

INSERT INTO `user_pwd` (`name`, `pass`) VALUES
('xampp', 'wampp');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
