-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db:3306
-- Tiempo de generación: 07-08-2024 a las 16:57:17
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
-- Estructura de tabla para la tabla `free_themes`
--

CREATE TABLE `free_themes` (
  `id` int UNSIGNED NOT NULL,
  `back_color` int DEFAULT NULL,
  `back_img` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `back_grad_first` int DEFAULT NULL,
  `back_grad_second` int DEFAULT NULL,
  `back_grad_dir` int DEFAULT NULL,
  `button_color` int DEFAULT NULL,
  `button_border_color` int DEFAULT NULL,
  `button_color_hover` int DEFAULT NULL,
  `button_border_color_hover` int DEFAULT NULL,
  `button_text_style` varchar(100) NOT NULL,
  `button_text_color` int DEFAULT NULL,
  `button_text_color_hover` int DEFAULT NULL,
  `text_style` varchar(100) NOT NULL,
  `heading_text_color` int DEFAULT NULL,
  `description_text_color` int DEFAULT NULL,
  `profile_picture` varchar(100) NOT NULL,
  `social_icon_color` int DEFAULT NULL,
  `social_back_color` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `free_themes`
--

INSERT INTO `free_themes` (`id`, `back_color`, `back_img`, `back_grad_first`, `back_grad_second`, `back_grad_dir`, `button_color`, `button_border_color`, `button_color_hover`, `button_border_color_hover`, `button_text_style`, `button_text_color`, `button_text_color_hover`, `text_style`, `heading_text_color`, `description_text_color`, `profile_picture`, `social_icon_color`, `social_back_color`) VALUES
(1, 16777215, NULL, 95154, 5700, 90, 1190971, 16777215, NULL, NULL, '', 16777215, NULL, '', 16777215, 16777215, '', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `free_themes`
--
ALTER TABLE `free_themes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `free_themes`
--
ALTER TABLE `free_themes`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
