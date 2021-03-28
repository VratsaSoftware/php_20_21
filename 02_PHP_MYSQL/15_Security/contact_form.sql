-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Време на генериране: 28 март 2021 в 21:07
-- Версия на сървъра: 10.4.17-MariaDB
-- Версия на PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данни: `contact_form`
--

-- --------------------------------------------------------

--
-- Структура на таблица `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `message` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `messages`
--

INSERT INTO `messages` (`message_id`, `name`, `email`, `phone`, `message`, `created_at`, `deleted_at`) VALUES
(4, 'Niki1', 'nicky@example.com', '2342142421', 'Message from Nicky1', '2021-02-28 15:03:22', NULL),
(5, 'Test2', 'test@example.com', '2222222222', 'fasfafasfas', '2021-02-28 15:04:18', NULL),
(6, 'afsfafas', 'fasfsafsaas', '2222222222', 'fsfsdfsdsfd', '2021-02-28 15:05:01', NULL),
(7, 'asffsafsa', 'aaaa@bbb.bg', '1234567891', 'fasfasfasfasfas', '2021-02-28 15:05:59', NULL),
(9, 'tesaaaa', 'test', 'test', 'test', '2021-03-28 14:37:04', NULL),
(10, 'test_2803', 'aaa@example.com', '421421412', 'dsadasads', '2021-03-28 16:43:37', NULL),
(11, 'tewtwewte', 'swassa@aaa.bg', 'adsdassda', 'dsadasddsa', '2021-03-28 16:45:03', NULL),
(12, 'Message ala bala<script>console.log(\"hacked\");</script>', 'aaaa@aaa.bg', '23412412', 'afafsfsafsa', '2021-03-28 16:47:50', NULL),
(13, 'alert(&#34;Hacked!&#34;);', 'aaaa@bbb.bg', '412421412', 'asddssdaasd', '2021-03-28 17:26:54', NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'test@example.com', 'test');

--
-- Indexes for dumped tables
--

--
-- Индекси за таблица `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Индекси за таблица `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
