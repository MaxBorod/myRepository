Use user126_db;

Insert into Product_25_04_22(ProductName, Manufacturer,PRICE)
Values ('iPhone X', 'Apple', 79000),
('Pixel 2', 'Google', 60000);

Delete From Product_25_04_22
Where ProductName='Pixel 2';

Select * From Product_25_04_22