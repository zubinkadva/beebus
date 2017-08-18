-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 18, 2017 at 07:11 PM
-- Server version: 10.1.20-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beebus`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `location_id`, `name`) VALUES
(1, 61, 'eyJpdiI6Ik9hRW5ydWdVaWtxWUdBQWloNUUxVGc9PSIsInZhbHVlIjoidGxUVURVUk91XC8rKzR2c0lcL0FYY2RnPT0iLCJtYWMiOiI0Yjg2MzdjZDM4MWEzZmRiOWY2YzAxNDM1NjIyOTQ5NzI5ZTJhNzc0ZmVkNmFmM2VmZmU5NTE5ZjJlN2JiMDBmIn0=.JPG'),
(2, 68, 'eyJpdiI6ImkyN0QxelpyNGdyZjVEY21pdjUrblE9PSIsInZhbHVlIjoiK0lOMXB3Yk5XT0RBZk1PNlY1Zm9TZz09IiwibWFjIjoiZDVkY2Y3ZDRjZTFiN2Q4Yzc3ZmI0NjQwZWIwODk1YTYxMzU5ZDc2MjYyNGE3ZGJmM2YyN2VlMDQ3ZTk1MzQzYSJ9.JPG'),
(3, 1, 'eyJpdiI6InhFVVFqcUFZVGhQaGU3cmJhbGtKUXc9PSIsInZhbHVlIjoiZE9YWkJ6NVJuaGlFR3lEYXg2UklBQT09IiwibWFjIjoiZDVlYmYwMGVmNmQyZjgxMWZlMmFlNDJiZWJkMjBiZDI1MWIzNzExZGFkNjU1YjUxMGJjZDc5MTBhNTQ3NzdlZCJ9.JPG'),
(4, 2, 'eyJpdiI6Ikc4bnFtXC9DWkpGVmdpaWcwS0ZzNU13PT0iLCJ2YWx1ZSI6Ik1aSWFsOHl4aVJ5aGtUUnFHNjhpUnc9PSIsIm1hYyI6ImJiMWM1OGQ2YWE0YzI5YzNiMjBlNmU0OWQ4MmMzZDIyNzRjNjAxOTU1ZjJjZmI0NmY4YWU2MzAwYTk4ODNlMDEifQ==.JPG'),
(5, 3, 'eyJpdiI6InJsbElSSVF1c0tucUVzUSt1QlZGWHc9PSIsInZhbHVlIjoibVZncGJ3a1kramxKbFpGNUFzRHc2dz09IiwibWFjIjoiNmEzODdlZmM2NWQwN2M2NzE2MDFkZWNmMjM1MjY0NGM4YmMwZTExMjM2M2EwYzE4MDhlMmQ2NDNkMjg5ZDRmMyJ9.JPG'),
(6, 4, 'eyJpdiI6IkpxTVYrQ00xMDRyU0Rxdm00MFdCY2c9PSIsInZhbHVlIjoiMXVPUldzeWlrMzdaSFhaRFh4bWZrdz09IiwibWFjIjoiMjI3ODBjOTg2ZjIzMzIyM2I1NDdkNTRiOTdiZjE2NGEzYWM3NDhjNjg2NTZlMjZjMDlmYjhlNjU0NWFlYjhiZiJ9.JPG'),
(7, 5, 'eyJpdiI6IlB5XC9uSjA1UXE3K1wveVZZcllDRU9lUT09IiwidmFsdWUiOiJ2U2ZQMXdzXC95b1dqdmdiNXNod3J3QT09IiwibWFjIjoiYzM0ZDNkOTk1NGFiZmU3NjU0MjBiOTM4M2VjZmY2MTVhMTI2MWIxODQwYmZmMGY0MDVmOTI0OGJiMzRhMGFlOCJ9.JPG'),
(8, 6, 'eyJpdiI6ImpXUWxwbkpCZlhSNWRuUjlpbEkyTnc9PSIsInZhbHVlIjoiTzdyeWR1UGxXVlZkTXpVVmJZMXdlZz09IiwibWFjIjoiMmY5NWExMjJkYjE0YzNiN2VlYWQzZDk3OGZkN2ExYjZmODVkNDgyZWQ1M2UyZGFjNDU2NGEwYzI5YWE5NWQyNCJ9.JPG'),
(9, 8, 'eyJpdiI6InJSbUx4dU13R1gxU0JjN2lXTGdlK3c9PSIsInZhbHVlIjoidEdSTk9xeUw0bHZBNHVjZHRhRTFHdz09IiwibWFjIjoiNzAxMjUzNzYyZGE2ODIzMGUxMmIzODJlZjRhNTI5NjcwYmY4MGQ4ODVkNzU1NTBjMjQzMDhlYzZmYWNmMzgyMCJ9.JPG'),
(10, 9, 'eyJpdiI6IlBkNEhiTGY1cVZQNVNqOGRLRFlMaHc9PSIsInZhbHVlIjoiUTJsbGhTVFJCOUZYWHlUMVBhSzdlQT09IiwibWFjIjoiMGYwMWEyNzhmMWQ2OThmMGRmZGI1N2E2ZDUxZDY5Mzg5OWM3NGNhOGRlMzI0MTM5N2ZjZjIwNzNjZGNjMDUzNSJ9.JPG'),
(11, 26, 'eyJpdiI6IkJSdFwvREg3cWVYak5MWURkeGQyaTZBPT0iLCJ2YWx1ZSI6IkFXZ2l6Nzk3cDVVc2xEaEFpQzVEZmc9PSIsIm1hYyI6ImU1OTk0NTY0Yzc2MmFiZjBkZGIxM2UxNmY2MGJkZDI5ZDlmMzAxM2JkMTliNmJmMmNjZTBhNDgwZTMxYmYyZTYifQ==.JPG'),
(12, 27, 'eyJpdiI6IlU5QlVZM2dNc2xnVHpYSWpRVis0bXc9PSIsInZhbHVlIjoiM2pRN2s0ZUtiaG1mYnBTRVRhU2xuQT09IiwibWFjIjoiOTZjNzE0MzQ3YmE2ZDQ1YzM3NjE5M2NmM2ZkNjc2MzdjMDhhNThlZGQxOGFiMzBkMDEzNTgxOTE3OWZiYzA4NiJ9.JPG'),
(13, 28, 'eyJpdiI6IlNsRVNCTEVHUmJlXC9acnE3dVoxXC9Cdz09IiwidmFsdWUiOiJqUk5WU3RMSVpkY01zamxOWG5oQjlBPT0iLCJtYWMiOiJjZDhkYzQ3YTAwZGIwYmY3NTgwZTkzNmNjZjFkNDQzOWU2YTQ3YTZhMmVjYTgyOGIxYTIzMTBiYTYzODBlNDAzIn0=.JPG'),
(14, 29, 'eyJpdiI6ImJyUG1GY1gyNmg3ZEpNNlY4Z3dDZVE9PSIsInZhbHVlIjoiODF5Z0NvdEdEa3l0NmhYWUpqT0pzdz09IiwibWFjIjoiNGM5ZDE3NGQ0YzNmYThkYjlmM2FmYTI4MGUzZTFlODA4ZTIwNjZmMDAxMzVjMTMwOWI5N2E1ZTViZTcxODQzNiJ9.JPG'),
(15, 30, 'eyJpdiI6InlWXC9zZlwvbXZCeEpJZ3JKaGsyZGFQQT09IiwidmFsdWUiOiJUazhPcnJZcDVYZjNFc0xhSmcwN0t3PT0iLCJtYWMiOiI3NDg2ZGI2ZWUyZWVkZTk5NWQ2MjY1ZTY2NzNhNTdhN2MwZTdkMGIwZGNmMjMxOTU4ZDIwYTFiYmJjNGE3N2Y2In0=.JPG'),
(16, 31, 'eyJpdiI6IkFqU2picER0TDd1WnMrMWxBSldrMGc9PSIsInZhbHVlIjoicFpFRHRkYngyZmdnenliZzkranZRdz09IiwibWFjIjoiZmI4NTNlZjg4NmU2MDlhZjVlZjMyNDAwZDkyZjJjMTQ5NTY3NmJiMTAxYjRmYWE5NTQ0MWE3MDUzYzNjZGY1MyJ9.JPG'),
(17, 32, 'eyJpdiI6Ik9uM0E1NzloSEVVaG9RcXNYXC9lTk1nPT0iLCJ2YWx1ZSI6IkxvaTFmSk1lMDNUSWZKRVlmclpNMWc9PSIsIm1hYyI6IjczNmY2M2RlZjFiMjcwOWU0MzJlNmNiYzUxNjcwOGExNGFlN2Y4ZjgxYjUyMzVjNjIyNzYxZTRkYjBiMjJjMWQifQ==.JPG'),
(18, 33, 'eyJpdiI6IjhZVHJPckFXSTNpNzBRc09hUmdjNUE9PSIsInZhbHVlIjoidGZhbVNSdjh4Z2JvM2szU0NRU2ZlUT09IiwibWFjIjoiZjE0OTExZTEzODc2ZTQ2OTg0ZjkyMTA5ZmFkMzkzMGQ4YjQ1OGQ2Y2JmOWFhZTc0NDJhNjdlMDY0YWU4NTI4OCJ9.JPG'),
(19, 34, 'eyJpdiI6IkZFa1NFM1N6S2ZSYmdaS0hCVm5KZEE9PSIsInZhbHVlIjoiK1k3QlJSdW9RRnZXNk94TGtWd3Z3Zz09IiwibWFjIjoiODA2NjcyNzQ2ZTIyM2UxMzQ4NmQ0NjMzOWE4MGZlMjM1MjQ3MzVmMzFhZjhmMTg2ODY4MDNiZDU4OTZjZDhiMyJ9.JPG'),
(20, 35, 'eyJpdiI6IkttQktCK0lqSHg0WDJlZ3JlanEwMXc9PSIsInZhbHVlIjoidXNua0NZcFdkVkZcL0FSS2NmZW5GYkE9PSIsIm1hYyI6ImNiY2JlNzNkNzY1ODMxNjI1MjEyZjM0ZDNkYjUyMDkyZGVhOTY5ZGRjMGE0ZWU2YjFhMjYxMTc5NGE3MTQ4ODEifQ==.JPG'),
(21, 36, 'eyJpdiI6IjFmYWFwSEFQUWtxc1U2NG5sWUx6VkE9PSIsInZhbHVlIjoicE8zYVBWaXI0RjkzWlwvR1MycEdqWmc9PSIsIm1hYyI6IjQ4ZDBmNzhkYjM1M2RlOWY2YjRmOGRlYTEzYmVlMTI2NDc5NTY5ZWRkNjgxYjFhMmFlYzU5MmY0YTdhZWEwNDEifQ==.JPG'),
(22, 37, 'eyJpdiI6IkJmNjMwZ3NYdEoyY1R1UTU1TTZ4OFE9PSIsInZhbHVlIjoiRHZDRlAxVDNWVkNDOUxDT2NlNFwvS2c9PSIsIm1hYyI6ImNkY2Y2YWIwZWVhODg0MmI1ZjVlMTEzZTZiNGJhNGYwMDBhODNkNzQ4OGQ3NjAxNjBkYTg1MWI3ODk4ODkwNGEifQ==.JPG'),
(23, 38, 'eyJpdiI6IlwvdXJVc3NnK0JubjRvOGR6REhHZUZBPT0iLCJ2YWx1ZSI6Ik5xeE1YQnI3WFVSbVQ0eXpKQXR1U3c9PSIsIm1hYyI6IjY3ODI3MGNlOWE3ZmIyYWFjM2JmMjkxNDc4YzI2MzAyMWFkYWQ5Y2I3NGQ1MjY2YTk3NTNjZmQwZmYzZGQ3ZWQifQ==.JPG'),
(24, 39, 'eyJpdiI6Ik1Ya3Fzc09pUTlqVnFTc0puQ3lkbGc9PSIsInZhbHVlIjoiOHliMGJuaWFBVTRBY1dHYVwvTnBxTnc9PSIsIm1hYyI6IjI5MjE5OGUwYWJiNjEzYzQ2ZWZiM2M0ZjEzZGRmNzRlOGZhZmMxZDcxOGEyNGEwY2JjYzA0Y2UzOTg1NThmZDEifQ==.JPG'),
(25, 40, 'eyJpdiI6IjBUTXQ1VDFDejNEcVY3RnVBendpcFE9PSIsInZhbHVlIjoidUxGbXpiVEhGaFwvZDF1WFAwV09Nc0E9PSIsIm1hYyI6IjA1MjVhNWJmZGJmMDJhN2MwZjk3MThlMmUwMGU5MmQzZjlhY2Q3Mzk0YmQ0ODkzYWY5NGFmMTlmNzJmZmEyMjkifQ==.JPG'),
(26, 41, 'eyJpdiI6IlkyXC9Md2xoMnFnSGFBWDA3OGo2a0Z3PT0iLCJ2YWx1ZSI6Ikh4c2JcL1FzTDgxODhzQUxNWFFJWVd3PT0iLCJtYWMiOiIyNWM2ODFlODA3M2FiNGQ3MjM0MmI3NjdmMmQyNjVkMTk1Yjk4OWU4NDM3OTg3YjgxZmEwNzgxNmE2NzNmYmY4In0=.JPG'),
(27, 42, 'eyJpdiI6IkIzY09uSHFPVE9BUnc2XC9DbEM3aG5RPT0iLCJ2YWx1ZSI6Ik5nZGRVXC9DRWdYMFRSZVNya2E3aERBPT0iLCJtYWMiOiIwNGFmNDY4NGVlZDgyNzQwNjdhZTU0ZDc4NTlkMjZlNWU0ZDdjY2UyNjlmNDlmZDhiMzZlOGE5YmQ1Njg4YjFlIn0=.JPG'),
(28, 43, 'eyJpdiI6IitMZWVBQXc0MnNQWnpwR2NUNlZWK0E9PSIsInZhbHVlIjoiTWhQKzc5SjB5XC9CSjltdVdmaklBYWc9PSIsIm1hYyI6IjkxMzZkZWM4ZmZhZGQxM2IxNDk0MmRhODZiNmY4ZGY4NDcxNGQ5OTdiZjkxMmY2YzBkNzE0NzE0MjRkYzVkNmYifQ==.JPG'),
(29, 45, 'eyJpdiI6IjRSK0dxdTd1Vk80VjZqWFFpMTJPS1E9PSIsInZhbHVlIjoicEZDQU9Rb1hzUkl1U2pcLzE4eEpvWkE9PSIsIm1hYyI6ImY4NTAxOWM4ZjQyOWFlMWU1MTg5MmE5OGYxNWM1YWVjOGFiZDM1YmVmMTliMTgyNjdlNWI4YWE2NmYyMzIyOTAifQ==.JPG'),
(30, 46, 'eyJpdiI6InFKdHZPTkduaHBHaytEekczbXRnd2c9PSIsInZhbHVlIjoiYnZpeHdFYk5CTzlIU29yaWdLTmwrQT09IiwibWFjIjoiM2Q4Nzk1NDA4OTE5NTI5ZWQxNmZiZTRmMTVkZjA0MjBiZWM2OThlY2FkZGM4NzEwYmJiYWU3OGI2YTVjY2Y3ZSJ9.JPG'),
(31, 47, 'eyJpdiI6Ik52dkhjSFE2UmdSemRocXlBRDRDQWc9PSIsInZhbHVlIjoiNm85UG5SVkk1OWxlVEJNZUN2Y2M4UT09IiwibWFjIjoiN2Q0ZTJiZmZhZDcxNjgyM2ZmZTIwMDViYmI2NDcxZmYxNjllYTkxZjM5NmRjZTFkNGM0YjhkNzlkMTg4MWI1MSJ9.JPG'),
(32, 48, 'eyJpdiI6InhcLzIyT1dnZUZ2YzBIYnh1ajVtOFlRPT0iLCJ2YWx1ZSI6IlVkdGxsYk1sMVlwSVlsblprcHZFbGc9PSIsIm1hYyI6Ijc0NGMyMmFiYWQ3YmQ4YmM2NDliMWFmNTM2M2MxZDBhMGYzOTg2MDQ0MDhmZWM5ODY1NWIxMmJmZjFmN2E5YmUifQ==.JPG'),
(33, 50, 'eyJpdiI6Ik5BaVVnUGh1Wm5zVzUrWVlmZDBkTHc9PSIsInZhbHVlIjoiN0lyZk9URTd3NWV6ZTVnbU10Nk1mUT09IiwibWFjIjoiZDgxOTdlOWI3ODllZGRkYmNiNzljYWJhOWE5YzdkZDRjZWEyNTUyYWViM2FmZjg4MzAxYTg3ZDgzMmY4MmI1ZiJ9.JPG'),
(34, 51, 'eyJpdiI6IkRmQThEYkRTSXJFZDBBaTZ1aTNPOVE9PSIsInZhbHVlIjoibzhheCthYnY2Q1ArK0JUSmNNdlVIZz09IiwibWFjIjoiZGJlMzc0YzY0ZGVkNTNmZDVmMThhYmQxMzU2ODRmYmM5OTYyNzg3OWUzMDBkNmU4ODRlYzJiZWJhNDk2MmE2MSJ9.JPG'),
(35, 52, 'eyJpdiI6IllXODRSYjJqVWRRUVM3UzBoV2FOS3c9PSIsInZhbHVlIjoiWHA0NkNcL1Q4NDBYMzNCKzViT0NBSWc9PSIsIm1hYyI6ImJiMTQ4OWFhMzU4ODQ3MGE0MmU3ZDE3OGQ2MTNiZmUxMjRlYTZjNzhkYzJmZmFmN2UzNDNjYTE2MjNiNjE0NGUifQ==.JPG'),
(36, 53, 'eyJpdiI6IllnK1JrcGdVWGhKTFwvRXlCNXFOTmtBPT0iLCJ2YWx1ZSI6ImphcWthNHVoWlR4TlZ5Y2JcLzFMcURRPT0iLCJtYWMiOiI3OTU1MTc4YjVjOGUwYzgzYjc5MGE0N2VmNzdmNjM2OGRkMTVmNDg5NDNkOGRjMjJhODBiYTI3N2Y1ZGQ2NzU0In0=.JPG'),
(37, 54, 'eyJpdiI6Im9abjVcLzVhZ213MlY5UVpJTFwvMVRRdz09IiwidmFsdWUiOiJlelRvaUhrdDlNMTFUdmdmZTJ0YVZRPT0iLCJtYWMiOiIxODQyYTc0YzZmNjdjOWY4Y2U4ODViN2YwMDE4OWFkZjBjMmI5YzRmNDEzYjA4ZjIwMjM5N2Y0MDdhNjExMWVlIn0=.JPG'),
(38, 7, 'eyJpdiI6Im1TZHlOSFlzS3FpK3ZYTkJUY0NwbFE9PSIsInZhbHVlIjoiTVpmM2FsblR2Y0xIMzNBV1RqelpmUXBJTkEreUR1eHdMNytOTFRSaG82bVwvRXc5endtbEtjazdrbWFFWllGdkIiLCJtYWMiOiJmYWU1ODJlNTEzODk2ZjgzM2M5YmY4YWY0MmUwMzk0OTk3NzQ5ZGRmZjQyZDNkMjRlZjk2MmRhYTg4OGMxN2VjIn0=.png');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `lat` text NOT NULL,
  `lng` text NOT NULL,
  `gate` tinyint(1) NOT NULL DEFAULT '0',
  `combination` text,
  `pallets` int(11) DEFAULT NULL,
  `owned_by` text,
  `flowers` text,
  `fencing` text,
  `payments` text,
  `notes` text,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `lat`, `lng`, `gate`, `combination`, `pallets`, `owned_by`, `flowers`, `fencing`, `payments`, `notes`, `created_at`, `updated_at`) VALUES
(1, 'Fellsmere', '27.767346', '-80.565870', 1, '1928', 0, 'David Webb', 'Brazilian peppers, palmetto, gallberry', 'Yes', NULL, NULL, '2017-07-18 00:09:07', '2017-07-21 17:39:28'),
(2, 'Fellsmere', '27.761740', '-80.565354', 1, NULL, 35, 'David Webb', 'Brazilian peppers, palmetto, gallberry', 'Yes', NULL, 'Maximum 50 pallets = 200 hives', '2017-07-18 00:11:41', '2017-07-24 23:25:35'),
(3, 'Fellsmere', '27.748843', '-80.559385', 1, NULL, 0, 'David Webb', 'Brazilian peppers, palmetto, gallberry', 'Yes', NULL, 'Probable location for 25 pallets = 100 hives', '2017-07-18 00:13:11', '2017-07-21 17:38:19'),
(4, '97th Street', '27.771995', '-80.626685', 1, '1231', 0, 'The Platt family', 'Orange, Brazilian peppers, cabbage palm, palmetto', 'Yes', NULL, NULL, '2017-07-18 00:19:24', '2017-07-21 16:23:43'),
(5, '97th Street', '27.771336', '-80.627659', 0, NULL, 0, 'The Platt family', 'Orange, Brazilian peppers, cabbage palm, palmetto', 'Yes', NULL, 'Maximum 25 pallets = 100 hives', '2017-07-18 00:21:26', '2017-07-21 18:06:15'),
(6, '97th Street', '27.770635', '-80.626990', 0, NULL, 15, 'The Platt family', 'Orange, Brazilian peppers, cabbage palm, palmetto', 'Yes', NULL, NULL, '2017-07-18 00:27:55', '2017-07-21 18:06:56'),
(7, '97th Street', '27.771269', '-80.625746', 1, NULL, 0, 'The Platt family', 'Orange, Brazilian peppers, cabbage palm, palmetto', 'Yes', NULL, NULL, '2017-07-18 00:29:22', '2017-07-21 17:40:18'),
(8, '97th Street', '27.772300', '-80.632137', 1, NULL, 0, 'The Platt family', 'Orange, Brazilian peppers, cabbage palm, palmetto', 'Yes', NULL, NULL, '2017-07-18 00:31:30', '2017-07-21 16:27:44'),
(9, '97th Street', '27.775562', '-80.632656', 1, NULL, 0, 'The Platt family', 'Orange, Brazilian peppers, cabbage palm, palmetto', 'Yes', NULL, NULL, '2017-07-18 00:42:26', '2017-07-21 16:28:07'),
(26, '97th Street', '27.775029', '-80.640870', 0, NULL, 0, 'The Platt family', 'Orange, Brazilian peppers, cabbage palm, palmetto', 'Yes', NULL, 'Probable location for 25 pallets = 100 hives', '2017-07-18 22:19:35', '2017-07-21 17:50:38'),
(27, '97th Street', '27.776032', '-80.634024', 1, NULL, 0, 'The Platt family', 'Orange, Brazilian peppers, cabbage palm, palmetto', 'Yes', NULL, NULL, '2017-07-18 22:20:34', '2017-07-21 16:29:17'),
(28, '97th Street', '27.776431', '-80.634058', 1, NULL, 0, 'The Platt family', 'Orange, Brazilian peppers, cabbage palm, palmetto', 'Yes', NULL, NULL, '2017-07-18 22:21:08', '2017-07-21 16:29:42'),
(29, '101th Street', '27.778336', '-80.634064', 1, NULL, 0, 'The Platt family', 'Orange, Brazilian peppers, cabbage palm, palmetto', 'Yes', NULL, NULL, '2017-07-18 22:21:42', '2017-07-21 16:30:08'),
(30, '101th Street', '27.779458', '-80.635242', 0, NULL, 0, 'The Platt family', 'Orange, Brazilian peppers, cabbage palm, palmetto', 'Yes', NULL, 'Probable location for 25 pallets = 100 hives', '2017-07-18 22:23:44', '2017-07-21 18:10:57'),
(31, '101th Street', '27.779935', '-80.641203', 0, NULL, 26, 'The Platt family', 'Orange, Brazilian peppers, cabbage palm, palmetto', 'Yes', NULL, NULL, '2017-07-18 22:24:32', '2017-07-21 18:09:22'),
(32, '101th Street', '27.781287', '-80.641178', 1, NULL, 0, 'The Platt family', 'Orange, Brazilian peppers, cabbage palm, palmetto', 'Yes', NULL, NULL, '2017-07-18 22:25:23', '2017-07-21 16:31:21'),
(33, '101th Street', '27.785958', '-80.641033', 0, NULL, 0, 'The Platt family', 'Orange, Brazilian peppers, cabbage palm, palmetto', 'Yes', NULL, 'Probable location for 25 pallets = 100 hives', '2017-07-18 22:26:06', '2017-07-21 17:52:02'),
(34, '101th Street', '27.785930', '-80.637940', 0, NULL, 32, 'The Platt family', 'Orange, Brazilian peppers, cabbage palm, palmetto', 'Yes', NULL, 'Maximum of 25 pallets = 100 hives', '2017-07-18 22:27:14', '2017-07-21 17:51:13'),
(35, '101th Street', '27.779488', '-80.632986', 1, NULL, 0, 'The Platt family', 'Orange, Brazilian peppers, cabbage palm, palmetto', 'Yes', NULL, NULL, '2017-07-18 22:28:08', '2017-07-21 16:32:25'),
(36, 'Canal Road', '27.819112', '-80.605079', 1, NULL, 0, 'The Platt family', NULL, 'Yes', NULL, NULL, '2017-07-18 22:38:32', '2017-07-21 16:33:46'),
(37, 'Canal Road', '27.818857', '-80.605003', 0, NULL, 1, 'The Platt family', NULL, 'Yes', 'Paid $500', 'Probable location for 25 pallets = 100 hives', '2017-07-18 22:39:43', '2017-07-21 17:53:14'),
(38, 'Canal Road', '27.818921', '-80.592550', 1, '1231', 25, 'The Platt family', NULL, 'Yes', NULL, NULL, '2017-07-18 22:41:34', '2017-07-21 16:34:25'),
(39, '54 Canal Road', '27.819252', '-80.622509', 1, NULL, 0, 'Barbara Cruz', 'Cabbage palm, Brazilian peppers, orange, palmetto', 'Yes', '$1000/yr.', 'Maximum 50 pallets = 200 hives', '2017-07-18 22:43:59', '2017-07-21 17:54:06'),
(40, '54 Canal Road', '27.817083', '-80.622972', 0, NULL, 0, 'Barbara Cruz', 'Cabbage palm, Brazilian peppers, orange, palmetto', 'Yes', '$1000/yr.', 'Probable location for 25 pallets = 100 hives', '2017-07-18 22:47:19', '2017-07-21 17:54:35'),
(41, 'Centerlane Road', '27.845154', '-80.623251', 1, '0511', 0, 'David Webb (one half)', 'Brazilian peppers, palmetto', 'Yes', NULL, NULL, '2017-07-18 22:56:27', '2017-07-21 16:37:11'),
(42, 'Centerlane Road', '27.845307', '-80.627544', 0, NULL, 25, 'David Webb (one half)', 'Brazilian peppers, palmetto', 'Yes', NULL, NULL, '2017-07-18 22:58:07', '2017-07-21 16:38:12'),
(43, 'Centerlane Road', '27.845427', '-80.632158', 1, NULL, 0, 'David Webb (one half)', 'Brazilian peppers, palmetto', 'Yes', NULL, NULL, '2017-07-18 22:59:45', '2017-07-21 16:38:30'),
(44, 'Centerlane Road', '27.845307', '-80.640000', 1, '0511', 0, 'David Webb (one half)', 'Brazilian peppers, palmetto', 'Yes', NULL, NULL, '2017-07-18 23:01:30', '2017-07-18 23:01:30'),
(45, 'Centerlane Road', '27.845307', '-80.6488', 0, NULL, 25, 'David Webb (one half)', 'Brazilian peppers, palmetto', 'Yes', NULL, NULL, '2017-07-18 23:02:45', '2017-07-21 16:40:02'),
(46, 'Centerlane Road', '27.845312', '-80.665368', 1, '2130', 0, 'David Webb (one half)', 'Brazilian peppers, palmetto', 'Yes', NULL, NULL, '2017-07-18 23:05:05', '2017-07-21 16:40:25'),
(47, 'Centerlane Road', '27.851642', '-80.665161', 1, NULL, 0, 'David Webb (one half)', 'Brazilian peppers, palmetto', 'Yes', NULL, NULL, '2017-07-18 23:08:28', '2017-07-21 16:40:54'),
(48, 'Centerlane Road', '27.865000', '-80.665100', 0, NULL, 2, 'David Webb (one half)', 'Brazilian peppers, palmetto', 'Yes', NULL, 'Should be 100 hives = 25 pallets', '2017-07-18 23:16:18', '2017-07-21 16:41:20'),
(49, 'Cenerlane Road', '27.865784', '-80.665189', 0, NULL, 13, 'David Webb (one half)', 'Brazilian peppers, palmetto', 'Yes', NULL, NULL, '2017-07-18 23:19:06', '2017-07-21 18:02:34'),
(50, 'Centerlane Road', '27.856960', '-80.665295', 0, NULL, 25, 'David Webb (one half)', 'Brazilian peppers, palmetto', 'Yes', '$500 from David Webb', NULL, '2017-07-18 23:20:35', '2017-07-21 18:02:01'),
(51, 'Tm Goodwin Road', '27.833139', '-80.665543', 0, NULL, 12, 'Alex Klein', NULL, 'Yes', NULL, 'Should be 25 pallets = 100 hives', '2017-07-18 23:24:53', '2017-07-21 17:56:14'),
(52, 'Tm Goodwin Road', '27.827553', '-80.673762', 0, NULL, 0, 'Alex Klein', NULL, 'Yes', NULL, 'Probable location for 25 pallets = 100 hives', '2017-07-18 23:25:33', '2017-07-21 17:56:47'),
(53, 'Tm Goodwin Road', '27.841298', '-80.672025', 0, NULL, 0, 'Alex Klein', NULL, 'Yes', NULL, 'Probable location for 25 pallets = 100 hives', '2017-07-18 23:26:37', '2017-07-21 18:01:23'),
(54, 'Willowbrook Street', '27.891916', '-80.632126', 0, NULL, 0, NULL, 'Brazilian peppers, cabbage palm', 'Yes', NULL, 'Probable location for 25 pallets = 100 hives', '2017-07-18 23:29:39', '2017-07-21 18:15:01'),
(55, 'Willowbrook Street', '27.890821', '-80.632006', 0, NULL, 25, NULL, 'Brazilian peppers, cabbage palm', 'Yes', NULL, NULL, '2017-07-18 23:32:01', '2017-07-18 23:32:01'),
(56, 'Oakenshaw (The Vossey)', '27.927022', '-80.597670', 0, NULL, 25, NULL, NULL, 'Yes', NULL, NULL, '2017-07-18 23:33:42', '2017-07-18 23:33:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `remember_token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `remember_token`) VALUES
(1, 'beebiz', '$2y$10$yZrk3syXPdYMFX7hV4Htq.vKSDurMgmf0bUEQD1C05P0AobL8vOcu', 'M34xP5xTjQFYgc2Ax9hdc6oFbr6rdloFDKhPvA3SEr3AzlXJiwLhJ3E44isk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
