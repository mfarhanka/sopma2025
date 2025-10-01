-- Admins Table
CREATE TABLE IF NOT EXISTS admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Sports Table
CREATE TABLE IF NOT EXISTS sports (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    venue VARCHAR(150)
);

-- Results Table
CREATE TABLE IF NOT EXISTS results (
    id INT AUTO_INCREMENT PRIMARY KEY,
    sport_id INT,
    event_name VARCHAR(150) NOT NULL,
    gold VARCHAR(100),
    silver VARCHAR(100),
    bronze VARCHAR(100),
    match_date DATE,
    FOREIGN KEY (sport_id) REFERENCES sports(id) ON DELETE CASCADE
);

-- Medal Tally Table
CREATE TABLE IF NOT EXISTS medal_tally (
    id INT AUTO_INCREMENT PRIMARY KEY,
    state_name VARCHAR(100) NOT NULL,
    gold INT DEFAULT 0,
    silver INT DEFAULT 0,
    bronze INT DEFAULT 0,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

ALTER TABLE medal_tally ADD UNIQUE(state_name);
