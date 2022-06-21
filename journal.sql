-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 21 2022 г., 19:43
-- Версия сервера: 5.6.47
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `journal`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auditorium`
--

CREATE TABLE `auditorium` (
  `id_a` int(11) NOT NULL,
  `number` varchar(10) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `auditorium`
--

INSERT INTO `auditorium` (`id_a`, `number`, `type`) VALUES
(1, '101', 'all'),
(2, '110', 'all'),
(3, '224', 'all'),
(4, '216', 'all'),
(5, '320', 'it'),
(6, '323', 'all'),
(7, '307', 'all'),
(8, '308', 'it'),
(9, '401', 'all'),
(10, '405', 'all'),
(11, '408', 'all'),
(12, '410', 'it'),
(13, '301', 'all');

-- --------------------------------------------------------

--
-- Структура таблицы `list_au`
--

CREATE TABLE `list_au` (
  `id_list` int(11) NOT NULL,
  `id_us_fk` int(11) NOT NULL,
  `id_a_fk` int(11) NOT NULL,
  `day` date NOT NULL,
  `time1` time NOT NULL,
  `time2` time DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `list_au`
--

INSERT INTO `list_au` (`id_list`, `id_us_fk`, `id_a_fk`, `day`, `time1`, `time2`, `status`) VALUES
(4, 3, 1, '2022-06-16', '17:40:03', '22:57:42', 'Завершено'),
(5, 5, 9, '2022-06-16', '18:13:49', '23:02:48', 'Завершено'),
(40, 1, 4, '2022-06-16', '19:24:09', '22:53:51', 'Завершено'),
(41, 1, 11, '2022-06-16', '19:46:54', '23:01:47', 'Завершено'),
(42, 1, 6, '2022-06-16', '20:45:23', '23:01:54', 'Завершено'),
(43, 1, 10, '2022-06-16', '21:55:19', NULL, 'Отклонено'),
(44, 1, 4, '2022-06-16', '21:55:27', NULL, 'Отклонено'),
(45, 1, 2, '2022-06-16', '21:56:35', '23:02:02', 'Завершено'),
(46, 1, 9, '2022-06-16', '21:56:36', '23:02:09', 'Завершено'),
(47, 1, 3, '2022-06-16', '21:57:31', '23:02:24', 'Завершено'),
(48, 1, 10, '2022-06-16', '21:57:34', NULL, 'Отклонено'),
(49, 1, 9, '2022-06-16', '21:58:13', NULL, 'Отклонено'),
(50, 1, 9, '2022-06-16', '21:58:15', NULL, 'Отклонено'),
(51, 1, 9, '2022-06-16', '21:58:16', NULL, 'Отклонено'),
(52, 1, 1, '2022-06-16', '21:59:51', NULL, 'Отклонено'),
(53, 1, 4, '2022-06-16', '22:00:52', NULL, 'Отклонено'),
(54, 1, 7, '2022-06-16', '22:00:54', NULL, 'Отклонено'),
(55, 3, 7, '2022-06-16', '22:01:04', NULL, 'Отклонено'),
(56, 3, 7, '2022-06-16', '22:01:06', NULL, 'Отклонено'),
(57, 3, 9, '2022-06-16', '22:01:07', NULL, 'Отклонено'),
(58, 1, 1, '2022-06-16', '22:02:27', '23:02:36', 'Завершено'),
(59, 1, 10, '2022-06-16', '22:02:31', NULL, 'Отклонено'),
(60, 1, 7, '2022-06-16', '22:05:30', '23:36:03', 'Завершено'),
(61, 1, 11, '2022-06-16', '22:05:32', NULL, 'Отклонено'),
(62, 1, 7, '2022-06-16', '22:06:44', NULL, 'Отклонено'),
(63, 1, 9, '2022-06-16', '22:06:45', NULL, 'Отклонено'),
(64, 1, 11, '2022-06-16', '22:06:47', NULL, 'Отклонено'),
(65, 1, 6, '2022-06-16', '22:47:05', NULL, 'Отклонено'),
(66, 1, 4, '2022-06-16', '23:03:30', '23:12:25', 'Завершено'),
(67, 3, 6, '2022-06-16', '23:03:49', '23:13:04', 'Завершено'),
(68, 1, 7, '2022-06-21', '15:27:09', '15:38:43', 'Завершено'),
(69, 1, 7, '2022-06-21', '15:27:47', NULL, 'Отклонено'),
(70, 1, 7, '2022-06-21', '15:27:53', NULL, 'Отклонено'),
(71, 1, 1, '2022-06-21', '15:40:08', '15:54:49', 'Завершено'),
(72, 1, 1, '2022-06-21', '15:40:37', NULL, 'Отклонено'),
(73, 1, 1, '2022-06-21', '15:40:38', NULL, 'Отклонено'),
(74, 1, 1, '2022-06-21', '15:40:39', NULL, 'Отклонено'),
(75, 1, 1, '2022-06-21', '15:40:39', NULL, 'Отклонено'),
(76, 1, 1, '2022-06-21', '15:40:40', NULL, 'Отклонено'),
(77, 3, 3, '2022-06-21', '15:45:24', NULL, 'Отклонено'),
(78, 1, 3, '2022-06-21', '15:51:45', NULL, 'Отклонено'),
(79, 1, 3, '2022-06-21', '15:51:47', NULL, 'Отклонено'),
(80, 1, 3, '2022-06-21', '15:51:48', NULL, 'Отклонено'),
(81, 1, 6, '2022-06-21', '15:52:09', NULL, 'Отклонено'),
(82, 1, 6, '2022-06-21', '15:52:14', NULL, 'Отклонено'),
(83, 1, 6, '2022-06-21', '15:52:15', NULL, 'Отклонено'),
(84, 1, 6, '2022-06-21', '15:53:31', NULL, 'Отклонено'),
(85, 1, 6, '2022-06-21', '15:53:32', NULL, 'Отклонено'),
(86, 1, 6, '2022-06-21', '15:53:33', NULL, 'Отклонено'),
(87, 1, 6, '2022-06-21', '15:53:34', NULL, 'Отклонено'),
(88, 1, 3, '2022-06-21', '15:53:39', NULL, 'Отклонено'),
(89, 1, 3, '2022-06-21', '15:53:40', NULL, 'Отклонено'),
(90, 1, 3, '2022-06-21', '15:55:08', NULL, 'Отклонено'),
(91, 1, 2, '2022-06-21', '16:08:02', NULL, 'Отклонено'),
(93, 1, 4, '2022-06-30', '21:53:00', '18:52:40', 'Завершено');

-- --------------------------------------------------------

--
-- Структура таблицы `priority`
--

CREATE TABLE `priority` (
  `id_p` int(11) NOT NULL,
  `priority` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `priority`
--

INSERT INTO `priority` (`id_p`, `priority`) VALUES
(1, 'all'),
(2, 'it');

-- --------------------------------------------------------

--
-- Структура таблицы `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'administrator'),
(2, 'moderator'),
(3, 'authorized');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id_us` int(11) NOT NULL,
  `name1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name3` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_fk` int(11) NOT NULL,
  `phone` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id_us`, `name1`, `name2`, `name3`, `login`, `pass`, `role_fk`, `phone`, `priority_fk`) VALUES
(1, 'Кирилл', 'Климов', 'Константинович ', 'kir', '$2y$10$7ibkT6Ws7NzBf64wBYmG7.tRn2kv7ZqFky5mwhDyNnWSBUoROB/xm', 1, '+7(950)178-81-49', 1),
(3, 'Глибко', 'Иван', 'Владимирович', 'iva', '$2y$10$I58JFxI15EyDzAsOd1E0fuiFX5V8sg/cPZu46QWnrxRC73uVOdrfW', 3, '+7(923)123-34-65', 2),
(5, 'Гусев', 'Роман', 'Кириллович', 'roma', '$2y$10$I58JFxI15EyDzAsOd1E0fuiFX5V8sg/cPZu46QWnrxRC73uVOdrfW', 2, '+7(912)234-54-22', 1),
(6, 'user', '', '', 'user', '$2y$10$I58JFxI15EyDzAsOd1E0fuiFX5V8sg/cPZu46QWnrxRC73uVOdrfW', 3, '', 2),
(7, 'moder', '', '', 'moder', '$2y$10$I58JFxI15EyDzAsOd1E0fuiFX5V8sg/cPZu46QWnrxRC73uVOdrfW', 2, '', 2),
(8, 'admin', '', '', 'admin', '$2y$10$I58JFxI15EyDzAsOd1E0fuiFX5V8sg/cPZu46QWnrxRC73uVOdrfW', 1, '', 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auditorium`
--
ALTER TABLE `auditorium`
  ADD PRIMARY KEY (`id_a`);

