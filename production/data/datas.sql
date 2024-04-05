-- phpMyAdmin SQL Dump
-- version 5.1.3-2.el7.remi
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Apr 04, 2024 at 11:55 AM
-- Server version: 10.2.25-MariaDB
-- PHP Version: 7.2.34

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saezoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `id` int(11) NOT NULL,
  `famille_animal_id` int(11) DEFAULT NULL,
  `nom_animal` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_naissance` date NOT NULL,
  `date_mort` date DEFAULT NULL,
  `taille` double NOT NULL,
  `poids` double NOT NULL,
  `caracteristique` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_animal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `animal`
--

TRUNCATE TABLE `animal`;
--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`id`, `famille_animal_id`, `nom_animal`, `date_naissance`, `date_mort`, `taille`, `poids`, `caracteristique`, `img_animal`) VALUES
(1, 2, 'Shana', '2012-09-19', NULL, 379.68, 3595.31, 'Vel dolor dolores qui non illo vel autem. Ut officia architecto qui iste ex architecto. Nesciunt maiores iusto repudiandae est.', 'animal-placeholder.png'),
(2, 16, 'Laverna', '2010-06-08', '2021-05-23', 242.21, 3003.36, 'Incidunt eligendi suscipit ut sed recusandae. Sint voluptatum hic sit est consequatur numquam.', 'animal-placeholder.png'),
(3, 32, 'Rhiannon', '2005-12-22', NULL, 284.66, 4293.95, 'Earum accusamus dolore dolor fuga qui similique in. Illum quia id quae dolorum ut. Nobis voluptas hic id ex a dolorum qui.', 'animal-placeholder.png'),
(4, 59, 'Mireya', '2004-09-10', '2016-01-26', 786.18, 3366.09, 'Et aliquam ipsum quae porro ipsa nihil. Harum est et incidunt. Aut sunt debitis et consequatur nam illo fuga.', 'animal-placeholder.png'),
(5, 16, 'Wilmer', '2008-12-12', '2014-12-25', 215.74, 5465.48, 'Aliquam quam voluptas doloremque magni impedit dolore. Ut sint non quod ea a. Aperiam voluptatem tenetur qui et sint aperiam.', 'animal-placeholder.png'),
(6, 28, 'Chaim', '2007-03-30', NULL, 415.33, 293.79, 'Autem est aliquid soluta vel sunt cum. Ut omnis excepturi expedita et. Sequi est sunt officia est rerum doloremque sed numquam.', 'animal-placeholder.png'),
(7, 47, 'Gisselle', '2011-11-20', NULL, 315.5, 2054.02, 'Libero non voluptates ut sapiente. Exercitationem non velit eius deserunt. Tenetur eos pariatur aut iusto voluptas.', 'animal-placeholder.png'),
(8, 35, 'Franco', '2010-10-23', NULL, 722.86, 4379.72, 'Magnam iure accusamus asperiores illum maiores eum. Accusantium nesciunt ea assumenda ducimus velit debitis non.', 'animal-placeholder.png'),
(9, 60, 'Destin', '2006-06-12', '2021-03-21', 137.19, 802.84, 'Itaque quia at itaque sequi aspernatur minus. Sit placeat voluptas odio. Dicta ut quia ut omnis assumenda.', 'animal-placeholder.png'),
(10, 4, 'Michele', '2004-07-26', '2019-01-28', 551.43, 4600.43, 'Consectetur hic mollitia qui rem. Dolores qui quasi nam omnis in laboriosam et. Provident eaque sed sunt ut at.', 'animal-placeholder.png'),
(11, 60, 'Leanna', '2006-09-26', NULL, 428.04, 4744.34, 'Ea aliquam aut animi repellat nostrum. Tenetur fugiat dolores minima sequi et sed dolorem. Nobis voluptatem vitae qui esse et.', 'animal-placeholder.png'),
(12, 19, 'Michale', '2006-03-24', '2017-12-03', 669.37, 3817.58, 'Aliquid id odit est perferendis. Perferendis quae velit est sit incidunt voluptate. Deleniti quo vel at rerum.', 'animal-placeholder.png'),
(13, 9, 'Jayme', '2004-10-09', NULL, 466.34, 1640.69, 'Nesciunt repudiandae expedita ut sed. Porro minus dicta vel natus. Qui rerum facere error error.', 'animal-placeholder.png'),
(14, 30, 'Wava', '2011-07-19', '2015-07-09', 217.84, 2766.32, 'Sequi eum nulla id dolorem nemo. Quia saepe nihil alias molestiae ex et iure. Quas id et est et. Vel commodi facilis rerum.', 'animal-placeholder.png'),
(15, 22, 'Norma', '2013-12-18', '2014-11-10', 774.95, 2926.64, 'Accusamus distinctio modi facere incidunt. Sequi dolores totam aspernatur. Pariatur excepturi iure cum.', 'animal-placeholder.png'),
(16, 51, 'Elyse', '2013-08-25', '2016-02-28', 530.67, 2129.93, 'Quibusdam quos nihil saepe sed veritatis. Earum velit omnis et consequatur. Quae odit ut quasi vitae.', 'animal-placeholder.png'),
(17, 48, 'Ricky', '2010-08-25', NULL, 159.61, 635.75, 'Non quis qui quo soluta et est fugit. Et quia voluptatibus assumenda explicabo vel. Provident in rem velit ut magni omnis eum.', 'animal-placeholder.png'),
(18, 23, 'Berniece', '2011-12-06', NULL, 520.36, 5591.77, 'Et est rerum ipsa et vero provident soluta. Est in id pariatur et. Ut ut quia deleniti asperiores consequatur.', 'animal-placeholder.png'),
(19, 54, 'Susana', '2005-03-28', NULL, 299.59, 969.45, 'Ut aut aut nulla molestiae laudantium inventore. Alias in sit ipsa error nihil molestiae. Molestiae facilis et nobis ipsa qui.', 'animal-placeholder.png'),
(20, 37, 'Marlon', '2007-02-03', NULL, 281.87, 2435.01, 'Inventore dolorem maxime excepturi aut. Sint animi quos id doloremque et vel non. Blanditiis quasi quia excepturi.', 'animal-placeholder.png'),
(21, 39, 'Einar', '2004-08-26', '2022-04-07', 270.49, 728.97, 'Accusantium voluptatum eum explicabo. Non temporibus corporis sequi reiciendis. Numquam voluptates animi asperiores.', 'animal-placeholder.png'),
(22, 50, 'Maiya', '2011-04-18', NULL, 473.74, 656.34, 'Beatae dolores voluptatem eaque. Et maxime itaque blanditiis quasi. Possimus temporibus ut qui delectus voluptatem odio.', 'animal-placeholder.png'),
(23, 11, 'Horacio', '2010-12-26', NULL, 435.21, 746.41, 'Culpa officia officiis aut. Non illo a beatae et totam autem. Suscipit voluptatem facere nulla quasi fuga.', 'animal-placeholder.png'),
(24, 48, 'Daryl', '2010-07-24', '2016-04-29', 28.08, 4546.24, 'Enim inventore perferendis praesentium et. Et est consectetur nemo quo. Aut velit in minima at et sunt ducimus veritatis.', 'animal-placeholder.png'),
(25, 16, 'Ima', '2012-08-02', NULL, 651.39, 105.37, 'Et ut voluptas ipsum. Eos quae quam ut sit.', 'animal-placeholder.png');

-- --------------------------------------------------------

--
-- Table structure for table `asso_event_animal`
--

CREATE TABLE `asso_event_animal` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `animal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `asso_event_animal`
--

TRUNCATE TABLE `asso_event_animal`;
--
-- Dumping data for table `asso_event_animal`
--

INSERT INTO `asso_event_animal` (`id`, `event_id`, `animal_id`) VALUES
(1, 23, 4),
(2, 47, 15),
(3, 10, 11),
(4, 53, 19),
(5, 29, 8),
(6, 12, 5),
(7, 1, 2),
(8, 50, 20),
(9, 32, 23),
(10, 25, 3),
(11, 20, 14),
(12, 24, 1),
(13, 44, 14),
(14, 19, 6),
(15, 24, 25),
(16, 39, 5),
(17, 14, 15),
(18, 26, 12),
(19, 3, 7),
(20, 43, 23);

-- --------------------------------------------------------

--
-- Table structure for table `asso_event_date_event`
--

CREATE TABLE `asso_event_date_event` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `date_event_id` int(11) NOT NULL,
  `horaire` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `asso_event_date_event`
--

TRUNCATE TABLE `asso_event_date_event`;
--
-- Dumping data for table `asso_event_date_event`
--

INSERT INTO `asso_event_date_event` (`id`, `event_id`, `date_event_id`, `horaire`) VALUES
(1, 37, 6, '18'),
(2, 14, 3, '08'),
(3, 54, 11, '19'),
(4, 12, 12, '02'),
(5, 59, 17, '07'),
(6, 59, 12, '12'),
(7, 56, 2, '21'),
(8, 5, 15, '18'),
(9, 60, 20, '04'),
(10, 41, 5, '22'),
(11, 12, 13, '15'),
(12, 58, 16, '22'),
(13, 35, 3, '06'),
(14, 5, 5, '10'),
(15, 18, 6, '11'),
(16, 5, 15, '07'),
(17, 49, 17, '00'),
(18, 24, 7, '03'),
(19, 30, 2, '14'),
(20, 49, 20, '14');

-- --------------------------------------------------------

--
-- Table structure for table `asso_event_reservation`
--

CREATE TABLE `asso_event_reservation` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `asso_event_reservation`
--

TRUNCATE TABLE `asso_event_reservation`;
--
-- Dumping data for table `asso_event_reservation`
--

INSERT INTO `asso_event_reservation` (`id`, `event_id`, `reservation_id`) VALUES
(1, 35, 16),
(2, 7, 24),
(3, 28, 24),
(4, 2, 1),
(5, 15, 11),
(6, 47, 1),
(7, 13, 30),
(8, 1, 1),
(9, 13, 17),
(10, 51, 27),
(11, 12, 10),
(12, 51, 15),
(13, 46, 19),
(14, 26, 14),
(15, 56, 26),
(16, 50, 14),
(17, 25, 10),
(18, 49, 9),
(19, 35, 15),
(20, 49, 24);

-- --------------------------------------------------------

--
-- Table structure for table `asso_event_zone_parc`
--

CREATE TABLE `asso_event_zone_parc` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `zone_parc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `asso_event_zone_parc`
--

TRUNCATE TABLE `asso_event_zone_parc`;
--
-- Dumping data for table `asso_event_zone_parc`
--

INSERT INTO `asso_event_zone_parc` (`id`, `event_id`, `zone_parc_id`) VALUES
(1, 60, 45),
(2, 41, 20),
(3, 27, 38),
(4, 51, 20),
(5, 26, 22),
(6, 53, 28),
(7, 58, 22),
(8, 20, 23),
(9, 60, 24),
(10, 1, 36),
(11, 57, 10),
(12, 20, 33),
(13, 10, 27),
(14, 17, 36),
(15, 58, 1),
(16, 37, 41),
(17, 5, 44),
(18, 42, 27),
(19, 53, 26),
(20, 17, 21);

-- --------------------------------------------------------

--
-- Table structure for table `asso_habitat_famille_animal`
--

CREATE TABLE `asso_habitat_famille_animal` (
  `id` int(11) NOT NULL,
  `habitat_id` int(11) NOT NULL,
  `famille_animal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `asso_habitat_famille_animal`
--

TRUNCATE TABLE `asso_habitat_famille_animal`;
--
-- Dumping data for table `asso_habitat_famille_animal`
--

INSERT INTO `asso_habitat_famille_animal` (`id`, `habitat_id`, `famille_animal_id`) VALUES
(1, 2, 5),
(2, 3, 5),
(3, 1, 23),
(4, 2, 41),
(5, 4, 5),
(6, 5, 59),
(7, 2, 26),
(8, 6, 18),
(9, 5, 4),
(10, 4, 24),
(11, 3, 25),
(12, 2, 38),
(13, 2, 46),
(14, 4, 28),
(15, 6, 47),
(16, 1, 39),
(17, 4, 27),
(18, 2, 29),
(19, 3, 26),
(20, 1, 33),
(21, 5, 38),
(22, 3, 23),
(23, 1, 51),
(24, 3, 40),
(25, 1, 60);

-- --------------------------------------------------------

--
-- Table structure for table `billet`
--

