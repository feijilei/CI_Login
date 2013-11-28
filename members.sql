SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(24) NOT NULL,
  `password` varchar(64) NOT NULL,
  `active` int(1) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `email` varchar(60) NOT NULL,
  `full_name` varchar(65) NOT NULL,
  `birthday` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=68 ;

INSERT INTO `members` (`id`, `user`, `password`, `active`, `sex`, `email`, `full_name`, `birthday`) VALUES
(61, 'kutalia', '3e3fcb004b8f83a252ee131d854b2cd99f7a51f7', 0, 'M', 'kutaliatato@gmail.com', 'Merabi Kutalia', '1993-10-01');