--
-- Индексы таблицы `list_au`
--
ALTER TABLE `list_au`
  ADD PRIMARY KEY (`id_list`),
  ADD KEY `id_a_fk` (`id_a_fk`),
  ADD KEY `id_us_fk` (`id_us_fk`);

--
-- Индексы таблицы `priority`
--
ALTER TABLE `priority`
  ADD PRIMARY KEY (`id_p`);

--
-- Индексы таблицы `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_us`),
  ADD KEY `priority_fk` (`priority_fk`),
  ADD KEY `role_fk` (`role_fk`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `auditorium`
--
ALTER TABLE `auditorium`
  MODIFY `id_a` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `list_au`
--
ALTER TABLE `list_au`
  MODIFY `id_list` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT для таблицы `priority`
--
ALTER TABLE `priority`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id_us` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `list_au`
--
ALTER TABLE `list_au`
  ADD CONSTRAINT `list_au_ibfk_1` FOREIGN KEY (`id_a_fk`) REFERENCES `auditorium` (`id_a`),
  ADD CONSTRAINT `list_au_ibfk_2` FOREIGN KEY (`id_us_fk`) REFERENCES `user` (`id_us`);

--
-- Ограничения внешнего ключа таблицы `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`priority_fk`) REFERENCES `priority` (`id_p`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`role_fk`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
