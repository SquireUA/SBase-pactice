-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Лют 12 2023 р., 09:39
-- Версія сервера: 8.0.30
-- Версія PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `LuxShop`
--

-- --------------------------------------------------------

--
-- Структура таблиці `accaunt`
--

CREATE TABLE `accaunt` (
  `Name` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `accaunt`
--

-- --------------------------------------------------------

--
-- Структура таблиці `GuestBook`
--

CREATE TABLE `GuestBook` (
  `ID` int NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Massege` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `datatime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Answer` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `GuestBook`
--

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `accaunt`
--
ALTER TABLE `accaunt`
  ADD PRIMARY KEY (`Email`),
  ADD KEY `Name` (`Name`);

--
-- Індекси таблиці `GuestBook`
--
ALTER TABLE `GuestBook`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Name` (`Name`),
  ADD KEY `Email` (`Email`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `GuestBook`
--
ALTER TABLE `GuestBook`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=496;

--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `GuestBook`
--
ALTER TABLE `GuestBook`
  ADD CONSTRAINT `guestbook_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `accaunt` (`Email`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `guestbook_ibfk_2` FOREIGN KEY (`Name`) REFERENCES `accaunt` (`Name`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
