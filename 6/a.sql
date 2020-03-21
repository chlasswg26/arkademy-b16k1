CREATE DATABASE IF NOT EXISTS pos_db;

USE pos_db;

CREATE TABLE IF NOT EXISTS Product (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price CHAR(100) NOT NULL,
    id_category INT NOT NULL,
    id_cashier INT NOT NULL
);

CREATE TABLE IF NOT EXISTS Category (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS Cashier (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);

INSERT INTO Product (name, price, id_category, id_cashier) VALUES ('Latte', 10000, 2, 1);
INSERT INTO Product (name, price, id_category, id_cashier) VALUES ('Cake', 20000, 1, 2);
INSERT INTO Product (name, price, id_category, id_cashier) VALUES ('Brownis', 45000, 1, 3);

INSERT INTO Category (name) VALUES ('Food');
INSERT INTO Category (name) VALUES ('Drink');

INSERT INTO Cashier (name) VALUES ('Pevita Pearce');
INSERT INTO Cashier (name) VALUES ('Raisa Andriana');
INSERT INTO Cashier (name) VALUES ('Ichlas Wardy Gustama');

SELECT cashier.name AS 'cashier', product.name AS 'product', category.name AS 'category', product.price
FROM product
INNER JOIN cashier
ON product.id_cashier = cashier.id
INNER JOIN category
ON product.id_category = category.id