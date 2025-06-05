-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 25, 2025 at 08:41 PM
-- Server version: 5.7.39-log
-- PHP Version: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paircontrol`
--

-- --------------------------------------------------------

--
-- Table structure for table `controlroot`
--

CREATE TABLE `controlroot` (
  `id` int(11) NOT NULL,
  `username` varchar(15) CHARACTER SET latin1 NOT NULL,
  `password` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `controlroot`
--

INSERT INTO `controlroot` (`id`, `username`, `password`) VALUES
(1, 'console', '$argon2id$v=19$m=65536,t=4,p=1$aTlpU0VoVDduTEEyOERxNw$ED8eespI9RuwziiKqyN/8JWe9+4MO9unUqALu5s8jKE');

-- --------------------------------------------------------

--
-- Table structure for table `paircurrency`
--

CREATE TABLE `paircurrency` (
  `id` int(11) NOT NULL,
  `currencyname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currencysymbol` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `decimalplaces` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numberformat` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `paircurrency`
--

INSERT INTO `paircurrency` (`id`, `currencyname`, `currencysymbol`, `decimalplaces`, `numberformat`) VALUES
(1, 'Indian Rupee', '₹ - Indian Rupee', '2 (12.34)', '1,23,45,678.90');

-- --------------------------------------------------------

--
-- Table structure for table `paircustoms`
--

