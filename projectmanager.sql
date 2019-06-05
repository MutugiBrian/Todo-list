-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2019 at 03:53 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectmanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries_table`
--

CREATE TABLE `countries_table` (
  `country_id` varchar(10) NOT NULL,
  `country_name` varchar(255) DEFAULT NULL,
  `office_id` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries_table`
--

INSERT INTO `countries_table` (`country_id`, `country_name`, `office_id`) VALUES
('ALB', 'Albania', 1),
('BRA', 'Brazil', 2),
('COM', 'Comoros', 3),
('COS', 'Costa Rica', 4),
('DOM', 'Dominican Republic', 4),
('EGY-ECO', 'Egypt', 3),
('EGY-PP', 'Egypt', 9),
('GHA', 'Ghana', 5),
('HON', 'Honduras', 4),
('JOR', 'Jordan', 6),
('JOR-PPFA', 'Jordan PPFA', 3),
('KEN', 'Kenya', 5),
('MAD', 'Madagascar', 3),
('MAL', 'Malaysia', 7),
('MAU', 'Mauritius', 5),
('MLD', 'Maldives', 7),
('MON', 'Mongolia', 7),
('MOR', 'Morocco', 3),
('MTA', 'Mauritania', 8),
('MTG', 'Montenegro', 1),
('MYA-AP', 'Myanmar', 7),
('MYA-CTCN', 'Myanmar', 5),
('NEP', 'Nepal', 7),
('NIG', 'Niger', 3),
('PAK', 'Pakistan', 7),
('PAL', 'Palestine', 5),
('PAN', 'Panama', 2),
('ROM', 'Romania', 1),
('SBA', 'Serbia', 1),
('SSD', 'South Sudan', 9),
('SUD', 'Sudan', 5),
('SWA-AF', 'Swaziland', 8),
('SWA-ECO', 'Swaziland', 3),
('TON', 'Tonga', 5),
('TZN', 'Tanzania', 5),
('UGA', 'Uganda', 5),
('ZIM-AF', 'Zimbabwe', 8),
('ZIM-ECO', 'Zimbabwe', 3);

-- --------------------------------------------------------

--
-- Table structure for table `offices_table`
--

