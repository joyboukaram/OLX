-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 13, 2018 at 06:03 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olx`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminusers`
--

CREATE TABLE `adminusers` (
  `idadminusers` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adminusers`
--

INSERT INTO `adminusers` (`idadminusers`, `username`, `password`, `name`) VALUES
(1, 'joy', '123', 'joy');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `idads` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` text,
  `location` varchar(45) DEFAULT NULL,
  `categorie` varchar(45) DEFAULT NULL,
  `image` text,
  `seller` varchar(45) DEFAULT NULL,
  `delivery` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `approved` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`idads`, `name`, `price`, `description`, `location`, `categorie`, `image`, `seller`, `delivery`, `status`, `approved`) VALUES
(6, 'charbel', 1000, 'description', 'ew', 'accessories', 'uploads/charbel.png ', 'joy@mail.com', 1, 0, 1),
(7, 'joy', 1000, 'wew', 'loc', 'accessories', 'uploads/laptop.png ', 'joy@mail.com', 0, 0, 1),
(8, 'karim', 1000, 'karim', 'Beirut', 'children', 'uploads/anonymous.jpg ', 'karim@mail.com', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `firstName` varchar(45) DEFAULT NULL,
  `lastName` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `gender` tinyint(4) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `birthdate` varchar(45) DEFAULT NULL,
  `cart` varchar(45) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `delivery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idusers`, `firstName`, `lastName`, `email`, `password`, `gender`, `address`, `birthdate`, `cart`, `image`, `delivery`) VALUES
(5, 'joy', 'Bou Karam', 'joy@mail.com', 'b113405b6f9114b2abac7676f6868df33b0dde53f2e0ddd0f5340392563ab5f3', 1, 'jounieh', '1998-02-17', NULL, 'uploads/carou1.jpg ', ''),
(6, 'karim', 'majed', 'karim@mail.com', 'be879f7549cc80c04241dcfd933c6278c3a711ddc530961071f62c57324d6a9e', 0, 'beirut', '1999-01-08', ' charbel', 'uploads/dress.jpg ', ''),
(7, 'ramy', 'ziade', 'ramy@mail.com', '4b489bcbed7850549b713014e2e9c602d23e2657c73c4f1b453d42f3c27d3b44', 0, 'jounieh', '1998-04-29', '   charbel', 'uploads/military.jpg ', ' charbel charbel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminusers`
--
ALTER TABLE `adminusers`
  ADD PRIMARY KEY (`idadminusers`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`idads`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `idads` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
