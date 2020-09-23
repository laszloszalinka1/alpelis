CREATE DATABASE alpelis;
use alpelis;
-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-08-2020 a las 20:32:46
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alpelis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(30) NOT NULL,
  `status_id` int(11) 	NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category_movie`
--

CREATE TABLE `category_movie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `movie_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`movie_id`,`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(30) NOT NULL,
  `description` varchar(60) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movie_rental`
--

CREATE TABLE `movie_rental` (
  `id` int(11) NOT NULL AUTO_INCREMENT ,
  `movie_id` int(11) NOT NULL,
  `rental_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`,`movie_id`,`rental_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rentals`
--

CREATE TABLE `rentals` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `start_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `end_date` timestamp DEFAULT NULL DEFAULT current_timestamp(),
  `total` int(50) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(20) NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `statuses`
--

CREATE TABLE `statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(30) NOT NULL,
  `type_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_statuses`
--

CREATE TABLE `type_statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
 
  ADD KEY `FK_categories_status_id` (`status_id`);

--
-- Indices de la tabla `category_movie`
--
ALTER TABLE `category_movie`
  
  ADD KEY `FK_category_movie_movie_id` (`movie_id`),
  ADD KEY `FK_category_movie_category_id` (`category_id`);

--
-- Indices de la tabla `movies`
--
ALTER TABLE `movies`
  
  ADD KEY `FK_user_id` (`user_id`),
  ADD KEY `FK_movies_status_id` (`status_id`);

--
-- Indices de la tabla `movie_rental`
--
ALTER TABLE `movie_rental`
  
  ADD KEY `FK_movie_rental_movie_id` (`movie_id`),
  ADD KEY `FK_movie_rental_rental_id` (`rental_id`);

--
-- Indices de la tabla `rentals`
--
ALTER TABLE `rentals`
  
  ADD KEY `FK_rentals_status_id` (`status_id`),
  ADD KEY `FK_rentals_user_id` (`user_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  
  ADD KEY `FK_roles_status_id` (`status_id`);

--
-- Indices de la tabla `statuses`
--
ALTER TABLE `statuses`
 
  ADD KEY `FK_type_status_id` (`type_status_id`);

--
-- Indices de la tabla `type_statuses`
--


--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `FK_role_id` (`role_id`),
  ADD KEY `FK_users_status_id` (`status_id`),
  ADD KEY `FK_type_status_id` (`status_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `FK_categories_status_id` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`);

--
-- Filtros para la tabla `category_movie`
--
ALTER TABLE `category_movie`
  ADD CONSTRAINT `FK_category_movie_category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `FK_category_movie_movie_id` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);

--
-- Filtros para la tabla `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `FK_movies_status_id` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`),
  ADD CONSTRAINT `FK_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `movie_rental`
--
ALTER TABLE `movie_rental`
  ADD CONSTRAINT `FK_movie_rental_movie_id` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `FK_movie_rental_rental_id` FOREIGN KEY (`rental_id`) REFERENCES `rentals` (`id`);

--
-- Filtros para la tabla `rentals`
--
ALTER TABLE `rentals`
  ADD CONSTRAINT `FK_rentals_status_id` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`),
  ADD CONSTRAINT `FK_rentals_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `FK_roles_status_id` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`);

--
-- Filtros para la tabla `statuses`
--
ALTER TABLE `statuses`
  ADD CONSTRAINT `FK_type_status_id` FOREIGN KEY (`type_status_id`) REFERENCES `type_statuses` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_role_id` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `FK_users_status_id` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
