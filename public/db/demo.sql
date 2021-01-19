CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2;

--
-- Dumping data for table `users`
--
-- admin/admin
INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `date_added`) VALUES
(1, 'Admin', 'PHP', 'admin@admin.com', '$2y$10$QCvJcIBCaZNSuCQDFFFk8.WW9aZ4zpXccyLg7ev3aDiMGNjSaT.Dq', '2021-01-18 18:00:00');