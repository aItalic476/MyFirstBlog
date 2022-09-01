-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 01 2022 г., 20:05
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `firstblog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `author_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `resume` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `subtitle`, `date`, `author_id`, `image`, `resume`, `content`) VALUES
(1, 'Magna sed adipiscing', 'Lorem ipsum dolor amet nullam consequat etiam feugiat', '2022-08-20', 1, 'images\\pic06.jpg', 'Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.', 'Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.'),
(2, 'The post about sunflower', ' sunflower', '2022-08-21', 2, 'images/16022ea37804648f959f35a162518b94.jpeg', ' sunflower', 'Unsplash is beautiful'),
(3, 'The post about ocean ', 'Ocean ', '2022-08-21', 2, 'images/b80075c37167ef5ae00bd316f042abba.jpeg', 'Pacific Ocean ', 'It is beautiful, isn\'t it? '),
(4, 'The crow', 'Black Crow', '2022-08-21', 2, 'images/d375d9c1107beef759554056ab692a73.jpeg', 'Corvo Attano', 'Black Crow'),
(5, 'Appalachi', 'Beautiful and gorgeous', '2022-08-21', 2, 'images/e05299b394ad7cfc0d1ed65f79c04637.jpeg', 'Beautiful Mountains', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque gravida pellentesque magna a ullamcorper. Cras iaculis, risus ut porta tempor, tellus libero bibendum quam, quis scelerisque diam dui sit amet justo. In vitae volutpat leo. Fusce at dolor at nulla volutpat lacinia eget eu lectus. Maecenas et est rutrum, fringilla nunc quis, placerat nunc. Ut mauris tortor, auctor at lacus ut, ullamcorper vulputate enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;\r\nDuis sed leo eu leo blandit viverra et in sem. Proin odio lorem, fermentum id mauris non, bibendum egestas nibh. Praesent turpis ex. ');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `logo` text NOT NULL,
  `pages` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `logo`, `pages`) VALUES
(1, 'images/logo.jpg', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` text NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `avatar`, `role`) VALUES
(1, 'admin', 'admin', 'https://images.unsplash.com/photo-1660864254373-f9e29374f5df?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80', 1),
(2, 'Mike', '$2y$10$wEeqAAjdIt083q0gb9gQ6.RtHVnISiZ8b7bbDWB06hH08OSnFGrRO', 'images/avatar.jpg', 2),
(3, 'Vitaliy', '$2y$10$aYBR7Z.YnOurFlrCV4UkO.6Xc5ksAFcJMcfl1lkrNGDMKiXcXJqoy', 'images/avatar.jpg', 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_posts_author_id_users_id` (`author_id`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `fk_posts_author_id_users_id` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
