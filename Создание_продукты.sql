

use user126_db;
Create Table Product_25_04
(
 Id INT IDENTITY PRIMARY KEY,
 ProductName NVARCHAR(30) NOT NULL,
 Manufacturer NVARCHAR(30) NOT NULL,
 ProductCount INT DEFAULT 0,
 PRICE MONEY NOT NULL
);