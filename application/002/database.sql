
CREATE TABLE `form004` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name`  varchar(250) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `permanent_address` varchar(256) NOT NULL,
  `correspondence_address` varchar(256) NOT NULL,
  `date_of_birth` text NOT NULL,
   `Name_Sponsor` varchar(256) NOT NULL,
     `Address_Sponsor` varchar(256) NOT NULL,
      `University` varchar(256) NOT NULL,
     `Degree` varchar(256) NOT NULL,
     `Course` varchar(256) NOT NULL,
     `date_sch` varchar(256) NOT NULL,
     `Institutions` varchar(256) NOT NULL,
     `Certificate_Obtained` varchar(256) NOT NULL,
       `area_special` varchar(256) NOT NULL,
         `date_inst` varchar(256) NOT NULL,
      `date_first` varchar(256) NOT NULL,
      `higher_degree` varchar(256) NOT NULL,
      `mode_study` varchar(256) NOT NULL,

  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
   PRIMARY KEY (`id`), UNIQUE(`email`)
)