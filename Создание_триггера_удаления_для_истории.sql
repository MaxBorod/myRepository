Use user126_db;
go
Create trigger Products_DELETE
ON Product_25_04
AFTER DELETE
AS
Insert into History (ProductId, Operation)
Select Id, '�������� �����' + ProductName + ' ����� ' + Manufacturer
From deleted