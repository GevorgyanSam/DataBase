-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 14 2022 г., 15:29
-- Версия сервера: 10.4.25-MariaDB
-- Версия PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `personal_website_sam`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `header` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `header`, `description`, `file`, `author`) VALUES
(27, 'Լուրեր', 'Հայաստանի Ֆիզիկական կուլտուրայի եւ սպորտի պետական ինստիտուտում նպատակահարմար չեն գտնում Բրյուսովի անվան պետական համալսարանի հետ Հայաստանի պետական մանկավարժական համալսարանին միավորվելը։ Այս մասին NEWS.am-ի հետ զրույցում ասաց ՀՖԿՍՊԻ ռեկտոր Դավիթ Խիթարյանը, ', 'Brusov-State-University-FEATURED-IMAGE-1500x550px.jpg', 'Created By Sam'),
(28, 'Լուրեր', 'Պրահայի հայտարարությունը Երեւանի եւ Բաքվի միջեւ խաղաղության պայմանագրի հիմք կդառնա։ Այս մասին ասել է Ադրբեջանի արտաքին գործերի նախարար Ջեյհուն Բայրամովը ռուս եւ հայ գործընկերների հետ Աստանայում հանդիպումից հետո։\r\n\r\nԲայրամովը հանդիպման ժամանակ ընդգծել է, ո', 'Yerevan-1.jpg', 'Created By Sam');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
