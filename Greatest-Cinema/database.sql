SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


--
-- Database: prototype1
--

-- --------------------------------------------------------

--
-- Table structure for table users
--

CREATE TABLE IF NOT EXISTS user (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  email varchar(150) NOT NULL,
  password varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO user (email, password) VALUES ('admin@gmail.com', 'admin');

CREATE TABLE IF NOT EXISTS tickets (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  email varchar(150) NOT NULL,
  movie varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




