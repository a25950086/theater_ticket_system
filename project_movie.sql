-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-01-12 18:48:48
-- 伺服器版本： 10.4.20-MariaDB
-- PHP 版本： 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `project_movie`
--

-- --------------------------------------------------------

--
-- 資料表結構 `auditorium`
--

CREATE TABLE `auditorium` (
  `cName` varchar(20) NOT NULL,
  `aNumber` int(4) NOT NULL,
  `seats` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `cinemas`
--

CREATE TABLE `cinemas` (
  `cName` varchar(20) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `cPhone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `comeout`
--

CREATE TABLE `comeout` (
  `cName` varchar(20) NOT NULL,
  `aNumber` int(4) NOT NULL,
  `mTitle` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `has`
--

CREATE TABLE `has` (
  `cName` varchar(20) NOT NULL,
  `pNumber` int(4) NOT NULL,
  `tNumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `include`
--

CREATE TABLE `include` (
  `mTitle` varchar(20) NOT NULL,
  `mId` varchar(10) NOT NULL,
  `iNumber` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `mId` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mName` varchar(10) NOT NULL,
  `mPhone` int(10) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `movie`
--

CREATE TABLE `movie` (
  `mTitle` varchar(20) NOT NULL,
  `mTime` date NOT NULL,
  `mRating` varchar(4) NOT NULL,
  `mDirector` varchar(20) NOT NULL,
  `mLeading` varchar(40) NOT NULL,
  `mLength` time NOT NULL,
  `mPlot` varchar(200) NOT NULL,
  `mTrailer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

CREATE TABLE `product` (
  `cName` varchar(20) NOT NULL,
  `pNumber` int(4) NOT NULL,
  `pName` varchar(10) NOT NULL,
  `Price` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `transaction`
--

CREATE TABLE `transaction` (
  `mId` varchar(10) NOT NULL,
  `tNumber` int(10) NOT NULL,
  `tTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tPrice` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `transaction_seat`
--

CREATE TABLE `transaction_seat` (
  `mTitle` varchar(20) NOT NULL,
  `mId` varchar(10) NOT NULL,
  `seatNumber` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `auditorium`
--
ALTER TABLE `auditorium`
  ADD KEY `cName` (`cName`),
  ADD KEY `aNumber` (`aNumber`);

--
-- 資料表索引 `cinemas`
--
ALTER TABLE `cinemas`
  ADD PRIMARY KEY (`cName`);

--
-- 資料表索引 `comeout`
--
ALTER TABLE `comeout`
  ADD KEY `cName` (`cName`),
  ADD KEY `aNumber` (`aNumber`),
  ADD KEY `mTitle` (`mTitle`);

--
-- 資料表索引 `has`
--
ALTER TABLE `has`
  ADD KEY `cName` (`cName`),
  ADD KEY `pNumber` (`pNumber`),
  ADD KEY `tNumber` (`tNumber`);

--
-- 資料表索引 `include`
--
ALTER TABLE `include`
  ADD KEY `mTitle` (`mTitle`),
  ADD KEY `mId` (`mId`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mId`);

--
-- 資料表索引 `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`mTitle`);

--
-- 資料表索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pNumber`);

--
-- 資料表索引 `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`tNumber`),
  ADD KEY `mId` (`mId`);

--
-- 資料表索引 `transaction_seat`
--
ALTER TABLE `transaction_seat`
  ADD KEY `mTitle` (`mTitle`),
  ADD KEY `mId` (`mId`);

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `auditorium`
--
ALTER TABLE `auditorium`
  ADD CONSTRAINT `auditorium_ibfk_1` FOREIGN KEY (`cName`) REFERENCES `cinemas` (`cName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `comeout`
--
ALTER TABLE `comeout`
  ADD CONSTRAINT `comeout_ibfk_1` FOREIGN KEY (`cName`) REFERENCES `cinemas` (`cName`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comeout_ibfk_2` FOREIGN KEY (`aNumber`) REFERENCES `auditorium` (`aNumber`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comeout_ibfk_3` FOREIGN KEY (`mTitle`) REFERENCES `movie` (`mTitle`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `has`
--
ALTER TABLE `has`
  ADD CONSTRAINT `has_ibfk_1` FOREIGN KEY (`cName`) REFERENCES `auditorium` (`cName`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `has_ibfk_2` FOREIGN KEY (`pNumber`) REFERENCES `product` (`pNumber`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `has_ibfk_3` FOREIGN KEY (`tNumber`) REFERENCES `transaction` (`tNumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `include`
--
ALTER TABLE `include`
  ADD CONSTRAINT `include_ibfk_1` FOREIGN KEY (`mTitle`) REFERENCES `movie` (`mTitle`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `include_ibfk_2` FOREIGN KEY (`mId`) REFERENCES `member` (`mId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`mId`) REFERENCES `member` (`mId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `transaction_seat`
--
ALTER TABLE `transaction_seat`
  ADD CONSTRAINT `transaction_seat_ibfk_1` FOREIGN KEY (`mTitle`) REFERENCES `movie` (`mTitle`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaction_seat_ibfk_2` FOREIGN KEY (`mId`) REFERENCES `member` (`mId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
