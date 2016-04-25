-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 Nis 2016, 12:31:55
-- Sunucu sürümü: 5.6.21
-- PHP Sürümü: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `staj_blg_veritabani`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `akademisyen`
--

CREATE TABLE IF NOT EXISTS `akademisyen` (
`id` int(10) NOT NULL,
  `login_id` int(10) NOT NULL,
  `ad` varchar(250) NOT NULL,
  `soyad` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `akademisyen`
--

INSERT INTO `akademisyen` (`id`, `login_id`, `ad`, `soyad`) VALUES
(1, 1, 'Sefa', 'Durmaz');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `duyurular`
--

CREATE TABLE IF NOT EXISTS `duyurular` (
`id` int(10) NOT NULL,
  `baslik` varchar(200) NOT NULL,
  `icerik` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `duyurular`
--

INSERT INTO `duyurular` (`id`, `baslik`, `icerik`) VALUES
(1, 'Yaz Stajı Duyurusu', 'sdlkdsalkdaldkm');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `isyeri`
--

CREATE TABLE IF NOT EXISTS `isyeri` (
`id` int(10) NOT NULL,
  `login_id` int(10) NOT NULL,
  `isyeri_adi` varchar(500) NOT NULL,
  `il` varchar(250) NOT NULL,
  `ilce` varchar(250) NOT NULL,
  `adres` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `isyeri`
--

INSERT INTO `isyeri` (`id`, `login_id`, `isyeri_adi`, `il`, `ilce`, `adres`) VALUES
(1, 4, 'KtTeknoloji Merkezi', 'Trabzon', 'Merkez', 'Trabzon/Merkez/Teknopart');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE IF NOT EXISTS `mesajlar` (
`mesaj_id` int(10) NOT NULL,
  `gonderen_id` int(10) NOT NULL,
  `alici_id` int(10) NOT NULL,
  `mesaj` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`mesaj_id`, `gonderen_id`, `alici_id`, `mesaj`) VALUES
(1, 3, 4, 'Beni staj yerinize kabul eder misiniz?'),
(2, 4, 3, 'Bilgilerinizi inceliyorum sizi bilgilendireceğim');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenci`
--

CREATE TABLE IF NOT EXISTS `ogrenci` (
`ogr_id` int(10) NOT NULL,
  `login_id` int(10) NOT NULL,
  `adi` varchar(150) NOT NULL,
  `soyadi` varchar(150) NOT NULL,
  `numarasi` int(10) NOT NULL,
  `fotograf` varchar(250) NOT NULL,
  `cinsiyet` varchar(50) NOT NULL,
  `iletisim` varchar(250) NOT NULL,
  `okul_bilgileri` varchar(350) NOT NULL,
  `adres` varchar(500) NOT NULL,
  `il` varchar(150) NOT NULL,
  `ilce` varchar(250) NOT NULL,
  `dogum.tarihi` date NOT NULL,
  `universite` varchar(250) NOT NULL,
  `fakulte` varchar(250) NOT NULL,
  `bolum` varchar(250) NOT NULL,
  `sinif` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `ogrenci`
--

INSERT INTO `ogrenci` (`ogr_id`, `login_id`, `adi`, `soyadi`, `numarasi`, `fotograf`, `cinsiyet`, `iletisim`, `okul_bilgileri`, `adres`, `il`, `ilce`, `dogum.tarihi`, `universite`, `fakulte`, `bolum`, `sinif`) VALUES
(1, 3, 'Sefa', 'Durmaz', 305050, 'adjiadsasd.png', 'erkek', '05054567894', '', 'Niğde/Merkez', 'Niğde', 'Merkez', '2016-04-22', 'Karadeniz Teknik Üniversitesi', 'Of Teknoloji', 'Yazılım Mühendisliği', '3');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `projeler`
--

CREATE TABLE IF NOT EXISTS `projeler` (
`id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `proje_adi` varchar(250) NOT NULL,
  `proje_icerigi` varchar(1000) NOT NULL,
  `proje_tarihi` date NOT NULL,
  `kullanilan_teknolojiler` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `projeler`
--

INSERT INTO `projeler` (`id`, `login_id`, `proje_adi`, `proje_icerigi`, `proje_tarihi`, `kullanilan_teknolojiler`) VALUES
(1, 3, 'Yazılım Projesi', 'C# Java Kullanımı', '2016-04-03', 'C# Java');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
`id` int(10) NOT NULL,
  `etiket` varchar(500) NOT NULL,
  `resim` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`id`, `etiket`, `resim`) VALUES
(1, 'Staj Bilgileri', 'lajlasjkad.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sosyal_hesaplar`
--

CREATE TABLE IF NOT EXISTS `sosyal_hesaplar` (
`id` int(10) NOT NULL,
  `login_id` int(10) NOT NULL,
  `kullanici_id` int(10) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `Gmail` varchar(250) NOT NULL,
  `Github` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `sosyal_hesaplar`
--

INSERT INTO `sosyal_hesaplar` (`id`, `login_id`, `kullanici_id`, `facebook`, `Gmail`, `Github`) VALUES
(1, 1, 1, 'Yzmsefa', 'ymzsefa@gmail.com', 'https://github.com/Yzmsefa');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeol_login`
--

CREATE TABLE IF NOT EXISTS `uyeol_login` (
`id` int(10) NOT NULL,
  `mail` int(200) NOT NULL,
  `parola` varchar(200) NOT NULL,
  `rolü` varchar(200) NOT NULL,
  `onay` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `uyeol_login`
--

INSERT INTO `uyeol_login` (`id`, `mail`, `parola`, `rolü`, `onay`) VALUES
(1, 0, '123789456asdf', 'akademisyen', 1),
(3, 0, '654dasşladskalşsd', 'öğrenci', 1),
(4, 0, '1236213155489fdsf', 'işyeri', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `akademisyen`
--
ALTER TABLE `akademisyen`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `login_id` (`login_id`);

--
-- Tablo için indeksler `duyurular`
--
ALTER TABLE `duyurular`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `isyeri`
--
ALTER TABLE `isyeri`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `login_id` (`login_id`);

--
-- Tablo için indeksler `mesajlar`
--
ALTER TABLE `mesajlar`
 ADD PRIMARY KEY (`mesaj_id`), ADD UNIQUE KEY `mesaj_id` (`gonderen_id`);

--
-- Tablo için indeksler `ogrenci`
--
ALTER TABLE `ogrenci`
 ADD PRIMARY KEY (`ogr_id`), ADD UNIQUE KEY `numarasi` (`numarasi`), ADD UNIQUE KEY `login_id` (`login_id`);

--
-- Tablo için indeksler `projeler`
--
ALTER TABLE `projeler`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `login_id` (`login_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sosyal_hesaplar`
--
ALTER TABLE `sosyal_hesaplar`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `login_id` (`login_id`), ADD UNIQUE KEY `kullanici_id` (`kullanici_id`);

--
-- Tablo için indeksler `uyeol_login`
--
ALTER TABLE `uyeol_login`
 ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `akademisyen`
--
ALTER TABLE `akademisyen`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `duyurular`
--
ALTER TABLE `duyurular`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `isyeri`
--
ALTER TABLE `isyeri`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `mesajlar`
--
ALTER TABLE `mesajlar`
MODIFY `mesaj_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `ogrenci`
--
ALTER TABLE `ogrenci`
MODIFY `ogr_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `projeler`
--
ALTER TABLE `projeler`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `sosyal_hesaplar`
--
ALTER TABLE `sosyal_hesaplar`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `uyeol_login`
--
ALTER TABLE `uyeol_login`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
