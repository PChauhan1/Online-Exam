-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 10, 2020 at 12:56 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'sanjeev123', '0000'),
(2, 'chauhn01', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `exam_question`
--

DROP TABLE IF EXISTS `exam_question`;
CREATE TABLE IF NOT EXISTS `exam_question` (
  `exam_id` int(2) NOT NULL,
  `question_id` int(2) NOT NULL,
  `question` text NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_question`
--

INSERT INTO `exam_question` (`exam_id`, `question_id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 1, '1) Which of the following is not an operating system?', 'Windows', 'Linux', 'Oracle', 'DOC', 'Oracle'),
(1, 2, '2) What is the maximum length of the filename in DOS?', '4', '5', '8', '12', '8'),
(1, 3, '3) When was the first operating system developed?', '1948', '1949', '1950', '1951', '1950'),
(1, 4, '4) When were MS windows operating systems proposed?', '1994', '1990', '1992', '1985', '1985'),
(1, 5, '5) Which of the following is the extension of Notepad?', '.txt', '.xls', '.ppt', '.bmp', '.txt'),
(1, 6, '6) What else is a command interpreter called?', 'prompt', 'kernel', 'shell', 'command', 'shell'),
(1, 7, '7) What is the full name of FAT?', 'File attribute table', 'File allocation table', 'Font attribute table', 'Format allocation table', 'File allocation table'),
(1, 8, '8) BIOS is used?', 'By operating system', 'By compiler', 'By interpreter', 'By application software', 'By operating system'),
(1, 9, '9) What is the mean of the Booting in the operating system?', 'Restarting computer', 'Install the program', 'To scan', 'To turn off', 'Restarting computer'),
(1, 10, 'When does page fault occur?', 'The page is present in memory.', 'The deadlock occurs.', 'The page does not present in memory.', 'The buffering occurs.', 'The page does not present in memory.'),
(2, 1, '1. The basic attributes of a straight line segment are', 'Type', 'Width', 'Width', 'All of these', 'All of these'),
(2, 2, '2. A dashed line could be displayed by generating_________.', 'Inter dash spacing', 'Very short dashes', 'Botha a and b', 'A or B', 'Inter dash spacing'),
(2, 3, '3. A dotted line can be displayed by generating', 'Very short dashes with spacing equal to and greater than dash size', 'Very long dashes with spacing equal to or greater than dash size', 'Very short dashes with spacing equal to and greater than dash size', 'Dots', 'Very short dashes with spacing equal to and greater than dash size'),
(2, 4, '4. Which of the following is not a line-type?', 'Dashed line', 'Dark line', 'Dotted line', 'Only b', 'Only b'),
(2, 5, '5. In an application program, to set line-type attributes the following statement is used.', 'SetLinetype(lt)', 'setLinetype(lt)', 'SETLINETYPE(lt)', 'SETLINE()', 'setLinetype(lt)'),
(2, 6, '6. The algorithm which displays line-type attributes by plotting pixel spans is', 'Raster line algorithm\r\n', 'Raster scan algorithm', 'Random line algorithm', 'Random scan algorithm', 'Raster line algorithm'),
(2, 7, '7. Pixel mask means', 'A string containing only 1;s', 'A string containing only 0’s', 'A string containing 1 and 0', 'A string containing 0 and 0', 'A string containing 1 and 0'),
(2, 8, '8. A heavy line on a video monitor could be displayed as', 'Adjacent perpendicular lines', 'Adjacent parallel lines', 'Both a and b', 'Neither a nor b', 'Adjacent parallel lines'),
(2, 9, '9. To set the line-width attribute the following command is used.', 'SETLINEWIDTHSCALEFACTOR (lw)', 'Setlinewidth()', 'Setlinewidthscalefacto (lw)', 'setLineWidthScaleFactor (lw)', 'setLineWidthScaleFactor (lw)'),
(2, 10, '10. We can adjust the shape of the line ends to give them a better appearance by using', 'Line spacing', 'More dots', 'Line caps', 'Round cap', 'Line caps'),
(3, 1, '1. The term PHP is an acronym for PHP:_______________.', 'Hypertext Preprocessor', 'Hypertext multiprocessor', 'Hypertext markup Preprocessor', 'Hypertune Preprocessor', 'Hypertext Preprocessor'),
(3, 2, '2. PHP is a ____________ language?', 'user-side scripting', 'client-side scripting', 'server-side scripting', 'Both B and C', 'server-side scripting'),
(3, 3, '3. Who among this is the founder of php language?', 'Tim Berners-Lee', 'Brendan Eich', 'Guido van Rossum', 'Rasmus Lerdorf', 'Rasmus Lerdorf'),
(3, 4, '4. In which year php was created?', '1993', '1994', '1995', '1996', '1994'),
(3, 5, '5. PHP files have a default file extension of_______.', '.html', '.xml', '.php', '.hphp', '.php'),
(3, 6, '6. Which of the following is the correct syntax of php?', '<?php >', '<php >', '?php ?', '<?php ?>', '<?php ?>'),
(3, 7, '7. Which of the following is the latest version of php?', '7.1', '7.2', '7.3', '7.4', '7.2'),
(3, 8, '8. Which of the following is the Release date of latest version (7.2) of php?', '27 November 2017.', '28 November 2017.', '29 November 2017.', '30 November 2017.', '30 November 2017.'),
(3, 9, '9. Which of the below statements is equivalent to $sub -= $sub?', '$sub = $sub', '$sub = $sub -$sub', '$sub = $sub - 1', '$sub = $sub - $sub - 1', '$sub = $sub - $sub'),
(3, 10, '10. Which statement will output $lfc on the screen?', 'echo \"$lfc\";', 'echo \"$$lfc\";', 'echo \"/$lfc\";', 'echo \"$lfc;\";', 'echo \"$lfc\";'),
(4, 10, '10. A firewall is a', 'wall built to prevent fires from damaging a corporate intranet', 'security device deployed at the boundary of a company to prevent unauthorized physical access', 'security device deployed at the boundary of a corporate intranet to protect it from unauthorized access', 'device to prevent all accesses from the internet to the corporate intranet', 'security device deployed at the boundary of a corporate intranet to protect it from unauthorized access'),
(4, 9, '9. ANSI X.12 is a standard developed by', 'American National Standard Institute', 'International Standard Institute', 'European Common Market', 'United Nations Economic Commission for Europe', 'American National Standard Institute'),
(4, 8, '8. For carrying out C2C e-Commerce the following infrastructure is essential                                                                                                                                        (i) World Wide Web\r\n(ii) Corporate network\r\n(iii) Electronic Data Interchange standard                                                                                                                                                                                                           (iv) Secure Payment Services\r\n(v)Secure electronic communication link connecting businesses', 'i and ii', 'ii and iv', 'i and iii', 'i and iv', 'i and iii'),
(4, 7, '7. DES works by using', 'permutation and substitution on 64 bit blocks of plain text', 'only permutations on blocks of 128 bits', 'exclusive ORing key bits with 64 bit blocks', '4 rounds of substitution on 64 bit blocks with 56 bit keys', 'permutation and substitution on 64 bit blocks of plain text'),
(4, 5, '5.Advantages of B2C commerce to customers are                                                                                                                                                 (i)wide variety of goods can be accessed and comparative prices can be found\r\n(ii) shopping can be done at any time\r\n(iii)privacy of transactions can be guaranteed\r\n(iv)security of transactions can be guaranteed', 'i and ii', 'ii and iii', 'iii and iv', 'i and iv', 'i and ii'),
(4, 6, '6. Triple DES', 'is a symmetric key encryption method', 'guarantees excellent security', 'is implementable as a hardware VLSI chip', 'is public key encryption method with three keys.', 'guarantees excellent security'),
(4, 3, '3. A firewall may be implemented in', 'routers which connect intranet to internet', 'bridges used in an intranet', 'expensive modem', 'user’s application programs', 'routers which connect intranet to internet'),
(4, 4, '4. In NetBill’s protocol for small payments for internet services\r\n(i) Key to decrypt information is sent to customer by NetBill only when there is enough amount in debit account\r\n(ii) The vendor supplies the key to NetBill server when he receives payment\r\n(iii) Checksum of encrypted information received by customer is attached to his payment order\r\n(iv) Vendor does not encrypt information purchased by customer', 'i, ii', 'i, ii', 'i, ii, iii, iv', 'i, ii, iii, iv', 'i, ii'),
(4, 1, '1. EDI over internet uses', 'MIME to attach EDI forms to e-mail messages', 'FTP to send business forms\r\n', 'HTTP to send business forms', 'SHTTP to send business forms', 'MIME to attach EDI forms to e-mail messages'),
(4, 2, '2.Advantages of B2C commerce are                                                                                                                                                                                                                         (i) Business gets a wide reach to customers\r\n(ii) Payment for services easy\r\n(iii)Shop can be open 24 hours a day seven days a week\r\n(iv)Privacy of transaction always maintained', 'i and ii', 'ii and iii', 'i and iii', 'iii and iv', 'i and iii');

-- --------------------------------------------------------

--
-- Table structure for table `exam_subject`
--

DROP TABLE IF EXISTS `exam_subject`;
CREATE TABLE IF NOT EXISTS `exam_subject` (
  `exam_id` int(2) NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) NOT NULL,
  PRIMARY KEY (`exam_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_subject`
--

INSERT INTO `exam_subject` (`exam_id`, `subject`) VALUES
(1, 'OS'),
(2, 'CG'),
(3, 'PHP'),
(4, 'E-COMMERCE');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `username`, `email`, `msg`, `date_time`) VALUES
(1, '3sanjeev', 'sanjeevpanwar217@gmail.com', 'good web site', '2020-11-07 21:30:55'),
(2, '3sanjeev', 'sanjeevpanwar217@gmail.com', 'nice work tanu', '2020-11-07 21:38:45');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
CREATE TABLE IF NOT EXISTS `result` (
  `s_no` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `score` int(3) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`s_no`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`s_no`, `username`, `subject`, `score`, `date_time`) VALUES
(6, '3sanjeev', 'OS', 1, '2020-11-09 20:47:56'),
(7, '3sanjeev', 'CG', 0, '2020-11-09 20:48:11'),
(8, '3sanjeev', 'OS', 10, '2020-11-09 21:21:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `course` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `date/time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `cname`, `course`, `password`, `date/time`) VALUES
(1, 'sanjeev', 'panwar', '3sanjeev', 'sanjeevpanwar217@gmail.com', 'comm-it', 'bca-2nd year', 'tanu', '2020-11-07 19:53:30'),
(2, 'komal', 'panwar', 'kp123', 'kp@gmail.com', '', 'BCom(H)', 'komal123', '2020-11-07 20:00:50'),
(3, 'karan', 'panwar', 'karan3', 'karan123@gmail.com', 'comm-it', 'bca', '0000', '2020-11-09 19:05:43'),
(4, 'tanu', 'chauhan', 'chauhan01', 'chauhan01.tanail.com', 'comm-it', 'bca', '12345', '2020-11-09 19:26:18');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
