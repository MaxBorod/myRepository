use user126_db;
Insert into Product_25_04(ProductName,Manufacturer,ProductCount,PRICE)
Values ('C350', 'Motorola', 10, 2100);
UPDATE Product_25_04 SET Manufacturer= 'Moto'
WHERE Manufacturer= 'Motorola';

Select * From History