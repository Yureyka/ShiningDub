-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Апр 13 2021 г., 22:06
-- Версия сервера: 5.7.27-30-log
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `enotyaygma`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `video_id` int(11) NOT NULL,
  `fullname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `video_id`, `fullname`, `comment`, `created_at`, `updated_at`) VALUES
(46, 17, 'Лена', 'Крутая серия, спасибо за озвучку', '2021-04-13 09:43:43', '2021-04-13 09:43:43'),
(47, 17, 'Бабл 💖 Гам', 'Как круто мне понравилось', '2021-04-13 14:14:58', '2021-04-13 14:14:58');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2021_04_05_205442_create_videos_table', 1),
(22, '2021_04_08_004730_create_news_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `desc`, `created_at`, `updated_at`) VALUES
(5, 'НОВЫЙ САЙТ', 'Привет, друзья! С радостью представляем вам наш новый сайт. Теперь вы можете наслаждаться новыми сериями в хорошей русской озвучке здесь, помимо нашего канала в YouTube и группы Вконтакте. Надеемся, что пользование нашим ресурсом принесёт вам только удовольствие. Не забывайте делиться своим мнением и пожеланиями. Приятного просмотра!', '2021-04-13 11:51:02', '2021-04-13 11:51:02'),
(6, 'НАШ ТИКТОК', 'Мы теперь есть в ТикТоке! Подписывайтесь, если хотите видеть больше контента по нашему любимому мультсериалу Ледибаг и Супер кот; больше новостей о нашей озвучке и много чего другого!\r\nhttps://vm.tiktok.com/ZMeudcprY/', '2021-04-13 12:20:19', '2021-04-13 12:20:19');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `isAdmin`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 1, 'MiraculousAdmin', 'enotyay@gmail.com', '$2y$10$yY2tvohPK73PB8cSwxAYE.fFipwmwklwLV0g1Tw/d5NJtOiMV8Zuy', NULL, '2021-04-11 11:26:53', '2021-04-11 11:26:53');

-- --------------------------------------------------------

--
-- Структура таблицы `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `videos`
--

INSERT INTO `videos` (`id`, `title`, `link`, `poster`, `desc`, `created_at`, `updated_at`) VALUES
(10, 'ЛБ и СК: Нью-Йорк - Объединённые Герои', 'https://storage.yandexcloud.net/shiningdub/%D0%9E%D0%B7%D0%B2%D1%83%D1%87%D0%BA%D0%B8/miraculous%20new%20york.mp4', 'img/uploads/1618168116.jpg', 'Весь класс отправляется в поездку... кроме Эдриана, которого отец решает не отпускать. Перед отъездом Ледибаг просит Кота Нуара присмотреть за Парижем, но не уточняет причины своего отсутствия. Кот очень серьезно относится к своей миссии... Но когда Маринетт, будучи представителем класса, убеждает Габриэля отпустить сына вместе с одноклассниками, у Эдриана возникает проблема. Он не может одновременно наблюдать за Парижем и быть со своим классом в Нью-Йорке.', '2021-04-11 16:08:36', '2021-04-13 12:02:25'),
(14, 'ЛБ и СК 4 сезон 1 серия - Монстр Фу', 'https://storage.yandexcloud.net/shiningdub/%D0%9E%D0%B7%D0%B2%D1%83%D1%87%D0%BA%D0%B8/4x01.mp4', 'img/uploads/1618170184.jpg', 'Ледибаг и Кот Нуар встретят того, кого уже знают... того, с кем сражаться они никогда не рассчитывали.', '2021-04-11 16:43:04', '2021-04-13 12:00:49'),
(15, 'ЛБ и СК 4 сезон 2 серия - Истина', 'https://storage.yandexcloud.net/shiningdub/%D0%9E%D0%B7%D0%B2%D1%83%D1%87%D0%BA%D0%B8/4x02.mp4', 'img/uploads/1618170273.jpg', 'С тех пор, как Маринетт стала новой хранительницей Шкатулки Талисманов, героиня перегружена делами. Она перестала встречаться с друзьями, работать с Котом Нуаром, ходить на свидания с Лукой. Последний чувствует, что у Маринетт есть секрет. Она не может ему рассказать, что она — Ледибаг, спасающая Париж.\r\n\r\nГлубоко раненый тем, что Маринетт не доверяет ему свою тайну, Лука акуматизируется в Истину. С помощью своего сентимонстра Фаро, — гигантского глаза, способного заставлять людей говорить правду — он хочет узнать секрет Маринетт... а также секреты Ледибаг и Кота Нуара по приказу Тёмного Бражника!', '2021-04-11 16:44:33', '2021-04-13 12:00:24'),
(16, 'ЛБ и СК: Шанхай, Легенда о Леди Дракон', 'https://storage.yandexcloud.net/shiningdub/%D0%9E%D0%B7%D0%B2%D1%83%D1%87%D0%BA%D0%B8/miraculous%20shanghai.mp4', 'img/uploads/1618170352.jpg', 'Чтобы встретиться с Эдрианом, уехавшим в Шанхай, Маринетт отправляется навестить своего дядю Вонга, который собирается праздновать юбилей.\r\n\r\nПо приезде в Китай у неё крадут сумку с Тикки, которая помогает ей трансформироваться в Ледибаг! Беспомощная и одинокая в огромном городе, Маринетт принимает помощь очень изобретательной молодой девушки по имени Фэй. Девушки становятся подругами и узнают о существовании нового волшебного украшения, Чудесного, который давно разыскивает Бражник, тоже находящийся в Шанхае...', '2021-04-11 16:45:52', '2021-04-13 11:59:27'),
(17, 'ЛБ и СК 4 сезон 3 серия - Ложь', 'https://storage.yandexcloud.net/shiningdub/%D0%9E%D0%B7%D0%B2%D1%83%D1%87%D0%BA%D0%B8/4x03.mp4', 'img/uploads/1618171247.jpg', 'Отношения Эдриана с Кагами начинают трещать по швам из-за того, что он вынужден отказаться их свиданий, чтобы защитить Париж в роли Кота Нуара. Когда Эдриан теряет свой талисман удачи, который ему подарила Маринетт, Кагами находит его. Девушка подозревает Агреста во лжи и ее горе из-за этого факта приводит к тому, что Тёмный Бражник превращает ее в Ложь, злодейку, способную парализовать любого, кто врал хоть раз в жизни. Ледибаг и Кот Нуар побеждают ее, но она говорит Эдриану, что не может доверять или быть с тем, кто лгал ей и разрывает их отношения, а также дружбу.', '2021-04-11 17:00:47', '2021-04-13 11:58:08');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
