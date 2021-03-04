-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2021 at 08:25 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipes`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `product_category_id` int(11) DEFAULT NULL,
  `product_price` decimal(7,2) NOT NULL,
  `product_calories` int(6) DEFAULT 10,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_category_id`, `product_price`, `product_calories`, `date_deleted`) VALUES
(1, 'пилешко месо', 3, '7.00', 125, NULL),
(2, 'прясно мляко', 4, '2.00', 178, NULL),
(3, 'яйца', 4, '0.20', 65, NULL),
(4, 'брашно', 6, '1.00', 10, NULL),
(5, 'захар', 6, '1.30', 10, NULL),
(6, 'сода', 7, '1.00', 10, NULL),
(7, 'сол', 6, '0.70', 10, NULL),
(8, 'кисело мляко', 4, '1.00', 80, NULL),
(9, 'плодово кисело мляко', 4, '1.50', 200, NULL),
(11, 'червен пипер', 7, '2.00', 10, NULL),
(12, 'масло', 4, '2.90', 180, NULL),
(14, 'бананов сок', 8, '4.00', 80, NULL),
(15, 'ябълков сок', 8, '2.50', 40, NULL),
(16, 'product 1', NULL, '25.00', 125, NULL),
(17, 'мандарина', NULL, '2.00', 50, NULL),
(18, 'мандарина', NULL, '2.00', 50, '2021-03-04'),
(19, 'мандарина', NULL, '2.00', 50, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `product_category_id` int(11) NOT NULL,
  `product_category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`product_category_id`, `product_category_name`) VALUES
(1, 'плодове'),
(2, 'зеленчуци'),
(3, 'месо'),
(4, 'млечни'),
(5, 'яйца'),
(6, 'сухи съставки'),
(7, 'подправки'),
(8, 'сокове\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `recipe_id` int(11) NOT NULL,
  `recipe_name` varchar(250) NOT NULL,
  `prep_description` text NOT NULL,
  `prep_time` int(4) NOT NULL,
  `recipe_category_id` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `date_deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`recipe_id`, `recipe_name`, `prep_description`, `prep_time`, `recipe_category_id`, `date_created`, `date_deleted`) VALUES
