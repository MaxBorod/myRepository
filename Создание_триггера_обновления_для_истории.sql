use user126_db;
go
Create trigger Products_UPDATE
ON Product_25_04
AFTER UPDATE
AS
INSERT into  History (ProductId, Operation)
Select Id, 'Обновлён товар' + ProductName + ' фирма ' + Manufacturer
From inserted