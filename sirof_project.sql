-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2026 at 03:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sirof_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-adilson.pereira@gmail.com|127.0.0.1', 'i:2;', 1772618574),
('laravel-cache-adilson.pereira@gmail.com|127.0.0.1:timer', 'i:1772618574;', 1772618574);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cargos`
--

CREATE TABLE `cargos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `envolvidos`
--

CREATE TABLE `envolvidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ocorrencia_id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL,
  `data_de_nascimento` varchar(255) NOT NULL,
  `sexo` varchar(255) NOT NULL,
  `nacionalidade` varchar(255) NOT NULL,
  `profissao` varchar(255) DEFAULT NULL,
  `documento_de_identificacao` varchar(255) DEFAULT NULL,
  `numero_do_documento` varchar(255) DEFAULT NULL,
  `tipo_de_envolvimento` varchar(255) NOT NULL,
  `contacto` varchar(255) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `envolvidos`
--

INSERT INTO `envolvidos` (`id`, `ocorrencia_id`, `nome`, `data_de_nascimento`, `sexo`, `nacionalidade`, `profissao`, `documento_de_identificacao`, `numero_do_documento`, `tipo_de_envolvimento`, `contacto`, `endereco`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 1, 'Armando Diogo Joaquim', '1993-06-21', 'Masculino', 'Angolana', 'Engenheiro Informático', 'Bilhete de Identidade', '005179389LA046', 'Vítima', '941563866', 'Luanda', 'Descrição da primeira ocorrência.', '2026-03-01 17:32:06', '2026-03-01 17:32:06'),
(2, 2, 'Armando', '0101-10-10', 'Masculino', '1010', '1010', 'Bilhete de Identidade', '1010', 'Suspeito', '1010', '1010', '1010', '2026-03-03 22:29:58', '2026-03-03 22:29:58'),
(3, 3, 'Armando Diogo Joaquim', '1010-10-10', 'Masculino', '1010', '1010', 'Bilhete de Identidade', '1010', 'Suspeito', '1010', '1010', '1010', '2026-03-03 23:39:56', '2026-03-03 23:39:56'),
(4, 5, 'Armando Diogo Joaquim', '1993-06-21', 'Masculino', 'Angolana', 'Engenheiro Informático', 'Bilhete de Identidade', '005179389LA046', 'Vítima', '941563866', 'Angola, Luanda - Cazenga', 'Descrição completa da ocorrência.', '2026-03-03 23:47:30', '2026-03-03 23:47:30'),
(5, 6, '1010', '0010-10-10', 'Masculino', '1010', '1010', 'Bilhete de Identidade', '1010', 'Suspeito', '1010', '1010', '1010', '2026-03-03 23:48:52', '2026-03-03 23:48:52'),
(6, 7, '1010', '0010-10-10', 'Masculino', '1010', '1010', 'Bilhete de Identidade', '1010', 'Suspeito', '1010', '1010', '1010', '2026-03-03 23:50:10', '2026-03-03 23:50:10'),
(7, 8, '1010', '0010-10-10', 'Masculino', '1010', '1010', 'Bilhete de Identidade', '1010', 'Suspeito', '1010', '1010', '1010', '2026-03-03 23:51:11', '2026-03-03 23:51:11'),
(8, 9, '1010', '0010-10-10', 'Masculino', '1010', '1010', 'Bilhete de Identidade', '1010', 'Suspeito', '1010', '1010', '1010', '2026-03-04 00:39:27', '2026-03-04 00:39:27'),
(9, 10, '1010', '0010-10-10', 'Masculino', '1010', '1010', 'Bilhete de Identidade', '1010', 'Suspeito', '1010', '1010', '1010', '2026-03-04 00:42:19', '2026-03-04 00:42:19'),
(10, 11, '1010', '0010-10-10', 'Masculino', '1010', '1010', 'Bilhete de Identidade', '1010', 'Suspeito', '1010', '1010', '1010', '2026-03-04 00:43:32', '2026-03-04 00:43:32'),
(11, 12, '2020', '0020-02-20', 'Masculino', '0202', '2020', 'Bilhete de Identidade', '2020', 'Suspeito', '2020', '2020', '2020', '2026-03-04 00:44:23', '2026-03-04 00:44:23'),
(12, 13, '3030', '0030-03-30', 'Masculino', '3030', '3030', 'Bilhete de Identidade', '3030', 'Suspeito', '3030', '3030', '3030', '2026-03-04 00:46:02', '2026-03-04 00:46:02'),
(13, 14, '1010', '0010-10-10', 'Masculino', '1010', '1010', 'Bilhete de Identidade', '1010', 'Vítima', '1010', '1010', '1010', '2026-03-04 07:04:37', '2026-03-04 07:04:37'),
(14, 17, 'Ärmando', '2000-10-10', 'Masculino', '1010', '101', 'Bilhete de Identidade', '1010', 'Suspeito', '1010', '1010', '1010', '2026-03-04 08:48:40', '2026-03-04 08:48:40'),
(15, 18, 'Gisela', '1980-10-10', 'Feminino', 'Angolana', 'Engenheira', 'Bilhete de Identidade', '005179389LA046', 'Vítima', '912569874', 'Angola, Luanda', 'Testando...', '2026-03-04 08:58:09', '2026-03-04 08:58:09'),
(16, 19, 'Clemente Josemar', '1975-10-10', 'Masculino', 'Duvidosa', 'Várias', 'Passaporte', 'N145236', 'Vítima', '9456325874', 'Luanda', 'mmmmmmmmmm', '2026-03-04 09:24:09', '2026-03-04 09:24:09'),
(17, 20, '1010222', '0010-10-10', 'Masculino', '1010', '1010', 'Bilhete de Identidade', '1010', 'Suspeito', '1010', '1010222', '1010', '2026-03-17 13:01:58', '2026-03-17 13:02:42');

-- --------------------------------------------------------

--
-- Table structure for table `estruturas`
--

CREATE TABLE `estruturas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `infraccaos`
--

