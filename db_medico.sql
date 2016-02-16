
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 16/02/2016 às 19:45:59
-- Versão do Servidor: 10.0.20-MariaDB
-- Versão do PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `u817814853_dev`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacoes`
--

CREATE TABLE IF NOT EXISTS `avaliacoes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nota` int(11) NOT NULL,
  `comentario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `medico_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `avaliacoes_medico_id_index` (`medico_id`) USING BTREE,
  KEY `avaliacoes_user_id_index` (`user_id`) USING BTREE
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- Extraindo dados da tabela `avaliacoes`
--

INSERT INTO `avaliacoes` (`id`, `nota`, `comentario`, `user_id`, `medico_id`, `created_at`, `updated_at`) VALUES
(10, 1, 'Excelente Cunha,  amo muito!', 5, 8, '2015-12-20 02:28:46', '2016-02-01 01:22:20'),
(9, 3, 'Muito bom! Excelente atendimento, muito atencioso. ', 5, 7, '2015-12-20 02:19:03', '2016-02-01 01:22:42');

--
-- Gatilhos `avaliacoes`
--
DROP TRIGGER IF EXISTS `atualizar_nota`;
DELIMITER //
CREATE TRIGGER `atualizar_nota` AFTER INSERT ON `avaliacoes`
 FOR EACH ROW UPDATE medicos SET nota = ( SELECT AVG( avaliacoes.nota ) 
FROM avaliacoes
WHERE medico_id = new.medico_id ) 
WHERE id = new.medico_id
//
DELIMITER ;
DROP TRIGGER IF EXISTS `atualizar_nota_delete`;
DELIMITER //
CREATE TRIGGER `atualizar_nota_delete` AFTER DELETE ON `avaliacoes`
 FOR EACH ROW UPDATE medicos SET nota = ( SELECT AVG( avaliacoes.nota ) 
FROM avaliacoes
WHERE medico_id = old.medico_id ) 
WHERE id = old.medico_id
//
DELIMITER ;
DROP TRIGGER IF EXISTS `atualizar_nota_update`;
DELIMITER //
CREATE TRIGGER `atualizar_nota_update` AFTER UPDATE ON `avaliacoes`
 FOR EACH ROW UPDATE medicos SET nota = ( SELECT AVG( avaliacoes.nota ) 
FROM avaliacoes
WHERE medico_id = new.medico_id ) 
WHERE id = new.medico_id
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clinicas`
--

CREATE TABLE IF NOT EXISTS `clinicas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rua` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numero` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `clinicas`
--

INSERT INTO `clinicas` (`id`, `nome`, `telefone`, `rua`, `numero`, `bairro`, `created_at`, `updated_at`) VALUES
(7, 'Hospital 9 de Julho', '(69) 3216-1100', 'Senador Álvaro Maia', '1600 ', 'Olaria', '2015-12-20 02:13:30', '2015-12-20 02:13:30'),
(8, 'Hospital de Guarnição de Porto Velho', '(69) 3217-4034', 'Rui Barbosa', '409', 'Centro', '2015-12-20 02:26:20', '2015-12-20 02:26:20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidades`
--

CREATE TABLE IF NOT EXISTS `especialidades` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `especialidades`
--

INSERT INTO `especialidades` (`id`, `nome`, `descricao`, `created_at`, `updated_at`) VALUES
(8, 'Clínica Médica', 'É a especialidade médica que trata de pacientes adultos, atuando principalmente em ambiente hospitalar. ', '2015-12-20 02:14:50', '2015-12-20 02:14:50'),
(9, 'Ginecologia', 'É a pratica da medicina que lida diretamente com a saúde do aparelho reprodutor feminino (vagina, útero e ovários) e mamas.', '2015-12-20 02:27:18', '2015-12-20 02:27:18');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicos`
--

CREATE TABLE IF NOT EXISTS `medicos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `clinica_id` int(11) NOT NULL,
  `especialidade_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nota` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `medicos`
--

INSERT INTO `medicos` (`id`, `nome`, `clinica_id`, `especialidade_id`, `created_at`, `updated_at`, `nota`) VALUES
(8, 'Poliana Ereira Barros', 8, 9, '2015-12-20 02:27:41', '2015-12-20 02:27:41', 1),
(7, 'Jose Anselmo de Paula Freire', 7, 8, '2015-12-20 02:15:13', '2015-12-20 02:15:13', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_12_12_042355_create_medicos_table', 1),
('2015_12_12_042416_create_clinicas_table', 1),
('2015_12_12_042426_create_especialidades_table', 1),
('2015_12_12_043235_create_avaliacoes_table', 1),
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_12_12_042355_create_medicos_table', 1),
('2015_12_12_042416_create_clinicas_table', 1),
('2015_12_12_042426_create_especialidades_table', 1),
('2015_12_12_043235_create_avaliacoes_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nivel` int(2) NOT NULL DEFAULT '0',
  `imagem` tinyint(1) NOT NULL,
  `local` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `genero` tinyint(3) DEFAULT NULL,
  `dataNascimento` date DEFAULT NULL,
  `showName` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `showName` (`showName`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `nivel`, `imagem`, `local`, `cidade`, `estado`, `genero`, `dataNascimento`, `showName`) VALUES
(5, 'Tatiana Silva de Jesus', 'tatisj92@gmail.com', '$2y$10$MiY6axZV4IoFdVejgXE0puIuRShxIPXGjlHIxEp9uNHLLctvOUV/y', 'U63oAwOwrXkdIj26F5oL89CSdhYwNI1clDUIRuU0MvgY7gJ52sucW8N0cKi4', '2015-12-20 02:17:39', '2016-02-04 01:09:02', 0, 1, 'img_297f86e1b0bdd91a8f222396be54deb0.jpg', NULL, NULL, NULL, NULL, 'tatianasilva'),
(4, 'Alberto da Silva Milhomem da Costa', 'alberto.milho@gmail.com', '$2y$10$y4ee.5POJU9RgYwmtjtBaeYFCwsK.fR2i8EJQHO3uvPHkASYlMDX.', '09izq2ycrLBYHTrl1rVM0ifCre11RER07L0SefT1uWs6QIr4pA4Fiu9rbUlQ', '2015-12-20 02:04:31', '2016-02-04 01:20:13', 1, 1, 'img_b6bf2bf151d5901f22cf0e30bae7d0c5.jpg', 'Porto Velho', 'RO', 1, '1994-10-05', 'albertomilhomem');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