CREATE TABLE `offices_table` (
  `office_id` int(50) NOT NULL,
  `implementing_office` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offices_table`
--

INSERT INTO `offices_table` (`office_id`, `implementing_office`) VALUES
(1, 'Europe Office'),
(2, 'Economy Division'),
(3, 'Ecosystems'),
(4, 'Latin America Office'),
(5, 'CTCN'),
(6, 'West Asia Office'),
(7, 'Asia Pacific Office'),
(8, 'Africa Office'),
(9, 'Policy & Programme Division');

-- --------------------------------------------------------

--
-- Table structure for table `projects_table`
--

CREATE TABLE `projects_table` (
  `project_id` int(50) NOT NULL,
  `project_ref` varchar(100) DEFAULT NULL,
  `country_id` varchar(10) DEFAULT NULL,
  `grant_amount` int(25) DEFAULT NULL,
  `dates_from_gcf` date DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `duration` int(10) DEFAULT NULL,
  `readiness_type` varchar(100) DEFAULT NULL,
  `first_disbursment` float(25,2) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects_table`
--

INSERT INTO `projects_table` (`project_id`, `project_ref`, `country_id`, `grant_amount`, `dates_from_gcf`, `start_date`, `end_date`, `duration`, `readiness_type`, `first_disbursment`, `status`) VALUES
(1, 'ALB-RS-001', 'ALB', 300000, '2016-11-15', '2016-08-30', '2017-08-30', 12, 'Capacity Building', 147500.00, 'completed'),
(2, 'ALB-RS-001', 'ROM', 300000, '2016-11-15', '2016-08-30', '2017-08-30', 12, 'Capacity Building', 147500.00, 'completed'),
(3, 'BRA-RS-001', 'BRA', 700000, '2018-06-20', '2018-06-20', '2019-12-19', 18, 'FI/TNA/other', 197450.00, 'under implementation'),
(4, 'BRA-RS-001', 'PAN', 700000, '2018-06-20', '2018-06-20', '2019-12-19', 18, 'FI/TNA/other', 197450.00, 'under implementation'),
(5, 'COM-RS-001', 'COM', 426080, '2018-11-01', '2018-11-01', '2020-10-21', 24, 'Capacity Building', 115117.00, 'under implementation'),
(6, 'CRI-RS-002', 'COS', 2861917, '2018-10-23', '2018-10-23', '2021-10-23', 36, 'NAP', 350575.34, 'under implementation'),
(7, 'DOM-RS-002', 'DOM', 2998325, '2018-07-11', '2018-07-11', '2021-06-10', 36, 'NAP', 1161912.00, 'under implementation'),
(8, 'EGY-RS-001', 'EGY-ECO', 300000, '2017-05-02', '2017-04-24', '2018-10-23', 18, 'Capacity Building', 122456.00, 'under implementation'),
(9, 'EGY-RS-001', 'MOR', 300000, '2017-05-02', '2017-04-24', '2018-10-23', 18, 'Capacity Building', 122456.00, 'under implementation'),
(10, 'GHA-RS-001', 'GHA', 300150, '2017-05-15', '2017-05-15', '2019-05-10', 24, 'FI/TNA/other', 300150.00, 'completion report submitted'),
(11, 'GHA-RS-001', 'UGA', 300150, '2017-05-15', '2017-05-15', '2019-05-10', 24, 'FI/TNA/other', 300150.00, 'completion report submitted'),
(12, 'GHA-RS-001', 'SUD', 300150, '2017-05-15', '2017-05-15', '2019-05-10', 24, 'FI/TNA/other', 300150.00, 'completion report submitted'),
(13, 'HND-RS-002', 'HON', 764960, '2018-01-18', '2018-01-18', '2019-07-19', 18, 'REDD+', 243515.00, 'under implementation'),
(14, 'JOR-RS-001', 'JOR', 300000, '2017-06-15', '2017-06-15', '2018-12-14', 18, 'Capacity Building', 150000.00, 'under implementation'),
(15, 'MDG-RS-001', 'MAD', 300000, '2018-07-20', '2018-07-20', '2019-07-19', 12, 'Capacity Building', 177588.00, 'under implementation'),
(16, 'MLY-RS-002', 'MAL', 819230, '2017-06-16', '2017-06-16', '2020-11-13', 24, 'REDD+', 465695.34, 'under implementation'),
(17, 'MDV-RS-001', 'MLD', 300000, '2018-07-17', '2018-07-17', '2018-06-13', 12, 'Capacity Building', 198545.00, 'under implementation'),
(18, 'MRT-RS-002', 'MTA', 2670374, '2018-07-17', '2018-07-17', '2021-07-08', 36, 'NAP', 742163.00, 'under implementation'),
(22, 'MMR-RS-002', 'MYA-AP', 300000, '2017-11-10', '2017-11-10', '2019-05-11', 18, 'Capacity Building', 115840.00, 'under implementation');

-- --------------------------------------------------------

--
-- Table structure for table `project_ref_table`
--

CREATE TABLE `project_ref_table` (
  `project_ref` varchar(50) NOT NULL,
  `project_title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_ref_table`
--

INSERT INTO `project_ref_table` (`project_ref`, `project_title`) VALUES
('ALB-RS-001', 'Readiness support to Albania'),
('BRA-RS-001', 'Technology Needs Assessment for the Implementation of Climate Action Plans'),
('COM-RS-001', '1. Establishing and strengthening National Designated Authorities or Focal Points;\r\n2. Developing strategic frameworks for engagement with the GCF, including the preparation of country programmes.'),
('CRI-RS-002', 'Building sub-national capacities for the implementation of the National Adaptation Plan in Costa Rica'),
('DOM-RS-002', 'Building capacity to advance National Adaptation Plan Process in the Dominican Republic'),
('EGY-RS-001', 'Supporting Egypt’s engagement with the Green Climate Fund: Logical framework support'),
('GHA-RS-001', 'Drought Early Warning and Forecasting System: Improving resiliency of crops to drought through strengthened early warning within Ghana, Uganda and Sudan'),
('HND-RS-002', 'Supporting strategic planning to engage with the GCF and comply with the national commitments under the Paris Agreement regarding the LULUCF sector'),
('JOR-RS-001', 'Strengthening NDA of Jordan to deliver on GCF Investment Framework'),
('MDG-RS-001', 'Building Capacity in Madagascar to engage with the GCF'),
('MDV-RS-001', 'Establishing and strengthening National Designated Authority (NDA), and developing strategic framework for engagement with the GCF in Maldives'),
('MLY-RS-002', 'Accessing REDD+ result-based payments in Malaysia'),
('MMR-RS-001', 'Strengthened drought and flood management through improved science?based information availability and management in Myanmar'),
('MMR-RS-002', 'Establishing and Strengthening National Designated Authority (NDA), and Developing Strategic Framework for Engagement with the GCF in Myanmar'),
('MNE-RS-001', '1. Establishing and strengthening National Designated Authorities or Focal Points;\r\n2. Developing strategic frameworks for engagement with the GCF, including the preparation of country programmes.'),
('MNG-RS-003', 'Scaling-up of Implementation of Low-Carbon District Heating Systems in Mongolia'),
('MNG-RS-004', 'Building capacity to advance National Adaptation Plan Process in Mongolia'),
('MRT-RS-002', 'Building capacity to advance National Adaptation Plan Process in Mauritania'),
('MUS-RS-002', 'Climate Change Vulnerability and Adaptation Study for Port of Port Louis'),
('NER-RS-002', 'Building Niger’s engagement with the GCF: Establishment and strengthening of the NDA, and elaboration of a country programme identifying strategic priorities'),
('NPL-RS-001', 'Building Capacity to Advance National Adaptation Plan Process in Nepal'),
('PAK-RS-003', 'Building capacity to advance National Adaptation Plan Process in Pakistan'),
('PSE-RS-002', 'Technology Road Map for the Implementation of Climate Action Plans in Palestine.'),
('S1-32GCL-000023', 'Jordan Integrated Landscape Management Initiative (JILMI)'),
('SRB-RS-001', 'Developing the capacities of the Republic of Serbia for an effective engagement with the Green Climate Fund'),
('SSD-RS-001', 'Republic of South Sudan Green Climate Fund’s Readiness and Preparatory Support Project '),
('SWZ-RS-002', 'Green Climate Fund Readiness Support for Swaziland'),
('SWZ-RS-003', 'Building capacity to advance National Adaptation Plan process in Swaziland '),
('TON-RS-002', 'To develop an energy efficiency master plan for the Kingdom of Tonga and East Africa'),
('ZWE-RS-001', '1. Establishing and strengthening National Designated Authorities or Focal Points;\r\n2. Developing strategic frameworks for engagement with the GCF, including the preparation of country programmes.'),
('ZWE-RS-002', 'Building capacity to advance National Adaptation Plan Process in Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `readiness_table`
--

CREATE TABLE `readiness_table` (
  `readiness_type` varchar(100) NOT NULL,
  `readiness_or_nap` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `readiness_table`
--

INSERT INTO `readiness_table` (`readiness_type`, `readiness_or_nap`) VALUES
('Capacity Building', 'Readiness'),
('FI/TNA/other', 'Readiness'),
('NAP', 'National Adaptation Plans'),
('REDD+', 'Readiness');

-- --------------------------------------------------------

--
-- Table structure for table `status_table`
--

CREATE TABLE `status_table` (
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_table`
--

INSERT INTO `status_table` (`status`) VALUES
('completed'),
('completion report submitted'),
('requesting funds'),
('under implementation');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries_table`
--
ALTER TABLE `countries_table`
  ADD PRIMARY KEY (`country_id`),
  ADD KEY `fk_office_id` (`office_id`);

--
-- Indexes for table `offices_table`
--
ALTER TABLE `offices_table`
  ADD PRIMARY KEY (`office_id`);

--
-- Indexes for table `projects_table`
--
ALTER TABLE `projects_table`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `fk_status` (`status`),
  ADD KEY `fk_readiness_type` (`readiness_type`),
  ADD KEY `fk_project_ref` (`project_ref`),
  ADD KEY `fk_country_id` (`country_id`);

--
-- Indexes for table `project_ref_table`
--
ALTER TABLE `project_ref_table`
  ADD PRIMARY KEY (`project_ref`);

--
-- Indexes for table `readiness_table`
--
ALTER TABLE `readiness_table`
  ADD PRIMARY KEY (`readiness_type`);

--
-- Indexes for table `status_table`
--
ALTER TABLE `status_table`
  ADD PRIMARY KEY (`status`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `countries_table`
--
ALTER TABLE `countries_table`
  ADD CONSTRAINT `fk_office_id` FOREIGN KEY (`office_id`) REFERENCES `offices_table` (`office_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `projects_table`
--
ALTER TABLE `projects_table`
  ADD CONSTRAINT `fk_country_id` FOREIGN KEY (`country_id`) REFERENCES `countries_table` (`country_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_project_ref` FOREIGN KEY (`project_ref`) REFERENCES `project_ref_table` (`project_ref`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_readiness_type` FOREIGN KEY (`readiness_type`) REFERENCES `readiness_table` (`readiness_type`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_status` FOREIGN KEY (`status`) REFERENCES `status_table` (`status`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
