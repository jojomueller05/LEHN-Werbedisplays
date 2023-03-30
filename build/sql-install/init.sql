-- creating Users table
CREATE TABLE tbl_users (
  user_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  password VARCHAR(60),
  profile_img_url VARCHAR(50),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
-- creating competition posts table
CREATE TABLE tbl_competition_posts (
  post_id INT UNSIGNED PRIMARY KEY,
  user_id INT UNSIGNED,
  title VARCHAR(100),
  location VARCHAR(100),
  diszipline VARCHAR(100),
  rank INT UNSIGNED,
  competition_participant INT UNSIGNED,
  content TEXT,
  created_at TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES tbl_users(user_id)
);
-- creating training posts table
CREATE TABLE tbl_training_posts (
  post_id INT UNSIGNED PRIMARY KEY,
  user_id INT UNSIGNED,
  title VARCHAR(100),
  location VARCHAR(100),
  diszipline VARCHAR(100),
  content TEXT,
  created_at TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES tbl_users(user_id)
);

-- creating test user
INSERT INTO tbl_users (firstname, lastname, email, password, profile_img_url)
VALUES ('Max', 'Mustermann', 'max.mustermann@example.com', 'geheimespasswort', 'img/profile.jpg');