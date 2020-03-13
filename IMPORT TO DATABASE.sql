-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 24, 2019 at 04:01 PM
-- Server version: 10.1.40-MariaDB-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `falizusm_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `backups`
--

CREATE TABLE `backups` (
  `backup_id` int(11) NOT NULL,
  `owner_id` text NOT NULL,
  `status` text NOT NULL,
  `server_id` text NOT NULL,
  `download_link` text NOT NULL,
  `time` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `backups`
--

INSERT INTO `backups` (`backup_id`, `owner_id`, `status`, `server_id`, `download_link`, `time`) VALUES


-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `level` int(11) NOT NULL,
  `ram_balance` int(11) NOT NULL,
  `max_disk` int(11) NOT NULL,
  `max_servers` int(11) NOT NULL,
  `max_cores` int(11) NOT NULL,
  `title` text NOT NULL,
  `price` int(11) NOT NULL,
  `ismonthly` int(11) NOT NULL,
  `makeiteasytoedit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`level`, `ram_balance`, `max_disk`, `max_servers`, `max_cores`, `title`, `price`, `ismonthly`, `makeiteasytoedit`) VALUES
(0, 10000, 10000, 10, 4, 'Free', 0, 1, 1),

-- --------------------------------------------------------

--
-- Table structure for table `payment_handlers`
--

CREATE TABLE `payment_handlers` (
  `id` text NOT NULL,
  `parameters` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment_handlers`
--

INSERT INTO `payment_handlers` (`id`, `parameters`) VALUES

-- --------------------------------------------------------

--
-- Table structure for table `servers`
--

CREATE TABLE `servers` (
  `id` int(11) NOT NULL,
  `pterodactyl_serverid` int(11) NOT NULL,
  `owner_id` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servers`
--

INSERT INTO `servers` (`id`, `pterodactyl_serverid`, `owner_id`) VALUES

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `discord_id` text NOT NULL,
  `level` int(11) NOT NULL,
  `extra_ram` int(11) NOT NULL,
  `extra_servers` int(11) NOT NULL,
  `extra_cores` int(11) NOT NULL,
  `extra_disk` int(11) NOT NULL,
  `pterodactyl_userid` int(11) NOT NULL,
  `pterodactyl_username` text NOT NULL,
  `pterodactyl_password` text NOT NULL,
  `register_ip` text NOT NULL,
  `lastlogin_ip` text NOT NULL,
  `plan_expiry` int(255) NOT NULL,
  `lastbackup_time` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `discord_id`, `level`, `extra_ram`, `extra_servers`, `extra_cores`, `extra_disk`, `pterodactyl_userid`, `pterodactyl_username`, `pterodactyl_password`, `register_ip`, `lastlogin_ip`, `plan_expiry`, `lastbackup_time`) VALUES

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backups`
--
ALTER TABLE `backups`
  ADD PRIMARY KEY (`backup_id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`makeiteasytoedit`);

--
-- Indexes for table `servers`
--
ALTER TABLE `servers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `backups`
--
ALTER TABLE `backups`
  MODIFY `backup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `makeiteasytoedit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `servers`
--
ALTER TABLE `servers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3884;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1403;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
