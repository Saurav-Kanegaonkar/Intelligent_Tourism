-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2021 at 07:55 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `activity_id` bigint(20) UNSIGNED NOT NULL,
  `activities` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`activity_id`, `activities`, `created_at`, `updated_at`) VALUES
(1, 'Shopping', NULL, NULL),
(2, 'Sight-seeing', NULL, NULL),
(3, 'Trekking', NULL, NULL),
(4, 'Zoo', NULL, NULL),
(5, 'Beach', NULL, NULL),
(6, 'Malls', NULL, NULL),
(7, 'Garden', NULL, NULL),
(8, 'Palaces', NULL, NULL),
(9, 'Temples', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Monday', '2020-11-03 09:15:18', '2020-11-03 09:15:18'),
(2, 'Tuesday', '2020-11-03 09:15:34', '2020-11-03 09:15:34'),
(3, 'Wednesday', '2020-11-03 09:15:47', '2020-11-03 09:15:47'),
(4, 'Thursday', '2020-11-03 09:16:03', '2020-11-03 09:16:03'),
(5, 'Friday', '2020-11-03 09:16:46', '2020-11-03 09:16:46'),
(6, 'Saturday', '2020-11-03 09:17:01', '2020-11-03 09:17:01'),
(7, 'Sunday', '2020-11-03 09:17:12', '2020-11-03 09:17:12');

-- --------------------------------------------------------

--
-- Table structure for table `day_place`
--

CREATE TABLE `day_place` (
  `day_id` int(10) UNSIGNED NOT NULL,
  `place_id` int(10) UNSIGNED NOT NULL,
  `from_hours` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_minutes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_hours` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_minutes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `day_place`
--

INSERT INTO `day_place` (`day_id`, `place_id`, `from_hours`, `from_minutes`, `to_hours`, `to_minutes`) VALUES
(1, 1, '07', '00', '21', '00'),
(2, 1, '07', '00', '21', '00'),
(3, 1, '07', '00', '21', '00'),
(4, 1, '07', '00', '21', '00'),
(5, 1, '07', '00', '21', '00'),
(6, 1, '07', '00', '23', '00'),
(7, 1, '07', '00', '23', '00'),
(1, 2, '11', '00', '20', '00'),
(2, 2, '11', '00', '20', '00'),
(3, 2, '11', '00', '20', '00'),
(4, 2, '11', '00', '20', '00'),
(5, 2, '11', '00', '20', '00'),
(6, 2, '11', '00', '22', '00'),
(7, 2, '11', '00', '22', '00'),
(1, 3, '06', '00', '19', '30'),
(2, 3, '06', '00', '19', '30'),
(3, 3, '06', '00', '19', '30'),
(4, 3, '06', '00', '19', '30'),
(5, 3, '06', '00', '19', '30'),
(6, 3, '06', '00', '19', '30'),
(7, 3, '06', '00', '19', '30'),
(1, 4, '06', '00', '21', '30'),
(2, 4, '06', '00', '21', '30'),
(3, 4, '06', '00', '21', '30'),
(4, 4, '06', '00', '21', '30'),
(5, 4, '06', '00', '21', '30'),
(6, 4, '06', '00', '19', '30'),
(7, 4, '06', '00', '19', '30'),
(1, 5, '00', '00', '23', '59'),
(2, 5, '00', '00', '23', '59'),
(3, 5, '00', '00', '23', '59'),
(4, 5, '00', '00', '23', '59'),
(5, 5, '00', '00', '23', '59'),
(6, 5, '00', '00', '23', '59'),
(7, 5, '00', '00', '23', '59'),
(1, 6, '11', '00', '20', '00'),
(2, 6, '11', '00', '20', '00'),
(3, 6, '11', '00', '20', '00'),
(4, 6, '11', '00', '20', '00'),
(5, 6, '11', '00', '20', '00'),
(6, 6, '11', '00', '20', '00'),
(7, 6, '11', '00', '20', '00'),
(1, 7, '11', '00', '21', '00'),
(2, 7, '11', '00', '21', '00'),
(3, 7, '11', '00', '21', '00'),
(4, 7, '11', '00', '21', '00'),
(5, 7, '11', '00', '21', '00'),
(6, 7, '11', '00', '21', '45'),
(7, 7, '11', '00', '21', '45'),
(1, 8, '12', '30', '17', '00'),
(2, 8, '12', '30', '17', '00'),
(3, 8, '12', '30', '17', '00'),
(4, 8, '12', '30', '17', '00'),
(5, 8, '12', '30', '17', '00'),
(6, 8, '12', '30', '17', '00'),
(7, 8, '12', '30', '17', '00'),
(1, 9, '11', '30', '18', '00'),
(2, 9, '11', '30', '18', '00'),
(3, 9, '11', '30', '18', '00'),
(4, 9, '11', '30', '18', '00'),
(5, 9, '11', '30', '18', '00'),
(6, 9, '11', '30', '19', '00'),
(7, 9, '11', '30', '19', '00'),
(1, 10, '07', '00', '22', '00'),
(2, 10, '07', '00', '22', '00'),
(3, 10, '07', '00', '22', '00'),
(4, 10, '07', '00', '22', '00'),
(5, 10, '07', '00', '22', '00'),
(6, 10, '07', '00', '22', '00'),
(7, 10, '07', '00', '22', '00'),
(1, 11, '08', '00', '21', '30'),
(2, 11, '08', '00', '21', '30'),
(3, 11, '08', '00', '21', '30'),
(4, 11, '08', '00', '21', '30'),
(5, 11, '08', '00', '21', '30'),
(6, 11, '06', '00', '21', '30'),
(7, 11, '06', '00', '21', '30'),
(1, 12, '08', '00', '21', '30'),
(2, 12, '08', '00', '21', '30'),
(3, 12, '08', '00', '21', '30'),
(4, 12, '08', '00', '21', '30'),
(5, 12, '08', '00', '21', '30'),
(6, 12, '06', '00', '21', '30'),
(7, 12, '06', '00', '21', '30'),
(1, 13, '07', '00', '21', '30'),
(2, 13, '07', '00', '21', '30'),
(3, 13, '07', '00', '21', '30'),
(4, 13, '07', '00', '21', '30'),
(5, 13, '07', '00', '21', '30'),
(6, 13, '07', '00', '23', '30'),
(7, 11, '07', '00', '23', '30'),
(1, 14, '07', '00', '23', '59'),
(2, 14, '07', '00', '23', '59'),
(3, 14, '07', '00', '23', '59'),
(4, 14, '07', '00', '23', '59'),
(5, 14, '07', '00', '23', '59'),
(6, 14, '07', '00', '23', '59'),
(7, 14, '07', '00', '23', '59'),
(1, 15, '07', '00', '23', '59'),
(2, 15, '07', '00', '23', '59'),
(3, 15, '07', '00', '23', '59'),
(4, 15, '07', '00', '23', '59'),
(5, 15, '07', '00', '23', '59'),
(6, 15, '07', '00', '23', '59'),
(7, 15, '07', '00', '23', '59'),
(1, 16, '07', '00', '23', '59'),
(2, 16, '07', '00', '23', '59'),
(3, 16, '07', '00', '23', '59'),
(4, 16, '07', '00', '23', '59'),
(5, 16, '07', '00', '23', '59'),
(6, 16, '07', '00', '23', '59'),
(7, 16, '07', '00', '23', '59'),
(1, 17, '07', '00', '23', '59'),
(2, 17, '07', '00', '23', '59'),
(3, 17, '07', '00', '23', '59'),
(4, 17, '07', '00', '23', '59'),
(5, 17, '07', '00', '23', '59'),
(6, 17, '07', '00', '23', '59'),
(7, 17, '07', '00', '23', '59'),
(1, 18, '07', '00', '23', '00'),
(2, 18, '07', '00', '23', '00'),
(3, 18, '07', '00', '23', '00'),
(4, 18, '07', '00', '23', '00'),
(5, 18, '07', '00', '23', '00'),
(6, 18, '07', '00', '23', '00'),
(7, 18, '07', '00', '23', '00'),
(1, 19, '07', '00', '23', '00'),
(2, 19, '07', '00', '23', '00'),
(3, 19, '07', '00', '23', '00'),
(4, 19, '07', '00', '23', '00'),
(5, 19, '07', '00', '23', '00'),
(6, 19, '07', '00', '23', '00'),
(7, 19, '07', '00', '23', '00'),
(1, 20, '0', '00', '23', '59'),
(2, 20, '0', '00', '23', '59'),
(3, 20, '0', '00', '23', '59'),
(4, 20, '0', '00', '23', '59'),
(5, 20, '0', '00', '23', '59'),
(6, 20, '0', '00', '23', '59'),
(7, 20, '0', '00', '23', '59'),
(1, 21, '11', '00', '19', '00'),
(2, 21, '11', '00', '19', '00'),
(3, 21, '11', '00', '19', '00'),
(4, 21, '11', '00', '19', '00'),
(5, 21, '11', '00', '19', '00'),
(6, 21, '11', '00', '19', '00'),
(7, 21, '11', '00', '19', '00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lat` double(8,2) NOT NULL,
  `lng` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_13_123614_create_posts_table', 1),
(5, '2020_10_15_025813_add_user_id_to_posts', 1),
(6, '2020_10_15_114755_add_cover_image_to_posts', 1),
(7, '2020_10_16_155845_app_age_phone_for_user', 1),
(8, '2020_10_18_034212_adding_location_database', 1),
(9, '2020_10_18_040025_adding_city_to_locations', 1),
(10, '2020_10_31_074224_create_city_table', 2),
(11, '2020_10_31_075737_create_places_table', 2),
(12, '2020_11_01_065212_create_place_table', 3),
(13, '2020_11_01_065554_create_activities_table', 3),
(14, '2020_11_03_143356_create_days_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('saurav.kanegaonkar@gmail.com', '$2y$10$p7ZnXJhr2i.1GMi/Ve7.bOyrgyRioa0CVQHGUzJOqekdBrMZ.tgEG', '2020-11-18 17:57:45');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `place_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`place_id`, `name`, `city`, `description`, `address`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 'Gateway Of India', 'Mumbai', 'The Gateway of India is an arch-monument built in the early twentieth century in the city of Mumbai, in the Indian state of Maharashtra. It was erected to commemorate the landing in December 1911 at Apollo Bunder, Mumbai of King-Emperor George V and Queen-Empress Mary, the first British monarch to visit India. At the time of the royal visit, the gateway was not yet built, and a cardboard structure greeted the monarch. The foundation stone was laid in March 1913 for a monument built in the Indo-Saracenic style, incorporating elements of 16th-century Marathi architecture. The final design of the monument by architect George Wittet was sanctioned only in 1914, and construction was completed in 1924. The structure is a triumphal arch made of basalt, which is 26 metres high. After its construction the gateway was used as a symbolic ceremonial entrance to British India for important colonial personnel. It has been called a symbol of \"conquest and colonisation\" commemorating British colonial legacy. The gateway is also the monument from where the last British troops left India in 1948, following Indian independence.', 'Apollo Bandar, Colaba, Mumbai, Maharashtra 400001\r\n', '18.9200694', '72.82934805000001', '2020-11-01 08:31:06', '2020-11-01 08:31:06'),
(2, 'Elephanta Caves', 'Mumbai', 'Elephanta Caves are a UNESCO World Heritage Site and a collection of cave temples predominantly dedicated to the Hindu god Shiva. They are on Elephanta Island, or Gharapuri, in Mumbai Harbour, 10 kilometres east of Mumbai in the Indian state of Mahārāshtra. The island, about 2 kilometres west of the Jawaharlal Nehru Port, consists of five Hindu caves and a few Buddhist stupa mounds that date back to the 2nd century BCE, as well as a small group of two Buddhist caves with water tanks. The Elephanta Caves contain rock cut stone sculptures that show syncretism of Hindu and Buddhist ideas and iconography. The caves are hewn from solid basalt rock. Except for a few exceptions, much of the artwork is defaced and damaged. The main temple\'s orientation as well as the relative location of other temples are placed in a mandala pattern. The carvings narrate Hindu mythologies, with the large monolithic 20 feet Trimurti Sadashiva, Nataraja and Yogishvara being the most celebrated.', 'Raigad, Gharapuri, Mumbai, Maharashtra 400094', '18.96143995', '72.93294505', '2020-11-01 08:33:09', '2020-11-01 08:33:09'),
(3, 'Sanjay Gandhi National Park', 'Mumbai', 'Sanjay Gandhi National Park is a 87 km² protected area in Mumbai, Maharashtra State in India. It was established in 1996 with headquarters at Borivali. It is notable as one of the major national parks existing within a metropolis limit and is one of the most visited parks in the world. The rich flora and fauna of Sanjay Gandhi National Park attracts more than 2 million visitors every year. Tourists also enjoy visiting the 2400-year-old Kanheri caves sculpted out of the rocky cliffs which lies within the park.', 'Western Express Hwy, Borivali East, Mumbai, Maharashtra 400066\r\n', '19.2304007', '72.8634206', '2020-11-01 08:35:33', '2020-11-01 08:35:33'),
(4, 'Haji Ali Dargah', 'Mumbai', 'The Haji Ali Dargah is a mosque and dargah or the monument of Pir Haji Ali Shah Bukhari located on an islet off the coast of Worli in the southern part of Mumbai. Pir Haji Ali Shah Bukhari was a Sufi saint and a wealthy merchant from Uzbekistan. Near the heart of the city proper, the dargah is one of the most recognisable landmarks of Mumbai. An exquisite example of Indo-Islamic Architecture, associated with legends about doomed lovers, the dargah contains the tomb of Haji Ali Shah Bukhari.', 'Dargarh Road, Lala Lajpat Rai Marg, Mumbai, Maharashtra 400026', '18.980092399999997', '72.809812', '2020-11-01 08:37:38', '2020-11-01 08:37:38'),
(5, 'Bandra-Worli Sea Link', 'Mumbai', 'The Bandra–Worli Sea Link is a bridge that links Bandra in the Western Suburbs of Mumbai with Worli in South Mumbai. It is a cable-stayed bridge with pre-stressed concrete-steel viaducts on either side. It is a part of the proposed Western Freeway that will link the Western Suburbs to Nariman Point in Mumbai\'s main business district. The 1M bridge was commissioned by the Maharashtra State Road Development Corporation, and built by the Hindustan Construction Company. The first four of the eight lanes of the bridge were opened to the public on 30 June 2009. All eight lanes were opened on 24 March 2010. The sea-link reduces travel time between Bandra and Worli during peak hours from 20–30 minutes to 10 minutes. As of October 2009, BWSL had an average daily traffic of around 37,500 vehicles.', 'Kesarinath Buva Bhaye Marg, Koliwada, Worli, Mumbai, Maharashtra 400030\r\n', '19.0220964', '72.8175802', '2020-11-01 08:39:33', '2020-11-01 08:39:33'),
(6, 'Flora Fountain', 'Mumbai', 'Flora Fountain is located at the Hutatma Chowk is an ornamentally sculpted architectural heritage monument located at the southern end of the historic Dadabhai Naoroji Road, at the Fort business district in the heart of South Mumbai, Mumbai, India. Flora Fountain, built in 1864, depicts the Roman goddess Flora. It was built at a total cost of Rs. 47,000, or 9000 pounds sterling, a large sum in those days.', 'Veer Nariman Road, Mahatma Gandhi Road, Kala Ghoda, Fort, Mumbai, Maharashtra 400001\r\n', '18.9318651', '72.8313275', '2020-11-01 08:40:47', '2020-11-01 08:40:47'),
(7, 'Veer Mata Jijabai Bhosale Udyan And Zoo', 'Mumbai', 'Veermata Jijabai Bhonsale Udyan, also known as the Byculla Zoo, is a zoo and garden covering 50 acres located at Byculla, in the heart of Mumbai, India. It is the oldest public garden in Mumbai. After Indian independence it was Named after Jijamata, the mother of Shivaji, the first Maratha emperor. In 1835, British administration granted a large plot of land in Sewri to the Agro Horticultural Society of Western India for a botanical garden. That land was later acquired for a European burial ground. In 1861, construction of a new garden was commenced on 33 acres in the Mount Estate, Mazgaon. The flora from Sewri garden was transferred to this new garden named Jijamata Udyaan which was formally opened to the public by Lady Frere on 19 November 1862. Agro Horticultural Society of Western India continued to maintain Victoria Gardens till 1873 when the society\'s end led to the municipal corporation taking over the garden\'s upkeep. In 1890 the garden was extended by 15 acres especially for the zoo.', '91A, Lalbaug Flyover, Byculla East, Near Byculla Railway Station, Mumbai, Maharashtra 400027\r\n', '18.97871', '72.8351211', '2020-11-01 08:42:47', '2020-11-01 08:42:47'),
(8, 'Jehangir Art Gallery', 'Mumbai', 'Jehangir Art Gallery is an art gallery in Mumbai. It was founded by Sir Cowasji Jehangir at the urging of K. K. Hebbar and Homi Bhabha. It was built in 1952. Managed by the Committee of Management, the entire cost of this mansion was donated by Cowasji Jehangir. This gallery is situated at Kala Ghoda, behind the Prince of Wales Museum, in South Mumbai near the Gateway of India, and has four exhibition halls. The gallery was designed by G.M.Bhuta for G.M. Bhuta & Associates.', '161B, Mahatma Gandhi Road, Kala Ghoda, Fort, Mumbai, Maharashtra 400001\r\n', '18.9274559', '72.831703', '2020-11-01 08:44:17', '2020-11-01 08:44:17'),
(9, 'Taraporevala Aquarium', 'Mumbai', 'Taraporewala Aquarium or Taraporevala Aquarium is India\'s oldest aquarium and one of the city\'s main attractions. It hosts marine and freshwater fishes. The aquarium is located on Marine Drive in Mumbai.. It was re-opened after renovation on 3 March 2015. The renovated aquarium has a 12-feet long and 180 degree acrylic glass tunnel. The fish will be kept in large glass tanks, which will be lit with LED lights. 2,000 fishes of over 400 species and has been renovated at a cost of Rs.22 crore. The exotic fish from overseas has been introduced at the new aquarium the number of new varieties of marine fish at 70. Helicopter, Arowana, Grouper, yellow-striped tang, blue-spotted stingray, star, clown, hark, trigger, Grouper, Moorish idol, Azure Damsel, Blueline Demoiselle, Purple Firefish, Cloudy Damsel, Copperband Butterflyfish, Schooling Bannerfish, Raccoon Butterflyfish, White Tail Trigger, Clown Triggerfish and Blue Ribbon Eel. The 40 new varieties of freshwater fish would include Red Devil, Jaguar, Electric Blue Jack Dempsey, Frontosa and Catfish. These fishes will be housed in larger tanks than before with imported flexi glass for better visibility. ', 'Netaji Subhash Chandra Bose Road, Marine Drive, near Charni Road, Railway Station, Mumbai, Maharashtra 400002\r\n', '18.949258800000003', '72.82003019999999', '2020-11-01 08:46:02', '2020-11-01 08:46:02'),
(10, 'Juhu Chowpatty', 'Mumbai', 'Juhu Beach is one of the most famous and most visited beach in Mumbai. It has a big shore line. You will find people jogging on the beach during early morning and evening.  Security is managed well and you will see Mumbai Police patrolling the beach regularly. Best time of the day is evening time, as you will see the sunset, beautiful lighting and various vendors offering food and articles for sale. Juhu Beach is a favourite shoot location for the film industries as it provides beautiful ambiance for shooting. Children and tourist love this beach.\r\nSeveral options are available for food lovers. These are mainly Mumbai dishes like Pani Pune, Chat masala, Bhelpuri, Ragda pattis, Dahi puri, Faluda, Kala Khatta gola,  Sarbat, the list is huge.', 'Juhu Rd, JVPD Scheme, Juhu, Mumbai, Maharashtra 400047\r\n', '19.1049344', '72.83256445', '2020-11-01 08:47:56', '2020-11-01 08:47:56'),
(11, 'Shri Siddhi Vinayak Ganapati Mandir', 'Mumbai', 'The Shree Siddhivinayak Ganapati Mandir is a Hindu temple dedicated to Lord Shri Ganesh. It is located in Prabhadevi, Mumbai, Maharashtra, India.It was originally built by Laxman Vithu and Deubai Patil on 19 November 1801. It is one of the richest temples in India.\r\n\r\nThe temple has a small mandap with the shrine for Siddhi Vinayak (\"Ganesha who grants your wish\"). The wooden doors to the sanctum are carved with images of the Ashtavinayak (the eight manifestations of Ganesha in Maharashtra). The inner roof of the sanctum is plated with gold, and the central statue is of Ganesha. In the periphery, there is a Hanuman temple as well. The exterior of the temple consists of a dome which is lit up with multiple colors in the evenings and they keep changing every few hours. The statue of Shri Ganesha is located exactly under the dome.', 'SK Bole Marg, Prabhadevi, Mumbai, Maharashtra 400028', '19.01692', '72.830409', '2020-11-18 05:59:32', '2020-11-18 05:59:32'),
(12, 'ISKCON Temple', 'Mumbai', 'The ISKCON Temple was constructed by Acharya Bhaktivedanta Swami Prabhupada, the founder of the Hare Krishna Movement. The temple was built in the year 1978 and is one of the most beautiful places to seek solace and spirituality in the city. One of its main highlights is that it is home to several animals and birds like peacocks, monkeys, and cows providing them with a safe haven to thrive. The temple is carved from beautiful white marble while the interior of the temple is beautified with hand-drawn paintings depicting the Legends of Krishna and especially the divine love of Krishna and Radha. You may relax and meditate here for hours.\r\n\r\nInside the temple complex, you will also find an auditorium, a library, a restaurant, and guesthouses. ISKCON Mumbai attracts thousands of visitors and locals alike throughout the year. Janmashtami is a day of huge celebrations in the temple.', 'Hare Krishna Land, Juhu Church Road, Juhu, Mumbai – 400049, Maharashtra', '19.113', '72.8263', '2020-11-18 06:02:55', '2020-11-18 06:02:55'),
(13, 'Mumbadevi Temple', 'Mumbai', 'The city of Mumbai derives its very name from one of its oldest temples, the Mumbadevi Temple. This temple is considered to be one of the greatest holy places to visit dedicated to the worship of Goddess Mumba, an incarnation of Goddess Durga. Mumba Devi is the patron goddess of the native communities of Mumbai like the agricultural and fishermen (Koli) community and the Somvanshi Kshatriya community. The temple was constructed in 1675. The goddesses’ idol is decked up with traditional jewelry and crown, placed atop a beautiful altar. The idol of Mumba Devi is made from black stone while her face is painted orange. Inside the temple complex, other deities are also placed. Hoards of devotees visit the temple on Tuesdays, which is considered to be auspicious.', 'Mumbadevi Area, Bhuleshwar, Mumbai, Maharashtra 400002', '18.95', '72.83', '2020-11-18 06:05:17', '2020-11-18 06:05:17'),
(14, 'Phoenix Market City', 'Mumbai', 'Phoenix Marketcity is the largest shopping mall in India, situated in Kurla, Mumbai. It is developed by The Phoenix Mills Co. Ltd. spread across 4.1 million sq ft[5], the mall includes 2.1 million sq ft of retail space. It houses 600 stores with domestic and foreign brands, PVR Cinemas which has 14 movie screens and 70 restaurants.Its sister mall in Mumbai is High Street Phoenix, located in Lower Parel', 'Junction, LBS Marg, Patelwadi.Kurla, Kamani, Kurla West, Kurla, Mumbai, Maharashtra 400070', '19.0864', '72.8890', NULL, NULL),
(15, 'High Street Phoenix Mall', 'Mumbai', 'Redeveloped and launched in the year 2008, High Street Phoenix Mall is among the best malls in Mumbai. This mall can be easily distinguished from the others, thanks to the tall chimneys standing behind it. A remnant of the past, these chimneys signify the fact that the mall has been built on an area where large textile mills once stood. Don’t be surprised if you cannot find High Street Phoenix Mall on Google Maps, just follow the directions for Phoenix Mills and you will arrive at this humongous mall in Lower Parel.\r\n\r\nSprawling over 3.3 million square feet, you can spend one full day exploring the length and breadth of this mall. Expanded to include the Palladium Mall, High Street Phoenix Mall has no dearth of food outlets and luxury stores. In total, there are around 500 brands here. \r\n\r\nThe Skyzone, consisting of a bowling alley and gaming arcade, is a swanky place to spend a date night or if you want to play some games. So if you want to splurge on yourself, we recommend you visit this mall.', '462, Senapati Bapat Marg, Lower Parel, Mumbai, Maharashtra 400013', '18.9941', '72.8241', NULL, NULL),
(16, 'Infiniti Mall', 'Mumbai', 'In sync with its name, this famous mall is renowned for giving customers ‘infinite experiences to remember’. When it comes to providing unparalleled experiences, there is no match for this mall. Why, you ask? There is a roller coaster inside the mall! This is something not only unheard of but perhaps Infiniti Mall Mumbai, Maharashtra is the only mall to have pulled off this feat.\r\n\r\nLaunched in the year 2011, the mall is built on 1 million square feet of area and is one of the biggest malls in Andheri. Shoppers can find the likes of Zara and Sephora here along with a wide range of fine dining restaurants. For entertainment, there is a cinema with five screens. If you plan to take your kid along on a shopping spree, do take them to the kids play zone by Fun City.\r\n\r\nThe mall is also popular for its bar Hoppipola and hosts several live performances throughout the year, making it a great place to hangout in Mumbai.', 'New Link Rd, Malad, Mindspace, Malad West, Mumbai, Maharashtra 400064', '19.1848', '72.8346', NULL, NULL),
(17, 'Growel’s 101', 'Mumbai', 'Unlike regular shopping malls, Growel’s 101 was designed keeping Neo-Classical architecture in mind. Don’t be surprised if you feel like you are in a European village once you enter this shopping arena.\r\n\r\nSpread on 750,000 square feet of area, this mall houses a Big Bazaar hypermarket arena and plenty of other departmental stores like Pantaloons and Reliance Trends to cater to the needs of every kind of shopaholic. Some of the other famous brands you can find at the mall are AND, Nike, Puma and our very own Global Desi. Later, Starbucks, Central and Chroma were also added.\r\n\r\nThe entire mall is being expanded in phases so you can expect more international brands opening up in the near future. The mall even has a multiplex cinema and a huge arena for your children. Fun and engaging activities are held on weekends and it might even get crowded so we suggest you visit the mall on weekdays if you don’t like crowded malls.', 'Police Station, Off, Western Express Highway, Akurli Road, Samata Nagar, Kandivali East, Mumbai, Maharashtra 400101', '19.2033', '72.8596', NULL, NULL),
(18, 'Aksa Beach', 'Mumbai', 'Set against the backdrop of swaying coconut trees, on the outskirts of the city in Malad, Aksa Beach is known for its clean sand and idyllic quietness, where all sorts of commercial activities take a backseat and peace becomes a state of mind. Walking barefoot on the soft sand during sunset is a must-do and the calming breeze gently adds to the tranquil surroundings. The beach serves as one of the best spots for organizing parties and picnics. Sea shells and snails scattered across the beach seem to mirror the stars on a full moon light. Picking up seashells is one of the fun activities to engage in here. Locals flock to this beach for jogging, evening walk, admire beautiful sunset views and to enjoy the silence and breezy atmosphere.\r\n\r\nDue to the strong tides and waves, it is also not recommended to visit the beach during monsoons. The beach is a rejuvenating retreat from the hustle bustle of the city life, and owes most of its popularity to the song ‘Tujhe Aksa Beach ghuma du’ from the Bollywood movie ‘God Tussi Great ho’.Lately though, it is becoming a top pick among tourists seeking tranquillity and peace. The beach is still untouched by the city crowds and hence maintains its natural charm, unblemished beauty and is frequented by families and couples alike. Lined with quaint little cottages and luxury resorts, the pristine beach makes for an ideal getaway and is counted as one of the best family beaches in Mumbai.', 'Aksa Village, Malad West, Mumbai 400061', '19.1760', '72.7954', NULL, NULL),
(19, 'Madh Island Beach', 'Mumbai', 'Madh Island Beach is one of the most famous family beaches of Mumbai and is known as a renowned tourist spot. This beautiful and relatively-isolated beach is actually made of a cluster of little villages and farmlands situated on the North-Western coast of Mumbai. The shore is flanked by mangroves on all sides that add to its scenic beauty.\r\n\r\nWhile here, one can spot the watchtower built by the Portuguese in early 17th century called the Madh Fort that stands tall to this day, and is a breathtaking structure overlooking the sea. The fort has also been used for the shooting of some very popular Bollywood movies including Shootout at Wadala, Baazigar and Shatranj. Although the interiors are crumbling and mostly in ruins, the fort still boasts of sturdy fortification, and falls under the purview of Indian Air Force as it is close to Indian Air Force base.\r\n\r\nMadh Island is a respite from the otherwise dazzling environs of the city and can be reached by an hour’s drive or a ferry ride from Mumbai. The island is bordered by the Arabian Sea on the west and Malad Creek on the east, and is mainly inhabited by Kolis, Marathis, and Roman Catholics. The swift current and tides of the ocean are not ideal for a swim and it is prohibited to wander off too far in the waters even during low tides. The beach is swarmed by tourists owing to its sunset points, sun-kissed sands, fishing boats and fishermen going about their daily chores.\r\n\r\nTip: Make sure to carry a sunscreen, a cap or hat, and sunglasses along and wear comfortable clothes like shorts, tees, pants or dresses', 'Madh Island, Ambu Bet, Madh, Mumbai, Maharashtra', '19.132283', '72.794785', NULL, NULL),
(20, '5 Gardens', 'Mumbai', 'In the Matunga area. Part of the famous Dadar-Parsi colony, established for the upper class Parsis in the early 19th century. There are five small gardens in this pretty area lying between King’s Circle and Dadar. There are also pleasant, tree-shaded roads in the Parsi residential area just to the south of the gardens and east of Kings Circle Rd. We don’t proscribe a particular route, but one can put together 3-4 km around the gardens and the adjacent residential area, with some lovely older buildings.', 'Lady Jehangir Road, Dadar East Mumbai, Maharashtra 400019, India', '19.0197', '72.8543', NULL, NULL),
(21, 'Global Vipassana Pagoda', 'Mumbai', 'The Global Vipassana Pagoda is a Meditation Dome Hall with a capacity to seat around 8,000 Vipassana meditators (largest such meditation hall in the world) near Gorai, North-west of Mumbai, Maharashtra, India. The Pagoda was inaugurated by Pratibha Patil, then President of India on 8 February 2009.It is built on donated land on a peninsula between Gorai creek and the Arabian Sea. The pagoda is to serve as a monument of peace and harmony. The Global Vipassana Pagoda has been built out of gratitude to Sayagyi U Ba Khin (1899 - 1971), Vipassana teacher and the first Accountant-General of Independent Burma, who was instrumental in Vipassana returning to India, the country of its origin.\r\n\r\nBuilt entirely through voluntary donations, the purpose of the Global Vipassana Pagoda is to: 1) share information about Vipassana, and 2) spread information on Gotama the Buddha and his teachings. Vipassanā is the practical quintessence of the universal, non-sectarian teachings of the Buddha.\r\n\r\nIts traditional Burmese design is an expression of gratitude towards the country of Myanmar for preserving the practice of Vipassana. The shape of the pagoda is a copy of the Shwedagon Pagoda (Golden Pagoda) in Yangon, Myanmar. It was built combining ancient Indian and modern technology to enable it to last for a thousand years.', 'Global Pagoda Road, near Esselworld Gorai, Borivali West, Mumbai, Maharashtra 400091', '19.223499106', '72.8036284521', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `place_activity`
--

CREATE TABLE `place_activity` (
  `place_id` int(10) UNSIGNED NOT NULL,
  `activity_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `place_activity`
--

INSERT INTO `place_activity` (`place_id`, `activity_id`) VALUES
(1, 2),
(2, 2),
(3, 2),
(3, 3),
(3, 4),
(3, 7),
(4, 1),
(4, 9),
(5, 2),
(6, 1),
(6, 2),
(7, 2),
(7, 4),
(8, 2),
(9, 2),
(9, 4),
(10, 1),
(10, 2),
(10, 5),
(11, 1),
(11, 9),
(12, 1),
(12, 9),
(13, 1),
(13, 9),
(14, 1),
(14, 6),
(15, 1),
(15, 6),
(16, 1),
(16, 6),
(17, 1),
(17, 6),
(18, 2),
(18, 5),
(19, 2),
(19, 5),
(20, 7),
(21, 2),
(21, 7),
(21, 8),
(21, 9);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created_at`, `updated_at`, `user_id`, `cover_image`) VALUES
(1, 'The SHY Brothers', '<p><strong>We&#39;re the SHY brothers!</strong></p>', '2020-10-28 10:51:28', '2020-10-28 10:51:28', 1, 'SHY_1603902088.jpeg'),
(6, 'Mesmerising Taj Mahal', '<p>Lorem&nbsp;ipsum,&nbsp;dolor&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Unde&nbsp;nostrum&nbsp;cupiditate&nbsp;doloribus,&nbsp;asperiores&nbsp;aut&nbsp;facilis&nbsp;error&nbsp;voluptates&nbsp;corrupti&nbsp;itaque&nbsp;veniam&nbsp;quod&nbsp;hic.&nbsp;At&nbsp;quis&nbsp;delectus&nbsp;dolorem.&nbsp;Nostrum&nbsp;aliquid&nbsp;temporibus&nbsp;assumenda&nbsp;nihil&nbsp;optio&nbsp;consectetur,&nbsp;ex&nbsp;fugiat&nbsp;nulla&nbsp;illum&nbsp;animi&nbsp;voluptatibus&nbsp;doloremque.</p>', '2020-11-19 06:27:23', '2020-11-19 06:27:23', 2, 'taj_1605767242.jpg'),
(8, 'Beautiful Leh Ladakh', '<p>Lorem&nbsp;ipsum&nbsp;dolor,&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Nisi&nbsp;iusto&nbsp;laudantium&nbsp;soluta&nbsp;vel&nbsp;quod&nbsp;itaque&nbsp;minima&nbsp;perferendis&nbsp;magnam&nbsp;minus&nbsp;et&nbsp;vero&nbsp;quam&nbsp;est&nbsp;quibusdam&nbsp;deserunt,&nbsp;ad&nbsp;quis,&nbsp;praesentium&nbsp;asperiores&nbsp;reiciendis&nbsp;recusandae,&nbsp;quo&nbsp;quaerat&nbsp;facilis&nbsp;voluptates&nbsp;ipsum&nbsp;architecto.&nbsp;Voluptate&nbsp;minus&nbsp;fugiat&nbsp;explicabo&nbsp;neque&nbsp;veniam&nbsp;sit,&nbsp;odit&nbsp;dolorem,&nbsp;esse&nbsp;doloremque,&nbsp;doloribus&nbsp;obcaecati.</p>', '2020-11-19 06:30:45', '2020-11-19 06:30:45', 2, 'leh_1605767445.jpg'),
(11, 'SmartTourister is the best.', '<p>SmartTourister was a great help&nbsp;in planning a wonderful&nbsp;and optimal trip. We avoided those routes which could have lengthened our journey and spend more time in travelling instead of enjoying.&nbsp;</p>\r\n\r\n<p>Thank you so much SHY Brothers❤️ !!</p>', '2020-11-19 11:12:42', '2020-11-19 11:12:42', 2, 'mumbai_1605784362.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phone_no`, `age`) VALUES
(2, 'Saurav Kanegaonkar', 's.kanegaonkar@gmail.com', NULL, '$2y$10$ihOLhMuNaQi1xJc1SJXBkOCatF0Orm2xeLEc.evii.hQVdP/Yw9we', '18C78DCrzyZuilGBK00vAsWAlka6KkMbQe76yzdCG8LONLqjy3Zkd4nOQQrA', '2020-10-30 22:18:13', '2020-10-30 22:18:13', '1234567890', 21),
(3, 'Shivani', 'shivs@gmail.com', NULL, '$2y$10$rTX4GkAxaaEb.YOQiw1DfeGe8IeBxO9lOd538LYYMoYOCpfG7u1iC', NULL, '2020-11-06 07:38:55', '2020-11-06 07:38:55', '8879717279', 24),
(4, 'Amey', 'amey@gmail.com', NULL, '$2y$10$6Q9oNUd4GjcFb8iNMF3A7.Agd45z3YwR6ku2k5bQ0JPgm.lZBKDyO', NULL, '2020-11-06 07:49:48', '2020-11-06 07:49:48', '1234567890', 19),
(5, 'Minal Kanegaonkar', 'minal.kanegaonkar@gmail.com', NULL, '$2y$10$K0ky5TJsgQTRDmYHr4p9pe/HQKBEFYNi85TVEl2TMOtjiQQzg21TC', NULL, '2020-11-06 11:23:29', '2020-11-06 11:23:29', '9987338552', 50),
(6, 'Saurav Kanegaonkar', 'sv.kanegaonkar@gmail.com', NULL, '$2y$10$Dp6zMK3OJhrHHwcO/IEeH.wtx.6/GUbKJV8QvwK6piD9hxBVOlyma', NULL, '2020-11-18 17:27:30', '2020-11-18 17:27:30', '1234567890', 70),
(7, 'Saurav Kanegaonkar', 'saurav.kanegaonkar@gmail.com', NULL, '$2y$10$TOHqbD/Z7P48c7L0Yy9L8eySLgRe5uURRsIHKZXJHB5EQNBxhM7hW', NULL, '2020-11-18 17:57:28', '2020-11-18 17:57:28', '9987338552', 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `activity_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `place_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
