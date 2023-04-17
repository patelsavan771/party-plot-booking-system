-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220622.7403cffab4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2022 at 10:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `party_plot`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `booking_date` date NOT NULL,
  `guest` int(4) NOT NULL,
  `city` varchar(50) NOT NULL,
  `decoration` varchar(15) NOT NULL,
  `food` varchar(15) NOT NULL,
  `planner` int(1) NOT NULL,
  `payment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`fname`, `lname`, `phone`, `email`, `address`, `booking_date`, `guest`, `city`, `decoration`, `food`, `planner`, `payment`) VALUES
('savan', 'Patel', '9876541230', 'savanpatel@gmail.com', 'b-404, tirupati shahibag, rrr, mehsana', '2022-08-01', 850, 'Mehsana', 'theme2', 'punjabi', 1, 468000),
('Jeel', 'Patel', '9632587415', 'jeelpatel@gmail.com', 'b-xx, tirupati, rrr, mehsana', '2022-06-25', 150, 'Ahmedabad', 'theme1', 'south indian', 0, 200000);

-- --------------------------------------------------------

--
-- Table structure for table `dummy`
--

CREATE TABLE `dummy` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `booking_date` date NOT NULL,
  `guest` int(4) NOT NULL,
  `city` varchar(50) NOT NULL,
  `decoration` int(1) NOT NULL,
  `food` int(1) NOT NULL,
  `planner` int(1) NOT NULL,
  `payment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `date` date NOT NULL,
  `message` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`name`, `email`, `phone`, `date`, `message`) VALUES
('savan', 'tryplease124@gmail.com', 2147483647, '2022-05-01', 0),
('savan', 'tryplease124@gmail.com', 2147483647, '2022-05-01', 0),
('savan', 'tryplease124@gmail.com', 2147483647, '2022-05-01', 0),
('asdf', 'jmpatel7358@gmail.com', 2147483647, '2022-05-08', 0),
('', '', 0, '2022-05-07', 0),
('', '', 0, '2022-04-29', 0),
('', '', 0, '0000-00-00', 0),
('Jeel', 'jmpatel7358@gmail.com', 2147483647, '2022-05-22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `pass`, `name`, `phone`) VALUES
('j', 'asdf', 'Jeel', ''),
('chintan12@gmail.com', '123', 'Chintan', ''),
('asdf', 'asdf', 'asdf', ''),
('sa1', 'qwerty', 'Savan', ''),
('jeel', 'asdf', 'jeel', ''),
('asdf', 'asdf', 'asdf', ''),
('asdf', 'asdf', 'asdf', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



