-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db:3306
-- Tiempo de generación: 30-07-2024 a las 23:35:41
-- Versión del servidor: 8.3.0
-- Versión de PHP: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cidb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `themes`
--

CREATE TABLE `themes` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `back_color` int NOT NULL,
  `back_img` varchar(500) NOT NULL,
  `back_grad_first` int NOT NULL,
  `back_grad_second` int NOT NULL,
  `back_grad_dir` int NOT NULL,
  `button_color` int NOT NULL,
  `button_border_color` int NOT NULL,
  `button_color_hover` int NOT NULL,
  `button_border_color_hover` int NOT NULL,
  `button_text_style` varchar(100) NOT NULL,
  `button_text_color` int NOT NULL,
  `button_text_color_hover` int NOT NULL,
  `text_style` varchar(100) NOT NULL,
  `heading_text_color` int NOT NULL,
  `description_text_color` int NOT NULL,
  `profile_picture` varchar(100) NOT NULL,
  `social_icon_color` int NOT NULL,
  `social_back_color` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`) USING BTREE;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `themes`
--
ALTER TABLE `themes`
  ADD CONSTRAINT `themes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
