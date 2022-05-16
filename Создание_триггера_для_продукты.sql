Use user126_db;
go
Create Trigger Products_INSERT_UPDATE
ON Product_25_04
AFTER INSERT, UPDATE
AS
UPDATE Product_25_04
SET  Price = Price + Price * 0.38
Where Id = (Select Id From inserted)