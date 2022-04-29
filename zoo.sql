-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 29 2022 г., 12:57
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `zoo`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `zoo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pole` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komm` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `zoo`, `name`, `pole`, `age`, `komm`, `photo`) VALUES
(1, 'cat', 'Мурка', 'Девочка', '1 год', 'Нежная котомадемуазель ищет семью', 'кошкабез2 1.png'),
(2, 'cat', 'Васька', 'Мальчик', '7 месяцев', 'Застенчивый обаяшка', 'кошкабез6 1.png'),
(3, 'cat', 'Гари\r\n', 'Мальчик \r\n', '2, 5 месяца', 'Скромный, но очень добрый котенок', 'кошкабез5 1.png'),
(4, 'cat', 'Ника\r\n', 'Девочка\r\n', '1 месяц', 'Маленькая и нежная принцесса', 'кошкабез3 1.png'),
(5, 'dog', 'Мухтарик\r\n', 'Мальчик \r\n', '1 год 2 месяца', 'Необычный плюшевый малыш ждет семью', 'собака4 (1) 1.png'),
(6, 'dog', 'Жгут', 'Мальчик', '2 года', 'Озорной мальчик Жгут ищет дом', 'собака3 (1) 1.png'),
(7, 'dog', 'Лилу\r\n', 'Девочка\r\n', '6 месяцев', 'Маленькая и душевная собачка, не оставит вас равнодушными', 'соббз5 1.png'),
(8, 'dog', 'Изя \r\n', 'Девочка\r\n', '2 месяца', 'Нежный цветочек ', 'собака беззд3 1.png');

-- --------------------------------------------------------

--
-- Структура таблицы `happy`
--

CREATE TABLE `happy` (
  `id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pole` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komm` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `happy`
--

INSERT INTO `happy` (`id`, `name`, `pole`, `komm`, `photo`) VALUES
(1, 'ФИБИ', 'Девочка', 'После долгой жизни в приюте стала любимой и домашней! ', 'image1.png'),
(2, 'ФИЛЯ', 'Мальчик', 'Ласковый медвежонок с добрыми глазами. Дома!', 'image2.png'),
(3, 'ДЖИПСИ (ДЖЕССИ)', 'Девочка', 'Стала абсолютно домашней ласковой кошечкой', 'image3.png'),
(4, 'ОЛАФ', 'Мальчик', 'Снова стал домашним!', 'image4.png');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `phone`, `email`, `password`, `photo`) VALUES
(1, 'Татьяна', 'Кадникова', '89273965085', 'kadnikova1803@gmail.com', '202cb962ac59075b964b07152d234b70', 'tatyna.jpg'),
(2, 'Андрей', 'Герасимов', '89521968636', 'andrey.gerasimov2506@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa', 'andrey.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `happy`
--
ALTER TABLE `happy`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `happy`
--
ALTER TABLE `happy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
