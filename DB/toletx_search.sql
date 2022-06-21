-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2022 at 08:33 AM
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
-- Database: `toletx_search`
--

-- --------------------------------------------------------

--
-- Table structure for table `bilboards`
--

CREATE TABLE `bilboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hieght` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `electricity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bilboards`
--

INSERT INTO `bilboards` (`id`, `user_id`, `post_type`, `address`, `type`, `size`, `hieght`, `electricity`, `price`, `photo`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1', 'Rented', 'Bilboard Mohakhali', 'classic', '18sqr', '19', 'Electricity', '10000', 'toletx_bilboard_image_1.jpg', NULL, '2022-02-24 00:02:39', '2022-02-24 00:02:40'),
(2, '1', 'Rented', 'Bilboard dhaka', 'bulletin', '36sqr', '16', 'Electricity', '10000', 'toletx_bilboard_image_2.jpg', NULL, '2022-02-24 12:43:02', '2022-02-24 12:43:03'),
(3, '1', 'Wanted', 'Bilboard Tangail', 'classic', '18sqr', '16', 'Electricity', '1000', 'toletx_bilboard_image_3.jpg', NULL, '2022-02-24 12:43:33', '2022-02-24 12:43:33'),
(4, '1', 'Rented', 'Bilboard gazipur', 'classic', '18sqr', '30', 'Electricity', '1000', 'toletx_bilboard_image_4.jpg', NULL, '2022-02-24 12:44:04', '2022-02-24 12:44:05'),
(5, '1', 'Rented', 'Bilboard Syhlet', 'bulletin', '36sqr', '30', 'Electricity', '1000', 'toletx_bilboard_image_5.jpg', NULL, '2022-02-24 12:44:30', '2022-02-24 12:44:31');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `community__centers`
--

CREATE TABLE `community__centers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `community_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `road_width` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utilities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interior_condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fire_safety` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `garden` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cooking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sitting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wifi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exibution__centers`
--

CREATE TABLE `exibution__centers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exibution_center_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wifi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attached_toilet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utilities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `furnished` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attached_varanda` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hot_water` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `laundry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ac` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cable_tv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dining` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gym` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sports` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swimmingpool` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `factories`
--

CREATE TABLE `factories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `factory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `road_width` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utilities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `building_condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fire_safety` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interior_condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drainage_system` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flats`
--

CREATE TABLE `flats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flat_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wifi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attached_toilet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utilities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `furnished` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attached_varanda` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hot_water` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `laundry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ac` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cable_tv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hostels`
--

CREATE TABLE `hostels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hostel_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wifi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attached_toilet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utilities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `furnished` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attached_varanda` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hot_water` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `laundry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ac` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cable_tv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotel_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wifi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bathroom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cctv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `furnished` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `security` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guest_count` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lands`
--

CREATE TABLE `lands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `land_area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vegetations` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `road_width` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(83, '2022_01_22_141611_create_categories_table', 1),
(84, '2022_01_22_141627_create_products_table', 1),
(85, '2014_10_12_000000_create_users_table', 2),
(86, '2014_10_12_100000_create_password_resets_table', 2),
(87, '2019_08_19_000000_create_failed_jobs_table', 2),
(88, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(89, '2021_12_20_065936_create_user_information_table', 2),
(90, '2021_12_22_120036_add_facebook_id_in_users_table', 2),
(91, '2021_12_28_100841_create_rooms_table', 2),
(92, '2021_12_28_100923_create_parking__spots_table', 2),
(93, '2021_12_28_100955_create_hotels_table', 2),
(94, '2021_12_28_101015_create_offices_table', 2),
(95, '2021_12_28_101028_create_lands_table', 2),
(96, '2021_12_28_101053_create_community__centers_table', 2),
(97, '2021_12_28_101116_create_shooting__spots_table', 2),
(98, '2021_12_28_101132_create_shops_table', 2),
(99, '2021_12_28_101146_create_factories_table', 2),
(100, '2021_12_28_101205_create_warehouses_table', 2),
(101, '2021_12_28_101217_create_ponds_table', 2),
(102, '2021_12_28_101242_create_swimming__pools_table', 2),
(103, '2021_12_28_101257_create_bilboards_table', 2),
(104, '2021_12_28_101312_create_rooftops_table', 2),
(105, '2021_12_28_101333_create_restaurants_table', 2),
(106, '2021_12_28_101350_create_galleries_table', 2),
(107, '2021_12_28_101555_create_hostels_table', 2),
(108, '2022_01_09_104502_create_flats_table', 2),
(109, '2022_01_18_101557_create_exibution__centers_table', 2),
(110, '2022_01_18_101623_create_play_grounds_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `road_width` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utilities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interior_condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fire_safety` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parking__spots`
--

CREATE TABLE `parking__spots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_height` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `play_grounds`
--

CREATE TABLE `play_grounds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wifi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attached_toilet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utilities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `furnished` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `laundry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `change_room` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ac` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dining` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gym` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sports` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swimmingpool` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ponds`
--

CREATE TABLE `ponds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purpose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `road_width` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `water_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pond_area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drainage_system` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resort_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wifi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attached_toilet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utilities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `furnished` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attached_varanda` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hot_water` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `laundry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ac` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cable_tv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dining` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gym` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sports` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swimmingpool` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooftops`
--

CREATE TABLE `rooftops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utilities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protection` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interior_condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotel_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wifi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attached_toilet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utilities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `furnished` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attached_varanda` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hot_water` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `laundry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ac` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cable_tv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `user_id`, `post_type`, `hotel_name`, `address`, `room_size`, `wifi`, `attached_toilet`, `utilities`, `lift`, `furnished`, `attached_varanda`, `hot_water`, `laundry`, `ac`, `cable_tv`, `parking`, `price`, `photo`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1', 'Rented', 'royal blue', 'Room Banani', '36sqr', 'Wifi', 'Attached Toilet', 'Utilities', 'Lift', 'Furnished', 'Attached Varanda', 'Hot Water', 'Laundry', 'Ac', 'Cable tv', 'Parking', '10000', 'toletx_hotel_image_1.jpg', NULL, '2022-02-23 00:28:55', '2022-02-23 00:28:55');

-- --------------------------------------------------------

--
-- Table structure for table `shooting__spots`
--

CREATE TABLE `shooting__spots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shooting_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `road_width` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utilities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `building_condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fire_safety` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `garden` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cooking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sitting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wifi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vegetations` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `road_width` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utilities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `building_condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fire_safety` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interior_condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `swimming__pools`
--

CREATE TABLE `swimming__pools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wifi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `laundry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `change_room` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toilet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 2,
  `otp` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `facebook_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `photo`, `email`, `nationality`, `father_name`, `mother_name`, `address`, `date_of_birth`, `gender`, `n_photo`, `provider_id`, `avatar`, `email_verified_at`, `password`, `role_id`, `otp`, `remember_token`, `created_at`, `updated_at`, `facebook_id`) VALUES
