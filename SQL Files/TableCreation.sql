DROP DATABASE IF EXISTS Inventory;
CREATE DATABASE Inventory;
USE Inventory;

DROP TABLE IF EXISTS Product CASCADE;
CREATE TABLE Product
(
    barcode  INT(12)     NOT NULL,
    name     VARCHAR(15) NOT NULL,
    quantity INT,
    PRIMARY KEY (barcode)
);;