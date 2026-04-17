CREATE DATABASE IF NOT EXISTS fruits;
USE fruits;
CREATE TABLE IF NOT EXISTS fruits (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(40) NOT NULL
);
INSERT INTO fruits (name)
VALUES
    ("Līčija"),
    ("Zils banāns"),
    ("Mandarīns");