CREATE TABLE `paircustoms` (
  `id` int(111) NOT NULL,
  `createdon` text,
  `url` text,
  `suv` text,
  `expdate` text,
  `remindon` text,
  `renewamt` varchar(255) DEFAULT NULL,
  `contact` text,
  `represent` text,
  `remark` text,
  `activestatus` int(111) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paircustoms`
--

INSERT INTO `paircustoms` (`id`, `createdon`, `url`, `suv`, `expdate`, `remindon`, `renewamt`, `contact`, `represent`, `remark`, `activestatus`) VALUES
(1, '2024-12-15 17:42:50', 'pairscript.com', '--PAIRSCRIPT\'S--       CHECK\r\n/\r\nmail.pairscript.com\r\npanel.pairscript.com\r\nbeta.pairscript.com\r\n\r\ntonic.pairscript.com\r\nbetatonic.pairscript.com\r\ntasky.pairscript.com\r\nbetatasky.pairscript.com', '2025-12-15', '60', '1000', 'Solomon', 'Solomon', 'Domain - Route53 (Pairscript)', 1),
(2, '2024-01-06 18:05:58', 'panel.pairscript.com', 'CHECK', '2025-09-14', '60', '25000', 'Solomon', 'Solomon', 'Hosting - AWS (Pairscript)', 1),
(3, '2024-07-08 11:14:08', 'veddameethra.com ', 'mail.veddameethra.com ', '2025-07-10', '20', '3800', 'PS Ruben', 'Solomon', 'Database = veddameethra.com & mail.veddameethra.com\r\n\r\nDomain = 1300 (Google Pairscript) \r\nHosting = 2500 (Pairscript)', 1),
(4, '2024-04-21 18:45:53', 'gulfwalkintamil.com', '', '2025-02-01', '10', '1500', 'Ruban', 'Ruban', 'Database = \r\n\r\nDomain = 1500 (Google Pairscript) \r\nHosting = 3500 (Pairscript)', 1),
(5, '2024-11-17 13:13:00', 'tnsipl.com', '', '2025-08-25', '30', '4000', 'Ruban', 'Ruban', 'Database = 0\r\n\r\nDomain = 1500 (Google Pairscript) \r\nHosting = 2500 (Pairscript)', 1),
(6, '2023-12-28 21:22:15', 'taakies.com', '', '2024-09-15', '10', '840', 'Solomon', 'Solomon', 'Database 3=  taakies.com & /control, /vijyalab, /abc\r\n\r\nDomain =  (By USER) \r\nHosting = 840 (Pairscript)', 1),
(7, '2024-10-20 10:59:59', 'ratnaoffsetprinters.com ', 'mail.ratnaoffsetprinters.com', '2025-09-27', '10', '3700', 'Ruban', 'Ruban', 'Database 2 = ratnaoffsetprinters.com  & mail.ratnaoffsetprinters.com\r\n\r\nDomain = 1200 (Google Pairscript) \r\nHosting = 2500 (Pairscript)', 1),
(8, '2023-12-28 21:52:16', 'asianelectric.in ', 'mail.asianelectric.in', '2024-10-19', '10', '4000', 'Ruban', 'Ruban', 'Database 2 = /control & mail.asianelectric.in\r\n\r\nDomain = 1500 (Godaddy aaRKayeN) \r\nHosting = 2500 (Pairscript)', 1),
(9, '2024-04-21 19:03:09', 'rasigan.in', '', '2024-06-25', '10', '1200', 'Ruban', 'Solomon', 'Database = 1\r\n\r\nDomain = 1200 (Google Pairscript) \r\nHosting = 0 (Pairscript)', 0),
(10, '2024-11-17 12:52:27', 'mail.aishalaya.com', '', '2024-12-25', '10', '2985', 'Prakash', 'Solomon', 'Hosting = Email 5', 0),
(11, '2024-11-17 12:43:04', 'pairscript.com/vm', '', '2025-10-25', '10', '1200', 'Siva Selva Muthupettai', 'Solomon', 'Database = 1\r\n \r\nLab = (Pairscript)', 1),
(12, '2024-12-15 17:39:52', 'pairscript.com/ana', '', '2025-08-31', '10', '2880', 'Yogesh', 'Solomon', 'Database = 1\r\n \r\nPharma = (Pairscript)', 1),
(13, '2024-08-17 20:08:55', 'pairscript.com/kidzclinic', '', '2025-07-30', '10', '1200', 'Ramakrishnan', 'Solomon', 'Database = 1\r\n \r\nLab = (Pairscript)', 1),
(14, '2024-11-17 12:40:52', 'pairscript.com/sai', '', '2025-11-13', '10', '1200', 'Surya', 'Solomon', 'Database = 1\r\n \r\nLab = (Pairscript)', 1),
(15, '2024-12-15 17:40:49', 'Sabari Car Accessories (OFFLINE)', '', '2025-09-17', '10', '1200 + GST 18%', 'Solomon', 'Solomon', 'OFFLINE\r\n\r\nDatabase = 1\r\n', 1),
(16, '2024-08-17 20:28:25', 'pairscript.com/arokya', '', '2025-08-04', '10', '1200', 'Arokiya', 'Solomon', 'Database = 1\r\n \r\nLab = (Pairscript)', 1),
(17, '2024-04-08 17:30:26', 'kmnaturecares.com', '', '2025-03-10', '10', '2000', 'Ruban', 'Ruban', 'Domain = 1500 (Pairscript) \r\nHosting =  500 (Pairscript)', 1),
(18, '2024-04-08 17:31:42', 'srichakraproperty.com', '', '2025-04-05', '10', '2000', 'Ruban', 'Ruban', 'Domain and Hosting', 1),
(19, '2024-04-08 17:37:56', 'imaaproperties.com', '', '2025-03-29', '10', '5000', 'Mr. Alamin', 'Solomon', 'Domain = 1500\r\nHosting = 3500', 1),
(20, '2024-08-17 19:11:29', 'believerinternational.com', '', '2025-04-06', '10', '5000', 'Ruban', 'Mr.Ruban', 'Database =beliverinternational.com & mail.beliverinternational.com\r\n\r\nDomain = 1500 (Pairscript) \r\nHosting = 2500 (Pairscript)\r\nEmail = 4776 (2)', 1),
(21, '2024-10-20 11:12:33', 'aarkayen.com', 'aarkayen.com/projects/milk/\r\naarkayen.com/krishna/', '2024-10-01', '5', '1000', 'Solomon', 'Solomon', 'Domain = 0 (Google Pairscript)\r\nHosting = 0 (Pairscript)\r\nMilk = 1000 (Srinivasan) Expires on 3rd Nov\r\nSri krishna = 1200 (GST 18% Extra) on 13th Oct', 1),
(22, '2024-04-21 19:03:31', 'pairtrends.com', '', '2024-09-04', '10', '1200', 'Solomon', 'Solomon', 'Database = 0\r\n\r\nDomain = 1200 (Google Pairscript) \r\nHosting = 0 (Pairscript)', 0),
(23, '2024-08-17 17:40:55', 'drcivil.org', '', '2025-05-10', '10', '1500', 'Ruban', 'Ruban', 'Domain = 1300 (Pairscript) \r\nHosting =  4800 (Pairscript)\r\n*Developing', 1),
(24, '2024-08-18 14:24:08', 'nkinternationaljobs.com', '', '2025-08-04', '10', '0', 'Ruban', 'Ruban', 'Domain = 1500\r\nHosting =2500', 1),
(25, '2024-09-15 14:25:33', 'blueeightconsultancy.com', '', '2025-08-16', '10', '1000', 'Solomon', 'Solomon', 'Domain = 0 (Google Pairscript)\r\nHosting = 0 (Pairscript)\r\nLess in Ruban\'s Account', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pairusehistory`
--

CREATE TABLE `pairusehistory` (
  `id` int(111) NOT NULL,
  `usetype` varchar(50) DEFAULT NULL,
  `createdon` varchar(30) DEFAULT NULL,
  `createdby` varchar(50) DEFAULT NULL,
  `useid` varchar(20) DEFAULT NULL,
  `userremarks` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pairusehistory`
--

INSERT INTO `pairusehistory` (`id`, `usetype`, `createdon`, `createdby`, `useid`, `userremarks`) VALUES
(1, 'CONSOLE', '2024-07-07 15:23:34', 'console', '10', '<span style=\"color:royalblue;\">CUSTOM CHANGED</span><br> Expiry Date <span style=\"color:green;\" id=\"prohisfromtospan\">( From 27/06/2024 To 26/09/2024 ) </span> '),
(2, 'CONSOLE', '2024-07-08 11:14:08', 'console', '3', '<span style=\"color:royalblue;\">CUSTOM CHANGED</span><br> Expiry Date <span style=\"color:green;\" id=\"prohisfromtospan\">( From 10/07/2024 To 10/07/2025 ) </span><br> Renewal Amount <span style=\"color:green;\" id=\"prohisfromtospan\">( From 3700 Days To 3800 Days ) </span><br> Remark <span style=\"color:green;\" id=\"prohisfromtospan\">( From Database = veddameethra.com & mail.veddameethra.com\r\n\r\nDomain = 1200 (Google Pairscript) \r\nHosting = 2500 (Pairscript) Days To Database = veddameethra.com & mail.veddameethra.com\r\n\r\nDomain = 1300 (Google Pairscript) \r\nHosting = 2500 (Pairscript) Days ) </span> '),
(3, 'CONSOLE', '2024-08-04 16:53:59', 'console', '9', 'Moved to Expire '),
(4, 'CONSOLE', '2024-08-17 17:40:55', 'console', '23', '<span style=\"color:royalblue;\">CUSTOM CHANGED</span><br> Remark <span style=\"color:green;\" id=\"prohisfromtospan\">( From Domain = 1500 (Pairscript) \r\nHosting =  500 (Pairscript)\r\n*Developing Days To Domain = 1300 (Pairscript) \r\nHosting =  4800 (Pairscript)\r\n*Developing Days ) </span> '),
(5, 'CONSOLE', '2024-08-17 19:11:09', 'console', '20', '<span style=\"color:royalblue;\">CUSTOM CHANGED</span><br> Remark <span style=\"color:green;\" id=\"prohisfromtospan\">( From Website Days To Database =beliverinternational.com & mail.beliverinternational.com\r\n\r\nDomain = 1500 (Pairscript) \r\nHosting = 2500 (Pairscript)\r\nEmail = 4,776 (2) Days ) </span> '),
(6, 'CONSOLE', '2024-08-17 19:11:29', 'console', '20', '<span style=\"color:royalblue;\">CUSTOM CHANGED</span><br> Renewal Amount <span style=\"color:green;\" id=\"prohisfromtospan\">( From 2000 Days To 5000 Days ) </span><br> Remark <span style=\"color:green;\" id=\"prohisfromtospan\">( From Database =beliverinternational.com & mail.beliverinternational.com\r\n\r\nDomain = 1500 (Pairscript) \r\nHosting = 2500 (Pairscript)\r\nEmail = 4,776 (2) Days To Database =beliverinternational.com & mail.beliverinternational.com\r\n\r\nDomain = 1500 (Pairscript) \r\nHosting = 2500 (Pairscript)\r\nEmail = 4776 (2) Days ) </span> '),
(7, 'CONSOLE', '2024-08-17 20:08:55', 'console', '13', '<span style=\"color:royalblue;\">CUSTOM CHANGED</span><br> Expiry Date <span style=\"color:green;\" id=\"prohisfromtospan\">( From 31/07/2024 To 30/07/2025 ) </span> '),
(8, 'CONSOLE', '2024-08-17 20:20:50', 'console', '24', '<span style=\"color:royalblue;\">CUSTOM CREATED</span><br> URL <span style=\"color:green;\" id=\"prohisfromtospan\">( nkinternationaljobs.com ) </span><br> Expiry Date <span style=\"color:green;\" id=\"prohisfromtospan\">( 04/08/2025 ) </span><br> Remind Me In <span style=\"color:green;\" id=\"prohisfromtospan\">( 10 Days ) </span><br> Renewal Amount <span style=\"color:green;\" id=\"prohisfromtospan\">( 0 ) </span><br> Name and Contact <span style=\"color:green;\" id=\"prohisfromtospan\">( Ruban ) </span><br> Pairscript Representative <span style=\"color:green;\" id=\"prohisfromtospan\">( Ruban ) </span><br> Remark <span style=\"color:green;\" id=\"prohisfromtospan\">( Domain\r\nHosting ) </span>'),
(9, 'CONSOLE', '2024-08-17 20:28:25', 'console', '16', '<span style=\"color:royalblue;\">CUSTOM CHANGED</span><br> Expiry Date <span style=\"color:green;\" id=\"prohisfromtospan\">( From 05/08/2024 To 04/08/2025 ) </span> '),
(10, 'CONSOLE', '2024-08-18 14:24:08', 'console', '24', '<span style=\"color:royalblue;\">CUSTOM CHANGED</span><br> Remark <span style=\"color:green;\" id=\"prohisfromtospan\">( From Domain\r\nHosting Days To Domain = 1500\r\nHosting =2500 Days ) </span> '),
(11, 'CONSOLE', '2024-09-15 14:25:33', 'console', '25', '<span style=\"color:royalblue;\">CUSTOM CREATED</span><br> URL <span style=\"color:green;\" id=\"prohisfromtospan\">( blueeightconsultancy.com ) </span><br> Expiry Date <span style=\"color:green;\" id=\"prohisfromtospan\">( 16/08/2025 ) </span><br> Remind Me In <span style=\"color:green;\" id=\"prohisfromtospan\">( 10 Days ) </span><br> Renewal Amount <span style=\"color:green;\" id=\"prohisfromtospan\">( 1000 ) </span><br> Name and Contact <span style=\"color:green;\" id=\"prohisfromtospan\">( Solomon ) </span><br> Pairscript Representative <span style=\"color:green;\" id=\"prohisfromtospan\">( Solomon ) </span><br> Remark <span style=\"color:green;\" id=\"prohisfromtospan\">( Domain = 0 (Google Pairscript)\r\nHosting = 0 (Pairscript)\r\nLess in Ruban\'s Account ) </span>'),
(12, 'CONSOLE', '2024-10-05 17:53:12', 'console', '22', 'Moved to Expire '),
(13, 'CONSOLE', '2024-10-05 20:01:40', 'console', '15', '<span style=\"color:royalblue;\">CUSTOM CHANGED</span><br> Renewal Amount <span style=\"color:green;\" id=\"prohisfromtospan\">( From 1200 Days To 1200 + GST 18% Days ) </span> '),
(14, 'CONSOLE', '2024-10-14 12:28:54', 'console', '21', '<span style=\"color:royalblue;\">CUSTOM CHANGED</span><br> SUB URL <span style=\"color:green;\" id=\"prohisfromtospan\">( From https://aarkayen.com/projects/milk/ To https://aarkayen.com/projects/milk/\r\nhttps://aarkayen.com/krishna ) </span> '),
(15, 'CONSOLE', '2024-10-14 12:35:28', 'console', '21', '<span style=\"color:royalblue;\">CUSTOM CHANGED</span><br> SUB URL <span style=\"color:green;\" id=\"prohisfromtospan\">( From https://aarkayen.com/projects/milk/\r\nhttps://aarkayen.com/krishna To https://aarkayen.com/projects/milk/\r\nhttps://aarkayen.com/krishna/ ) </span> '),
(16, 'CONSOLE', '2024-10-20 10:59:59', 'console', '7', '<span style=\"color:royalblue;\">CUSTOM CHANGED</span><br> Expiry Date <span style=\"color:green;\" id=\"prohisfromtospan\">( From 27/09/2024 To 27/09/2025 ) </span> '),
(17, 'CONSOLE', '2024-10-20 11:09:35', 'console', '21', '<span style=\"color:royalblue;\">CUSTOM CHANGED</span><br> SUB URL <span style=\"color:green;\" id=\"prohisfromtospan\">( From https://aarkayen.com/projects/milk/\r\nhttps://aarkayen.com/krishna/ To https://aarkayen.com/projects/milk/\r\naarkayen.com/krishna/ ) </span> '),
(18, 'CONSOLE', '2024-10-20 11:09:57', 'console', '21', '<span style=\"color:royalblue;\">CUSTOM CHANGED</span><br> SUB URL <span style=\"color:green;\" id=\"prohisfromtospan\">( From https://aarkayen.com/projects/milk/\r\naarkayen.com/krishna/ To aarkayen.com/projects/milk/\r\naarkayen.com/krishna/ ) </span> '),
(19, 'CONSOLE', '2024-10-20 11:12:33', 'console', '21', '<span style=\"color:royalblue;\">CUSTOM CHANGED</span><br> Remark <span style=\"color:green;\" id=\"prohisfromtospan\">( From Domain = 0 (Google Pairscript)\r\nHosting = 0 (Pairscript)\r\nMilk = 1000 (Srinivasan) Expires on 3rd Nov Days To Domain = 0 (Google Pairscript)\r\nHosting = 0 (Pairscript)\r\nMilk = 1000 (Srinivasan) Expires on 3rd Nov\r\nSri krishna = 1200 (GST 18% Extra) on 13th Oct Days ) </span> '),
(20, 'CONSOLE', '2024-11-17 12:40:52', 'console', '14', '<span style=\"color:royalblue;\">CUSTOM CHANGED</span><br> Expiry Date <span style=\"color:green;\" id=\"prohisfromtospan\">( From 14/11/2024 To 13/11/2025 ) </span> '),
(21, 'CONSOLE', '2024-11-17 12:43:04', 'console', '11', '<span style=\"color:royalblue;\">CUSTOM CHANGED</span><br> Expiry Date <span style=\"color:green;\" id=\"prohisfromtospan\">( From 25/10/2024 To 25/10/2025 ) </span><br> Name and Contact <span style=\"color:green;\" id=\"prohisfromtospan\">( From Selva Muthupettai Days To Siva Selva Muthupettai Days ) </span> '),
(22, 'CONSOLE', '2024-11-17 12:52:27', 'console', '10', '<span style=\"color:royalblue;\">CUSTOM CHANGED</span><br> Expiry Date <span style=\"color:green;\" id=\"prohisfromtospan\">( From 26/09/2024 To 25/12/2024 ) </span> '),
(23, 'CONSOLE', '2024-11-17 13:13:00', 'console', '5', '<span style=\"color:royalblue;\">CUSTOM CHANGED</span><br> Expiry Date <span style=\"color:green;\" id=\"prohisfromtospan\">( From 25/08/2024 To 25/08/2025 ) </span> '),
(24, 'CONSOLE', '2024-12-15 17:39:52', 'console', '12', '<span style=\"color:royalblue;\">CUSTOM CHANGED</span><br> Expiry Date <span style=\"color:green;\" id=\"prohisfromtospan\">( From 01/09/2024 To 31/08/2025 ) </span> '),
(25, 'CONSOLE', '2024-12-15 17:40:49', 'console', '15', '<span style=\"color:royalblue;\">CUSTOM CHANGED</span><br> Expiry Date <span style=\"color:green;\" id=\"prohisfromtospan\">( From 02/09/2024 To 17/09/2025 ) </span> '),
(26, 'CONSOLE', '2024-12-15 17:42:50', 'console', '1', '<span style=\"color:royalblue;\">CUSTOM CHANGED</span><br> Expiry Date <span style=\"color:green;\" id=\"prohisfromtospan\">( From 15/12/2024 To 15/12/2025 ) </span> '),
(27, 'CONSOLE', '2025-02-16 19:24:42', 'console', '10', 'Moved to Expire '),
(28, 'CONSOLE', '2025-02-24 22:16:47', 'console', '4', 'Moved to Expire '),
(29, 'CONSOLE', '2025-02-24 22:16:55', 'console', '4', 'Moved to Active ');

-- --------------------------------------------------------

--
-- Table structure for table `paricountry`
--

CREATE TABLE `paricountry` (
  `id` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `timezone` varchar(255) NOT NULL,
  `date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paricountry`
--

INSERT INTO `paricountry` (`id`, `country`, `timezone`, `date`) VALUES
(1, 'INDIA', '(GMT +5:30) India Standard Time (Asia/Kolkata)', 'DD/MM/YYYY');

-- --------------------------------------------------------

--
-- Table structure for table `parilanguage`
--

CREATE TABLE `parilanguage` (
  `id` int(11) NOT NULL,
  `language` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parilanguage`
--

INSERT INTO `parilanguage` (`id`, `language`) VALUES
(1, 'English (India)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `controlroot`
--
ALTER TABLE `controlroot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paircurrency`
--
ALTER TABLE `paircurrency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paircustoms`
--
ALTER TABLE `paircustoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pairusehistory`
--
ALTER TABLE `pairusehistory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `controlroot`
--
ALTER TABLE `controlroot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `paircurrency`
--
ALTER TABLE `paircurrency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `paircustoms`
--
ALTER TABLE `paircustoms`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pairusehistory`
--
ALTER TABLE `pairusehistory`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
