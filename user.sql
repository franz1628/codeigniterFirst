-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2023 at 05:45 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniterfirst`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `codigo` varchar(30) NOT NULL,
  `nombres` varchar(60) NOT NULL,
  `apellidoPaterno` varchar(60) NOT NULL,
  `apellidoMaterno` varchar(60) NOT NULL,
  `password` varchar(120) NOT NULL,
  `password2` varchar(120) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `idCargo` int(11) NOT NULL DEFAULT 1,
  `estado` int(11) NOT NULL DEFAULT 1,
  `idTipoDocumento` int(11) NOT NULL DEFAULT 1,
  `nroDocumento` varchar(15) NOT NULL,
  `cod_zona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `codigo`, `nombres`, `apellidoPaterno`, `apellidoMaterno`, `password`, `password2`, `email`, `telefono`, `created_at`, `updated_at`, `idCargo`, `estado`, `idTipoDocumento`, `nroDocumento`, `cod_zona`) VALUES
(1, '1', 'Franz', 'Gualambo', 'Giraldo', '$2y$10$1dBcNrH1W0coqx/IgogMeOjddbvV0W7Dk9QU2KC9Je6CZG3Ly5DWC', '12345678', 'gualambo@gmail.com', '99887799', '2022-08-17 02:09:44', '2022-08-17 02:09:44', 4, 1, 1, '44665544', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `idCargo_cargo` (`idCargo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