(1, 'shakil', '01720972180', 'C:\\xampp\\tmp\\phpBEF4.tmp', 'sa27289@gmail.com', NULL, NULL, NULL, NULL, NULL, 'Male', 'toletx_user_n_photo1.jpg', NULL, NULL, NULL, '$2y$10$Vmap01.uTspDMvKH6EYVgeeSzSgGyr4xpYlW/yKH6QWYr5IHJFoxO', 1, NULL, NULL, NULL, '2022-02-23 00:26:08', NULL),
(2, 'alex', '01680419920', 'C:\\xampp\\tmp\\phpF3FA.tmp', 'djks@gmail.com', NULL, NULL, NULL, NULL, NULL, 'Male', 'toletx_user_n_photo2.jpg', NULL, NULL, NULL, '$2y$10$XP8S.QqHLnOS3iy8EFLOPOX0jos81SgSYWUDnQO7XmSMG9hvw2Lyq', 2, NULL, NULL, NULL, '2022-02-24 00:49:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ncard_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_identity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `warehouses`
--

CREATE TABLE `warehouses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `road_width` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utilities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `building_condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fire_safety` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interior_condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drainage_system` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bilboards`
--
ALTER TABLE `bilboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `community__centers`
--
ALTER TABLE `community__centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exibution__centers`
--
ALTER TABLE `exibution__centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `factories`
--
ALTER TABLE `factories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `flats`
--
ALTER TABLE `flats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostels`
--
ALTER TABLE `hostels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lands`
--
ALTER TABLE `lands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parking__spots`
--
ALTER TABLE `parking__spots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `play_grounds`
--
ALTER TABLE `play_grounds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ponds`
--
ALTER TABLE `ponds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooftops`
--
ALTER TABLE `rooftops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shooting__spots`
--
ALTER TABLE `shooting__spots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `swimming__pools`
--
ALTER TABLE `swimming__pools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warehouses`
--
ALTER TABLE `warehouses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bilboards`
--
ALTER TABLE `bilboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `community__centers`
--
ALTER TABLE `community__centers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exibution__centers`
--
ALTER TABLE `exibution__centers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `factories`
--
ALTER TABLE `factories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flats`
--
ALTER TABLE `flats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hostels`
--
ALTER TABLE `hostels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lands`
--
ALTER TABLE `lands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parking__spots`
--
ALTER TABLE `parking__spots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `play_grounds`
--
ALTER TABLE `play_grounds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ponds`
--
ALTER TABLE `ponds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooftops`
--
ALTER TABLE `rooftops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shooting__spots`
--
ALTER TABLE `shooting__spots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `swimming__pools`
--
ALTER TABLE `swimming__pools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `warehouses`
--
ALTER TABLE `warehouses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
