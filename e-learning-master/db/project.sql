SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `admin_info` (
  `UserName` varchar(30) NOT NULL DEFAULT '',
  `Password` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `admin_info` (`UserName`, `Password`) VALUES
('Admin', 'admin'),
('root', '1234');



CREATE TABLE `feedback` (
  `Description` varchar(5000) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `hello` (
  `Description` varchar(5000) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `feedback`
  ADD UNIQUE KEY `email` (`email`);


CREATE TABLE `user_info` (
  `User_id` int(12) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Email_id` varchar(40) NOT NULL,
  `UserName` varchar(10) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`UserName`);



ALTER TABLE `feedback`
  ADD UNIQUE KEY `email` (`email`);



ALTER TABLE `user_info`
  ADD PRIMARY KEY (`User_id`),
  ADD UNIQUE KEY `UserName` (`UserName`);


--
ALTER TABLE `user_info`
  MODIFY `User_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

