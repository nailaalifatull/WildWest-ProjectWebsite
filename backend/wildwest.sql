-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2025 at 03:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wildwest`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `rating_value` decimal(3,2) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `author`, `image`, `rating`, `rating_value`, `description`, `genre`, `slug`) VALUES
(1, 'Jonah Hex: Two-Gun Mojo', 'Joe R. Lansdale', 'buku1.png', 5, 3.99, 'Now avaible as a soft cover trade paperback:\nA gorgeous original graphic novel from the bestselling creators of KILL OR BE KILLED, MY HEROES HAVE ALWAYS BEEN JUNKIES, and CRIMINAL.\',\ngenre = \'Comics, Graphic Novel, Westerns, Crime.', 'Comics, Graphic Novel Westerns, Horror, Weird West, Fiction', 'jonah-hex'),
(2, 'The Sixth Gun Omnibus Vol. 1', 'Cullen Bunn', 'buku2.png', 4, 4.12, 'After the Civil War, the sinister Oliander Hume hunts for a powerful\r\n                magical revolver—now in the hands of Becky Montcrief and gunslinger\r\n                Drake Sinclair—pulling them into a deadly fight for legendary power.', 'Comics, Graphic Novel, Westerns, Horror, Fantasy.', 'sixth-gun'),
(3, 'All-Star Western, Volume 1: Guns and Gotham', 'Ed Brubaker', 'buku3.png', 4, 4.51, 'Now avaible as a soft cover trade paperback:\r\nA gorgeous original graphic novel from the bestselling creators of KILL OR BE KILLED, MY HEROES HAVE ALWAYS BEEN JUNKIES, and CRIMINAL.', 'Comics, Graphic Novel, Westerns, Crime.', 'all-star'),
(4, 'Pulp', 'Sean Philips', 'buku4.png', 4, 4.51, 'Now avaible as a soft cover trade paperback:\r\nA gorgeous original graphic novel from the bestselling creators of KILL OR BE KILLED, MY HEROES HAVE ALWAYS BEEN JUNKIES, and CRIMINAL.', 'Comics, Graphic Novel, Westerns, Crime.', 'pulp');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `created_at`) VALUES
(1, 'Aufa Salsabila Algifari', 'ofaalgi@gmail.com', '$2y$10$zn4KUOpsNKHYrDzDirmLMeQryCcjbeDNP/sSAuDp3cBO3Y1ggCDRm', '2025-12-13 07:27:58'),
(2, 'Almira Hufaida Azaria', 'almira@gmail.com', '$2y$10$1VMJQvZz.nP2kuNh8/8ne.UeG8tfDpQjwuXEdgNZ0t9qJu0B6F3tW', '2025-12-13 07:30:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
