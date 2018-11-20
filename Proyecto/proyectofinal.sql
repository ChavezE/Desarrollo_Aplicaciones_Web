-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 19, 2018 at 11:21 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyectofinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(10) UNSIGNED NOT NULL,
  `UserID` int(10) UNSIGNED NOT NULL,
  `PlannerID` int(10) UNSIGNED NOT NULL,
  `Cost` float UNSIGNED DEFAULT NULL,
  `Quantity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `UserID`, `PlannerID`, `Cost`, `Quantity`) VALUES
(1, 8, 1, 299, 1),
(2, 9, 4, 598, 2),
(3, 10, 3, 1495, 5),
(4, 11, 3, 299, 1),
(5, 13, 1, 1495, 5),
(6, 10, 1, 299, 1),
(7, 14, 1, 299, 1),
(8, 14, 3, 299, 1),
(9, 15, 3, 299, 1),
(10, 16, 6, 66378, 222);

-- --------------------------------------------------------

--
-- Table structure for table `planners`
--

CREATE TABLE `planners` (
  `PlannerID` int(10) UNSIGNED NOT NULL,
  `imagePath` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `Color` varchar(50) DEFAULT NULL,
  `numOfPages` int(10) UNSIGNED DEFAULT NULL,
  `spiralBind` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `planners`
--

INSERT INTO `planners` (`PlannerID`, `imagePath`, `price`, `description`, `Color`, `numOfPages`, `spiralBind`) VALUES
(1, 'img/catalogo/9.png', 299, 'Hojas con rocío de la mañana.', 'Gris', 300, 1),
(3, 'img/catalogo/2.png', 299, 'Mon ami Charly Chaplin.', 'Crema', 300, 1),
(4, 'img/catalogo/3.jpg', 299, 'Polvo Lunar.', 'Gris', 300, 1),
(5, 'img/catalogo/4.png', 299, 'Ciudad Pastel.', 'Gris', 300, 1),
(6, 'img/catalogo/5.png', 299, 'Rey Bohemio.', 'Gris', 300, 1),
(7, 'img/catalogo/6.png', 299, 'Ciudad de Noche.', 'Crema', 300, 1),
(8, 'img/catalogo/7.png', 299, 'Crayones.', 'Crema', 300, 1),
(9, 'img/catalogo/8.png', 299, 'Café.', 'Crema', 300, 1),
(10, 'img/catalogo/1.jpg', 299, 'Memorias grises.', 'Crema', 300, 1),
(11, 'img/catalogo/1.jpg', 299, 'Memorias grise COPIA', 'Crema', 300, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) UNSIGNED NOT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Username`, `Password`, `Name`, `LastName`) VALUES
(8, 'jorgeosvaldoav@gmail.com', '1', 'Jorge Osvaldo', 'Alvarez Valdez'),
(9, 'emilio@web.com', '1234', 'Emilio ', 'Chavez Madero'),
(10, 'hec@a.com', '1', 'Hector', 'Chavez MMMM'),
(11, 'jorgeosvaldoav@gmail.xo', 'a', 'Alem', 'C'),
(12, 'eric@g.com', 'a', 'Eric', 'G'),
(13, 'de@g.com', 'a', 'Deya', 'A'),
(14, 'eug@gmail.com', '123', 'Eugenio', 'S'),
(15, 'elias@bb.com', '1234', 'Elias', 'M'),
(16, 'sebas@a.com', '123', 'Sebas', 'Gonzalez');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `rel_orders_users` (`UserID`),
  ADD KEY `rel_orders_planner` (`PlannerID`);

--
-- Indexes for table `planners`
--
ALTER TABLE `planners`
  ADD PRIMARY KEY (`PlannerID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `planners`
--
ALTER TABLE `planners`
  MODIFY `PlannerID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `rel_orders_planner` FOREIGN KEY (`PlannerID`) REFERENCES `planners` (`PlannerID`),
  ADD CONSTRAINT `rel_orders_users` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
