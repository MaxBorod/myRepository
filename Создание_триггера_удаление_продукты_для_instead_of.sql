use user126_db;
go
Create Trigger Products_Delete_02
ON Product_25_04_22
INStead of delete
as 
update Product_25_04_22
Set IsDeleted = 1
Where ID = (select Id From deleted)