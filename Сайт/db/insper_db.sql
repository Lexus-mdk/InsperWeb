-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 17 2020 г., 20:33
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `rtk_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cash`
--

CREATE TABLE `cash` (
  `id` int(11) UNSIGNED NOT NULL,
  `cash` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cash`
--

INSERT INTO `cash` (`id`, `cash`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `consult`
--

CREATE TABLE `consult` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_u` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `consult`
--

INSERT INTO `consult` (`id`, `name`, `email`, `message`, `dor`, `id_u`) VALUES
(1, 'Buhvin Alexe', 'dlexusb@gmail.co', 'dzsFCZC Seafv', '15/07/2020', NULL),
(2, 'Buhvin Alexe', 'dlexusb@gmail.co', 'dhklfVZX SV<chklx vhjKH cvKSJ hhsgvjksghfjkZS hg SLKVHLSIUL XC', '15/07/2020', NULL),
(3, 'Buhvin', 'dlexusb@gil.com', 'На моём запястье айс , понеслась, эта плюха хочет сакс я не дам, она есть моих детей, моих детей. Ням ням ням', '15/07/2020', NULL),
(4, 'Buhvin Alexey', 'dlexusb@gmail.com', 'Kxb kjc vdhBL HJKXHDFV ', '15/07/2020', 30);

-- --------------------------------------------------------

--
-- Структура таблицы `kasko`
--

CREATE TABLE `kasko` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nick` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_u` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `kasko`
--

INSERT INTO `kasko` (`id`, `name`, `phone`, `email`, `car`, `message`, `nick`, `dor`, `id_u`) VALUES
(1, 'Бухвин Алексей Дмитриевич', '+7 (981) 186-44-39', 'lesha.buhvin@mail.ru', 'B083KT', 'Good', 'lex', '14/07/2020', NULL),
(2, 'Елена Бухвина', '+7 (981) 186-44-36', 'buh@mail.ru', 'B083KT', 'Хочу каско ладу приору', 'Lena', '14/07/2020', NULL),
(3, 'Buhvin Alexey', '+7 (981) 186-44-39', 'dlexusb@gmail.com', 'B083KT', 'kjhffgd nfhgjfk fghruy', NULL, '15/07/2020', 30);

-- --------------------------------------------------------

--
-- Структура таблицы `life`
--

CREATE TABLE `life` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nick` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_u` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `life`
--

INSERT INTO `life` (`id`, `name`, `phone`, `email`, `message`, `nick`, `dor`, `id_u`) VALUES
(1, 'Бухвин Алексей Дмитриевич', '+7 (981) 186-44-39', 'lesha.buhvin@mail.ru', 'Проверка жизни', 'lex', '14/07/2020', NULL),
(2, 'Buhvin Alexey', '+7 (981) 186-44-39', 'dlexusb@gmail.com', 'serdghbasdfg qegbafsv agvsdc', NULL, '15/07/2020', 30);

-- --------------------------------------------------------

--
-- Структура таблицы `other`
--

CREATE TABLE `other` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nick` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_u` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `other`
--

INSERT INTO `other` (`id`, `name`, `phone`, `email`, `message`, `nick`, `dor`, `id_u`) VALUES
(1, 'Бухвин Алексей Дмитриевич', '+7 (981) 186-44-39', 'lesha.buhvin@mail.ru', 'Gkj[j dc`', 'lex', '14/07/2020', NULL),
(2, 'Buhvin Alexey', '+7 (981) 186-44-39', 'dlexusb@gmail.com', 'agzvcxv aergbdbv c ', NULL, '15/07/2020', 30);

-- --------------------------------------------------------

--
-- Структура таблицы `property`
--

CREATE TABLE `property` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nick` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_u` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `property`
--

INSERT INTO `property` (`id`, `name`, `phone`, `email`, `message`, `nick`, `dor`, `id_u`) VALUES
(1, 'Имя', '88005553535', 'dasfasdca@m.com', 'bzHSDCVAx', 'no', '14/07/2020', NULL),
(2, 'Пол', '+7 (981) 186-44-32', 'buhvina@mail.ru', 'Это реально пиздец какой-то\r\n', 'Uswer', '14/07/2020', NULL),
(3, 'Дамихил Хикигай', '88005553535', 'Danechka2002@mail.ru', 'меня фура убила', 'Uswer', '14/07/2020', NULL),
(4, 'Buhvin Alexey', '+7 (981) 186-44-39', 'dlexusb@gmail.com', 'dsgahabavf argda cvaRSVCSC S', NULL, '15/07/2020', 30);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `nick` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cash` int(11) UNSIGNED DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verif` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `nick`, `name`, `phone`, `email`, `password`, `role`, `dor`, `cash`, `address`, `city`, `country`, `token`, `verif`) VALUES
(28, 'sGS', 'Срок-кон', '+7 (981) 186-44-39', 'dsb@gmail.com', '$2y$10$0EC4pOBnUk1Zwq6tpoALq.6gTVlYIG0LWofNFdVp4IxcrdSmxRjFS', 'deleted', '14/07/2020', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'lex', 'Buhvin Alexey', '+7 (981) 186-44-39', 'dlexusb@gmail.com', '$2y$10$JquV40VyRbJktZewgisPtedi3VYCPbHWzB/w2zrIEySVtzDAkZtDS', 'admin', '14/07/2020', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'Uswer', 'Алексей', '+7 (981) 186-44-32', 'buhvina@mail.ru', '$2y$10$Hfmh9L39r.6pPbm8ssiS6OJLfTM.mNB2qGOUYvPTUt5Zhwdf0NZ72', 'user', '14/07/2020', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'Lex', 'Бухвин Алексей Дмитриевич', '+7 (981) 186-44-39', 'lesha.buhvin@mail.ru', '$2y$10$S82hdj.upyCfS7MOWG53I.J6t73Yoez8U5KSgwUqCc7kFdZ5ExGAy', 'user', '14/07/2020', 12, NULL, NULL, NULL, NULL, NULL),
(33, 'Lena', 'Елена Бухвина', '+7 (981) 186-44-36', 'buh@mail.ru', '$2y$10$FRHJYkO1ynBL7okAJfx4F.bhvXjKQkaG667wNSw5mVRd95Tza.an6', 'deleted', '14/07/2020', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'плор', 'лех', '89811445539', 'alex@mail.ru', '$2y$10$cML2X1XO4hNCx9JxsvYTZedWExwkpS.ois.qnTBd2w.OH4RvgIdbS', 'user', '12/11/2020', 11, NULL, NULL, NULL, NULL, NULL),
(35, 'плор', 'лех', '89811445539', 'alexr@mail.ru', '$2y$10$J/9ky6BrFcWE0ZDXozlY9e6tFGdIzEnPdEUtW9d3VmJNk/oxqVmr.', 'user', '12/11/2020', 11, NULL, NULL, NULL, NULL, NULL),
(37, 'sdf', 'sdf', '89811445539', 'lesha@mail.ru', '$2y$10$b.BjU9bE99KlRbdbErNpA.MDO3yidx96kJ9G6SeayHeF6GWqU0a6u', 'user', '12/11/2020', 2, NULL, NULL, NULL, NULL, NULL),
(38, 'gg', 'gg', '89811445535', 'gg@gg.gg', '$2y$10$Hg3z.oXLsBg6C47MasUBHum/YPXn8LoK5WLzeAwZVTFhX/9BCf03m', 'user', '13/11/2020', 9, '', '', '', NULL, NULL),
(39, 'ff', 'ff', '89811445535', 'leshvin@mail.ru', '$2y$10$uVidhSuQpf0GnBjGw67hUeVmlvztwG/tfsSZtHjkfbjx4VOViW/w.', 'user', '16/11/2020', 0, NULL, NULL, NULL, 'c686223f326e6deab8ea58e6c13230938958edc9', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `vzg`
--

CREATE TABLE `vzg` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nick` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_u` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `vzg`
--

INSERT INTO `vzg` (`id`, `name`, `phone`, `email`, `car`, `message`, `nick`, `dor`, `id_u`) VALUES
(1, 'Пол', '+7 (981) 186-44-32', 'buhvina@mail.ru', '213431', 'ОК', 'Uswer', '15/07/2020', NULL),
(2, 'Пол', '+7 (981) 186-44-32', 'buhvina@mail.ru', '213431', 'xcndzhf', 'Uswer', '15/07/2020', NULL),
(3, 'Buhvin Alexey', '+7 (981) 186-44-39', 'dlexusb@gmail.com', '213431', 'cxn cz bdagxcv gfvascfv', NULL, '15/07/2020', 30);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cash`
--
ALTER TABLE `cash`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `consult`
--
ALTER TABLE `consult`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_u` (`id_u`);

--
-- Индексы таблицы `kasko`
--
ALTER TABLE `kasko`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_u` (`id_u`);

--
-- Индексы таблицы `life`
--
ALTER TABLE `life`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_u` (`id_u`);

--
-- Индексы таблицы `other`
--
ALTER TABLE `other`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_u` (`id_u`);

--
-- Индексы таблицы `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_u` (`id_u`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `vzg`
--
ALTER TABLE `vzg`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_u` (`id_u`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cash`
--
ALTER TABLE `cash`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `consult`
--
ALTER TABLE `consult`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `kasko`
--
ALTER TABLE `kasko`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `life`
--
ALTER TABLE `life`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `other`
--
ALTER TABLE `other`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT для таблицы `vzg`
--
ALTER TABLE `vzg`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `consult`
--
ALTER TABLE `consult`
  ADD CONSTRAINT `consult_ibfk_1` FOREIGN KEY (`id_u`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `kasko`
--
ALTER TABLE `kasko`
  ADD CONSTRAINT `kasko_ibfk_1` FOREIGN KEY (`id_u`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `life`
--
ALTER TABLE `life`
  ADD CONSTRAINT `life_ibfk_1` FOREIGN KEY (`id_u`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `other`
--
ALTER TABLE `other`
  ADD CONSTRAINT `other_ibfk_1` FOREIGN KEY (`id_u`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `property_ibfk_1` FOREIGN KEY (`id_u`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `vzg`
--
ALTER TABLE `vzg`
  ADD CONSTRAINT `vzg_ibfk_1` FOREIGN KEY (`id_u`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
