USE sportlandija;

CREATE TABLE `videos` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL, 
  `location` varchar(255) NOT NULL,
  `poster` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;