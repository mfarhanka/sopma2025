CREATE TABLE athletes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  age INT,
  sport VARCHAR(50) NOT NULL,
  state_team VARCHAR(50) NOT NULL, -- FTDeaf, SelSDeaf, etc
  bio TEXT,
  photo VARCHAR(255), -- URL or local path to athlete image
  medals_gold INT DEFAULT 0,
  medals_silver INT DEFAULT 0,
  medals_bronze INT DEFAULT 0
);
