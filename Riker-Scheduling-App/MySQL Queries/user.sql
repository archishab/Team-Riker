CREATE TABLE `user` (
 `user_id` int NOT NULL AUTO_INCREMENT,
 `username` varchar(30) NOT NULL,
 `email` varchar(30) NOT NULL,
 `password` varchar(10) NOT NULL,
 PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4
