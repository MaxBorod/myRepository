use user126_db;
go 
Create trigger Products_INSERT
ON Product_25_04
AFTER INSERT
AS
INSERT INTO History (ProductId, Operation)
SELECT Id, '�������� ����� ' + ProductName + '  �����' + Manufacturer
From inserted