CREATE TABLE `infraccaos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `envolvido_id` bigint(20) UNSIGNED NOT NULL,
  `tipo_de_infraccao` varchar(255) NOT NULL,
  `subtipo_de_infraccao` varchar(255) NOT NULL,
  `descricao` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infraccaos`
--

INSERT INTO `infraccaos` (`id`, `envolvido_id`, `tipo_de_infraccao`, `subtipo_de_infraccao`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 1, 'Migratoria', 'Entrada ilegal de estrangeiros', 'Primeira Infracção.', '2026-03-01 17:32:30', '2026-03-01 17:32:30'),
(2, 12, 'Migratoria', 'Saída ilegal de estrangeiros', 'mmmmmmmmm', '2026-03-04 00:46:44', '2026-03-04 00:46:44'),
(3, 15, 'Migratoria', 'Entrada ilegal de estrangeiros', 'Teste', '2026-03-04 08:58:25', '2026-03-04 08:58:25'),
(4, 16, 'Alfandegaria', 'Transgressão cambial', 'teste...', '2026-03-04 09:24:28', '2026-03-04 09:24:28'),
(5, 17, 'Migratoria', 'Entrada ilegal de estrangeiros', 'qqqqqqqqq', '2026-03-17 13:02:57', '2026-03-17 13:02:57');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_01_28_072607_create_ocorrencias_table', 1),
(5, '2026_02_06_153319_create_envolvidos_table', 1),
(6, '2026_02_07_154152_create_infraccaos_table', 1),
(7, '2026_03_01_164617_create_cargos_table', 1),
(8, '2026_03_01_164634_create_estruturas_table', 1),
(9, '2026_03_01_164640_create_user_cargos_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ocorrencias`
--

CREATE TABLE `ocorrencias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `numero_ocorrencia` varchar(255) NOT NULL,
  `fluxo_fronteirico` enum('Entrada','Saída') NOT NULL,
  `data` varchar(255) NOT NULL,
  `hora` varchar(255) NOT NULL,
  `local` varchar(255) NOT NULL,
  `situacao` enum('Rascunho','Submetido','Devolvido','Despachado') NOT NULL,
  `estado` enum('Aberto','Em Investigação','Encerrado','Arquivado') NOT NULL,
  `descricao` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ocorrencias`
--

INSERT INTO `ocorrencias` (`id`, `user_id`, `numero_ocorrencia`, `fluxo_fronteirico`, `data`, `hora`, `local`, `situacao`, `estado`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 1, '1234CC', 'Entrada', '2000-10-10', '10:30', 'Posto Fronteiriço do Luvo', 'Submetido', 'Aberto', 'Descrição da primeira ocorrência.', '2026-03-01 17:31:09', '2026-03-01 17:32:46'),
(2, 1, '1234CC', 'Entrada', '100111-10-10', '10:10', 'Posto Fronteiriço do Luvo', 'Rascunho', 'Aberto', 'mmmmkkkkkkk', '2026-03-03 22:29:38', '2026-03-03 22:29:38'),
(3, 1, '1234CC', 'Entrada', '1010-10-10', '10:10', 'Posto Fronteiriço do Luvo', 'Rascunho', 'Aberto', '1010', '2026-03-03 23:39:31', '2026-03-03 23:39:31'),
(4, 1, '1234CC', 'Entrada', '1010-10-10', '10:10', 'Posto Fronteiriço do Luvo', 'Rascunho', 'Aberto', '1010', '2026-03-03 23:43:11', '2026-03-03 23:43:11'),
(5, 1, '1234CC', 'Entrada', '2026-02-10', '10:30', 'Posto Fronteiriço do Luvo', 'Rascunho', 'Aberto', 'Descrição da ocorrência.', '2026-03-03 23:46:24', '2026-03-03 23:46:24'),
(6, 1, '1234CC', 'Entrada', '0010-10-10', '10:10', 'Posto Fronteiriço do Luvo', 'Rascunho', 'Aberto', '1010', '2026-03-03 23:48:35', '2026-03-03 23:48:35'),
(7, 1, '1234CC', 'Entrada', '0010-10-10', '10:10', 'Posto Fronteiriço do Luvo', 'Rascunho', 'Aberto', '1010', '2026-03-03 23:49:56', '2026-03-03 23:49:56'),
(8, 1, '1234CC', 'Entrada', '0010-10-10', '10:10', 'Posto Fronteiriço do Luvo', 'Rascunho', 'Aberto', '1010', '2026-03-03 23:50:56', '2026-03-03 23:50:56'),
(9, 1, '1234CC', 'Entrada', '0010-10-10', '10:10', 'Posto Fronteiriço do Luvo', 'Rascunho', 'Aberto', '101010', '2026-03-04 00:39:07', '2026-03-04 00:39:07'),
(10, 1, '1234CC', 'Entrada', '0010-10-10', '10:10', 'Posto Fronteiriço do Luvo', 'Rascunho', 'Aberto', '1010', '2026-03-04 00:42:04', '2026-03-04 00:42:04'),
(11, 1, '1234CC', 'Entrada', '0010-10-10', '10:10', 'Posto Fronteiriço do Luvo', 'Rascunho', 'Aberto', '1010', '2026-03-04 00:43:18', '2026-03-04 00:43:18'),
(12, 1, '1234CC', 'Entrada', '0010-10-10', '10:10', 'Posto Fronteiriço do Luvo', 'Rascunho', 'Aberto', '1010', '2026-03-04 00:44:07', '2026-03-04 00:44:07'),
(13, 1, '1234CC', 'Entrada', '2020-02-20', '20:20', 'Posto Fronteiriço do Luvo', 'Rascunho', 'Aberto', '2020', '2026-03-04 00:45:47', '2026-03-04 00:45:47'),
(14, 1, '1234CC', 'Entrada', '0010-10-10', '10:10', 'Posto Fronteiriço do Luvo', 'Rascunho', 'Aberto', '101010', '2026-03-04 07:04:18', '2026-03-04 07:04:18'),
(15, 1, '1234CC', 'Entrada', '2020-06-21', '10:10', 'Posto Fronteiriço do Luvo', 'Rascunho', 'Aberto', '1010', '2026-03-04 08:41:36', '2026-03-04 08:41:36'),
(16, 1, '1234CC', 'Entrada', '2020-06-21', '10:10', 'Posto Fronteiriço do Luvo', 'Rascunho', 'Aberto', '1010', '2026-03-04 08:43:07', '2026-03-04 08:43:07'),
(17, 1, '1234CC', 'Entrada', '2020-06-21', '10:10', 'Posto Fronteiriço do Luvo', 'Rascunho', 'Aberto', '1010', '2026-03-04 08:46:26', '2026-03-04 08:46:26'),
(18, 1, '1234CC', 'Entrada', '2026-03-04', '10:10', 'Posto Fronteiriço do Luvo', 'Submetido', 'Aberto', '101010', '2026-03-04 08:56:49', '2026-03-04 08:59:39'),
(19, 1, '1234CC', 'Entrada', '2026-03-04', '10:10', 'Posto Fronteiriço do Luvo', 'Rascunho', 'Aberto', '1010', '2026-03-04 09:23:10', '2026-03-04 09:23:10'),
(20, 1, '1234CC', 'Entrada', '0010-10-10', '10:10', 'Posto Fronteiriço do Luvo', 'Rascunho', 'Aberto', '1010', '2026-03-17 13:01:38', '2026-03-17 13:01:38');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('HosoBK5P8SWDFnmGoxR6FBRnZXO2znZOpTEmtfzU', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36 Edg/145.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZ2thWllNYWVyMTRZRk5rSEhWazM3c3FVWXRBTTVQUmRuRlpWVXUzcyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZGQvb2NvcnJlbmNpYSI7czo1OiJyb3V0ZSI7czoxNDoiYWRkLm9jb3JyZW5jaWEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTM6Im9jb3JyZW5jaWFfaWQiO2k6MjA7fQ==', 1773756179);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `endereco` text DEFAULT NULL,
  `numero_agente` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `foto`, `telefone`, `endereco`, `numero_agente`, `status`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Armando Joaquim', NULL, NULL, NULL, NULL, '1', 'armandodiogo941@hotmail.com', NULL, '$2y$12$hXw6W3mfygGJ5ET4Yk68R.yRuCkaFjEairm/ro7MtJhqErvrMAKOa', NULL, '2026-03-01 17:10:11', '2026-03-01 17:10:11');

-- --------------------------------------------------------

--
-- Table structure for table `user_cargos`
--

CREATE TABLE `user_cargos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_cargo` bigint(20) UNSIGNED NOT NULL,
  `id_estrutura` bigint(20) UNSIGNED NOT NULL,
  `estado` enum('ativo','inativo') NOT NULL DEFAULT 'ativo',
  `data_inicio` date NOT NULL,
  `data_fim` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cargos_nome_unique` (`nome`);

--
-- Indexes for table `envolvidos`
--
ALTER TABLE `envolvidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `envolvidos_ocorrencia_id_foreign` (`ocorrencia_id`);

--
-- Indexes for table `estruturas`
--
ALTER TABLE `estruturas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estruturas_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `infraccaos`
--
ALTER TABLE `infraccaos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `infraccaos_envolvido_id_foreign` (`envolvido_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ocorrencias`
--
ALTER TABLE `ocorrencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ocorrencias_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_cargos`
--
ALTER TABLE `user_cargos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_cargos_id_user_foreign` (`id_user`),
  ADD KEY `user_cargos_id_cargo_foreign` (`id_cargo`),
  ADD KEY `user_cargos_id_estrutura_foreign` (`id_estrutura`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `envolvidos`
--
ALTER TABLE `envolvidos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `estruturas`
--
ALTER TABLE `estruturas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infraccaos`
--
ALTER TABLE `infraccaos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ocorrencias`
--
ALTER TABLE `ocorrencias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_cargos`
--
ALTER TABLE `user_cargos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `envolvidos`
--
ALTER TABLE `envolvidos`
  ADD CONSTRAINT `envolvidos_ocorrencia_id_foreign` FOREIGN KEY (`ocorrencia_id`) REFERENCES `ocorrencias` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `estruturas`
--
ALTER TABLE `estruturas`
  ADD CONSTRAINT `estruturas_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `estruturas` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `infraccaos`
--
ALTER TABLE `infraccaos`
  ADD CONSTRAINT `infraccaos_envolvido_id_foreign` FOREIGN KEY (`envolvido_id`) REFERENCES `envolvidos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ocorrencias`
--
ALTER TABLE `ocorrencias`
  ADD CONSTRAINT `ocorrencias_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_cargos`
--
ALTER TABLE `user_cargos`
  ADD CONSTRAINT `user_cargos_id_cargo_foreign` FOREIGN KEY (`id_cargo`) REFERENCES `cargos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_cargos_id_estrutura_foreign` FOREIGN KEY (`id_estrutura`) REFERENCES `estruturas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_cargos_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
