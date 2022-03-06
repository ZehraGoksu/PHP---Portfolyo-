-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 06 Mar 2022, 13:38:41
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `portfolio`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `name_surname` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `birthday` date NOT NULL,
  `phone` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `about_text` text COLLATE utf8_turkish_ci NOT NULL,
  `job` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `degree` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `univercity_name` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `department` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `image_path` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `original_image` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `about`
--

INSERT INTO `about` (`id`, `name_surname`, `email`, `birthday`, `phone`, `city`, `about_text`, `job`, `degree`, `univercity_name`, `department`, `image_path`, `original_image`, `created_at`) VALUES
(1, 'Alex Smith', 'email@deneme.com', '1995-03-01', '05550000550', 'Kadıköy, İstanbul', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis. Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.', 'UI/UX Designer & Web Developer', 'Software Engineer', 'Quia fugiats', 'Software Engineer', 'uploads/2022/03', 'profile-img.jpg', '2022-03-03 21:44:59');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name_surname` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admins`
--

INSERT INTO `admins` (`id`, `name_surname`, `email`, `password`, `created_at`) VALUES
(1, 'Admin', 'admin@deneme.com', '$2y$13$RaBHcgkcPnZ/AEstqgTJ4uaewAGgJXN.17eTmkrNMhhAzc4eHP8YK', '2022-03-04 12:30:02');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name_surname` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `message` text COLLATE utf8_turkish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`id`, `name_surname`, `email`, `message`, `created_at`) VALUES
(1, 'Kullanıcı', 'deneme@deneme.com', 'Here\'s my final version of a GUIDv4 function (based on others work here) that should work on all platforms and gracefully fallback to less cryptographically secure version if others are not supported...', '2022-03-04 22:03:08'),
(2, 'Kullanıcı3', 'deneme@deneme.com', 'rfgfhbt', '2022-03-04 22:08:57');

-- --------------------------------------------------------

--
-- Görünüm yapısı durumu `get_projects_view`
-- (Asıl görünüm için aşağıya bakın)
--
CREATE TABLE `get_projects_view` (
`id` int(11)
,`name` varchar(200)
,`title` varchar(200)
,`description` text
,`date` date
,`url` varchar(200)
,`created_at` timestamp
,`updated_at` timestamp
,`original_image` text
,`image_path` text
);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `description` text COLLATE utf8_turkish_ci NOT NULL,
  `date` date NOT NULL,
  `url` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `projects`
--

INSERT INTO `projects` (`id`, `name`, `title`, `description`, `date`, `url`, `created_at`) VALUES
(12, 'Kerry Hawkins', 'Veritatis omnis volu', 'Id vel quod quis vo', '1977-03-08', 'Lorem ut accusamus a', '2022-03-05 13:50:09'),
(13, 'Porter Sargent', 'Eos cum ut quos eaq', 'Quo autem accusamus ', '1981-09-20', 'Qui vitae nobis inci', '2022-03-06 04:46:20'),
(14, 'Hasad Lindsey', 'Eiusmod molestiae se', 'Magni aut sint in al', '1978-03-24', 'Dolorem ab officiis ', '2022-03-06 04:49:51'),
(15, 'Thomas Mcknight', 'Incididunt qui irure', 'Molestias totam cill', '1991-08-14', 'Labore quia odio nos', '2022-03-06 04:50:26'),
(16, 'Destiny Austin', 'Nostrum illo enim ne', 'Architecto sed cillu', '1993-10-21', 'Ipsum quo fugiat in', '2022-03-06 04:51:29'),
(17, 'Beatrice Douglas', 'Pariatur Autem qui ', ' Id doloremque eum p Id doloremque eum pId doloremque eum p Id doloremque eum pId doloremque eum p Id doloremque eum pId doloremque eum p Id doloremque eum pId doloremque eum p Id doloremque eum pId doloremque eum p Id doloremque eum pId doloremque eum p Id doloremque eum pId doloremque eum p Id doloremque eum pId doloremque eum p Id doloremque eum pId doloremque eum p Id doloremque eum pId doloremque eum p Id doloremque eum pId doloremque eum p Id doloremque eum pId doloremque eum p Id doloremque eum pId doloremque eum p Id doloremque eum pId doloremque eum p Id doloremque eum pId doloremque eum p Id doloremque eum pId doloremque eum p Id doloremque eum pId doloremque eum p Id doloremque eum pId doloremque eum p Id doloremque eum pId doloremque eum p Id doloremque eum p', '2018-05-06', 'Inventore corrupti ', '2022-03-06 11:19:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `project_images`
--

CREATE TABLE `project_images` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `original_image` text COLLATE utf8_turkish_ci NOT NULL,
  `small_image` text COLLATE utf8_turkish_ci NOT NULL,
  `image_path` text COLLATE utf8_turkish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `project_images`
--

INSERT INTO `project_images` (`id`, `project_id`, `original_image`, `small_image`, `image_path`, `created_at`) VALUES
(1, 1, '0642AEE4-4655-4A21-B18E-6BF9FC0F7923.jpg', 'small_0642AEE4-4655-4A21-B18E-6BF9FC0F7923.jpg', 'uploads/2022/02', '2022-03-05 06:35:58'),
(2, 15, '1EE36255-0B43-4AD6-AE59-879ED3888CA7.jpg', 'small_1EE36255-0B43-4AD6-AE59-879ED3888CA7.jpg', 'uploads/2022/03', '2022-03-06 04:50:27'),
(3, 16, 'C2A62E0D-C164-444F-9A6A-13D571684E9A.jpg', 'small_C2A62E0D-C164-444F-9A6A-13D571684E9A.jpg', 'uploads/2022/03', '2022-03-06 04:51:29'),
(4, 16, '4DFACE04-48AC-443E-91F6-1B92C72EA08D.jpg', 'small_4DFACE04-48AC-443E-91F6-1B92C72EA08D.jpg', 'uploads/2022/03', '2022-03-06 04:51:29'),
(5, 17, 'B9EBC179-8D5A-412A-948A-0C8977D75207.jpg', 'small_B9EBC179-8D5A-412A-948A-0C8977D75207.jpg', 'uploads/2022/03', '2022-03-06 11:19:00');

-- --------------------------------------------------------

--
-- Görünüm yapısı `get_projects_view`
--
DROP TABLE IF EXISTS `get_projects_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_projects_view`  AS  select `projects`.`id` AS `id`,`projects`.`name` AS `name`,`projects`.`title` AS `title`,`projects`.`description` AS `description`,`projects`.`date` AS `date`,`projects`.`url` AS `url`,`projects`.`created_at` AS `created_at`,`projects`.`updated_at` AS `updated_at`,`project_images`.`original_image` AS `original_image`,`project_images`.`image_path` AS `image_path` from (`projects` join `project_images` on((`project_images`.`project_id` = `projects`.`id`))) group by `projects`.`id` ;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `project_images`
--
ALTER TABLE `project_images`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tablo için AUTO_INCREMENT değeri `project_images`
--
ALTER TABLE `project_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
