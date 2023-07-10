CREATE USER 'deba'@'localhost' IDENTIFIED BY 'root';
GRANT ALL PRIVILEGES ON *.* TO 'deba'@'localhost';
FLUSH PRIVILEGES;

CREATE DATABASE final_exam;
USE final_exam;

CREATE TABLE user(
    id_user INTEGER PRIMARY KEY AUTO_INCREMENT,
    user_level INTEGER DEFAULT 5,
    username VARCHAR(200),
    email VARCHAR(200),
    firstname VARCHAR(200),
    lastname VARCHAR(200),
    phone VARCHAR(50),
    password VARCHAR(200)
    );

INSERT INTO user(username, user_level, email, firstname, lastname, phone, password) VALUES('Deba', 0, 'anthony@gmail.com', 'Arimalala', 'Anthony', '+261 346183296', 'anthony');