(1, 'Таратор', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in quam sit amet orci ultrices euismod non at elit. Fusce orci lorem, lacinia ac ornare quis, scelerisque eget tellus. Cras faucibus leo vitae nisl luctus, ut gravida odio lobortis. Sed elementum ex sit amet convallis condimentum. Vivamus interdum ultricies enim vel fermentum. Cras in eros enim. Pellentesque eget nunc eget ante placerat laoreet vel et dui. Nulla a urna vitae sapien facilisis pellentesque euismod a massa. Maecenas efficitur viverra lorem vel ullamcorper. Proin dapibus ex libero, sed luctus ex efficitur vel. Aliquam dapibus accumsan nisl, ut tristique neque auctor at. Aliquam dignissim mi sit amet auctor sodales. In eu congue urna. Fusce vel gravida est. Duis eget mauris quis tortor gravida vestibulum.\r\n\r\nPraesent bibendum posuere feugiat. Praesent vitae leo in sem fringilla volutpat. Nunc quis enim lobortis, semper orci id, accumsan elit. In hac habitasse platea dictumst. Aenean placerat sem tempor tincidunt tincidunt. Praesent quis blandit tellus, et iaculis massa. Praesent eu sagittis nunc, rutrum fermentum libero. Sed congue eros sed lacus volutpat facilisis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris mauris quam, elementum at vulputate at, lacinia nec magna.\r\n\r\nDonec eu tellus non nulla semper maximus. Praesent laoreet dapibus pharetra. Morbi et arcu quis felis auctor laoreet ut vel velit. Etiam ornare lorem quis ex egestas, eu faucibus odio mollis. Fusce gravida pellentesque ante. In id nulla lobortis, tristique lectus vitae, tristique ex. Maecenas sodales pretium commodo. Aliquam id sapien lobortis, hendrerit neque quis, ultricies nulla. Ut ut egestas nisi. Suspendisse ut interdum ligula.\r\n\r\nMaecenas molestie vestibulum luctus. Sed nunc diam, finibus pretium ante vitae, fringilla laoreet libero. Cras mollis neque in nibh cursus, et rhoncus sem molestie. Nam in viverra nunc, a hendrerit sem. Sed cursus vitae purus eu vestibulum. Phasellus vitae massa in nisi maximus volutpat. Fusce dolor est, porta non massa eu, efficitur auctor nisi. Duis sed tellus ornare, bibendum odio quis, pellentesque urna. Donec vel facilisis dui.\r\n\r\nQuisque vitae justo lobortis, interdum libero sollicitudin, egestas ligula. Vivamus id interdum libero, at rutrum libero. Morbi felis eros, suscipit et augue nec, rutrum dapibus magna. Suspendisse potenti. Etiam pretium et lorem sit amet fermentum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla congue est vitae iaculis fringilla. Cras dapibus ante lorem, sed mollis ante posuere non. Phasellus quis metus pellentesque, pretium tortor eu, pellentesque risus. Integer eget augue porttitor, eleifend ipsum nec, tincidunt nisi. Proin at ante nec purus ullamcorper dapibus nec interdum sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id ipsum libero. Ut ornare eros a urna tempus volutpat. Nulla massa eros, dapibus quis consectetur in, gravida a tortor. ', 10, 1, '2021-02-18', NULL),
(2, 'палачинки', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in quam sit amet orci ultrices euismod non at elit. Fusce orci lorem, lacinia ac ornare quis, scelerisque eget tellus. Cras faucibus leo vitae nisl luctus, ut gravida odio lobortis. Sed elementum ex sit amet convallis condimentum. Vivamus interdum ultricies enim vel fermentum. Cras in eros enim. Pellentesque eget nunc eget ante placerat laoreet vel et dui. Nulla a urna vitae sapien facilisis pellentesque euismod a massa. Maecenas efficitur viverra lorem vel ullamcorper. Proin dapibus ex libero, sed luctus ex efficitur vel. Aliquam dapibus accumsan nisl, ut tristique neque auctor at. Aliquam dignissim mi sit amet auctor sodales. In eu congue urna. Fusce vel gravida est. Duis eget mauris quis tortor gravida vestibulum.\r\n\r\nPraesent bibendum posuere feugiat. Praesent vitae leo in sem fringilla volutpat. Nunc quis enim lobortis, semper orci id, accumsan elit. In hac habitasse platea dictumst. Aenean placerat sem tempor tincidunt tincidunt. Praesent quis blandit tellus, et iaculis massa. Praesent eu sagittis nunc, rutrum fermentum libero. Sed congue eros sed lacus volutpat facilisis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris mauris quam, elementum at vulputate at, lacinia nec magna.\r\n\r\nDonec eu tellus non nulla semper maximus. Praesent laoreet dapibus pharetra. Morbi et arcu quis felis auctor laoreet ut vel velit. Etiam ornare lorem quis ex egestas, eu faucibus odio mollis. Fusce gravida pellentesque ante. In id nulla lobortis, tristique lectus vitae, tristique ex. Maecenas sodales pretium commodo. Aliquam id sapien lobortis, hendrerit neque quis, ultricies nulla. Ut ut egestas nisi. Suspendisse ut interdum ligula.\r\n\r\nMaecenas molestie vestibulum luctus. Sed nunc diam, finibus pretium ante vitae, fringilla laoreet libero. Cras mollis neque in nibh cursus, et rhoncus sem molestie. Nam in viverra nunc, a hendrerit sem. Sed cursus vitae purus eu vestibulum. Phasellus vitae massa in nisi maximus volutpat. Fusce dolor est, porta non massa eu, efficitur auctor nisi. Duis sed tellus ornare, bibendum odio quis, pellentesque urna. Donec vel facilisis dui.\r\n\r\nQuisque vitae justo lobortis, interdum libero sollicitudin, egestas ligula. Vivamus id interdum libero, at rutrum libero. Morbi felis eros, suscipit et augue nec, rutrum dapibus magna. Suspendisse potenti. Etiam pretium et lorem sit amet fermentum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla congue est vitae iaculis fringilla. Cras dapibus ante lorem, sed mollis ante posuere non. Phasellus quis metus pellentesque, pretium tortor eu, pellentesque risus. Integer eget augue porttitor, eleifend ipsum nec, tincidunt nisi. Proin at ante nec purus ullamcorper dapibus nec interdum sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id ipsum libero. Ut ornare eros a urna tempus volutpat. Nulla massa eros, dapibus quis consectetur in, gravida a tortor. ', 60, 4, '2021-02-18', NULL),
(3, 'test1', 'lorem ipsum ibudoloris', 20, 1, '0000-00-00', NULL),
(4, 'test2', 'lorem ipsum ibudoloris', 20, 1, '2021-02-20', NULL),
(5, 'test2', 'lorem ipsum ibudoloris', 20, 1, '2021-02-20', NULL),
(6, 'test3', 'lorem ipsum ibudoloris', 20, 1, '0000-00-00', NULL),
(7, 'test3', 'lorem ipsum ibudoloris', 45, 1, '2021-02-20', NULL),
(8, 'test3', 'lorem ipsum ibudoloris', 20, 1, '2021-02-20', NULL),
(9, 'test4', 'lorem ipsum ibudoloris', 20, 1, '2021-02-20', NULL),
(10, 'testa', 'lorem ipsum ibudoloris', 20, 1, '2021-02-20', NULL),
(11, 'testa', 'lorem ipsum ibudoloris', 20, 1, '2021-02-20', NULL),
(12, 'Long String', 'lorem ipsum ibudoloris', 20, 1, '0000-00-00', NULL),
(13, 'Spring Rolls', 'Mix the meat with the marinade ingredients and set aside for about 30 minutes ...', 30, 1, '0000-00-00', NULL),
(14, 'Mexican Sandwich', 'lorem ipsum', 60, 2, '0000-00-00', NULL),
(15, 'проба', 'няма', 60, 1, '2021-02-21', NULL),
(16, 'проба2', 'няма2', 60, 2, '2021-02-21', NULL),
(17, 'Супа пиле', 'Lorem Ipsum Ibudoloris', 45, 1, '2021-02-01', NULL),
(18, 'Пиле Жулиен', 'Lorem ipsum', 55, 5, '2020-02-21', NULL),
(19, 'Пиле Жулиен2', 'Lorem ipsum', 55, 5, '2020-02-21', NULL),
(20, 'Пиле Жулоен11', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 55, 5, '2020-02-21', NULL),
(21, 'Лазаня', ' Lorem ipsum dksasdkj', 90, 5, '2021-02-21', NULL),
(22, ' Шопска салата', ' Lorem ipsum dksasdkj', 90, 3, '2021-02-10', NULL),
(23, ' Овчарска салата', ' Lorem ipsum dksasdkj', 90, 3, '2021-02-08', NULL),
(24, 'Тестово Ястие7', 'Начин  на приготвяне .....', 120, 2, '2021-02-21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `recipes_products`
--

CREATE TABLE `recipes_products` (
  `id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` decimal(7,3) NOT NULL,
  `unit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipes_products`
--

INSERT INTO `recipes_products` (`id`, `recipe_id`, `product_id`, `product_quantity`, `unit_id`) VALUES
(1, 2, 3, '3.000', 2),
(2, 2, 2, '1.000', 3),
(3, 2, 4, '0.500', 1),
(4, 2, 5, '0.150', 1),
(5, 2, 6, '10.000', 2);

-- --------------------------------------------------------

--
-- Table structure for table `recipe_categories`
--

CREATE TABLE `recipe_categories` (
  `recipe_category_id` int(11) NOT NULL,
  `recipe_category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipe_categories`
--

INSERT INTO `recipe_categories` (`recipe_category_id`, `recipe_category_name`) VALUES
(1, 'супи'),
(2, 'предястия'),
(3, 'салати'),
(4, 'десерти'),
(5, 'основно');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `unit_id` int(11) NOT NULL,
  `unit_name` varchar(100) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`unit_id`, `unit_name`, `date_deleted`) VALUES
(1, 'Kg', '2021-03-04'),
(2, 'g', NULL),
(3, 'l', NULL),
(4, 'ml', NULL),
(5, 'mg', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_category_id` (`product_category_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`product_category_id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`recipe_id`),
  ADD KEY `recipe_category_id` (`recipe_category_id`);

--
-- Indexes for table `recipes_products`
--
ALTER TABLE `recipes_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipe_id` (`recipe_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `unit_id` (`unit_id`);

--
-- Indexes for table `recipe_categories`
--
ALTER TABLE `recipe_categories`
  ADD PRIMARY KEY (`recipe_category_id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`unit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `product_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `recipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `recipes_products`
--
ALTER TABLE `recipes_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `recipe_categories`
--
ALTER TABLE `recipe_categories`
  MODIFY `recipe_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`product_category_id`) REFERENCES `product_categories` (`product_category_id`);

--
-- Constraints for table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `recipes_ibfk_1` FOREIGN KEY (`recipe_category_id`) REFERENCES `recipe_categories` (`recipe_category_id`);

--
-- Constraints for table `recipes_products`
--
ALTER TABLE `recipes_products`
  ADD CONSTRAINT `recipes_products_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `recipes_products_ibfk_2` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`recipe_id`),
  ADD CONSTRAINT `recipes_products_ibfk_3` FOREIGN KEY (`unit_id`) REFERENCES `units` (`unit_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
