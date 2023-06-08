-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 08 Haz 2023, 19:28:06
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `projee`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `kullanici_adi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `parola` varchar(150) NOT NULL,
  `kayit_tarihi` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kullanici_adi`, `email`, `parola`, `kayit_tarihi`) VALUES
(1, 'efe7858', 'efesipahi@outlook.com', '$2y$10$1v1XIgrZU26qjQtFcF.BtughoE.QME547sjQ1nZ89QtG.o.njhNKu', '2022-10-28 23:48:25'),
(3, 'deneme', 'deneme@outlook.com', '$2y$10$2MHEH.kBarJColnByUMN8.qWhfn4TKRRy//221uFxVIFJuBQAGXVO', '2022-12-13 22:07:12'),
(5, 'denemedeneme123', 'denemedeneme123@outlook.com', '$2y$10$YxTTScLIrCGZeV6Gs5rT1OoFTIG2xff2/NuZ1b7cfDUQj14XSyR7C', '2022-12-17 18:40:00'),
(6, 'efeefeefe', 'efeefe@outlook.com', '$2y$10$73yYp6mTLqNV.mL3cwLuj.z8o3dDVzKSh7oGa0qCE5.JP/iC/sPia', '2022-12-17 22:41:35'),
(7, 'denemekullanici', 'efesipahiii@outlook.com', '', '2022-12-19 13:19:17'),
(9, 'Efe78586141', 'efesip123@outlook.com', '', '2022-12-19 13:21:26'),
(10, 'asd123asd123', 'efesipahiasd@outlook.com', '$2y$10$4S1kcOHmUIxZKy0vFAWhoOnlAEWFP7A25xRchD.vNTSTXM1hNb0ZK', '2022-12-19 13:24:29'),
(12, 'efesip785861', 'efesip@outlook.com', '', '2022-12-19 13:28:47'),
(15, 'asdasdasd', 'efesipppp@outlook.com', '', '2022-12-19 13:33:07'),
(20, 'efebatu123', 'efebatudeneme@outlook.com', '', '2022-12-19 13:35:38'),
(21, 'efebatugunceldeneme', 'efebatuden123@outlook.com', '', '2022-12-19 13:36:19'),
(23, 'efebatuhash', 'asdasdsadasdsa@outlook.com', '', '2022-12-19 13:36:47'),
(25, 'batubatu123', 'batuefe@outlook.com', '', '2022-12-19 13:37:32'),
(26, 'efeefebatu7858', '65451654@outlook.com', '123456', '2022-12-19 13:47:07');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `id` int(11) NOT NULL,
  `urunid` int(11) DEFAULT NULL,
  `baslik` varchar(250) NOT NULL,
  `kategori` int(11) NOT NULL,
  `aciklama` text NOT NULL,
  `fiyat` text NOT NULL,
  `renk` text NOT NULL,
  `beden` text NOT NULL,
  `eklenmetarihi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `urunid`, `baslik`, `kategori`, `aciklama`, `fiyat`, `renk`, `beden`, `eklenmetarihi`) VALUES
(22, 1776875841, 'TELEFON1 DENEME', 1, 'Deneme Metini', '1453', 'KIRMIZI', '', '2023-06-08 17:11:52'),
(23, 729359116, 'TELEFON2 DENEME', 1, 'Deneme Metini', '3000', 'YEŞİL', '', '2023-06-08 17:15:49'),
(24, 1631706098, 'TELEFON3 DENEME', 1, 'Deneme Metini', '1231231', 'MAVİ', '', '2023-06-08 17:16:08'),
(25, 1479097586, 'LAPTOP1 DENEME', 0, 'Deneme Metini', '1453', 'KIRMIZI', '', '2023-06-08 17:16:28'),
(26, 2062725484, 'LAPTOP2 DENEME', 0, 'Deneme Metini', '3000', 'MOR', '', '2023-06-08 17:16:51'),
(27, 273170884, 'LAPTOP3 DENEME', 0, 'Deneme Metini', '1231231', 'MAVİ', '', '2023-06-08 17:17:09');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunresimler`
--

CREATE TABLE `urunresimler` (
  `resimid` int(11) NOT NULL,
  `urun_id` varchar(250) NOT NULL,
  `resim` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `urunresimler`
--

INSERT INTO `urunresimler` (`resimid`, `urun_id`, `resim`) VALUES
(13, '514002307', '1.png'),
(25, '906002354', '9060023544.png'),
(24, '906002354', '9060023543.png'),
(21, '1125673658', '11256736581.png'),
(19, '1466655965', '5.png'),
(23, '1285197218', '12851972181.png'),
(16, '1657130627', '3.png'),
(41, '863581267', '8635812671892526392drewman1.png'),
(26, '2087490498', '20874904981.png'),
(27, '1741643170', '1741643170drewman1.png'),
(28, '1741643170', '1741643170drew-man-baskili-kapusonlu-oversize-er-a85-de.jpg'),
(29, '381169745', 'Screenshot_2.jpg'),
(30, '688034846', 'Screenshot_1.jpg'),
(31, '992568865', '992568865Screenshot_2.jpg'),
(32, '1334310441', '1334310441drewman1.png'),
(33, '1334310441', '1334310441drew-man-baskili-kapusonlu-oversize-er-a85-de.jpg'),
(37, '1892526392', '1892526392drewman1.png'),
(38, '1892526392', '1892526392drew-man-baskili-kapusonlu-oversize-er-a85-de.jpg'),
(46, '2071490568', '2071490568kadinsweat.png'),
(45, '2042940371', '2042940371erkekayakkabi.png'),
(47, '1776875841', '1776875841erkeksort.png'),
(48, '729359116', '729359116erkeksweat.png'),
(49, '1631706098', '1631706098erkekayakkabi.png'),
(50, '1479097586', '1479097586kadinayakkabi.png'),
(51, '2062725484', '2062725484kadinsort.png'),
(52, '273170884', '273170884kadinsweat.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yoneticiler`
--

CREATE TABLE `yoneticiler` (
  `id` int(11) NOT NULL,
  `kadi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sifre` varchar(150) NOT NULL,
  `kayit_tarihi` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `yoneticiler`
--

INSERT INTO `yoneticiler` (`id`, `kadi`, `email`, `sifre`, `kayit_tarihi`) VALUES
(1, 'admin', 'admin@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2022-12-16 11:39:48');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `kullanici_adi` (`kullanici_adi`) USING BTREE;

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Tablo için indeksler `urunresimler`
--
ALTER TABLE `urunresimler`
  ADD PRIMARY KEY (`resimid`) USING BTREE;

--
-- Tablo için indeksler `yoneticiler`
--
ALTER TABLE `yoneticiler`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `kullanici_adi` (`kadi`) USING BTREE;

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Tablo için AUTO_INCREMENT değeri `urunresimler`
--
ALTER TABLE `urunresimler`
  MODIFY `resimid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Tablo için AUTO_INCREMENT değeri `yoneticiler`
--
ALTER TABLE `yoneticiler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
