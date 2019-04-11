CREATE TABLE `scores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `playtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
)
