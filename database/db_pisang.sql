-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19 Jun 2021 pada 05.21
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pisang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('eabft7t60i9k53bhh3bcodkfrcsosdrv', '::1', 1563347499, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333334373438393b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('b14chuv6f4us25fumdfuki2v1bibvjf4', '::1', 1563347857, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333334373834373b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('gosldf9ve3kd2hc7gjl8ca7g65h1jp8u', '::1', 1563348253, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333334383234333b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('0q1cs6u3r3lunehf81hn7cibums3hf58', '::1', 1563349094, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333334383833363b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('guuduq7pbl2gd3fi611p1bls51kbslch', '::1', 1563349426, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333334393134313b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('f5k69de8c06326gv3sbnlag8u5abda6h', '::1', 1563349742, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333334393731313b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('0thempcal0j8r53mp030lhogp98dcp4f', '::1', 1563350312, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333335303031373b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('2m575a6rdkhdpld071v1j8v4emog4j1g', '::1', 1563350863, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333335303733303b7569647c4e3b757365726e616d657c733a313a2261223b6e616d615f6c656e676b61707c733a343a22416c656b223b6c6576656c7c733a353a225369737761223b6c6f676765645f696e7c623a313b),
('rmgq19dn5qfgpinqlqhg79omg077qr85', '::1', 1563352013, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333335313737373b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('am0nb4u0f6rsqe7858ocja0pal4n76do', '::1', 1563352333, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333335323039363b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('hk7nknkajc0ib1ul59m8a4bn54d63rl9', '::1', 1563352895, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333335323634333b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('6lvii1l5aus2k9k4aatae5bn12rd3jrm', '::1', 1563353258, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333335323936303b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('2fm156eh992434lf0efbviscdhg67emt', '::1', 1563353405, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333335333331303b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('ub8mduhg32c6ar97isg8osop4f54hrop', '::1', 1563353760, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333335333632323b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('bpopa1al5msv7lkm0blf5uj9ig40h3ve', '::1', 1563354281, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333335343231333b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('pa9dut087l5uds3lcbfjt68dr8lc37pr', '::1', 1563376019, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333337363031333b7569647c4e3b757365726e616d657c733a363a226b657073656b223b6e616d615f6c656e676b61707c733a31343a224b6570616c612053656b6f6c6168223b6e69737c733a31313a223130313031313037303331223b6c6576656c7c733a31343a224b6570616c612053656b6f6c6168223b6c6f676765645f696e7c623a313b),
('kss07u3rb2vl7evu9lnn5v020f7hh10v', '::1', 1563376777, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333337363531323b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('rgeijehnpt2phbgf093p3113ii63o3da', '::1', 1563377193, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333337373135323b7569647c4e3b757365726e616d657c733a363a226b657073656b223b6e616d615f6c656e676b61707c733a31343a224b6570616c612053656b6f6c6168223b6e69737c733a31313a223130313031313037303331223b6c6576656c7c733a31343a224b6570616c612053656b6f6c6168223b6c6f676765645f696e7c623a313b),
('h7f94969uaotf6h6ppnk61e1o146b4fb', '::1', 1563377663, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333337373438333b7569647c4e3b757365726e616d657c733a363a226b657073656b223b6e616d615f6c656e676b61707c733a31343a224b6570616c612053656b6f6c6168223b6e69737c733a31313a223130313031313037303331223b6c6576656c7c733a31343a224b6570616c612053656b6f6c6168223b6c6f676765645f696e7c623a313b),
('mjagcdt7tm0vn9rmls269i5daerck75a', '::1', 1563378073, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333337373739323b7569647c4e3b757365726e616d657c733a363a226b657073656b223b6e616d615f6c656e676b61707c733a31343a224b6570616c612053656b6f6c6168223b6e69737c733a31313a223130313031313037303331223b6c6576656c7c733a31343a224b6570616c612053656b6f6c6168223b6c6f676765645f696e7c623a313b),
('ebfv74s6q47bpd5m0srmdtc8nitqi2e0', '::1', 1563378406, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333337383131383b7569647c4e3b757365726e616d657c733a313a2261223b6e616d615f6c656e676b61707c733a343a22416c656b223b6e69737c733a333a22313233223b6c6576656c7c733a353a225369737761223b6c6f676765645f696e7c623a313b),
('b2hvd18bfi14hdfur53b286talavav8f', '::1', 1563378840, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333337383537383b7569647c4e3b757365726e616d657c733a313a2261223b6e616d615f6c656e676b61707c733a343a22416c656b223b6e69737c733a333a22313233223b6c6576656c7c733a353a225369737761223b6c6f676765645f696e7c623a313b),
('t67fjtldmo311j1iak1pqh6qh35cga9v', '::1', 1563379906, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333337393834373b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('dj8ttu23nsahqkmu5kc5gore43eik5pu', '::1', 1563380779, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333338303438323b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('a4jaenlaoe5p5t58cv9c9o8dfi9kdhf5', '::1', 1563381059, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333338303738363b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('tupm3h03livsaqiu4f7g5evn7g3n7l97', '::1', 1563381372, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333338313038373b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('98bo38bgljpk5kl0cofi7nue8ms5v1ps', '::1', 1563381685, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333338313339303b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('4j05185he6is3hgs998su4ut8hf68kvk', '::1', 1563381975, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333338313639373b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('b1fnda6ecbi8gjoepatdusjbc1dduup7', '::1', 1563382271, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333338323030343b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('0pir74pada82fs8064u04n89ud17as86', '::1', 1563382601, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333338323332393b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('b9avihnresrc77nmr593127ssife270p', '::1', 1563382964, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333338323637323b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('13bdcaued314k3tdn6ob00q641sn5kck', '::1', 1563383011, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333338323937343b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('662dsqss0esd5voi1b62f4e1oejbp4gq', '::1', 1563383310, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333338333031323b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('j9b9konphqgov4uso8k8dgveq8h58hrj', '::1', 1563383610, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333338333434323b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('quq392vgsc3fk1cdvs85ot84rn8kt04j', '::1', 1563384054, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333338333839363b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('4k7hqeh0fihmt74lpmak1lpj474t7eas', '::1', 1563384335, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333338343332323b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('6q2mjict7g57mqon5f77u5el7g9eqa2m', '::1', 1563413023, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333431323737323b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('2pdelu6fip22bnhuioratoa3ao4euje4', '::1', 1563413151, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333431333130313b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('5sltvf0asi78gghfao3qsm4svnmab1ir', '::1', 1563413731, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333431333435363b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('vncut6r7p6t4otothkeu6ajrbtss16d9', '::1', 1563414319, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333431343135323b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('77v9n7gn15q8bsf7gmomhgdhb07vtemk', '::1', 1563415647, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333431353533343b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('7i6vgs35i7afdc4f58g8l8u2q5k7dv3n', '::1', 1563425346, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333432353034383b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('cn3nh85olmd56ni0m1dhf7kctsdgmopk', '::1', 1563426238, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333432353937303b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('bplusfq3v9pshiukt3kq3u2gsa90do1v', '::1', 1563426800, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333432363530353b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('nc7jf69evnps8emi0k09gg5a503sa17u', '::1', 1563426830, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333432363832383b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('a21mamqpfr682nkmni2shspdua15ht6u', '::1', 1563427720, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333432373636303b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('aaoks4k4h0fls0t4cfhl9lubcgqchf5s', '::1', 1563428878, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333432383537393b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('oir1q5j8m48sk02gg6lqbpubfutr2uve', '::1', 1563429191, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333432383933353b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('6npe0sqohc9bqitmnfl9krsklkppi8od', '::1', 1563429527, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333432393234313b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('flu83rggk4gi3dmg0umpevnqm7k0l91p', '::1', 1563429828, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333432393535373b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('ans4a12rt2b6nl3kbea424dl7b7pvghk', '::1', 1563430164, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333432393838303b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('hasl5ksssgmnes9atu357gb2mgksj7ni', '::1', 1563430470, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333433303139303b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('22erk33tcdk55h2tu38eh81n9k1imd0h', '::1', 1563430881, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333433303538353b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('7gr1cuuoo4fhng78rpir6irssavsdo7n', '::1', 1563430930, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333433303839323b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('584rcnt0crddag822a1fl8ud5m7ivfer', '::1', 1563431355, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333433313333373b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('vrkag2hvhu5o9bh1vvqvi3dcdvhb6ile', '::1', 1563505338, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333530353139303b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('ocmsrbpqrgoiqpjtg5gsj0cln0l6thil', '::1', 1563511380, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333531313338303b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('s1pp8n6eovkuiganq0o4fuaqo8g9jvp5', '::1', 1563512080, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333531313936333b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('9rnf034n5uhttpc33en5r7e1eu6ehmsk', '::1', 1563516529, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333531363532373b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('73g5849d7r4f97i8ekg4j90rf6obea5v', '::1', 1563517313, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333531373136333b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('mlal87uvhj28ht58eb3ohhkam867k7ai', '::1', 1563517645, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333531373534323b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('jc9kbdk30f89bp0jtr8sh1flchop1tn9', '::1', 1563517646, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333531373634353b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('20hiqejffb7p09hdq79okbm43kp7lok0', '::1', 1563517648, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333531373634363b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('hi80he9ehq8kik3un82ae7e2p3s67gl8', '::1', 1563517649, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333531373634383b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('7fbsnkg3ugl32934hj502p68mr5sdv8v', '::1', 1563518014, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333531373635393b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('ukf1oj9kpvnpco4i9ncb3vi52gucu3df', '::1', 1563518575, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333531383137363b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('arejk8rqb544126e22rtlrqt8t613map', '::1', 1563519058, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333531393035383b),
('c18sk94epusd1kh3p0r88l4dgqj27vhf', '::1', 1563531315, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333533313031353b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('vqubecl8kgbq7n5ea5fucqftmem0da9v', '::1', 1563531617, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333533313331383b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('bb48j5bi425hf9m6tamdb6e5ln37kfv1', '::1', 1563531784, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333533313632323b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('j7hl45ma9j9njlhu9tutcog41nctbcpg', '::1', 1563532216, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333533313934303b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('4g14ohdfh0m48t2t1guv0vcpq0ssau7v', '::1', 1563532542, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333533323234373b7569647c4e3b757365726e616d657c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2241646d696e6973747261746f72223b6e69737c733a303a22223b6c6576656c7c733a353a2241646d696e223b6c6f676765645f696e7c623a313b),
('562tkq8oqnht2c20incd5epqs5ihge7n', '::1', 1563532749, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536333533323734393b);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_daerah`
--

CREATE TABLE `tb_daerah` (
  `id_daerah` int(11) NOT NULL,
  `nama_daerah` varchar(100) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_daerah`
--

INSERT INTO `tb_daerah` (`id_daerah`, `nama_daerah`, `level`) VALUES
(2, 'maluku aceh', '1.1'),
(3, 'ada', '1'),
(4, 'adaa', '2'),
(5, 'adadada', '2.1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `level` enum('User','Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`username`, `password`, `nama_lengkap`, `level`) VALUES
('a', '0cc175b9c0f1b6a831c399e269772661', 'a', 'User'),
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'Admin'),
('admina', '0cc175b9c0f1b6a831c399e269772661', 'aaa', 'User'),
('user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user lengkap', 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lokasi`
--

CREATE TABLE `tb_lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `id_daerah` int(11) NOT NULL,
  `foto` text NOT NULL,
  `nama_lokasi` text NOT NULL,
  `alamat` text NOT NULL,
  `lat` text NOT NULL,
  `long` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_lokasi`
--

INSERT INTO `tb_lokasi` (`id_lokasi`, `id_daerah`, `foto`, `nama_lokasi`, `alamat`, `lat`, `long`, `created_by`, `created_date`, `created_update`) VALUES
(1, 2, 'lokasi-20210619102026__nama-pisang.jpg', 'nama pisang', 'Jl. Pangkalan Kerinci - Talukkuantan, Mentulik, Kampar Kiri Hilir, Kabupaten Kampar, Riau 28471, Indonesia', '0.07984819206417296', '101.51450664765628', 0, '2021-04-28 02:39:52', '2021-06-19 03:20:26'),
(2, 2, 'lokasi-20210428144024__pisang-2.jpg', 'pisang 2', 'Gunuang Malintang, Pangkalan Koto Baru, Kabupaten Lima Puluh Kota, Sumatera Barat, Indonesia', '0.03040973992029681', '100.57792217500003', 0, '2021-04-28 02:40:24', '2021-04-28 07:40:24'),
(3, 2, 'lokasi-20210619101852__asdf.jpg', 'asdf', 'Unnamed Road, Indonesia', '-2.6054106358102427', '104.53300030000003', 0, '2021-06-19 10:18:53', '2021-06-19 03:18:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lokasi_saya`
--

CREATE TABLE `tb_lokasi_saya` (
  `id_lokasi_saya` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `lat` text NOT NULL,
  `long` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_lokasi_saya`
--

INSERT INTO `tb_lokasi_saya` (`id_lokasi_saya`, `username`, `lat`, `long`, `alamat`) VALUES
(8, 'user', '-2.0055838169226123', '101.37755115920483', 'Retak Mudik, Sungai Rumbai, Kabupaten Mukomuko, Bengkulu, Indonesia'),
(14, 'admin', '0.28309413636550884', '101.51725322968753', 'Unnamed Road, Kepau Jaya, Kec. Siak Hulu, Kampar, Riau 28462, Indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_prosedur`
--

CREATE TABLE `tb_prosedur` (
  `id_prosedur` int(11) NOT NULL,
  `judul` text NOT NULL,
  `prosedur` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_prosedur`
--

INSERT INTO `tb_prosedur` (`id_prosedur`, `judul`, `prosedur`) VALUES
(1, 'Cara mengecek', 'a');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_tb_daerah`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_tb_daerah` (
`id_daerah` int(11)
,`nama_daerah` varchar(100)
,`level` varchar(10)
,`length` bigint(10)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `view_tb_daerah`
--
DROP TABLE IF EXISTS `view_tb_daerah`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_tb_daerah`  AS  select `tb_daerah`.`id_daerah` AS `id_daerah`,`tb_daerah`.`nama_daerah` AS `nama_daerah`,`tb_daerah`.`level` AS `level`,length(`tb_daerah`.`level`) AS `length` from `tb_daerah` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_daerah`
--
ALTER TABLE `tb_daerah`
  ADD PRIMARY KEY (`id_daerah`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `tb_lokasi_saya`
--
ALTER TABLE `tb_lokasi_saya`
  ADD PRIMARY KEY (`id_lokasi_saya`);

--
-- Indexes for table `tb_prosedur`
--
ALTER TABLE `tb_prosedur`
  ADD PRIMARY KEY (`id_prosedur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_daerah`
--
ALTER TABLE `tb_daerah`
  MODIFY `id_daerah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_lokasi_saya`
--
ALTER TABLE `tb_lokasi_saya`
  MODIFY `id_lokasi_saya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_prosedur`
--
ALTER TABLE `tb_prosedur`
  MODIFY `id_prosedur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
