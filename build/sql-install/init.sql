-- Build SQL DB

CREATE TABLE user(
    user int PRIMARY KEY AUTO_INCREMENT UNIQUE NOT NULL,
    email text unique,
    password text,
    logged_in boolean,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    last_login_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE shop(
    id int PRIMARY KEY AUTO_INCREMENT UNIQUE NOT NULL,
    name text,
    screens int
);

CREATE TABLE image (
    id int PRIMARY KEY AUTO_INCREMENT UNIQUE NOT NULL,
    file_path text
);

CREATE TABLE screen (
    id int PRIMARY KEY,
    shop_fs int,
    image_fs int,
    screen int,
    FOREIGN KEY (shop_fs) REFERENCES shop(id),
    FOREIGN KEY (image_fs) REFERENCES image(id)
);

-- Creat testuser
INSERT INTO user (email, password, logged_in) VALUES ('testuser@example.com', 'pass123', false);