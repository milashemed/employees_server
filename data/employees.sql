-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.10-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for employees
CREATE DATABASE IF NOT EXISTS `employees` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `employees`;


-- Dumping structure for table employees.departments
CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table employees.departments: ~0 rows (approximately)
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` (`id`, `Description`) VALUES
	(1, 'test Department'),
	(2, 'test Department 2');
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;


-- Dumping structure for table employees.dept_heads
CREATE TABLE IF NOT EXISTS `dept_heads` (
  `id` int(11) NOT NULL,
  `department` int(11) NOT NULL,
  `Employee` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FKDEPT_HEADS` (`department`),
  KEY `FKemployee_heads` (`Employee`),
  CONSTRAINT `FKDEPT_HEADS` FOREIGN KEY (`department`) REFERENCES `departments` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `FKemployee_heads` FOREIGN KEY (`Employee`) REFERENCES `employees` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table employees.dept_heads: ~0 rows (approximately)
/*!40000 ALTER TABLE `dept_heads` DISABLE KEYS */;
/*!40000 ALTER TABLE `dept_heads` ENABLE KEYS */;


-- Dumping structure for table employees.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `national_id` varchar(10) NOT NULL,
  `NHIF` varchar(10) NOT NULL,
  `NSSF` varchar(10) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Rank` enum('Private','Senior Private','Corporal','Sergent','Senior Sergent','Warrant Officer 2','Warrant Officer 1') NOT NULL,
  `department` int(11) NOT NULL,
  `promotion` enum('Y','N') NOT NULL DEFAULT 'N',
  `Gender` enum('M','F','Male','Female') NOT NULL,
  `Salary` double NOT NULL,
  `Regimental` bit(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `national_id` (`national_id`),
  UNIQUE KEY `NHIF` (`NHIF`),
  UNIQUE KEY `NSSF` (`NSSF`),
  KEY `fk_departments` (`department`),
  CONSTRAINT `fk_departments` FOREIGN KEY (`department`) REFERENCES `departments` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table employees.employees: ~0 rows (approximately)
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;


-- Dumping structure for table employees.promotions
CREATE TABLE IF NOT EXISTS `promotions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from` varchar(50) NOT NULL DEFAULT '0',
  `to` varchar(50) NOT NULL DEFAULT '0',
  `employee` int(11) NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK1promotion_employee` (`employee`),
  CONSTRAINT `FK1promotion_employee` FOREIGN KEY (`employee`) REFERENCES `employees` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table employees.promotions: ~0 rows (approximately)
/*!40000 ALTER TABLE `promotions` DISABLE KEYS */;
/*!40000 ALTER TABLE `promotions` ENABLE KEYS */;


-- Dumping structure for table employees.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '0',
  `Email` varchar(255) NOT NULL DEFAULT '0',
  `Phone` varchar(20) NOT NULL DEFAULT '0',
  `User_type` enum('Admin','Manager','Data_Entry') NOT NULL,
  `Status` enum('Active','Disabled','Inactive') NOT NULL,
  `Password` varchar(55) NOT NULL DEFAULT '0',
  `passchange` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `Email` (`Email`),
  UNIQUE KEY `Phone` (`Phone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table employees.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