CREATE TABLE `billet` (
  `id` int(11) NOT NULL,
  `nb_jours` int(11) NOT NULL,
  `tarif_adult` double NOT NULL,
  `tarif_child` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `billet`
--

TRUNCATE TABLE `billet`;
--
-- Dumping data for table `billet`
--

INSERT INTO `billet` (`id`, `nb_jours`, `tarif_adult`, `tarif_child`) VALUES
(1, 1, 7.5, 5),
(2, 2, 12.5, 7.5);

-- --------------------------------------------------------

--
-- Table structure for table `date_event`
--

CREATE TABLE `date_event` (
  `id` int(11) NOT NULL,
  `date_event` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `date_event`
--

TRUNCATE TABLE `date_event`;
--
-- Dumping data for table `date_event`
--

INSERT INTO `date_event` (`id`, `date_event`) VALUES
(1, '2024-04-06'),
(2, '2024-04-15'),
(3, '2024-04-12'),
(4, '2024-04-21'),
(5, '2024-04-14'),
(6, '2024-04-16'),
(7, '2024-04-09'),
(8, '2024-05-01'),
(9, '2024-04-30'),
(10, '2024-04-10'),
(11, '2024-04-25'),
(12, '2024-04-19'),
(13, '2024-04-25'),
(14, '2024-04-22'),
(15, '2024-04-12'),
(16, '2024-05-02'),
(17, '2024-04-08'),
(18, '2024-04-09'),
(19, '2024-04-21'),
(20, '2024-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncate table before insert `doctrine_migration_versions`
--

TRUNCATE TABLE `doctrine_migration_versions`;
--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20240203195419', '2024-04-04 13:50:20', 494),
('DoctrineMigrations\\Version20240203201151', '2024-04-04 13:50:20', 5),
('DoctrineMigrations\\Version20240204165824', '2024-04-04 13:50:20', 96),
('DoctrineMigrations\\Version20240204172129', '2024-04-04 13:50:20', 573),
('DoctrineMigrations\\Version20240204172654', '2024-04-04 13:50:21', 42),
('DoctrineMigrations\\Version20240206193043', '2024-04-04 13:50:21', 61),
('DoctrineMigrations\\Version20240206193202', '2024-04-04 13:50:21', 11),
('DoctrineMigrations\\Version20240206193607', '2024-04-04 13:50:21', 64),
('DoctrineMigrations\\Version20240206194627', '2024-04-04 13:50:21', 151),
('DoctrineMigrations\\Version20240207222605', '2024-04-04 13:50:21', 639),
('DoctrineMigrations\\Version20240218111411', '2024-04-04 13:50:22', 214),
('DoctrineMigrations\\Version20240328173722', '2024-04-04 13:50:22', 68),
('DoctrineMigrations\\Version20240328175225', '2024-04-04 13:50:22', 75),
('DoctrineMigrations\\Version20240328175920', '2024-04-04 13:50:22', 66);

-- --------------------------------------------------------

--
-- Table structure for table `espece`
--

CREATE TABLE `espece` (
  `id` int(11) NOT NULL,
  `lib_espece` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `espece`
--

TRUNCATE TABLE `espece`;
--
-- Dumping data for table `espece`
--

INSERT INTO `espece` (`id`, `lib_espece`) VALUES
(1, 'Arthropoda'),
(2, 'Mollusca'),
(3, 'Chordata'),
(4, 'Platyhelminthes'),
(5, 'Cnidaria'),
(6, 'Annelida'),
(7, 'Echinodermata'),
(8, 'Porifera');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `nom_event` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nb_places` int(11) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_event` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `event`
--

TRUNCATE TABLE `event`;
--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `nom_event`, `nb_places`, `description`, `img_event`) VALUES
(1, 'Ballet de dauphins', 97, 'Dolore distinctio ut velit. Quo aut eum aut distinctio. In enim reprehenderit neque odit perspiciatis eaque consequatur et. Quis nihil beatae aliquam est. Est sed voluptatem distinctio vel. Deserunt adipisci expedita est qui quo. Cumque tempore quos aut aspernatur. Consequatur ab nemo perspiciatis eos atque hic nostrum. Nihil et magni explicabo corrupti. Et quaerat vel ipsum et nulla. Id voluptatibus cum ut autem rerum non.', 'soigneur.jpg'),
(2, 'Visites guidées', 66, 'Alias rerum et esse quia cum reiciendis. Iusto consequatur ut minima quisquam. Omnis id consequatur ab aut temporibus earum in. Quia consectetur eligendi sunt et quaerat. Dolorem rerum harum minus harum et earum temporibus dolores. Quibusdam voluptatem consequatur odit velit neque vel. Est autem et earum. Eius voluptas voluptatem sit earum.', 'soigneur.jpg'),
(3, 'Activités ludiques pour enfants', 66, 'Nam corrupti sed fugiat quia voluptate vel. Voluptas sint dolorem sit necessitatibus. Aut iure id illo asperiores. Laborum temporibus sint totam doloribus qui dicta beatae. Qui doloribus cumque et sit. Et aut explicabo error deserunt sed. Ullam qui cumque vel et et. Vel cum nisi voluptas sequi rem officiis. Consequuntur omnis ex vitae dolorum laborum. Ex repellendus ut odio vitae. Alias sunt quae odit ut consequuntur.', 'soigneur.jpg'),
(4, 'Spectacle avec les oiseaux', 68, 'Quia est laudantium at quis fuga et possimus. Earum voluptatum sapiente aut nobis possimus. Hic eos rerum cumque sit non. Cum dignissimos cum occaecati eveniet. Autem eum esse eos est unde reiciendis sequi. Vero molestiae consequatur voluptas. Magni quia ut non ad minus saepe. Deleniti quis neque vel tempora. Veritatis repellendus quis id voluptates voluptatem. Sapiente facere id reiciendis sunt qui minima veniam iusto.', 'soigneur.jpg'),
(5, 'Activités ludiques pour enfants', 59, 'Minima neque modi beatae. Vero corporis accusantium expedita. Adipisci eaque sunt natus necessitatibus aut consequatur. Tempore rerum laborum numquam voluptatem quo et recusandae aperiam. Deleniti eius aspernatur voluptatum ea voluptates dolorum. Pariatur omnis aut placeat nostrum. Enim blanditiis suscipit voluptatum sed neque mollitia. Nobis dolor maiores ut temporibus velit sit aut.', 'soigneur.jpg'),
(6, 'Activités ludiques pour enfants', 50, 'Modi commodi sint sunt accusantium est sequi. Et voluptatem alias nam minima. Est at id qui sapiente dolor magni et facere. Fugit fuga molestias optio. Assumenda dolorum et omnis magnam non inventore soluta. Molestiae quis quisquam qui autem ut ea. Eos libero aut dolores repellendus laboriosam est blanditiis. Doloribus fuga eius sed aut quo. Aliquam numquam aut reiciendis corrupti nihil doloribus ut. Aliquid aut velit corporis animi qui accusamus et. Ab itaque ipsam qui nihil est dolor dignissimos.', 'soigneur.jpg'),
(7, 'Spectacle avec les oiseaux', 89, 'Et cumque ea velit animi corporis in. Sunt vero est eos dolores tempora ad est. Ut ea dolores sed. Quia cupiditate magnam laborum. Vero repellendus laborum qui molestiae eius et. Eum illum quibusdam non iusto voluptatem est rem. Sint repudiandae aut aut. Eum ut ex quia iusto illo aut voluptas. Rerum quia autem nesciunt. Cum repudiandae molestiae omnis error omnis. Voluptatem provident numquam dignissimos.', 'soigneur.jpg'),
(8, 'Spectacle avec les oiseaux', 69, 'Id molestiae rerum sed nulla. Repellendus culpa eum aut cumque esse sint sed voluptatem. Labore natus a ut hic error iure. Dolores assumenda sed non consequatur suscipit omnis qui veritatis. Atque voluptatum cumque dolor culpa. Enim possimus voluptate vel. Provident dolor modi mollitia blanditiis doloribus.', 'soigneur.jpg'),
(9, 'Spectacle avec les oiseaux', 74, 'Qui nesciunt est aut soluta dolorem voluptas. Sed expedita neque expedita harum. Quidem totam fuga quia quod perferendis. In suscipit nemo repellat explicabo ab asperiores. Neque consequatur commodi doloribus sapiente. Dignissimos non ut suscipit consequatur. Autem eveniet velit nisi consequatur occaecati atque autem corrupti. Doloribus ut neque dolor est. Quisquam ipsam quam impedit sed. Quam nihil facere quo laudantium rerum vero et culpa. Modi dolore consequatur dolorem atque temporibus facere.', 'soigneur.jpg'),
(10, 'Visites guidées', 75, 'Mollitia consectetur quasi amet. Laboriosam atque nihil repellat minima et. Excepturi velit repudiandae et exercitationem veritatis dolores ab illum. Quis ab et ipsa sit nihil ratione sed. Fugit ex quis perspiciatis exercitationem qui nemo. Voluptate officia labore officiis dolores impedit corrupti error. Et est architecto consequuntur et aspernatur vel ipsum dolor.', 'soigneur.jpg'),
(11, 'Ballet de dauphins', 95, 'Rerum fuga assumenda quis odit nesciunt quam dolores. Libero laborum voluptate voluptatibus est officiis sunt eveniet. Architecto porro est enim expedita beatae. Architecto accusantium sed ut. Neque et labore ducimus. Cum dolor in ut aliquid. Et aliquid doloremque ipsa consequatur dolorum. Accusantium aspernatur et ut laudantium. Rem minus suscipit cum veniam ratione illum. Quam neque id beatae occaecati inventore aliquid et cum. Et iste omnis ut maxime quos nobis. Autem natus libero et expedita.', 'soigneur.jpg'),
(12, 'Activités ludiques pour enfants', 51, 'Ut dolor tempora dolores modi vel fuga. Iure in provident explicabo nemo ipsam nihil iusto. Deleniti repudiandae ut unde. Ut eum qui earum nihil nihil sunt possimus. Iste veniam voluptas fugit et iusto distinctio hic. Deleniti aliquid fugit ut earum natus consequatur. Nesciunt magnam libero beatae id et. Impedit vel hic repudiandae fugiat inventore beatae. Asperiores velit ipsam neque non. Nesciunt quo assumenda nisi commodi. Ad dolor quasi excepturi assumenda optio.', 'soigneur.jpg'),
(13, 'Expérience de soigneur de pingouin', 68, 'Perferendis quis et minus eveniet. Non cupiditate nostrum esse voluptates. Ut fuga culpa pariatur. Voluptatem quia similique quia repellat debitis et ipsum officiis. Doloribus sint aspernatur rerum beatae. Explicabo inventore perspiciatis debitis magni sequi beatae sed. Autem et et est magnam. Molestiae quam natus a enim similique. Dicta exercitationem animi tempora eveniet sapiente id accusamus.', 'soigneur.jpg'),
(14, 'Spectacle avec les oiseaux', 62, 'Optio qui voluptatum autem odio a. Eos sequi consequatur sit consectetur ducimus labore amet. Architecto occaecati dignissimos et ab dolores necessitatibus. Dolore eligendi quam odit atque. Doloribus minima eligendi et aut quia iusto. Porro hic distinctio cupiditate velit error. Suscipit dolorem aliquid autem quia et. Ut molestiae quia rerum aut blanditiis fugit. Et libero animi cum enim molestiae totam. Molestias quia est voluptas.', 'soigneur.jpg'),
(15, 'Ballet de dauphins', 57, 'Dolore voluptas omnis laborum est. Quam alias ab quos eos error iure natus. Qui iusto numquam est odit. Vitae dignissimos libero quia omnis non distinctio. Ut beatae in et magnam. Doloremque et facere natus est atque architecto qui doloremque. Tenetur qui voluptatem dolorem vero sit. Dolores quidem est quis quae voluptatem nihil.', 'soigneur.jpg'),
(16, 'Visites guidées', 77, 'Voluptatem sapiente itaque quas. Et et sit aut nesciunt consequatur. Voluptas maxime dolor velit veniam ut ullam. Sed similique officiis distinctio nesciunt. Incidunt voluptatibus nihil corrupti eaque. Neque tempora impedit hic doloremque eum rerum libero. Est odit doloribus qui rerum ratione distinctio voluptatem quaerat. Voluptas voluptatem molestias qui est minima.', 'soigneur.jpg'),
(17, 'Visites guidées', 75, 'Rerum reprehenderit ipsam impedit cumque libero dicta. Est recusandae rem temporibus accusantium ex. Ut et perspiciatis voluptas dolores. Officia id numquam aut. Voluptatem voluptatem quibusdam iusto est eos nam dolor magnam. Illum itaque eum dignissimos rem aliquid voluptate iure. Et incidunt incidunt sed sed. Dolor mollitia labore error. Et quis ipsam similique unde enim amet. Sequi possimus velit repellat sit consequatur atque quasi molestiae.', 'soigneur.jpg'),
(18, 'Activités ludiques pour enfants', 58, 'Aspernatur voluptatem cumque cupiditate et molestiae ut quia dolores. Quisquam consectetur quibusdam sit harum. Eligendi ipsam consequatur est et sed dignissimos. Suscipit culpa consequatur quis. Pariatur quae voluptatem et aut. Laboriosam animi laborum voluptatem a non laboriosam eveniet. Aut suscipit voluptatem sed minima voluptatum molestias. Esse atque rerum sunt praesentium porro.', 'soigneur.jpg'),
(19, 'Ballet de dauphins', 50, 'Commodi quae ex aliquam asperiores quasi quasi animi accusantium. Occaecati ab ut fuga ipsam. Veritatis est blanditiis neque et in nesciunt nisi. Corrupti voluptatem quia fuga praesentium officiis necessitatibus inventore. Aspernatur beatae hic voluptatem quae. Consectetur soluta explicabo accusamus et. Aut est numquam dolor sint eos libero.', 'soigneur.jpg'),
(20, 'Activités ludiques pour enfants', 67, 'Consectetur odit esse dolor neque repellat in. In est impedit tempore. Autem non iste et qui perferendis velit consequatur. Eos repellendus tempore voluptas et. Esse harum sit dicta quo temporibus. Quis autem voluptatem quo non. Voluptatibus repellat nihil quas. Voluptate dicta officia eveniet velit saepe. Sit ea minima doloremque et incidunt amet.', 'soigneur.jpg'),
(21, 'Visites guidées', 64, 'In ut amet non. Perspiciatis officiis odit reprehenderit tenetur aut. Sunt neque quia sapiente unde ad voluptatem rerum. Vel excepturi libero debitis rerum autem. In explicabo officia magnam corrupti quia consequuntur quia. Delectus tempora totam voluptas fuga quia qui animi. Officiis vel earum quisquam voluptatibus quis explicabo. Velit libero iusto non id.', 'soigneur.jpg'),
(22, 'Expérience de soigneur de pingouin', 75, 'Quis praesentium aut sint quod. Illo labore atque et praesentium. Repudiandae nobis voluptate nobis nam rerum qui est. Veritatis assumenda perferendis eum voluptas perspiciatis similique aut. Molestiae perspiciatis nostrum iusto. Iste dolorem nobis asperiores in. Nisi vel in est officiis dolor asperiores quasi. Vel est excepturi alias quae sed velit nihil.', 'soigneur.jpg'),
(23, 'Ballet de dauphins', 62, 'Veritatis distinctio velit eveniet dolorum ratione. Nisi ullam a quaerat laborum officia. Consequuntur rerum eum unde. Aut debitis minus qui et. Expedita minus quo optio fugit corporis reiciendis eum. Cupiditate rerum aut voluptatem voluptate quo sint nostrum. Ipsa officiis hic dolorum rerum cupiditate quae. Dolorem mollitia nesciunt aut nemo quod. Facilis sed et beatae placeat dicta excepturi. Minus et et commodi error voluptatem consequatur.', 'soigneur.jpg'),
(24, 'Expérience de soigneur de pingouin', 55, 'Dignissimos ut voluptates et. Corrupti tempora sunt culpa accusantium a non. Molestiae qui a autem labore sit ab et. Eos unde ut quaerat laudantium harum sint omnis. Ducimus molestiae qui saepe sed. Consequuntur consequatur sapiente non voluptates fuga. Tenetur qui quia ducimus eligendi est unde. Officia corrupti inventore aperiam voluptate voluptates.', 'soigneur.jpg'),
(25, 'Visites guidées', 55, 'Voluptas recusandae fuga ipsam eaque ipsum ullam dolor ut. Quia repudiandae et error autem ab et ipsum rem. Consectetur accusantium possimus temporibus voluptate sed impedit consectetur. Ipsum blanditiis repudiandae quo quis exercitationem. Harum non ipsum optio magnam. Quidem voluptate cupiditate libero et. Ut rem recusandae autem. Et quasi aut eius exercitationem fugit labore. Sed omnis eius ratione odio.', 'soigneur.jpg'),
(26, 'Visites guidées', 69, 'Esse est reiciendis et at alias modi. Quas necessitatibus molestiae est omnis eum. Voluptatem minima tempore illo et. Eaque perferendis maxime consequatur voluptatem est. At laudantium unde error qui doloremque nisi modi. Inventore et aperiam cumque. Mollitia fugit vitae occaecati qui corporis. Officiis distinctio aspernatur non sit. Tempora quasi consequatur sint reprehenderit omnis odit.', 'soigneur.jpg'),
(27, 'Spectacle avec les oiseaux', 98, 'Velit nulla natus et sunt inventore architecto expedita. Fugiat praesentium quasi commodi quia dolores hic at. Aut repellendus sint aliquid labore nemo qui vel. Enim amet ut iure sunt quis temporibus totam. Non doloremque vel nulla fuga aperiam error. Et quibusdam blanditiis occaecati sint ut. Quod est officiis culpa in doloribus error est id. Harum fuga et ducimus. A quia culpa ut qui deserunt sapiente. Officia aliquid ab culpa aut ea sequi ipsa.', 'soigneur.jpg'),
(28, 'Activités ludiques pour enfants', 100, 'Saepe et culpa omnis debitis. Voluptas et aut et est ut. Laboriosam reprehenderit id mollitia et sed amet iure. Minus quas illum qui officia. Sunt sed in fugit non dolorem. Animi recusandae non distinctio molestiae. In provident ex perferendis. Quae ipsam itaque eius quas. Deleniti deserunt ad dolor doloribus adipisci id totam. Repellat sed et in et. Eveniet sunt ratione consequatur quae aut quia. Possimus est molestiae quod. Ut nisi necessitatibus ullam voluptatem laborum earum.', 'soigneur.jpg'),
(29, 'Visites guidées', 87, 'Officia tempora totam et illo et voluptatem dolor. Nobis nihil saepe rerum velit et. Impedit dolorum voluptas velit perferendis quia. Deserunt doloribus possimus expedita nobis excepturi magni. Libero reprehenderit cupiditate ea consequuntur doloremque. Beatae id inventore est excepturi molestiae. Beatae voluptatem quam quis ullam dolorum possimus. Non officiis non velit aperiam aut.', 'soigneur.jpg'),
(30, 'Ballet de dauphins', 83, 'Est impedit aut aut incidunt et et iusto. Cupiditate fugit facilis quos doloremque autem sunt. Natus enim possimus impedit nisi eius voluptatem autem. Occaecati harum sint ipsum occaecati facilis est occaecati. Voluptas quo consectetur aut. Quia quidem voluptatem beatae consectetur dicta vitae. Molestiae minus eum explicabo est dolores. Doloremque eum non voluptates illo eius esse eos. Quasi vitae consequuntur aut iure. Distinctio magnam natus dolorem beatae voluptatum reiciendis quia iste.', 'soigneur.jpg'),
(31, 'Ballet de dauphins', 87, 'Fuga dolorum animi repellendus ipsum et ea illum. Sunt accusamus ut nulla mollitia eum porro officia est. Fugiat adipisci voluptas laudantium et veniam et. Consequuntur et veritatis illum beatae quia labore vitae. Iste autem repellendus est ut. Sequi maiores aspernatur perferendis. Est labore quae architecto sunt saepe quia vero. Optio in maxime et saepe. Qui assumenda harum vel aut. Vel nihil ut iure animi eius debitis a impedit. Voluptatem vel corporis repellat facilis adipisci aut.', 'soigneur.jpg'),
(32, 'Expérience de soigneur de pingouin', 92, 'Quia voluptatem molestiae dicta eveniet quo occaecati. Corrupti ut ratione quod ratione. Minima nesciunt et neque modi inventore eum. Aliquam sed amet rem ut deleniti voluptatibus dolor. Earum incidunt sunt ea et. Et inventore ducimus repellat quod. Quia blanditiis quis voluptatem eos. Qui eum quisquam porro minus accusantium. Rem voluptates eum consequatur dicta consequatur odio fugit. Placeat dolorem enim sed harum consequatur eligendi.', 'soigneur.jpg'),
(33, 'Expérience de soigneur de pingouin', 54, 'Cupiditate iusto voluptatem beatae omnis. Eum ipsa repellat nemo. Quis est harum voluptatem tempore. Molestiae harum earum unde debitis et. Minus sed ut fugit iusto. Id omnis et suscipit deserunt quos nihil. Ducimus est et nesciunt exercitationem consequatur optio quia. Odio et accusamus vel inventore. Quod beatae dolorum blanditiis omnis consequatur pariatur. Perferendis non deserunt cumque nisi eos. Cumque in quibusdam nemo repellat repellendus repellendus similique.', 'soigneur.jpg'),
(34, 'Activités ludiques pour enfants', 88, 'Et culpa ea architecto necessitatibus rerum. Aperiam ad dolor aut aut. Est harum et pariatur nemo architecto voluptas. Inventore dolorem ducimus occaecati. Et dolores quidem odio placeat. In sit ut nihil ab. Dolorum aut reiciendis ipsam voluptates ex. Rerum sint ullam dolorum id dolorum veritatis quas. Natus commodi ea a soluta fugiat quibusdam amet. Explicabo non possimus doloremque nobis eum. Et corrupti similique doloribus quam aut. Tempora eius quibusdam voluptatem voluptate rerum.', 'soigneur.jpg'),
(35, 'Activités ludiques pour enfants', 80, 'Ea est consequatur quibusdam qui. Mollitia ut qui alias occaecati reiciendis. Perspiciatis iure et eum sint. Consequatur omnis excepturi et. In occaecati et atque illo ratione delectus. Modi sint beatae qui eligendi possimus quod ea. Accusamus est perspiciatis dignissimos aut facilis quia. Dolor ipsum aut similique et provident. Necessitatibus et nihil tempora est nostrum. Molestias voluptates quo illo tenetur autem et omnis odio. Voluptas nobis sint accusantium et aut.', 'soigneur.jpg'),
(36, 'Visites guidées', 59, 'Tenetur inventore quidem cupiditate quidem possimus nihil placeat. Aperiam dolore nihil perspiciatis omnis qui aut sequi. Dolorum aut et ut et ex et eos fuga. Quod sit id ratione itaque adipisci. Perspiciatis laborum aperiam assumenda numquam distinctio unde maxime. Aut explicabo perspiciatis eligendi ullam. Modi minus rerum adipisci odio dolor.', 'soigneur.jpg'),
(37, 'Ballet de dauphins', 68, 'Esse officiis eos dicta. Deleniti amet repellat et sit minima nesciunt quis. Incidunt amet consequatur quis voluptas quod molestiae non. Animi qui et consequuntur autem eius eligendi et. Asperiores et laborum dolorum in voluptatem consequatur sed. Eligendi eos pariatur atque repellat. Neque autem at sint recusandae cum. Voluptatem possimus ut voluptas excepturi a unde quod. Rerum nam iste rem cum optio iusto quidem. Quo sapiente quod officia molestias laborum qui recusandae quibusdam.', 'soigneur.jpg'),
(38, 'Spectacle avec les oiseaux', 72, 'Error dolor molestiae architecto omnis. Temporibus aut non aperiam soluta sunt totam. Molestias eum optio omnis iusto voluptate ex quibusdam. Enim atque neque atque eos libero et ut. Dolores sequi consequatur vero voluptate. Voluptatum et et qui enim dignissimos. Maxime consequuntur eos iure et quo. Eligendi in ipsam alias natus. Rerum ut distinctio necessitatibus nihil repellendus. Quod perferendis consectetur tenetur quae excepturi explicabo iure. Doloribus rerum illum sit odio omnis non ex.', 'soigneur.jpg'),
(39, 'Spectacle avec les oiseaux', 91, 'Dolorum voluptate quae deserunt autem assumenda dolor. Veritatis officiis voluptatibus quaerat totam. Non nesciunt perferendis omnis cum sunt ex libero mollitia. Molestias at repellat culpa veniam. Enim sed quas ducimus adipisci omnis fugiat. Nihil sit eos iure minus. Repudiandae culpa facilis quis voluptatibus non. Laborum qui quisquam nisi placeat deleniti.', 'soigneur.jpg'),
(40, 'Ballet de dauphins', 60, 'Fugit velit sit quod et qui libero qui sit. Et sed dicta qui quis ipsum in qui quidem. Laborum enim itaque ea nihil debitis maiores dolorem. Non eum consequatur incidunt. Consectetur voluptatem voluptas quo exercitationem. Fugit esse omnis natus excepturi exercitationem. Provident ad aperiam dolores voluptatem. Soluta ipsum placeat eligendi eum. Perspiciatis dolor consequatur autem omnis pariatur in accusamus. Inventore dolorem totam est est ipsam ex. Sed rerum accusamus aspernatur.', 'soigneur.jpg'),
(41, 'Activités ludiques pour enfants', 86, 'Dolorem vero ducimus commodi aut aperiam id. Recusandae aliquam deleniti pariatur excepturi sit qui ut debitis. Qui aut quis inventore blanditiis molestiae qui. Modi sed voluptatem magnam velit quis. Sint accusamus voluptatem expedita reiciendis. Assumenda qui ad cupiditate iusto aliquam quis atque. Delectus mollitia ullam nisi iste in velit. Consequatur officiis sed autem repellat velit quia fuga.', 'soigneur.jpg'),
(42, 'Activités ludiques pour enfants', 88, 'Quis delectus nihil sunt deserunt eos dolores alias. Minus eum voluptas ipsa reiciendis at. Et facere id quis quae sint et. Quasi velit est possimus et qui rem cumque. Dolor id qui praesentium est sed tenetur. Tenetur et molestiae cumque cumque. Aut et magnam iusto ut et quia totam. Ea doloremque quibusdam cum quos aperiam. Et modi animi cupiditate consectetur non est omnis. Nesciunt sit quis iusto est maiores. Earum hic aperiam harum eius sed non.', 'soigneur.jpg'),
(43, 'Expérience de soigneur de pingouin', 80, 'Et ullam omnis qui id aut expedita ea. Recusandae nulla itaque enim vel. Rerum error ipsa optio non aspernatur omnis deleniti inventore. Sequi eos numquam ratione nam. Reprehenderit et recusandae nemo vitae. Excepturi voluptatem sed numquam quisquam corrupti. Ea voluptate sed fuga quam qui accusantium. Sint facere sequi placeat dolorem dolor et accusamus. Possimus et deleniti voluptatem placeat possimus. Est reiciendis velit nostrum.', 'soigneur.jpg'),
(44, 'Activités ludiques pour enfants', 88, 'Voluptas sed saepe repudiandae velit id sit totam. Ullam aut laborum dolores. Possimus omnis quos dolor et. Neque id animi quas quas dolorum voluptatem. Consequatur recusandae blanditiis ut voluptatem. Harum possimus facilis omnis soluta voluptatem facere possimus. Dolore quia facilis aut molestiae. Autem sed corporis voluptatem. Sint minima laudantium id optio dolorem voluptatem fugiat. Ea non dignissimos ab saepe suscipit. Ab ad amet velit delectus tempore laboriosam.', 'soigneur.jpg'),
(45, 'Visites guidées', 65, 'Similique occaecati beatae architecto a corporis consectetur dolorum. Placeat est sed asperiores rem. Quos at temporibus praesentium quo. Error est eveniet doloribus. Exercitationem iusto illum culpa soluta veritatis ut eos. Sunt et fugiat alias earum a dolorum ex. Dolorum voluptatem architecto tenetur sapiente voluptatem. Repellendus eum rerum voluptas at perspiciatis debitis sit.', 'soigneur.jpg'),
(46, 'Visites guidées', 81, 'Harum sed soluta dolores itaque. Iusto quia eos aut accusantium quia. Non voluptatem molestias ut ullam. Maiores et blanditiis praesentium. Quia incidunt velit mollitia ut. Aut ut reiciendis modi et incidunt. Dolores vero suscipit ea cumque. Ut recusandae nemo at qui nam qui et. Assumenda et perspiciatis tempora in laboriosam. Perspiciatis aut quod et facilis. Tempore omnis ut ipsum voluptatibus.', 'soigneur.jpg'),
(47, 'Visites guidées', 52, 'Neque nam aperiam voluptas quos. Fugiat dignissimos voluptatem neque inventore maxime deleniti fugiat. Sit eveniet sed consectetur cumque sit. Id est aut nulla autem perspiciatis placeat vel. Voluptatem quis optio beatae et voluptatem saepe.', 'soigneur.jpg'),
(48, 'Expérience de soigneur de pingouin', 61, 'Et perferendis id tenetur id. Inventore enim exercitationem id placeat possimus placeat. Quo consequatur et incidunt et qui. Ut odit enim beatae occaecati enim dolor. Non ut occaecati natus voluptatem quaerat dignissimos. Amet culpa facilis qui dolore quaerat praesentium eum. Soluta asperiores et deserunt pariatur. Ex vero vel velit facilis. Dolores corporis quaerat odit possimus odit accusamus. Sunt sed vero officia aut. Impedit autem corrupti consequatur id atque omnis.', 'soigneur.jpg'),
(49, 'Activités ludiques pour enfants', 77, 'Assumenda voluptatem maxime possimus. Eos numquam consectetur quisquam neque. Quos similique et dolorem quidem. Iure sed ea commodi perferendis. Id dolores eius nisi. Minima libero quia incidunt impedit voluptatem dignissimos. Qui dolorum dolores nisi nihil aut adipisci. Deleniti aut illo eos soluta occaecati. Ab non quo magnam nesciunt rerum quidem asperiores rerum. Id nulla laborum maiores nobis dolore at quo. Voluptas enim quasi nobis.', 'soigneur.jpg'),
(50, 'Expérience de soigneur de pingouin', 85, 'Dolorum recusandae exercitationem vitae inventore. Consequatur sit similique vel optio laboriosam et. Quas doloribus illo expedita asperiores. Voluptas amet earum rerum accusamus voluptatum. Et et aliquam dolor quia repellat suscipit natus. Dolores autem exercitationem ut dolores sunt tempore. Tenetur repudiandae rerum ducimus quia.', 'soigneur.jpg'),
(51, 'Spectacle avec les oiseaux', 81, 'Minus ratione sunt eum esse repudiandae nihil quidem. Quam quas placeat quaerat sunt laudantium. Rerum cupiditate quos facere ab laudantium sit ut. Beatae ducimus id molestiae qui alias perspiciatis sit. Totam aperiam error tempore quos. Laborum provident unde ut ut. Est eveniet rerum aperiam et enim magni iure molestiae. Incidunt consequatur eos repellendus nihil nihil fugit. Qui atque atque magnam libero assumenda id nam. Magnam saepe aut suscipit omnis hic quidem voluptatibus neque.', 'soigneur.jpg'),
(52, 'Spectacle avec les oiseaux', 64, 'Sunt quis quia voluptate repellat. Aliquam sint quia beatae dolor beatae sit vero. Vel quasi itaque ut dolor quia sed. Laborum voluptatem voluptatibus sed harum voluptatibus. Molestiae aut iste nihil delectus perferendis. Id explicabo quia sit libero vitae ex impedit. Accusantium cupiditate et quis ad natus alias incidunt. Ipsam doloremque numquam eligendi atque voluptatem sed animi.', 'soigneur.jpg'),
(53, 'Visites guidées', 57, 'Sint voluptatibus sint totam. Alias quae reprehenderit provident. Provident consequatur voluptatum nihil aut necessitatibus perferendis accusamus. Aut dolores quibusdam alias laudantium rem excepturi. Minus enim qui facilis accusamus. Est aliquam voluptate aut. Et voluptas doloribus itaque quibusdam ut dolorem fugiat maiores. Qui consequatur quia ratione voluptas voluptatem sit. Impedit corrupti molestiae dolores possimus ut. Pariatur officia aliquam quia.', 'soigneur.jpg'),
(54, 'Ballet de dauphins', 79, 'Totam maiores voluptatem earum recusandae facilis nobis. Voluptatibus facilis quo laboriosam dolores. Fugit aut praesentium saepe cumque ex. Aliquid est aut ut consequatur in et. Omnis ipsa nobis qui ut. Unde voluptatem quos tempora velit magnam. Alias quis fuga aut laborum saepe dicta. Consequatur officia magnam eveniet. Quia vitae voluptatem omnis. Ut consequatur sit corporis animi deleniti deleniti. Harum qui maiores quos eveniet voluptatum sit. Praesentium similique est eum id cum.', 'soigneur.jpg'),
(55, 'Activités ludiques pour enfants', 65, 'Non eveniet dolorum odio quaerat. Qui provident commodi iste nisi fugiat dolores qui. Enim quis praesentium dignissimos voluptates velit et nihil. Vero unde voluptatem ut exercitationem quasi consequatur dolorem ratione. Ipsam molestias quis atque iure placeat. Corrupti minus veritatis omnis quae quia corporis nam excepturi. Quas non odit sed. Autem occaecati harum tenetur voluptas enim.', 'soigneur.jpg'),
(56, 'Expérience de soigneur de pingouin', 52, 'Quia et commodi soluta quidem. Rem ea expedita labore cum. Possimus iste minima dolorum similique tempore dolores. Sit illum deserunt qui quisquam sequi voluptatem aspernatur. Qui ut perferendis tenetur totam alias ducimus inventore. Fugit dolor quia voluptatem ullam itaque. Id ad est rerum ad minima illum. Esse necessitatibus sed et tempora natus incidunt praesentium. Molestiae unde deleniti incidunt aperiam corrupti. Aut odio et minima aut.', 'soigneur.jpg'),
(57, 'Spectacle avec les oiseaux', 74, 'Aut sed et excepturi ratione ut voluptate. Corporis amet totam blanditiis aut tempore dolor. Repudiandae odio nihil est explicabo tempore. Dolorem voluptates sequi atque alias autem. Natus necessitatibus dignissimos quam ea at. Magni vel sed ut occaecati. Dolorum molestias consequuntur ullam mollitia dicta sunt odio. Iure suscipit porro culpa sed voluptatibus voluptatem. Delectus iusto suscipit expedita delectus qui quia dicta.', 'soigneur.jpg'),
(58, 'Visites guidées', 77, 'Voluptate saepe harum iste ullam ea nisi enim. Iusto aliquam qui blanditiis rerum nulla porro aut. Ipsum est aperiam et sequi. Ut et similique qui quia et doloribus non aut. Reiciendis vitae et atque non rem et aliquam delectus. Necessitatibus dolores sint quasi. Provident odio vero exercitationem non quas quod. Est hic reiciendis dolores qui distinctio nihil. Ut suscipit consequatur omnis. Nihil tempora aut tenetur aut sapiente voluptas molestias sit.', 'soigneur.jpg'),
(59, 'Spectacle avec les oiseaux', 83, 'Cumque ad vel autem et exercitationem sed non. Fuga praesentium vel aspernatur et. Aut et voluptas culpa et officia qui. Eius sequi explicabo ea similique omnis ea. Repellat minus nam accusamus quia. Deserunt iusto optio qui quis quidem. Ducimus esse quo fuga nisi. Mollitia quo est nostrum. Numquam ut quaerat et dolorem enim fugit dignissimos. Fuga quas illo possimus quisquam beatae ut velit corporis. Adipisci id quasi fugit sapiente. Quibusdam nesciunt deserunt magnam ut.', 'soigneur.jpg'),
(60, 'Expérience de soigneur de pingouin', 89, 'Modi quis aperiam veniam. Fuga placeat autem provident eius sunt repellat. Repellat dolorem placeat dolores molestiae non. At eveniet repudiandae adipisci praesentium voluptatum. Nobis sunt molestias numquam eius fuga nulla. Quod omnis minima cum odit non. Magni quos eos dolor quam odio voluptatem. Qui quo non odio aut porro ex. Deserunt est dignissimos quaerat ut. Voluptas labore qui quia aut incidunt aliquam quae nulla.', 'soigneur.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `famille_animal`
--

CREATE TABLE `famille_animal` (
  `id` int(11) NOT NULL,
  `zone_parc_id` int(11) DEFAULT NULL,
  `espece_id` int(11) DEFAULT NULL,
  `nom_famille_animal` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_scientifique` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danger_extinction` int(11) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_alimentation` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_famille` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `famille_animal`
--

TRUNCATE TABLE `famille_animal`;
--
-- Dumping data for table `famille_animal`
--

INSERT INTO `famille_animal` (`id`, `zone_parc_id`, `espece_id`, `nom_famille_animal`, `nom_scientifique`, `danger_extinction`, `description`, `type_alimentation`, `img_famille`) VALUES
(1, 44, 1, 'Tigre', 'sed error', 2, 'Laboriosam molestiae voluptatem non consequatur esse voluptas. Eos aut ut in quia. Ab nostrum ex incidunt amet maiores cumque. Repellendus et eius nobis sed. Ab in minima voluptatum quo et consequuntur quos. Quo omnis sed consequatur consequatur modi. Corrupti explicabo ut dolores id aut amet. Qui quo cupiditate cumque ipsa placeat ut. Et et aliquid repellendus commodi maxime at adipisci. Reiciendis fugiat nisi et dolor.', 'Herbivore', 'cerf.jpg'),
(2, 6, 8, 'Kiwi', 'aut pariatur', 1, 'Voluptatem veritatis qui consequatur enim fugit qui odit repellat. Est rerum architecto praesentium molestiae enim. Vel necessitatibus voluptas aut vero. Pariatur maxime reiciendis sed. Error et ut maiores aliquid voluptas. Ullam non commodi velit eius neque. Totam dolore explicabo cumque molestiae et aut. Dolor est minus autem et.', 'Omnivore', 'cerf.jpg'),
(3, 21, 6, 'Aigle', 'qui adipisci', 3, 'Alias ea laudantium vitae laborum. Libero aut praesentium quasi harum quisquam omnis. Provident est velit dolores ipsam ut. Quo quod dolor libero tempore et. Sequi voluptatem minima blanditiis et. Nobis qui voluptatum debitis omnis in minus aspernatur libero. Iusto qui consequuntur a nam. Dolorem sunt ut inventore debitis praesentium illo mollitia.', 'Omnivore', 'cerf.jpg'),
(4, 2, 3, 'Vaches', 'praesentium provident', 3, 'Quas est rerum iure voluptatibus amet. Cumque ut aspernatur mollitia quam quo ut nemo et. Provident autem consequatur ipsum repudiandae inventore. Minus molestiae sint nostrum consequatur facere est ipsam ea. Explicabo illum veniam sapiente repellat animi alias. Delectus et tenetur tempora enim aliquam officia sint. Dolor aut dolores provident omnis sit. Molestiae sit possimus tenetur saepe. Earum minus autem dignissimos delectus.', 'Omnivore', 'cerf.jpg'),
(5, 18, 5, 'Corbeau', 'accusamus et', 1, 'Alias nobis explicabo occaecati exercitationem velit explicabo. Delectus ratione incidunt aliquam vero et impedit laudantium. Ad suscipit consequuntur ipsum sed. Enim libero minima atque facere. Magnam qui nihil unde velit amet quaerat omnis reprehenderit. Consectetur ratione itaque nihil est ducimus. Repudiandae aliquid qui nesciunt autem. Quis id molestias qui est ullam harum in. Et unde et aut cumque ut. Similique assumenda vel eum nulla. Consequatur nisi dignissimos soluta eos accusantium.', 'Carnivore', 'cerf.jpg'),
(6, 41, 7, 'Serpent', 'blanditiis voluptas', 0, 'Culpa aut est hic fugiat error quisquam similique vero. Expedita recusandae a tempore nemo inventore voluptas ut. Earum quod est provident sed molestiae deleniti. Ducimus voluptatem dolores consectetur ex fugiat esse voluptates. Dolorem reiciendis alias assumenda perspiciatis temporibus omnis numquam. Sunt adipisci quis laudantium facere. Et ab soluta velit atque architecto. Illum quod excepturi sed sed est. Ipsum deleniti voluptatem sit minus. Hic in quaerat dolores cum. Tenetur vel suscipit quo.', 'Omnivore', 'cerf.jpg'),
(7, 8, 7, 'Zebre', 'ut vel', 4, 'Et doloribus consequuntur reprehenderit ducimus in quos quae et. Aut odio dolores commodi qui qui. Quis pariatur quod dolores tenetur. Ratione repellat voluptatem dolor distinctio. Labore consequuntur aut repudiandae nostrum. Quis unde similique eius omnis dignissimos voluptas qui aliquam. Corporis et corporis explicabo corporis quod. Possimus reiciendis mollitia magnam exercitationem quaerat et. Veniam nesciunt et quod blanditiis distinctio.', 'Carnivore', 'cerf.jpg'),
(8, 5, 5, 'Aigle', 'voluptas iusto', 3, 'Et sed ullam tempora doloremque velit voluptatem neque odit. Est in recusandae quibusdam commodi at. Ut rem ea error qui. Expedita ullam nemo odit dolorem deleniti molestias omnis earum. Minima quo sunt enim molestias. Quia rerum est nisi fugit voluptate. Ut maiores ratione fugiat iste laudantium. Reprehenderit aliquam ex maxime ullam explicabo ipsum. Blanditiis omnis doloribus quis similique aliquam aliquam placeat. Minus rerum autem expedita voluptas.', 'Omnivore', 'cerf.jpg'),
(9, 42, 2, 'Corbeau', 'quaerat dolor', 1, 'Fuga est animi a quia. Quisquam aut expedita et architecto modi. Dolor temporibus omnis itaque omnis facere sed. Ea qui tenetur quo quia. Accusamus aut nemo rem quia. Cumque sit commodi laborum non consequuntur neque et. Officia nisi tempora distinctio eos aliquid. Qui modi iure laudantium et nulla ad id. Enim quia distinctio et itaque sit veritatis odit. Omnis ex natus ullam id. Excepturi veritatis natus tempore.', 'Omnivore', 'cerf.jpg'),
(10, 15, 3, 'Vaches', 'deleniti ut', 0, 'Et quisquam dolorem vel molestias perferendis est. Quis ducimus nihil officiis totam. Et voluptate nulla et consequatur atque id explicabo. Et est aut unde aut nam. Libero nemo quam corrupti ex repellat reprehenderit amet. Eos sequi laboriosam cum recusandae cum. Magni placeat voluptatem laudantium rerum sequi vel mollitia iste. Corporis sunt et odio. Neque iste expedita quis qui sit sed deserunt. Et quo ducimus delectus et delectus minus. Voluptate cum omnis debitis expedita quidem quam doloribus.', 'Omnivore', 'cerf.jpg'),
(11, 39, 4, 'Serpent', 'dolor iste', 2, 'Autem eveniet cupiditate expedita. Quam et non eum aliquid. Natus non numquam omnis nemo eius minima molestiae. Quaerat praesentium harum omnis asperiores magni consequatur ad. Rerum quia deleniti consequuntur delectus omnis. Numquam blanditiis error et molestiae iste voluptas ducimus. Aperiam quis corporis aut nemo occaecati.', 'Omnivore', 'cerf.jpg'),
(12, 12, 4, 'Kiwi', 'rem itaque', 0, 'Qui iure quam inventore sit tenetur. Quia ut harum laudantium sit aperiam ipsum quibusdam odio. A laudantium quasi et dolorum recusandae repellendus. Deleniti quis aliquam qui. Recusandae ipsum illum explicabo. Amet doloribus esse repellendus reprehenderit est est. Quaerat voluptatem adipisci enim magni. Ea aut ad atque. Molestias et rerum ut qui fugiat quaerat atque. A porro rerum saepe quia et iusto.', 'Omnivore', 'cerf.jpg'),
(13, 18, 6, 'Vaches', 'sint facere', 5, 'Qui minus et ut. Quam omnis qui est magni praesentium. Nihil vel enim hic adipisci. Repudiandae et nihil voluptas. Eius et facere odio ipsam voluptatem quod voluptate. Est minima sed aliquid. Quis quas eius quia aliquam tenetur. Ipsa harum perferendis in eligendi quaerat est. Autem ratione neque et quo tempora. Aperiam sunt qui sunt aut iure. Dolorem ab aliquam officiis odit. Distinctio dolores odit unde non aut unde. Qui rerum iusto et non non. Sit reprehenderit blanditiis veritatis.', 'Herbivore', 'cerf.jpg'),
(14, 30, 2, 'Zebre', 'aliquid voluptatum', 2, 'Est beatae sed officiis aperiam et. Impedit quia ratione tempore id est quia ipsum. At vero repellendus aut possimus hic repellendus assumenda. Reiciendis porro omnis eveniet iste. Sed qui nihil iusto quasi neque tempore. Et impedit adipisci harum et. Alias veniam et a delectus vero libero illo. Delectus culpa animi placeat asperiores ut facere laboriosam. Eum odio consequatur corrupti eius et rem sapiente. Vel tenetur aut quibusdam soluta quia. Sit est cumque ipsum accusamus quis harum deserunt sapiente.', 'Omnivore', 'cerf.jpg'),
(15, 40, 7, 'Aigle', 'velit magnam', 0, 'Est nulla qui qui provident possimus provident sunt. Eos quis non sint aut voluptas voluptate qui. Possimus ut praesentium tempore sed fugiat id qui ea. Possimus culpa voluptas itaque impedit rerum vero id. Distinctio eum occaecati quis libero nobis repellat. Laborum et quisquam qui beatae eius perferendis. Enim nihil amet voluptas. Ut sunt aperiam deserunt nostrum autem et aut.', 'Carnivore', 'cerf.jpg'),
(16, 13, 3, 'Vaches', 'voluptatem sunt', 2, 'Sequi veritatis consequuntur non et omnis. Fugit odit qui possimus doloribus nesciunt. Dolorum fugiat vitae amet velit a. Velit numquam at molestiae adipisci nihil id dolor distinctio. Vel itaque nobis iste ad. Consequuntur odio consectetur voluptatem accusamus quaerat. Dolorem nihil nam temporibus soluta aliquam laborum commodi. Debitis rerum id cum et omnis sint maxime. Sequi qui in atque id. Rerum qui vero rem et et ullam. Et velit repellendus ut assumenda molestiae dolor mollitia.', 'Omnivore', 'cerf.jpg'),
(17, 31, 7, 'Tigre', 'necessitatibus ad', 3, 'Molestiae autem libero veritatis. Id dolorem sed iusto non labore. Delectus minus provident nobis. Dolorem voluptates non quis est. Laboriosam nihil sit consequatur hic quis in aut. Aut cupiditate veritatis et labore. Laudantium deleniti velit id officia. Voluptate ab aliquid rerum maiores temporibus totam quisquam. Nostrum sint totam voluptates. Qui aut qui veritatis ut debitis quasi voluptate. In molestiae a voluptas dignissimos amet eveniet expedita placeat.', 'Herbivore', 'cerf.jpg'),
(18, 32, 6, 'Kiwi', 'qui iure', 3, 'Placeat alias delectus deserunt officiis quo. Autem tempora sit atque iusto eius qui quas. Laudantium beatae nam optio voluptatem ea in. Cumque quasi illum totam et iure sit. Quam corporis sapiente sit nisi. Error accusantium vel repellat eos aut vel consequatur tenetur. Dolore atque sequi eius rerum consequatur impedit. Fugit et eos dolore iusto consequatur ea voluptate.', 'Herbivore', 'cerf.jpg'),
(19, 18, 6, 'Kiwi', 'qui quidem', 3, 'Laborum corporis cumque ut. Veniam quis qui porro alias suscipit. Nobis laboriosam beatae ipsum. Fugiat impedit sit doloribus. Est saepe et beatae ducimus nisi molestiae. Vel saepe rerum quod officia hic. Facere dolor ea dolor dolores voluptatem quo fuga. Ullam repellendus voluptatibus cumque accusantium et et consequuntur. Modi facere omnis repudiandae sequi ad deleniti. Repellendus quibusdam eos quisquam velit nihil. Pariatur ullam id quia cum libero eius.', 'Herbivore', 'cerf.jpg'),
(20, 6, 8, 'Aigle', 'quasi sed', 2, 'Consequatur et in nobis rerum et recusandae. Aperiam harum aut autem tenetur officia illum. Adipisci itaque quaerat repudiandae architecto. Sit harum sint nesciunt et. Neque laudantium quaerat mollitia totam. Quidem tenetur ad ipsum alias non similique. Aliquid porro ut alias in aut. Ullam fugit amet commodi. Similique amet sapiente aperiam consequuntur aspernatur recusandae est sapiente. Id mollitia minus autem ipsa architecto. Aut in totam voluptates sed delectus hic dolore.', 'Herbivore', 'cerf.jpg'),
(21, 17, 5, 'Aigle', 'culpa accusamus', 4, 'Ut voluptatem repellendus magnam nostrum. Earum ad ipsa ea amet sunt voluptate. Modi aut ut molestiae et debitis et voluptas. Reprehenderit ab distinctio adipisci in est. Sed fugiat quibusdam iste nulla. Necessitatibus sed quia aperiam quis facere commodi. Dolores omnis et veritatis qui est pariatur. Quaerat voluptate quo dolore soluta. Rerum est et quisquam perferendis. Quia est ipsum eos assumenda non doloremque officia.', 'Herbivore', 'cerf.jpg'),
(22, 20, 8, 'Vaches', 'explicabo autem', 3, 'Ab id et vero et. Rerum omnis mollitia qui ab voluptate facere dolor. Quo ducimus alias aut nesciunt occaecati quia itaque. Corrupti eaque et quidem dignissimos. Quasi suscipit suscipit sed deleniti labore. Dolorum sunt sapiente officiis iste. Dolorum architecto velit excepturi quis harum hic. Ex labore veniam rerum id magni quisquam perspiciatis enim. Eveniet esse corrupti amet. Quo sed impedit ut veritatis qui aut. Doloribus illo cum recusandae tempora ut deserunt.', 'Herbivore', 'cerf.jpg'),
(23, 23, 8, 'Kiwi', 'vero ratione', 0, 'Quasi voluptas at repellendus iusto dolorum consequatur. Odit et voluptas consequatur amet qui quia nobis. Sit quas molestiae consequatur numquam vero asperiores commodi. Voluptas et labore ut incidunt velit. Nostrum fugit excepturi dolorum. Aperiam sint deserunt et voluptas dolor. Autem cumque eaque itaque minima tempore dolorum rerum. In qui voluptates ullam natus voluptas. Quis omnis qui ipsum quia consequuntur a.', 'Herbivore', 'cerf.jpg'),
(24, 11, 6, 'Zebre', 'eveniet et', 0, 'Autem quia inventore quo et. Sunt et non suscipit unde tenetur odio est quo. Necessitatibus iusto velit itaque at ex. Qui quae veritatis sunt veritatis quia. Sed consequatur modi eum quia similique porro. Sequi beatae eos rerum quod quas dolorem et. Nisi architecto molestias illum hic maxime et.', 'Omnivore', 'cerf.jpg'),
(25, 32, 6, 'Aigle', 'ipsam quibusdam', 1, 'Sequi recusandae incidunt ipsum consequatur. Consequuntur corrupti beatae doloremque distinctio blanditiis. Porro quia excepturi rem ipsa ut consequatur asperiores ea. Neque ea maxime numquam corporis et. Quis facere et rerum a dolorem. Voluptas non aliquam exercitationem aut quia temporibus expedita. Dolorem quos enim maiores. Et qui qui ut et. Laboriosam dicta ea eius mollitia. Sequi quia officia commodi unde. Quo quia odit placeat ea libero aut. Consectetur adipisci quae voluptatem quia.', 'Carnivore', 'cerf.jpg'),
(26, 37, 1, 'Tigre', 'enim consequuntur', 5, 'Dolores blanditiis culpa sit est repellat voluptas. Cum ad eos voluptas rem dicta deserunt tempora et. Nulla architecto vero iste dolores vel eos occaecati. Et culpa quia enim odio atque molestias maxime. Assumenda architecto temporibus excepturi mollitia accusantium quis sunt. Tenetur sit in autem maxime. Voluptate odit eos vel sit. Iusto vel voluptatem cum alias reiciendis officia ut minima. Ullam et omnis excepturi quas dolor perferendis odio tenetur.', 'Carnivore', 'cerf.jpg'),
(27, 11, 1, 'Vaches', 'nobis atque', 4, 'Sint magni in occaecati delectus quisquam. Dolorum provident repellendus ab sint repellat quisquam. Sed aliquam cupiditate quia cupiditate eaque dolores. Nobis laborum ut corrupti quia excepturi. Recusandae dignissimos ut consequatur at atque assumenda expedita. Natus ad deleniti id id corporis. Est explicabo autem nam dolores similique quis quas. Temporibus nihil enim quia ea voluptatibus qui numquam.', 'Omnivore', 'cerf.jpg'),
(28, 25, 4, 'Hérisson', 'in qui', 1, 'Voluptas incidunt soluta atque et sit in sunt. Odio qui cumque nemo iusto vero perferendis et. Ex sit ea aspernatur quo qui officiis alias ullam. Molestias praesentium aut reprehenderit et similique. Dolores aut est fuga qui. Quis quod exercitationem quidem voluptas. Excepturi fugit beatae earum consequatur. Sint voluptate autem non dolor magnam beatae autem. Labore et nihil perferendis omnis sequi voluptas et. Veritatis animi quod quis eos dignissimos.', 'Carnivore', 'cerf.jpg'),
(29, 35, 3, 'Zebre', 'odit nesciunt', 0, 'Dolorem magni cupiditate error a maiores omnis. Asperiores iste repellendus corporis qui. Mollitia quas quis laboriosam modi voluptates eos inventore. Nisi aspernatur quo illo sapiente inventore eum quidem voluptate. In numquam accusamus esse iure et. Aliquid quos et quo quia. Dolores ex ut totam quibusdam excepturi consequatur tempora.', 'Herbivore', 'cerf.jpg'),
(30, 17, 1, 'Aigle', 'quo nemo', 0, 'Natus corrupti deserunt sit modi repellendus accusamus esse voluptas. Et omnis aut quos aliquam ut fuga nam ducimus. Vel in consequatur odit veniam et aut. Et dolore esse est. Quae fugit numquam modi molestiae maiores nisi. Sunt et quae et sint totam culpa. Sapiente non qui nostrum dolorem. Est assumenda provident velit sed perferendis voluptatem est. Quos aut omnis consequatur officia omnis. Ducimus alias quibusdam ipsum inventore enim non. Id ipsa recusandae et. Eum sed nisi et amet qui earum.', 'Omnivore', 'cerf.jpg'),
(31, 21, 7, 'Corbeau', 'alias deserunt', 5, 'Autem in debitis animi error eius cupiditate sit. Aut accusantium incidunt officiis laudantium. Ratione distinctio libero rerum veniam. Voluptate molestias veritatis dolor ipsum dolor nobis omnis. Ea adipisci et officiis. Exercitationem reprehenderit et vel hic. Eos sapiente vitae vel laboriosam. Fuga omnis consequatur quo et qui eum ipsam. Ipsa tempora in laudantium rerum quia aut. Asperiores similique corporis voluptatem.', 'Herbivore', 'cerf.jpg'),
(32, 29, 5, 'Requin', 'maxime sapiente', 5, 'Corrupti ipsa repellendus perferendis doloremque beatae velit. Adipisci voluptas nihil rerum sed. Quo id quas fuga. Ea voluptas distinctio est provident. Esse quia quas natus et id ad. Incidunt sed pariatur vitae. Rem qui et rerum voluptate. Repellat quis saepe eos debitis explicabo dolore vitae. Eos at ea debitis. Non dolore repellat et nam. Dolorum ut voluptate velit et odit. Eum omnis qui quis quia odio officia qui qui.', 'Carnivore', 'cerf.jpg'),
(33, 5, 8, 'Kiwi', 'iure tenetur', 1, 'Nostrum iste voluptatem quis nihil et ut voluptas. Laborum est similique iste velit dolor est. Quas vel nam officia. Aspernatur nulla et explicabo nobis perspiciatis ducimus alias esse. Ex velit aut ad alias ad. Dolorum temporibus ipsam hic possimus animi amet id. Saepe voluptas qui non similique.', 'Omnivore', 'cerf.jpg'),
(34, 25, 1, 'Tigre', 'quia neque', 1, 'Quo consequuntur qui nihil nisi consequatur. Quisquam deserunt sit consequatur optio. Et ex minima voluptate repudiandae sunt. Aliquam laudantium sint sunt unde eius asperiores suscipit nemo. Quo quis accusamus officiis maxime sed est voluptate. Velit at sed dolor magnam repellat sunt. Ut aut modi modi sapiente ducimus. Quod voluptatem odio est explicabo error temporibus. Labore aspernatur quaerat enim velit.', 'Carnivore', 'cerf.jpg'),
(35, 35, 2, 'Tigre', 'ipsum qui', 4, 'Nulla molestias est qui voluptatem quidem impedit. Quisquam id molestiae est est culpa. Et est molestiae nesciunt. Laboriosam expedita adipisci est veritatis impedit a cupiditate. Omnis quo eum consequatur ut. Neque odit quod soluta consequatur ut voluptas autem. Consequuntur molestiae praesentium ea. Ullam quos nihil mollitia quam totam. Maiores vero nobis nemo nostrum nostrum exercitationem aspernatur.', 'Omnivore', 'cerf.jpg'),
(36, 20, 7, 'Lion', 'velit quos', 2, 'Qui deleniti aut quia corporis earum nobis vitae. Repudiandae quis minima est et quia quasi dolore. Quibusdam molestias mollitia nobis aut voluptates. Veritatis assumenda neque cum porro. Cumque omnis sapiente odio libero. Maiores eum dolorem eum delectus et. Vero dolores esse inventore magnam. Et itaque velit rem natus et animi amet. Ipsam dolor hic laboriosam ex cumque. Molestiae est vel quo perferendis. Nostrum culpa eveniet non et assumenda qui nostrum.', 'Omnivore', 'cerf.jpg'),
(37, 39, 1, 'Corail', 'nemo placeat', 4, 'Explicabo corrupti nobis ut animi debitis enim. Atque sed porro aut dolor. Ex et dicta facilis. Expedita velit tempore dolorem dignissimos. Praesentium in esse mollitia soluta aliquam quam voluptatem. Cumque enim doloribus necessitatibus. Voluptatum quos et sed vitae dolorem vel quisquam. Velit necessitatibus accusantium sit doloribus non facere perferendis.', 'Omnivore', 'cerf.jpg'),
(38, 36, 8, 'Corail', 'at laudantium', 3, 'Ducimus qui inventore impedit molestias. Magni et occaecati rerum aut et asperiores expedita. Quis est et sit aut ex laboriosam. Aut quae quo reiciendis enim voluptates accusantium. Sunt atque est id perspiciatis doloremque. Aliquam doloribus quos similique omnis. Delectus aut est eos dolores id. Earum non facilis nam ducimus itaque illum. Officiis labore cumque iste eveniet repudiandae ad. Est officiis harum nisi dolor.', 'Carnivore', 'cerf.jpg'),
(39, 28, 8, 'Aigle', 'tempore aut', 1, 'Dolores modi eos et ut. Officia et quidem eius consectetur. Qui et provident nemo. Quae tempora et et harum magni omnis quos. Laborum quia quibusdam cumque praesentium. Et ea est libero itaque voluptatem. Possimus ducimus eos quae officiis fugit odio ipsa consequatur. Minima quo libero est asperiores blanditiis aut. Magni facere totam ut debitis eos esse. Deleniti ut provident nostrum impedit. Tempora praesentium aut voluptas et. Exercitationem excepturi debitis et doloremque at ut asperiores velit.', 'Herbivore', 'cerf.jpg'),
(40, 15, 7, 'Requin', 'asperiores omnis', 4, 'Voluptatum qui quasi rem qui consequatur nihil. Rerum ducimus quas nobis dolorem adipisci et laboriosam molestiae. Eius rerum quidem quas ut. Omnis et dolor repellat ut. Velit labore voluptatem molestias distinctio. Sit ut officiis tempora et qui iure officiis. Nemo et sequi velit dolores sed occaecati. Laboriosam dignissimos voluptatum ex qui ratione labore sit rerum. Consequatur non quo alias adipisci sint eligendi. In id ea quo cupiditate tempora ut et. Perspiciatis autem non voluptate optio nobis.', 'Herbivore', 'cerf.jpg'),
(41, 11, 4, 'Serpent', 'voluptate vel', 3, 'Quis eos et eligendi dolores dolorum sit quia. Quisquam sed ab est. Quas velit dolor omnis laborum perferendis. Deleniti et amet mollitia quaerat. At est officiis ipsam aut enim explicabo pariatur sit. Natus nobis ex nihil fugit rerum. Ex ut qui hic placeat qui et est. Iste consequatur laborum voluptatum cum cumque ut dolores. Ut ipsam doloremque dolores consequuntur et. Id aperiam et aut corporis expedita.', 'Omnivore', 'cerf.jpg'),
(42, 11, 4, 'Hérisson', 'a sequi', 2, 'Veritatis asperiores eveniet labore consequatur nam facere suscipit. Sit beatae ut iure qui dicta sit minima. Qui molestiae aspernatur occaecati minima molestiae vitae. Alias facilis eaque ad doloremque maiores fugit illo. Vitae voluptas in non. Laudantium est libero dolores rem rerum et voluptas. Omnis assumenda provident veniam veniam autem deserunt. Et impedit quia atque non doloremque.', 'Omnivore', 'cerf.jpg'),
(43, 35, 5, 'Corail', 'dolores sequi', 0, 'Quod aperiam optio velit. Quae id eveniet ad voluptas ea dolores repellendus. Mollitia tempore aut omnis quidem sit officiis. Quaerat suscipit quis est quasi tempora sit consequuntur laboriosam. Laboriosam enim quo occaecati delectus excepturi ut. Expedita ullam vero at eligendi. In rerum consequuntur minima ut ab reprehenderit quae. Beatae tempora quam labore. Nemo exercitationem ut laboriosam delectus. Beatae hic id aut fuga cupiditate praesentium. Nesciunt quo et temporibus voluptatem aspernatur ullam.', 'Carnivore', 'cerf.jpg'),
(44, 25, 8, 'Zebre', 'aperiam dolor', 2, 'A labore exercitationem enim vero delectus natus dolores. Dolorem odit eos aut et assumenda eligendi. Fugiat omnis temporibus itaque quas. Itaque accusantium quod iure sunt ea magnam. Corrupti ut ipsum amet libero. Ab culpa ducimus quia sed. Sint consequatur eius atque sit nemo veniam sint. Perspiciatis quasi quisquam ratione qui vel et aliquam quas. Commodi ullam odit omnis ea consequatur. In est eaque eum ipsum at nemo voluptatum.', 'Omnivore', 'cerf.jpg'),
(45, 28, 4, 'Corail', 'quia in', 2, 'Dolores vel molestias qui eveniet qui earum praesentium. Quas natus iure sint et ducimus perspiciatis in. Ut unde velit accusamus beatae est dolores. Et iste esse ipsum. Dolore quia cum totam assumenda sed ullam veniam sunt. Maxime dicta eligendi dolorem voluptate et consequuntur eius. Et eos saepe excepturi enim. Est voluptatibus asperiores quis praesentium dolores incidunt commodi. Iste error laboriosam ut fugit libero aut.', 'Herbivore', 'cerf.jpg'),
(46, 43, 3, 'Hérisson', 'officiis minima', 1, 'Quis dolorem aut repellat. Sit modi quae et non nihil. Sit placeat autem sunt. Libero sequi possimus et et. Numquam sit mollitia quibusdam recusandae ab corporis quia. Animi distinctio rerum molestiae ab dolores nemo. Cupiditate est repellat ipsum velit. Consequatur quae nisi explicabo necessitatibus quia incidunt aut rem. Quo aut fugiat dolore ratione. Magni dolore dicta repellat amet et. Rerum quia magni aperiam nihil nam.', 'Omnivore', 'cerf.jpg'),
(47, 17, 7, 'Hérisson', 'expedita fugiat', 1, 'Ipsa molestiae porro sed excepturi aut nihil. Earum velit molestias est autem quisquam consequuntur sapiente eos. Cupiditate velit beatae perspiciatis sed est eius ipsa. Aspernatur qui facere consequatur sed delectus voluptatum. Consequatur eum enim quos dicta. Maxime et cupiditate voluptas et facilis. Molestiae veniam vel et quia. Debitis voluptas sint fuga numquam rerum. Sint quo at dolorem accusamus voluptate occaecati deserunt qui.', 'Herbivore', 'cerf.jpg'),
(48, 8, 7, 'Zebre', 'ullam qui', 2, 'Consequatur debitis qui rerum et. Incidunt rerum quia non aut corrupti et sit. Ex omnis aut accusantium similique. Magni laboriosam nihil dolor ut reiciendis fugit est. Nisi aliquam quasi accusamus et itaque doloribus. Doloremque non harum et. Corporis deleniti et laboriosam occaecati repellat rerum. Cumque dolore tempora praesentium quia. Esse id deserunt sed suscipit aliquam omnis iure. Sunt et labore repellendus iure cum. Dolorem ad quae amet consequuntur.', 'Carnivore', 'cerf.jpg'),
(49, 34, 2, 'Serpent', 'delectus itaque', 1, 'Ipsum sed similique consequatur quis mollitia. Corporis nisi beatae aperiam et. Et doloribus harum porro qui et. Quis et repudiandae illum aut voluptatem. Eveniet rem doloribus inventore omnis aut ratione. Officiis incidunt occaecati ducimus quo. Quasi quo molestiae aperiam ut ab nihil debitis. Sunt quidem ut et voluptatem provident voluptatibus maxime. Est nostrum aspernatur placeat saepe ad corrupti. Iusto voluptatem qui sapiente quia hic quia. Laborum modi atque vero id occaecati dolor.', 'Carnivore', 'cerf.jpg'),
(50, 1, 1, 'Corail', 'inventore fugit', 4, 'Neque nostrum sunt et deserunt ex maxime id. Quibusdam officiis est dolore officiis molestias exercitationem recusandae. Sunt quis et qui aut itaque. Natus similique maiores voluptatem ut autem. Totam voluptate aut consequatur assumenda ipsam. Dolore aperiam odit pariatur aut porro officia. Fuga aut omnis veritatis iure voluptas autem. Quod harum et voluptatum in perferendis excepturi. Voluptates voluptas in ab dolor similique. Voluptas est et qui aut eveniet ipsum.', 'Carnivore', 'cerf.jpg'),
(51, 4, 1, 'Kiwi', 'atque explicabo', 1, 'Ex libero qui eos illo itaque dolor voluptas. Eos tempora dolore nemo atque. Repellat voluptate vitae et iste modi totam culpa. Adipisci debitis enim facilis laudantium quam blanditiis aut. Iure eligendi et voluptatem modi aliquam. Qui velit quos aut accusamus. Occaecati quam quia qui. Rerum atque vitae eos enim sed et. Vel perspiciatis dolorem quia voluptatem nesciunt perspiciatis aut. Repellat molestiae expedita est minus. Ut veritatis necessitatibus unde velit quam ipsum expedita.', 'Omnivore', 'cerf.jpg'),
(52, 25, 4, 'Requin', 'dolores nam', 4, 'Temporibus ratione a illo vel dolores at est. Et nesciunt et ipsa quia. Natus enim perferendis quae. Porro voluptate omnis sed pariatur cumque. Similique eum est velit perspiciatis. Est magni voluptatem fugit tempore. Dolorem nostrum ut nesciunt dolores occaecati qui voluptatum. Fuga animi optio ullam perspiciatis quia. Atque sit ducimus et nesciunt laborum vel accusamus nam. Quisquam adipisci voluptatem accusantium aperiam. Quisquam aut odit et voluptates sunt accusamus.', 'Omnivore', 'cerf.jpg'),
(53, 33, 8, 'Zebre', 'delectus accusantium', 0, 'Quam est magni quod et optio modi eos. Non totam autem ut quis a inventore nihil. Nostrum quos assumenda rerum quas optio consequatur. Aperiam debitis sunt impedit quasi. Dolor aut corrupti repellendus corrupti mollitia repellat. A aut similique accusamus est. Fugiat incidunt laudantium excepturi officia ut. Et tempora inventore aliquid quis. Qui assumenda ducimus et beatae possimus. Eum sit nihil qui rerum nemo. Voluptatum consequuntur et est sit facilis.', 'Carnivore', 'cerf.jpg'),
(54, 6, 5, 'Kiwi', 'ea soluta', 3, 'Fugiat et tempora voluptatibus excepturi sapiente sed maxime autem. Placeat cupiditate ea voluptatem dolor rerum. Sed dolore sit exercitationem quisquam molestias. Quos debitis cupiditate maxime atque repellendus non reprehenderit. Maxime numquam rerum iste consequatur explicabo. Placeat dicta similique quibusdam explicabo dolores inventore.', 'Herbivore', 'cerf.jpg'),
(55, 34, 8, 'Tigre', 'quidem dolorem', 1, 'Ea et architecto officia omnis corporis officiis quibusdam. Fugiat aliquid quam eum sint est rerum. Quas saepe ab accusantium cupiditate mollitia aut aperiam. Deleniti omnis aliquid ea aut debitis pariatur. Aut ut aut ducimus ab voluptatem illo asperiores. Voluptate hic aut cupiditate perspiciatis vero. Qui inventore iste reiciendis fuga perferendis velit sequi. Voluptates ratione reiciendis harum voluptas dignissimos. Quis quas ea rerum eius vel. Iusto sed et officia recusandae atque.', 'Omnivore', 'cerf.jpg'),
(56, 19, 8, 'Vaches', 'labore sint', 2, 'Eum praesentium molestiae reprehenderit eum. Voluptas repellendus aspernatur libero provident. Nemo vero eum quisquam fuga et reprehenderit. Quia quam similique alias consequatur. Laudantium quis est nesciunt veniam et vero. Et voluptatem laborum esse qui totam et sint. In eum aut ut totam similique. Voluptatem eos illum sapiente sunt. Dicta consequatur praesentium voluptatem vel qui. Possimus velit minima praesentium qui non sunt. Atque in incidunt tempora eos vero temporibus ipsum.', 'Herbivore', 'cerf.jpg'),
(57, 2, 5, 'Vaches', 'facere omnis', 4, 'Ut dicta explicabo consequatur autem laborum. Dolorem itaque explicabo qui non ea. Sint odit distinctio qui hic. Excepturi et id itaque nam quod quam reprehenderit. Ea blanditiis officia iste similique. Eveniet veniam consequatur vel dolorem. Aspernatur omnis ut tempora ut at nisi delectus dolorem. Voluptatum ab consequatur est iste. Esse dolor quasi excepturi iure reiciendis tempore in id.', 'Carnivore', 'cerf.jpg'),
(58, 30, 2, 'Tigre', 'non fuga', 1, 'Enim nemo modi et voluptatem ut dignissimos et. Beatae facere aut porro est sed quidem. Omnis eligendi eum ut ut rerum doloremque. Sed placeat occaecati nihil facere. Earum qui id commodi dolor ducimus ex molestias. Aperiam incidunt assumenda id ullam est dignissimos. Molestiae sapiente commodi illum at odio. Facere velit nam quis illum. Eos porro dolores doloribus. Dignissimos dolores quia ipsa quibusdam nemo. Nulla magnam ullam iste voluptas omnis in et. Perferendis veritatis iure fugiat non.', 'Carnivore', 'cerf.jpg'),
(59, 18, 7, 'Tigre', 'quisquam culpa', 3, 'Ducimus veritatis nihil et autem distinctio est. Repudiandae dolorem voluptates dolor. Harum praesentium quos aut delectus. Tenetur blanditiis eligendi ipsa voluptas voluptatibus quia. Vitae quo voluptatibus vel molestiae ex. Assumenda maiores vitae aut qui et velit. Blanditiis consequatur tenetur rerum quaerat sint qui. Ut excepturi soluta sint quae. Quod at id veritatis quod repudiandae. Vitae doloribus exercitationem magnam ipsa. Blanditiis earum tenetur officiis ullam.', 'Omnivore', 'cerf.jpg'),
(60, 26, 4, 'Zebre', 'nam labore', 0, 'Odio est similique labore. Ratione quis quia quia. Aliquam nemo voluptatem possimus qui sed. Rem veniam voluptatem nostrum nemo dolor officiis. Ut distinctio labore eum veritatis assumenda omnis aut. Non quia earum ullam delectus. Commodi dolore autem magni ullam sed. Vitae distinctio ut nobis hic explicabo eum doloribus. Iste molestiae est qui laborum. Alias qui sed enim magni. Qui eum et in. Saepe et fugiat optio. Quia hic quisquam dolor amet aperiam suscipit nemo.', 'Omnivore', 'cerf.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `habitat`
--

CREATE TABLE `habitat` (
  `id` int(11) NOT NULL,
  `lib_habitat` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `habitat`
--

TRUNCATE TABLE `habitat`;
--
-- Dumping data for table `habitat`
--

INSERT INTO `habitat` (`id`, `lib_habitat`) VALUES
(1, 'Forêt'),
(2, 'Desert'),
(3, 'Océan'),
(4, 'Plaine'),
(5, 'Plage'),
(6, 'Lac');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `date_reservation` date NOT NULL,
  `billet_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nb_places_adult` int(11) NOT NULL,
  `nb_places_child` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `reservation`
--

TRUNCATE TABLE `reservation`;
--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `date_reservation`, `billet_id`, `user_id`, `nb_places_adult`, `nb_places_child`) VALUES
(1, '2024-04-04', 1, 10, 7, 1),
(2, '2024-04-05', 2, 7, 6, 10),
(3, '2024-04-01', 1, 7, 2, 6),
(4, '2024-04-06', 2, 6, 8, 5),
(5, '2024-04-06', 1, 11, 5, 5),
(6, '2024-03-29', 1, 11, 3, 7),
(7, '2024-04-04', 2, 10, 5, 9),
(8, '2024-04-01', 2, 6, 5, 9),
(9, '2024-03-31', 2, 3, 8, 4),
(10, '2024-03-29', 1, 1, 10, 6),
(11, '2024-04-05', 1, 3, 8, 6),
(12, '2024-04-03', 1, 1, 3, 0),
(13, '2024-04-02', 1, 5, 10, 2),
(14, '2024-03-28', 2, 3, 3, 0),
(15, '2024-04-04', 1, 4, 2, 4),
(16, '2024-04-05', 2, 5, 4, 10),
(17, '2024-04-05', 2, 3, 3, 1),
(18, '2024-04-01', 2, 6, 8, 3),
(19, '2024-04-09', 1, 3, 7, 0),
(20, '2024-03-29', 2, 9, 4, 3),
(21, '2024-03-31', 1, 6, 7, 2),
(22, '2024-03-30', 2, 2, 3, 8),
(23, '2024-04-01', 1, 3, 4, 7),
(24, '2024-04-06', 1, 2, 5, 1),
(25, '2024-03-29', 1, 2, 10, 6),
(26, '2024-03-28', 2, 2, 10, 5),
(27, '2024-04-02', 2, 12, 6, 8),
(28, '2024-04-09', 1, 8, 2, 10),
(29, '2024-03-29', 1, 11, 5, 0),
(30, '2024-04-06', 2, 8, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_user` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pnom_user` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_user` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `user`
--

TRUNCATE TABLE `user`;
--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `nom_user`, `pnom_user`, `phone_user`) VALUES
(1, 'louise@example.com', '[]', '$2y$13$i/VLrQ2SSt0qBIdOW/3caemuj/NsTZe/DFwd7F07zIZ5dxUTzX.ne', 'Parent', 'Louise', '0686780614'),
(2, 'Wil@example.com', '[\"ROLE_ADMIN\"]', '$2y$13$B0EJnauNO0euWZC5P0MCw.lMZHZvkty.K8sx0tGjXvC3hpPkZr9eK', 'Noel', 'Wilfried', '0620783483'),
(3, 'user968@example.com', '[]', '$2y$13$SQncDqRIgNrA4aGJHZVCCu.HG/xqk4mXzgN.FEZPGM5hUdm.uEBk.', 'Bashirian', 'Julien', '0659609253'),
(4, 'user299@example.com', '[]', '$2y$13$imSmHK9cLuriU.D2bbbweuMvDrt9W.4TQPmiPPjUjmGFHlg8I5i46', 'Haag', 'Janet', '0675877232'),
(5, 'user383@example.com', '[]', '$2y$13$9gg1B/DZnm6n9nQlUzjxZuDmtz8SECf1PVUcb2N2/1eqFzsDG2ePS', 'Rowe', 'Griffin', '0691252415'),
(6, 'user947@example.com', '[]', '$2y$13$bKR2sRtuG87spjLj0sz8qeY2DmdBkpDfnnIsJeJbmWB7AODSkUbzC', 'Bradtke', 'Efrain', '0671203238'),
(7, 'user282@example.com', '[]', '$2y$13$iIoZUY1pwW.3HCVUq8XipOwwftdkE4VnM31yAIs8ue/GCpW7aMiAy', 'Roberts', 'Luther', '0651914480'),
(8, 'user331@example.com', '[]', '$2y$13$hHb2cnNjLRFBrd2UCwVo9Oj8onhhK..0msTaPC5/Y8HqCFBQcty.y', 'Bosco', 'Wilson', '0652835836'),
(9, 'user600@example.com', '[]', '$2y$13$eDYS6EBSqpV/fXlnjwk66eWUZoVORjfNxFNONJN/1bH/eQLTl6.kK', 'Spencer', 'Alex', '0610528781'),
(10, 'user203@example.com', '[]', '$2y$13$lIRX4RB.7hyS6i0jSfzireKUQScKIII3azEoj0E.LT6WTSArxCpsy', 'Hamill', 'Pete', '0694185073'),
(11, 'user563@example.com', '[]', '$2y$13$0K.0Ln51ICNaqWvlpYn72OFW9c8uvsTW/EJ0XnQxj4Cg6NG.oZLJi', 'Conn', 'Unique', '0699559238'),
(12, 'user369@example.com', '[]', '$2y$13$o7o665WcYkm7Y/ZXObCaIe/TZaFuOWbEWUhXzfVZ7lgE.veXDK42u', 'Kulas', 'Macy', '0640001974');

-- --------------------------------------------------------

--
-- Table structure for table `zone_parc`
--

CREATE TABLE `zone_parc` (
  `id` int(11) NOT NULL,
  `lib_zone` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_zone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `zone_parc`
--

TRUNCATE TABLE `zone_parc`;
--
-- Dumping data for table `zone_parc`
--

INSERT INTO `zone_parc` (`id`, `lib_zone`, `img_zone`) VALUES
(1, 'Zone Aquatique', 'zone_illustration.jpg'),
(2, 'Ferme', 'zone_illustration.jpg'),
(3, 'Voilère des Oiseaux', 'zone_illustration.jpg'),
(4, 'Terre des lions', 'zone_illustration.jpg'),
(5, 'Bois des Fauves', 'zone_illustration.jpg'),
(6, 'cumque', 'zone_illustration.jpg'),
(7, 'aut', 'zone_illustration.jpg'),
(8, 'consequatur', 'zone_illustration.jpg'),
(9, 'ea', 'zone_illustration.jpg'),
(10, 'consequatur', 'zone_illustration.jpg'),
(11, 'deleniti', 'zone_illustration.jpg'),
(12, 'praesentium', 'zone_illustration.jpg'),
(13, 'dolorem', 'zone_illustration.jpg'),
(14, 'inventore', 'zone_illustration.jpg'),
(15, 'repellendus', 'zone_illustration.jpg'),
(16, 'praesentium', 'zone_illustration.jpg'),
(17, 'accusamus', 'zone_illustration.jpg'),
(18, 'occaecati', 'zone_illustration.jpg'),
(19, 'sit', 'zone_illustration.jpg'),
(20, 'voluptates', 'zone_illustration.jpg'),
(21, 'dolorem', 'zone_illustration.jpg'),
(22, 'earum', 'zone_illustration.jpg'),
(23, 'dolores', 'zone_illustration.jpg'),
(24, 'maxime', 'zone_illustration.jpg'),
(25, 'eos', 'zone_illustration.jpg'),
(26, 'est', 'zone_illustration.jpg'),
(27, 'nostrum', 'zone_illustration.jpg'),
(28, 'sit', 'zone_illustration.jpg'),
(29, 'dignissimos', 'zone_illustration.jpg'),
(30, 'ducimus', 'zone_illustration.jpg'),
(31, 'quos', 'zone_illustration.jpg'),
(32, 'ea', 'zone_illustration.jpg'),
(33, 'alias', 'zone_illustration.jpg'),
(34, 'fugit', 'zone_illustration.jpg'),
(35, 'quasi', 'zone_illustration.jpg'),
(36, 'eos', 'zone_illustration.jpg'),
(37, 'mollitia', 'zone_illustration.jpg'),
(38, 'sapiente', 'zone_illustration.jpg'),
(39, 'quis', 'zone_illustration.jpg'),
(40, 'ad', 'zone_illustration.jpg'),
(41, 'voluptatem', 'zone_illustration.jpg'),
(42, 'quas', 'zone_illustration.jpg'),
(43, 'ad', 'zone_illustration.jpg'),
(44, 'officiis', 'zone_illustration.jpg'),
(45, 'ea', 'zone_illustration.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_6AAB231FAEBED700` (`famille_animal_id`);

--
-- Indexes for table `asso_event_animal`
--
ALTER TABLE `asso_event_animal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B77917771F7E88B` (`event_id`),
  ADD KEY `IDX_B7791778E962C16` (`animal_id`);

--
-- Indexes for table `asso_event_date_event`
--
ALTER TABLE `asso_event_date_event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_AE2ECC6471F7E88B` (`event_id`),
  ADD KEY `IDX_AE2ECC64B2C2812D` (`date_event_id`);

--
-- Indexes for table `asso_event_reservation`
--
ALTER TABLE `asso_event_reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_A484657A71F7E88B` (`event_id`),
  ADD KEY `IDX_A484657AB83297E7` (`reservation_id`);

--
-- Indexes for table `asso_event_zone_parc`
--
ALTER TABLE `asso_event_zone_parc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_4776FC9871F7E88B` (`event_id`),
  ADD KEY `IDX_4776FC983F1927F2` (`zone_parc_id`);

--
-- Indexes for table `asso_habitat_famille_animal`
--
ALTER TABLE `asso_habitat_famille_animal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_3B240128AFFE2D26` (`habitat_id`),
  ADD KEY `IDX_3B240128AEBED700` (`famille_animal_id`);

--
-- Indexes for table `billet`
--
ALTER TABLE `billet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `date_event`
--
ALTER TABLE `date_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `espece`
--
ALTER TABLE `espece`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `famille_animal`
--
ALTER TABLE `famille_animal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_CD658AB3F1927F2` (`zone_parc_id`),
  ADD KEY `IDX_CD658AB2D191E7A` (`espece_id`);

--
-- Indexes for table `habitat`
--
ALTER TABLE `habitat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_42C8495544973C78` (`billet_id`),
  ADD KEY `IDX_42C84955A76ED395` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- Indexes for table `zone_parc`
--
ALTER TABLE `zone_parc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animal`
--
ALTER TABLE `animal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `asso_event_animal`
--
ALTER TABLE `asso_event_animal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `asso_event_date_event`
--
ALTER TABLE `asso_event_date_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `asso_event_reservation`
--
ALTER TABLE `asso_event_reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `asso_event_zone_parc`
--
ALTER TABLE `asso_event_zone_parc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `asso_habitat_famille_animal`
--
ALTER TABLE `asso_habitat_famille_animal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `billet`
--
ALTER TABLE `billet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `date_event`
--
ALTER TABLE `date_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `espece`
--
ALTER TABLE `espece`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `famille_animal`
--
ALTER TABLE `famille_animal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `habitat`
--
ALTER TABLE `habitat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `zone_parc`
--
ALTER TABLE `zone_parc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `FK_6AAB231FAEBED700` FOREIGN KEY (`famille_animal_id`) REFERENCES `famille_animal` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `asso_event_animal`
--
ALTER TABLE `asso_event_animal`
  ADD CONSTRAINT `FK_B77917771F7E88B` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`),
  ADD CONSTRAINT `FK_B7791778E962C16` FOREIGN KEY (`animal_id`) REFERENCES `animal` (`id`);

--
-- Constraints for table `asso_event_date_event`
--
ALTER TABLE `asso_event_date_event`
  ADD CONSTRAINT `FK_AE2ECC6471F7E88B` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`),
  ADD CONSTRAINT `FK_AE2ECC64B2C2812D` FOREIGN KEY (`date_event_id`) REFERENCES `date_event` (`id`);

--
-- Constraints for table `asso_event_reservation`
--
ALTER TABLE `asso_event_reservation`
  ADD CONSTRAINT `FK_A484657A71F7E88B` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`),
  ADD CONSTRAINT `FK_A484657AB83297E7` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`id`);

--
-- Constraints for table `asso_event_zone_parc`
--
ALTER TABLE `asso_event_zone_parc`
  ADD CONSTRAINT `FK_4776FC983F1927F2` FOREIGN KEY (`zone_parc_id`) REFERENCES `zone_parc` (`id`),
  ADD CONSTRAINT `FK_4776FC9871F7E88B` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`);

--
-- Constraints for table `asso_habitat_famille_animal`
--
ALTER TABLE `asso_habitat_famille_animal`
  ADD CONSTRAINT `FK_3B240128AEBED700` FOREIGN KEY (`famille_animal_id`) REFERENCES `famille_animal` (`id`),
  ADD CONSTRAINT `FK_3B240128AFFE2D26` FOREIGN KEY (`habitat_id`) REFERENCES `habitat` (`id`);

--
-- Constraints for table `famille_animal`
--
ALTER TABLE `famille_animal`
  ADD CONSTRAINT `FK_CD658AB2D191E7A` FOREIGN KEY (`espece_id`) REFERENCES `espece` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_CD658AB3F1927F2` FOREIGN KEY (`zone_parc_id`) REFERENCES `zone_parc` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `FK_42C8495544973C78` FOREIGN KEY (`billet_id`) REFERENCES `billet` (`id`),
  ADD CONSTRAINT `FK_42C84955A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
