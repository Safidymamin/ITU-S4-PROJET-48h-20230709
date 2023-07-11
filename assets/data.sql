-- CREATE USER 'deba'@'localhost' IDENTIFIED BY 'root';
-- GRANT ALL PRIVILEGES ON *.* TO 'deba'@'localhost';
-- FLUSH PRIVILEGES;

-- CREATE DATABASE final_exam;
-- USE final_exam;

CREATE TABLE user(
    id_user INTEGER PRIMARY KEY AUTO_INCREMENT,
    user_level INTEGER DEFAULT 5,
    username VARCHAR(200),
    email VARCHAR(200),
    firstname VARCHAR(200),
    lastname VARCHAR(200),
    phone VARCHAR(50),
    argent FLOAT,
    password VARCHAR(200)
    );

CREATE TABLE code(
    id_code INTEGER PRIMARY KEY AUTO_INCREMENT,
    code VARCHAR(20),
    valeur FLOAT
    );

CREATE table Etat_user(
    id_etat_user INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_user INTEGER,
    poids FLOAT,
    taille FLOAT,
    FOREIGN KEY (id_user) REFERENCES user(id_user)
);

INSERT INTO user(username, user_level, email, firstname, lastname, phone, argent, password) VALUES('Deba', 0, 'anthony@gmail.com', 'Arimalala', 'Anthony', '+261 346183296', 0, 'anthony');
INSERT INTO user(username, user_level, email, firstname, lastname, phone, argent, password) VALUES('Pousy', 0, 'safidy@gmail.com', 'Mamy', 'Safidy', '+261 346183296', 0, 'safidy');
INSERT INTO user(username, user_level, email, firstname, lastname, phone, argent, password) VALUES('Yoo', 0, 'haingo@gmail.com', 'Adri', 'Haingo', '+261 346183296', 0, 'haingo');

INSERT INTO code(code, valeur) VALUES ('aaaa',3214);
INSERT INTO code(code, valeur) VALUES ('bbbb',3214);
INSERT INTO code(code, valeur) VALUES ('cccc',3214);
INSERT INTO code(code, valeur) VALUES ('dddd',3214);
INSERT INTO code(code, valeur) VALUES ('eeee',3214);
INSERT INTO code(code, valeur) VALUES ('ffff',3214);
INSERT INTO code(code, valeur) VALUES ('gggg',3214);
INSERT INTO code(code, valeur) VALUES ('hhhh',3214);
INSERT INTO code(code, valeur) VALUES ('iiii',3214);
INSERT INTO code(code, valeur) VALUES ('jjjj',3214);
INSERT INTO code(code, valeur) VALUES ('kkkk',3214);
INSERT INTO code(code, valeur) VALUES ('llll',3214);
